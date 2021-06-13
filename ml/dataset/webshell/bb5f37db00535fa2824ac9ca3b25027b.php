<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.4
*/error_reporting(6135);$Jc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Jc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Gh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Gh)$$X=$Gh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0\0\n @\0C\"\0`EQ?tvM'Jdd\\b0\0\"fӈs5AXPaJ08#RTz`#.cXȀ?-\0Im?.M\0ȯ(̉/(%\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ٌ̇l7B14vb0fsn2Bѱ٘n:#(b.\rDc)a7Elñi1̎s-4f	i7Févt2!r0t~U'3MWB'cP:6T\rcAzr_WK\r-VNFS%~c&\\^ruŎÞً4'7kQh'g\rFB\ryT7SSP1=ǤcI:dm>S8LJt.M	ϋ`'C889 Q2#8А6mjh<9/:J)ʂ\0d>!\0Zvno(k7s>!R\"*nS\0@P\"(#[@gozn9k8n1I*=n0c(;à!*c>ΎE7DLJ1J=1L?s=#`3\$4uȱzGC YAt?;Qk&YPuǯ}UaHV%G;s<A\0\\P\\&ªV\nSUtr2	l^Z6ejAd[sնJPҝ8=6#˂74*#e!7{6<oC9v[M-`k>lڴIH3xw0t6%MR%jhB<\0AQ<P<:u/;\\>-ʈQH\nvL+væ<\rv\\*Ӵݢgn˩TЩ2P\rߋ\"+z8:#2J[i;zr3#ى:n\r㽃epdݍ 2c4k\rGE6_މb/HB%0>hoWnxl֍浃CQ^\r4lK{Z:Ã.pĂJB-+B(T%J0lT`+-@BۄV\0C,0tF?Ġ\na@Ɍ>ZECO-^Q&)I)R]\r97_\rF80Ob	>\nR_8٫ov0bCAF!tă%0/zAYO(4	'] I8hH053@x&n|T)`.s6eYDzJѓ.{GEbӋ2{\$**@C-:zYHZI5F]YCOA`x'.*9t'{(wP=**xwr*cc|DV\rV.0Vd?Ҁ,E͝`T6ۈ-ڎT[ѐz.Ar̀Pnc=a9Fn!uA0iPJ6eT]V[\rXavk\n+Eܕ*\0~@g\"NCI\$Ɍx@Wy*vuD\0v댆V\0V`GuE֕flh@)0@T7§RAٷ3ۘ/Q],s{VRFA<vץ%@9F5t%+/8;WJo:N`	h{ܣ Ԑ8Eu&W|ɆU&\r\"|-uǆN:ncfV#U20>\">`k]-xS͇ТcB}&`r+E\$yNb,Wx -9r,`+ˊC)7x\rWfMSR\\zQ̓uA24L&Hi µS\$)eg rȌ\$]ZiYskWn>7E1k8drkEwwcmTya\$tx\rB=*<lfKN/	lkH8.?f6ч{gi/\"@K@2a|#,Z	wd6w^&tP].Tkro\ro=%h`:\0᱂|ꊣaԮ6*:*rO-^nM}Aya\nu^rnO\r`T~</wy}:|̡6v\rc<b#\$s|燇V)hTC(Ľ]61!1M@a/`>ٸߣC/6ഷ#p@p`Zch\0\0o4OOi\0-\n/\0D. .Đ\0fiȫ\0ID\0\r0foGeJ|\rl	3~iP&/\09	^\0r0] o.\"	MvPZmpPڜޏ{C?kϼ}dʏ~=.- 	m1>hЕ1;QIOP\rcpApVk\rQ*Q}q>u15BqQ[1flap\0*JQ=G_bGHF.0	= 2PP!#(3 \n!1&72f`/\0\"PU\$\r0,QrU&2f_X]9\"S''y8\rkW)O)*Ra%\\i%&ҳ+r3S`,v&2L&Pu*-0\"%HĬԞ@ؓHBP(\$p&,1M ح;\rn. I.',1)42u+3 `SpL\nt_*S3;6r'h3555䜋d2q+68O7sC\"pm8ҭ69m\n@e0<8B8<,(8\0	0J<@IR6pԭmG\"116.\"5̂:8bA1;';?<*\$,̍o= T/3#҆");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:gCI\n0Sa9S`&(n0QIf\$At^ sGtf6ey()LSP'R'fq]\"s>	)`H2Eq9?*)t'ϧ\n	\rs<Pi2IN*(=2gX.3NY4B<Li̥2z=0H'ꌚutt:e]`pX9o5gI,2O4хMS(a#|Gbx^Z[GuTv(ҝm@V(bN<`X1+9J82\rK9h	`I8䛱St2+,I p9m@:x)Cx34P7-4r\"p3Fh-5U4͉\\6<D\$l9R4t7dD3pΓk:)\\;\r@t\$4O<!pdQJ\rH}:&Ȅ5YWJ`NbKNSad>2WŅbDj:9[21cȝ:X@q#4L'J+DHe3.OK˰pVt2wp;Ɠ\r?OzDq.-\"ZcX3!/>PFsɲ0(ʣT63sVQoSΑb߅^r\$@C r2) V)+nܷzl{K#9{ۯlmQh*ɗP:c]7=Li;2<\\Jbnn_iӴJ\nC:`N4̖'Aw:4}ۣW\080L3J;i)\\=/Nu=ZV6&ceap.[vtPZX`֔+z'9.\$\$@\n\r]_ٮhkkMs>`̖j%\\9ж('jA>BCd\"K\$	CA.².`.E洖yy\0D28t	68FLB*,|\nx\\@@3r WKQb,%DBfȳD|͌E0/2>Y!Ć'`fmH<BB0\r*\0GxnY4,L%S,v0XQ1HId`!.VH/×H0U0`LI8k24JYN&8xJk:AK㝡nW!I;'\":24~J8ᒑG\"M=\rZ'ni9FrRt3\0Ҳ2yB^b'zɲ(#d9It&WjNaC( jĖ?hjքZ\$0үJ	A_\n!TO4<{a?o -?Hl\"2y=먞Rф͊P&G4%()\r5MLT\0xBI=ltv2Jhv~/:p:8\"д50#*7\nq>G\$):	\"#KfI!v+?{Qg{RQC}#iIbgX}`}3%@{_k}0ȗp!a<7eF?XD, CkUL>1܇p0#\$V)pYs5A:U(95,F+&*{-::7:ʙyPX+\nI;\\sP1rNJAT'-k?Y@fb񎒔RJimB~K\rKt4;OKc9%H5d3e8jP[s9,ĘbzKW&ed8)5ph\"0hL5\07 ڌڇ{ݿ<k\r+Xbl/؝XACs\nal}~ݴdrx(\r3nGrT+QJP\n'?Ĵn~:Q8`{a 4:L: uMߎMI,`BgN\rB\r\0o\"/2^D2)n\razR\$7`Lp*{`Oqtz%%Hg0Kf&)\\QW\0dp<Q\"c'/Q7>+j#\0ȺБ_ȍk3J(%O\0Tm4k:lʞmD\$\0'~ Z@VL\"Hjn5Nlfj&MOdbӰROdiiN(%-4+:HpR?BM0JF.1Mf~UT갊lˠ0U|Ђ@X4bg ]P?@z `<R`-FI\0㬦|ОŬTkQkF@0LP\r#uܲpX^ѱap\0\r yPt%\0^8\rk\0ǡ1\ndB.\nQjq\$\rM˾Fo(︉ [ .#>Q`Y`M,J\n<uz+I!)+tŊlƜm\"\"17\"j0#Nm٢O pRK#R7#C&!2\$>ϜC.R\"r\"Py˰7\rܼs)%#U\rOEЀyxCt@п*H+@0\rIL/ \\\rNR\r\0@+\$/*w0S\nt\"\0r/P\03L%rR2R*+0\"-3N1D7(tb/@12M6d(c7*pl8(t0Kp2-Fb\$R(/+2,̲l8rK!6\"Sa0bx\$O\0\re \r\"8't\r+P@Y1YbR⹰\\jK)438h17z`pRRCB<F	4DtJ-tVD6\0NLTv_0\"qJI*.qR|HΠt]>\0OL(#n.2Bn9Jm@Rs2|htNn6BcO+҆eBO=,C:6:M<BV\\`/Bڧ,w:H͸2xpMnbnՄ0	1,4V#&ljKC\ngl\rIcY@Yh3\nU]@	\rLd\\B\"t\rp'\n'O\\RИֳ5Sb%[\$Lu`5Yu[\0|EMh\\)\\u9bH.e@\r!e'VPC'c\"f(RŇ&#~\\qH]{^g'O<vz6lpg'8E{*/UVpo,+)Xk.0`s0hro^𦆰B\"jOk-%Ɓ0gx+ [P7\"*hPP\rc<[`V7:`U(Is*d;>	BGsG t:8d\0@jwLvj ow7v b	pu-\n, u:)\"ut:WB<Sb12CײSd%)rpտ{cpqM!#P#@E}c\"@|d%kr\"*x w}״uWl&X~SB'u@6Chº..'+@Ӄ[T1b\"\n\0\n`I\0n+/\"lW1uƴZDC(1pwм ^\0ZJ`b#5ɄH;(!`#^»yߍVGr|_pGeQjd'2I-h^da)א:HH)5qXFQ_{8)~N~\"`\$1 B_N^h[N(+MwϙP'p65b?Ѵy&<ZTq,9Op@2MzĕPq4`eob\"fmvX@c9a0w Db ~W\"u@Jri800#}7+ok@\n)lr%v܇!n{XYw*,bF^\r1y5BY՜#w:3&jBfY` BI|l0ӫOr[rEa0bɋ\n	(\rGF@ؼ٭߮1ГSs+X%@ug9zfS#0 DB _wE B>{*@}kȽ\\P,\"-rCrVYםZ\r[S}\0Y%kcϖ2vs\rKOT@s!2cw˒v,4&rxr؇~#\"X\r];SFF<ta/M&U>5s S>6U{p!\"y7MmeZD!*vwW	0w01|H\$&ԉ+{GRH!rԁ-24l\r\r\0t<ƅf:DSdeQ\r\\aEbGm gx-TGYKƢtp0?Frx	2\\V2;'\n+b1DG5l'(/[,N(nG8bXQ*-R\n4q#[U<eĝ`&&o@u%5\0`\0E}#lʨUx%mY&Pb͕.ϡ1<jnǃ\nV~oNp\n\$E&#%G\0=ekQC<}]A-Yb;ฆ[ UYc~T.\\<Wn\\oPqƉ6P\ns`c:3([zX{ P\\炫WY:߮:#9Y[Yt&l9kޱY_҉b~&v	*1`f8SV^'}lz8 ZGb_]⢏fpJZ0@V'uy	CR'N?Yk \$c =n	YJ>PRJ].짃};;S]@:I~ۑҝ|;Fyƃ}`/-#1@y7ys}\$Aa\\<xG֨BmamZx3,}ϝ:\nd9΋}HmT,/KΪ (Sh:V,N\\\rB%Yvi,pyrrH&dL%(@L5T@1`٠:\nc,bO,\"ԣr(fYO-yk*&,kyIP\nrpE%`89ׅlUN6_<EdLK!Zbk*qC\$PsHnIM(qD@\"8\nrfC\rPpKƣ஛dL!NR9cli!a :\r\rPSS*0a,бd4Q\r3vLʘðGn\"3%Qd)i4usXMP^5O	bp xyTqDnByClq\0X2E%	dF,7G&Ri#瀉CVN\$LB!(<*1|H\"Eu<P0T|s)C(oZ[ҵStm\nn 6</>'|#h6\r.=(v;`\"OCܐ!B9.B!UEDĂd)K\0޻mF~	B{O\0ρ_u#5 =Lj79 6lCVTp08	1x'0@gIwZ@9Lᎎ\\v\0_(\".ЯA[sń7I(azl_EЦ<tU7`t0(3=o\$[h!B[HR))nxaZ#=H8뛥 %@0w5J	A\"F:8N\"X- ?pj@)iUj\$̚-EE\n/PBP@y8jYK9	0HDd&0hX\$\nv=;x\$nԓrBblpqAtTr BMz9\$`e\$\"ep 4/P 6В0VUN\$%BPH[MICz20t\0s02RlKm+19/N-#]\r9/S{K5IrЖeؤ>i2YSaK,tEHO(:\$:&eet(W2ڕ̷a-3KYZ&\0o+ymZ2y&/مKvZĸ}S8d&r똁*Y-\rkbbz<W-96A(:K\nNYH@قdH~u]QF1+ɔq\0O6#[ dR]H7xdSU9xdC\$UX^mHx8@qpQW([:\$,|Xr(L\n^.N!h'a@Ƹt`\0cj lp#d*\$(\0;i`)MnV:0l;t\0(d `|y@<\0|W,D@g/fN-#UJTaNM/-)a\nQ1Ca9\$?\"ɜM{9h3SHKAO?.\"\"9%%\r	hq9'P{\\[\$:6B( uk\rx[BGHz 6cn82\\ \nWi\rc\nŪ\$;{FӁ*_\n`|]@;P9N#xF}BF%M4\"戅0\0f(30Dٍ\$3YpjFw+?ii_\$1)TV*'{g=q\"h\0:qt{di 4;&^0Q0Zoe\\`i҆hMzS<<u'F\rIaG\\P\$ACj\0p`2xX Zb|!f\0mTlRTH'¥p xTNQŅnZ5MgGsxeDT#ѝeO	r4֍UAP!Z}wv@P5UX%2D7\\Up\\VRd!@TݞtP%pxѺWHX&LpiȤtE2:4vz:ήM֋3*e?Zd\00JL.ej- ~ֆ3%95ޛp#IЀa%Pp?ku[z}tKK^A\\ҫk2x~Vwx5wHhS-pԵ@pYMq\"ѫF6{/ǁ^ɘ|έ2L<2\rڲW3@+ӄN[>Lj|\\8m`S`[\0XV΂ aC,`[A̪j\\դP-}+} 'Q*9S:pZ㠭HhRRwe1,zT.OyYdL.Ua@F):sY-D՛Ks#N20k\0!`^@iƁ6QPµ\0j%Dh,<<;bڦ~\0#\rnT1(JҲd-=c)dNԷ.]@4!2|T3WbRɮBmDI\r0cАϔK%94-AS	n[sͧ?ut\nL5P2V']#n|B䷝OCYW1[]7\rʶOpA:D6[U@|9SŊd86t?\r~a\\v1U1#p=kIqa<\\ܥB\"@	M7[6u\\q!3astIJBH.R{Inj[#Ju[u1S_7EDIMvkNrk]֮FPKzwa =xO^EXNHgX)Rb;^tЬcn0P-faֺeAnP0\"igHOpQ޶iZɅJ*/Y8&\nLX2/ؐ#wMisMMIզR#dmB|O#Y;J[`D7\0rTO O+rjQژYH	j(a%H(Z8)%<諞c-(Tq5~ոĴ\n`m\0:W;JN@P|`_u 	\0\n [\\,G`Qu-U5D\nmym7_V-}5jʈ	D҆o\nUr5o2`\"E>-jwÅYF04/vZ~qB%wc*tX}	;R00A@b*8a1a@Rr0ڄ7I`;y_KԆXT E)Qv6n\$>%C/I8\0_P~X=%zU^-%b3jfE	&\"IPB͋{yBnF:hh;Ҹy122zѭXKX?\rg5F֣Hlhk \0Mod\nW,3t\nP8Yxg\0Yd-.mZAZ9?nNϡgN+P[R/O)ST![l2kYRi2;+T@j z,9U2Ȋ,L0V&J8H[5mPʚHa2@e6^	8VZ3C#bj[3g1k2&*ENW2yZ+ף5[&DjL59Pǭ{5@weX\$[WP-`{΃Y̵F>QU+bi	 ]T\0MOɃg0\r x^@pp\\Cg_BYòx2]2ry3 p!	2h%]e1NbW_39O=@Ip\0\nH9c.oL\$\0ʷNb7,lxV2}h54:ycIN6i\r!\"ʺ\\\\Y9艠4Zm~W,5D=oeƂ+]A+P/h(Y!x'ê%Ţj%f|J4Uȃ!OIKJXTVdJYZnTRQGԎP:@R,ZC59 >Ȑoce:	\r1T\n\0D\0\0'	>p,,<эİΗ\$79=<(z/@\"k\"zwc@Ĵ@;N,|̾P#4b>=J)`Y§wAˊ=i0P>tg|\0{[lRS:?&Yi̓*Ӵ!1	\":~4x9\$oAöqD#\rK&E(Ҝ2v[?謷?rz:8\re'udPČxPD&\rbNx.F\rQwT0\"=_mHt+`p-ސ\neoH؛\nRjr,{ln\n\$Knz@1(k.];z\r7{βvrxp[gwԏX\"ʦcB3X}][ĞӞr![1wev݉glpn8aqڕNA}-b9	?vAPa!c`8<rx\0~dr7x\\6OxKԙvK{HeG_Î[A\n7Jv.}nn=0^Sb2Աh GPvX׵\rKfk<\n@3\n(9T-+(״HvJ @_GdT<h4:p5bj	\rmzk_QjCj1#IaP	{:{ދZgR`lCa\"N|APԀV0\0Bs@P\0Iu\$4<`:*`QwR,\"Ȋ<(jsץ\$c6,/%3ޑs #8\rOHzX\r<;ݛ=qᐭh8}y[x~1jSb\"^n(@6pa:ʨZ5\0]\"<ɷL&|y\0dvOuS:uԖeL\\8XȦ{I\"/(q2nQ:J:	}	\\	.D/NA:hϧ@n	-M߽+zb");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0F==FS	_6MƳr:ECIo:CXc\r؄J(:=Ea28x?'iSANNxsNBVl0S	Ul(D|҄P>E㩶yHch-3Eb bpEp9.~\n?Kbiw|`d.x8EN!23\rYy6GFmY8o7\n\r0\0Dbc!Q7Шd8~N)Eг`Ns`S)O/<x9o3n2!r:;+9CȨ\n<`b\\?`4\r#`<BeB#N \r.D`j4par㢺>8\$c1cc{n7ANRLi\r1!(j´+62X8+.\r!xh'6S\0RO\n1(W07q:NE:68n+մ5_(s\r/m6P@EQ9\nV-\".:J8weq|؇X]Y XezW 7Z1hQfuj4Z{p\\AUJ<k@ɍ@}&L7UwuYh2@u P7Ah3ÛXEͅZ]l@Mplv) HWy>Y-Y/hC[*F#~!`\r#0PC˝f\\^%B<\\fޱ&/OL\\jFjZ1\\:ƴ>NXaFAfh{\"s\n64?8^p\"띰ȸ\\e(PNq[gr&}PhW*r_sPh\nom#.\0@pdW \$ҺQ۽Tl0 HdH)ۏ)PHgUBe\rt:\0)\"t,[(DO\nR8!Ƭ֚lAV4hSq<@}gK]]=90'wA<a~WD|A2XU2yŊ=p)\0P	sn3rf\0FvGI@%+_I`\r.NKI[ʖSJaUfSzM%\"Q|9Bcaq\08#<a:z1Uf>Zle5#U@iUGn%Ұs;gxLpP?BQ\\b龒Q=7:ݡQ\r:t:y( \nd)\nX;CaA\rPGH!@9\n\nAl~HV\nsիƯbBr3\rP%ф\r}b/Α\$5PC\"wB_UgAt夅^QUjBvh졄4)+)<j^<L4U*Bg*nʖ-	9O\$طzyM3\\9.oE(i7	tߚ-&\nj!\ryyD1g]yR7\"~)TZ0E9MYZtXe!f@{Ȭyl	8;R{8Įe+UL'F18PE5-	_!7[2J;HRǹ8p痲݇@0,ծpsK0\r4\$sJ4DZI'\$cLRMpY&iz3GzҚJ%P-[/xT{pzCv:V'\\KJaM&Ӿ\"eo^Q+h^iT1ORl,5[ݘ\$)N\n[b|;p74ܔ¢IC\\X\n%hI4gP:<k1Q+\\^咠VCW`83B-9F@nT>ǉ-&`9qPy6\r.y&ảE80kAVT7px)ޡ~M΁!EtP\\ϗm~cB\\\nmv{9`G[~xsL\\IXwy\nuSc1?A*{Ϳ|9޾/E4/W[ȳ>]rv~B PB`TH>0B)>N!4\"xW-X)0BhA0J2P@>AA)SnnOQbrҦh@ȋ(\nFϖƙ(γP\0No}l<nloq\0/Q\0of*ʑNP\r/pAY\0p\\~bLh !	Pd.y\no\0жPptPovЂkn\0z+l60PoFNFOpN`\rog0}P\n@15\r9\$M\r\\\ngg\$Q	\rDd8\$kDj֢Ԇ&bѬ갿	=\n0Pؠ~ج6e2%x\"p@X~?цZelf\0Z), ,^`\08&٩r kFJP>Vԍp8%2>Bm@G(s\$d̜v\"pw6}(VKˠKL ¾Wq\r̤ʀQL%PdJHNxK:\n	 %fn%ҌDM [#T\rr.LL&W/>h6@ELPvC6O:Yh^mn6nj>7`z`N\\j\rg\ri2I\$\"@[`hM3q3d\0ֵys\$`D\$\0QOf1&\"~0`\"@ZG)	Y:SD.S%͈3 dmU5<SSZ3%r{e3Cu6o73dL\"c7LNYk>.p2Q3VذWBDtCq#C@IPDT_D:Q<UF=1@\$6<crf%,|27#w7Tq6sl-1cPmq\n@5\0P!`\\\r@\"C-\0RRtFH8|N-dg\r)F*h`CK41ʍkMKCRf@w4BJ2\"䌴\r1Q42,\"'xyR%RēS5KIFz	#XP>f-WX\rpUDt&7@? }O122#UK*)긋0o<>]HƿrLGNW%M^9X:ɥNsE@xy(HƙMd5<52B k!>\r^J`ISN4'ƚ**`>`|0,DJFxb4lTؕ[[\\Ԡ\\{6\\ޖ (#mJԣ,`IJխl jj֟?֣kGkT9]3ohuJW\rk)\03@x,-	5B=࣐#gf&Z`#oXf\r Jh5rqnzs,6otDybhCtn9n`X&\r'tpL7Η&lZ-w{r@iUzM{rxאmSB\r@ H*BD.7(3XCV <Wу|dq*@@+x̼`^̘߬__NDX\0Q_D]}tYpfw\"3zn«MYZR\0Q?{M3*1 ,\"g*U*̫zҌW5NV2O-|ɍӁ,]Bd\r/OtÁ0xƆЮOC8-0\r0@]X̊\\\00Nу4i;At8Xx\r݊7<@Sl'L9W θϬıR\rϠ|Xa7y\rweY!EcRIdBOk28[mJ+L ٸOXpf9ѝDϛߪw@˓Y\\yAc٣Xg%1j	X9Cc݇RQFpd=C\n\rՑdj٫xE2FXx_ţ5}qM%ZM:\nzWX7:ZinpY;>ʘɆ:6;ZX0̢#cMyUi2,qF˚bJ @gG|4gmzW	)r|X`Scէ˙c!B/}{4J\0ÝnKuz @mѮ߭y͞y\")uY睘scy둶y7||{Ϙ*)4Y`ϵ[v^NXW7;_*x\r߼߉xm+m	\$\nl);|٠ڙ:N:_8NU5;p+UL\\9O:IzQT)XGJ{w8ŉU\$PxTYpjhJÀJ{@ǂZsh˘X\0ۖlӖθY}^@u2S#U;È|P\\#|<\\J۝,\\̚E]Wl,ɖ<Ό>Yn),ΙrԼ⍺]	\$qDJ=XI-ŀallõ]\\w(iC׃t<i-u[uVD֓Q¸xbkLI.k@N[l<o=-]1`蔼dM7@%C=]/|-܏q*CO~Qs`(Dɲ[>kRu\\+>)3PP6M%pԌA3qmu2fzۯ4s	`ێ-kS%6\"IT5~\"Ut_	TuvֽYw0I7L\$1M?e@3q{,\"&ViI?mUWR\"uiTuqj\"G(-By5c?wT`eiJtbgU3@~+\0MG7`\0_-?\rV?FO6`\noϚIn*pe\"T{[Гp^\nlh@l0[/poJKX<=9{Ǿ6<eߏAxǂ4x[͞L~>!OQx{ZVFԎ`~IߖL)Q[TMT*BC~	\ngÈŅp9zKwzO9di^'+Dz4gHALy\nr<IjKQSn==\r.o7½%a;kmXZi%Pi\r/L`pR0&I (\\.*m*(֎\$\nwХ8a\n&Um M֨P+\"Ly?M\n2	L\nbS Nr!wjw`\$rav^qF6i*_x\nfI:B&6@ɓKEDQD(V`.1\0Q\$FHTzІ\rjkzMY(61x+%djo\n¦\rg\"Ɍ?1- 3hX)yj5rN#Qw{_G)1i <ZpX\$?=%.Ү&%\\8w!a4<JB[ĺu4%47%gѐ&Z(@	E{@#2h@#џ@\$8\n\0UjA(ׁ2O8ڀ5@&'\nD\$i##t\nPTs#]P*	DucPO|pcP	ގi#}:<\0\0ťlo#}FRTp@'	`QycTp(Ɗ@eh\0Ձ8\nrx c<`N:)DY\n*D2{dZ)A4cZL2<\\\$r#7!N{O@\$<	ѢVZƞ52.A#D0\0I\"P'H	_)x@*AOhhI)IL1%JIBgi\"pK2}(C=txC&F	ro@@'%	 HTᏈ	Ԙ:=)\0.]5 .(pL!8\0	R\0LYabk԰6)Y Ԯ	hzZIgVO3oLg3Y2ۉDoP`3̸ec-r72ԗDBZ%/I{M\0ṕ.`o*ԯ%T\0&iR\n+o\r^2q\0\\I@	K#peC*!>/%|ȅ̒ގ\$)1P30(\r+\nZz))\0*\0k2υ(E86stf&+;76&K_(9f,@-4l\$ۂe7\0:lLM7.\0|oJ۩Zu̺'y{H,#\0vU@9!	'&G@_-ٿt;:u<LiΚ_ꀝأ@U6#_L'~/m`\\T']=ItǞ)qs9a<RPº|tt&5sl@	KwSl:9NwS|gOAП<BȀ\0/z@	=?=iOkӟ=\0E@i\$BנhO\0>DPUцjH9FBcCiBwMtxPM?p=8lg~ta%]b\$\rra,6tW)\0UF	|쓢vhQ*Ol.C\$\\ցRR<lc&Cj3%ZMz9GpY⹣\0i\$Ddzt[')[)Qkpi0#cþNE(C2L	@9hEJ5,h{&Jz0nv>[j[]KRJ>.;F=Rڌ<rM=Ԓh^Y\\Rmn Nn*gB5^Q҉@OxHIT9)(&}A)P\\/_!́Hڑ\0B\$z4TYuJv\0ꏃ%@32\0Sm--Gi@Q%jY+FuzlSW3ŷOrU\$E;M\\Աu/jeQ,#JXP<UHTVV#UUbOUDZ⢵8UJuSg)XDZKB\n@2x@d& eܫI@Fw8\$'IVVU\$ET_*d/FCYdpvG3њL^(`j2ScWJQYiHBckR\nU\$j\nZAiU*wKDRxWL򭈀+f@A4GzR\n5b\\_ 0C@\$X\0+]\"?n+QIj\nx\rB`SM\ro@6X\"{\0b)McMW D_αv@{c:%[%C1;AƈTn \0 ape~U5 sVe|M99 h@\0~@.	l Jv]Df7Fᱳ,/+:XIi\0U@N\rʢ,.im_FYiUJ!gLjDiKA6-UKf_N\0-33+diD	\"MmlLX㯸>&|Uс`h2n6I+né-nD`ɔ@B!;XsmȯpC`p5O%Z/5#CK`XcbQ#Qaqp)G+~ۖ\"lM_^z!EХap86n+oJ,󇢺w\n]̓pR'eJq'ܨ%'nlOh@>NBȊX5,rGrZ l\r(ˑjIl%b;s+נWg7)*e13Le@(p\0ÎdsAD\0Í\\bD\nu/&1XRץE楂5T\r}7A٬k\\͵q2܀Z-wotZ]-yq2j+ՆխënXA\0\0+S+Y6_BV7znZ@̆Էƴ]-UMJc*s\"+\0xB3^0\rc\\j*P-\\Q8ʎlc%XVB},;(`*Q	\$r{KC%\rx	Q,/v\" p~  J5eE-^X;c\\׬m7?6C*庮,7Hf/9e0[@!bUБ=i.Jocj;B\0]ՔvG8O\\\0ǊO\$.&	p\\H1bp:F\"8ŶVxRx=3f1+|\0BkbPLђ\$zc	i,Pcb,pn(,`'/~kֵpq-ȱV܆\r	\0dS+\"鈭1\0(-1~tcfBۑb}ؠ0<1\rL\$2d\"1&ƀBóN\rB\rr\"?vdZ.\".\0?w9o\r0с!dR뤶\0Hra%Њ+\0yrHsϒ4W#,\$ \0*xB\nP| 8@/\02UbΪx!dN3S?P(g\n8ppS9@'  \0y\0y46H<\n`SCYjp:\0N(ӍX4kgDy<n4rS<?\nBf('~dgәS?<Vg(12)f`Za>t{>\0P`O\\s<?4w~f@z~hBWxhAO'=P֌ײ=c[ysg|掳%M,Q8'X hlUs٢ 4qDx*8gNLBȖ;}%e@Yvho!\$NcCX@;YH'@^ Rf^x\0^os_f;pj]:Ԥ.mLl\rV\0@܀\"1%!_@-]8f-a]YWψh`(J@\rY	kB(x:5B\\QkO[:0¼ukX\\P\0[xŮ`RIGk5YzPҙ=l=e\02=k` [KB8C}kc{#آldfF.̵-A6KPv'lHiA8C	G`Gbyپ- 0Ĭ;[*_mlH{(;Uo*],ċX80CK	!N(I`	VDvwrpc,\09~sXnr[ec4dpi	\\e2laZCkglbB7x%Żk`\n(@ź5ݘϭċ#tܖE}ńsLvE\nQQ۔76}Orjb%@7۵hw͹nk`Vq~~4{ˁ;8p2mP+ daX8&,=n}!/K&\rtH)/Y6@=}EUlK\\kb[1GM)JxXET	/\"-<4xDp(3ʟߴ'+\$\r<rn`H\\t\"70=YWhs\rw~!0@6l\\ /B7>F܉\\Rپ-nܧ\n?F~a+x\rl,fC+wiG.X!_71ym~D7	G;gwb/89x@!R9éJqYh'3Ĭ*Xwˮ^	75`:#+ۭ0S@0o7:&~r(ZG1zpdN`/Fz@8t0Z_ 0{LnׇoEÍ=rGj]HҷAf+Vm7B*q}cw=ۄgwE-H&Rh4MZ_L]WV'զ\"u@-aMs@9L:Ւ]#aoyb\n\0[rp*}Qbw?;Vcʰ	.s索XְyR=&drO2j!uxR{N&ѻ5}vy۰1o8Z#{NrQ:BHzW{W{:r}D\$j7)PCvVXdD7፮,h_]^qσܟxO]?p{\"O8Q?xw}J?9kx5bu&o^>wg]h#?+m(/ng	55<;ȅ˳x%;(V;o-˽.enkp_FX9WjQCBاv3R=솦;a][yȻ4/|##v	@_ǭ}UM>1\rCMqCdĘU#[ɦm\n\\\r6'>iI;R\0X<rW0[EdHSH\n^\\3TFxB\$	i-'Xf}\0#ɤ	1oB*;1(\0~@)h>{~wH/vL\n9?do,x)#>#b`',gT~t	Y}/]-'\0( @ϡ/>~olH/qDT~o|a#|F8dϥ/|uVh\n>{	_{G IaE&{VNodFBX׽(IN@Y9ɿ\n-{@Ro۽&o^3Y>|-~/?*`\n?S!Vϩ>}O⟕>RM?b@\nO?0s\0Iπ+'X,`'?\0K௸CO2t>LOLv3\0[PΛlH\nhlr\$/\0+\0		\r@?K)<#Ps\0?K@@\0ꀱ\0%,p)?#\$\niL3[3?@O\0A|P\0D?N@\$,/\$B?0\0\$\0VLhͅ	>#6+>R:p>7#\\гlΓAo<3l	pe#7A@)@#AV?h	0*Z\0*\\Au_>kb?>\"c#6>B\"\0>\0ps?DPvA\\#(>3EP>:<\nO\0d\"@A\0Aꎐ5	 #	 c	+@h؀\$\0:M3n3c`T+I8B3@*	@'\\pM8OlMc#7Bh`,	6o\\\\.S>DC0ƣS\$2B@&A>Lk4Aܭ3@;>p\r\n3|\0\nOA:6\0d7@8%`#É[=D\n3uLC9BC:`\$!h\$;B20u[8C	<篟dP|=q2pV>	|*1\0\rE\0dAovPt'?d,PD*@	/#6CPBO\n8',5ÏE Lq\r?mEq\nzC@+r60C?3/̓\nP܏lHDͤ5\ni)D1(D7u>\n\$Aj4\0?4?LK	A>Ͻ?qDI@\$;D8	&?;cJأbP\0	B#3`)O3CMZ50EO6C\0\\\$p[9B#cj<11B;cDBh?@`*.qbX	o?;\0Kp38	RC6/\$>lͤpI,!*\0+>=]w\nT^pgź#\0?\$J@	\0*C*7h\nj?:pAr]YLDbьB4d@(DcE@>\$	4ؑ</?\n/ĺ>gp>I6i8;Ɖc1AZ6!}<jDj(F?d't\0Te1 Av?lnos350#>_dUкZP4D|;rC[9ꤥ5I5I\0EOB\0{9qC|\"pUZP` GcQCGPJO6(Bz>7F0I:vOǑBuE,\\0Ǹr8qgA6>74D0qG>-SE@#G.*\0i\n\\-`*\0q\n\\e\")qun@`>D8	\0/@_ڀw#ǍlG>Ԅ-+ߐ6Wl%6l0\$5s&\r*\0e!rqI \"> Ș3EIL\"94G\$/\0\0 -2>/倘Gg\n/LqBP\"#7zHMԅOO\0̏&2LT^P@Zd=]Q=KCE\0QO\\s0>qCzG>	@?0?\\o¿4Md19\0G?m\rD(ԴLd\\KJ8\rE-24U0VAR=Ee5!2mqAEV\$ϕI9	C&\\G)D 4I#p#C\\xC(\$H:NI(J\0΋\"w\0,)PǬϋ4<!=GoP6NQD\r[;A|K'AAP\0C:ʄ̉4*ToDF^\$)Ϣ\n)(S\0(\$:@Y8J#Ђ+\nQ5+`a+ i`6x𑤪:ڌ.T:a\0cv(^X¼HO.\"JO\r>ex-JKPrԂ-`2_7-!\"JؐJH.o-.\$<BOЀ`> d\nH\"؆o+sؐ 3+ 6/a.\rnd˨?z1\0? 7<?\$\n`+Aw*MQ<Po?,)#P>̄\0?jēVq?\$	9-2ID9Lg1h[ۏ1sC1sީ9Lz?	 LWdovL#9`ͨ0ɦWh>\0>/)DL\$a9*<:C+JKPJ\"L\\*b 164ja+\0%Qf ;KE`>>7tHwMPn3I:fD <LR'.\$BO\\\n	586̹D1<\r\$Z4%r̃\$˶o^\\\0f[ze6|֓g&8+M=65\01Id{^fqd趈s7(|tM.]HS[Ԡ;7yCmI|A:`c8\ri@P`~\rla=M3f<R\0!@eثrdOt T-XY9A:38OadХgLfx=4K\n&u0Kͨ,o7Ć,3:h|Kb)AN`:Ό;*sI&Rs>\rX\r!\0\nBsVM63KO:Įc5 X!AQ9z%`{:HDEcv!Ν,:X)(%2a&,l38j1|͇=CRr<\$\"KB3'9:|)`Oj+9	}-S>2UU5BUNNSNO3KNЎ @:/7āQ!@.(&v9d^ج![.pGc K#?fpÝeOd2\0k6),\r65GmOFVdix,a=O@sc6`¤\rJ\0;H(*r-.M[BΠ!(MLPbUpJ:1E!:,:YB*KRޤr0جLa6;6+2)UB`JsV0:0_B14/AONe)A~\r ̠NPw,C3殹T3q9}SQ\$APD;!:!Ys6RԁFt#CπQ\\`rXr<'72ؼO-w9Ӥb853{\07\ra\"\nh[jFa)+2<%M|m|\n54p	&bUQ8\0Eѥ4AAN,ˍ˝FؕTo(G`OGAGl`:=\0<\0TNϬ=. 6Ζ(SBİ\0,J?.(%,?B.<2hM΃I`Ό4*˯G'I9RXE%,O\r,ʈs*(}<ڗ@cRj]D`URγ,.dr	\\NlR-󓴵˚kQK,I.T@1\0K4/]04KK\nC&F,SF0ԵS.-K2RLe'7L0oK3TS.4T:X̾49/:WR9.62J6S	.cSv^ 0O|LMD%34z3Id\n#tPq5h{!7Zۻ2 thʠ!K7Y1S<h-<pj<4ӹO%@OKBS!10ԇSҐYF?UR4!~Xl=H|5QHC&\"1M'85a`?SPl`0\\mTM,8'1eQaA&	\nTRIG̿Zx6yQôaJkU&OXHphQEN=C\"Lɛ( Qe@\0;QPD\"/\rB༖tT\r<eeS}OmEPP\rӫP5B4U\rR==BSR}HT#E\0U=QEJ<S` ۂ1x\0U:O/+NJ`P!t8\rT7 SR58\nc>ƺ!1{ÀӼuEM4{֔4TGa;|5\"SNkS8D?JcU0կRtB{5qSB,\0pj!\0006K1 X@DV_.(_`-`Dua .X\rFRFDSRxh<mXjbW_G\nVĩS\00074\0LR\$QXp \$N&83&a+|lՉQsACX]_X]\0+8+UzsRPQ\0\08ՙPOMUH6!VX5XaV/kӏVF`TZ\0D5FOSnkTMSվU\rTMZҺBoEgWGfń-Y(}V7T0B4[95XmXht>LU`4\n͌To9vFUm\"uDՀ	\rw+\r`V(VPj]K⏜4oT.\$mDĵ	Se@3׭;@7m:륥d!ZQ[5P7;S/B!McGTW(V䯕<7[lt^\ri0Pa|VX̃a[x9H]^&mҤ\0Xl㤫ހTOXl0(,`oau3U#'0+ӽ8]HT!XX\ryW@\$MQb-)X	o\n|`-q-bٶUVc 3N=5vAg\r8<IGPB9O^8.	Xk;+\"CZ/UUo[i`\$d].(s`-⽀qe-N=#[MPO^(B6_u2:0mxYg^5-YG8AcVVd6\">\ra^Ю0\"䱿R,3D2iG5?:\rT!wgM[7;[v{֪Cs\rU9d`yh\0h@~qT4_QVvF5Ps*Mc]I91T0mV)SX[*cdA+1hb:IhM@s>P9vuT>ֽ`	O5ccjϏ?QTmq\$=(V6F\rTr~\0|mC)[ՂN,d+;Qm-Ň\$oB-sRN:/8>b.40>,.tںJ\r\rk6	WMm3[x5qLb6;`Lm4I6^d!5`7:aOh4-3HUmڒ^_NTꍱ[PH؝a=UH\rE\rjMSPsN6MXQ 5	\rۭYKqs[s-\0]aNd5?+CfRe^+@[P5GaҵoM@w\0QyoKUe}[_oK@nwxVpEPuo5R8c.	Uo5w\0\n(%NpV֮JAqtZ#Ոk6iEVR{qf{3l@PqHr!VS]6'q@>R=E\0S+UjʔY[źuUոջrp6s]h't	mJ8QUUuDm2zЄBKv'Pl]AAfch\"RVpX;U5܎cְzPTuUQYZ5UJen5novs=HuZoaitoUڻuuH5n=jSUPZMNQmobFA>]i\\G\rTvւ\"2v4γ=]2z\n=:\rh*sfw_Ut8[݄8]+=G7z=nۗJu8|4u]	caz׀Ywt]ܪ^r)w]%i,e}w0<3nLr.iy-7(K&\r_;f[̈\\\rX+Ha=ܳbnc	,c!8\$mVvRJ]g -WOsR(5]WHVC\\5@D!s%Β^sd%N97փ{U+I-ռP\0\"FЈS5F[zsk(7Ez1-@x̹>MgWMjԻn\n ^tLUc}AVR@;X-<s<tC8^!P}3qd\\ζL3u\\-\rSlX{sLNlLߟn&Zpt6_[\rVVC~IE?W%Uܫu[ATAW\r\rdwVkh,8ŊϔDػ|a6-_1O`jo?7>\nXsYn^c{j7:]E\"JVJe~.QHgT3rcVBce3e^Հ98\n Z(䇪	;tzՍ#	q#\0V.\nS/Dk/k4(iJ`uM5lG'\0n`54\r5tB}ZH4i:x4ӊ53&`ġamn-n\rWaMXCKQm4Ȉ5AXG@':LԠY3\"@WƎ,MQ[apfJ;`c=Rް~Vo韢wcXnч8K8tj't5eB:kxyaࣾFn	 |:a09\$cuf\nw>\"a!8~Z\\xM#،J\$yHhMQH \$\0]`@3bS#<KXL~Xf5Shawj6^ړ߼ճr#j\0%\0%q;)9g.,bBDDԀ~:rX3\nvL50R/ͲNn_!)SPء%0=+@B9of`~)=Dp@L>wЈ?L2YI>!?,@[G>>,ROs*dRcGQG!ùsq|AXqPP%\\PxÿTI8ŶΤs#磵# Ş#ϏL<p_Ź>lE;C;#Q}H_LYJy\$KL/~=1J(0d/\$Ae)lE/mϡ54)QŀtGdqQQ1Ep0	d13t!C?\$^>Q|!B?F9!c 'WhALY䅐p1K\\y*&MA{~d=/pdtPRjEA\\(Y:\n,yP@iDy)9B\r!df=Lĝ4pd>>pdV	Kpe&PhBe&Apd'D&Y6esU:Bd?O5\r'KeFDdeFEC\0t(|)-#)!m\n܊l4?[қI\rL^r5cU1\r,Rr?dRs7&^!O1F[-,\0)\nB}?^a!9pe?f1n)N΍a~W}eS>JOB\nP%\n*AIleqE،^}QD2p	GfmJ\$}ҹ+-5Eg\0QTF6Y	#c*ʃK4@[s8LaN)CXD[ImR\0006N9fz3M=~9`%sg=>G9ﶤT것4Ztl炳86!_KthIv<LC7I/!6tbQ.ԊMfzOF\\2gj\$	OU@W54\$vP3-,\\Q;P͕4NGH72T6iSjg#̹T2@97@l3p\n\r#<O7\0Nu;.|agqWrO=ʩ\$yLb(]:I(nqI`Ɇu@%!5;3K`ܛC,dVqX\0003N>Oo3xSƁ#1(XIeVx%UT#qNp #\$L)f|C3˹MbMG%d4L]Kmw6f酘 8\rvu9rAx\0h^:bdghE4R}xAH|Eݤ9|ZIVsNCϗ.֑֢nw<ZNDC.'IEF=Q3?r+K[TF4\r)@pxOx34̗<`qD0ǥ[APicXIZEd4YQY\\EQEviK\0B\0W݈OZ?fOkEْB^dַL1M5x,+WgStO\"L6SH=C54ms:eR4[&:ݚj#mّtՖ6lՎjbX5.KYbIgjeL	)j\n_VƦjwLZj.NqTn:CIx@4ԗctڬIR.1~:^wc+jsӫ.~vӺgoJj,/!dq%\$Zb\rvcOV%׬EJ!g5(KByk)R:ƟZa9~o͊n\0T޵+\\\0000܋=_ުhmsejKzлoX`DگTUK-g<N;fU\r5~:iQAyUCrQLZ6<m*qD|Zkg\"˭kZ=0IM^TZ1Һ^U8l,&}P6:˫:vúIf{?%lCfWc<`vKc5{ޫĵ9lh|jt>MNR=(ZD=Sl,95M7/qɘUACSa^ne~\0m)(%P!3JF;&ͲA[KslF1˧V28͔5p!!l	V\0m\"1I\r&Im35*|g.ZNt62倳qMZc]\rt-kZ/A{YpWЛsÔ _tvCi;EvI.фmQ𶂌Yܙ3#OGmaZ1FUJt!s\\Msܴ\rګ1H]=,It5(5xX5o\\YVmARuYVsz\";ҿ?;*PZ,LA3XU^!ORȑe&4].qe:Mif	5c3}7t.Ӟvh9%A;:7zhdW%S]hЩ{׷D;٥e]i;g&V]YO⏹,>k2ۂ\"-R@2%o\rTRS1_e!C_E֖Uɋu\\yS/˼WNmJ!@P\r`9Mss#|XnεAw^ttZ?=_eB\r`}P]Pe:XպIUN˝6CSRoMۭ%ۖ`Ps>@C!]EUjNl*B{\nSYŉuOP&ԏDU\0^e\\\rRL޶UrVi5f~=tU'<[k=UCh.|2URkICpG!@<@㷯'f:?J0]T57YeGIf؜*U\rS \rz%GuYU'!PK6/M4<pj3UI\"m?]7*Ѽ|sKAFW5L6U\\@@]t]M6\ro[m㞍#B\"+?Oo݀eoXMvg\n-u\0S\nT<X_OZߠ][p(^tUiiy<`8UÃNgF2W6{dE˻kn|pNM<GSqѫXrq̷6U\n#:q=8A9л_Y;@r	nF 7Msz^C<T>\\-x\\prqCV31LMtԫj]AXyN]z|\n]߲ASѼUفa'_w\$EY+F6]h%닸>U'ǎt]G*o]+'*w\\TŴ쬀1\0as;Kr`\"\0Z伵W.T܂q\0T!Ǥ*W]lrrӋo;*z]!uO6ծ\n`4/seTDH.CW?7E%X9\0_g<U_xKMabAqOx\\Urᴷ5hyN[&qV|⶿kTU_Aw9i7=٭_V67;;8NE&ep!\nQ-`4Ѿ\r8֠`-t\0c:lCg@aB_o@H(7_@`*>Is>`ׄLM4(n'+٭&ӣOVtZ	\r>#Od^m:ah)Nd).)TtO=;pfWt`;l=)u[|tҰ\r%\rҕj2,J40{bI*trPpk:?ĝ<ӷJ|\\t#4[}8j\\\n뺝?/Z\nG}mS=Ex@X\0_J=KzG\nhWR05ys>=0س|CNG~R]/b	PЂ5ZB\nqҤ-Yv|ɢg`*vHOD4ۑGQEvboW׌\0\0003Q'_>@~kO_#`&<u쎰]Ƞ':NEH[-p+IHhў~DF/g1w&0Edlhݜ}{q\0FZ|v9H R4@r	ȝl#>?\$r361IA62»%lpo\"4\\>J@ȡ\"qyIrDUIiwI\0\$CI%<0fIeT2WfZ~;&BDC7et5Oɣ&FBDNI]~@Q,?)a1,3 a8Jh\"3pRs-N8RYh\\{3Fu5D!?{S\$19|Ȩ-ʹ\"Ӵ5sy516'y<CkO7w]0ͨS SK9tyÅ	ha:M0Rn\$K;; Gʰl&B\n4\$iE6lx\"`\"huU:5#*(4[7,?{YTMs!܅{P\0,)\$~ScG4Y2s98AWe~PSUpQпi;|]P9P3S:e5W6#}_!tpYX^DdH4Pn\\f>Mc䵶م:\$@gOgIu\\wB叕^VÞT%j#[ɍ#qvoρe;8ubI\0q[>3l0\rCJ&1=D2\re5}8.њ^xYѸ'.*Cy7Sf \r)8#Gg%V*\0aLf(s \0b\$z0\0h92`ߤ8\0jޒ2\0\0k闤\0AǤ`\0òS\0\0z}闧z@迥zkB\0\0s` zW\0mߤnz \0nϪ mG~zq\"\0o7\0鿮~zg`r޹Fϭj>,귰z5>F-\0~Ϥ\0ޱzܾ\0a쇴z޽;헫>k>ϥG\0s߳>d\0_o\0kzw{oqwz״~{@B@1 ~۱_zף>zǮ^zo\0s폵z~G^駽g紞9Ϫ޽\0s穾!췵 {\$q\0\0\$I\0}h {ǰz?_\rz~N%z'{/UGzO{iw|/ɟ{w\0i?\n\0iϯ|WQw+A?{_ ^oοR|#|io?2|\r'Ǟ{z&{_C?~z7!7Xazzi?_O޼EҾ\0g@mz|?O {ק5>_za_V_^N%1O}\rw~	y}?>{_\r؞{~!\$g?cǮYƟz?zUo~|_!}@~_>5^{ǧߠg_b~wǳھ__yzk2zОzO{SIYOɟ\0m̞}^{w&|\r~泇?W?ߨ{-釸}%O>~g?=yD|_k؟6߼}S?\r_;it~o_8Qש_{YOu|Qz>~O|Ϳ/_0{C﬿}qE{%/}s/qI\0j|0g/b>{&SGY=}ݷ+0z-{7ϫ_@\$Y7܏F=~}`=<'HY\0q'oŀE8W\0002,CWޏ`^:zkK`{j5o~fQcǪ~@O6M{qϙ_-,zW`?3zEo|H'@|Da̯M^=pHs(/sr{\0/@R\r퇧_>'I]ׯ:FW>e|`gO߬yzS\np@r|i6ް}0jH~s}ј\r{\0!կH>4{\0\rGR|#zA{~\r>zT]O`=|#e|P[؈\"/O=A'ޑ?{|{Ǐ->|\\yC7^@RzaU3CGzI0?ۂdە8h9@>%-w{F4P~!O_=#֨J|r)H0V˿w!O,+`|>҇}a)7໽zk\0vh!t4A6.K\n_0=V~3x\nO{@BUH`AdpPߠzǨp=Lz5Y+>IzO>	s'^н~N-wO^Z9>>9V}ߖ%|b;8AF}M{8 q@(߬yQѵ#|DRH!E<3#x!	'Z)!Fo\nIKA|	0\\Juԅ,t<D1E/FݶR	*T9o2\\E\n8Mk@	4D^р[5DGA&ւ\$i	*\ndh}t)whhlBK}qrp\n`QDI	UJ;PWYc@|.8MН϶\"%B~ܒQa-C%x6SF0㈂yaddR},ƥJpZ,CGL.#\$,:r>u	5C	!>v~\0@'tǺ\$H?,0ppC\nGF['`2ׅZ{@aQBȟ ' fK\rP(_p/ Ba`S\$!2چj\n8\0jّTXnDVrءs+҉4hQ(\0,J]-ĭC1EM\0!hF\0Wt rZ\$!@R{FPHQ9Q+afb\0(e/\$*T\nEU`楏^BBL\0PY*8TCI<9th,\"#hJ\0\"ZQN(C\\{5SC^ƲP!OBN:Hx'Q91\$ǉ!0Cy\nS(Uu\r3/t\\8#8@\nр9ybH*7]R_3^8>'g aY~EC`\0+j\r8@V`\n\"3D\$p؀	8DD*5DGᎁwIQ	S\$FY1̈Q HDx۲Bc+FKf[BEL\0O@&҃?*TZTD:Ct\$gJ\r!\$xX(b#!\"}fE\0PD\rɅ*T	:<rRvC[%J-CmŔ#@1PBQq\"Hlyb7؈d\$FC@Lď\$ފ\\EXĜ@\nْv;=\0ID9\$lb*T;\n~\$l%4O22	&@(!DnR!k%\$-\"`?;%S&_BRC~ET4.R?bG\"&DQd R6 |.'\"Q96(B%'8r\"*6'D(s\nD=lET,azÊ&HQPU˂t3PBtH&Q6FdCdVqas23|!1H1a§_	(310LU\"z+x(L#QT#\"pDE舌p1\0IFh}uC,N萱FMDsF\0LGhPZ\"G*Uu2OZQjR+\$IeQ\$EyH^%AȮ^NLa%W8Lt>+J蟑,L>A9/Y~,9=PDBOv+Lx뤂	FhbD:,I\"ANbqtFq¸j+4fW<᠅f&.~Ȟbˉ,SSP¤\rC\\lEC7PخCлH#(!TqEǦ!Rl\"m3g.)A8:BZ0;j3e%%ن\$ok4PѲAM\0Tb1cJ12(z?B)H\":EasA4GvтEwE\nXD:_\0#HA\$~\$q%\$#,јōc2\"hQEh{/k(G]dM/1Yŧ2-Td赤^ŰCq[H2\$ŷC|%L,Pԋq^!SE44sc,&Z'dUюc73H	J4]HwL\r+iFDp#L\$.5@EB~|k0!<\"Lmhy\$A#60	 	ibAHl;(\0/AHHdz}\rѢI0b rEv7jD.cvqPt,&JH%#t)P	h8&>ʆ\\+d)J϶P\0k7ibB\$Zde3BAWB?C	z7nW͢#6h#f/+@'ca!,?>#!]i\$.\0	xCc180Ful	A2WK>㯻:F)	f~P%h	pl4Fܘ@S\$(C#k|T0h1EȎ(G(cpb4f0yh!\"S菏G\0=.hF |.=مGHopt=r2=z_Q:я2>oLǷFh5/&#\"	HA}D\"Dj-1^QR2N6~?dw1\"Pt\0҄<GBZF?&\0!0q\\p!У{?4\")^(WHH\n'\08ސ\0_BZp>鰝\$n^A\"3;GA <kQ.1F 2a\"A&tm#d\$F\0Lz;8ɏ\$#!1B3aQ=-;gJ!CzЍ\$Gߏ	C*t`ȑd5bM	! _\0S\r^ĵC]\\jB6\$cwGw9j&aO\$4@RE^DL4,7܈㐟{=ʔ?K%IU*G\rP0{.Y`3	DBD'hNC\$Gh\$cZ!90VR3Q~6CԀ2u04,MXrG\0:9P\$JH/ydw@=1N(@a@()\n3#[y\"LsG~^lHDԈ.<y`\n\0\"\"eИH}(`	,Fjyh	С\"	DvI<|v([\$\n#~\$,;<dحE\\h0zY'!ತ@Ju!(_0@2\n>(EϨGVD\"či)6\$y fd~fC4d: 3JRWHFAC TZ@%q2.(rF9	PQ#GFRbA?ِ\"!`\nȟGiG84QHCAbL(h8G8M,4Hd%N~Yܜ.;@q&s5k3B@%u6(\$נؐU%7'HgϤ	I6!9L1	ҟȑ\$&\$95L#nò#6{E -'v@Q8䅢\0:?GN7T@^hHɣ,\n;Hcv-@)bfK5>@I\0%Kh0jFs)|P0U#yxZ-CCg/.O:ItFCM]P`X3b\0.&ll3ҋ46<h4F(-K+t\$qA0\0001d\0^	3Ö7\0\\O+\0000z&o}mu2JX6RYK,/\n\0SciҘ\0006S3Me08)|-25yHS٩KRCД)TR5J_)TB)4%)RQ%J=Е/)RyS_ʣU4IP:@V~*Utcҡ>ʉ~*WT@*Tl8(J~\nU@-+.UAү@n+\n)Z򰀒v)\n[`o0RUYX2#Ĕ+DyYR%N>G+SySR%fJ+S9KOoJWiX_U\n',2WLap%Tdu,1|i]ұI+Ti^%:K,WiZå0K,S̱i`%xK,V<	\\\0/ #,rYlIgH%;2XYi\$eT/,RԴcr<N-ZYU0	T\0Z/O,Z4yO,Yĩ8j-nUDǩRen{y-v[)j٠\0Kx~w.[dko%Kmn\\49qKx.Z\\H e=.iq2@/.*\\#֩r\0_,->[쥩u%~˯?)]|uʜ_.]\$nKwy.YB̒%KS/.]	yrH-*^{2ݾ*^yzNT|a/_4XJ.]\$iw%K9/^г%F唹/_ܦ)>%i8)+`1`2%Jq[r_0<Ը)]R[w/Z`its%L0r]df\n0atV430_9rޘL5y0ariz2l©&#={z_wSJbSf?30e[1\0s{1Ƃ^=le/|Ɇ&pw0Ɉ&!LpY1*`SKAsdyA{1d<Y&4>Y+-NdiJ̊rd\$&M̒rcCֹ3&&S̚eLXT̢g2e|iR4={2ef^̲2ei.&a̺YcCɚ30&g2fifhʙ32f_&2g<`7`I&:3a)P\$7La3Y 1?x3LϩOI	3jh\$=L.Vh3֙gs=~#0h79^pRb<ɡIL嘥4Fb҉8-(4c҉b&L1h9f}4hC8ߠ;FiܓD\r|i3d\$\0T&{5BjקC{.g\0	1Wܒ&kհYY@A:~E3jSɪRfu̔#2Zkҹh&r̜5eyM&tz50)SD^Lz6:j׺cJz6:j;if4Eٹ:ޟL噡4FfډSRͦ#6jɵQe6gDh\n@+MwZhDiaMGZl4NA:pRkiE\rA:|q\$)pNzA:4BnSX|=Z76hӏfKu4vo|ݹuS{%	8YGN#dp|4cqƥAM\\_xQg ut  >Dd`\"F0%pXH}Iƙf9-2CXP\0KJy:?LhIV5z(Xx1o#I2|:.8,cTx\nMdnYc̜rTfDYunȺ1	A((E\$tDcXV(!^¥[\n%%Чb,/&))T%t|=Js##	G.\\`x'	&2EX̘gA8QERS0ĭ>8su\$@'8\nT91gΤ#i8BgUE#Gr%9ՑcN?-8(L;xѐ\\ƓqpPDCr\$P_\$(LP6PNg'Nќ;Fts\$);'XE	̃p.H-Dne	.ا!t9/rα]#yȎ\\\\(f΁;pDs\"2\\('N&+\$ӦP#:^x\0sxț:+]'V?:IZYƑ\\ò=u︷aNc9\n.3!=\"\0Y\"w^XsgOA=/jQ3\"2:55)af{2CV!5	3T*0Ț~\n57hq1;h\$H.e0	CwjNJ=+pʑͥC(t6Ć ZoyLgŷO|X5\$gn7d*2'gBoi#V)>Y>P'#^>Ӌ70m`[P9ii~r0~}디	\\}VX5@>@ө?5K4)gkjR~jN[W\$rSZ]Kv{[P'OixOmJf%\0S'p ,K<՘RP`\\Գ@]gyR\\8h `R'7HBc(7f1c\0wMo3sG@`7zgFP\"(@mƐH:N3>eK:t%,(LMEAVOM:q5E%-)@jچSLME>dAesAz7D\nه.J\r5lK\0nt@\n2:?V\"5lɭ&SQ[	}\0سK>tG0T:\nj!Y+!¶ (-mj!\njʹ(EЩ!5@J}6҅T+A&bZVE6iΞK8BcaY(_'QW	%`\$}n\\3-4Nԡ5EPᎆsJ\"ܽP*	h҇+?SUbwfHt'/\\x\nr\riFT=y5PA<J<Pbd*PPF\re8'P+f'ӴD@0DmN\")7 ,E7X6\$dU\rV&0%f@4UPg)aiӅNd7a<(tJ\",襯>dE:(RPQ S-84OU?ʹ3x`G=gKPb	'xBk8.b4FV%UXkJxQ\nǃ/TFa\0m_eF\"!ꚇ\rYm1F2Rp IhĵG(zZ3hϸm>hss4dsфQfq\0NQ2X5ݠDՎ5шTpk-B\"ʜ_ѹ^n}ަthqqG8S-sQĢ>|+:-˓∖hU-x4IΓmGhG0U>B4.ZM9[I`P:Cbs\nu(V\ns%T֣P'B|3DRQ\n]?6aT_O̤xC90Q5I\n,TTqC @*5JMITIy>Ji&\n[I1M\rc夘jycy:N㞗BM*t6ieϫ\nӱyz\njR\"tJ/; h>|f\0ZrCez&k`p \0s.\$t\$S#DM4xCU)W҄\0J*jV\0*\0\0Jlb\0`ZףvTM=I'D_ZW෍糸P+\n2NGS\"f\$j6V65pT>3ZXk");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0!M*)o) qe#L\0;";break;case"cross.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0##\naFo~y._wa1JGL6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0 MQN\n}a8yaŶ\0\0;";break;case"down.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0 M*)[W\\L&ٜƶ\0\0;";break;case"arrow.gif":echo"GIF89a\0\n\0\0\0!\0\0\0,\0\0\0\0\0\n\0\0iӲ޻\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Qd=substr($t,-1);return
str_replace($Qd.$Qd,$Qd,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Hf,$Jc=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($Hf)){foreach($X
as$Gd=>$W){unset($Hf[$x][$Gd]);if(is_array($W)){$Hf[$x][stripslashes($Gd)]=$W;$Hf[]=&$Hf[$x][stripslashes($Gd)];}else$Hf[$x][stripslashes($Gd)]=($Jc?$W:stripslashes($W));}}}}function
bracket_escape($t,$Na=false){static$th=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($Na?array_flip($th):$th));}function
charset($h){return(version_compare($h->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($P){return
str_replace("\0","&#0;",htmlspecialchars($P,ENT_QUOTES,'utf-8'));}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$db,$Nd="",$Oe="",$ib=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($db?" checked":"").($Oe?' onclick="'.h($Oe).'"':'').">";return($Nd!=""||$ib?"<label".($ib?" class='$ib'":"").">$J".h($Nd)."</label>":$J);}function
optionlist($Ue,$sg=null,$Oh=false){$J="";foreach($Ue
as$Gd=>$W){$Ve=array($Gd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Gd).'">';$Ve=$W;}foreach($Ve
as$x=>$X)$J.='<option'.($Oh||is_string($x)?' value="'.h($x).'"':'').(($Oh||is_string($x)?(string)$x:$X)===$sg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Ue,$Y="",$Ne=true){if($Ne)return"<select name='".h($C)."'".(is_string($Ne)?' onchange="'.h($Ne).'"':"").">".optionlist($Ue,$Y)."</select>";$J="";foreach($Ue
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ja,$Ue,$Y="",$uf=""){return($Ue?"<select$Ja><option value=''>$uf".optionlist($Ue,$Y,true)."</select>":"<input$Ja size='10' value='".h($Y)."' placeholder='$uf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($jd,$Vd,$Zh=false,$Oe=""){echo"<fieldset><legend><a href='#fieldset-$jd' onclick=\"".h($Oe)."return !toggle('fieldset-$jd');\">$Vd</a></legend><div id='fieldset-$jd'".($Zh?"":" class='hidden'").">\n";}function
bold($Va,$ib=""){return($Va?" class='active $ib'":($ib?" class='$ib'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Kc=true;if($Kc)echo"{";if($x!=""){echo($Kc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Kc=false;}else{echo"\n}\n";$Kc=true;}}function
ini_bool($td){$X=ini_get($td);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($Vh,$N,$V,$G){$_SESSION["pwds"][$Vh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($P){global$h;return$h->quote($P);}function
get_vals($H,$e=0){global$h;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$i=null,$jh=0){global$h;if(!is_object($i))$i=$h;$J=array();$i->timeout=$jh;$I=$i->query($H);$i->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$i=null,$n="<p class='error'>"){global$h;$ub=(is_object($i)?$i:$h);$J=array();$I=$ub->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($i)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($x);}function
where($Z,$p=array()){global$h,$w;$J=array();foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$e=escape_key($x);$J[]=$e.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$x],q($X)));if($w=="sql"&&preg_match('~char|text~',$p[$x]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE ".charset($h)."_bin";}foreach((array)$Z["null"]as$x)$J[]=escape_key($x)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$bb);remove_slashes(array(&$bb));return
where($bb,$p);}function
where_link($s,$e,$Y,$Qe="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Qe:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$M=array()){$J="";foreach($f
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Ga=convert_field($p[$x]);if($Ga)$J.=", $Ga AS ".idf_escape($x);}return$J;}function
cookie($C,$Y,$Xd=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Xd?time()+$Xd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Vh,$N,$V,$m=null){global$Xb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Xb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Vh!="server"||$N!=""?urlencode($Vh)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$le=null){if($le!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$le;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$le,$Rf=true,$wc=true,$Dc=false,$ih=""){global$h,$n,$b;if($wc){$Hg=microtime(true);$Dc=!$h->query($H);$ih=format_time($Hg);}$Fg="";if($H)$Fg=$b->messageQuery($H,$ih);if($Dc){$n=error().$Fg;return
false;}if($Rf)redirect($A,$le.$Fg);return
true;}function
queries($H){global$h;static$Lf=array();static$Hg;if(!$Hg)$Hg=microtime(true);if($H===null)return
array(implode("\n",$Lf),format_time($Hg));$Lf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$h->query($H);}function
apply_queries($H,$S,$sc='table'){foreach($S
as$Q){if(!queries("$H ".$sc($Q)))return
false;}return
true;}function
queries_redirect($A,$le,$Rf){list($Lf,$ih)=queries(null);return
query_redirect($Lf,$A,$le,$Rf,false,!$Rf,$ih);}function
format_time($Hg){return
lang(1,max(0,microtime(true)-$Hg));}function
remove_from_uri($if=""){return
substr(preg_replace("~(?<=[?&])($if".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Db){return" ".($E==$Db?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Kb=false){$Hc=$_FILES[$x];if(!$Hc)return
null;foreach($Hc
as$x=>$X)$Hc[$x]=(array)$X;$J='';foreach($Hc["error"]as$x=>$n){if($n)return$n;$C=$Hc["name"][$x];$qh=$Hc["tmp_name"][$x];$wb=file_get_contents($Kb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$qh":$qh);if($Kb){$Hg=substr($wb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Hg,$Xf))$wb=iconv("utf-16","utf-8",$wb);elseif($Hg=="\xEF\xBB\xBF")$wb=substr($wb,3);$J.=$wb."\n\n";}else$J.=$wb;}return$J;}function
upload_error($n){$ie=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($ie?" ".lang(3,$ie):""):lang(4));}function
repeat_pattern($sf,$y){return
str_repeat("$sf{0,65535}",$y/65535)."$sf{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$y=80,$Og=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$y).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$B);return
h($B[1]).$Og.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Hf,$md=array()){while(list($x,$X)=each($Hf)){if(!in_array($x,$md)){if(is_array($X)){foreach($X
as$Gd=>$W)$Hf[$x."[$Gd]"]=$W;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Ec=false){$J=table_status($Q,$Ec);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ja,$o,$Y,$mc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$de);$J=($mc!==null?"<label><input type='$U'$Ja value='$mc'".((is_array($Y)?in_array($mc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($de[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ja value='".($s+1)."'".($db?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$h,$Bh,$b,$w;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$ag=($w=="mssql"&&$o["auto_increment"]);if($ag&&!$_POST["save"])$r=null;$Uc=(isset($_GET["select"])||$ag?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ja=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($Uc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ja,$Y);else{$Kc=0;foreach($Uc
as$x=>$X){if($x===""||!$X)break;$Kc++;}$Ne=($Kc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Kc > f.selectedIndex) f.selectedIndex = $Kc;\" onkeyup='keyupChange.call(this);'":"");$Ja.=$Ne;$cd=(in_array($r,$Uc)||isset($Uc[$r]));echo(count($Uc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Uc,$r===null||$cd?$r:"")."</select>":nbsp(reset($Uc))).'<td>';$vd=$b->editInput($_GET["edit"],$o,$Ja,$Y);if($vd!="")echo$vd;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$de);foreach($de[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($db?' checked':'')."$Ne>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ne>";elseif(($gh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($gh&&$w!="sqlite")$Ja.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($r=="json")echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$ke=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($Bh[$o["type"]]?$Bh[$o["type"]]+($o["unsigned"]?0:1):0));if($w=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$o["type"]))$ke+=7;echo"<input".((!$cd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])?" type='number'":"")." value='".h($Y)."'".($ke?" maxlength='$ke'":"").(preg_match('~char|binary~',$o["type"])&&$ke>20?" size='40'":"")."$Ja>";}}}function
process_input($o){global$b;$t=bracket_escape($o["field"]);$r=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Hc=get_file("fields-$t");if(!is_string($Hc))return
false;return
q($Hc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Wb;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$Wb->primary),);}return$J;}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Qc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$h->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Qc){echo"<ul>\n";$Qc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Qc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($kd,$ue=false){global$b;$J=$b->dumpHeaders($kd,$ue);$gf=$_POST["output"];if($gf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($kd).".$J".($gf!="file"&&!preg_match('~[^0-9a-z]~',$gf)?".$gf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$e){return($r?($r=="unixepoch"?"DATETIME($e, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$e)"):$e);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Ic=@tempnam("","");if(!$Ic)return
false;$J=dirname($Ic);unlink($Ic);}}return$J;}function
password_file($j){$Ic=get_temp_dir()."/adminer.key";$J=@file_get_contents($Ic);if($J||!$j)return$J;$Sc=@fopen($Ic,"w");if($Sc){chmod($Ic,0660);$J=rand_string();fwrite($Sc,$J);fclose($Sc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$hh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Gd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Gd):"")."<td>".select_value($W,$_,$o,$hh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Jf=is_url($X))$_=(($Jf=="http"&&$ba)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($hh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$hh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($jc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$sf="$Ha+(\\.$Ha+)*@($Vb?\\.)+$Vb";return
is_string($jc)&&preg_match("(^$sf(,\\s*$sf)*\$)i",$jc);}function
is_url($P){$Vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Vb?\\.)+$Vb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$o["type"]);}function
count_rows($Q,$Z,$Ad,$Xc){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($Ad&&($w=="sql"||count($Xc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Xc).")$H":"SELECT COUNT(*)".($Ad?" FROM (SELECT 1$H$Yc) x":$H));}function
slow_query($H){global$b,$T;$m=$b->database();$jh=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($m==""||$i->select_db($m))){$Ld=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Ld,'\');
}, ',1000*$jh,');
</script>
';}else$i=null;ob_flush();flush();$J=@get_key_vals($H,$i,$jh);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Of=rand(1,1e6);return($Of^$_SESSION["token"]).":$Of";}function
verify_token(){list($T,$Of)=explode(":",$_POST["token"]);return($Of^$_SESSION["token"])==$T;}function
lzw_decompress($Ra){$Rb=256;$Sa=8;$kb=array();$cg=0;$dg=0;for($s=0;$s<strlen($Ra);$s++){$cg=($cg<<8)+ord($Ra[$s]);$dg+=8;if($dg>=$Sa){$dg-=$Sa;$kb[]=$cg>>$dg;$cg&=(1<<$dg)-1;$Rb++;if($Rb>>$Sa)$Sa++;}}$Qb=range("\0","\xFF");$J="";foreach($kb
as$s=>$jb){$ic=$Qb[$jb];if(!isset($ic))$ic=$di.$di[0];$J.=$ic;if($s)$Qb[]=$di.$ic[0];$di=$ic;}return$J;}function
on_help($pb,$_g=0){return" onmouseover='helpMouseover(this, event, ".h($pb).", $_g);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$Jh){global$b,$w,$T,$n;$Tg=$b->tableName(table_status1($a,true));page_header(($Jh?lang(10):lang(11)),$n,array("select"=>array($a,$Tg)),$Tg);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Lb=$_GET["set"][bracket_escape($C)];if($Lb===null){$Lb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Lb,$Xf))$Lb=$Xf[1];}$Y=($K!==null?($K[$C]!=""&&$w=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Jh&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Lb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($Jh&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Jh?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($Jh?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}global$b,$h,$Xb,$fc,$pc,$n,$Uc,$Zc,$ba,$ud,$w,$ca,$Pd,$Me,$tf,$Lg,$dd,$T,$vh,$Bh,$Ih,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Jc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Pd=array('en'=>'English','ar'=>'العربية','bg'=>'Български','bn'=>'বাংলা','bs'=>'Bosanski','ca'=>'Català','cs'=>'Čeština','da'=>'Dansk','de'=>'Deutsch','el'=>'Ελληνικά','es'=>'Español','et'=>'Eesti','fa'=>'فارسی','fi'=>'Suomi','fr'=>'Français','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'日本語','ko'=>'한국어','lt'=>'Lietuvių','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'Português','pt-br'=>'Português (Brazil)','ro'=>'Limba Română','ru'=>'Русский язык','sk'=>'Slovenčina','sl'=>'Slovenski','sr'=>'Српски','ta'=>'த‌மிழ்','th'=>'ภาษาไทย','tr'=>'Türkçe','uk'=>'Українська','vi'=>'Tiếng Việt','zh'=>'简体中文','zh-tw'=>'繁體中文',);function
get_lang(){global$ca;return$ca;}function
lang($t,$De=null){if(is_string($t)){$wf=array_search($t,get_translations("en"));if($wf!==false)$t=$wf;}global$ca,$vh;$uh=($vh[$t]?$vh[$t]:$t);if(is_array($uh)){$wf=($De==1?0:($ca=='cs'||$ca=='sk'?($De&&$De<5?1:2):($ca=='fr'?(!$De?0:1):($ca=='pl'?($De%10>1&&$De%10<5&&$De/10%10!=1?1:2):($ca=='sl'?($De%100==1?0:($De%100==2?1:($De%100==3||$De%100==4?2:3))):($ca=='lt'?($De%10==1&&$De%100!=11?0:($De%10>1&&$De/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($De%10==1&&$De%100!=11?0:($De%10>1&&$De%10<5&&$De/10%10!=1?1:2)):1)))))));$uh=$uh[$wf];}$Ea=func_get_args();array_shift($Ea);$Pc=str_replace("%d","%s",$uh);if($Pc!=$uh)$Ea[0]=format_number($De);return
vsprintf($Pc,$Ea);}function
switch_lang(){global$ca,$Pd;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$Pd,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($Pd[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Pd[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$de,PREG_SET_ORDER);foreach($de
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$x=>$Kf){if(isset($Pd[$x])){$ca=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($ua[$x])&&isset($Pd[$x])){$ca=$x;break;}}}$vh=&$_SESSION["translations"];if($_SESSION["translations_version"]!=2763095553){$vh=array();$_SESSION["translations_version"]=2763095553;}function
get_translations($Od){switch($Od){case"en":$g="A9Dy@s:G(ff	:Sa2\"1..L'Im#s,KOP#I@%9i4o2ύ,9%Pb2ar\n2NC(r41C`(:Eb9Ai:&㙔yFY\r\n 8ZS=\$A`=܌0\ndF	n:Zΰ)QAk}eADaį\\}5#|@h3N}@i˞Nt~9B؍8:-pKX9,p:8(\0(@-BƎN@.9#3Ӊz7:ތ@F.1\r\"\"ӈ#c:9;RТ<;چ\$#΁!,32ȀP:#ʾK#8΀Ac7 -BμH3£ǣ;,|:Rp9mP(\\6md:ƀ-M,KA#FN_TvhK.#gfXx2Q`P<2v.X)ٶ:!2J [3bѹq\nz5V(&3TlO[~7'3pt.xN%-MA67V\nJP\rb#2x;̳j֔F=\nNN64J2b(e8Ɯ7%	TA*\\ZЀD49Ax^;rAr3GMʎо7XD[{j:x'1\$0xk8V*!\"Ȕ0./#? @i@(	O0@(JDYLfvsZzL2T%Ɇh6򧙝&~Jɩ5hU겎/D@bHJYM/ ϓMIchi%TWŢ\"jLFF/-*g^i(\nגSWy8J7dEC;FU2F?n\"I Dn%9pZXCC((xNT(@(\n \"Pd\rᰗPi(a_H4S*l'4~N8f*sg\"cK!RRQ樣tq\rl4BQ(?kEj=W\r\$a:keD0\rXi4G~b\${!:`èg\rMwOOH\rIPaE%'F&k3!5?S0>izHV*%X4zdT\rཨ}=5=6PCA)ʲm R\\O~`Udq\rL'\0#hrGe)/~B)6gN~K!P*/t/cS{3\ro#JIAA_wM\$^-,lԐY\$K& a.d,!RCkh'83RPkSV2=l+lqXfzce6§#G\"/(U[xE4HeWY_x~Bt~!%bkg?!!rβ%.ѝb)Fo'%čCX\ne\\Y/3t\nk	bv#Ko\nB:pԖS+YE):(6' %[TcMq9~0IHdk\"\$<X\$ٗyF+2`L@d}tYbh~3kZye3Q]&`	vlݙh˱j\\͝к;>/UVJB7MmIAaϚxj3-Vjpe`3kλW?=N֝}+H:\\YAnb\"R\"̧9M	H!b-%;kע mdmm7)'W6ý)scsN2)%fՑ~\ryt_eh}Fn;@\$*⸂gr}%[ka3INu{)U9KU܆FCcDư4٧mUr?L7]9N\n+#6ẉ㤑:)q?7\n{r=]wt󫵞zf=cKFY}[ed-X<TjrLEҧ(شO%@v?WO-49<}tއq\r/>x% _8G\nfiُij(5b.0lmun#1b2\\KhKߗKex,9:dfmI)(h6H\r \rm\$iL#\r\n/'\rF.`Z5\"^.ZO LMG'0]i%D4\0Nڠ΄?#j)kV0`N'\n%	\":**%\$s	f4;Eb \"JJ>.l\0IPr1Dp;o3\r@\n\rдn>ȥ̡ @h@@	6PjJ)e40R?Зv\$.&K	b^I<cbvK\"1Jc\0.m?g\0ǖ܍͑f@^fQ0EdDY\\)ԫC.JZGbLH&*OQ\rѮ";break;case"ar":$g="CPl*\r,&\nA(J.0Se\\\rb@0,\nQ,l)µAj_1CMeS\ng@OgXDM)0cAn8e*y#au4 Ir*;rSUdJ	}*zU@X;ai1l(n[ydu'c(oFe3Nbp2NSӳ:LZzP\\bu.[Q`u	!)&<q) F>ءPs7X5g5KK¦0ʇƢ\nS r\$j(v!Jbq0\nV?\$WFE{-:>W9J|eRhY+dxB&[*lꎠ(B&4S!dPB=tO	?:XؐeJ	\$\n&3ޜ:OKЬJXm\$*!Rt.\$TInQ@\r([OeK41Ȓ,2N?N-2<|P5jpiR&Zԏ=\$RUm)alOde6!^Rè66^c0r)\"eZYWNR<!jh<lWL5=8Ml[ܬ[2)GYnqf1AT13pSwwWHumSئ#GN8;SͿ`MYuZhp:\rS<#J70팬+U\r7&P7m<9c5\rxach9o0a\"׃k:a@:Y)\"#V\0hk޸3\\یE{z§4Fِm\";dBC5(bCf\\A\\mtAѕf&#v95?H;x2ӱhx0;Ah80txw@0G,(r3x7m40r6!\0󆾃X\"\$6^`t0lၽ\rڂ(ih O?dJOڨ1i\"J?D\nLUI*Cmr3T٩\r3`kPtZ1J{5jj]\"PdT63+lF/(e#si2O7&a\$> iW!8/\rlA:(o\r \ri,_i6%gpBO\naP4&2i)5H^ҜL(,]3ci!>n±Jg^8v`+;h5\0_!AA3\0\0f5Ɣֿ	\r42W#IiBTVҴBFPjPxNT(@-8A\"PPgz-рtD3L+}C0a^Q;-XuJG([R)\$.Zp|\\.()2	,1H1TԼzc69Pd#LdXeS-MRXK3yRٰŨԬHuizd=uMZbl.!'bVarc EO2ScO\rA\">'7agWY\0CeA]1|e5݆FHȂoc˓SiSZ\rQ#L&¶	46(,ySu[Io*̓Z\\N):!%9sƑt4IP9M\n^QH%ɸ,6[X2HN;(=&tO Aa KH\"M	lF7n(e)1!Z9 ]2`s/1he\$	12!Ly`uek%AUDR!(>ZCZӥN2(-Ze2;Ǎ(>{\\25:i01PBLLdt3s7J_MWSEJ)cAj\r`sE\0inkI%[bUEv=;0{x\rjI5|eQvPQhKT,yM'\rXɞaʮrp_D@u(5gϦi<X[K`H'f4:lUOL8~:%I!b|y5aC+YDxKaYb(:d_x[؆3f]z.Đ0NԩZ2iP)Ki)?L|o;fy!D=(.\\\$˽'gsWz-ΠHn9ULbD3_Mhb4C.G*T><|P7Wy~Tä\$>/P{`D0k#eDG*10\0Χ?-Xʙ\0\"\\+-\0H(u(/wPIҹ6<\nRL\\.oO^\\?.LHQJ&&/V.ETRLБк)F.AV\n评	@	fP\"k]H\"nhʬzM%fbU#h\re..+lP望<\rBn	ov\"h%E+e氢HwèGцznoRAQdWICCX%QnQYѴ.d0PqC[_8\\eCpcWdDˋ<KL[>*-NAdRr\"Nov1/'(ˆ@\n\\YjZ\"i\$nLclt)/ľ`@i\r \r`@\nʬxnv\r o&`h|\0Ĉ*\nZ\0@+#/d%#~0FӋ<[b1@+2'a%8@e'.2~\0D@=PM>(Rb>R;5H|~#J7#D/6[\rT⍺:0N\r\$B}N|C(18^4CI,ʘ@\0Ks9x²L9s\" &)\\vB>g]h?谐4K/\0}\r*̾\0\0@ \r2jH&v#fd1|Jc@n \$D9&n2f7CJnA3*ET8#Zz#D\\	\0@	t\n`";break;case"bg":$g="P\rE@4!AwhZ(&~\nfaN`D4\"]4\r;Ae2a.arp@ד|.W.X4FP\$hRs}@ЗpДB4sE΢7f&E,iX\nFC1l7cMEo)_G_<Gӭ},k놊qPX}F+97iZ贚iQ_aZ*n^S9YV~]X\\R6}j}	l4v=HD겹%>L*H8@P|.3dm X3!r'HS1k6A>¦65	ܸkJ&j\"K.-:Df5Mb(<Oh(GZi2=^9-bk1l#j4-jAA1cA/KƁ>BOKm\r%2!1<h1\\hF\nOK8&,(,\r*tᬏ͓֮Nm-GC\rY->02!R҉!-KjlW0i7.L%E0D)hTjHV˶4F\0ٸ((@65[Z4T/Ϳ|KMW&*OjT-m<B&!H ȊNL}'ȭ\\ΨM^-AueGfP}T[NUwOX/_qU,}L#n4B&\\`/lYOkO:?mSP	[ P:M_\$Ek6!z\n<h3%iGʪQ+jlZDjErX]j \\N7fr/>I|J`6c9/~KwzHڡ,FO?YF#.!ܒW)2QOعIG|j7p\rC/Ds0\\H\nL@PHT1x \"ETX;'➞	'45cF;A^l*C0=A:@/Fhi\r98/M&Øi\rp\0de/ Cpk@h<U.UO,06cԸ|#-69Tf۬y^l|f\0ˍ[)3);QnTW+'0jeRqґxvF͐)۽\n (N#gS\0rNd\rGRJY,BIupcRZ[6?˦4j-XNCJ2'\r\"DN7E^0cS{ g(u::JX[\0\$\$!GzL0iT5ʂ{S6\nt]y摣TϦ8V|E,5Om5!~=jN&rV'6IZ;Bǖ@њD8HEj膿^299ʁqnEƚBGQG)\\x\r[uv7C%*K;5ה4ΊaOjJO h'<ދдՄFB`RA9Ի<@i#zB}}kAe	KɼuU0fdDB dUwe5Qbc£u\n>UբEBV*beqX,ZHSi\\Ȗw#/,\rgMJړ5f'7ڍ4 \nn-3T+VSfR,AMbwqgeozG\$ԹlOO3Ϫ)uĒq{I#v\nb^Aψ\\A,j]*%~fʊNXZ9f(L5?)!)>ngpmI+\\uஹ\$JE[ԳkvgL8w9sC˿U:#!9tgئo9]ݵFSF @BH:@f7GCp^OHWBp	h/ں3M@ɓ7`,.8esD*+[,G,eayJΒX=*6^]^BsN_4q[ۺyݺr}vGݷS2{sg«`_5u<5k'pyRAj!\"^_O2]^;A~@\":wZW\nMQԅK+)/XŞ=Y.H/ea@\"+q\0#%/QҘf37f\0&..-[J/Lތxhobʌa%/xe~6BId)*vRkTJ:f*6%tx'%zݐz[8/,cjCNlqL|h&Y}\nMdD,PN\0RF*h]0Apz=,^TN/OýAG,squfHF<oplULu.}OD+\$z^ސ+oQ5N023rh3\r𚥎&N;+jnT1Boed)ηEG.K8?u0%-qKy上ڱ}H<mMjHj&<',#|Rh@bBlDiRƘ+Y˻kʆdReF)G7EnQv0%حmGbۍ%-jv)lլPP/)M*ܯCOܬ)Mcf% Q=\$/*sfO9-ǯJu-~2*Q0Y/(	.,0/,n	k׆߳_6 2&NdaC#raczHNX;e ,I1Q**=3r/ ʣe6P,se4_M?8s9s89S*D_e-9e63+mܦrFN:3\rv	5,*=?\n93+GsdBT\rˡ*t(kqIA@psy;>ް7(p+@CA&739-jtYbbTgB6`έEԏ8'I(}.R9PIG\r;!J;)DgGIq41b2&g\"İhy0ԡ+S+Tbĸ4.l\nTo?O4O1G,M?:*LM@<7M>\$\$u<إ/s\0\nDvn&`UFg+SoO\"ѧNMWp\0w\0b:bb¥B\$+j	0Dc%\$+i@@\nZLHF&r(TDpCtT_2W-Us*'d^iG\"=0َˊP)c7`#i:fE(|VDH\r/҈qLhEYPjt7>la\\Nah\nF&Hrp2h\\\\0dC>'c!pԝ}jUjЫkPIk-<hl0grsjYqQ.k`%4ʑQo*ʺ-IZExY[0SpbQGľȱErm&?GWB4v\"E. n݆LM+4α\"p \$<Jvaop5h4w9!-]N@XG0IQ#(60-Fots'GЀY4bS!{v\\TuIE>=/4a%5uI%8\0";break;case"bn":$g="S)\nt]\0_ 	XD)L@4l5BQp 9\n\0,hSE0ba%. H\0.b2nDe*DM,OJÐvх\$:IKg5U4L	Nd!u>&a\\@'JxS4PDz.SE<OSkbOafhb\0Br)QWE{KPP~9\\l*_W	7ɼ 4NQ 8'cIg2O9d0<CA:#ܺ%35!nnJmk,q@ᭋ(n+L9xkIB4<  5mn6\0j9z ,X2,(_)7*n\r%3lM \rmKKpLKC	S.ILG3W9S2b!|;I7#=MTR/\rҞY'ERj!*؃5eO;w4ӅWF,}!ITdX/Z*5O5SyB+eQ1QT0*quy)M{SM!ELPG5E0D{DJQ}j}X4E.:r*Ԗ<|Tf\\@c\$WHKd9sjل^rγ6N{n`SkwE+%V+dU7kqT	ۑѐDnzݏEn@:c\0\00ш&rc|Wzd|U*e6T!BMt\\v1TM]nISk3zkČ1O>]R-ˇ1+|CXMJ|Y_Y7+'izWȓKnw*\r9\0wr<3`؍*PL_T\r6na1337thaP0pPg6@~@s07)\0C\naH#)fkKq)bVQ/A4.zړwdj4ܝ[[f:TC\\(^I\0`/XJ1r=9pe4 \0<'`z@t9^ü2EPC.P5CA7pDÑ/'8>	!85<;ogG*yHt=B!QDK:*P4\$_6J1Q\n)R!NA\n (*d0K\"3\0\n)HDZ&/*%L*xOt8WR,(cV\n!3Lr9Y@iŽ	D5bPi?%Tk >QV蘌ûM䬧ukؑQbHy;2tys(DCA9ͅM`@%>vVUT҉@d\0^\0T!Z9N>[DYmjR:a˖!C^WC` a4p@ Ǵv-s4_@\r~#4K-ӨXcA:͈㈺T`)>ݾ1rL	nʬVW+khqKp)6g0)j (\"P\\6YzO\";XRkMJD\$I+Z)\"8evٙJ9\"X/dnstMO;FrP \\%E|BXgpsĂN4ː 4ú@@C3Hp%nҕ)5S4w(֜0LYlRu:%;Һ[VJo2d*ߌ_!Rr6|Rϙ<.wڡ+Qɒ}ńڌnYvHz(!S1ՙ~S\nhg\"V}aܰDLOrh\\P>c;񂇘31ǐ@XqO&[%`nL9GR}qj8St;XzzN!fZ`q]V`/l,|OHiE5CKȦ3Ѥ&84}w+\\=Y!P*ިDyC}>YoJ!h^4.Ѧ2)@No,D{Etr]0FBlOKsZ_;,vpQ/ C|Q:-Nl\$\rن:|kF\"X>7}tOݯߴbsB/\"ZFYO:Jh/\0e@\$&hEdL&SG~`FdWMX' 0,\n\\\n`܍Hk.PXPLa-`eVeB~B:G\$2j-5N\nȼ\$-(/*.	\n&Loej,N\naLfd7&/0 3P{/fPxf\"I)E.6Ps/q	j(3MjIkq?-dwIdcp)cco\\E{wQhX;../IRzΥj*~g*NDgV[`jU2HP1Q1=h10r\nvVwW@d&ĢdH'q,\$E~1VNXBѡ%Q!βF|Υ'2QdG0;1RWrBOI\"ᇳut1dmH\$yq2,qzPr+Qф1(2ȣRN['R\"OkoX\rM!2'sqG[1hOw2*c3bRyJJ2	2'6[(r.6{38rv*0r/r6gm7!R8B-\$,n'0-j,LGȓ.3SK*P̲\$:7\ndì2Pe&Ԣ\n\r̰Prl\$tPs_9n|ƥ>K&T_̥\"kNtmׅca8)3&K4[si7OyF9s2GQ9MGNtN4qqs%3--Ԙ C)Fs[TIeHt{8ԗLQE\rKٔH4./w\r&t/LV@Ͼ[nrGDB8n&a+u6	(RnԴ9YSQS\0jMB4H}?校_F箚V*%xQV4[UL}Vnq*uw5SHN/łp':LL(Iq+ԥ/\$UK꜏NLT֪\n\$KuUmJu^WCXկ]͒n{Q7T<b[[k%W-^2!UL\r^9_ZD\$c#<XtBvGsqF}QR_ԧ2\$ncV	UUEKd1e?vkd\rgI?gNRZaU/+oHI^5Ahk}kifGc13k4N5X<A43A\n0SIs4)FgK58\0W5~W\n+Lgs3gYM**\$Ma0]s1su4;sffcOϏ}l.h8\rV\0`	@@l?hh@n\"芀\0@J\0\r@\nZ\0@yj.a>q4r1>mk4uhrc1B}\r~_IeM(iv>5sйGB	z05*jD#:-,qvqX\0%tv\rrL5Vd3qb\0tF\"-oбkK\r^<@20p/d80;Tes)0TcΏsg;.8/b\$Opֵ\$YS60\n0<wL\r@OxTs}mqknIB)Ƙ/#j`F[yA#g_\0`\r+&uR\r,/\0@ \r8uq(sLʒ`9Y)8/<2^RLɌxˌH[u_t&ވD?#Ȇsyy9^__&OI!KuW5dEP.@	\0t	@\n`";break;case"bs":$g="D0\reLS?	E34S6MƨAt7ptp@u9xN0V\"d7dp؈LAHa)̅.RL	p7LX\nFC1l7AGn7(UlbeēѴ>4)yFY\n,΢Af -e3Nw|H\r]ŧ43XݣwA!D6eiM~}œᣘ!2M!PIWIKlm0cL@#A\024*#\n<M+shr5ү#*#ˢ8B/+_ P2`G\"c\nrڋf9=4FN,X&'**\n2 2j5(G,\"\$>R0~:c:Bn\r3\$3\$?lςp + ĘM*RRMR4SZè5l<.z#'#<r14h2V&+0Pꚺ:ڇqȈ:Ϊ2DOcc[&Y36Ljm:.(z#/BLAR77/Ҿ@6ς2PXv ઼˶rBv=L&N+ct0dX84ԬN6G4,3	hڍ)89c06 Cx΢ab9j¢t0u2R	+-H )B52.	@3bc\\*#+У@s;,\nӡBmU֌3t0BlM92p42c0z\r8a^]dn2H\\{>4p^]R:xn\ra|\$܍;7^0SW\rX#8\$U.>#Ĳ9M9f)tDpNW	ʸ68!Qٳ!4\nebFzNFO).Km6M\0C.9N\" 	<1+7\n}H7LHyha4Bn@ C6G82XcaX!2{H P	L*!(C˙# hHXL\$.wB`aUi\"s%dͭܬIbhp\0y!`ׂR+`Jz]\\DNz1!Lb6i	8PT2s&h4\n@T\":d=&Ei=`z4ҭBhZ-\"|ZB eC,̎~e&F?\$oA\0gXt&pN+|&%F]7ỲAǡ3lPfYl?Fٺqy-w|l\rn+jjO찚|VRgO	MLP ղ4h^lNZy7̱E\"3àpnu`yO9ci2MQXJYbO\r'5\"\0	(5\0PC4KJYk>P(f&@vN\nb&%VRJMbd|%QN.WCH%>\$ڟBT!\$\rSDhќA\":FbSC&n#؇3!&%9sZLEloFpx.!WclVq'PTPgR\nu&v*Pa23oJC\\ \\kAz'æ(2CMrI>SrW,v 9KgseYĤ#\rwbptHO*BI):	֖AJ\0:IG+	o	|T; gi9F\rL\r~;|S8t7lU{,sRz\r҇Z2vڰwk.Ԓ	)DS.N[|n㍙9ŏnj-uhM!m`4Te%\nM&GSPn8	6ڦaUq!ĸ*Qvq+mDJ4]KfLn=7Nǟ}r!\nssPO1.bAɊJӭ[p[7Q%ݛyoSiz {GYwCV^ɥw?I!vXHopsԺgnqSΔ>#^lq\$5ۖ!1(\$qJg/\\0eZOJ7({oy m*ȅ\$~	]DAS[{G=\"J_C9|jcM-{D&R&\no澨n*7p\0,P옸('Xa~XIa#Lb.AnN\$J2ry^4akV84DDknl됛	YP먞POjhE\"><%xo\$!\nsoP%ИPBeBe%=lNƤ)N!C.80O] M0\$N<UYX.6\rq1ZC#C'\\?D1\0o0.0z\\\"re7D8n@΄	ZkO0LCO^g`ZeeOb4%*1Ex76@|E\"3#H1 ,2d~\rVtj>0dN9\$U	P\0m\npd(%h2|hx,H,fB2\$(\0,ELa`Q'1/ĚC\r!,6QD&+G\"#e\$2(?\0\rЬBF5&`ƀf\"`nTR%r`&\r䳒R\$-A02\00Y/PVjȀC6FDFZef3>^[XD4.\nC(dv.<@\r L@D;1fx'PTp#NXP\n\\-&a\\?N(!e8-g.C.#&H\0B6@\$CK6`@ɖ!-FE";break;case"ca":$g="E9je3NCP\\33ADis9LF(d5MC	@e6Ɠrd`gIhpL9Q*K5L S,W-\r<e4&\"Pb2ar\n1eyg4&Q:h4\rC MXa+\\>RLK&v3épt0Y\$l1\"P d\$SL\$y)n+OoM|)NS,,}tD\n2\r\$4쒠9I4\nb*\r#)`N(ˍ(9\nH0K !KD	(+2 &?PH\"CP#\n7,-#zpEH4cJhŠ2an|4\rZ09#P&A(r1S!B1[CrG5K˴@ʡ9(CpEUsB2EY3L+%(1؃zR6\rx	㒍ZLibaVQ:( Ӥ[Y@ (hZL@)\"c\"1 ?OBY|L2S%1MRs`0C\rRM%5Q7\$6JUŉ\rk^B*P<\"Öj!w1L0'Bf6H SFҤ3(c<ь7Js31T8޼2OĂ<8¼Z\raL.7n@!b29g\$:\nz<92\nbͨ+9E[3D9|bp;<	2@&C(3:x˨D\n0H^]Ób:z7<\ra|>xa,\0ЦM5./2z&(B{ITT<yu%%cWP2oN%		@ \r( @\n\n)CP&s}iM%삗(|%\n`<eKZ=zL)A3/HɡQ&!\$I9[_mS( \$9@C#\$5#&՛\$lO\naP'@O4Wi1 IaP:nfNY	vYEב>P]׺)p9@9O\n4}\r9`ȹ<EdZ6@'\0 A\nr\0B`EiAECj/MqJ@NHa\r\"I[8Z\\@	_64BU!RwPQ5)ɣ<*SL1w Jtn2\nu2(dXUҠKDei+3uIL5\n\$TVSbM\\dD6R+T(CցөOwGQ\"Qyx^Dk	L!+V+ğ9犗V)P&+4b,\r&@aQS,YM\n:E,P;2n*!*F\\2{+HOf)ӴO	Jl\\*AHfMA#ESF*.ɪŨmft*v@SjAV@CU;L4VaaBW2TI	~uⵧpN&@\\p\nEhbpfˬĤc>ӈ(mŊl:BT`a'gaI5n	ÅwLnFQ(e-3lBa=;@HY\")`9 N3xnm(LMIbhL&;PřAsiD}a9T!&l\\I%A!1d<[͚{ҝedyF,cDg>*c\$KmTK5mC5sVSm\\Wn@1{FdTm6oO6ݖ#Gc⳧u	hg((V	\rQFN=]R>Ւ¯Qkm(]\0Ol-EL,ܸd(olK)OXu1hɓvB.)՛Ҕ65~{ge2:{ROepYI'?m:~BD6!{0*]Eb](|Q?PŽ#o}av߂<tߤp\r/O\0&f)>Mu.B+M3 %f~q(e?#ӳ\\݀d=ڌB;6OLĤLQBd?3p;A&#~YʷnnYB\$?xg'?ë+gAޝoȍ.\0kEBs)\nB883PDdm\0.&PbPm+%1I|5h*\\9Cc('(NfP ;gcD\n\n \n!y\np&0jPȉpxpMP?	#N1JRppd/랸ˢ\0+.!p(Б-eF{FlDEs?& K@вKxdŒpEE_[AklyQ\rH/yMQO\0EZd d\rVЗ䢌\n0xYbщsB:o\0\npƼ1^f~412gR\$Nffu d2ޫAbP=C?1Ѹ\$J&/q\$ZJ2h&Iy!C	e6 ,NÌ@\0m6E<єCNFvR7QLd0cPU\0pv=lg /0/F`X%g2P(^%bމH1ގN.R 0%\r\"F^PdT%?:zr?/CޫLbL  9km+'G*j\r>ꊩ8rc,\$pG45#]5\rPF`E5,_8P	\0@	t\n`";break;case"cs":$g="O8'c!~\nfaN2\rC2i6Qh90'Hib7ii6ȍA;͆Y@v2\r&yHsJGQ8%9e:L:e2Zt@\nFC1l7AP4Tت;j\nbdWeHa1M̬Ne^/J-{JplPDle2bcu:F\rbʻP77LDn[?j1FU5/r(?y\$ߝͦִJMxɊ(So\04u=\n 1c(*\n99*^Xa8 QF&0B#Z:0)02 1P4L\niRB874Ƣ=#l:)*406ǃ(P!	 P2C|Jְlj(\"H#z9Ƣ0K4i.69C{M㢖5X(\r\r%5}#If\rcպp5ā(CUe]\rV]Z.o`@1b07\rq 3LP@P2@;JԱs84d&&0m<ȃ`1ANPI∘mP=Xm4\$v471c{;_[77J7PNu!Ib=)ē8ѐGR 3HB۱ؒ6C\"d]{V-NTC\rSΣ30̡\r*V'j;\07\rPk@N辽=`@=mI[#lp6Nñ;.ϴ붕}Mko~@_76/\r~\"[fݸOC>s?:3HF:&5\0)B0\\k+C2R6S3޻v14Z4;8)Ps77wvqQN+O6=ᶂY4ͨ4&F\n{Do<@C0=A:Evx/-wFq)10^VOn}%:0A|1\"57탠xa͙2T\$ᑂ4	;}8fqV1zI	:OOz;LBC!E5qa}\0\"Ag\0P	@G+H@kc'|80B<&y'g#I;xUFtM^xZi}PJT*55BO1\\bDt\r-	v/׹a+]I?((\\\0£-/僧Ŋ(n&\rz~4ppi;c(ŧVq5II9V\rǣ8G\"7l7bHڃN	]+@0Cd:\$URjv\$H68iM\"M\$4ӑBrf}	:TZK\$UDTtVHE[R\$	id=E-;ǀVt1\$Q6\r'JsD4GQbVfU)9Y=:y1v2{hDtՒkJ-:JIhyD1A\\9NLFGT+ONQ.-	6\nd\rC.QCPJzGHRb}VY+c!ͥIdWVPFje`)-\0X_7!дjA\rL\$|My9SZq0G9aBqUŘ'DlgH%5)̯a=0CͩdZPQD!)C	^b!Map%a4ӳbzTJbkVY>kW3&YșY2*Z%5GfԚ;b_ǓC>YMVQ>7x('i	%:@;6Fu2RiX괚\\i2ĚrB+PӺ 6E=if{k<NgR\n	\$\nEQ;{*SmfKxXZIY,*\"124QL89ނ\",ZRT*c2:.MZi(ĥ\$É̃0;ҧ7@߇:PAbTksu|J!ЊN't:7yEZ)ׯ/aKzNQԏ*Ԛ/kf\$\r\0C!(R2b2\\Cb'Cb	!Vb}*+<;FK+I]3^蒜50~}Ŧ]w>eu~4T~9Nr5;1AO	 dnhAHZ<6H/~-zhC~inp-*ctooOҍ|jpCRK#/j@,0\rݣ|^f8{\0挂b?`ԖeTC@n<UjL#*!Z9	le;0G ЊȐ(Lʌ\n]Pp<c0E4Ym\0+xkV̦RLNȲO\0.\n@.OSM\$7b24qk@½:=jk,	b*̖\0SK@K挃ʭ&0/CJ*)o^ΒL>X:ĠE#{e9D\0=/I@(h F1a!d\r!qPf(&'\"7 89O7 10SNLdJIlS&do',W&y2XLg#c'CYn7D\$M2l`KE*Q+*iK\"@\"CSO21|1iHy-`r~KlLM.b5/G.ғrV	b2sV%y:\0#.f;Ep\n234MQPճH3Q3BՐJe\rV:\"[EMnJ^hoR2AN!	\rH}.h\nZW3X%#c:U4@/K;t%sY0RgxSW b*\"pWl`E\n/J\"	b8C8\0b\$ʣoP@1'*߫'ުB\$jJE袐DCPގ0n-ܼBԦKGnF(&:MG!THoDm#(NIT_P YS\$EAN\$n嚢BMH@W 'H	f/03r%HKOn(\" P\"<۴<@E'J\\f#F0- \"GJ{HԑSr<<u\r5 \n)Q\$1ZdV!Ʋ";break;case"da":$g="E9Qk5NCP\\33AADeA\"o0#cI\\\n&Mpci :IMJs:0#sBS\nNFM,8PFY80cAn8h(r4&	I7S	|lIFS%o7l51r(6n713/)@a:0\n]te8g:`	hFAwZv\n)03h\n!~kjv-3e,k\$SVG)O8\r;j螮#+2\"5C*\n-\0P<(<߭܉0\"ȢsBQx\rBc:C44+-J|	B\"hS0\\ښrlȬ4D0 34r\niӸ483I/ ؑ>6,0cF3@P<c\$\n\"`Z5\07B걄ƞL1B{e/#K%s0Y愲 P-0v>(-/H8R\rmphZPpsIӨBނ-(3R6*\r,<p:c9ë=\"-cXX3+[t_@<KB!bhJ\r})S[n9PI8<Տ,`\r>j%QCjn12\$J9V49\$S:[0\\@4'0z\r9Ax^;rC/+8\\SK81&cpr<)Qx!8D, -\0@3V}cc\nޭ\rЍQ:B82Ko\\szvCp2@(	[|)򀀅\n R ,)i.L坳!Ma\"Foۉ*%Ϥ'tE7oVHQMYs{y,{i4\$zC4!3E,1\rxpel<T Hx<[쁱U3E~VP'd-)T9Ix \rfH@˙8wMZՃKP( b2׉P?tSPFX2p̠\nQ؅(u\0U\n @)\0D0\"`GȱJ(s\0lEP PpV-p\"Uȍv-(bK)xF\r	38a|!t\rS\\K<#eP\rABu=#MZv&y/մc_.ǃ9(YB֊TN><pO?H\\DbRH)SJGp\0>JPrHzAhfYZsN'IvS|M%\r*<T%UJF-ՁBJj6lIA[K@g7PZMG)!@ֆ`fLs\"a-e\$7_ѪѠ1+BAa CJ}LI)@Q(j3ѽPKM@doY	N	\ncYmMlJB['n)Rr!-lܕ[s-Ϻ,\\b@nٻoqpU@o(O\no5{zO~^\"N*StR#L%+vJp%QA\n1Ib!*T!#N%Ǣ*mDbtYb~x1PEPl`b*4'Z8PGYr]˴ƈ\0sV\nj*AtKB%LI}2{)쀳,k9\$qL9Oe쫤btjE4.\$IWe 3~)E)al7BNd|e\n,Ωc&YB![w,fNm\0ó4g\$N\0\"LRU\\KF/HiY0'%ܷjz,6rfDvSZNhO}h\reRᕤZZ˵%?g(1D+J:|2sTy/pD;DGouhK1m_Err&8BY5O*V?X&YՕ5ï+^4Hۯvŭ[CG}G4c?\0د2)I2+iBl'oY-óx	z͇l5<4Uba:<%Tzf<@BWxסSߔ{5\rI@cC/Ʃ;;4\r:+{~f~6&b3~A.?/jEo/\0oOT3K c\r ,)%@O1b`\$.Kvj j\"W0HcN&v,e-0~M\rԽl֠ A``<@JvR3B؃L5*3Т#\nphTF%\$Sgl\rk(B	Hk˪\$#^&m/zP7@ZUPiG\"Q\n\"kNH\\9긦0R9p**\nE\"#z@B(-V/\rZ<p+L8\r`h(ՅW\01nфa(vb2*%[IKdN\n#%\\ Τ-DTbW%JH_\$\"%\$B#ĨD'@cc[q-؜q>\nر\0ʉBz@PoIP.mG2(0ʱb{gqj+/D!16#f\n\nxp,5B.\r@";break;case"de":$g="S4@s4S%pQ \n6LSpo'C)@f2\rs)0aii6Mddb\$RCI[0cI S:y7at\$tCf4(e*,t\n%Mbe6[@rdQfa&7n9ԇCіg/* )aRA`m+G;=DY:֎QK\nc\n|j']C\\</rQӯ@ݚSJ97%?,aa#\\1J*n.2:8P:\r	f:9#c2/K-)Sޡz-:`T`0H49Bp:C(6	V6h`Ð(#;tɃx΀S2L;1v:lTގΨx49 RqIH<q:9cCH%LXAD&(@+z4x3(Α۔:e(J*X@RQ(^(:\rzX5gZ!\0-8)br:r\r7LjjV2KSS.c3L5*r5-\\\$\nx<dS3lӉ\$	5`0U6P.ڴ(3b\\6#l`^9zV6\r@&MZ+bV\"nd@\n\rȸО ):z= f(67l2y^ݟRn][ݿ&b)\07%/#\0͒#LhJx?!=jf L\0w=z3U3c NPX%s[dz^L<Ǒ*wBDWàp`q\r9yhŐ@0:?5@޿Y!\r|A*#2Fj-n9/28S '+S\$D\0hS%XD\$\r\rj%lf^Z8 !))P):8ș]cR4PTAK)|9% `0gvT\0Pe_!ՀLDg䛷~OB8^g&MC7~\nA0a\\9wjl>4dGBdeh\ny/yuR!vj)FbfxS\n=J0o)MԼ塄 |qKaȣx牱4:W(K3@@nXNNAtJ\0oDeb6H9OY&a~D0Eb0*xNT(@)rA\"R:1a0{U]pL\$G5\$RbIa<8SyH%<d׈mr{LN?\rO).|3 wPRCO?نؙN-Φ&zPV0tUobKm|xucRDp	8!CTSkwnY{2X<Iv+Xf(w*PѲJTU#&a*Қs#Nhּ2T%z0c\nCd1b\$g\nA4s.69?hP 06fސޅèpe\$2S2R[RSN0[͙u@gAiL5%4&c[TA`{:gf槠l34D!q^a7)\n:]8<֬rІG:F4biWsԉ\nIej*Q)~Sُ	)/8U\${9KE^<=BVk[\nIB*P^#-uCe5[1T1_\0!/ՒD\rG^LDmk#%ejn1t7gWO\"fפ@(Igp+v=%jڷhVO^L?DX5s\0ART_	g%֝YmЩX^\0&V SU굇>c_5iҎR*Nܺʗ;0~V̂Oo?⻗g=?<&^\ngKzQKW>hd|<QhP6ADh6#<y{u3_E<\n`>{|8`Am&MH9\rGCo4iC	ַt~_t@@%Bb hdڝ4/#Bd\0BT@\0\\Iln¼CBl*1Q.K//'>+Q^P[\$d^]bp({o2p00pzLo	Г%\0##`	@\noh-lgďchNB0~&ob0P0ehV2\nIm\nF\nF\r:yc\n2 \re~(\"8.[ĳ	KB.SC\rL2\\eo+Opqoq`fL4(9ϑE\$e;5,0:QE;0D1\$A\rQq1rf	!`@`\n@{F	MLspȦb jʋY6IΑ;G6&T4vB\0P `h\"UZ0ߑ%g\$h\nZJ\$,c*.'\rNmu\r.#خƔBN%L1Ba80\n=;#)|B:I7#a%Mi%3z-~N	4I`%-UH=T\0:X\":b:{bNPP#]bH.N\nRbBSB:\rrB/?)pan-1&(\"; d*q3\nM1,lB#<<!nq2>R\08lJ+f32&.A+R?\06tJ˹#RĔD1I2%\r(_CvS,b>gI^!E=cJ:XhӴk\0iѲ\$d\$%X#HFd/b";break;case"el":$g="J=Z &r͜gY{=;	E30\ng%!F3,̙i`dLIs9e'A='\nH|xVeH56@TБ:hΧg;B=\\EPTD\rd.g2MF2AV2iq+Nd*S:d[hڲG%..YJ#!j62>h\nQQ34d%Y_\\Rk_U[\nOWx:X +\\g+[Jy\"Ebw1uXK;rhs3D6%`YJF((zlܦ&s/2/%A[7[JX	đKںm늕!iBdA\$*M\n@Pd0077lH桮W/Jj(\n>rϼbgfy/.J?PEWKrC)/J\"\0*bҪ;\n0:ط1\"TIFlhʪFt.KL\$@Jyn\$m/J4J%o<Ӥ(e|޽\$=*Q6^6K>{ŤoiֵlW3[iArLj^AjK⾜NLʼ++v\"\\\$&^ĥoNP>)#BB@l4L|g.J2:Nc*>2Xt%ٲ:iC{iK%66'ϽA\nvj8k'{aSBԤ\rmIc.Ңx)ƈK;8.mH/4jIY_\0nĘ)\"d|+@!63tw*ld+ AIyo^)\r1m <kvEk0_kw\$e6罚Nߌ`V9\\fnܰ^KԞRzEX\r9\$uHZA\\ +E'DɈ,\"Bp{qhMrYR\nRBD\"Ec>\$3:pf`.-Q`,3Fs!5,8})a,(PtMZ(YLUs`\nT1>)RKBS\nACC{vmŰIAD,OLO,)5Ò(Dc\\ʌ1\"\$#\0	Zmq74.,\$\"AdRI Z\rĒi{lK@es@yd\r7Pxr2`na7DaA:N@`a\rNZv>Ox>@(rcA.%̿IPs*^07RX\\;d~ѱ8Jg385pPI)6B\nʊVЧ|M\n!U,AųPBA'XkPP	@\nX)#+VZNy`ߕD0i--[NC\"j*0(]ٺ|*%h%)XVXoWhK+qgX%k.	,SGbsA\"	.Jy2Rm1\0\0<~cXޑ0Jp|GM9\n<)Hɫ(2oS&\$wpJ@otcJ\n*vϹ(@O3FRzOE3]%y2:h*WvpѹHL^m>+(4w˒(1DC\rՌHeDIbg,块Q˙xH,TC9\n3P\\YzJ'_%xғ\$SGi8iP\"%H-'Ѐv\$n񋳂N.aS)u\$J(Ѻe)5iɴk+Cf5HP}c~oR!<\\\0dEYUx^ʋQ*?ZA*(nLx6Cg9Ii+'\0Zr8JAJY:!\\d25WjM:DN}\rZc5)6WIF6Sr-D,hfHU Z|퍎Vn/|+*JfDUW&u]&^('ѦNm\$ӂy7\"_֫eEl\"5Q1%h,`[d-޸b [z#]R1n{_^{ht6T\n!@C\r-HPpox:\0>Z`d0Q,	\"*V24^HpV4ĢNP*8}\\Ym&;Vx/HL\"K︺O\$o(p-4ې\0ң\n^ g<2Č,GRc|'bQPiG'0/o\0g'0ipTP 4./**K2PDF\\81(ҵD\n\n.E^-\"H.XDM,=jĜKtbž|R\"d[@G#	6eNpp2L 5@p@jzazg~'Pm*^Fq\n8Ǿ[!22]B~}Ш*eXނV\"KJU(:h\$hn(7cQ,b7\$>;\"?-+'vj0?\n#p+gBCFu&Iqi>g)\$\\-.ɚon̼UkgjH&)f,D\$R6`0K\n)R\rfAۅ0mlΰTBb2\\z\rbn ހrUgS)P-* M s+lݭ|xq+QG|\${G)*.@\"+c r=-e70 1d̖FJ?ʁ7\$(\$h\0001\0h2g2Ρ3r:*s>'C+Bw/;hLbȻ1_/D*SxB78)\"-13H^^/Cg8bC8NvDNND*\\{2'~8,p&5'&ܸ҄օ>4%,JK7z(+r'C,s8ePr ZLa:-L*2zc*;\\cђї94HHr0r:z<If`!O\n9ITt&&'\0MLn0R00NB#MTKOzB(A)	H\rMPFgT5KC\nN#**WM*Mr5\rsN.>*U`/<ToMԨEX.P]9\rKK*YkuGWg81Yr*AKX\"@T~lR2)_0\$1Pʷn5yZtW_]^\"%^kVVԓ,:Tk V-]Z5.B'^\ra\r\"g]J_E]fMd3O-\rYR:T>d[v\0f\"zHKdN|D5!6:f^W^ysfqdSPQ{5kRV큜jΕ\rOE%LOuJ5]fssjojqmҭj\$Wic\nat,aj\$FnkrLdsF(8R<neX{]-)77;3o}tCkLV&q䦞*I2w4Ѓp/k@hh[xsA3w?b1V.PpO``\r`֐D(|f!i3LEiLXֳDwPɰX`@\nZI6C&q-ȋWn\nuQ/1ۯYCXJ@Ntj!NP5kXn11~ZM2\\E,f7ޏk_@R^.jVD}ԎSڦ_p!5ZC1PE@o>hh%HLф41몲2,\$SE墶qf4Bwю2𑐳ώXH(u\r?^Ԥ\nhU[6뎱'TP1e6T]j>M\"4ThmA%KBFM^NB!w(^՗Źe(\".bl\$ep@4R`]Hqj-1nPb\$rPHEBv-yNVUvNB\$K/?c1(r.\"*_#zkgB盕٣oHo/<oG(\"{eCӠqq8(L5Z(r";break;case"es":$g="E9jg:P\\33AADxs\r3IeMrsv7DYTaabE2H%Z0%9P\n[/Y2h5\rQn3U Qi3&ȝNt2h2&̆1'L(>\")DˌMQvT6>gSxˣȎu@N <fqϸprcq\n)}#u]ri&fvIࢩP :\"\nؿ2ô4J?jҫ&Bҍ#\n\n9H\"kP2P2ۂ4-!*O4@)9MapØ1/I204svxGjsRk'5&\rCRc\n{pM\r.tˮK,:c0,\nå\r*D0L#߶p:,pxJ24CQ,\rKF34IYns p9FLB9k;M@CT<I,HWs]Z6&\n=`0\\(P7ldF⢣\$Cm8pRa?TQ0|#Q44!/Z&C1aR(42HJF\$؊<\$l_&a3&EQs)\"Dd|̳i[\r0V)`*/]WP7c0c0\rJ9#8³!L6P905B)쁼p\\\n;?phҷ,+iP̷\rO&R9nKsx@a)}2P&\rix<?<7S	\0/	@cP*8x`C@:tF;b9p?e ^/i;P:{7\ra|ʃ^aDa*	|\$!ЌExIDvZgWZn0A3<I:gL_5!@\$\nٌ\$\0@!dh.2d 7z_dT0c(a)ad3\\+Z8ƹP/|Oehj-4F9%hH:\"!`@T90	!A!2QX#^9&A@'0\r|5c%4P@bAp	8'M XE1aHBq[#4g)!B\\	 0TĐKjA>_/D#32XAa!@>HZ!HͰRe6&Cxl̊PH' p,5d&s։qZ('^R4>m\n8\$W9&\$Řv`gkF-1?ӕCQ&%BQ;1z0beQЫ:#dBGXGڰ7%l\$;?lU䌐{)dŴ#d# @\\3y 7@a>)	4Y\\p}h3Őbj*W\"tHz8/uxgpbT{VȾ4\\m`8ߖ{Vp/ *\rsj1\nΛ;>H'rFat╕5mĢ%]j˃t\$5t}E&VG[Q<)\"JX[3Ģ(BT 1jI9\r\$3R}%A5\"\"hHS򲩙\rPb:\"\$[<>kN(diAp	4\\nq-x2LyBvn=1h-EKlRU8Ἅ])n?exS1m&y\$6Pwe3#\0`a{CUg\"dӶKq),@wp'=bPtPddeHس5\n(\$\$Ev[plC@*gd\0q`m:RۮΗکMrAH-n۞ߩ}_OLeG!VIU7tmgOn\\r(ThUBDi\$pm\r!UMѐU)竌¥E%O&s<[Iv)3׳ݿm<g	nl7&0swu٣\$8BlapNő..2mA~)u\$Ww9	{[[Qz8+\"rAGO矂Ǯ9NF\n	*<!E^\$/9&88d'&]\nӼ3[x\$=s7wR+{D?~swq/|}^\$@Uz}guz,%C~Ų]DEH1\"TG~]D\rʿEInK0p=NaZ%/p9Џe\\p\0xGŲm`Ĕ\$\0qOJlli[0/n	pRa\r&LH}	N0N0f?#KXJĶ˸p>0@ڈ3\r˾>0kJhVQ7d\$c0\0C	(CȢ̶\rֶ/.Kx^\r<F#vT`:O/D\$P#Rc/,|Bbő~jL`Gh0~9Ղ,ؠldL삏~n\0\npC0b&LtЌn#D,.#\"6ʍ<\nNfˢ--D8Y\$8/+ck̑O\$͏` dEhB~b:rL\"&|\"#cf032!*:@_JDj/5&Ϭyzۨn/\\rn82H8G\08/Գ>T(LO7jBZ`Z-eZ # a^DZOq|+0ctnIvG7mfƐK>*̧\$Kr*6nx3(3\r\nPHYD\\-%j׀@	t\n`";break;case"et":$g="K0a 5MC)~\nfaF0M\ry9&!\n2IIنcfp(a53#tΧS%9pNS\$X\nFC1l7AGH\n7&xT\n*LP| j\n)NfS9f\\U}:Rɼ 4NғqUj;F| :/IIR7aýatpQl7׌9Q.SwL(LGye:^#&X_v Rө~2,X2Cj(L3|4P:Ԡ88#(޷Z-\0000!-\nx5Bz:HB87/d(\\ )07x3q|-ܓ,H'H%h7BS;h<F1	8*~¨Z,j߲I \"7P@T9#H5*@HKS#2HA'R|ʓRt2CE%Ӭ[2C`\nMDE\\\r#X֣D nè64˒\nlc\0(h9Pg\"CtB\n0@U@7m~&&+!T;36^RP&'HD2QJx\"\$X䒁B*sf@ɉds+c}X{*H3zJ\\R\r'`1q/B90富#:2!O<(P9-\nb#m%qK6cv4\rUvrz¨ͦ4Z{J(|ČnR99@2D\0xߍ3:x%v9H l=@W+E\"d\ra},7^A Ii\"H GO_1.7xf!F6U	E*< }!0	Q\"Vρ#E@PРTjR5?hc{&ZpZʊb!\na=0t\"\n)? (\$@e% t2ix yC̗ܠALd9G0q;HMBO\naPX^:F9WXD.0D/SN9J@p\rEC)I5.v\0S]3'#%\0F\n<bY\0	z2%PIOxY\"Rż'@BD!P\" E	v#QA[\$A,P\"X-#`KfcنExHvUeBVU˭O0r\nYA2/8?'\$&^)1klhm8y3ʔH\nKӐIP:\"S\"ҝ*X*m1h&qjO!\0K-꺑`p83\\_\r!R4+ !So6NjCZ{ CLjB,<ߐNSA\\kfj}DMk	zZ࢕AE\09#xJ * 8E\nHwtԃ\\stԋ4T*ˑE\n'@)gU:: Aa GFiZlJ83++\"nuh[\0aL}9Ci/\rIb,Hu/a.K U5UwCa*OUTA=XאY;@bN|Rw\"0JHI%9qa&b%I,-YrfS\"0,6QᓢzrO\"QdMbHs֭\0fMźD21?Y/Į9Ztu%I)radɤ AA:dU^7bk3`6ʰ.\0rP-)lJbC)yW+(rܵ[׹s[FKRN~;|;Y9Ed2ZS^2('m[6nr	B}C\\ň֕_JǘTVja(=45ƹN׹4Nqsi%su9N)}8*TWGk+1W9}p&Kdb-fH5>ά69]۷&X3XQjzfmbLv@.8|r:ǌI׃.O\\18D9V\\*>4(B??^Yǯv4q8NIF#;K5[\0S8<1G|!O|DOL|ϱ}wG8>9L`b侀:.< 0@^<7O Bd\$Ъ֏M>N-dP@v\r~xVmVʶb>, F\rhbr]8Ԏ\$-ym~	P&b,H+A,J	CLB\\FH+iD/J0/QWIL/<:p\r-~J7nqJ=ĳ\n0`-j@̄P	X@Ȼda`p Z1.슇z6w&VMl	m\r.LdD&γbTbމ0OPd\rV\rbfSF!>\"c\nZ\rƀÚ&-\"JZv&˥KzxcLL\"!@(V\rN/#r=%\$\"!&>9VJLH^2NI1ƠR4e\r`N>\$\rH*JiA\nB6mm\"*\r`桲*p\n@34%\"UN-æQ+*!\nrLbC\rd\$MB92eB`l#r\0N3I\"d~	h*Hb#mO%,eE*)dMSSykY4k1BSh2o`07V\$^DD-	\0t	@\n`";break;case"fa":$g="B6P텛aTF6(J.0SeSěaQ\n\$6Ma+X!(At^.2[\"S-\\J)Cfh!(i2o	D6\nsRXĨ\0Sm`ۘk6Ѷmkvᶹ6	C!ZQdJɊX+<NCiWQMb\"*5o#dv\\%ZA#g+>mc[Pvrs\rZUsLv4K\"[GXU+)6\r*>n?a &IYdcC1[fU6	PH*|jڮ\$+TɬZU9P&!%E2z'esΪ 0r41\"Ȉ=	P?:oR@ʒ\nҤld,\\bɄ#i4,ZMCR<1\"Kp;*p.\n1t7+d#Q'o,2=TTcW0)B]t ,DB:1{S\n\nB{0J)h\"P=TuC!>[l%vM&!|SB\0(hS]\$%\\;0l0:e7FoIv[)R)j(9\"<̫6ܩ\r-PF'CIp\0P:\rdJ 7K5S50e(S`2DF(UA&Qni\$B%mFH/lϵD϶;߹=uI\0T]1¢)!bx2ZZ\ntLܲðOb\\WfY,~ۼ[-pj1>ONBPn?H^juYˮVĭK\$2yi3:@!\0(f4@:;\\C m<!98/vh<G`Ho\r:(ta|1X\"@<&7ԓXkAR\0TySlLAfA+q*/D*Բ	m*ᾒ'MA0;4nV:],*vaHn((N`A?P\n\n)xՙG!ZI6Sp`m,Fc/)\n#EL\rqD>kw/q\0r4Cxu4áv\n:\0!29o\r &`hv\01,٘8d(ڌJ-~n5NBJ;1#ԒJzB)e8Wzף>pd&ʞNpF\n,&\rCExCSa\$)rؓI>Jy\$bѹ\rP*ZS E	T\rԌ&&T,+	psa!4\niɗ\"+Wg~[%-=j뭊MωEψhɣ'X1+vU:gڕ\$ ջPzlI:NZ\rsvv|&>Q%RƳQ:I^JHh%!:dUDmh\nf5L=ռ/3RJk5(.AGgVNǴ\rUKiS+nݚbg\")ru'kua*0	X٬2v*KQS-GW靾iaC-,Tc~'9'U\"Zn\$\n@@ pP4A	!:\0d9FӠD̘*جa'V\n0\$Xsg66s	'W(C0rBR'h8bO5Λ<gLtB\\\"/+KCۣWqtaN+_P~8M&9iJZ=_ziH TY\\ۍ*9e+G04vi	Iȉ\\TܬͬSL'QCi67\0P3~jheTc\\:再%Eb^u;uWmRRO@hrshq^S_]9i\n/@Xn(S1'*ZcrP)FUmgZVVtYܱ~[̘o}s6ru|&ȻOĖK#Sø()3~g%%wJotNeMPro~Miߛ\$>w>[\"_aQ~~TmQ@?BTe)XPD%gźi`+8Y8ę\nh91ՋK.^|;qL/}t>08/߰pN'?%TaDꧮ>MetI?ac~\r|~9MPk_n\$?ۦDMEF*ƶtD~W:pdZF(:k	pb00n%-.pn\r00\rpPpkhoк.^Bh1\rOvddx>\\^Mn*uG!\n1}N&Bef.E\0If\nx^1bOαd\\\"M'*kIBdOXkKT)lਐͪ5.>\rV`\r.Kk`6\nZ.)/P2&jOoq6*`BL@gK1G@@7!% d̔rB_ΒxM}xRbZCjLV*\\,ֲBV}V׈\$øMbRF*MDʄMZn\r*Ì\"8z2/IG,**4_,#~or-r	F#Xdn5d,r*ɅZî|^hlcl两>d\\c0܆@!Rwp1Mh\r=:&RIm,8RzN24KW6Rs	/3d2sPlf>ce73";break;case"fi":$g="O6Nxa9L#P\\33`d7Άi&H\$:GNal4ep(u:&蔲`t:DHb4oABbv?Kd3\rFqt<\rL5 *Xk:+dndj0IZAa\r';e KjINw}G\r,k2h@Ʃ(våap1I݈*mMqzaMC^mvnyhaRkz\n(HX\\Z`\n%:oI؂-M[cji82Cٽ[ɧ@84P:C4P߄>	4Ct6!'mJt7.P P21`|6%-%k(%r`AAI&#Jl0[n\"79O,\$%x8#\rcL\ncN	C'=O`@pHܶ\rc̔쭴BR׶,@:#^;HKO%5=#NZ\r#89;W82L3?8P4\n9*J5&*\$I\n \rd(5S)\"`Z[H Qoi-;mHRj\"3C1, AbPϴ6r*0TddQ/>-/.PH襌42\"MA\0:̡#HӄjIئ\rLRo\rӌ根rt#K`Y:[Q鬻DKvjE&\r;5:lXͯfΤC.rO9.nC@ʙ)B0[e0NbPCer릻t9@ެ4J5:8Lz\"&}8K2y3lԤ):4V0z\r\n\09Ax^\0.\$t8/.(<\$`/F'&k-A/ 0Zxd\$mb֊M;(^z`>g͠ffH8 p%j^ч?fLiICG\0\0GEPPSI+Yt􂔍2\nΑ:+C\$2j˹@d,R]Ɋ1j=\"O\0yv-,u&B%l@kՊEyL[\0 !:<m9'dTսZNI\0P	L*!!t2Yc\\br4!\$sh\r4rrHS@de#\"D2~\"DZػT)#@RfO@_\$bKI5\nXBA 1[Ƃp \n@\"h &Z.!_-Tq/+IBZay٩S<#LS[5Gll҃R3,RX\"g\0%C%\0mټ3K%a1%^\n<hus(&s4Ipr\0h\\;t2ӘJ\na\nsN-jCɱW+}7?4GF]\0l@\nE͡\0]W*Hv̙vvqMB ,tD^+1t&`n/A6jjz'\"3Cs'hTܒ\0\n5XʃeɢP 0?'NeJV|02P\$阚m%)@2!Q)Fc^\rW\\o,b`iy6/8<_q/ƪcB\rVsN\"&FZTIceL#c18r;1\nu.I\"MiI)88as5E#\$hN2Sʕ`@qt}.I?JK2Ms-\r3tmSjA<1\\ij-HC2KV321QS{v?+RlhKU R\r8fnc;ˎPӏ'V:)\"B|\$>1! <{!q)LrM=/!NP\n\n([w*n*;:\$wul6.^ܺrv9S\\Ḥ>֎lˎ8(@%)[Ub}9dU# &\\OUm*d>sDI<wXo9qztNf%gx\$HHB%ӕ2TbJo4l AL|D={\\Ͻ!ؔ11D OT\"NYvQ8v~˫|MJ]3t\rl}}SMBZL&ht\"i*0l.VrNBXl 묌/\$NbxR`Up`eJ\"OUtFLpLN4EZ\"\\2ϐ2l.&{,fO%j1Ϯ;`\"i\\Bd(Д)	DONiK)		i\r0ڮO/\0DchȲ5\n}*CN譠M\0tnJMl7lP<-2s%2wBlKQJJvt)ʄDD11`<rƆD~s'QzHq堆G`cng\n'yͩ:,z\n\\N0ȨL5\"% Q&tr8c\nad58?vDC?2/cX5ɞ6c,T\0du#\$a22E1gؙz\\xkr/qHfiHB-Cl1\"x?&RN4M (ᲁ&iū&d@׏ڥtrɐR\r\"&!+FO|l18ic'\$lJ8cR&\"D^cn`/cr\n[2aک{v[.zJϮ!G-.u)\np%DeL<-\rxD\$FKb>";break;case"fr":$g="E1iu9fSi7\n\0%(m8g3IeIcIiDi6Lİ22@sY2:JeS\ntLM&Ӄ PsLeCf4(iƓ<B\n LgStgMCL7j?7Y3:NxINa;OB',f&BuLK^\rfΈ9g!uzc7'z\\/;{xkG',shyf3a}B6\r#+c`N%\nJ< L*⼢@*#((7\0P7*zP݄DʁB0es\nKB82##q&'	\n#eCt\nhcSQhF,RtMt+\n#s&t|1_\r?j쵈b»C+\0)2O3: ҉\":71(O@IFcR6ɽ.2xƁHK`XV\$]º\"3gC\0͕#=\nVl|9S΋L\$)}a18C#&1iciI	#|2j>yI&)ɣ(:eV)\"c!xW+J#iAtu8-\0U_T\0;a4=3_&Cm^2\r0~Ts&#b{٭3ֻe@>#*舣ƼǈzTK8NN>`F@=3FW84%z§B%<%7K0rT=4+אW.\0ܲJyö\0 Ap*,|lǰ/%w s_6շ?[t)OHXN7At*\r^<b#=,D܃sjd3%k<43'sBDc=< B]wԥ>zo%z:𞆃*\"\r80txw@0GNIpgz4vAx\"VAɭH22\r`5v@|CjWp	2hfS2{M	fRR\$j9\\Iaa,jY0кD\0u\ryM\0PU+09INJ}P@sf]g0ϣS*!,\$2@Sy)2p0\n\\^<J4ӚW\n\rɐvb0BB&\"1wLs80ֵ\nHP	L*ZBU'\n1NVOWQt׬\"axsǓC	@K3o-z\rC2K+dWB0TLIY-%vbrbJ0rLQ L)0ӠjA<'\0 A\nЈB`Eh4zv([rspEAD|/Bxpt+uki!?(9 Ezy14D\0S!XS:=d5Qay(j6g(=b	m<3xvJWv=	SYh3ԬThIث!gl^vUH@\nYA[@rl&&BK=BL9?JsT\0&>A*40j\0J	*EpS\rND=\$`bdr>ɂ\nS\$z>DǷJ=4Hꉅ2\$<2\0i9	\"Q22dBW&B[E7yzf7cx)MC\$pfQPrQԲ/I.eц\"Ca0Mf[=	AC	\0d*6CxQuL(ߕ <@aV2&zOlԆ8ana2PqiOnnf4Htff\"*4NiQDnUg`6udiơz7Si'UXwK#]j&5)lc׫:Iv'hhBר\np܈AȺr!c [JiX\nȆWWj-D)lA9'DGI'Wdg~GBB[/lt`:1Ғ&Uhoʔ7'|yHf?iIH\"y wQpTdgU	DaKLeۅY5_v0\0+djTu*|k@b2մTJIXnØ?QTWٸ#;3͖u=n#}VنmuOKڏD'u-dV3riz>m)(i3оC>M3鞄ce\$Ƴ=V0{82MWޒ`'i9oUm!/|TlXAP\"ʞ,].0pl8vI\r&7x*7B|0(6@-o3!0DrHBTۋ\$hSZcDXp4\$,X@Vn[|oX;\rfklχe,ϚOH\0x/!<glp2q,'.=*(n<: Qɖ:\$.H\"L`bi\r\"@Z*ɑ54D8|Bz|x	>E;J+%E}HP2DF.JǑqPqQqq'\r2V1Q\roENU \"%l#,dǄ|Q'\$%Lg\$^*]vǲ &QW\$lzĦ{&\\D LQE˅pE̻&&*M2r\0?OdX@%|[yB\$g3f,!+A.N.'P;#xaB /.\\aO1X&?c/,@jn\r&J5p)CoO+>!-ְ53.b.c3rZ\rxO2OH,3\\SBt3PqQQ[1),~\0E;SO5\"`bQ4Xƶ](i}>ƶ> ot [:3^#r2,CMb.AsVB4\0OBTC3\0tECS';gNG#\\%k!4_#HRHO3HA*\n+c&KOP(m`vE#\0\rK=IFN,`̫k+&BN4\0T0~WtMFK1-	\\H6>E@s";break;case"gl":$g="E9jg:P\\33AADy@Tl2\r&a9\r1h2aBQ<A'6XkYx̒lc\nNFId1\0BM	h,@\nFC1l7AF#\n74u&e7B\rƃb7fS%6P\n\$ף]EFS'M\"cr5z;djQ0·[(p% \n#	ˇ)A`Y'7T8#DqNJ̓B;PQ\nrǓ;T(^e:3ҲCIYJ欥r*44oꆖ{Z[.\rR8\nNB߈c\n߈NQBʡB7ģa`P4̔5**DC\n:,p>\nRs3jP@1;@c*@1q\nQ869߉{\rKtQ4Z\\7&7\nA2ҁ!-AQ4L;(#?3B͌N!>4sk<dY\nnS@R_L\\\$ݰH+v(1t0|PӀ0L\\L\"4щH/sUKr8,!t)760H5P|N\$NʈKxSJKLrN=5Y=7*3((L#[tQ#ٍjXS`¡\$*2*7_#x\"kN@Ci&ǮS>C%{eLm*\r^!b\r\07rl	^iX̼n7^7\n#ް#YuT/`vzč>C363k0F,kN#_̇(͌D49Ax^;teAr3*IP(t|A|P,\nm^A*qa1bkAMt*?Ѫ`ae赀\r`@\0;UY0	A\0P	@f XxTЁ'dxF0y(B%!VXA{yȚw\\rAy+ȑA1BP{,SP/㒕	V&,`\rI&Xj˂A2?R~%:J~C\n<)FNZVUd9tM*BΑx@\"6A;Bi=\n gZ1G4WA	YHN s#Hwi&.M&K0C_RHx\r᝴&^lQ	6TJ&!@B`IA)D\0U\n @BB	6A<)*)ED0\"E*v:T\nA1ixp+NRIXhfNIY 6buڹ1L6U q(/EүI]XrǰvÛ<-wH\n;\0LNɝVA[g2ak!O%#Rmh\0H:AXCb,U	eʊw\r!Q\r.\r#1b}}2-T+BBKUo]C25ZHѳ0l|Ƈ,\0PVIԕ67F\\g*\\Vk4ejv\"فFG6QKa=D&)_=	Jr\njx)S3a|f}='E6.+ըT\n0\$6^1(tЂPًE s\$g:\0*UA2-YdLA3>Z6J2c̦0Aa͙6]Cfg2PM;K(hg2]t\0.hs%ώH'1=K@g!:aY[(^2c&\n+9B?4n̪N䠆FAZ'PduY_YBRP'!BL@e0R*^`^\r`f1&DɤM]W}/uu޼nwJӞc25ܫ1.Ml<Iu]Sђ\$y).p߀gUy\"\$֤KgƦm|rh(CipK2:`m_DK\"\\d]zɓN;0X\$zMW^ÿ)\$ouP8\ns]t8zSǿA<b6gB-w\\7_{^矦@DIץ2\"ő[D(\"MҸ9Jqle5D6\$Jk>,*ѷ@Wv7|W&p!_wi/VQ%\$On GfĽn. wn/F\$.Sƺ^Nd:jb\\Dh7ֹ00\r-Vp!Ph(pk0&7`&ޣqplj% V+\n#OО*FB:a3 ˲&0̰ORn*0ܿCqPg#&Qn1z6/1\rB(L4WO!&7%(01:ÀbʅP-ȼ':upqbD\"h	&\0ŏF+*GC	ͬt\0(b4,CZta1m\$nem^=O\$\rVg.h`1*JD:A\rd)fch7r,\0\np#TP\r(2kr.\"2B\$&NnO%hGcJn.dΊ:q޿hT\$0Fn3>('xEr:҂`싋&K2\n\\:(thQ+ZN?Ȍ@AC+Ge+E*r|)r-CI2EI%xDt,JN਎\$/\0z\r#L+qT;j6O*\"d1ڼn2Kl1+4M+\n%E+\"6\r+YP3n/4~ND,:#~\"etI";break;case"hu":$g="B4e7P\\33\r5	d8NF0Q8mC|e6kiL  0CT\\\n Č'LMBl4fjMRr2X)\no9D:OF\\@\nFC1l7AL5 \nLLtn1eJ7)F)\n!aOL5xLsTV\r*DAq2QǙdu'c-L 8'cI'Χ!!4Pd&nMJ6Ap<W>do6N\n)pW7c\r[6+*JUn\\t(;1(6?O'Z`AJcJ923:)h6P5OaizTVh\"\"@\r##:1eX #df=7P2Kd7Ċ+q[95t>6D0	IC\rJ\rPʬBP\"=A\0B9;cbJ5Lk'*i /n/GRaCRB0\0J2 ɠu*S38:B[fT<:X4ăZp3@G84;\09I7.l[꼥c[7F]5Y2mJ<)b6Հ:ö0\0&66Twd2Nt)J.S()\"%S4c4Y^5뒁Bd>8:}|\$x<g&/A\rU\$09j8 դ\$IK5Z72&6A\\c1xC#~l7abB9)0T2RdLu\nb#&7cfZ6#9&#u>c}\n<\nA[XÈ05\"ʶt:It5v;ߣ; ˢ\r*@ФD49Ax^;vơC]gzYpтDpÐg)//Ur<و@x>AdHH@фqE(&rPmx/PkE@܂D\n\\앣X	By4c^]#HD&]ApgTg.@@P(>&`PSPs#Q5RLn&	EBvOO+Fu1ŠR|.ND.GY90F:MI&DjkTjZ\0L)JȒ\0hK8l1'(p0(t2&!@'0!s<[-#\n,vnHi9*̈r7idHS_dښhLB0TKR֊Rq25%5\$\nAx0AaRDr%B\"yOSXWF{*PT`8+z(f+M ()2<b tNqa'>(&SIa*yڎ3-2X%1M*Ik\$Z58hM\rL#:AX3,+GAR[D88(,ao1-Y<u\n|ZAWLP*)+'2*d-qUک#\$u+F(o\0(\$G%}FU\"wrN!.s\\	4@*-GeaP,4o,\nK:KĤA7y+{Wr'&]EF<4<*ThvT\n!A'E L/Sw=\r+Fs`3V THrU\n5d/h7t[nX!*ూ=%MM.A*\"LRJ4L<d吙@a\$fטve&<3;2Y; MX o_N\\50ϙHxFBȔQ:r1Pu+Ocm!6z4C@\\2#?YQC1j6v~\"ędG&69ޗF\"\$>[ޟ(}*{F%s8S`)(JaB?rǴ7Uj3Y{R}ni,]mK'x'Ig\$\$l2J(LӔaPOa4F+t%>rUy`9g\$2Zj@ANܹ_\"+Y)im^z:.3M\$:)\\?r1xZxS7ujsu4pRߕ|w=xcZpWpr8h3rMdP\$|rx	%y'37fo7O%L.ٷtuhw+w=m/pT}:X1@AgA0˧DјE*<]}WO!hkpD抔1>2#m!=T&WVP5^*\0OtKN;'+\$'. QOx+犬m,pDiBi;,p>k/}H#j;{iF	b\r Ce1\"N2|)3+mPO+PP/W.g0/\rRPWN_Td`\r0j9D9b^®eiк\nqp#}	IPf7FNϷfS`:1P`dn)U@piнPlkiUgpq^dqfVdokjJKDL\r8KHQzBn?`3k`\rtcVU ̮`ʛM/mC2	ՆgHbVlEF2!>0^Rݒ26<᠆P iZdti̦@7\"\$\"\nAn)Gq \np3&X~?g')rOB<\$D\$@k E%bDb<i&MaB`0K~:8)ƜQ(e*\"R&7\0`CQfj2	g\"|Sam\"\n|LQm.bC8 ktb3hz숍5Db',3V\rV8l Tsk0G\\8+%}	h5B\re_ p	{f&^Z+`j6<| (\0``g\nY9 #?y5e 4A+3BQ7Z\"4!6+\"=tA?6>5!8+ jqDl,V-af`\0t\r";break;case"id":$g="A7\"Ʉi7ᙘ@s\r0#Xp0)u&r5NbQs0yIaE&\"Rn`FK61NdQ*\"pim:d3\rFqk7Qi9&ȉɍ)\n)\r'	%%y@h0q@p&)_QN*DpLYfiFNuG#[~@pX,'\rĶG*041#\"E1SYάnѥr٥@uI.TwP8#;:R(0޶HBN	LJ<(ގBCH\"#298or\$P(@0~BT4Ț+ Tv\06(3cJIBdEĢm{6JT2(*d\0θB93! R2C̄j('T=B4+@#H#B\nb	h4\0:CJ˲\$JKhRH9j!e0LXR`̳ix	-zhoْ0Wm&\nv8I#@6B@S&,3p2hfHp\$1:3XXX!B4p:@5b#dCp칢ap@%+xۆ(̷+p䦤8b֥ H|XȒ?)d~&H9t22gA4O0z\r8a^\\d8\\z;zⵅR93æ/i7Cx!䍌75dHԅX\"+3j9,zb(#Z3/oN*Hl9wpO8(	n'j\n8Rh`Fo7m6\$̨Hkc:t'5*YӤ	V\nģCɍ'Iʑp@M1O:428d a7L\0Ddd\0£(R	S䠔462B0i#\0U4PHL\$4@0TzD4EJpe䋘	 jqQO	*\0BEQ@,A808\\PG\"60\rH eUbv\$~C*`\$l(`DTQ ;P#eg'Z_fQ'FB^ڒ8f42WLЭ/]\n%/@RT\$50\ny=\"w	]	O!!,7ǄD')Kl!UaeX2KVTg%ԩnezMdP\0WĎVq- 1z;+ׅ=AںBNKN\r0-4V+F'q:@BHQRe|4Q0^ý@(r4SuJ\0/m+pK|Ǚ!Dj\0Ci42@T11t	Ze8nHf̝w\"TZ\\MU!NDrjN'ޅuȸprגm@#Adw54yXZwU\$)}N<gZJ7bf{垾D ;/GWfBM.e;H:[9p/䌒9t#EPqR:FN91*I<Y15%0ӅI\0\$e+A) NpS\$R\$ě᤟3rW\$Ƨ\"D)aKNvYg2u,lJ_-,J0\r3L	f]ٻ\nalbHR	HgK4mbb%'EQK@FnS=!yW\r:~`竵uy+gК(4}q'A>S WI\$k&]JwqG&Jͩ5+ɱUX I6KYI(h;_Js5>π蝇lջ|\"Tvs9RN31{>7iAEH\\^g*T:bD)vTuIS̳ܳ6@r7gwu9I\$bdy:,i	^(1m9'Nf:%}w\nx;Zx(?fէjX^{fW:+zxc6| &~@PWA韑b^l	\\x\nA)Ć'h#E1aK.#lz4\$\\#TiO	C\r!X7h8t1\"<K,6qϊ\$F*܅S	D7;cV(|P7(=B*7B>9j(F NE\0\rN-&]\"Hmb-EBpjRL.@.&*\0H0Dxf~\$|j.*R%&DLȌ\" b\\X#ilMM \r jz}i	È.c\n p9%H-MNJ`DJ	E4\$k2lͣ#bgd##&JgCAR A|1= 2";break;case"it":$g="S4Χ#x%(a9@L&)ol2\rp\"u91qp(ab㙦I!6NsYf7Xj\0BcH 2NgC,Z0cAn8S|\\o&N&(܂ZM7\r1Ib2Ms:\$Ɠ9ZY7D	C#\"'j	 !4NzSfʠ 1+k33	\rJR[i\n\"&V3Nw0)ln4Nt]Rژj	iPpƣލf6ʪ-(B#LCf8@N) 2 P\"\0^2Óbt9@cu	0*ݯ	zԒr7Gp7=<\r3%h'\n/K`*rMb/r;#K8Cʨ!\$Џ@ 82L&!KαÈ	KRHc3R@N\r\$PԦ#܇CȌ\nbEH10L+ҮQLBpL!ͻw{j.q(3l\n\$й:9^\0ʘZtZИs/:ADc2 0I	hBތH˖c3!8c@9c\raK7h@!b\$_0ؘ\"61*3.mdIޖIn#\$0Ct\"CjS~l'J<2i!`4Q0z\r8a^]@-8^ʚxDLŋ7\ra}x	|fмÞ#3#WQZ&\$.>̒?#,0B[L޽r%2vB\"#\n@4wӅ\n0RހPIjT+4@@уI>8pDI\nR2;a稤dIw\$o'pjMZSG@ds0R95M@ORᤘ\0£I\nP\$bm*\rbpi6<򒃌2Jh;ip@Ba@)4`1^+:CA&ߞ\0QM'@BD!P\" E	J:HdQ\$T7D>ȗ*Z\$pQ&\"PۘT-m^ՔThiUg𦼓+5!XmMx\rB4ZX2n\"<FmuLsvk*nLl\$b!5:c	FN:>M߃=K#BnH(.`@|GdVԚ\0Uћ˕oN6/Tq5xr0-Θn)ԓ%[Il*)3qj#\\VzXi3ȩFU\ni%Ŭ5p<K1('PZ	f\nFDȀe*\n7d9p\$X T!\$VDLo0r 9\$&bv\0YSw-(IzRVx'TAoF0u˘+Yk-1J=bvhN0%K|F\r)R4Z]Ҍj.FBa]CNnI+`Xݺ^14PELRsܾHU:S𖠢8qÒ)A\\2,onϸ~\n-%2F96NvB%9&㓬u,퓤ko|d\n5AJ;e.G#`OsUԘ,_dLih=&jbJ*._	^qeD\rܳ\$8gMaA쀞c'cT\"HiWT\nsڝcRY	\$zY׭&ng?m_`&\r++[SrW4ZAvۊK:\\[e1jmrTX27ڭoQTUvi4[qekjK/6*cnFԷoM8Y9P̸Cnrі= Ok%҆Kdb1&ArUzio}I)7_ª'*5Q%jU-Vs4t+sqI#Kն8H6f QE>hWM^Xٝ5r\n7odMS:(E3^\nǥ順H%\"xW9qj˥<@wЖC//ȇ Y43K[}-a?ڣ_t370VK\\UIo}SzvWkRZScM\$\$FnEON,fom\noBm	0-p,jp/ff..B0*^%#dڭNI~1j*lpnZ= 9hn *1FNĊonFO#ܚBOT\nZ\rrSκ&d~jKF8_\rPFlR_J\$Z\"0iLM0V*b0h.%\\Hbd:m#%\"N잉P(0B1,ǘMJ<!H#4,bBeq{bX\$1\\ރ1?kGr~('b@5c(Bg~7fjKɊj}n@(E|Z)^UQ<C:BBB`{b\"JѠN\"@,1\0-\n0\"ˈί\n\nqT^\rf	I`QhWxCN#qD\0ЩU\$ʟ,@	\0t	@\n`";break;case"ja":$g="W'\nc/ɘ2-޼Oᙘ@SN4UƂPԑ\\}%QGqB\r[^G0e<	&0S8r&#APKY}t Q\$I+ܪÕ8B0<h5\rSR9P:aKI T\n\n>Ygn4\nT:Shi1zRxL&g`ɼ 4NQ 8'cIg2Myd05CAtt0S~9s=(4>rt/׮TRE:S*Lҡ\0U'(T#d	HEqE')xZJA1 1@#9򬣰D	sIU*\$ʨS/l _')<E`.Rs<rJ8H*AU*dB8W*ԆE>U#R8#8D*<r_aETIB#d+lrjHγA3>%ʨEYpEu\"9=Qd~Y@=&\$'16Z/%ucYI@B]DJt%E?GI,Q0ԄsZNiv]!4B\\w\$mJB'*'I*[J P:cv\01#s(fWL]Fs7U6AAXe%c_~JZZbAKxKnh;KALŲY8Vͷu>hYer:M#L#X70eZI`b׍(p:cr9@6\r;9ό#8KoRsUb#N.\\G)\rƄq\rru\nP)]H(Ay]=H+G%֨:y>X`M!#aØw\roPKjPf4@:;\\C#\r9&xe\r<'DC|;L|9dC\r:^A#Lo\"a\rf4Ca\r3\r> {\$DCwOPbBHt!CA,\0JA=1zCAQ!ؗވ%2A\$LafwAa.r|(\n|P\nDiU0Ux&#BD*+QDB,Q@I.2k0sQ|⛧C91r8C@d7sxS\nZTPI&^n\$!tI(h=\\ZVA0h4>i ntD7i)@6|#@r\r1B	hQAR)mQ\n)דP*P[\0D0\"RT\"\ndXؓ֖`(f,r3`'he鹗{sG4\\\$C)\nKGANjj\"#FhDr.e\0||H	)Ƶ5/V*P>O}b\"j.!jA#RV^\"5>/Q*ď1Yy[kSmx40m2!h鱵5.k?\0I+I^	R1	i O:Xk|XV}=G>5س,R0%:C&Ƚǂ& Yrh)	FU;hW@BHrQ\r\n`hm%+و&xAޚu@,2f&5݂\ra5Z23BZ\"BL1!)123RfW,ui\0[Dv	NP&E*KD E7;0sMZhQMM,iuyA\\2*8&(۲n`Nj-<\0^Edr+WΫyk~@@r+V@ rvhw;Ax.VշG]|sXAQ=ݬ HQZ]#!eEAAN]sk\0#qvRiݭeK\rZi7<G mL\$5Rj_x|#;Ĳ\rϦ;=]w.!Yɝ*	y1bQ/*Dp[ͷ^p.k6QM1>߷Vloon}kzs-C:sox2t/i}j0~oXrx9sia*5q~_i-nhJXO|<S\0V\0lא/խ0\"a*&\">iHŜb+A 00.HmybR Κŉ4BΣ/rLLo@D#:GF\"d0d0jI0=K@*dƍ//%XP/\r0.ċw&nr.jAC(^c V[fv:/R/LL+2[]P#YR]֙14}\0_%LG!c\rkqXP//b?љ\"8s\0GdG~H0\\.eGm\$f1qq#D˯gː\r\"lp=LR!y,#./Ĝ]Bx*N%=%@`+%bk.a0x(AdĒ֢X|!xbDȖFTa*FAҰ+q٦Z\0pj\0\r \r`@*~08g8>ʒ`ꁊt\nZ\0@@0C9jf`R\"1nNܸ&b@0S	AD9x2lSl2#&\nN*\nz'1<@9*|\r&59R <+pBd\r3J7NabeB8\"\0 \n@R5s\0ی,.Ӑ\nЍ-sNaӎd,~a+C\$3B\\8-*\0@\n\n`8\0\\TJ\r;F(bVmYĀ@SE\nX-?CJ6P:T=l|#b5>-FgEEThae.c*JIlIoO\0uGt#\$";break;case"ko":$g="EdHڕL@؊ZhR?	E30شDc:!#t+BuӐd<LJN\$HiBvrZ2X\\,S\n%ɖ\n؞VA*zc*D0cAn8ȡR`MiXZ:	J>]ñN,	v%qUY7D	 7i6LS:h4NP +[Gbu,ݔ#qO){M%K#d`̫z	[*KXvEJLd *\n`J<A@p*Ā?DY8v\"9#@N%ypC0Ti0JAWBGYXʓăC\0Luʓdaڧ 	,RxuEJ\\NȤi`\$&ɤTEA\\ve\"gGYM'\$!e,M3Z!\$E*N1u@@x&u%+K'\\4MR:v%YYaz0[%vRbbRBHe)!@vs\"Tˠ2dLU	@꒧Y@V/D?]DKbKɈ\nsè67crc7<\"Ii@\\IG'aLNĖtUYGM\\WKvE!S[Hh]2m+BEqȤZA51Q)dYDYUTYiFдz7ec3lC`94H@0Mx3c255,;\n{d6@:Ø1m3`\07 7×0ta-6aKLH&b)1\rk%\\(UnaFp?ﴦJ<ʐgedg~CoTC~J(\"h9gc9Y(8\r;߇WDt^@.!s2(+\r!&t|I\r܆*/ \\qz70^C\"s#Ad<R^S\$H9!\$(h\r/4@\$H P<G`A@X!,i*{-I!BS:&D\nQxG\rC PǴR	\$t< Vy!\não[q `h 01A\0crJnP	L*VTfJV/M)yFҞTdԏ,P\nR#t,_@E7TÃs0@HgM\0n\ryA*EL+} Pio.e`r5@p:Ŵf+w/\0\0U\n @8 &Z\\J}OXUbJb`3-\0ghG2`v!Yz%XjK%2R)3d2in(\\\n9%#ukזe&RAQ ٭h5\"L- V*;TU\\ö*F+H^NiwƪbiA9pU\na܆3NV^٢jJɪ+)N+\$eL*cg#7ĕ-'՚WcR\nEa_gr)y)8+E)[@u\0bTBJJ(dQX\r2@@ P<4Mog8Q0Ts@C&\0,A2C6!K%LwŅY9TDrlJ:-/^.s\ra4(vd)=^ZJ(\0PL4V[tHH52IY-%ątYZݙ	DwOt\0+P>L'bfiY#\"T2̋#WH0Cyx1vk]\"L3*eL(Y<,	Ik\",/xZc,g3z63Fs0iۍyVݲ\\+BbywuJ4:szox0SH,E_&w_0ǪG\r;E^?W[{DIqSM;UY\\ ,&\rxLZ#_]7k<FDr/w٦\\YvY-v#n:x˻h=p.(&b*k?.mU:~fb+w_w`U~厦#iK~6I<l/a4zZ۰\"|AG2,\n` xJ/g<_n0c>ewϫ7l>'+O#<r..bД!<3BZ{0fEb 6=/ì>ofŅK\0':0TXp`M?\\k`a2',2ND\0:NPO26!A	.OpвNo	K,k0NI\"<L:.\n\\OLQ\rIG\$vͼ	F\rN!;0mP\$f,	`lQ\$A%.d1-//Ƙ!DDOm\0ESm\rP~@|X@!hotB^h\n帾lK8C\ni>={-2TAf#\ntĶLc-mi\r \r`@J8 }	\nZ\0@ C(,3h@i!21ޫmk&1F@ RKahW!fH20fl\$n&Ab,\0fe	259m]D\"A`O\rmaËLD\\!Q%̻D0,qh`aLl5]!\rl-2ĒC΢Ʊ4.I*NjEHNDSI.@a8]f%ÈƊL~\0Ơ@ \r)#BHmeeajR3 )4jc]9pn:\r3?/@64\nFDʔ[㤩B<HA`O<J@t#";break;case"lt":$g="T4FH%(e8NǓY@W̦á@f\rQ4k9MaŌ!^-	Nd)!BaS9lt:F 0cAn8Ui0#InP!D@l2Kg\$)L=&:\nb+ulF0jo:\r#(8Yƛ/:E@t4MHI'S9P춛hb&Nq|JPQOn3}WY,#H(,1XI3&7tٻ,AuPdtܺi枧z8jJ\nд#RӍ()h\"< :/~6 *D@5Λ<+8!87ȥ[98ʕ(,lR)ă@bzk)1	#\nh5((\r?S4%KP:<c[2Kh)KN<ъUO򽯭@; E8k.HۂZ^*(\0MIS :	UT8SH1z 5]^HHʮ\"69) #Jr5%HHP&%UDOh8I*9hmr6\r[Zʎc79nٶUЄH1CJ9;`S=ZixLS^D\nt-d;\"O0~[\$LK6רh6VFyTScR;1hǓIns̨3b2S97X<߃u1l3DncOBJ6aJHiW%);⸨p@!^z@>3XxAZH%P|?#;ʍJ#uv̥N}OOEwNf5\$i,%?J\0;u(<\rD49Ax^;paB@p^\\`8x.m4Fx:? kWk@\\C<  @MBZsМS~Sr)΄Ȋ\$ !vuG8a\"&b	?ڈJ>]rQ\n (%\0\09\"Y#e6ŲsxXDW	Bu%0XjA!8D&wQI6zo#ceIѯ!a1e.*C|9#@`g7核\0HH{6(#R.Q}#3QcD0C|\$Ԛipf,G\\NH+?aULYf\"#pʙB]tݠ4#(4\ri%^W3  Cˀy::Y׻7	#R\$!t3JFڙpa	Dgt\\<H2(ԁ-8CYʓp	pHC>:fQ#y,\$pblǒ3RRtfJFaZ5|%h%}-F@C[+#X5j_\$o!A\$%B(KPK,\"ˠ &647n.Īy:1ޜ^PIY3(32)CCh88\\s[jkAj\0Tjf/![3>\rr\$F,\\Q@K#\n']hgUjQ֡g4xeIHrDH͙b)K+XRe\r2M|`q;혇`,A@\0Aa Jg+084{I\\:/k\"B\\R9UDՁHa(E`b\"f\$Y(e+@NYe_)Lvs8i٧-fӱ3sS2cv^(~漍cT76,E2L:SG컦-wyHipצPf/J9Jq1;8KjNO#[fC]?2Ƃ@8\$ȚQ\$qSsY.!^eqkۄʏ	,F󱅗{\nC%-s<ΓoNcJ~sw\$m8>8%2k-xo+i_[!|p%4 '.LZ\"<߰kJ(Y^PSMM(N*Ht;\$uٗļ0Itvj;OewWWҙ\r.`vi_+B{jb\$!5;Xrnf4y2u6йQFOê#j0t2}Gp3q\r̞~{_~6[_f]Fl۩CA4B#pGZ!αC`yF}Vq()psej߳lRZo<oOB Pni|PkSLN0(ܯ%'#On8 &9CT	\")o`;ݥPF#x#,\$y<-0bcf:OA8쐨6o?PB-WE<&kW\rޏL\ndI\$3o\nkpR.ȓIR1\"Fe\\\$b̐xuOڰB3ě\rxeYQP~r@D	lVJ%<dŇfFAB18gҠ\"0\"e'+\rj(TE\n/V30Og\01бjQԱ (Vم`qDFL!1,!f% +d\rVmāܨ)BgZ&n'nT\\q \npdrI\" S2-5'j`rr`#GBkJi0'2NY+8,b/g8QÌNH'z96u,dv%ĪFd+[ؚ	2J,%̃J~k|y+#4'2H*.z,\"M3O{4`5%&E\\J¸ %4ï<YS>dh̦im28\r\$b\$,97@`@7G1\"lMf KMdf\"\n3S4*;f/7\$ξ8>2W<b?L?DL 0\"KB= ";break;case"nl":$g="W2N)~\nfaO7Ms)j5FSn2X!o0p(a<MSle2tI&#y+Nb)̅5!Qq;9`1ƃQp9 &pQi3M`(ɤf˔Y;M`@߰\n,ঃ	Xn7s4'S,:*R	5't)<_uFĜQO;znwf8A0x\"T_o#Ӌ}O7<!j*%\n2J c2@̓!2C24eZ2I3Ȉx/+:00p@,	,' NK2jPBڌ#H<#(桮\$\$B0b1TRI(7%;ãR(\r6r7*rr1psƬH9B;&j)=&9ҠPҕa*R1)XS\$ULH%@P:b̈k0@\"̗iC2nT^5\n3`P[D6`1&{Z9K\r:A\0ܞHK,鷳<'S#u7Ns<P28\n6e{}SJ+aP2\n \$\"(V%,߸s\"Ms PX;0R13Xʚ7Ё7(\$:cH9èi#kPH3Ɗ*%#jv@:2/\0)B2|Sc2읣m8+-ChH2hN+ʊY @,*hlo\$⿹kn4A0zL#tx߅ɎĽAr3韒CJM\$XDct^0.\rzSvJfj)d:\r,>BH/ dAmp\0l\$)0\"vA\0(*ymIrrNtD\r\"Fxtn\nMBI,EI6EMQ\0f) Gd~f5\n<)@Z*,&b_?IL`\\PCPuaU!΢^&dk	y1R\$%Ȇ\r'p#H VʋXo\$ĸ!52C\n@\".\0U\n @+\0D0\"`AKiL(@l1\"f)\"PZ#Rn\$eFlq?M<6b.\\r<g1`b)8j8A3\$dyPAH\n\n1iْf\rfE@!G@t6<`IӳkR!Yvii.`S\r\$*o\$%i廰S=bl,0UC>0r`4L)%(dBL9^9̔p3p։;*Pe7,+8ҽQ\"g/F-C+(tJ!)DY}%t( aW*F!~c\$r6jy\"ve%&TȅnH\",eXe\\bPbOpth~\\2?Hi\rpUC8Wdeei6B8ZLݣs͍1#\$ù+(-Ȃ`Lf)`Ȝ8l\$Lc\rD\0001b6Rb೚jɑ\$PCqjmdK6H`,VTADLĩ!`r~eG	*= w!e-ߺ2I5g\n`5ΡeL}uAa\$v_	vJՌMwDkc0g8qT̫JJ@_A'6J[3%ZzYʹd0́/&;qw,u24L7e-vcxۃ7-ZYJIL%FʞZ+6ҺWjڶX@z~ ͲPl9\"G\0Pn:&^0N<8 B?R`C94I&ɚ\";Mi#UԆqj5G:Xu]l9\$6o	f_\0 |Ocڟ띻e9;yĕ2\\nLA/Bhö~M\r'Bm,/W۫\\F<%hvWyj뗟ҝ|yQfQ?KTuvZ2vﶈmR=7\"g(T[XL?70?`\\\0X.ٰgy߄hqc	E>+>:\r/8bO 1&b9PWX4o*cP*\$̼\0iTU5IX,pY+~TdF%0p\rNe\rV\rb<\$%?Ѓ?&B1C.L%vZ\"FtIb\npEm&#u8a^FJ +(Ƽ\rV0#B#BƦ*N	\r ̷F.(I\"̪1O\$##̂\0Ez0	6XDf#xH.FK.JA`f\r,8(\"*~0x8C%	[;F.\\\\¼P\0.B3<\$c\"tgaQ\"w(,D_E媬m6If2,&b<!BR\n2eJi'E*PZö\r!龜B.LT	\n%bn(bKk,q`D\$N\"ɀPIA^h^. \$H\r.C|%D\\	\0@	t\n`";break;case"no":$g="E9Qk5NCP\\33AADeA\"atl\\u6xA%kl9!B)̅)#I̦Zi¨q,@\nFC1l7AGCyo9Lq\n\$?6B%#)\n̳hZr&K(6nWmj4`qe>䶁\rKM7'*\\^w6^MҒa>mv>t4	O[߽0ȽGy`N-1B9{mi&@vlHS\$c/߾C80r`6 ²zd48a*-ʠ9b9oą-\n:9B0P#+r緫dn(!L.7:CcO ތX(,&\"-X405H~-p1hh)\0c)ȪZ5\rR0@3Acr?iۼ4C:6*\0@6KS!\nc[7! P#BC\$2<˕\0:-zc\$\"`Z5P7BT)MÂ.#0 J\n5C+\"	,w+t7k	#hN*[}%WMm]%qʀ\r|c`Z4'cp, 5jc;{eCxISz*9c5pIX¶0\$P\rXaJR*ؿ.A\0)B6(7A\0Z0MKo#f\nQ<؏(CdYcbv8:Z 7<;ѵȨ@88ct:%)Z9tNj\0x0B|3ЛtT1z\"z	\"4СxDKЋ;TA8/6z|#>ޣm[@V׃v#k;C\r]R+Ys栰|:\0kBPQAIM ,UY#LiA¸2-D9FJy/&&IOâ5)>Kp'IgDC H@޺\nZs,O렙)'e\r.e HR#.(\$4Acx(p]XjtG0s/<Lx \rfHnH!t)ZIcn\r.p#@R*_hE79сK)9@ܤ\nGhG@P*Y| E	b0ޓ2G}D4HA2;\$ [D1\\ [Q/	ɐ|:@I]e5CMi威%`ĐIJ4>zO1g`>(27Q7o]M?(\nh.2h&OU1\r S#澥<LE2wY-8^BHiI!PђSa*O5@ڊ]dUUS0KiKW092Ni-YI,/\\7\"K&*F\0RIx>8RI|f(FPRYe~<Na=H@BH<&CE;b,G ԑR)'#&xPKzx\0ܣs\0%B3:A<%b9LaȄuUػ@]bwJ\rޢx.T!˶uђWX_{0A\rOe*.))8?/pܘ<I(`eRIO^'	I_I--4PsW:D2*vLk%dL(tM7;C`i\0QssAgI#[{7Ǭ@bIՠf0|A#DRKroʄ&(hyg	T.c^D#ȏ!˭ʰ<JS:h@\\cH\n	ǽФS(qxAg9!F`kdRG	ĀaS(T-Jvn:Eg>øLPނh&^iI7徯RI4\\RXmW;ynZ+kekh9\nV,5iCAidgom>Pal^OZ;A s8ʑ>4VJOݯr7 wF4nK	F<)o.:U|(Vms|%+g]e\"sfǁGi/4eǀv*D_XB˟ԪW}(!0%9m\"\rng\0Rw`[⪩v@wQ}&ZY>C(fI+ p`BBb(?X =BoEV@3%6Ŧ;i)E9k)bU+Fh&(b=Z@&H-6 61-| B``<шH8mN5bgC(֘\0pbU\0ރSL\r)T7N\rEºrnL~JdςL'#8Ύ8j1J@Citq::DE2#0j\\* ׃=OZv0Dqm\n\":E\rC|Σbԭu)&c\"<ʠ	DL\\R+\n8c	-J0VL%QR-\"ܪL̥bwO殠-쮠\\\"\$9EfS`\$qi\0b}&Y)F<ʦNdƬϠ\0gWz`MP\"";break;case"pl":$g="C=D)eb)e7BQp 9s\r&ybob\$Gs(M0gin0!Sa`b!29)V%9	Y 4I0cAn8X1b2i<\n!GjC\r6\"'CD78k@r2юFF6ՎZB.j4 Ui'\nv7v;=SF7&A<؉vwCNAg\r(s:D\\<#(r7\\xy)V>2A\no|!*#0j3< P:#=?8¾7\0=(ȨȠzh\r*\0hz(	˄\nLLXC\n\np\"h9;Ɍ3#8#z'(,Sr1\r704nhºkX9T(\rXH)##jKA#DMtd2ȉ3:!-C&NKSlO3xè5p?\rs(T bcx02(/Hå#(:tH7(خ#:%/t:Pk茡\0(P:\07lBCx;`9m)Eɯ3>s.7Ks\"]؞*dFOmy2z:TH@̢80hä5,P6u\"ZM⅛Kn;0ġe+\rƂH@72D&\\4͓D%ih1g*1d!b0o6|%S:9ap®2zɿ||59q-g,\$dPX@ssGCwC7oFBl'!2K\rh@!b`^iHp:终ѣ^6~҈5(>Dq5&>	kqVKpЗ  W/\"Va{𠆃 \"\r:\0x/ .Y\0(x 5@^hr:BJ@z0nC}\n/\\3R!,(1SOWq@?D(\0Zu5!\0z15\nPp9!P#_R(R^LIvZS[>`)&;ٻ@\r'r7<K%Dѐ0ྊ\rgBVOI'\"}/-N\nlɄՑr0Hhk#汄0Z\0~%̓4CQ%lGT&Jt\r!W\0E\0f\r)EHsn0l0lHK	D\n\\|e*9'@Xok`%iڡE9HKK\rPP[tR,\0\0B !J(n\rYkVRح0cHa9'\0@QݭAwuBhUn%D8\n	_wBJAJ4oЄ:/Xx,=تw^t#*JN<Rڪf35 T\0\$f`z>%JМcr=REJ\0Y,FRSc*\r<9V7E|0d+HPAPq䗆9PT3_\$	kFB{eT=Y	FyE\n\$Vn\"H<Lz\$	Ty:XRi@h2#t\n5ĳ&DP,^eبeL]ohV]L0',7Ob6J2t(uDԆel!1R!DhN=0`C	\08TCØ }Lt3C*)3}ZV0zr\09:\"1GH%̝6z =##~v}ltv2nM&~zZ+lCjyٹ}[U5@ZΩSʹcEΟ?m_uɨZuB-N94=OeYr8NI{_\$nČ%){e⦼9\$OMd|up2U'˙>,IAA!#,䆺[GfH0k:YAO;wϩ#٤UP9)q:nY6B[ {|&Ro gt\"\raٺX>ѺAawT=[W6:F9G[?p\"PaHjǬ\"[nXӛQax:učP8H+ՐKAO}PMJeBР[_{n>Oibk;Є>Gg/\\vЪʚI5\\I#ΉO{is4*pGܘP/Gm Ps0.\00N#PT08ـJ.@I8/銒p]	0L70kz/xŬ^*:LܮB('>K? j^c-gi\"%A%D`MZ\$I\"-拄K>@ y8pljRs	9\"PB/= R\n\0o\0Q\"oPl}q2D]lk\0VO )D#qQf1kT&PQ:QT'\"OVeg!=8ŮOC1r}Qdg撫H@\$wүLAq?oN/V93>Do2 5JJ &5#OϔP\$C#\$=vN7j&RXMYQ<w\0鱏2ljr]lǒ\$}Җ6u)C2p*!F+|\0EIDJd6*қr--*h&\$o:Ƴ\$#yмHlR63C6JMT%\$	_02\r352(Qc.06*\nTJ<\00036\r18:K6irדwspPR2ld\rV\rbb(BN iP9\nj11ԤU\$\$Ф\"!U\np&͔*iG|׳2pr=Ƒ>\nr2-=@d٦s# #__̂35`JXJ9:SE>)N/<1\$%5F0Ը礸r:N/\0L^&/kH. Jv%zt~(>0(hwԑHK4KnZNKKCR!B%\"XNB`- 4zs\$\$\n`I	.ԡt6t>\rFJ-Ċ8e^Q\$N<]Zc(TęN5`(DX#\ngztT6	DmCFImPS&37iCR 6gRNwQMQED\$rh-ĶB^]\nd\rfEDXMb%";break;case"pt":$g="T2Dr:OF(J.0Q97js9էc)@e7&2f4SI.&	6'I2dfsXl@%9jTl 7E&Z!8h5\rQz4Fi7MZԞ	&))8&̆X\n\$py1~4נ\"^&aV#'ٞ2Hd0vfβK\$Syx`\\[\rOZ?2wYn6M[<7ES<tL@:p+K\$aÁJd##R3I4͐2pҤ6CJڹZ8ȱt6\"7.L P0iX!/\n\nN㌯Bc2\"Kha\0DE+?(}o,E+91jLnR^1+̡EJ8%:1,[%JkFCTEx,h\0< HKRJ(),0ꬺJ( b\n	MË6X8@6\rr'PCc:9t%\rJi#(HQ.[\r3157Fϊz&2u\r@ kC;8T2@IBvK!::1+0M4	#j<1(N6@{\nRY=9CQpMJJx3=cp )\n0z<1\0:b#8¼Vk@aL,7i@@!b*֤ܕ9Iz6	b-eV	Zpa()2{nt,ߋtu9K&* C:3:xƼˠEΔs^7Ð#a}\rD/ O+'%B:I'7L\$ J;܃\rMð@h@H`P	@b`h(*\0&bÙCĐ6Xa]F\\g\$	8\n'EPJET3b?JC|c%O\$\0RPH<DTO\$#:J&	^>6LqY:G׌P	L* \$bP\03\0܆ܪAԅ|O	7g07\"YMF;/3Cz8ሻ/~CJs\0#Hh^!6A r'ӒDwQr@PO	*\0BE3\"Pg^EXnQ\na\$Xy˒#˂TRErV4@[Ci#1O(1fQ\n2S(8YTxS7Gm5!44t@I[@nX6Yg(7)SSK))I&X]\nxC2ar\nKMp¥\r7ց̼2@\$hoH.(Yo\r(2ta,ZLth	) jt=\0fV=\\Aѹ^@P|(ЭtWh^/۩cHjqʛ*UT9+rZ\r 5k;1(VrX5ſIr.FI2S]P 0IuAMR<PqE\\G^ѫ兿ĖRƀQՄQ=fH\0\0=!Xp0\\+)q\0s%BЮb&zN	ŎlYx3L\"a'͓	f*u2[p7r(!1,gq.SsBhrn	D#'.&T\n>Kqp&gŁK)1̣q9Zs*}>EBKՄҋI轪PIOay8486A8ƅYvv?e-bW'7ְditAF!:JЖ}/S\rsY^;61isnfEN٨캕PZv͛4_jbNتlRq)h\"34Xm/0e<G[O,NK|clLqiŸ,<q)Q|0҃.YqdJ{yTݹ]\rjYz*>|☵ªd͞5F6h`7T7֋5?pNa]і(kr`OL&=3iv({:6/A}Ȥd[OWy'>P7tɯ_P5?wNW`%˕oIA:v#.ⳍz1E|[;/u?,/ϪŊTZVp;bb:dl\0+'/L\n0?iӄXE%oJVE?\0-@pJ rj-FWpho>\"nFph/	9B캐Oh\0A\npBr *K>dL\n'\0\r\0%d	\r8\r㞶<˶8b6f[o\$Zfch0B#o3nbnF2Nc	<`=eAM8C:6ݪ\\\$d ZY\$s0 Za#댐PrHpǈB)8C'ڈOp p1\n\")\$Lj\rkb/GP%\"(FFF(	#!I(r7E\0^Tq0Vl6NS%7 p@6R66@FȠA5dqFvF#%0͝&CLL\r9L%#R\$F3#%V0Ttei*Z:2I@3i\$CJXd\02@/\$L1.7̆1# C̦K,J6d\0\$.W.O.C0X%ev~i? \0FjhCq-\0o\$h";break;case"pt-br":$g="V7jm̧(1?	E30\n'0f\rR 8g6e6㱤rG%oihXj2LSIp6NLv>%9\$\\n 7FZ)\r9h5\rQz4Fi7M&)A9\"*RQ\$sNXHfF[\"MQ'Sfs!\r4g฽䧂fLo7TY|%7RA\\yiuLb0՝4\$ˊ͒rF(s/6:\0Ꞅ\rp ̹Zh@5(l@JB(*@7Cꡯ2]\rZD7C!0LPBB8=l&3R.)ɨ<l)ij;9Ci[]1;1xƬؘ7tF9'rVKƼ)zjD<M0: 4%\"7C(]Pt,l'\rҽKJ24CQ;:%<T,YAӌt60I\r	tCF9NI*\n5UbRM,1ѻ*&2uhA1L[?c)DQN0s\$Ha)oa>xl\"#p=l4#jB2(.᱃dl1aʋUDmSXcx3\r\0,t7)2ƅ\$c0سh 0A@x֕)\"X*H\\Lk۱bEC!Lz6rǙQôel[\0y9`PQI9@ԇÇьD49Ax^;tsar3_o%cN3PtXDekʎ^0sq@=og:&1/Fe63p4!TSK\r cI\"@\$-&`̅Ls\$!r|iCq\0!T\$(CB(5ˑONIpb?Dr`PPVJ`hf?+WL|k\0ӄc\n<)Db=|ItjvZ HA:bp8Jva\0007!Υ)A)|oG \"L?@.^,	ϡJeN1>}oO	*\0BEY\"PgII	`c\na'z!'D=z4(`~p&uC()SOĞ3B(02\$H.%p@S/O7y\"kUT\\S%ʦyKr/I*xQxVr%Q\n-?t #(>,aj&(\n=gB CC\rX6rcZv	(53:<IAXϮ2watGcF&Z_=,p)ҡx:k:%چ\n3EխR\\`\n>NkFqb)':(\"3mR\"&*@@ XEÃ4xu|9rb&Q(Sҩ4P`iIR@*F4<cޙAp	Mwl-X];q4Xl\" Ç	DUdB5M[c\$\nLs,cqȁcp2Iu*ddQ\r܋uI^/YKJl?ba@p%bЉ_*\0C˙TMy/<D!v2xYOdiiJJ/		4a2F5|̲\$,S!kIO8)SuZM±D9ϘݐJ3Alu	{TOq.JaEc@QG[n,U rG<BAy*rRVKʝݥTqi-j\rqԄm\$tVC=\0(T7iFgo鳿\"H7byG!gr]v*<_pkPS\n|X4<9(a\rY~LlA5h!\nWxV컅b>O[b5\rf&>[_oltk;k㮫}5@w͒V{cq9nmry6&Ї`XQm0%7YAKhsŸr%=FAȜn\n6UC`V	=鵜azO~|\rMz	0Q]^y?RPsqGƼ%\$X\\FLP8`#nJN0//Np=O`J \$(\0PV%0Z/Jb4mv*lJh e%6	PFPJpD@	P\nPw	.pVQbPm\rbKXo/Юڰ⌎b0\n\nP[`K*)DrOuR1H02FFs\n~0^3eL0\\\$o xdm@XT8[0m2L*CB,`§tF~\rV`XB,\r4i?*:' @\n1ZT^2C׍LÑr'fbFR3ixۋ@\$1\"^f*mi\r:'m\$1cOMlatQ\"/DG#\0;vnNlY* 7 E`]+rۦu)TJCA1\r炿`*k*͠nl+E+sF,* r9Ͼ@@Zk,O㊎'&NZf8n#G#.v|3*.e@Ez@e.*`#(bN3k)(ebPltJX@#,.3.IRBT[3~;\$lڄh-zF/";break;case"ro":$g="S:VBl 9LSBQp	@p:\$\"cfLL#>eL1p(/iiLI@-	Nde9%	@nh|X\nFC1l7AFsyo9B&\rن7F԰82`uZ:LFSazE2`xHx(n9̹gIf;=,foNƜ :nN,h2YYN;΁ Af2r'-Kk{3>1`L@[Q2Bz2˨ބ:/a62āJ'&::80Ґ/!¸+Mc\"1Ic)	\r)[c1P\$T80K&\nH!6(6Zp 0tBpQ\n0B1T7p8&j(2LcΈ2TH+)Nh̥C D<o-5N\r4ɍ\rb\r͓:\0GMq]QLΈpH\0%BKRL;V5p)CFBeJXblȌPV0ΐ&ꙏ6ȘI`lS;onE9{KS4tX5Jb#*bXc* 7-e#hm(W0=[(c]=eFM:46#6Cd6(]0ؽP9c26PX[p@m~,P9))B37t@A H/)p3/\n*{;4m>E2\nС(4Boc\0:㳮`3,\rj:h¬h9r+̇`D49Ax^;r'!.^9Oܻ>gʥxaD%Îyr.L(@䡕!+!TC'^s'i<j	,#xuHc aǸ'P/M7(FÂr\r锜+bQ/\$֤rKB8MyA<2\r	I\"\"ҮUZ4!\\syU%\nrAr\ntQ7\$PO\naR3|O#\nrbQH9 A*Q	I/E%@.!i)(y`i'hl9J	o)9p+hTݒM-)\"9D98ArP(4wt	62V=-\0\"%7e#v.8n])q\0e-\0_XKj	bCg:O2Λ\npIt DY1e0YSQzZKP9ZaЕT`Tf28XVƔXUX2+RleN\nr(rXTuKH%I\0BS6|pB,ZOb\r>IQI@ QmXLSe\\ReT!Q%-vL7>aYlTIXQ! dt#I/&wy(	BG]Ӯ=\0pzQ)h0o*z\0LRpwE\\2\\A۱'YD \0NLd4vSѝGA*@C`f5ND av&MluD&Ax 2+5|c+,(Xj_dh%ڠdreG\$g%d-S0 0zfd(:OU=0]S;:\"piӫ)fJӺX\$TK]UOVs+TXg=uN|WP4h	u:QjհAW&H)\$Kz72𬗋Ha 2Di(;HVɛZMZl9ZY۟%KonL)%uF그Ҭߕb7f	{}`骨AL*Ֆnur˫-F(SHK]fW4(zܒu=:ԄYwKh7E[TX4[pn-Qs5ޱ~S=Bk*UP}Jvldi-7Z_uB5\"8oi-EwAPTݡsgLeLˑrT|<C75-2Q#u|By5VО,ٟwqv{SG@:5H=#[1D;V#<^\rpn.F00cΞQ{%VE 3kzTςTJXn.ܐ&*]oiT(Š]Bm2TX଴\rT\$BlBZe4eRK*R:@aDC\\~Q:cDRbfHS\0pj0A%3%\$HKD=\r\03(c\$O/%AV0 Awp0* Q%E!7q+\rNP=DqH!)YG7v4.?Mnyddi1ݪ./+1zSb1!Qn'fD+EF}SF(QqQMu\rpF	j@P3P<B@.?G%gXX\$JC\"&o\nk`q\"&p>:21'bqD\rVR\rmX7\neThv\rd:g\"b2n\0\npBN4rHW'(h\$J>i,؆B:#B\$fQ\"0.(.D`^<#4Z5(>%6&b8&B8\"A]zN%/&bd)C?W)ۣNE3UˀUu1\nq%-bQq\r#+7jdw8*#.f6#*)h6&rK3JƏ6L5u&Fas2IVZ%F,]o==f/k;#%,M`\$lyC\0&@Ju(@To/N Gtd&33q.\$,v0\"1j=	@4Nz(/7`@Qq]0Y:ܤg6I  @	t\n`";break;case"ru":$g="I4Qb\rh-Z(KA{ᙘ@s4\$hX4mEFyAg\nQBKW2)RA@apz\0]NKWRiAy-]!&	pCE#yl\n@N'R)@%9*I.Z3{AZ(Tq\0(`1ƃQp9Xi\$fi'B2,lƄ~C>4PT!HkhRHb4i6FFc{Y3-jrɼ 4NQ 8'cIg2O9d0<CA:#ܹ)#dà),znLӊ֮m&0N.A%\no7d\rC8h*hZ]9kcFh0:2FH1s Sѯ*inhɉ9!L.Hh\r,	dĦ3H(JXD4ƁN()|FйtҊ#\n1Pqs,JS\n\rHhRԂ-rOB,;\$-hʾؐ:+h<%PQdRR\$Z&QێCVɋ-M0i7DqE19L&K<eաK]x!(ԧIe/\\KHe\"b)d2\\#\$]t}\\#7 7}\nGcUUZ\\Dg9IkI6}J,-tXZ:c\0ȸ0@&%Ic)ñTJ\rFK4R#5bI+\\AЄ|bG7eT6e\\u44:E<ia*}0+(^=|+iU:F')k:dFmZܻ6;:\\pxo\r; o6\"\\	L@(*\\\0y70a\0:+`(\$C8aE`ڊé3G*))Rϙ}\\J9a<rX%HBQdeq,؊y7Kϯ\"\nyp=~P\\LDFRlW\$*d\r|#]ˍ1.ȺЃ(403Da7&NCp\r0\0002DpxO\0s@y\\d2 ]%C8/]CHo#% _@N\0005 |Chp=]@x>-jϠ z%: DPcJKd\"*\"8h\rV0);bt0\r/2;!D}pP&ln\0P\\!;Q,(T \\&SBCq)J\$q4X#{¥C`[la(ʹ67TDPl1h\n2zZSl,N i?\0|g8fA6\0,4?8?^{'w,Q\\bS@'0V6U}Y{-ZݩS]54m\n}}:v	ȪïOjT\$sQX#F).7A^1\r6tAX	@HgM\0{O!*8i2Vsk`-xG[.\"}UiI!BS{(ܢ7lKƪ@,ZK\"U~Fc5jPR\nkB 2jcmV@PD0ldMrňyrgT-% ֧Yb(p[p-zZH2Zݪme*d#A4(d}j)ZctAsΏXF,qF>%ϗYbH5tQZ\0(f\0u6	@Z..	&ATOh	5XQ7k#GXvx`>zZ(\r!2a1ܡL2~&n[VN4'8z\"n6 ɏF+;M;L8|Uڤ(!e뺦.*29ϗ5\$,3C|Z)h㜧+lSyE˕)忾9',D~\$GSDLd5`*Fv:A5r_^SUiʟ!P*~h\0yC}w>Y:_0ʇY`/1\"@XyՈFD-Ě0tWJTnv[ًdqF4=Krawb%ͼYZX8ȳ:VZr8TMnfNEU)`</yb>^׾HJ[GC\0}\0Or\nQJ(N.Ft	0B%\n Xv'\"'n;\"/P%X&\"XpbN/܎n(axa-AAMfN\"I;D	b'-D|\no v>F)TTmb.*G&KO#\r~I8\\ąeD'00,Ov0\"R&,	BBlNup\"S*m,gǎ*NQFJ[cQ_':,aP&LT'Xr'Ð2)U\$Jm5n\$J1[*-c^F1|Zː\$,jt%\".e\0b욞n`PCRф\n[CVSfbBϒ%\"1dd<FwE!#R!S\r#rP[FXÍF^&qm\0S\rwpߨxd&!2r[QQ\0¨%SV.NⰄ\"O'RSfD#,++~Ba\$#28RQfBr\"R8o\r\"K+QK)<\\b.ba/1T*!P:)*i36:>}4S/%\r'8r\0,F>h@Uh2DP!眏ECffO #Y7\"N\".X1n9P4{R;\"`sL2P5d摮;SJp:	0c'7pu2GEKh劬RSlc\0 rb3\r.BqB3\"4!Cr-Cc/RT(at5BTK!rlXrOr)CWFfFBҝCGFҪH|laGtaI4g'J	JLPT@Ra<\$\$6B+ZR#XO\$F0DR;RA(1W&@\r.qu#/(lDNcb6R.Ͷc x#lK@Nn+:tQg'Es.	.B`e&^~B*ђAgf!;bʺN1БYTS(VmMcWJ^DgWYV5胡WkI&uzU{WD|\0?WZuwZln)C&TvQ_8.u0QJn`n/r!s1X2+4-IB-a΁c6%6Ry	H.|Jd]vc#eb\0CgHtFFծZJ]btr*/bJoW5,[ge\\֋btQB'sEOL+-@0+pHroIkMG/ԎLmS	RMF\$jl_\$6+iZɴtGE-!lS4fIo&7iОgsRrh?1og\rW5TdelH툦w8z@	\0Ĝ\nZ\0@`ƛVJ)k\$\$W,)z9wjчqB!tgaeNĦ\"Wq	>RHN)Sg%a`|L\ni;IoP0eB6AYGUT@N\\*a\0E\r*<@O1^cF \$sIS8kI(rBӗ5\rTؗ*b'o\n<#xʱ\08ЎNHe.zI\r@9A3m'\\nY%N4nEn.*jDI-@\n\n`ے4F&WqhQp^%޴kl\r4Hp^,Lv'_TN,M\$*d6Kłh\0?#ȂUeZܡ6ix|96iq45Oߋ\rQNA)!9\n ";break;case"sk":$g="N0FP%(](a@n2\rC	l7&P\rhl25rxdB\$r:\rFQ\0B18-9H0cAn8)D&sLb\nbM&}0a1g̤k02pQZ@_bԷ0 _0ɾh\rY83Nbp/ƃNbaaWwM\r+o;ICvM\nDb#&*0<P9P96JPʷ#@4Z9*2Ҹ2;'a-`8 QF<0B\"`?0ʓK`9.(62Icʳ\rs@PC%l6P\$hۭc4b`9X*NLlޜA\0ł%X)L78П6:BsM @1 TuhWU`֎\0è5s3C(o._/P5hޟ\r%A#\$J8.b\\4i]2;X\0P`Y565pc܇\n\"`@8wh@\$6-'rl1ɽTۖذmA-TJ\0<˒9HP\nyKALB=D~\0P)	#j5\0B(ܹK9tPc҇e`l%L꒎x3\rʔ\$P`7/X<:q9ؐ@.p50\npں(P9)Hct^rb#&7\"3\"y\\PF7V9ϊb2C,ڐU8\rsO=9_s0)Z;uR8\r6(ЇH2D49Ax^;rţ\\D8/'0<&^(/K9_Az	0@t\rm\0b_xIBӁARnNQ)/%쾙yO:R' bdg]˝(@GULMGJa#\\!wOƈ`^L[{AbqCCMµЅ/T[zOPBɞPAU9rFPMT\"sa;CXm\rXpp-ZO)<L}\0¢P5IWM2	8\$=Y\$A#-4\\é5IpfM/k|8*\0A^(`qHU*9J0N\rdGDAv91,P*Z;G E	r`t\\|gL%%\$DFA@EYiv_`abR;J<.GN(x5JHFjs'Ku@Ara͛,SI)ŧ36D #ed\nuOibэ6pyf		-a\rQ/+\"Ep:\0@`<щڠ\0s7\"GC[ilaFT0\nxCHƥbp͐d)ZSD4%GzS74X鐺1C%b\\[|!\r@(!~T#1(6j\\P+c.r20#lɯAԢ{eDTKPQj=J:`E*?0յ.HahwbUd8jDC	2AW'သaw/W^e5U`vfp	̂fwu[å&Nb!V\$fM#:=RړDB2gH_H0\\|^*Zw-e,3SQMXkSƩ:s^٨O1Ci\0\$=2v}:'mbL\"\\O(jO,BDPjE	vVS=(ͩR<I\"@ҫ8N!\n1fBlÒSQI%*htMy=dǕ_ 8*8:;	&0wM@\$\\N>կ\\;zj9Gn֔P)7x7zt)jO\"P@9qeL]5Cb%	Խޑ\0H#}J]ɾZ'\"7߃,71Pȹ)Z:\nJOʳ//㺓3_?ʚR䩛s-[FƅX֡wYW5=Kl2A98b./ ,fƋGGu1<uz;=}S=\r_Yt8ΐo6rP\n\0Z@\0\"&bRK\rTdB\"'@*fGH@rfC06%Fs\0Dg\0&eUa}g_0zȇoh}0®b6`N`D%\",(+'\$\"&,m^ʨL\0b<c+*fEjжNe\no4p\r1-^PfLkŢ(AxlX<q9onkOPdn*: (c&Qn1MD8jx\$|PoA'P& nClN Q\0LP0nco%~X+c{ dQ5^Ѷ\$ppj\rbzA0k/{X1xQ'1-7A\r1rT\n|qr\0KCqiE.l!\".xF D{/R1E9%-< DF#4\"\$#K%Pe)o)A}\"a`\$bL0ާŷ*>fe	e`f\nQ+-oc\n-\\5Џh.Pm	b@uVt\rJ--nf2\$B90&s/С\rV\rf\re(@\"fC8p\"k:Dt@25LF#☇	w/\0ZA\"6:Z\\hӭ*87.o/3/ѭ禖\"\":#xjZNC	~J\nFD^Њ&)#dVBn5*		=<%4NT@g.@\r:AT\r2dY0fC;Nf8]O@v`Do\0.O	HQTR^T#BUbx^qk|FGw= \n)Ν,c~)hK#qiR려J%cd3&H`@\n,\nfԂΪY&nO#\ndIM09#f1GD>*īBLDj1EzYXr/t@byMŒ\nV_`%9Fb	\0@	t\n`";break;case"sl":$g="S:Dib#L&H%(6l7WƓ@d0\rY]0XI \r&y'̲%9JnnS鉆^ #!j6 !n7F9<lI/*LQZvccMQ3g#N\0e3Nb	Pp@sNnbf.Pl5MBz67Q>gk53trρDы(P	FSU8Fzi63iI2syO\nE./b;Z4P ,)6HN!-Bj\nD87(9!1 #k^Ҡ.`PZECAЛ4(2BZ5#̜n o薁B5)L=h1-\"2ŭ3#9Ϋ-\"pc\$Z:!ĘHKEQ\rH\rI-&Qt麣+(è5r-5B.Z9'ӈ\$&#z*	BI	x5K)b\nP`.(1nފb(f\ng_]PFSQcy6W|贊0_H˓:&*|<a:_%ްWCM;Ox13Ҡ\$r7Cj<p:xP9ֈ@-6xA\rêaJ^2L؆)B0\\Lp2461@>Z:%|2Uf4\ro@<+@r2^l6H692jX2D49Ax^;smSr43z< 97xEjLB5A6:x?4>0\"OfʀݺLc&HEx_)b	hOl (\0PRI\$e+Y1@ɰ\\L	4!H(2p@sf\$yˌPpFpKI&,Z	1\r:C6ACu3D3b8T1nSƍ2@bsFeRrN̔\n?*	\0£cO5.1B>I\n!JT㞄`dq1l>H\r `-Иay0#H*Bϱ=EXÑ3D*LuV\0(ꆓb:ag,Y4c2O0p[MZjUAQc,&I\n='f`´I\rhX|KrpLN#o?yX k6P2|lL!.E,^42AǇ(x_^~/E^.&NDlpJYOlA2e@8 M!2D\ri<LP\nG_\$e#J\rd=*o40F|\n]ӊgDׯL[kf*q R{bC8n7\$&N^&\$PY`؏+!s~u30KM-fSx;Ba*@@ *x44ALQ32FC&7fNaC\$[om}zꨴQHyom_@OSzpsz9V)_g\"|+`9י.gAvq~[l3Xpapf,MS\r:.6j:Ppl;	,@nCNʸkY3NbÊV-lՈ).9 e|͖6\$cQ?<,P	Q,P\$}S- P]}~Z	y\$(A\\:9A;1QrLht.iH[nS:i\$dQp\"==Ph){'|PA۪̅pbáHAؿԉi]40]6/p0\r*!GTӗd%E2J\"Z6zf5qx\$j\$\r|>q^0yDs,8ڼAj	7I0;&T=&\nz!ߔCb(=:{G`lx]jo\\?>fLԕGi\"T^;\$|0Ip]awrް}\0;7Xv BW>ƷZY%.o]}7zwNs%_].}c_BSdm)SD26A%6f0l(pla=_	::䥌ЩBmj2D3)dDKBn\nM#7i}t*&O-4o.l>NJpOvbPH/zp>TGL*%~%ӊ݇`&|\rc\r<d N޶pV\$O\r\nl}jTEHJotLh%FT|n/Zodf\rbf\rűξ8n\00{Ocmtc\"- ,o{ O8pvA`ತԳvCeJV}/5K;qknPQh;NG7kHbaј=yC[<x/cb-\$\rIemm\0>:gBK\"ˣg΃q4CHhL#4Pb^b8#vQCKNOTP21q/ER>nU\rE\$2T\0^\rV2H'\$~B^Bi8S6\np./`a 8l*hfDoҴ>,fF/Q*Ҽ0@6#%&,J>@.\0液|xH&0%ȆP~\$-3 \$TE岬8\$&	6ÎS8' CBBfZn&B(\rd15d.bxtKG7S[ЪN.3c2\0\$lዬ߳v9LU1t'x<H'İD賩+\0J%+\0/.@9;t\"c*\0P,\"b2lC\$Tn^ʊ\$H|  |g0\r3\01\"adF;%\r\\4gix";break;case"sr":$g="J44P-Ak	@6\rh/`P\\33`hEC\\fLJⰦe_DehRƂhQ	jQ*1a1CV9%9P	u6ccUP/ABPb2as\$_TI0.\"uZH-0ՃAcYXZ5V\$Q4Yiqc9m:MQv2\ri;MS9 :q!:\r<˵ɫxbx>DqM|];ٴRTR)H3)Cmj\$?ƃF1ED48t%Ln58x&45-Jh%z)Ţ!I:۬е*H\"h\"|>r\\-q,25ZE\$+\$Jz,mZHQ&EԂA6#LtU8iRrX\$Tf|^@b1'\"ˊ_>\rRFő\nl꠫q̅\"fD<Yu.γV+Y22-;Q(\0Ze#Zqf3j\n#lP#>Mw(vW^\$aE%#ʍN2n@*3֌3q2J	m%=6?o;q0%pCX6.J<tI鋒	CT\\;[(D bl]∙E,uo	^ކDHIP<o+o7]z+)EuTm{W!Iևiyr2|%1{*\nrźű8ɦn5^Uk5%U0:Mv#70Y=/5*\r 0@:Ø1np3`@6\r<9#8e6CaJ֢,r%(A3TG,ֺ5.9>!-mX\nuy'\n@\",tcK'!uf5̔ CG0Ò8|  <&`z@t9^üY2?\0C.PCz7pDt</>	!8<#\rȀi0<kEhEQlAYuPBAjZ ):.Q%sX#(C1hbWCB\0%XUrjmVk1b'zs(DgbW;/%ѫ3F5˹3*.H<EH\"V%iB]d\r+0a98S\$0r\r!ٌ1\nt(<9u@\$Z(O\naR_:g>ڸH5f5Pf\nU.ɷ\0тJPӦxbpIRP	7=84p@ڐ (z4ȁ\$rTr#OKi;	vV,\$؀O	*\0BE\0)R<'`T,H\n@\"Pm\rd4d,Ra\nخSP(\nETDK\$ej!\\'2\$/K12]㘖y8PD0&ljOF Ku(ADU)FfuC7dPY.YsU{]Kq.|&,Ap¹:VJ9J\\`np.e7ujI\raJ\rDYuFI[\n!Dt^H:ғ64ȝ&:ar>DA\$֬3+謭%A[4iA:6|\na3Khq	3et'PMA.&W|MCo-uBF6])[kh{kla+h̤	U[Ssir_䱠5>O@P5(v+?EߝnY31@+\n!AEc\0i9 Cp\$2*F<Uh6Z{4\$,8o\\\\lN)`)ʫ^k[.L%qN1rʗkoxlcy&r:p-ͿMƗqB,\r7:!*yuIuBiutr{g3ےp=r_ݺA=F\0_l\r䌒¦]nf5DS|܈kiaNWrcq2(Aa)r473:h)tƀ%WlyiUclK,t2p*Y'Jf5l\$J<ݟ\"{7Aү]B6\0O\\GfCB%P(14 ohdf\0VIlTCX:RˎMj씅bPFXb'Yo\nk	HP|JB@F\"g>İF.D:WKHfC丢rNA3Uo\0*uڸ%,4M`0ll	eb1H?@-m1GUN\$j%\"(Jh&\n\\D+nZb,L#Xn插rx\rJ:mfhV΃7^<+D`Kpm3K\r}pףQ&tđDʲ>*h&f3>/LB|v%t*b!)[\"8ct\\&oNW d-J G>+H5 iM7\nQ'Ml˔%|qb52rMGQi+\riWm)&r6H<p1R-+e2rpK,1d\$>0-BLX̷0E`	D@\"HR`#duiT> &&\$+P/A%u*P=.4ER[Y5gKdԍhXiZFp/p=	\"{88|փ)XڝjvsI!9f5R70W5ΰ=QI;sc0\n\"bz#XfXp-;x͂r*A%B6T6~>\"A͖\$.#2piyDD\r	\r%ֽ>uB.\$iB.\$cFk{?/6pۓP*ғ \$Z*lKK:hDF0q⴫\"n=KQKJπę\"IE\"Y=VfbkqLjH,aOΎ.n4%\04\$gp\rV#3BJ.7\$V(@ri\"\r8\npi@@푻+ԠN3YWKM \"lf[VZV`-%6Ced)H\$@n[zeSiIH1*PPjZ^R/\"` r%KJP 0\\'NP4zv%vZb4_b,\nTHrrΰ%blad05bBPx11|p#vQ(AN\rbQ1s2ƏBXZC@HEpclJ5KGglrK6)\$K@3X1\r`.~`t\r+N\0@@ \r`&g\"pl:oam&tBObE\\5Yڔ16nUֹocqdKcNg|:Âyl];bL@%Dm:˅@B";break;case"ta":$g="W* iF\\Hd_+BQp 9t\\U@W(<\\@1	|@(:\r	S.WAht]R&\\I`DJ\$:TϠX`*rj1k,Յz@%95|Udߠj䦸Cf4~Lgp:E5e&@.quW[\"+@m\0,-һ[׋&a;Dxr4&)s<!:\r?8\nRl[zR.<\n8N\"0AN*Åq`	\no\072k,SD)Y,:҄)\rkf.b:C lJNr\$Ţ)20\nq\$&*A\$:SPzik\0ҏ9#xܣU-P	J8\r,suYB\"\"+I\\Բ#6|\"ܢʵ(+r\07CURl,A\\'\r{EH_*4ةP)DX\$B\0T2&4\rRB\$.k{k=8F@2hfN=ޮ}%t\\)Yc2,5͖2OSHrOTe\n!VHrC\nRRB̈́54Bh5)Ֆ1+%\\IBIqi)SGZ0m0oMr3_5LCmDaR˫S\"XWJwKPn)Ԕ5.:_oṕ\\\\m6+(UX_[P2BmmFՂ07c=dU)HP 8ݞ&Zau(Α/KTwK,~ۚ#rn!pD1/6fjE^-u6>/ؐc܊L)26dnJpO'۝!ff/\$ؔiq5\"@W\rBSf6T\\!Hqa9&^`џ+4ka2	Cw>\\. !&ՠ NR4q]6粩S\"IixrB&cb_~\\aՇq/	 tk	eB\"Sw)2?\"CbGl~xfSgoKe%@yCk ׇ0aXs9K\n+IΆVO(`01H6fDD\$vZ7pSlcR&GM9&lL;v\$a\ng)/eN(u	Ġ+X-Br>W'<Y Ar|6צHG~mPCb0\\e4JAa;3Dt^.(X71\0]C8/'Ɵ/O9SP5c|_ς?!˟ A.CY\r!1	sWCptzR\rAX78ТQd.h4f'(H>15R\n*zfW&JփSvn&ӓ[:|喋H[ܛ{l2+vo;QqXDg[EAFS\rBX} \n{p&/Dz'7\r{: ~N^QKR0-\\\0gA\$ ir1aOw:2Uv~k e\rcOq@#\n*!@'0r5,ArEY:u'.xz?b'?`èrx)TPOHe.;Cj'^\"Pb)AA*\\LpSOHDƂ@tmI;?`O	*\0BEZ@.gRyG\"yTyHeۍk3Hȉ4)\rc{k]6ݛ˞Riܢ[ЈC0a~0;ٍJQoH>%(HsVmh.-.+vv|M!	Ofqř}|o\$=2Qvcg[4\nt~\$UHaR/-IXU܊<BhA)^HFsYjBw4opqI㡈\"2슏;.Z@ȋJo#\$QoN:(g>\0)K=PdB	OMEef>\nY!3Ao\r/\$Bı7'aK|;T7[}j:T~pH4c0{e28')Wݤ:eÑȌrL1LfKIl<,㨆Nxp\0+^B\0H( kވb4a	\"4,JN~:t\nH8P2{H-GM\0ftMD4q*̥݅g4JA,hBjv\"~(+B\n/n\"^eE4&fM*H.RIM\n`hb\0=@ł@( #N-.ZDV ACs#g/7'9|0u.|%4^og;\rChllk4V%1jKDo*11u(G qo(kgbqo	cАkdkw1ڈ/ˎѽ f\n\$!2Κ~17@	B`@ \$#QО+hk^(\"(&2:N&Z(\r'؈K!rMRfnGkhr%Z4luM[rƾK'm|:<e&h␎h&'\nΦNE--RΠ:9P%Pcؔ5\$䐅AD,Et\nFXG)))0}Nr15~s6m55#䐥e+ͨ`s&1C!S_8O*pR5s!13`d\ni	*Ua23<;4g}/ӵ<636(X\"W\$eHx\\GGJRe*ND*\\'-k'z.~9+ZCm2ڲ	L(nV 1 ȨO<s\$nSA8#5NF`\0 M;2gb,nV#~Xk7!ԲR'Q31I\"3(SWs#:NG\\UG7GsNY#F\r9*=+OH쮨C8)hl#Hd/fRxTQyT	l/UgTqGg'	Ee5UOL5*T鑲͐	J4m(\n(2C*+XEUGF&Y57Q1P:\"+OX}\n[i81*f/,B>R&{Zu`KY\raPG`6H(>nUP3;h#5TTP+5QaH D61Ad6\r>v'<)0d`Pb\nƘ'.'GkFAUU\r+Vfcdf650m&p=dl6W?Du	M.|4 rՊiֵ_ёJ3a3:Fp+4HO.dn\n)M]ZaQ+VwOZJvwuu8WQNUU	cv)Tc<sSL-F	:d\0<+\"4YUd40סeaתP)N*{w%PoWd|w}c.5wV7qdE\r5zCz 4~wQQ-	|~m/d0V':`l/Sg\$nH\"G躳(Pf\nkE]5K{VA}wo\\Us7yg5)c'L7uLu`vLW6o\$TJȚ!5M]uSm닸43AI3\\:01^)m`bXw=_HWXˏWs8ՐwPWlW?pgsUXt\r1'SIw6?9ׇW;QIMw)w8Hv[@	9k6H4OIyJ[vwNakgc6	U7xd#Ux3`AYٓxseϙGt{G&DvR˚uTHS%3wWxu˫/LSj55zMeIXc5sN	\nrϧX85iμ(EG+nW4D!(tn/xQGqFW.9\$b3IFB0W	sbZ Z׎IQ59Z_Gծ:38O_r\rV``֕\rOƣ\r ̗k+=c\r ıM\nZ\0Ah2E\"dDab^՗UUz{jTE~|LK3Q*#8ސDVҮ-TܥX4DIeˠg ;76Lt6OgSHSU!uB5}sDHж\nPǽE#5XȄ6fG	Ed[B<C?IWڅAՄ](ZXך:7vu>?H?Եωmu1FO\nae/G1U~D7)5UEVSb\n>< A\rQ%o}\n q%R1X:;zg@ZX\rkU] ~\0>6w=\r\0`N`6T7zNJ\"~	֚ό0V\r5#@N%@g#10M\\έfO\nClg%jpfz/F8/oW)TMy6\0wIY͠@=@=9m1XaLG|aߜegDYv*ڌD	\0t	@\n`";break;case"th":$g="\\! M@0tD\0 \nX:&\0*\n8\0	E30/\0ZB(^\0AK2\0&b8KGn	I?J\\)b.)\\S\"s\0CWJ_6\\+eV6rJé5k]8@%994fv2 #!j65:i\\(zʳyW ej\0MLrS{q\0ק|\\Iq	n[R|馛7;Z4	=j.Y7D	 7i6LS0x4\r/0Oڶp\0@-pBP,JQpXD1jCb2α;󤅗\$3\$4<3/mJ'6Dڲ6@)[t+.~ s0/p#\rR'L[IΓʕEhD)1q7h\rl\n(E9*P>t\\8*/TI9&35kh_H\"UFq8Ő.e|&l UPIsLJ/\$'ajYfI۱aY93d\\!WqJCMc=a6T	^RQSh+;ĐF!pY뛍.^Ӄ,Eg+^;ybFbӷDriDmU2>Q6ZPwZD7Oa6%>NZam3\r%s`90S\"V\r'BMJYz;hӥliP2PMO\nѻp);wQ'porh^Y.QV+#`P:c?!\01#wi\\:\nbmI+wdmw8%E 1ƾ	oj\"ϑc\"oͩ_zA4PJLLG	X.A;ULP%Y(2ܰkm	<6W{;6[*OmJb\nh.0;B(6@A!b<=3 ]2dF*py70a\0:<`(C8aGEVQu@9sZI`IS\nARy6Xt%b-b\"ɷ>vSRQQ1s\08V*b`)Ǡr62	|!fZ7%1%R*ܬ(r>s9pe4\0<.`z@t9^ý2I\0C.PGC>'t}PI\r</ K\nl{u?0CVwAU)تe\$`ΚS#!P8%akID-N1@\$\0@\n@)PHQlxAn\n٬UJYRȨU*}OoǙFWT1jE.kJxK\nvKUNº[6	eXv4[q5\$fR`\$PzA\0d\r-ԐG?p8SRC0r\r+1T?h>_j0>V=\$\\cMkမPDWNv,\nZ-.*Kc\0&nD8QmeȚp@1HHg{xc{ϼ\$R=Vi5#+qÑ/]ϧ:Lg\"\\lgrP*\\ E	.4ta3Eah#33\0cNΉ8(j\\N5\0;v|M\"P^eI6\\4沬R\\>nt\0	EpO.X6vDuKl	`5ǓRæ!	^XZXuc >żbds6:ڊ2@k,v\\=iNlw\\2\r!6\rG\nOhjlKD%(R	eL\".z+vpuR8J )hFe8ee\$)NviL4K(dJ=8)g6Ty:-Sj;=|քsqΑ0L^yG˟B٬v:	 <ҰD(Rou!qI;\"wx:n-_rd;kqc?E-7gw8 ӯ4{O\nTl?xT!\$FIpC:CoQRK#\0/3A.!'k&|m*v{E\0:owq{\nÃyd*qDAJ+[o¯\";v;oog\0DUQ	pǋ+'2e8L\0wW,Sd`,~`A~oe_cŬ^bfBPr9C(M.lpNBG	*E_C..Hap6^YX'@Iᥒ~F&hDQ6vnmN٣ 0B\$4:<-CS\"^16eF|,\n\"fD%qC;p*bMB5Jm\$OPqF0(1 l&N0ʠڭ&!\r->E\$ʇ:Bp+fBHvk>ΐ(a;Zh.鎰=QqL.NYN**MQY`SЈ'F|_1QxEX%ۈ	!m2T#X(܄DbI2<A\$nD2dE\"\"Hr{/O&e'NnLN:H8##ʘ\\i+5QB8W/%nöҙK-ɐ8蓒O\\L-oW)2..\0R/8D钘2Rk'i;\0}Szk%5Qa#Xhޭgb!KQzأ5SJ24f.Qfo\nxDDͳR-eC.r	2ɇQm)ĿfEM9~+1j,a=}!;0f1Ypoo>rBo?r(2P9-;>*Y1sœBOA2C91FATC	ҏ@t)E[*Q6rDF'r.oqd<#Q4̟P\nC(aB0[\"TT0?>TW>Zh?KIL8Q]BRLtTX`@y`\nI\"s>k S@TOQQP@P3ÚU)%b.	J扚=KMFKMMINQuUj<5\\9NL=VIIVW.Wu\0qU#OVBU, 1T1bfYZUN8R9BZZ[Qk[pRF<ʬV\nV**1_XW[)5_VDV4Bt516\rOU4Ab0[P*Y\r5F.W^[^ͭ@Ctbq^Eg^%SQ/R`LL2fL@aR,-`+LR'ȠHݔ\nD4PrGchf脱RlwHvo+/\0q-F!xnFk\rV`QI\\:%bЊ\r\0@J \npj\$x-;bo%0ЖiJ(&k@s-.vQ'F98+doWDKN8R0\\79ΜtS`+qmCkhcngS\n 	ޢ?|ґ=AfqϺYSi謎@,/SO-O6mv-gC{,vtaC=&\rK	 ωuoCAv\$TLƟe9]Rp	 d[ u'wls	97lT4ow\r(䯆\0 @ \rd4d~\\'==MBd'4c&LQ\$XPwz;e:evQ`ⳁ*eRTG&{dDEx8QLVhꈞ Ӌ8LVKte(+J4r/c.v`	\0t	@\n`";break;case"tr":$g="E6M	i=BQp 9 3!i6`'y\\\nb,P!= 2̑Ho<NXbn)̅'b):GX@\nFC1l7ASv*|%4F`(a1\r	!^2Q|%O3vMA\\ 7\\e93a:sFNdp'tFK!vt	@e#>ǜ㑄̠%%M	:Ir?F 5	\"ih`ttT;ơ䐣##Cd<CkLPX9`*#z:A\"cJV::|\0@e(A{\nx@Pt#JIƼ02e;0	X:49/r6\nʩDAp*J9̜Ae\\:4%<2Ĵ#9cZ6k_5æ SI,c#JC|ORC`꩎AO;3Pk{*\nbDr'p5252+Mӄ:E@3r\\аAH6#-WGIJVۣܳ!#[Ox.:W}myAuHUsմp6EKA32\rxR*\r,7!d9ƃ09@3Cr0\nXQHfЅRĘA\0P!bS厡pAHCjxЍnmD;c\nN!8[]a.2'=y3zf66/̘C.J˯&3<(;(<`2mA.4C(C@:t㿌#&(> X^X#.:wa|\$47^0#3}\n͠sD4=#NÓMΙ8s>B8DI©}#0	+ a@\$S DtT'\nJ#Qy\0P_ı2;!epn*E]\$zH\$\$DT)0\\3Jq\\`䉖 N:0˒WeԙvZ!96/-\0T6D|4zOz-DS>!ndiyɉ,%E	ǜ7sOgO7HMHgcb`KCIR\rÁ%06GHpt0y\rB'PO	*\0BEk!ٻ{Y7HbW3q@,s3NA<TYd9\$Nh>-AjCYԆl0tNхŲ5(Rb2=\$@>t aʹ@ʚo\"~RE<4!,sI׫c\nT\nMPHU8u=[x1D6YMCE.!>\"E'/@\r4 )Njh}ʈ,I9o/FmTIP֜HlR&52C6Rk	4 };\$[o\"])>`p\nt3VHsRk*+t¡\r4]u4(C3@S.f!\rq\nX'	z6nT\0T\n!Ay1;2bó\$MY.]E-S8\nL*^id3(7 u~Pp1\0GO.)-b7TOj!;\"\$PPdZdRIQOӼvXD3cdجS\\y܃y+ 	܈jFHa0^@`4a	\$iR1`fSQ>tsGϨ8\$/s\"E\":ρ<D:bMIwd]D<3*T xUgg(uܳeh=j0\\d}nur6GtQtCy^7Y%bZYJ!l+|DkC^[\0RݙJ͑^Ź.PZun'ì65w\rZbyW@itTڧX.A}:I<rz]_e&6脟9q:^Re<cj0BN,*}d>QۗF܋U~=H8狚7=qB1,FyHmr:Ġ_}4%&izcjYV(ZT VUYYx-r.W; !#_70)xl7Wyt_7s`wr~u\0IG(;TD*BB]̸JN7P\"7Ϭi\\u\$.R\0RI m⸠B.`\$\r%(7`\$H[h#bsH\$0=k{;nBVW\0E+\"@Р΋\nDp\nY&K	1\nʲ+\rP@XcC@J;+/)\r+AnP!J`O1,ؕb\$JhR8Lɉgɍ5@,G6|\$PM0î/ǌB6.Nۋ	HO)N%=DdP\rVJ\"P)[i~m& `\np7~CHC`Ʊsew-X\ne4GRC\$6*qnd٦\0)'\\D8@%Z9c3J\"I\".IOIfZ̦An\nz>~sQ(q9\n)F c\$\"0O)d|s&'\$XQNLW@s۠HLCP\r \"q\"*)D4GN\\#@MbW.7\05afA\0%~\"Bާ!)~gr4DY^-vi00~E\rc*>(2B3<P ";break;case"uk":$g="I4ɠh-`&KBQp 9	rh--}[ZH`RdbrbhdZGH\rMs6@Se+ȃE6JTdJsh\$g\$Gfj>Cf4jSdRB\rhSE6\rVG!TIV{ZLʔi%QBvUXhZ<,΢Aev4s)@tNC	Ӑt4zC	kK4\\L+U0\\F>kC5A2@\$M4TAJ\\GB4;!/(+`P{\\\r'TSX6VZ(\"I(L` ʱ\nf@\\.)D(SkZڱ-ꄗ.YD~HMVF: E:fF(ɳ˚lGLA;Szu CDRJ`hr@=Bs;MNrJۭ)S3NjfBTш54T462(>ɫ)F#DMRDkgVhIt;rFHe_7i]EA	MH\0ը.Aj}c\\f-7b\$GmJ)ʠc\",IxP*b)f%yenEOZ4k.,͞5oA%[4d5A0鲄PE(J}3;P\nX3rvT0è6:+c\"d>a\r&ٲRno7!Z5BKFxҧzu)<fhP4]EzS]S7Rc?3Usw/ef^hKehZt\\=jB)vp[Tt{e`P:@S#70Z5卻ppCc:36`@xgB>GC8aB\0	@Pu;9fچ.f\0FkG]Je)aX\\,DDJŻ&-BND3bݥ+Sl.Z*%G7̉%FDF#\\QG	en5\"&5E\rH&w̎;ă(xH\\	}A p`%pa`7Pg7J0wi\r6u癷DHmH6@xabSؑ؂5d2t7HV7\nY?5D k˥3fLa7@P(Ag(Y\nB*<hB#\n&B!G=~CĳҞZ>jBS|sz\nAMPpE렛BҌ[G\$/8j圞.N \$<'YuffA6\0&߄y<8XcGP4bQ`zb@'0*ǥC! FĐC?As(Hi(ꔡ.fwl\"g\$4٨8e.|\$1q蜃\"B0T\n71 .Й.<Bl)q5AFɹE<vDYw().Qi=\$ޑ \"aAb&!ea>HY4jfNEHzR&2/Ӳ*kTr eM\0CegVE6ʭE.y_e^Ur}®QA	|\"+S뚕V#taDdV;5l<9ıkj+}ʻ0*\nt1Z9@+J90=|}a??G͆D&iF\"K\0y>JD#2ˉ(u>%F)o*C)gޓ-A=P`pZ)Sd<8@M5s׋mtCE}U)SS_PVQe\"rDhʩ`RE	}d~C*AaoM\rW#@Q;u95=w^Wj7;ct	&!Dmt7C#)BhT73kP3rSX\0PA\nP 0+4\r'Vᾣd2ntUM\n:GY,Rh:n;anƁnS2&#5.N9Tک'K.p\\{}DS_h=#{O_ꁊC)|N\$cW}7o,KaFdrt}w'YO7-/G/WɥOyr< g]a>J_B?552ݺϑ+ XVa#Bϟb&((tfӁj=UUKokbE`E*]>CVL>deF*bK셈Mf3(0Z%4mdȨEPxcL\rCP2o,APaC:.0P,pzӁ|LMDǦ\ng\nۍp4G`eH+obkpPF)%Iz\r]⠪%Bo2FAf<D\$mj*+H\r*0>JB`nNl#m8ާz!Цְ޴h'FH\"BFPbT1RǼ˧.όrHِ˅L#|TQq{1gCgX1lqzqѪ{mlGuqh({(OLGDcLC wlLGDe\nEI\$6H1L.pfDr\rRa\"e#&'.k'_%O% ]\"y!O\"௲\\n_%R bP+#*wz=2#NQ,naL\$C0tGk.V\n>Eep2Cr\rBSd1FЇ'aN|.L,qV2>j#\0d.Ǆ J.2rҽNߋD1Xk\r2݇&qE=d(͵-#,#w,(:Stίs_ba;,Pʄh[SR>=)rrIs{ltSꡮ2OEd0X\"dlWSk:.Jq+br'lv>qz	E2P\";O\$OFrW/-nsneGf@&4cGnqtCe\nA4\$u< /H.*.2NHEKl\nyF>T_5q4K1?t\\) O4%o#&NNM\rUOlی?EQJ1䯵R4T>îu9NR?\r\"{VSQCRRIMܡ5v=UbOAe2.hi;ZpOW[Ek	H}?ԃ+JB4DACTQI8LpSgCD>c*9GEZ;gO`tq(\0\0R~v\r*ad-eflWb(C0b3[\\o**/(6_*)RWfcg6egcoT/n\rW.|2ʴFaaD3ILC3\\t\$'.\0ę|\nZ\0@ƙ Au!3Vwƈo@/yOVypz2&Kt[MTӊzn@\$&E7BR@>J@nS2蕷qVY}oZi,5kU&L#'k\"&GB4ǡ\0\0	d#yw9<n>lyMnz-2\n1\$6lys-%Ɵ%/W\r[-]s\rmrL[\nArL@?sS	}d2_SPAP^j*~EY@ ,Jk;Wk4<5n]OLOB\r,`׎\0`@ \rKMdf/,8|,QM'#6\ns=d7}̀r1	L 8X#W?wV;8smzbC4Mk5B\\M&- ad2m\0";break;case"vi":$g="Bp& *(J.0Q,Z)v@Tf\npjp*VC`]rY<#\$b\$L2@%9IΓ4˅d3\rFqt9N1QE3ڡhj[J;o\n(UbdaI¾RiD\0\0A)X8@q:g!C_#y̸6:ڋ.K;.inE{\rB\n'_2ka!W&Asv6'HƻvOIvLØ:J8楩Bakj*#ӊX\n\npEɚ44K\nd@3!pK Pk<H\n3|/\"1J'\0\0PR!1d2V#IpN&		Z)	R܈f1BC\rܘAZ8B<@(4=9%3.sdn4ʮ3-PH ƀaHl`\nxDe`9M&02/#2SO1BJv7RUpJGF\n5%N]2Q7,tWóFG	AQ6>hv4D4	 I/+|4\n#TP tom\rl)\"c\rh&I>\r41J\"dL>c(Zi S*\r螀6quTbwg\0VmcԠE%u;q:0Vح>@S+Q\$~4h VT\r@,9\032cCPe&0)v2S~ X\"l8ɳA-Uʌ)tۉ\nl)ܘSJ%2RH1D4EXP\";ſ33穩/eC#x:>s;/KA\0<(a`z@t9^ü2ӠC.\r3xXa9o2HlJzH0&O6^A<#m1#@h%(}s\"a9SKQCQ8S(3弻x.\n (Ef?&R\n[V.*2 <auO̤5uC\$:\$\0PPvMBQNWJvh1:])?J;Eq?G;@^)%\$zJ\r8>ih\$21:\npM \r_F,%2Hb*%(y\$\0&2tO	D|DJ#J~1(I!HQŷQʹ#]0T?G+jOg%?Ms39[UEC,*wJ(d\"đEWe뜔d)rAP0LbFpC2o ;C*UyzbNQԻ	8%*k#a{\$OLxQ-eE؋PĲ=UAlȳvDsK_BVPE{\r/!\$#!ADkAzAXG=7EeغFt1dKɉ3ܜղ+QJ'TZД1MV28)up*@Ѿ-K=InWEC[k2qD+A\"Ac)iPRoD`&ԙQ1BSMSGضC	rr:\0d\"\$˺b@f@\$ ;ŽF[ə5|\"cA2\\#V84\0BDHA	.)^lL: NBfA'1LQ#Ok\\>E'*h,ZSaJf*Z>V`L0Jle:.|%2p*˱O&. OHW2d51	M9ܯ[ǋٛDDՙ@l9glo}\nsG*e\"By-Ov^T]b[8Ȣ Vg9ˈ'buxu8l0ڤdqmR=(v\0V:ٮvUMɆEfֆJ/㫓MԙBRn7ћHe6كg۷R4u_(\\HB#_g*>EV	'CkGPH.\"\\FʮыbCK7F}}:O1ú8ۏ3pP}x(*y&hζDYY2.?]\\ޏf\"x֕VuPT^clp\0Tn\0R@PJ)7 CUdc.UF֡X2h/\0/nhk*ez*#N\$Ɗѣ	%DN&/j5dqp t.\"l\0OM h\\'5yπP\nO\rPބjIPqesQ QHnS\"HG:sΓMbMqV1_\n-H;|KEeP%PjX0'q5enH;+<Vc9¤\".%)\rqWP%>aJ -\0\\Ʒq\n(aBA(ױ\$\$I/N>4zN\nZP,˰JP)@#@n&ftP\n\\/t73b6D*n3dQSȭC#,&b#?2/mObU-/8'IN&./+B\$q+&2#o~/e[2UL\"vvmd8N7<i273K'	/pɹ/\nNWD%E8P \n|>%-R7\">wGy&a^0GGQJ^\nmjI1i4htD9vp<p&3B\r3FXPj	䲷:S5JYl*#F* ";break;case"zh":$g="^s\\r|%:\$\nr.2r/dȻ[8 S8r!T\\sI4brЀJs!KdueVDX,#!j6 :t\nrU:.ZPˑ.\rVWd^%䌵rTԼ*s#U`Qdu'c(oFe3Nb`p2NSӣ:LYta~&6ۊrsk{fqw-\n2#*B!@LNzШ@F:QQWs~r.ndJXˊ;.M(bxd*cTAns%O-3!J1.[\$hVdDcMAlN-9@)6_Dseۂ%yP̞BFys\nZñ()tI4^F'<\$'I\0DYS1RZL9H]8\$O\\sS1}GR)v]PJ2E%?H%\0\$*H	i N外g1i^iD}`LKFr4V%aBPHG1E#`6L@9c\nbr(v9Uo)DO\$=g)xsLR5rxarsyeG1?bчg1LA4s0Xr>3ORt@Sf9YUTTC`91x@0L3c21fT\$*\rw!\07c1Cr`3XZ3.`A XP9:\0)B0@9F*	Sy#=&FVE`#xRϱ!rήh9c3ݎc9T(8\r:H#0z\r8a^\\02Aw3(\r^a94#/wpHm}A1F7CJk2:nӇ0(P(Y	M\0-N'(+Ӛu'@(!H>\"\n9()Qji1[W\\K20\$ԛ0y[DFRx*T5ƍhfA6\0Z{56\r\${wړ);\n<)HY+f<Az	A\0	b/E)a2՚v8 A3\0f3Tμ!T8+&L9GZ js\n+\n	8PTv@,E^0TZxP!8bX'I:B erPCd%|C0.F3\0`\"VY8<a)؀15gNYg&fı69@G)5MQ&#)dGH@&bEM7đx#YBp(DSkBiv3-ܡ-Öt56Hz(!@l3ՆCw\ny	Vv⚔R2Ȯ2qa*=HEhIhM@!ؑ-hE\nc8Rb	gDCf9k~Zغ ht1|9q/lצZ`IgJ!.!`<BAa GMGi&X7sN&eydOSiًU*A)%¼QOI5%UطAxI\"r1a2Ifex%8<P\n	RlH0]Y(#PzSE \$XshY_IUoeYQ+-/%&Ô@+Uػ]B|yyhTG1.!8 G6@RPkilZ9M/:KtU><);H+Fu&Tĝ?b9X0M Q-_3!u-;S[@/,ֆ\$M	q(	)ņ˧2W%-WuyXK:fJ]?bRf5V񘻎` Нٻl@G^\r\"5gԓ;^3q]m\\ܠUT(>~Q\"pByY:U;*9d K!)r@Um=tHȔڇ/S<rZͷhVniH)5+4ZU?>WxqΦ{(<)[re	PW]IDB9uO7*j=Y>\rzK?R,Wv\$ߊ*MBlOs͇tg~O3ݮWF|o(0\\ot7mK_o{G_=E\$V/B	v\rO^`aR-tfFɁvGBb&B(80HIl,;m:4:8f\rV`T*.#XkH\r k(6h xH&u`\npp9jlj^e4#zaR<S`	!f.!-9>8&P:Mt!j!:Ih!-h	|94\0xc*5#b%t.jeĀ\0,j.JzVի8Iϐqp\nҾ#\$2\0ǋm^NR~InN-\rMhAtk1Q`E\$f̏lwGz\r*0+\0\0@ \r0,ץagB&\$VG%:icź5C*kq1:C\0\$T@	\0t	@\n`";break;case"zh-tw":$g="^%ӕ\\r|%u:HB(\\4prneRQ̡D8 S\nt*.tI&GNAʤSV:	t%9Sy:\"<rST,#!j61uL\0U:.I9BK&]\nDX[}-,r&a;Dxr4&)s3St\rAbEE1ԣg:x]#0, (4\rGqZS )ЪOLP\0Δ:}ryZse\\BABs @2*bPr\n/k)P)<ĩpY.RDLGI,Ii.Oct\0Fdt)\\*/]g9f]^KL)pYr2.)h2]*X!rB\$	ql@%yRPa s-a~WġrGALKIԕ)KP:\$PO\\\0<@J\\PrBHreB^g1IJd}\0L1TP\$\\ux P2@tS%Z:^P:cR۴\01#s()\"^)CG-nԪYIKq7*\\2TDQԆ,]ѯ;'d;8m)ebva_?CInPsY<49Q\rIP:L(#470茭:h0΍p:cN9@6\r;9H巌#8@KVX{23	!bԍX7/ϑtk>`]	OtȊ{7(YP\$tZI0\nR\"h9=c9U@4 \\-D49Ax^;p2qp9޸Û\r/iဆDHm6xa<ASdi\r8m~:rw\n:U\"F@%\\Ji)J#ţ\n ( D!PB\nACL?rbUʓQ!al%9dP9pWnFa8 	A,Q\"\$3\0 iUqu7?Mk:uo\r F􍓟IcS&^7A@'0xa\0-6PKF!N!\r\"  rVb i2ޚ\r!613F`nU	=udrX9KE C-JX%	 P*PA\0D0\"Ԙ\0\r]сLB!Djvj.8A2`¾Pv!NaP.@f	w'DP]p\"!xD#/JFC*~OE(JЙJ0}2Q\$PkT֐:pWd\\E!KqH\$D!XCH]b\0GbXn'*#!EV\0(JuO㚁PFTS\r!2(3`\rY<L-DU)6Y[H\\Z\n!/XRlls[rgB@&Y\0|Ϲ?0r\n]9bd^^R9zC\0Q/;i^-j?Z틱mg>hh:`T!\$	8Ikx͆*kxJ:HuOty+\0*KD1bD[qf>z,GHf.%gxǙ~#*\nj@xl#\0PLJY%)萋<N\nqήsa'!Ёo+|H/\0Pɢ_HDXܹWD`9t4<T^R L-Bp0&\rQP:D:1T*MwMCJG:URQ,ϙdի_cnw)Omb܌osԝG@9@\n!3	h?*F4@߇}]%kqD?!.%]SFZ\$mKUUڷr0:U]oZEi×C(71Jx&jrnY75st4n@=8؅vFgA쌏r_?D}O-zV{Nw4C7F\$U	HXhA.#hq rF޻7]D\0}8dxJ\\7m%KekhRoݛbyh4Dk[s*;pmo}GQmXY?s\n2c_>խHQ:C0Z8ɆOb[n~*\"Cܬ/Ernl'p\nDT|*O%6D\"DjFj.!scpApOAIJRY*mZKLDPvt&9kڼϼ}EbFdtCPвcCp2 yb.E)alhADd@@\n	Bn`N)p\$MDԁ\naz\"p\\,w\"k\rFU2 k\0iX\r \r`@GĦJh6&؄\0ޞtĄ`z\\3G\nZ\0@sä7NJgǖlB4#jPHn@`P.\rt9\nׄxr)h;N,\r:#	q3C\\6\$d<^,.lfϡ&(E!p2 _423)T\rִHNo*ňXZ\r2JL.(9&\nӁ,\"wǜz ҦkF`@\n2\n`A\0 fg,<!f+SxNR,!J?#l ԩc\"R(f54m)PDPРFDh	\0@	t\n`";break;}$vh=array();foreach(explode("\n",lzw_decompress($g))as$X)$vh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$vh;}if(!$vh)$vh=get_translations($ca);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$wf=array_search("SQL",$b->operators);if($wf!==false)unset($b->operators[$wf]);}function
dsn($cc,$V,$G){try{parent::__construct($cc,$V,$G);}catch(Exception$uc){auth_error($uc->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$Ch=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Xb=array();class
Min_SQL{var$_conn;function
__construct($h){$this->_conn=$h;}function
select($Q,$M,$Z,$Xc,$We=array(),$z=1,$E=0,$Df=false){global$b,$w;$Ad=(count($Xc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Xc,$We,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$Xc&&$Ad&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Xc&&$Ad?"\nGROUP BY ".implode(", ",$Xc):"").($We?"\nORDER BY ".implode(", ",$We):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Hg=microtime(true);$J=$this->_conn->query($H);if($Df)echo$b->selectQuery($H,format_time($Hg));return$J;}function
delete($Q,$Mf,$z=0){$H="FROM ".table($Q);return
queries("DELETE".($z?limit1($H,$Mf):" $H$Mf"));}function
update($Q,$O,$Mf,$z=0,$ug="\n"){$Th=array();foreach($O
as$x=>$X)$Th[]="$x = $X";$H=table($Q)." SET$ug".implode(",$ug",$Th);return
queries("UPDATE".($z?limit1($H,$Mf):" $H$Mf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$Bf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Xb["sqlite"]="SQLite 3";$Xb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$zf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Ic){$this->_link=new
SQLite3($Ic);$Wh=$this->_link->version();$this->server_info=$Wh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Ic){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Ic);}function
query($H,$Ch=false){$re=($Ch?"unbufferedQuery":"query");$I=@$this->_link->$re($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$sf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($sf\\.)?$sf\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Ic){$this->dsn(DRIVER.":$Ic","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Ic){if(is_readable($Ic)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Ic)?$Ic:dirname($_SERVER["SCRIPT_FILENAME"])."/$Ic")." AS a")){parent::__construct($Ic);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$Bf){$Th=array();foreach($L
as$O)$Th[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Th));}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$ug=" "){return" $H$Z".($z!==null?$ug."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$nb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$h;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$h;$J=array();$Bf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Lb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Lb,$B)?str_replace("''","'",$B[1]):($Lb=="NULL"?null:$Lb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Bf!="")$J[$Bf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Bf=$C;}}$Fg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Fg,$de,PREG_SET_ORDER);foreach($de
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($Q,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$Fg=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Fg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$de,PREG_SET_ORDER);foreach($de
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Gg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$i);foreach(get_rows("PRAGMA index_list(".table($Q).")",$i)as$K){$C=$K["name"];$u=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$u["lengths"]=array();$u["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$i)as$kg){$u["columns"][]=$kg["name"];$u["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$Gg[$C],$Xf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Xf[2],$de);foreach($de[2]as$x=>$X){if($X)$u["descs"][$x]='1';}}if(!$J[""]||$u["type"]!="UNIQUE"||$u["columns"]!=$J[""]["columns"]||$u["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$u;}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($C){global$h;$Cc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Cc)\$~",$C)){$h->error=lang(21,str_replace("|",", ",$Cc));return
false;}return
true;}function
create_database($m,$d){global$h;if(file_exists($m)){$h->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$uc){$h->error=$uc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$h;$h->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$h->error=lang(22);return
false;}}return
true;}function
rename_database($C,$d){global$h;if(!check_sqlite_name($C))return
false;$h->__construct(":memory:");$h->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$nf){$Nh=($Q==""||$Mc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Nh=true;break;}}$c=array();$ef=array();foreach($p
as$o){if($o[1]){$c[]=($Nh?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$ef[$o[0]]=$o[1][0];}}if(!$Nh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$ef,$Mc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$p,$ef,$Mc,$v=array()){if($Q!=""){if(!$p){foreach(fields($Q)as$x=>$o){$p[]=process_field($o,$o);$ef[$x]=idf_escape($x);}}$Cf=false;foreach($p
as$o){if($o[6])$Cf=true;}$ac=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$ac[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$Jd=>$u){$f=array();foreach($u["columns"]as$x=>$e){if(!$ef[$e])continue
2;$f[]=$ef[$e].($u["descs"][$x]?" DESC":"");}if(!$ac[$Jd]){if($u["type"]!="PRIMARY"||!$Cf)$v[]=array($u["type"],$Jd,$f);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Mc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$Jd=>$q){foreach($q["source"]as$x=>$e){if(!$ef[$e])continue
2;$q["source"][$x]=idf_unescape($ef[$e]);}if(!isset($Mc[" $Jd"]))$Mc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$x=>$o)$p[$x]="  ".implode($o);$p=array_merge($p,array_filter($Mc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($Q!=""){if($ef&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$ef).") SELECT ".implode(", ",array_map('idf_escape',array_keys($ef)))." FROM ".table($Q)))return
false;$zh=array();foreach(triggers($Q)as$xh=>$kh){$wh=trigger($xh);$zh[]="CREATE TRIGGER ".idf_escape($xh)." ".implode(" ",$kh)." ON ".table($C)."\n$wh[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$v))return
false;foreach($zh
as$wh){if(!queries($wh))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$Bf){if($Bf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Yh){return
apply_queries("DROP VIEW",$Yh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Yh,$bh){return
false;}function
trigger($C){global$h;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$t='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$yh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$t\\s*(".implode("|",$yh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($t))?\\s+ON\\s*$t\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Fe=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Fe?" OF":""),"Of"=>($Fe[0]=='`'||$Fe[0]=='"'?idf_unescape($Fe):$Fe),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($Q){$J=array();$yh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$yh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$H){return$h->query("EXPLAIN QUERY PLAN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($og){return
true;}function
create_sql($Q,$La){global$h;$J=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$u){if($C=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$C,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Gb){}function
trigger_sql($Q,$Mg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$h;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$h->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Te){list($x,$X)=explode("=",$Te,2);$J[$x]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Fc);}$w="sqlite";$Bh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Lg=array_keys($Bh);$Ih=array();$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Uc=array("hex","length","lower","round","unixepoch","upper");$Zc=array("avg","count","count distinct","group_concat","max","min","sum");$fc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Xb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$zf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($qc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Wh=pg_version($this->_link);$this->server_info=$Wh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Gb){global$b;if($Gb==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Gb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$Ch=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Gb){global$b;return($b->database()==$Gb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$Bf){global$h;foreach($L
as$O){$Jh=array();$Z=array();foreach($O
as$x=>$X){$Jh[]="$x = $X";if(isset($Bf[idf_unescape($x)]))$Z[]="$x = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Jh)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$ug=" "){return" $H$Z".($z!==null?$ug."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$nb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' WHEN 'mv' THEN 'materialized view' WHEN 'f' THEN 'foreign table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v','mv','f')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return
in_array($R["Engine"],array("view","materialized view"));}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$y,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$cb=$U.$wa;if(isset($Ca[$cb])){$K["type"]=$Ca[$cb];$K["full_type"]=$K["type"].$y.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$y.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$Ug=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ug AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ug AND ci.oid = i.indexrelid",$i)as$K){$Yf=$K["relname"];$J[$Yf]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Yf]["columns"]=array();foreach(explode(" ",$K["indkey"])as$qd)$J[$Yf]["columns"][]=$f[$qd];$J[$Yf]["descs"]=array();foreach(explode(" ",$K["indoption"])as$rd)$J[$Yf]["descs"][]=($rd&1?'1':null);$J[$Yf]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Me;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$ce)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ce[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ce[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Me)~",$B[4],$ce)?$ce[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Me)~",$B[4],$ce)?$ce[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$h;$J=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$h;$h->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=array();$Lf=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Sh=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Lf[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Sh!="")$Lf[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Sh!=""?substr($Sh,9):"''");}}$c=array_merge($c,$Mc);if($Q=="")array_unshift($Lf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Lf,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Lf[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$rb!="")$Lf[]="COMMENT ON TABLE ".table($C)." IS ".q($rb);if($La!=""){}foreach($Lf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$j=array();$Yb=array();$Lf=array();foreach($c
as$X){if($X[0]!="INDEX")$j[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Yb[]=idf_escape($X[1]);else$Lf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($j)array_unshift($Lf,"ALTER TABLE ".table($Q).implode(",",$j));if($Yb)array_unshift($Lf,"DROP INDEX ".implode(", ",$Yb));foreach($Lf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Yh){return
drop_tables($Yh);}function
drop_tables($S){foreach($S
as$Q){$Ig=table_status($Q);if(!queries("DROP ".strtoupper($Ig["Engine"])." ".table($Q)))return
false;}return
true;}function
move_tables($S,$Yh,$bh){foreach(array_merge($S,$Yh)as$Q){$Ig=table_status($Q);if(!queries("ALTER ".strtoupper($Ig["Engine"])." ".table($Q)." SET SCHEMA ".idf_escape($bh)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($h,$H){return$h->query("EXPLAIN $H");}function
found_rows($R,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Xf))return$Xf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($ng){global$h,$Bh,$Lg;$J=$h->query("SET search_path TO ".idf_escape($ng));foreach(types()as$U){if(!isset($Bh[$U])){$Bh[$U]=0;$Lg[lang(23)][]=$U;}}return$J;}function
use_sql($Gb){return"\connect ".idf_escape($Gb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Fc){global$h;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($h->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Fc);}$w="pgsql";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(25)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(26)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array();$Re=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Uc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Xb["oracle"]="Oracle";if(isset($_GET["oracle"])){$zf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($qc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return
true;}function
query($H,$Ch=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'OCI-Lob'))$K[$x]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($Gb){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$ug=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$nb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$pg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $pg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $pg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$y="$K[DATA_PRECISION],$K[DATA_SCALE]";if($y==",")$y=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($y?"($y)":""),"type"=>strtolower($U),"length"=>$y,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$K){$od=$K["INDEX_NAME"];$J[$od]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$od]["columns"][]=$K["COLUMN_NAME"];$J[$od]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$od]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$H){$h->query("EXPLAIN PLAN FOR $H");return$h->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=$Yb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($Q!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Yb[]=idf_escape($o[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Yb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Yb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($Q);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yh){return
apply_queries("DROP VIEW",$Yh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($og){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($og));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Fc);}$w="oracle";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(25)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(26)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array();$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Uc=array("length","lower","round","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Xb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$zf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$sd=sqlsrv_server_info($this->_link);$this->server_info=$sd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return$this->query("USE ".idf_escape($Gb));}function
query($H,$Ch=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'DateTime'))$K[$x]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return
mssql_select_db($Gb);}function
query($H,$Ch=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$Bf){foreach($L
as$O){$Jh=array();$Z=array();foreach($O
as$x=>$X){$Jh[]="$x = $X";if(isset($Bf[idf_unescape($x)]))$Z[]="$x = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Jh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$D=0,$ug=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$nb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$h;$J=array();foreach($l
as$m){$h->select_db($m);$J[$m]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$y=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($y?"($y)":""),"type"=>$U,"length"=>$y,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$i)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($m){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Mc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Mc)$c[""]=$Mc;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$u=array();$Yb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Yb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Yb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Yb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$H){$h->query("SET SHOWPLAN_ALL ON");$J=$h->query($H);$h->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Yh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Yh,$bh){return
apply_queries("ALTER SCHEMA ".idf_escape($bh)." TRANSFER",array_merge($S,$Yh));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($ng){return
true;}function
use_sql($Gb){return"USE ".idf_escape($Gb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Fc);}$w="mssql";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(25)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(26)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array();$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Uc=array("len","lower","round","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Xb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$zf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$Lh=explode(':',$N);$this->service_link=ibase_service_attach($Lh[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return($Gb=="domain");}function
query($H,$Ch=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases($Lc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$ug=" "){$J='';$J.=($z!==null?$ug."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$nb){}function
engines(){return
array();}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
tables_list(){global$h;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($h->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Ec=false){global$h;$J=array();$Eb=tables_list();foreach($Eb
as$u=>$X){$u=trim($u);$J[$u]=array('Name'=>$u,'Engine'=>'standard',);if($C==$u)return$J[$u];}return$J;}function
is_view($R){return
false;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){global$h;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($Q).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($h->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($Q,$i=null){$J=array();return$J;}function
foreign_keys($Q){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ng){return
true;}function
support($Fc){return
preg_match("~^(columns|sql|status|table)$~",$Fc);}$w="firebird";$Re=array("=");$Uc=array();$Zc=array();$fc=array();}$Xb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$zf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Gb){return($Gb=="domain");}function
query($H,$Ch=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Pg=0;foreach($I
as$Ed)$Pg+=$Ed->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Pg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Ed){$K=array();if($Ed->Name!='')$K['itemName()']=(string)$Ed->Name;foreach($Ed->Attribute
as$Ia){$C=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($ic){return(is_object($ic)&&$ic['encoding']=='base64'?base64_decode($ic):(string)$ic);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Kd=array_keys($this->_rows[0]);return(object)array('name'=>$Kd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Bf="itemName()";function
_chunkRequest($ld,$va,$F,$yc=array()){global$h;foreach(array_chunk($ld,25)as$gb){$jf=$F;foreach($gb
as$s=>$jd){$jf["Item.$s.ItemName"]=$jd;foreach($yc
as$x=>$X)$jf["Item.$s.$x"]=$X;}if(!sdb_request($va,$jf))return
false;}$h->affected_rows=count($ld);return
true;}function
_extractIds($Q,$Mf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Mf,$de))$J=array_map('idf_unescape',$de[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Mf.($z?" LIMIT 1":"")))as$Ed)$J[]=$Ed->Name;}return$J;}function
select($Q,$M,$Z,$Xc,$We=array(),$z=1,$E=0,$Df=false){global$h;$h->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Xc,$We,$z,$E,$Df);$h->next=0;return$J;}function
delete($Q,$Mf,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$Mf,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Mf,$z=0,$ug="\n"){$Mb=array();$wd=array();$s=0;$ld=$this->_extractIds($Q,$Mf,$z);$jd=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($jd!=""&&array($jd)!=$ld))$Mb["Attribute.".count($Mb).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$Gd=>$W){$wd["Attribute.$s.Name"]=$x;$wd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Gd)$wd["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$Q);return(!$wd||$this->_chunkRequest(($jd!=""?array($jd):$ld),'BatchPutAttributes',$F,$wd))&&(!$Mb||$this->_chunkRequest($ld,'BatchDeleteAttributes',$F,$Mb));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$Bf){foreach($L
as$O){if(!$this->update($Q,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Fc){return
preg_match('~sql~',$Fc);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$nb){}function
tables_list(){global$h;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Ec=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Ec){$qe=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($qe){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$qe->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
explain($h,$H){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){return
fields_from_edit();}function
foreign_keys($Q){return
array();}function
table($t){return
idf_escape($t);}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
limit($H,$Z,$z,$D=0,$ug=" "){return" $H$Z".($z!==null?$ug."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$nf){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($Ba,$Eb,$x,$Qf=false){$Ua=64;if(strlen($x)>$Ua)$x=pack("H*",$Ba($x));$x=str_pad($x,$Ua,"\0");$Hd=$x^str_repeat("\x36",$Ua);$Id=$x^str_repeat("\x5C",$Ua);$J=$Ba($Id.pack("H*",$Ba($Hd.$Eb)));if($Qf)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$h;list($hd,$F['AWSAccessKeyId'],$qg)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$hd)."\n/\n$H",$qg,true)));@ini_set('track_errors',1);$Hc=@file_get_contents((preg_match('~^https?://~',$hd)?$hd:"http://$hd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Hc){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$ei=simplexml_load_string($Hc);if(!$ei){$n=libxml_get_last_error();$h->error=$n->message;return
false;}if($ei->Errors){$n=$ei->Errors->Error;$h->error="$n->Message ($n->Code)";return
false;}$h->error='';$ah=$va."Result";return($ei->$ah?$ei->$ah:true);}function
sdb_request_all($va,$ah,$F=array(),$jh=0){$J=array();$Hg=($jh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$ei=sdb_request($va,$F);if(!$ei)break;foreach($ei->$ah
as$ic)$J[]=$ic;if($z&&count($J)>=$z){$_GET["next"]=$ei->NextToken;break;}if($jh&&microtime(true)-$Hg>$jh)return
false;$F['NextToken']=$ei->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($ei->NextToken);return$J;}$w="simpledb";$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Uc=array();$Zc=array("count");$fc=array(array("json"));}$Xb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$zf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$Ue=array();if($V!=""){$Ue["username"]=$V;$Ue["password"]=$G;}if($m!="")$Ue["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$Ue);return
true;}catch(Exception$uc){$this->error=$uc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Gb){try{$this->_db=$this->_link->selectDB($Gb);return
true;}catch(Exception$uc){$this->error=$uc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Ed){$K=array();foreach($Ed
as$x=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$x]=63;$K[$x]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Kd=array_keys($this->_rows[0]);$C=$Kd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Bf="_id";function
select($Q,$M,$Z,$Xc,$We=array(),$z=1,$E=0,$Df=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Cg=array();foreach($We
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Ab);$Cg[$X]=($Ab?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($Cg)->limit(+$z)->skip($E*$z));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$uc){$this->_conn->error=$uc->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases($Lc){global$h;$J=array();$Jb=$h->_link->listDBs();foreach($Jb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$nb){}function
count_tables($l){global$h;$J=array();foreach($l
as$m)$J[$m]=count($h->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($C="",$Ec=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_view($R){}function
drop_databases($l){global$h;foreach($l
as$m){$bg=$h->_link->selectDB($m)->drop();if(!$bg['ok'])return
false;}return
true;}function
indexes($Q,$i=null){global$h;$J=array();foreach($h->_db->selectCollection($Q)->getIndexInfo()as$u){$Pb=array();foreach($u["key"]as$e=>$U)$Pb[]=($U==-1?'1':null);$J[$u["name"]]=array("type"=>($u["name"]=="_id_"?"PRIMARY":($u["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($u["key"]),"lengths"=>array(),"descs"=>$Pb,);}return$J;}function
fields($Q){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$nf){global$h;if($Q==""){$h->_db->createCollection($C);return
true;}}function
drop_tables($S){global$h;foreach($S
as$Q){$bg=$h->_db->selectCollection($Q)->drop();if(!$bg['ok'])return
false;}return
true;}function
truncate_tables($S){global$h;foreach($S
as$Q){$bg=$h->_db->selectCollection($Q)->remove();if(!$bg['ok'])return
false;}return
true;}function
alter_indexes($Q,$c){global$h;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$h->_db->command(array("deleteIndexes"=>$Q,"index"=>$C));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$Ab);$f[$e]=($Ab?-1:1);}$J=$h->_db->selectCollection($Q)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$h->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$h;return$h->last_id;}function
table($t){return$t;}function
idf_escape($t){return$t;}function
support($Fc){return
preg_match("~database|indexes~",$Fc);}$w="mongo";$Re=array("=");$Uc=array();$Zc=array();$fc=array(array("json"));}$Xb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$zf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($qf,$wb=array(),$re='GET'){@ini_set('track_errors',1);$Hc=@file_get_contents($this->_url.'/'.ltrim($qf,'/'),false,stream_context_create(array('http'=>array('method'=>$re,'content'=>json_encode($wb),'ignore_errors'=>1,))));if(!$Hc){$this->error=$php_errormsg;return$Hc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Hc;return
false;}$J=json_decode($Hc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$vb=get_defined_constants(true);foreach($vb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($qf,$wb=array(),$re='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($qf,'/'),$wb,$re);}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Gb){$this->_db=$Gb;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Xc,$We=array(),$z=1,$E=0,$Df=false){global$b;$Eb=array();$H="$Q/_search";if($M!=array("*"))$Eb["fields"]=$M;if($We){$Cg=array();foreach($We
as$lb){$lb=preg_replace('~ DESC$~','',$lb,1,$Ab);$Cg[]=($Ab?array($lb=>"desc"):$lb);}$Eb["sort"]=$Cg;}if($z){$Eb["size"]=+$z;if($E)$Eb["from"]=($E*$z);}foreach($Z
as$X){list($lb,$Pe,$X)=explode(" ",$X,3);if($lb=="_id")$Eb["query"]["ids"]["values"][]=$X;elseif($lb.$X!=""){$eh=array("term"=>array(($lb!=""?$lb:"_all")=>$X));if($Pe=="=")$Eb["query"]["filtered"]["filter"]["and"][]=$eh;else$Eb["query"]["filtered"]["query"]["bool"]["must"][]=$eh;}}if($Eb["query"]&&!$Eb["query"]["filtered"]["query"]&&!$Eb["query"]["ids"])$Eb["query"]["filtered"]["query"]=array("match_all"=>array());$Hg=microtime(true);$pg=$this->_conn->query($H,$Eb);if($Df)echo$b->selectQuery("$H: ".print_r($Eb,true),format_time($Hg));if(!$pg)return
false;$J=array();foreach($pg['hits']['hits']as$gd){$K=array();if($M==array("*"))$K["_id"]=$gd["_id"];$p=$gd['_source'];if($M!=array("*")){$p=array();foreach($M
as$x)$p[$x]=$gd['fields'][$x];}foreach($p
as$x=>$X){if($Eb["fields"])$X=$X[0];$K[$x]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
support($Fc){return
preg_match("~database|table|columns~",$Fc);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases(){global$h;$J=$h->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$nb){}function
engines(){return
array();}function
count_tables($l){global$h;$J=$h->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$h;$J=$h->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$h->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Ec=false){global$h;$pg=$h->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($pg){foreach($pg["facets"]["count_by_type"]["terms"]as$Q)$J[$Q["term"]]=array("Name"=>$Q["term"],"Engine"=>"table","Rows"=>$Q["count"],);if($C!=""&&$C==$Q["term"])return$J[$C];}return$J;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$h;$I=$h->query("$Q/_mapping");$J=array();if($I){$be=$I[$Q]['properties'];if(!$be)$be=$I[$h->_db]['mappings'][$Q]['properties'];if($be){foreach($be
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($Q){return
array();}function
table($t){return$t;}function
idf_escape($t){return$t;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($m){global$h;return$h->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$h;return$h->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($S){global$h;$J=true;foreach($S
as$Q)$J=$J&&$h->query(urlencode($Q),array(),'DELETE');return$J;}$w="elastic";$Re=array("=","query");$Uc=array();$Zc=array();$fc=array(array("json"));}$Xb=array("server"=>"MySQL")+$Xb;if(!defined("DRIVER")){$zf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$Gb=null,$vf=null,$Bg=null){mysqli_report(MYSQLI_REPORT_OFF);list($hd,$vf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$hd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$Gb,(is_numeric($vf)?$vf:ini_get("mysqli.default_port")),(!is_numeric($vf)?$vf:$Bg));return$J;}function
set_charset($ab){if(parent::set_charset($ab))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $ab");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($ab){if(function_exists('mysql_set_charset')){if(mysql_set_charset($ab,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $ab");}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Gb){return
mysql_select_db($Gb,$this->_link);}function
query($H,$Ch=false){$I=@($Ch?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($ab){$this->query("SET NAMES $ab");}function
select_db($Gb){return$this->query("USE ".idf_escape($Gb));}function
query($H,$Ch=false){$this->setAttribute(1000,!$Ch);return
parent::query($H,$Ch);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$Bf){$f=array_keys(reset($L));$_f="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Th=array();foreach($f
as$x)$Th[$x]="$x = VALUES($x)";$Og="\nON DUPLICATE KEY UPDATE ".implode(", ",$Th);$Th=array();$y=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Th&&(strlen($_f)+$y+strlen($Y)+strlen($Og)>1e6)){if(!queries($_f.implode(",\n",$Th).$Og))return
false;$Th=array();$y=0;}$Th[]=$Y;$y+=strlen($Y)+2;}return
queries($_f.implode(",\n",$Th).$Og);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2])){$h->set_charset(charset($h));$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$J=$h->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($lg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$lg;return$J;}function
get_databases($Lc){global$h;$J=get_session("dbs");if($J===null){$H=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Lc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$ug=" "){return" $H$Z".($z!==null?$ug."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$nb){global$h;$J=null;$j=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$j,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$j,$B))$J=$nb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Ec=false){global$h;$J=array();foreach(get_rows($Ec&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){global$h;return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"])||(preg_match('~NDB~i',$R["Engine"])&&version_compare($h->server_info,'5.6')>=0);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$i)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$h,$Me;static$sf='`(?:[^`]|``)+`';$J=array();$Bb=$h->result("SHOW CREATE TABLE ".table($Q),1);if($Bb){preg_match_all("~CONSTRAINT ($sf) FOREIGN KEY ?\\(((?:$sf,? ?)+)\\) REFERENCES ($sf)(?:\\.($sf))? \\(((?:$sf,? ?)+)\\)(?: ON DELETE ($Me))?(?: ON UPDATE ($Me))?~",$Bb,$de,PREG_SET_ORDER);foreach($de
as$B){preg_match_all("~$sf~",$B[2],$Dg);preg_match_all("~$sf~",$B[5],$bh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Dg[0]),"target"=>array_map('idf_unescape',$bh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($m){global$h;return($h->server_info>=5&&$m=="information_schema")||($h->server_info>=5.5&&$m=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$d){$J=false;if(create_database($C,$d)){$Zf=array();foreach(tables_list()as$Q=>$U)$Zf[]=table($Q)." TO ".idf_escape($C).".".table($Q);$J=(!$Zf||queries("RENAME TABLE ".implode(", ",$Zf)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$Ma="";break;}if($u["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$nf){$c=array();foreach($p
as$o)$c[]=($o[1]?($Q!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($Q!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Mc);$Ig=($rb!==null?" COMMENT=".q($rb):"").($nc?" ENGINE=".q($nc):"").($d?" COLLATE ".q($d):"").($La!=""?" AUTO_INCREMENT=$La":"");if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$Ig$nf");if($Q!=$C)$c[]="RENAME TO ".table($C);if($Ig)$c[]=ltrim($Ig);return($c||$nf?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c).$nf):true);}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Yh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Yh,$bh){$Zf=array();foreach(array_merge($S,$Yh)as$Q)$Zf[]=table($Q)." TO ".idf_escape($bh).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Zf));}function
copy_tables($S,$Yh,$bh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($bh==DB?table("copy_$Q"):idf_escape($bh).".".table($Q));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Yh
as$Q){$C=($bh==DB?table("copy_$Q"):idf_escape($bh).".".table($Q));$Xh=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Xh[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$h,$pc,$ud,$Bh;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ah="((".implode("|",array_merge(array_keys($Bh),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$pc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$sf="\\s*(".($U=="FUNCTION"?"":$ud).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ah";$j=$h->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$sf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Ah\\s+":"")."(.*)~is",$j,$B);$p=array();preg_match_all("~$sf\\s*,?~is",$B[1],$de,PREG_SET_ORDER);foreach($de
as$if){$C=str_replace("``","`",$if[2]).$if[3];$p[]=array("field"=>$C,"type"=>strtolower($if[5]),"length"=>preg_replace_callback("~$pc~s",'normalize_enum',$if[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$if[8] $if[7]"))),"null"=>1,"full_type"=>$if[4],"inout"=>strtoupper($if[1]),"collation"=>strtolower($if[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$H){return$h->query("EXPLAIN ".($h->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ng){return
true;}function
create_sql($Q,$La){global$h;$J=$h->result("SHOW CREATE TABLE ".table($Q),1);if(!$La)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Gb){return"USE ".idf_escape($Gb);}function
trigger_sql($Q,$Mg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Mg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Fc){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$Fc);}$w="sql";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(25)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(26)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array("unsigned","zerofill","unsigned zerofill");$Re=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Uc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Zc=array("avg","count","count distinct","group_concat","max","min","sum");$fc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.2.4";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($j=false){return
password_file($j);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Lc=true){return
get_databases($Lc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Xb;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$Xb,DRIVER,"loginDriver(this);"),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($Zd,$G){return
true;}function
tableName($Sg){return
h($Sg["Name"]);}function
fieldName($o,$We=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Sg,$O=""){echo'<p class="links">';$Yd=array("select"=>lang(38));if(support("table")||support("indexes"))$Yd["table"]=lang(39);if(support("table")){if(is_view($Sg))$Yd["view"]=lang(40);else$Yd["create"]=lang(41);}if($O!==null)$Yd["edit"]=lang(42);foreach($Yd
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Sg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Rg){return
array();}function
backwardKeysPrint($Oa,$K){}function
selectQuery($H,$ih){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($ih)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Nc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$df){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J=lang(43,strlen($df));return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
selectColumnsPrint($M,$f){global$Uc,$Zc;print_fieldset("select",lang(44),$M);$s=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$e=select_input(" name='columns[$s][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Uc||$Zc?"<select name='columns[$s][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(45)=>$Uc,lang(46)=>$Zc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$v){print_fieldset("search",lang(47),$Z);foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Za'",$f,$X["col"],"(".lang(48).")"),html_select("where[$s][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($We,$f,$v){print_fieldset("sort",lang(49),$We);$s=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$x]),lang(50))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$f),checkbox("desc[$s]",1,false,lang(50))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(51)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($hh){if($hh!==null){echo"<fieldset><legend>".lang(52)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($hh)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".lang(53)."</legend><div>","<input type='submit' value='".lang(44)."'>"," <span id='noindex' title='".lang(54)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($kc,$f){}function
selectColumnsProcess($f,$v){global$Uc,$Zc;$M=array();$Xc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Uc)||in_array($X["fun"],$Zc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Zc))$Xc[]=$M[$x];}}return
array($M,$Xc);}function
selectSearchProcess($p,$v){global$h,$w;$J=array();foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$tb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$nd=process_length($X["val"]);$tb.=" ".($nd!=""?$nd:"(NULL)");}elseif($X["op"]=="SQL")$tb=" $X[val]";elseif($X["op"]=="LIKE %%")$tb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$tb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$tb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$tb;else{$ob=array();foreach($p
as$C=>$o){$Cd=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Cd)){$C=idf_escape($C);$ob[]=($w=="sql"&&$Cd&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($h).")":$C);}}$J[]=($ob?"(".implode("$tb OR ",$ob)."$tb)":"0");}}}return$J;}function
selectOrderProcess($p,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Nc){return
false;}function
selectQueryBuild($M,$Z,$Xc,$We,$z,$E){return"";}function
messageQuery($H,$ih){global$w;restart_session();$ed=&get_session("queries");$jd="sql-".count($ed[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$ed[$_GET["db"]][]=array($H,time(),$ih);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$jd' onclick=\"return !toggle('$jd');\">".lang(55)."</a>"."<div id='$jd' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.($ih?" <span class='time'>($ih)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ed[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$fc;$J=($o["null"]?"NULL/":"");foreach($fc
as$x=>$Uc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Uc
as$sf=>$X){if(!$sf||preg_match("~$sf~",$o["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(56);return
explode("/",$J);}function
editInput($Q,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(57),'file'=>lang(58));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($Q,$Mg,$Dd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Mg)dump_csv(array_keys(fields($Q)));}else{if($Dd==2){$p=array();foreach(fields($Q)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$j="CREATE TABLE ".table($Q)." (".implode(", ",$p).")";}else$j=create_sql($Q,$_POST["auto_increment"]);set_utf8mb4($j);if($Mg&&$j){if($Mg=="DROP+CREATE"||$Dd==1)echo"DROP ".($Dd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($Dd==1)$j=remove_definer($j);echo"$j;\n\n";}}}function
dumpData($Q,$Mg,$H){global$h,$w;$fe=($w=="sqlite"?0:1048576);if($Mg){if($_POST["format"]=="sql"){if($Mg=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$p=fields($Q);}$I=$h->query($H,1);if($I){$wd="";$Xa="";$Kd=array();$Og="";$Gc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Gc()){if(!$Kd){$Th=array();foreach($K
as$X){$o=$I->fetch_field();$Kd[]=$o->name;$x=idf_escape($o->name);$Th[]="$x = VALUES($x)";}$Og=($Mg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Th):"").";\n";}if($_POST["format"]!="sql"){if($Mg=="table"){dump_csv($Kd);$Mg="INSERT";}dump_csv($K);}else{if(!$wd)$wd="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Kd)).") VALUES";foreach($K
as$x=>$X){$o=$p[$x];$K[$x]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$lg=($fe?"\n":" ")."(".implode(",\t",$K).")";if(!$Xa)$Xa=$wd.$lg;elseif(strlen($Xa)+4+strlen($lg)+strlen($Og)<$fe)$Xa.=",$lg";else{echo$Xa.$Og;$Xa=$wd.$lg;}}}if($Xa)echo$Xa.$Og;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$h->error)."\n";}}function
dumpFilename($kd){return
friendly_url($kd!=""?$kd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($kd,$ue=false){$gf=$_POST["output"];$Ac=(preg_match('~sql~',$_POST["format"])?"sql":($ue?"tar":"csv"));header("Content-Type: ".($gf=="gz"?"application/x-gzip":($Ac=="tar"?"application/x-tar":($Ac=="sql"||$gf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($gf=="gz")ob_start('ob_gzencode',1e6);return$Ac;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(59)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(60):lang(61))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(62)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(63)."</a>\n":"");return
true;}function
navigation($te){global$ia,$w,$Xb,$h;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($te=="auth"){$Kc=true;foreach((array)$_SESSION["pwds"]as$Vh=>$yg){foreach($yg
as$N=>$Qh){foreach($Qh
as$V=>$G){if($G!==null){if($Kc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Kc=false;}$Jb=$_SESSION["db"][$Vh][$N][$V];foreach(($Jb?array_keys($Jb):array(""))as$m)echo"<a href='".h(auth_url($Vh,$N,$V,$m))."'>($Xb[$Vh]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$te&&DB!=""){$h->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.2.4",'"></script>
<script type="text/javascript">
';if($S){$Yd=array();foreach($S
as$Q=>$U)$Yd[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Yd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($te);if(DB==""||!$te){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(55)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(64)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(65)."</a>\n";}if($_GET["ns"]!==""&&!$te&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(66)."</a>\n";if(!$S)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($te){global$b,$h;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Hb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(67)."'>DB</span>: ".($l?"<select name='db'$Hb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($te!="db"&&DB!=""&&$h->select_db(DB)){if(support("scheme")){echo"<br>".lang(68).": <select name='ns'$Hb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$Ig){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select").">".lang(69)."</a> ";$C=$this->tableName($Ig);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($Ig)?"view":""),"structure")." title='".lang(39)."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Re;function
page_header($lh,$n="",$Wa=array(),$mh=""){global$ca,$ia,$b,$Xb,$w;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$nh=$lh.($mh!=""?": $mh":"");$oh=strip_tags($nh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(70),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$oh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.4",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.4",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.4",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.4",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(70),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(71)),'\';
</script>

<div id="help" class="jush-',$w,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Wa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Xb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Wa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$x=>$X){$Ob=(is_array($X)?$X[1]:h($X));if($Ob!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Ob</a> &raquo; ";}}echo"$lh\n";}}echo"<h2>$nh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Kh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$pe=$_SESSION["messages"][$Kh];if($pe){echo"<div class='message'>".implode("</div>\n<div class='message'>",$pe)."</div>\n";unset($_SESSION["messages"][$Kh]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($te=""){global$b,$T;echo'</div>

';switch_lang();if($te!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(72),'" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($te);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($we){while($we>=2147483648)$we-=4294967296;while($we<=-2147483649)$we+=4294967296;return(int)$we;}function
long2str($W,$ai){$lg='';foreach($W
as$X)$lg.=pack('V',$X);if($ai)return
substr($lg,0,end($W));return$lg;}function
str2long($lg,$ai){$W=array_values(unpack('V*',str_pad($lg,4*ceil(strlen($lg)/4),"\0")));if($ai)$W[]=strlen($lg);return$W;}function
xxtea_mx($gi,$fi,$Pg,$Gd){return
int32((($gi>>5&0x7FFFFFF)^$fi<<2)+(($fi>>3&0x1FFFFFFF)^$gi<<4))^int32(($Pg^$fi)+($Gd^$gi));}function
encrypt_string($Kg,$x){if($Kg=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Kg,true);$we=count($W)-1;$gi=$W[$we];$fi=$W[0];$Kf=floor(6+52/($we+1));$Pg=0;while($Kf-->0){$Pg=int32($Pg+0x9E3779B9);$ec=$Pg>>2&3;for($hf=0;$hf<$we;$hf++){$fi=$W[$hf+1];$ve=xxtea_mx($gi,$fi,$Pg,$x[$hf&3^$ec]);$gi=int32($W[$hf]+$ve);$W[$hf]=$gi;}$fi=$W[0];$ve=xxtea_mx($gi,$fi,$Pg,$x[$hf&3^$ec]);$gi=int32($W[$we]+$ve);$W[$we]=$gi;}return
long2str($W,false);}function
decrypt_string($Kg,$x){if($Kg=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Kg,false);$we=count($W)-1;$gi=$W[$we];$fi=$W[0];$Kf=floor(6+52/($we+1));$Pg=int32($Kf*0x9E3779B9);while($Pg){$ec=$Pg>>2&3;for($hf=$we;$hf>0;$hf--){$gi=$W[$hf-1];$ve=xxtea_mx($gi,$fi,$Pg,$x[$hf&3^$ec]);$fi=int32($W[$hf]-$ve);$W[$hf]=$fi;}$gi=$W[$we];$ve=xxtea_mx($gi,$fi,$Pg,$x[$hf&3^$ec]);$fi=int32($W[0]-$ve);$W[0]=$fi;$Pg=int32($Pg-0x9E3779B9);}return
long2str($W,true);}$h='';$dd=$_SESSION["token"];if(!$dd)$_SESSION["token"]=rand(1,1e6);$T=get_token();$tf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$tf[$x]=$X;}}function
add_invalid_login(){global$b;$Ic=get_temp_dir()."/adminer.invalid";$Sc=@fopen($Ic,"r+");if(!$Sc){$Sc=@fopen($Ic,"w");if(!$Sc)return;}flock($Sc,LOCK_EX);$zd=unserialize(stream_get_contents($Sc));$ih=time();if($zd){foreach($zd
as$_d=>$X){if($X[0]<$ih)unset($zd[$_d]);}}$yd=&$zd[$b->bruteForceKey()];if(!$yd)$yd=array($ih+30*60,0);$yd[1]++;$wg=serialize($zd);rewind($Sc);fwrite($Sc,$wg);ftruncate($Sc,strlen($wg));flock($Sc,LOCK_UN);fclose($Sc);}$Ka=$_POST["auth"];if($Ka){$zd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$yd=$zd[$b->bruteForceKey()];$Be=($yd[1]>30?$yd[0]-time():0);if($Be>0)auth_error(lang(73,ceil($Be/60)));session_regenerate_id();$Vh=$Ka["driver"];$N=$Ka["server"];$V=$Ka["username"];$G=(string)$Ka["password"];$m=$Ka["db"];set_password($Vh,$N,$V,$G);$_SESSION["db"][$Vh][$N][$V][$m]=true;if($Ka["permanent"]){$x=base64_encode($Vh)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Ef=$b->permanentLogin(true);$tf[$x]="$x:".base64_encode($Ef?encrypt_string($G,$Ef):"");cookie("adminer_permanent",implode(" ",$tf));}if(count($_POST)==1||DRIVER!=$Vh||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($Vh,$N,$V,$m));}elseif($_POST["logout"]){if($dd&&!verify_token()){page_header(lang(72),lang(74));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(75));}}elseif($tf&&!$_SESSION["pwds"]){session_regenerate_id();$Ef=$b->permanentLogin();foreach($tf
as$x=>$X){list(,$hb)=explode(":",$X);list($Vh,$N,$V,$m)=array_map('base64_decode',explode("-",$x));set_password($Vh,$N,$V,decrypt_string(base64_decode($hb),$Ef));$_SESSION["db"][$Vh][$N][$V][$m]=true;}}function
unset_permanent(){global$tf;foreach($tf
as$x=>$X){list($Vh,$N,$V,$m)=array_map('base64_decode',explode("-",$x));if($Vh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($tf[$x]);}cookie("adminer_permanent",implode(" ",$tf));}function
auth_error($n){global$b,$dd;$n=h($n);$zg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$zg]||$_GET[$zg])&&!$dd)$n=lang(76);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(77,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$zg]&&$_GET[$zg]&&ini_bool("session.use_only_cookies"))$n=lang(78);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(79),lang(80,implode(", ",$zf)),false);page_footer("auth");exit;}$h=connect();}$Wb=new
Min_Driver($h);if(!is_object($h)||!$b->login($_GET["username"],get_password()))auth_error((is_string($h)?$h:lang(81)));if($Ka&&$_POST["token"])$_POST["token"]=$T;$n='';if($_POST){if(!verify_token()){$td="max_input_vars";$je=ini_get($td);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$je||$X<$je)){$td=$x;$je=$X;}}}$n=(!$_POST["token"]&&$je?lang(82,"'$td'"):lang(74).' '.lang(83));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(84,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(85);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$i=null,$Ze=array(),$z=0){global$w;$Yd=array();$v=array();$f=array();$Ta=array();$Bh=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Fd=0;$Fd<count($K);$Fd++){$o=$I->fetch_field();$C=$o->name;$Ye=$o->orgtable;$Xe=$o->orgname;$J[$o->table]=$Ye;if($Ze&&$w=="sql")$Yd[$Fd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Ye!=""){if(!isset($v[$Ye])){$v[$Ye]=array();foreach(indexes($Ye,$i)as$u){if($u["type"]=="PRIMARY"){$v[$Ye]=array_flip($u["columns"]);break;}}$f[$Ye]=$v[$Ye];}if(isset($f[$Ye][$Xe])){unset($f[$Ye][$Xe]);$v[$Ye][$Xe]=$Fd;$Yd[$Fd]=$Ye;}}if($o->charsetnr==63)$Ta[$Fd]=true;$Bh[$Fd]=$o->type;echo"<th".($Ye!=""||$o->name!=$Xe?" title='".h(($Ye!=""?"$Ye.":"").$Xe)."'":"").">".h($C).($Ze?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$x]&&!is_utf8($X))$X="<i>".lang(43,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Bh[$x]==254)$X="<code>$X</code>";}if(isset($Yd[$x])&&!$f[$Yd[$x]]){if($Ze&&$w=="sql"){$Q=$K[array_search("table=",$Yd)];$_=$Yd[$x].urlencode($Ze[$Q]!=""?$Ze[$Q]:$Q);}else{$_="edit=".urlencode($Yd[$x]);foreach($v[$Yd[$x]]as$lb=>$Fd)$_.="&where".urlencode("[".bracket_escape($lb)."]")."=".urlencode($K[$Fd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($tg){$J=array();foreach(table_status('',true)as$Tg=>$Q){if($Tg!=$tg&&fk_support($Q)){foreach(fields($Tg)as$o){if($o["primary"]){if($J[$Tg]){unset($J[$Tg]);break;}$J[$Tg]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$ob=80){global$w;echo"<textarea name='$C' rows='$L' cols='$ob' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$o,$nb,$Oc=array()){global$Lg,$Bh,$Ih,$Me;$U=$o["type"];echo'<td><select name="',h($x),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($Bh[$U])&&!isset($Oc[$U]))array_unshift($Lg,$U);if($Oc)$Lg[lang(86)]=$Oc;echo
optionlist($Lg,$U),'</select>
<td><input name="',h($x),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='".h($x)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(87).')'.optionlist($nb,$o["collation"]).'</select>',($Ih?"<select name='".h($x)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Ih,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($x)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(88).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Oc?"<select name='".h($x)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(89).")".optionlist(explode("|",$Me),$o["on_delete"])."</select> ":" ");}function
process_length($y){global$pc;return(preg_match("~^\\s*\\(?\\s*$pc(?:\\s*,\\s*$pc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$pc~",$y,$de)?"(".implode(",",$de[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type($o,$mb="COLLATE"){global$Ih;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Ih)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $mb ".q($o["collation"]):"");}function
process_field($o,$_h){global$w;$Lb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($_h),($o["null"]?" NULL":" NOT NULL"),(isset($Lb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Lb))||($w=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Lb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Lb))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Lb))?$Lb:q($Lb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($p,$nb,$U="TABLE",$Oc=array(),$sb=false){global$h,$ud;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?lang(90):lang(91)),'<td>',lang(92),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(93),'<td>',lang(94);if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(56),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>',lang(95),(support("comment")?"<td".($sb?"":" class='hidden'").">".lang(96):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.4' alt='+' title='".lang(97)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$af=$o[($_POST?"orig":"field")];$Sb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$af=="");echo'<tr',($Sb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$ud),$o["inout"]):""),'<th>';if($Sb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($af),'">
';edit_type("fields[$s]",$o,$nb,$Oc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"]),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($sb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($h->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.4' alt='+' title='".lang(97)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.2.4' alt='^' title='".lang(98)."'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.2.4' alt='v' title='".lang(99)."'>&nbsp;":""),($af==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.4' alt='x' title='".lang(100)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){ksort($p);$D=0;if($_POST["up"]){$Qd=0;foreach($p
as$x=>$o){if(key($_POST["up"])==$x){unset($p[$x]);array_splice($p,$Qd,0,array($o));break;}if(isset($o["field"]))$Qd=$D;$D++;}}elseif($_POST["down"]){$Qc=false;foreach($p
as$x=>$o){if(isset($o["field"])&&$Qc){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($Qc));break;}if(key($_POST["down"])==$x)$Qc=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Vc,$Gf,$f,$Le){if(!$Gf)return
true;if($Gf==array("ALL PRIVILEGES","GRANT OPTION"))return($Vc=="GRANT"?queries("$Vc ALL PRIVILEGES$Le WITH GRANT OPTION"):queries("$Vc ALL PRIVILEGES$Le")&&queries("$Vc GRANT OPTION$Le"));return
queries("$Vc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Gf).$f).$Le);}function
drop_create($Yb,$j,$Zb,$fh,$bc,$A,$oe,$me,$ne,$Ie,$ze){if($_POST["drop"])query_redirect($Yb,$A,$oe);elseif($Ie=="")query_redirect($j,$A,$ne);elseif($Ie!=$ze){$Cb=queries($j);queries_redirect($A,$me,$Cb&&queries($Yb));if($Cb)queries($Zb);}else
queries_redirect($A,$me,queries($fh)&&queries($bc)&&queries($Yb)&&queries($j));}function
create_trigger($Le,$K){global$w;$kh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$Le.$kh:$kh.$Le).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($hg,$K){global$ud;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($ud)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $hg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$Me;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Me)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Me)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Ic,$ph){$J=pack("a100a8a8a8a12a12",$Ic,644,0,0,decoct($ph->size),decoct(time()));$fb=8*32;for($s=0;$s<strlen($J);$s++)$fb+=ord($J[$s]);$J.=sprintf("%06o",$fb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$ph->send();echo
str_repeat("\0",511-($ph->size+511)%512);}function
ini_bytes($td){$X=ini_get($td);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($rf){global$w,$h;$Mh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($h->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($rf[$w]?"<a href='$Mh[$w]$rf[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($m){global$h;if(!$h->select_db($m))return"?";$J=0;foreach(table_status()as$R)$J+=$R["Data_length"]+$R["Index_length"];return
format_number($J);}function
set_utf8mb4($j){global$h;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$j)){$O=true;echo"SET NAMES ".charset($h).";\n\n";}}function
connect_error(){global$b,$h,$T,$n,$Xb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(101),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(102),drop_databases($_POST["db"]));page_header(lang(103),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(104),'privileges'=>lang(63),'processlist'=>lang(105),'variables'=>lang(106),'status'=>lang(107),)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".lang(108,$Xb[DRIVER],"<b>".h($h->server_info)."</b>","<b>$h->extension</b>")."\n","<p>".lang(109,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$og=support("scheme");$nb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(110)."</a>"."<td>".lang(111)."<td>".lang(112)."<td>".lang(113)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(114)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$S){$gg=h(ME)."db=".urlencode($m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"])):""),"<th><a href='$gg'>".h($m)."</a>";$d=nbsp(db_collation($m,$nb));echo"<td>".(support("database")?"<a href='$gg".($og?"&amp;ns=":"")."&amp;database=' title='".lang(59)."'>$d</a>":$d),"<td align='right'><a href='$gg&amp;schema=' id='tables-".h($m)."' title='".lang(62)."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(115)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$h->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(68).": ".h($_GET["ns"]),lang(117),true);page_footer("ns");exit;}}$Me="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($xb){$this->size+=strlen($xb);fwrite($this->handler,$xb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$pc="'(?:''|[^'\\\\]|\\\\.)*'";$ud="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Wb->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$R=table_status1($a,true);page_header(($p&&is_view($R)?lang(118):lang(119)).": ".h($a),$n);$b->selectLinks($R);$rb=$R["Comment"];if($rb!="")echo"<p>".lang(96).": ".h($rb)."\n";if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(120)."<td>".lang(92).(support("comment")?"<td>".lang(96):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(56)."</i>":""),(isset($o["default"])?" <span title='".lang(95)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".lang(121)."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$C=>$u){ksort($u["columns"]);$Df=array();foreach($u["columns"]as$x=>$X)$Df[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'><th>$u[type]<td>".implode(", ",$Df)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(122)."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".lang(86)."</h3>\n";$Oc=foreign_keys($a);if($Oc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(123)."<td>".lang(124)."<td>".lang(89)."<td>".lang(88)."<td>&nbsp;</thead>\n";foreach($Oc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(125).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(126)."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(127)."</h3>\n";$zh=triggers($a);if($zh){echo"<table cellspacing='0'>\n";foreach($zh
as$x=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".lang(125)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(128)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(62),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Vg=array();$Wg=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$de,PREG_SET_ORDER);foreach($de
as$s=>$B){$Vg[$B[1]]=array($B[2],$B[3]);$Wg[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$rh=0;$Qa=-1;$ng=array();$Vf=array();$Ud=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$wf=0;$ng[$Q]["fields"]=array();foreach(fields($Q)as$C=>$o){$wf+=1.25;$o["pos"]=$wf;$ng[$Q]["fields"][$C]=$o;}$ng[$Q]["pos"]=($Vg[$Q]?$Vg[$Q]:array($rh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Sd=$Qa;if($Vg[$Q][1]||$Vg[$X["table"]][1])$Sd=min(floatval($Vg[$Q][1]),floatval($Vg[$X["table"]][1]))-1;else$Qa-=.1;while($Ud[(string)$Sd])$Sd-=.0001;$ng[$Q]["references"][$X["table"]][(string)$Sd]=array($X["source"],$X["target"]);$Vf[$X["table"]][$Q][(string)$Sd]=$X["target"];$Ud[(string)$Sd]=true;}}$rh=max($rh,$ng[$Q]["pos"][0]+2.5+$wf);}echo'<div id="schema" style="height: ',$rh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Wg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$rh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($ng
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$ch=>$Wf){foreach($Wf
as$Sd=>$Sf){$Td=$Sd-$Vg[$C][1];$s=0;foreach($Sf[0]as$Dg)echo"\n<div class='references' title='".h($ch)."' id='refs$Sd-".($s++)."' style='left: $Td"."em; top: ".$Q["fields"][$Dg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Td)."em;'></div></div>";}}foreach((array)$Vf[$C]as$ch=>$Wf){foreach($Wf
as$Sd=>$f){$Td=$Sd-$Vg[$C][1];$s=0;foreach($f
as$bh)echo"\n<div class='references' title='".h($ch)."' id='refd$Sd-".($s++)."' style='left: $Td"."em; top: ".$Q["fields"][$bh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.2.4'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Td)."em;'></div></div>";}}echo"\n</div>\n";}foreach($ng
as$C=>$Q){foreach((array)$Q["references"]as$ch=>$Wf){foreach($Wf
as$Sd=>$Sf){$se=$rh;$he=-10;foreach($Sf[0]as$x=>$Dg){$xf=$Q["pos"][0]+$Q["fields"][$Dg]["pos"];$yf=$ng[$ch]["pos"][0]+$ng[$ch]["fields"][$Sf[1][$x]]["pos"];$se=min($se,$xf,$yf);$he=max($he,$xf,$yf);}echo"<div class='references' id='refl$Sd' style='left: $Sd"."em; top: $se"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($he-$se)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(129),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$_b="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$_b.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($_b,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Ac=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$Bd=preg_match('~sql~',$_POST["format"]);if($Bd){echo"-- Adminer $ia ".$Xb[DRIVER]." dump\n\n";if($w=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$h->query("SET time_zone = '+00:00';");}}$Mg=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($h->select_db($m)){if($Bd&&preg_match('~CREATE~',$Mg)&&($j=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($j);if($Mg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$j;\n";}if($Bd){if($Mg)echo
use_sql($m).";\n\n";$ff="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$hg){foreach(get_rows("SHOW $hg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$j=remove_definer($h->result("SHOW CREATE $hg ".idf_escape($K["Name"]),2));set_utf8mb4($j);$ff.=($Mg!='DROP+CREATE'?"DROP $hg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$j;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$j=remove_definer($h->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($j);$ff.=($Mg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$j;;\n\n";}}if($ff)echo"DELIMITER ;;\n\n$ff"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Yh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Eb=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Eb){if($Ac=="tar"){$ph=new
TmpFile;ob_start(array($ph,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Yh[]=$C;elseif($Eb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Bd&&$_POST["triggers"]&&$Q&&($zh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$zh\nDELIMITER ;\n";if($Ac=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$ph);}elseif($Bd)echo"\n";}}foreach($Yh
as$Xh)$b->dumpTable($Xh,$_POST["table_style"],1);if($Ac=="tar")echo
pack("x512");}}}if($Bd)echo"-- ".$h->result("SELECT NOW()")."\n";exit;}page_header(lang(65),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ib=array('','USE','DROP+CREATE','CREATE');$Xg=array('','DROP+CREATE','CREATE');$Fb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$Fb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(130)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(131)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Ib,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(132)):"").(support("event")?checkbox("events",1,$K["events"],lang(133)):"")),"<tr><th>".lang(112)."<td>".html_select('table_style',$Xg,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(56)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(127)):""),"<tr><th>".lang(134)."<td>".html_select('data_style',$Fb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(65),'">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$Af=array();if(DB!=""){$db=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$db onclick='formCheck(this, /^tables\\[/);'>".lang(112)."</label>","<th style='text-align: right;'><label class='block'>".lang(134)."<input type='checkbox' id='check-data'$db onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Yh="";$Yg=tables_list();foreach($Yg
as$C=>$U){$_f=preg_replace('~_.*~','',$C);$db=($a==""||$a==(substr($a,-1)=="%"?"$_f%":$C));$Df="<tr><td>".checkbox("tables[]",$C,$db,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Yh.="$Df\n";else
echo"$Df<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$db,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Af[$_f]++;}echo$Yh;if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$_f=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$_f%",$m,"formUncheck('check-databases');","block")."\n";$Af[$_f]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Kc=true;foreach($Af
as$x=>$X){if($x!=""&&$X>1){echo($Kc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Kc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(63));$I=$h->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Vc=$I;if(!$I)$I=$h->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Vc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$Vc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.lang(135)."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$fd=&get_session("queries");$ed=&$fd[DB];if(!$n&&$_POST["clear"]){$ed=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(64):lang(55)),$n);if(!$n&&$_POST){$Sc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Sc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Sc?fread($Sc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Kf=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$ed||reset(end($ed))!=$Kf){restart_session();$ed[]=array($Kf,time());set_session("queries",$fd);stop_session();}}$Eg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\r?\n)";$Nb=";";$D=0;$mc=true;$i=connect();if(is_object($i)&&DB!="")$i->select_db(DB);$qb=0;$rc=array();$kf='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$sh=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$dc=$b->dumpFormat();unset($dc["sql"]);while($H!=""){if(!$D&&preg_match("~^$Eg*DELIMITER\\s+(\\S+)~i",$H,$B)){$Nb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Nb)."\\s*|$kf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Qc,$wf)=$B[0];if(!$Qc&&$Sc&&!feof($Sc))$H.=fread($Sc,1e5);else{if(!$Qc&&rtrim($H)=="")break;$D=$wf+strlen($Qc);if($Qc&&rtrim($Qc)!=$Nb){while(preg_match('('.($Qc=='/*'?'\\*/':($Qc=='['?']':(preg_match('~^-- |^#~',$Qc)?"\n":preg_quote($Qc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$lg=$B[0][0];if(!$lg&&$Sc&&!feof($Sc))$H.=fread($Sc,1e5);else{$D=$B[0][1]+strlen($lg);if($lg[0]!="\\")break;}}}else{$mc=false;$Kf=substr($H,0,$wf);$qb++;$Df="<pre id='sql-$qb'><code class='jush-$w'>".shorten_utf8(trim($Kf),1000)."</code></pre>\n";if($w=="sqlite"&&preg_match("~^$Eg*ATTACH\b~i",$Kf,$B)){echo$Df,"<p class='error'>".lang(136)."\n";$rc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Df;ob_flush();flush();}$Hg=microtime(true);if($h->multi_query($Kf)&&is_object($i)&&preg_match("~^$Eg*USE\\b~isU",$Kf))$i->query($Kf);do{$I=$h->store_result();$ih=" <span class='time'>(".format_time($Hg).")</span>".(strlen($Kf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Kf))."'>".lang(10)."</a>":"");if($h->error){echo($_POST["only_errors"]?$Df:""),"<p class='error'>".lang(137).($h->errno?" ($h->errno)":"").": ".error()."\n";$rc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$Ze=select($I,$i,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Ce=$I->num_rows;echo"<p>".($Ce?($z&&$Ce>$z?lang(138,$z):"").lang(139,$Ce):""),$ih;$jd="export-$qb";$_c=", <a href='#$jd' onclick=\"return !toggle('$jd');\">".lang(65)."</a><span id='$jd' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$dc,$xa["format"])."<input type='hidden' name='query' value='".h($Kf)."'>"." <input type='submit' name='export' value='".lang(65)."'><input type='hidden' name='token' value='$T'></span>\n";if($i&&preg_match("~^($Eg|\\()*SELECT\\b~isU",$Kf)&&($zc=explain($i,$Kf))){$jd="explain-$qb";echo", <a href='#$jd' onclick=\"return !toggle('$jd');\">EXPLAIN</a>$_c","<div id='$jd' class='hidden'>\n";select($zc,$i,$Ze);echo"</div>\n";}else
echo$_c;echo"</form>\n";}}else{if(preg_match("~^$Eg*(CREATE|DROP|ALTER)$Eg+(DATABASE|SCHEMA)\\b~isU",$Kf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($h->info)."'>".lang(140,$h->affected_rows)."$ih\n";}$Hg=microtime(true);}while($h->next_result());}$H=substr($H,$D);$D=0;}}}}if($mc)echo"<p class='message'>".lang(141)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(142,$qb-count($rc))," <span class='time'>(".format_time($sh).")</span>\n";}elseif($rc&&$qb>1)echo"<p class='error'>".lang(137).": ".implode("",$rc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$wc="<input type='submit' value='".lang(143)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Kf=$_GET["sql"];if($_POST)$Kf=$_POST["query"];elseif($_GET["history"]=="all")$Kf=$ed;elseif($_GET["history"]!="")$Kf=$ed[$_GET["history"]][0];echo"<p>";textarea("query",$Kf,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$wc\n",lang(144).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(145)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$wc":lang(146)),"</div></fieldset>\n","<fieldset><legend>".lang(147)."</legend><div>",lang(148,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(149).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(150))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(151))."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$ed){print_fieldset("history",lang(152),$_GET["history"]!="");for($X=end($ed);$X;$X=prev($ed)){$x=key($ed);list($Kf,$ih,$hc)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$ih)."'>".@date("H:i:s",$ih)."</span>"." <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Kf)))),80,"</code>").($hc?" <span class='time'>($hc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(153)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(154)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Jh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$Jh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Jh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$Eh=unique_array($_GET["where"],$v);$Nf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(155),$Wb->delete($a,$Nf,!$Eh));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Jh){if(!$O)redirect($A);queries_redirect($A,lang(156),$Wb->update($a,$O,$Nf,!$Eh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$Wb->insert($a,$O);$Rd=($I?last_id():0);queries_redirect($A,lang(157,($Rd?" $Rd":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($w=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($C);$M[]=($Ga?"$Ga AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Wb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$Wb->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Wb->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$p[$x]=array("field"=>$x,"null"=>($x!=$Wb->primary),"auto_increment"=>($x==$Wb->primary));}}}edit_form($a,$p,$K,$Jh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$lf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$lf[$x]=$x;$Uf=referencable_primary($a);$Oc=array();foreach($Uf
as$Tg=>$o)$Oc[str_replace("`","``",$Tg)."`".str_replace("`","``",$o["field"])]=$Tg;$cf=array();$R=array();if($a!=""){$cf=fields($a);$R=table_status($a);if(!$R)$n=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(158),drop_tables(array($a)));else{$p=array();$Da=array();$Nh=false;$Mc=array();ksort($K["fields"]);$bf=reset($cf);$Aa=" FIRST";foreach($K["fields"]as$x=>$o){$q=$Oc[$o["type"]];$_h=($q!==null?$Uf[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($x==$K["auto_increment_col"])$o["auto_increment"]=true;$If=process_field($o,$_h);$Da[]=array($o["orig"],$If,$Aa);if($If!=process_field($bf,$bf)){$p[]=array($o["orig"],$If,$Aa);if($o["orig"]!=""||$Aa)$Nh=true;}if($q!==null)$Mc[idf_escape($o["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Oc[$o["type"]],'source'=>array($o["field"]),'target'=>array($_h["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Nh=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$bf=next($cf);if(!$bf)$Aa="";}}$nf="";if($lf[$K["partition_by"]]){$of=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$of[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$nf.="\nPARTITION BY $K[partition_by]($K[partition])".($of?" (".implode(",",$of)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$nf.="\nREMOVE PARTITIONING";$le=lang(159);if($a==""){cookie("adminer_engine",$K["Engine"]);$le=lang(160);}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$le,alter_table($a,$C,($w=="sqlite"&&($Nh||$Mc)?$Da:$p),$Mc,($K["Comment"]!=$R["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$nf));}}page_header(($a!=""?lang(41):lang(66)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Bh["int"])?"int":(isset($Bh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($cf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$Tc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$h->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Tc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$of=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Tc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$of[""]="";$K["partition_names"]=array_keys($of);$K["partition_values"]=array_values($of);}}}$nb=collations();$oc=engines();foreach($oc
as$nc){if(!strcasecmp($nc,$K["Engine"])){$K["Engine"]=$nc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(161),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($oc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(162).")")+$oc,$K["Engine"])."</select>":""),' ',($nb&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".lang(87).")")+$nb,$K["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$sb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$sb){foreach($K["fields"]as$o){if($o["comment"]!=""){$sb=true;break;}}}edit_fields($K["fields"],$nb,"TABLE",$Oc,$sb);echo'</table>
<p>
',lang(56),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(163),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($sb?" checked":"").">".lang(96)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($h->server_info>=5.5?2048:60).'"'.($sb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}if(support("partitioning")){$mf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(164),$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$lf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
',lang(165),': <input type="number" name="partitions" class="size',($mf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($mf?"":" class='hidden'"),'>
<thead><tr><th>',lang(166),'<th>',lang(167),'</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$pd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($h->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$pd[]="FULLTEXT";$v=indexes($a);$Bf=array();if($w=="mongo"){$Bf=$v["_id_"];unset($pd[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$C=$u["name"];if(in_array($u["type"],$pd)){$f=array();$Wd=array();$Pb=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$e){if($e!=""){$y=$u["lengths"][$x];$Ob=$u["descs"][$x];$O[]=idf_escape($e).($y?"(".(+$y).")":"").($Ob?" DESC":"");$f[]=$e;$Wd[]=($y?$y:null);$Pb[]=$Ob;}}if($f){$xc=$v[$C];if($xc){ksort($xc["columns"]);ksort($xc["lengths"]);ksort($xc["descs"]);if($u["type"]==$xc["type"]&&array_values($xc["columns"])===$f&&(!$xc["lengths"]||array_values($xc["lengths"])===$Wd)&&array_values($xc["descs"])===$Pb){unset($v[$C]);continue;}}$c[]=array($u["type"],$C,$O);}}}foreach($v
as$C=>$xc)$c[]=array($xc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(168),alter_indexes($a,$c));}page_header(lang(121),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>',lang(169),'<th><input type="submit" style="left: -1000px; position: absolute;">',lang(170),'<th>',lang(171);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.2.4' alt='+' title='<?php echo
lang(97),'\'></noscript>&nbsp;
</thead>
';if($Bf){echo"<tr><td>PRIMARY<td>";foreach($Bf["columns"]as$x=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".lang(50)."</label> ";}echo"<td><td>\n";}$Fd=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$Fd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Fd][type]",array(-1=>"")+$pd,$u["type"],($Fd==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$s=1;foreach($u["columns"]as$x=>$e){echo"<span>".select_input(" name='indexes[$Fd][columns][$s]' onchange=\"".($s==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($w=="sql"?"":$_GET["indexes"]."_"))."');\"",($p?array_combine($p,$p):$p),$e),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$Fd][lengths][$s]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$Fd][descs][$s]",1,$u["descs"][$x],lang(50)):"")," </span>";$s++;}echo"<td><input name='indexes[$Fd][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$Fd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.4' alt='x' title='".lang(100)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Fd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(172),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(173),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$Ng=true;$Qd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$Ng=false;$Qd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Qd),lang(174),$Ng);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(175));}}page_header(DB!=""?lang(59):lang(176),$n,array(),h(DB));$nb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$nb);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Vc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Vc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($nb?html_select("collation",array(""=>"(".lang(87).")")+$nb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.4' alt='+' title='".lang(97)."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(177));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(178));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(179));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(60):lang(61),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(180).": ".h($da),$n);$hg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$nd=array();$ff=array();foreach($hg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$ff[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$nd[]=$s;}if(!$n&&$_POST){$Ya=array();foreach($hg["fields"]as$x=>$o){if(in_array($x,$nd)){$X=process_input($o);if($X===false)$X="''";if(isset($ff[$x]))$h->query("SET @".idf_escape($o["field"])." = $X");}$Ya[]=(isset($ff[$x])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$h->multi_query($H))echo"<p class='error'>".error()."\n";else{$i=connect();if(is_object($i))$i->select_db(DB);do{$I=$h->store_result();if(is_object($I))select($I,$i);else
echo"<p class='message'>".lang(181,$h->affected_rows)."\n";}while($h->next_result());if($ff)select($h->query("SELECT ".implode(", ",$ff)));}}echo'
<form action="" method="post">
';if($nd){echo"<table cellspacing='0'>\n";foreach($nd
as$x){$o=$hg["fields"][$x];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(180),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$le=($_POST["drop"]?lang(182):($C!=""?lang(183):lang(184)));$A=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$bh=array();foreach($K["source"]as$x=>$X)$bh[$x]=$K["target"][$x];$K["target"]=$bh;if($w=="sqlite")queries_redirect($A,$le,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Yb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Yb,$A,$le);else{query_redirect($c.($C!=""?"$Yb,":"")."\nADD".format_foreign_key($K),$A,$le);$n=lang(185)."<br>$n";}}}page_header(lang(186),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Oc=foreign_keys($a);$K=$Oc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Dg=array_keys(fields($a));$bh=($a===$K["table"]?$Dg:array_keys(fields($K["table"])));$Tf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(187),':
',html_select("table",$Tf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(188),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(123),'<th>',lang(124),'</thead>
';$Fd=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Dg,$X,($Fd==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$bh,$K["target"][$x]);$Fd++;}echo'</table>
<p>
',lang(89),': ',html_select("on_delete",array(-1=>"")+explode("|",$Me),$K["on_delete"]),' ',lang(88),': ',html_select("on_update",array(-1=>"")+explode("|",$Me),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(189),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$n){$C=trim($K["name"]);$Ga=" AS\n$K[select]";$A=ME."table=".urlencode($C);$le=lang(190);if($_GET["materialized"])$U="MATERIALIZED VIEW";else{$U="VIEW";if($w=="pgsql"){$Ig=table_status($C);$U=($Ig?strtoupper($Ig["Engine"]):$U);}}if(!$_POST["drop"]&&$a==$C&&$w!="sqlite"&&$U!="MATERIALIZED VIEW")query_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ga,$A,$le);else{$dh=$C."_adminer_".uniqid();drop_create("DROP $U ".table($a),"CREATE $U ".table($C).$Ga,"DROP $U ".table($C),"CREATE $U ".table($dh).$Ga,"DROP $U ".table($dh),($_POST["drop"]?substr(ME,0,-1):$A),lang(191),$le,lang(192),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$n)$n=error();}page_header(($a!=""?lang(40):lang(193)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(171),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$xd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Jg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(194));elseif(in_array($K["INTERVAL_FIELD"],$xd)&&isset($Jg[$K["STATUS"]])){$mg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(195):lang(196)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$mg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$mg)."\n".$Jg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(197).": ".h($aa):lang(198)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(171),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(199),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(200),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(201),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$xd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(107),'<td>',html_select("STATUS",$Jg,$K["STATUS"]),'<tr><th>',lang(96),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(202)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$hg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$dh="$K[name]_adminer_".uniqid();drop_create("DROP $hg ".idf_escape($da),create_routine($hg,$K),"DROP $hg ".idf_escape($K["name"]),create_routine($hg,array("name"=>$dh)+$K),"DROP $hg ".idf_escape($dh),substr(ME,0,-1),lang(203),lang(204),lang(205),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(206):lang(207)).": ".h($da):(isset($_GET["function"])?lang(208):lang(209))),$n);if(!$_POST&&$da!=""){$K=routine($da,$hg);$K["name"]=$da;}$nb=get_vals("SHOW CHARACTER SET");sort($nb);$ig=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(171),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($ig?lang(19).": ".html_select("language",$ig,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$nb,$hg);if(isset($_GET["function"])){echo"<tr><td>".lang(210);edit_type("returns",$K["returns"],$nb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(211));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(212));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(213));else
redirect($_);}page_header($fa!=""?lang(214).": ".h($fa):lang(215),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(216));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(217));}page_header($ga!=""?lang(218).": ".h($ga):lang(219),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$yh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$yh["Timing"])&&in_array($_POST["Event"],$yh["Event"])&&in_array($_POST["Type"],$yh["Type"])){$Le=" ON ".table($a);$Yb="DROP TRIGGER ".idf_escape($C).($w=="pgsql"?$Le:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Yb,$A,lang(220));else{if($C!="")queries($Yb);queries_redirect($A,($C!=""?lang(221):lang(222)),queries(create_trigger($Le,$_POST)));if($C!="")queries(create_trigger($Le,$K+array("Type"=>reset($yh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(223).": ".h($C):lang(224)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(225),'<td>',html_select("Timing",$yh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(226),'<td>',html_select("Event",$yh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$yh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(92),'<td>',html_select("Type",$yh["Type"],$K["Type"]),'</table>
<p>',lang(171),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Gf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$yb)$Gf[$yb][$K["Privilege"]]=$K["Comment"];}$Gf["Server Admin"]+=$Gf["File access on server"];$Gf["Databases"]["Create routine"]=$Gf["Procedures"]["Create routine"];unset($Gf["Procedures"]["Create routine"]);$Gf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Gf["Columns"][$X]=$Gf["Tables"][$X];unset($Gf["Server Admin"]["Usage"]);foreach($Gf["Tables"]as$x=>$X)unset($Gf["Databases"][$x]);$ye=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$ye[$X]=(array)$ye[$X]+(array)$_POST["grants"][$x];}$Wc=array();$Je="";if(isset($_GET["host"])&&($I=$h->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$de,PREG_SET_ORDER)){foreach($de
as$X){if($X[1]!="USAGE")$Wc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Wc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Je=$B[1];}}if($_POST&&!$n){$Ke=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Ke",ME."privileges=",lang(227));else{$_e=q($_POST["user"])."@".q($_POST["host"]);$pf=$_POST["pass"];if($pf!=''&&!$_POST["hashed"]){$pf=$h->result("SELECT PASSWORD(".q($pf).")");$n=!$pf;}$Cb=false;if(!$n){if($Ke!=$_e){$Cb=queries(($h->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $_e IDENTIFIED BY PASSWORD ".q($pf));$n=!$Cb;}elseif($pf!=$Je)queries("SET PASSWORD FOR $_e = ".q($pf));}if(!$n){$eg=array();foreach($ye
as$Ee=>$Vc){if(isset($_GET["grant"]))$Vc=array_filter($Vc);$Vc=array_keys($Vc);if(isset($_GET["grant"]))$eg=array_diff(array_keys(array_filter($ye[$Ee],'strlen')),$Vc);elseif($Ke==$_e){$He=array_keys((array)$Wc[$Ee]);$eg=array_diff($He,$Vc);$Vc=array_diff($Vc,$He);unset($Wc[$Ee]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ee,$B)&&(!grant("REVOKE",$eg,$B[2]," ON $B[1] FROM $_e")||!grant("GRANT",$Vc,$B[2]," ON $B[1] TO $_e"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Ke!=$_e)queries("DROP USER $Ke");elseif(!isset($_GET["grant"])){foreach($Wc
as$Ee=>$eg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ee,$B))grant("REVOKE",array_keys($eg),$B[2]," ON $B[1] FROM $_e");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(228):lang(229)),!$n);if($Cb)$h->query("DROP USER $_e");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(135)),$n,array("privileges"=>array('',lang(63))));if($_POST){$K=$_POST;$Wc=$ye;}else{$K=$_GET+array("host"=>$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Je;if($Je!="")$K["hashed"]=true;$Wc[(DB==""||$Wc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(230),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(63).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($Wc
as$Ee=>$Vc){echo'<th>'.($Ee!="*.*"?"<input name='objects[$s]' value='".h($Ee)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(119),"Columns"=>lang(120),"Procedures"=>lang(231),)as$yb=>$Ob){foreach((array)$Gf[$yb]as$Ff=>$rb){echo"<tr".odd()."><td".($Ob?">$Ob<td":" colspan='2'").' lang="en" title="'.h($rb).'">'.h($Ff);$s=0;foreach($Wc
as$Ee=>$Vc){$C="'grants[$s][".h(strtoupper($Ff))."]'";$Y=$Vc[strtoupper($Ff)];if($yb=="Server Admin"&&$Ee!=(isset($Wc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(232)."<option value='0'".($Y=="0"?" selected":"").">".lang(233)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Ff=="All privileges"?" id='grants-$s-all'":($Ff=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Md=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".number($X)))$Md++;}queries_redirect(ME."processlist=",lang(234,$Md),$Md||!$_POST["kill"]);}page_header(lang(105),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(235).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(236,$h->result("SELECT @@max_connections")),"<p><input type='submit' value='".lang(237)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$p=fields($a);$Oc=column_foreign_keys($a);$Ge="";if($R["Oid"]){$Ge=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($Ge));}parse_str($_COOKIE["adminer_import"],$ya);$fg=array();$f=array();$hh=null;foreach($p
as$x=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$hh=$b->selectLengthProcess();}$fg+=$o["privileges"];}list($M,$Xc)=$b->selectColumnsProcess($f,$v);$Ad=count($Xc)<count($M);$Z=$b->selectSearchProcess($p,$v);$We=$b->selectOrderProcess($p,$v);$z=$b->selectLimitProcess();$Tc=($M?implode(", ",$M):"*".($Ge?", $Ge":"")).convert_fields($f,$p,$M)."\nFROM ".table($a);$Yc=($Xc&&$Ad?"\nGROUP BY ".implode(", ",$Xc):"").($We?"\nORDER BY ".implode(", ",$We):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Fh=>$K){$Ga=convert_field($p[key($K)]);$M=array($Ga?$Ga:idf_escape(key($K)));$Z[]=where_check($Fh,$p);$J=$Wb->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$ci=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$eb=array();foreach($_POST["check"]as$bb)$eb[]=where_check($bb,$p);$ci[]="((".implode(") OR (",$eb)."))";}$ci=($ci?"\nWHERE ".implode(" AND ",$ci):"");$Bf=$Hh=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$Bf=array_flip($u["columns"]);$Hh=($M?$Bf:array());break;}}foreach((array)$Hh
as$x=>$X){if(in_array(idf_escape($x),$M))unset($Hh[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Hh===array())$H="SELECT $Tc$ci$Yc";else{$Dh=array();foreach($_POST["check"]as$X)$Dh[]="(SELECT".limit($Tc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$Yc,1).")";$H=implode(" UNION ALL ",$Dh);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Oc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Hh===array()&&is_array($_POST["check"]))||$Ad){$I=($_POST["delete"]?$Wb->delete($a,$ci):($_POST["clone"]?queries("INSERT $H$ci"):$Wb->update($a,$O,$ci)));$za=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$bi="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$Wb->delete($a,$bi,1):($_POST["clone"]?queries("INSERT".limit1($H,$bi)):$Wb->update($a,$O,$bi)));if(!$I)break;$za+=$h->affected_rows;}}}$le=lang(238,$za);if($_POST["clone"]&&$I&&$za==1){$Rd=last_id();if($Rd)$le=lang(157," $Rd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$le,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(239);else{$I=true;$za=0;foreach($_POST["val"]as$Fh=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$p[$x]["type"])||$X!=""?$b->processInput($p[$x],$X):"NULL");}$I=$Wb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Fh,$p),!($Ad||$Hh===array())," ");if(!$I)break;$za+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(238,$za),$I);}}elseif(!is_string($Hc=get_file("csv_file",true)))$n=upload_error($Hc);elseif(!preg_match('~~u',$Hc))$n=lang(240);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$ob=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Hc,$de);$za=count($de[0]);$Wb->begin();$ug=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($de[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$ug]*)$ug~",$X.$ug,$ee);if(!$x&&!array_diff($ee[1],$ob)){$ob=$ee[1];$za--;}else{$O=array();foreach($ee[1]as$s=>$lb)$O[idf_escape($ob[$s])]=($lb==""&&$p[$ob[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$lb))));$L[]=$O;}}$I=(!$L||$Wb->insertUpdate($a,$L,$Bf));if($I)$Wb->commit();queries_redirect(remove_from_uri("page"),lang(241,$za),$I);$Wb->rollback();}}}$Tg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(44).": $Tg",$n);$O=null;if(isset($fg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Oc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".lang(242).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$v);$b->selectOrderPrint($We,$f,$v);$b->selectLimitPrint($z);$b->selectLengthPrint($hh);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Rc=$h->result(count_rows($a,$Z,$Ad,$Xc));$E=floor(max(0,$Rc-1)/$z);}$rg=$M;if(!$rg){$rg[]="*";if($Ge)$rg[]=$Ge;}$zb=convert_fields($f,$p,$M);if($zb)$rg[]=substr($zb,2);$I=$Wb->select($a,$rg,$Z,$Xc,$We,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($z*$E);$lc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$Xc&&$Ad&&$w=="sql")$Rc=$h->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$Tg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Xc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(243)."</a>");$xe=array();$Uc=array();reset($M);$Pf=1;foreach($L[0]as$x=>$X){if($x!=$Ge){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$x];$C=($o?$b->fieldName($o,$Pf):($X["fun"]?"*":$x));if($C!=""){$Pf++;$xe[$x]=$C;$e=idf_escape($x);$id=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Ob="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($id.($We[0]==$e||$We[0]==$x||(!$We&&$Ad&&$Xc[0]==$e)?$Ob:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($id.$Ob)."' title='".lang(50)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.lang(47).'" class="text jsonly"> =</a>';echo"</span>";}$Uc[$x]=$X["fun"];next($M);}}$Wd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Wd[$x]=max($Wd[$x],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(244):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Oc)as$we=>$K){$Eh=unique_array($L[$we],$v);if(!$Eh){$Eh=array();foreach($L[$we]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$Eh[$x]=$X;}}$Fh="";foreach($Eh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($w=='sql'&&preg_match("~^utf8_~",$p[$x]["collation"])?$x:"CONVERT($x USING ".charset($h).")").")";$X=md5($X);}$Fh.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Xc&&$M?"":"<td>".checkbox("check[]",substr($Fh,1),in_array(substr($Fh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Ad||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Fh)."'>".lang(245)."</a>"));foreach($K
as$x=>$X){if(isset($xe[$x])){$o=$p[$x];if($X!=""&&(!isset($lc[$x])||$lc[$x]!=""))$lc[$x]=(is_mail($X)?$xe[$x]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($x).$Fh;if(!$_&&$X!==null){foreach((array)$Oc[$x]as$q){if(count($Oc[$x])==1||end($q["source"])==$x){$_="";foreach($q["source"]as$s=>$Dg)$_.=where_link($s,$q["target"][$s],$L[$we][$Dg]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if(count($q["source"])==1)break;}}}if($x=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Eh))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Eh
as$Gd=>$W)$_.=where_link($s++,$Gd,$W);}$X=select_value($X,$_,$o,$hh);$jd=h("val[$Fh][".bracket_escape($x)."]");$Y=$_POST["val"][$Fh][bracket_escape($x)];$gc=!is_array($K[$x])&&is_utf8($X)&&$L[$we][$x]==$K[$x]&&!$Uc[$x];$gh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$gc)||$Y!==null){$ad=h($Y!==null?$Y:$K[$x]);echo"<td>".($gh?"<textarea name='$jd' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$ad</textarea>":"<input name='$jd' value='$ad' size='$Wd[$x]'>");}else{$ae=strpos($X,"<i>...</i>");echo"<td id='$jd' onclick=\"selectClick(this, event, ".($ae?2:($gh?1:0)).($gc?"":", '".h(lang(246))."'").");\">$X";}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$L[$we]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$vc=true;if($_GET["page"]!="last"){if(!+$z)$Rc=count($L);elseif($w!="sql"||!$Ad){$Rc=($Ad?false:found_rows($R,$Z));if($Rc<max(1e4,2*($E+1)*$z))$Rc=reset(slow_query(count_rows($a,$Z,$Ad,$Xc)));else$vc=false;}}if(+$z&&($Rc===false||$Rc>$z||$E)){echo"<p class='pages'>";$ge=($Rc===false?$E+(count($L)>=$z?2:1):floor(($Rc-1)/$z));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(247)."', '".($E+1)."'), event); return false;\">".lang(247)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($ge,$E+5);$s++)echo
pagination($s,$E);if($ge>0){echo($E+5<$ge?" ...":""),($vc&&$Rc!==false?pagination($ge,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ge'>".lang(248)."</a>");}echo(($Rc===false?count($L)+1:$Rc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(249).'...\');" class="loadmore">'.lang(250).'</a>':'');}else{echo
lang(247).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ge>$E?pagination($E+1,$E).($ge>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Rc!==false?"(".($vc?"":"~ ").lang(139,$Rc).") ":"");$Tb=($vc?"":"~ ").$Rc;echo
checkbox("all",1,0,lang(251),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Tb' : checked); selectCount('selected2', this.checked || !checked ? '$Tb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(243),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(239).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(115),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(235),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Pc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Pc['sql']);break;}}if($Pc){print_fieldset("export",lang(65)." <span id='selected2'></span>");$gf=$b->dumpOutput();echo($gf?html_select("output",$gf,$ya["output"])." ":""),html_select("format",$Pc,$ya["format"])," <input type='submit' name='export' value='".lang(65)."'>\n","</div></fieldset>\n";}echo(!$Xc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(64),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(64)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Ig=isset($_GET["status"]);page_header($Ig?lang(107):lang(106));$Uh=($Ig?show_status():show_variables());if(!$Uh)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($Uh
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Ig?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Qg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){json_row("Comment-$C",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$C",nbsp($R[$x]));foreach($Qg+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=format_number($R[$x]);json_row("$x-$C",($x=="Rows"&&$X&&$R["Engine"]==($Fg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Qg[$x]))$Qg[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$C");}}}foreach($Qg
as$x=>$X)json_row("sum-$x",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$h->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Zg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Zg&&!$n&&!$_POST["search"]){$I=true;$le="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$le=lang(252);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$le=lang(253);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$le=lang(254);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$le=lang(255);}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$le=lang(256);}elseif(!$_POST["tables"])$le=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$le.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$le,$I);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(68).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(257)."</h3>\n";$Yg=tables_list();if(!$Yg)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(258)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(47)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">';$Ub=doc_link(array('sql'=>'show-table-status.html'));echo'<th>'.lang(119),'<td>'.lang(259).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(111).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(260).$Ub,'<td>'.lang(261).$Ub,'<td>'.lang(262).$Ub,'<td>'.lang(56).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(263).$Ub,(support("comment")?'<td>'.lang(96).$Ub:''),"</thead>\n";$S=0;foreach($Yg
as$C=>$U){$Xh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Xh?"views[]":"tables[]"),$C,in_array($C,$Zg,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.lang(39).'">'.h($C).'</a>':h($C));if($Xh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(40).'">'.(preg_match('~materialized~i',$U)?lang(264):lang(118)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(38).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(41)),"Index_length"=>array("indexes",lang(122)),"Data_free"=>array("edit",lang(42)),"Auto_increment"=>array("auto_increment=1&create",lang(41)),"Rows"=>array("select",lang(38)),)as$x=>$_){$jd=" id='$x-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$jd title='$_[1]'>?</a>":"<span$jd>?</span>"):"<td id='$x-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(236,count($Yg)),"<td>".nbsp($w=="sql"?$h->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Rh="<input type='submit' value='".lang(265)."'".on_help("'VACUUM'")."> ";$Se="<input type='submit' name='optimize' value='".lang(266)."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(115)." <span id='selected'></span></legend><div>".($w=="sqlite"?$Rh:($w=="pgsql"?$Rh.$Se:($w=="sql"?"<input type='submit' value='".lang(267)."'".on_help("'ANALYZE TABLE'")."> ".$Se."<input type='submit' name='check' value='".lang(268)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(269)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(270)."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(116)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$w!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(271).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(272)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(273)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(66)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(193)."</a>\n":""),(support("materializedview")?'<a href="'.h(ME).'view=&amp;materialized=1">'.lang(274)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(132)."</h3>\n";$jg=routines();if($jg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(171).'<td>'.lang(92).'<td>'.lang(210)."<td>&nbsp;</thead>\n";odd('');foreach($jg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(125)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(209).'</a>':'').'<a href="'.h(ME).'function=">'.lang(208)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(275)."</h3>\n";$vg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($vg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(171)."</thead>\n";odd('');foreach($vg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(215)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(23)."</h3>\n";$Ph=types();if($Ph){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(171)."</thead>\n";odd('');foreach($Ph
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(219)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(133)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(171)."<td>".lang(276)."<td>".lang(199)."<td>".lang(200)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(277)."<td>".$K["Execute at"]:lang(201)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(125).'</a>';}echo"</table>\n";$tc=$h->result("SELECT @@event_scheduler");if($tc&&$tc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($tc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(198)."</a>\n";}if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();