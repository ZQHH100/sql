<?php
//pdo 预处理
$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=1906', $user, $pass);
//var_dump($dbh);
//准备sql语句
$id = $_GET['id'];
echo "未处理的参数:".$_GET['id'];echo '<br>';
//pdo 预处理
$stmt = $dbh->prepare("select * from p_users where id= ?");
//绑定参数
$stmt->bindParam(1,$id);
//执行sql语句
$stmt->execute();
//遍历结果
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo '<pre>';print_r($row);echo '</pre>';
    echo "<hr>";
}
