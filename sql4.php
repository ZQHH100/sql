<?php
$mysqli = new mysqli("localhost", "root", "root", "1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "连接成功";echo '<br>';echo '<br>';

//$name= "zqhh";
$name1 = $_GET['name'];
echo "未经处理的参数:".$name;echo '<br>';
$name2=addslashes($name1);
//$name2=htmlentities($name1);
echo "未经处理的参数:".$name2;echo '<br>';
//$sql = 'select * from p_users where user_name="'.$name.'"';
$sql = "select * from p_users where user_name='{$name2}'";
echo 'sql: '.$sql;echo '<br>';

$res = $mysqli->query($sql);
echo __LINE__;echo '<br>';
while($row = $res->fetch_assoc()){
    var_dump($row);
    echo '<pre>';print_r($row);echo '</pre>';
}

