<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/8/11
 * Time: 12:51
 */

namespace app\api\validate;


class IDMustBePostiveINT extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];
}