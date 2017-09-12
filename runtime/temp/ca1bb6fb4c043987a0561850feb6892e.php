<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\wamp64\www\project\wingstudiointerview/application/index\view\index\marking.html";i:1505225279;s:85:"D:\wamp64\www\project\wingstudiointerview/application/index\view\public\homebase.html";i:1505205104;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title>面试评分</title>

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
		<div class="container col-md-8 col-sm-8 col-sm-offset-3 col-md-offset-3" >
			<h1>面试评分</h1>
			<h2 style="color: red">当前面试组：第<?php echo cookie('interviewGroup'); ?>组 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				当前序号：<?php echo $student['order_id']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="<?php echo url('Index/counter'); ?>" target="_blank" class="btn btn-lg btn-warning"> 计数器 </a></h2>
			<hr>
			<div class="row">
				<div class="col-md-2">
					<img  class="img-responsive" src="http://jiaowu.sicau.edu.cn/photo/<?php echo $student['schoolid']; ?>.jpg">
				</div>
				<div class="col-md-3"><h3>姓名：<?php echo $student['name']; ?></h3></div>
				<div class="col-md-3"><h3>学号：<?php echo $student['schoolid']; ?></h3></div>
				<div class="col-md-4"><h3>班级：<?php echo $student['class']; ?></h3></div>
			</div>
			<br><br>
			<form id="form" method="post" action="<?php echo url('index/getMark'); ?>">
				<!--给学生在数据库中的id-->
				<input type="hidden" name="studentId" value="<?php echo $student['id']; ?>">
				<div class="form-group">
					<label for="grade"><h4>评分：<h5 style="color:red;">分值0.0~10.0，可整数可小数；多个评分之间请用 | 隔开</h5></h4></label> <br>
					<div class="row">
						<div class="col-sm-6">
							<input type="text" class="form-control input-lg" name="grade" id="grade" placeholder="打分">
						</div>
					</div>
					<h5 id="warning1" style="color:red;display: none">评分不能为空！</h5>
				</div>
				<br>

				<div class="form-group">
					<label for="remark"><h4>备注：</h4><h5 style="color:red;">比如学过那些语言，个人作品，部门，自学能力等</h5></label> <br>
					<div class="row">
						<div class="col-sm-6">
							<input type="text" class="form-control input-lg" name="remark" id="remark" placeholder="备注">
						</div>
					</div>
				</div>
				<br>
			</form>
			<button id="submit" class="btn btn-lg btn-info"> 下一位 </button>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="__JS__/bootstrap.min.js"></script>
		<script src="__JS__/home.js"></script>
		<script>
			$("#submit").click(function(){
                if($("#grade").val()==""){
					$("#warning1").css({"display":"block"});
				}else{
                    $("#form").submit();
				}
			});
		</script>
	</body>
</html>