<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/9/23
 * Time: 13:09
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = ['id','delete_time','user_id'];
}