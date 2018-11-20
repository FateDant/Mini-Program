<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/8/11
 * Time: 18:44
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = '40000';
}