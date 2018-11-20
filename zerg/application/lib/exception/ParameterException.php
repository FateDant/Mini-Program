<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/8/11
 * Time: 21:47
 */

namespace app\lib\exception;


use think\Exception;

class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = '10000';
}