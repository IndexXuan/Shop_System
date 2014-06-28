<?php
    include "../conn.inc.php";

    $nick_name = htmlspecialchars($_POST['newnick_name']); //昵称
    $username = htmlspecialchars($_POST['newusername']); //用户名
    $password = htmlspecialchars($_POST['newpassword']); //密码
    $type = htmlspecialchars($_POST['type']); //用户类型
    $ziliao = htmlspecialchars($_POST['newziliao']); //资料
    
    $time=date('Y-m-d H:i:s',strtotime('+8HOUR')); //操作时间

    $insert = " insert into sp_user values(null, '$nick_name', '$username', '$password', '$type', '$ziliao', '$time', 1) "; //插入用户
    mysql_query($insert);
    

?>