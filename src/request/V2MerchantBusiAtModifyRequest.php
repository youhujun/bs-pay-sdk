<?php

namespace  YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 商户AT入驻信息修改
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiAtModifyRequest extends BaseRequest
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
     * AT信息修改列表
     */
    private $atRegList;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_AT_MODIFY;
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

    public function getAtRegList() {
        return $this->atRegList;
    }

    public function setAtRegList($atRegList) {
        $this->atRegList = $atRegList;
    }

}
