<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2020-03-04
 * Time: 17:01
 */

namespace App\Http\Controllers;


class wechatController extends Controller
{
	protected $token = "xiaoguo";
	public function __construct ()
	{

	}

	/**
	 * 校验
	 */
	public function valid()
	{
		$param = $this->getParamAll();
		if($this->checkSignature()){
			echo $param['echoStr']; #坑点，看下面的常见坑介绍
			exit; #一定要停止php运行，避免产生不必要的字串符
		}
	}

	/**
	 * @return bool
	 */
	private function checkSignature()
	{
		$param = $this->getParamAll();
		#注意： 这里可以不用检验$_GET参数的有效性，因为微信一定会传相关的参数给你的服务器的，你直接开启验证模式即可。
		$signature = $param['signature'];
		$timestamp = $param['timestamp'];
		$nonce = $param['nonce'];
		$token = $this->token;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		if( $tmpStr === $signature ){
			return true;
		}else{
			return false;
		}
	}

}
