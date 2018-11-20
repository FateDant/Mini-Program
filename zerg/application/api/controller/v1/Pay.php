<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/26 0026
 * Time: 上午 9:31
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\WxNotify;
use app\api\validate\IDMustBePostiveINT;
use app\api\service\Pay as PayService;
use app\extra\WxPayConfig;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkexclusivescope' => ['only'=>'getpreorder']
    ];

    public function getPreOrder($id = '')
    {
        (new IDMustBePostiveINT())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }

    public function receiveNotify(){
        //1.检查库存量，超卖
        //2.更新这个订单的status状态
        //3.库存量
        //如果成功处理，我们返回微信成功处理的信息，否则，我们需要返回没有成功处理

        //特点：POST；XML格式；不会携带参数 ?xx；
        $notify = new WxNotify();
        $config = new WxPayConfig();
        $notify->Handle($config);
    }
}