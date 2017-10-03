<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

use Ublaboo\ApiRouter\ApiRoute;



class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;

		$router = new RouteList;

		$router[] = new ApiRoute('/api-router/api/users[/<id>]', 'Resources:Users', [
			'parameters' => [
				'id' => ['requirement' => '\d+', 'default' => 10]
			],
			'priority' => 1
		]);

		$router[] = new ApiRoute('/api-router/api/users/<id>[/<foo>-<bar>]', 'Resources:Users', [
			'parameters' => [
				'id' => ['requirement' => '\d+']
			],
			'priority' => 1
		]);

		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}

}
