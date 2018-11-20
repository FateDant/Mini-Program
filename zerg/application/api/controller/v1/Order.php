<?php
/**
 * Created by PhpStorm.
 * User: q1327
 * Date: 2018/9/23
 * Time: 19:18
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\model\Order as OrderModel;
use app\api\service\Order as OrderService;
use app\api\service\Token as TokenService;
use app\api\validate\IDMustBePostiveINT;
use app\api\validate\OrederPlace;
use app\api\validate\PagingParameter;
use app\lib\exception\OrderException;
use app\lib\exception\SuccessMessage;

class Order extends BaseController
{
    // 用户在选择商品后，向API提交包含他所选择商品的相关信息
    //API在接收到信息后，需要检查订单相关商品的库存量
    //有库存，把订单数据存入数据库中，下单成功了，返回客户端信息，告诉客户端可以支付
    //调用我们的支付接口，进行支付
    //还需要再次进行库存量检查
    //服务器这边就可以调用微信的支付接口进行支付
    //微信会返回给我们一个支付的结果（异步）
    //成功：也需要进行库存量的检查
    //成功：进行库存量的扣除，失败：返回一个支付失败的结果

    protected $beforeActionList = [
        'checkexclusivescope' => ['only' => 'placeorder'],
        'checkprimaryscope'   => ['only' => 'getdetail,getsummarybyuser']
    ];

    public function getSummaryByUser($page = 1, $size = 15)
    {
        (new PagingParameter())->goCheck();
        $uid          = TokenService::getCurrentUid();
        $pagIngOrders = OrderModel::getSummaryByUser($uid, $page, $size);
        if ($pagIngOrders->isEmpty()) {
            return [
                'data'         => [],
                'current_page' => $pagIngOrders->getCurrentPage()
            ];
        }
        $data = $pagIngOrders->hidden(['snap_items', 'snap_address', 'prepay_id'])->toArray();
        return [
            'data'         => $data,
            'current_page' => $pagIngOrders->getCurrentPage()
        ];
    }

    public function getSummary($page = 1, $size = 20)
    {
        (new PagingParameter())->goCheck();
        $pagingOrders = OrderModel::getSummaryByPage($page, $size);
        if ($pagingOrders->isEmpty()) {
            return [
                'current_page' => $pagingOrders->currentPage(),
                'data'         => []
            ];
        }
        $data = $pagingOrders->hidden(['snap_items', 'snap_address'])->toArray();

        return [
            'current_page' => $pagingOrders->currentPage(),
            'data'         => $data
        ];
    }

    public function getDetail($id)
    {
        (new IDMustBePostiveINT())->goCheck();
        $orderDetail = OrderModel::get($id);
        if (!$orderDetail) {
            throw new OrderException();
        }
        return $orderDetail->hidden(['prepay_id']);
    }

    public function placeOrder()
    {
        (new OrederPlace())->goCheck();
        $products = input('post.products/a');
        $uid      = TokenService::getCurrentUid();

        $order  = new OrderService();
        $status = $order->place($uid, $products);
        return $status;
    }

    public function delivery($id){
        (new IDMustBePostiveINT())->goCheck();
        $order = new OrderService();
        $success = $order->delivery($id);
        if ($success){
            return new SuccessMessage();
        }
    }
}