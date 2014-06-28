<?php
    include "../conn.inc.php";

    $caiwu_type = htmlspecialchars($_POST['caiwu_type']); //数据
    $shuju = htmlspecialchars($_POST['shuju']); //数据
    
    $time=date('Y-m-d H:i:s',strtotime('+8HOUR')); //操作时间

    $file = fopen('sys_log.txt','a');
    fwrite($file,$caiwu_type == '1' ? '损耗' : '额外收益');               
    fwrite($file," ");               
    fwrite($file,$time);
    fwrite($file," ");               
    fwrite($file,'工号'.$_SESSION['uid']);
    fwrite($file,"\n");
    fclose($file);

?>  
