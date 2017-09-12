<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\wamp64\www\project\wingstudiointerview/application/index\view\index\counter.html";i:1505207536;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>计数器</title>

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
    <h1 id="nowId" style="font-size: 700px;color: red;text-align: center">
    </h1>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__JS__/bootstrap.min.js"></script>
<script>
    setInterval(function () {
        $.get("<?php echo url('Index/nowCounter'); ?>").done(function (data) {
            $("h1#nowId").text(data)
        });
    },2000);
</script>
</body>
</html>