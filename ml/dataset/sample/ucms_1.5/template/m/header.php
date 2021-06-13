<!-- 头部<?php if(!defined('ucms'))exit; ?> -->
<div class="header warp">
	<div class="fl"><a href="{{homeurl}}"><img src="{{tempdir}}m/images/logo.png"></a></div>
	<div class="fr"><img onclick="shownav();" src="{{tempdir}}m/images/list.png"></div>
	<script>
	function shownav(){
		if (document.getElementById('top_nav').style.display == "" || document.getElementById('top_nav').style.display == "none")
		{
			document.getElementById('top_nav').style.display = "block"; 
		}else{
			document.getElementById('top_nav').style.display = "none"; 
		}
		
	}
	</script>
</div>
<div class="warp top_nav" id="top_nav">
	<ul>
		{{n()}}
	</ul>
</div>
<div class="warp">
	<div class="urhere">
		<em>当前位置</em> : {{b()}}
	</div>
</div>