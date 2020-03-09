<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2020-03-06
 * Time: 11:35
 */

namespace Tests\Unit;

use Tests\TestCase;
class MultipleDependenciesTest extends TestCase
{
	public function testProducerFirst()
	{
		$this->assertTrue(true);
		return 'first';
	}

	public function testProducerSecond()
	{
		$this->assertTrue(true);
		return 'second';
	}

	/**
	* @depends testProducerFirst
	* @depends testProducerSecond
	*/
	public function testConsumer($a, $b)
	{
		$this->assertSame('first', $a);
		$this->assertSame('second', $b);
		print 'haha1111';
	}

}
