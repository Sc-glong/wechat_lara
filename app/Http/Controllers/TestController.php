<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2020-03-06
 * Time: 15:46
 */

namespace App\Http\Controllers;


class TestController
{
	public function __construct ()
	{
	}

	public function test11()
	{
		$a = 1;
		$b = phpinfo();
		echo $a;
		return 111;

	}
}
