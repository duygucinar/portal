<?php

namespace console\controllers;
use yii\console\Controller;

class BasicController extends Controller{

	public function actionIndex(){
		$users = \yii::$app->db
			->createCommand('SELECT * FROM user;')
			->queryAll();
			print_r($users);
	}

	public function actionUser(){
	/*	\Yii::$app->db
		->createCommand('INSERT INTO user (email, password_hash) VALUES
		("test3@example.com", "test3");')
		->execute();*/

		\Yii::$app->db
		->createCommand()
		->insert('user', [
		'email' => 'test4@example.com',
		'password_hash' => 'changeme7',
		'username' => 'Test',
		'created_at' => time(),
		'updated_at' => time(),
		'access_token'=> md5(time())
			])
			->execute();
	}

	public function actionUserUpdate(){
		\Yii::$app->db
		->createCommand()
		->update('user', [
		'updated_at' => time()
		], '1 = 1')
		->execute();
	}

	public function actionUserDelete(){
		\Yii::$app->db
		->createCommand()
		->delete('user', 'id = 2')
		->execute();
	}

	public function actionUserBatch(){
		\Yii::$app->db
		->createCommand()
		->batchInsert('user', ['email', 'password_hash', 'username',
		 'created_at', 'updated_at','access_token'],
		[
		['james.franklin@example.com', md5('changeme7'), 'James Franklin', time(), time(),md5(time())],
		['linda.marks@example.com', md5('changeme7'), 'Linda Marks', time(), time(),md5(time())]
		['roger.martin@example.com', md5('changeme7'),'Roger Martin', time(), time(),md5(time())]
		])
		->execute();
	}
	
	

}