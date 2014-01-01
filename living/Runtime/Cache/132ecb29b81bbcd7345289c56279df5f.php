<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>happy Living. <?php echo (date('m-d',time($Think))); echo (time($Think)); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
	// 声明外链js文件需要使用的ThinkPHP变量
	var app = "__APP__";
	var liv_module = "<?php echo (MODULE_NAME); ?>";
	var liv_action = "<?php echo (ACTION_NAME); ?>";
</script>

<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/living.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/living.js"></script>
</head>

<body>
<!-- Start 头部 -->
<div id="header" class="">
	<span class="navbar-text pull-left" style="margin:-2px 0 0 20px;"><span class="h1"><a href="__APP__/index/index">living</a> <span class="small" style="font-size:18px;">high efficiency life for everyday.</span></span></span>
	<ul class="nav nav-tabs pull-right">
	    <li class="home active"><a href="__APP__"><span class="glyphicon glyphicon-home"> 首页</span></a></li>
	    <?php if($_SESSION['user']['name']!= ''): ?><li class="center"><a href="__APP__/center/task"><span class="glyphicon glyphicon-user"> 个人中心</span></a></li>
	    <li class="account dropdown"><a href="__APP__/account/index"><span class="glyphicon glyphicon-cog"> 用户设置</span></span></a>	
	    	<ul class="setup-go dropdown-menu text-right pull-right" role="menu" aria-labelledby="dropdownMenu1" style="min-width:150px !important;">
				<li role="presentation"><a><?php echo ($_SESSION['user']['name']); ?>, 欢迎回来!</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">使用帮助</a></li>
			    <li role="presentation" class="divider"></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="__APP__/user/signout">一键安全退出</a></li>
			</ul>
	    </li>
	    <?php else: ?>
	   	<li class="user"><a href="__APP__/user/signin"><span class="glyphicon glyphicon-user"> 注册/登录</span></a></li><?php endif; ?>

	</ul>
	<div class="clearfix"></div>
	<hr style="margin:0" />
</div>
<!-- End 头部 -->

<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/fullcalendar.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/fullcalendar.print.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/calendar.css" />
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/bootstrap-datetimepicker.zh-CN.js"></script>
<!-- Start 主体部分 -->
<div id="mainer">
	<div class="row">
	    <div class="main col-md-12">
			<!-- index -->
			<div class="col-md-5">
			    <div class="row">
					<!-- 搜索与智能添加 -->
					<div class="col-md-12">
					    <div class="input-group" id="search_pusl">
							<input type="text" class="form-control so-add">
							<span class="input-group-btn">
							    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">搜索</button>
							    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">快速添加</button>
							</span>
					    </div>
					</div>
					<!-- 通知 -->
					<div class="col-md-12">
					    <div class="panel panel-default" id="notify">
							<div class="panel-heading">
							    <h3 class="panel-title"><span class="glyphicon glyphicon-bell"> 通知</span></title>
							</div>
							<div class="panel-body"></div>
						</div>
					</div>
				</div>
		    </div>
			<!-- 提醒事项 -->
			<div class="col-md-3">
			    <div class="panel panel-default" id="task">
					<div class="panel-heading">
					    <h3 class="panel-title">
							<span class="glyphicon glyphicon-th-list dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"></span>&nbsp;&nbsp;
							<span class="dropdown-toggle">提醒事项</span>
							<div class="task-icon pull-right" style="margin-top:-5px">
								<a href="javascript:taskBack()" class="glyphicon glyphicon-chevron-left text-center btn btn-default" style="display:none"> </a>
								<a href="javascript:taskEdit()" class="disabled glyphicon glyphicon-pencil text-center btn btn-default"> </a>
								<a href="" class="glyphicon glyphicon-remove text-center btn btn-default" style="display:none"> </a>
								<a href="javascript:taskAdd()" class="glyphicon glyphicon-plus text-center btn btn-default"> </a>
								<a class="glyphicon glyphicon-ok text-center btn btn-default" style="display:none"> </a>
							</div>
					    </h3>
					</div>
					<div class="panel-body">
					    <ul class="list-group">
					    	<script type="text/javascript">
					    		$(function(){
					    			taskStart();
					    		})
					    	</script>
					    	<p>点击右上角开始添加你的提醒事项</p>
					    </ul>
			    		<li class="newTask-model list-group-item" style="display:none">
			    		<span class="input-group">
			    			<input type="text" class="form-control input-sm task-title" placeholder="新增提醒事项">
			    			<span class="input-group-btn">
			    				<button class="btn btn-default btn-sm btn-success" type="button" onclick="taskSubmit()"><span class="glyphicon glyphicon-ok"></span></button>
			    				<button class="btn btn-default btn-sm more btn-info task-more-btn" type="button" onclick="taskMore()"><span class="glyphicon glyphicon-chevron-down"></span></button>
			    			</span>
			    		</span>
						<div class="task-more hidden">
							<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="task-date" data-link-format="yyyy-mm-dd">
								<input class="form-control form-date" size="16" type="text" name="taskdate" value="" placeholder="选择提醒时间" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							<input type="hidden" id="task-date" value="" />
				            <script type="text/javascript">
								$('.form_date').datetimepicker({
							        language:  'zh-CN',
							        weekStart: 1,
							        todayBtn:  1,
									autoclose: 1,
									todayHighlight: 1,
									startView: 2,
									minView: 2,
									forceParse: 0
							    });
				            </script>
				    		<textarea name="taskcontent" class="form-control task-content" rows="2" placeholder="提醒备注"></textarea>
			    		</div>
			    	</li>
			    	<li class="editTask-model list-group-item" style="display:none">
			    		<span class="input-group">
			    			<input type="text" class="form-control input-sm task-title" placeholder="提醒事项">
			    			<span class="input-group-btn">
			    				<button class="btn btn-default btn-sm btn-success" type="button" onclick="taskUpdate()"><span class="glyphicon glyphicon-ok"></span></button>
			    				<button class="btn btn-default btn-sm more btn-info task-more-btn" type="button" onclick="taskMore()"><span class="glyphicon glyphicon-chevron-down"></span></button>
			    			</span>
			    		</span>
						<div class="task-more hidden">
							<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="task-date" data-link-format="yyyy-mm-dd">
								<input class="form-control form-date" size="16" type="text" name="taskdate" value="" placeholder="选择提醒时间" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							<input type="hidden" id="task-date" value="" />
				            <script type="text/javascript">
								$('.form_date').datetimepicker({
							        language:  'zh-CN',
							        weekStart: 1,
							        todayBtn:  1,
									autoclose: 1,
									todayHighlight: 1,
									startView: 2,
									minView: 2,
									forceParse: 0
							    });
				            </script>
				    		<textarea name="taskcontent" class="form-control task-content" rows="2" placeholder="提醒备注"></textarea>
			    		</div>
			    	</li>							
					</div>
				</div>
			</div>
			
			<!-- 备忘录 -->
			<div class="col-md-4">
			    <div class="panel panel-default" id="note">
					<div class="panel-heading">
					    <h3 class="panel-title" style="vertical-align:middle">
					    	<span class="glyphicon glyphicon-book"> 备忘录</span>
					    	<div class="note-icon pull-right" style="margin-top:-5px">
								<a href="javascript:noteBack()" class="glyphicon glyphicon-chevron-left text-center btn btn-default" style="display:none"> </a>
								<a href="javascript:noteInfo()" class="glyphicon glyphicon-info-sign text-center btn btn-default" style="display:none"> </a>
								<a href="javascript:noteEdit()" class="disabled glyphicon glyphicon-pencil text-center btn btn-default"> </a>
								<a href="javascript:noteRemove()" class="glyphicon glyphicon-trash text-center btn btn-default" style="display:none"> </a>
								<a href="javascript:noteAdd()" class="glyphicon glyphicon-plus text-center btn btn-default"> </a>
								<a class="glyphicon glyphicon-ok text-center btn btn-default" href="javascript:noteSubmit()" style="display:none"> </a>
							</div>
					    </h3>
					</div>
					<div class="panel-body">
						<!-- note 修改和添加 -->
						<div id="note-addedit" style="display:none">
						    <div class="input-group input-group-sm note-title">
								<span class="input-group-addon">Note</span>
								<input type="text" class="form-control title" placeholder="Note name">
							</div>
							<textarea placeholder="Note contents" class="form-control content" rows="13"></textarea>
							<input class="id" type="hidden" name="id" />
						</div>
						<!-- note 详细 -->
						<div id="note-content" style="display:none">
							<h4 class="text-center title"></h4>
							<hr style="margin:2px 0 8px" />
							<div class="content"></div>
						</div>
					    <!-- note 列表 -->
					    <ul class="list-group" id="note-list">
					    	<script type="text/javascript">
					    		$(function(){
					    			noteStart();
					    		});
					    	</script>
					    </ul>
					</div>
			    </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- 日历 -->
	<div class="row" style="">
		<div class="col-md-12">
			<div class="panel panel-default" id="menology">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-calendar"> 我的日历</span></h3>
				</div>
				<div class="panel-body">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End 主体部分 -->

<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/liv_home.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/JS/fullcalendar.js"></script>

<!-- 日历生成 -->
<script>
	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'today prev,next  month,agendaWeek,agendaDay'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			events: [
				{
					title: '项目审核',
					start: new Date(y,m,19),
					end: new Date(y,m,20)
				},
				{
					title: 'Living演示',
					start: new Date(y,m,d,15,30),
					allDay: false
				},
				{
					title: '考试A1',
					start: new Date(y,m,16,9,30),
					end: new Date(y,m,16,10,30),
					allDay: false
				},
				{
					title: '考试A4',
					start: new Date(y,m,17,9,30),
					end: new Date(y,m,17,10,30),
					allDay: false
				},
				{
					title: '阶段考试',
					start: new Date(y,m,20,9,30),
					end: new Date(y,m,20,11,00),
					allDay: false
				},
				{
					title: '简历沟通',
					start: new Date(y,m,23,9,30),
					end: new Date(y,m,23,10,30),
					allDay: false
				},
				{
					title: '简历沟通',
					start: new Date(y,m,24,9,30),
					end: new Date(y,m,24,10,30),
					allDay: false
				},
				{
					title: '考试A2',
					start: new Date(y,m,25,9,30),
					end: new Date(y,m,25,10,30),
					allDay: false
				},
				{
					title: '考试A5',
					start: new Date(y,m,28,9,30),
					end: new Date(y,m,28,10,30),
					allDay: false
				},				
				{
					title: '元旦',
					start: new Date(y,m+1,1),
					allDay: true
				},
				{
					title: 'Just do it',
					start: new Date(y,m,1),
					allDay: true
				},


			]
		});
		
	});
</script>
<!-- Start 底部 -->
<div id="footer">
	<hr style="margin-bottom:6px" />
	<span>2013@ <a href="__APP__/index/readme" class="text-success glyphicon glyphicon-send">living</a> by <a class="glyphicon glyphicon-user" href="http://supgeek-rod.com" target="_blank">sup.rod</a></span>
</div>
<!-- End 底部 -->
</body>
</html>