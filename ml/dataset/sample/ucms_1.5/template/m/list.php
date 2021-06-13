<!-- 列表页<?php if(!defined('ucms'))exit; ?> -->
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
		<div class="box">
			<ul class="list topborder">
				{{$set=array()}}
				{{$set['page']=page}}
				{{$articles=alist($set)}}
				{{loop $articles['list'] as $a}}
					<li><a href="{{$a['link']}}" target="_blank">{{$a['title']}}</a></li>
				{{/loop}}
			</ul>
		</div>
		{{if count($articles['list'])>0}}
		<div class="pagelist">
			{{pagelist($articles)}}
		</div>
		{{/if}}

		{{file m/channel}}
		{{file m/new_article}}
		{{file m/ad}}
</div>
{{file m/footer}}
</body>
</html>