<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易退款查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentScanpayRefundqueryRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 原退款请求日期
     */
    private $orgReqDate;
    /**
     * 原退款全局流水号原退款请求流水号,原退款全局流水号,终端订单号三选一不能都为空；
     */
    private $orgHfSeqId;
    /**
     * 原退款请求流水号原退款请求流水号,原退款全局流水号,终端订单号三选一不能都为空；
     */
    private $orgReqSeqId;
    /**
     * 终端订单号原退款请求流水号,原退款全局流水号,终端订单号三选一不能都为空；
     */
    private $merOrdId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_SCANPAY_REFUNDQUERY;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrgHfSeqId() {
        return $this->orgHfSeqId;
    }

    public function setOrgHfSeqId($orgHfSeqId) {
        $this->orgHfSeqId = $orgHfSeqId;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getMerOrdId() {
        return $this->merOrdId;
    }

    public function setMerOrdId($merOrdId) {
        $this->merOrdId = $merOrdId;
    }

}
