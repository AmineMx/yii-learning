<?php
/**
 * Project :yii-learning
 * User: Amine
 * Date: 24/11/2017
 * Time: 10:40
 *
 **/

namespace app\controllers;


use yii\web\Controller;

class PostController  extends Controller {
	public function actionShow(){
		return $this->render('show');
	}
}