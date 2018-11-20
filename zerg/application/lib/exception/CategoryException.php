<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/14
 * Time: 15:51
 */

namespace app\lib\exception;


class CategoryException extends BaseException {
    public $code = 404;
    public $msg = '指定类目不存在，请检查参数';
    public $errorCode = 50000;
}