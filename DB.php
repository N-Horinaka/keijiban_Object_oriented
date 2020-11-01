<?php

class DB{
	//データベースの呼び出し
	public function connect(){
		$pdo=new PDO("mysql:dbname=php_exercise; host=localhost;","root","mysql");
		return $pdo;
	}

	public function insert(){
		return "insert into 4each_keijiban(handlename, title, comments) values (?,?,?)";
	}

	public function select(){
		return "select * from 4each_keijiban";
	}
}
?>