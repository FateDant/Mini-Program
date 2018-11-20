<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/8/11
 * Time: 15:07
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck() {
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);
        if (!$result) {
            $e = new ParameterException([
                'msg' => $this->error,
                'code' => 400,
                'errorcode' => 10002
            ]);
            $e->msg = $this->error;
            $e->errorCode = 10002;
            throw $e;
        } else {
            return true;
        }
    }

    protected function isPositiveInteger($value, $rule = '', $data = '', $field = '') {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function isMobile($value){
        $rule = '^1(3|4|5|7|8)[0-9]\d{8}$^';
        $result = preg_match($rule,$value);
        if ($result){
            return true;
        }else{
            return false;
        }
    }

    protected function isNotEmpty($value, $rule = '', $data = '', $field = '') {
        if (empty($value)) {
            return false;
        } else {
            return true;
        }
    }

    public function getDataByRule($arrays){
        if (array_key_exists('user_id',$arrays) || array_key_exists('uid',$arrays)){
            throw new ParameterException([
                'msg' => '参数中包含有非法的参数名'
            ]);
        }

        $newArray = [];

        foreach ($this->rule as $key => $value){
            $newArray[$key] = $arrays[$key];
        }
        return $newArray;
    }
}