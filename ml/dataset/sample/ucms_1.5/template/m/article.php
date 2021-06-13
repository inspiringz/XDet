<!-- 文章页<?php if(!defined('ucms'))exit; ?> -->
{{$set=array()}}
{{$set['where']['id']=intval($_GET['id'])}}
{{$article=a($set)}}
{{if !$article}}
	{{notfound();}}
{{/if}}
<!DOCTYPE html>
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
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{tempdir}}m/css/style.css" />
</head>
<body>
{{file m/header}}
<div class="main warp">
		<div class="page_content">
			<h1>{{$article['title']}}</h1>
			<div class="article_content">
			{{$article['content']}}
			</div>
		</div>
		{{file m/channel}}
		{{file m/new_article}}
		{{file m/ad}}
</div>
{{file m/footer}}
</body>
</html>