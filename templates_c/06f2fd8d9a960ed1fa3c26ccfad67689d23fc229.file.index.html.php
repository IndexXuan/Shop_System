<?php /* Smarty version Smarty-3.1.14, created on 2014-06-28 06:37:20
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:27949539a7527449db0-88197157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1403937384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27949539a7527449db0-88197157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_539a7527b70c35_32126061',
  'variables' => 
  array (
    'khzl' => 0,
    'vo' => 0,
    'gyszl' => 0,
    'spzl' => 0,
    'max' => 0,
    'opgoodszl' => 0,
    'kcinfo' => 0,
    'userzl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539a7527b70c35_32126061')) {function content_539a7527b70c35_32126061($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" lang="zh-CN"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="zh-CN"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="zh-CN"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="zh-CN"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="zh-CN"><!--<![endif]-->
  <head>
    <title>进销存综合管理系统</title>
    <meta charset='utf-8' />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="Copyright" content="" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="apple-touch-icon" href="" sizes="57x57">
    <!-- iPhone (Retina) -->
    <link rel="apple-touch-icon" href="" sizes="114x114">
    <!-- iPad -->
    <link rel="apple-touch-icon" href="" sizes="72x72">
    <!-- iPad (Retina) -->
    <link rel="apple-touch-icon" href="" sizes="144x144">
    <!-- HTML5 shim and Respond.js, for old IE support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/common/html5.js"></script>
    <script src="js/common/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index0102v3.31.css" />
    <link rel="stylesheet" href="css/xx_layoutframe_v0.1.1.css" />
    <link rel="stylesheet" href="css/datetimepicker.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <!--[if lte IE 6]>
   <link rel="stylesheet" type="text/css" href="css/bootstrap-ie6.min.css">
   <![endif]-->
   <!--[if lte IE 7]>
   <link rel="stylesheet" type="text/css" href="css/ie.css">
   <![endif]-->
   <!--[if lte IE 8]><script>alert("先进的管理系统离不开先进的浏览器，您的具有考古价值的ie旧版本浏览器也该退出历史舞台了(双核浏览器请切换的极速模式~), 专家建议: 使用360安全浏览器！")
   </script> <![endif]-->
   <!--[if lt IE 6]><script>alert("我们已经很努力了，但是您使用的是十几年前的"爷爷"浏览器，实在浏览不了本站，何不升级浏览器获取更好的体验？建议使用360、火狐、chrome等现代浏览器！")
   </script> 
   <![endif]-->
    <style>
    .wpct33 {
      width: 30%;  
    }
    .tac{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <!-- header start -->
    <header class="container100 child_join" style="background:whiteSmoke;border-bottom:5px solid #39cccc;margin-bottom:20px;">
     <!--
     header
        bigbox
            leftbox rightbox
        /bigbox
     /header
     -->
   
     <!-- big box start -->

   
       <div style="max-width:1200px;margin:0 auto;">

        <section class="leftbox area area_block"><!--div不可以？？？-->
        <h1 style="text-shadow:1px 1px 0 #f96,-1px -1px 0 #f96;color:gray;">进销存综合管理系统 By 12267043</h1>
        </section>
         <?php ob_start();?><?php echo $_SESSION['isLogin'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0){?>

        <aside class="rightbox area area_block" style="height:220px;font-size:14px;letter-spacing:0;"><!-- 抵消 child_join 效果 写行内 要不bug... -->
            <div class="sr_hidden" style="width:100%;height:120px;">
            <div class="gap5"></div>
                            <!-- mobile login -->
                            <div id="mobilelog" style="overflow:visible;">
                                <form class="form-horizontal" id="MloginForm" name="loginForm" method="post" action="login.php" onsubmit="return Mlogs('click')">
                                    <input type="text" name="username" id="Mcard_num" style="width:80%;height:30%;" placeholder=" 请输入校园一卡通卡号 " required>
                                    <div class="gap5"></div>
                                    <input type="password" name="cpassword" id="Mcard_pass" style="width:80%;height:30%;" placeholder=" 请输入师大通行证密码 " required>
                                    <div class="gap5"></div>
                                    <input type="submit" name="sub" value="登陆" class="btn btn-danger btn-block" style="width:40%;*background:#f2000d;">
                                </form>
                            </div>
            </div>        
            <div class="sr_only" style="width:100%;height:30%;">
            <div class="gap20"></div>
            <ul class="inline">
                <li>
                    <a href="#myModal" role="button" class="btn btn-success" data-toggle="modal" title="即刻登陆" style="_float:right;_margin-top:20px;">管理登陆</a>               
                </li>
            </ul>
            </div>
 
      <!-- Modal start-->
      <div id="myModal" class="modal hide fade" style="background:WhiteSmoke;text-align:left;padding:10px;font-size:16px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <h4 id="myModalLabel">
            <h5>即刻登录</h5>
            <p>享受极致管理体验</p>
           </h4>
        </div>
    
        <div class="modal-body">
           <form class="form-horizontal" id="loginForm" name="loginForm" method="post" action="login.php" onSubmit="return logs('click')">
             
              <div class="control-group">
                <label class="control-label" for="Lcard_num">账号</label>
                <div class="controls">
                  <input type="text" name="username" id="Lcard_num" style="height:5%;margin-top:3px;margin-right:3px;" required><span id="Lcn">请输入卡号！</span><!-- chrom ie11 input bug 5% height fixed it -->
                </div>
              </div>
        
              <div class="control-group">
                <label class="control-label" for="Lcard_pass">密码</label>
                <div class="controls">
                  <input type="password" name="password" id="Lcard_pass" style="height:5%;margin-top:3px;margin-right:3px;" required><span id="Lcp">请输入密码！</span>
                </div>
             </div>
       
              <div class="control-group">
                <div class="controls">   
                 <input type="hidden" name="hideurl" id="hideurl" value="0">   
                 <input type="submit" name="sub" value="登陆" class="btn btn-danger btn-block" style="margin-left:-90px;height:30px;*background:#f2000d;">
                </div>
             </div>
       
           </form>
        </div>
    
        <div class="modal-footer">
           <p class="pull-left"><a href="http://myu.jsnu.edu.cn/index.portal" target="_blank" title="前往江苏师范大学门户网找回密码">找回密码</a></p><p class="pull-right">进销存综合管理系统</p>
           <div class="accordion" id="accordion2">
           <div class="accordion-group" style="border:none;">
             <div class="accordion-heading">
               <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                 <p style="font-size:12px;margin-top:-3px;*margin-top:-1px;float:left;color:green;">| &nbsp&nbsp&nbsp登录帮助</p>
               </a>
             </div>
             <div id="collapseOne" class="accordion-body collapse" style="border:none;font-size:12px;width:100%;max-height:80px;">
               <div class="accordion-inner alert alert-error" style="float:left;text-align:left;height:60px;">
               info
               </div>
             </div>
           </div>
           </div>
        </div> 
    
      </div>
    <!-- /.Modal end-->
 
            <?php }else{ ?>
            <!-- header rightbox2 start -->
        <aside class="rightbox area area_block" style="*width:45%;height:220px;font-size:14px;letter-spacing:0;"><!---抵消 child_join 效果-->     
            <div style="width:100%;height:28%;">
            <div class="gap20"></div>   
                <ul class="inline">
                    <li>
                      <button class="btn btn-success"><?php echo $_SESSION['nick_name'];?>
 <?php ob_start();?><?php echo $_SESSION['permission'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2>4){?>总经理<?php }?></button><li>
                    <li><a href="#" id="loginOut" class="btn" onClick="cconfirm()" title="公共电脑离开时记得注销">注销</a></li>
                </ul>
            </div>
            <div class="gap5"></div>
            <?php }?>

        </aside>
        <!-- /.header rightbox end -->
    
    </div>
    <!-- /.big box end -->
    </header>
    <!-- /.header end -->



    <!--  main start -->
    <div id="main" class="tac">   
    <?php ob_start();?><?php echo $_SESSION['isLogin'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==0){?>
    <h4>您未登陆，可使用分配给您的账号，登录进行更多查阅与操作!</h4>    
    <?php }?>
    <?php ob_start();?><?php echo $_SESSION['status'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==0){?>
    <h2>账号被管理员封禁，请联系管理寻求解封</h2>
    <div class="gap10"></div>
    <?php }?>

    <div class="tabbable container960">
        <ul class="nav nav-tabs" style="font-weight:bold;font-family:微软雅黑;font-size:16px;background:white;">
            <li class="active">
                <a  href="#one" data-toggle="tab"><i class="icon-picture"></i> <h2 style="font-size:16px;display:inline;line-height:16px;">资料管理</h2>
                </a>
            </li>
            <?php ob_start();?><?php echo $_SESSION['isLogin'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_SESSION['permission'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp5==1&&$_tmp6>=3){?>
            <li>
                <a href="#two" data-toggle="tab"><i class="icon-picture"></i> <h2 style="font-size:16px;display:inline;line-height:16px;">采销管理</h2>
                </a>
            </li>
            <li>
                <a href="#three" data-toggle="tab"><i class="icon-picture"></i> <h2 style="font-size:16px;display:inline;line-height:16px;">库存管理</h2>
                </a>
            </li>
            <?php ob_start();?><?php echo $_SESSION['permission'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7>=4){?>
            <li onclick='draw()'>
                <a href="#four" data-toggle="tab"><i class="icon-picture"></i> <h2 style="font-size:16px;display:inline;line-height:16px;">帐务管理</h2>
                </a>
            </li>
            <?php ob_start();?><?php echo $_SESSION['permission'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8>=5){?>
            <li>
                <a href="#five" data-toggle="tab"><i class="icon-picture"></i> <h2 style="font-size:16px;display:inline;line-height:16px;">系统管理</h2>
                </a>
            </li>
            <?php }?>
            <?php }?>
            <?php }?>
        </ul>

        <div class="tab-content" style="font-size:14px;text-align:left;overflow:hidden;">

            <div class="tab-pane active" id="one">
            <?php ob_start();?><?php echo $_SESSION['permission'];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9>=5){?>

                <ul style="list-style:none;height:auto;text-align:left;" class="area wpct33"><!-- 资料管理 user资料-->
                    <li><h3>客户资料:</h3></li>
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['khzl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
    
                    <li class="clearfix">                                         
                        <!-- 客户id: <?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
 <br/> -->用户名: <?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
 <br/> 
                        注册时间: <?php echo $_smarty_tpl->tpl_vars['vo']->value['create_time'];?>
 <br/>账号状态: <?php echo $_smarty_tpl->tpl_vars['vo']->value['status'];?>
 <br/> 客户资料: <?php echo $_smarty_tpl->tpl_vars['vo']->value['ziliao'];?>

                    </li>

                    <?php } ?>
                </ul>
                <ul style="list-style:none;height:auto;text-align:left;" class="area wpct33">
                    <li><h3>供应商资料:</h3></li>
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gyszl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
    
                    <li class="clearfix" id="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">                                         
                        用户名: <?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
 <br/> 
                        注册时间: <?php echo $_smarty_tpl->tpl_vars['vo']->value['create_time'];?>
 <br/>账号状态: <?php echo $_smarty_tpl->tpl_vars['vo']->value['status'];?>
 <br/> 客户资料: <?php echo $_smarty_tpl->tpl_vars['vo']->value['ziliao'];?>

                    </li>

                    <?php } ?>
   
                </ul>
                <?php }?>

                <ul style="list-style:none;height:auto;text-align:left;" class="area wpct33"><!-- 资料管理 商品资料 -->

                    <li><h3>商品资料:</h3></li>
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['spzl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
    
                    <li class="clearfix">                                         
                        商品名: <?php echo $_smarty_tpl->tpl_vars['vo']->value['goods_name'];?>
 <br/> 
                        <?php ob_start();?><?php echo $_SESSION['permission'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10>=3){?>
                        进货人: <?php echo $_smarty_tpl->tpl_vars['vo']->value['uname'];?>
 <br/> 
                        供应商: <?php echo $_smarty_tpl->tpl_vars['vo']->value['nick_name'];?>
 <br/> 
                        进货时间: <?php echo $_smarty_tpl->tpl_vars['vo']->value['pici'];?>
 <br/> 
                        商品进价: ￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['chengben'];?>
 <br/>
                        <?php }?>
                        商品售价: ￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['shoujia'];?>
 <br/>                        
                        商品品牌: <?php echo $_smarty_tpl->tpl_vars['vo']->value['pinpai'];?>
 <br/>
                        商品资料: <?php echo $_smarty_tpl->tpl_vars['vo']->value['ziliao'];?>
 <br/>
                    </li>
                    <?php } ?>
   
                </ul>

            </div>

            <div class="tab-pane" id="two"><!-- 采销管理 -->
                <button id="caigou_new" class="btn btn-small btn-success">新建采销行为</button>

                <form id="postop" action="ajaxHandler.php" method="" style="max-width:90%;margin:0 auto;display:none;">
                    操作类型:<br/>
                    <select id="optype" name="optype" required>
                        <option value='1'>采购</option>
                        <option value='2'>进货</option>
                        <option value='3'>采购退货</option>
                        <option value='4'>销售</option>
                        <option value='5'>销售退货</option>
                    </select>
                    <script>
                    //根据类型，显示表单
                    //1.采购、进货 gys num weight chengben shoujia name tiaoma pinpai gtype ziliao
                    //2.采购退货 销售退货 销售 name num 
                        //按类搜索
                        $("#optype").change(function(){
                            var value = $('#optype').val();
                            if(value != '1' && value != '2') {
                                $('#gys, #weight, #chengben, #shoujia,  #pinpai, #tiaoma, #gtype, #ziliao ,#beizhu, #beizhup').hide();
                            } else {
                                $('#postop input, textarea, #postop select ,#postop p').show();
                            }
                        });
                    </script>

                    <div class="gap5"></div>
                     
                   
                    <select id="gys" name="gys" required>
                    <option value="3">-- 供应商 --</option>
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gyszl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['vo']->value['nick_name'];?>
</option>
                    <?php } ?>
                    </select><br/>

                    <input id="num" name="num" type="number" value="" placeholder='数量' min = 0 max=<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
 ><br>
                    <input id="weight" name="weight" type="number" value="" placeholder='单品重量'><br>
                    <input id="chengben" name="chengben" type="number" value="" placeholder='单品成本'><br>
                    <input id="shoujia" name="shoujia" type="number" value="" placeholder='单品售价'><br>
                    <input id="name" name="name" type="text" list="goods" value="" placeholder='商品名'><br>
                    <datalist id="goods">
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['spzl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['vo']->value['goods_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</option>
                    <?php } ?>
                    </datalist>
                    <input id="tiaoma" name="tiaoma" type="text" value="" placeholder='条码'><br>
                    <input id="pinpai" name="pinpai" type="text" value="" placeholder='品牌'><br>

                    <select id="gtype" name="gtype" required>
                        <option value='1'>食品类</option>
                        <option value='2'>生活类</option>
                        <option value='3'>电器类</option>
                        <option value='4'>其他类</option>
                    </select><br/>

                    <p id="beizhup" style="display:inline-block;width:75%;max-width:240px;text-align:left;margin-top:-17px;">商品资料</p>
                    <div class="gap5"></div>
                    <textarea id="beizhu" name="beizhu" align="center" style="height:40px;margin-top:-18px;margin-bottom:6px;" value="">
                    </textarea><br>

                    <input type="hidden" name="uid" value="<?php echo $_SESSION['uid'];?>
"><!-- 操作人id -->
                    <input type="submit" id="caigou_sub" name="caigou_sub" class="btn btn-success btn-small" value="提交">
                    <input type="reset"  name="reset" class="reset btn btn-danger btn-small" value='重置'>
                    <button id="caigou_quxiao" class="btn btn-small btn-info">取消</button>
                </form>
                
                <h3>系统日志</h3>
                <ul style="list-style:none;">          
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opgoodszl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                    <li class="clearfix">                                         
                        <?php echo $_smarty_tpl->tpl_vars['vo']->value['uid'];?>
号人员于<?php echo $_smarty_tpl->tpl_vars['vo']->value['optime'];?>
<?php echo $_smarty_tpl->tpl_vars['vo']->value['op'];?>
:<?php echo $_smarty_tpl->tpl_vars['vo']->value['num'];?>
件<?php echo $_smarty_tpl->tpl_vars['vo']->value['gid'];?>
.
                    </li>

                    <?php } ?>
                </ul>

            </div>

            <div class="tab-pane" id="three"><!-- 库存管理 -->
                <input type="search" id="search_kc" style="margin-top:10px;">
                <button id="search_kc_btn" class="btn btn-danger btn-small">库存查询</button>(支持根据商品编号、商品名查询)
                <script>
                $('#search_kc_btn').click(function() {
                    var sval = $('#search_kc').val();
                    if( sval == '' ) return;
                    var tdarr = $('.kc_goods_name, .kc_goods_id');
                    for(var i = 0, len = tdarr.length; i < len; i++) {
                        for ( var j = 0, len = tdarr.length; j < len; j++ ) {
                            tdarr[j].parentNode.style.backgroundColor = 'white';
                        } //先全部背景变白
                        if( sval == tdarr[i].innerText ) {
                            tdarr[i].parentNode.style.backgroundColor = 'red';
                            setTimeout(function() {
                                tdarr[i].parentNode.style.backgroundColor = 'white';
                            }, 5000); //5s后高亮自动消失
                            return;
                        }
                    }
                    alert("查询无果!");
                });
                </script>
                <ul style="list-style:none;height:auto;text-align:left;">
                               <pre>备注:数量字体颜色为红色意味着该产品库存不足（默认值为50件），
     橙色意味着该产品库存积压过多（默认值为20000件）.</pre> 
                    <table class="tal" id="kc_table">
                    <thead>
                      <tr>
                      <th>商品号</th><th>商品名称</th><th>商品供应商</th><th>商品库存</th> </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kcinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                      <tr>
                         <td class="kc_goods_id"><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</td><td class="kc_goods_name"><?php echo $_smarty_tpl->tpl_vars['vo']->value['goods_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['vo']->value['nick_name'];?>
</td><td class="kc_num"><?php echo $_smarty_tpl->tpl_vars['vo']->value['num'];?>
</td>
                      </tr>

                    <?php } ?>
                    </tbody>
                    </table>                                  
                </ul>

            </div>

            <div class="tab-pane" id="four"><!-- 帐务管理 -->

                <select id="caiwu_type" name="caiwu_type" required>
                    <option value='1'>采购</option>
                    <option value='2'>进货</option>
                    <option value='3'>采购退货</option>
                    <option value='4'>销售</option>
                    <option value='5'>销售退货</option>
                </select><br/>
                <div class="input-append date form_datetime" data-date="">
                    <input class="starttime" name="starttime" style="width:150px;" type="text" value="" placeholder='请假开始时间' readonly  required>
                    <span class="add-on"><i class="icon-remove"></i></span>
                    <span class="add-on"><i class="icon-calendar"></i>
                </div>
                <div class="gap5"></div>
                <div class="input-append date form_datetime" data-date="">
                    <input class="endtime" name="endtime" style="width:150px;" type="text" value="" placeholder='请假结束时间' readonly  required>
                    <span class="add-on"><i class="icon-remove"></i></span>
                    <span class="add-on"><i class="icon-calendar"></i></span>
                </div><br/>
                <button id="draw_btn" class="btn btn-danger btn-small">财务明细自助查询</button>(默认展示本自然月各商品采购明细)
                <div class="gap5"></div>

                <canvas id="myChart" width="400" height="400"></canvas>

            </div>

            <div class="tab-pane" id="five"><!-- 系统管理 -->

            <button id="user_new" class="btn btn-small btn-success">新建用户</button>

            <form id="postuser" action="addUser.php" method="" style="max-width:90%;margin:0 auto;display:none;">
                用户类型:
                <select id="type" name="type" required>
                    <option value='1'>普通用户</option>
                    <option value='2'>供应商</option>
                    <option value='3'>店员</option>
                    <option value='4'>采购主管</option>
                    <option value='5'>总经理</option>
                </select>

                <div class="gap5"></div>

                昵称：<input id="newnick_name" name="newnick_name" type="text" value="" ><br>
                用户名：<input id="newusername" name="newusername" type="text" value="" ><br>
                密码：<input id="newpassword" name="newpassword" type="password" value="" ><br>
                个人资料：<input type="text" id="newziliao" name="newziliao" value="" style="width:200px;height:100px;">

                <br/><input type="submit" id="new_sub" name="new_sub" class="btn btn-success btn-small" value="提交">
                <input type="reset"  name="reset" class="reset btn btn-danger btn-small" value='重置'>
                <button id="user_quxiao" class="btn btn-small btn-info">取消</button>
            </form>
            <div class="gap5"></div>
            
            <button id="user_modify" class="btn btn-small btn-success">用户信息维护</button>
            <form id="postmodify" action="modifyUser.php" method="" style="max-width:90%;margin:0 auto;display:none;">
                选择用户
                <select id="users" name="users" required>
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userzl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['vo']->value['nick_name'];?>
</option>
                    <?php } ?>
                </select><br/>

                用户类型:
                <select id="type" name="type" required>
                    <option value='1'>普通用户</option>
                    <option value='2'>供应商</option>
                    <option value='3'>店员</option>
                    <option value='4'>采购主管</option>
                    <option value='5'>总经理</option>
                </select>

                <div class="gap5"></div>

                昵称：<input id="newnick_name" name="newnick_name" type="text" value="" ><br>
                密码：<input id="newpassword" name="newpassword" type="password" value="" ><br>
                个人资料：<input type="text" id="newziliao" name="newziliao" value="" style="width:200px;height:100px;"><br/>
                封禁/解禁：                
                <select id="fengjin" name="fengjin" required>
                    <option value='0'>封禁</option>
                    <option value='1'>解禁</option>
                </select><br/>

                <input type="submit" id="user_modify_btn" name="user_modify_btn" class="btn btn-success btn-small" value="提交更改">
                <input type="reset"  name="reset" class="reset btn btn-danger btn-small" value='重置'>
                <button id="modify_quxiao" class="btn btn-small btn-info">取消</button>
            </form>

            <div class="gap5"></div>
 
            <button id="log" class="btn btn-small btn-success">撰写财务日志</button>
            <form id="postlog" action="sys_log.php" method="" style="max-width:90%;margin:0 auto;display:none;">
                
                选择行为类型:<br/>
                <select id="caiwu_type" name="caiwu_type" required>
                    <option value='1'>财务损耗</option>
                    <option value='2'>财务收益</option>
                </select><br/>

                <input type="num" placeholder="填写数据" id="shuju" name="shuju"><br/>
                <div class="gap5"></div>
                <input type="submit" id="log_btn" name="log" class="btn btn-success btn-small" value="添加日志">
                <input type="reset"  name="reset" class="reset btn btn-danger btn-small" value='重置'>
                <button id="log_quxiao" class="btn btn-small btn-info">取消</button>
            </form>

            <div class="gap5"></div>

            <button id="line" class="btn btn-small btn-success">商品库存上下限设置</button>
            <form id="postline" action="set_line.php" method="" style="max-width:90%;margin:0 auto;display:none;">
                选择商品:<br/>
                <select id="kc_gid" name="kc_gid" required>
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['spzl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                    <option value='<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['vo']->value['goods_name'];?>
</option>
                    <?php } ?>
                </select><br/>

                <input type="num" name="up_line" placeholder="商品库存上限设置"><br/>
                <div class="gap5"></div>
                <input type="num" name="down_line" placeholder="商品库存下限设置"><br/>
                <div class="gap5"></div>
                <input type="submit" id="line_btn" name="line_btn" class="btn btn-success btn-small" value="提交更改">
                <input type="reset"  name="reset" class="reset btn btn-danger btn-small" value='重置'>
                <button id="line_quxiao" class="btn btn-small btn-info">取消</button>
            </form>

            </div>
        </div>
    </div><!-- /.tabbable -->
    </div>
    <!--  /.main end -->

    <!--  footer start -->
    <footer>

    </footer>
    <!--  /.footer end -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.form-2.82.min.js"></script>
<script type="text/javascript" src="js/Chart.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.zh-CN.js"></script>
<!--[if (gt IE 9)|!(IE)]><!--> 
<script>
var dt  = new Date();
var year = dt.getFullYear();
var month = ( dt.getMonth()+1 ) < 10 ? "0"+( dt.getMonth()+1 ) : dt.getMonth();
var date = ( dt.getDate() ) < 10 ? "0"+dt.getDate() : dt.getDate();
var Destarttime = (year+'-'+month+'-01 00:00');
var Deendtime = (year+'-'+month+'-'+date+' '+'23:59');
console.log(Destarttime);
console.log(Deendtime);
function draw() {
    //1.获起始时间，任意为空则返回，提示用户输入
    //2.发起ajax请求，获取时间段内的数据
    //3.组织符合chart.js的数据结构进行绘制
    var starttime = $('.starttime').val() || Destarttime;
    var endtime = $('.endtime').val() || Deendtime; 
    if( starttime == '' || endtime == '') {
        //alert("请完整填写时间段！");
        //return;
    }    

    var caiwu_type = $('#caiwu_type').val();
    //alert(caiwu_type);

    $.get('APIs/caiwu_info.php?caiwu_type=' + caiwu_type + '&starttime=' + starttime + '&endtime=' + endtime, function(data) {
        //alert(data);
        var Gdata = [];    
        var labels = [];
        var data1 = [];
        Gdata = data.split(' ');
        for(var i = 0; i < Gdata.length-1; i = i+2 ) {
            labels.push(Gdata[i]);
            var b = i+1;
            data1.push(Gdata[b]);
        }
        console.log(labels);
        console.log(data1);
        //绘制图表
        var ctx = $("#myChart").get(0).getContext("2d");
        //This will get the first returned node in the jQuery collection.
        var myNewChart = new Chart(ctx);
        //alert(labels);
        var dataa = {
            labels: '',
            datasets: [
              {

              },
              {

              }
            ]
        };

        dataa.labels = labels;
        //alert(data1.length);
        dataa.datasets[0].data = data1;
        dataa.datasets[0].fillColor = "#7fdbff";
        dataa.datasets[0].strokeColor =  "rgba(220,220,220,1)";
        dataa.datasets[0].segmentStrokeWidth = 1;

        dataa.datasets[1].data = data1;
        dataa.datasets[1].fillColor = "#7fdbff";
        dataa.datasets[1].strokeColor =  "rgba(220,220,220,1)";
        dataa.datasets[1].segmentStrokeWidth = 1;

        var globalGraphSettings = {
                    
        //Boolean - If we show the scale above the chart data           
        scaleOverlay : false,
        
        //Boolean - If we want to override with a hard coded scale
        scaleOverride : false,
        
        //** Required if scaleOverride is true **
        //Number - The number of steps in a hard coded scale
        scaleSteps : null,
        //Number - The value jump in the hard coded scale
        scaleStepWidth : null,
        //Number - The scale starting value
        scaleStartValue : null,

        //String - Colour of the scale line 
        scaleLineColor : "rgba(0,0,0,.1)",
        
        //Number - Pixel width of the scale line    
        scaleLineWidth : 0,

        //Boolean - Whether to show labels on the scale  刻度
        scaleShowLabels : true,
        
        //Interpolated JS string - can access value
        scaleLabel : "<<?php ?>%=value%<?php ?>>",
        
        //String - Scale label font declaration for the scale label
        scaleFontFamily : "'Arial'",
        
        //Number - Scale label font size in pixels  
        scaleFontSize : 12,
        
        //String - Scale label font weight style    
        scaleFontStyle : "normal",
        
        //String - Scale label font colour  
        scaleFontColor : "#666",    
        
        ///Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines : false,
        
        //String - Colour of the grid lines
        scaleGridLineColor : "rgba(0,0,0,.05)",
        
        //Number - Width of the grid lines
        scaleGridLineWidth : 1, 

        //Boolean - If there is a stroke on each bar    
        barShowStroke : false,
        
        //Number - Pixel width of the bar stroke    
        barStrokeWidth : 0,
        
        //Number - Spacing between each of the X value sets
        barValueSpacing : 5,
        
        //Number - Spacing between data sets within X values
        barDatasetSpacing : 1,
        
        //Boolean - Whether to animate the chart
        animation : true,

        //Number - Number of animation steps
        animationSteps : 100,
        
        //String - Animation easing effect
        animationEasing : "easeOutQuart",

        //Function - Fires when the animation is complete
        onAnimationComplete : null
        
    };

    myNewChart.Bar(dataa, globalGraphSettings); //绘制

    }); //end of ajax get

    //alert(data.datasets[0].data);

        
}

$('#draw_btn').click(function() { //点击财务明细按钮，开始绘制图表
    draw();
});
</script>>
<!--<![endif]-->
<script>
//注销相关方法
function cconfirm(){
    var r=confirm("您确定要注销此次登陆吗?")
    if (r==true){
        location.href="index.php?action=logout";
    }
}

$(".form_datetime").datetimepicker({
    language: 'zh-CN',
    format: "yyyy-mm-dd hh:ii",
    autoclose: true,
    todayBtn: true,
    showMeridian: true, //AM, PM zh-CN中无效...
    todayHighlight: true,
    startDate: "2014-01-01 00:00",
    minuteStep: 10,
    pickerPosition: 'bottom-left'
});    $(".form_datetime").datetimepicker({
        language: 'zh-CN',
        format: "yyyy-mm-dd hh:ii",
        autoclose: true,
        todayBtn: true,
        showMeridian: true, //AM, PM zh-CN中无效...
        todayHighlight: true,
        startDate: "2014-01-01 00:00",
        minuteStep: 10,
        pickerPosition: 'bottom-left'
    });

//新建按钮
$('#caigou_new').click(function() {
    $('#postop').show(500);
});
$('#user_new').click(function() {
    $('#postuser').show(500);
});
$('#user_modify').click(function() {
    $('#postmodify').show(500);
});
$('#log').click(function() {
    $('#postlog').show(500);
});
$('#line').click(function() {
    $('#postline').show(500);
});

//取消按钮
$('#caigou_quxiao').click(function(e) {
    e.preventDefault();
    $('#postop').hide();
});
$('#user_quxiao').click(function(e) {
    e.preventDefault();
    $('#postuser').hide();
});
$('#modify_quxiao').click(function(e) {
    e.preventDefault();
    $('#postmodify').hide();
});
$('#log_quxiao').click(function(e) {
    e.preventDefault();
    $('#postlog').hide();
});
$('#line_quxiao').click(function(e) {
    e.preventDefault();
    $('#postline').hide();
});

//ajax form
$('#caigou_sub').click(function(e) {
    e.preventDefault();
    if ( $('#num').val()  > <?php echo $_smarty_tpl->tpl_vars['max']->value;?>
 ) {
        alert("对不起，您购买的数量超过了我们的库存");
        return;
    }
    var postinfo = $('#postop').formSerialize();
    // 现在可以使用$.get、$.post、$.ajax等来提交数据
    $.post('APIs/ajaxHandler.php', postinfo, function(data, status) {
        if(status == 'success') {
            $('.reset').click();
            $('#postop input, textarea, #postop select ,#postop p').show();
            $('#postop').hide(300);
            alert(data);
        } else {
           alert("对不起，服务器开小差了。。。请重试!");
        }
    });
});

$('#new_sub').click(function(e) {
    e.preventDefault();
    var postinfo = $('#postuser').formSerialize();
    // 现在可以使用$.get、$.post、$.ajax等来提交数据
    $.post('APIs/addUser.php', postinfo, function(data, status) {      
    console.log(data);     
        if(status == 'success') {
            //$('.reset').click();
            $('#postuser').hide(300);
        } else {
            alert('失败');
        }
    });
});

$('#user_modify_btn').click(function(e) {
    e.preventDefault();
    var postinfo = $('#postmodify').formSerialize();
    // 现在可以使用$.get、$.post、$.ajax等来提交数据
    $.post('APIs/modifyUser.php', postinfo, function(data, status) {
        if(status == 'success') {
            $('.reset').click();
            $('#postmodify').hide(300);
        }
    });
});

$('#log_btn').click(function(e) {
    e.preventDefault();
    var postinfo = $('#postlog').formSerialize();
    // 现在可以使用$.get、$.post、$.ajax等来提交数据
    $.post('APIs/sys_log.php', postinfo, function(data, status) {
        if(status == 'success') {
            $('.reset').click();
            $('#postlog').hide(300);
        }
    });
});

$('#line_btn').click(function(e) {
    e.preventDefault();
    var postinfo = $('#postline').formSerialize();
    // 现在可以使用$.get、$.post、$.ajax等来提交数据
    $.post('APIs/set_line.php', postinfo, function(data, status) {
        if(status == 'success') {
            $('.reset').click();
            $('#postline').hide(300);
        }
    });
});

    </script>
  </body>
</html>
<?php }} ?>