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
$node=M('bl_node'); $value=$node->select(); foreach($value as $m=>$n){ $ms[]=$value[$m]['name']; } $parms=$_SERVER['QUERY_STRING']; $parms1=explode('&',$parms); $parmsArr=array(); if ($parms1){ foreach ($parms1 as $p){ $parms2=explode('=',$p); $parmsArr[$parms2[0]]=$parms2[1]; } } $subMenus=array(); $t=0; $currentMenuID=0; $currentParentMenuID=0; foreach ($menus as $m){ $loopContinue=1; if ($m['subs']){ $st=0; foreach ($m['subs'] as $s){ $includeArr=1; if ($s['selectedCondition']){ foreach ($s['selectedCondition'] as $condition){ if (!in_array($condition,$parmsArr)){ $includeArr=0; break; } } } if ($includeArr){ if ($s['exceptCondition']){ foreach ($s['exceptCondition'] as $epkey=>$eptCondition){ if ($epkey=='a'){ $parm_a_values=explode(',',$eptCondition); if ($parm_a_values){ if (in_array($parmsArr['a'],$parm_a_values)){ $includeArr=0; break; } } }else { if (in_array($eptCondition,$parmsArr)){ $includeArr=0; break; } } } } } if ($includeArr){ $currentMenuID=$st; $currentParentMenuID=$t; $loopContinue=0; break; } $st++; } if ($loopContinue==0){ break; } } $t++; } foreach ($menus as $m){ $displayStr=''; if ($currentParentMenuID!=0||0!=$currentMenuID){ $m['display']=0; } if (!$m['display']){ $displayStr=' style="display:none"'; } if ($currentParentMenuID==$i){ $displayStr=''; } $aClassStr=''; if ($displayStr){ $aClassStr=' nav-header-current'; } if($i == 0){ echo '<a class="nav-header'.$aClassStr.'" style="border-top:none !important;"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; }else{ echo '<a class="nav-header'.$aClassStr.'"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; } if ($m['subs']){ $j=0; foreach ($m['subs'] as $s){ $selectedClassStr='subCatalogList'; if ($currentParentMenuID==$i&&$s['Nname']==$_GET['name']){ $selectedClassStr='selected'; } if ($s['name']!='微信墙'&&$s['name']!='摇一摇'&&$s['name']!='现场活动'){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; }else { switch ($s['name']){ case '微信墙': case '摇一摇': case '现场活动': if (file_exists($_SERVER['DOCUMENT_ROOT'].'/weimicms/Lib/Action/User/WallAction.class.php')&&file_exists($_SERVER['DOCUMENT_ROOT'].'/weimicms/Lib/Action/User/ShakeAction.class.php')){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; } break; } } } } echo '</ul>'; $i++; } ?>

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

<script>
function selectall(name) {
	var checkItems=$('.cbitem');
	if ($("#check_box").attr('checked')==false) {
		$.each(checkItems, function(i,val){
			val.checked=false;
		});
		
	} else {
		$.each(checkItems, function(i,val){
			val.checked=true;
		});
	}
}
</script>
<script src="/tpl/static/fushionCharts/JSClass/FusionCharts.js" type="text/javascript"></script>   
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<style>
			body,html{
					height:100%;font-family:'微软雅黑'
			}
        	.alert_con{
				position:absolute;height:10000px;width:100%;background:rgba(0,0,0,.3);
        		top:0px;left:0px;z-index:990;display:none;overflow:hidden;
        	}
        	.alert_con .alert_con_content{
				width:600px;min-height:200px;background:#fff;    position: fixed;
	    top: 20%;
	    left: 30%;
	        	} 
        	.close_alert{
				color:#000;font-size:14px;margin:10px 10px 0px 0px;
        		cursor:pointer;    float: right;
        	}
        	.close_alert:hover{
				color:red
        	}
        	.info{
				cursor:pointer;
        	}
        	.info:hover{
				color:red
        	}
        	.alert_con_one{
				height:40px;border-bottom:1px solid #999;width:20%;float:left;
        			
        	}
        	.alert_con_two{
				width:80%;float:right
        	}
        	.alert_con ul li{
				margin:10px;width:100%;padding:10px;
        		list-style:none;border-bottom:1px solid #ccc;
        	}
        	.alert_con ul li span.ming{
				width:100px;
        	}
        	.alert_con ul li span img{
				    width: 40%;
				    float: left;
				    margin-left: 120px;
        	}
        	.alert_con ul li span img:hover{
				-webkit-transform:scale(1.5); 
				-moz-transform:scale(1.5); 
				-o-transform:scale(1.5); 
        	}
        	.alert_con ul li span{
        		margin:5px 10px;display:inline-block;
        	}
        </style>
        <div class="alert_con" >
        	<div class="alert_con_content">
        		<div class="close_alert">关闭</div>
        		<div id="info"></div>
        	</div>
        </div>
        
        
        
        
<div class="content">
         
          <div class="cLineB">
              <h4 class="left">注册用户</h4>
              <div class="searchbar right">

</div>

          <div class="msgWrap" style="border-top:1px solid #ccc;padding-top:10px;margin-top:30px;">
          
          <div style="margin:10px 0">
          <div style="float:right;width:25%;text-align:right">
          <form method="post" action="">
<input type="text" id="msgSearchInput" class="px" placeholder="输入昵称搜索" name="keyword" value="">
<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">
</form>
</div>
<form method="post" action="<?php echo U('User/Wechat_group/setGroup',array('name'=>'Registered'));?>" id="info">
          <div style="width:70%;float:left">将选中用户转移到分组中 <select name="wechatgroupid"><?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><option value="<?php echo ($g["wechatgroupid"]); ?>"><?php echo ($g["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select> <input type="submit" value="转移" id="msgSearchBtn" href="" class="btnGrayS" title="转移">&nbsp;&nbsp;按分组查看用户：<select id="wechatgroupid" onchange="location.href='?g=User&m=Wechat_group&a=index&token=<?php echo ($token); ?>&name=Registered&wechatgroupid='+this.value"><?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><option value="<?php echo ($g["wechatgroupid"]); ?>"<?php if ($_GET['wechatgroupid']==$g['wechatgroupid']){echo ' selected';}?>><?php echo ($g["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
          </div>
          
<div style="clear:both"></div>
</div>
          
            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
                    <th class="select"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
					<th class="select">编号</th>
					<th>用户昵称</th>
					<th>性别 </th>
					<th>分组名</th>
					<th>省(直辖市) </th>
					<th>城市 </th>
					<th>头像</th>
					<th>关注时间</th>
					<th>手机号</th>
					<th>是否关注</th>
					<th>详细信息</th>
                </tr>
              </thead>
              <tbody>
			  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                  <td><input type="checkbox" value="<?php echo ($list["id"]); ?>" class="cbitem" name="id_<?php echo ($list["id"]); ?>"></td>
                  <td><?php echo ($list["id"]); ?></td>
                  <td><?php echo ($list["nickname"]); ?></td>
                  <td><?php if($list['sex'] == 1): ?>男<?php else: ?>女<?php endif; ?></td>
                  <td><?php echo ($list["groupName"]); ?></td>
                  <td><?php echo ($list["province"]); ?></td>
                  <td><?php echo ($list["city"]); ?></td>
                  <td>
					
					<div class="cateimg">
						<a href="?g=User&m=Wechat_group&a=showExternalPic&url=<?php echo ($list["headimgurl"]); ?>&token=<?php echo ($token); ?>&wecha_id=<?php echo ($list["openid"]); ?>" target="_blank"><?php if (strlen($list['smallheadimgurl'])){?><img src="?g=User&m=Wechat_group&a=showExternalPic&url=<?php echo ($list["smallheadimgurl"]); ?>&token=<?php echo ($token); ?>&wecha_id=<?php echo ($list["openid"]); ?>" class="cateimg_small"  /><?php }?></a></div>
					</td>
                  <td><?php echo (date('Y-m-d',$list["createtime"])); ?> </td>
                  <td><?php echo ($list["tel"]); ?></td>
                  <td><?php if($list['state'] == 1): ?>关注<?php else: ?>未关注<?php endif; ?></td>
                  <td class="info">点击浏览&nbsp;&nbsp;<a href="<?php echo U('delete_user',array('id'=>$list.id));?>">删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                 <tr>

                </tr>
              </tbody>
            </table>
            </form>
          </div>
          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"><?php echo ($page); ?></div>
            </div>
            <div class="clr"></div>
          </div>
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

<script>
$(".info").click(function(){
	var id=$(this).parent().children("td:eq(1)").text();
	var me=$(this);
	$.ajax({
		url:"<?php echo U('Wechat_group/getmore');?>",
		data:{id:id},
		type:"POST",
		dataType:"json",
		success:function(data){
			//<ul><li><th></th><th>证件类型</th><th>证件号码</th><th>出生日期</th><th>公司名称</th><th>公司地址</th><th>职务</th><th>电子邮箱</th><th>个人简介</th></li><li><td>"+data.xingming+"</td><td>"+data.card_type+"</td><td>"+data.card_num+"</td><td>"+data.birth+"</td><td>"+data.company+"</td><td>"+data.company_area+"</td><td>"+data.company_position+"</td><td>"+data.email+"</td><td>"+data.profile+"</td></li></ul>")
			$("#info").html("<ul><li><span class='ming'>姓名</span><span class='zhi'>"+data.xingming+"</span><li><span class='ming'>证件类型</span><span class='zhi'>"+data.card_type+"</span><li><span class='ming'>证件号码</span><span class='zhi'>"+data.card_num+"</span><li><span class='ming'>出生日期</span><span class='zhi'>"+data.birth+"</span><li><span class='ming'>公司名称</span><span class='zhi'>"+data.company+"</span><li><span class='ming'>公司地址</span><span class='zhi'>"+data.company_area+"</span><li><span class='ming'>职位</span><span class='zhi'>"+data.company_position+"</span><li><span class='ming'>电子邮箱</span><span class='zhi'>"+data.email+"</span><li><span class='ming'>个人简介</span><span class='zhi'>"+data.profile+"</span></li></ul>");
			//var index = $(".alert_con ul li").length/1.5;
			//alert(index);
			//var geren = $(".alert_con_two ul li:nth-child(9)").height();
			
			//var li_w  = 1000/index;
			//alert(li_w)
			//$(".alert_con ul li").css("width",li_w);
			
			//me.parent().after("<div><table><tr><th>姓名</th><th>证件类型</th><th>证件号码</th><th>出生日期</th><th>公司名称</th><th>公司地址</th><th>职务</th><th>电子邮箱</th><th>个人简介</th></tr></table></div>");
			$(".alert_con").css("display","block");
		}
	})
});
$(".close_alert").click(function(){
	$(".alert_con").css("display","none");
})
</script>