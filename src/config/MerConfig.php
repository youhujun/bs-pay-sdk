<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: YouHuJun
 * @Date: 2022-10-12 17:26:43
 * @LastEditors: YouHuJun
 * @LastEditTime: 2022-10-13 16:16:06
 */
namespace YouHuJun\BsPaySdk\config;

class MerConfig {

    /**
     * @var string 商户rsa私钥，用来进行对斗拱接口调用的请求数据加签
     */
    public $rsa_merch_private_key = '';

    /**
     * @var string 商户汇付rsa公钥，用来进行对斗拱接口应答数据的验签，以及部分请求数据非对称加密
     */
	public $rsa_huifu_public_key = '';
	
	public $product_id = '';
	
	public $sys_id = '';

    public $huifu_id = '';
}