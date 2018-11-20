<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/13
 * Time: 14:36
 */

namespace app\api\validate;


class Count extends BaseValidate {
    protected $rule=[
        'count' => 'isPositiveInteger|between:1,15'
    ];
}