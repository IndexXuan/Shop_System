/*
 *   xiaoxuan 2013 12 08  
 *   script of the index
 *   last modified 2013 12 08
 *   last modified 2013 12 21 20:18
*/
function check(obj,spanobj,info,fun,click){obj.onfocus=function(){spanobj.innerHTML=info;spanobj.style.color="orange";}
obj.onblur=function(){if(fun(obj.value)){spanobj.style.color="green";spanobj.innerHTML="正确!";}
else{spanobj.style.color="red";spanobj.innerHTML="错误!!";}}
if(click=="click")
obj.onblur();}
function logs(click){var sta=true;var Lcardnum=document.getElementById("Lcard_num");var Lcardpass=document.getElementById("Lcard_pass");var Lcn=document.getElementById("Lcn");var Lcp=document.getElementById("Lcp");check(Lcardnum,Lcn,"卡号10位哦！",function(val){if(val.length==10||val.length==6){return true;}
else{sta=false;return false;}},click)
check(Lcardpass,Lcp,"初始为6位",function(val){if(val.length>=6&&val.length<=20){return true;}
else{sta=false;return false;}},click)
return sta;}
function Mlogs(click){var sta=true;var Mcardnum=document.getElementById("Mcard_num");var Mcardpass=document.getElementById("Mcard_pass");check(Mcardnum,Lcn,"卡号10位哦！",function(val){if(val.length==10||val.length==6){return true;}
else{sta=false;return false;}},click)
check(Mcardpass,Lcp,"初始为6位",function(val){if(val.length>=6&&val.length<=20){return true;}
else{sta=false;return false;}},click)
return sta;}
window.onload=function(){logs();Mlogs();}
if($('footer').width()>900){$(function(){var elm=$('nav');var startPos=200;$.event.add(window,"scroll",function(){var p=$(window).scrollTop();$(elm).css('position',((p)>startPos)?'fixed':'');$(elm).css('top',((p)>startPos)?'0':'');$(elm).css('opacity',((p)>startPos)?'0.8':'');});});}
console.log("%c 欢迎光临江苏师范大学失物招领平台","font-size:32px;color:red;text-shadow:0 0 5px #666");console.log("嘿嘿,大家都说好,你也是想火钳留名吧!开玩笑啦`~~");console.log("ps:相互学习交流请联系，%c qq:1203802652","color:red;font-weight:bold;");console.error('小东西，不喜请轻喷...');
//改变信息流布局 12 21 20:15
  $(document).ready(function(){
      
	  //默认布局
    function infoStreamOne(){
	  $('#main').css('width','')
	  $('.left').css('width','');	  
	  $('.left').css('text-align','');	  
	  $('.news').css('width','');	  
	  $('figure').css('width','');	    	    
	  $('figure').css('margin-top','');
	  $('figure').css('border-left','');	    
	  $('figure').css('padding-left','');	    
	  $('#spot_btn').css('margin-left','');		  
	  $('.right').css('width','');
	  $('.right').css('margin-left','');
	  $('.right').css('margin-top','');
	}
	
	//简明布局
	function infoStreamTwo(){
	  $('#main').css('width','768px')
	  $('.left').css('width','98%');	  
	  $('.left').css('text-align','left');	  
	  $('.news').css('width','68%');	  
	  $('figure').css('width','20%');	    	    
	  $('figure').css('margin-top','30px');	    
	  $('figure').css('border-left','1px dashed #aaa');	    
	  $('figure').css('padding-left','9px');	    
	  $('#spot_btn').css('margin-left','30px');	    
	  $('.right').css('width','100%');
	  $('.right').css('margin-left','-1%');
	  $('.right').css('margin-top','10px');
	}
	
	$('#infoStream').hover(function(){
	    $('#layout').show(500);
	});
	
	$('#one').click(function(){
	    infoStreamOne();
	});
	
	$('#two').click(function(){
	    infoStreamTwo();
	});
  });