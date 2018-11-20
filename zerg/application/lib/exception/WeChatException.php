<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/9/9
 * Time: 20:59
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 999;

}