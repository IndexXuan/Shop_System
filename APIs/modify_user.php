  
  <?php
    include "conn.inc.php";

    $user = htmlspecialchars($_POST['users']); //昵称
    $nick_name = htmlspecialchars($_POST['newnick_name']); //昵称
    $password = htmlspecialchars($_POST['newpassword']); //密码
    $type = htmlspecialchars($_POST['type']); //用户类型
    $ziliao = htmlspecialchars($_POST['newziliao']); //资料
    $status = htmlspecialchars($_POST['fengjin']); //资料
    
    $time=date('Y-m-d H:i:s',strtotime('+8HOUR')); //操作时间

    $update = " update sp_user set nick_name='$nick_name', password = '$password', type = '$type', ziliao = '$ziliao' ,status = '$status' where id = '$user' "; //插入用户
    mysql_query($update);

?>  