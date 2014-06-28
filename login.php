<?php
include "conn.inc.php";
if ( $_SESSION["isLogin"] == 1 ) { 
	echo "<script>alert('您已经登录')</script>";
	echo "<script>window.location.href='index.php?action=login'</script>";
} else {
	$username = addslashes(trim($_POST['username']));
    $password = trim($_POST['password']);
    $check = "select * from sp_user where username = '$username' and password = $password ";
    $result = mysql_query($check);
    $nums = mysql_num_rows($result);
    if( $nums > 0 ) {
	    $sql="select * from sp_user where username = '$username' ";
	    $result = mysql_query($sql);
	    $row = mysql_fetch_array($result);
	    $_SESSION["isLogin"] = 1;
        $_SESSION["uid"] = $row['id'];
	    $_SESSION["nick_name"] = $row['nick_name'];
	    $_SESSION["permission"] = $row['type']; //根据用户类型分配权限
	    $_SESSION["status"] = $row['status']; //状态控制
	    echo "<script>window.location.href='index.php?action=login'</script>";
    } else {
    	echo "<script>alert('不存在的账号或密码错误,请重试!')</script>";
    	echo "<script>window.location.href='index.php?action=login_error'</script>";
    }
}
$smarty->display("index.html");
?>