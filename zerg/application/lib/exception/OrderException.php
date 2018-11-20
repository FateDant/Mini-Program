<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/9/24
 * Time: 22:20
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;
}