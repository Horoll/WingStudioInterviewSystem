<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\wamp64\www\project\wingstudiointerview/application/index\view\index\home.html";i:1505086136;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>主页</title>

    <!-- Bootstrap -->
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <h1>主页</h1>
    <hr>
    <h3>选择面试</h3>
    <div class="col-md-8">
        <form action="<?php echo url('Index/home'); ?>">
            <div class="form-group">
                <select class="form-control" name="name">
                    <?php foreach($interviews as $interview): ?>
                    <option><?php echo $interview['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <hr>
                <button type="submit" class="btn btn-info">选择</button>
            </div>
        </form>
        <br><br>
        <h3>添加面试</h3>
        <form action="<?php echo url('Index/home'); ?>">
            <div class="form-group">
                <input type="text" class="form-control" id="addinterview" placeholder="输入面试名称" name="addname">
            </div>
            <button type="submit" class="btn btn-primary">添加</button>
        </form>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__JS__/bootstrap.min.js"></script>
</body>
</html>