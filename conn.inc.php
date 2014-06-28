<?php
//通用头文件
$link=mysql_connect('localhost','yourname','yourpassword');//连接数据库
mysql_select_db('shop_system'); //选择数据库
session_start();//会话控制开始 此语句前面绝对不可以有输出！！！！！！！！！！！！！！！！！！

//设置php.ini中的session.use_trans_sid = 1或者编译时打开打开了--enable-trans-sid选项 可让session跨页传递！！！

mysql_set_charset('utf8', $link); //设置字符集
require('libs/Smarty.class.php');//引入smarty对象
$smarty=new Smarty();//smarty实例化
