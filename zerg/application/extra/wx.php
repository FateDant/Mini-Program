<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/9/9
 * Time: 20:12
 */
return [
    'app_id' =>'wx09e6079969b160be',
    'app_secret'=>'0c74c9fd40c07aaf1ee328f60e95c0f8',
    'login_url' => 'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',

    //微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?"."grant_type=client_credential&appid=%s&secret=%s",
];