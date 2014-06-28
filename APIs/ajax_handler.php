<?php
    include "../conn.inc.php";

    $optype = (int)htmlspecialchars($_POST['optype']); //操作类型
    $gys = $_POST['gys']; //供应商id
    $num = $_POST['num']; //进货数量
    $weight = $_POST['weight']; //单品重量
    $chengben = $_POST['chengben']; //单品成本
    $shoujia = $_POST['shoujia']; //单品售价
    $name = trim($_POST['name']); //商品名
    $tiaoma = trim($_POST['tiaoma']); //条码
    $pinpai = trim($_POST['pinpai']); //品牌
    $gtype = $_POST['gtype']; //商品类型
    $beizhu = trim($_POST['beizhu']); //备注
    $uid = $_POST['uid']; //操作人id  

    $time=date('Y-m-d H:i:s',strtotime('+8HOUR')); //操作时间
    $select = "select * from sp_goods where goods_name = '$name' and fromuid = '$gys' limit 1"; //名称相同且供应商相同，视作同一商品
    $slresult = mysql_query($select);
    $arr = mysql_fetch_array($slresult);
    //print_r($arr);
    $gid = $arr['id']; //商品id
    //$nums = mysql_num_rows($slresult);
    if( $gid != '' ) { //已有此商品
        $updateFlag = true;
    } else { //是新商品，则gid为当前gid+1，作为新的goods id
        $newgid = "select count(*) As gid from sp_goods where 1";
        $gidRes = mysql_query($newgid);
        $gidArr = mysql_fetch_array($gidRes);
        $gid = $gidArr['gid']+1;
        $updateFlag = false;
    }

    if ( $optype == 1 ) { //采购
        $insert = " insert into sp_op_goods values(null, '$gid', 1, null, '$num', '$uid', '$time', '$beizhu') "; //插入操作记录
        mysql_query($insert);
        if ( $updateFlag ) { //判断插入新品还是更新已有商品
            $sql = " UPDATE `shop_system`.`sp_goods` SET `num` = num +'$num', `ziliao` = '$beizhu' WHERE `sp_goods`.`id` = '$gid';";
        } else {
            echo $sql = " insert into sp_goods values(null, '$name', '$uid', '$gys', '$num', '$time', '$beizhu', '$gtype', '$tiaoma', '$pinpai', '$weight', '$chengben', '$shoujia','20000', '50') ";
        }
    } else if ( $optype == 2 ) { //进货
        $insert = " insert into sp_op_goods values(null, '$gid', 2, null, '$num', '$uid', '$time', '$beizhu') "; //插入操作记录
        mysql_query($insert);
        if ( $updateFlag ) { //判断插入新品还是更新已有商品
            $sql = " UPDATE `shop_system`.`sp_goods` SET `num` = num +'$num', `ziliao` = '$beizhu' WHERE `sp_goods`.`id` = '$gid';";
        } else {
            $sql = " insert into sp_goods values(null, '$name', '$uid', '$gys', '$num', '$time', '$beizhu', '$gtype', '$tiaoma', '$pinpai', '$weight', '$chengben', '$shoujia','20000', '50') ";
        }
    } else if ( $optype == 3 ) { //采购退货
        $insert = " insert into sp_op_goods values(null, '$gid', 3, null, '$num', '$uid', '$time', '$beizhu') "; //插入操作记录
        mysql_query($insert);
        if ( $updateFlag ) { //判断插入新品还是更新已有商品
            $sql = " UPDATE `shop_system`.`sp_goods` SET `num` = num -'$num', `ziliao` = '$beizhu' WHERE `sp_goods`.`id` = '$gid';";
        } else {
            $sql = " insert into sp_goods values(null, '$name', '$uid', '$gys', '$num', '$time', '$beizhu', '$gtype', '$tiaoma', '$pinpai', '$weight', '$chengben', '$shoujia','20000', '50') ";
        }
    }  else if ( $optype == 4 ) { //销售 
        $check = "select num from sp_goods where id = '$gid' ";
        $checkRes = mysql_query($check);
        $checkArr = mysql_fetch_array($checkRes);
        if ( $checkArr[0] < $num ) { echo "库存不足";return; }
        $insert = " insert into sp_op_goods values(null, '$gid', 4, null, '$num', '$uid', '$time', '$beizhu') "; //插入操作记录
        mysql_query($insert);
        if ( $updateFlag ) { //判断插入新品还是更新已有商品
            $sql = " UPDATE `shop_system`.`sp_goods` SET `num` = num -'$num', `ziliao` = '$beizhu' WHERE `sp_goods`.`id` = '$gid';";
        } else {
            $sql = " insert into sp_goods values(null, '$name', '$uid', '$gys', '$num', '$time', '$beizhu', '$gtype', '$tiaoma', '$pinpai', '$weight', '$chengben', '$shoujia','20000', '50') ";
        }
    } else if ( $optype == 5 ) { //销售退货
        $insert = " insert into sp_op_goods values(null, '$gid', 5, null, '$num', '$uid', '$time', '$beizhu') "; //插入操作记录
        mysql_query($insert);
        if ( $updateFlag ) { //判断插入新品还是更新已有商品
            $sql = " UPDATE `shop_system`.`sp_goods` SET `num` = num -'$num', `ziliao` = '$beizhu' WHERE `sp_goods`.`id` = '$gid';";
        } else {
            $sql = " insert into sp_goods values(null, '$name', '$uid', '$gys', '$num', '$time', '$beizhu', '$gtype', '$tiaoma', '$pinpai', '$weight', '$chengben', '$shoujia','20000', '50') ";
        }
    } else {
        echo "操作类型出错!";
    }        

    $query = mysql_query($sql);
    if($query) {
        echo '操作成功';
    } else {
        echo "出错了!!!";
    }


?>