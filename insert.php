<?php

mb_internal_encoding("utf8");

//DB.phpの呼び出し
require "DB.php";

//インスタンス化
$db=new DB();

$pdo= $db->connect();

//prepaerd statement
$stmt = $pdo->prepare( $db->insert() );

$stmt -> bindValue(1, $_POST['handlename']);
$stmt -> bindValue(2, $_POST['title']);
$stmt -> bindValue(3, $_POST['comments']);

$stmt->execute();

$pdo=NULL;


header("Location: http://localhost/keijiban_object_oriented/index.php");
?>