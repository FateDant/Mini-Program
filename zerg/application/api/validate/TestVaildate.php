<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/10
 * Time: 17:48
 */

namespace app\api\validate;


use think\Validate;

class TestVaildate extends Validate {
    protected $rule = [
        'name' => 'require|max:10',
        'email'=> 'email'
    ];
}