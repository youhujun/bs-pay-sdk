<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 手续费试算
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeFeecalcRequest extends BaseRequest
{

    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 交易类型
     */
    private $tradeType;
    /**
     * 交易金额
     */
    private $transAmt;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_FEECALC;
    }


    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
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

    public function getTradeType() {
        return $this->tradeType;
    }

    public function setTradeType($tradeType) {
        $this->tradeType = $tradeType;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

}
