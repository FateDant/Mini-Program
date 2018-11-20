<?php 
return array (
  'get' => 
  array (
    'captcha/[:id]' => 
    array (
      'rule' => 'captcha/[:id]',
      'route' => '\think\captcha\CaptchaController@index',
      'var' => 
      array (
        'id' => 2,
      ),
      'option' => 
      array (
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/banner/:id' => 
    array (
      'rule' => 'api/:version/banner/:id',
      'route' => 'api/:version.Banner/getBanner',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/theme' => 
    array (
      'rule' => 'api/:version/theme',
      'route' => 'api/:version.Theme/getSimpleList',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/theme/:id' => 
    array (
      'rule' => 'api/:version/theme/:id',
      'route' => 'api/:version.Theme/getComplexOne',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/product' => true,
    'api/:version/category/all' => 
    array (
      'rule' => 'api/:version/category/all',
      'route' => 'api/:version.Category/getAllCategory',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/address' => 
    array (
      'rule' => 'api/:version/address',
      'route' => 'api/:version.Address/getUserAddress',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/order/:id' => 
    array (
      'rule' => 'api/:version/order/:id',
      'route' => 'api/:version.Order/getDetail',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
        'id' => '\d+',
      ),
    ),
    'api/:version/order/by_user' => 
    array (
      'rule' => 'api/:version/order/by_user',
      'route' => 'api/:version.Order/getSummaryByUser',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/order/paginate' => 
    array (
      'rule' => 'api/:version/order/paginate',
      'route' => 'api/:version.Order/getSummary',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
  ),
  'post' => 
  array (
    'api/:version/product' => true,
    'api/:version/token/user' => 
    array (
      'rule' => 'api/:version/token/user',
      'route' => 'api/:version.Token/getToken',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/token/verify' => 
    array (
      'rule' => 'api/:version/token/verify',
      'route' => 'api/:version.Token/verifyToken',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/token/app' => 
    array (
      'rule' => 'api/:version/token/app',
      'route' => 'api/:version.Token/getAppToken',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/address' => 
    array (
      'rule' => 'api/:version/address',
      'route' => 'api/:version.Address/createOrUpdateAddress',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/order' => 
    array (
      'rule' => 'api/:version/order',
      'route' => 'api/:version.Order/placeOrder',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/pay/pre_order' => 
    array (
      'rule' => 'api/:version/pay/pre_order',
      'route' => 'api/:version.Pay/getPreOrder',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/pay/notify' => 
    array (
      'rule' => 'api/:version/pay/notify',
      'route' => 'api/:version.pay/receiveNotify',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
  ),
  'put' => 
  array (
    'api/:version/product' => true,
    'api/:version/order/delivery' => 
    array (
      'rule' => 'api/:version/order/delivery',
      'route' => 'api/:version.Order/delivery',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
  ),
  'delete' => 
  array (
    'api/:version/product' => true,
  ),
  'patch' => 
  array (
    'api/:version/product' => true,
  ),
  'head' => 
  array (
    'api/:version/product' => true,
  ),
  'options' => 
  array (
    'api/:version/product' => true,
  ),
  '*' => 
  array (
    'api/:version/product' => 
    array (
      'rule' => 
      array (
        0 => 
        array (
          'rule' => 'by_category',
          'route' => 'api/:version.Product/getAllInCategory',
          'var' => 
          array (
          ),
          'option' => 
          array (
            'complete_match' => true,
            'method' => 'get',
          ),
          'pattern' => 
          array (
          ),
        ),
        1 => 
        array (
          'rule' => ':id',
          'route' => 'api/:version.Product/getOne',
          'var' => 
          array (
            'id' => 1,
          ),
          'option' => 
          array (
            'complete_match' => true,
            'method' => 'get',
          ),
          'pattern' => 
          array (
            'id' => '\d+',
          ),
        ),
        2 => 
        array (
          'rule' => 'recent',
          'route' => 'api/:version.Product/getRecent',
          'var' => 
          array (
          ),
          'option' => 
          array (
            'complete_match' => true,
            'method' => 'get',
          ),
          'pattern' => 
          array (
          ),
        ),
      ),
      'route' => '',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
      ),
      'pattern' => 
      array (
      ),
    ),
  ),
  'alias' => 
  array (
  ),
  'domain' => 
  array (
  ),
  'pattern' => 
  array (
  ),
  'name' => 
  array (
    '\think\captcha\captchacontroller@index' => 
    array (
      0 => 
      array (
        0 => 'captcha/[:id]',
        1 => 
        array (
          'id' => 2,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.banner/getbanner' => 
    array (
      0 => 
      array (
        0 => 'api/:version/banner/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.theme/getsimplelist' => 
    array (
      0 => 
      array (
        0 => 'api/:version/theme',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.theme/getcomplexone' => 
    array (
      0 => 
      array (
        0 => 'api/:version/theme/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.product/getallincategory' => 
    array (
      0 => 
      array (
        0 => 'api/:version/product/by_category',
        1 => 
        array (
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.product/getone' => 
    array (
      0 => 
      array (
        0 => 'api/:version/product/:id',
        1 => 
        array (
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.product/getrecent' => 
    array (
      0 => 
      array (
        0 => 'api/:version/product/recent',
        1 => 
        array (
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.category/getallcategory' => 
    array (
      0 => 
      array (
        0 => 'api/:version/category/all',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.token/gettoken' => 
    array (
      0 => 
      array (
        0 => 'api/:version/token/user',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.token/verifytoken' => 
    array (
      0 => 
      array (
        0 => 'api/:version/token/verify',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.token/getapptoken' => 
    array (
      0 => 
      array (
        0 => 'api/:version/token/app',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.address/createorupdateaddress' => 
    array (
      0 => 
      array (
        0 => 'api/:version/address',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.address/getuseraddress' => 
    array (
      0 => 
      array (
        0 => 'api/:version/address',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.order/placeorder' => 
    array (
      0 => 
      array (
        0 => 'api/:version/order',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.order/getdetail' => 
    array (
      0 => 
      array (
        0 => 'api/:version/order/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.order/getsummarybyuser' => 
    array (
      0 => 
      array (
        0 => 'api/:version/order/by_user',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.order/getsummary' => 
    array (
      0 => 
      array (
        0 => 'api/:version/order/paginate',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.order/delivery' => 
    array (
      0 => 
      array (
        0 => 'api/:version/order/delivery',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.pay/getpreorder' => 
    array (
      0 => 
      array (
        0 => 'api/:version/pay/pre_order',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.pay/receivenotify' => 
    array (
      0 => 
      array (
        0 => 'api/:version/pay/notify',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
  ),
);