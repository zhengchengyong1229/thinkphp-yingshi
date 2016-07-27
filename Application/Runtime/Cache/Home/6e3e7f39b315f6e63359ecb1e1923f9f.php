<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
<title>威海市影视产业服务公共平台</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/Public/css/reset.css" rel="stylesheet" />
<link href="/Public/css/main.css" rel="stylesheet"/>
<script src="/Public/js/jquery.js"></script> 
<script src="/Public/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="header">
	<!-- LOGO -->
	<div class="wrap">
		<div class="head_top">
			<div class="logo fl"><a href="#"><img src="/Public/images/logo.png"/></a></div>
			<div class="phone fr"><a href="#"><img src="/Public/images/phone.jpg"/></a></div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- 导航条 -->
	<div class="nav_bar">
		<div class="wrap">
			<div class="nav">
				<ul>
					<li id="m1" class="m"><h3><a href="#"><img src="/Public/images/nav1.png"/></a></h3></li>
					<li id="m2" class="m">
						<h3><a href="#"><img src="/Public/images/nav2.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">产业动态</a></li>
						  <li><a href="#">娱乐聚焦</a></li>
						  <li><a href="#">威海片场</a></li>
						  <li><a href="#">政策解读</a></li>
						  <li><a href="#">院线电影</a></li>
						</ul>
					</li>
					<li id="m3" class="m">
						<h3><a href="#"><img src="/Public/images/nav3.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">合作交流</a></li>
						  <li><a href="#">影视输出</a></li>
						  <li><a href="#">技术引进</a></li>
						  <li><a href="#">作品引进</a></li>
						  <li><a href="#">创意团队</a></li>
						</ul>
					</li>
					<li id="m4" class="m">
						<h3><a href="#"><img src="/Public/images/nav4.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">外景地</a></li>
						  <li><a href="#">录音棚</a></li>
						  <li><a href="#">摄影棚</a></li>
						  <li><a href="#">后处理</a></li>
						  <li><a href="#">创客空间</a></li>
						  <li><a href="#">入驻企业</a></li>
						</ul>
					</li>
					<li id="m5" class="m">
						<h3><a href="#"><img src="/Public/images/nav5.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">拍摄设备</a></li>
						  <li><a href="#">辅助设备</a></li>
						  <li><a href="#">后期设备</a></li>
						  <li><a href="#">其他设备</a></li>
						  <li><a href="#">交通工具</a></li>
						  <li><a href="#">二手交易</a></li>
						</ul>
					</li>
					<li id="m6" class="m">
						<h3><a href="#"><img src="/Public/images/nav6.png"/></a></h3>
						<ul class="sub">
						  <li><a href="#">项目展示</a></li>
						  <li><a href="#">影视合作</a></li>
						  <li><a href="#">产业融资</a></li>
						  <li><a href="#">IP 交流</a></li>
						  <li><a href="#">剧本交易</a></li>
						</ul>
					</li>
					<li id="m7" class="m">
						<h3><a href="#"><img src="/Public/images/nav7.png"/></a></h3>
						<ul class="sub">
							  <li><a href="#">全职招聘</a></li>
							  <li><a href="#">全职简历</a></li>
							  <li><a href="#">群演招聘</a></li>
							  <li><a href="#">群演说明</a></li>
							  <li><a href="#">相关培训</a></li>
						</ul>
					</li>
					<li id="m8" class="m">
						<h3><a href="#"><img src="/Public/images/nav8.png"/></a></h3>
						<ul class="sub">
							  <li><a href="#">威影发展</a></li>
							  <li><a href="#">威影作品</a></li>
							  <li><a href="#">威影人才</a></li>
							  <li><a href="#">非遗影像</a></li>
							  <li><a href="#">威海影像志</a></li>
						</ul>
					</li>
					<li id="m9" class="m">
						<h3><a href="#"><img src="/Public/images/nav9.png"/></a></h3>
						<ul class="sub">
							  <li><a href="#">原创影视</a></li>
							  <li><a href="#">国产影视</a></li>
							  <li><a href="#">欧美影视</a></li>
							  <li><a href="#">亚洲影视</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- <div class="search">
				<div class="s_pad">
					<form id="form1" name="form1" method="post" action="#">
						<input type="text" name="search" id="search" value="" class="ss_txt"/>
						<input type="button" name="dl" id="button" value="" class="ss_bott" onClick="CheckPass1()" hidefocus />
					</form>
				</div>
			</div> -->
			<div class="clear"></div>
		</div>
	</div>
	<!-- 导航结束 -->
</div>


<!-- 轮播图 -->
<div class="banner">
	<div class="focusBox">
		<ul class="pic">
			<li style="background:url(/Public/images/b1.jpg) center top no-repeat;"><a href="#"></a></li>
			<li style="background:url(/Public/images/b1.jpg) center top no-repeat;"><a href="#"></a></li>
			<li style="background:url(/Public/images/b1.jpg) center top no-repeat;"><a href="#"></a></li>
		</ul>
		<a class="prev" href="javascript:void(0)"></a>
		<a class="next" href="javascript:void(0)"></a>
		<ul class="hd">
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
<!-- 轮播图结束 -->

<!-- The Scripts -->
<script type="text/javascript">
jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});//banner图
jQuery(".nav").slide({ type:"menu",  titCell:".m", targetCell:".sub", effect:"slideDown", delayTime:300, triggerTime:100,returnDefault:true  });//导航

jQuery(".slideGroup .slideBox").slide({ mainCell:"ul",vis:5,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});
/* 外层tab切换 */
jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});

jQuery(".adsBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true});/*广告按钮*/
</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	



	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

    <style type="text/css">
        div{
            width:100%;
        }
    </style>



	<div style="width:1100px;margin:0px auto;">
		<form action="/index.php/Home/Zixun/upload" method="POST" enctype="multipart/form-data">
		<h2>标题：</h2><input type="text" name="biaoti"/>
		<script id="editor" type="text/plain" style="width:1024px;height:300px;" name="neirong"></script>
		<input type="submit" value="提交" />
		</form>
	</div>



	<script type="text/javascript">

		//实例化编辑器
		//建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
		var ue = UE.getEditor('editor');


		function isFocus(e){
			alert(UE.getEditor('editor').isFocus());
			UE.dom.domUtils.preventDefault(e)
		}
		function setblur(e){
			UE.getEditor('editor').blur();
			UE.dom.domUtils.preventDefault(e)
		}
		function insertHtml() {
			var value = prompt('插入html代码', '');
			UE.getEditor('editor').execCommand('insertHtml', value)
		}
		function createEditor() {
			enableBtn();
			UE.getEditor('editor');
		}
		function getAllHtml() {
			alert(UE.getEditor('editor').getAllHtml())
		}
		function getContent() {
			var arr = [];
			arr.push("使用editor.getContent()方法可以获得编辑器的内容");
			arr.push("内容为：");
			arr.push(UE.getEditor('editor').getContent());
			alert(arr.join("\n"));
		}
		function getPlainTxt() {
			var arr = [];
			arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
			arr.push("内容为：");
			arr.push(UE.getEditor('editor').getPlainTxt());
			alert(arr.join('\n'))
		}
		function setContent(isAppendTo) {
			var arr = [];
			arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
			UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
			alert(arr.join("\n"));
		}
		function setDisabled() {
			UE.getEditor('editor').setDisabled('fullscreen');
			disableBtn("enable");
		}

		function setEnabled() {
			UE.getEditor('editor').setEnabled();
			enableBtn();
		}

		function getText() {
			//当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
			var range = UE.getEditor('editor').selection.getRange();
			range.select();
			var txt = UE.getEditor('editor').selection.getText();
			alert(txt)
		}

		function getContentTxt() {
			var arr = [];
			arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
			arr.push("编辑器的纯文本内容为：");
			arr.push(UE.getEditor('editor').getContentTxt());
			alert(arr.join("\n"));
		}
		function hasContent() {
			var arr = [];
			arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
			arr.push("判断结果为：");
			arr.push(UE.getEditor('editor').hasContents());
			alert(arr.join("\n"));
		}
		function setFocus() {
			UE.getEditor('editor').focus();
		}
		function deleteEditor() {
			disableBtn();
			UE.getEditor('editor').destroy();
		}
		function disableBtn(str) {
			var div = document.getElementById('btns');
			var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
			for (var i = 0, btn; btn = btns[i++];) {
				if (btn.id == str) {
					UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
				} else {
					btn.setAttribute("disabled", "true");
				}
			}
		}
		function enableBtn() {
			var div = document.getElementById('btns');
			var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
			for (var i = 0, btn; btn = btns[i++];) {
				UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
			}
		}

		function getLocalData () {
			alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
		}

		function clearLocalData () {
			UE.getEditor('editor').execCommand( "clearlocaldata" );
			alert("已清空草稿箱")
		}
	</script>



	<!-- /主体 -->

	<!-- 底部 -->
	<div class="footer">
	<div class="wrap">
		<div class="pad15">
			<div class="fl"><a href="#"><img src="/Public/images/f_logo.gif"></a></div>
			<div class="fr tr mr15">Copyright 2010 All rights reserved 威海市影视产业服务公共平台 版权所有<br/> 
	地　址：山东省威海市高山街29号 电　话：0631-5275058<br/>         
	鲁ICP备08102547号 技术支持：威海财经网</div>
		</div>
	</div>
</div>
	<!-- /底部 -->
</body>
</html>