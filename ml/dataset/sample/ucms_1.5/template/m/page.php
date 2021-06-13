<!-- 单页栏目<?php if(!defined('ucms'))exit; ?> -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>{{s(栏目标题)}}</title>
<meta name="keywords" content="{{s(栏目关键词)}}"/>
<meta name="description" content="{{s(栏目描述)}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{tempdir}}m/css/style.css" />
</head>
<body>
{{file m/header}}
<div class="main warp">
	<div class="page_content">
		{{s(内容)}}
	</div>

	{{file m/channel}}
	{{file m/ad}}
</div>
{{file m/footer}}
</body>
</html>