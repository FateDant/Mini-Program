<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/13
 * Time: 11:41
 */

namespace app\api\validate;


class IDCollection extends BaseValidate {
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'ids参数必须是以逗号分隔的多个正整数'
    ];

    //ids = id1,id2...
    protected function checkIDs($value){
        $values = explode(',',$value);
        if (empty($values)){
            return false;
        }
        foreach ($values as $id){
            if (!$this -> isPositiveInteger($id)){
                return false;
            }
        }
        return true;
    }
}