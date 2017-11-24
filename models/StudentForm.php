<?php
/**
 * Project :yii-learning
 * User: Amine
 * Date: 24/11/2017
 * Time: 15:36
 *
 **/

namespace app\models;


use yii\base\Model;

class StudentForm extends Model {
	public $firstname;
	public $lastname;
	public $password;
	public $email;
	public $age;

	public function rules() {
		return [
			[ [ 'firstname', 'lastname', ], 'string', 'length' => [ 2, 20 ] ],
			[ 'firstname', 'required' ],
			[ 'password', 'string', 'length' => [ 6 ] ],
			[ 'email', 'email' ],
			[ 'age', 'integer', 'min' => 17, 'message' => 'Only plus of 17' ]
		];
	}

	public function attributeLabels() {
		return [
			'firstname' => 'Nom',
			'lastname'  => 'Prenom',

		];
	}
}