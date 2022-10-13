<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: YouHuJun
 * @Date: 2022-10-13 15:58:06
 * @LastEditors: YouHuJun
 * @LastEditTime: 2022-10-13 16:17:55
 */

 require_once __DIR__."/../vendor/autoload.php";

 ini_set('date.timezone', 'Asia/Shanghai');
if (!defined("SDK_BASE")) {
    define("SDK_BASE", __DIR__);
}

# sdk 版本号
if (!defined("SDK_VERSION")) {
    define("SDK_VERSION", "php#v2.0.0");
}

# api 接口版本号
if (!defined("API_VERSION")) {
    define("API_VERSION", "2.0.0");
}

# 设置是否调试模式
if (!defined("DEBUG")) {
    define("DEBUG", false);
}

# 设置调试日志路径
if (!defined("LOG")) {
    define("LOG", dirname(SDK_BASE) . "/log");
}

# 设置生产模式
if (!defined("PROD_MODE")) {
    define("PROD_MODE", true);
}

use YouHuJun\BsPaySdk\core\BsPay;

use YouHuJun\BsPaySdk\request\V2MerchantBusiOpenRequest;
use YouHuJun\BsPaySdk\core\BsPayClient;

BsPay::init('./config/config.json');


$request = new V2MerchantBusiOpenRequest();

$param = array(
"funcCode" => $request->getFunctionCode(),
"params" => array(
    "req_seq_id" => date("YmdHis").mt_rand(),
    "req_date" => date("Ymd"),
    "huifu_id" => "6666000104778898",
    "upper_huifu_id" => "6666000003080000",
    "balance_pay_config" => json_encode(array(
        "fee_rate" =>"2",
        "fee_fix_amt" =>"1",
    ),JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES),
));

$client = new BsPayClient();

$result = $client->postRequest($param);

// p($result);die;

    if (!$result || $result->isError())
    {  //失败处理
        p($result -> getErrorInfo());
    }
    else
    {    //成功处理
        p($result);
    }

if(function_exists('p'))
{
    function p($param)
    {
        echo "<br/>";
        print_r($param);
        echo "<br/>";
    }
}