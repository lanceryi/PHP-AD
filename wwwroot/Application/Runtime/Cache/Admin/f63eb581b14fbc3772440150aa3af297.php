<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="/Public/css/Admin/main/main.css" rel="stylesheet" type="text/css"/>
<title>创业吧后台管理系统</title>
</head>
<body>

<div class="panel">
	<div class="panel-head">
		<span>欢迎使用后台管理系统!</span>
		<span>今天是&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo (date("Y年m月d日",$time)); ?><span class="color"><?php echo ($day); ?></span></span>
		<span>您的IP是&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($ip); ?></span>
	</div>
</div>

<div style="margin_top:10px; width:100%; height:20px;"></div>

<div class="panel">
	<div class="panel-head">
		<span>系统信息</span><br />
		<span>PHP版本:&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($phpver); ?></span><br />
		<span>MYSQL版本:&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($ver); ?></span><br />
		<span>服务器操作系统&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($uname); ?></span><br />
		<span>服务器信息:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($server); ?></span><br />
		<span>后台程序版本:&nbsp;&nbsp;&nbsp;&nbsp;v1.0</span>
	</div>
</div>

</body>
</html>