<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 企业用户基本信息开户
 *
 * @author sdk-generator
 * @Description
 */
class V2UserBasicdataEntRequest extends BaseRequest
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
     * 企业用户名称
     */
    private $regName;
    /**
     * 经营简称
     */
    private $shortName;
    /**
     * 营业执照编号
     */
    private $licenseCode;
    /**
     * 证照有效期类型
     */
    private $licenseValidityType;
    /**
     * 证照有效期起始日期
     */
    private $licenseBeginDate;
    /**
     * 证照有效期结束日期日期格式：yyyyMMdd; 非长期有效时必填
     */
    private $licenseEndDate;
    /**
     * 注册地址(省)
     */
    private $regProvId;
    /**
     * 注册地址(市)
     */
    private $regAreaId;
    /**
     * 注册地址(区)
     */
    private $regDistrictId;
    /**
     * 注册地址(详细信息)
     */
    private $regDetail;
    /**
     * 法人姓名
     */
    private $legalName;
    /**
     * 法人证件类型
     */
    private $legalCertType;
    /**
     * 法人证件号码
     */
    private $legalCertNo;
    /**
     * 法人证件有效期类型
     */
    private $legalCertValidityType;
    /**
     * 法人证件有效期开始日期
     */
    private $legalCertBeginDate;
    /**
     * 法人证件有效期截止日期日期格式：yyyyMMdd; 非长期有效时必填，长期有效为空
     */
    private $legalCertEndDate;
    /**
     * 联系人姓名
     */
    private $contactName;
    /**
     * 联系人手机号
     */
    private $contactMobile;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_USER_BASICDATA_ENT;
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

    public function getRegName() {
        return $this->regName;
    }

    public function setRegName($regName) {
        $this->regName = $regName;
    }

    public function getShortName() {
        return $this->shortName;
    }

    public function setShortName($shortName) {
        $this->shortName = $shortName;
    }

    public function getLicenseCode() {
        return $this->licenseCode;
    }

    public function setLicenseCode($licenseCode) {
        $this->licenseCode = $licenseCode;
    }

    public function getLicenseValidityType() {
        return $this->licenseValidityType;
    }

    public function setLicenseValidityType($licenseValidityType) {
        $this->licenseValidityType = $licenseValidityType;
    }

    public function getLicenseBeginDate() {
        return $this->licenseBeginDate;
    }

    public function setLicenseBeginDate($licenseBeginDate) {
        $this->licenseBeginDate = $licenseBeginDate;
    }

    public function getLicenseEndDate() {
        return $this->licenseEndDate;
    }

    public function setLicenseEndDate($licenseEndDate) {
        $this->licenseEndDate = $licenseEndDate;
    }

    public function getRegProvId() {
        return $this->regProvId;
    }

    public function setRegProvId($regProvId) {
        $this->regProvId = $regProvId;
    }

    public function getRegAreaId() {
        return $this->regAreaId;
    }

    public function setRegAreaId($regAreaId) {
        $this->regAreaId = $regAreaId;
    }

    public function getRegDistrictId() {
        return $this->regDistrictId;
    }

    public function setRegDistrictId($regDistrictId) {
        $this->regDistrictId = $regDistrictId;
    }

    public function getRegDetail() {
        return $this->regDetail;
    }

    public function setRegDetail($regDetail) {
        $this->regDetail = $regDetail;
    }

    public function getLegalName() {
        return $this->legalName;
    }

    public function setLegalName($legalName) {
        $this->legalName = $legalName;
    }

    public function getLegalCertType() {
        return $this->legalCertType;
    }

    public function setLegalCertType($legalCertType) {
        $this->legalCertType = $legalCertType;
    }

    public function getLegalCertNo() {
        return $this->legalCertNo;
    }

    public function setLegalCertNo($legalCertNo) {
        $this->legalCertNo = $legalCertNo;
    }

    public function getLegalCertValidityType() {
        return $this->legalCertValidityType;
    }

    public function setLegalCertValidityType($legalCertValidityType) {
        $this->legalCertValidityType = $legalCertValidityType;
    }

    public function getLegalCertBeginDate() {
        return $this->legalCertBeginDate;
    }

    public function setLegalCertBeginDate($legalCertBeginDate) {
        $this->legalCertBeginDate = $legalCertBeginDate;
    }

    public function getLegalCertEndDate() {
        return $this->legalCertEndDate;
    }

    public function setLegalCertEndDate($legalCertEndDate) {
        $this->legalCertEndDate = $legalCertEndDate;
    }

    public function getContactName() {
        return $this->contactName;
    }

    public function setContactName($contactName) {
        $this->contactName = $contactName;
    }

    public function getContactMobile() {
        return $this->contactMobile;
    }

    public function setContactMobile($contactMobile) {
        $this->contactMobile = $contactMobile;
    }

}
