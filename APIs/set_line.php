<?php
    include "../conn.inc.php";

    $gid = htmlspecialchars($_POST['kc_gid']); //商品库存上线设置值
    $up_line = htmlspecialchars($_POST['up_line']); //商品库存上线设置值
    $down_line = htmlspecialchars($_POST['down_line']); //商品库存下线设置值
    
    $time=date('Y-m-d H:i:s',strtotime('+8HOUR')); //操作时间

    $update = " update sp_goods set up_line='$up_line', down_line = '$down_line' where id = '$gid' "; //插入用户
    mysql_query($update);

?>  
