<?php

namespace  YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银联活动商户信息查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantActivityUnionpayMerbaseinfoQueryRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 银联活动商户号
     */
    private $merNo;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ACTIVITY_UNIONPAY_MERBASEINFO_QUERY;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getMerNo() {
        return $this->merNo;
    }

    public function setMerNo($merNo) {
        $this->merNo = $merNo;
    }

}
