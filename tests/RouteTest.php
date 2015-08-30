<?php

/**
 * Class RouteTest
 */
class RouteTest extends TestCase {

	/**
	 *
     */
	public function getHome()
	{
		$response = $this->call('GET', '/');
		$this->assertEquals(200, $response->getStatusCode());
	}

	/**
	 *
     */
	public function getMacros()
	{
		$response = $this->call('GET', '/macros');
		$this->assertEquals(200, $response->getStatusCode());
	}
}
