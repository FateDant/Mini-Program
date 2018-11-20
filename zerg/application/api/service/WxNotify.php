<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/27 0027
 * Time: 下午 5:51
 */

namespace app\api\service;

use app\api\model\Order as OrderModel;
use app\api\model\Product;
use app\api\service\Order as OrderService;
use app\lib\enum\OrderStatusEnum;
use think\Db;
use think\Exception;
use think\Loader;
use think\Log;

//Loader::import('WxPay.WxPay', EXTEND_PATH, '.Api.php');
require_once '../extend/WxPay/WxPay.Api.php';

class WxNotify extends \WxPayNotify
{
    public function NotifyProcess($objData, $config, &$msg)
    {
        $data = $objData->GetValues();

        if ($data['result_code'] == 'SUCCESS') {
            $orderNo = $data['out_trade_no'];
            Db::startTrans();
            try {
                $order = OrderModel::where('order_no', '=', $orderNo)->find();
                if ($order->status == 1) {
                    $service     = new OrderService();
                    $stockStatus = $service->checkOrderStock($order->id);
                    if ($stockStatus['pass']) {
                        $this->updateOrderStatus($order->id, true);
                        $this->reduceStock($stockStatus);
                    } else {
                        $this->updateOrderStatus($order->id, false);
                    }
                }
                Db::commit();
                return true;
            } catch (Exception $e) {
                Db::rollback();
                Log::error($e);
                return false;
            }
        }else{
            return true;
        }
    }

    private function reduceStock($stockStatus)
    {
        foreach ($stockStatus['pStatusArray'] as $singlePstatus) {
            Product::where('id', '=', $singlePstatus['id'])
                ->setDec('stock', $singlePstatus['count']);
        }
    }

    private function updateOrderStatus($orderID, $success)
    {
        $stauts = $success ? OrderStatusEnum::PAID : OrderStatusEnum::PAID_BUT_OUT_OF;
        OrderModel::where('id', '=', $orderID)->update(['status' => $stauts]);
    }
}