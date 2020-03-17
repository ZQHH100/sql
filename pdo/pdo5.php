<?php
//pdo数据 insert
$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=1906', $user, $pass);

//准备sql语句
$sql = "insert into p_users (user_name,email) values (?,?)";

$name = "zhangsan";
$email = "zhangsan@qq.com";
//pdo 预处理
$stmt = $dbh->prepare($sql);
//绑定参数
$stmt->bindParam('1',$name);
$stmt->bindParam('2',$email);
//执行Sql
$stmt->execute();

$id = $dbh->lastInsertId();
var_dump($id);