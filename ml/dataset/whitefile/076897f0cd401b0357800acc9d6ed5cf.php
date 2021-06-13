<?php
function a($where) {
	$where['pagesize']=1;
	$article=alist($where);
	if(isset($article['list'][0])) {
		Return $article['list'][0];
	}else {
		Return false;
	}
}
function u($cid='') {
	if(empty($cid)) {
		Return gethomeurl();
	}
	Return getchannelurl($cid);
}
function z($strname,$return=1) {
	Return str($strname,0,$return);
}
function s($strname,$cid='',$return=1) {
	Return str($strname,$cid,$return);
}
function n($where=0) {
	Return nav($where);
}
function c($kind=0,$num=9999,$fid=0,$shownav=0) {
	$channel=getchannelscache();
	$newchannel=array();
	$count=0;
	if(isset($GLOBALS['nav'][$fid])) {
		if(is_array($GLOBALS['nav'][$fid])) {
			$diychannel=$GLOBALS['nav'][$fid];
		}elseif(function_exists($GLOBALS['nav'][$fid])) {
			$diychannel=$GLOBALS['nav'][$fid]($fid);
		}
		if(isset($diychannel)) {
			foreach($diychannel as $val) {
				if($shownav==0 || !isset($val['ifshownav']) ||($shownav>0 && @$val['ifshownav'])) {
					$newchannel[]=$val;
					$count++;
				}
				if($count==$num) {
					Return $newchannel;
				}
			}
			Return $newchannel;
		}
	}
	foreach($channel as $val) {
		if($fid==$val['fid']) {
			if($shownav==0 || ($shownav>0 && $val['ifshownav'])) {
				if($kind==0) {
					$newchannel[]=$val;
					$count++;
					$newchannel[count($newchannel)-1]['key']=$count;
				}elseif($val['ckind']==$kind) {
					$newchannel[]=$val;
					$count++;
					$newchannel[count($newchannel)-1]['key']=$count;
				}
			}
		}
		if($count==$num) {
			break;
		}
	}
	$fidarray=cnav(cid,1);
	foreach($newchannel as $key=>$val) {
		$newchannel[$key]['onstyle']='';
		foreach($fidarray as $fidkey=>$fidval) {
			if($val['cid']==$fidval['cid']) {
				$newchannel[$key]['onstyle']='on';
				break;
			}
		}
	}
	Return $newchannel;
}
function b($cid='',$return=false,$linktag=' &gt; ',$homepage=SystemDir) {
	Return cnav($cid,$return,$linktag,$homepage);
}
function i($kind='',$cid=0) {
	if($cid===0) {
		if(!defined('cid')) {Return false;}
		$cid=cid;
	}
	$channel=getchannelcache($cid);
	if(!$channel) {
		Return false;
	}
	if(empty($kind)) {
		Return $channel;
	}elseif($kind=='name' && isset($channel['cname'])) {
		Return $channel['cname'];
	}elseif($kind=='topfid') {
		$breadcrumb=b($channel['cid'],1);
		if(isset($breadcrumb[0]['cid'])) {
			Return $breadcrumb[0]['cid'];
		}
	}elseif($kind=='url') {
		Return u($channel['cid']);
	}elseif($kind=='domain') {
		Return @$channel['csetting']['channel_domain'];
	}else {
		if(isset($channel[$kind])) {
			Return $channel[$kind];
		}
	}
	Return false;
}
function uri($uri) {
	$uri=ltrim($uri,'/');
	if(UrlRewrite) {
		Return SystemDir.$uri;
	}else {
		Return SystemDir.IndexFile.'/'.$uri;
	}
}
function f($file) {
	require(SystemRoot.TemplateDir.DIRECTORY_SEPARATOR.$file);
}
function t($file='',$echo=1) {
	if($echo==1) {
		echo(SystemDir.TemplateDir.'/'.$file);
	}
	Return SystemDir.TemplateDir.'/'.$file;
}
function alist($where='') {
	if(isset($where['page']) && !is_numeric($where['page'])) {
		if(isset($_GET[$where['page']]) && $_GET[$where['page']]>0) {
			$where['page']=intval($_GET[$where['page']]);
		}else {
			$where['page']=1;
		}
	}
	$nullarticle=array('list'=>array(),'pagecount'=>0,'pagesize'=>1,'page'=>1,);
	if(!isset($where['cid']) && !defined('cid') && !isset($where['tablename']) && !isset($where['cids'])) {Return $nullarticle;}
	if(!isset($where['tablename']) && !isset($where['cid']) && !isset($where['cids']) && defined('cid')) {$where['cid']=cid;}
	if(!isset($where['cid'])) {$where['cid']=0;}
	if(is_numeric($where['cid'])) {$where['cid']=intval($where['cid']);}
	if(SiteCache && isset($where['cache']) && $where['cache']>0) {
		$cachewhere=$where;
		$cachehash=md5(json_encode($where));
		$res =cacheget($cachehash,$where['cache'],'alist');
		if ($res) {return json_decode($res,1);}
	}
	$sql='';
	if($where['cid']!==0) {
		$thischannelcache=getchannelcache($where['cid']);
		if(!$thischannelcache) {Return $nullarticle;}
		$where['cid']=$thischannelcache['cid'];
	}

	if(!isset($where['tablename'])) {$where['tablename']='';}
	if(!isset($where['all']) || $where['all']==1) {
		if(!isset($where['cids'])) {$where['cids']='';}
		$clistsetting=alist_getson($where['cid'],$where['tablename'],$where['cids']);
		if(!isset($clistsetting['sql'])) {Return $nullarticle;}
		$where['cidsql']=$clistsetting['sql'];
		$where['tablename']=$clistsetting['tablename'];
		$defaultsetting=getchannelcache($clistsetting['default']);
		if(!isset($where['pageurl']) && !isset($clistsetting['pageurl'])) {
			unset($defaultsetting['csetting']['channel_pageurl']);
		}
	}else {
		if(!isset($where['cidsql'])) {
			$where['cidsql']=" and (cid='".$where['cid']."')";
		}
		if($where['cid']) {
			$defaultsetting=getchannelcache($where['cid']);
			if(empty($where['tablename']) && isset($defaultsetting['csetting']['articletable'])) {
				$where['tablename']=$defaultsetting['csetting']['articletable'];
			}
		}
	}
	$sql.=$where['cidsql'];
	if(!isset($where['pagesize'])) {
		if(isset($defaultsetting['csetting']['temppage_size']) && !empty($defaultsetting['csetting']['temppage_size'])) {
			$where['pagesize']=$defaultsetting['csetting']['temppage_size'];
		}
	}
	if(!isset($where['order'])) {
		if(isset($defaultsetting['csetting']['temppage_order']) && !empty($defaultsetting['csetting']['temppage_order'])) {
			$where['order']=$defaultsetting['csetting']['temppage_order'];
		}
	}
	isset($where['addslashes']) ? $ifaddslashes=$where['addslashes']:$ifaddslashes=1;
	isset($where['tablename']) ? $where['tablename']=$where['tablename']:die('no tablename');
	isset($where['pagesize']) ? $where['pagesize']=intval($where['pagesize']):$where['pagesize']=9;
	isset($where['order']) ? $where['order']='order by '.$where['order']:$where['order']='order by id desc';
	isset($where['start']) ? $where['start']=intval($where['start']):$where['start']=0;
	isset($where['column']) ? $where['column']=$where['column']:$where['column']='*';
	isset($where['rowidstyle']) && !isset($where['rowidname']) ? $where['rowidname']='id' :'';
	isset($where['linktime'])  ?  1==1 : $where['linktime']='posttime';
	isset($where['link'])  ?  1==1 : $where['link']='';
	isset($where['domain'])  ?  1==1 : $where['domain']='';
	if(trim($where['column'])<>'*') {$where['column'].=',cid';}
	if(isset($where['where'])) {
		if(is_array($where['where'])) {
			foreach($where['where'] as $key=>$val) {
				$key=addslashes_str($key,$ifaddslashes);
				if(is_array($val) && count($val)>0) {
					$sql.=" and (";
					foreach($val as $value) {
						$sql.=$key."='".addslashes_str($value,$ifaddslashes)."' or ";
					}
					$sql=substr($sql,0,strlen($sql)-4);
					$sql.=")";
				}else {
					$sql.=" and ".$key."='".addslashes_str($val,$ifaddslashes)."'";
				}
			}
		}else {
			$sql.=" and ".$where['where'];
		}
	}
	if(isset($where['inwhere'])) {
		foreach($where['inwhere'] as $key=>$val) {
			if(!is_array($val)) {
				$val=array();
				$val[]=$where['inwhere'][$key];
			}
			$key=addslashes_str($key,$ifaddslashes);
			foreach($val as $val1) {
				if(is_numeric($val1) && $val1>0) {
					$sql.=" and (".$key."='[".$val1."]' or ".$key." like '%,".$val1.",%' or ".$key." like '[".$val1.",%' or ".$key." like '%,".$val1."]')";
				}else {
					unset($where['inwhere'][$key]);
				}
			}
		}
	}
	if(isset($where['nowhere'])) {
		foreach($where['nowhere'] as $key=>$val) {
			$key=addslashes_str($key,$ifaddslashes);
			if(is_array($val) && count($val)>0) {
				foreach($val as $value) {
					$sql.=" and ".$key."<>'".addslashes_str($value,$ifaddslashes).'\'';
				}
			}else {
				$sql.=" and ".$key."<>'".addslashes_str($val,$ifaddslashes)."'";
			}
		}
	}
	if(isset($where['other']) && !empty($where['other'])) {
		$sql.=" and ".$where['other'];
	}
	
	if(isset($where['keyword']) && !empty($where['keyword'])) {
		if(!isset($where['searchcolumn'])) {$where['searchcolumn']='title';}
		if(!is_array($where['searchcolumn'])) {$where['searchcolumn']=explode(',',$where['searchcolumn']);}
		if(!is_array($where['keyword'])) {$where['keyword']=explode('|',$where['keyword']);}
		$sql.=" and (";
		foreach($where['searchcolumn'] as $key=>$searchcolumn) {
			foreach($where['keyword'] as $keywordkey=>$keywordval) {
				if($key==0 && $keywordkey==0) {
					$sql.="$searchcolumn like '%".addslashes_str($keywordval,$ifaddslashes)."%'";
				}else {
					$sql.=" or $searchcolumn like '%".addslashes_str($keywordval,$ifaddslashes)."%'";
				}
			}
		}
		$sql.=" )";
	}
	if(!empty($sql)) {
		$sql='where '.ltrim($sql,'and ');
	}
	if(isset($where['page'])) {
		$where['page']=intval($where['page']);
		$where['pagecount'] = $GLOBALS['db'] -> fetchcount("SELECT count(id) FROM ".$where['tablename']." $sql");
		$where['articlecount']=$where['pagecount'];
		$where['start']=($where['page']-1)*$where['pagesize'];
		if($where['articlecount']%$where['pagesize']==0) {
			$where['pages']=($where['articlecount']/$where['pagesize']);
		}else {
			$where['pages']=intval($where['articlecount']/$where['pagesize'])+1;
		}
		if(isset($defaultsetting['csetting']['channel_pageurl']) && !empty($defaultsetting['csetting']['channel_pageurl']) && !isset($where['pageurl'])) {
			$allpageurl=explode(';',$defaultsetting['csetting']['channel_pageurl']);
			if(UrlRewrite) {
				$where['pageurl']=$allpageurl[0];
			}else {
				$where['pageurl']=SystemDir.IndexFile.$allpageurl[0];
			}
		}
	}
	if(!isset($where['sql'])) {
		$where['sql_id']='SELECT id FROM '.$where['tablename'].' '.$sql.' '.$where['order'].' limit '.$where['start'].','.$where['pagesize'];
		$idquery =$GLOBALS['db'] -> query($where['sql_id']);
		$ids = $GLOBALS['db'] -> fetchall($idquery);
		$sql='id in(';
		if(count($ids)>0) {
			foreach($ids as $key=>$val) {
				$sql.=$val[0].',';
			}
		}else {
			$sql.='0,';
		}
		$sql=rtrim($sql,',');
		$sql.=')';
		$where['sql']='SELECT '.$where['column'].' FROM '.$where['tablename'].' where '.$sql.' '.$where['order'];
	}
	$query = $GLOBALS['db'] -> query($where['sql']);
	$articles = $GLOBALS['db'] -> fetchall($query);
	$i=0;
	foreach ($articles as $value) 
	{
		$i++;
		$value['key']=$i;
		if(isset($where['stepstyle'])) {
			foreach($where['stepstyle'] as $key=>$val) {if($i%$key==0) {$value['stepstyle']=$where['stepstyle'][$key];}}
			if(!isset($value['stepstyle'])) {$value['stepstyle']='';}
		}
		if(isset($where['rowstyle'])) {
			foreach($where['rowstyle'] as $key=>$val) {if($i==$key) {$value['rowstyle']=$where['rowstyle'][$key];}}
			if(!isset($value['rowstyle'])) {$value['rowstyle']='';}
		}
		if(isset($where['rowidstyle'])) {
			foreach($where['rowidstyle'] as $key=>$val) {
				if($value[$where['rowidname']]==$key) {
					$value['rowidstyle']=$val;
				}
			}
			if(!isset($value['rowidstyle'])) {$value['rowidstyle']='';}
		}
		if(!isset($value[$where['linktime']])) {$value[$where['linktime']]=0;}
		$value['link']=aurl($value,$where['link'],$value[$where['linktime']],$where['domain']);
		$where['list'][]=$value;
	}
	if(!isset($where['list'])) {$where['list']=array();}
	if(SiteCache && isset($where['cache']) && $where['cache']>0) {
		cacheset($cachehash,json_encode($where),$where['cache'],'alist');
	}
	Return $where;
}
function getkinds($cid,$fid) {
	$fid=intval($fid);
	$kindsarray=array($fid);
	if(is_numeric($cid)) {
		$thichannelcache=getchannelcache($cid);
		$defaultsetting=$thichannelcache['csetting'];
		if(isset($defaultsetting['articletable']) && !empty($defaultsetting['articletable'])) {
			$kindtable=$defaultsetting['articletable'];
		}else {Return $kindsarray;}
	}else {
		$kindtable=$cid;
	}
	$query = $GLOBALS['db'] -> query("SELECT id FROM $kindtable where fid='$fid';");
	$link = $GLOBALS['db'] -> fetchall($query);
	foreach ($link as $value) 
	{
		$thisallkinds=getkinds($kindtable,$value['id']);
		foreach ($thisallkinds as $thisvalue) 
		{
			$kindsarray[]=$thisvalue;
		}
	}
	Return $kindsarray;
}
function alist_getson($cid,$tablename,$cids,$first=1) {
	if($cid==0 && empty($tablename)) {
		$tablename=ArticleTable;
	}
	$array=array();
	$array['list']=array();
	$channels=getchannelscache();
	if($first) {
		if(!is_array($cids)) {$cids=explode(';',$cids);}
		$thischannel=getchannelcache($cid);
		if($thischannel && @$thischannel['ckind']==2 && (in_array($cid,$cids) || empty($cids[0]))) {
				if(isset($thischannel['csetting']['articletable']) && !empty($thischannel['csetting']['articletable']) && empty($tablename)) {
					$tablename=$thischannel['csetting']['articletable'];
				}
				if($tablename==$thischannel['csetting']['articletable']) {
					$array['list'][]=$thischannel;
					if(isset($thischannel['csetting']['channel_pageurl']) && !empty($thischannel['csetting']['channel_pageurl'])) {
						$array['pageurl']=$thischannel['csetting']['channel_pageurl'];
					}
				}
		}
		$array['tablename']=$tablename;
	}
	foreach($channels as $key=>$val) {
		if($val['fid']==$cid) {
			$thischannel=getchannelcache($val['cid']);
			if(empty($tablename)) {
				if($thischannel['ckind']==2 && isset($thischannel['csetting']['articletable']) && (in_array($val['cid'],$cids) || empty($cids[0]))) {
					$array['list'][]=$val;
					$tablename=$thischannel['csetting']['articletable'];
					$array['tablename']=$tablename;
				}
			}else {
				if($thischannel['ckind']==2 && isset($thischannel['csetting']['articletable']) && $thischannel['csetting']['articletable']==$tablename && (in_array($val['cid'],$cids) || empty($cids[0]))) {
					$array['list'][]=$val;
				}
			}
			
			$sonarray=alist_getson($val['cid'],$tablename,$cids,0);
			foreach($sonarray['list'] as $key1=>$val1) {
				$array['list'][]=$val1;
			}
		}
	}
	if($first) {
		$cids=array();
		$sql='';
		foreach($array['list'] as $key=>$val) {
			if($key==0) {
				$sql.=" and (cid='".$val['cid']."'";
			}elseif($key==(count($array['list'])-1)) {
				$sql.=" or cid='".$val['cid']."'";
			}else {
				$sql.=" or cid='".$val['cid']."'";
			}
		}
		if(count($array['list'])>0) {$array['sql']=$sql.')';}
		if(isset($array['list'][0])) {
			$array['default']=$array['list'][0]['cid'];
		}else {
			$array['default']=0;
		}
		Return $array;
	}else {
		Return $array;
	}
}
function aurl($value,$rowurl,$rowurltime,$domain='') {
	$thissetting=getchannelcache($value['cid']);
	if(empty($domain)) {
		if(isset($thissetting['csetting']['channel_domain']) && !empty($thissetting['csetting']['channel_domain'])) {
			$domains=explode(';',$thissetting['csetting']['channel_domain']);
			$domain=$domains[0];
			foreach($domains as $key) {
				if($key==server_name()) {
					$domain=null;
					break;
				}
			}
		}
		
	}
	if(empty($rowurl)) {
		if(empty($thissetting['csetting']['channel_articleurl'])) {
			Return '';
		}
		$rowurl=$thissetting['csetting']['channel_articleurl'];
	}
	if(!empty($where['domain'])) {
		$domains=explode(';',$where['domain']);
		$where['domain']=$domains[0];
		foreach($domains as $domain) {
			if($domain==server_name()) {
				$where['domain']=null;
				break;
			}
		}
	}
	unset($thissetting);
	$rowurls=explode(';',$rowurl);
	$rowurl=$rowurls[0];
	preg_match_all("/{(.*)}|\[(.*)\]|\((.*)\)/isU",$rowurl,$match);
	if(count($match[0])>0) {
		foreach($match[0] as $key=>$val) {
			if($rowurltime>0 && ($val=='(y)' || $val=='(m)' || $val=='(d)')) {
				isset($value['y'])  ?  1==1 : $value['y']=date('Y',$rowurltime);
				isset($value['m'])  ?  1==1 : $value['m']=date('m',$rowurltime);
				isset($value['d'])  ?  1==1 : $value['d']=date('d',$rowurltime);
			}
			if(isset($value[$match[1][$key]])) {
				if(is_numeric($value[$match[1][$key]])) {$rowurl=str_replace($val,$value[$match[1][$key]],$rowurl);}else {$rowurl=str_replace($val,urlencode($value[$match[1][$key]]),$rowurl);}
			}
			if(isset($value[$match[2][$key]])) {
				if(is_numeric($value[$match[2][$key]])) {$rowurl=str_replace($val,$value[$match[2][$key]],$rowurl); }else {$rowurl=str_replace($val,urlencode($value[$match[2][$key]]),$rowurl); }
			}
			if(isset($value[$match[3][$key]])) {
				if(is_numeric($value[$match[3][$key]])) {$rowurl=str_replace($val,$value[$match[3][$key]],$rowurl); }else {$rowurl=str_replace($val,urlencode($value[$match[3][$key]]),$rowurl); }
			}
		}
	}
	if(!empty($domain)) {
		$domain='//'.$domain.server_port();
	}
	if(UrlRewrite) {
		$rowurl=$domain.$rowurl;
	}else {
		$rowurl=$domain.SystemDir.IndexFile.$rowurl;
	}
	Return $rowurl;
}

function all_list($where=array(),$pagesize=10,$cid='') {
	
	if(!isset($where['cache'])) {$where['cache']=3600;}
	$cachehash=md5(json_encode($where).$pagesize.json_encode($cid));
	$res =cacheget($cachehash,$where['cache'],'alist');
	if ($res) {return json_decode($res,1);}
	if(empty($cid)) {
		$cid=array();
		$allchannels=getchannelscache();
		foreach($allchannels as $channel) {
			if($channel['ckind']==2) {
				$cid[]=$channel['cid'];
			}
		}
	}elseif(is_numeric($cid)) {
		$cid=array($cid);
	}
	$articles=array();
	foreach($cid as $thiscid) {
		$where['cid']=$thiscid;
		$where['pagesize']=$pagesize;
		$where['all']=0;
		$thisarticles=alist($where);
		foreach($thisarticles['list'] as $thisarticle) {
			$articles[]=$thisarticle;
		}
	}
	$posttime=array();
	foreach ($articles as $article) {
		$posttime[] = $article['posttime'];
	}
	$orderarticles=array_multisort($posttime, SORT_DESC, $articles);
	$returnarticles=array();
	$i=0;
	foreach($articles as $key=>$val) {
		$i++;
		$val['key']=$i;
		$returnarticles[]=$val;
		if($key==($pagesize-1)) {
			break;
		}
	}
	if(SiteCache && $where['cache']>0) {
		cacheset($cachehash,json_encode($returnarticles),$where['cache'],'alist');
	}
	Return $returnarticles;
}
function ainsert($article,$setting='') {
	if(!is_array($article)) {Return false;}
	if(empty($setting)) {$setting=array();}
	if(!isset($setting['cid']) && !isset($article['cid'])) {
		if(defined('cid')) {
			$setting['cid']=cid;
		}else {
			Return 'setting no cid';
		}
	}
	if(!isset($setting['addslashes'])) {$setting['addslashes']=1;}
	if(!isset($setting['default'])) {$setting['default']=1;}
	if(!isset($setting['check'])) {$setting['check']=1;}
	if(!isset($setting['cid'])) {$setting['cid']=$article['cid'];}
	if(isset($article['cid'])) {unset($article['cid']);}

	$channel = getchannelcache($setting['cid']);
	if(!$channel) {Return 'channel not exist';}
	$setting['cid']=$channel['cid'];
	$csetting=$channel['csetting'];
	if(!isset($setting['tablename']) || empty($setting['tablename'])) {$setting['tablename']=$csetting['articletable'];}
	if(count($article)==0) {
		Return 'where article columns';
	}
	foreach($article as $key=>$val) {
		$article[$key]=addslashes_str($article[$key],$setting['addslashes']);
	}
	if($setting['check']) {
		$columns = $GLOBALS['db'] -> all("select mname,mkind,ifonly,strdefault,msetting from ".tableex('moudle')." where cid=".$setting['cid']."  order by morder asc;");
		foreach($columns as $thiscolumn) {
			$key=$thiscolumn['mname'];
			if(!isset($article[$key]) && $setting['default']) {
				$article[$key]=$thiscolumn['strdefault'];
				if($thiscolumn['mkind']==9) {
					if($thiscolumn['strdefault']=='now') {
						$article[$key]=time();
					}else{
						$thiscolumn['strdefault']=@strtotime($thiscolumn['strdefault']);
						if($thiscolumn['strdefault']) {
							$article[$key]=$thiscolumn['strdefault'];
						}else {
							$article[$key]=0;
						}
					}
				}
			}
			if(isset($article[$key])) {
				$thismsetting=json_decode($thiscolumn['msetting'],1);
				$thismsetting['ifonly']=$thiscolumn['ifonly'];
				$thismsetting['tablename']=$setting['tablename'];
				$thismoudlevalue=$article[$key];
				if($thismsetting['filterhtml']==1) {
					require_once(SystemRoot.AdminDir.'/input/kses.php');
					$thismoudlevalue= kses($thismoudlevalue);
				}elseif($thismsetting['filterhtml']==2) {
					$thismoudlevalue=htmlspecialchars($thismoudlevalue);
				}
				$acheck=acheck($key,$thismoudlevalue,$setting['cid'],$thismsetting);
				if($acheck==='error') {Return $key.' error';}
				if($acheck==='short') {Return $key.' short';}
				if($acheck==='long') {Return $key.' long';}
				if($acheck==='exist') {Return $key.' exist';}
				$article[$key]=$thismoudlevalue;
			}
		}
	}
	$article['cid']=$setting['cid'];
	if(!isset($article['posttime'])) {$article['posttime']=time();}
	if(!isset($article['adminuid'])) {$article['adminuid']=0;}
	$result = $GLOBALS['db'] -> insert($setting['tablename'],$article);
	if($result) {Return $result;}else {Return false;}
}
function aedit($article,$setting='') {
	if(!isset($article['id']) || !is_numeric($article['id']) || $article['id']<1) {
		Return 'id error';
	}
	$id=$article['id'];
	unset($article['id']);
	if(!is_array($article)) {Return false;}
	if(empty($setting)) {$setting=array();}
	if(!isset($setting['cid']) && !isset($article['cid'])) {
		if(defined('cid')) {
			$setting['cid']=cid;
		}else {
			Return 'setting no cid';
		}
	}
	if(!isset($setting['addslashes'])) {$setting['addslashes']=1;}
	if(!isset($setting['check'])) {$setting['check']=1;}
	if(!isset($setting['cid'])) {$setting['cid']=$article['cid'];}
	if(isset($article['cid'])) {unset($article['cid']);}
	$channel = getchannelcache($setting['cid']);
	if(!$channel) {Return 'channel not exist';}
	$setting['cid']=$channel['cid'];
	$csetting=$channel['csetting'];
	if(!isset($setting['tablename']) || empty($setting['tablename'])) {$setting['tablename']=$csetting['articletable'];}
	if(count($article)==0) {
		Return 'where article columns';
	}
	foreach($article as $key=>$val) {
		$article[$key]=addslashes_str($article[$key],$setting['addslashes']);
	}
	if($setting['check']) {
		$columns = $GLOBALS['db'] -> all("select mname,ifonly,strdefault,msetting from ".tableex('moudle')." where cid=".$setting['cid']."  order by morder asc;");
		foreach($columns as $thiscolumn) {
			$key=$thiscolumn['mname'];
			if(isset($article[$key])) {
				$thismsetting=json_decode($thiscolumn['msetting'],1);
				$thismsetting['ifonly']=$thiscolumn['ifonly'];
				$thismsetting['tablename']=$setting['tablename'];
				$thismoudlevalue=$article[$key];
				if($thismsetting['filterhtml']==1) {
					require_once(SystemRoot.AdminDir.'/input/kses.php');
					$thismoudlevalue= kses($thismoudlevalue);
				}elseif($thismsetting['filterhtml']==2) {
					$thismoudlevalue=htmlspecialchars($thismoudlevalue);
				}
				$acheck=acheck($key,$thismoudlevalue,$setting['cid'],$thismsetting,$id);
				if($acheck==='error') {Return $key.' error';}
				if($acheck==='short') {Return $key.' short';}
				if($acheck==='long') {Return $key.' long';}
				if($acheck==='exist') {Return $key.' exist';}
				$article[$key]=$thismoudlevalue;
			}
		}
	}
	$result = $GLOBALS['db'] -> update($setting['tablename'],"id='$id'",$article);
	if($result) {Return true;}else {Return false;}
}
function adel($cid,$id,$tablename='') {
	if(empty($cid) && empty($tablename)) {
		if(defined('cid')) {
			$cid=cid;
		}else {
			Return 'no cid';
		}
	}
	if(empty($id)) {Return 'no id';}else {$id=intval($id);}
	if(empty($tablename)) {
		$channel = getchannelcache($cid);
		if(!$channel) {Return 'channel not exist';}
		$cid=$channel['cid'];
		$csetting=$channel['csetting'];
		$tablename=$csetting['articletable'];
	}
	$query = $GLOBALS['db'] -> query("delete from `$tablename` WHERE id='$id'");
	if($query) {
		Return true;
	}else {
		Return false;
	}
}
function acheck($mname,$value,$cid='',$thismsetting='',$id=0) {
	if($cid=='') {
		if(defined('cid')) {
			$cid=cid;
		}else {
			Return 'no cid';
		}
	}
	if($thismsetting=='') {
		$column = $GLOBALS['db'] -> one("select mname,ifonly,msetting from ".tableex('moudle')." where cid='".$cid."' and mname='".$mname."' limit 1;");
		$thismsetting=json_decode($column['msetting'],1);
		$thismsetting['ifonly']=$column['ifonly'];
	}
	if(isset($thismsetting['regular']) && strlen($thismsetting['regular'])>3 && !empty($value)) {
		if(!preg_match($thismsetting['regular'],$value)){
			Return 'error';
		}
	}
	if(isset($thismsetting['lenmin']) && is_numeric($thismsetting['lenmin']) && $thismsetting['lenmin']>0) {
		if(strlen($value)<$thismsetting['lenmin']) {
			Return 'short';
		}
	}
	if(isset($thismsetting['lenmax']) && is_numeric($thismsetting['lenmax']) && $thismsetting['lenmax']>0) {
		if(strlen($value)>$thismsetting['lenmax']) {
			Return 'long';
		}
	}
	if($thismsetting['ifonly']==1) {
		if(!isset($thismsetting['tablename'])) {
			$channel = getchannelcache($cid);
			$thismsetting['tablename']=$channel['csetting']['articletable'];
		}
		if($id>0) {
			$pagecount = $GLOBALS['db'] -> fetchcount("SELECT id FROM ".$thismsetting['tablename']." where $mname='$value' and cid='".$cid."' and id<>'$id' limit 1;");
		}else {
			$pagecount = $GLOBALS['db'] -> fetchcount("SELECT id FROM ".$thismsetting['tablename']." where $mname='$value' and cid='".$cid."' limit 1;");
		}
		if($pagecount) {
			Return 'exist';
		}
	}
	Return true;
}
function addslashes_str($val,$addslashes) {
	if($addslashes) {
		Return dbstr($val);
	}else {
		Return $val;
	}
}
function pagelist($alist,$url='',$returnarray=0)
{
	if(!isset($alist['pagecount']) || !isset($alist['page'])) {
		Return false;
	}
	$recordcount	=$alist['pagecount'];
	$pagesize		=$alist['pagesize'];
	$curpage		=$alist['page'];
	$pages			=isset($alist['showpages']) ? $alist['showpages'] :3 ;
	if(empty($url) && isset($alist['pageurl']) && !empty($alist['pageurl'])) {
		$url=$alist['pageurl'];
		if(isset($alist['cid'])) {
			$url=str_replace('(cid)',$alist['cid'],$url);
		}
	}else {
		if(UrlRewrite) {
			$url=$_SERVER['REQUEST_URI'];
		}else {
			$url=$_SERVER['SCRIPT_NAME'].$_SERVER['REQUEST_URI'];
		}
		if(stripos($url,'page=')===false) {
			if(stripos($url,'?')===false) {
				$url=$url."?page=(page)";
			}else {
				$url=$url."&page=(page)";
			}
		}
		$url = preg_replace("/page=([0-9]+)/is", "page=(page)", $url);
	}
	if($pagesize<1) {
		$pagesize=1;
	}
	$pagesarray=array();
	$totalpage = max(ceil($recordcount/$pagesize),1);
	if($curpage<0 || $curpage>$totalpage) $curpage=1;
		$outhtml = "";
	$pageno = $curpage;
	if($pageno<0 || $pageno>$totalpage) $pageno=1;
	if($pageno==1) {
		$pagesarray[]=array('url'=>str_replace('(page)','1',$url),'title'=>'&lt;&lt;','class'=>'disabled');
	}else {
		$pagesarray[]=array('url'=>str_replace('(page)','1',$url),'title'=>'&lt;&lt;','class'=>'');
	}
	
	if($pages>$totalpage){
		$startpage=1;
		$endpage=min($startpage+$pages,$totalpage);
	}else{
		$startpage=max($totalpage-$pages,1);
		$startpage=min($startpage,$curpage);
		$endpage=min($startpage+$pages,$totalpage);
	}
	if($pageno>1){
		$pagesarray[]=array('url'=>str_replace('(page)',$pageno-1,$url),'title'=>'&lt;','class'=>'');
	}else{
		$pagesarray[]=array('url'=>str_replace('(page)',1,$url),'title'=>'&lt;','class'=>'disabled');
	}
	for($i=$startpage;$i<=$endpage;$i++)
	{
		if($curpage==$i){
			$pagesarray[]=array('url'=>str_replace('(page)',$i,$url),'title'=>$i,'class'=>'on');
		}else{
			$pagesarray[]=array('url'=>str_replace('(page)',$i,$url),'title'=>$i,'class'=>'');
		}
	 }
	if($pageno<$totalpage){
		$pagesarray[]=array('url'=>str_replace('(page)',$pageno+1,$url),'title'=>'&gt;','class'=>'');
	}else{
		$pagesarray[]=array('url'=>str_replace('(page)',$totalpage,$url),'title'=>'&gt;','class'=>'disabled');
	}
	if($pageno==$totalpage) {
		$pagesarray[]=array('url'=>str_replace('(page)',$totalpage,$url),'title'=>'&gt;&gt;','class'=>'disabled');
	}else {
		$pagesarray[]=array('url'=>str_replace('(page)',$totalpage,$url),'title'=>'&gt;&gt;','class'=>'');
	}
	if($returnarray) {
		Return $pagesarray;
	}else {
		$outhtml='';
		foreach($pagesarray as $val) {
			if(!empty($val['class'])) {
				$val['class']=' class="'.$val['class'].'"';
			}
			$outhtml.='<li'.$val['class'].'><a href="'.$val['url'].'">'.$val['title'].'</a></li>';
		}
	}
	echo $outhtml;
}
function nav($where=0) {
	$channelarray=array();
	if(!is_array($where)) {
		$thiscid=$where;
		$where=array();
		$where['cid']=$thiscid;
	}
	if(!isset($where['cid'])) {
		$where['cid']=0;
	}
	$cid=$where['cid'];
	if(!isset($where['oncid'])) {
		if(defined('cid')) {
			$where['oncid']=cid;
		}else {
			$where['oncid']=0;
		}
		//取出on的所有id
	}
	if(!isset($where['onstyle'])) {
		$where['onstyle']=' class="on"';
	}
	if(!isset($where['bro'])) {$where['bro']=1;}
	if(!isset($where['papa'])) {$where['papa']=1;}
	if($where['cid']==0) {
		if(!isset($where['homepage'])) {
			$where['homepage']['name']='首页';
			$where['homepage']['url']=gethomeurl();
			$where['homepage']['target']='';
		}else {
			if(is_array($where['homepage'])) {
				if(!isset($where['homepage']['name'])) {
					$where['homepage']['name']='首页';
				}
				if(!isset($where['homepage']['url'])) {
					$where['homepage']['url']=gethomeurl();
				}
				if(!isset($where['homepage']['target'])) {
					$where['homepage']['target']='';
				}
			}
		}
		if(is_array($where['homepage'])) {
			$channelarray[]=array('cid'=>'0','fid'=>'0','name'=>$where['homepage']['name'],'url'=>$where['homepage']['url'],'target'=>$where['homepage']['target']);
		}
	}
	$allchannels=getchannelscache();
	$channels=array();
	foreach($allchannels as $val) {
		if($val['ifshownav']==1) {
			$channels[]=$val;
		}
	}
	$count=0;
	$myfid=0;
	$papaid=0;
	foreach($channels as $channel) {
		if(is_numeric($cid)) {
			if($channel['cid']==$cid) {
				$myfid=$channel['fid'];
				if($cid>0 && $where['papa']==1) {
					$channelarray['papa']=$myfid;//显示父栏目
					$papaid=$myfid;
				}
			}
			if($channel['fid']==$cid) {
				$count=1;
				$channelarray[]=$channel;
			}
		}elseif(is_array($cid)) {
			if(in_array($channel['cid'],$cid)) {
				$count=1;
				$channelarray[]=$channel;
			}
		}
	}
	if($count>0 && is_numeric($cid) && $cid>0 && $where['papa']==1) {
		$channelarray['papa']=$cid;
	}
	if($count==0) {
		$noonpapaid=$myfid;
	}else {
		$noonpapaid=false;
	}
	if(isset($channelarray['papa']) && $channelarray['papa']>0) {
		foreach($channels as $channel) {
			if($channel['cid']==$channelarray['papa']) {
				$channelarray['papa']=$channel;
			}
		}
	}else {
		unset($channelarray['papa']);
	}
	if(isset($where['bro']) && $where['bro']==1 && $count==0 &&  is_numeric($cid)) {
		//显示兄弟栏目
		if(isset($myfid) && $myfid>0) {
			foreach($channels as $key=>$channel) {
				if($channel['fid']==$myfid) {$channelarray[]=$channel;}
			}
		}elseif(isset($myfid) && $myfid==0) {
			foreach($channels as $key=>$channel) {
				if($channel['cid']==$cid) {$channelarray[]=$channel;}
			}
		}
	}
	$onarray=array();
	if(defined('cid')) {
		$thiscid=cid;
		while(1<2) {
			$ifin=false;
			foreach($channels as $channel) {
				if($channel['cid']==$thiscid && $channel['cid']!=$noonpapaid) {
					$onarray[]=$channel['cid'];
					$thiscid=$channel['fid'];
					$ifin=true;
					break;
				}
			}
			if($ifin===false || $thiscid==0) {
				break;
			}
		}
	}
	$returnarray=array();
	$returnstr='';
	if(!isset($where['html'])) {
		$where['html']='<li{onstyle}><a href="{url}"{target}>{name}</a></li>';
	}
	if(isset($GLOBALS['nav'][$cid])) {
		if(is_array($GLOBALS['nav'][$cid])) {
			$channelarray=$GLOBALS['nav'][$cid];
		}elseif(function_exists($GLOBALS['nav'][$cid])){
			$channelarray=$GLOBALS['nav'][$cid]($cid);
		}
		
	}
	foreach($channelarray as $key=>$channel) {
		$thisstr=$where['html'];
		if(!isset($channel['onstyle']) || empty($channel['onstyle'])) {
			if(in_array($channel['cid'],$onarray)) {
				$channel['onstyle']=$where['onstyle'];
			}else {
				$channel['onstyle']='';
			}
		}
		if(defined('cid') && cid==0 && $channel['cid']==0) {//homepage
			$channel['onstyle']=$where['onstyle'];
		}
		$returnarray[]=$channel;
		if(!isset($where['returnarray']) || $where['returnarray']==0) {
			$thisstr=str_replace('{url}',@$channel['url'],$thisstr);
			$thisstr=str_replace('{target}',@$channel['target'],$thisstr);
			$thisstr=str_replace('{name}',@$channel['name'],$thisstr);
			$thisstr=str_replace('{onstyle}',@$channel['onstyle'],$thisstr);
			$returnstr.=$thisstr."\r\n";
		}
	}
	if(!isset($where['returnarray']) || $where['returnarray']==0) {
		Return $returnstr;
	}else{
		Return $returnarray;
	}
}
function cnav($cid='',$returnarray=false,$linktag=' &gt; ',$homepage=SystemDir) {
	if(empty($cid)) {
		if(defined('cid')){
			$cid=cid;
		}else {
			$cid=0;
		}
	}
	$channels=getchannelscache();
	$breadcrumb='';
	$breadcrumbarray=array();
	while(1<2)
	{
		$thischannel=false;
		foreach($channels as $channel) {
			if($channel['cid']==$cid) {
				$thischannel=$channel;
			}
		}
		if($thischannel==false) {
			if($breadcrumb=='') {
				$breadcrumb='<a href="'.gethomeurl().'">首页</a>';
			}else {
				$breadcrumb='<a href="'.gethomeurl().'">首页</a>'.$linktag.$breadcrumb;
			}
			if($returnarray) {
				Return array_reverse($breadcrumbarray);
			}else {
				Return $breadcrumb;
			}
		}else {
			if($breadcrumb=='') {
				$breadcrumb='<a href="'.$thischannel['url'].'">'.$thischannel['name'].'</a>';
			}else {
				$breadcrumb='<a href="'.$thischannel['url'].'">'.$thischannel['name'].'</a>'.$linktag.$breadcrumb;
			}
			$breadcrumbarray[]=$thischannel;
			$cid=$thischannel['fid'];
		}
	}
}
function getallchannelscache() {
	if(isset($GLOBALS['allchannelscache'])) {
		Return $GLOBALS['allchannelscache'];
	}
	$channelcachekeyname='allchannelscache';
	$channelcache=cacheget($channelcachekeyname,604800,'channel');
	if($channelcache) {
		$channels=json_decode($channelcache,1);
	}else {
		$channelslist=$GLOBALS['db']->all("SELECT cid,fid,ifshownav,cname,ckind,cvalue,newwindow,csetting FROM ".tableex('channel')." where ckind<>'4' order by corder asc");
		if($channelslist) {
			$channels=array();
			foreach($channelslist as $val) {
				unset($thischannel);
				$thischannel=array();
				$thischannel['cid']=$val['cid'];
				$thischannel['fid']=$val['fid'];
				$thischannel['ckind']=$val['ckind'];
				$thischannel['ifshownav']=$val['ifshownav'];
				$thischannel['name']=$val['cname'];
				if($val['newwindow']==1) {
					$thischannel['target']=' target="_blank" ';
				}else {
					$thischannel['target']='';
				}
				$thischannel['url']=getchannelurl($val);
				if(empty($thischannel['url'])) {
					$thischannel['url']='#';
					$thischannel['target']='';
				}
				$channels[]=$thischannel;
			}
			cacheset($channelcachekeyname,json_encode($channels),604800,'channel');
		}else {
			Return array();
		}
	}
	$GLOBALS['allchannelscache']=$channels;
	Return $channels;
}
function getchannelscache() {
	if(isset($GLOBALS['channelscache'])) {
		Return $GLOBALS['channelscache'];
	}
	$channelcachekeyname='channelscache';
	$channelcache=cacheget($channelcachekeyname,604800,'channel');
	if($channelcache) {
		$channels=json_decode($channelcache,1);
	}else {
		$channelslist=$GLOBALS['db']->all("SELECT cid,fid,ifshownav,cname,ckind,cvalue,newwindow,csetting FROM ".tableex('channel')." where ckind<>'4' and ifshow=1 order by corder asc");
		if($channelslist) {
			$channels=array();
			foreach($channelslist as $val) {
				unset($thischannel);
				$thischannel=array();
				$thischannel['cid']=$val['cid'];
				$thischannel['fid']=$val['fid'];
				$thischannel['ckind']=$val['ckind'];
				$thischannel['ifshownav']=$val['ifshownav'];
				$thischannel['name']=$val['cname'];
				if($val['newwindow']==1) {
					$thischannel['target']=' target="_blank" ';
				}else {
					$thischannel['target']='';
				}
				$thischannel['url']=getchannelurl($val);
				if(empty($thischannel['url'])) {
					$thischannel['url']='#';
					$thischannel['target']='';
				}
				$channels[]=$thischannel;
			}
			cacheset($channelcachekeyname,json_encode($channels),604800,'channel');
		}else {
			Return array();
		}
	}
	$GLOBALS['channelscache']=$channels;
	Return $channels;
}
function getchannelcache($cid) {
	if(isset($GLOBALS['channelcache'][$cid])) {
		Return $GLOBALS['channelcache'][$cid];
	}
	$channelcachekeyname='channelcache_'.$cid;
	$channelcache=cacheget($channelcachekeyname,604800,'channel');
	if($channelcache) {
		$channelcache=json_decode($channelcache,1);
	}else {
		if(is_numeric($cid)) {
			$channelcache=$GLOBALS['db']->one("SELECT * FROM ".tableex('channel')." where cid='$cid' limit 1");
		}else {
			$channelcache=$GLOBALS['db']->one("SELECT * FROM ".tableex('channel')." where cname='$cid' limit 1");
		}
		if($channelcache) {
			$channelcache['csetting']=json_decode($channelcache['csetting'],1);
			cacheset($channelcachekeyname,json_encode($channelcache),604800,'channel');
		}else {
			Return false;
		}
	}
	$GLOBALS['channelcache'][$cid]=$channelcache;
	Return $channelcache;
}
function getchannelurl($cid) {
	if(!is_array($cid)) {
		$cid=getchannelcache($cid);
		if(!$cid) {Return false;}
		$csetting=$cid['csetting'];
	}else {
		$csetting=json_decode($cid['csetting'],1);
	}
	$channel=$cid;
	if($channel['ckind']==3 || $channel['ckind']==4 || $channel['ckind']==5) {
		Return $channel['cvalue'];
	}elseif($channel['ckind']==1 || $channel['ckind']==2) {
		if(isset($csetting['template']) && empty($csetting['template'])) {
			Return '';
		}
	}
	if(!isset($csetting['channel_url'])) {Return '';}
	$channelurls=explode(';',$csetting['channel_url']);
	$channelurl=str_replace("(cid)",$cid['cid'],$channelurls[0]);
	if(empty($channelurl)) {
		Return '';
	}
	
	if(!isset($csetting['channel_domain']) || empty($csetting['channel_domain'])) {
		$csetting['channel_domain']=SystemDomain;
	}
	if(isset($csetting['channel_domain']) && $csetting['channel_domain']<>'') {
		$channel_domains=explode(';',$csetting['channel_domain']);
		$csetting['channel_domain']=$channel_domains[0];
		foreach($channel_domains as $channel_domain) {
			if(stripos($channel_domain,'*')===false) {
				$csetting['channel_domain']=$channel_domain;
				break;
			}
		}
		foreach($channel_domains as $channel_domain) {
			if(server_name()==$channel_domain) {
				$csetting['channel_domain']='';
				break;
			}
		}
	}
	if(UrlRewrite) {
		if(empty($csetting['channel_domain'])) {
			$thisurl=$channelurl;
		}else {
			$thisurl='//'.$csetting['channel_domain'].server_port().$channelurl;
		}
	}else {
		if(empty($csetting['channel_domain'])) {
			$thisurl=SystemDir.IndexFile.$channelurl;
		}else {
			$thisurl='//'.$csetting['channel_domain'].server_port().SystemDir.IndexFile.$channelurl;
		}
	}
	Return $thisurl;
}
function gethomeurl() {
	if(isset($GLOBALS['homeurl'])) {
		Return $GLOBALS['homeurl'];
	}
	if(!UrlRewrite) {
		$indexfile=IndexFile;
	}else {
		$indexfile='';
	}
	$domains=explode(';',SystemDomain);
	foreach($domains as $domain) {
		$domain=trim($domain);
		if($domain==server_name()) {
			$GLOBALS['homeurl']=SystemDir.$indexfile;
			Return $GLOBALS['homeurl'];
		}
	}
	if(SystemDomain=='') {$GLOBALS['homeurl']=SystemDir.$indexfile;Return $GLOBALS['homeurl'];}
	$GLOBALS['homeurl']='//'.$domains[0].server_port().SystemDir.$indexfile;
	Return $GLOBALS['homeurl'];
}
function str($strname,$cid='',$return=1)
{
	if($strname=='') {Return false;}
	if(defined('cid') && $cid==='') {
		$cid=cid;
	}elseif($cid===0) {
		$cid=0;
	}else {
		if(is_numeric($cid)) {
			$cid=intval($cid);
		}else {
			$cinfo=getchannelcache($cid);
			if($cinfo) {
				$cid=$cinfo['cid'];
			}else {
				Return false;
			}
		}
	}
	$strname=dbstr($strname);
	if(isset($GLOBALS['strget'][$cid][$strname])) {
		if($return==1) {
			Return $GLOBALS['strget'][$cid][$strname];
		}else {
			echo($GLOBALS['strget'][$cid][$strname]);
			Return true;
		}
	}
	if(SiteCache) {
		$cachehash=$strname.'_'.$cid;
		$res =cacheget($cachehash,3600*24*365,'str');
		if ($res!==false) {
			$GLOBALS['strget'][$cid][$strname]=$res;
			if($return==1) {
				Return $GLOBALS['strget'][$cid][$strname];
			}else {
				echo($GLOBALS['strget'][$cid][$strname]);
				Return true;
			}
		}
	}
	$link = $GLOBALS['db'] -> one("SELECT strcid,strvalue FROM ".tableex('str')." where strname='$strname' and strcid='$cid' limit 1;");
	if($link) {
		$GLOBALS['strget'][$cid][$strname]=$link['strvalue'];
		if(SiteCache) {cacheset($cachehash,$link['strvalue'],3600*24*365,'str');}
		if($return==1) {
			Return $GLOBALS['strget'][$cid][$strname];
		}else {
			echo($GLOBALS['strget'][$cid][$strname]);
			Return true;
		}
	}
	$GLOBALS['strget'][$cid][$strname]=false;
	Return false;
}
function strset($strname,$strvalue,$cid=0)
{
	if($strname=='') {
		Return false;
	}
	if(is_numeric($cid)) {
		$cid=intval($cid);
	}else {
		$cinfo=getchannelcache($cid);
		if($cinfo) {
			$cid=$cinfo['cid'];
		}else {
			Return false;
		}
	}
	$strname=dbstr($strname);
	$strvalue=dbstr($strvalue);
	$query = $GLOBALS['db'] -> query("UPDATE ".tableex('str')." SET strvalue='$strvalue' WHERE strname='$strname' and strcid='$cid';");
	if($query) {
		$GLOBALS['strget'][$cid][$strname]=$strvalue;
		if(SiteCache) {
			$cachehash=$strname.'_'.$cid;
			cacheset($cachehash,$strvalue,3600*24*365,'str');
		}
		Return true;
	}else {
		Return false;
	}
}
function cut_str($str, $length=250, $start=0)
{
	$charset='utf-8';
	if(function_exists("mb_substr"))
	{
		if(mb_strlen($str, $charset) <= $length) return $str;
		$slice = mb_substr($str, $start, $length, $charset);
	}
	else
	{
		$re['utf-8']	=	"/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
		$re['gb2312']	=	"/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
		$re['gbk']		=	"/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
		$re['big5']		=	"/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
		preg_match_all($re[$charset], $str, $match);
		if(count($match[0]) <= $length) return $str;
		$slice = join("",array_slice($match[0], $start, $length));
	}
	return $slice;
}
function nohtml($html){
	$html=preg_replace("/(\<(.*)>)/Ui",'',$html);
	$html=str_replace('<','&lt;',$html);
	$html=str_replace('>','&gt;',$html);
	$html=str_replace('&emsp;','',$html);
	$html=str_replace('&nbsp;','',$html);
	$html=str_replace("\t",'',$html);
	while(1==1) {
		if(stripos($html,'  ')===false) {
			break;
		}else {
			$html=str_replace('  ',' ',$html);
		}
	}
	return $html;
}
function text($str,$length=10) {
	Return cut_str(nohtml($str), $length);
}
function jump($url='',$time=0) {
	if(empty($url) && isset($_SERVER['HTTP_REFERER'])) {$url=htmlspecialchars($_SERVER['HTTP_REFERER']);}
	echo("<meta http-equiv=refresh content='".$time."; url=".$url."'>");
	die();
}
function cacheget($keyname,$overtime=604800,$keykind='') {
	if(SiteCache==false) {Return false;}
	$filename=cachemd5dir($keyname,$keykind);
	if(is_file($filename) && filemtime($filename)+$overtime>time()) {
		Return file_get_contents($filename);
	}else {
		Return false;
	}
}
function cacheset($keyname,$value,$overtime=604800,$keykind='') {
	if(SiteCache==false) {Return false;}
	$filename=cachemd5dir($keyname,$keykind);
	if(!is_dir(dirname($filename))) {
		createDir(dirname($filename));
	}
	$fp = @fopen($filename,"w");
	if($fp===false) {
		echo($filename.' permission denied');
		Return false;
	}
	if(@fwrite($fp,$value)===false){
		@fclose($fp);
		echo($filename.' permission denied');
		Return false;
	}
	@fclose($fp);
	Return true;
}
function cachedel($keyname,$keykind='') {
	if(SiteCache==false) {Return false;}
	$filename=cachemd5dir($keyname,$keykind);
	if(file_exists($filename)) {
		@unlink($filename);
	}
	Return true;
}
function cachelasttime($keyname,$keykind='') {
	if(SiteCache==false) {Return false;}
	$filename=cachemd5dir($keyname,$keykind);
	Return filemtime($filename);
}
function cachemd5dir($keyname,$keykind='') {
	$md5=md5(server_name().server_port().$keyname.SiteHash.UrlRewrite);
	if(!empty($keykind)) {
		$keykind.=DIRECTORY_SEPARATOR;
	}
	Return CacheDir.$keykind.substr($md5,0,4).DIRECTORY_SEPARATOR.substr($md5,4,4).DIRECTORY_SEPARATOR.substr($md5,8,20).'.html';
}
function session($keyname,$value='nNnUuUnNn',$overtime='31536000') {
	if(SiteCache==false) {die('Cache closed');}
	if(isset($_COOKIE["UUUSESSID"])) {
		$cookie=$_COOKIE["UUUSESSID"];
	}else {
		$cookie=md5(md5(time()).rand(10240000,102400000));
		setcookie("UUUSESSID", $cookie, time()+31536000);
		$_COOKIE["UUUSESSID"]=$cookie;
	}
	$cachekeyname=$cookie.$keyname;
	if($value=='nNnUuUnNn') {
		Return cacheget($cachekeyname,$overtime,'session');
	}
	Return cacheset($cachekeyname,$value,$overtime,'session');
}
function tableex($table='') {
	Return TableEx.$table;
}
class db
{
	public function connect($site_db)
	{
		$this->querynum=0;
		$this->database=$site_db['database'];
		if($site_db['database']=='sqlitepdo'){
			$this->link = new PDO('sqlite:' . $site_db['dbfile']);
		}elseif($site_db['database']=='mysqlpdo') {
			if(!isset($site_db['dbname']) || empty($site_db['dbname'])) {$dbinfo='';}else {$dbinfo='dbname='.$site_db['dbname'];}
			$site_db['hostinfo']=explode(':',$site_db['host']);
			if(count($site_db['hostinfo'])>1) {$site_db['host']=$site_db['hostinfo'][0];$site_db['port']=$site_db['hostinfo'][1];}else {$site_db['port']='3306';}
			try{
				@$this->link = new PDO('mysql:host='.$site_db['host'].';port='.$site_db['port'].';'.$dbinfo,$site_db['user'],$site_db['password'],array(constant('PDO::MYSQL_ATTR_USE_BUFFERED_QUERY')=>true));
				$this->query("SET NAMES UTF8");
			}catch(Exception $errinfo){
				die('database connect error');
			}
		}elseif($site_db['database']=='mysql'){
			@$this->link = mysql_connect($site_db['host'],$site_db['user'],$site_db['password']);
			if(!$this->link) {die('database connect error');}
			mysql_select_db($site_db['dbname'],$this->link);
			mysql_query("SET NAMES UTF8");
		}else{
			die('database error');
		}
    }
	public function disconnect()
	{
		if($this->database=='mysql') {
			mysql_close($this->link); 
		}
		$this->DB = null;
		$this->Stmt = null;
	}
	public function query($sql)
	{
		$this->querynum++;
		if($this->database=='mysql') {
			$res = mysql_query($sql,$this->link); 
		}else {
			$res = $this->link->query($sql);
		}
		if ($res) {
			$this->Stmt = $res;
			$this->Sql = $sql;
			return $this;
		}
		$this->errorMessage();
		Return false;
	}
	public function update($table,$where,$array)
	{
		if($table=='') {Return false;}
		if(!is_array($array)) {Return false;}
		$str='';
		foreach($array as $key=>$val) {
			if(substr($val,0,1)=='{' && substr($val,strlen($val)-1,1)=='}' && strlen($val)<20) {
				$val=ltrim($val,'{');
				$val=rtrim($val,'}');
				$str.=','.$key."=".$val;
			}else {
				$str.=','.$key."='".$val."'";
			}
		}
		$str=ltrim($str,',');
		if($this->query('UPDATE '.$table.' SET '.$str.' WHERE '.$where)) {
			Return true;
		}else {
			Return false;
		}
	}
	public function insert($table,$array)
    {
		if($table=='') {Return false;}
		if(!is_array($array)) {Return false;}
		$str1='';
		$str2='';
		foreach($array as $key=>$val) {
			if($str1=='') {$str1='(`'.$key.'`';}else {$str1.=',`'.$key.'`';}
			if($str2=='') {$str2="('".$val."'";}else {$str2.=",'".$val."'";}
		}
		if($this->query('INSERT INTO `'.$table.'` '.$str1.') VALUES '.$str2.');')) {
			Return $this->lastId();
		}else {
			Return false;
		}
	}
	public function fetchAll()
	{
		if($this->database=='mysql')
		{
			$array=array();
			while($link = $this -> fetchone($this->Stmt)){
				$array[]=$link;
			}
			Return  $array;
		}else {
			return @$this->Stmt->fetchAll();
		}
	}

	public function fetchOne()
	{
		if($this->database=='mysql')
		{
			Return mysql_fetch_array($this->Stmt);
		}else {
			return @$this->Stmt->fetch();
		}
	}
	public function one($sql)
	{
		$this->query($sql);
		return $this->fetchOne();
	}
	public function all($sql)
	{
		$this->query($sql);
		return $this->fetchAll();
	}

	public function fetchcount($sql)
	{
		$this->query($sql);
		$res = $this->fetchOne();
		if($res) {
			return $res[0];
		}
	}
	 public function errorMessage()
	{
		if(!DbError) {
			Return false;
		}
		if($this->database=='mysql')
		{
			$msg = mysql_error();
			echo('<FONT COLOR="#FF0000">' . $msg.'</FONT>');
		}else{
			$msg = $this->link->errorInfo();
			echo('<FONT COLOR="#FF0000">' . $msg[2].'</FONT>');
		}
		Return false;
	}
	public function lastId()
	{
		if($this->database=='mysql')
		{
			return mysql_insert_id();
		}else {
			return $this->link->lastInsertId();
		}
	}
	public function begin()
	{
		if($this->database=='mysql') {
			Return false;
		}
		return $this->link->beginTransaction();
	}

	public function commit()
	{
		if($this->database=='mysql') {
			Return false;
		}
		return $this->link->commit();
	}

	public function affectRows()
	{
		if($this->database=='mysql') {
			return mysql_affected_rows();
		}else {
			return $this->Stmt->rowCount();
		}
	}

	public function exec($sql)
	{
		if($this->database=='mysql') {
			$this->query($sql);
			Return true;
		}
		if ($this->link->exec($sql)) {
			$this->Sql = $sql;
			return $this->lastId();
		}
		$this->errorMessage();
	}
}
function dbstr($str){
	global $site_db;
	$str=str_replace("'","''",$str);
	if($site_db['database']=='mysql' || $site_db['database']=='mysqlpdo') {
		$str=str_replace('\\','\\\\',$str);
	}
	return $str;
}
function _stripslashes() {
    if(version_compare(PHP_VERSION,'5.4','>=')){Return false;}
    if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()){
        if (isset($_GET)){$_GET=_stripslashes_deep($_GET);}
        if (isset($_POST)){$_POST=_stripslashes_deep($_POST);}
        if (isset($_COOKIE)){$_COOKIE=_stripslashes_deep($_COOKIE);}
    }
	unset($_REQUEST);
}
function _stripslashes_deep($value) {
	 if (empty($value)){
		return $value;
	}else{
		return is_array($value) ? array_map('_stripslashes_deep', $value) : stripslashes($value);
	}
}
function password_md5($password='') {
	Return md5(substr(md5($password),0,10).md5($password));
}
function createDir($path){
	if (!file_exists($path)){
		createDir(dirname($path));
		if(!@mkdir($path, 0777)) {
			die(dirname($path).' permission denied');
		}
	}
}
function notfound() {
	init_route('not_found',routermobile());
}
function match_route() {
	global $router,$site_db;
	define('ucms',1);
	$router=get_router();
	if (isset($_SERVER['HTTP_X_ORIGINAL_URL'])) {
		$_SERVER['REQUEST_URI'] = $_SERVER['HTTP_X_ORIGINAL_URL'];
	}elseif(isset($_SERVER['HTTP_X_REWRITE_URL'])) {
		$_SERVER['REQUEST_URI'] = $_SERVER['HTTP_X_REWRITE_URL'];
	}elseif(isset($_SERVER['HTTP_REQUEST_URI'])) {
		$_SERVER['REQUEST_URI'] = $_SERVER['HTTP_REQUEST_URI'];
	}
	if(!UrlRewrite) {
		$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],strlen(SystemDir));
		if(substr($_SERVER['REQUEST_URI'],0,strlen(IndexFile))==IndexFile) {
			$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],strlen(IndexFile));
		}
		if(stripos($_SERVER['SERVER_SOFTWARE'],'iis')) {
			$_SERVER['REQUEST_URI']=iconv("gb2312","utf-8//IGNORE",$_SERVER['REQUEST_URI']);
			$_SERVER['REQUEST_URI']=urlencode($_SERVER['REQUEST_URI']);
			$_SERVER['REQUEST_URI']=uridecode($_SERVER['REQUEST_URI']);
		}
	}else {
		if($_SERVER['REQUEST_URI']=='/'.IndexFile) {$_SERVER['REQUEST_URI']='/';}
	}
	$uri=$_SERVER['REQUEST_URI'];
	if(substr($uri,0,1)!='/') {$uri='/'.$uri;}
	$noarguri=explode('?',$uri);
	$GLOBALS['no_arg_uri']=$noarguri[0];
	if($GLOBALS['no_arg_uri']=='/'.IndexFile) {$GLOBALS['no_arg_uri']='/';}
	define('RouterDebug',false);
	$ifmobile=routermobile();
	@header(base64_decode('WC1Qb3dlcmVkLUJ5OiBVQ01T'));
	if(RouterDebug) {echo("<!-- uri:$uri -->\r\n");}
	if(!is_array($router)) {die('router error!');}
	foreach($router as $routerkey=>$routervalue) {
		$ifmatch=true;
		if(RouterDebug) {echo("<!-- Router: ".str_replace("\\/","/",json_encode($routervalue))."-->\r\n");}
		if(isset($routervalue['domain'])) {$ifmatch=macthdomain($routervalue['domain']);}
		if($ifmatch==false || (isset($routervalue['uri']) && matchuris($routervalue['uri'],$uri)===false)) {
		}else {
			if(RouterDebug) {exit();}
			if(isset($routervalue['header'])) {routerheader($routervalue['header']);}
			if(isset($routervalue['cache']) && $routervalue['cache']>0) {
				if($thiscache=routercache($uri,$routervalue['cache'],$ifmobile)) {
					echo($thiscache);
					exit;
				}
				ob_start();
			}
			if(!isset($GLOBALS['db']) && isset($site_db)) {$GLOBALS['db'] = new db();$GLOBALS['db'] -> connect($site_db);}
			if(isset($routervalue['cid'])) {routercid($routervalue['cid'],$ifmobile);}
			if(defined('TemplateDebug') && TemplateDebug && defined('cid')) {
				echo('<!-- cid:'.cid.' -->');
			}
			init_route($routerkey,$ifmobile);
			if(isset($routervalue['cache']) && $routervalue['cache']>0) {
				routersavecache($uri,ob_get_contents(),$routervalue['cache'],$ifmobile);
				ob_end_flush();
			}
			exit();
		}
	}
	init_route('not_found',$ifmobile);
	exit();
}
function get_router() {
	$router=cacheget('router',604800,'str');
	if($router) {
		Return json_decode($router,1);
	}else {
		if(!isset($GLOBALS['db'])) {global $site_db;$GLOBALS['db'] = new db();$GLOBALS['db'] -> connect($site_db);}
		$routerquery = $GLOBALS['db'] -> one("SELECT strvalue FROM ".tableex('str')." where strname='router' and inputkind=0 limit 1;");
		if($routerquery && !empty($routerquery['strvalue'])) {
			cacheset('router',$routerquery['strvalue'],604800,'str');
			Return json_decode($routerquery['strvalue'],1);
		}else {
			Return array(array('uri'=>'/','res'=>'index','domain'=>SystemDomain,'cache'=>IndexCache,'cid'=>0));
		}
	}
}
function init_route($routerkey,$ifmobile) {
	global $router;
	if(!isset($router[$routerkey]) && $routerkey!=='not_found') {
		init_route('not_found',$ifmobile);
		exit;
	}elseif($routerkey==='not_found') {
		if(RouterDebug) {echo("<!-- 404 -->\r\n");exit();}
		@header("HTTP/1.1 404 Not Found");
		if($ifmobile && is_file(SystemRoot.TemplateDir.DIRECTORY_SEPARATOR.'m'.DIRECTORY_SEPARATOR.'404.php')) {
			$tempfile=include_template('m'.DIRECTORY_SEPARATOR.'404.php');
			if($tempfile) {include($tempfile);}
			exit;
		}elseif(is_file(SystemRoot.TemplateDir.DIRECTORY_SEPARATOR.'404.php')) {
			$tempfile=include_template('404.php');
			if($tempfile) {include($tempfile);}
			exit;
		}
		echo(base64_decode("PGh0bWw+PGhlYWQ+PHRpdGxlPjQwNCBOb3QgRm91bmQ8L3RpdGxlPjwvaGVhZD4NCjxib2R5IGJnY29sb3I9IndoaXRlIj4NCjxjZW50ZXI+PGgxPjQwNCBOb3QgRm91bmQ8L2gxPjwvY2VudGVyPg0KPGhyPg0KPGNlbnRlcj4NCjxhIGhyZWY9J2h0dHA6Ly91dXUubGEnIHRhcmdldD1fYmxhbmsgc3R5bGU9J2NvbG9yOiMwMDA7dGV4dC1kZWNvcmF0aW9uOiBub25lJz5VQ01TPC9hPiB8IA0KPGEgaHJlZj0naHR0cDovL3V1dS5sYS9oZWxwL25vdGZvdW5kLmh0bWwnIHRhcmdldD1fYmxhbmsgc3R5bGU9J2NvbG9yOiMwMDA7dGV4dC1kZWNvcmF0aW9uOiBub25lJz5IRUxQPC9hPg0KPC9jZW50ZXI+DQo8L2JvZHk+DQo8L2h0bWw+DQo8IS0tIGEgcGFkZGluZyB0byBkaXNhYmxlIE1TSUUgYW5kIENocm9tZSBmcmllbmRseSBlcnJvciBwYWdlIC0tPg0KPCEtLSBhIHBhZGRpbmcgdG8gZGlzYWJsZSBNU0lFIGFuZCBDaHJvbWUgZnJpZW5kbHkgZXJyb3IgcGFnZSAtLT4NCjwhLS0gYSBwYWRkaW5nIHRvIGRpc2FibGUgTVNJRSBhbmQgQ2hyb21lIGZyaWVuZGx5IGVycm9yIHBhZ2UgLS0+"));
		exit;
	}
	$thisrouter=$router[$routerkey];
	if(isset($thisrouter['toward']) && $thisrouter['toward']<>$routerkey) {
		init_route($thisrouter['toward'],$ifmobile);
		exit;
	}
	if(isset($router[$routerkey]['res'])) {
		$ress=explode(';',$router[$routerkey]['res']);
		foreach($ress as $thisres) {
			$filefunction=explode('@',$thisres);
			if(isset($filefunction[1])) {
				$thistemplatefile=$filefunction[1];
				$thistemplatefunction=$filefunction[0];
			}else {
				$thistemplatefile=$filefunction[0];
				$thistemplatefunction=false;
			}
			if(!empty($thistemplatefile) && stripos($thistemplatefile,'.')===false) {
				$thistemplatefile.='.php';
			}
			if(!isset($GLOBALS['included'][$thistemplatefile]) && !empty($thistemplatefile)) {
				if($ifmobile && is_file(SystemRoot.TemplateDir.DIRECTORY_SEPARATOR.'m'.DIRECTORY_SEPARATOR.$thistemplatefile)) {
					$tempfile=include_template('m'.DIRECTORY_SEPARATOR.$thistemplatefile);
					if($tempfile) {include($tempfile);}
				}else {
					$tempfile=include_template($thistemplatefile);
					if($tempfile) {include($tempfile);}
				}
				$GLOBALS['included'][$thistemplatefile]=1;
			}
			if($thistemplatefunction) {
				$thistemplatefunction();
			}
		}
	}
}
function matchuris($uris,$uri) {
	if(!is_array($uris)) {
		$uris=explode(';',$uris);
	}
	foreach($uris as $val) {
		if(!empty($val)) {
			if(strpos($val,'?')===false) {
				$uri=$GLOBALS['no_arg_uri'];
			}
			if(matchuri($val,$uri)===true) {
				Return true;
			}
		}
	}
	Return false;
}
function macthdomain($domains) {
	if(!is_array($domains)) {
		if(empty($domains)) {Return true;}
		$domains=explode(';',strtolower($domains));
	}
	foreach($domains as $val) {
		$val=strtolower(trim($val));
		if($val==server_name()) {Return true;}
		if($val=='*') {Return true;}
		$thisstripos=stripos($val,'*');
		if($thisstripos===false) {}else {
			$topdomain=substr($val,$thisstripos+1,strlen($val)-$thisstripos);
			if(substr(server_name(),-strlen($topdomain))==$topdomain) {Return true;}
		}
	}
	Return false;
}
function routermobile() {
	if(defined('WapDomain') && WapDomain) {
		$mobiledomain=explode(';',WapDomain);
		foreach($mobiledomain as $val) {
			if(server_name()==$val) {
				Return true;
			}
		}
	}
	if(WapOpen) {
		if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])){Return true;}
		if(!isset($_SERVER['HTTP_USER_AGENT'])) {Return false;}
		$waparray=array('android','iphone','ipad','mobile');
		foreach($waparray as $thisphone) {
			if(stripos($_SERVER['HTTP_USER_AGENT'],$thisphone)===false) {}else {
				Return true;
			}
		}
	}else {
		Return false;
	}
	Return false;
}
function server_name() {
	if(!isset($_SERVER['UUUSERVER_NAME'])) {
		if(isset($_SERVER['HTTP_HOST'])){
			$thisserver_names=explode(':',$_SERVER['HTTP_HOST']);
			$_SERVER['UUUSERVER_NAME']=$thisserver_names[0];
		}else {
			$_SERVER['UUUSERVER_NAME']=$_SERVER['SERVER_NAME'];
		}
		$_SERVER['UUUSERVER_NAME']=strtolower($_SERVER['UUUSERVER_NAME']);
	}
	Return $_SERVER['UUUSERVER_NAME'];
}
function server_port() {
	if(!isset($_SERVER['UUUSERVER_PORT'])) {
		if(isset($_SERVER['HTTP_HOST'])){
			$thisserver_port=explode(':',$_SERVER['HTTP_HOST']);
			if(isset($thisserver_port[1])) {
				$_SERVER['UUUSERVER_PORT']=$thisserver_port[1];
			}else {
				$_SERVER['UUUSERVER_PORT']='80';
			}
		}elseif(isset($_SERVER['SERVER_PORT'])) {
			$_SERVER['UUUSERVER_PORT']=$_SERVER['SERVER_PORT'];
		}else {
			$_SERVER['UUUSERVER_PORT']='80';
		}
		if($_SERVER['UUUSERVER_PORT']=='80') {
			$_SERVER['UUUSERVER_PORT']='';
		}else {
			$_SERVER['UUUSERVER_PORT']=':'.$_SERVER['UUUSERVER_PORT'];
		}
	}
	Return $_SERVER['UUUSERVER_PORT'];
}
function ip() {
	Return $_SERVER["REMOTE_ADDR"];
}
function matchuri($preguri,$uri) {
	$preguri=urlencode($preguri);
	$preguri=uridecode($preguri);
	if($preguri==$uri && strpos($preguri,'(')===false && strpos($preguri,'[')===false && strpos($preguri,'{')===false) {
		if(RouterDebug) {echo("<!-- Matched-Router: $preguri-->\r\n");}
		Return true;
	}
	preg_match_all('/[{|\[|(](.*)[}|\]|)]/U',$preguri,$getarray);
	$newrouteruri=$preguri;
	if(count($getarray)>0) {
		foreach($getarray[0] as $getkey=>$getval) {
			if(substr($getval,0,1)=='{') {
				//$newrouteruri=str_replace($getval,'(.+)',$newrouteruri);((?!\/).+)
				$newrouteruri=str_replace($getval,'{{*}}',$newrouteruri);
			}
			if(substr($getval,0,1)=='(') {
				$newrouteruri=str_replace($getval,'([0-9]+)',$newrouteruri);
			}
			if(substr($getval,0,1)=='[') {
				$newrouteruri=str_replace($getval,'([a-zA-Z0-9_]+)',$newrouteruri);
			}
		}
		$newrouteruri=str_replace('/',"\\/",$newrouteruri);
		$newrouteruri=str_replace('?',"\?",$newrouteruri);
		$newrouteruri=str_replace('{{*}}',"((?!\/).+)",$newrouteruri);
		preg_match_all('/'.'startofuri-'.$newrouteruri.'-endofuri'.'/','startofuri-'.$uri.'-endofuri',$ifmatch);
		if(isset($ifmatch[1][0])) {
			foreach($getarray[1] as $getkey=>$getval) {
				$_GET[$getval]=urldecode($ifmatch[1+$getkey][0]);
			}
			if(RouterDebug) {echo("<!-- Matched-Router: $preguri-->\r\n");}
			Return true;
		}else {
			if(RouterDebug) {echo("<!-- Not Match-Router: $preguri -->\r\n");}
			Return false;
		}
	}else {
		Return false;
	}
}
function routercache($uri,$cachetime,$ifmobile){
	if($ifmobile) {
		$routercachekey=server_name().$uri.'_mobile';
	}else {
		$routercachekey=server_name().$uri;
	}
	$routercache=cacheget($routercachekey,$cachetime,'html');
	if($routercache===false) {
		Return false;
	}else {
		$filetime=substr(md5(cachelasttime($routercachekey,'html').substr(SiteHash,0,6)),0,8);
		routerhttpcache($cachetime,$filetime);
		Return $routercache;
	}
}
function routersavecache($uri,$content,$cachetime,$ifmobile) {
	if($ifmobile) {
		$routercachekey=server_name().$uri.'_mobile';
	}else {
		$routercachekey=server_name().$uri;
	}
	cacheset($routercachekey,$content,$cachetime,$keykind='html');
	$filetime=substr(md5(cachelasttime($routercachekey,'html').substr(SiteHash,0,6)),0,8);
	routerhttpcache($cachetime,$filetime);
}
function routerhttpcache($cachetime,$filetime) {
	@header('Last-Modified: '.$filetime);
	if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
		if($filetime==$_SERVER['HTTP_IF_MODIFIED_SINCE']) {
			@header("HTTP/1.0 304 Not Modified");
			exit();
		}
	}
}
function routerheader($header) {
	if(is_array($header)) {
		foreach($header as $val) {
			@header($val);
		}
	}else {
		@header($header);
	}
	Return true;
}
function uridecode($uri) {
	$uri=str_replace('%28','(',$uri);
	$uri=str_replace('%29',')',$uri);
	$uri=str_replace('%7B','{',$uri);
	$uri=str_replace('%7D','}',$uri);
	$uri=str_replace('%5B','[',$uri);
	$uri=str_replace('%5D',']',$uri);
	$uri=str_replace('%2F','/',$uri);
	$uri=str_replace('%3F','?',$uri);
	$uri=str_replace('%3D','=',$uri);
	$uri=str_replace('%26','&',$uri);
	$uri=str_replace('+','%20',$uri);
	$uri=str_replace('%25','%',$uri);
	Return $uri;
}
function routercid($cid,$ifmobile) {
	if($cid==0) {
		define('cid',0);
		define('cname','首页');
		Return false;
	}
	$thichannelcache=getchannelcache($cid);
	if(!$thichannelcache || $thichannelcache['ifshow']==0) {
		init_route('not_found',$ifmobile);
	}
	define('cid',$cid);
	define('cname',$thichannelcache['cname']);
	Return true;
}
function include_template($file) {
	if(SiteCache==false && TemplateTime>-1) {die('Cache closed! <a href="http://uuu.la/help/template.html" target="_blank">Help</a>');}
	$tempfile=SystemRoot.TemplateDir.DIRECTORY_SEPARATOR.$file;
	if(TemplateTime<0) {Return $tempfile;}
	$cachefile=cachemd5dir($tempfile,'template');
	$cachefiletime=@filemtime($cachefile);
	if(($cachefiletime+TemplateTime)>time()) {
		Return $cachefile;
	}else {
		$content=ucms_template($tempfile);
		if($content===false) {
			$content='template not found:'.$file;
		}
		if(defined('TemplateDebug') && TemplateDebug) {
			$content="<!-- $file:start-->".$content."<!-- $file:end-->";
		}
		$cached=cacheset($tempfile,$content,TemplateTime,'template');
		if($cached && $content) {
			Return $cachefile;
		}
	}
	Return false;
}
function ucms_template($file) {
	$templatecontent=@file_get_contents($file);
	if($templatecontent===false) {Return false;}
	$system_var=array();
	$system_var[1]=array(
		'host',
		'port',
		'ucmsdir',
		'tempdir',
		'homeurl',
		'br',
		'copyright'
	);
	$system_var[2]=array(
		server_name(),
		server_port(),
		SystemDir,
		SystemDir.TemplateDir.'/',
		gethomeurl(),"\r\n",
		base64_decode('PGEgaHJlZj0iaHR0cDovL3V1dS5sYSIgdGFyZ2V0PSJfYmxhbmsiPlVDTVM8L2E+​​')
	);
	$system_syntax=array();
	$system_syntax[1]=array(
		'else',
		'/if',
		'/loop'
	);
	$system_syntax[2]=array(
		'}else{',
		'}',
		'}'
	);
	if(!defined('TemplateStart')) {define('TemplateStart','{');}
	if(!defined('TemplateEnd')) {define('TemplateEnd','}');}
	preg_match_all('/'.TemplateStart.'(.*)'.TemplateEnd.'/U',$templatecontent,$templist);
	foreach($templist[1] as $key=>$thistemp) {
		$templist[3][$key]=0;
		$thistemp=trim($thistemp);
		foreach($system_var[1] as $system_key=>$thisval) {
			if($thistemp==$thisval) {
				$templist[3][$key]=1;
				$templist[1][$key]='echo(\''.echo_replace($system_var[2][$system_key]).'\');';
			}
		}
		foreach($system_syntax[1] as $system_key=>$thisval) {
			if(!$templist[3][$key] && $thistemp==$thisval) {
				$templist[3][$key]=1;
				$templist[1][$key]=$system_syntax[2][$system_key];
			}
		}
		if(!$templist[3][$key] && substr($thistemp,0,2)=='//') {
			$thisothertemp=substr($thistemp,2);
			$templist[3][$key]=1;
			$templist[1][$key]='';
		}
		if(!$templist[3][$key] && substr($thistemp,0,3)=='if ') {
			$thisothertemp=substr($thistemp,3);
			$templist[3][$key]=1;
			$templist[1][$key]='if('.$thisothertemp.'){';
		}
		if(!$templist[3][$key] && substr($thistemp,0,6)=='class ') {
			$thisothertemp=substr($thistemp,6);
			$templist[3][$key]=1;
			if(stripos($thisothertemp,'.')===false) {
				$thisothertemp.='.php';
			}
			$templist[1][$key]='include_once(\''.IncDir.$thisothertemp.'\');';
		}
		if(!$templist[3][$key] && substr($thistemp,0,7)=='elseif ') {
			$thisothertemp=substr($thistemp,7);
			$templist[3][$key]=1;
			$templist[1][$key]='}elseif('.$thisothertemp.'){';
		}
		if(!$templist[3][$key] && substr($thistemp,0,5)=='loop ') {
			$thisothertemp=substr($thistemp,5);
			$templist[3][$key]=1;
			$templist[1][$key]='foreach('.$thisothertemp.'){';
		}
		if(!$templist[3][$key] && substr($thistemp,0,5)=='file ') {
			$thisothertemp=substr($thistemp,5);
			$templist[3][$key]=1;
			if(stripos($thisothertemp,'.')===false) {
				$thisothertemp.='.php';
			}
			$templist[1][$key]='@include(\''.include_template($thisothertemp,0).'\');';
		}
		if(!$templist[3][$key]) {
			$thisnewtemp=escape_temp_char($thistemp,1);
			$assignment=explode('=',$thisnewtemp);
			if(count($assignment)>2) {
				$templist[3][$key]=0;
			}elseif(count($assignment)==2) {
				$templist[3][$key]=1;
				$charname=$assignment[0];
				$thisnewtemp=$assignment[1];
				if(substr($assignment[0],0,1)!='$') {
					$templist[3][$key]=0;
					unset($charname);
				}
			}else {
				$templist[3][$key]=1;
				$charname=false;
			}
			if($templist[3][$key]) {
				$this_templist_val='';
				$this_templist_newval='';
				$everyfunction=explode('|',$thisnewtemp);
				foreach($everyfunction as $function_key=>$thisfunction) {
					$thisfunction=trim($thisfunction);
					preg_match_all('/\((.*)\)/U',$thisfunction,$iffunction);
					if(isset($iffunction[1][0])) {
						$iffunction[1][0]=trim($iffunction[1][0]);
						$this_function_temp=explode('(',$thisfunction);
						$this_templist_newval=$this_function_temp[0].'(';
						$this_function_args=explode(',',$iffunction[1][0]);
						$this_function_args_new=array();
						if($function_key>0 && !in_array('this',$this_function_args)) {$this_function_args_new[]='this';}
						if(!empty($iffunction[1][0])) {
							$this_function_args_new=array_merge($this_function_args_new,$this_function_args);
						}
						foreach($this_function_args_new as $args_key=>$val) {
							$val=trim($val);
							if($val=='this') {
								$val=$this_templist_val;
							}else {
								$val=trim($val,'"');
								$val=trim($val,'\'');
								$val=escape_temp_char($val);
								$firstletter=substr($val,0,1);
								if($firstletter=='$') {
								}elseif($firstletter=='`') {
									$val=substr($val,1);
								}else {
									$val=echo_replace($val);
									$val='\''.$val.'\'';
								}
							}
							if(count($this_function_args_new)==($args_key+1)) {
								$this_templist_newval.=$val.')';
							}else {
								$this_templist_newval.=$val.',';
							}
						}
						if(count($this_function_args_new)==0) {
							$this_templist_newval.=')';
						}
						$this_templist_val=$this_templist_newval;
						$this_templist_newval='';
					}else {
						$firstletter=substr($thisfunction,0,1);
						if($firstletter=='$') {
						}elseif($firstletter=='`') {
							$thisfunction=substr($thisfunction,1);
							$thisfunction=escape_temp_char($thisfunction);
						}else {
							$thisfunction=trim($thisfunction,'"');
							$thisfunction=trim($thisfunction,'\'');
							$thisfunction=escape_temp_char($thisfunction);
							$thisfunction=echo_replace($thisfunction);
							$thisfunction='\''.$thisfunction.'\'';
						}
						$this_templist_val=$thisfunction;
					}
				}
			}
			if($templist[3][$key] && $charname) {
				$templist[1][$key]=$charname.'='.$this_templist_val.';';
			}elseif($templist[3][$key]) {
				$templist[1][$key]='echo('.$this_templist_val.');';
			}
			
		}
	}
	foreach($templist[0] as $key=>$val) {
		if($templist[3][$key]) {
			$templatecontent=str_replace($val,'<?php '.$templist[1][$key].' ?>',$templatecontent);
		}
	}
	Return $templatecontent;
}
function echo_replace($str) {
	$str=str_replace("'","\\'",$str);
	Return $str;
}
function escape_temp_char($str,$encode=0) {
	$array=array();
	$array[1]=array('\\\'','\=','\,','\|','\(','\)','\\`','\array');
	$array[2]=array('--quotes--','--equal--','--comma--','--vertical--','--lbrackets--','--rbrackets--','--topcomma--','--array--');
	$array[3]=array('\'','=',',','|','(',')','','array()');
	foreach($array[1] as $key=>$val) {
		if($encode) {
			$str=str_replace($array[1][$key],$array[2][$key],$str);
		}else {
			$str=str_replace($array[2][$key],$array[3][$key],$str);
		}
	}
	Return $str;
}
