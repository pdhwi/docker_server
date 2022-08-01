<?php  
   $redis = new Redis(); 
   $redis->connect('127.0.0.1', 6379); //连接Redis
   $redis->auth('mypasswords123sdfeak'); //密码验证
   print_r( $redis );
   $redis->select(0);//选择数据库0
   $redis->set( "testKey" , "Hello hwi - Redis"); //设置测试key
   $a = $redis->get("testKey");//输出value
	var_dump( $a );
?>