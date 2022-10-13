<?php

namespace  YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银联活动报名进度查询
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantActivityUnionpaySignStatusRequest extends BaseRequest
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
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 报名编号与serialNumber二选一
     */
    private $enlistId;
    /**
     * 报名请求流水号报名时传递的reqSysId；与enlistId二选一
     */
    private $serialNumber;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_ACTIVITY_UNIONPAY_SIGN_STATUS;
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

    public function getEnlistId() {
        return $this->enlistId;
    }

    public function setEnlistId($enlistId) {
        $this->enlistId = $enlistId;
    }

    public function getSerialNumber() {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber) {
        $this->serialNumber = $serialNumber;
    }

}
