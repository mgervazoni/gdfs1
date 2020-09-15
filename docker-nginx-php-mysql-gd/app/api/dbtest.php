<?php

$dsn = 'mysql:host=gd-fs-docker-mysql;port=3306;dbname=gdfs';
$user = 'gdfs';
$password = 'gdsecret';

$db = null;

try {
	$db = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			
} catch (PDOException $e) {
	exit($e->message);
}

$input = $_POST['input'];
$output = $_POST['output'];
$response = $_POST['response'];
$gestor_id = 1;
$bandeira_id = 1;

$sql = "insert into example (message) values (:message)";

$params = [':message' => 'Testing PDO'];

$statement = $db->prepare($sql);

$statement->execute($params);

echo "ok";
