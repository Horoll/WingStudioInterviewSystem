<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"D:\wamp64\www\project\wingstudiointerview/application/index\view\public\dispatch_jump.html";i:1505051006;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="__JS__/sweetalert.js"></script>
    <link rel="stylesheet" href="__CSS__/bootstrap.min.css">
    <link rel="stylesheet" href="__CSS__/sweetalert.css">
    <title></title>
</head>
<body>
<script type="text/javascript">
    swal({
        title: "<?php echo strip_tags($msg);?>",
    <?php switch($code) {case 1:?>
        type: "success",
    <?php break;case 0:?>
        type: "error",
    <?php } ?>
    confirmButtonText: "确定",
        confirmButtonColor: "#ffffff",
        closeOnConfirm: true,
    },function(isConfirm){
        if(isConfirm){
            window.location.href="<?php echo($url);?>";
        }
    });

</script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="__JS__/bootstrap.min.js"></script>
</body>
</html>
