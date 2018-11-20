<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/13
 * Time: 11:20
 */

namespace app\api\controller\v1;

use app\api\model\Theme as ThemeModel;
use app\api\validate\IDCollection;
use app\api\validate\IDMustBePostiveINT;
use app\lib\exception\ThemeException;

class Theme {
    public function getSimpleList($ids = '') {
        (new IDCollection())->goCheck();
        $ids    = explode(',', $ids);
        $result = ThemeModel::with('topicImage,headImage')->select($ids);
        if ($result->isEmpty()){
            throw new ThemeException();
        }
        return $result;
    }

    public function getComplexOne($id){
        (new IDMustBePostiveINT())->goCheck();
        $theme = ThemeModel::getThemeWithProducts($id);
        if (!$theme){
            throw new ThemeException();
        }
        return $theme;
    }
}