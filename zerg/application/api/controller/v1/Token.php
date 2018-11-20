<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/9 0009
 * Time: 下午 4:58
 */

namespace app\api\controller\v1;


use app\api\service\AppToken;
use app\api\service\UserToken;
use app\api\validate\AppTokenGet;
use app\api\validate\TokenGet;
use app\api\service\Token as TokenServer;
use app\lib\exception\ParameterException;

class Token
{
    public function getToken($code=''){
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token' => $token
        ];
    }

    public function getAppToken($ac='', $se=''){
        (new AppTokenGet())->goCheck();
        $app = new AppToken();
        $token = $app->get($ac, $se);
        return [
            'token' => $token
        ];
    }

    public function verifyToken($token=''){
        if (!$token){
            throw new ParameterException([
                'token不允许为空'
            ]);
        }
        $valid = TokenServer::verifyToken($token);
        return [
            'isValid' => $valid
        ];
    }
}