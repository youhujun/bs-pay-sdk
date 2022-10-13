<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 电子回单查询
 *
 * @author sdk-generator
 * @Description
 */
class V2TradePaymentGetelectronicreceiptRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 是否展示手续费
     */
    private $showFeemat;
    /**
     * 交易返回的全局流水号交易返回的全局流水号。org_hf_seq_id与（org_req_seq_id、org_req_date、pay_type） 不能同时为空
     */
    private $orgHfSeqId;
    /**
     * 原交易请求日期转换描述:yyyyMMdd
     */
    private $orgReqDate;
    /**
     * 原交易请求流水号org_hf_seq_id与（org_req_seq_id、org_req_date、pay_type） 不能同时为空
     */
    private $orgReqSeqId;
    /**
     * 支付类型BalancePay-余额支付，cashout-取现，QUICK_PAY-快捷支付，ONLINE_PAY-网银，&lt;!--Surrogate-代发，许士通说展示字段不全，先隐藏--&gt;PayConfirm-交易确认
     */
    private $payType;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_PAYMENT_GETELECTRONICRECEIPT;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getShowFeemat() {
        return $this->showFeemat;
    }

    public function setShowFeemat($showFeemat) {
        $this->showFeemat = $showFeemat;
    }

    public function getOrgHfSeqId() {
        return $this->orgHfSeqId;
    }

    public function setOrgHfSeqId($orgHfSeqId) {
        $this->orgHfSeqId = $orgHfSeqId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getPayType() {
        return $this->payType;
    }

    public function setPayType($payType) {
        $this->payType = $payType;
    }

}
