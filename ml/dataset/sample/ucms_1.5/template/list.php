<!DOCTYPE html>
<!-- 文章栏目页面<?php if(!defined('ucms'))exit; ?> -->
<html>
<head>
<meta charset="utf-8"/>
<title>{{s(栏目标题)}}</title>
<meta name="keywords" content="{{s(栏目关键词)}}"/>
<meta name="description" content="{{s(栏目描述)}}"/>
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" type="text/css" href="{{tempdir}}css/style.css" />
</head>
<body>
{{file header}}
<div class="main warp">
	<div class="main_left">
		<div class="page_content">
			<ul class="list">
				{{$set=array()}}
				{{$set['page']=page}}
				{{$articles=alist($set)}}
				{{loop $articles['list'] as $a}}
					<li><a href="{{$a['link']}}" target="_blank">{{$a['title']}}</a></li>
				{{/loop}}
			</ul>
			<ul class="pagelist">
			{{pagelist($articles)}}
			</ul>
		</div>
	</div>
	<div class="main_right">
		{{file right_channel}}
		{{file right_article}}
		{{file right_ad}}
	</div>
</div>
{{file footer}}
</body>
</html>