<!-- 首页<?php if(!defined('ucms'))exit; ?> -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>{{z(站点标题)}}</title>
<meta name="keywords" content="{{z(关键词)}}"/>
<meta name="description" content="{{z(描述)}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{tempdir}}m/css/style.css" />
</head>
<body>
{{file m/header}}
<div class="main warp">
	{{$channels=c(2,12)}}
	{{loop $channels as $channel}}
		<div class="box">
			<p><a href="{{$channel['url']}}">{{$channel['name']}}</a></p>
			<ul>
			{{$set=array()}}
			{{$set['cid']=$channel['cid']}}
			{{$set['pagesize']=12}}
			{{$articles=alist($set)}}
			{{loop $articles['list'] as $a}}
				<li><a href="{{$a['link']}}" target="_blank">{{$a['title']}}</a></li>
			{{/loop}}
			</ul>
		</div>
	{{/loop}}

	{{file m/new_article}}
	{{file m/ad}}

	<div class="box">
		<p>友情链接</p>
		<ul>
		<br>自己动手,丰衣足食<br>
			<br><a href="http://uuu.la/help/friendlink.html" target="_blank">学习如何搭建友情链接栏目→</a><br>
			<br><a href="http://uuu.la/help/logo.html" target="_blank">如何自定义LOGO、广告位图片→</a><br>
		</ul>
	</div>
</div>
{{file m/footer}}
</body>
</html>