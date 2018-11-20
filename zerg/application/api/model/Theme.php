<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/13
 * Time: 11:22
 */

namespace app\api\model;


class Theme extends BaseModel {
    protected $hidden = ['delete_time', 'update_time', 'topic_img_id', 'head_img_id'];

    public function topicImage() {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImage() {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }

    public function products() {
        return $this->belongsToMany('Product', 'theme_product', 'product_id', 'theme_id');
    }

    public static function getThemeWithProducts($id) {
        $theme = self::with('products,topicImage,headImage')->find($id);
        return $theme;
    }
}