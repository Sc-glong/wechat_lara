<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2020-03-05
 * Time: 13:49
 */

namespace App\Http\Controllers;


use App\Services\TranServies;

class UseGuzzeController extends Controller
{
	protected $tranServices;
	public function __construct (TranServies $tranServices)
	{
		$this->tranServices = $tranServices;
	}

	public function getDataFromTran()
	{
		$fields = [
			'order_id' => null
		];
		$param = $this->getParamAll($fields);

		return $this->tranServices->getDataFromTran($param);

	}
}
