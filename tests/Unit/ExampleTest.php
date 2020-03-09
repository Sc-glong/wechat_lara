<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

	/**
	 * @test
	 */
    public function something()
	{
		$this->assertTrue(true,"this should realy work");
	}
}
