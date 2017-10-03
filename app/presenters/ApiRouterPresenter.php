<?php


namespace App\Presenters;


class ApiRouterPresenter extends \Nette\Application\UI\Presenter
{

	public function actionCreate() {
		$this->sendJson(['John' => 'Doe']);
	}


	public function actionRead() {
		$this->sendJson(['John' => 'Doe']);
	}

}