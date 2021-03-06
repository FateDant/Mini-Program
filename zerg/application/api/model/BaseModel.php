<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/13
 * Time: 10:28
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model {

    protected function prefixImgUrl($value, $data) {
        $finaUrl = $value;
        if ($data['from'] == 1) {
            $finaUrl = config('setting.img_prefix') . $value;
        }
        return $finaUrl;
    }
}