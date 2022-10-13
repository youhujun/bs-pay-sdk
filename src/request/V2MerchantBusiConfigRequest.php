<?php

namespace  YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 微信配置
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantBusiConfigRequest extends BaseRequest
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
     * 产品编号
     */
    private $productId;
    /**
     * 汇付客户Id
     */
    private $huifuId;
    /**
     * 业务开通类型
     */
    private $feeType;
    /**
     * 公众号支付Appid条件必填，wxWoaAppId 和 wxAppletAppId两者不能同时为空
     */
    private $wxWoaAppId;
    /**
     * 微信小程序APPID条件必填，wxWoaAppId，wxAppletAppId两者不能同时为空
     */
    private $wxAppletAppId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_BUSI_CONFIG;
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

    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getFeeType() {
        return $this->feeType;
    }

    public function setFeeType($feeType) {
        $this->feeType = $feeType;
    }

    public function getWxWoaAppId() {
        return $this->wxWoaAppId;
    }

    public function setWxWoaAppId($wxWoaAppId) {
        $this->wxWoaAppId = $wxWoaAppId;
    }

    public function getWxAppletAppId() {
        return $this->wxAppletAppId;
    }

    public function setWxAppletAppId($wxAppletAppId) {
        $this->wxAppletAppId = $wxAppletAppId;
    }

}
