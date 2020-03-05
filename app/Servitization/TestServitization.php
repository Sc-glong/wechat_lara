<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2020-03-05
 * Time: 13:42
 */

namespace App\Servitization;

use App\Libraries\Common;

class TestServitization
{
	protected $common;
	public function __construct ()
	{
		$this->common = app('Common');
	}

	private function commonRequest($method, $param)
	{
		$response = $this->common->request($method, $param);
		$result = json_decode($response, true);
		if (!$result) {
			throw new \ErrorException($response);
		}

		return $result;
	}

	public function getCoursePeriod($param)
	{
		return $this->commonRequest('127.0.0.1:8089/order/getCreditProcess', $param);
	}
}
