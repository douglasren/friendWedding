<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0028)http://www.188xi.com/3-86175 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no">
<title>
我们结婚啦!</title>
<link rel="stylesheet" type="text/css" href="<?php echo (C("static_path")); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("static_path")); ?>css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("static_path")); ?>css/styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo (C("static_path")); ?>css/styles11.css">

<link href="http://cdn.staticfile.org/photoswipe/3.0.5/photoswipe.css" rel="stylesheet">

<script src="<?php echo (C("static_path")); ?>js/hm.js"></script><script type="text/javascript" src="<?php echo (C("static_path")); ?>js/jquery.min.js"></script>
<script src="<?php echo (C("static_path")); ?>js/jquery-ui.min.js"></script>

<script src="<?php echo (C("static_path")); ?>js/klass.min.js"></script>
<script type="text/javascript" src="<?php echo (C("static_path")); ?>js/code.photoswipe.jquery.min.js"></script>

<script type="text/javascript">
		(function(window, $, PhotoSwipe){
			$(document).ready(function(){
				var options = {};
				$("#Gallery a").photoSwipe(options);
			});
		}(window, window.jQuery, window.Code.PhotoSwipe));
	</script>
<script type="text/javascript">
$(document).ready(function() {
	$("#accordion").accordion({ autoHeight: false },{ collapsible: true,active: false } );
	$("#accordion").bind('accordionchange', function(event, ui) { 
			if ($(ui.newHeader).offset() != null){
            	$('html, body').animate({scrollTop: $(ui.newHeader).offset().top} );
			}	
	});
			
			$("#accordion").bind('accordionchange', function(event, ui) {
				if (ui.newContent.attr('id') == 'invite_detail_content7169' && !map7169 && $("#invite_detail_mapimgurl7169").val() == '' )
				{
					initialize7169();
				}			
			});
});

</script> 
<style>
@media screen and (max-width:640px){}
body{ max-width:640px; }

</style>
</head>

<body id="jsBg">
   <div style="display:none">
<img src="<?php echo (C("static_path")); ?>js/FjKhHqFtLT1Nn93VvLZ27dNXRnh4">

</div>
<style>

  #loading{position:fixed;top:0;left:0;width:100%;height:100%;background:#ffffff;margin:0px 0 0 0px; z-index:200}
  #heart{position:fixed;top:50%; width:100%;margin-top:-40px;text-align:center;}
  #welcometext{position:fixed;top:50%;color:#ea0e12; margin-top:15px; width:100%;font-size:15px; text-align:center;}
</style>

<div id="Loading" style="display: none;">
    <div id="heart">
        <img src="<?php echo (C("static_path")); ?>images/12.gif">
    </div>
    <div id="welcometext">幸福加载中</div>
</div>

<script>
function get_viewport_width() {
	var width;
	if (window.innerWidth != undefined) {	// all but IE 
		width =  window.innerWidth;
	} else if (document.documentElement != undefined) {		// IE
		width = document.documentElement.clientWidth;
	} 

	// to support pc preview
	if (document.body.clientWidth != undefined) {
		if ( width > document.body.clientWidth) {
			width = document.body.clientWidth;
		}
	}

	return width;
}

function get_viewport_height() {
	var height;
	if (window.innerHeight != undefined) {
		height =  window.innerHeight;
	} else if (document.documentElement != undefined) {
		height = document.documentElement.clientHeight;
	}

	return height;
}

$(function () {
	var width = get_viewport_width();
	var height = get_viewport_height();

	if(height / width > 3) { // when Android browser initialized, window.innerHeight property might be incorrect
		height = width * 488 / 320;
	}
	

	// to support mobile
	var pic_width = width;
	var pic_height = height;
	if (window.devicePixelRatio != undefined) {
		pic_width = width * window.devicePixelRatio;
		pic_height = height * window.devicePixelRatio;
	}
	var max_width = 1024;
	pic_width = max_width;
	pic_height = max_width * height / width;

});


window.onload=function(){
	var LoadingDIV = document.getElementById('Loading');
	LoadingDIV.style.display  = "none";
}



</script>
 
 

<!--container bengin-->
<div id="container">
<div id="outter">
	<div class="outter-main-tr"><div class="outter-main-tl"><div class="outter-main-tm"></div></div></div>
    <div class="outter-main-mr"><div class="outter-main-ml">

        <div class="ui-widget-header ui-corner-all">
            <div id="inner">
                <div class="inner-main-tr"><div class="inner-main-tl"><div class="inner-main-tm">
                    <div id="main-title">
                        <div class="main-title-tr"><div class="main-title-tl"><div class="main-title-tm">
                        </div></div></div>
                        <div class="main-title-mr"><div class="main-title-ml">
                    
                            <div class="main-title-mm">
                                <div id="maintitlehtml"><span style="text-decoration: none; font-style: normal; font-size: 20px; font-weight: normal; ">王鲲鹏与王静静婚宴邀约	
</span></div>
                            </div>
                    
                        </div>
                        </div>
                        <div class="main-title-br"><div class="main-title-bl"><div class="main-title-bm">
                        </div></div></div>
                    </div>
                </div></div></div>
                <div class="inner-main-mr">
                	<div id="img_decoration1"></div>
                    <div id="img_decoration2"></div>
                    <div class="inner-main-ml">
                        <div class="inner-main-mm">
<!-- 大圖 -->  
                             <div id="fmbox"> <img id="invite_webimg" src="<?php echo (C("static_path")); ?>js/Fp7lvM8tpvzlw1CQCYt-75IOxNid" width="100%" alt="Mobile Wedding Invitations">
                             </div>
                       	  <div id="img_videobutton_placeholder" style="position:relative;"> 
                            <!--有视频再开启
                        	<div id="img_videobutton" style="" ></div>
                           -->
                       		</div>
                        </div>
                        
                        <script language="javascript">
						//===========================================================
						/*
 $(function(){
		$("#img_videobutton").click(function(){
			 if(music_close){
		     musicpause();
		    $("#img_videobutton").css({'background':'url("images/video_close.png") no-repeat scroll 0 0', 'background-size':'cover'});
           document.getElementById("fmbox").innerHTML = "<div id='closebnt' style='background:#000; height:30px;'></div><div id='getviedo'><iframe src='http://player.youku.com/embed/XNzMyOTU1NDcy' allowtransparency='true' scrolling='no' border='0' frameborder='0' style='width:100%;height:auto;'></iframe></div><div style='background:#000;height:auto'><div id='closebnt' style='background:#000; height:30px;'></div></div>";
			}else{
				musicplay();
				document.getElementById("fmbox").innerHTML = "<img id='invite_webimg' src='/admin/upLoadPic/20140717212334191.jpg' width='100%' alt='Mobile Wedding Invitations'>"
				$("#img_videobutton").css({'background':'url("images/video.png") no-repeat scroll 0 0', 'background-size':'cover'});
			}
	})
})
*/
//=======================================================================================
						</script>
               	  </div>
                </div>
              <div class="inner-main-br">
                <div id="img_decoration3"></div>
                <div class="inner-main-bl"><div class="inner-main-bm">

                    <div id="sub-title">
                        <div class="sub-title-tr"><div class="sub-title-tl"><div class="sub-title-tm">
                        </div></div></div>
                        <div class="sub-title-mr"><div class="sub-title-ml">
                    
                            <div class="sub-title-mm">
			   <div id="subtitlehtml" style="text-align:center; margin-top:3px; margin-bottom:3px; "><span style="font-weight: normal; font-size: 18px; ">2015年12月07日</span></div>
                            </div>
                    
                        </div>
                        </div>
                        <div class="sub-title-br"><div class="sub-title-bl"><div class="sub-title-bm">
                        </div></div></div>
                    </div>


                </div></div></div>
            </div>
        
        </div>

    </div></div>
	<div class="outter-main-br"><div class="outter-main-bl"><div class="outter-main-bm"></div></div></div>
</div>
<!--accordion bengin-->
<div id="accordion" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist"> 

<!--SPLIT--begin-->
<h3 style="display:" id="invite_detail_title7092" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="0"><span class="ui-icon ui-icon-triangle-1-e"></span>
    
 		<div name="button1" id="button1" class="button">
            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>
            <div class="button-mr">
            <div class="button-ml">
			<div class="button-mm">
    			<a href="http://www.188xi.com/3-86175#"><img class="iconimage" src="<?php echo (C("static_path")); ?>images/1.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name7167">爱的邀约</span></a>
            </div>
            </div>
            </div>
            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>
		</div>
	</h3>
	<div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content7167" style="display: none;" role="tabpanel">
    <div id="detail7167" class="detail">
        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>
        <div class="detail-mr">
        <div class="detail-ml">
        <div class="detail-mm" style="padding-bottom:20px;">
 <!--SPLIT-->
<style>

.head h3 { font-size:22px;color:#000;padding-bottom:5px;}
.line { border-top:1px solid #E5BD82;margin:5px 0;}
.info { font-size:16px;font-weight:bold;margin-top:20px;}
#invite .infos{text-align:center;font-weight:bolder;font-size:16px;padding:5px 0 15px 0}
#invite .infos table{margin:0 auto;}
#invite .infos h1 {min-height:0;overflow:hidden}
#invite .infos h1 img{max-width:100%;overflow:hidden;}
#invite .infos .text { font-size:18px;}
.ip4{color:#000;font-size:25px; margin:5px 0px;}
.ip5{color:#000;font-size:24px; margin:5px 0px;}
.ip6{color:#000;font-size:18px;padding:5px;}
</style>


<div id="mask_bg"></div><div class="body" id="invite">
   <table width="100%" class="head">
       <tbody><tr>
           <td align="right"><h3>王鲲鹏</h3><p>新郎</p></td>
           <td width="100" align="center"><img src="<?php echo (C("static_path")); ?>images/rose.png" alt="rose"></td>
           <td align="left"><h3>王静静</h3><p>新娘</p></td>
       </tr>
   </tbody></table>
<div class="line"></div>

   <div class="infos">
        <p class="ip4"></p>
     

		<p>带着满心欢喜邀请您共享这份喜悦</p>
		<p class="ip6">2015年12月07日</p>
        <p class="ip6">乙未年十月廿六 星期一</p>         <p class="ip5">举行结婚典礼 敬备喜宴</p>
		<table class="td" cellspacing="10">
			<tbody><tr>
				<td class="ip6">时间：12:00 恭候</td>
			</tr>
			<tr>
				<td class="ip6">地点：漯河市源汇区长江路1号凯悦酒店西宴厅 </td>
			</tr>
		</tbody></table>
       <div class="text">您的光临会是我们最大的荣幸</div>
   </div>
</div>


 <div class="line"></div>
<div style="text-align:center; margin:8px 20px;">     <a href="tel:15138968203"><img src="<?php echo (C("static_path")); ?>images/phone1.png" width="80" height="35"></a>
      <a href="tel:15639905607"><img src="<?php echo (C("static_path")); ?>images/phone2.png" width="80" height="35"></a>
 </div>
  

                          
	</div>
        </div>
        </div>
        </div>
        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>
    </div>  


<h3 style="display:" id="invite_detail_title7093" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-e"></span>
    
 		<div name="button2" id="button2" class="button">
            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>
            <div class="button-mr">
            <div class="button-ml">
			<div class="button-mm">
    			<a href="http://www.188xi.com/3-86175#"><img class="iconimage" src="<?php echo (C("static_path")); ?>images/2.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name7167">婚纱相册</span></a>            </div>
            </div>
            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>
		</div>
	</h3>
	<div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content7168" style="display: none;" role="tabpanel">
    <div id="detail7168" class="detail">
        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>
        <div class="detail-mr">
        <div class="detail-ml">
        <div class="detail-mm">

 <ul id="Gallery" class="gallery">             
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FjWzeJ7jnxaFZIiqv20t40VqUo2u" rel="external"><img src="<?php echo (C("static_path")); ?>js/FjWzeJ7jnxaFZIiqv20t40VqUo2u"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FgO0jLj-pdTjyY08vHOvsBoF4fpC" rel="external"><img src="<?php echo (C("static_path")); ?>js/FgO0jLj-pdTjyY08vHOvsBoF4fpC"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FuyILvNMco3a-vGsZZeyCZuo1dXL" rel="external"><img src="<?php echo (C("static_path")); ?>js/FuyILvNMco3a-vGsZZeyCZuo1dXL"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FqDfXpuXsdZ9behbNPFMg89P2y2J" rel="external"><img src="<?php echo (C("static_path")); ?>js/FqDfXpuXsdZ9behbNPFMg89P2y2J"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FjMDUkAUXjTAA97NIORAS6QTrYRy" rel="external"><img src="<?php echo (C("static_path")); ?>js/FjMDUkAUXjTAA97NIORAS6QTrYRy"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FlONCOlSW22Fp-WjsCYwTq4qi3Xc" rel="external"><img src="<?php echo (C("static_path")); ?>js/FlONCOlSW22Fp-WjsCYwTq4qi3Xc"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FnWCX8NCgswHtzHioSGNhv_KkGQL" rel="external"><img src="<?php echo (C("static_path")); ?>js/FnWCX8NCgswHtzHioSGNhv_KkGQL"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FkUCs8w-KxZgmt7zwUV-pa5x3y7x" rel="external"><img src="<?php echo (C("static_path")); ?>js/FkUCs8w-KxZgmt7zwUV-pa5x3y7x"></a></li>
                
        
        
               <li><a href="http://7qn9tb.com1.z0.glb.clouddn.com/FpfcFCZxbUtDb3MZPlKHNzcVY8Dl" rel="external"><img src="<?php echo (C("static_path")); ?>js/FpfcFCZxbUtDb3MZPlKHNzcVY8Dl"></a></li>
        </ul>
                               
	</div>
        </div>
        </div>
        </div>
        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>
    </div>
<!--SPLIT--end-->

<!--SPLIT--begin--><h3 style="display:" id="invite_detail_title7094" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-e"></span>
    
 		<div name="button3" id="button3" class="button">
            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>
            <div class="button-mr">
            <div class="button-ml">
			<div class="button-mm">
    			<a href="http://www.188xi.com/3-86175#"><img class="iconimage" src="<?php echo (C("static_path")); ?>images/3.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name7167">婚宴回函</span></a>            </div>
            </div>
            </div>
            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

		</div>
	</h3>
	<div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content7168" style="display: none;" role="tabpanel">
   <!-- <div class="accordion" id="invite_detail_content7168" >-->
    <div id="detail7168" class="detail">
        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>
        <div class="detail-mr">
        <div class="detail-ml">
        <div class="detail-mm">
<!--<div id="slideshow" style="width:300px; height:300px;"></div>-->
   <div class="content-wrapper">
                       	<div class="content" style="display:none" id="sending_msg">
                        	祝福发送中...
                        </div>
                        <div class="content" id="send_msg_form">


     <style>
	.inputbox{width:100%; margin:2px;background:#f7f7f7;border:0px;font-size:18px; color:#a4a4a4;}
	.textbox2{height:24px;padding:5px;margin-bottom:15px;border-radius:4px;-webkit-border-radius: 4px;-moz-border-radius: 4px;background:#f7f7f7;border:1px solid #cecece;box-shadow:inset 1px 1px 2px #e2d8d7;-webkit-box-shadow:inset 1px 1px 2px #e2d8d7;-moz-box-shadow:inset 1px 1px 2px #e2d8d7;font-family:Arimo, sans-serif;font-size:14px;width:100%;}
	#renshu{color:#a4a4a4;}
	#zfbox{height:100px;}
	#zf{height:100px;}
	#send_message{background: none repeat scroll 0 0 #DF6296;border: 1px solid #eda5c3;margin:0px;box-shadow: none;-webkit-box-shadow:none;-moz-box-shadow:none;color: #FFFFFF;padding: 4px 20px;font-family: Oswald, sans-serif;font-size:20px;text-shadow:1px 1px 1px #4d304e;width:185px;-webkit-transition:background-color 0.3s ease-in-out;-moz-transition:background-color 0.3s ease-in-out;-o-transition:background-color 0.3s ease-in-out;transition:background-color 0.3s ease-in-out;}
    .content #send_message:hover{cursor: pointer;background:#c03d74;}
	</style>
    <form name="contact_form" id="contact_form" action="http://www.188xi.com/index.php?ac=wreply&channelid=3&pid=86175" method="post" style="display:block;">
                        <div class="textbox2"><input id="bi_name" type="text" name="name" placeholder="姓名" class="inputbox"></div>
                        <div class="textbox2"><input id="bi_phone" type="text" name="phone" placeholder="电话" class="inputbox"></div>
                        <div class="textbox2">
                         <select name="num" id="num" class="inputbox" type="text">
                                                     <option value="0">抱歉，无法参加</option>
                                                     <option value="1" selected="selected">1 人参加</option>
                                                     <option value="2">2 人参加</option>
                                                     <option value="3">3 人参加</option>
                                                     <option value="4">4 人参加</option>
                                                     <option value="5">5 人参加</option>
                                                     <option value="6">6 人参加</option>
                                                     <option value="7">7 人参加</option>
                                                     <option value="8">8 人参加</option>
                                                     <option value="9">9 人参加</option>
                                        </select>
                        </div>
                        <div class="textbox2" id="zfbox"><textarea name="content" id="bi_content" class="inputbox" placeholder="请输入您的祝福信息" required="" data-minlength="10"></textarea></div>
                    <div style="100%; text-align:center"><input type="button" id="send_message" value="发送祝福" onclick="addblessing()"></div>
                    
                    
<input type="hidden" name="myFormAc" id="myFormAc" value="update">
</form>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="list" style="background-color:#FFF">
                    
                    <style>
.commenthead{
    height: 32px;
    line-height: 32px;
    font-size: 1em; text-indent: 10px;
    color: #317ecb; font-weight: normal;
    border-top: 2px solid #4998e7;
    border-bottom: 1px solid #e8e8e8;
}
#total{
  font-size: 0.8125em;
  color: #a5a5a5;
  font-style: normal;
  margin: 0 0 0 5px;
}
.commentlist li{
    padding: 10px 8px 0;
    border-bottom: 1px solid #eaeaea;
    border-top: 1px solid #fff;
}
.commentlist .meta{
    font-size: 0.8125em;
    color: #a8abaf;
    text-align: left;
    font-weight: 400;
    padding: 3px 0
}
.commentlist .meta time{
    float: right;
}
.commentlist .content{
    color: #454545;
    line-height: 1.375em;
    font-size: 0.8125em;
    padding: 5px 0 10px;
    word-wrap:break-word;
}
.jump,.gochannels,.cComm:before,.more .gomore:after,.more .gochannel:after,.gotop:after{
    background-image: url(http://mat1.gtimg.com/www/mobi/image/icon.png);
    background-repeat: no-repeat;
    background-position: 0 0;
    -webkit-background-size:119px 21px;
    -moz-background-size:119px 21px;
    -o-background-size:119px 21px;
    background-size:119px 21px;
	
}
.more{
  height: 33px; line-height: 33px;
  /*margin: 0 8px; */border:1px solid #efefef;
  background-color: #f6f5f5;
  text-align: center;/* margin-bottom: 15px;*/
}
.more,.more a,.more span{
    color: #b4b4b4
}
.more span{
  font-size: 1em;
}
.more .gomore:after,.more .gochannel:after{
  content: ""; display: inline-block;
  width: 21px; height: 21px;
  vertical-align: -5px;
  margin-left: 5px;
}
.more .gochannel:after{
  background-position: -62px 0;
}
.more .gomore:after{
  background-position: -42px 0;
}
</style>

<script language="javascript">
var cid = 0;
function loadComment()
{
	var str_data = "action=ajax_load&cid=" + cid + "&t= " + new Date().getTime();
	$.ajax({
	type: "GET", 
	url: "index.php?ac=wreply&channelid=3&pid=86175&"+str_data, 
	dataType: "json",
	//data: str_data, 
	success: function(data){
			if (data.length == 0)
			{
				document.getElementById("getmore").innerHTML = "全部评论加载完成";
			}
             for(var i=0;i<(data.length);i++){
				 var time = new Date(data[i].time * 1000);
				 var t1 = time.getFullYear()+"-"+(time.getMonth()+1)+"-"+time.getDate()+" "+time.getHours()+":"+time.getMinutes()+":"+time.getSeconds();
                 var html = '<li><h3 class="meta">' + data[i].name;
				 html += '<time>' + t1 + '</time></h3>';
				 html += '<p class="content">' + data[i].content + '</p></li>';
                 $('#comment').append(html);
				 if (cid == 0 || cid > parseInt(data[i].id))
				 {
					 cid = parseInt(data[i].id);
				 }
             }

	},
	error: function (xhr, type, exception) {
                 alert(exception, "Failed");
             }
}); 


}
</script>
<div style="width:95%; margin-left:8px; margin-right:8px;border:1px solid #efefef;background-color:#FFF ">
        <div class="H commenthead">
                 	亲友祝福
           
           <i id="total">(<?php echo ($total); ?>条)</i></div>
 				<ul class="commentlist" id="comment">


        <?php if(($total) == "0"): ?><li>
            <p class="content">快来送上第一条祝福吧</p>
            </li>
            <?php else: ?>


            <?php if(is_array($datalist)): $i = 0; $__LIST__ = $datalist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <h3 class="meta">
                        <?php echo ($vo["name"]); ?>
                        <time><?php echo ($vo["time"]); ?></time>
                    </h3>
                    <p class="content"><?php echo ($vo["blessing"]); ?></p>
                </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>


		                </ul>
                      </div>                           
                    </div>
    
<script language="javascript">
 function addblessing(){
	 var tn=$('#bi_name').val();
	 var rs=$('#num').val();
	 var zf=$('#bi_content').val();
	 var phone =$('#bi_phone').val();
	 
if (tn==''||tn=='您的姓名'){
	alert('请填写您的姓名');
	 $('#bi_name').focus();
	 return ;
 }

	document.getElementById("sending_msg").style.display ="block";
	document.getElementById("send_msg_form").style.display ="none";
	var str_data = "myFormAc=update&name=" + tn + "&phone= " + phone + "&num= " + rs + "&content= " + zf;
	//alert(str_data); 
	$.ajax({	
	type: "POST", 
	url: "submit",
	data: str_data,
    dataType: "json",
	success: function(res){
        if(1 == parseInt(res['ret']))
        {
            html = "您的祝福我们已经收到，谢谢。";
            document.getElementById("sending_msg").innerHTML = html;
        }
        else
        {
            document.getElementById("sending_msg").style.display ="none";
            document.getElementById("send_msg_form").style.display ="block";
            alert('祝福发送失败，请再试一下。');
        }
	},
   error: function(){                        //返回失败后
      	document.getElementById("sending_msg").style.display ="none";
	document.getElementById("send_msg_form").style.display ="block";
      alert('祝福发送失败，请再试一下。'); 
      }
}); 

		return ;
 }
 
</script>

<style>
.msgSel{ height:45px; text-align:center; padding-top:0px;}
.msgSel span{ display:inline-block; color:#333; border:1px solid #CCC; border-radius:30px; -webkit-border-radius:30px; background:#fff; line-height:30px; padding:0px 10px 0px 35px; position:relative; opacity:0.5;}

.contenbox{
	/*background-color:#FFF; padding:3px; margin-top:7px; border-radius:2px;border-top:1px solid #CCC; */
    background-color:#FFF; padding:3px;box-shadow:0px 1px 3px rgba(34,25,25,0.4); margin:5px; border-radius:2px; font-size:18px;
}
.blessing_list_top{width:100%; height:auto; float:left;}
.blessing_list_name{width:auto; height:20px; color:#e2ab6a;float:left; font-size:16px; margin:5px}
.blessing_list_time{ width:auto; height:20px;float:right; font-size:12px;margin:5px}
.contenbox p{ text-align:left;margin:5px!important;}
</style>


  
  
  
              
	</div>
        </div>
        </div>
        </div>
        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>
    </div><!--SPLIT--end--> 

<!--SPLIT--begin--><h3 style="display:" id="invite_detail_title7095" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-e"></span>
    
 		<div name="button4" id="button4" class="button">
            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>
            <div class="button-mr">
            <div class="button-ml">
			<div class="button-mm">
    			<a href="http://www.188xi.com/3-86175#"><img class="iconimage" src="<?php echo (C("static_path")); ?>images/4.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name7095">婚宴地图</span></a></div>
            </div>
            </div>
            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>
		</div>
	</h3>
     
<div class="accordion my-map ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content7095" style="display: none;" role="tabpanel">

 	<div style="width: 95%; height: 295px; border: 1px solid rgb(204, 204, 204); overflow: hidden; position: relative; z-index: 0; color: rgb(0, 0, 0); text-align: left; background-color: rgb(243, 241, 236);" id="map_container"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(http://api.map.baidu.com/images/openhand.cur) 8 8, default;"><div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; -webkit-user-select: none; width: 0px; height: 0px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><span class="BMap_Marker BMap_noprint" unselectable="on" "="" style="position: absolute; padding: 0px; margin: 0px; border: 0px; cursor: pointer; width: 19px; height: 25px; left: -10px; top: -25px; z-index: -6715558; background: url(http://api.map.baidu.com/images/blank.gif);" title=""></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><span class="BMap_Marker" unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 0px; height: 0px; left: -10px; top: -25px; z-index: -6715558;"><div style="position: absolute; margin: 0px; padding: 0px; width: 19px; height: 25px; overflow: hidden;"><img src="<?php echo (C("static_path")); ?>images/marker_red_sprite.png" style="border:none;left:0px; top:0px; position:absolute;"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"><span unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 20px; height: 11px; left: -6px; top: -11px;"><div style="position: absolute; margin: 0px; padding: 0px; width: 20px; height: 11px; overflow: hidden;"><img src="<?php echo (C("static_path")); ?>images/marker_red_sprite.png" style="border:none;left:-19px; top:-13px; position:absolute;"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; top: 0px; left: 0px; z-index: 1; -webkit-backface-visibility: hidden;"><div style="position: absolute; z-index: -100; left: 0px; top: 0px;"><img src="<?php echo (C("static_path")); ?>js/saved_resource" style="position: absolute; border: none; width: 256px; height: 256px; left: -168px; top: -18px; opacity: 1;"></div></div><div style="position: absolute; top: 0px; left: 0px; z-index: 2;"></div></div><div class=" anchorBL" style="height: 32px; position: absolute; z-index: 10; bottom: 0px; right: auto; top: auto; left: 1px; display: none;"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: none;"><img style="border:none;width:77px;height:32px" src="<?php echo (C("static_path")); ?>images/copyright_logo.png"></a></div><div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(http://api.map.baidu.com/images/openhand.cur) 8 8,default"><div class="BMap_zoomer" style="top:0;left:0;"></div><div class="BMap_zoomer" style="top:0;right:0;"></div><div class="BMap_zoomer" style="bottom:0;left:0;"></div><div class="BMap_zoomer" style="bottom:0;right:0;"></div></div><div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 62px; height: 204px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100;"><div class="BMap_stdMpPan"><div class="BMap_button BMap_panN" title="向上平移"></div><div class="BMap_button BMap_panW" title="向左平移"></div><div class="BMap_button BMap_panE" title="向右平移"></div><div class="BMap_button BMap_panS" title="向下平移"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div class="BMap_stdMpZoom" style="height: 159px; width: 62px;"><div class="BMap_button BMap_stdMpZoomIn" title="放大一级"><div class="BMap_smcbg"></div></div><div class="BMap_button BMap_stdMpZoomOut" title="缩小一级" style="top: 138px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSlider" style="height: 120px;"><div class="BMap_stdMpSliderBgTop" style="height: 120px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderBgBot" style="top: 25px; height: 99px;"></div><div class="BMap_stdMpSliderMask" title="放置到此级别"></div><div class="BMap_stdMpSliderBar" title="拖动缩放" style="cursor: url(http://api.map.baidu.com/images/openhand.cur) 8 8, default; top: 25px;"><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div></div><div unselectable="on" class=" BMap_cpyCtrl anchorBL" style="cursor: default; white-space: nowrap; color: black; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 11px; line-height: 15px; font-family: arial, sans-serif; bottom: 2px; right: auto; top: auto; left: 4px; position: absolute; z-index: 10; background: none;"><span _cid="1" style="display: inline;"><span style="font-size:11px">© 2015 Baidu&nbsp;- Data © <a target="_blank" href="http://www.navinfo.com/">NavInfo</a> &amp; <a target="_blank" href="http://www.cennavi.com.cn/">CenNavi</a> &amp; <a target="_blank" href="http://www.365ditu.com/">道道通</a></span></span></div></div>
                    <!--百度地图-->
<script type="text/javascript" src="<?php echo (C("static_path")); ?>js/api"></script><script type="text/javascript" src="<?php echo (C("static_path")); ?>js/getscript"></script><link rel="stylesheet" type="text/css" href="<?php echo (C("static_path")); ?>css/bmap.css">
<script type="text/javascript">
var point = "114.020136,33.577793";
var mapX=point.split(',')[0];var mapY=point.split(',')[1];
	var map = new BMap.Map("map_container");
$(function (){

	map.enableScrollWheelZoom();

	var x,y;
	var marker = '';
		map.centerAndZoom(new BMap.Point(mapX,mapY),15);
		map.addControl(new BMap.NavigationControl());  

		x = mapX;
		y = mapY;
		map.removeOverlay(marker);
		var pt = new BMap.Point(x, y);
		marker = new BMap.Marker(pt); 
		map.addOverlay(marker); 
		
});

	map.addEventListener("tilesloaded",function(){map.setCenter(new BMap.Point(mapX,mapY)); 
	});
	

</script><style>
.hinfo p{height:44px;font-size:16px;color:#fff;line-height:44px;background:url("http://res.188xi.com/static/css/eic/18/icon.png") no-repeat #4BC7C7;margin:15px;text-indent:60px;overflow:hidden;}
.hinfo p.hour{background-position:17px -65px ;}
.hinfo p.phone{background-position:17px -123px ;}
.hinfo p.guide{background-position:17px -183px ;background-color:#F86868;}
.hinfo p a{display:block;width:100%;color:#fff}
</style>

<div class="hinfo">
                  <p class="guide"><a href="http://api.map.baidu.com/marker?location=33.577793,114.020136&title=%E6%BC%AF%E6%B2%B3%E5%B8%82%E6%BA%90%E6%B1%87%E5%8C%BA%E9%95%BF%E6%B1%9F%E8%B7%AF1%E5%8F%B7%E5%87%AF%E6%82%A6%E9%85%92%E5%BA%97%E8%A5%BF%E5%AE%B4%E5%8E%85&content=%E6%BC%AF%E6%B2%B3%E5%B8%82%E6%BA%90%E6%B1%87%E5%8C%BA%E9%95%BF%E6%B1%9F%E8%B7%AF1%E5%8F%B7%E5%87%AF%E6%82%A6%E9%85%92%E5%BA%97%E8%A5%BF%E5%AE%B4%E5%8E%85&output=html" title="点击一键导航">点击一键导航</a></p>
                

        </div>
    </div><!--SPLIT--end--> 

  


<!--SPLIT--begin-->   
<h3 style="display:" id="invite_detail_title8096" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-e"></span>
    
 		<div name="button5" id="button5" class="button">
            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>
            <div class="button-mr">
            <div class="button-ml">
			<div class="button-mm">
   			  <a href="http://www.188xi.com/3-86175#"><img class="iconimage" src="<?php echo (C("static_path")); ?>images/5.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name8167">爱情宣言</span></a>            </div>
            </div>
            </div>
            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>
		</div>
	</h3>
	<div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content8096" style="display: none;" role="tabpanel">
    <div id="detail8096" class="detail">
        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>
        <div class="detail-mr">
        <div class="detail-ml">
        <div class="detail-mm">

<div class="invitext">

<div id="remindtitle"><span style="font-size:18px;"><span style="font-size:17px;">从相遇的那一刻，每一天，路不再是路，而是相伴；从相知的那一瞬，每一秒，生活不再是生活，而是两个个体的融合！今天，我们要结婚了，希望能与您一同分享这爱的美好旅程。</span></span></div>
</div>
       
	</div>
        </div>
        </div>
        </div>
        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>
    </div>
     
<!--SPLIT--end--> 
<!--SPLIT--begin--> 
 <h3 style="display:" id="invite_detail_title9097" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-e"></span>
    
 		<div name="button6" id="button6" class="button">
            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>
            <div class="button-mr">
            <div class="button-ml">
			<div class="button-mm">
    			<a href="http://www.188xi.com/3-86175#"><img class="iconimage" src="<?php echo (C("static_path")); ?>images/6.png" border="0" align="absmiddle">&nbsp;<span id="invite_detail_name7167">婚礼提醒</span></a>            </div>
            </div>
            </div>
            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>
		</div>
	</h3>

	<div class="accordion ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="invite_detail_content7171" style="display: none;" role="tabpanel">
    <div id="detail7171" class="detail">
        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>
        <div class="detail-mr">
        <div class="detail-ml">
        <div class="detail-mm">
		
             <div style="margin-top:5px; margin-bottom:15px">
                <div style="font-size:14px; margin-bottom:5px">距婚礼开始还有:</div>
                <div style="width:100%" align="center">
                                  <div id="_lefttime" style="border:1px solid #777; width:90%; text-align:center; background-color:#FFC; font-size:22px; color:#777;">
                                      <?php echo ($left_days); ?>天
                                  </div>


                  
                  
                  
                  <div style="font-size:12px; margin-top:5px"></div>
                </div>
            </div>
            
<script>
	$(function() {
		$('#inviteurl').click(function(){
				if($.browser.msie) this.createTextRange().select();
				else {
					this.selectionStart = 0;
					this.selectionEnd = this.value.length;
				}
		});
	})
</script>

		
	</div>
    
        </div>
        </div>
        </div>
        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>
    </div>
 <!--SPLIT--end--> 
</div>
<!--accordion end-->


<div id="footer"><div id="copyright"><div id="copyright-text">技术支持 : shumeng.ren</div></div></div><style type="text/css">
#musicControl { position:fixed;right:10px;top:30%;margin-top:-27px;display:inline-block;z-index:200}
#musicControl a { display:inline-block;width:46px;height:46px;overflow:hidden;background-image:url('http://res.188xi.com/images/mcbg.png');background-repeat: no-repeat ;background-size:100%;}
#musicControl a audio{width:100%;height:50px;}
#musicControl a.stop { background-position:1px bottom;}
#musicControl a.on { background-position:0px 1px;-webkit-animation: reverseRotataZ 1.2s linear infinite;}

#music_play_filter{width:100%;height:100%;overflow:hidden;position:fixed;top:0;left:0; filter:alpha(Opacity=80);-moz-opacity:0.5;opacity: 0.5;z-index:100;}
</style>
<span id="musicControl">
    <a id="mc_play" class="on" onclick="play_music();">
		<audio id="musicfx" loop="" autoplay="">
			<source src="<?php echo (C("static_path")); ?>images/6.mp3" type="audio/mpeg">
		</audio>
	</a>
</span>
<div id="music_play_filter" onclick="just_play(1)" style="display: none;"></div>
<script type="text/javascript">
	function play_music(){
		if ($('#mc_play').hasClass('on')){
			$('#mc_play audio').get(0).pause();
			$('#mc_play').attr('class','stop');
		}else{
			$('#mc_play audio').get(0).play();
			$('#mc_play').attr('class','on');
		}
		$('#music_play_filter').hide();
	}
	function just_play(id){
		$('#mc_play').attr('class','on');
		$('#mc_play audio').get(0).play();
		if (typeof(id)!='undefined'){
			$('#music_play_filter').hide();
		}
	}
	
	function is_weixn(){
		return false;
		var ua = navigator.userAgent.toLowerCase();
		if(ua.match(/MicroMessenger/i)=="micromessenger") {
			return true;
		} else {
			return false;
		}
	}

	
	
	
	var play_filter=document.getElementById('music_play_filter');
	play_filter.addEventListener('click', function(){
		just_play(1);
	});
	play_filter.addEventListener('touchstart', function(){
		just_play(1);
	});
	play_filter.addEventListener('touchend', function(){
		just_play(1);
	});
	play_filter.addEventListener('touchmove', function(){
		just_play(1);
	});
	play_filter.addEventListener('mousedown', function(){
		just_play(1);
	});
	play_filter.addEventListener('mouseup', function(){
		just_play(1);
	});
	play_filter.addEventListener('mousemove',function(){
		just_play(1);
	});



</script><div style="display:none">

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?944cf11a9b43f7fdfa55c4e03dacbd09";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</div><!--showphp:default/xt/s2_1.php-->
<script type="text/javascript" src="<?php echo (C("static_path")); ?>js/jweixin-1.0.0.js"></script>



<script type="text/javascript">

 // 微信配置

 wx.config({

     debug: false, 

     appId: "wx867121633b19c180", 

     timestamp: '1448149213', 

     nonceStr: '919H769A50', 

     signature: '53b5db760bf3b76c36db4728945b5dc94ed22f04',

     jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage','onMenuShareQQ'] 

 }); 

// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在 页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready 函数中。

 wx.ready(function(){

     // 获取“分享到朋友圈”按钮点击状态及自定义分享内容接口

     wx.onMenuShareTimeline({

         title: '我们结婚啦!', // 分享标题

         link: 'http://www.188xi.com/index.php?ac=show&mod=3&id=86175&n=',

         imgUrl: 'http://7qn9tb.com1.z0.glb.clouddn.com/FjKhHqFtLT1Nn93VvLZ27dNXRnh4?imageMogr2/crop/!666x666a0a295' // 分享图标

     });

     // 获取“分享给朋友”按钮点击状态及自定义分享内容接口

     wx.onMenuShareAppMessage({

         title: '我们结婚啦!', // 分享标题

         desc: '2015年12月07日 12时00分 漯河市源汇区长江路1号 王鲲鹏 & 王静静 诚邀', // 分享描述

         link: 'http://www.188xi.com/index.php?ac=show&mod=3&id=86175&n=',

         imgUrl: 'http://7qn9tb.com1.z0.glb.clouddn.com/FjKhHqFtLT1Nn93VvLZ27dNXRnh4?imageMogr2/crop/!666x666a0a295', // 分享图标

         type: 'link', // 分享类型,music、video或link，不填默认为link
		 
		 success: function () { 
        	      	}


     });
	
	
	wx.onMenuShareQQ({
    title: '我们结婚啦!', // 分享标题
    desc: '2015年12月07日 12时00分 漯河市源汇区长江路1号 王鲲鹏 & 王静静 诚邀', // 分享描述
    link: 'http://www.188xi.com/index.php?ac=show&mod=3&id=86175&n=', // 分享链接
    imgUrl: 'http://7qn9tb.com1.z0.glb.clouddn.com/FjKhHqFtLT1Nn93VvLZ27dNXRnh4?imageMogr2/crop/!666x666a0a295', 
		 
		 success: function () { 
        	      	}
});


 });

 </script>

		<script type="text/javascript">


		
			var guideDiv;
			/////addWinOnloadEvent(initGuideFunc);

			function initGuideFunc(){
				guideDiv = document.getElementById("wechatshareguide");
					if (guideDiv.addEventListener) {
						guideDiv.addEventListener("click", hideGuideFunc, false);
					} else {
						guideDiv.attachEvent('onclick', hideGuideFunc);
					}
			}
			

			function hideGuideFunc(){
				guideDiv.style.display = 'none';
			}
			$(function() {
				initGuideFunc();
			});
        </script>

	<style>
    #wechatshareguide{
        top: 0;
        width: 100%;
        height: 100%;
        background:url("http://res.188xi.com/images/wechatshareguide.png") rgba(0,0,0,0.7) no-repeat 90% 10px;
        background-size: 35%;
        position: absolute;
    position:fixed; right:0%; top:0%;_position:absolute;_top:expression(eval(document.documentElement.clientHeight+document.documentElement.scrollTop)); _left:expression(eval(document.documentElement.clientWidth+document.documentElement.scrollLeft));
	z-index:99999;
    
    }
    </style>
    <div id="wechatshareguide" style="display:none;"></div>    

<!--PC版始终显示试用提醒--><!--电脑版 || 手机版 并且 在3G模式下-->  
  </div></body></html>