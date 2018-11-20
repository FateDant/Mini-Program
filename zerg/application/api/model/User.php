<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/9/9
 * Time: 19:55
 */

namespace app\api\model;

class User extends BaseModel{
    public function address(){
        return $this->hasOne('UserAddress','user_id','id');
    }

    public static function getByOpenID($openid){
        $user = self::where('openid','=',$openid)->find();
        return $user;
    }
}