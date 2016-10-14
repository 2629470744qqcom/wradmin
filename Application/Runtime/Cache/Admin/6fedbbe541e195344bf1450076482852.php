<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.css">
    <link href="/Public/css/index.css" type="text/css" rel="stylesheet">
    <title>后台系统</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="#" id="logo">后台管理系统</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <p class="navbar-text">今天是:
                    <script type="text/javascript" language="javascript">
                        today=new Date();
                        function initArray(){
                            this.length=initArray.arguments.length
                            for(var i=0;i<this.length;i++)
                                this[i+1]=initArray.arguments[i]  }
                        var d=new initArray(
                                "星期日",
                                "星期一",
                                "星期二",
                                "星期三",
                                "星期四",
                                "星期五",
                                "星期六");
                        document.write(
                                today.getFullYear(),"年",
                                today.getMonth()+1,"月",
                                today.getDate(),"日",
                                "&nbsp;&nbsp;",
                                d[today.getDay()+1]);
                    </script>
                </p>
               &nbsp; &nbsp; &nbsp; &nbsp;
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">22222 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">个人信息</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li><a href="<?php echo U('User/index');?>">退出系统</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid main-container">
    <div class="row">
        <div class="col-md-2">
            <ul id="main-nav" class="main-nav nav nav-tabs nav-stacked">
                <li class="active">
                    <a href="#"><span class="glyphicon glyphicon-home"></span>首页</a>
                </li>
                <li>
                    <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                        <span class="glyphicon glyphicon-cog"></span>
                        系统管理
                        <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                    </a>
                    <ul id="systemSetting" class="nav nav-list secondmenu collapse" style="height: 0px;">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;用户管理</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-th-list"></span>&nbsp;菜单管理</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-asterisk"></span>&nbsp;角色管理</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp;修改密码</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;日志查看</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#configSetting" class="nav-header collapsed" data-toggle="collapse">
                        <span class="glyphicon glyphicon-credit-card"></span>
                        配置管理
                        <span class="pull-right glyphicon  glyphicon-chevron-toggle"></span>
                    </a>
                    <ul id="configSetting" class="nav nav-list secondmenu collapse ">
                        <li ><a href="#"><span  class="glyphicon glyphicon-globe"></span>&nbsp;全局缺省配置</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;未开通用户配置</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></i>&nbsp;退订用户配置</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-text-width"></i>&nbsp;试用用户配置</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-ok-circle"></i>&nbsp;开通用户配置</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#disSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-globe"></i>
                        分发配置
                        <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                    </a>
                    <ul id="disSetting" class="nav nav-list secondmenu collapse">
                        <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>&nbsp;分发包配置</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            


        </div>
    </div>
</div>

</body>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>