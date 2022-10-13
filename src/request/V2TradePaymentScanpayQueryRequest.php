<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 交易查询接口
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentScanpayQueryRequest extends BaseRequest
{

    /**
     * 原机构请求日期
     */
    private $orgReqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 商户订单号商户订单号；线下POS、扫码机具发起的交易
     */
    private $merOrdId;
    /**
     * 交易返回的全局流水号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一
     */
    private $orgHfSeqId;
    /**
     * 原机构请求流水号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一
     */
    private $orgReqSeqId;
    /**
     * 用户账单上的交易订单号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一
     */
    private $outTransId;
    /**
     * 用户账单上的商户订单号org_hf_seq_id，org_req_seq_id，out_trans_id，party_order_id四选一
     */
    private $partyOrderId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_SCANPAY_QUERY;
    }


    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getMerOrdId() {
        return $this->merOrdId;
    }

    public function setMerOrdId($merOrdId) {
        $this->merOrdId = $merOrdId;
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

    public function getOutTransId() {
        return $this->outTransId;
    }

    public function setOutTransId($outTransId) {
        $this->outTransId = $outTransId;
    }

    public function getPartyOrderId() {
        return $this->partyOrderId;
    }

    public function setPartyOrderId($partyOrderId) {
        $this->partyOrderId = $partyOrderId;
    }

}
