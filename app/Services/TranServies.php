<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2020-03-05
 * Time: 13:52
 */

namespace App\Services;


use App\Servitization\TestServitization;
use App\Servitization\TransactionServitization;

class TranServies
{
	protected $transaction;
	public function __construct (TestServitization $testServitization)
	{
		$this->transaction = $testServitization;
	}

	public function getDataFromTran($param)
	{
		return $this->transaction->getCoursePeriod($param);
	}

}
