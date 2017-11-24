<?php

namespace app\controllers;

class StudentController extends \yii\web\Controller {
	public $enableCsrfValidation = false;
	public $defaultAction = 'register';

	public function actionRegister() {
		if ( isset( $_POST['first_name'] ) && $_POST['first_name'] != '' ) {
			$firstname = $_POST['first_name'];

			return $this->render( 'display', [
				'name' => $firstname
			] );
		}

		return $this->render( 'register' );
	}

}
