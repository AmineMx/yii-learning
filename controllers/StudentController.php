<?php

namespace app\controllers;

use app\models\StudentForm;

class StudentController extends \yii\web\Controller {
	public $enableCsrfValidation = false;
	public $defaultAction = 'register';

	public function actionRegister() {
		$model = new StudentForm();
		if($model->load($_POST)){
			if($model->validate()){
				return $this->render('display', ['model'=>$model]);
			}
		}
		return $this->render( 'register', [
			'model' => $model
		] );
	}

}
