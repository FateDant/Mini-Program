<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/13
 * Time: 15:10
 */

namespace app\lib\exception;


class ThemeException extends BaseException {
    public $code = 404;
    public $msg = '指定的主题不存在，前检查主题ID';
    public $errorCode = 30000;
}