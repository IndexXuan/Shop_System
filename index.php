<?php
include "conn.inc.php";
//var_dump($_SESSION);
$max = 'select max(num) from sp_goods where 1'; //查找最大可购买量，等同于所有商品最大库存
$maxres = mysql_query($max);
$maxnum = mysql_fetch_array($maxres);
$smarty->assign('max',$maxnum[0]);//最大库存，即最大可买数量*/

//点击注销action=logout 删除会话 注销登陆 有bug 刷新也注销 不知为何。。。后来知道是获取错误，应该用$_GET[] 
if ( $_GET['action'] == "logout" ) {
  $_SESSION['isLogin'] = 0;
  $_SESSION['uid'] = -1;
  $_SESSION['permission'] = -1;
  $_SESSION['status'] = -1;
}

/* ======================资料管理======================= */
//总user资料数组
$sql = ' SELECT * FROM `sp_user` where 1 order by id  ';
$res = mysql_query($sql);
$list1 = array();
while($list = mysql_fetch_array($res)) {
    $list1[] = $list;
}
$smarty->assign('userzl',$list1);//总user资料
//客户资料数组
$khsql = ' SELECT * FROM `sp_user` where type = 1 order by id  ';
$khres = mysql_query($khsql);
$listkh = array();
while($list = mysql_fetch_array($khres)){

/*    switch($list['type']) {
        case 1:
            $list['type'] = '消费者';
            break;
        case 2:
            $list['type'] = '供应商';
            break;
        case 3:
            $list['type'] = '职员';
            break;
        case 4:
            $list['type'] = '采购主管';
            break;            
        case 5:
            $list['type'] = '总经理';
            break; 
    }*/   
    switch($list['status']) {
        case 0:
            $list['status'] = '封禁';
            break;
        case 1:
            $list['status'] = '正常';
            break;
    }
    $listkh[] = $list;
}
//var_dump($listkh);
$smarty->assign('khzl',$listkh);//客户资料

//供应商资料数组
$gyssql = ' SELECT * FROM `sp_user` where type = 2 order by id ';
$gysres = mysql_query($gyssql);
$listgys = array();
while($list = mysql_fetch_array($gysres)){
  
    switch($list['status']) {
        case 0:
            $list['status'] = '封禁';
            break;
        case 1:
            $list['status'] = '正常';
            break;
    }
    $listgys[] = $list;
}
//var_dump($listkh);
$smarty->assign('gyszl',$listgys);//供应商资料

//商品资料数组
$spsql = ' SELECT A.*, B.nick_name , C.nick_name As uname FROM `sp_goods` A, sp_user B,sp_user C  where A.fromuid = B.id and A.uid = C.id order by id desc ';
$spres = mysql_query($spsql);
$listsp = array();
while($list = mysql_fetch_array($spres)){
    $listsp[] = $list;
}
//var_dump($listkh);
$smarty->assign('spzl',$listsp);//商品资料
/* ======================/.资料管理======================= */



/* ======================采销管理======================= */
//操作日志数组
$opsql = ' SELECT * FROM `sp_op_goods` where 1 order by id desc ';
$opres = mysql_query($opsql);
$listop = array();
while( $list = mysql_fetch_array($opres) ) {
    switch($list['op']) {
        case 1:
            $list['op'] = '采购';
            break;
        case 2:
            $list['op'] = '进货';
            break;
        case 3:
            $list['op'] = '采购退货';
            break;   
        case 4:
            $list['op'] = '销售';
            break;
        case 5:
            $list['op'] = '销售退货';
            break;  
    }
    $gid = $list['gid'];
    $select = "select goods_name ,chengben from sp_goods where id = '$gid' limit 1";
    $slresult = mysql_query($select);
    $arr = mysql_fetch_array($slresult);
    $goods_name = $arr['goods_name']; //商品id
    $list['gid'] = $goods_name.'(成本'.$arr['chengben'].'元)';
    $listop[] = $list;
}
//var_dump($listkh);
$smarty->assign('opgoodszl',$listop);//操作日志
/* ======================/.采销管理======================= */



/* ======================销售管理======================= */
//销售数组
/*$xssql = ' SELECT * FROM `sp_op_goods` where op = 4 order by id desc ';
$xsres = mysql_query($xssql);
$listxs = array();
while($list = mysql_fetch_array($xsres)){
    $gid = $list['gid'];
    $select = "select goods_name ,chengben from sp_goods where id = '$gid' limit 1";
    $slresult = mysql_query($select);
    $arr = mysql_fetch_array($slresult);
    $goods_name = $arr['goods_name']; //商品id
    $list['gid'] = $goods_name;
    $listxs[] = $list;
}
$smarty->assign('xszl',$listxs);//销售资料*/
/* ======================/.销售管理======================= */



/* ======================库存管理======================= */
//库存数组
$kcsql = ' SELECT A.*,B.nick_name FROM `sp_goods` A,sp_user B where A.fromuid = B.id order by A.id  ';
$kcres = mysql_query($kcsql);
$listkc = array();
while($list = mysql_fetch_array($kcres)){
/*    switch($list['op']) {
        case 1:
            $list['op'] = '采购';
            break;
        case 2:
            $list['op'] = '进货';
            break;
        case 3:
            $list['op'] = '退货';
            break;   
    }*/
    $strnum = $list['num']; //缓存一下原始数据，避免一些未知错误
    if($strnum <= $list['down_line']) {
        $list['num'] = '<font color="red">'.$strnum.'</font>(少于'.$list['down_line'].'的库存下限)';
    }
    if($strnum >= $list['up_line']) {
        $list['num'] = '<font color="orange">'.$strnum.'</font>(超过了'.$list['up_line'].'的库存上限)';
    }
    $listkc[] = $list;
}
//var_dump($listkh);
$smarty->assign('kcinfo',$listkc);//库存
/* ======================/.库存管理======================= */



/* ======================帐务管理======================= */
$Cmoney = "select sum(B.num*A.chengben) from sp_op_goods B,sp_goods A where (B.op = '1' or B.op = '2') and (A.id = B.gid)";
$CmoneyRes = mysql_query($Cmoney);
$CmoneyArr = mysql_fetch_array($CmoneyRes);
$CmoneyArr[0]; //总进货款
$smarty->assign('Cmoney',$CmoneyArr[0]);

$Xmoney = "select sum(B.num*A.shoujia) from sp_op_goods B,sp_goods A where (B.op = '4') and (A.id = B.gid)";
$XmoneyRes = mysql_query($Xmoney);
$XmoneyArr = mysql_fetch_array($XmoneyRes);
$XmoneyArr[0]; //总销售额
$smarty->assign('Xmoney',$XmoneyArr[0]);

$GCmoney = "select A.goods_name,sum(B.num*A.chengben) from sp_op_goods B,sp_goods A where (B.op = '1' or B.op = '2') and (A.id = B.gid) group by A.id";
$GCmoneyRes = mysql_query($GCmoney);
$listgcm = array();
while( $list = mysql_fetch_array($GCmoneyRes) ) {
    $listgcm[] = $list;
}
//print_r($listgcm);
$smarty->assign('GCmoney',$listgcm); //每种货物进货采购详情

$GXmoney = "select A.goods_name,sum(B.num*A.chengben) from sp_op_goods B,sp_goods A where (B.op = '4') and (A.id = B.gid) group by A.id";
$GXmoneyRes = mysql_query($GXmoney);
$listgxm = array();
while( $list = mysql_fetch_row($GXmoneyRes) ) { //mysql_fetch_row 普通数组，结构更为清晰简单
    $listgxm[] = $list;
}
//print_r($listgxm);
$smarty->assign('GXmoney',$listgxm); //每种货物销售详情
/* ======================/.帐务管理======================= */



/* ======================系统管理======================= */

/* ======================/.系统管理======================= */

//print_r($_SESSION);
//逻辑页面显示
$smarty->display("index.html");
?>