<?php
namespace App\ResourcesModule\Presenters;

use Nette;
use Ublaboo\ApiRouter\ApiRoute;



/**
 * API for managing users
 * 
 * @ApiRoute(
 * 	"/api-router/api/users[/<id>]",
 * 	parameters={
 * 		"id"={
 * 			"requirement": "\d+",
 * 			"default": 10
 * 		}
 * 	},
 *  priority=1,
 *  presenter="Resources:Users"
 * )
 */
class ApiRouterPresenter extends Nette\Application\UI\Presenter
{

	public function actionCreate() {
		$this->sendJson(['John' => 'Doe']);
	}


	/**
	 * @ApiRoute(
	 * 	"/api-router/api/users/<id>[/<limit>-<offset>]",
	 *	method="GET",
	 * )
	 */
	public function actionRead() {
		$this->sendJson(['John' => 'Doe']);
	}

}
