<?php
$mysql_conf = array(
    'host'    => 'mysql', 
    'db'      => 'test', 
    'db_user' => 'root', 
    'db_pwd'  => '123456', 
    );
$pdo = new PDO('mysql:host=' . $mysql_conf['host'] . ';dbname=' . $mysql_conf['db'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);//创建一个pdo对象
print_r( $pdo );


?>
