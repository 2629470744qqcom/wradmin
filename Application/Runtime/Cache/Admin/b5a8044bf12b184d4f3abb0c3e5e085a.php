<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.css">
    <link rel="stylesheet" href="/Public/bootstrapvalidator/dist/css/bootstrapValidator.css">
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript" src="/Public/bootstrapvalidator/dist/js/bootstrapValidator.js"></script>

    <title>Title</title>
</head>
<body>
<form method="" action="" id="Form">
        <div class="form-group">
            <label for="exampleInputEmail">用户名</label>
            <div class="input-group">
                <input type="text"  placeholder="用户名" id="username" name="username" data-bv-notempty data-bv-notempty-message="用户们不为空" />
    <span class="input-group-addon">
    <span class="glyphicon glyphicon-user"></span>
    </span>
            </div>
        </div>
    <button type="submit" >登录</button>
</form>

</body>
<script>
    $(function(){
        $('#Form').bootstrapValidator()
    });
</script>
</html>