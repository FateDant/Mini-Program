<?php
/**
 * Created by FateDant.
 * User: 哥有辣条
 * Date: 2018/8/14
 * Time: 15:32
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category {
    public function getAllCategory() {
        $catetories = CategoryModel::all([], 'img');
        if ($catetories->isEmpty()) {
            throw new CategoryException();
        }
        return $catetories;
    }
}