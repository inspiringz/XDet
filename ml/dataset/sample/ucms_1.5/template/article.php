{{$set=array()}}
{{$set['where']['id']=intval($_GET['id'])}}
{{$article=a($set)}}
{{if !$article}}
	{{notfound()}}
{{/if}}
<!DOCTYPE html>
<!-- 文章页<?php if(!defined('ucms'))exit; ?> -->
<html>
<head>
<meta charset="utf-8"/>
<title>{{$article['title']}}</title>
{{if isset($article['keywords'])}}
<meta name="keywords" content="{{$article['keywords']}}"/>
{{/if}}
{{if isset($article['description'])}}
<meta name="description" content="{{$article['description']}}"/>
{{/if}}
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" type="text/css" href="{{tempdir}}css/style.css" />
</head>
<body>
{{file header}}
<div class="main warp">
	<div class="main_left">
		<div class="page_content">
			<h1>{{$article['title']}}</h1>
			<div class="article_content">
			{{if isset($article['content'])}}
				{{$article['content']}}
			{{else}}
				内容字段尚未增加
			{{/if}}
			</div>
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