<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link href="/Public/uploadify/uploadify.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="JS/swfobject.js"></script>
    <script type="text/javascript" src="/Public/jquery.uploadify.js"></script>
</head>
<body>
<div id="fileQueue"></div>
<input type="file" name="uploadify" id="uploadify" />
<p>
    <a href="javascript:$('#uploadify').uploadifyUpload()">上传</a>|
    <a href="javascript:$('#uploadify').uploadifyClearQueue()">取消上传</a>
</p>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $("#uploadify").uploadify({
            'uploader': 'JS/uploadify.swf',
            'script': 'UploadHandler.ashx',
            'cancelImg': 'JS/cancel.png',
            'folder': 'UploadFile',
            'queueID': 'fileQueue',
            'auto': false,
            'multi': true
        });
    });
</script>
</html>