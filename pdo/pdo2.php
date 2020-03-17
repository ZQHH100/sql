<?php
$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=1906', $user, $pass);
//var_dump($dbh);
//准备sql语句
$sql = "insert into p_users (user_name,email) values ('fyjh','fyjh@qq.com')";

//执行sql语句
$res = $dbh->exec($sql);
$id = $dbh->lastInsertId();
var_dump($res);
echo '自增id:'.$id;