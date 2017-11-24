<?php
/**
 * Project :yii-learning
 * User: Amine
 * Date: 23/11/2017
 * Time: 13:46
 *
 **/

namespace app\controllers;


class UserController extends \yii\web\Controller {
	public function actionIndex() {
		//	return $this->render('')
		return $this->render( 'index' );
	}

	public function actionList() {
		//$this->layout = '/base';

		return $this->render( 'list' );
	}
}