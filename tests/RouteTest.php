<?php

/**
 * Class RouteTest
 */
class RouteTest extends TestCase {

	/**
	 *
     */
	public function testHome()
	{
		$response = $this->call('GET', '/');
		$this->assertEquals(200, $response->getStatusCode());
	}

	/**
	 *
     */
	public function testMacros()
	{
		$response = $this->call('GET', '/macros');
		$this->assertEquals(200, $response->getStatusCode());
	}
}
