<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/13
 * Time: 14:46
 */

namespace app\lib\exception;


class ProductException extends BaseException {
    public $code = 404;
    public $msg = '指定的商品不存在，前检查参数';
    public $errorCode = 20000;
}