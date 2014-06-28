<?php
    include "../conn.inc.php";
    
    $caiwu_type = $_GET['caiwu_type']; //查询类型
    $starttime = $_GET['starttime']; //起始时间
    $endtime = $_GET['endtime']; //结束时间

    if($caiwu_type == 1 || $caiwu_type == 2 ) { //采购、进货

    	$GXmoney = "select A.goods_name,sum(B.num*A.chengben) from sp_op_goods B,sp_goods A where (B.op = '1' or B.op = '2') and (A.id = B.gid) and (optime between '$starttime' and '$endtime') group by A.id";
    	$GXmoneyRes = mysql_query($GXmoney);
    	$listgxm = array();
    	while( $list = mysql_fetch_row($GXmoneyRes) ) {
    	    $listgxm[] = $list;
    	}
    	for($i = 0; $i < count($listgxm); $i++) {
    	  for($j = 0; $j < count($listgxm[$i]); $j++) {
    	    echo $listgxm[$i][$j]." ";
    	  }
    	}

    } else if($caiwu_type == 3) { //采购退货

    	$GXmoney = "select A.goods_name,sum(B.num*A.chengben) from sp_op_goods B,sp_goods A where (B.op = '3') and (A.id = B.gid) and (optime between '$starttime' and '$endtime') group by A.id";
    	$GXmoneyRes = mysql_query($GXmoney);
    	$listgxm = array();
    	while( $list = mysql_fetch_row($GXmoneyRes) ) {
    	    $listgxm[] = $list;
    	}
    	for($i = 0; $i < count($listgxm); $i++) {
    	  for($j = 0; $j < count($listgxm[$i]); $j++) {
    	    echo $listgxm[$i][$j]." ";
    	  }
    	}

    } else if($caiwu_type == 4) { //销售

    	$GXmoney = "select A.goods_name,sum(B.num*A.shoujia) from sp_op_goods B,sp_goods A where (B.op = '4') and (A.id = B.gid) and (optime between '$starttime' and '$endtime') group by A.id";
    	$GXmoneyRes = mysql_query($GXmoney);
    	$listgxm = array();
    	while( $list = mysql_fetch_row($GXmoneyRes) ) {
    	    $listgxm[] = $list;
    	}
    	for($i = 0; $i < count($listgxm); $i++) {
    	  for($j = 0; $j < count($listgxm[$i]); $j++) {
    	    echo $listgxm[$i][$j]." ";
    	  }
    	}

    } else { //销售退货

    	$GXmoney = "select A.goods_name,sum(B.num*A.shoujia) from sp_op_goods B,sp_goods A where (B.op = '5') and (A.id = B.gid) and (optime between '$starttime' and '$endtime') group by A.id";
    	$GXmoneyRes = mysql_query($GXmoney);
    	$listgxm = array();
    	while( $list = mysql_fetch_row($GXmoneyRes) ) {
    	    $listgxm[] = $list;
    	}
    	for($i = 0; $i < count($listgxm); $i++) {
    	  for($j = 0; $j < count($listgxm[$i]); $j++) {
    	    echo $listgxm[$i][$j]." ";
    	  }
    	}

    }
    

?>