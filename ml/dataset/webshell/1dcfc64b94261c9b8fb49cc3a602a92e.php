<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.1
*/error_reporting(6135);$qc=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($qc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Ig=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Ig)$$X=$Ig;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0\0\n @\0C\"\0`EQ?tvM'Jdd\\b0\0\"fӈs5AXPaJ08#RTz`#.cXȀ?-\0Im?.M\0ȯ(̉/(%\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ٌ̇l7B14vb0fsn2Bѱ٘n:#(b.\rDc)a7Elñi1̎s-4f	i7Féa'3Id!S:4+Mdgǃtcb{H(Ɠєt1)t}Fp08\\82DL>9`'Cۗ889 xQ\0e4QʘlPVbT4\\W/\n` 7\"hq4ZM6T\rr\\C{h7\rx67J2.39KH,!mƆo\$.[\r&#\$<f)Z\0=r9jΪJ0c,|=Rs_6ݷZ62Bp\\-1s2> X:\rܺ3b-8SLK.-ҥ\rH@ml:;J0LR2!A2	m0eI-:U\r9MWL0GcJv2(F9`<J7+˚~}DJHWSNeu]1̥(OLЪ<lR[u&H3vUt6\$6X\"<}:O<3xO8>C1HRSd9%U1Sna|.ԁ`8:#C2*[o4X~7j\\6/09\r;;VnnމvkHB%.k\">[\nlp9cFZs|>6 5l1Vΐ67:\"Azde\\5*մ]p[*Am)Kt[\n8g=;2z|̣4t8.N#ʲB\"9%HQwqdF\$&VQ#Q'_m̡ \rh Xrt0j5W4דm\"CAF!엖h>b007;84Ka	\0p	aHXF1:8U9HIó;sQ7FcLpXM@e吞+g(73O3pblEE>Chb%DI8E'	#)=%CjY1yh;cA6jK\r9\$|g-Zo\0z\$+DVw*WpJ\\FO'ɲa1m,_ڧ\r1Po;\05e\r& 3^\r6MR2T\05?~5P>85hn1;\rRL8`\\@`;z\n\0ԃ89RyZP@ib?ƭv\$<%	A\r?\0Sʥ BÞ4JҨ:`#Hi7ε+}voJVڰ9W2Q\rTD`f wLI]MKd7*rk*j\nASjF-[ezzrʁfU3~\\ZZ{)>>Ѓp*;zDbw]mC\n訓KBBm@ִ>wU*N(baƶ@fv)`\0uD)mD@/49jHBm1I5DRuE9Aӗ=1b0ey1s;-]s5\\\n1;Q^bi;YJ2d!s#kghށ]W)>VIx]r;6JLcprd{pyM-UVH5'\ntвlpHoeZϨqeXF`Gy\r!Ww*Dut%dQ/p:iht&Pe,J͌t!O76GgRC[skvqU}yhAGV|lFޅL^.]u&w![jnnڏ[kCvkrmOɭJ>WT0\npMCbtVG|oy8c");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:gCI\n:saPi2\nOgc	e6Le7s)Ћ\rHGI3as'cDi6N2H8uFR#r7#v}@`Qo5aI,2O'8R-q:PS(a*w(%p<F)nx8zA\"Z-CeV'sq;NF1䭲9Gͦ'0\rȿ9n`рX1݁G3tee9:NeNOSzczl`5	3y8.\rP\r@\\1\r \0@2j8ؗ=. -rá0Qꊺhb`^9qE! 7)#*Q\01\"h>-C \"XS`\\F֬h83`X:O,)8<BNЃ;>98c<#0L9?(R#e=\n:*0D9C@{ZO8ioVvkAr8&..cHE>H_hWU51r*^(bxܡY1&XH6ؓ.9xP\r.`v484daXV6FEHHfc-^=txY\r%xeQ,X=1!svjkQ2%W?Ů=dY&ٓVX4ـ\\5Xì!}NgvڃWY*Qi&lѵZ#Ց\rA\$ev5o#ޛ5gc3MTCL>vH<`*]_;%;Vi4X'`ij0gOۥi9ƙےdFk/lŞnc<b\n8`He}]\$Ҳ !C)\$ A`\0'&\0B!)5E)o\r8r`!2Ts=D˩>\n/l[ŠPa8%!1v/SUcoJ:4J+BvJ\rb{,|\0zcYl\ni.!)dmJ!' B\nC\\i\$J\"2+IkJ\$Gy\$#ܲi/CAbbC(:UX2&	, Q;~/Ky9?\r6tV!6CP	hYEl䏞(ؖTp'3C<dc?yCe0@&A?=%A:JD&SQ6R)Ab`0@u9(!0R\nF  wC\\υrܙ#~2'\$ :K`h@Eb[~ Tlf5BR]{\"-\0L>\r\$@\n(&\r9\0vh*ɇ*X!_djpy`jYwJ\$R(uaM+nxspU^Ap`ͤIH\nf02)!4a9	EwC˩ LPAi)p3AuAIAHu	!g͕UZUc*Mxf:^Xp+VKC#+ WhCP!;[pn\\%k\0,ڨ87xQC\nY\rbXvC d\nA;lF,_wr4RPHA!;&^Ͳ\"6;=#CI9f':DY!B+sxV8lÓ\"鑃HU%\"Z6u\re0[pa. +^``b5#CM\$ I˚AP5C\r SdWN6H[SR\\+X=kλ׺Sr^(oo7\\huklHaC(mnRBUup2C1[|ٽbeG0\"CG?\$x7n\$Z=ZӦsi5f&,fhiIyn20DvETxM{`ܤGN#遂Z,/R\$#\\I-	|0-0NP;s-v҆nwGtndiH|4(+v&Ņ+KL\nJ\$ԩ:\\Q<WB\"^WTIB~qɞ}3ο\":U|\r5n(n 7OD}B}\0\rvoܕ؆_JlİH3\"[ĸKA`ߖN&()\" f&\0 blF.jrJ\"P<\$F*|f/! OpR F#5gb8eRDi0P+*kZ;pHhl!\0\r\nco/CB<pyNTHhT	@px\$48\n#NU,\$PmYK\"H RLD\0aW`pglPo:L+\0 ]0<)Nxk\n(`c+rk{m\"3.0H1e*ZoeB9\r\0RLiQUԋ`.o:dT7QV DhWS1	g*2,W)@ϰT@C	Q(,4#d<\0! \$2 {es+rʫJvY*HPr\rTM\\\\`v<&nD\\HHoj^@	<񊆯8*#f*\r\nT \\\r*T^*ɠ\$6o7Ree8 粡,ҥ,,`|9K20r+ҧ1R\" *P*ȆM\\\rb0\0Y\"\"Ux`QE\r~Q@5 5sZ^fR@Q4d5b\0@Fb/8\"	8s8<@l2\$Sh\nR\"U43FNɫ7\"D\r4OI3\n\0\n``` Y2ob3<n6]<`\" N\"B2Z\nmE\0Zx[2@,<P?\r8#d<@JUK/E;\$6SDU	l;,ULΒ7fcG\"EG\$\"E3FHƤId=e	!UHБ23&jȬ*%%%2,JQ1Hl0tY3\$X<Ct4_\$\0>/F\n?mFj3pDHKv Ⱥɜ\0X*\rʚ\n0e\n%\riOflNM%]UQQL-S±T4!U5T\nndi0#EMi./U\rZFj;H☎d`mݩ\ntQS	e|iQt d12,DY1UQSUcdE)\\L	F\$@V{W6\"LlTA\$6abOdrLpc,esΞ<2`@bXP\$3@˃P,KVխ^MLu1@ct-(`\09n2sb/ Fm)Hl5@nl\$q+:/ d,\n޵.4\$ w0\$dV0\"rW4678VtqBaupÀI<\$#x`wd9^*kuofBEp	g2f4 L!r=\0\"	\r<hU%ThBk#>'Cp\n	(\r2\"3lMԋ7Gx.,Uu%Dt wy^Mf\" (vU3uJ^HC_IUYkSc_ylcc]rF_q%W#]@rkv3-cyVHJG<ZT@V8\$6o2H@\rª\0=ݍ\"39z:KuK >B\$r.J<KG~PXQMƹ	Xw\$;mpZp cK!OeOO?wp懤֠LI\n?9xB.]O:V9.mW\0˗s>*l'kophxvL`w1 !M4\"I\$\"o\$>˙Bea\"DBoʶ+ B0Pxp&7|p{|}7ְ\$-P@beVYmoMo\0Nzn*>΄)-Hl!hpg &tZ㜤\0!8 ɩZK@DZGF秩. lz%(x}'<Ū(<XZǬњ ɮgwzz{e'{;@噱(&R^Eݛx宛Y\"MܒV\n5zlzr[x˪G\$OW@Zx,be 	fdƻ2EËIDYT%k{J\\\rU N '_ɽf|w޵,l7kt1RD>ЋXZЊ|y|Z{|բ\r%;#\0eZ,\rKt\r>>\$>??c?+@ @ʰcqfc+3Ș؀&x]N*|b2<lnT\$AZ0.&˷`{p,@&|ϖ..oo@1=\$9{dB;ה#:\$@wң=C? (?Ӄ G1|\"]\05\0Ej\r@@*2KL#d*CA3,K` Cϭ]\rL9۝=<](jC) ,Bf\r -Rd5\$\0^\n4\0ڢSY܆k4@B\0W?x(u}ڠK~P\r/E\"#>R_\$< \rl[*`\n~b]jB\rqˣQ꾼+(W|+ep9j}R<w@db̴Qդ̀/(稦mI_}U<ոЗBy_f&F͌F.} zhyFcrU۫Fq:\n\n%`D@{s/wh]Bz\"J#fTC_dZؠ֣m2nnCKG\\9(Bo S#|d)Eހ|,bg1N1uP91\0T\0<p>iJ6p\r-S0tHJ`7Dcp)\nߢ\\%aQ Cf6\ne\n>@%h%I	`\0uAXK	`8+I\\(\rń\0lH#]*y\$,H?EFC7`țE@rGpLB3H,0+s\r\0\0!9Hua4 0aJ(\0DqgaJ!m~Aa&à/ *p\"IBD\r!9!vL:Ċ!\$AKe\0lb	i6%YzKrlRK\"AF{ 6XH&:h~9_2Ws>\$Ћ pC@vz0և8\\vp:s_\\:Y\rB\$|iGR#	YR9\0D28?+}YᩇJ#CiVCT6Q9piteLp\$4\$D#@@<APܑ\0f!а)B2YZ\0.S(. 4b1H`سY)RĂ`1gH:B]O#8K\njD%C*I\$AiN,0	 K(\0T`\n2OB74QCH	4@ )\$\0	Jq+Ke&.J'p=pQ[xXb <E'D#`360@@ڦ `|R쀾5. ?#?lS\"!jEq\0 Q\rT#<?1(HBFL[|@LE܆&Q:yĎFh4qU\"!C1FJ8#@f:dё8#2C82.\$Cb|\$0rI\0,00Ke!Ni@d|5h`	TU2Nji0Udk*&jF8*EzcάΗsÂ57\n\rU,2` @@X*p:-,\rRZL,ʃ|l^O0	BCRnV T]Mr#y\\\"y\$/ r*h%1Kρ|R`bB8r1n\0		\rU8ltB(\0003:%-|\0eTH\"Hq4(N\\jcTH\n\0m3?1S:>|gRc\rF8Q&@5r\0XV5\\fh@v,/\0\n&/!dqKRm;aD2d\0002b\$	L/1,E4@<}aی\$1*`>0 :d 	-	Ä\rDYl(6[6ksf' 8ITJDUD:A2hd\0a\0)2:B3:Z1=@-qN\\!\$kfNw	`n\$LCR5pcE3Ca\0=Hjڒg-ژEe.\0!o,'wI`\\s6RE}e0F\\m|F>q ?jД6ip	+N9qup2eɑm.+L~\$\"Rs]iqCИ<T(iیQbt\"NBmư@rxMMq#Oj /	 LDK.t0tIeBj160~s74bQQ!2ԖǼDH2PdmM DֈFfȹ\rDj\$L[\0`<@mV~9 v4=!2ْ6'*D#\0{'2lLRJўXë,E(C\\G;/R\$d\$QJ`τ!ҮK\n|9Tdx@h!'E-v}b;|cfLYAROڇ|3EgzQf@l/ioEŗgo^q\nAaΔg˰!@R41lE!pH0jbqAa@xTݙ\0\rF45HZm=xFC̙v?CL2}hfX\$`Ib\0ĭ7GDũβfP9U`\"\rIjԍʶT\rUz*T!CI`X2 Qk#ԅ\nee+[l~:~hn	h'͙ΧUVNWLՋQ=)nI҄^YpUOAXZUS\\@Cr\"̈́;^E-x\r\\Pv!I:Z	\\_2CPtWY̰ _]a+=s]uC-h* Һ	{+ZD\$c\$-vBP.s¤2Rj[Z/QQ:1Y+ھھ!Sb9Zyb,t0f=@\r-\nB-ɟ0&2_9hM,ב2HoTlbd \0[\"%A־4;2͒d.˗HZb545H\\ʓTARBʄ֤-lJsύ6\" Ȃk=<>jZgx`6t.b,ͩkY\\`'Sljհ!ln\0Wg+:+c6~KFʖĩ-h9-H@SDG;Π_	\n)fnQ-*C֩{MSnZED\0)Pg]6b%%Hj&%-* 9}j43@*(m\$QDۆҹ(m¼ukjO\" ,1Vv%s1kP`	/@0>F>#X8%lⴹKS|Yw0u̧bÉX4p\0\n%\0ZQ2WWEkoɇjy	.Z\0	PptHR>,%)k`|,prZhZ,P|CFLxn .PReVoB;xDk)M?n`/5Ilqh\0צ5Ehq폴AˉUdkDOy;ƆëA.OrƄ!H^ҋD3Ig>ce~Zon_^+!h|*3ޢG[nڶjp7H/T+3lP{<2ʞЩ)\"ãލYˣA2:&\0ۃ~cK\nD4GNg.`RB1H.j{}n|/o`]f_6y`\r x^@\\R='ς_{X-\\)LEPl\\\0]hareӝ8NG^I:ܵJ%r~-܍	1g+gVoσzm>54)mm\$oEbܒ)mEѨK6!*\nӔq	0?wPKg1i~X`\0XY	Z *Dh1El\r\0:?\r>#2@3h2袰Æ&Oе.Ʉ(.L<rK#@A[,L54<!r,YIHd)+l\$U\\|'ݣT\0'\$;\0Qwֹ~⌴0qt^2yL.a{(!*\0i~?9ÄGl23v4?f[rԆ;AYn) &P2D@ ]wK2x .p[4u6(} J3\0x\\T\\)!>bVEьs:88{>χAoHrySdvmr׃f>jO\nÀ5ֳ͂A002>nf16q3]+arFx6	S-3e+x̤/jhD\r-\nјG7z2i.A9f`YTx9\"^\\nݣs9{0s83\$:#3Y6{0\nJ\$#D\\ļ@Ў3u0\"*.rs؛5G_ȎDdHKm]\\4\0;d}[S2ܜ}ޞKd& trf	*j+Px܍\r7M8A[#m\n\n𧀯9+ZH|H[_ź|j5H|U1^u]P L`Xgh _rsmZ:l]ihsK>ec9p7jCLRp``");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0\0\0\0\0\0\0\0\0,\0\0\0\0\0\0\0!M*)o) qe#L\0;";break;case"cross.gif":echo"GIF87a\0\0\0\0\0\0\0\0\0\0,\0\0\0\0\0\0\0##\naFo~y._wa1JGL6]\0\0;";break;case"up.gif":echo"GIF87a\0\0\0\0\0\0\0\0\0\0,\0\0\0\0\0\0\0 MQN\n}a8yaŶ\0\0;";break;case"down.gif":echo"GIF87a\0\0\0\0\0\0\0\0\0\0,\0\0\0\0\0\0\0 M*)[W\\L&ٜƶ\0\0;";break;case"arrow.gif":echo"GIF89a\0\n\0\0\0!\0\0\0,\0\0\0\0\0\n\0\0iӲ޻\0\0;";break;}}exit;}function
connection(){global$i;return$i;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$pd=substr($t,-1);return
str_replace($pd.$pd,$pd,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($We,$qc=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($We)){foreach($X
as$hd=>$W){unset($We[$x][$hd]);if(is_array($W)){$We[$x][stripslashes($hd)]=$W;$We[]=&$We[$x][stripslashes($hd)];}else$We[$x][stripslashes($hd)]=($qc?$W:stripslashes($W));}}}}function
bracket_escape($t,$Ca=false){static$vg=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($Ca?array_flip($vg):$vg));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($B,$Y,$Pa,$md="",$je="",$Sa=""){$I="<input type='checkbox' name='$B' value='".h($Y)."'".($Pa?" checked":"").($je?' onclick="'.h($je).'"':'').">";return($md!=""||$Sa?"<label".($Sa?" class='$Sa'":"").">$I".h($md)."</label>":$I);}function
optionlist($ne,$Af=null,$Og=false){$I="";foreach($ne
as$hd=>$W){$oe=array($hd=>$W);if(is_array($W)){$I.='<optgroup label="'.h($hd).'">';$oe=$W;}foreach($oe
as$x=>$X)$I.='<option'.($Og||is_string($x)?' value="'.h($x).'"':'').(($Og||is_string($x)?(string)$x:$X)===$Af?' selected':'').'>'.h($X);if(is_array($W))$I.='</optgroup>';}return$I;}function
html_select($B,$ne,$Y="",$ie=true){if($ie)return"<select name='".h($B)."'".(is_string($ie)?' onchange="'.h($ie).'"':"").">".optionlist($ne,$Y)."</select>";$I="";foreach($ne
as$x=>$X)$I.="<label><input type='radio' name='".h($B)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$I;}function
confirm($jb=""){return" onclick=\"return confirm('".lang(0).($jb?" (' + $jb + ')":"")."');\"";}function
print_fieldset($Oc,$ud,$Xg=false,$je=""){echo"<fieldset><legend><a href='#fieldset-$Oc' onclick=\"".h($je)."return !toggle('fieldset-$Oc');\">$ud</a></legend><div id='fieldset-$Oc'".($Xg?"":" class='hidden'").">\n";}function
bold($Ja){return($Ja?" class='active'":"");}function
odd($I=' class="odd"'){static$s=0;if(!$I)$s=-1;return($s++%2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($x,$X=null){static$rc=true;if($rc)echo"{";if($x!=""){echo($rc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$rc=false;}else{echo"\n}\n";$rc=true;}}function
ini_bool($Xc){$X=ini_get($Xc);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
q($O){global$i;return$i->quote($O);}function
get_vals($G,$f=0){global$i;$I=array();$H=$i->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$f];}return$I;}function
get_key_vals($G,$j=null){global$i;if(!is_object($j))$j=$i;$I=array();$H=$j->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[$J[0]]=$J[1];}return$I;}function
get_rows($G,$j=null,$n="<p class='error'>"){global$i;$eb=(is_object($j)?$j:$i);$I=array();$H=$eb->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($j)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$I;}function
unique_array($J,$v){foreach($v
as$u){if(ereg("PRIMARY|UNIQUE",$u["type"])){$I=array();foreach($u["columns"]as$x){if(!isset($J[$x]))continue
2;$I[$x]=$J[$x];}return$I;}}}function
where($Z,$p=array()){global$w;$I=array();$Bc='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$f=(preg_match($Bc,$x)?$x:idf_escape($x));$I[]=$f.(($w=="sql"&&ereg('^[0-9]*\\.[0-9]*$',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$x],q($X)));if($w=="sql"&&ereg("[^ -@]",$X))$I[]="$f = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$x)$I[]=(preg_match($Bc,$x)?$x:idf_escape($x))." IS NULL";return
implode(" AND ",$I);}function
where_check($X,$p=array()){parse_str($X,$Oa);remove_slashes(array(&$Oa));return
where($Oa,$p);}function
where_link($s,$f,$Y,$ke="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($f)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$ke:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($g,$p,$L=array()){$I="";foreach($g
as$x=>$X){if($L&&!in_array(idf_escape($x),$L))continue;$ya=convert_field($p[$x]);if($ya)$I.=", $ya AS ".idf_escape($x);}return$I;}function
cookie($B,$Y){global$ba;$Ae=array($B,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Ae[]=true;return
call_user_func_array('setcookie',$Ae);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Db,$M,$V,$m=null){global$Eb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Eb))."|username|".($m!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($Db!="server"||$M!=""?urlencode($Db)."=".urlencode($M)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$Jd=null){if($Jd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($_!==null?$_:$_SERVER["REQUEST_URI"]))][]=$Jd;}if($_!==null){if($_=="")$_=".";header("Location: $_");exit;}}function
query_redirect($G,$_,$Jd,$cf=true,$dc=true,$kc=false){global$i,$n,$b;$lg="";if($dc){$Mf=microtime();$kc=!$i->query($G);$lg="; -- ".format_time($Mf,microtime());}$Kf="";if($G)$Kf=$b->messageQuery($G.$lg);if($kc){$n=error().$Kf;return
false;}if($cf)redirect($_,$Jd.$Kf);return
true;}function
queries($G=null){global$i;static$Ze=array();if($G===null)return
implode("\n",$Ze);$Mf=microtime();$I=$i->query($G);$Ze[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G)."; -- ".format_time($Mf,microtime());return$I;}function
apply_queries($G,$R,$Yb='table'){foreach($R
as$P){if(!queries("$G ".$Yb($P)))return
false;}return
true;}function
queries_redirect($_,$Jd,$cf){return
query_redirect(queries(),$_,$Jd,$cf,false,!$cf);}function
format_time($Mf,$Sb){return
lang(1,max(0,array_sum(explode(" ",$Sb))-array_sum(explode(" ",$Mf))));}function
remove_from_uri($_e=""){return
substr(preg_replace("~(?<=[?&])($_e".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$nb){return" ".($D==$nb?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($x,$ub=false){$oc=$_FILES[$x];if(!$oc)return
null;foreach($oc
as$x=>$X)$oc[$x]=(array)$X;$I='';foreach($oc["error"]as$x=>$n){if($n)return$n;$B=$oc["name"][$x];$sg=$oc["tmp_name"][$x];$fb=file_get_contents($ub&&ereg('\\.gz$',$B)?"compress.zlib://$sg":$sg);if($ub){$Mf=substr($fb,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Mf,$jf))$fb=iconv("utf-16","utf-8",$fb);elseif($Mf=="\xEF\xBB\xBF")$fb=substr($fb,3);}$I.=$fb."\n\n";}return$I;}function
upload_error($n){$Gd=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($Gd?" ".lang(3,$Gd):""):lang(4));}function
repeat_pattern($He,$vd){return
str_repeat("$He{0,65535}",$vd/65535)."$He{0,".($vd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($O,$vd=80,$Tf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$vd).")($)?)u",$O,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$vd).")($)?)",$O,$A);return
h($A[1]).$Tf.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($We,$Qc=array()){while(list($x,$X)=each($We)){if(is_array($X)){foreach($X
as$hd=>$W)$We[$x."[$hd]"]=$W;}elseif(!in_array($x,$Qc))echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($P,$lc=false){$I=table_status($P,$lc);return($I?$I:array("Name"=>$P));}function
column_foreign_keys($P){global$b;$I=array();foreach($b->foreignKeys($P)as$q){foreach($q["source"]as$X)$I[$X][]=$q;}return$I;}function
enum_input($T,$_a,$o,$Y,$Rb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$Bd);$I=($Rb!==null?"<label><input type='$T'$_a value='$Rb'".((is_array($Y)?in_array($Rb,$Y):$Y===0)?" checked":"")."><i>".lang(5)."</i></label>":"");foreach($Bd[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Pa=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$I.=" <label><input type='$T'$_a value='".($s+1)."'".($Pa?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$I;}function
input($o,$Y,$r){global$i,$U,$b,$w;$B=h(bracket_escape($o["field"]));echo"<td class='function'>";$mf=($w=="mssql"&&$o["auto_increment"]);if($mf&&!$_POST["save"])$r=null;$Cc=(isset($_GET["select"])||$mf?array("orig"=>lang(6)):array())+$b->editFunctions($o);$_a=" name='fields[$B]'";if($o["type"]=="enum")echo
nbsp($Cc[""])."<td>".$b->editInput($_GET["edit"],$o,$_a,$Y);else{$rc=0;foreach($Cc
as$x=>$X){if($x===""||!$X)break;$rc++;}$ie=($rc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($rc > f.selectedIndex) f.selectedIndex = $rc;\"":"");$_a.=$ie;echo(count($Cc)>1?html_select("function[$B]",$Cc,$r===null||in_array($r,$Cc)||isset($Cc[$r])?$r:"","functionChange(this);"):nbsp(reset($Cc))).'<td>';$Zc=$b->editInput($_GET["edit"],$o,$_a,$Y);if($Zc!="")echo$Zc;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$Bd);foreach($Bd[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Pa=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$B][$s]' value='".(1<<$s)."'".($Pa?' checked':'')."$ie>".h($b->editVal($X,$o)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'$ie>";elseif(($jg=ereg('text|lob',$o["type"]))||ereg("\n",$Y)){if($jg&&$w!="sqlite")$_a.=" cols='50' rows='12'";else{$K=min(12,substr_count($Y,"\n")+1);$_a.=" cols='30' rows='$K'".($K==1?" style='height: 1.2em;'":"");}echo"<textarea$_a>".h($Y).'</textarea>';}else{$Id=(!ereg('int',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$A)?((ereg("binary",$o["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$o["unsigned"]?1:0)):($U[$o["type"]]?$U[$o["type"]]+($o["unsigned"]?0:1):0));if($w=='sql'&&$i->server_info>=5.6&&ereg('time',$o["type"]))$Id+=7;echo"<input".(ereg('int',$o["type"])?" type='number'":"")." value='".h($Y)."'".($Id?" maxlength='$Id'":"").(ereg('char|binary',$o["type"])&&$Id>20?" size='40'":"")."$_a>";}}}function
process_input($o){global$b;$t=bracket_escape($o["field"]);$r=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$o["type"])&&ini_bool("file_uploads")){$oc=get_file("fields-$t");if(!is_string($oc))return
false;return
q($oc);}return$b->processInput($o,$Y,$r);}function
search_tables(){global$b,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$xc=false;foreach(table_status('',true)as$P=>$Q){$B=$b->tableName($Q);if(isset($Q["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($P,$_POST["tables"]))){$H=$i->query("SELECT".limit("1 FROM ".table($P)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($P),array())),1));if(!$H||$H->fetch_row()){if(!$xc){echo"<ul>\n";$xc=true;}echo"<li>".($H?"<a href='".h(ME."select=".urlencode($P)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>\n":"$B: <span class='error'>".error()."</span>\n");}}}echo($xc?"</ul>":"<p class='message'>".lang(7))."\n";}function
dump_headers($Pc,$Rd=false){global$b;$I=$b->dumpHeaders($Pc,$Rd);$ye=$_POST["output"];if($ye!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Pc).".$I".($ye!="file"&&!ereg('[^0-9a-z]',$ye)?".$ye":""));session_write_close();ob_flush();flush();return$I;}function
dump_csv($J){foreach($J
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$J[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($r,$f){return($r?($r=="unixepoch"?"DATETIME($f, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$f)"):$f);}function
password_file($k){$Ab=ini_get("upload_tmp_dir");if(!$Ab){if(function_exists('sys_get_temp_dir'))$Ab=sys_get_temp_dir();else{$pc=@tempnam("","");if(!$pc)return
false;$Ab=dirname($pc);unlink($pc);}}$pc="$Ab/adminer.key";$I=@file_get_contents($pc);if($I||!$k)return$I;$zc=@fopen($pc,"w");if($zc){$I=md5(uniqid(mt_rand(),true));fwrite($zc,$I);fclose($zc);}return$I;}function
is_mail($Ob){$za='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$He="$za+(\\.$za+)*@($Cb?\\.)+$Cb";return
preg_match("(^$He(,\\s*$He)*\$)i",$Ob);}function
is_url($O){$Cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Cb?\\.)+$Cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$A)?strtolower($A[1]):"");}function
is_shortable($o){return
ereg('char|text|lob|geometry|point|linestring|polygon',$o["type"]);}function
slow_query($G){global$b,$S;$m=$b->database();if(support("kill")&&is_object($j=connect())&&($m==""||$j->select_db($m))){$kd=$j->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$S,'&kill=',$kd,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$j=null;ob_flush();flush();$I=@get_key_vals($G,$j);if($j){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($I);}function
lzw_decompress($Ga){$_b=256;$Ha=8;$Ua=array();$nf=0;$of=0;for($s=0;$s<strlen($Ga);$s++){$nf=($nf<<8)+ord($Ga[$s]);$of+=8;if($of>=$Ha){$of-=$Ha;$Ua[]=$nf>>$of;$nf&=(1<<$of)-1;$_b++;if($_b>>$Ha)$Ha++;}}$zb=range("\0","\xFF");$I="";foreach($Ua
as$s=>$Ta){$Nb=$zb[$Ta];if(!isset($Nb))$Nb=$bh.$bh[0];$I.=$Nb;if($s)$zb[]=$bh.$Nb[0];$bh=$Nb;}return$I;}global$b,$i,$Eb,$Lb,$Vb,$n,$Cc,$Hc,$ba,$Yc,$w,$ca,$od,$he,$Ie,$Qf,$S,$xg,$U,$Kg,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Ae=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Ae[]=true;call_user_func_array('session_set_cookie_params',$Ae);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$qc);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$od=array('en'=>'English','ar'=>'العربية','bn'=>'বাংলা','ca'=>'Català','cs'=>'Čeština','de'=>'Deutsch','es'=>'Español','et'=>'Eesti','fa'=>'فارسی','fr'=>'Français','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'日本語','ko'=>'한국어','lt'=>'Lietuvių','nl'=>'Nederlands','pl'=>'Polski','pt'=>'Português','ro'=>'Limba Română','ru'=>'Русский язык','sk'=>'Slovenčina','sl'=>'Slovenski','sr'=>'Српски','ta'=>'த‌மிழ்','tr'=>'Türkçe','uk'=>'Українська','zh'=>'简体中文','zh-tw'=>'繁體中文',);function
get_lang(){global$ca;return$ca;}function
lang($t,$Zd=null){if(is_string($t)){$Ke=array_search($t,get_translations("en"));if($Ke!==false)$t=$Ke;}global$ca,$xg;$wg=($xg[$t]?$xg[$t]:$t);if(is_array($wg)){$Ke=($Zd==1?0:($ca=='cs'||$ca=='sk'?($Zd&&$Zd<5?1:2):($ca=='fr'?(!$Zd?0:1):($ca=='pl'?($Zd%10>1&&$Zd%10<5&&$Zd/10%10!=1?1:2):($ca=='sl'?($Zd%100==1?0:($Zd%100==2?1:($Zd%100==3||$Zd%100==4?2:3))):($ca=='lt'?($Zd%10==1&&$Zd%100!=11?0:($Zd%10>1&&$Zd/10%10!=1?1:2)):($ca=='ru'||$ca=='sr'||$ca=='uk'?($Zd%10==1&&$Zd%100!=11?0:($Zd%10>1&&$Zd%10<5&&$Zd/10%10!=1?1:2)):1)))))));$wg=$wg[$Ke];}$xa=func_get_args();array_shift($xa);$wc=str_replace("%d","%s",$wg);if($wc!=$wg)$xa[0]=number_format($Zd,0,".",lang(8));return
vsprintf($wc,$xa);}function
switch_lang(){global$ca,$od;echo"<form action='' method='post'>\n<div id='lang'>",lang(9).": ".html_select("lang",$od,$ca,"this.form.submit();")," <input type='submit' value='".lang(10)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($od[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($od[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$pa=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Bd,PREG_SET_ORDER);foreach($Bd
as$A)$pa[$A[1]]=(isset($A[3])?$A[3]:1);arsort($pa);foreach($pa
as$x=>$F){if(isset($od[$x])){$ca=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($pa[$x])&&isset($od[$x])){$ca=$x;break;}}}$xg=&$_SESSION["translations"];if($_SESSION["translations_version"]!=2121441971){$xg=array();$_SESSION["translations_version"]=2121441971;}function
get_translations($nd){switch($nd){case"en":$h="A9Dy@s:G(ff	:Sa2\"1..L'Im#s,KOP#I@%9i4o2ύ,9%SiyF9(lGH\\(qa3bG;B.aF&t: Ts4'\nP:YfSpe,D0dF	[r)+v\na9V	S޴k̦ncjAE3F3Sz\n(^{c?.D}tmjl{ȋNo;G_T&A6arcI?,M4h\"(:X!<HKCȦ2##sİ\03#;C9\r4K`;HDC\"1К\r: Cƶ8bm+,þ9.T\0زNJhC*j͎<b\"<\$>SS;6\"T쮀T=S?#\$ð6\r))B3,7l0\\C#,\$`*PH3J)D?eE88G\\✊J%8\r(&EXU=SUղ\r5[\$8̨:\nr\\ոxC@:^\\H+C8^c\nxEK5Au7p|7ZEyP1K@r9jL*B(	iP)UI4%Ib\\\rӪUij?`ȟ)j֞DӲBލJ@(	☩5;yMl1KJQ}	1;(,#h>|h\\K[p\$b0-\n[)097;%EUV\$4ں%\r'Dʁ34Z|QIRN.eU+6̨5-g!M<3vg\r=HEmܼ@X\"YIF7'Tw¢35\0ޒ\$*|44h2Ivdp \n@\"@T@\"Ӥ%S`Yi\$<a:L	YҨtP\nQ)L:8Y\"!DJCyvApwܸm%+RQ\rMy#C4=PIeIǲm\r!8`*'\0|2Ҹ`6I%x ǑPpB_^3!3hF{_a,\"'&\0q\r`03Fmw	-tM`H0fTn\0C)9k@u|	a3o4c'fsϠJ&ڞ6tٛg EY'pFc#-	EpjpMs|)lX	tPpwΌ\$KRPH8%h2*)S@W&PK5s)YBDNă=RJ(YZܮS\$\r]+6+ԧU@^JTF\\8uC1Am	oUjjxO5z4H)QJł&Q6Ct/p\"-\$UX]-il<\0_\\R\r\$Ia[io|^W\rUaګe]-x[8ovX*tNƉ&	-t`/8W_rck\\Bea4IO#=1jXy+,RO1C2*a&|XNZr*<78{>l}\rrLY<\rF;_MΈe07ikfh묖mU2\naWi7w8iO89s(YN\\S,䔑!`y23Wnb9\nPYy5MڧPa\nSHe8+Q=vZL߄oBUŰ%%y]ȯ\\.e]o&I\"%I\\/֤Y(78d>ne@eYPǐr7Xʚrt|oZJ8چp8&Z&7!\\lqJexTr9q&TFЫPӠm?v@5\$uro@\0Iޣ=m\\6xZ!`	} h/Sw׺-!\na98F@\r!s D@o]T*`Z]HAc@>\"hDC4X\n&Qˆ>g%hʰ7x\"ǒ\\@W~pΣֆ#:@	?6z6|72=	rD\"ֿvzCLHvʲ\rL\$bsc<ڸ+\0b,F&\"\"v(\0MApr\\HD jl2ShϧO-S ),牺Z<BLiJ3	\r\n\"";break;case"ar":$h="CPl*\r,&\nA(J.0T2]6QMO!b#e\\ɥ\$\\\nl+[\ndk4O&ղQ)̅7lIE\$ʑm_7TdQ%FPEdJ]MŖiEtT'템9sBGeHh\\m(AL6#%9QJXd:&hCaΡRPcչzn<*̡g\n9%h5ut.QS\nĶp{l-\n;D\nnghwk0GPs<:e:4TF\rp0(H\\:0	k.DBҜ@ŉ[(PR1\"6hseC30	{zQ 7J*}H,2A+FpAi#\"6qx\$eq'EZ:@Id}L4Ԝ'Ezp[@%#`60&jNB&Mq[@,%ħ**?U,Rm*\$QP[N*o_U_m_*iF,<ϵ4O13I2dB5:%cwa2ȷ|AU-SZWESG-:\rP)B0@*\rX7 Sӣ\"JLªLݸθLK;d\"Ԉ-:m>'n@Np<fYa.w\$7]9д0%[8Nzt%-:@8lC7R<H2x0F3:t# 4(]~ 9#xT9(龋05A6ۇ^0(A׎@,n0\0:l(Lv:3jBZX6}C8?j&l*jz䓫elb(2/.Bށ\\)bGaMdjO\naPTC*,U*15\$bԂ`ax!bR~L\$M?&Pk(]0BH\n,7@iQ\0T `\"xnK6ǈr\rᴍPφ%|̵'At,\rQ+kufS=XD~d4u[D<Xd\"8:9.P \n'EaM)K3cABbJw!PA5=4;Q6{1LM'#RqV3\0@URWDG[q.gPv'0U+NtBP*Y? E	9|	.BzsLG؜I<,P[\rI.#y9pϣ@cVA-l]|' BBɩm7taQ9ğbr0mQ\"EdEn&IgjM]h'ntL?\$:SR+g<ԹX)@V6/BQkyeVٸ°bF_m@VDxKn32-F}Y\">\0\\f58UrW_.21y/0)ÜaLK>`T)qaB3Ss,z5%'6P%eTϺgpS@+Ap	^N+h@KNJ&	К[֗Nq\$=ҨJ.VBTb	qs_\n5g7إ ABbVHrb!MkTG,\n?xP_I\"Qz]GRbr'fR\$*J!B,G\r7\0r\r1mJ:K)\0sRa\nR1/+ PFa˄<O[\$`UR\\Vc#R!y˺Z\ry!rC`#<jQ(|tw]\\siB|ur{E0>\$ZN60lWW Ə Rp&qע@*d[dɠcP+:L-\$bYj8F:V^srN!o-z֔cp#%xެMVfeѦtnBR왛#t93,3yyYӄ:}GA]%+9&CFtKp:0J]?2*!i,.KXE67DПt#;mY}w3<Q\"b};d\\w29}8קSyPQKƌ_]]w7h(n;\\7gi̲qNEF]\nMAm/u?ٛ9dѱ[rVttHrݦuv\rOcbOC>9u\0ҢF϶p0iDIe-*Th*(FVeaR\nDoH0O&cMj90HP^Ua0f!p&ℱL+\$;	D'\n%@9CPo	Z!h!¶csom\nʭ\"q\0AƩł/+}bL	v\n2\\L:Σ^\\E&4n)l&\rV`\r \r`@sH@\rRzvv\r 'nȰR\0R\0Z\0@a ~\ri,h1)Q.%CCg\rE䌹K`bhFŚN:p)-G*%t\"ФH0@q!R1O\"ꆢ\"Sde\\W4-2@u\$I^6\0Wn8%`RE(ͱa^\0茀F餗&Z/j2_)-z\"@L)*Xːʾ3ѰI6tTt\n2DJjn.2V%/D:`8V4E^*kU3PP@	\0t	@\n`";break;case"bn":$h="S)\nt]\0_ 	XD)L@4l5BQp 9\n\0,hSE0ba%. H\0.b2nDe*DM,OJÐvх\$:IKg5U4L	Nd!u>&a\\@'JxS4zZزSHMS]OE2\\J1|Ц[iL_?P\n~b¨#m\r/t7B'C]sl2GԶ抍^TȘs<\neU>cU>ݣS L^>#²4\nپjRh\r*O~1d#\ntt.bjبå;\nP[q { SJ*% d+/QQ!N\n/>&\n|P0 y&֣Ls^)pҼ*C,p\$\$\$eM '#P.αRӚ#Mk[]B?1sL\nk8(r۾.{_v\r>PЊvהlk=NJ;G4n=zE#-M,mU7=cjL(}{#d#`6\00P(k4B@[,~3+bS[6rhPe/1Ybu5NhV. E>cLT^SJ\r|J^	h5Г!*4W̵k)\0ª;\rʖ=wӖ{ V޳U޻kg\ràɠ)SjNS8:Jzj8@!b3܈)6%t|/54ȀpRCk^x,gP}s9/QL=>%tua:-źqAo2w0'vT٨=\$<'xIk(Ct øoJ2CeD!:;P\\C m\r!	4xe\r<A Ho`(t}I\r؄/ 0Ah\r:C[\r!\n0\"udj3\\Q/vo\0P	Ac\n)e E L\0(.@q=L,*!e)3fU5)+*`3EOevC~~ǢILQ2bH/UVF\\^)SGy\"BxS\n9ɯY^b0d,̀t6J,I2Ăk6͓4X\$ݘ,n.p!8b\r!10ic\0;Nc4Ÿ5#(A6&ꀀxC^OlᨳfxT(VQH/>5oS[\r	z5s\\\"ʰ3՘3mn|4wTYJHɪZ&.#6WG\n u_ёR2Yx%:H't֬%n3uTK9Ls))#;Diq/MKWvYV\\uY9;	UVjg\n2):w2PH\"~8fڈ2ٙ2LH I}d%==f~R\rA7D@cBH~M7Ry,/¸SI])L#um*0iq}ǔ1/w4Id&5*3QLH\0. +hAX8[դ2aSua87-=CU\nYYl]w\n{VfGshC)FÅ;lYLsB&4R׶卦J@Gf3䥤|_ن\rc;Hy?a:NTM(@*Wyꫥm0]3[շ\\v;-@Mti״[\03\nwif:fX;fl;/q9>kZ-g!nt0_c)3\"`t-h=r5b6/{%tk\\~3knUmRu؀σ^ep;K+&Q:ny^U{Pc&[^/MH֪nSҤu.ۓl'CsC\$dSU%Qr\0'\"7p=SiiH&h@ \nE*UWLC+^qG6oIxA{ǝP -FM1z&%\0+E@a\07FM-cB3F6 aLP4ŘzSW3<=D\rU],Offggx2ƒ,P>\r`4KbM|Pbn,N<0鯌&Jj0X⫥JkP1KjnH(BLV-\$#\nU^8}f̱jBL'ƾ&9~Zl(mP&(0\\arL.\$#,&D@	\n%/f0;>Z^fu%:\rFpPJjT|OEq*\rnpnPGJlNQRЧ ^pA*'+0hAqleM%+\\P1Xg`mBʹXrhI.>{}l1ŭMQ+~UE,D%\"'1\rW 1Z,\"G.0pj䒯eҠ\nK+(-رjKAT!|8ftg'''7'K#|_'lL\"f\".XN`&'UΒR!5#H|M8|I.\\ķ0):pLƐ\"rxjYN`BEgrY2]1oIG;hP3E%jG4H.h83Q3I-LyDgUG!J=3pjrTqI6=557/7KSraG΀.\00050J\rτ-FZ*C7p063USe3kk2n++:2D{K#Q@E;8= 6LY:2SWc*\$\$=\n/+/:FdB5FT:#>4\"t2RTk>ʙ^sbp*Cx+̪NwRB34ԑGԖA-\rBuJ4I(J*TDtDzE9LSIӴ(p%?tK_M҅Mr2q~/T\"10lGTONy;2X>HQ?#2+^D0VtSB1SFqUAJLRSK4WU%QtU:rs9Ӌ9_,)_RUtG5=24I%8RGsUC#4^UĜ`	Dl7GV\"62CC,q ZRBTw#3I j^1/79TS,.}1¾,#m\$WUa^\r%xB-,(gH\rV`\r \r`@J@\rc/\r\r  @bTc \"\0ĎJ4\nZ\0@@gcq`b^&3[50xcۖ\"mlOS2wGY2:<R5\$&Yp=!Ln_e:[5zCNFJ@\$.-84t*櫣& }p;g@ȇ`u`4c/b\0gnq>YopN(^IKmoxpxe0KL!cxUzBCo)_\rU'\"ԉR)\0ʌϢvVj\0覠HDWqK++4X^mI\",%\"А-VbD=9S&K*>8 nx\$6MC6,\"z#<p.X`htqu0,}oxy	\rL^~ՋR)-'>4kj8e\rbM	^s}8M!MQ̙{	\0@	t\n`";break;case"ca":$h="E9je3NCP\\33ADis9LF(d5MC	@e6Ɠrd`gIhpL9Q*K5L S,W-\r<e4&&#o9Lq\n'W\rhc0C1D̆|U:MфS`X :qgLnb  SnRICM~1*N-t'dr hcq?\$lႋS8eNq3_9l1N^v8\0´z7,p#zp=\"H4cJh 2al|\$49'sN:BJ+􉨻7:cE,VEƃ|mA8N(I\"2H\0<HK*3DQ\"#;30l(%.؃zR6\rx	㒍1OAaVKTR( p+2ϋ7P\nb(GqP#zDTj4xNΣ+!	DvYJ+|V=o\"#\\RmT=V+<+c0u̀:LtHB5\0)B37293\$8̴\rҘuC7(]	6CtT x&)#C+8\r#ˎF+[]ySAr\naOL;Ijxx\r@C@:^\\`{O4;R7<9/c5A(XPx!XN҃CRE4⮮z״*agh(\$\n0p98@*!K@ڢ]@a>OId8:tP'\"hAnD9ujwx* Рң	|B2_X1\\-̒4A]rVBZ2nfޑ2ZB)phrITR0r0D9b^LP@0n_{rD:ң_^e9zJ*DY[C~Q\"]5O1Yj(b0EPV8j|\$x/BpL>ChbE»\$2S*'鑮RClvoCa[	k-I,G,7,:	k,<j]]z_d2*AXFCǦDI%xNT(@*A\"0B6Pژˋ(92xq7gTN\0pLL7@GGɅ f%?ƤY((iA5rCp\"FZ2OdiRUxI3pP@HEHzB19HEEdck3*JcS(>M2 ab!X1Mn`\n\nFd\r9q]bU	w2Q_9-	W6UBsM\$QI⚖쎆@C.'W2`%dتB㺱Լ:5æ^D+'fHL&2a\$vJ䗬xnܾrbI\"9d	%ɜi[ˈ(4qqѓF+RL|2TVEtSi'%9{ύzJH<5 ;PĒ5b0őPԢK-:7ЏF\$:؂ъv12=ɡl\$H\nL4F\$b\rd*WII/e#F\nd8fJg9Erc\n*ɦ!Y\$8	HwΊ{;EM3t49\"X~ԝ*	.Fe\"S|:B^I(Qpn'vL>\nnR2\"&e͔.D҇ڄbW;\\@LX\"kOY\r՟^/Mrsj'_Aƻfs-Ula{Uph%e2orӒvF1;Y6.{O<n,F]鼱r[q-29=ll)Ĳ1L\\Aj`![*8Egbfٗ\\U*.\$.hmļӵT:I^16!UE9#VU<Ƕz:[\\'t[#D\n˷!-4?dupaJ|m.P>g?枥{,ಘw1-H[]m>Vm<3;5wemOytX?|:6q_	H8q#T]?aЇuO?xEC/_|^[U_bP⍂䢎\$z=/~pmtjz\rp -jO02Vp;&J\nҫjcd>m`& ?jdDO&FgRb5N,Y\nL*lâRd\\uM;Ī& wEc\rVŎ]ީb`L&\$u #ؗ`Z\n\\N腪	.\r[16&r.#%@B\$gnͩ,1̰Jg/1lZn0h%\$X\"M/\$hd*񞃫T1ƒ_9:ƧtHm\n˴2-<\\/.D7 ~#`1\"lGj=Dp}̣d%hH\0Q4RC|MHՂ\0l\"O!E\\h\"3c2h%&@ʚTBVqbMR(q?L!d,O\r#	? 	\0@	t\n`";break;case"cs":$h="O8'c!~\nfaN2\rC2i6Qh90'Hib7ii6ȍA;͆Y@v2\r&yHsJGQ8%9e:L:e2Zt\"=&Qئ*EjTk<\0Qy5Ǔ\n(SlL_MGH:L=(kT*uSiAE\\afy8ALDdl04 b#L0*`tb&F3((iQNjRSyr4JfSxۺ)hSotrz~\$64\r40j\"bDb)`\"-\r*!5\rb%\$iGb溮\$Lr2\rn\$*3Vp2Ɂ!,-2c̻/c7#pB9880qJ\rc ʢ(C#\$917: PJ#j3K84\"a.K;ɬ=C{(;Uk\rk(F7,PCL_Xm>8,J=Tiڱ\$\n1@R\0#_bHډL8<]82CEւ.\rMRȃ\\a[#94\0P!苀:&7i@!bx'l@3%#j\r!]xÐl.uZP\0xܛVBdÚk,eH'PSz9UˁdTFŕnV;eh,菱e(\nbAPD';x(C@:^]B%#8^1az\rڰ^TM}smc+7F,}9蚘k4)V;=C3aI[j2̢C%ѹb4@(	A%j-Bb1G%-R^L^j툘5ci8Se4!̕2MJ'T[E	bȖW%\n28)l3Ό	{:#\\45TII9V\r8G\"768v&FQ 'aƒVpK/2@n/),X2W+܎\$A=ƳC:Oh5i`\rߋFbS0C5)%xOK;%exb\"Ĉ퀠]0Xlp\\@гngHziaYII'PX<YRQY;KXN@>>9d\\8JM&\"tAЍ8i}pM\n	gFQ,%[A҄I2##A^hߥeHTh4ȡLUO+Āaةf-CPCdKJscxr}}Zk1AHiil8\0bш1GP֠@q2mSf2&+>E\rA:4CC\"//>H>cżZʵU13h@]r@\n M\nXL6q~؟Nm{\r.ߣp/7\\imDJ{'#V6_28S71 Wk%x֕_Ǘw7=Z\n+Uygw;r#vWa╄sd7r:AJNHłQ)	U#Q?)aJG\0waB7Sԣ\"LJO3UJ+D:XIH91'J5{zq1B\$N3M*y¶iJB2 W8ihFbDCT*s,8H5#Δ.uu9f:]3Q*]KBض~ɯmJR_lϽ2@SuMF\$jBcEmڴ=0H\"tTԽ2А*Yȕ8TwcEJ;4+\"ewݡfHC5;G`ZI[דll+c-y6)bٟpn巫2tR}=t\\Uvd(.Nz7O%V.ճk]ru%/}YDrStGpN/	Yox35<G%Q`ۧuFTid[\"9Q*HbF85<=bΐ	X}Li98\0nzؒaIej+㼿fgݯCB]WuJO_^O9'	[\":\r\0*עom,%o\nO4mX\$2JM+\0㒋DF\"|zSh{68?on(:\\FFMX0&lpvH2EMY	dH\0BC\rb38PxΊ0o&\r80pi7xK~HJ\n&/JCJ\"'P谋	jJx9k2#(1)q,5`(O]n\r*n#^,puhJ\0Z,胀Fޒq#QQ_.	0V	b2Fb\nJѠݠP+GQ5k/Ei(edL\"O (F|e>:E`4lBl[g#hkB\nZH%/\r\"N\0\\x޸(h&R\" }\"*\"*lFMOH L0@.k:B86(p-VL1\"w&rJN8\$7zB%I%RGꎀThrOiLp,Kߪ`M&s/ eBj	3/40WP_0``(-5^Go7D\$F&rB\$PTa4bFQ@(B\09b\0\nthX(9XL#˧6d dZ<FC6E<lJ@\\m3jpX\"4\rC|i `J]>bDG4A0ER";break;case"de":$h="S4@s4S~\nfh8(o&C)@v7ǈ 3M90MQ4x4L&24u1ID9)rag81t	Nd)M=S0ʁh:M\rX`(r@g`\\*LFSef\ngeSn3M'J: CjسR\\Cv\$k'Jʡ/4Hf,-:ZS+2m\"Ԙ鹓_Ƴ.3pBԇ Q;z;\r`9m0t\nF\\O2oPõY4L4S퉃x΀O4첾<H@078:C:kΨB\0R⹮4Vȼ(p@P\nx4MBEb2`A'\$\0\"d PJB*83\rP+cC\$.OJ03<70D\\dV/\0,h8/B1<LJ5C=Z)TRI1h%R0o[>52I(\$ҷ(a?\r]zְYRp6CP)B573VJlZ2+a\0\r5:)Wܩf=3\rdsl;6:݆t9p%R7܃B&7`*KH`#h7atLkl!?D8\r2(vA\"0z,xﱅڀs3<<BBTp9%/HӖ\0౼p|/\0Ԡc'N`@ń#\n(hf  *zv66G:J9),\n@]'gӄB|9\re)p'(ݧG,T^.}9ɝqФk'b j0@]]ՈG)^!pNo\$Vp \nq`CBY!6AToIgeA)bPTj*^@*`3#ƃ\n3[@ٲZ,ǹR鈨M\nqHN Ik|gJ[>\0(+7pҤ\r\$V2G:qrt!#|^\r9%	Nyy֒1<DY:ZezHg&מh(mC(dǜ'@BD!P\"il(L4GCpa<Veb8O}qѹP9	GC˕.v26Nɦ Ĥ5ACkQP\$E	453TGpJΉB.b|ׄ`W4VY/ܕ`Ĩ>22ODPBiԥzUK\r\"y3;0@yX\nXE\"ZV^nlgX*L,3ԒʚJfGol8aMKՕIJGT@a51Vp-	:2֎<!32p\\k9}V\$*_:Fv!	aq92ANaw]LJf+Ri:RjaMbCC\n93Xԇl	'+q\\\$FHKU9ƈsɘ\"Uuz<\0BL(^+R<)(K%R(ƋEG[C.\$E\0apRzz\npy#y'&_KĹG90	Bq97PqISݡ\n@8.mܹT5H\\07\"|	P_y,n\$AeKpVUyIR瑱pl.3q>Z9\$u&#,bVg;U8,*\"稁8Pَf¬%fL{rPdv)4{6T7e幨I9-#¹R&XUV[UhvJ'39;Gk-*6Ee)6ofЙ-uOWd6ׇd)U+)1t'M%SI	^'J}%u'_G/G|Ht+ZؑpH\0g,h>`eXe<Q\nC`.c%4Hx+:pA,O#%X4\\IxKs6R^61\"dgP6Z!	%TIaK9EqfvͩGuŘ*IN{<j?P\0|,'\r;e<&/Nwy+T{G[漱\rd%󗟳 Fj Ba49ҕOqF[Mu//~|\r+zb\\i>gxw|K鯘}]owʿc:gLJ}PSH*)5:-k\0pBh	!`@0Ъb~!9pJOP)lb pJ[T-h \0ܵv\rgO%b#L\r#'Բdd8\rV\rgXd7ǈH` xr<\nZ\rc )Epߪ\rm\\mj14{P^&@ev<3\00À%ЪGJBvƅPD\n ?ɜ~%ɔvj*F i,h(?1PCRbJ/b<CP\r5qd1ib<\r`j=\"|\"V,6\"#Ѣ4Ϊ @@섬\nd!pq<Tb1\0CJf!K'cޑiĄEviCĪK\0҆~\rh<J3JGk7+=Z:1b\"@	t\n`";break;case"es":$h="E9jg:P\\33AADxs\r3IeMrIfI.&\rc6(A*Kс)̅0 rة*eLqgaygM:}De7\$	` L|U9E\naJaaOlXg7G\r踂HPbE@R\r1V4\"H\ns::ɴ\n9Y^  4WL }5x(e2[raxdrM7/A2|[.i'Md/6'#`P7s؎OJP1Xb>؍H`>\0SB.뎣脸oӌpހ#|V4#AQ,O\"q\"MPd4ŋJ22|)T@0ƺ2Ȃ3H8/r7.rYTؐ |9kB,D4&Dh1Ӄt:r֏l&b*)\"`6oĒ)Tg@&Cj2\"WCZ=\0)\$B(P7;1^˴ #xִ); pTl6[J-{0؍5J>5,v)2WG\r4©3Ҍ1L8.4J8\r0s#+\"/:;<\0%닎:IL[4-*PX<@ඎc(fy~@2D4x﹅0ګ6r3Fǭ`^-I8mB7\ra}fm\rx2l:82&zB:#-;@&0!\"jÿ[p3*(	\n7ڎ3(J *0+'IEr08t#*-gk:k?2\nx*a)3#2+2z)s uHָRhM}oؑ1-zdɚri2(,2L+\r20\0L/̐gWF_Pm CR_,T**X@eBòv\\GԂ`CڞJe0m_;ڇC\nɑr@1\n܎32?TTn0N޹T࢜Ҭ8AcKjщg-hep^M}4Tgi\\t\0̫\r;I%d	8PT*]\0B`EE6\$e9Rf	9sd(3ʺD'bcL\$r@bQŢ2IYܩ\0}\0Rc\\4BPIITPԐهI(Id[\$lG,&Բj^xܧrZ\0S %Xi@YgCX@1+Ç\$LP+h*Hrtl2j P\"D6B\"8l(r!H`Vi	*\ng铭2PƑ8DV@o#.)`!a4u\$UMQ\$9#\$`5L\r|+c]_m+5\0T;V_c1A`*3*T.]%9<#~AMkKJߘEQ]K4`{RI)%,^|	@wc\"[Q|\n	tsE.i #\$,)Pq5NR9tu\r\$ւZ  )ܖFuX9>^q0! rN>YlNn;|xfE%蕄aU.[ʻ=2c3&t`yQ6	+NMk7y.8gvcM8ʪL\rvgA3F\0(`DЙa/)=3\"L:j鼹HrjV'ӭ&PêܝX:&yՌRX\$+\n%6bغ%6\ne8'iޞ?i܎sUen?IIOm3:Zost}R84;Gׁw*\rh&v*>DVvU<NQJz/A2Lj`ڷ0U\$W{sH_zv\\Jh7EYk:b33^g:j-{Xm߫>;s*X5;>C/y?5\r5nnj'\\hʘ/~[#o%Háa[y( ޿41?]MIk;\nmǿi?f 4J?]D4JvcY~>o-9Ď,)&c dJK\">(Cĕ&I-#\$cc ;\"·M%%W+-È:jhi~hP/Ǎ ``Xtt:^z\np`d.b\"Dx0^m#\rĔ#b:S`źˤ9pM#r\nBШjEcWd*BP`R&fF#g d\n8b]bxPÌvQ(JH8hB\">j#gDV=@&\\6&v`mh(fhHulRcxnlq|1~2CMl`l̓#<DhQE\$.Љ:kd1b:,\n0\n/I,\"#`J&1jQI#x8`8?l	\0t	@\n`";break;case"et":$h="K0a 5MC)~\nfaF0M\ry9&!\n2IIنcfp(a53#tΧS%9pNS\$4AF\nEC	OT,̰یt0#vGW2eюSK\rGS@eq:k\0^\rF<b4D㩴]43\rHe;dƸle3H(`0Eiy ONzR\n#Mۙһy&fR/ɍpS2ã7IW:F	zC	MaZF/2նʓ,ƨZ+Bj22òF0@\$*#h:J<#v4CT%ã<DJ'H'O[<*!tEC@¥h+ޮ1o5#D2&C4ȋȨiP5j330:`A∘\r78#t:\n9\"~i2=_qI =qCP6F*TmP6cJͣi:\\R\rx7\nR6\0B#c7kH:)bT/[Q\0\r<in4cd'j7'j7P0H:Yy-lc8V._C\n#42+*513 Ռ4&}Nˏ\0x\rL 8Ax^;rI1Ar3F<1ct7/I5A8 :x\nD%5zIRcÕꠧ0Sj6*^N\n@tV)Jj7xH-<n+tǯBx*4֔L\"#cL騞~gmH_CMN>c@^8MBo^LW\"Jx5,1%`Ր \$D¹X*\n>GĚBWFVjԚ%hߓ, V,J\n&Dq+U=@eF4jII;%BhPS/̋8RʁӍk:gB]m=n6E{I)a|b,X;,f5.BY	f(&%Mb5#Jt!m8\"pXQ/9ZCA@f+<3xNWԲ@\0U\n @8 &Y\\rG&w从f^0Vjvк\n]ϡ셔'OR)PK;n)eR 'L %dv0CMc\$P\"~+ÂdY5J\rPyj 14HOZ2^f	@r:cmIT\nA\$#p荷akvv!2<yiX\"μ.L\nq췩\n:N vؓa}^dk3H|*PCj)+tirS {\r,m#c\r%v\$O@؁)e<j)c\\O4)#\$K`τ#uIΑWP#qqJ\0C/A;*0,q0!&Q\\X&;\\ÙHC+'*@蝏 \rˀ8ԔATB\\VWe `*{k'D\$P\n	fd<k0lM|C<Yʢk8c[4shf1\r'D#a?3/TeG),~c4Pfp3dE>vnvf8dpґAOp\rJd3d.VbfjwB#\\|s;E =	-\n+xoE&-za]Z?}ᮇ]4#;֋XM0ډ~u%:R,):WZ]\r{FSG7vͫ܅R_^]vPVipL,ta*y@fӓ\$4d\ry2Du}opC!881@)Ԉ9;2S	>`]!2grVJL4@[\nPtz1;sw2?@FwbY)E/w\\ȫ>{z[Cmuu\nm0gkpwChT}HE{NJnWҐ	H ?U1~ӴPwvv	5U*ٳ7~w6%*~*9͌r%i*cHe9Xw^M~7Z;tߥ¡[x{4k&#R0RFxź^LlnL`V`d+\0l\0D\0PJhpÀB,4o]CD2gwPX@t P	M@ȧ/v(UحvcMDwB6t/t	k`\0 . ޙ\n&͞bbn`㉾|0^\rV\rbfg#z!L.1r\nZ.\rrJ&\"#d`Hv^ԫPΊôn2ABrn&Ա>8\$&\"zWHt h@@Cp\nCRh0|J\r\nqLc\n|lP#qͫ\r*NMgC@\$\0@R, `<bNF1θ1cTLh	ejGpyψl̪# \"25\nQ҂dJv+@L3G?\"/IzO0ql)b&hGﲓ(c#FN<C(7	\0@	t\n`";break;case"fa":$h="B6P텛aTF6(J.0SeSěaQ\n\$6Ma+XQPdBBP(d:x2[\"SPm\\KICR)CfkIEN#y岈l++)Ic6d\$B!Z-~䌄,V}'!lUUiZB@qASp2QBB#STQ:HTkN!([+{r 0J@`4̖ZlI㯕ϸZmaRO}dv>fB*[\0H 	A\$Ϋ	jl9TU5_\nv4ŢJ+\\8-*9`6\"\"Z#CLqJV.BlM3\0.{hǑk*,2%2j\"U!,G(t4-pŬ/(!rǎD#Ybǅ::^(<Dτl(%!-(| ,[/Vè61\r*61#sAg\0CTB-)RB)scϼpD BJL(l,NIN-Pi*utU`4.Ut|j/E˰Bf5uVZ#f,hk+Ʊh<C6Oo%I#-U?p\\/I5p@!bT0L|@T˭AXs}N\"fK+*urL\ns9l0KZ',xfܙj%ntDZu8vBh9(;㔠29&*!\0D4xυ6#vp8_c7cH7*0C8:r1Na|\$26䣠x!9@4\r7#H\r#\r#4.ZZ3!Nm!HOkXh;LAC\$帋JA),֊Uɑ4)HݗEVf;mgIͱ2%_\rLR:Ln RQ,Ȗ&(Q[`yvBXNhI\\gIQ:L{	&C Y\r)L^0ot@Ȇ \0S\n!0`ҦA\0v\r.D#@rP\r/½Co\rmgNVW&g؃Jd	HT]Ͱ0t<RQ(䒔k|3!	H1Qs@VG91l5d5Xl9>,lx(kRL\$dM4OI[cr B=AKeSFO&dޡ\0QQT3R+s\0U\n @CD0\"f@:`OG/DA'e3%bQQ@dh34Ci ?%ѧ2ld/08djt1tD(Lr`LMxx(OS@#b/TÒ{XA[s5d33Yk\"\rq>2@f\$g^i-#dBZa-6~:v,>CWQ\r8O[9dTSƕ<J\\ϤX1hd\$M\n F\\ulWk\$G6\"2kp\nUȷ׆IX`/0DɕK	q0#b]]sӪ!85\$`Hkn\"٣v4pAr{SNad>Cpf\\8/ ;k\nCbR  \$,tKE5P!8'бch\\\rC\0r\r1L`PrS7iX#vV!UT4x3-9\\Xjzbt*;9ЫTuZ)0MkIZheP˦U%EH	e's\\[?5ҟnp3ƈĳ	TAzNW}t,\"!\0SG2C1{ܨ[2j{SW{oj[T}>[_JB^qURJm\nY3	>޻}-X4u9Ԥej&^\"Y5tn\nQ\$ɠ*DE<T31xB/\$FFg\no1a\"^[W1ؐX譪A	QFw&KrYX5H`Zͨ/b3H;aXjBg=Ѽu\">vtnY0}t5|'4k/\"ZJE&,T0TzD,(Ll5m=fz?{slS|)hė\\`IXo1~*cW?Xj%\"(?ZW4sK_yOG~;!c?ޯj/l掌+*O诅om7j#6*c@Ôb0\nGlc\\_pN,HkmN,tE`*gal)tTij+'ҥ\r\$)\r0иz\$\084rbJDm`@`\r`f 4\0z{|4\ro@E4t\"\npJq\r|Rm,PD*~kC:ь1DJд\"T nh..2zsJ숂>X\$B|*XcR%\0`/>	J'REe`F\"6g.1ֹʤj۱䗃ɜm^P-\0@zʱ d\0`GRK㾵d5~QB\nPʪ\n^\"SHBP,&2d8xU\n7\"vcF.k/RX,dV%]Ķ+\0aR*ݭH.`ꪅP=1ڬoʲ`NO ~(Bc>";break;case"fr":$h="E1iu9fSi7(ffDis9LF('4M`H 3LfL0\\\n&DI^m0%&y0M!M%Srdc3@r23,if<B\n LgStd'qeNI\n+N!@u0`%S#tߝTjjMfB9C0#N7LG((iƌVC4Xjhn4#E&a:]V5a`QRTp8aۋxPQ4N\03>7::8scK>2LA(#2+I\"2@p*5tԎKڰ4)k.7qB.#n`@ꍎB(hmF(2xƁHK,KR\"#3ή8\nS,@rP%Ɇ\\B+¶R`(pϯ*L:c+7MPx:Ɨc:aH@)\"b:l20|'C\0)RM5@C7jJ\nv`\r~ăt	aB%@ޣXITJ-5p-t._0odL2I3\r7u@!b\$ߌuZ (%cm873,Cp5=\n\$X曽-K\nGC KVZa̈eЎ*L-(\r<\n?C2x\r\rC@:^(\\0j %c8_Zq;5<9\\/kJI%^0\nAv7\n\"pꩼ3ȊV OhA\0\$\n8]0@*!M\rHMyب)H6	JLit:\"Z7xS\n\0@cPTCarSৢ7BH8 ;媳x\n\"?%D&%9'%70eQ{@1VJA/,#GJ|)4a=&.h,ࣰ38WmD\$&VķT<[h\n0Lz\nRHHp,,T<9Fl#NyZ: RUH @,*)0hZr	(l95]\"KQ\"Ra֫ZK*`Q\"]x59#	CI'Y#_9:@(lC,	8PT*q\0B`EI\rPpMB*\n5G}xp; \nЄHfjgܺFXQmdA%Dd{	)2[Kq%`	5SclTxA|/\"60xGhcr!RV\0!b4#e-1ޅmP%<.qZ:bN\$JxS4;sf)#CDc]]!!5cω69k	M7T(KauK`s,8)<Tpcy1,_SUJY(^mۚIhJ=xRPk\"ogڧWrel-ʶѳKx˂[)m/YUxt.?(|=XlZĕ#{Tdo\nцSӒ(Ӓ2{OxF4H{W&ĢJ6 QO(-aAԬ:HIXtFQSj%S\$!NȷO)ڬ\$ɳZ3\0uVa7yTԡ=h.2zW9	CNɦz_Zś*cF2 _Fq&袷h%ROr9Sœ,Lug/z0z ]]V5{GY'H\nY0\$Aԭmjh[-\$YԜ5`T-G'HPS=5\\{M]_th%:Qo(5.oŵw?\\\rB}xFoH&(>>7ἘSF&Cm_V^]mϴėXryŁ|Sk.un.NOSbGu;ڱ͑PE\r<?L!K3~xSb%uHvSKtoX!Jk:sU6O|N675SԳg'\$G 9.ш%nxL:r3Ou.!g͕^UW/ZڸڟE__s\\bkpAհ¢d#O,ʿonrڰsw.WV-_sH3OaCl\n0qcl9\03P+ELlnrqo\r\"u..OϤf\$~&ҐH8D`Tҏ^Kh@+cLؕU2:T-S	0,pRP~/i	Рp&ˮ[\\/m̪έ0L|\nːb[	o\rOzD\n֗,6\$E\$ʑ\$>K&/,#+QBn	vK\0006;JƑ \"JKBIMR~kӑj!A+:f3u\rT6>E5(: +il\r)P1ɝf4RB<\$BlLv\")\$ ZJ/P3Rz,t(R]\">\$-H?,am-jQ6[*>b^2F\$R:r+R:!CUQ6nBGq vKxfYE6q0j(jB38ȸB)ѺE\nJX*I!&+ҘQMP+R@b@ޡEF5rя:d@\na,>	 xD\nݳڭʪ\0{jlc2̓b\r<#qH1Ы2<~	0*M XƦ|n9160.\np	@%j>AȬD0	\0t	@\n`";break;case"hu":$h="B4e7P\\33\r5	d8NF0Q8mC|e6kiL  0CT\\\n Č'LMBl4fjMRr2X)\no9D:OF\\݆Q)iM8,Bb6fPv'3Ѻ(lT(=\nipSYr5oIOM\r\nb\\~YJӁS=E\r\$RE M&F*DpTLroф\n#dAL:'8Q6i/jJ_5Ӿes\"֭A\0B9;CbJߎ5E	ʻƥ\"eH9ej9¢(&0?nM\rI\n3\r ɡ\"HK!>܍\$HP45cKP5<phDC@\ncx1&*@ܳ632ؕpށC\\ܫ1b[8C8A5k&6)2ͻKc77∘]6Ck7,uJ9((QHHߪlSYel\nub#,آ4ń\n@48:|\$ܷP<[d±I3EC\rX,S-u>'[IKa#Tb#&7WfZ6]\rPQo22mܳl552hP\$98{*6.Ӆ #*n&(ԊA`@c=@8A㫐`J\n`miP/c7HC-4&(&#B3:t^CjԍpI(J}nd:x1h5HHuu@WHPݒRٔ#}*ւc@BE\r3@@(	hs)Vt6z50޾^ޥzbˊC4\"P2+A@tbɺ&Fl3rbxS\nyU!\nېW)P:5C;/jAVVUA\r:޼pb\r*)d&!*>%6)N3\"J#ly(%=y'xb0ISWF:k,ŷlOipa&Y!\r S\n<'<!DaI8FP\"bޠE\\\n\"y`{6g\\!GY!FU\$fXu\r\"AD\nʧJ\"73XS	h*\"TDưxpK)lR\\5LBY\"FȤU\\	'^+OacA'3\\2ѢIɭ_&\$2*P	Dn\0PINmSfb(<\$CQjiIp<əduNB^#UB!{`\"9[s\\KozxFMۀ=R?ﭵs94,YՊ(j֫)\0 q#ܒprX	b\ngvtjFQQYq\0kQISû>C\n;e-!ZhEjh-b;8d70Kz9xwAm5WBy75[^s4&hHLe'd5{#UlKD٬1Rb\$4vnˎ<G#z`eE,rfa罁{a扦R8m.,OÁk|!(FSdÄf1Ȥdg>HZ5y84*	m\r8U/vՊR\r=V=<xcb5O4ÜAk<ذɤwrS%Дa2ŵRFsVq>-y)ew	DAy=U}7ɴJN)j,;`	MY;Evke;aӄhF\nHW/UNګ;fƠuFi;,b4y+[SrMA4Ll۫7t,m1SZ	otg4sVL+t8a>p/tX	_pZϪ^~5\\8g܂#tn̧#Sfu'TU	1\r-&IW  p-`sb@.U-L5cI}UhKYl٭>wWY~*u~ni!IN29:G@ʜHNK(jt08zm\re4'ctr&Mv{\nт=-(ERUo[\0R6-E9%9[_Vs1\$C/տpM#-b.COO\0OC22^RKڊߤܫ,&'HB*X3-̥P[\0욝npYV*FB*#OpbC\$\nLK	p\0bj4=C4c1*=0=n/@zϠe8h/,&?@¤cL,K􏂔RbEֲ\0hj\nDQ'dn	cb\0lld9.`M\0003nH+!Z@B `(\0fN\r[ \r zC4(\"C\\)F〪\npzb\"Gz[/H_%il#B\$h\n6lj9?aBգ=b0q|\nV<hw\"&;\0D	p:6\"DRE:ÇobC9.B\$lL.(flzƈ+L&P',lrsm&E R`^'\$<frp2tO2Cjj]'\$S~ܨbR*dQE\\)Rc&jZ^>\"Y\0F	PE\rDlbQe(ݨN2{`VHLPH\rg\$7czfi\r";break;case"id":$h="A7\"Ʉi7ᙘ@s\r0#Xp0)u&r5NbQs0yIaE&\"Rn`FK61NdQ*\"pim:决yF lhP:\\,FQA	A7^(\n\$`t:XeJJZ儨@pHShigKSDG2CH(a3R[+%X۲%\re82qHR\n\n&ʫ>W@r6#iwτf9eS6r?\ns#t	쎈PȒK\0P( ʑDBx;(p	\0*Cp/ڥ=Ԫ,Z  ,؄ CJ`@64)H\$B\nbJ?*lFs:5렄:ÜS44r^2BL\0A`D	ro(Ms;N TCch!b!Ή\04ch@:̱+x䦤C)Ne@֎i|aF`4`g9|̲*JX }X7UxȖ<,jNϥCB(\0x@ cDL3:t(Qܓ,^I2(1W#XDPÄ^0̊7\r|.:\rtV#O;ӉI`crH쮚=(&˲2YIP*p˨3cJ[ v*5bK@#]@(	☩2fWvϒ/:M3\n+p4!BČmh\r&<P(*kYCHҕގNm0)w]XzSW=6uaF,6AHS3꿴,fy(-\r2:?V6\$fڹ<D`	G:\"\"\nTSOOYWZԩd%,4w\\''@BD!P\"j E	\0OH G\n#D`_Ke7FtjapDJ5.\0\"d	'^^`0&&6U(n 5vፊ|dL	\$#&Ҋ\$(SmD2HJCn6Paye,1(5ִ#BZ9e첖\n\nH؄%cCI8i:B]R0Ƞ8YBФBĲLÒtwg)#44%\n:Z(SI8%VdL4q:Fu#2BQda5Ky%P'P;1:T Q(	cl\n}p'	C9cy)(Mm^a2(nM\0\\\nJqe\rH\"GV\nS5:vV<W2EhOvSPi)JqXGI#&[Jh*-fFMULֶWgHʸUnKX򔧕A%bR'd:y*m=\r)Fh&Ѐ9&ɪ;Xjȡd!604RFf pL0EpHdxv3U<t_eDn'}3FYx_[ܼM[g-.8ۻO̕7L^e唲\",ʑ@D{7ͨ(f	!\"jW(l31i0dAN\0Zt.F]K\nL0ŗj_ Ú9kVw#p@d>++r9@\$%\nEȯmPԘ\rZDc2oMAnʎQ38؛Yϒ^Ư~Ytn>>KcKt:\\#opԖKKh>K\$tiåKMWtL5k\$-I_M%鑓Q\rڝ4ai;! fDPޥ#[(\"){~3ܚ^B!'d^,qs<`&xH\nFXmf^idм '8n44-PpW6;Mhtu%ZO\"ﻭ܋c^x:CgRZq`c\rs/l.[PS\$\nYh	AtH3hXc=ጊnfIQg-@	`FPDmn\r FcG^^\"Y	R˨q'zBQ;Ի8U6fݷ,*%40H5j9a1ڝdDl,nVq[=Al@)&_sL!˟xp*G6{1fH9(MY&+N9~[!H.M/J[3{TYe	q9b=x}LȰIFBI=-A5Њ511b\r";break;case"it":$h="S4Χ#x%(a9@L&)ol2\rp\"u91qp(ab㙦I!6NsYf7Xj\0BcH 2NgC,u7Fn0Db%e|u0;`uOڍRi67h:M.PUZT40Q铰[RuDADC\r \\JgHh2UR2S|SXij{r\n)NGnU;(NgzGζ\$W.c0a%8r&Ĭi9\r`d5聮\"h2\r(ς@D,B#c*fʷЌ  @1*Qb)Ē.\"2 P3Fhs+j89A\0%(4<V/\rxGt#rͣ\"0)\"`0\r6,o*B&m!ISE5TL<(\"0j@BH8+x\0TB!jE\rB:ҸNDQiǋB5\0)B2ϯ\r¿b`#J0T0n@11#޶\$1v2c,6,VҪE!eȐ䚦5X\r`+O?Z&J(*%!`x\rC@:^]\r+8^cxE4;s7\ra}O	>|\r(s`	^@M[/<.l']+++0!\0\$\n`8T\n0Ru1(,z	0O>4ق00 ܰ#/pBx*YӁW0˵<?ӄc!fcL܃r<R\"n:shAÍ~|EcHNb\0*pO;H莠j9ZPq/d[[g˒j\n2\0܆±R\"\0ܹ]cjOqi+\0:l)FG R0*HĤzLWcRR\njHĵ ogph841\$BH<'\0 A\nF@@(LCI\"R,Q&nH\"2)&%`#hpGv&e\n+6\0006\$|J]0E&0\n\"Tb*ݰmCG鉛`Vo{!)܂B&P~``Olmr&9!53**'|M3t֨Ñ(Ġl|U6A0&T4k%^aʛh+pQ]6\n\$^	Aa]&}.J!Y/Bm|l\$}%'k3IaNN\"0R-j7THiK\\u\naB-O:2vzԏXcXH|d*BK!pB\$%\nTi\$`3:A\r#CsJ5\n\rqZ(SJQ*\"I&8*FҸYe>ͽZ#ױ+ـht\$z'PZpsl\\8(\"B\"MK)r.q0l&i%O\\I qYI%&c0j6[z|B^/]>&t\0e]\$,D8<M |^\0P\$2_>?e\0o=p+;Ê\\wb&N0pbP+t9I8\\2!=HcDˌ3qi\ria!SrXR\nlʤPD6*fe-@gY3`&Uv{+ri`ӑm(^hp0F_M8b;tx\$vg0\rhJ.AYqWP\"nPDR?f>!;)C#^vJ:b?-ɗoo*nBL\n7l6Gyu:so>rݴc0Mx'\0\nLE<\"~+!7\$@zW	֛GŃʏ&şo~|ÌE\$'V:f~s/t)0ejterݓ28tzz]C'#Y	=wL=Uu~;O6{v^Yr-̟H'FpXLHm\$P?U3MfuWAH#b2¾K1by%:G{ 9P쒥*+{(mI!3ܷlLC53]sK&?ͦY4W(U\nYI_qKh=䌒{0AE\"m\"8>i	\$**b0P6.8`B%ǴEK^bJH9B000M\ni]H!+*x%ˎ\\^R1G\"\rv_VD\0_2Pk0pPu/\0͋\$M>-up2>&Z48dD=PK\\PI\$eП\r\"4GlK|,\0xz\"Bn2(9fAOL(.j>8Bd|M\$<F'(>b	\0@	t\n`";break;case"ja":$h="W'\nc/ɘ2-޼Oᙘ@SN4UƂPԑ\\}%QGqB\r[^G0e<	&0S8r&#APKY}t Q\$I+ܪÕ8B0<sW@*TCL#i\$\nAGS,ƀAB\0U'NEΔTF(H2j?wEdZʼZ0\$M_pe4PA:ΩQc/)@ukPsa\0M9ʗ*y=J+iy]JL\\d?mʈG{\rUTh4Dq_rAVѴ>U#N#8D*;ԐhcA\\t,R>Bd H#ˑDz9	9ʨEYpsΉ48(i7DpAЙ_9tI+I(\$IMT+	],rP96W3La8s\0 Q[I6C\"C @*a@1\$Ds; TCDpaR9hQ1evs{C2F[R\"z<C4tddè61\r(@9c\nbh<Y]K3\$\r<rPaRI-KA%=2\\Ҙd_))t|IL8NPb8@Z	dfȉI`\nQ%7N	\$]UBPP:LYpFkV@B)[r!\0@	\n5̓dUR#]HdAvm7 d[khgZ#4 \niQEhciVY ]ȱ0c99x?4C(\rC@:^\\0h7qw,3(ޏp9#~W3P/0H8X#o|:x6:\r|:\r5CHm:ϴ-Ү2 c'\$\0[4\"\n&fc}D)ld,##{4G\rCĈ\$@'5>Ί\\#Q_56uBxS\n!MD	7\$0@΢Ce4AL9EK6q,%\"	B3bK}oA\r:A3\0f\r+`0T\n\$7'ܳ}D9ڰxvw.	IL\"8KXac\\.T;{M>1`:4K%IfioN%PF S\nrظvBsSTTJ?Qh5< @)ah{DA51J(R*r<Gb]KGzN' dF?^#Xt2	B@DQJ,xNT(@-@A\"RaDhr\rl?jY6#*#J8@\n1%O|@rHZ(1yUʄS*:diK䒨,(N^ęؗHF'dO\\vZoHW\ru^I?BYT>AZbw#u\\C9?'zR \"-]/a6[\\!HBUn1@rclib#|TӐJ?zܜİ@oK{/C	r7\"[#dA-Q].@Kwom)Wb2\rT!HA15hB1hJ)V\" M_1P9!khtp\n1dMF)bstCXZG0G%ئN=КdCf^+ HgM)&Yaz<hQ/jV\$sh#c2i5zd(d.9^өl-bÙHLǭN)\\[.]0+hbemڻljVqViAE\\D[4U7Sj{5Yݨv٦3yļ	HFՖ3Y˝KИ\\n[tT17ڄg-c%kn'Ʀ2\\j>E&:<m0HWݐ[B-L:(\rϷIcef@}6I),l~olWRSNN;VIoeHp1Vw%l^2'nDyLKt6Zf*Y.,)jb\\+Ł拿2x_{\nI%i[w߷T}|_e_[}h[OkLET>a^#(1D\0ާm2TFPoQ%;+k jcf^Lp0Zp*\\bYc>N	Nm0\\Ou\rP8#|jpMnyo9C9Ö͘pw\ndB9Ąд^˱#	\nC\nKV\\MkZJD,i\rcE'dl>0]/ qs +ma0A'R`,(x;Glv3nT/.0v?&CpR#\n~QOOM;	-fP\rV`\r \r`@x\rXG|G\r  @}&X@\0}\nZ\0@w \$`fJNQD[&\$e!l*,Bz'0 vRf\0rńE|-\nj8f*\$PX\"rNvk*\rl\n#(.P\"@\r\n~X-L\r\r6XQw\0G<~\$»ﰰ.fR%H+tnp긱k-(̋*X7<\r(Z':8(bVeLc@R)ʪ-\$M%%#V*E+	p{>Pl?\0bzʬQ<u2t#\$";break;case"ko":$h="EdHڕL@؊ZhR?	E30شDc:!#t+BuӐd<LJN\$HiBvrZ2X\\,S\n%ɖ\n؞VA*zc*D\r֊L=qvkGZ)ZZg\\;K	XM*dPZ\nF&R(e1vASb+aNs0ZqO\"0V&7#aژJܑ\n\rX!Nf%<v%bB@X1NrYU*eޚ5aZv4+\\d[vd+붅3\\Y`@eNCyHQnēX@EP'a8^%ɜkE?	`e>e\0/D&2ekT9 Ĕ22IBi A؜.S*!A.TT&%eXQNP&\$ʡ;h\n@è61\r(@9c\nb\$Ii@\\юA?,5]\$eHuDbe٨lJP~OYl?\rY./J;,N'/k),d!p:B.Vf\$0\$9C`9.K]df!bӉXBJKiA9:Mp#BTߴCRյlvgQ\nfQ\n\"LbxmwG P0c99x44C(ɐ@4m0z\r8Ax^;p2\rHݯ0w<kp4pER#2TUXD	#hTh|ׄH4\r@7#U\r#ïwTL<-.R\n@̳u@*MƏ<'asK7K\"<~yS,&Р隐)<\"&J^#,7O4^:H.SZ	L*\$x<V/^qҞ Hbh@RT[ڤ\rgAA\r:prA3b0iU ;Uɠ4f 7VójmUB5V_%uQ	@' 77JpNBu%Sΐb<05^3>; S*!TU` z/LvWU!D Y/3̇PĪQez`65)f\$*}<zo\"ug겦DA<'\0 A\nuЈB`Ej!HDV\nHR+IF\"]DxN3[\"H(:HMkiN\\vq#&|dLJ;(gA!+NKOE\\\">RUHaO\\TeNL\"\\eAN:l\$dj0\n\0	F(@gn#Ď7Ƙe`F.x\\A*hSUG0p2A!X2dDI&ҕAH	Y{`,)v\"FV#6M2NJi/&'@)HHvxaJe2`R	Vq9Y0	\$sz^\"\\ [ W^\"\ro丶N@\rQH\$ɰLgu3t|M}:%Th;iK\\jPe^,zi\0bsaR^T4EL+BWfqCJX6C܊g2DdPN[ȵQz%΄>fe46c7e\r.U-ľ%&WNlΫ._WGݜh!\$mzŅX7pr.TFӹ>'(Hpwl({Ug۟ljBc \0[KIvp\r{	iXjj[.J_CZ0as'am&nGozbf1Ӯȯa1Zw1SVgm\rͻQ`?}Kx\nKCԙfohZ2DzH)rR:D~1JwYf\"TGI@;ntO\"\\`J` xJ[xGZyw6j|v۲|(v?ָ[-]ve훬\0DfеH^\"Xa6βUƹa[/zx%S8}Lիz]ڴ2=xBds\0O_x[:z&?u%yrV*k5}NEcYsq}o@^}cSY!yo5_4P\0\0تA\nAo. km(e\\lòQa[FnNʀL^\"[#6<Kgm~af.Ahkv~P|\" (#zf\rV`\r \r`@r\rUGnv'j\r  @wȤU@\0w\nZ\0@q\r`0a&}e\"l晬aIG01 LDLcdLC.+BNP pQb\0lTLPKAd\04fUL^\\!Q,vQP( TRƌPPq\0苠F,nWJOP#秎S6rF;a.18P@b}iQDxRHjE\n (6֭*Ch-L3\"vtdF6JjARB>\0";break;case"lt":$h="T4FH%(e8NǓY@W̦á@f\rQ4k9MaŌ!^-	Nd)!BaS9lt:F%!b#M&Qi3M9\rSq6ib\0Q.Xb'S!;Mf0i1B@p6WBrsJ1ΑJJ#H(kTjzR!aPMD4ekCe֦l̦oK`t&e錧-^pҟ b]'nUQCi5M{Bs/T##\0,0k,9Xbc\nC(0L; 1J#ʍ:h^*謊&k[D(J22<\$\$IPfA0\\4҈1z 㒈02c #L%oJ5%HM@&%R[l2Ȱ6+.ʀiZ.cD0K1#sL(\05LF9B+S<aDR\$aBFm#Ø4;PbP\\#KJ#T	#h7@P\\l0+]+q,3Abh`UUR-H懬ɲ()ލ+l@!S+Ml\\_b_U\rC:\$T8k3C(@7)(c2Т.B<MP]H)nO(JVqj\r!pAl20o\$eÄ	ϹC<)3,\0;@<L2lA`4L0z\r8Ax^;p2\rӶ*8^tc7%#xT3xLӣXD\\,C|x1:\r^-\$@ûiZ1CN,\r/%2*6\"(0I.ű\0P) )%:ZuST!26hKٸ&͈Rjً:\$A\"5bxS\n@Ⱦ`+Z`Yp7\r!Y;<2ƹ/x\$oNDb{i\$A@G[:/#GL\"\\`sa;6l`|,S֣}+iԲ(&P3A捗mKL\r፪t	!,:o(BfevhaO'+PV~ѩ/5|,&c_(jY\"Z̻4,3!90I\$	%<\":_)eZSpV))b\" {\\\r>'1] Dpq.5ѤPL 	!1c;	)ᴯ\"/>QŚI d5lU	â^_-'푢8GI*xI]iEEt&L7<\$k47EuR/Aj\\(%)CjwTM\n\r1YPuk]/`،Le_	V=eQs5ҹfء7IS\\WdToA\\DՍ,:39R&I:؝@ҔJV*i+A)wmݲ2\0&JK~2; .#k\\6^a'0Ъ;jÝI׺{.ܾ&:_\"bv0pHl480aZ@jt)L\$<g[-a\n :Dt8v޾佴㹌yx(>TI*%ZrE	Ćk'rj@+'\\xAʲJO'gpT#:\rث^8uBleE=X+\"bspƊX*=UI+/*q_oJVWWO5I6}|j{f%\"Nn\0@j/ai:>K5ӆf0}c'37GWUٵB~t):BQcP	Wl}W^9M;VZZjRld>ݚ0o߼o/ǽS˪YM.ߖ;-CkG,5 dx6.Em~q.3mS3bf*iZ@Ay޸~IJ8D^'k\rc8J(bp2sMtӈ\"\$w80\rf4m6MeiARjWƆC7GHP(r\rija/1)([^fN+9Խeò[)OP߆~{>s\riV\\G%}>mC׊nɾ?jOtbY5?RX}a	z%iU[@|s!?h>J;CPʎCp6jpbHbX#pRmlj~h0(dcG	殬aϾHnJ0e\$HE<;j	h+dC#	F&ErX<+GNh*\r(D *aA#C\"IN(*  pKq\rTbKk\rjBAPLuDINr1	\r4t0?3kG\$t-@d\rVflPuHȠgJ\"djz'Dm\nZaIj)q#*kq<q#0yØ6\\KDbMCJ\n@)V!¬+FsV4*8.bI-dV&%8j^JPh ȔdAD~Hj(@Ǿ\"#*Ʉ┪|3ƂB*p3S#\\D\n0,b^{\"\0<\nDD\$Tb/B:MnCVBCjem#^{PK4+f\"f	s?R M.Âl\nG\$	rO(\nx~-~?j*!(h6NLJgDb@";break;case"nl":$h="W2N)~\nfaO7Ms)j5FSn2X!o0p(a<MSle2tI&#y+Nb)̅5!Qq;9gF96,FlMSRqGSIea\$#O7#1D9׎cαZQda8Xm(23[,5\\6e*<\$y5f\n\"P[|\n*B䠢i#	X;p3yk2.v0䇟)\n)NVXr949881=/7%;&#R(\r68뛨7*oR1m0)*J9B;Q)<f9ƠPҕ⬆L0JCV݉l#tA-\nrߋI俾TB߈#2^%`IC#:V2w./	T\"N\n\"`@7\$LECz)p7\"6(p<D)~\$\$b(aI[#l\nX#PZR\0P-\rX(#\"b#'8\\\nhH23-I<セh魙g&nIM\"jǌ@ X*8K!(*V*Lj9}w +Y/W\";s#:c+&zP_w8E\0t㾬&#j܆P{.+^PÒ8:iġ\rXDX	sܙ^0\rzR:\rx*(X-p蚮x+,+>%Ձ\0\$\n'(4O7P9p8p{C*F0}(:x*Lj׌-oK4>N7Wr3bkb3j#zE(\\%58sth@S§:VʊM%zzj&9IA%M5*L\$[\n+ވւyl\0S<T+:W]i&^dY念2L;\r͹&\$34bٝE5F̉BbÔ\nn+¦rYj	x|ň@BD!P\"P@(L\"wOa=AȦ\"I\nfON!Wq<;ŭ\n))N󎕈ș3n?A<6.XDXK֬% (\$!?.1\rPTFTlP+#~Z5\"t'2#\n57^[2Y|,Đ'\0rVB^EgaЋ cbppIZu!̕(7F A`'JB2kp<J7J*6Ե*g/L[rH)#) eBƄFis2):4RSEjUf\\dh%%d_}l(Ŷ(an8'BDG߻R'+q\0bւRUk<5:WyRI|TLVa%\"2(q5PwPm{0OB}\$2CkEZhd%س@ঐlT\n57jz[*\$߼:8-QV_MLȿx`\$@TkpұV*X\"%!\"?vBVV3LNMpn,'>RShz6nu\rcYEQ4F5(+EUTr*}?R=+77B+\$\0Nd٢ZYK-\"(7*<mA}4M8WϥbkӈkRŇcLy(6cn9,Ua7Rd-8cD*6%wW\$t[Dhp&./(IwIeA2\rIIFn-%&.ݜ8P侻o i1K7mT\n֬&Y2Ha^SDXh.Y̴,}LBpqtrKiuAp9ɹ.GSa\$g5Y\$5IA/<軟\nX6]-S>ԐN]C3u>܉rƪRFQ+9['w`Ʒ׷Ω߿LGe;{hwr3:<;ꇟ~塣!S}LEμ2qi;ViV]4bJ*DAD\\&.<%H'J:mq!PC\\A<HudrmdBQ,'j4`Ң	%(\\*@A|+\nZ{`7b,aJ߇.oYK#4(\">\$-\"*#<O%xD\"<n @P*nE'%Б?@SjO~3bbӣz̌LE4/-,L(%H䠈Zp`VbR	llm@Čp'@!P.^\"(A-B@l\0*O\nWlP\r˴b`#>q	X	Z,b\n*i(H<'\n +N7l̻LDCbT8	\0@	t\n`";break;case"pl":$h="C=D)eb)e7BQp 9s\r&ybob\$Gs(M0gin0!Sa`b!29)V%9	Y 4I2FSЀm4ǁD(Xa&\0Q)G<zF :O4n2v\\\neBUW\nҷ5't(u6&3@D0\r2T2ΩKYrQoܝVQ3JyCф&0AE<\n*HJMMȏ7c@-'x:һc0T(\rb?:cꎄz4kC4#-EF)	\n\$'>Ƚ\0#_\"c#5HK'O0<Rac8C#\nbè5h  4\"<P!0ءBH2(@ߥ#\$;:H\07\r;+ΠK !lS#<<-h@)\"`7O(ର=13@aEc8/s]phQb*/X>o.KH0TX^]86@`ikX-[+d\r\rlK6`/6;Mq(p5\0)B0]Yr(C攌,` 0R׼#\\6~>10@7YyG(#*4A\0\$\n	9J;OCX@<b.1c._T)pH[92~2d4G0z\r8Ax^;p2-H#8^t7ACxQ3&/YpA#p|Ύa4<q*V\r%I!&br23F)wϲ771Xؠ%fУ\\۴a*U0	p,@\n\n)*؂4aw@`y䝨 A\"7Ç\\\0Z!ܝS<`U30S%h\\\r\n%9HuCb,ЬL̊ H4r:T`P,Jwς_C:V*(0@`F\n\$һҍ606	Āޓ`a잕CAf	A晛ai%S_T'4U؊HzN%[3A?^PA0NC|#!=r]%BG*Itlzѐmr6J!׸&,6Wa^M!f^\nꔀI\"yia\$j?B\n.Ҫz7.0JPyH('éN\$74~W8n!ðIa	g`x%&x;\0ήк15Q%S7jفE+\\MC\0hI;Wtx(BsQ+ߩJSy>7RO;l䪉I\$I\$/DxK#6-7D	d̚R?|}`R6&ڄ\"RZʾ5J%9QY,\\dr\$@2ԊGCyc\"!Ξ0;|hpwb):]yPu\$]}v}&]	Ń>:{o@yWʹ]FxPD	`)pig\0007kP/\nN	B39u]L#Dr~,c@ZjcC\\j! \$\rB06)+/%\06Pu\ne͍ԠH4)xNIIvD²`CВDJ.GАy&JJ[B!4ˆ>h	HhVKV\$8݆A:&(\n~k	+5\"iFh;YSP4aVrPtEv37Sd_MMrq@&Q/T-*vaa\nR`w/J|b5N=fhJ`՚N	\\TjeNu8)6^ްxv~[>Aq\$k\"7 ۴Zp(VXm-uJzuivcsXwdyZޕH{uٹ]39[jٝhv|ϰHZve~x<ŕ?nΐVƐ.d OQv/5:B׺F+QPY,uHЁ%i\\6tChn4h锪\\r(BQZՒA=/(?i+w\0Wh\r̰VC}/XMe<vr3!-\nO\0.'EF\$Fp}EdV٩25#& 5\0lԪp>,0f[ɣx`%\$'\\!H\\en*28Xc\\oj3BRN.n/I	尖-FJ^FTAV_\\LYDf@J5c9\"hs	(ƽOM\rpM/۰jp_QCRA\nJиbmy\rUK(,:>i+&!k;o40Mk+\r\"ʲQX*<m^lFc>Q*A!m-|@J 8ǘom\nCj\n>֪h\\;=bCԲd1 J-<* 07.\r+\"éKY4켰8Klc\rV\rb#\"l E\nd9fblҍb[@\nZ\rF9&@HN(^INvҤ☢jR8]v2r*YI\$\0?#\0#\$@ԅ\0(MQ<6\rr\$R#UR;KV4%\" \$&(F؟#Δ: \r.02B\rRbbQ44 E'Z`. EO5I\rsd-s_8R@JѲ83L8pb&\\Nch,M4,M\n`,#Ļp<=/'I^\n|T\rE,#b,)\"\$DH[9@#nf6N6njY5s[\"a\"C2΀Ia%B'!0hW12,#z4	AB%";break;case"pt":$h="E9jg:P\\33AAD aDyVv4NBu4QPm0sli6̒Ӕc2ЃEL\\?fc	oF9a6DZm&)4&JU9ʁEaJΰap 2]t}je9Ү}j\r5P̙k1gX]L(aIDC0k_Qo,|bf&Θ]Pv2=9PWC{\\o>3#P7;L+[48x2jΕ;lô:K`ƕ	B(CȘީ:K,\\!0Q\00A(CR\$?)!	0B0.ވ+*1Ϛ^%@6\r'NSc01pL'	҄Kj)\r\"1A,F78r׊b(1s-E32LHlʿnT:2U5#u3z(,i@،66-#K'FuCF@S1ZSl@#cZLb#0쁍rf@iDH:R-Yuj.2)2K5AxL2 &~<-!b6°JKNH(ZpbER\rњf9C4.Iw^2h&rV8.ØHjM9p@VD3:t93݅ۅp^.)P2F'#XDXc^0@rǌ75:6:H44*)􀜓\ruk2{>̊@YYC2)aJJ+\rɊF\n9	<B,Gb#=fy.(NJ\nx*TTn0@3sU:C =V>i`=.g7bHctVE\n!yɀ	*3=+`Ԛz˘bOl9]\\V(W\rluR!RJ[Sd)9THU!=@6s@!Y2Dh'(`(+>\nX:q\0RjUȗػ2xg}(ƨPh\r/0޿`y5.eޝ\"H@s[XoY۞*Ŵw4f b@YvP)D\$xNT(@,A\".TV%3&\na#B,	𜓹`*]	!8E\n;\r@Z\rQ39,S,H@\"_f.k4<	d4lxI]\r1ZLU\r\0\n0\rl,!>K?EpDT&_!TSgoa,R\\i;0sTYZr@dT:8^&P& <t>\"Tլ\n2ԇ'ѺHP \rZqGI\\g!*`\\k%Tkcv:tROȋËc+*&&X\$!WVk\0=tS^㬁VhKǀ@V\\z%E蚣ze\"I:Ҥ7s@W%xRb3zIXwTVJA 1fX2x9ZQu\0Xc])\0LZ2y[6XϜŀErcٙra8\\CAo*1 u:EֳO7343T`\$kγ32=2mD#@'\\\$.Ĕè\nBxϜX#4՚Ia\0\"bhNFQJPr4IRQZe\\?L!l=RG<:Ґ&rnΛOG.j*9|\$+UJ+v𮰒TFw(ąuZ#c\nv\n؍bUOa%\0,X9\"Ϭary^ۍsk|ᙘԞHq¹\"AS17A̠ʍS7*{\$Y\rFYyڀ{EoH{IڶvI'V9yU~~L@Us֗\"MqUsO4Rm[t4Od:`ՋҮ(9H\"*(/5`*AVZez`wBJIQCuyU83%9_vhHW3Ҥ[!R^0T%=2?y>zGwN#7&ym/	g#֠o8,Ｂ=sf~T.iO	\n}gf/a]c>ᄂFn:p>d*@&\n#ǣ\03`M&J<b-,H\$OI:k*06tmً,8\rVeLJFb\"00<,&G1g0.4`Z^B\rδm\"v\r7U\nPJB0#CPnD\$Aj%ej僌:IK\n|4^ \roDn7kD0b,at\\B,\00Bf,\\8؃^PpD^lф7\"31*Ê.	`63,H.΁FL:cJe3/1N.qR8m\rgQf8N@1eB-	ox&СZi\"8KΡ	cU,V\"V\nTCӄ,\"\0It%\$og88bā  ! ";break;case"ro":$h="Ed&Ne1NcP\\33`q@a6NH؁7؈3 3`&)lbRӴ\\\n#J2ta<c&! 2|܃er,eΒ9lF9a0z&FC	eVMAb2q`(B8#9q_7I%fNFa%59j!Uܨi8f,igqCrH\n\"]ds`d&\r0}tLr0pVmhE#+!6e0SytqOfesIo귣K~@P+H+	+䑰x&CZ*\n?lP6:L& ҔD@(/aF)x4\rx\n(\rRF\r/J)/C2#:F\nƽ.Oː%;0/K+ܓ86/LpPc\n\"`@8hPC4ϣК\\1@VmA!UAfv`2#h?#8Hw:3T&h-˅{V%zj\r!b\\<9̈1@Ap@>\nһ%~LVht*nK>(JC+݉n뜗y.f6#鮡do\"R(6B(ݳrnxN\"C\n,8Acbʝ0c-2aN4 0z\r8Ax^;rC\\|=RP\$7xE!Lh齋D5A80Or|a:\r	86CLEirIc46_%;9/HP=֧\n2#Lvg4J\".0lR0-MB#Vp(	☨9\$XQ2ЂȇMrk\$Y8h5΋ eijjx\n)8b]!Kdp@)(dp\rmGnJ&aȚQ.PHbЬ\nO-j&J  'l9SLjAE_HzHQJ	.(|,2y	\0KYuBҮ^'\n\" K1.0,ZI|v7S#O!Q\" tNٍ?K@54G|d!PnHtAƽ*K:0\r|Y%4D<qN}VYuJeiB1Ky-Mhi AY,!BЅ%;G@F\0+^HMDD1Ǒ*j2\n\n!䔖XTS4˓\\\r`MC6YLX<ܞuTCH=8&.֔^9,P69cҋZt2Is2mMd6Ee~I3F:ܲj\"Ĕ10bUD5-O*`%UHr3%)Vl5N+W\0MUVQbbgz^et-\0*]IaVJ'R!̋mi`/!>tuR'd#\\FIPQ'V\"?@e&IkK'͍~;ϣ`@	 &2ci8wPbaJ6U߸Jby3̹*VEl}Q|Ƒ^+Xf/FRk8Z4a|}Ķt#%,*xA3'1௙Bȅ25gBOYG2̓ѵebwde%s	k\nR2cbg1M\nsJE&6Mox]R0'\"ojL\rrJLBm\r\",dɕΨ4u}\$X3>W5y7R_;e;H)@ܣ@)fJElù,ג|nz]}lPg=3g@\$%XGaM=w:09yw&P |!jYټ(	;oce\n\nXȾgTZ1I-2LNAQyV.BKyOϧ?Ҵ:[S)edg#OM26\0eh\\4\\Vj7䖖a(/TЬ_y-gnry^Y~֪-RzL	?r󺣤yvw^x̈wnw+E=)ɿHkR~0D=WAХANnTXSQ&7~By5	`Y;<YHzB;s=}j2;q\r~\$oɗu\nBL!o-oC\0/ȳ\07\0N:/Fp \$p06p:6VoRۤlтIV7<hqʀț:ÐP6ʜ[s^WB	l[x@7Ƭ8Pv/.0j5(,PLM&m.\0BCfhD\";fd#ςR)6L/dNHQ(ʘCI(-N;\rLP*F00qP&Q:.\rVc~`־d:4BB,\$BL5Hv\r#\0@\nZF\$)rK`|([@G'#4#..3\rLș(LfbBRHK\"6,Fpec<*P8bn@,%? B*(8:|=#</!BHҝ\rN&=#F|fHcvy%.3%P@ǂj-`w!cld9ʬ8`8-e),z%TB*Hիl?F`@7\0,+'v_iNBB*H4\n\$!6BJlE%hXF~_o?p5NB0[pc/`	\0@	t\n`";break;case"ru":$h="I4Qb\rh-Z(KA{ᙘ@s4\$hX4mEFyAg\nQBKW2)RA@apz\0]NKWRiAy-]!&	pD6}Eje>NShJs!Q\n*T]\$gr59&Q4):\n1 KIIзhIJ6HB?!([&	sD5AWꋬQcCXMe1v6Pe:Cռƚi7\n.,VԻ:,[ӵ7ˑ>2SjbF_#\$@/T:qG%t9gBhCk\n>P&4'\0B@*,\\CC±΢,GOD%Hqi?Jh,ϹKF.+\r\0(PH:ڬ-I\\+)N\n&i@ ʯ@1\$Z??)iAAU\04?zT\$-\"ݠ\n}@P!\0ɴHt!-cIVmEk[kӌ͔W\"b)d2.	uYRi%.̉L\\E)TTK>Kj1I۬/òh6|0չKkń0ѵ#`60P(ZB22\\E\0Rb	͓²RCfWRά'5RMgHjE͓C9-iR0)`AC	`P\\%>	ӥYKWr5\$6m:H6#_o,b#m^Tc=7AHQh+ (+DFj^ ^\$\\f.MBʉusZœ?xxD]bS>0rˡ6xA\\`\\RZNq2r%1#v07)4pCtøoJ2CeT@ f4@/hi\r,A (nC|:L 0 C#-DHm06ÐxaŸ9@oV!7hi6!j#tQV(.ߡ\$vIQ2hIΪgrQ;K3@@\nx).H=C14})sh38lyB\0OH+Da-6\\wShfSLetbmSB@'0NIia')3&JrsLc6&J_@LHA ΛKQQ6-\\rvz{Z%4N\rUrLLCxu<7\0|/x1\0`F\nBbbq`ia1LN</KQe-N3I`uپVnձʑk=GaX\"S̍2AX\r<y`e\rePĔG\$+SEE6@PNDGY`vT\\M--dO+ԠU9\rSB5HTBAdDYb\$\$#!fRhq7\$`\nX'εRגb4P^&skͧ7;UQIpOdJEe0io2]V<M@MŴ){ZʬefE)w_tQc@K\$x&%>i!MEاtyi.!,6xz㐉L+&8P-5lhJ%Y8\nd1\\2|W'#A_F1IP[:bOM2t=՚]{i,	^J+t,-1@FEnam64i`*t,69MHȥdUj]IcԜ,u/5U2l\$\\MKU\\Zs{@MF{/3T\$Z貺M|n.y/Gwv1ʝd\r[p*,g~8(@K	\rv1!RU3 D𷤋(|ma\nD8WZ4/ڊάBIзDjl~uq(=7@KIz| ĳHO7LG|_LIf\$_Ae,rK־n3hZIpkPyX~oYmטt>Is;tZeT8BUmhǨ۾I>#A@xmKq/J{,%xK+jַ^Q\0n9^\"<]x8@@h\r?0ɖ5۰L\$g,lN\$\"M.XjWi-ebBmoflRLb~ΜO0fg\$mR\"XibmZmrDPm13х.LGDDb`ͮTl~8c;	LLÔP9%S꿂2F*P<\nJPŅ~Ε\"Anj\0d	{\reVF^&*PcKo<62FoPUEB,0~P*mrA`{SЫ;|!#lѠ1Zǳm]Q!mLD?@qnN~QM[F\"u룵  2O !2fB\r/\"|\n*^\"m-mSi!d,cY;\$F<g&F%&m5%F\\pxRPuCngI\"R7\"-\r	r&#'<70J˰-p\$FY,2&@p./\rrL\n,SP01nLl2p+\rD%Η0S@ؓ2rn<4QMlE BKpg3u5L6#i\\J\n(A#,V\$#VΧ.μddcF/fɦu&+y\$A<31.l4.LNm|Y\$37[1&{3nR	?g7\nD7@\$)*,PAm,@ES\r8FܡC<4i5CF(%\$\\δLdEBFFG+tmQES[\\̓h=G?bDE!wEt:toD~It%TPErsa2&97??tKQOC\r(!r=4mOI1r\0)#NS\0\$.RjA5&A7jsJ3STI50cTT=2.AK j\"\\Ш%>LU6o:1Ӿ=`m:2/A@-YZ\rt][Ӆ1\$2TBUԚ汧[	P,bD/e`πbg\0\rVBJ,>g{Wt5`(\r @Hң\nprhĆ@NFjW-UI\\oqV6vf&Sif^!^vU*+*#'):E(ѓ\0ְUSJA@,#V:@^9N*HLH0Dmm9gKA\"{G*PJ!B\0 gsjD\r\$aa&=\r\"Au,P%1Լ'ʴʖ@{1lyqKpL鞮or4uweǁMUx\0ʋfHr\0\0\0H5syw3Zt}#xDD\$XA]贗PԒ\rDd^![ДW\"YZehIJ1x^&z+XOrGsըLSRnP^XrOdɐx7tKԆJxKt	rnE+08\0tEB";break;case"sk":$h="N0FP%(](a@n2\rC	l7&P\rhl25rxdB\$r:\rFQ\0B18-9I0=#\0iLALUb&#yD	k&),P9Pjle9)\$ fk4j\\Ye%V*v03[\rR :NS9 \$µ1iH'̠`rb9m2#2\nfm5_/D/6+H6&Ңn96Cn@AB9,8	1J37:c B7D44'|cƫP'h@֍nP,\0ĂL+K̵*PCc:è5pЂ3C(ΘMP|5ޟ3\$NJ8,bb\\4!]I\$<Lc ͋p4cp`0p&F[\$K #0#<e|H\"A,fض9R6\"PP&18bHڍ2 P<\\2@MeV\"U~H6Cgc8V0HH˄:'Ep7i@!bX3\"v,W`wl/1:B;F*5\ruZ2iohAH<ng.YV°K\$լSdSck;Mb +S\"9蜪L2c,0z\r8Ax^;r6\\zsS	ΠU3<818SXD\\Cq^0@B7\"R 6	蔭r1#R1'3R2QC\rolrlXm ^y[a\0P)H[iwYԛ`-a/QK[+xƔRb[E\$SnxS\n@fX\$EDYBtEE1 V=Ř:W~3V#BJB\n=@[F,)A)\"*.]/ccPr\$9B_ka~ c(VMCh^%ZC예\"		d3!h䦂EЃltP	y澧Jq#̩0آPe4	ቓ(ubVUh*2P\re#	u͝/^Io|2rRède05 \0S1a0\0U\n @D0\"dXL8*y(v\$n(	)?掦êc\$'```z#sCUn@PK; G\n UK#DwIƛ:p\rHAJ|:\$C\n<w3PhX2'^TtLc!S\\.U##yYuü7dteDԈV8)Bqo:H]WdG	Y\r'HO\0`ȳ4{=47_y()PTUt䶁իǦMJlp\\mҰ\\m7JLz\r7nd=>]o5dS`,<6jV\0/TX\$j~q_}/\0'<L!2J)SF\0-٘C]ꔸ)M(T);0F(2R80uXƓqSh|\na:٤٧E񡳕:O\$IdRxJ	W	%+{R^!-0^\\pZjD皘)ԫ(IHVW\n\$ДJbkt:@Ҿ.!ӯbpjY\nF!kb(Ј%(V2NԑDk:eM	Ge&Թ#fhrSFr@1N1'cY嘇H!:3M]f\"`#AҮCa۔!PxMz\n\nѠb8Uݻ(I4>e@Ï4I6?Foq?ڙG~Ak\\W!e\r3֦JӟPEF)G7cd-\$H\\\n(n+7&_9)yMEtRL:{m)bow20#,98'mF{dV\\~V7C\"oU!\"ʹAʲILͫWɚU9OO?h\nZ9#E_Za\r!~LVuQ(3#kb{kȱ+1RSZ~*#⨸axo4}f(B/\n1>/\"\0-Lj(\r\0Dk20fbb\nRg< \$|D!z%D g'O* jD6\".nv\rЍNCLjS\"DaB\nDM)+*e\$2Ol='4獉K\rN3a	,\$jC'0H.\n-7OO6c\rp\n A̮!N6# /3\0PP2GZ>C|9\r̴#\\cdG0XC0|?1TOEbVNR#3|@c`@EpJ,?30r`l+'Kq֓\0% \$LI:@(#\nW#>B3\\%@Л\rV\rf:\rdhkkH9BjZ\"gXäkq4@#hf Z3B6-\0%DK++(\")B@x(rÍ_#\r#>`{L]Fق2D\$*L\0#Q/\npMc#C&@\r(1D+rZ 3\n{+#tS4\\ܣ03Mm,Rp0-bp'*|\r\0ꘀ\rLx0O/.BxNС \"T(;;rL`\nKh7&mϤ[sx;=3#Ľ`0ŷ-0C3,I|N3H*\$'*,ܦtW5SBR\nU8#	\0t	@\n`";break;case"sl":$h="S:Dib#L&H%(6l7WƓ@d0\rY]0XI \r&y'̲%9JnnS鉆_0Thg4Ǎi1b2%\0Q(z՜\n(h@ug̒|TxvR)t&fKwS15M'A;MU0uXDTiV	\n&d[9m2PN6f\np]gh\r97Ue6<L=9{'ma\$?(:%5)L=1+023(BnB,C'\r&29&c\"*rŌIl0Ԓǡkı[2 P:X9SQJ5Òx;JC\rCz	Hx>b֌ܣIC6D<2hZA\0(ȃC9+!+0-N*N.&//1¨71eh#uBޤg@JTTcq\0.cD=!bBPRH?7>0[:%s2;\0ת0@RH8x52O)%]hXJ?MJ?u`9 m;LX<4&3:t㾔L9ڠØ7xE@C;W&A6<:x2#U*\"Hj^\rD*VQJ41D	ɸ\$\n\0P(킛wߒ&)j3CT=*rbh-z0=kX!Q9(*r|_)Olm=rArx@*iⰈZ<ꗋ#xPr?ǃU1 F`HY/^Dͨ-L% xvNzS\0#ƪ\$paò#fpHOY\$lAu?\r8n\\۝)nt1L'2fPZAJ'YJQ?a܅5N࠱i>dBM%P: @uK@(Hy:䡳'S*G9) *\rBL)0@(*3Z	Jv!O,x<E!>Uf!@PK8tGM2Zaag)IIcW\$Juw+\rta^eg5\rSt1xjéXj1	{xp.7tgHŸtY2J\\ĥ\raaa&0pS2'\"ƌr* ǂJ-Bᖤ4\rOP5c	zuxd5efĊ9ʼ\0Vj(\nBǪ[\"m٫dkJUV`ZڷW\0k]C4sPj.:[ŇCV&!W(}cqؿMC.VX\r ʨ,*|bIytۋ\nx)AmKE}ֶ0+{llqWAP	Q,+՘x\nk`)ٚ}l 1Ls7:	\$dRXfyL_l)Nm9%BwSWKkW+D%Qq?#匼Sz\\!o']\$YRzó`(+_0_h?d\nZR[v%O C\$7MM7O##Ģ@%H,:\\ceK1NȪ?8E`P`pf/IoZ-!i+cD0AvΕ\$O#N<Y^g\\W\"ΐhbMN=6eH)&ǣ\\\$a=!3ʰ^=hSׯaC%2EΛ*F&w\nأ\r!4to\\cP/pW65BYR+z=+M8gamVKķZ^j{GsnT\n@ruo3Ma5#S\$§5elDSy`̹U\$1)2v*s(lT&mAC2H01uy\n=9T\nM\r8[}_'[3j=/Rl!J^|t7K>MDP^ԯa4K&\r8g3Hk~aIZK|~/ISpY<	0fI8[G!:0>IC\rd7(_wfX}CzMʄ:S\0HVCo+J)HRoX 'k1Iﬆ;NG//p@-j6N60C;F4;/üoT,&'\\R[L\$tpUc+|!N#y\0P.&/Hn680ֆlʳԆnD^Ƹ\noLG06ծNlj^\0X`DbE*MRZ\$L\r1dNE1C\rVK>zi\\}b)%FD Cd\nZ\\\r3EfQ*Konb\nd0\"kLE냬<]#d\nN00j)xbgܱBD@mJօ(\$OcX	R\$F G,5`P\r&HhB(]b{HJD\$:o%U\$k'rpl%rHn1&2n̄&qq\$U`&F6D.B	\$a@<<n5`\"t'}*'+G+qG0L-H,Cq@	MLJ+R;L\rGlJ>20#r\\ݪO.b70#hi ҂b";break;case"sr":$h="J44P-Ak	@6\rh/`P\\33`hEC\\fLJⰦe_DehRƂhQ	jQ*1a1CV9%9P	u6ccUP/Ak\n6_I&N~]3%&h,k+\nHDRIVow>yg	4%UB Z5ŊWi0IA0-y#損m֝G\\b	'hiEƼIS%#XshHIJsNX\$S49(80hJj>&**4삠@F?',*{/H.ѓ\$n8ݢC*oZIN+]悈m܊/3	\$=*B#% !M	C(aEPU̓7:!HEfг|/J12L*LmROÊA\$K ٧	ڕTql(@1T>xH&tAϪ0jR4\n|A	GIS{)\"cP>\r&*2+;UL:%EhK0%%r5v1&ETc*]\$a(P)\$)<:?)!<Atl/j2?j	tM,E+o@ǌ-/%#`9(iw+9Pp@!bwr	)>\0P*(|3ok[FI\"%>	R\"լ]vr˂NXd&窒֢,znNL0c9p9xB4C(ɱ@4y#0z\r8Ax^;p2\rH݅w<wCp4PD3/C`X\"\$6\0Ck|p !4\n|!2\0\rXj2h=#SA~6X@\$\nAX;\$ -mmb!^+UǴNv1'=⨷	:;ES6#i1!1!&J\nR?\$ҖBxS\nhIA-\\MY}Dfk0L+*|S;& è oX y4p@pf\r0`0TB\n9Hv|TdΊ:BhzDÏ	%1oX∑P((!jZSvH4DQ<=D݈+`c|0S9F#!9(EGr, H+(\"i>MHyRN&3͖Q;иAK'fI!U'yR'ZODySZdqOo8!A	LYa\$쭺BIg@_P*P@\n&%jvLA%B(LֻוdfYCoF(˗\n,)/aEY\$99	 'd\"(JLcN(=dgT\r1hD.O\"2v	\\P?\nf3x5S\n,l[iGdyr/\"5H7J*VvLiV֣I17+VvMJywXaj2,!iۥEm?`u&XAr<P[g%ĐP[3p:.LFK~&CS;:xm]uB%!V*Qi2|k:պ	TF[)̲\\nWkp\0ŕfgdcb#9&',Bi&Gr'x.yӞb~|Řg\$˚A>fEb5~Z..V⅔Fp1GE숵*Th3<j5e2ztk-gBuNfWoL̹ΰΊ\"7gң}k䢋c=DS\"J-5m|mehr\$%ZyKiaHL@Xō3/.	L2FC 3K\\!(h7]RL`2Sx\";ݖ,)Hh3H2iA1+Cd.Ӄ5|xIIB݄sEu	Q\";)~`WagR\nw,(Ͼ.?W1客xkݥ2+˕\"SM{2*1\$l Q7]IkxIT+]&h}q\nG2;0ClBf tZ_ц7r|'1}_NJ~//*0yV\$3(EIFcޢ-j^/ La/P,NlvnTD\"Y@8\r,F+mf<FՐJ;D00DHQJ7ZP`\r4P*Ȭ/吢5*0gLP\"/>J^*\\+.F\nV'e(ct,r\$cUYxs**\rY2hW-Wl-XJV!0\\ʺ>f>㫀4^/o]d\"F7uo.>+h\0&C1zq~͑0Ѿ_Md,e:Х1E78,j\$0YqdEq,Y].o!L?0\"q0&#8Z^DwS\0=H;\$\"O&j%%riщ\n(FՆ&Qґ\"P\$&\0FZ;{)1;/%\rrU+2O\"\"L7,%FfN\"/p'RaQ6rb/b/\$l_HR#h:er;07\n350H&e?[\"Qhfdb*@ɒXZHCc'_ gZ9/1'ӘՓ\08M1KMes8+Jo%<t}=H	s	@j`k5q\\,\n!%J bvr\0ăĮ\0Z\0@} ƂOq:6k,9u\n̬\nҴL26l4@M7de@:'hg\0.@qNA2>G~dgH&H@SDCƄa>Q.Xx@.oO*)%P9gaO4MR+Rs/NP-f.2F\0KB -h\\ZniD)H=+T2-UYKWzGLc\$hOŔffŨ*,8\"F(`b,ET*6S0Oc*h4Gd\0uM[:qrQ΅>gu+NcdLMy@\$";break;case"ta":$h="W* iF\\Hd_+BQp 9t\\U@W(<\\@1	|@(:\r	S.WAht]R&\\I`DJ\$:TϠX`*rj1k,Յz@%95|Udߠj䦸ɾ&{,MS_Rj^8<Z+e~`- uLT&R	MHI@bҷ2x:M3IGoe[a\\JQar^)\\jrqȮP\"%r*W@h)\0\n568ځr61aˑBJ`FXFP)7Ɩ Jhf4JКRG87,+J#(|K*J\\){\nG22,+2~)DRA|\"OF+㯨*ʍ\"P#Qϫt+@%ǰt4մ]W2E\\ԵS5CJϣO)jmX@a];@s]ДĮ+sf\$X-:ԨC`'{)̏b=Pp=vwj9scG_ul(Ȥ%v6-=eB&9h)#:q-g9P 82~O~Y]A(/;^ex\\'p&+_\\RsM)qFd9ń61\r*@1#p)\"b[V#ϴhI~G7xv]}[>Wfzt}vkWoI\ny,0L	k\\>.Uv/u]zuȼ~o/tKaN;D/Bme\nI\r:LtpH\"e'aOhйPMj\\O1_<}if{e;s.jfrbAA) R\r9za68ll۰@%3]AZ[kɈ|2ʥ`A1\n\r\\Q0Sdb8R\rBtjSh10k\\N0:#)!F'	E,o\\_Խ\$KE\$*ȶ2\$Uб7'}KM|ݛRU-DhaOj\$	üda<\0\$L\"\r:\0txw@ԆAtNx!Ć41ȆD	B3G:^A`2@t\r00CQ!H[agh03^+h%f\0PP	@GJdt|`)d6&}E\$<Cf-)Iqs!#kJcYSUqUn䡎8Hʄ WzqTQ萔⼈\"\0)FO\naR:uŬ5z\\gs*RF.'Xsܘ.=;Gf@c<4ps@gV|T],O!|Z%Wo@PJEP1[P@q;4r,4(( 2Ñen[ɖQɸ%NlT^ʛ檛\\#RAGSW-`8fSUα5*w\r+|G9!OڔXx5B_*m\nVvXJmX68y-b_bx\n8\ne#`KQ(^P5Pg\r\0SJI<-рM5\"H.r~re_U-?C:IkVtՎ\rưB0V	^w1\n\0\r0c\rh0~9J\\U>\".4D㡍6RHP*] E	j˯؏&:JحXh>_@PHjVn\rΫثb&қ }Dv\n+=5ܣK_@\nS*	D!:ÛR\"QL\\^ۑ\\p/lFXYJE(UUVdo;#aO6xRbRS~U&)\\H\$3\n:zn;a{8xY=\"` )=q|o)>! J%c)oPks\"eUsJKiwcڵ:X h2ƹ9*(hG )_BiQ)\$<SUQOmlUŌJ#GMvo1kpJURdHWkPʱ^X@qp8.򾐾l \naGxoT&,50JObħ p\$\0RK6\0,p.\r&jz/%hth0O&(M/4c\r	p0G,D:cPt0R(0x^~(ϑ\rNP}-pX(P-?%IN-)R:ǉRSLHKŀjP+\nȔʩ1PzoH{#MJId#Lk\rgǍwnfZL\04gHXYT7,NpCd#\"P@PH/`_g	\$1\n&ć8d+`%\0ܢ`HKqj\$q\r24qgFD&'Tc9>>8nZQRZT- \\ѐ\nl6\\NE!N~ȪNS(2ꐰ22*ew +_Rȓ?ƋC,ѯ_8oQ`2O+1.Y	>N&ϛ(O⤽'	\"j R1M-k<y4.-ivOo\0\\3*2xSFBPI0C5 \0 pM-G4~Fn7	\\9QsO:33JG5u,O61;[6{3/*=R.LS=ϦťTF,5.s`R-:wR t	=2=%04(|-AA/Sqsev<3D2C4Q=h_EQ?N%4Hʇ-1x>n!2eVZp*NxQ7:Ff#bUT\0Q6TسN0].gJΓL\\0ҕT/LTi T*ާUF0@8u4ڬQ>1H/ӷFm).܏ċ34N1Bz'OPr{TK\r\0<@F`*Xf0Ty紆p.K\n.LpRZ|L43	RD< QX7\n\0SGYQY3ZOK	QPdT,VwTQ`S5JBeHtFvTOPc:C*MQPQQURIS1SOEf9d84v1,fZQ`܀cKVfO@Qij	5d]E6N诔Sb ֕i>GhPLvM?VPk/9kvk6jSbiYf!/=nXtOR/Gfq,lLOsV	'tS.PU5 f)KhW=NG<m;Vu4vϏm;m[>7Fvg\$Tpj\\xcof;y+~<EmKb/g4+--w҇=n`0]/zT-:֡l4m\rUN|7h7W?5#buFw_@_w4AzrwzXw|VDw|7@P3[~wR=89Ӆ{wvg-oMBRlnߘp{Ü?wC>7G`]v6	ku5c`QrKtojx׫T{qzZlGjk,AWBts%Xp\$RY_yΘuYTxㅸlR		`GA_vAGt%f'K6JGO}j_6sŴSN̌lq,EX9\r2!PkQ<ӄ}Z8|/xQאQyJ[+9tGQq33ҌA(d\rVm\\`X\r\$\n&\r \r +һ`ˊ2J.\np\$+sv1[kJv{oгxXdҙvzBr@ьgqQ	ppqKv&W=J2pW\rr<̺6{Zs(Xe\"\0oVTN/Jaړm	0@dkf71HGpwnC+sd\rA:g8jFxr(ҵgNW+@\\bTf^[%\rC*Xxqf\0\$ qL<Z 3\r X[o.ڍ\\BAd/MQW;rUZ'FxlHj9uDyP<C@Ɩ2W2zXCq(I\$\0IͼT\"%_\nC=,\0F{#MW\$9mT\$!ec9)nPE8[MaE\n\0nVb1v9eA<`	\0@	t\n`";break;case"tr":$h="E6M	i=BQp 9 3!i6`'y\\\nb,P!= 2̑Ho<NXbn)̅'b):GXnOTl&#aA\$5)\0(u6&Y@u=\\Γ\n~d͍1q@k\\D/y:L`yOo:ц9Hc࢙|0:IZe^M;ae,\rrH(S̦aFL4:-''\"mMZ}X rk\0h0:s2Ʉ409HLύ2oQ>:0mZȜ'BP02|:F₉3bc\"lHK<H)/،7Z\r\nO4CH¼@P1p:c\"2SV6Ʋ-Hٴø0@P##ďί39\nE@P%T&;8:T;\r9QJIRȰ2R<b95B\"45)\rqJLNR]DT=O<?81<A\0P!bP:H\\Gڞ2#\\9,䓈C\n@W/\"|:v؟_Ϟ`>92X\r32WM֌=*`9Z86J	v;<2\\a.4c0z\r8Ax^;p2 #r<\$8^c\"7 \0^Nn:iȹa|\$^0\"|ep \r#@8#͞72PЉc7JCɄ(a#_?\n4H:\n-'/K&*ؓie l-9ҕHAy	Hi>u6R/rO\rZlϏ,(	☨ף6?ݏ,4Hjp^:-v|(<۠C9S2PG\n\n`\$d7`Cz\rm zE0Tt30I\\sa<9eݨIHfjGL8<p衬45	b!5@nJJd9Ј؟qjZ]XA1 etbav{,Cc\$#\0jJEG<RʑmSI\nuB&]J8Rs-DԤexya<P*U8eˤG㢺Bg\0\n@T\"+e|qZX0o,,Nv8bkܰzL5EףY`'`@C<& #`@I7̩ב7I`!+t.#GczJ]\n`T#K0\$'5#\0ٱ̦QSSqy(gDVJ]+ʎfgt˒m5'љfM`FW|1D2#&Z#e_X2Ifd \$)Tg]ש?U<c`pPr݄CvSD(Z}tr!cD'cze;`-YcR#\\8K\ratғEjxF'R:ͅhK%䳲NΑԬp)RDrVR۟6\\)	=SdEEQE|	nd^\\IRI,k@0p#ؘ?Y2)'eHHdyPnb`ɂiL&dgqp7\$a,\\M5#JB\r3\\Y\rpt̄^3Cptٻ<ɺv4(Q=H ZF.geu\">f\0AqQ3aTPE\0@rnYyoQD=<21	dj򇪐:%5=T\"?\$l.t-բ46O\0,SFVfұ6/kd}'݁(pXmh00MS=A\$xZls7*޻XI.&\r)>i\"dJT6]+\0K	p:\\]bkb18_8ߕnK%F4\r\$5SSIPCqDŲ	¹\\K5:λb8.@읁0jLU`ozySvo9X<cK]#f3Mʜ6&{Vav`\nGrtSUiH'\$s8J#>ʌbxG})mX|3|uRޫ|5)=k>'䰏-)]vfLY\\K&f]쮲.f*lwbzf\$Lp\\m\$K^h>k \"\\nb#Tڰ,\"CC{ʢ%0`c\rV>GLRH:\\& `\npa,,pZ݉#qEhM\nE\ny\0΅&@xEZ7&j+>ЈP^&Lodf'RQfZ4wH\"0HV6\"~.`/\0\\%*dY#CR'/0&xHBqX c\$\"0\nd%2ꎆΪun;0Ip͂JӉPM*M/YL@eEDdFHL#@A`b`m*lNIY\r֥J'.NJ,JR<\r`ņh7Dsb\0C@ ";break;case"uk":$h="I4ɠh-`&KBQp 9	rh--}[ZH`RdbrbhdZGH\rMs6@Se+ȃE6JTdJsh\$g\$Gfj>l]H_FM<hѨ*6J29<Oq2y,*Q=\$*!`,beqQHZeM\\eE3¯cbhR뽭E%@q/AHx4еq#sauƙ\\{ YK3E\$E4I=JGE\noɡ	; bOjZ \0Nl<,12(cIÍ:b)QzBѪV^4RBl@NG#H\n+2k%hƂS/ q\0(j5h.<ؤG'4K)-(3nK6%	)+%ecJ\"ɬIxN̡Q-C#--!, hSNMxVtƽb4m:ŬLڼKY/R&\nJ]D̜9H| h=dҌ;sB06\r\00C`ʌc\nbFty7tIK'!ԑ?+)US2&):tB|\" ͮB9#B]\r*Wc;*IW&\r\rs\\ܖVQWՑCE[Xɤ9D4{l.Z]a.c`910@!bu\$C 尮2,-OHo/21	J./\\;SR!򴝂6sj33Q²cצ֓epmJ7*˯jt(S0{͎d)0c99xO4C(ɾ@f4@/hi\rϬ? (nC|K0 CDHm6xa0CPz־Ht}6l#5/_Ҁ\$&`@@PMsnX(,8SQ6Ш#\nx	֣Bk\\_DA\n#(ENDT(v^P,A[ixO9ޚTqG'CZӚ#o<[M)4ȾTYJryK/H!HyY2{h.91κʓflpToXA\r:0A30i_@;P!OdTI9FXv\r_&lיl%3t1Y-e<7%ݙx-5nf\$0MӦ3\$%N)Ukby'MnGu8`Qd,SzH6u~=P&ݮbAh\\g^i5.&6fQi\na%t7:,\"+	`fDUuhyuj蒻c>`'2|CBU0c@Jri1JdsW,^K\\СhH*b.bD)Ή]r\nQ=ǃIrNjQoHji1UaM	A s,qk8h#ZTVLc=-jӵV	)z M1=j-.1kUa\rZ\njl1И&RGT(`FEIS%+МwQ.m+[0e N<ե:E\\q\$RZĳ#pH9Þ>E|/hT:KW0fO=F?4G\n50dĩv'L#5\n>g(CKg!IDdՔ+WhO%p}@y'V]^TօC[8/כ<)R}Ė(MAk\rMSh\r{u.eiC_6[~IH6/en]2{3:TT\\x.Urk8OֹK\nF\$|l\",:|Y;&ʸz^u{6u;yCo1څy*d'%MϜqRR(V#m׽zT!,dhW]wnnBiLκziVG^w˓QHD	g1K_RͭlƎwO\0h \r8 AW'k\"OP_R\rѯulWK?dsG\0Bta1sI=Cౘ([<^\$b\neQxsk#5ǣOcA*sAi&TEȺ_ⶴ\$R\\yc\05	\"+uFl.dd삒E/Ȫo  i;.6!2\nZ!k@RP @g*xF\\@cʙ6pfcRjJcP{\nI9\nk4bLľpgJǥeNdPePFiCMiJRLBJBexdnܝG\\mvؑmdʑv/m5\$6(;P9{Io\${q VKP**.')DZʍ?&	\r϶pĳ1!l;qAX~#dg().\$IL\$nu'EoKTupS	*D\"nygG2F:Bg<OѦQLFlc\0%派Q2\r	0`Ą&0F,JB2tOe(,NkrR'*х1,0bҔ,votQ0Y)F乃fḚt~?#LwMk&VSKpO(cб\"A',M#3krhw%Q3RbC3J4Ƥ,ZV6A3\$+rK0x@:H*n.>:I]+4:aS+&2;b)+/rҐ=<G>s1[2rpJc7)»>YLSBdU'_\$l+7GA/A<C<2^EI22NBьF>T5=PG_G.34aJD\\fg8F z^ep\nhvSIL0LJMMDT=MSLrr>Zf&%l*¬ӁJd4Q4)QR3ýN5)Ԅ\rQOm`rLP3R\n8?+Ժ t\$*'E\r} @H`\np2h@ͬfsP<h<OYGD&͔ҳZEճ\\\"Cb@\$Ine-`Kh.j+RZDBR{[#x7*ͣV(ܙiAJQ]cr54d 	VD\0~Ea4pΦVʬΏ=0nt8{Bl..g]g6`bnEJYhQd;PGGP q.;B@qL䶲֤rG,&{[_XIVP>t[AՁ%%Mx賉 ՅvRR@BĜ6βd^oVNgK,1h4c	/;Fc&qPst+?n/9+;S=\0[pwc{";break;case"zh":$h="^s\\r|%:\$\nr.2r/dȻ[8 S8r!T\\sI4brЀJs!KdueVDXTNTr}ʧEVJr%СBS^t*ΔT[Ux_\\ۙrRl	@FUPJuBTdBα]S2UaPKRYr}̗[:RJڵ.V)+(MQ`Szsӕ:\0rUꊶK.uSJ*gx-(ڽP e26\n]ni2ԗ0_1@\$seKZX?rZL9H]:\$Oi6Zġrt3_DDT)Myv]%	r%:F9,tĊ2\rE%'\n.\$\\H	i N壼g1k\rq\$rD|LlH 0I*_ͅ2E#`6\01#p)\"aHIg)xC=%/͐	ԧ1Psua7TRsS?G1:A\$ )\nR)řPtfr֤aW/UWt\n P:MFJ\0)B0@9F*IFyH)r/hvI:D.Kq:r,r]V^b%~&0;j8~[Pl	-MDYl2ˉ:@8gC7R@<H2p@!\0ѥD4x﯅6#vzh8^2X\rØ70C8:jHa|\$6탠x!9@4\r@7#F#,K!9	Ls,k,RWPbt\n@0Cr\n:DAlBr`YIn61\\Z-ϑDOQAǲTݠ)*q6I!)\$,/H*^\\,nb\r!)@0iQ;R) 4VA6z:5!ngȢS.Ь=@+]lַhcTxKA[a-0?O{CA8+B,D_whé1N=2C+40얮bZ\"U[.]:?|\"K-D,xA<'\0 A\nIPB`Eg|K8 4եDRG1C5\0U\"LaH9D\0%I}Z-K#\",\"0.Qs<E#)ShbyKyժTaмubcq6+0Ly(	i\ngx\$Oiy~VغNIҳ\$Y_)'<VL*B&D`a(?h`h%|Rt֠H|(D`楔'P	RB?w^\$lt%KHa-U	N|:3-d{\"K%|0S+!\"c\"s<Zr8dۙ'0KBd8-¼[-OK=pI\$F\0\$Eq9*ls\$@*tA6Y*PﶃGnEqf6e,@a\079LQ9x ag 4cT,L{Tȶ:\"Lo1[K2hG~2gdVZ-DRthx4LG\\#5EarG.3\\\r:'!sUH|Bᕱ 8ı^Cȏ\reu4,V#%Mw!UGqlr9S`c1*Pik;d{/d:|笙@`'Q\$#-u<'DM[(*bD(Gأ)ߑU'U)JNCDcwW>lKs	ɪn\"i0-\$#}v͠*ol-H\nf{T`e	K1ۂmuHNb&拴D'O@VB\$uT{[+c7GsNE[4&ݼ%ˤ/1tEq^Ҟ\n6\$6'4Bo&9Iܡ-';'rgϹ;\$V)D=ܟ6'H3u.^k7D|z7_4ꔋs.hi'\$\r[B~mS3\$r(k:0ҽ\n\"HXaBQ&z+PQ`+a406Uuk\r!<:4Q:@\n\nP#p`cA3JPhY+-8/b\0-Զ(T|PJ* l!}PWY/!NBpLpH&Q\$xD\$F:m\n+\nzbXZ9m߬BX\n +\0J\r iH\r`c1Ki[L&¥)`+fd3t82,:De\$\",%G\nX@Z0 -*O\"YC4|,.b6,i`db#v@	\0t	@\n`";break;case"zh-tw":$h="^%ӕ\\r|%u:HB(\\4prneRQ̡D8 S\nt*.tI&GNAʤSV:	t%9Sy:\"<rST.r}ʧEI'2qYdˡBKB=1@:RUwDyD%h<rb)e7&pqiUʣS0wB\nP*iu->L)dZstt4ȅ]lt-\0mM2]*5۝j/VZf\\,	s^C jе-AV%\\Repr\$)`Q@1&Co2.S9t2eJ)!DtĳEQd:FkY`rePi>[b.[Ax턣 @1,P901\ri^,M) D)d8,'!v]!9zW)dq\$2T PʎJALhzNB06\r\00C`c7B&{5YIk	B4ʔi1q-\$MWG;[<uO[@1<[WYXiWªAUDlub-w[!Qc,03\rC`9\"lD& @!bK\r[0YC&^:)rsA	ϙD@)4)~הAQg)*O;!eF`>Kĭ1\"tK@&#.99x'29 \\@4k0z\r8Ax^;p2\rH2Av33^R3/4H8SCk0:x3ØA@'>0A\0BOrĲ,4Z%)T/q	٬L]Y^s(	o}jB!BiIZ[5jN2\")jܜqk.~dE(	☨Y!TO9qM&0FF1@A&\"hoO{s\r1L4@KbP(B0ܓKj°joټ;\"0F\\,̌@'.:XB-qĵptE.Q+R]\",@a\nXJ@\" &B=<ǜ\$wN9պ:D`(;,(Ts\nBPj@r~(]\$41	(%,s7M?äFR%\n	8PT^@,<&(HI#]LIę!cbljQIX\\#:;Q4rD,(2(T)Kg4\"He\\S4(52ȸC^̊UT0A|!0\\Mv&UȹHK)i-xacՂ=*\"ãG ʴغ.-+MyF]'.:ڗ./K5,OQ*hZ\"	02\$Tv ٺMH<b:DxRqv)&zHr3\$~D@=]^>HE':˒&Nz0e-3 (V\"Z xR#]E!1\"Q|'!>31@ n	TQ!]hVU2Z#l5eTtASqfV~(&eCS<ÞJΎbY~a0@@0pA)( 0u,NS\ni*b&п\na.E9y\$Z1 OQpdWpQ-&s{,Ȳo#|.e/kdf3chG#D6F/\\s%k+Dh\rbyJ)2ުQ\"S=[&X#K\niY:N,_cMn?HȴY4\ne*UOO.LWUQ#Mzike7W-&'!kƕh\$#/Ĳ&H\"	px7	\r\rY3r٤k#YT.R<%(_)wqnJi<Zͤ[t!p5d۪hȷ<9.FPi-Gƨ/KqO\"b#QsʓW,KU)Y|	c!ØWAS0rb#OğQ<rhTD\"u[ipiR[qQ|TtMȫބq8S0/\\}Ցg/i0>?f97w\$df\\SV}BΚ駨Ҕs=ĴGx5i\$zkD/5:EKI\0tP{àR!F/HXXG!{\\Gmz#@e\rV`\r \r`@d\r`>t`u@v@6\riĞSf엠Z(0\rvJ(F#B86,X,8x/JKIcdH<GG)gc\n	B.k@.UH,| pBBȍ\$z)X<jfL~o<c@\n6c6@3\0 FvEfMZCIj)8b,H\n06U,k\"/R)p\nvl !B`.Tv8	\0@	t\n`";break;}$xg=array();foreach(explode("\n",lzw_decompress($h))as$X)$xg[]=(strpos($X,"\t")?explode("\t",$X):$X);return$xg;}if(!$xg)$xg=get_translations($ca);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Ke=array_search("SQL",$b->operators);if($Ke!==false)unset($b->operators[$Ke]);}function
dsn($Ib,$V,$E,$cc='auth_error'){set_exception_handler($cc);parent::__construct($Ib,$V,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$Eg=false){$H=parent::query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;if(!$H)return
false;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$Eb=array();$Eb["sqlite"]="SQLite 3";$Eb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Ne=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($pc){$this->_link=new
SQLite3($pc);$Ug=$this->_link->version();$this->server_info=$Ug["versionString"];}function
query($G){$H=@$this->_link->query($G);$this->error="";if(!$H){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($H->numColumns())return
new
Min_Result($H);$this->affected_rows=$this->_link->changes();return
true;}function
quote($O){return(is_utf8($O)?"'".$this->_link->escapeString($O)."'":"x'".reset(unpack('H*',$O))."'");}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetchArray();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$T=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$T,"charsetnr"=>($T==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($pc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($pc);}function
query($G,$Eg=false){$Od=($Eg?"unbufferedQuery":"query");$H=@$this->_link->$Od($G,SQLITE_BOTH,$n);$this->error="";if(!$H){$this->error=$n;return
false;}elseif($H===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($H);}function
quote($O){return"'".sqlite_escape_string($O)."'";}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetch();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;if(method_exists($H,'numRows'))$this->num_rows=$H->numRows();}function
fetch_assoc(){$J=$this->_result->fetch(SQLITE_ASSOC);if(!$J)return
false;$I=array();foreach($J
as$x=>$X)$I[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$I;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$B=$this->_result->fieldName($this->_offset++);$He='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($He\\.)?$He\$~",$B,$A)){$P=($A[3]!=""?$A[3]:idf_unescape($A[2]));$B=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$B,"orgname"=>$B,"orgtable"=>$P,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($pc){$this->dsn(DRIVER.":$pc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($pc){if(is_readable($pc)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$pc)?$pc:dirname($_SERVER["SCRIPT_FILENAME"])."/$pc")." AS a")){$this->Min_SQLite($pc);return
true;}return
false;}function
multi_query($G){return$this->_result=$this->query($G);}function
next_result(){return
false;}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($G,$Z,$y,$C=0,$Cf=" "){return" $G$Z".($y!==null?$Cf."LIMIT $y".($C?" OFFSET $C":""):"");}function
limit1($G,$Z){global$i;return($i->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1):" $G$Z");}function
db_collation($m,$Xa){global$i;return$i->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($B=""){global$i;$I=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($B!=""?"AND name = ".q($B):"ORDER BY name"))as$J){$J["Oid"]=1;$J["Auto_increment"]="";$J["Rows"]=$i->result("SELECT COUNT(*) FROM ".idf_escape($J["Name"]));$I[$J["Name"]]=$J;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$J)$I[$J["name"]]["Auto_increment"]=$J["seq"];return($B!=""?$I[$B]:$I);}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){global$i;return!$i->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($P){$I=array();foreach(get_rows("PRAGMA table_info(".table($P).")")as$J){$T=strtolower($J["type"]);$vb=$J["dflt_value"];$I[$J["name"]]=array("field"=>$J["name"],"type"=>(eregi("int",$T)?"integer":(eregi("char|clob|text",$T)?"text":(eregi("blob",$T)?"blob":(eregi("real|floa|doub",$T)?"real":"numeric")))),"full_type"=>$T,"default"=>(ereg("'(.*)'",$vb,$A)?str_replace("''","'",$A[1]):($vb=="NULL"?null:$vb)),"null"=>!$J["notnull"],"auto_increment"=>eregi('^integer$',$T)&&$J["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$J["pk"],);}return$I;}function
indexes($P,$j=null){$I=array();$Qe=array();foreach(fields($P)as$o){if($o["primary"])$Qe[]=$o["field"];}if($Qe)$I[""]=array("type"=>"PRIMARY","columns"=>$Qe,"lengths"=>array());$Lf=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($P));foreach(get_rows("PRAGMA index_list(".table($P).")")as$J){$B=$J["name"];if(!ereg("^sqlite_",$B)){$I[$B]["type"]=($J["unique"]?"UNIQUE":"INDEX");$I[$B]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($B).")")as$vf)$I[$B]["columns"][]=$vf["name"];$I[$B]["descs"]=array();if(eregi('^CREATE( UNIQUE)? INDEX '.quotemeta(idf_escape($B).' ON '.idf_escape($P)).' \((.*)\)$',$Lf[$B],$jf)){preg_match_all('/("[^"]*+")+( DESC)?/',$jf[2],$Bd);foreach($Bd[2]as$X)$I[$B]["descs"][]=($X?'1':null);}}}return$I;}function
foreign_keys($P){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($P).")")as$J){$q=&$I[$J["id"]];if(!$q)$q=$J;$q["source"][]=$J["from"];$q["target"][]=$J["to"];}return$I;}function
view($B){global$i;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$i->result("SELECT sql FROM sqlite_master WHERE name = ".q($B))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$i;return
h($i->error);}function
check_sqlite_name($B){global$i;$jc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($jc)\$~",$B)){$i->error=lang(11,str_replace("|",", ",$jc));return
false;}return
true;}function
create_database($m,$e){global$i;if(file_exists($m)){$i->error=lang(12);return
false;}if(!check_sqlite_name($m))return
false;$z=new
Min_SQLite($m);$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$i;$i->Min_SQLite(":memory:");foreach($l
as$m){if(!@unlink($m)){$i->error=lang(12);return
false;}}return
true;}function
rename_database($B,$e){global$i;if(!check_sqlite_name($B))return
false;$i->Min_SQLite(":memory:");$i->error=lang(12);return@rename(DB,$B);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($P,$B,$p,$tc,$bb,$Tb,$e,$Aa,$Ee){$Ng=($P==""||$tc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Ng=true;break;}}$c=array();$we=array();$Re=false;foreach($p
as$o){if($o[1]){if($o[1][6])$Re=true;$c[]=($Ng?"  ":"ADD ").implode($o[1]);if($o[0]!="")$we[$o[0]]=$o[1][0];}}if($Ng){if($P!=""){queries("BEGIN");foreach(foreign_keys($P)as$q){$g=array();foreach($q["source"]as$f){if(!$we[$f])continue
2;$g[]=$we[$f];}$tc[]="  FOREIGN KEY (".implode(", ",$g).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).") ON DELETE $q[on_delete] ON UPDATE $q[on_update]";}$v=array();foreach(indexes($P)as$id=>$u){$g=array();foreach($u["columns"]as$f){if(!$we[$f])continue
2;$g[]=$we[$f];}$g="(".implode(", ",$g).")";if($u["type"]!="PRIMARY")$v[]=array($u["type"],$id,$g);elseif(!$Re)$tc[]="  PRIMARY KEY $g";}}$c=array_merge($c,$tc);if(!queries("CREATE TABLE ".table($P!=""?"adminer_$B":$B)." (\n".implode(",\n",$c)."\n)"))return
false;if($P!=""){if($we&&!queries("INSERT INTO ".table("adminer_$B")." (".implode(", ",$we).") SELECT ".implode(", ",array_map('idf_escape',array_keys($we)))." FROM ".table($P)))return
false;$Bg=array();foreach(triggers($P)as$_g=>$mg){$yg=trigger($_g);$Bg[]="CREATE TRIGGER ".idf_escape($_g)." ".implode(" ",$mg)." ON ".table($B)."\n$yg[Statement]";}if(!queries("DROP TABLE ".table($P)))return
false;queries("ALTER TABLE ".table("adminer_$B")." RENAME TO ".table($B));if(!alter_indexes($B,$v))return
false;foreach($Bg
as$yg){if(!queries($yg))return
false;}queries("COMMIT");}}else{foreach($c
as$X){if(!queries("ALTER TABLE ".table($P)." $X"))return
false;}if($P!=$B&&!queries("ALTER TABLE ".table($P)." RENAME TO ".table($B)))return
false;}if($Aa)queries("UPDATE sqlite_sequence SET seq = $Aa WHERE name = ".q($B));return
true;}function
index_sql($P,$T,$B,$g){return"CREATE $T ".($T!="INDEX"?"INDEX ":"").idf_escape($B!=""?$B:uniqid($P."_"))." ON ".table($P)." $g";}function
alter_indexes($P,$c){foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($P,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($R){return
apply_queries("DELETE FROM",$R);}function
drop_views($Wg){return
apply_queries("DROP VIEW",$Wg);}function
drop_tables($R){return
apply_queries("DROP TABLE",$R);}function
move_tables($R,$Wg,$fg){return
false;}function
trigger($B){global$i;if($B=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$i->result("SELECT sql FROM sqlite_master WHERE name = ".q($B)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$B,"Statement"=>$A[3]);}function
triggers($P){$I=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($P))as$J){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$J["sql"],$A);$I[$J["name"]]=array($A[1],$A[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$T){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$Qe){return
queries("REPLACE INTO ".table($P)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ROWID()");}function
explain($i,$G){return$i->query("EXPLAIN $G");}function
found_rows($Q,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($zf){return
true;}function
create_sql($P,$Aa){global$i;$I=$i->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($P));foreach(indexes($P)as$B=>$u){if($B=='')continue;$I.=";\n\n".index_sql($P,$u['type'],$B,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$I;}function
truncate_sql($P){return"DELETE FROM ".table($P);}function
use_sql($qb){}function
trigger_sql($P,$Rf){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($P)));}function
show_variables(){global$i;$I=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$I[$x]=$i->result("PRAGMA $x");return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$me){list($x,$X)=explode("=",$me,2);$I[$x]=$X;}return$I;}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($mc){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$mc);}$w="sqlite";$U=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Qf=array_keys($U);$Kg=array();$le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Cc=array("hex","length","lower","round","unixepoch","upper");$Hc=array("avg","count","count distinct","group_concat","max","min","sum");$Lb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Eb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Ne=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Wb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($M,$V,$E){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($E,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ug=pg_version($this->_link);$this->server_info=$Ug["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($O){return"'".pg_escape_string($this->_link,$O)."'";}function
select_db($qb){global$b;if($qb==$b->database())return$this->_database;$I=@pg_connect("$this->_string dbname='".addcslashes($qb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I)$this->_link=$I;return$I;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($G,$Eg=false){$H=@pg_query($this->_link,$G);$this->error="";if(!$H){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($H)){$this->affected_rows=pg_affected_rows($H);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
pg_fetch_result($H->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($H){$this->_result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$I=new
stdClass;if(function_exists('pg_field_table'))$I->orgtable=pg_field_table($this->_result,$f);$I->name=pg_field_name($this->_result,$f);$I->orgname=$I->name;$I->type=pg_field_type($this->_result,$f);$I->charsetnr=($I->type=="bytea"?63:0);return$I;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($M,$V,$E){global$b;$m=$b->database();$O="pgsql:host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$O dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$E);return
true;}function
select_db($qb){global$b;return($b->database()==$qb);}function
close(){}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$i=new
Min_DB;$mb=$b->credentials();if($i->connect($mb[0],$mb[1],$mb[2])){if($i->server_info>=9)$i->query("SET application_name = 'Adminer'");return$i;}return$i->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($G,$Z,$y,$C=0,$Cf=" "){return" $G$Z".($y!==null?$Cf."LIMIT $y".($C?" OFFSET $C":""):"");}function
limit1($G,$Z){return" $G$Z";}function
db_collation($m,$Xa){global$i;return$i->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($l){return
array();}function
table_status($B=""){$I=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($B!=""?"AND relname = ".q($B):"ORDER BY relname"))as$J)$I[$J["Name"]]=$J;return($B!=""?$I[$B]:$I);}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){return
true;}function
fields($P){$I=array();$va=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($P)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){$T=$J["full_type"];if(ereg('(.+)\\((.*)\\)$',$J["full_type"],$A))list(,$T,$J["length"])=$A;$J["type"]=($va[$T]?$va[$T]:$T);$J["full_type"]=$J["type"].($J["length"]?"($J[length])":"");$J["null"]=!$J["attnotnull"];$J["auto_increment"]=eregi("^nextval\\(",$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$J["default"],$A))$J["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]);$I[$J["field"]]=$J;}return$I;}function
indexes($P,$j=null){global$i;if(!is_object($j))$j=$i;$I=array();$Zf=$j->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($P));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Zf AND attnum > 0",$j);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Zf AND ci.oid = i.indexrelid",$j)as$J){$kf=$J["relname"];$I[$kf]["type"]=($J["indisprimary"]?"PRIMARY":($J["indisunique"]?"UNIQUE":"INDEX"));$I[$kf]["columns"]=array();foreach(explode(" ",$J["indkey"])as$Uc)$I[$kf]["columns"][]=$g[$Uc];$I[$kf]["descs"]=array();foreach(explode(" ",$J["indoption"])as$Vc)$I[$kf]["descs"][]=($Vc&1?'1':null);$I[$kf]["lengths"]=array();}return$I;}function
foreign_keys($P){global$he;$I=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($P)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$A)){$J['source']=array_map('trim',explode(',',$A[1]));$J['table']=$A[2];if(preg_match('~(.+)\.(.+)~',$A[2],$Ad)){$J['ns']=$Ad[1];$J['table']=$Ad[2];}$J['target']=array_map('trim',explode(',',$A[3]));$J['on_delete']=(preg_match("~ON DELETE ($he)~",$A[4],$Ad)?$Ad[1]:'NO ACTION');$J['on_update']=(preg_match("~ON UPDATE ($he)~",$A[4],$Ad)?$Ad[1]:'NO ACTION');$I[$J['conname']]=$J;}}return$I;}function
view($B){global$i;return
array("select"=>$i->result("SELECT pg_get_viewdef(".q($B).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$i;$I=h($i->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$I,$A))$I=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($I);}function
create_database($m,$e){return
queries("CREATE DATABASE ".idf_escape($m).($e?" ENCODING ".idf_escape($e):""));}function
drop_databases($l){global$i;$i->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($B,$e){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($B));}function
auto_increment(){return"";}function
alter_table($P,$B,$p,$tc,$bb,$Tb,$e,$Aa,$Ee){$c=array();$Ze=array();foreach($p
as$o){$f=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $f";else{$Rg=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($P!=""?"ADD ":"  ").implode($X);else{if($f!=$X[0])$Ze[]="ALTER TABLE ".table($P)." RENAME $f TO $X[0]";$c[]="ALTER $f TYPE$X[1]";if(!$X[6]){$c[]="ALTER $f ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $f ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Rg!="")$Ze[]="COMMENT ON COLUMN ".table($P).".$X[0] IS ".($Rg!=""?substr($Rg,9):"''");}}$c=array_merge($c,$tc);if($P=="")array_unshift($Ze,"CREATE TABLE ".table($B)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Ze,"ALTER TABLE ".table($P)."\n".implode(",\n",$c));if($P!=""&&$P!=$B)$Ze[]="ALTER TABLE ".table($P)." RENAME TO ".table($B);if($P!=""||$bb!="")$Ze[]="COMMENT ON TABLE ".table($B)." IS ".q($bb);if($Aa!=""){}foreach($Ze
as$G){if(!queries($G))return
false;}return
true;}function
alter_indexes($P,$c){$k=array();$Fb=array();$Ze=array();foreach($c
as$X){if($X[0]!="INDEX")$k[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$Fb[]=idf_escape($X[1]);else$Ze[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P)." $X[2]";}if($k)array_unshift($Ze,"ALTER TABLE ".table($P).implode(",",$k));if($Fb)array_unshift($Ze,"DROP INDEX ".implode(", ",$Fb));foreach($Ze
as$G){if(!queries($G))return
false;}return
true;}function
truncate_tables($R){return
queries("TRUNCATE ".implode(", ",array_map('table',$R)));return
true;}function
drop_views($Wg){return
queries("DROP VIEW ".implode(", ",array_map('table',$Wg)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$Wg,$fg){foreach($R
as$P){if(!queries("ALTER TABLE ".table($P)." SET SCHEMA ".idf_escape($fg)))return
false;}foreach($Wg
as$P){if(!queries("ALTER VIEW ".table($P)." SET SCHEMA ".idf_escape($fg)))return
false;}return
true;}function
trigger($B){if($B=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$K=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($B));return
reset($K);}function
triggers($P){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($P))as$J)$I[$J["trigger_name"]]=array($J["condition_timing"],$J["event_manipulation"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$Qe){global$i;$Lg=array();$Z=array();foreach($N
as$x=>$X){$Lg[]="$x = $X";if(isset($Qe[idf_unescape($x)]))$Z[]="$x = $X";}return($Z&&queries("UPDATE ".table($P)." SET ".implode(", ",$Lg)." WHERE ".implode(" AND ",$Z))&&$i->affected_rows)||queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")");}function
last_id(){return
0;}function
explain($i,$G){return$i->query("EXPLAIN $G");}function
found_rows($Q,$Z){global$i;if(ereg(" rows=([0-9]+)",$i->result("EXPLAIN SELECT * FROM ".idf_escape($Q["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$jf))return$jf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$i;return$i->result("SELECT current_schema()");}function
set_schema($yf){global$i,$U,$Qf;$I=$i->query("SET search_path TO ".idf_escape($yf));foreach(types()as$T){if(!isset($U[$T])){$U[$T]=0;$Qf[lang(13)][]=$T;}}return$I;}function
use_sql($qb){return"\connect ".idf_escape($qb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$i;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($i->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($mc){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$mc);}$w="pgsql";$U=array();$Qf=array();foreach(array(lang(14)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(15)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(16)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(17)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(18)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(19)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$U+=$X;$Qf[$x]=array_keys($X);}$Kg=array();$le=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Cc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Hc=array("avg","count","count distinct","max","min","sum");$Lb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Eb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Ne=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Wb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($M,$V,$E){$this->_link=@oci_new_connect($V,$E,$M,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($qb){return
true;}function
query($G,$Eg=false){$H=oci_parse($this->_link,$G);$this->error="";if(!$H){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$I=@oci_execute($H);restore_error_handler();if($I){if(oci_num_fields($H))return
new
Min_Result($H);$this->affected_rows=oci_num_rows($H);}return$I;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=1){$H=$this->query($G);if(!is_object($H)||!oci_fetch($H->_result))return
false;return
oci_result($H->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$x=>$X){if(is_a($X,'OCI-Lob'))$J[$x]=$X->load();}return$J;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$I=new
stdClass;$I->name=oci_field_name($this->_result,$f);$I->orgname=$I->name;$I->type=oci_field_type($this->_result,$f);$I->charsetnr=(ereg("raw|blob|bfile",$I->type)?63:0);return$I;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($M,$V,$E){$this->dsn("oci:dbname=//$M;charset=AL32UTF8",$V,$E);return
true;}function
select_db($qb){return
true;}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$i=new
Min_DB;$mb=$b->credentials();if($i->connect($mb[0],$mb[1],$mb[2]))return$i;return$i->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($G,$Z,$y,$C=0,$Cf=" "){return($C?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($y+$C).") WHERE rnum > $C":($y!==null?" * FROM (SELECT $G$Z) WHERE rownum <= ".($y+$C):" $G$Z"));}function
limit1($G,$Z){return" $G$Z";}function
db_collation($m,$Xa){global$i;return$i->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($B=""){$I=array();$_f=q($B);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($B!=""?" AND table_name = $_f":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($B!=""?" WHERE view_name = $_f":"")."
ORDER BY 1")as$J){if($B!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return$Q["Engine"]=="view";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($P)." ORDER BY column_id")as$J){$T=$J["DATA_TYPE"];$vd="$J[DATA_PRECISION],$J[DATA_SCALE]";if($vd==",")$vd=$J["DATA_LENGTH"];$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$T.($vd?"($vd)":""),"type"=>strtolower($T),"length"=>$vd,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$I;}function
indexes($P,$j=null){$I=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($P)."
ORDER BY uc.constraint_type, uic.column_position",$j)as$J){$Sc=$J["INDEX_NAME"];$I[$Sc]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$Sc]["columns"][]=$J["COLUMN_NAME"];$I[$Sc]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);$I[$Sc]["descs"][]=($J["DESCEND"]?'1':null);}return$I;}function
view($B){$K=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($B));return
reset($K);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$i;return
h($i->error);}function
explain($i,$G){$i->query("EXPLAIN PLAN FOR $G");return$i->query("SELECT * FROM plan_table");}function
found_rows($Q,$Z){}function
alter_table($P,$B,$p,$tc,$bb,$Tb,$e,$Aa,$Ee){$c=$Fb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($P)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($P!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($P!=""?")":"");else$Fb[]=idf_escape($o[0]);}if($P=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($P)."\n".implode("\n",$c)))&&(!$Fb||queries("ALTER TABLE ".table($P)." DROP (".implode(", ",$Fb).")"))&&($P==$B||queries("ALTER TABLE ".table($P)." RENAME TO ".table($B)));}function
foreign_keys($P){return
array();}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($Wg){return
apply_queries("DROP VIEW",$Wg);}function
drop_tables($R){return
apply_queries("DROP TABLE",$R);}function
begin(){return
true;}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$i;return$i->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($zf){global$i;return$i->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($zf));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$K=get_rows('SELECT * FROM v$instance');return
reset($K);}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($mc){return
ereg("view|scheme|processlist|drop_col|variables|status",$mc);}$w="oracle";$U=array();$Qf=array();foreach(array(lang(14)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(15)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(16)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(17)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$U+=$X;$Qf[$x]=array_keys($X);}$Kg=array();$le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Cc=array("length","lower","round","upper");$Hc=array("avg","count","count distinct","max","min","sum");$Lb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Eb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Ne=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($M,$V,$E){$this->_link=@sqlsrv_connect($M,array("UID"=>$V,"PWD"=>$E,"CharacterSet"=>"UTF-8"));if($this->_link){$Wc=sqlsrv_server_info($this->_link);$this->server_info=$Wc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($qb){return$this->query("USE ".idf_escape($qb));}function
query($G,$Eg=false){$H=sqlsrv_query($this->_link,$G);$this->error="";if(!$H){$this->_get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->_result=sqlsrv_query($this->_link,$G);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($H=null){if(!$H)$H=$this->_result;if(sqlsrv_field_metadata($H))return
new
Min_Result($H);$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->fetch_row();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$x=>$X){if(is_a($X,'DateTime'))$J[$x]=$X->format("Y-m-d H:i:s");}return$J;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$I=new
stdClass;$I->name=$o["Name"];$I->orgname=$o["Name"];$I->type=($o["Type"]==1?254:0);return$I;}function
seek($C){for($s=0;$s<$C;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($M,$V,$E){$this->_link=@mssql_connect($M,$V,$E);if($this->_link){$H=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$J=$H->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$J[0]] $J[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($O){return"'".str_replace("'","''",$O)."'";}function
select_db($qb){return
mssql_select_db($qb);}function
query($G,$Eg=false){$H=mssql_query($G,$this->_link);$this->error="";if(!$H){$this->error=mssql_get_last_message();return
false;}if($H===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;return
mssql_result($H->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($H){$this->_result=$H;$this->num_rows=mssql_num_rows($H);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$I=mssql_fetch_field($this->_result);$I->orgtable=$I->table;$I->orgname=$I->name;return$I;}function
seek($C){mssql_data_seek($this->_result,$C);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$b;$i=new
Min_DB;$mb=$b->credentials();if($i->connect($mb[0],$mb[1],$mb[2]))return$i;return$i->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($G,$Z,$y,$C=0,$Cf=" "){return($y!==null?" TOP (".($y+$C).")":"")." $G$Z";}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($m,$Xa){global$i;return$i->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$i;$I=array();foreach($l
as$m){$i->select_db($m);$I[$m]=$i->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($B=""){$I=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($B!=""?"AND name = ".q($B):"ORDER BY name"))as$J){if($B!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return$Q["Engine"]=="VIEW";}function
fk_support($Q){return
true;}function
fields($P){$I=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($P))as$J){$T=$J["type"];$vd=(ereg("char|binary",$T)?$J["max_length"]:($T=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$T.($vd?"($vd)":""),"type"=>$T,"length"=>$vd,"default"=>$J["default"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$J["is_identity"],);}return$I;}function
indexes($P,$j=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($P),$j)as$J){$B=$J["name"];$I[$B]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$B]["lengths"]=array();$I[$B]["columns"][$J["key_ordinal"]]=$J["column_name"];$I[$B]["descs"][$J["key_ordinal"]]=($J["is_descending_key"]?'1':null);}return$I;}function
view($B){global$i;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$i->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($B))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$e)$I[ereg_replace("_.*","",$e)][]=$e;return$I;}function
information_schema($m){return
false;}function
error(){global$i;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$i->error)));}function
create_database($m,$e){return
queries("CREATE DATABASE ".idf_escape($m).(eregi('^[a-z0-9_]+$',$e)?" COLLATE $e":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($B,$e){if(eregi('^[a-z0-9_]+$',$e))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $e");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($B));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($P,$B,$p,$tc,$bb,$Tb,$e,$Aa,$Ee){$c=array();foreach($p
as$o){$f=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $f";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($P==""?substr($tc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($f!=$X[0])queries("EXEC sp_rename ".q(table($P).".$f").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($P=="")return
queries("CREATE TABLE ".table($B)." (".implode(",",(array)$c["ADD"])."\n)");if($P!=$B)queries("EXEC sp_rename ".q(table($P)).", ".q($B));if($tc)$c[""]=$tc;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($B)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($P,$c){$u=array();$Fb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Fb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($P);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($P."_"))." ON ".table($P):"ALTER TABLE ".table($P)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Fb||queries("ALTER TABLE ".table($P)." DROP ".implode(", ",$Fb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":"DEFAULT VALUES"));}function
insert_update($P,$N,$Qe){$Lg=array();$Z=array();foreach($N
as$x=>$X){$Lg[]="$x = $X";if(isset($Qe[idf_unescape($x)]))$Z[]="$x = $X";}return
queries("MERGE ".table($P)." USING (VALUES(".implode(", ",$N).")) AS source (c".implode(", c",range(1,count($N))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Lg)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).");");}function
last_id(){global$i;return$i->result("SELECT SCOPE_IDENTITY()");}function
explain($i,$G){$i->query("SET SHOWPLAN_ALL ON");$I=$i->query($G);$i->query("SET SHOWPLAN_ALL OFF");return$I;}function
found_rows($Q,$Z){}function
foreign_keys($P){$I=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($P))as$J){$q=&$I[$J["FK_NAME"]];$q["table"]=$J["PKTABLE_NAME"];$q["source"][]=$J["FKCOLUMN_NAME"];$q["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($Wg){return
queries("DROP VIEW ".implode(", ",array_map('table',$Wg)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$Wg,$fg){return
apply_queries("ALTER SCHEMA ".idf_escape($fg)." TRANSFER",array_merge($R,$Wg));}function
trigger($B){if($B=="")return
array();$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($B));$I=reset($K);if($I)$I["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$I["text"]);return$I;}function
triggers($P){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($P))as$J)$I[$J["name"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$i;if($_GET["ns"]!="")return$_GET["ns"];return$i->result("SELECT SCHEMA_NAME()");}function
set_schema($yf){return
true;}function
use_sql($qb){return"USE ".idf_escape($qb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($mc){return
ereg('^(scheme|trigger|view|drop_col)$',$mc);}$w="mssql";$U=array();$Qf=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(15)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(16)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(17)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$U+=$X;$Qf[$x]=array_keys($X);}$Kg=array();$le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Cc=array("len","lower","round","upper");$Hc=array("avg","count","count distinct","max","min","sum");$Lb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Eb=array("server"=>"MySQL")+$Eb;if(!defined("DRIVER")){$Ne=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$V,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Mc,$Je)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Mc:ini_get("mysqli.default_host")),($M.$V!=""?$V:ini_get("mysqli.default_user")),($M.$V.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Je)?$Je:ini_get("mysqli.default_port")),(!is_numeric($Je)?$Je:null));if($I){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$I;}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$o];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($M,$V,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$V"!=""?$V:ini_get("mysql.default_user")),("$M$V$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($qb){return
mysql_select_db($qb,$this->_link);}function
query($G,$Eg=false){$H=@($Eg?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$V,$E){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$V,$E);$this->query("SET NAMES utf8");return
true;}function
select_db($qb){return$this->query("USE ".idf_escape($qb));}function
query($G,$Eg=false){$this->setAttribute(1000,!$Eg);return
parent::query($G,$Eg);}}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$i=new
Min_DB;$mb=$b->credentials();if($i->connect($mb[0],$mb[1],$mb[2])){$i->query("SET sql_quote_show_create = 1, autocommit = 1");return$i;}$I=$i->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($wf=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$wf;return$I;}function
get_databases($sc){global$i;$I=get_session("dbs");if($I===null){$G=($i->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$I=($sc?slow_query($G):get_vals($G));restart_session();set_session("dbs",$I);stop_session();}return$I;}function
limit($G,$Z,$y,$C=0,$Cf=" "){return" $G$Z".($y!==null?$Cf."LIMIT $y".($C?" OFFSET $C":""):"");}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($m,$Xa){global$i;$I=null;$k=$i->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$k,$A))$I=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$k,$A))$I=$Xa[$A[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($l){$I=array();foreach($l
as$m)$I[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$I;}function
table_status($B="",$lc=false){global$i;$I=array();foreach(get_rows($lc&&$i->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($B!=""?"AND TABLE_NAME = ".q($B):"ORDER BY Name"):"SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_\\")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Engine"]))$J["Comment"]="";if($B!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($Q){return$Q["Engine"]===null;}function
fk_support($Q){return
eregi("InnoDB|IBMDB2I",$Q["Engine"]);}function
fields($P){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($P))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$A);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($J["Default"]!=""||ereg("char|set",$A[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$A)?$A[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($P,$j=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($P),$j)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];$I[$J["Key_name"]]["descs"][]=null;}return$I;}function
foreign_keys($P){global$i,$he;static$He='`(?:[^`]|``)+`';$I=array();$kb=$i->result("SHOW CREATE TABLE ".table($P),1);if($kb){preg_match_all("~CONSTRAINT ($He) FOREIGN KEY \\(((?:$He,? ?)+)\\) REFERENCES ($He)(?:\\.($He))? \\(((?:$He,? ?)+)\\)(?: ON DELETE ($he))?(?: ON UPDATE ($he))?~",$kb,$Bd,PREG_SET_ORDER);foreach($Bd
as$A){preg_match_all("~$He~",$A[2],$If);preg_match_all("~$He~",$A[5],$fg);$I[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$If[0]),"target"=>array_map('idf_unescape',$fg[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$I;}function
view($B){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$x=>$X)asort($I[$x]);return$I;}function
information_schema($m){global$i;return($i->server_info>=5&&$m=="information_schema")||($i->server_info>=5.5&&$m=="performance_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
error_line(){global$i;if(ereg(' at line ([0-9]+)$',$i->error,$jf))return$jf[1]-1;}function
create_database($m,$e){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($m).($e?" COLLATE ".q($e):""));}function
drop_databases($l){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($B,$e){if(create_database($B,$e)){$lf=array();foreach(tables_list()as$P=>$T)$lf[]=table($P)." TO ".idf_escape($B).".".table($P);if(!$lf||queries("RENAME TABLE ".implode(", ",$lf))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ba=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$Ba="";break;}if($u["type"]=="PRIMARY")$Ba=" UNIQUE";}}return" AUTO_INCREMENT$Ba";}function
alter_table($P,$B,$p,$tc,$bb,$Tb,$e,$Aa,$Ee){$c=array();foreach($p
as$o)$c[]=($o[1]?($P!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($P!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$tc);$Nf="COMMENT=".q($bb).($Tb?" ENGINE=".q($Tb):"").($e?" COLLATE ".q($e):"").($Aa!=""?" AUTO_INCREMENT=$Aa":"").$Ee;if($P=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$c)."\n) $Nf");if($P!=$B)$c[]="RENAME TO ".table($B);$c[]=$Nf;return
queries("ALTER TABLE ".table($P)."\n".implode(",\n",$c));}function
alter_indexes($P,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($P).implode(",",$c));}function
truncate_tables($R){return
apply_queries("TRUNCATE TABLE",$R);}function
drop_views($Wg){return
queries("DROP VIEW ".implode(", ",array_map('table',$Wg)));}function
drop_tables($R){return
queries("DROP TABLE ".implode(", ",array_map('table',$R)));}function
move_tables($R,$Wg,$fg){$lf=array();foreach(array_merge($R,$Wg)as$P)$lf[]=table($P)." TO ".idf_escape($fg).".".table($P);return
queries("RENAME TABLE ".implode(", ",$lf));}function
copy_tables($R,$Wg,$fg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($R
as$P){$B=($fg==DB?table("copy_$P"):idf_escape($fg).".".table($P));if(!queries("DROP TABLE IF EXISTS $B")||!queries("CREATE TABLE $B LIKE ".table($P))||!queries("INSERT INTO $B SELECT * FROM ".table($P)))return
false;}foreach($Wg
as$P){$B=($fg==DB?table("copy_$P"):idf_escape($fg).".".table($P));$Vg=view($P);if(!queries("DROP VIEW IF EXISTS $B")||!queries("CREATE VIEW $B AS $Vg[select]"))return
false;}return
true;}function
trigger($B){if($B=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));return
reset($K);}function
triggers($P){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($P,"%_\\")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$T){global$i,$Vb,$Yc,$U;$va=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Dg="((".implode("|",array_merge(array_keys($U),$va)).")\\b(?:\\s*\\(((?:[^'\")]*|$Vb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$He="\\s*(".($T=="FUNCTION"?"":$Yc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Dg";$k=$i->result("SHOW CREATE $T ".idf_escape($B),2);preg_match("~\\(((?:$He\\s*,?)*)\\)\\s*".($T=="FUNCTION"?"RETURNS\\s+$Dg\\s+":"")."(.*)~is",$k,$A);$p=array();preg_match_all("~$He\\s*,?~is",$A[1],$Bd,PREG_SET_ORDER);foreach($Bd
as$_e){$B=str_replace("``","`",$_e[2]).$_e[3];$p[]=array("field"=>$B,"type"=>strtolower($_e[5]),"length"=>preg_replace_callback("~$Vb~s",'normalize_enum',$_e[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$_e[8] $_e[7]"))),"null"=>1,"full_type"=>$_e[4],"inout"=>strtoupper($_e[1]),"collation"=>strtolower($_e[9]),);}if($T!="FUNCTION")return
array("fields"=>$p,"definition"=>$A[11]);return
array("fields"=>$p,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($P,$N){return
queries("INSERT INTO ".table($P)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($P,$N,$Qe){foreach($N
as$x=>$X)$N[$x]="$x = $X";$Lg=implode(", ",$N);return
queries("INSERT INTO ".table($P)." SET $Lg ON DUPLICATE KEY UPDATE $Lg");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$G){return$i->query("EXPLAIN ".($i->server_info>=5.1?"PARTITIONS ":"").$G);}function
found_rows($Q,$Z){return($Z||$Q["Engine"]!="InnoDB"?null:$Q["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($yf){return
true;}function
create_sql($P,$Aa){global$i;$I=$i->result("SHOW CREATE TABLE ".table($P),1);if(!$Aa)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($P){return"TRUNCATE ".table($P);}function
use_sql($qb){return"USE ".idf_escape($qb);}function
trigger_sql($P,$Rf){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($P,"%_\\")),null,"-- ")as$J)$I.="\n".($Rf=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(ereg("binary",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(ereg("geometry|point|linestring|polygon",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$I){if(ereg("binary",$o["type"]))$I="UNHEX($I)";if($o["type"]=="bit")$I="CONV($I, 2, 10) + 0";if(ereg("geometry|point|linestring|polygon",$o["type"]))$I="GeomFromText($I)";return$I;}function
support($mc){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$mc);}$w="sql";$U=array();$Qf=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(15)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(16)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(20)=>array("enum"=>65535,"set"=>64),lang(17)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(19)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$U+=$X;$Qf[$x]=array_keys($X);}$Kg=array("unsigned","zerofill","unsigned zerofill");$le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Cc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Hc=array("avg","count","count distinct","group_concat","max","min","sum");$Lb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="3.7.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin($k=false){return
password_file($k);}function
database(){return
DB;}function
databases($sc=true){return
get_databases($sc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Eb;echo'<table cellspacing="0">
<tr><th>',lang(21),'<td>',html_select("auth[driver]",$Eb,DRIVER,"loginDriver(this);"),'<tr><th>',lang(22),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(23),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(24),'<td><input type="password" name="auth[password]">
<tr><th>',lang(25),'<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".lang(26)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(27))."\n";}function
login($zd,$E){return
true;}function
tableName($Xf){return
h($Xf["Name"]);}function
fieldName($o,$pe=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Xf,$N=""){echo'<p class="tabs">';$yd=array("select"=>lang(28),"table"=>lang(29));if(is_view($Xf))$yd["view"]=lang(30);else$yd["create"]=lang(31);if($N!==null)$yd["edit"]=lang(32);foreach($yd
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Xf["Name"]).($x=="edit"?$N:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($P){return
foreign_keys($P);}function
backwardKeys($P,$Wf){return
array();}function
backwardKeysPrint($Da,$J){}function
selectQuery($G){global$w,$S;return"<form action='".h(ME)."sql=' method='post'><p><span onclick=\"return !selectEditSql(event, this, '".lang(33)."');\">"."<code class='jush-$w'>".h(str_replace("\n"," ",$G))."</code>"." <a href='".h(ME)."sql=".urlencode($G)."'>".lang(34)."</a>"."</span><input type='hidden' name='token' value='$S'></p></form>\n";}function
rowDescription($P){return"";}function
rowDescriptions($K,$uc){return$K;}function
selectLink($X,$o){}function
selectVal($X,$z,$o){$I=($X===null?"<i>NULL</i>":(ereg("char|binary",$o["type"])&&!ereg("var",$o["type"])?"<code>$X</code>":$X));if(ereg('blob|bytea|raw|file',$o["type"])&&!is_utf8($X))$I=lang(35,strlen(html_entity_decode($X,ENT_QUOTES)));return($z?"<a href='".h($z)."'>$I</a>":$I);}function
editVal($X,$o){return$X;}function
selectColumnsPrint($L,$g){global$Cc,$Hc;print_fieldset("select",lang(36),$L);$s=0;$Ac=array(lang(37)=>$Cc,lang(38)=>$Hc);foreach($L
as$x=>$X){$X=$_GET["columns"][$x];echo"<div>".html_select("columns[$s][fun]",array(-1=>"")+$Ac,$X["fun"]),"(<select name='columns[$s][col]' onchange='selectFieldChange(this.form);'><option>".optionlist($g,$X["col"],true)."</select>)</div>\n";$s++;}echo"<div>".html_select("columns[$s][fun]",array(-1=>"")+$Ac,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$s][col]' onchange='selectAddRow(this);'><option>".optionlist($g,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$g,$v){print_fieldset("search",lang(39),$Z);foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Na="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div><select name='where[$s][col]' onchange='$Na'><option value=''>(".lang(40).")".optionlist($g,$X["col"],true)."</select>",html_select("where[$s][op]",$this->operators,$X["op"],$Na),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($pe,$g,$v){print_fieldset("sort",lang(41),$pe);$s=0;foreach((array)$_GET["order"]as$x=>$X){if(isset($g[$X])){echo"<div><select name='order[$s]' onchange='selectFieldChange(this.form);'><option>".optionlist($g,$X,true)."</select>",checkbox("desc[$s]",1,isset($_GET["desc"][$x]),lang(42))."</div>\n";$s++;}}echo"<div><select name='order[$s]' onchange='selectAddRow(this);'><option>".optionlist($g,null,true)."</select>",checkbox("desc[$s]",1,false,lang(42))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".lang(43)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($y)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($kg){if($kg!==null){echo"<fieldset><legend>".lang(44)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($kg)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".lang(45)."</legend><div>","<input type='submit' value='".lang(36)."'>"," <span id='noindex' title='".lang(46)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$g=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$g[reset($u["columns"])]=1;}$g[""]=1;foreach($g
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($Pb,$g){}function
selectColumnsProcess($g,$v){global$Cc,$Hc;$L=array();$Fc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||(isset($g[$X["col"]])&&(!$X["fun"]||in_array($X["fun"],$Cc)||in_array($X["fun"],$Hc)))){$L[$x]=apply_sql_function($X["fun"],(isset($g[$X["col"]])?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Hc))$Fc[]=$L[$x];}}return
array($L,$Fc);}function
selectSearchProcess($p,$v){global$w;$I=array();foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$I[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$db=" $X[op]";if(ereg('IN$',$X["op"])){$Rc=process_length($X["val"]);$db.=" (".($Rc!=""?$Rc:"NULL").")";}elseif($X["op"]=="SQL")$db=" $X[val]";elseif($X["op"]=="LIKE %%")$db=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!ereg('NULL$',$X["op"]))$db.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$I[]=idf_escape($X["col"]).$db;else{$Ya=array();foreach($p
as$B=>$o){$ed=ereg('char|text|enum|set',$o["type"]);if((is_numeric($X["val"])||!ereg('(^|[^o])int|float|double|decimal|bit',$o["type"]))&&(!ereg("[\x80-\xFF]",$X["val"])||$ed)){$B=idf_escape($B);$Ya[]=($w=="sql"&&$ed&&!ereg('^utf8',$o["collation"])?"CONVERT($B USING utf8)":$B);}}$I[]=($Ya?"(".implode("$db OR ",$Ya)."$db)":"0");}}}return$I;}function
selectOrderProcess($p,$v){$I=array();foreach((array)$_GET["order"]as$x=>$X){if(isset($p[$X])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X))$I[]=(isset($p[$X])?idf_escape($X):$X).(isset($_GET["desc"][$x])?" DESC":"");}return$I;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$uc){return
false;}function
selectQueryBuild($L,$Z,$Fc,$pe,$y,$D){return"";}function
messageQuery($G){global$w;restart_session();$Kc=&get_session("queries");$Oc="sql-".count($Kc[$_GET["db"]]);if(strlen($G)>1e6)$G=ereg_replace('[\x80-\xFF]+$','',substr($G,0,1e6))."\n...";$Kc[$_GET["db"]][]=array($G,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$Oc' onclick=\"return !toggle('$Oc');\">".lang(47)."</a><div id='$Oc' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($G,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Kc[$_GET["db"]])-1)).'">'.lang(34).'</a></div>';}function
editFunctions($o){global$Lb;$I=($o["null"]?"NULL/":"");foreach($Lb
as$x=>$Cc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Cc
as$He=>$X){if(!$He||ereg($He,$o["type"]))$I.="/$X";}if($x&&!ereg('set|blob|bytea|raw|file',$o["type"]))$I.="/SQL";}}return
explode("/",$I);}function
editInput($P,$o,$_a,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$_a value='-1' checked><i>".lang(6)."</i></label> ":"").($o["null"]?"<label><input type='radio'$_a value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$_a,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$B=$o["field"];$I=q($Y);if(ereg('^(now|getdate|uuid)$',$r))$I="$r()";elseif(ereg('^current_(date|timestamp)$',$r))$I=$r;elseif(ereg('^([+-]|\\|\\|)$',$r))$I=idf_escape($B)." $r $I";elseif(ereg('^[+-] interval$',$r))$I=idf_escape($B)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$I);elseif(ereg('^(addtime|subtime|concat)$',$r))$I="$r(".idf_escape($B).", $I)";elseif(ereg('^(md5|sha1|password|encrypt)$',$r))$I="$r($I)";return
unconvert_field($o,$I);}function
dumpOutput(){$I=array('text'=>lang(48),'file'=>lang(49));if(function_exists('gzencode'))$I['gz']='gzip';return$I;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($P,$Rf,$fd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Rf)dump_csv(array_keys(fields($P)));}elseif($Rf){if($fd==2){$p=array();foreach(fields($P)as$B=>$o)$p[]=idf_escape($B)." $o[full_type]";$k="CREATE TABLE ".table($P)." (".implode(", ",$p).")";}else$k=create_sql($P,$_POST["auto_increment"]);if($k){if($Rf=="DROP+CREATE"||$fd==1)echo"DROP ".($fd==2?"VIEW":"TABLE")." IF EXISTS ".table($P).";\n";if($fd==1)$k=remove_definer($k);echo"$k;\n\n";}}}function
dumpData($P,$Rf,$G){global$i,$w;$Dd=($w=="sqlite"?0:1048576);if($Rf){if($_POST["format"]=="sql"){if($Rf=="TRUNCATE+INSERT")echo
truncate_sql($P).";\n";$p=fields($P);}$H=$i->query($G,1);if($H){$ad="";$La="";$jd=array();$Tf="";$nc=($P!=''?'fetch_assoc':'fetch_row');while($J=$H->$nc()){if(!$jd){$Sg=array();foreach($J
as$X){$o=$H->fetch_field();$jd[]=$o->name;$x=idf_escape($o->name);$Sg[]="$x = VALUES($x)";}$Tf=($Rf=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Sg):"").";\n";}if($_POST["format"]!="sql"){if($Rf=="table"){dump_csv($jd);$Rf="INSERT";}dump_csv($J);}else{if(!$ad)$ad="INSERT INTO ".table($P)." (".implode(", ",array_map('idf_escape',$jd)).") VALUES";foreach($J
as$x=>$X){$o=$p[$x];$J[$x]=($X!==null?unconvert_field($o,ereg('(^|[^o])int|float|double|decimal',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$wf=($Dd?"\n":" ")."(".implode(",\t",$J).")";if(!$La)$La=$ad.$wf;elseif(strlen($La)+4+strlen($wf)+strlen($Tf)<$Dd)$La.=",$wf";else{echo$La.$Tf;$La=$ad.$wf;}}}if($La)echo$La.$Tf;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$i->error)."\n";}}function
dumpFilename($Pc){return
friendly_url($Pc!=""?$Pc:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Pc,$Rd=false){$ye=$_POST["output"];$hc=(ereg('sql',$_POST["format"])?"sql":($Rd?"tar":"csv"));header("Content-Type: ".($ye=="gz"?"application/x-gzip":($hc=="tar"?"application/x-tar":($hc=="sql"||$ye!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($ye=="gz")ob_start('gzencode',1e6);return$hc;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.lang(50)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(51):lang(52))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(53)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(54)."</a>\n":"");return
true;}function
navigation($Qd){global$ia,$S,$w,$Eb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Qd=="auth"){$rc=true;foreach((array)$_SESSION["pwds"]as$Db=>$Ff){foreach($Ff
as$M=>$Qg){foreach($Qg
as$V=>$E){if($E!==null){if($rc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$rc=false;}$tb=$_SESSION["db"][$Db][$M][$V];foreach(($tb?array_keys($tb):array(""))as$m)echo"<a href='".h(auth_url($Db,$M,$V,$m))."'>($Eb[$Db]) ".h($V.($M!=""?"@$M":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Qd){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"]))." title='".lang(55)."'>".lang(47)."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(56)."</a>\n";}echo'<input type="submit" name="logout" value="',lang(57),'" id="logout">
<input type="hidden" name="token" value="',$S,'">
</p>
</form>
';$this->databasesPrint($Qd);if($_GET["ns"]!==""&&!$Qd&&DB!=""){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(58)."</a>\n";$R=table_status('',true);if(!$R)echo"<p class='message'>".lang(7)."\n";else{$this->tablesPrint($R);$yd=array();foreach($R
as$P=>$T)$yd[]=preg_quote($P,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $w: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$yd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";echo"</script>\n";}}}}function
databasesPrint($Qd){global$i;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$rb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo($l?"<select name='db'$rb>".optionlist(array(""=>"(".lang(59).")")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(10)."'".($l?" class='hidden'":"").">\n";if($Qd!="db"&&DB!=""&&$i->select_db(DB)){if(support("scheme")){echo"<br><select name='ns'$rb>".optionlist(array(""=>"(".lang(60).")")+schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}function
tablesPrint($R){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($R
as$P=>$Nf){echo'<a href="'.h(ME).'select='.urlencode($P).'"'.bold($_GET["select"]==$P||$_GET["edit"]==$P).">".lang(61)."</a> ",'<a href="'.h(ME).'table='.urlencode($P).'"'.bold(in_array($P,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])))." title='".lang(29)."'>".$this->tableName($Nf)."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$le;function
page_header($ng,$n="",$Ka=array(),$og=""){global$ca,$b,$i,$Eb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$pg=$ng.($og!=""?": ".h($og):"");$qg=strip_tags($pg.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(62),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$qg,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.7.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.7.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(62),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ka!==null){$z=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$Eb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):lang(22));if($Ka===false)echo"$M\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ka)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ka)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ka
as$x=>$X){$xb=(is_array($X)?$X[1]:$X);if($xb!="")echo'<a href="'.h(ME."$x=").urlencode(is_array($X)?$X[0]:$X).'">'.h($xb).'</a> &raquo; ';}}echo"$ng\n";}}echo"<h2>$pg</h2>\n";restart_session();$Mg=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Nd=$_SESSION["messages"][$Mg];if($Nd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Nd)."</div>\n";unset($_SESSION["messages"][$Mg]);}$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();if($n)echo"<div class='error'>$n</div>\n";define("PAGE_HEADER",1);}function
page_footer($Qd=""){global$b;echo'</div>

';switch_lang();echo'<div id="menu">
';$b->navigation($Qd);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Td){while($Td>=2147483648)$Td-=4294967296;while($Td<=-2147483649)$Td+=4294967296;return(int)$Td;}function
long2str($W,$Yg){$wf='';foreach($W
as$X)$wf.=pack('V',$X);if($Yg)return
substr($wf,0,end($W));return$wf;}function
str2long($wf,$Yg){$W=array_values(unpack('V*',str_pad($wf,4*ceil(strlen($wf)/4),"\0")));if($Yg)$W[]=strlen($wf);return$W;}function
xxtea_mx($dh,$ch,$Uf,$hd){return
int32((($dh>>5&0x7FFFFFF)^$ch<<2)+(($ch>>3&0x1FFFFFFF)^$dh<<4))^int32(($Uf^$ch)+($hd^$dh));}function
encrypt_string($Pf,$x){if($Pf=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Pf,true);$Td=count($W)-1;$dh=$W[$Td];$ch=$W[0];$F=floor(6+52/($Td+1));$Uf=0;while($F-->0){$Uf=int32($Uf+0x9E3779B9);$Kb=$Uf>>2&3;for($ze=0;$ze<$Td;$ze++){$ch=$W[$ze+1];$Sd=xxtea_mx($dh,$ch,$Uf,$x[$ze&3^$Kb]);$dh=int32($W[$ze]+$Sd);$W[$ze]=$dh;}$ch=$W[0];$Sd=xxtea_mx($dh,$ch,$Uf,$x[$ze&3^$Kb]);$dh=int32($W[$Td]+$Sd);$W[$Td]=$dh;}return
long2str($W,false);}function
decrypt_string($Pf,$x){if($Pf=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Pf,false);$Td=count($W)-1;$dh=$W[$Td];$ch=$W[0];$F=floor(6+52/($Td+1));$Uf=int32($F*0x9E3779B9);while($Uf){$Kb=$Uf>>2&3;for($ze=$Td;$ze>0;$ze--){$dh=$W[$ze-1];$Sd=xxtea_mx($dh,$ch,$Uf,$x[$ze&3^$Kb]);$ch=int32($W[$ze]-$Sd);$W[$ze]=$ch;}$dh=$W[$Td];$Sd=xxtea_mx($dh,$ch,$Uf,$x[$ze&3^$Kb]);$ch=int32($W[0]-$Sd);$W[0]=$ch;$Uf=int32($Uf-0x9E3779B9);}return
long2str($W,true);}$i='';$S=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Ie=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$Ie[$x]=$X;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$x=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$Te=$b->permanentLogin(true);$Ie[$x]="$x:".base64_encode($Te?encrypt_string($d["password"],$Te):"");cookie("adminer_permanent",implode(" ",$Ie));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($S&&$_POST["token"]!=$S){page_header(lang(57),lang(63));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(64));}}elseif($Ie&&!$_SESSION["pwds"]){session_regenerate_id();$Te=$b->permanentLogin();foreach($Ie
as$x=>$X){list(,$Ra)=explode(":",$X);list($Db,$M,$V,$m)=array_map('base64_decode',explode("-",$x));$_SESSION["pwds"][$Db][$M][$V]=decrypt_string(base64_decode($Ra),$Te);$_SESSION["db"][$Db][$M][$V][$m]=true;}}function
unset_permanent(){global$Ie;foreach($Ie
as$x=>$X){list($Db,$M,$V,$m)=array_map('base64_decode',explode("-",$x));if($Db==DRIVER&&$M==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Ie[$x]);}cookie("adminer_permanent",implode(" ",$Ie));}function
auth_error($bc=null){global$i,$b,$S;$Gf=session_name();$n="";if(!$_COOKIE[$Gf]&&$_GET[$Gf]&&ini_bool("session.use_only_cookies"))$n=lang(65);elseif(isset($_GET["username"])){if(($_COOKIE[$Gf]||$_GET[$Gf])&&!$S)$n=lang(66);else{$E=&get_session("pwds");if($E!==null){$n=h($bc?$bc->getMessage():(is_string($i)?$i:lang(67)));if($E===false)$n.='<br>'.lang(68,'<code>permanentLogin()</code>');$E=null;}unset_permanent();}}page_header(lang(26),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(69),lang(70,implode(", ",$Ne)),false);page_footer("auth");exit;}$i=connect();}if(is_string($i)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$S=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$S;$n='';if($_POST){if($_POST["token"]!=$S){$Xc="max_input_vars";$Hd=ini_get($Xc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$Hd||$X<$Hd)){$Xc=$x;$Hd=$X;}}}$n=(!$_POST["token"]&&$Hd?lang(71,"'$Xc'"):lang(63));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(72,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(73);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}function
connect_error(){global$b,$i,$S,$n,$Eb;$l=array();if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(25).": ".h(DB),lang(74),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(75),drop_databases($_POST["db"]));page_header(lang(76),$n,false);echo"<p><a href='".h(ME)."database='>".lang(77)."</a>\n";foreach(array('privileges'=>lang(54),'processlist'=>lang(78),'variables'=>lang(79),'status'=>lang(80),)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".lang(81,$Eb[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".lang(82,"<b>".h(logged_user())."</b>")."\n";$hf="<a href='".h(ME)."refresh=1'>".lang(83)."</a>\n";$l=$b->databases();if($l){$zf=support("scheme");$Xa=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr><td>&nbsp;<th>".lang(25)."<td>".lang(84)."<td>".lang(85)."</thead>\n";foreach($l
as$m){$rf=h(ME)."db=".urlencode($m);echo"<tr".odd()."><td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"])),"<th><a href='$rf'>".h($m)."</a>","<td><a href='$rf".($zf?"&amp;ns=":"")."&amp;database=' title='".lang(50)."'>".nbsp(db_collation($m,$Xa))."</a>","<td align='right'><a href='$rf&amp;schema=' id='tables-".h($m)."' title='".lang(53)."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".lang(86)."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$S'>\n",$hf,"</form>\n";}else
echo"<p>$hf";}page_footer("db");if($l)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(87).": ".h($_GET["ns"]),lang(88),true);page_footer("ns");exit;}}function
select($H,$j=null,$Nc="",$se=array()){$yd=array();$v=array();$g=array();$Ia=array();$U=array();$I=array();odd('');for($s=0;$J=$H->fetch_row();$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($gd=0;$gd<count($J);$gd++){$o=$H->fetch_field();$B=$o->name;$re=$o->orgtable;$qe=$o->orgname;$I[$o->table]=$re;if($Nc)$yd[$gd]=($B=="table"?"table=":($B=="possible_keys"?"indexes=":null));elseif($re!=""){if(!isset($v[$re])){$v[$re]=array();foreach(indexes($re,$j)as$u){if($u["type"]=="PRIMARY"){$v[$re]=array_flip($u["columns"]);break;}}$g[$re]=$v[$re];}if(isset($g[$re][$qe])){unset($g[$re][$qe]);$v[$re][$qe]=$gd;$yd[$gd]=$re;}}if($o->charsetnr==63)$Ia[$gd]=true;$U[$gd]=$o->type;$B=h($B);echo"<th".($re!=""||$o->name!=$qe?" title='".h(($re!=""?"$re.":"").$qe)."'":"").">".($Nc?"<a href='$Nc".strtolower($B)."' target='_blank' rel='noreferrer' class='help'>$B</a>":$B);}echo"</thead>\n";}echo"<tr".odd().">";foreach($J
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ia[$x]&&!is_utf8($X))$X="<i>".lang(35,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($U[$x]==254)$X="<code>$X</code>";}if(isset($yd[$x])&&!$g[$yd[$x]]){if($Nc){$P=$J[array_search("table=",$yd)];$z=$yd[$x].urlencode($se[$P]!=""?$se[$P]:$P);}else{$z="edit=".urlencode($yd[$x]);foreach($v[$yd[$x]]as$Va=>$gd)$z.="&where".urlencode("[".bracket_escape($Va)."]")."=".urlencode($J[$gd]);}$X="<a href='".h(ME.$z)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(89))."\n";return$I;}function
referencable_primary($Bf){$I=array();foreach(table_status('',true)as$Yf=>$P){if($Yf!=$Bf&&fk_support($P)){foreach(fields($Yf)as$o){if($o["primary"]){if($I[$Yf]){unset($I[$Yf]);break;}$I[$Yf]=$o;}}}}return$I;}function
textarea($B,$Y,$K=10,$Ya=80){echo"<textarea name='$B' rows='$K' cols='$Ya' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$o,$Xa,$vc=array()){global$Qf,$U,$Kg,$he;echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$o["type"]||isset($U[$o["type"]])?array():array($o["type"]))+$Qf+($vc?array(lang(90)=>$vc):array()),$o["type"]),'</select>
<td><input name="',$x,'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">';echo"<select name='$x"."[collation]'".(ereg('(char|text|enum|set)$',$o["type"])?"":" class='hidden'").'><option value="">('.lang(91).')'.optionlist($Xa,$o["collation"]).'</select>',($Kg?"<select name='$x"."[unsigned]'".(!$o["type"]||ereg('((^|[^o])int|float|double|decimal)$',$o["type"])?"":" class='hidden'").'><option>'.optionlist($Kg,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='$x"."[on_update]'".($o["type"]=="timestamp"?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(92).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($vc?"<select name='$x"."[on_delete]'".(ereg("`",$o["type"])?"":" class='hidden'")."><option value=''>(".lang(93).")".optionlist(explode("|",$he),$o["on_delete"])."</select> ":" ");}function
process_length($vd){global$Vb;return(preg_match("~^\\s*(?:$Vb)(?:\\s*,\\s*(?:$Vb))*\\s*\$~",$vd)&&preg_match_all("~$Vb~",$vd,$Bd)?implode(",",$Bd[0]):preg_replace('~[^0-9,+-]~','',$vd));}function
process_type($o,$Wa="COLLATE"){global$Kg;return" $o[type]".($o["length"]!=""?"(".process_length($o["length"]).")":"").(ereg('(^|[^o])int|float|double|decimal',$o["type"])&&in_array($o["unsigned"],$Kg)?" $o[unsigned]":"").(ereg('char|text|enum|set',$o["type"])&&$o["collation"]?" $Wa ".q($o["collation"]):"");}function
process_field($o,$Cg){return
array(idf_escape(trim($o["field"])),process_type($Cg),($o["null"]?" NULL":" NOT NULL"),(isset($o["default"])?" DEFAULT ".((ereg("time",$o["type"])&&eregi('^CURRENT_TIMESTAMP$',$o["default"]))||($o["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$o["default"]))?$o["default"]:q($o["default"])):""),($o["type"]=="timestamp"&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($T){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(ereg("$x|$X",$T))return" class='$x'";}}function
edit_fields($p,$Xa,$T="TABLE",$vc=array(),$cb=false){global$i,$Yc;echo'<thead><tr class="wrap">
';if($T=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($T=="TABLE"?lang(94):lang(95)),'<td>',lang(96),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(97),'<td>',lang(98);if($T=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(99),'">AI</acronym>
<td>',lang(100),(support("comment")?"<td".($cb?"":" class='hidden'").">".lang(101):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.7.1' alt='+' title='".lang(102)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$te=$o[($_POST?"orig":"field")];$Bb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$te=="");echo'<tr',($Bb?"":" style='display: none;'"),'>
',($T=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Yc),$o["inout"]):""),'<th>';if($Bb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="',($o["field"]!=""||count($p)>1?"":"editingAddRow(this); "),'editingNameChange(this);" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($te),'">
';edit_type("fields[$s]",$o,$Xa,$vc);if($T=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"]),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($cb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($i->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.7.1' alt='+' title='".lang(102)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.7.1' alt='^' title='".lang(103)."'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.7.1' alt='v' title='".lang(104)."'>&nbsp;":""),($te==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.7.1' alt='x' title='".lang(105)."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$p){ksort($p);$C=0;if($_POST["up"]){$pd=0;foreach($p
as$x=>$o){if(key($_POST["up"])==$x){unset($p[$x]);array_splice($p,$pd,0,array($o));break;}if(isset($o["field"]))$pd=$C;$C++;}}elseif($_POST["down"]){$xc=false;foreach($p
as$x=>$o){if(isset($o["field"])&&$xc){unset($p[key($_POST["down"])]);array_splice($p,$C,0,array($xc));break;}if(key($_POST["down"])==$x)$xc=$o;$C++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($A){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($A[0][0].$A[0][0],$A[0][0],substr($A[0],1,-1))),'\\'))."'";}function
grant($Dc,$Ve,$g,$ge){if(!$Ve)return
true;if($Ve==array("ALL PRIVILEGES","GRANT OPTION"))return($Dc=="GRANT"?queries("$Dc ALL PRIVILEGES$ge WITH GRANT OPTION"):queries("$Dc ALL PRIVILEGES$ge")&&queries("$Dc GRANT OPTION$ge"));return
queries("$Dc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$g, ",$Ve).$g).$ge);}function
drop_create($Fb,$k,$Gb,$ig,$Hb,$_,$Md,$Kd,$Ld,$de,$Wd){if($_POST["drop"])query_redirect($Fb,$_,$Md);elseif($de=="")query_redirect($k,$_,$Ld);elseif($de!=$Wd){$lb=queries($k);queries_redirect($_,$Kd,$lb&&queries($Fb));if($lb)queries($Gb);}else
queries_redirect($_,$Kd,queries($ig)&&queries($Hb)&&queries($Fb)&&queries($k));}function
create_trigger($ge,$J){global$w;$mg=" $J[Timing] $J[Event]";return"CREATE TRIGGER ".idf_escape($J["Trigger"]).($w=="mssql"?$ge.$mg:$mg.$ge).rtrim(" $J[Type]\n$J[Statement]",";").";";}function
create_routine($sf,$J){global$Yc;$N=array();$p=(array)$J["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$N[]=(ereg("^($Yc)\$",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $sf ".idf_escape(trim($J["name"]))." (".implode(", ",$N).")".(isset($_GET["function"])?" RETURNS".process_type($J["returns"],"CHARACTER SET"):"").($J["language"]?" LANGUAGE $J[language]":"").rtrim("\n$J[definition]",";").";";}function
remove_definer($G){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$G);}function
tar_file($pc,$rg){$I=pack("a100a8a8a8a12a12",$pc,644,0,0,decoct($rg->size),decoct(time()));$Qa=8*32;for($s=0;$s<strlen($I);$s++)$Qa+=ord($I[$s]);$I.=sprintf("%06o",$Qa)."\0 ";echo$I,str_repeat("\0",512-strlen($I));$rg->send();echo
str_repeat("\0",511-($rg->size+511)%512);}function
ini_bytes($Xc){$X=ini_get($Xc);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}$he="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($gb){$this->size+=strlen($gb);fwrite($this->handler,$gb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$Vb="'(?:''|[^'\\\\]|\\\\.)*+'";$Yc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$p),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$Q=table_status1($a,true);page_header(($p&&is_view($Q)?lang(106):lang(107)).": ".h($a),$n);$b->selectLinks($Q);$bb=$Q["Comment"];if($bb!="")echo"<p>".lang(101).": ".h($bb)."\n";if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(108)."<td>".lang(96).(support("comment")?"<td>".lang(101):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td title='".h($o["collation"])."'>".h($o["full_type"]).($o["null"]?" <i>NULL</i>":"").($o["auto_increment"]?" <i>".lang(99)."</i>":""),(isset($o["default"])?" [<b>".h($o["default"])."</b>]":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";if(!is_view($Q)){echo"<h3 id='indexes'>".lang(109)."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$B=>$u){ksort($u["columns"]);$Se=array();foreach($u["columns"]as$x=>$X)$Se[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($B)."'><th>$u[type]<td>".implode(", ",$Se)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(110)."</a>\n";if(fk_support($Q)){echo"<h3 id='foreign-keys'>".lang(90)."</h3>\n";$vc=foreign_keys($a);if($vc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(111)."<td>".lang(112)."<td>".lang(93)."<td>".lang(92).($w!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($vc
as$B=>$q){echo"<tr title='".h($B)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",($w=="sqlite"?"":'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($B)).'">'.lang(113).'</a>');}echo"</table>\n";}if($w!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(114)."</a>\n";}if(support("trigger")){echo"<h3 id='triggers'>".lang(115)."</h3>\n";$Bg=triggers($a);if($Bg){echo"<table cellspacing='0'>\n";foreach($Bg
as$x=>$X)echo"<tr valign='top'><td>$X[0]<td>$X[1]<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".lang(113)."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(116)."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header(lang(53),"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$ag=array();$bg=array();$B="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$B-".DB]?"$B-".DB:$B)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Bd,PREG_SET_ORDER);foreach($Bd
as$s=>$A){$ag[$A[1]]=array($A[2],$A[3]);$bg[]="\n\t'".js_escape($A[1])."': [ $A[2], $A[3] ]";}$tg=0;$Fa=-1;$yf=array();$gf=array();$td=array();foreach(table_status('',true)as$P=>$Q){if(is_view($Q))continue;$Ke=0;$yf[$P]["fields"]=array();foreach(fields($P)as$B=>$o){$Ke+=1.25;$o["pos"]=$Ke;$yf[$P]["fields"][$B]=$o;}$yf[$P]["pos"]=($ag[$P]?$ag[$P]:array($tg,0));foreach($b->foreignKeys($P)as$X){if(!$X["db"]){$rd=$Fa;if($ag[$P][1]||$ag[$X["table"]][1])$rd=min(floatval($ag[$P][1]),floatval($ag[$X["table"]][1]))-1;else$Fa-=.1;while($td[(string)$rd])$rd-=.0001;$yf[$P]["references"][$X["table"]][(string)$rd]=array($X["source"],$X["target"]);$gf[$X["table"]][$P][(string)$rd]=$X["target"];$td[(string)$rd]=true;}}$tg=max($tg,$yf[$P]["pos"][0]+2.5+$Ke);}echo'<div id="schema" style="height: ',$tg,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$bg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$tg,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($yf
as$B=>$P){echo"<div class='table' style='top: ".$P["pos"][0]."em; left: ".$P["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($B).'"><b>'.h($B)."</b></a>";foreach($P["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$P["references"]as$gg=>$if){foreach($if
as$rd=>$df){$sd=$rd-$ag[$B][1];$s=0;foreach($df[0]as$If)echo"\n<div class='references' title='".h($gg)."' id='refs$rd-".($s++)."' style='left: $sd"."em; top: ".$P["fields"][$If]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$sd)."em;'></div></div>";}}foreach((array)$gf[$B]as$gg=>$if){foreach($if
as$rd=>$g){$sd=$rd-$ag[$B][1];$s=0;foreach($g
as$fg)echo"\n<div class='references' title='".h($gg)."' id='refd$rd-".($s++)."' style='left: $sd"."em; top: ".$P["fields"][$fg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.7.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$sd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($yf
as$B=>$P){foreach((array)$P["references"]as$gg=>$if){foreach($if
as$rd=>$df){$Pd=$tg;$Fd=-10;foreach($df[0]as$x=>$If){$Le=$P["pos"][0]+$P["fields"][$If]["pos"];$Me=$yf[$gg]["pos"][0]+$yf[$gg]["fields"][$df[1][$x]]["pos"];$Pd=min($Pd,$Le,$Me);$Fd=max($Fd,$Le,$Me);}echo"<div class='references' id='refl$rd' style='left: $rd"."em; top: $Pd"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Fd-$Pd)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(117),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$ib="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$ib.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($ib,1));$R=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$hc=dump_headers((count($R)==1?key($R):DB),(DB==""||count($R)>1));$dd=ereg('sql',$_POST["format"]);if($dd)echo"-- Adminer $ia ".$Eb[DRIVER]." dump

".($w!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$i->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Rf=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($i->select_db($m)){if($dd&&ereg('CREATE',$Rf)&&($k=$i->result("SHOW CREATE DATABASE ".idf_escape($m),1))){if($Rf=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$k;\n";}if($dd){if($Rf)echo
use_sql($m).";\n\n";$xe="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$sf){foreach(get_rows("SHOW $sf STATUS WHERE Db = ".q($m),null,"-- ")as$J)$xe.=($Rf!='DROP+CREATE'?"DROP $sf IF EXISTS ".idf_escape($J["Name"]).";;\n":"").remove_definer($i->result("SHOW CREATE $sf ".idf_escape($J["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$J)$xe.=($Rf!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($J["Name"]).";;\n":"").remove_definer($i->result("SHOW CREATE EVENT ".idf_escape($J["Name"]),3)).";;\n\n";}if($xe)echo"DELIMITER ;;\n\n$xe"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Wg=array();foreach(table_status('',true)as$B=>$Q){$P=(DB==""||in_array($B,(array)$_POST["tables"]));$ob=(DB==""||in_array($B,(array)$_POST["data"]));if($P||$ob){if($hc=="tar"){$rg=new
TmpFile;ob_start(array($rg,'write'),1e5);}$b->dumpTable($B,($P?$_POST["table_style"]:""),(is_view($Q)?2:0));if(is_view($Q))$Wg[]=$B;elseif($ob){$p=fields($B);$b->dumpData($B,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($B));}if($dd&&$_POST["triggers"]&&$P&&($Bg=trigger_sql($B,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Bg\nDELIMITER ;\n";if($hc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$B.csv",$rg);}elseif($dd)echo"\n";}}foreach($Wg
as$Vg)$b->dumpTable($Vg,$_POST["table_style"],1);if($hc=="tar")echo
pack("x512");}}}if($dd)echo"-- ".$i->result("SELECT NOW()")."\n";exit;}page_header(lang(118),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$sb=array('','USE','DROP+CREATE','CREATE');$cg=array('','DROP+CREATE','CREATE');$pb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$pb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$J);if(!$J)$J=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($J["events"])){$J["routines"]=$J["events"]=($_GET["dump"]=="");$J["triggers"]=$J["table_style"];}echo"<tr><th>".lang(119)."<td>".html_select("output",$b->dumpOutput(),$J["output"],0)."\n";echo"<tr><th>".lang(120)."<td>".html_select("format",$b->dumpFormat(),$J["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".lang(25)."<td>".html_select('db_style',$sb,$J["db_style"]).(support("routine")?checkbox("routines",1,$J["routines"],lang(121)):"").(support("event")?checkbox("events",1,$J["events"],lang(122)):"")),"<tr><th>".lang(85)."<td>".html_select('table_style',$cg,$J["table_style"]).checkbox("auto_increment",1,$J["auto_increment"],lang(99)).(support("trigger")?checkbox("triggers",1,$J["triggers"],lang(115)):""),"<tr><th>".lang(123)."<td>".html_select('data_style',$pb,$J["data_style"]),'</table>
<p><input type="submit" value="',lang(118),'">
<input type="hidden" name="token" value="',$S,'">

<table cellspacing="0">
';$Pe=array();if(DB!=""){$Pa=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Pa onclick='formCheck(this, /^tables\\[/);'>".lang(85)."</label>","<th style='text-align: right;'><label class='block'>".lang(123)."<input type='checkbox' id='check-data'$Pa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Wg="";$dg=tables_list();foreach($dg
as$B=>$T){$Oe=ereg_replace("_.*","",$B);$Pa=($a==""||$a==(substr($a,-1)=="%"?"$Oe%":$B));$Se="<tr><td>".checkbox("tables[]",$B,$Pa,$B,"checkboxClick(event, this); formUncheck('check-tables');","block");if($T!==null&&!eregi("table",$T))$Wg.="$Se\n";else
echo"$Se<td align='right'><label class='block'><span id='Rows-".h($B)."'></span>".checkbox("data[]",$B,$Pa,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Pe[$Oe]++;}echo$Wg;if($dg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(25)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Oe=ereg_replace("_.*","",$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Oe%",$m,"formUncheck('check-databases');","block")."\n";$Pe[$Oe]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$rc=true;foreach($Pe
as$x=>$X){if($x!=""&&$X>1){echo($rc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$rc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(54));$H=$i->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Dc=$H;if(!$H)$H=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Dc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(23)."<th>".lang(22)."<th>&nbsp;</thead>\n";while($J=$H->fetch_assoc())echo'<tr'.odd().'><td>'.h($J["User"])."<td>".h($J["Host"]).'<td><a href="'.h(ME.'user='.urlencode($J["User"]).'&host='.urlencode($J["Host"])).'">'.lang(34)."</a>\n";if(!$Dc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(34)."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.lang(124)."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Lc=&get_session("queries");$Kc=&$Lc[DB];if(!$n&&$_POST["clear"]){$Kc=array();redirect(remove_from_uri("history"));}page_header(lang(47),$n);if(!$n&&$_POST){$zc=false;$G=$_POST["query"];if($_POST["webfile"]){$zc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$G=($zc?fread($zc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"][0]!=4)$G=get_file("sql_file",true);if(is_string($G)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($G)+memory_get_usage()+8e6));if($G!=""&&strlen($G)<1e6){$F=$G.(ereg(";[ \t\r\n]*\$",$G)?"":";");if(!$Kc||reset(end($Kc))!=$F){restart_session();$Kc[]=array($F,time());set_session("queries",$Lc);stop_session();}}$Jf="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$wb=";";$C=0;$Rb=true;$j=connect();if(is_object($j)&&DB!="")$j->select_db(DB);$ab=0;$Xb=array();$xd=0;$Be='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$ug=microtime();parse_str($_COOKIE["adminer_export"],$qa);$Jb=$b->dumpFormat();unset($Jb["sql"]);while($G!=""){if(!$C&&preg_match("~^$Jf*DELIMITER\\s+(\\S+)~i",$G,$A)){$wb=$A[1];$G=substr($G,strlen($A[0]));}else{preg_match('('.preg_quote($wb)."\\s*|$Be)",$G,$A,PREG_OFFSET_CAPTURE,$C);list($xc,$Ke)=$A[0];if(!$xc&&$zc&&!feof($zc))$G.=fread($zc,1e5);else{if(!$xc&&rtrim($G)=="")break;$C=$Ke+strlen($xc);if($xc&&rtrim($xc)!=$wb){while(preg_match('('.($xc=='/*'?'\\*/':($xc=='['?']':(ereg('^-- |^#',$xc)?"\n":preg_quote($xc)."|\\\\."))).'|$)s',$G,$A,PREG_OFFSET_CAPTURE,$C)){$wf=$A[0][0];if(!$wf&&$zc&&!feof($zc))$G.=fread($zc,1e5);else{$C=$A[0][1]+strlen($wf);if($wf[0]!="\\")break;}}}else{$Rb=false;$F=substr($G,0,$Ke);$ab++;$Se="<pre id='sql-$ab'><code class='jush-$w'>".shorten_utf8(trim($F),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Se;ob_flush();flush();}$Mf=microtime();if($i->multi_query($F)&&is_object($j)&&preg_match("~^$Jf*USE\\b~isU",$F))$j->query($F);do{$H=$i->store_result();$Sb=microtime();$lg=" <span class='time'>(".format_time($Mf,$Sb).")</span>".(strlen($F)<1000?" <a href='".h(ME)."sql=".urlencode(trim($F))."'>".lang(34)."</a>":"");if($i->error){echo($_POST["only_errors"]?$Se:""),"<p class='error'>".lang(125).($i->errno?" ($i->errno)":"").": ".error()."\n";$Xb[]=" <a href='#sql-$ab'>$ab</a>";if($_POST["error_stops"])break
2;}elseif(is_object($H)){$se=select($H,$j);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($H->num_rows?lang(126,$H->num_rows):"").$lg;$Oc="export-$ab";$gc=", <a href='#$Oc' onclick=\"return !toggle('$Oc');\">".lang(118)."</a><span id='$Oc' class='hidden'>: ".html_select("output",$b->dumpOutput(),$qa["output"])." ".html_select("format",$Jb,$qa["format"])."<input type='hidden' name='query' value='".h($F)."'>"." <input type='submit' name='export' value='".lang(118)."'><input type='hidden' name='token' value='$S'></span>\n";if($j&&preg_match("~^($Jf|\\()*SELECT\\b~isU",$F)&&($fc=explain($j,$F))){$Oc="explain-$ab";echo", <a href='#$Oc' onclick=\"return !toggle('$Oc');\">EXPLAIN</a>$gc","<div id='$Oc' class='hidden'>\n";select($fc,$j,($w=="sql"?"http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/explain-output.html#explain_":""),$se);echo"</div>\n";}else
echo$gc;echo"</form>\n";}}else{if(preg_match("~^$Jf*(CREATE|DROP|ALTER)$Jf+(DATABASE|SCHEMA)\\b~isU",$F)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($i->info)."'>".lang(127,$i->affected_rows)."$lg\n";}$Mf=$Sb;}while($i->next_result());$xd+=substr_count($F.$xc,"\n");$G=substr($G,$C);$C=0;}}}}if($Rb)echo"<p class='message'>".lang(128)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(129,$ab-count($Xb))," <span class='time'>(".format_time($ug,microtime()).")</span>\n";}elseif($Xb&&$ab>1)echo"<p class='error'>".lang(125).": ".implode("",$Xb)."\n";}else
echo"<p class='error'>".upload_error($G)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$F=$_GET["sql"];if($_POST)$F=$_POST["query"];elseif($_GET["history"]=="all")$F=$Kc;elseif($_GET["history"]!="")$F=$Kc[$_GET["history"]][0];textarea("query",$F,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>".(ini_bool("file_uploads")?lang(130).': <input type="file" name="sql_file[]" multiple'.($_FILES&&$_FILES["sql_file"]["error"][0]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':lang(131)),'<p>
<input type="submit" value="',lang(33),'" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],lang(132))."\n",checkbox("only_errors",1,$_POST["only_errors"],lang(133))."\n";print_fieldset("webfile",lang(134),$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");echo
lang(135,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(136).'">',"</div></fieldset>\n";if($Kc){print_fieldset("history",lang(137),$_GET["history"]!="");for($X=end($Kc);$X;$X=prev($Kc)){$x=key($Kc);list($F,$lg)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.lang(34)."</a> <span class='time' title='".@date('Y-m-d',$lg)."'>".@date("H:i:s",$lg)."</span> <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$F)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(138)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(139)."</a>\n","</div></fieldset>\n";}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Lg=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$B=>$o){if(!isset($o["privileges"][$Lg?"update":"insert"])||$b->fieldName($o)=="")unset($p[$B]);}if($_POST&&!$n&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"])$_=($Lg?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$_))$_=ME."select=".urlencode($a);$v=indexes($a);$Gg=unique_array($_GET["where"],$v);$af="\nWHERE $Z";if(isset($_POST["delete"])){$G="FROM ".table($a);query_redirect("DELETE".($Gg?" $G$af":limit1($G,$af)),$_,lang(140));}else{$N=array();foreach($p
as$B=>$o){$X=process_input($o);if($X!==false&&$X!==null)$N[idf_escape($B)]=($Lg?"\n".idf_escape($B)." = $X":$X);}if($Lg){if(!$N)redirect($_);$G=table($a)." SET".implode(",",$N);query_redirect("UPDATE".($Gg?" $G$af":limit1($G,$af)),$_,lang(141));}else{$H=insert_into($a,$N);$qd=($H?last_id():0);queries_redirect($_,lang(142,($qd?" $qd":"")),$H);}}}$Yf=$b->tableName(table_status1($a,true));page_header(($Lg?lang(34):lang(143)),$n,array("select"=>array($a,$Yf)),$Yf);$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($Z){$L=array();foreach($p
as$B=>$o){if(isset($o["privileges"]["select"])){$ya=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$ya="''";if($w=="sql"&&ereg("enum|set",$o["type"]))$ya="1*".idf_escape($B);$L[]=($ya?"$ya AS ":"").idf_escape($B);}}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false)echo"<p class='error'>".lang(89)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(144)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$B=>$o){echo"<tr><th>".$b->fieldName($o);$vb=$_GET["set"][bracket_escape($B)];if($vb===null){$vb=$o["default"];if($o["type"]=="bit"&&ereg("^b'([01]*)'\$",$vb,$jf))$vb=$jf[1];}$Y=($J!==null?($J[$B]!=""&&$w=="sql"&&ereg("enum|set",$o["type"])?(is_array($J[$B])?array_sum($J[$B]):+$J[$B]):$J[$B]):(!$Lg&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$vb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$B]:($Lg&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(ereg("time",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".lang(145)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Lg?lang(146):lang(147))."' title='Ctrl+Shift+Enter'>\n";}echo($Lg?"<input type='submit' name='delete' value='".lang(148)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$Ce=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$ff=referencable_primary($a);$vc=array();foreach($ff
as$Yf=>$o)$vc[str_replace("`","``",$Yf)."`".str_replace("`","``",$o["field"])]=$Yf;$ve=array();$Q=array();if($a!=""){$ve=fields($a);$Q=table_status($a);if(!$Q)$n=lang(7);}$J=$_POST;$J["fields"]=(array)$J["fields"];if($J["auto_increment_col"])$J["fields"][$J["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($J["fields"])&&!$n){if($_POST["drop"])query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),lang(149));else{$p=array();$wa=array();$Ng=false;$tc=array();ksort($J["fields"]);$ue=reset($ve);$ua=" FIRST";foreach($J["fields"]as$x=>$o){$q=$vc[$o["type"]];$Cg=($q!==null?$ff[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($x==$J["auto_increment_col"])$o["auto_increment"]=true;$Xe=process_field($o,$Cg);$wa[]=array($o["orig"],$Xe,$ua);if($Xe!=process_field($ue,$ue)){$p[]=array($o["orig"],$Xe,$ua);if($o["orig"]!=""||$ua)$Ng=true;}if($q!==null)$tc[idf_escape($o["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ")." FOREIGN KEY (".idf_escape($o["field"]).") REFERENCES ".table($vc[$o["type"]])." (".idf_escape($Cg["field"]).")".(ereg("^($he)\$",$o["on_delete"])?" ON DELETE $o[on_delete]":"");$ua=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Ng=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$ue=next($ve);if(!$ue)$ua="";}}$Ee="";if(in_array($J["partition_by"],$Ce)){$Fe=array();if($J["partition_by"]=='RANGE'||$J["partition_by"]=='LIST'){foreach(array_filter($J["partition_names"])as$x=>$X){$Y=$J["partition_values"][$x];$Fe[]="\n  PARTITION ".idf_escape($X)." VALUES ".($J["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Ee.="\nPARTITION BY $J[partition_by]($J[partition])".($Fe?" (".implode(",",$Fe)."\n)":($J["partitions"]?" PARTITIONS ".(+$J["partitions"]):""));}elseif(support("partitioning")&&ereg("partitioned",$Q["Create_options"]))$Ee.="\nREMOVE PARTITIONING";$Jd=lang(150);if($a==""){cookie("adminer_engine",$J["Engine"]);$Jd=lang(151);}$B=trim($J["name"]);queries_redirect(ME."table=".urlencode($B),$Jd,alter_table($a,$B,($w=="sqlite"&&($Ng||$tc)?$wa:$p),$tc,$J["Comment"],($J["Engine"]&&$J["Engine"]!=$Q["Engine"]?$J["Engine"]:""),($J["Collation"]&&$J["Collation"]!=$Q["Collation"]?$J["Collation"]:""),($J["Auto_increment"]!=""?+$J["Auto_increment"]:""),$Ee));}}page_header(($a!=""?lang(31):lang(152)),$n,array("table"=>$a),$a);if(!$_POST){$J=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($U["int"])?"int":(isset($U["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$J=$Q;$J["name"]=$a;$J["fields"]=array();if(!$_GET["auto_increment"])$J["Auto_increment"]="";foreach($ve
as$o){$o["has_default"]=isset($o["default"]);$J["fields"][]=$o;}if(support("partitioning")){$_c="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$H=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $_c ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($J["partition_by"],$J["partitions"],$J["partition"])=$H->fetch_row();$Fe=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $_c AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Fe[""]="";$J["partition_names"]=array_keys($Fe);$J["partition_values"]=array_values($Fe);}}}$Xa=collations();$Ub=engines();foreach($Ub
as$Tb){if(!strcasecmp($Tb,$J["Engine"])){$J["Engine"]=$Tb;break;}}echo'
<form action="" method="post" id="form">
<p>
',lang(153),': <input name="name" maxlength="64" value="',h($J["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($Ub?html_select("Engine",array(""=>"(".lang(154).")")+$Ub,$J["Engine"]):""),' ',($Xa&&!ereg("sqlite|mssql",$w)?html_select("Collation",array(""=>"(".lang(91).")")+$Xa,$J["Collation"]):""),' <input type="submit" value="',lang(145),'">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$cb=($_POST?$_POST["comments"]:$J["Comment"]!="");if(!$_POST&&!$cb){foreach($J["fields"]as$o){if($o["comment"]!=""){$cb=true;break;}}}edit_fields($J["fields"],$Xa,"TABLE",$vc,$cb);echo'</table>
<p>
',lang(99),': <input type="number" name="Auto_increment" size="6" value="',h($J["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(100),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($cb?" checked":"").">".lang(101)."</label>".' <input name="Comment" id="Comment" value="'.h($J["Comment"]).'" maxlength="'.($i->server_info>=5.5?2048:60).'"'.($cb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(145),'">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}if(support("partitioning")){$De=ereg('RANGE|LIST',$J["partition_by"]);print_fieldset("partition",lang(155),$J["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Ce,$J["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($J["partition"]),'">)
',lang(156),': <input type="number" name="partitions" class="size" value="',h($J["partitions"]),'"',($De||!$J["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($De?"":" class='hidden'"),'>
<thead><tr><th>',lang(157),'<th>',lang(158),'</thead>
';foreach($J["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($J["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($J["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Tc=array("PRIMARY","UNIQUE","INDEX");$Q=table_status($a,true);if(eregi("MyISAM|M?aria".($i->server_info>=5.6?"|InnoDB":""),$Q["Engine"]))$Tc[]="FULLTEXT";$v=indexes($a);if($w=="sqlite"){unset($Tc[0]);unset($v[""]);}$J=$_POST;if($_POST&&!$n&&!$_POST["add"]){$c=array();foreach($J["indexes"]as$u){$B=$u["name"];if(in_array($u["type"],$Tc)){$g=array();$wd=array();$yb=array();$N=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$f){if($f!=""){$vd=$u["lengths"][$x];$xb=$u["descs"][$x];$N[]=idf_escape($f).($vd?"(".(+$vd).")":"").($xb?" DESC":"");$g[]=$f;$wd[]=($vd?$vd:null);$yb[]=$xb;}}if($g){$ec=$v[$B];if($ec){ksort($ec["columns"]);ksort($ec["lengths"]);ksort($ec["descs"]);if($u["type"]==$ec["type"]&&array_values($ec["columns"])===$g&&(!$ec["lengths"]||array_values($ec["lengths"])===$wd)&&array_values($ec["descs"])===$yb){unset($v[$B]);continue;}}$c[]=array($u["type"],$B,"(".implode(", ",$N).")");}}}foreach($v
as$B=>$ec)$c[]=array($ec["type"],$B,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(159),alter_indexes($a,$c));}page_header(lang(109),$n,array("table"=>$a),$a);$p=array_keys(fields($a));if($_POST["add"]){foreach($J["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$J["indexes"][$x]["columns"][]="";}$u=end($J["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen')||array_filter($u["lengths"],'strlen')||array_filter($u["descs"]))$J["indexes"][]=array("columns"=>array(1=>""));}if(!$J){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$J["indexes"]=$v;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>',lang(160),'<th>',lang(161),'<th>',lang(162),'</thead>
';$gd=1;foreach($J["indexes"]as$u){echo"<tr><td>".html_select("indexes[$gd][type]",array(-1=>"")+$Tc,$u["type"],($gd==count($J["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($u["columns"]);$s=1;foreach($u["columns"]as$x=>$f){echo"<span>".html_select("indexes[$gd][columns][$s]",array(-1=>"")+$p,$f,($s==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');"),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$gd][lengths][$s]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$gd][descs][$s]",1,$u["descs"][$x],lang(42)):"")," </span>";$s++;}echo"<td><input name='indexes[$gd][name]' value='".h($u["name"])."' autocapitalize='off'>\n";$gd++;}echo'</table>
<p>
<input type="submit" value="',lang(145),'">
<noscript><p><input type="submit" name="add" value="',lang(102),'"></noscript>
<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["database"])){$J=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();$B=trim($J["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(163),drop_databases(array(DB)));}elseif(DB!==$B){if(DB!=""){$_GET["db"]=$B;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($B),lang(164),rename_database($B,$J["collation"]));}else{$l=explode("\n",str_replace("\r","",$B));$Sf=true;$pd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$J["collation"]))$Sf=false;$pd=$m;}}queries_redirect(ME."db=".urlencode($pd),lang(165),$Sf);}}else{if(!$J["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($B).(eregi('^[a-z0-9_]+$',$J["collation"])?" COLLATE $J[collation]":""),substr(ME,0,-1),lang(166));}}page_header(DB!=""?lang(50):lang(167),$n,array(),DB);$Xa=collations();$B=DB;if($_POST)$B=$J["name"];elseif(DB!="")$J["collation"]=db_collation(DB,$Xa);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Dc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Dc,$A)&&$A[1]){$B=stripcslashes(idf_unescape("`$A[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($B,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($B).'</textarea><br>':'<input name="name" id="name" value="'.h($B).'" maxlength="64" autocapitalize="off">')."\n".($Xa?html_select("collation",array(""=>"(".lang(91).")")+$Xa,$J["collation"]):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(145),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.7.1' alt='+' title='".lang(102)."'>\n";echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["scheme"])){$J=$_POST;if($_POST&&!$n){$z=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$z,lang(168));else{$B=trim($J["name"]);$z.=urlencode($B);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($B),$z,lang(169));elseif($_GET["ns"]!=$B)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($B),$z,lang(170));else
redirect($z);}}page_header($_GET["ns"]!=""?lang(51):lang(52),$n);if(!$J)$J["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($J["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(145),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(171).": ".h($da),$n);$sf=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Rc=array();$xe=array();foreach($sf["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$xe[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$Rc[]=$s;}if(!$n&&$_POST){$Ma=array();foreach($sf["fields"]as$x=>$o){if(in_array($x,$Rc)){$X=process_input($o);if($X===false)$X="''";if(isset($xe[$x]))$i->query("SET @".idf_escape($o["field"])." = $X");}$Ma[]=(isset($xe[$x])?"@".idf_escape($o["field"]):$X);}$G=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ma).")";echo"<p><code class='jush-$w'>".h($G)."</code> <a href='".h(ME)."sql=".urlencode($G)."'>".lang(34)."</a>\n";if(!$i->multi_query($G))echo"<p class='error'>".error()."\n";else{$j=connect();if(is_object($j))$j->select_db(DB);do{$H=$i->store_result();if(is_object($H))select($H,$j);else
echo"<p class='message'>".lang(172,$i->affected_rows)."\n";}while($i->next_result());if($xe)select($i->query("SELECT ".implode(", ",$xe)));}}echo'
<form action="" method="post">
';if($Rc){echo"<table cellspacing='0'>\n";foreach($Rc
as$x){$o=$sf["fields"][$x];$B=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$B];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$B]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(171),'">
<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$B=$_GET["name"];$J=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($a)."\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($B),ME."table=".urlencode($a),lang(173));else{$If=array_filter($J["source"],'strlen');ksort($If);$fg=array();foreach($If
as$x=>$X)$fg[$x]=$J["target"][$x];query_redirect("ALTER TABLE ".table($a).($B!=""?"\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($B).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$If)).") REFERENCES ".table($J["table"])." (".implode(", ",array_map('idf_escape',$fg)).")".(ereg("^($he)\$",$J["on_delete"])?" ON DELETE $J[on_delete]":"").(ereg("^($he)\$",$J["on_update"])?" ON UPDATE $J[on_update]":""),ME."table=".urlencode($a),($B!=""?lang(174):lang(175)));$n=lang(176)."<br>$n";}}page_header(lang(177),$n,array("table"=>$a),$a);if($_POST){ksort($J["source"]);if($_POST["add"])$J["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$J["target"]=array();}elseif($B!=""){$vc=foreign_keys($a);$J=$vc[$B];$J["source"][]="";}else{$J["table"]=$a;$J["source"]=array("");}$If=array_keys(fields($a));$fg=($a===$J["table"]?$If:array_keys(fields($J["table"])));$ef=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($J["db"]==""&&$J["ns"]==""){echo
lang(178),':
',html_select("table",$ef,$J["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(179),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(111),'<th>',lang(112),'</thead>
';$gd=0;foreach($J["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$If,$X,($gd==count($J["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$fg,$J["target"][$x]);$gd++;}echo'</table>
<p>
',lang(93),': ',html_select("on_delete",array(-1=>"")+explode("|",$he),$J["on_delete"]),' ',lang(92),': ',html_select("on_update",array(-1=>"")+explode("|",$he),$J["on_update"]),'<p>
<input type="submit" value="',lang(145),'">
<noscript><p><input type="submit" name="add" value="',lang(180),'"></noscript>
';}if($B!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$J=$_POST;if($_POST&&!$n){$B=trim($J["name"]);$ya=" AS\n$J[select]";$_=ME."table=".urlencode($B);$Jd=lang(181);if(!$_POST["drop"]&&$a==$B&&$w!="sqlite")query_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($B).$ya,$_,$Jd);else{$hg=$B."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($B).$ya,"DROP VIEW ".table($B),"CREATE VIEW ".table($hg).$ya,"DROP VIEW ".table($hg),($_POST["drop"]?substr(ME,0,-1):$_),lang(182),$Jd,lang(183),$a,$B);}}if(!$_POST&&$a!=""){$J=view($a);$J["name"]=$a;if(!$n)$n=$i->error;}page_header(($a!=""?lang(30):lang(184)),$n,array("table"=>$a),$a);echo'
<form action="" method="post">
<p>',lang(162),': <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$J["select"]);echo'<p>
<input type="submit" value="',lang(145),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$bd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Of=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$J=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(185));elseif(in_array($J["INTERVAL_FIELD"],$bd)&&isset($Of[$J["STATUS"]])){$xf="\nON SCHEDULE ".($J["INTERVAL_VALUE"]?"EVERY ".q($J["INTERVAL_VALUE"])." $J[INTERVAL_FIELD]".($J["STARTS"]?" STARTS ".q($J["STARTS"]):"").($J["ENDS"]?" ENDS ".q($J["ENDS"]):""):"AT ".q($J["STARTS"]))." ON COMPLETION".($J["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(186):lang(187)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$xf.($aa!=$J["EVENT_NAME"]?"\nRENAME TO ".idf_escape($J["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($J["EVENT_NAME"]).$xf)."\n".$Of[$J["STATUS"]]." COMMENT ".q($J["EVENT_COMMENT"]).rtrim(" DO\n$J[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(188).": ".h($aa):lang(189)),$n);if(!$J&&$aa!=""){$K=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$J=reset($K);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(162),'<td><input name="EVENT_NAME" value="',h($J["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(190),'<td><input name="STARTS" value="',h("$J[EXECUTE_AT]$J[STARTS]"),'">
<tr><th title="datetime">',lang(191),'<td><input name="ENDS" value="',h($J["ENDS"]),'">
<tr><th>',lang(192),'<td><input type="number" name="INTERVAL_VALUE" value="',h($J["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$bd,$J["INTERVAL_FIELD"]),'<tr><th>',lang(80),'<td>',html_select("STATUS",$Of,$J["STATUS"]),'<tr><th>',lang(101),'<td><input name="EVENT_COMMENT" value="',h($J["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$J["ON_COMPLETION"]=="PRESERVE",lang(193)),'</table>
<p>';textarea("EVENT_DEFINITION",$J["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(145),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$sf=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$J=$_POST;$J["fields"]=(array)$J["fields"];if($_POST&&!process_fields($J["fields"])&&!$n){$hg="$J[name]_adminer_".uniqid();drop_create("DROP $sf ".idf_escape($da),create_routine($sf,$J),"DROP $sf ".idf_escape($J["name"]),create_routine($sf,array("name"=>$hg)+$J),"DROP $sf ".idf_escape($hg),substr(ME,0,-1),lang(194),lang(195),lang(196),$da,$J["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(197):lang(198)).": ".h($da):(isset($_GET["function"])?lang(199):lang(200))),$n);if(!$_POST&&$da!=""){$J=routine($da,$sf);$J["name"]=$da;}$Xa=get_vals("SHOW CHARACTER SET");sort($Xa);$tf=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(162),': <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
',($tf?lang(9).": ".html_select("language",$tf,$J["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($J["fields"],$Xa,$sf);if(isset($_GET["function"])){echo"<tr><td>".lang(201);edit_type("returns",$J["returns"],$Xa);}echo'</table>
<p>';textarea("definition",$J["definition"]);echo'<p>
<input type="submit" value="',lang(145),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$J=$_POST;if($_POST&&!$n){$z=substr(ME,0,-1);$B=trim($J["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$z,lang(202));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($B),$z,lang(203));elseif($fa!=$B)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($B),$z,lang(204));else
redirect($z);}page_header($fa!=""?lang(205).": ".h($fa):lang(206),$n);if(!$J)$J["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($J["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(145),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$J=$_POST;if($_POST&&!$n){$z=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$z,lang(207));else
query_redirect("CREATE TYPE ".idf_escape(trim($J["name"]))." $J[as]",$z,lang(208));}page_header($ga!=""?lang(209).": ".h($ga):lang(210),$n);if(!$J)$J["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";else{echo"<input name='name' value='".h($J['name'])."' autocapitalize='off'>\n";textarea("as",$J["as"]);echo"<p><input type='submit' value='".lang(145)."'>\n";}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$B=$_GET["name"];$Ag=trigger_options();$zg=array("INSERT","UPDATE","DELETE");$J=(array)trigger($B)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Ag["Timing"])&&in_array($_POST["Event"],$zg)&&in_array($_POST["Type"],$Ag["Type"])){$ge=" ON ".table($a);$Fb="DROP TRIGGER ".idf_escape($B).($w=="pgsql"?$ge:"");$_=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Fb,$_,lang(211));else{if($B!="")queries($Fb);queries_redirect($_,($B!=""?lang(212):lang(213)),queries(create_trigger($ge,$_POST)));if($B!="")queries(create_trigger($ge,$J+array("Type"=>reset($Ag["Type"]))));}}$J=$_POST;}page_header(($B!=""?lang(214).": ".h($B):lang(215)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(216),'<td>',html_select("Timing",$Ag["Timing"],$J["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(217),'<td>',html_select("Event",$zg,$J["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(96),'<td>',html_select("Type",$Ag["Type"],$J["Type"]),'</table>
<p>',lang(162),': <input name="Trigger" value="',h($J["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$J["Statement"]);echo'<p>
<input type="submit" value="',lang(145),'">
';if($B!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Ve=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$J){foreach(explode(",",($J["Privilege"]=="Grant option"?"":$J["Context"]))as$hb)$Ve[$hb][$J["Privilege"]]=$J["Comment"];}$Ve["Server Admin"]+=$Ve["File access on server"];$Ve["Databases"]["Create routine"]=$Ve["Procedures"]["Create routine"];unset($Ve["Procedures"]["Create routine"]);$Ve["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Ve["Columns"][$X]=$Ve["Tables"][$X];unset($Ve["Server Admin"]["Usage"]);foreach($Ve["Tables"]as$x=>$X)unset($Ve["Databases"][$x]);$Vd=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$Vd[$X]=(array)$Vd[$X]+(array)$_POST["grants"][$x];}$Ec=array();$ee="";if(isset($_GET["host"])&&($H=$i->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($J=$H->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$J[0],$A)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$A[1],$Bd,PREG_SET_ORDER)){foreach($Bd
as$X){if($X[1]!="USAGE")$Ec["$A[2]$X[2]"][$X[1]]=true;if(ereg(' WITH GRANT OPTION',$J[0]))$Ec["$A[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$J[0],$A))$ee=$A[1];}}if($_POST&&!$n){$fe=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $fe",ME."privileges=",lang(218));else{$Xd=q($_POST["user"])."@".q($_POST["host"]);$Ge=$_POST["pass"];if($Ge!=''&&!$_POST["hashed"]){$Ge=$i->result("SELECT PASSWORD(".q($Ge).")");$n=!$Ge;}$lb=false;if(!$n){if($fe!=$Xd){$lb=queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Xd IDENTIFIED BY PASSWORD ".q($Ge));$n=!$lb;}elseif($Ge!=$ee)queries("SET PASSWORD FOR $Xd = ".q($Ge));}if(!$n){$pf=array();foreach($Vd
as$ae=>$Dc){if(isset($_GET["grant"]))$Dc=array_filter($Dc);$Dc=array_keys($Dc);if(isset($_GET["grant"]))$pf=array_diff(array_keys(array_filter($Vd[$ae],'strlen')),$Dc);elseif($fe==$Xd){$ce=array_keys((array)$Ec[$ae]);$pf=array_diff($ce,$Dc);$Dc=array_diff($Dc,$ce);unset($Ec[$ae]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$ae,$A)&&(!grant("REVOKE",$pf,$A[2]," ON $A[1] FROM $Xd")||!grant("GRANT",$Dc,$A[2]," ON $A[1] TO $Xd"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($fe!=$Xd)queries("DROP USER $fe");elseif(!isset($_GET["grant"])){foreach($Ec
as$ae=>$pf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$ae,$A))grant("REVOKE",array_keys($pf),$A[2]," ON $A[1] FROM $Xd");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(219):lang(220)),!$n);if($lb)$i->query("DROP USER $Xd");}}page_header((isset($_GET["host"])?lang(23).": ".h("$ha@$_GET[host]"):lang(124)),$n,array("privileges"=>array('',lang(54))));if($_POST){$J=$_POST;$Ec=$Vd;}else{$J=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$J["pass"]=$ee;if($ee!="")$J["hashed"]=true;$Ec[(DB==""||$Ec?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(22),'<td><input name="host" maxlength="60" value="',h($J["host"]),'" autocapitalize="off">
<tr><th>',lang(23),'<td><input name="user" maxlength="16" value="',h($J["user"]),'" autocapitalize="off">
<tr><th>',lang(24),'<td><input name="pass" id="pass" value="',h($J["pass"]),'">
';if(!$J["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$J["hashed"],lang(221),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer' class='help'>".lang(54)."</a>";$s=0;foreach($Ec
as$ae=>$Dc){echo'<th>'.($ae!="*.*"?"<input name='objects[$s]' value='".h($ae)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(22),"Databases"=>lang(25),"Tables"=>lang(107),"Columns"=>lang(108),"Procedures"=>lang(222),)as$hb=>$xb){foreach((array)$Ve[$hb]as$Ue=>$bb){echo"<tr".odd()."><td".($xb?">$xb<td":" colspan='2'").' lang="en" title="'.h($bb).'">'.h($Ue);$s=0;foreach($Ec
as$ae=>$Dc){$B="'grants[$s][".h(strtoupper($Ue))."]'";$Y=$Dc[strtoupper($Ue)];if($hb=="Server Admin"&&$ae!=(isset($Ec["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$B><option><option value='1'".($Y?" selected":"").">".lang(223)."<option value='0'".($Y=="0"?" selected":"").">".lang(224)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$B value='1'".($Y?" checked":"").($Ue=="All privileges"?" id='grants-$s-all'":($Ue=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(145),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$ld=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$ld++;}queries_redirect(ME."processlist=",lang(225,$ld),$ld||!$_POST["kill"]);}page_header(lang(78),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$J){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($J
as$x=>$X)echo"<th>".($w=="sql"?"<a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/show-processlist.html#processlist_".strtolower($x)."' target='_blank' rel='noreferrer' class='help'>$x</a>":$x);echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$J["Id"],0):"");foreach($J
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&ereg("Query|Killed",$J["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($J["db"]!=""?"db=".urlencode($J["db"])."&":"")."sql=".urlencode($X)).'">'.lang(226).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(227,$i->result("SELECT @@max_connections")),"<p><input type='submit' value='".lang(228)."'>\n";}echo'<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$Q=table_status1($a);$v=indexes($a);$p=fields($a);$vc=column_foreign_keys($a);$be="";if($Q["Oid"]){$be=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($be));}parse_str($_COOKIE["adminer_import"],$ra);$qf=array();$g=array();$kg=null;foreach($p
as$x=>$o){$B=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$B!=""){$g[$x]=html_entity_decode(strip_tags($B),ENT_QUOTES);if(is_shortable($o))$kg=$b->selectLengthProcess();}$qf+=$o["privileges"];}list($L,$Fc)=$b->selectColumnsProcess($g,$v);$cd=count($Fc)<count($L);$Z=$b->selectSearchProcess($p,$v);$pe=$b->selectOrderProcess($p,$v);$y=$b->selectLimitProcess();$_c=($L?implode(", ",$L):"*".($be?", $be":"")).convert_fields($g,$p,$L)."\nFROM ".table($a);$Gc=($Fc&&$cd?"\nGROUP BY ".implode(", ",$Fc):"").($pe?"\nORDER BY ".implode(", ",$pe):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Hg=>$J){$ya=convert_field($p[key($J)]);echo$i->result("SELECT".limit($ya?$ya:idf_escape(key($J))." FROM ".table($a)," WHERE ".where_check($Hg,$p).($Z?" AND ".implode(" AND ",$Z):"").($pe?" ORDER BY ".implode(", ",$pe):""),1));}exit;}if($_POST&&!$n){$ah=$Z;if(is_array($_POST["check"]))$ah[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$ah=($ah?"\nWHERE ".implode(" AND ",$ah):"");$Qe=$Jg=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$Qe=array_flip($u["columns"]);$Jg=($L?$Qe:array());break;}}foreach((array)$Jg
as$x=>$X){if(in_array(idf_escape($x),$L))unset($Jg[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Jg===array())$G="SELECT $_c$ah$Gc";else{$Fg=array();foreach($_POST["check"]as$X)$Fg[]="(SELECT".limit($_c,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$Gc,1).")";$G=implode(" UNION ALL ",$Fg);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($Z,$vc)){if($_POST["save"]||$_POST["delete"]){$H=true;$sa=0;$G=table($a);$N=array();if(!$_POST["delete"]){foreach($g
as$B=>$X){$X=process_input($p[$B]);if($X!==null){if($_POST["clone"])$N[idf_escape($B)]=($X!==false?$X:idf_escape($B));elseif($X!==false)$N[]=idf_escape($B)." = $X";}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Za="UPDATE";if($_POST["delete"]){$Za="DELETE";$G="FROM $G";}if($_POST["clone"]){$Za="INSERT";$G="INTO $G";}if($_POST["all"]||($Jg===array()&&is_array($_POST["check"]))||$cd){$H=queries("$Za $G$ah");$sa=$i->affected_rows;}else{foreach((array)$_POST["check"]as$X){$H=queries($Za.limit1($G,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p)));if(!$H)break;$sa+=$i->affected_rows;}}}$Jd=lang(229,$sa);if($_POST["clone"]&&$H&&$sa==1){$qd=last_id();if($qd)$Jd=lang(142," $qd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Jd,$H);}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(230);else{$H=true;$sa=0;foreach($_POST["val"]as$Hg=>$J){$N=array();foreach($J
as$x=>$X){$x=bracket_escape($x,1);$N[]=idf_escape($x)." = ".(ereg('char|text',$p[$x]["type"])||$X!=""?$b->processInput($p[$x],$X):"NULL");}$G=table($a)." SET ".implode(", ",$N);$Zg=" WHERE ".where_check($Hg,$p).($Z?" AND ".implode(" AND ",$Z):"");$H=queries("UPDATE".($cd||$Jg===array()?" $G$Zg":limit1($G,$Zg)));if(!$H)break;$sa+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(229,$sa),$H);}}elseif(!is_string($oc=get_file("csv_file",true)))$n=upload_error($oc);elseif(!preg_match('~~u',$oc))$n=lang(231);else{cookie("adminer_import","output=".urlencode($ra["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Ya=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$oc,$Bd);$sa=count($Bd[0]);begin();$Cf=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Bd[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Cf]*)$Cf~",$X.$Cf,$Cd);if(!$x&&!array_diff($Cd[1],$Ya)){$Ya=$Cd[1];$sa--;}else{$N=array();foreach($Cd[1]as$s=>$Va)$N[idf_escape($Ya[$s])]=($Va==""&&$p[$Ya[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Va))));$H=insert_update($a,$N,$Qe);if(!$H)break;}}if($H)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(232,$sa),$H);queries("ROLLBACK");}}}$Yf=$b->tableName($Q);if(is_ajax())ob_start();page_header(lang(36).": $Yf",$n);$N=null;if(isset($qf["insert"])){$N="";foreach((array)$_GET["where"]as$X){if(count($vc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$N.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($Q,$N);if(!$g)echo"<p class='error'>".lang(233).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$g);$b->selectSearchPrint($Z,$g,$v);$b->selectOrderPrint($pe,$g,$v);$b->selectLimitPrint($y);$b->selectLengthPrint($kg);$b->selectActionPrint($v);echo"</form>\n";$D=$_GET["page"];if($D=="last"){$yc=$i->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$D=floor(max(0,$yc-1)/$y);}$G=$b->selectQueryBuild($L,$Z,$Fc,$pe,$y,$D);if(!$G)$G="SELECT".limit((+$y&&$Fc&&$cd&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").$_c,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Gc,($y!=""?+$y:null),($D?$y*$D:0),"\n");echo$b->selectQuery($G);$H=$i->query($G);if(!$H)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$D)$H->seek($y*$D);$Qb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$w=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last")$yc=(+$y&&$Fc&&$cd?($w=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($G) x")):count($K));if(!$K)echo"<p class='message'>".lang(89)."\n";else{$Ea=$b->backwardKeys($a,$Yf);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Fc&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(234)."</a>");$Ud=array();$Cc=array();reset($L);$bf=1;foreach($K[0]as$x=>$X){if($x!=$be){$X=$_GET["columns"][key($L)];$o=$p[$L?($X?$X["col"]:current($L)):$x];$B=($o?$b->fieldName($o,$bf):"*");if($B!=""){$bf++;$Ud[$x]=$B;$f=idf_escape($x);$Nc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$xb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Nc.($pe[0]==$f||$pe[0]==$x||(!$pe&&$cd&&$Fc[0]==$f)?$xb:'')).'">';echo(!$L||$X?apply_sql_function($X["fun"],$B):h(current($L)))."</a>";echo"<span class='column hidden'>","<a href='".h($Nc.$xb)."' title='".lang(42)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.lang(39).'" class="text jsonly"> =</a>';echo"</span>";}$Cc[$x]=$X["fun"];next($L);}}$wd=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$x=>$X)$wd[$x]=max($wd[$x],min(40,strlen(utf8_decode($X))));}}echo($Ea?"<th>".lang(235):"")."</thead>\n";if(is_ajax()){if($y%2==1&&$D%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($K,$vc)as$Td=>$J){$Gg=unique_array($K[$Td],$v);if(!$Gg){$Gg=array();foreach($K[$Td]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$Gg[$x]=$X;}}$Hg="";foreach($Gg
as$x=>$X){if(strlen($X)>64){$x="MD5(".(strpos($x,'(')?$x:idf_escape($x)).")";$X=md5($X);}$Hg.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Fc&&$L?"":"<td>".checkbox("check[]",substr($Hg,1),in_array(substr($Hg,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($cd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Hg)."'>".lang(234)."</a>"));foreach($J
as$x=>$X){if(isset($Ud[$x])){$o=$p[$x];if($X!=""&&(!isset($Qb[$x])||$Qb[$x]!=""))$Qb[$x]=(is_mail($X)?$Ud[$x]:"");$z="";$X=$b->editVal($X,$o);if($X!==null){if(ereg('blob|bytea|raw|file',$o["type"])&&$X!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($x).$Hg;if($X==="")$X="&nbsp;";elseif($kg!=""&&is_shortable($o))$X=shorten_utf8($X,max(0,+$kg));else$X=h($X);if(!$z){foreach((array)$vc[$x]as$q){if(count($vc[$x])==1||end($q["source"])==$x){$z="";foreach($q["source"]as$s=>$If)$z.=where_link($s,$q["target"][$s],$K[$Td][$If]);$z=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$z;if(count($q["source"])==1)break;}}}if($x=="COUNT(*)"){$z=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Gg))$z.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Gg
as$hd=>$W)$z.=where_link($s++,$hd,$W);}}if(!$z&&($z=$b->selectLink($J[$x],$o))===null){if(is_mail($J[$x]))$z="mailto:$J[$x]";if($Ye=is_url($J[$x]))$z=($Ye=="http"&&$ba?$J[$x]:"$Ye://www.adminer.org/redirect/?url=".urlencode($J[$x]));}$Oc=h("val[$Hg][".bracket_escape($x)."]");$Y=$_POST["val"][$Hg][bracket_escape($x)];$Ic=h($Y!==null?$Y:$J[$x]);$_d=strpos($X,"<i>...</i>");$Mb=is_utf8($X)&&$K[$Td][$x]==$J[$x]&&!$Cc[$x];$jg=ereg('text|lob',$o["type"]);echo(($_GET["modify"]&&$Mb)||$Y!==null?"<td>".($jg?"<textarea name='$Oc' cols='30' rows='".(substr_count($J[$x],"\n")+1)."'>$Ic</textarea>":"<input name='$Oc' value='$Ic' size='$wd[$x]'>"):"<td id='$Oc' onclick=\"selectClick(this, event, ".($_d?2:($jg?1:0)).($Mb?"":", '".h(lang(236))."'").");\">".$b->selectVal($X,$z,$o));}}if($Ea)echo"<td>";$b->backwardKeysPrint($Ea,$K[$Td]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Fc&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($K||$D)&&!is_ajax()){$ac=true;if($_GET["page"]!="last"&&+$y&&!$cd&&($yc>=$y||$D)){$yc=found_rows($Q,$Z);if($yc<max(1e4,2*($D+1)*$y))$yc=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):"")));else$ac=false;}if(+$y&&($yc===false||$yc>$y||$D)){echo"<p class='pages'>";$Ed=($yc===false?$D+(count($K)>=$y?2:1):floor(($yc-1)/$y));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(237)."', '".($D+1)."'), event); return false;\">".lang(237)."</a>:",pagination(0,$D).($D>5?" ...":"");for($s=max(1,$D-4);$s<min($Ed,$D+5);$s++)echo
pagination($s,$D);if($Ed>0){echo($D+5<$Ed?" ...":""),($ac&&$yc!==false?pagination($Ed,$D):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Ed'>".lang(238)."</a>");}echo(($yc===false?count($K)+1:$yc-$D*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($D+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.lang(239).'\');">'.lang(240).'</a>':'');}echo"<p>\n",($yc!==false?"(".($ac?"":"~ ").lang(126,$yc).") ":""),checkbox("all",1,0,lang(241))."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>',lang(34),'</legend><div>
<input type="submit" value="',lang(145),'"',($_GET["modify"]?'':' title="'.lang(230).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(34),'">
<input type="submit" name="clone" value="',lang(226),'">
<input type="submit" name="delete" value="',lang(148),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$yc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$wc=$b->dumpFormat();foreach((array)$_GET["columns"]as$f){if($f["fun"]){unset($wc['sql']);break;}}if($wc){print_fieldset("export",lang(118));$ye=$b->dumpOutput();echo($ye?html_select("output",$ye,$ra["output"])." ":""),html_select("format",$wc,$ra["format"])," <input type='submit' name='export' value='".lang(118)."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",lang(55),!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"],1);echo" <input type='submit' name='import' value='".lang(55)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Qb,'strlen'),$g);echo"<p><input type='hidden' name='token' value='$S'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Nf=isset($_GET["status"]);page_header($Nf?lang(80):lang(79));$Tg=($Nf?show_status():show_variables());if(!$Tg)echo"<p class='message'>".lang(89)."\n";else{echo"<table cellspacing='0'>\n";foreach($Tg
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Nf?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Vf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$B=>$Q){$Oc=js_escape($B);json_row("Comment-$Oc",nbsp($Q["Comment"]));if(!is_view($Q)){foreach(array("Engine","Collation")as$x)json_row("$x-$Oc",nbsp($Q[$x]));foreach($Vf+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($Q[$x]!=""){$X=number_format($Q[$x],0,'.',lang(8));json_row("$x-$Oc",($x=="Rows"&&$X&&$Q["Engine"]==($Kf=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Vf[$x]))$Vf[$x]+=($Q["Engine"]!="InnoDB"||$x!="Data_free"?$Q[$x]:0);}elseif(array_key_exists($x,$Q))json_row("$x-$Oc");}}}foreach($Vf
as$x=>$X)json_row("sum-$x",number_format($X,0,'.',lang(8)));json_row("");}elseif($_GET["script"]=="kill")$i->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X)json_row("tables-".js_escape($m),$X);json_row("");}exit;}else{$eg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($eg&&!$n&&!$_POST["search"]){$H=true;$Jd="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$H=truncate_tables($_POST["tables"]);$Jd=lang(242);}elseif($_POST["move"]){$H=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Jd=lang(243);}elseif($_POST["copy"]){$H=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Jd=lang(244);}elseif($_POST["drop"]){if($_POST["views"])$H=drop_views($_POST["views"]);if($H&&$_POST["tables"])$H=drop_tables($_POST["tables"]);$Jd=lang(245);}elseif($w!="sql"){$H=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$Jd=lang(246);}elseif(!$_POST["tables"])$Jd=lang(7);elseif($H=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($J=$H->fetch_assoc())$Jd.="<b>".h($J["Table"])."</b>: ".h($J["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$Jd,$H);}page_header(($_GET["ns"]==""?lang(25).": ".h(DB):lang(87).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(247)."</h3>\n";$dg=tables_list();if(!$dg)echo"<p class='message'>".lang(7)."\n";else{echo"<form action='' method='post'>\n","<p>".lang(248).": <input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(39)."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.lang(107),'<td>'.lang(249),'<td>'.lang(84),'<td>'.lang(250),'<td>'.lang(251),'<td>'.lang(252),'<td>'.lang(99),'<td>'.lang(253),(support("comment")?'<td>'.lang(101):''),"</thead>\n";foreach($dg
as$B=>$T){$Vg=($T!==null&&!eregi("table",$T));echo'<tr'.odd().'><td>'.checkbox(($Vg?"views[]":"tables[]"),$B,in_array($B,$eg,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($B).'" title="'.lang(29).'">'.h($B).'</a>';if($Vg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($B).'" title="'.lang(30).'">'.lang(106).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($B).'" title="'.lang(28).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(31)),"Index_length"=>array("indexes",lang(110)),"Data_free"=>array("edit",lang(32)),"Auto_increment"=>array("auto_increment=1&create",lang(31)),"Rows"=>array("select",lang(28)),)as$x=>$z)echo($z?"<td align='right'><a href='".h(ME."$z[0]=").urlencode($B)."' id='$x-".h($B)."' title='$z[1]'>?</a>":"<td id='$x-".h($B)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($B)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(227,count($dg)),"<td>".nbsp($w=="sql"?$i->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$w)?($w!="sqlite"?"<input type='submit' value='".lang(254)."'> ":"")."<input type='submit' name='optimize' value='".lang(255)."'> ":"").($w=="sql"?"<input type='submit' name='check' value='".lang(256)."'> <input type='submit' name='repair' value='".lang(257)."'> ":"")."<input type='submit' name='truncate' value='".lang(258)."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".lang(86)."'".confirm("formChecked(this, /tables|views/)").">\n";$l=(support("scheme")?schemas():$b->databases());if(count($l)!=1&&$w!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(259).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(260)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(261)."'>":""),"\n";}echo"<input type='hidden' name='token' value='$S'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.lang(152)."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.lang(184)."</a>\n";if(support("routine")){echo"<h3 id='routines'>".lang(121)."</h3>\n";$uf=routines();if($uf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(162).'<td>'.lang(96).'<td>'.lang(201)."<td>&nbsp;</thead>\n";odd('');foreach($uf
as$J){echo'<tr'.odd().'>','<th><a href="'.h(ME).($J["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($J["ROUTINE_NAME"]).'">'.h($J["ROUTINE_NAME"]).'</a>','<td>'.h($J["ROUTINE_TYPE"]),'<td>'.h($J["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($J["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($J["ROUTINE_NAME"]).'">'.lang(113)."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(200).'</a> ':'').'<a href="'.h(ME).'function=">'.lang(199)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(262)."</h3>\n";$Df=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Df){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(162)."</thead>\n";odd('');foreach($Df
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".lang(206)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(13)."</h3>\n";$Pg=types();if($Pg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(162)."</thead>\n";odd('');foreach($Pg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".lang(210)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(122)."</h3>\n";$K=get_rows("SHOW EVENTS");if($K){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(162)."<td>".lang(263)."<td>".lang(190)."<td>".lang(191)."<td></thead>\n";foreach($K
as$J){echo"<tr>","<th>".h($J["Name"]),"<td>".($J["Execute at"]?lang(264)."<td>".$J["Execute at"]:lang(192)." ".$J["Interval value"]." ".$J["Interval field"]."<td>$J[Starts]"),"<td>$J[Ends]",'<td><a href="'.h(ME).'event='.urlencode($J["Name"]).'">'.lang(113).'</a>';}echo"</table>\n";$Zb=$i->result("SELECT @@event_scheduler");if($Zb&&$Zb!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Zb)."\n";}echo'<p><a href="'.h(ME).'event=">'.lang(189)."</a>\n";}if($dg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();