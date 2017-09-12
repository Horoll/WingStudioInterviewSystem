<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\wamp64\www\project\wingstudiointerview/application/index\view\index\homeindex.html";i:1505199417;s:85:"D:\wamp64\www\project\wingstudiointerview/application/index\view\public\homebase.html";i:1505205104;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title>已签到人员</title>

		<!-- Bootstrap -->
		<link href="__CSS__/bootstrap.min.css" rel="stylesheet">
		<link href="__CSS__/base.css" rel="stylesheet">
		<link href="__CSS__/home-base.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation"><div class="container-fluid">
    <div class="navbar-header">
        <button class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <p class="navbar-brand">&nbsp;面试系统</p>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown pull-right">
                <a id="interviewname" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-bookmark"></span> <?php echo cookie('interviewname'); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo url('Index/changeInterview'); ?>"><span class="glyphicon glyphicon-log-out"></span> 更换面试 </a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a id="username" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo cookie('admin'); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo url('Index/index'); ?>"><span class="glyphicon glyphicon-log-out"></span> 注销登录 </a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>

<nav id="main" class="navbar navbar-default navbar-fixed-top sidebar-nav" role="navigation">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="sidebar-collapse">
            <ul class="nav nav-stacked">
                <li><a href="<?php echo url('Index/sign'); ?>"><span class="glyphicon glyphicon-pencil"></span> 签到台</a></li>
                <li><a href="<?php echo url('Index/homeindex'); ?>"><span class="glyphicon glyphicon-list-alt"></span> 面试人员</a></li>
                <li><a href="<?php echo url('Index/choosegroup'); ?>"><span class="glyphicon glyphicon-tasks"></span> 面试评分</a></li>
                <li><a href="<?php echo url('Index/rank'); ?>"><span class="glyphicon glyphicon-sort-by-attributes-alt"></span> 评分排名</a></li>
                <li><a href="<?php echo url('Index/config'); ?>"><span class="glyphicon glyphicon-cog"></span> 面试设置</a></li>
                <li id="logout"><a href="<?php echo url('Index/index'); ?>"><span class="glyphicon glyphicon-log-out"></span> 注销登录</a></li>
            </ul>
        </div>
    </div>
</nav>
		<!-- 内容栏 -->
		<div class="container col-md-10 col-sm-10 col-sm-offset-2 col-md-offset-2" >
			<h1>已签到人员</h1>
			<hr>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
					<th>序号</th>
					<th>姓名</th>
					<th>学号</th>
					<th>性别</th>
					<th>班级</th>
					<th>邮箱</th>
					<th>电话</th>
					<th>面试组别</th>
					<th>面试官</th>
					<th>评分</th>
					<th>备注</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($students as $student): ?>
					<tr>
						<td><?php echo $student['order_id']; ?></td>
						<td><?php echo $student['name']; ?></td>
						<td><?php echo $student['schoolid']; ?></td>
						<td><?php echo $student['sex']; ?></td>
						<td><?php echo $student['class']; ?></td>
						<td><?php echo $student['mail']; ?></td>
						<td><?php echo $student['phone']; ?></td>
						<td><?php echo $student['interview_group']; ?></td>
						<td><?php echo $student['interviewer_name']; ?></td>
						<td><?php echo $student['grade']; ?></td>
						<td><?php echo $student['remark']; ?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php echo $students->render(); ?>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="__JS__/bootstrap.min.js"></script>
		<script src="https://unpkg.com/vue/dist/vue.js"></script>
		<script src="__JS__/home.js"></script>
	</body>
</html>