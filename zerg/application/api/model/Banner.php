<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/8/11
 * Time: 17:53
 */

namespace app\api\model;

class Banner extends BaseModel
{
    protected $hidden = ['id','update_time','delete_time','news_show'];

    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id){
        $result = self::with(['items','items.img'])->find($id);
        return $result;
    }
}