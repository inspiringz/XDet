<!-- 最新文章<?php if(!defined('ucms'))exit; ?> -->
<div class="box">
	<p>最新文章</p>
	<ul>
		{{$set=array()}}
		{{$set['pagesize']=15}}
		{{$set['column']=id,title}}
		{{$articles=alist($set))}}
		{{loop $articles['list'] as $a}}
			<li><a href="{{$a['link']}}" target="_blank">{{$a['title']}}</a></li>
		{{/loop}}
	</ul>
</div>