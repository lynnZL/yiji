<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>青峰-后台管理系统</title>
<meta title="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta title="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>

<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">
	
<div id="wp" class="wp">
	<?php if($usertplid == 0): ?><link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style.css?id=103" rel="stylesheet" type="text/css" />
	<?php else: ?>
		<link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style-<?php echo ($usertplid); ?>.css?id=103" rel="stylesheet" type="text/css" /><?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style_2_common.css?BPm" />
<style>
a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:#000;border:1px solid #AAA;padding:2px 8px 2px 8px;text-shadow: 0 1px #FFFFFF;font-size: 14px;line-height: 1.5;
}

.pages{padding:3px;margin:3px;text-align:center;}
.pages a{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#036cb4;text-decoration:none;}
.pages a:hover{border:#999 1px solid;color:#666;}
.pages a:active{border:#999 1px solid;color:#666;}
.pages .current{border:#036cb4 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#036cb4;}
.pages .disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
</style>
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
 <?php if(session('isQcloud') == true): ?><link type="text/css" rel="stylesheet" href="http://qzonestyle.gtimg.cn/qcloud/app/open/v1/css/wxcloud.min.css" />


<style>
.px {
	background:#fff;

	border-color:#c9c9c9;

}


input[type=radio] {

	border-radius:55px;

	border: none;

}
.btnGreen {
	border:1px solid #FFFFFF;
	box-shadow:0 1px 1px #0A8DE4;
	-moz-box-shadow:0 1px 1px #0A8DE4;
	-webkit-box-shadow:0 1px 1px #0A8DE4;
	padding:5px 20px;
	cursor:pointer;
	display:inline-block;
	text-align:center;
	vertical-align:bottom;
	overflow:visible;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
*zoom:1;
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #107BAD  3%, #18C2D1 97%, #18C2D1 100%);
	background-image:-moz-linear-gradient(bottom, #107BAD  3%, #0A8DE40 97%, #18C2D1 100%);
	background-image:-webkit-linear-gradient(bottom, #107BAD  3%,#0A8DE4 97%, #18C2D1 100%);
	color:#fff; font-size:14px; line-height: 1.5;
}
.btnGreen:hover {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-moz-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-webkit-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	color:#fff
}
.btnGreen:active {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-moz-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-webkit-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	color:#fff
}

.btnGreen{border:1px solid #3d810c;box-shadow:0 1px 1px #aaa;-moz-box-shadow:0 1px 1px #aaa;-webkit-box-shadow:0 1px 1px #aaa;padding:5px 20px;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;*zoom:1;background-color:#5ba607;background-image:linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);color:#fff;font-size:14px;line-height:1.5;}.btnGreen:hover{background-color:#5ba607;background-image:linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);color:#fff}.btnGreen:active{background-color:#5ba607;background-image:linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);color:#fff}

</style><?php endif; ?>
<?php
if (!isset($_SESSION['isQcloud'])){ ?>

<div class="topbg">
<div class="top">
<div class="toplink">
<style>
.topbg{BACKGROUND-IMAGE: url(<?php echo RES;?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:24px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 24px;
}
.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo RES;?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo RES;?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
a.a_upload{color:#f30}
</style>
<div class="welcome">欢迎使用青峰后台管理平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Login/index');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<!-- <a href="<?php echo U('Index/login');?>">注册</a> -->
			<?php else: ?>
			你好,<a  hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="<?php echo U('Login/logout');?>" >退出</a><?php endif; ?>	
	</div>
</div>
   
    </div>
</div>
<div id="aaa"></div>
<?php
} ?>

  <!--中间内容-->

  <div class="contentmanage"<?php if (isset($_SESSION['isQcloud'])){?> style="width:100%"<?php }?>>
  <?php
if (!isset($_SESSION['isQcloud'])){ ?>
    <div class="developer">
      <!--左侧功能菜单-->


<style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
background: #fff;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  background: #fff;
}

ul#menu a {
  display: block;
  text-decoration: none;
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;

}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.w2{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
.tableContent .content{min-height: 1328px;}

a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}
</style>

<?php
} ?>
      <div class="tableContent">
        <?php
if (!isset($_SESSION['isQcloud'])){ ?>
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<?php
$node=M('bl_node'); $value=$node->select(); foreach($value as $m=>$n){ $ms[]=$value[$m]['name']; } $parms=$_SERVER['QUERY_STRING']; $parms1=explode('.',$parms); $parms1=ltrim($parms1[0],'s=/'); $parms1=explode('/',$parms1); $cishu=count($parms1); $parms10[0]="g={$parms1[0]}"; $parms10[1]="m={$parms1[1]}"; $parms10[2]="a={$parms1[2]}"; $parms10[3]="{$parms1[3]}={$parms1[4]}"; $parms10[4]="{$parms1[5]}={$parms1[6]}"; $parms10[5]="{$parms1[7]}={$parms1[8]}"; $parms10[6]="{$parms1[9]}={$parms1[10]}"; foreach($parms10 as $k=>$v){ if($v=="="){ unset($parms10[$k]); } } $parms1=$parms10; $parmsArr=array(); if ($parms1){ foreach ($parms1 as $p){ $parms2=explode('=',$p); $parmsArr[$parms2[0]]=$parms2[1]; } } $subMenus=array(); $t=0; $currentMenuID=0; $currentParentMenuID=0; foreach ($menus as $m){ $loopContinue=1; if ($m['subs']){ $st=0; foreach ($m['subs'] as $s){ $includeArr=1; if ($s['selectedCondition']){ foreach ($s['selectedCondition'] as $condition){ if (!in_array($condition,$parmsArr)){ $includeArr=0; break; } } } if ($includeArr){ if ($s['exceptCondition']){ foreach ($s['exceptCondition'] as $epkey=>$eptCondition){ if ($epkey=='a'){ $parm_a_values=explode(',',$eptCondition); if ($parm_a_values){ if (in_array($parmsArr['a'],$parm_a_values)){ $includeArr=0; break; } } }else { if (in_array($eptCondition,$parmsArr)){ $includeArr=0; break; } } } } } if ($includeArr){ $currentMenuID=$st; $currentParentMenuID=$t; $loopContinue=0; break; } $st++; } if ($loopContinue==0){ break; } } $t++; } foreach ($menus as $m){ $displayStr=''; if ($currentParentMenuID!=0||0!=$currentMenuID){ $m['display']=0; } if (!$m['display']){ $displayStr=' style="display:none"'; } if ($currentParentMenuID==$i){ $displayStr=''; } $aClassStr=''; if ($displayStr){ $aClassStr=' nav-header-current'; } if($i == 0){ echo '<a class="nav-header'.$aClassStr.'" style="border-top:none !important;"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; }else{ echo '<a class="nav-header'.$aClassStr.'"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; } if ($m['subs']){ $j=0; foreach ($m['subs'] as $s){ $selectedClassStr='subCatalogList'; if ($s['Nname']==$_GET['name']){ $selectedClassStr='selected'; } if (file_exists($_SERVER['DOCUMENT_ROOT'].'/weimicms/Lib/Action/User/WallAction.class.php')&&file_exists($_SERVER['DOCUMENT_ROOT'].'/weimicms/Lib/Action/User/ShakeAction.class.php')){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; } } } echo '</ul>'; $i++; } ?>

<div style="clear:both"></div>
</ul>
</div>
</div>
<?php
} ?>
<script type="text/javascript">
$(document).ready(function(){
		$(".nav-header").mouseover(function(){
			$(this).addClass('navHover');
		}).mouseout(function(){
			$(this).removeClass('navHover');
		}).click(function(){
			$(this).toggleClass('nav-header-current');
			$(this).next('.ckit').slideToggle();
		})
	}); 


</script>

<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />


<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<div class="content">
          <div class="cLineB"><h4>群发信息</h4></div>

<div class="msgWrap form">
<ul id="tags" style="width:100%">
<li class="selectTag">
				<a href="?g=User&m=Message&a=index">发送消息（通过群发接口）</a> 
			</li>
		<li>
				<a href="?g=User&m=Message&a=index2">发送消息（通过客服接口）</a> 
			</li>
			<li>
				<a href="?g=User&m=Message&a=sendHistory">发送记录</a> 
			</li>
			<li>
				<a href="?g=User&m=Message&a=help">帮助说明</a> 
			</li>
						<div class="clr" style="height:1px;background:#eee;margin-bottom:20px;"></div>
		</ul>
</div>

          <div class="ftip" style="margin:25px auto 5px auto;">只有认证服务号才能使用（其他类型公众号请不要使用第三方群发，否则微信可能会封号），点击“添加图文消息”按钮来选择已经添加过的图文消息</div>
          <form method="post" action="<?php echo U('Message/sendAll');?>">
          <div class="msgWrap form">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>
  <tr>
              		<th>选择分组</th>
              		<td>
              		<?php if($groups): ?><select name="wechatgroupid"><?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><option value="<?php echo ($g["wechatgroupid"]); ?>"><?php echo ($g["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
              		<?php else: ?>
              		<a href="<?php echo U('Wechat_group/groups');?>">还没有同步公众平台的粉丝分组，点击这里进行分组设置</a><?php endif; ?>
              		</td>
              		</tr>
              		<tr style="display:none"> 
        <th>标题</th> 
        <td><input type="text" id="title" name="title" value="<?php echo ($info["title"]); ?>" class="px require" style="width:200px;" /> 仅发送视频的时候填写</td> 
       </tr> 
              		<TR style="display:none">
  <TH>媒体文件</TH>
  <TD><input type="input" class="px" id="media" name="mediasrc" style="width:250px"> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="chooseFile('media','background')" class="a_upload">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('media',1500,1000,'<?php echo ($token); ?>')" class="a_upload">上传</a> 仅发送图片消息、语音消息或视频消息的时候填写</TD>
</TR>
<tr style="display:none"> 
        <th><span class="red"></span>文本消息/简介</th> 
        <td><textarea name="text" class="px" style="width:500px;height:120px;"></textarea><br />发送文本消息的时候作为文本内容，视频消息的时候作为视频简介</td> 
       </tr>
<TR>
  <TH valign="top"><label for="keyword">图文消息</label></TH>
  <TD> <a href="###" onclick="addImgMessage()" class="a_choose">选择图文消息</a>&nbsp;&nbsp;<a href="###" onclick="clearMessage()" class="a_clear">清空重选</a>
  <script>
  function addImgMessage(){
	art.dialog.data('titledom', 'titledom');
	art.dialog.data('imgids', 'imgids');
	art.dialog.data('multinews', 'multinews');
	art.dialog.data('singlenews', 'singlenews');
	
	art.dialog.data('js_appmsg_preview', 'js_appmsg_preview');
	art.dialog.data('multione', 'multione');
	art.dialog.open('?g=User&m=Message&a=img',{lock:true,title:'选择图文消息',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.45});
}
 function clearMessage(){
 	document.getElementById('titledom').innerHTML='';
 	document.getElementById('imgids').value='';
 	document.getElementById('js_appmsg_preview').innerHTML='<div class="appmsg_info"><em class="appmsg_date"></em></div><div class="cover_appmsg_item" id="multione"></div>';
 	document.getElementById('multinews').style.display='none';
 	document.getElementById('singlenews').style.display='';
}
  </script>
  
  <style>
  html, body {
	/*position:relative;
	height:100%;*/
	color:#222;
	font-family:Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial, san-serif;
	background-color:#ffffff;
	margin:0;
	padding: 0;
	text-decoration: none;
}
body >.tips {
	position:fixed;
	display:none;
	top:50%;
	left:50%;
	z-index:100;
	text-align:center;
	padding:20px;
	width:200px;
}
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td {
	margin:0;
	padding:0;
}
table {
	border-collapse:collapse;
	border-spacing:0;
}
.text img {
	max-width: 100%;
}
fieldset, img {
	border:0;
}
address, caption, cite, code, dfn, em, th, var {
	font-style:normal;
	font-weight:normal;
}
ol, ul {
	list-style: none outside none;
	margin:0;
	padding: 0;
}
caption, th {
	text-align:left;
}
h1, h2, h3, h4, h5, h6 {
	font-size:100%;
	font-weight:normal;
}
a {
	color:#000000;
	text-decoration: none;
}
.left {
	float:left
}
.right {
	float:right
}
#activity-detail {
	padding:15px 15px 0;
	background:#EFEFEF;
}
.clr {
	display:block;
	clear:both;
	height:1px;
	overflow:hidden;
}
/*文本*/
#iphone {
	background:url(../images/iPhone-render.png) no-repeat 0 0;
	height: 743px;
	position:relative;
	margin: 0 auto;
	overflow:hidden;
	width: 380px;
}
#iphone #activity-detail {
	height: 414px;
	left: 33px;
	overflow: auto;
	padding: 0;
	position: absolute;
	top: 197px;
	width: 319px;
	background:#EFEFEF;
}
#iphone .nickname {
	color: #CCCCCC;
	display: block;
	font-weight: bold;
	line-height: 45px;
	position: absolute;
	text-align: center;
	text-shadow: 0 1px 3px #000000;
	top: 152px;
	left: 33px;
	width: 320px;
}
#news-render {
}
#news-text { 
}
.keywordtext {
	background-color: #F3F1DA;
	height: 366px;
	overflow: auto;
	padding: 0;
	width: 319px;
	left: 33px;
	top: 197px;
	position: absolute;
}
.keywordtext .me {
	margin-top:30px
}
.you {
	float:left;
	width:100%; /*ie6 hack*/
	_background:none;
	_border:none;
}
.me {
	float:right;
	width:100%;
}
.chatItemContent {
	cursor:pointer;
}
.cloudPannel {
	position: relative;
	_position:static;
}
.chatItem {
	padding:4px 0px 10px 0px;
	_background:none;
	_border:none;
}
.chatItem .avatar {
	width:38px;
	height:38px;
	border:1px solid #ccc\9;
	border: 1px solid #CCCCCC;
	box-shadow: 0 1px 3px #D3D4D5;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
}
.chatItem .cloud {
	max-width:240px; /*border-radius:11px; border-width:1px; border-style:solid; */
	cursor:default;
	position: static;
}
.chatItem .cloud {/*for ie*/
	/*position: relative;*/
		padding: 0px;
	margin: 0px;
}
.me .avatar {
	float:right;
}
.me .cloud { /*position:relative;*/
	float:right;
	min-width:50px;
	max-width:200px;
	margin:0 15px 0 0;
}
.chatItem .cloudContent { /* position:relative;for ie*/
	text-align:left; /*padding:2px; line-height:1.2; */
	font-weight:normal;
	font-size:16px;
	min-height:20px;
	word-wrap:break-word;
}
.me .cloudText .cloudBody {
	-moz-border-top-colors:none;
	-moz-border-right-colors:none;
	-moz-border-bottom-colors:none;
	-moz-border-left-colors:none;
	border-color:transparent;
	border:1px solid #AFAFAF;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	box-shadow: 0px 1px 3px #D5D5D5;
	border:1px solid #9f9f9f\9;
	background:#ECECEC\9;
	border-radius:6px\9;
	margin-left:8px;
}
.me .cloudContent {
	border:1px solid #eee\9;
	border-top:1px solid #FFF;
	border-bottom:1px solid #F2F2F2;
	padding:13px\9;
	border-radius:13px\9;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	overflow:hidden;
	color:#000;
	text-shadow:none;
	background-color:#ECECEC;
	background:-webkit-gradient(linear,  left top, left bottom,  from(#F4F4F4), to(#E5E5E5),  color-stop(0.1, #F3F3F3), color-stop(0.3, #F1F1F1), color-stop(0.5, #ECECEC), color-stop(0.7, #E9E9E9), color-stop(0.9, #E6E6E6), color-stop(1.0, #E5E5E5));
	background-image:-moz-linear-gradient(top, #F3F3F3 10%, #F1F1F1 30%, #ECECEC 50%, #E9E9E9 70%, #E6E6E6 90%, #E5E5E5 100%);
}/*.cloudText*/
.me .cloudText .cloudArrow {
	position: absolute;
	right: -10px;
	top: 11px;
	width: 13px;
	height: 24px;
	background: url(../images/bubble_right.png) no-repeat;
}
.me .cloudText .cloudContent {
	background-color:#E5E5E5;
	vertical-align: top;
	padding:7px 10px;
	background-color:#ECECEC\9;
}
.you .avatar {
	float:left;
}
.you .cloud { /*position:relative;8.3*/
	float:left;
	min-width:50px;
	max-width:200px;
	margin:0 0 0 15px;
}
.you .cloudText .cloudBody {
	-moz-border-top-colors:none;
	-moz-border-right-colors:none;
	-moz-border-bottom-colors:none;
	-moz-border-left-colors:none;
	border-color:transparent;
	/*border-style:solid;
		border-width:1px;
		border-color:#7B9F45 #7B9F45 #7B9F45 #7B9F45;*/
		border: 1px solid #7AA23F;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	box-shadow: 0px 1px 3px #8DA254;
	border:1px solid #73972a\9;
	border-radius:6px\9;
	/*background-color:#A1D251;
		
		background:-webkit-gradient(linear, left top,left bottom, from(#C2DE8E),to(#8EBF3A), 
			color-stop(0.1,#BFDC89),color-stop(0.2,#B7D978),color-stop(0.3,#B3D870),
			color-stop(0.4,#A8D45D),color-stop(0.5,#A2D254),color-stop(0.6,#9DCE4C),
			color-stop(0.7,#96C742),color-stop(0.8,#92C23E),color-stop(0.9,#8FBF3B),color-stop(1.0,#8EBF3A));
		background-image:-moz-linear-gradient(top, #C2DE8E 0%, #BFDC89 10%, #B7D978 20%, #B3D870 30%, #A8D45D 40%, #A2D254 50%, #9DCE4C 60%, #96C742 70%, #92C23E 80%, #8FBF3B 90%, #8EBF3A 100%);*/
		background-color: #AEDC43;
}
.you .cloudText .cloudContent {
	padding:5px 13px\9;
	border-radius:13px\9;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	padding:7px 10px;
	text-shadow:none;
	color:#030303;
	/*border-top:1px solid #E3EFC9;
		border-bottom:1px solid #8EBF3A;
		border-right:1px solid #A4D257;
		background-color:#C0DC85\9;*/
		border-top: 1px solid #DCE6C8;
	border-bottom: 1px solid #B9CF8B;
	border-right: 1px solid #CCDEA3;
}
.you .cloudText .cloudArrow {
	position: absolute;
	left: -6px;
	top: 11px;
	width: 13px;
	height: 24px;
	background: url(../images/bubble_left.png) no-repeat;
}
/*单条多条图文*/
	.chatPanel .media a {
	display:block;
}
.chatPanel .media {
	border:1px solid #cdcdcd;
	box-shadow:0 3px 6px #999999;
	-webkit-border-radius:12px;
	-moz-border-radius:12px;
	border-radius:12px;
	width:285px;
	background-color:#FFFFFF;
	background:-webkit-gradient(linear,  left top, left bottom,  from(#FFFFFF), to(#FFFFFF));
	background-image:-moz-linear-gradient(top, #FFFFFF 0%, #FFFFFF 100%);
	margin:0px auto;
}
.chatPanel .media .mediaPanel {
	padding:0px;
	margin:0px;
}
.chatPanel .media .mediaImg {
	margin: 25px 15px 15px;
	width: 255px;
	position: relative;
}
.chatPanel .media .mediaImg .mediaImgPanel {
	position:relative;
	padding:0px;
	margin:0px;
	max-height:164px;
	overflow:hidden;
}
.chatPanel .media .mediaImg img {
	/* width:100%;
		height:164px;
		position:absolute;
		left:0px;*/
		width:255px;
}
.chatPanel .media .mediaImg .mediaImgFooter {
	position: absolute;
	bottom: 0;
	height:29px;
	background-color:#000;
	background-color:rgba(0, 0, 0, 0.4);
	text-shadow:none;
	color:#FFF;
	text-align:left;
	padding:0px 11px;
	line-height:29px;
	width:233px;
}
.chatPanel .media .mediaImg .mediaImgFooter a:hover p {
	color:#B8B3B3;
}
.chatPanel .media .mediaImg .mediaImgFooter .mesgTitleTitle {
	line-height:28px;
	color:#FFF;
	max-width:240px;
	height:26px;
	white-space:nowrap;
	text-overflow:ellipsis;
	-o-text-overflow:ellipsis;
	overflow:hidden;
	width: 240px;
}
.chatPanel .media .mesgIcon {
	display:inline-block;
	height:19px;
	width:13px;
	margin:8px 0px -2px 4px;
	background:url(../images/mesgIcon.png) no-repeat;
}
.chatPanel .media .mediaContent {
	margin:0px;
	padding:0px;
}
.chatPanel .media .mediaContent .mediaMesg {
	border-top:1px solid #D7D7D7;
	padding:10px;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgDot {
	display: block;
	position:relative;
	top: -3px;
	left:20px;
	height:6px;
	width:6px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle:hover p {
	color:#1A1717;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle a {
	color:#707577;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle a:hover p {
	color:#444440;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgIcon {
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle p {
	line-height:1.5em;
	max-height: 45px;
	max-width: 220px;
	min-width:176px;
	margin-top:2px;
	color:#5D6265;
	text-overflow:ellipsis;
	-o-text-overflow:ellipsis;
	overflow:hidden;
	text-align: left;
	text-overflow:ellipsis;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgIcon img {
	height:45px;
	width:45px;
}
/*media mesg detail*/
	.chatPanel .media .mediaHead {
	/*height:48px;*/
		padding:0px 15px 4px;
	border-bottom:0px solid #D3D8DC;
	color:#000000;
	font-size:20px;
}
.chatPanel .media .mediaHead .title {
	line-height:1.2em;
	margin-top: 22px;
	display:block;
	max-width:312px;
	text-align: left;/*height:25px;
		white-space:nowrap;
		text-overflow:ellipsis;
		-o-text-overflow:ellipsis;
		overflow:hidden;*/
	}
.chatPanel .mediaFullText .mediaImg {
	width:255px;
	padding:0;
	margin:0 15px;
	overflow:hidden;
	max-height:164px;
}
.chatPanel .mediaFullText .mediaImg img {
/*margin-top:17px;
		position:absolute;*/
}
.chatPanel .mediaFullText .mediaContent {
	padding:0 0 15px;
	font-size:16px;
	line-height: 1.5em;
	text-align:left;
	color:#222222;
}
.chatPanel .mediaFullText .mediaContentP {
	margin:12px 15px 0px;
	border-bottom:1px solid #D3D8DC;
}
.chatPanel .media .mediaHead .time {
	margin:0px;
	margin-top: 21px;
	color:#8C8C8C;
	background:none;
	width:auto;
	font-size:12px;
}
.chatPanel .media .mediaFooter {
	-webkit-border-radius:0px 0px 12px 12px;
	-moz-border-radius:0px 0px 12px 12px;
	border-radius:0px 0px 12px 12px;
	padding: 0 15px;
}
.chatPanel .media .mediaFooter a {
	color:#222222;
	font-size:16px;
	padding:0;
}
.chatPanel .media .mediaFooter .mesgIcon {
	margin:15px 3px 0px 0px;
}
.chatPanel .media a:hover {
	cursor: pointer;
}
.chatPanel .media a:hover .mesgIcon {
}
.mediaContent a:hover {
	background-color: #F6F6F6;
}
.mediaContent .last:hover {
	-webkit-border-radius:0px 0px 12px 12px;
	-moz-border-radius:0px 0px 12px 12px;
	border-radius:0px 0px 12px 12px;
	background-color: #F6F6F6;
}
.mediaFullText:hover {
	background-color: #F6F6F6;
	background:-webkit-gradient(linear,  left top, left bottom,  from(#F6F6F6), to(#F6F6F6));
	background-image:-moz-linear-gradient(top, #F6F6F6 0%, #F6F6F6 100%);
}


  </style>
<div class="chatPanel" style="width:280px;" id="singlenews">
  <div un="item_1741035" class="chatItem you"> 
  　<a target="ddd" href="###">
<div class="media mediaFullText" id="titledom">

<div class="mediaPanel">
<div class="mediaHead"><span class="title" id="zbt">图文消息标题</span><span class="time"><?php echo date('Y-m-d',time());?></span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img id="suicaipic1" src="/tpl/static/message/oid.jpg"></div>
<div class="mediaContent mediaContentP">
<p id="zinfo">消息简介</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">查看全文</span>
<div class="clr"></div>
</div>
</div>
</div>
</a>
</div>
</div>

<div style="clear:both"></div>

 <input type="hidden" class="px" id="imgids" value="" name="imgids" style="width:300px" >  <br>
 
 
 
 
 
 
 <style>
.appmsg{position:relative;overflow:hidden;margin-bottom:20px;border:1px solid #d3d3d3;background-color:#fff;box-shadow:0 1px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 1px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.1);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}.appmsg_info{font-size:13px;line-height:20px;padding-bottom:6px}.appmsg_date{font-weight:400;font-style:normal}.appmsg_content{padding:0 14px;border-bottom:1px solid #d3d3d3;position:relative;*zoom:1}.appmsg_title{font-weight:400;font-style:normal;font-size:16px;padding-top:6px;line-height:28px;max-height:56px;overflow:hidden;white-space:pre-wrap;word-wrap:normal;word-break:normal}.appmsg_title a{display:block;color:#222}.appmsg_thumb_wrp{height:160px;overflow:hidden}.appmsg_thumb{width:100%}.appmsg_desc{padding:5px 0 10px;white-space:pre-wrap;word-wrap:normal;word-break:normal}.appmsg_opr{background-color:#f4f4f4}.appmsg_opr ul{overflow:hidden;*zoom:1}.appmsg_opr_item{float:left;line-height:44px;height:44px}.appmsg_opr_item a{display:block;border-right:1px solid #d3d3d3;box-shadow:1px 0 0 0 #fff;-moz-box-shadow:1px 0 0 0 #fff;-webkit-box-shadow:1px 0 0 0 #fff;text-align:center;line-height:20px;margin-top:12px}.appmsg_opr_item a.no_extra{border-right-width:0}.appmsg_item{*zoom:1;position:relative;padding:12px 14px;border-top:1px solid #d3d3d3}.appmsg_item:after{content:"\200B";display:block;height:0;clear:both}.appmsg_item .appmsg_title{line-height:24px;max-height:48px;overflow:hidden;*zoom:1;margin-top:14px}.appmsg_item .appmsg_thumb{float:right;width:78px;height:78px;margin-left:14px}.multi .appmsg_info{padding-top:4px;padding-left:14px;padding-right:14px}.multi .appmsg_content{padding:0}.multi .appmsg_title{font-size:14px;padding-top:0}.cover_appmsg_item{position:relative;margin:0 14px 14px}.cover_appmsg_item .appmsg_title{position:absolute;bottom:0;left:0;width:100%;background:rgba(0,0,0,0.6)!important;filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endcolorstr = '#99000000')}.cover_appmsg_item .appmsg_title a{padding:0 4px;color:#fff}.appmsg_mask{display:none;position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity = 60);-moz-opacity:.6;-khtml-opacity:.6;opacity:.6;z-index:1}.appmsg .icon_appmsg_selected{display:none;position:absolute;top:50%;left:50%;margin-top:-30px;margin-left:-33px;line-height:999em;overflow:hidden;z-index:1}.dialog_wrp .appmsg:hover{cursor:pointer}.appmsg:hover .appmsg_mask{display:block}.appmsg.selected .appmsg_mask{display:block}.appmsg.selected .icon_appmsg_selected{display:inline-block}.icon_appmsg_selected{background:transparent url(/mpres/htmledition/images/icon/media/icon_appmsg_selected1ccaec.png) no-repeat 0 0;width:75px;height:60px;vertical-align:middle;display:inline-block}.appmsg_thumb.default{display:block;color:#c0c0c0;text-align:center;line-height:160px;font-weight:400;font-style:normal;background-color:#ececec;font-size:22px}.appmsg_item .appmsg_thumb.default{line-height:78px;font-size:16px}.appmsg_edit_mask{display:none;position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(229,229,229,0.85)!important;filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#d9e5e5e5',endcolorstr = '#d9e5e5e5');text-align:center}.appmsg_item .appmsg_edit_mask{line-height:102px}.cover_appmsg_item .appmsg_edit_mask{line-height:160px}.appmsg_edit_mask a{margin-left:8px;margin-right:8px}.editing .cover_appmsg_item:hover .appmsg_edit_mask,.editing .appmsg_item:hover .appmsg_edit_mask{display:block}.editing .appmsg_thumb{display:none}.editing .appmsg_thumb.default{display:block}.editing .has_thumb .appmsg_thumb{display:block}.editing .has_thumb .appmsg_thumb.default{display:none}.editing .appmsg_content{box-shadow:none;-moz-box-shadow:none;-webkit-box-shadow:none;border-bottom-width:0}.editing.multi .appmsg_content{border-bottom-width:1px}.appmsg_add{text-align:center;padding:12px 14px;line-height:72px}.appmsg_add a{display:block;font-size:0;text-decoration:none;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:3px dotted #b8b8b8;height:72px}.appmsg_add a i{*vertical-align:baseline}.tab_content .appmsg{width:320px}.appmsg_list{text-align:justify;text-justify:distribute-all-lines;text-align-last:justify;font-size:0;padding-top:38px;margin:0 46px;letter-spacing:-4px}.appmsg_list:after{display:inline-block;width:100%;height:0;font-size:0;margin:0;padding:0;overflow:hidden;content:"."}.appmsg_col{display:inline-block;*display:inline;*zoom:1;vertical-align:top;width:48%;font-size:14px;text-align:left;font-size:14px;letter-spacing:normal}.media_dialog.appmsg_list{position:relative;padding:28px 140px;height:340px;margin-bottom:0;overflow-y:scroll}.page_appmsg_edit .tool_area{clear:both;margin:0;padding:20px 0}.page_appmsg_edit .tool_bar{margin-left:0;margin-right:0}.page_appmsg_edit .appmsg{min-height:180px}.page_appmsg_edit .upload_file_box{top:22px;left:-12px;width:377px;border-color:#d3d3d3;border-radius:0;-moz-border-radius:0;-webkit-border-radius:0}.page_appmsg_edit .upload_preview img{max-width:100px;max-height:100px}.media_preview_area{float:left;width:320px;margin-right:14px}.media_edit_area{display:table-cell;vertical-align:top;float:none;width:auto;*display:block;*zoom:1}.media_edit_area:after{content:" . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . ";visibility:hidden;clear:both;height:0!important;display:block;line-height:0}.edui_editor_wrp{position:relative;z-index:0}.appmsg_edit_item{padding-bottom:1em}.editor_extra_info{text-align:right;padding-top:6px}.editor_extra_info a{color:#a3a3a3}.editor_extra_info a:hover{color:#2e7dc6}
</style>
 
 <div class="media_preview_area" id="multinews" style="display:none">
        <div class="appmsg multi editing">
    	    <div id="js_appmsg_preview" class="appmsg_content">
       <div id="appmsgItem1" data-fileid="" data-id="1" class="js_appmsg_item ">
    
        <div class="appmsg_info">
            <em class="appmsg_date"></em>
        </div>
        <div class="cover_appmsg_item" id="multione"></div>
    
</div>


</div></div>
	</div>
	
	
	<div style="clear:both"></div>
	

  </TD>
  <TD>&nbsp;</TD>
</TR>

<tr>
	<th></th>
	<td><button type="submit" name="button" class="btnGreen">发送</button>　<a href="javascript:history.go(-1);" class="btnGray vm">取消</a></td>
</tr>
 </tbody>
</table>
            
          </div>
          </form>
          
        </div>
</div>
</div>
</div>

<style>
.IndexFoot {
	WIDTH: 100%; HEIGHT: 30px
}
.foot{ width:988px; margin:0px auto; font-size:14px; line-height:30px;}
.foot .foot_page{ float:left; width:600px;color:#000;}
.foot .foot_page a{ color:#000;}
#copyright{ float:right; width:380px; text-align:right; font-size:14px; color:#000;}
</style>
<div class="IndexFoot" style="height:58px;clear:both;padding-top:8px;">
<div class="foot">
<div class="foot_page" >
<a style="padding-left:90px" href="<?php echo ($f_siteUrl); ?>">青峰</a>
</div>
<div id="copyright" style="color:#000;">
	青峰(c)版权所有 <a href="http://www.miibeian.gov.cn" target="_blank" style="color:#000"><?php echo C('ipc');?></a>

</div>
    </div>
</div>

<div style="display:none">
<?php echo ($alert); ?>
<?php echo base64_decode(C('countsz'));?>

 
 </div>

</body>

<?php if(MODULE_NAME == 'Function' && ACTION_NAME == 'welcome'){ ?>
<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>

<script type="text/javascript">


    var myChart = echarts.init(document.getElementById('main')); 
   

    var option = {
        title : {
            text: '<?php if($charts["ifnull"] == 1): ?>本月关注和文本请求数据统计示例图(您暂时没有数据)<?php else: ?>本月关注和文本请求数据统计<?php endif; ?>',
            x:'left'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['文本请求数','关注数'],
            x: 'right'
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: false},
                dataView : {show: false, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: false} ,
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : [<?php echo ($charts["xAxis"]); ?>]
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'文本请求数',
                type:'line',
                tiled: '总量',
                data: [<?php echo ($charts["text"]); ?>]
            },    
            {
                "name":'关注数',
                "type":'line',
                "tiled": '总量',
                data:[<?php echo ($charts["follow"]); ?>]
            }
       

        ]

    };                   

    myChart.setOption(option); 


    var myChart2 = echarts.init(document.getElementById('pieMain')); 
               
    var option2 = {
        title : {
            text: '<?php if($pie["ifnull"] == 1): ?>7日内粉丝行为分析示例图(您暂时没有数据)<?php else: ?>7日内粉丝行为分析<?php endif; ?>',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'粉丝行为统计',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            show : false
                        },
                        labelLine : {
                            show : false
                        }
                    },
                    emphasis : {
                        label : {
                            show : true,
                            position : 'center',
                            textStyle : {
                                fontSize : '18',
                                fontWeight : 'bold'
                            }
                        }
                    }
                },
                data:[ 
                    <?php echo ($pie["series"]); ?>
                
                ]
            }
        ]
    };
     myChart2.setOption(option2,true); 


    var myChart3 = echarts.init(document.getElementById('pieMain2')); 
    var option3 = {
        title : {
            text: '<?php if($sex_series["ifnull"] == 1): ?>会员性别统计示例图(您暂时没有数据)<?php else: ?>会员性别统计<?php endif; ?>',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'会员性别统计',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            show : false
                        },
                        labelLine : {
                            show : false
                        }
                    },
                    emphasis : {
                        label : {
                            show : true,
                            position : 'center',
                            textStyle : {
                                fontSize : '18',
                                fontWeight : 'bold'
                            }
                        }
                    }
                },
                data:[
                  <?php echo ($sex_series['series']); ?>
                ]
            }
        ]
    };                     

  myChart3.setOption(option3,true); 



    </script>
<?php } ?>
</html>