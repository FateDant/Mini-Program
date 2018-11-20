<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/9/23
 * Time: 15:34
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}