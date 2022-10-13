<?php

namespace YouHuJun\BsPaySdk\request;

use YouHuJun\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 注销终端
 *
 * @author sdk-generator
 * @Description
 */
class V2TerminaldeviceDeviceinfoCancelRequest extends BaseRequest
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
     * 终端号
     */
    private $deviceId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TERMINALDEVICE_DEVICEINFO_CANCEL;
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

    public function getDeviceId() {
        return $this->deviceId;
    }

    public function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }

}
