<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/10
 * Time: 16:35
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveINT;
use app\lib\exception\BannerMissException;

class Banner
{
    public function getBanner($id) {
        (new IDMustBePostiveINT())->goCheck();

        $banner = BannerModel::getBannerByID($id);
        if (!$banner){
            throw new BannerMissException();
        }
        return $banner;
    }
}