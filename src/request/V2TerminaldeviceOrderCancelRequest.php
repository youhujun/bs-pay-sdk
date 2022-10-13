<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 终端申请订单取消
 *
 * @author sdk-generator
 * @Description
 */
class V2TerminaldeviceOrderCancelRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 订单号
     */
    private $orderId;
    /**
     * 汇付Id
     */
    private $huifuId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TERMINALDEVICE_ORDER_CANCEL;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

}
