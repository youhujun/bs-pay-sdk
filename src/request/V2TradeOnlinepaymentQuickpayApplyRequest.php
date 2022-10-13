<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 快捷支付申请
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentQuickpayApplyRequest extends BaseRequest
{

    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 订单金额
     */
    private $transAmt;
    /**
     * 绑卡id
     */
    private $cardBindId;
    /**
     * 外部地址
     */
    private $notifyUrl;
    /**
     * 用户客户号
     */
    private $userHuifuId;
    /**
     * 安全信息
     */
    private $riskCheckData;
    /**
     * 设备数据
     */
    private $terminalDeviceData;
    /**
     * 银行扩展字段
     */
    private $extendPayData;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_QUICKPAY_APPLY;
    }


    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getCardBindId() {
        return $this->cardBindId;
    }

    public function setCardBindId($cardBindId) {
        $this->cardBindId = $cardBindId;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getUserHuifuId() {
        return $this->userHuifuId;
    }

    public function setUserHuifuId($userHuifuId) {
        $this->userHuifuId = $userHuifuId;
    }

    public function getRiskCheckData() {
        return $this->riskCheckData;
    }

    public function setRiskCheckData($riskCheckData) {
        $this->riskCheckData = $riskCheckData;
    }

    public function getTerminalDeviceData() {
        return $this->terminalDeviceData;
    }

    public function setTerminalDeviceData($terminalDeviceData) {
        $this->terminalDeviceData = $terminalDeviceData;
    }

    public function getExtendPayData() {
        return $this->extendPayData;
    }

    public function setExtendPayData($extendPayData) {
        $this->extendPayData = $extendPayData;
    }

}
