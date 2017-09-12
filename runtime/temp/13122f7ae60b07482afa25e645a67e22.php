<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\wamp64\www\project\wingstudiointerview/application/index\view\index\index.html";i:1505050516;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>WingStudio面试系统</title>

    <!-- Bootstrap -->
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link href="__CSS__/base.css" rel="stylesheet">
    <link href="__CSS__/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- 模态声明，show表示显示 fade：淡入淡出效果-->
<div class="modal fade" tabindex="-1" id="modal1">
    <!-- 窗口声明 -->
    <div class="modal-dialog">
        <!-- 内容声明 -->
        <div class="modal-content">
            <!-- 头部 -->
            <div class="modal-header">
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h4 class="modal-title">登录</h4>
            </div>
            <!-- 主体 -->
            <div class="modal-body">
                <div class="loginbody">
                    <!--标签页内容-->
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active login-form" id="userlogin">
                            <form action="<?php echo url('Index/login'); ?>" method="post" id="userloginform">
                                <!--[if IE 9]>
                                <div class="input-group">
                                    <div class="input-group-addon">帐号</div>
                                <![endif]-->
                                <input type="text" class="form-control" placeholder="帐号" name="accountname" id="userLoginUserName">
                                <!--[if IE 9]>
                                </div>
                                <![endif]-->
                                <!--[if IE 9]>
                                <div class="input-group">
                                    <div class="input-group-addon">密码</div>
                                <![endif]-->
                                <input type="password" class="form-control" placeholder="密码" name="password" id="userLoginPassword">
                                <!--[if IE 9]>
                                </div>
                                <![endif]-->
                                <!-- 注脚 -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">登 录</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <p class="navbar-brand">&nbsp;WingStudio Interview System</p>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!--<div class="collapse navbar-collapse" id="navbar-collapse">-->
            <!--<ul class="nav navbar-nav navbar-right">-->
                <!--<li><a href="#"> 使用说明</a></li>-->
                <!--<li><a href="#"> 技术特点</a></li>-->
            <!--</ul>-->
        <!--</div>-->
    </div>
</nav>

<div id="main">
    <div class="container-fluid">
        <div class="row" id="row-1">
            <div class="col-lg-12">
                <P id="main-title" style="display: none">面试系统</P>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p id="small-title" style="display: none">Interview System for WingStudio</p>
            </div>
        </div>
        <a class="btn btn-primary btn-lg" id="btn-start" role="button" data-toggle="modal" data-target="#modal1" style="display:none;">开 始 使 用</a>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <div class="footer-title">关于作者</div>
                    <p class="text_footer">
                        <span class="glyphicon glyphicon-user"></span>
                        &nbsp; WingStudio Horol
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <div class="footer-title">联系我们</div>
                    <p><span class="glyphicon glyphicon-home"> 十教B308</span></p>
                    <p><span class="glyphicon glyphicon-comment"> QQ：640246255</span></p>
                    <p><span class="glyphicon glyphicon-envelope"> horol@qq.com</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer id="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-ms-12 pull-left">
                <div class="copyright">Copyright © WingStudio</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-ms-12 pull-right">
                <div class="foot_menu">
                    <div class="menu-footer-menu-container">
                        <ul>
                            <li><a href="http://www.wingstudio.org/">WingStudio</a></li>
                            <li><a href="http://xxgc.sicau.edu.cn/">信息工程学院</a></li>
                            <li><a href="http://jiaowu.sicau.edu.cn">教务处</a></li>
                            <li><a href="http://www.sicau.edu.cn/">四川农业大学</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__JS__/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#main-title").fadeIn(1500);
        $("#small-title").fadeIn(2000);
        $("#btn-start").fadeIn(2000);
    });
</script>
</body>
</html>