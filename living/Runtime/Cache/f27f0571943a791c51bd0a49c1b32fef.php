<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>Readme&nbsp;&nbsp;&nbsp;&nbsp;- Living. <?php echo (date('m-d',time($Think))); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Boot include -->
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/font-awesome.min.css" />
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/bootstrap.min.js"></script>

<!-- 样式重写 -->
<style>
	body { background:#EEE; }
	.jumbotron { margin:0 12%; }
</style>
</head>

<body>
<div class="jumbotron">
	<h1>This is living!	<span class="pull-right"><a href="__APP__/index/index" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;返回living</a></span>
</h1>
	<p>
		这是一个<span class="label label-primary">生活</span>和<span class="label label-primary">工作</span>的&nbsp;&nbsp;<span class="label label-default">计划</span> <span class="label label-default">整理</span> <span class="label label-default">记录</span>工具<br />
		释放大脑中琐碎零乱的事物，让你全身心投入其中，以更高效更轻松更便捷地完成你的任务。
	</p>
	<div class="panel panel-default hidden">
		<div class="panel-heading" style="font-size:18px">给living一个评价吧 <span class="caret"></span></div>
		<div class="panel-body hidden">
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-star"></span> 很酷的玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-star"></span> 棒极了
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-star"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<hr />
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 糟糕透了
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<hr />
			<p>写上你的评语</p>
			<textarea class="form-control" rows="3"></textarea>
			<button style="margin:12px 0 0" type="submit" class="btn btn-primary" role="button">提交</button>

		</div>
	</div>

	<div class="well">
		<h2><i class="icon-spinner icon-spin"></i>&nbsp;&nbsp;Come on, man</h2>
		<hr />
		<span style="line-height:16px; font-size:16px">欢迎你加入living的开发，代码托管在github进行协作开发。你可以通过以下信息与我们联系</span>
		<p><i class="icon-github"> living:</i>&nbsp;&nbsp; <a href="" target="_blank">pages</a> | <a href="https://github.com/supgeek-rod/living.git" target="_blank">fork</a></p>
		<p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp; supgeek.rod@gmail.com</p>

		<!-- 
		<p><i class="icon-github"> web catch:</i>&nbsp;&nbsp; <a href="" target="_blank">pages</a> | <a href="https://github.com/supgeek-rod/web-catch.git" target="_blank">clone git</a></p>
		<p><i class="icon-github"> sb fengqing:</i>&nbsp;&nbsp; <a href="" target="_blank">pages</a> | <a href="https://github.com/supgeek-rod/web-catch.git" target="_blank">clone git</a></p>
		-->

	</div>
</div>

</body>
</html>