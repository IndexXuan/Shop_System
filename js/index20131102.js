/*
 copyright alpha studio xiaoxuan 2013 summer holiday
*/

//遮罩层相关js 改用bootstrap自带组件
/* function showL(){
	var cover = document.getElementById("coverL");
	cover.style.width = "4000px";
	cover.style.height = "2000px";
	cover.style.display = "block";
	cover.style.zIndex = 9999;//盖过navbar-fixed-top的1030 z-index
		var login = document.getElementById("login_win");
	login.style.width = "400px";
	login.style.height = "300px";
	login.style.display = "block";
	login.style.zIndex = 100000;//盖过cover
}
function hideL(){
	document.getElementById("login_win").style.display="none"
	document.getElementById("coverL").style.display="none"

} */
//表单验证相关js 兼容低级浏览器
    //对每一项的check抽象处理函数
function check(obj,spanobj,info,fun,click){//对象 对于span对象 信息 回调函数（能力强） 状态标（妙！！！）
		  obj.onfocus=function(){//正在输入时的操作
		spanobj.innerHTML=info;
		spanobj.style.color="orange";
	}
		  obj.onblur=function(){//输入结束时的操作
		if(fun(obj.value)){
			spanobj.style.color="green";
			spanobj.innerHTML="正确!";
		}
		else{
			spanobj.style.color="red";
			spanobj.innerHTML="错误!!";
		}
	}
		 if(click=="click") //如果条件成立，则说明点击提交了，强行onblur做总验证，精妙！！！
	obj.onblur();
}
 //login
//onload=log

function logs(click){//onSubmit验证函数 防非法提交
		   //check标记物
	var sta=true;
	//获取需要的对象
	var Lcardnum=document.getElementById("Lcard_num");
	var Lcardpass=document.getElementById("Lcard_pass");
		   var Lcn=document.getElementById("Lcn");
	var Lcp=document.getElementById("Lcp");
		   check(Lcardnum,Lcn,"卡号10位哦！",function(val){
		if(val.length == 10 || val.length == 6){ //兼容后勤集团管理员卡号长度
			return true;
		}
		else{
			sta=false;
			return false;
		}
	}
	,click)
		   check(Lcardpass,Lcp,"初始为6位",function(val){
		if(val.length >= 6 && val.length <= 20){
			return true;
		}
		else{
			sta=false;
			return false;
		}
	}
	,click)
		return sta;//最终总标记
		
}
    //页面加载后验证login表单
window.onload=function(){//此方法可以一次onload绑定两个事件
	logs();
}


   //兼容移动端 导航条直接变为顶部固定
    if( $('#footer').width() <= 700 ){
	    $('#addF').hide();
	    $('#navbardiv').addClass('navbar-fixed-top'); 
		$('#navbardiv').css('top','-40px'); //为了清除本身的浮动，以后有好的办法再改		
	    $('#footp').width('520px');
	}else{
	  //pc端导航条到顶固定
      $(function() {
        var elm = $('#navbardiv');
        var startPos = 200;//200较之原来的$(elm).offset().top好，原来的代码一滚动就到顶固定
        $.event.add(window, "scroll", function() {		      
        var p = $(window).scrollTop();
		
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'static');
        $(elm).css('top',((p) > startPos) ? '-40px' : ''); //为了清除本身的浮动，以后有好的办法再改	
        $(elm).css('opacity',((p) > startPos) ? '0.8' : ''); //navbar transparent	
     //$("#help_login").css('display',((p) > startPos) ? 'block' : ''); //show help_login	
        //$(elm).css('filter',((p) > startPos) ? 'alpha(opacity=80)' : ''); //navbar transparent ie7	
        //$('#left').css('margin-top',((p) > startPos) ? '80px' : '');//让选项卡露出
 
		
		//$(elm).css('width',((p) > startPos) ? '170px' : '2000px');
        //$('.nav').css('display',((p) > startPos) ? 'inline-block' : 'block');
        //$('.nav').css('height',((p) > startPos) ? '500px' : '');
        });
      });
	}