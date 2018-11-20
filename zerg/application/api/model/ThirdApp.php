<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29 0029
 * Time: 下午 4:55
 */

namespace app\api\model;


class ThirdApp extends BaseModel
{
    public static function check($ac, $se){
        $app = self::where('app_id','=',$ac)->where('app_secret','=',$se)->find();

        return $app;
    }
}