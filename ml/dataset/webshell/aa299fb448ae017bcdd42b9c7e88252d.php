<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.5.0
*/error_reporting(6135);$Uc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Uc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$vi=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($vi)$$X=$vi;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0\0\n @\0C\"\0`EQ?tvM'Jdd\\b0\0\"fӈs5AXPaJ08#RTz`#.cXȀ?-\0Im?.M\0ȯ(̉/(%\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ٌ̇l7B14vb0fsn2Bѱ٘n:#(b.\rDc)a7Elñi1̎s-4f	i7Févt2!r0t~U'3MWB'cP:6T\rcAzr_WK\r-VNFS%~c&\\^ruŎÞً4'7kQh'g\rFB\ryT7SSP1=ǤcI:dm>S8LJt.M	ϋ`'C889 Q2#8А6mjh<9/:J)ʂ\0d>!\0Zvno(k7s>!R\"*nS\0@P\"(#[@gozn9k8n1I*=n0c(;à!*c>ΎE7DLJ1`8(3M\"39?Ee=Ҭ~Ӹ7;CE\rd!)a*5ajo\0#`38\0]e2	mke]AZsStZZ!)BRG+#Jv2(c4<#sB06YL\r=[73<:bxJ=	m_ fltIH3x*6`t6%ULeق<\0AQ<P<:#u/:T\\>-xJ͍QH\njL+jz7`\nk'NvX>C-T˩4*L%Cj>7ߨި-2p3b٥v>p\\6_HۻCxW1OjAwH7q\\Ɏ#ɮr4v=nvO6gWp'eyp0#z6=րu\\_.>H<r+cz%}wVA*×B>dR:\r\rl\r9j43qm\rPN	A`xoèm\r8?,	E,U%zʛ5vvE86H0[CLmj2D`p1?RQMxbu&I-\"V\"pG\"W\$J\$6PPu\"T7CH֖{ H8FKr#D@YKKcp1葈Y\rD^X#Y5\ne̲\$\"SH\${ก.%XFJi@8Lif\rigBstDNSzmM9'zm\rxIО-7:q\$3pQf,Hb2]\n'̹?PmC։rI4XAPniCxpL\nDH4.A;VqOf12\"O>K4s+CqSFLSPr @\"S*LLKEE\nk)j4u\rI7A0a7p칀!sA4(y*of.2ZǞ[ VG\$^n&1E)ʀ-\r%ZPȲQR#xZc,S دҔlH.!i78eyr6XZ\\lYB)\$(\n	I\\Sxѽ*up/\0pEx4<UGvxY=XǁʥLτ\$2CcÐf!\nHAwfjl4 BbL	\nO»7!# t7DEz&&TRji\\]gv!ÆqɬCdʄk逓lѭUP20Bq=83>!ȸu+-mD03s\"{x*+E0>3.`Q,E֖^M5	e]+_>=̫C)7۠\ru8zk@#ZYq5]QԾǟ=bnbĪiEJu~eku0'̘n[wk%,ݢg)LWeiԳ>>){Pt r1Ua\$.I|#Zry&2:H'ݓ{*<ۗї;P87>IܷWv2p7{'.[́k]98]cldG7~cuݛe\$tWovO>~2g=>^?JQ!FM!0>ࡡ-1@4R_sOl,cr`ȷ?u)Ƀ0e\"NÛ; m>+aퟷC\"u4lW?uBm|IE\nB	=KZkozOϦ萋e6K]\0dHصA6lX)`+d .7 \r ڃj6p-E\"oPR7:\0\0{@PMmPt7xcZp4PB/#DV\0fi,	iwG\r\r]\n@[ GSp\r([j%	&p\0rp\npm\r0m	9MF.KpZW1=EQ)qR@)'u0\n+0Dq'B=- PiPMqq@\rHѦ7	qqPPqSQ❊\r\0ѧ	 \rh/p #=2K\$rU1@`诱, 1m mq_K}(]	2)Qlz#q&f	a\$Q]0)iR,m'Qv,\rrЪH.2.;.r/-\rpl\rR&o1S1/c\\i/r2S+2	pSI:]o5be!3Y,n2_4)^BG\nLq #r(5M&:Ы/ӣ	3^03s](+8Id  ة219&q\"=->rU@3@S\r@o@>1S)o)~@P;-:\nl\"\n#g7clC\0000CD|1h.QA\$\rÆ.8.2t2#6oACD DtJHQ+Kք");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:gCI\n83)7'u9Cym2r<F+Dg\n	͒tXcLa91\$<Dg|G!H+)eXn3\rщvg5`\"ޅDIA6NXvi!vf7Q\0AA9'qp6E\$YN1Hti1EpA\"Q9g9eM81s'Qk܅؟0.s|k<`:f&ː6#,cz0ܢc2\\#X<Px\n*'(/H971\\>|2!!{\n@\$#ć\"cH!r\"*Ҽ2ȫP0!@2(88P/\\\"K\\9cHHXt8A:@\ng2(:Z3pP46)PNε-dVzc ȐhOJW5K7,A\rXKH7#Fpk(A2P0NwnL`qܷ@\\3ctv\\bJ}gQ7OA5(:K;\$p+\$4-X\rb[3#ݙg7A82A/,N7ݵ'4Rʳ}c+r*MĿKhmV@:t㾬zN\"#8_p^E[:zL3g#(cc\\6x2Zv6=n7\r>àý@Vẇp%\r\0\\(I܎p7h7Lu݆2D&9U&:W=#1<Z2?'<jA^Ǒ({iAq:N67Z.JRqC!JN6FkkL@4@[-ЮC(c9=p}ILheKà̱13!)5mP!\rȧLISXŒe1u(	@ͱ0(A\$q䌣LLs6sq=Fr=Vu(AGRLUɵa2D_+AG8*;bǝʢ\"yp\0ΚSZmɴΞH\$f`4C.aX̧rs2E JӺeTved)*Dv\rN\r왬R%Q8І0֬UMi^	皖G\$%Ә!x234=hdIM\r \rmNh²n>l7rGG&*ҵ̍fa\r%>\nk\$@N\0,+enT.DSeLi\n=0/\rGEJ!&*B')(<8I\"]& n҇+)'RvSPXEAC7p`WHKHhmWC`=-2q0eIڰ[#b\nqRXm)6JR8͐svB.L,f\$TV.AZ`]x4弖ЩnnbT;=ʽ+q}ۦ\"ޢ_GC6l!jzoN&p\n~)\$bKB|JS\0rfxjnO<(Z0jz\\\\|U3%E@vL:+_AU TB܅I=vUjۘEˉFx5#ܯ\n2˭\\L4Z纫t{wf4rdI9o=Ǥ7gX-|%R:6|jh-Jz݊\"8`Siew\0YJS35\\so'A5E)8\00F%D;R	%7%'\ná7Iݺ{%Jc+Lԡuk籖\"uZR?_,&QeN*Jnu#2iv64U|qs`}[IPNV]݁zO}\r|*8=C%v\n,1R=W:iaӹtPu<5qcF<lf}nh\0dp}xh:엲ZS |Ĵ[;|=ӼZ3j<\n^]q\$L13׼}hA;({)~aQ*5H\r:AZ&	{Hhlkʂ@T	1[`;q޼\"\r'fS.S5PACs\na%04<2eP\r*Y\0LڭH'wd#.@]@{Q bQMr%(Rp+`	Z؂,eIR\r;Pm`v&]@	\n\n.\r\0}	Ϙట\n\"-@-BN@i(yg(\rZn,\$0nHp0L\$FLG%t\nM`bPJüYv8.B\r^@(\rqX\\NMfq,n몺,'RLDz Z@`VL%-fW`nTkqpv\rҲЮ.koQLtm3	&m*VR!\nf^Ndݧϸ2,hUBf<Lu r0hDh%BΊ'`8NnڭXvVbb'rzಀ9P!fr\0^rdF\0*ʾ)-\$\$ɮ*#\nq(q\rBr2`ДXf=\rQ/1I_-b>lM\0%\"ŀ1rej\r-.S\$\$Rb\0G]@[)RY32@qŴyh1i0,.hz𐈟i,.(oLh#Q8n %loK4NFPV{B\"s+K\r 9 H-ELkz@@fsh64#=8zbw')'b@&}\"@B2k9}\$s&<ؤ\$烍'dPT*FD&o@X& Ĥ{\0%(C-J\$9B \nDOHtN\"ԙIԠ(ğAt%I(?'#(4R_'z2wi;mJ&~hڔĖ#̂Tp%COj_P\"J15Clbԗ@o\\#)ژ#NaF r[THDCeI-tI\$nIΈCOr  `OMЋIMPn4]QFIp\rg]@\r\"@Bə)Uϕ`Y)Foq4hqDh%RyLrh[\\?] fK|ID4H0OU\\\"5Q(WN,t,Nv q+N`ޟ\"V\$\r1a\0Wmd4;9KObbR_dfNffgD_TS4S\0TUb)ScK!ڕ/A0SOYS^1W>QB*^\$js Pech:(¹\"%\nW\" z %veT(ȶpO\"r(E\"FJZobKR\"7FwJ\\OuUu +rj\0*QdCK0}`p8AVSs7t3s`s2cyU]tWIGN\\w,+w`Yyz<e. F\0N tjgB\rGi>pe\0x26eD3\rr2a`#=*R%̐y:<C ݀& x+\rUYSQmem+[4)\\mXl^hZD.7u7;=C\rNط\n%(YK\rJP󵤇-<PT\$'bD\re|\0X{n^	dJĥ`bLs~[ÍL`.& \0@%方  d	q*`]Ϣ\nP u#8dB+([Xz\\G=I8LB\".\$eo7#?9b^\0D>v_6yKnDK9%njq\$*PpeQ`]E\\eo@XO8\$`ޓ:wQ	\nc㉔HĦdx/Dd\06 ^\0ZjF8\$\"Wj1ĺg=MX`[WZPy0~f FYZ(GIRsʲdS\0HZUٰ6-x%͞uϖ9rYv b!)?\"O嘤\nkGl|ZEk1\0_uJ3?ԊYB:P\"ʊTH# CRD{\n`	s\$vrˀDNvB,:C>[w{L PEB\$dE%ո3h4;59nUw-),Xy7bˇ4`ƯVKЛ䦶qq\$٠H1)\"JrjH\"`Dy\\I+d@(oPBeI\n	*x\r6IdmH}\0G>S(oɺ@uIKp\r@A&3f8ߵL^\$.\r	i|cq~U |Ͼ2B\\cae1MoXqU:㸂I\"}<\r:p*Tt`|ǆg4Y[+h3Tcª)\0ECH5GD\r_h^Xv#|KF~P/9C	vu!ó3w3%I/B*1ݥXf&v=gE=Rr\rY&[r;jA|4`M@d&F:LUKo{@<Ö:ˬ{߃,R}#E>@-H3=r*\"x¬pO~tr6-Fণe he)\rܯ	PM`)b?9lJ׊qrp7!{;=n\0`&d*\0<T3\r5#EH.Ie6_}4\nQb7Xoq\n\$TDvhQ+eV5ph-Xb]ɪ*^\0e u`Og_X+ iQgr_3%~l]_\nunԇ5)i\$l'qF@܁NIے܂2?T.G!K5)\rn*UzH!K]r	J	N*ae8vI;H@\rځt\$Şp!o+?\$h#kPD\0J@V~(-X7-AJb8AAUD~,?PE3BmfTG >Y]fI	D#kYh.ef#i	t	uRШQ uh(;M1Hr)\$yRL.ւEa>Tn?\\\"@3g2'6Lp|&tb}+{М^KìoT}d@Gj*t<s\0bBK\r\0Z(g?,XM\0~ĒD(F	Y<@7pGiuf J46SIp<x\"%hx\"b @%-/5f%WQ]ȅfZ6(QSI\$(5>do1R_0Doa0osHb\r:((1A..1{18-Qx!\0# \\^#XJD`b\$!1ѐ\\Wr-sR;&V`e{;#\rQI\"\$3ƛ\rs-2Cb?W/+6 -R^=hH.jGsJqrǰ6Qh!.='m}<Lh	3\0NC@ZL91YeVwRFD\n~̈́5Ḋ6Ę0nѿSn̍	s\n!R̍R5d\0tH(4HH8HEΒwl2&佒V@%b\"Ī2gOEc#wH&k<\nSC	!D*A]RGYB=vHPFdGqShc-+ݩM5N¦\r',\0tmWN9\nNX\05,\nz\0 `\"c=c!JteCcuDp[Fd0e,'.\n\n{!n.a!i&#Z,̶g\rqE6\$\\`cz6!:86tsܺ.!]AY)\"'xu5΂<GbX\n	heN TIHL 8?LFfQ\nM lA7dMa9 -YXĹ,ĳ3r)%aK\" P\"VFRX;Id˜Dh:.QD%@7BW DTZ8	^\0&#ɤ\"VP6p}ZeS4(Q]oXrU2i`:Q\$2y^\$Ep8sw\rof'u*ÀzCIo?@'v%]\$Np܃7.0\0{K<(?)\\%\$q<\$|PbRKE!Y>sOZ\$;y7J>5Oq\\.p1O)aJT\0OxHETEY⑝I#\$,AQD,F9wĞk^\"9LS(80 %DI9mSb1&x*^BRH~T#qæ)d\$Clh)(*DR(!\0	vMkH@1찛<Z.zE/!'zH\n,>OI)<H\$h(fB&\$	`E\0,B(g)HRfq#|0%\"Z\0%+/l\neC;tepeR@P֍oCgn­M`A,\0/\0V]PR@ikZ]7C݀(yH:OIki|2*(IkZMb\n?k#;\r\$y!KHZXh{\0l)ݦ;^pզ0QRHKGiRY3HpTftX(SzŹ8ri/1tPQm|p0u/i\nՔ@\\rf%\"q U|/:<\rۗ`*\0003\rж	IIz6P	\0dso-a5ŵyuU|^7\0(UHEhϞjEW36gR\\9Â])T@#ء٪e-hEL@S  53\\*l <]nЦ[W	-]aB)k@-<8GwIݙ@iJ%\r=70D8jr8f=0YHfH[[)Vc㘜*UU0!lBOU:h2SՂmZ8]xZ ̈O[ToVE\n}kj'H)CάDFݽZ,rS.\0?uV\"p?@Tlm|,Vm)3Yژ=8DfB\"݇N8~XE\"GU\\Ȩ0\0YLђ\$f\09uѭ̊EK-;6\r\"Tf֬7;2M1%G|-.m[W׵-6`*p6\0kG&1#d a2+MqM@}GjZ怲F)HUɡ\ngb2[&ݯ))3L\"m\">`o[VɥmS>?Q<\rdGYJz``z\0\$D7VyªѰAiڸr-Y1/Vuq\\jU4qY*\$Lj#NvP\r\"YJZ~h4\\LI1U&&b98y=	-\\@VZ1,\"PDC+Rv)\$\"mX(+,\$DI-QrBt'`؋j%k5W-{͎.LK^+d9X]ʫϬZk`,F=|/6#h'\n[8ŭ}Y2\"ȅTs~D(;\"y8u[\nے\n|\0BQN	y0(=Oq1PZӋ (\$(^UR!/VRl<{ETr	`4 \"(Nj)\0p[{?)D8ȡe+W~-/uduʏ8+ZzPe68RIw!V>p<wBOHH+ZLxQ_Dm+cgظ!VkoP182_i9\0 _~0Ue%j!`h50L2`xEˈaS¸<C~C\\[,NŌ\$\ny\$xrI+QadW/0){2vʥIBJ\$\rfՈD9VNVzcbgR!*ȹ)4)#QX82zy|V6\"ԭ\0,BaO{@JH/nh\\2!]CuIJ([a\nAK(sK)cm|qd;n+\$V\\^m@GBR uew+\0{\nk#Y]ATyXE\$r\\<۵&@nɠKvd>)7:Yhζ4L9fGVEe}	\"2cK\rΪ#\ncPn]q*il-i\"SjhMkώXDLR1@sA)9ƕ1x\0,CE 	SVq֎VR\0L_KBPnlm?V<rΎs(ZAMlwkŲsk>w<X[vFd!.Pݢdd!~a-@&08-ң4Њy2|k@2В愯\"_&rnBQve#u:e(F-S\$pX56ۢ'!CZ#t[eSh[V{јM]WFETFu,in^F5:AQ+ѣP==4Dl#iT./6Bg@iзgӔ\\ikRŠFÅ43%h\nc|K'2\$GLSDZb.ZOwԷQFKi*ۇx4Cu{գNU9:ܵ%F?\$l-X4zsXTetHZ#SrRjG+3s֑\rwjX\\`)7H\"\0\"Hdp\0ղ\$\r][Xl(hYRA%6RO6CGv+M\rHvn,QRwf\nlJ!oI_i겺@jk޾EDquB\".<9ᴏ_jHjPw\$VvIH5j6ٵݛYEA3bq3ٶ&FJ{#(/Kp&w8\nvubm#mbz&_Z:FR#Ul)wW`N&\r\0w(%]o(zw6Qi@\nP @P<2U)m!hF;`'*IٳYK4`@;G\n\nT&Bǣag9b`[)ou@a߅!'\\|* V@c;\n}y\00067M^\"4TM~\nM68MF)Oe*]넓^aU\n5e\r򙊂S@\r\nܟ}\0)b1:HC!n8Ĳq:dׇ\n٤Шd|A#^p/ ,Xiu1h)'7Jm9\rzS|O\$*U\0@1V3Ggw]{'Sa!/GVU>{sgyTXu6[/®h;UIS16ܓ\\z3.qFψ\"*V5ߖ(|,29; ,\r\$ОZFzAGL^EpTL}Dw`<p^Rg;9bpc&nuݤt/zD\$(=1\09ޙ\nWB\nvV_\09&QO^{P<ϩܸ\"jysʮxU	8epk}p+m;\0Kqnh[Pp.pH7QRFuAn'	zD\"\0+zEz\nD*vvJ\nĤ\0ѻM0(vǶzR3@=1\\ky1UuҨ ]LCfԖ@{GD)T\0abxX5m[X{=8\$Zw\"Xg@1Ső>Yc_J@J^@<ZxD	i->0\"NCQV>3ڡ*f)lY¹DwTotށAgxH\"Ұd75\$!;\$\$Q\n ;6_~:5Ofpl\nv5\0!b(R_GD4^)3Հ׷\\*GH[06!L~V	g7yw͜Xd0e~dVEj\0w9!T%~gZt!//ں'!V)C!JnCҽ%kxP[au");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0F==FS	_6MƳr:ECIo:CXc\r؄J(:=Ea28x?'iSANNxsNBVl0S	Ul(D|҄P>E㩶yHch-3Eb bpEp9.~\n?Kbiw|`d.x8EN!23\rYy6GFmY8o7\n\r0\0Dbc!Q7Шd8~N)Eг`Ns`S)O/<x9o3n2!r:;+9CȨ\n<`b\\?`4\r#`<BeB#N \r.D`j4par㢺>8\$c1cc{n7ANRLi\r1!(j´+62X8+.\r!xh'6S\0RO\n1(W07q:NE:68n+մ5_(s\r/m6P@EQ9\nV-\".:J8weq|؇X]Y XezW 7Z1hQfuj4Z{p\\AUJ<k@ɍ@}&L7UwuYh2@u P7Ah3ÛXEͅZ]l@Mplv) HWy>Y-Y/hC[*F#~!`\r#0PC˝f\\^%B<\\fޱ&/OL\\jFjZ1\\:ƴ>NXaFAfh{\"s\n64?8^p\"띰ȸ\\e(PNq[gr&}PhW*r_sPh\nom#.\0@pdW \$ҺQ۽Tl0 HdH)ۏ)PHgUBe\rt:\0)\"t,[(DO\nR8!Ƭ֚lAV4hSq<@}gK]]=90'wA<a~WD|A2XU2yŊ=p)\0P	sn3rf\0FvGI@%+_I`\r.NKI[ʖSJaUfSzM%\"Q|9Bcaq\08#<a:z1Uf>Zle5#U@iUGn%Ұs;gxLpP?BQ\\b龒Q=7:ݡQ\r:t:y( \nd)\nX;CaA\rPGH!@9\n\nAl~HV\nsիƯbBr3\rP%ф\r}b/Α\$5PC\"wB_UgAt夅^QUjBvh졄4)+)<j^<L4U*Bg*nʖ-	9O\$طzyM3\\9.oE(i7	tߚ-&\nj!\ryyD1g]yR7\"~)TZ0E9MYZtXe!f@{Ȭyl	8;R{8Įe+UL'F18PE5-	_!7[2J;HRǹ8p痲݇@0,ծpsK0\r4\$sJ4DZI'\$cLRMpY&iz3GzҚJ%P-[/xT{pzCv:V'\\KJaM&Ӿ\"eo^Q+h^iT1ORl,5[ݘ\$)jLƁU`S`Z^|r=n登TU	1Hykt+\0vD\r	<ƙjGt*3%kYܲT*|\"ClhE(\r8r{0D_.6и;rBjO'ۜ>\$`^69#4Xmh8:c0;/ԉ;\\'(t'+̷^]Nv#,vOiϖ><SA\\\\!3*tl`u\0p'7P9bs{v{7\"{ra(^Eg/U9g/`\nL\n)(Aa\" 	&P@O\n師0(M&FJ'! 0<H*|*OZm*n/b/.o\0dn)i:RP2m\0/vOXFʳψ\"000bgj\$n0}	@=MƂ0nP/pot.̽g\0)o\n0\rFbio}\n̯	NQ'xFaJL\r\r0'd	oep4Dʐq(~ \rEprQVFHlKjN&j!H`_bh\r1n!Ɏz\\\r`V_k\"\\ׂ'V\0ʾ`ACV`\r%\rk@NB횙 !\n\0Z6\$d,%%laH\n#S\$!\$@2I\$r{!J2HZM\\hb,'||cj~gr`ļ\$+A1E <L\$Y%-FDdL焳\n@bVf;2_(Lп<%@ڜ,\"dNer\0`Z4'ld9-#`Ŗj6ƣvN͐f@܆&B\$(Z&278I P\rk\\2`\rdLb@E2`P( B'0&{:dB1^؉*\r\0c<K|5sZ`O35=@5C>@W*	=\0N<g6s67Sm7u?	{<&L.3~D\rŚx),rin/O\0o{0k]3>m1\0I@9T34+ԙ@eGFMC\rE3Etm!#1D @H(n <g,V`R]@3Cr7s~GIi@\0v5\rV'P\r\$<b%(DdPWbfO x\0} lb&vj4LSִԶ5&dsF M4\".HM01uL\"/J`{xǐYu*\"U.I53Q3QJg5s&jьu٭ЪGQMTmGBtl-c*\rZ7*hs/RUVBNˈԊiLk.t龩rYi-S3\\TOM^G>ZQj\"iMsSS\$Ib	fu:SB|iY¦8	v#D4`.^HM_ռuUz`ZJ	e@Cea\"mb6ԯJRT?ԣXMZІpQvjjV{C\r7Tʞ 5{P]\r?QAA2񾠓V)Ji-N99fl Jm;u@<FѠejĦI<+CW@Zl1<2iF7`KG~L&+NYtWH飑w	ls'gq+LzbizŢ.ЊzW zdW(y)vE4,\0\"d\$B{!)1U5bp#}m=@w	P\0\r`O|	ɍYJՂEOu_\n`F`}M.#1f*ա  zuc xf8kZRs2ʂ-Z2+ʷ(sUcDѷX!u&-vPر\0'LX Lo	>Վ\r@P\rxFEȭ%=5N֜?7NÅw`hX98 qzd%6̂t/Ll,KaN~,'ǀM\rf9w!xx[ϑG8;xA-I&5\$D\$%xѬ´]&o-39Lzy6;uzZ 8_ɐx\0D?X7yOY.#38ǀeQ=؀*Gwm Y]YOYF)z#\$e)/z?z;^FZg`^e#?eM3u偃0>\"?@חXv\"*Ԣ\r6v~OV~&ר^gđٞ'f6:-Z~O6;zx;&!+{9Mٳd \r,9Wݭ:\rٜ@睂+]-[gۇ[s[iiqyx+|7{7|w}EWWk|J؁xmq xwyj#e(ߞþ {ڏyM@ɂY(g͚-J(@;y#SYp@%so9;+	;ZNٯº kVu[x|qON?	`u6||Xس|Ox!:ϗY]c\rh9n8'\rS.1USȸX+z]ɵ?C\r\\\$`)U|ˤ|Ѩx'՜<̙e|ͳLMy(ۧlкO]{ѾFD}yuĒ,XL\\x;UWtv\\OxWJ9ȒR5WiMi[Kf(\0dĚ迩\rM7;6KʦI\rxv\rV3ɱ.R|^2^0߾\$Q[Dܣ>1'^X~t1\"6L+AeI~@pM>m<SK-HT76SMfg=GPʰP\r>2Sb\$C[()%Q#G`uGwp\rkKezhjzi(rOT=7~4\"ef~dVZU-b'VJZ7)T8.<RM\$'by\n5_wU`ei޿JbguS?`+ Mg7`\0_-_?F\0X[J8&~D#{P4ܗ\"\0@ғ\0F ?*^wО:u3xK^w߯y[Ԟ(#/zr_g?\0?1wMR&M?StT]ݴG:I)B v1<t6:W{x:=ޚ:!!\0xq&0}z\"]ozjw6JP۞[\\ }`S\0qHM/7BP]FT8S5/I\r\n O0aQ\n>2j;=ڬdA=pVL)X\n¦`e\$TƦQJlJyI	:BbPZnU;>_\n	`uM򌂂֍mLwB\0\\b8M[z&1\0	\rT+\\3Plb4-)%Wd#\nrMX\"ϡ(Ei11(b`@fSjDbf}rDR1bAIy\"WvgCIJ8z\"P\\i\\m~ZRv1ZB5Ii@x-uM\njKUh\$oJϤ!L\"#p7\0 P\0D\$	GK4e\$\nG?3EAJF4Ip\0F4<f@ %q<kw	LOp\0x(	G>@9\0TGB7-G:<Q#Ǵ1&tz0*J='J>8qХ	OXFQ,\"9p*66A',yIFRT\"HR!j#kyFezG\0paJ`Ci@T|\nIxK\"*Tk\$cƔaAh!\"E\0OdSx\0T	\0!F\nU|#S&		IvL\"\$hEAN\$%%/\nP1{) <L-R16<@O*\0J@qԪ#@ǵ0\$t|]`ĊA]PᑀCp\\pҤ\07@9bmroC+]Jrf\r)d^hI\\. g>8'HfrJ[ro.v##yR+y^F\0᱁]!ɕޔ++_,\0<@M-2WR,ce2*@\0P ca0\\PO`I_2Qs\$w=:z\0)`h\nJ@@ʫ\0 6qT4J%N-m.ɋ%*cnN6\"\r͑fApMۀI7\0M>lO4S	7c\"ߧ\06psy.	RKPAo1FtIb*<@7˂p,0N:Nm,xO%!vgz(MI	~yh\0U:OZyA8<2us~lEO00]'>ɍ:;/w'~3GΖ~ӭc.	vT\0ct';P\$\$-se|!@dObwc'@`P\"x0O5/|U{:bR\"0шk`BD\nkPc4^ p6S`\$f;7?ls߆gD'4Xja	AE%	86b:qr\r]C8cF\n'ьf_9%(*~iS@(85T[Jڍ4Il=Q\$dh@D	-!_]HƊk6:\\M-\rFJ>\n.qeG5QZ' ɢہ0zP#rtˎ<QT3D\\pOE%)77Wt[@\$F)5qG0-Wv`*)Rr=9qE*K\$g	A!PjBT:K!H R0?6yA)B@:Q8B+J5U]`Ҭ:*%Ip9̀`KcQQ.BLtbyJET7Am䢕Ku:Sji 5.q%LiFTriKҨz55T%UUIՂY\"\nSmxChNZUZ( B\$YVu@蔻|	\$\0\0oZw2Ҁx2k\$*I6InI,QU4\n).QaI]Lh\"f>:Z>L`nض7VLZueXBBZ`;J]S8f \nڶ#\$jM(ޡaG+A!xL/\0)	C\nW@4۩ RZ=8`8~hP \r	D-FyX+fQSj+X|9-sx+Vcbp쿔o6Hq@.l8gYMWMPUYL3PaH29:a`d\0&YY0٘S-%;/TBSP%f@F(֍*q +[Z:QY\0޴JUY֓/pkzȈ,𪇃jꀥW״eJFVBI\rpFNقֶ*ը3k0D{`qҲBqeDcVEnFGE>j0ga|Sh7u݄\$;a7&R[WX(q#Pזc8!HVXĎjZQ,DUaQX0ըGblBt9-oZL­pˇx6&MysҐ\"̀RIWU`c}l<|~w\"vI%r+R\n\\][6&ȭaӺj(ړTѓC' '%de,\nFCэe9CNЍ-6UeȵCXV+R+3BڌJ虜T2]\0Pat29(i#aƮ1\"S:oF)kfЪ\0ӿ,wJ@V򄎵q.e}KmZXnZ{G-ZQ}׶6ɸ_؁Չ\n@7` C\0]_ ʵ}GWW: fCYk+b۶2S,	ڋ9\0﯁+WZ!e2k.Oc(v̮8DeG`ۇL,d\"CB-İ(pp=!k}(Bkr_Rܼ08a%ۘL	\0b@\"r,0TrV>Q\"rP&3bP-xuW~\"*舞Nh%7KY^ACp\0..`c+ϊGJHEl@|I#AcD|+<[c2+*WS<rg}>i݀!`f8(cQ=f\n2ch4+q8\naRB|Rm\\qgXώ0X`nFO pHCjdfEuDVbJɦ:\\!mɱ?,TIaaT.L],J??FMct!a٧RFG!Arr-pX\rC^7&R\0f*A\n՛HyY=l<A_	+tA\0B<Ay(fy1cO;pᦝ`4СM*f 5fvy {?:y^cu'8\0ӱ?g 8B&p9O\"zrs0B!u3f{\0:\n@\0p6v.;bƫ:J>˂-BhkR`-awxEjr8\0\\\\Uhm (mH3̴Sq\0NVhHy	5M͎e\\g\nIP:Sjۡٶ<x&L;nfͶcq\$f&li0%yΞt/gU̳d\0e:hZ	^@1m#Nw@OzG\$m66}ҋX'Ii\\QY4k-.:yzH]xG3M\0@z76-DO34ދ\0Κΰt\"\"vC\"JfRʞku3M~5V j/3@gG}DBNq=]\$IӞ3x=_jX٨fk(C]^jMFաϣCzV=]&\rA<	6Ԯ״`jk7:g4ծYZqftu|hZ6i〰0?骭{-7_:ސtѯck`Y&IlP`: j{h=f	[byʀoЋBRSB6^@'41UDq}N(X6j}c{@8,	PFCB\$mvP\"LCS]ElUfwh{o()\0@*a1G (D4-cP8N|RVMn8G`e}!}p@_nCt9\0]us~r#Cnp;%>wunwݞ.[hT{值	ˁJƗiJ6O=EٴImV'@&{;op;^6Ŷ@2lNMr_ܰÍ` ( y67ǂ7/pe>|	=]oc&xNm烻oGN	pxýy\\3'I`rG]ľ7\\749]^p{<Zq4u|Qۙpi\$@ox_<9pBU\"\0005 iׂCp\ni@[4jЁ6bP\0&F2~U&}ɘ	Da<zxk=r3(l_FeF41K	\\ӎld	1H\rp!%bGXf'\0	'6ps_\$?0\0~p(H\n1W:9͢`:hBgBkpƁtEBI@<%` yd\\Y@DP?|+!W.:Lev,>qA:bY@8d>r/)B4(`|:t!?<@/SP\0>\\ |3:Vuwx(4ZjD^L'C['jº[E u{KZ[s6S1z%1cB4B\n3M`0;3.&?!YAI,)lW['ITj>FSBбPcaǌuNH	LS0Y`\"il\rB/%PNG0JX\n?a!3@MF&ó,\"lb:KJ\r`k_bAį1I,;B,:Y%J#v'{	wx:\ni}ceN`!w\0BRU#S!<`&v<&qO+ΣsfL9QBʇb_+*Su>%08@l?L1po.C&ɠBqhz\0`1_9\"!\$~~-.*3r?òds\0>z\n\001~J|Sޜk7g\0KԠdaPg%wDzm)j`kQ^1+>/wbGwOk_'-CJ7&E\0L\r>!q́7o`9O`+!}P~ENcQ)##Jz_u{K%\0=OX߶C>\n|w?FaϩUb	NYh/)G2K|y/\0Z{PYG;?Z}T!0=mNf\"%4a\"!ޟ\0}[ܾbU}ڕm2/t%#.ؖseBp&}[˟7<aK8P\0g?,\0߈r,>W/[qk~CӋ4G:XGr\0L%VFLUc䑢HybP'#	\0п`99~_0q5K-E0bϭt`lmbƘ; ,='S.bSCcʍAR,X@'8Z0&Xnc<<ȣ3\0(+*3@&\r+@h, \$O\0Œt+>bʰ\r><]#%;NsŎ*c0-@L >Yp#-f0ʱa,>`P:9oovR)e\0ڢ\\\nr{îX:A*.D7#,N\rEhQK2ݩz>P@	T<=:XGJ<GAf&A^p`{0`:);U !e\0cp\r:(@%2	S\$Y3hC:O#L/k,Koo7BD0{jj&X2{}Rxvأ9A0;0-5/< N8E	+ЅPd;*n&8/jX\r>	PϐW>KOV/U\n<\0\nIk@㦃[Ϧ²#?%.\0001\0k`1T ɐlp< .>5\0	O>k@Bn<\"i%>z3P!\r\"\r >adU?ǔ3Pj3䰑>;>t62[޾M\r>\0PBOe*Rny; 8\0o0i3ʀ2@?x[Law\nsAx\r[a6clc=ʼX0z/>+W[o2)e2HQPDYzG4#YDp)	Hp&4*@/:	T	aH5h.A>`;.Ya	t/ =3BnhD?(\n!Bs\0D&DJ)\0jQyhDh(K/!>h,=tJ+S,\"MĿN1[;Т+#<IZğP)LJDP1\$Q>dOv#/mh8881N:Z0ZT BCq3%@\0\"XD	3\0!\\8#hvibT!dV\\2SŒ\nA+ͽpxiD((<*+ETBSCȿT eA\"|uv8T\0002@8D^oo|NJ8[3Jz׳WL\0\0Ȇ8:y,6&@ Eʯݑh;!f.B;:[Z3nȑAqP4,Xc8^`׃l.ShޔO+%P#Ρ\n?IBeˑO\\]6#۽؁(!c)N?EB##D DdoPA\0:nƟ`  Q>!\r6\0V%cbHF)m&\0B2I5#]D>3<\n:ML9C0\0(ᏩH\nM\"GR\n@`[\ni*\0)u)Hp\0N	\"N:9q.\r!J{,'4BlqXc4N1ɨ5Wm3\nF`'Ҋx&>z>N\$4?(\n쀨>	ϵP!Cq͌pqGLqqGyH.^\0z\$AT9FsЅD{acc_Gz) }QhHBָ<y!L!\\'H(-\"in]Ğ\\!`MH,gȎ*Kf*\0>662hJ7{nq8H#cH#\r:78܀ZZrD߲`rG\0l\nIi\0<\0Lg~E\$P\$@PƼT03HGHlQ%*\"N?%	\nCrWC\$p%uR`%R\$<`Ifx\$/\$\$O(\0\0RY*/	\rܜC9&hh=I'\$RRI'\\a=Eu·'̙wI'TK9%d!j&v̟\\=<,E`Y\\*b0>r,dpd0DD ̖`,T 1% P/\rb(JT0``ƾJtʟ((dʪh+ <Ɉ+H%i#` 'B>tJZ\\`<J+hR8hR,J]gI0\n%J*YJwD&ʖDRK\"1Q AJKC,mV-KI*r\0L\"Kb(J:qKrdʟ-)ˆ#Ը޸[A@.[Ҩʼ4.1J.̮u#Jg\0򑧣<&K+	M?/d%'/2Y>\$l\0+}-tͅ*R\$ߔK.JHʉ2\rB(P6\"nf\0#Ї %\$[\nnoLJe'<1KyY1s0&zLf#Ƴ/%y-ˣ3-KL΁0[,̵,0(.D@2L+.|2(L*S:\03G3laːl@L3z4ǽ%̒L3!033=L4|ȗ+\"47,\$SPM\\?JY̡+(a=K4C̤<Ё=\$,UJ]5hW&tI%5ҳ\\M38g́5HN?W1H^ԸY͗ؠ͏.N3M4Å`i/P7dM>d/LR=K60>I\0[\0\r2Z@1279FG+Ҝ\r)hQtL}8\$BeC#r*H۫-H/6\$RC9ب!7k/P0Xr53D<TԒqKnH<F:1SLr%(u)Xr1nJIS\$\$.·9IΟ3 LlΙ9CN#ԡ\$/s9@6tN9N:7Ӭ:DM)<#M}+2NO&JNy*ٸ[;O\"mM<c´8K,N=07sJE=TO<J=D:C<ˉ=Kʻ̳L3LTЀ3S,.q-s7>?7O;ܠ`OA9ϻ\$O;`9nIAxpE=O<52O?d`NiO>3P	?OmSMˬ=(dAȭ9\0#@9D&?i9\n/AȭASPo?kuN5~46=򖌓*@(N\0\\۔dGp#>0\$24z )`W+\080菦z\"T0:\0\ne \$rM=r\nNPCmt80 #J=&3\0*B6\"#>	(Q\n81C\rt2EC\n`(x?j8N\0[QN>'\0x	c\n3Ch`&\08\0\nO`/A`#XcD tR\n>dBDLDt4jpGAoQoG8,-sK#);E5TQG4Ao\0>tMD8yRG@'PC	<PC\"K\0x~\0ei9v))ѵGb6H\r48@M:FtQ!H{R} URpO\0It8[D4FD#+D'M>RgIQJU)EmTZE'iEqFzA>)TQ3H#TLqIjNT&ChX\nTK\00005JH\0FE@'љFphS5F\"oѮe%aoS E) DUQFmѣMѲe(tn U1ܣ~>\$ǂ(hǑGy`\0	G35Sp(PG\$#	N\nV\$]ԜP=\"RӨ?Lzt1L\$\0G~,KN=GMNS)O]:ԊS}81RGe@C\0OPSN1T!P@SSG`\n:Pj7R @3\n DӠL	\0Q5CPSMPv4?h	hTD0֏>&ITxO?@UR8@%ԖKNKRyEE# @%LQQ?N5\0R\0ԁTFԔRS!oTEC(ĵ\0?3iSS@UQeM	K\n4PCeS\0NCPO!\"RTSNU5OU>UiIPU#UnKPUYT*CU/\0+):ReA\$\0xWD3`U5IHUY:P	e\0MJiQ>@TC{u?^v\0WR]U}C1-5+U?\rW<?5JU-SXL \\t?sMbՃV܁tT>MU+	Ec9Nm\rRǃC8SX'RXjCI#G|!QGhtQ )<Y*RmX0MOQYhduZ(Ao#NlyNVZ9IMVZuOՅTTEՇַSe\nXSQER[MFVO=/>gչTVoUTZN*T\\*S-pSVqM(Q=\\-UUUVCZ\nuV\$?M@UWJ\r\rU\\'UW]WW8N'#h=oCF(:9YuV-U9]C:U\\\nqW(TT?5P\$ R3⺟C}`>\0E]#R	#R)W:`#G)4R;ViD%8)Ǔ^Q#h	HX	\$Nx#i xԒXR'9`m\\\nEQ`bu@NdT#YYGV]j5#?Lxt/##酽OPQ6^ M\\R5tӚp*XV\"WD	oRALm\rdGN	6p\$P废E5Tx\n+C[V8UDu}ػF\$.Q-;4ȀNX\n.Xb͐\0b)#NG4KZS^״M8d\"C>dHe\nY8. ҏFDW1cZ6QKH@*\0^\\QF4U3Y|=ӤEۤ?-47YPmhYw_\rVeױMُe(0F\r!PUIu7QCю?0gu\rqधY-Q=g\0\0M#US5Zt֟ae^\$>ArV_\r;tHWZ@HhzD\0S2J HIO'ǁeg6[R<? /KM\n>HZ!iTX6iC !ӛg G }Q64>w!ڙC}VB>UQڑj8cUT'<>HC]V7jj3v`023x@Uk\n:Si5#Y-wM?cMQGQуb`\0@ҧ\0M)ZrKX֟WllTMD\r4QsS40sQ́mYhdC`{VgE\nXkՁ',4^6#<4NXnM):OM_6d[\"KUn?lx\0&\0R56T~>ո?Jn Z/i6glͦUF}.JLCTbM4cLTjSD}JtZ:Ld:Ezʤ>V\$2>[p6R9uW.?1RHuR?58ԮDupcZ?r׻ Eaf}5wYϒWwT[Sp7'_aEk\"[/i#\$;mfأWOF\r%\$ju-t#<!\n:KEA]\nUQKE#X5[>`/D֭VEp)I%qnx):le[e\\eV[j7 -+GWEwtWkE~uQ/m#ԐW`yuǣDA'ױ\rՙOD )ZM^u-|v8]ghLW\06X=YdQ7ϓ9r <֏DB`c9`D=wxI%,ᄬj[њO ``|.	AO	@@ 0h2\\ЀM{e9^>@7\0˂W\$,Ś@؀w^fm,\0yD,ם^X.ֆ72f;6\n^zCקmzn^&LFF,[eaXy9h!:z9cQ9b !Gw_Wg9S+tptɃ\nm+_	\\k5]4_h9 N]%|7֜];|X9|G[\0}UMCI:qOVԃa\0\rR6π\0@HP+rSWp7I~p/H^E-%̻&.+Jђ;:!N	~/W!BL+\$q=+`/Ƅe\\xpElpSJSݢ6_(ůb\\O&\\59\09nD{\$Kv2	d]vC?tf|W:p&Ln賞{;GR9T.yI8\rl 	Tn3T.93ZsG:	0z.]ģQ?gT%xՌ.n<-8B˳,BrgQɎ`2:{gsgZ ׌<w{bU9	`5`4\0BxMp8qnah@ؼ-(>S|038h\0CzLQ@\n?`A>2,N&xl8sah1|BɇDxB#VV׊`Wa'@	X_?\n  _. Pr2bUarI~S\0ׅ\"2>b;vPh{[7a`\0˲jo~v|fv4[\${P\rvBKGbpO5ݠ2\0jلL)mVejBB.'R{CV'`؂ %ǀ\$O\0`4 N>;4/π*\\5!`X*%N3SAMƔ,1\\caϧ @˃B/0`v2`hDJO\$@p!9!\n17pB,>8F4fπ:733T8=+~n\\e<brFز CN:c:l<\r\\3>6ONn!;@tw^FL;,^a\ra\"ڮ':vJe4א;_d\r4\r:S2[cXʦPl\$ޣiwd#Bb`:~ <\02RP\rJ8Dt@E\0\r͜67Y\"\r3.+z3;_ʟvLwJ94IJa,A;s?N\nR!ݐOms_-zۭwzܭ7zMo\0aݹ48PfY?ieBS1\0jDTeKUYS?66R	c6Ry[c5]B͔R_eA)&[凕XYRW6VYaeUfYewUbwEʆ;z^W9קݖ\0<ޘe9Sda	_-L8ǅQTH[!<p\0Py5|#P	9v2|Ǹfao,j8\$A@kabcf4!4cr,;b=;\0źcdXbxaRx0Ah+wxN[BpwT8T%Ml2}s.kY0\$/fU=sgKM ?`4c.!&分gf/f1=V AE<#̹f\n)Np`.\"\"AqX٬:a8fVsGr:VcgVlg=`WygU˙ẼeT=x 0 M@%κbwfO筘*0|t%PpgK?p@J<Bٟ#`192g!3~nlfVh.aC?-168>Aa\ry0iJ}z:\r)S@h@YmCEgcyφ<h@@zh<W`:zO\rWV08f7(Gy`St#f#C(9؀d8T:0 q79phAg6.7Frb jA5a1hZCh:%gUD9Ɉ׹0~vTi;VvSw\r΃?fnϛiYa3·9,\nr,/,@.:Y>&F)}biOi:dAnc=L9Oh{ 8hY.\rև1QU	CheO+2oNzp(]hZ|OczD;T\0j\08#>Ύ=bZ8Fj;޺T酡w)N`ÅB{z\rc|dTGi/!i0'`Z:CH(8`V\0ꧩWǪzgG-[	iN\rqno	ƥfEJapb}6=o,tY+EC\rPx4=@.F[zqX6:FG#\$@&abhE:`S11g12uhY_:Bߡdc*\0ƗFYF:n=ۨH*ZMhk/냡zٹ]h@1\0ZK^+,vfs>O|s\0֜5XѯFnAr]|Ii4 C h@عcߥ6smOgXV26g?~YѰscl \\R\0cA+1\n(^368cz:=z( ;裨sF@`;,>yT&dLן%-CHL8\rbMj]4Ym9ZBP}<X̥+g^M + B_FdXlw~\r⽋\":qA1X3ΓEh4ZZ&1~!Nfo\nMe଄XI΄G@V*X;Y5{V\nTz\rF3}mp1[>tew@Vz#2	i{9p̝gh+[elUAٶӼi1!omm*K}!Ƴ{mef`mCz=n:}g TmLu1F}=8ZOmFFMfOO/ޓVoqjn!+ZI.9!nG\\3a~O+::K@\n@Hph\\BdmfvCP\" .nW&nHY+\rzi>MfqۤQc[H+o*1'#āEwD_X)>s-~\rT=- ym{hjM)^'@V+i;FD[b!B	:MPۭoCvAE?CIiY#pP\$kJq.07xlsC|bo2X>M\rl&:2~cQod-URoYnM;n#\0PfPo׿(Cv<[o۸fѿ;ẖ[Y.oUppU.B!'\0<T:1<nFIǔV0ǁRO8w,aFɥ[ΟYO/\0oxQ?:ً`h@:/Mmx:۰c1v;^@@\n{;B8 g坒\\*gyC)E^Oh	Au>@DY`o<>pķq,Y1Q߸/qg\0+\0D? k:\$ץ6~I=@!vzO񁚲+9iag?0Gnq]{Ҹ,FO <_>f+,	&·yǩO:U¯L\núI:2-;_Ģ|%崿!f\$Xr\"Kni\$8#gt-r@L圏@S<rN\nD/rLdQk࣓eЭ\n=4)BךZ-|HbHk*	Q!'G Ybt!(n,POfq+XY\"b F6r f\"ܳ!N^rB_(\"K_-<*Q/,)H\0r\"z2(tه.F>#3268sh٠ƑI1Sn20-42As(4˶\0#rK'ͷG'7&\n>xJGO8,08\0W9I?:3n\r-w:;3ȉ!;ꃘZRM+>0/=R'148m%ȥ}χ9;=nQ=hhLGkW\r	%4ҜsΖJ3s4@U%\$N;?4N2|Z3h\035^xi2d\r|Mʣbh|#v` \0ꐮ\$\r2h#?I\n+o-?6`ṽ.\$KY%J?cRN#K:KEL>:@jPn_t&slm'ЩɸӜ;6ۗHU5#Q7UWYU bNW_;TC[<ږ>WCU6X#`MI:tӵ	u#`fu\$tX`f<;bgh97S58#^-\0չR*'(qZ壣XQFUvW GWTW~ڭ^WJ=_ؗbmbV\\l/MTmTOXu=_ITvvua\rL_qR/]]msu=H=ug o\\UՅgM	XVU%h53U\\=QMvgmuehbMGCeO5ԁO5Yi=e	GTURvOa*ivWXJ5<bu]<\$u3v#'euR5mvD5.vW=U_(\\V_<Sn)1M%QhZTf5E'WvUmiՂU]aWUdRv-YUZuUVUiRV[ZMU\\=v{XwQhuHvgqݴw!oqtU{TGq{#^G_ubQi9Qb>NUdk5hPmu[\0_[Y-r(CrMeJ!h?QrX3 x#x<{u5~-uYyQ\r-\0uգuuٿpUڅ)P\r<uS0w-i!֊Bd]ŇEvlmQݏ6kJwĞEDURev:XcNW}`-tH#ebu	~B7 ?	OPCWSE͕V>U7mӂz=1+mI,>X7].*	^N./\")	s|ӟl}!5npjh}mEzHaO0d=A|w߳uvGx#bcSo-tOm`C^M@hn\$k``HD^PE[]rRm=.ه>Ayi \"	o-,.\nq+fXd*߽K؃' %a9pKLM!,zX#VuH%!63JryՁq_u	W|@3b17|~wﱳA7	9cS&{%VxkZOwUr?N |C#Űկ /9ftEwCa^\0O<W{Y=engyf0h@S\0:C^VgpE9:853ާ@j_[+ǩx^ꮆ~@чW㓜9xFC.k^IpU9S\$\r4\0O)L[p?.PECSI1nm{?PWA߲;D;SaKf%?X+B>9GjczA͎:an0bJ{o!3!'K}\\3W5xL;2ζna;׺Xӛ]ox{5ޙjXvӚqEE{р4{	\n>aﯷL'{\n>JߌӗY\rOʽt-O49F;GIF1oOa{w0Ư;񔄑loJTb\rw2J=D#n:yS^,.?(I\$Ư3s4MaCRG̑I߰n<zyXN?.=DǼ\r\n\ro\nПCl%Y߰G}#VН%(3ɍr};׿Gn[{_<m4[	Iq?0cVnmsnM\"Nj1w?@\$1>^\\{n\\7ٟic1hoo?j<GxlSr}|\"}/?stI&^1et,*'F=/Fk,95rV쑈o9/F_~*^{I_^nN~AdUwqYT2G?&:y%XJCd	Wߎ~G!J}B-;h*RE~.~SAqDVx='E(^~o7~M[Q(ynP>[WX{qaϤ.&N3]HY[&8?3݆#Be6@[G\r+}_7|N4~(z~%?[1S]xkKxO^ArZ+*WkwD(R:\0'm!O\nu.[ P!}m 1pu,TL 	0}&P٥\n=D=\rA/o@2t6DK\0q7lB(;[kr\r;#lŔ\r<}zb+O[WrX`Z ţPm'FnSp-\0005`dPǾ;n\05fPEJw .?;Nޥ,;Ʀ-[7ei-dَ<[~6k:&.7]\0/59 @eT:煘3dsݝ5䏜5f\0PHB8JLS\0vI\07Dma3e?B\$.Ef@nbGbq3|PaˈϯX7Tg>.p5AHŵ3S,@#&w3m[Iѥ^̤J1?gTၽ#S=__	Vq/C۾݀|D g>܄ 6\r7}qŤJGB^\\g&%[2Ixì6\03]3{@RUMv<1szuP5F:i|`qV| \nk}'|gd!8 <,P7m||IA]BB F0X	D`WqmOL	.(pҁ\"!\0AV7kM\$N0\\\"f\0uq,5A6p\nΐjY7[pK4;l5n@\\fl	MP3CHbЌcEpP4eooe{\r-2.֥P50uG}\0<\r!~\n7Fd>a%c6ԞM|dO_?JC0>Ё&7kM4`%flΘB~wxZGP20=*p@BeȔ|2\r?q8Њ(yr0>>E?w|r]%Av@+XAgsCAXmNҝ4\0\r8JJǸDҚ:=	S4F;	\\&P!6%\$ixi4c0B;62=1̈PCmdpc+5\$/rCR`MQ6(\\2A\\lGl\0BqPrBт_6Ll!BQIGXRbs]BHr`X\$p8	nbR,±L\"E%\0aYBsD,!ϛpN9RbG4MtjUy\0%\$.iL!xғ(.)6T(Ia%K]mt&G7ITMB\rza])va%41Tj͹(!\\\\W\\t\$0%\0aK\$TF(YC@HHnDdWphZ'ZC,/\$JFBuܬQ:ΥA:-a#=jblUg;{RUEWnUaVNjuG*yֹ%@*Yx_z])v\"RLVIv=`'U) S\r~R\ni)5SD49~b;)3,9M3HsJkTÜ(uJ][\$ufob\n.,Yܵ9j1'!1\$Jgڤ՟ĆU0ZuahcH,YtKb55/dYAU҅[W>_V\r*j-T zYdcmҹ:[Ut-{l	i+a).[_:5hW§m%JI[Th>;X̺dSdV;\rƱ!NK&AJu4Bdg΢.Vpmb)V!U\0G丨`\\q7QbVL:ՂZ.N*ԏU]ZlzR D1I£r:\0<1~;#JbMy+۔/\"ϛj<3#̌:P.}eD\"qyJGsopX\rd\rxJ%ƼO:%yy,%{3<XøzEz(\0 D_.2+gbcxpgި|9CP48U	Q/AqQ(4 7e\$Dv:VbN4[iv2\rX1AJ(<PlF\0\\z)W(4 p`\rda6Oma}q`6P'h3|f jAz+DUWD5%#x3{L\r-͙]:jdP	jfq:Z\"sad)G3	+rNK1Qx=>\"-:FIك*@ԟyT\\UY~3Df,s8HV't9v(:B9\\Z(&E8W\$X\0\n9WBb66j9 ʈ?,| ag1\nPs\0@%#K\r\0ŧ\00?š,\0hh\08\0l\0-ZjbŬ\0p\0-f`ql0\0i-\\ps7e\"-ZlbE,\0]P Eb\0/,Z\r\0000[f-@\rӯEڋ/Z8~\"ڋ.^Qwϋ\0/t_ȼE\00d]bŤ|\0\\ؼE\0af0tZnJ\0l\00L^Qj@J^q#F(1/[1I.^8\0[q[Ñl\" \00,d\rc{cE\0o0]\0\rc%ۋ8wZ-\\{֋G/\\bp@1\0a1s!Ũ//]8~c\"ۋ2cΑm\"9q/\\^fQ~c_-\$i\"\0003fXqx#\09Z.i@F3tZH \rcKb\0j/Dj1IhavƩOZ4Zт#YE\0i.hHsX/F<.jb\0mV/d\\bE3T^(шcKFR]Xq6]hc6Eċ66hn\0005sn/dn`\r\"F-D`ՑN2Ybx#\\닇V3x1xFx\06bq!8|^ub-rq:%0pp#\06fǢŬd0qH\$@q-^B4\"\081/lnxϑG3:0tjh~@Ƽ3vHbG(e4gغq21-nX\"F<Q1\\j1Eǋ4m[nz7yh1#ގ/3\\xqKG6o1{FJ6lXq⣄u9r(1Gc\0f:rX#Ž\0i<\\}bF\0s7y2#uFe\">4i\n<{㑍ƉJ;]1#0J;4^DǮ4i(H#Ex/n1/ǡj6,l1t/\0005%0]xGG5!0rq2ޑNFPo\"4_1d%e 3s8G5 6[HcHjY;[辑b! y@\\q#WHN;cQ:-%.kXƑG͌1DfߑcWFl!0c Eܐ;lq\"F7\\\\Oq.T|\"?Ef9TyYѩSG1A\$f9R\n\"x>BHߤ\0:\$e1F?=3Tu)\nqb~<TαcH.m~CwHʱ#/I]~3^ф#>Y4^QjcK1\"8|6c\"B\"b4%G\0e\"/t1r1e!v2y<Ǡ8\\oђ#tѐ\rz@}Hby 1\\deGZ3~r)1ȿBl~H:dF-?k8qc(F͋K5|myc1<*@j1ž>IZQj2\$0hQVFT	\$Al~qڣȱ\$>\\p\rq\$/u%!Jq \$tEGN-Tq)\"Hʌ=X2-H8\\nRW\$H\"C\\_\0d\$f\".Du	'QzE&0toqjƿR@du##LLk*q\$*Gđi@TilE5r\\dI\"/Z0j\$Tz5Ld3o.Tq!1{9ZQbFwJ94n{(-82hu;\$-DkrsH#Y7\"/E	\$j^-]7[\"N\$W/]\$+1Ga/&IDn@\$!\$-k!Q)(N/\$tOKzPtX[\0Gw(*K\$v1c'G̞Ixd\nA8\\rXaIiNI%\$_6fQ#I5#Fغ#E⒕\"3\$IcHvR|QcE:RehEΏfK`8r.#Es0LRF!\nC\$`\$H?nPe!@F'/%N,hrF\$3tҀ!1<CQ%ÒJZf.6ōCԜ.[Bҿx\0NRn`Y\n%+NIMs:ùYdefB[nƹYmRגYCXjU+Vk,\0Pb@exVyT7u[Jȱ\nDeRmx&l\0)}J,\0IZƵ\$k!YbRe/Qk5.e5W`\0)Yv\"V\0\n%`YnաaxÆQ!,`\"	_.偩Ɩtm\$\"J֍v%M9j	斧*Kp֔;\\R 3(^:}|>µa-'U%w*#>@̬eJ;Pw/+5E\rjnd^[cΰuz\\ؐ1mi\"xp;P)#ؒ!A;	4a{`aV{KU8㨟0''o2yc̸9]K@җ^lBOr,du8?%gBYn+%ce\0ऱYr@f(]ּ\nbiznSS2GdBPj@(ȥ!-ve*c\04J炒,U	dej'TH]ԊG!)u֯үZB5̓W0\nRW\\Q j^r%l3,Yyf3&܎Q:ϵ2mR)T(KR0ʔ@YY:e3\r%T%XST.J\\0hąD!:uU\"Ło+7\"f'R\0J2S2#nm I劜\"X[ր} Jc9p0Q(U\0xDEW.L=<B0+)ZS V;\\I{5IA,dWu5Ew\n\$%ҁ2i_\$+O,XՑJg&JG%\\Jb.^LTFl薹]k#f@LGĐTٗH\"q1S̰jV(ΙZVzņ,G.1FgN;1ÊV5E5`\0Ct=F\nṛαK\0ۊ%D]Q\$\r\03J\\,͙<T4*.YKDQLS%,g<u0Uĉ*x(NYv!y	w4fdrGM \$^;)<P]D%%;jI0au^Jp[)v3RhRE\nL_#5|ܾm3P*\\Y51X	iN\$\"ah*KUV8u%&r˚5og;rMl[ƨgUq깚h|eO2f MlW2AP׹v~eDe3UӫlE62iUbUViI!\$iʭ&Z:xm!ņ.Ofwү!kݤ̓6b\"IJ]]:T6Vr}ǫ]U	ys7fMř3Y:T_Mw%3n\nz*3h	`UL,ۄ5vfÛ42_QhuD\no)ĜիM97foۼrWB~iTeyQTN\ndpr#M;4pt(;5	|ǂ',AV7ܔUA&RP\"yҷ)[n-3V,?s6p3fA9k|ɮSf*@5gɿ2}UݙHFl%p«IebeMSO\r[i3fLVruNA:%ry3Q_̸W.^Sl@&5Yl1}Vxgʅ^SnQ!:5ZiZCԈ:3qg%Dݪ{U3tZ`u%w:ZQ:QW f훿9Jpl)3xvK7b#X+J(hP*ӁΛ!הŏSLh*'\npBڪgNʝ8BuҪΌ8niIsUSI;vvڳUsR7Nu8H|ӷ̎8q+'`x9R	ծMaR8x)'!;UY֓sNIg:KTy3gYkܳn'LO(3w44lJw9\\hf(_~}9N\0b\"Y餃Th,ڞ@D\$I;eUn,O	Xg-+>ti'Gl%\08VBU1ye\0KT4mV2)\r]I/\rFXߨaG¹*>ERZ-)I\$:a\0Fybagw(_@v}iʳS^25DԳ	UROJH\\isfKNqiSgO\nF~|*@gR_Q<9sܬ3i+ؗ.Cw|y6aOY9ɖ\nԽ-([_}S]cS=YU-><\n<sOQ4F^}\0007uk(//5{L9\0&[<s\0&#@h3V}H*w+]'D&@ց]);TGe3\\nd\$:uN4ykt-dR!7e4(P!-94_PMGbıw6OSF)yh0+qT|+u+A?	T3.q41Te\n:P{T\nh?TAS*+u>\\ZY췢wEJ%sLdy+\rCߡ'Al,y3͗`	_*P ThKDV~5	0+,-?]3֍K`^I42(]w.r]\nYƨB	}ЋR g}:HJWP\"޵V\\<? >ܬ݆=:\n0\\+SfUU,WCֈOn΅.e9|RI'[/2QBn:I\ng9\r,R6Q\$X+>`\n)/_8Qi=v?5v\0 \nLGDmw\\F֌ѢdꟵ}s\"Yv|J*9h@XEU*(oQ]\$B,KTvAptCɃ\nC,/<ڙEW-VP=W*%K-Q`9	(59Ӏm)X@2T@\nSbdEδa+DX|U		F 2%5\njmW+xKV3#CTek&,ljbd7)ӓ\"\n+PbI@3ܵjUEs)Df뒃PZ3AΌ\nwTh𗲪ۘ4Z<uߩdqˊu(bKGnTﮈ]zf%#3IfS&}@D@++Ah\nUޥ|B;UmUEN!x21\0GmvH~HT)WYN\"k5vT#=ڥ<\n}#R3YHRIͳܦ;Rl1luB%TQJ*'E0idw,zͥ:\$;?j))ԏ\$32J}&[\$́;DnE״+0aZ{C (:O@hD\0`PTouF\rQvoܡ\$S+#7IzrpkDWFs9Q 1g#\0\\L\$3gXyy -3h!nX]+	ɝc\0\0b\0\r-{\0Q(Q\$s0m([RuV>+J[6J\0֗\\,K3.]a_\0RJ Ɨ`^ԶClRIK\n\$nŏKj\n~/mn].`ij#Kf:`\0錀67K▨zc\0/K/dFE\0aLdZ`JSʙ24@/(L0`ĩ_L]4ZhЩSDM4:cSRME4iSGEMj4zdթSFKL%4e%\$lKM21ڔiMV.ڔiLz/ۣӄM,`_imSgMƜjg59.9j_S.9_S.7r)%[2m8uTS3M:]3qnӱKN1|^kt\"HgKj-;zciӚ\r<_-iӸ\"֞U.iRڑkOF=:\\\$ZөMLE5xӻ_\"֜=<\0tS9OҞ1~iO>~q)F=6:~JP:=T)ƫPJ8@w*O5]>tT\n!\"6Y	)H/P3	/P~	Ӯ!\"Cj eNJ*%41QCZQjTBQ.\rE)\0004\$2SM+<jtj0,9Q}F\0\$sTaKΣ]Ecj*'KMMGxRT1#QꡥG5:zL4u6z\"j\"TKuN֣Gg\$jFSܨQ2H\"MT%RHz\$,wRe.\$rz)Ԧ-QJʪ@԰=R&/Iʕ1*]T7QD&өqN_(qc[TwQR崜J\0nT.956c܌SzH7R}Sr8N\"bTQ5MN#ES§-H7\"T_S}G̕?*yԩSP*5#܍T:]PʟC*ԉT:-K85CR--MȾH 'THHыTR,܋GTک-SJM*ԩUTکmMHM>gSD5MRHwU\"K8RڌU*-U*n¾TIR,tZYIUF51W)vk_KƫpJ5ZjůR4r\n^jICK}Uʓ_ԛO=NR*F-R%Wc\\aV>EYjdëUάWX5*ՋUyZ1kը7VR\\H5h*UUƧM[kvո3V}[(5WzոiBO1TV;[pRGu;T@0>\0/IW`]\08P]1m*ǍyUzmW|ݓ[֯]JшUZ*5\\jZ`Z5~EW4Z5hQ^cXZS1oVU&T5}cU^Xdm*kUuSfG=[jsտXKc\niRHi#uWtXcĹUrڢUZՇNEX4udEeV^KnV8sX¥f/hJ-J]ӂzO<Eh\$勓\0K<bw>N\")]b	+z.cS.iF	QNQV*O[XnxP	koN}<aOIߓhT;r񉉤VD6Q;z]j~':[Iv7^ʑjw[ņ:u Ds#\\w<n|*hmKv;Y҈3]^#ZjgyjħY,%;3.W\"\$3>gڜϦVTZjhYjkD*!h&Xzi+GV\"Z:Ҥ+NoGZjji]ʞkO_֬ԐmjIt#[j\rnnZ_,gĚ:9[L2W=T0f\0PU6\ns%7isY?u3nb5X|G~l&kMyS)]ܭrٸ?}u'n0W-ιbǪk?vQ7}p\nٮZ*9)5ޕZW-ZB:㫊W\0WZfpGpٮ:FpUSN/\\%s9S{ 8Zasۓ+N^9M{P5 QJy;zYV 3:DI+19M;V\rQ{ծ+FCLĹNԈ\\)\$iN'\0P]X^s1f&\"'<O̡L\0\"@%6UA1i(z݁\rՂbZ+IQO3\r=*ĉ)!`h,ЫmGPCAٲA(ZŰ%t,h/ikXEJ6IDȬ\"\naU- \nvy_ګk	aB<VD/Pa)9L(Z8vvùk	oZXk|&.東C`1]7&ę+HCBcXB7xX|10a6ubpJLǅ(mbl8I*R@tk0xX; al]4stŪ0c'l`8M8D4w`p?@706g̈~K\r Pbh\"&\nqPD\$(0QP<Q!Xx5R`w/22# `1/܁\r:²B7V7ZgMYH3 b	ZJGwgl^-R-!l7̲Lư<1 QC/ղh)W6C	*d6]VK!m05G\$R4=Cw&[YPdɚ')VK,5e\rK+1X)be)uF2A#E&g~eyfp5lYlԜ5\nm}`(M Pl9Yf]Vl-4é>`/fPEi\0kv\0fhS0&¦lͼ#fu5	i%:Fd9؀G<	{}s[7\0Ξ3ft:+.Ȕp>ձ@!Pas6q,1bǬŋZK-ar`?RxX鑡V#Ĥz; DH16D`Y`RP֋>-!\$~π`>h01&\0hIwlZ\$\\\r8~,\no_B2Da1ǩ=v<kFp``kBF6 hT T֎	@?dr剀JH@1Gdnw%JG0bTf]m(kqg\\ш3vk'^dAX~WVs*ʱdM@?}6\\m9<iݧԬh^s}-[Ksqb-OORm8\$yw##@❷\0ؤ 5F7X\n|J/-SW!f 0,wD4١RUTZX=`W\$@ԥ(XGҊa>*Y\n\n![mj0,muW@ FX=(b<!\n\"83'(R\n>@Wr!LHk\rE\nW\r'FH\$m=ۥ{LY&_\0#䔀[9\0\"@8iK0lp\ng'qbFycl@9(#JUݲ{io.{ͳ4V́VnFxz Qޞ\$kSa~ʨ0s@%y@5HNͦ@x#	ܫ /\\?<hڂIT:3\n%");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0!M*)o) qe#L\0;";break;case"cross.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0##\naFo~y._wa1JGL6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0 MQN\n}a8yaŶ\0\0;";break;case"down.gif":echo"GIF89a\0\0\0001\0\0\0\0\0!\0\0\0,\0\0\0\0\0\0 M*)[W\\L&ٜƶ\0\0;";break;case"arrow.gif":echo"GIF89a\0\n\0\0\0!\0\0\0,\0\0\0\0\0\n\0\0iӲ޻\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$je=substr($u,-1);return
str_replace($je.$je,$je,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($gg,$Uc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($gg)){foreach($X
as$Yd=>$W){unset($gg[$y][$Yd]);if(is_array($W)){$gg[$y][stripslashes($Yd)]=$W;$gg[]=&$gg[$y][stripslashes($Yd)];}else$gg[$y][stripslashes($Yd)]=($Uc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Oa=false){static$gi=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Oa?array_flip($gi):$gi));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
script($lh,$fi="\n"){return"<script".nonce().">$lh</script>$fi";}function
script_src($_i){return"<script src='".h($_i)."'".nonce()."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
target_blank(){return' target="_blank" rel="noopener"';}function
h($P){return
str_replace("\0","&#0;",htmlspecialchars($P,ENT_QUOTES,'utf-8'));}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$fb,$fe="",$jf="",$kb="",$ge=""){$I="<input type='checkbox' name='$C' value='".h($Y)."'".($fb?" checked":"").($ge?" aria-labelledby='$ge'":"").">".($jf?script("qsl('input').onclick = function () { $jf };",""):"");return($fe!=""||$kb?"<label".($kb?" class='$kb'":"").">$I".h($fe)."</label>":$I);}function
optionlist($pf,$Wg=null,$Di=false){$I="";foreach($pf
as$Yd=>$W){$qf=array($Yd=>$W);if(is_array($W)){$I.='<optgroup label="'.h($Yd).'">';$qf=$W;}foreach($qf
as$y=>$X)$I.='<option'.($Di||is_string($y)?' value="'.h($y).'"':'').(($Di||is_string($y)?(string)$y:$X)===$Wg?' selected':'').'>'.h($X);if(is_array($W))$I.='</optgroup>';}return$I;}function
html_select($C,$pf,$Y="",$if=true,$ge=""){if($if)return"<select name='".h($C)."'".($ge?" aria-labelledby='$ge'":"").">".optionlist($pf,$Y)."</select>".(is_string($if)?script("qsl('select').onchange = function () { $if };",""):"");$I="";foreach($pf
as$y=>$X)$I.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$I;}function
select_input($Ka,$pf,$Y="",$if="",$Sf=""){$Kh=($pf?"select":"input");return"<$Kh$Ka".($pf?"><option value=''>$Sf".optionlist($pf,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$Sf'>").($if?script("qsl('$Kh').onchange = $if;",""):"");}function
confirm($Ee="",$Xg="qsl('input')"){return
script("$Xg.onclick = function () { return confirm('".($Ee?js_escape($Ee):lang(0))."'); };","");}function
print_fieldset($t,$oe,$Oi=false){echo"<fieldset><legend>","<a href='#fieldset-$t'>$oe</a>",script("qsl('a').onclick = partial(toggle, 'fieldset-$t');",""),"</legend>","<div id='fieldset-$t'".($Oi?"":" class='hidden'").">\n";}function
bold($Wa,$kb=""){return($Wa?" class='active $kb'":($kb?" class='$kb'":""));}function
odd($I=' class="odd"'){static$s=0;if(!$I)$s=-1;return($s++%2?$I:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($y,$X=null){static$Vc=true;if($Vc)echo"{";if($y!=""){echo($Vc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Vc=false;}else{echo"\n}\n";$Vc=true;}}function
ini_bool($Kd){$X=ini_get($Kd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
set_password($Ki,$M,$V,$F){$_SESSION["pwds"][$Ki][$M][$V]=($_COOKIE["adminer_key"]&&is_string($F)?array(encrypt_string($F,$_COOKIE["adminer_key"])):$F);}function
get_password(){$I=get_session("pwds");if(is_array($I))$I=($_COOKIE["adminer_key"]?decrypt_string($I[0],$_COOKIE["adminer_key"]):false);return$I;}function
q($P){global$g;return$g->quote($P);}function
get_vals($G,$d=0){global$g;$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$d];}return$I;}function
get_key_vals($G,$h=null,$Th=0,$fh=true){global$g;if(!is_object($h))$h=$g;$I=array();$h->timeout=$Th;$H=$h->query($G);$h->timeout=0;if(is_object($H)){while($J=$H->fetch_row()){if($fh)$I[$J[0]]=$J[1];else$I[]=$J[0];}}return$I;}function
get_rows($G,$h=null,$n="<p class='error'>"){global$g;$yb=(is_object($h)?$h:$g);$I=array();$H=$yb->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$I;}function
unique_array($J,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$I=array();foreach($v["columns"]as$y){if(!isset($J[$y]))continue
2;$I[$y]=$J[$y];}return$I;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$I=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$I[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$I[]="$d = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$I[]=escape_key($y)." IS NULL";return
implode(" AND ",$I);}function
where_check($X,$p=array()){parse_str($X,$db);remove_slashes(array(&$db));return
where($db,$p);}function
where_link($s,$d,$Y,$lf="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$lf:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$p,$L=array()){$I="";foreach($e
as$y=>$X){if($L&&!in_array(idf_escape($y),$L))continue;$Ha=convert_field($p[$y]);if($Ha)$I.=", $Ha AS ".idf_escape($y);}return$I;}function
cookie($C,$Y,$re=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($re?"; expires=".gmdate("D, d M Y H:i:s",time()+$re)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Ki,$M,$V,$m=null){global$ec;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ec))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Ki!="server"||$M!=""?urlencode($Ki)."=".urlencode($M)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$Ee=null){if($Ee!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$Ee;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($G,$A,$Ee,$tg=true,$Cc=true,$Mc=false,$Sh=""){global$g,$n,$b;if($Cc){$sh=microtime(true);$Mc=!$g->query($G);$Sh=format_time($sh);}$ph="";if($G)$ph=$b->messageQuery($G,$Sh);if($Mc){$n=error().$ph.script("messagesPrint();");return
false;}if($tg)redirect($A,$Ee.$ph);return
true;}function
queries($G){global$g;static$mg=array();static$sh;if(!$sh)$sh=microtime(true);if($G===null)return
array(implode("\n",$mg),format_time($sh));$mg[]=(preg_match('~;$~',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G).";";return$g->query($G);}function
apply_queries($G,$S,$zc='table'){foreach($S
as$Q){if(!queries("$G ".$zc($Q)))return
false;}return
true;}function
queries_redirect($A,$Ee,$tg){list($mg,$Sh)=queries(null);return
query_redirect($mg,$A,$Ee,$tg,false,!$tg,$Sh);}function
format_time($sh){return
lang(1,max(0,microtime(true)-$sh));}function
remove_from_uri($Df=""){return
substr(preg_replace("~(?<=[?&])($Df".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Jb){return" ".($E==$Jb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Rb=false){$Sc=$_FILES[$y];if(!$Sc)return
null;foreach($Sc
as$y=>$X)$Sc[$y]=(array)$X;$I='';foreach($Sc["error"]as$y=>$n){if($n)return$n;$C=$Sc["name"][$y];$ai=$Sc["tmp_name"][$y];$_b=file_get_contents($Rb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$ai":$ai);if($Rb){$sh=substr($_b,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$sh,$zg))$_b=iconv("utf-16","utf-8",$_b);elseif($sh=="\xEF\xBB\xBF")$_b=substr($_b,3);$I.=$_b."\n\n";}else$I.=$_b;}return$I;}function
upload_error($n){$Be=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($Be?" ".lang(3,$Be):""):lang(4));}function
repeat_pattern($Qf,$pe){return
str_repeat("$Qf{0,65535}",$pe/65535)."$Qf{0,".($pe%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$pe=80,$zh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$pe).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$pe).")($)?)",$P,$B);return
h($B[1]).$zh.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($gg,$Ad=array()){while(list($y,$X)=each($gg)){if(!in_array($y,$Ad)){if(is_array($X)){foreach($X
as$Yd=>$W)$gg[$y."[$Yd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Nc=false){$I=table_status($Q,$Nc);return($I?$I:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$q){foreach($q["source"]as$X)$I[$X][]=$q;}return$I;}function
enum_input($T,$Ka,$o,$Y,$tc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$xe);$I=($tc!==null?"<label><input type='$T'$Ka value='$tc'".((is_array($Y)?in_array($tc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($xe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$I.=" <label><input type='$T'$Ka value='".($s+1)."'".($fb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$I;}function
input($o,$Y,$r){global$g,$U,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Fa=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Fa[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Fa);$r="json";}$Cg=($x=="mssql"&&$o["auto_increment"]);if($Cg&&!$_POST["save"])$r=null;$jd=(isset($_GET["select"])||$Cg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ka=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($jd[""])."<td>".$b->editInput($_GET["edit"],$o,$Ka,$Y);else{$rd=(in_array($r,$jd)||isset($jd[$r]));echo(count($jd)>1?"<select name='function[$C]'>".optionlist($jd,$r===null||$rd?$r:"")."</select>".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).script("qsl('select').onchange = functionChange;",""):nbsp(reset($jd))).'<td>';$Md=$b->editInput($_GET["edit"],$o,$Ka,$Y);if($Md!="")echo$Md;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ka value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?" checked='checked'":"")."$Ka value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$xe);foreach($xe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($fb?' checked':'').">".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'>";elseif(($Qh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($Qh&&$x!="sqlite")$Ka.=" cols='50' rows='12'";else{$K=min(12,substr_count($Y,"\n")+1);$Ka.=" cols='30' rows='$K'".($K==1?" style='height: 1.2em;'":"");}echo"<textarea$Ka>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ka cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$De=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($U[$o["type"]]?$U[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$De+=7;echo"<input".((!$rd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($De?" data-maxlength='$De'":"").(preg_match('~char|binary~',$o["type"])&&$De>20?" size='40'":"")."$Ka>";}echo$b->editHint($_GET["edit"],$o,$Y);$Vc=0;foreach($jd
as$y=>$X){if($y===""||!$X)break;$Vc++;}if($Vc)echo
script("mixin(qsl('td'), {onchange: partial(skipOriginal, $Vc), oninput: function () { this.onchange(); }});");}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Sc=get_file("fields-$u");if(!is_string($Sc))return
false;return
q($Sc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$dc;$I=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$I[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$dc->primary),);}return$I;}function
search_tables(){global$b,$g;$_GET["where"][0]["val"]=$_POST["query"];$ed=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$H||$H->fetch_row()){if(!$ed){echo"<ul>\n";$ed=true;}echo"<li>".($H?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($ed?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($zd,$Ne=false){global$b;$I=$b->dumpHeaders($zd,$Ne);$Bf=$_POST["output"];if($Bf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($zd).".$I".($Bf!="file"&&!preg_match('~[^0-9a-z]~',$Bf)?".$Bf":""));session_write_close();ob_flush();flush();return$I;}function
dump_csv($J){foreach($J
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$J[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$I=ini_get("upload_tmp_dir");if(!$I){if(function_exists('sys_get_temp_dir'))$I=sys_get_temp_dir();else{$Tc=@tempnam("","");if(!$Tc)return
false;$I=dirname($Tc);unlink($Tc);}}return$I;}function
file_open_lock($Tc){$gd=@fopen($Tc,"r+");if(!$gd){$gd=@fopen($Tc,"w");if(!$gd)return;chmod($Tc,0660);}flock($gd,LOCK_EX);return$gd;}function
file_write_unlock($gd,$Lb){rewind($gd);fwrite($gd,$Lb);ftruncate($gd,strlen($Lb));flock($gd,LOCK_UN);fclose($gd);}function
password_file($i){$Tc=get_temp_dir()."/adminer.key";$I=@file_get_contents($Tc);if($I||!$i)return$I;$gd=@fopen($Tc,"w");if($gd){chmod($Tc,0660);$I=rand_string();fwrite($gd,$I);fclose($gd);}return$I;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$Rh){global$b,$ba;if(is_array($X)){$I="";foreach($X
as$Yd=>$W)$I.="<tr>".($X!=array_values($X)?"<th>".h($Yd):"")."<td>".select_value($W,$_,$o,$Rh);return"<table cellspacing='0'>$I</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($jg=is_url($X))$_=(($jg=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$I=$b->editVal($X,$o);if($I!==null){if($I==="")$I="&nbsp;";elseif(!is_utf8($I))$I="\0";elseif($Rh!=""&&is_shortable($o))$I=shorten_utf8($I,max(0,+$Rh));else$I=h($I);}return$b->selectVal($I,$_,$o,$X);}function
is_mail($qc){$Ia='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Qf="$Ia+(\\.$Ia+)*@($cc?\\.)+$cc";return
is_string($qc)&&preg_match("(^$Qf(,\\s*$Qf)*\$)i",$qc);}function
is_url($P){$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cc?\\.)+$cc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($Q,$Z,$Sd,$md){global$x;$G=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($Sd&&($x=="sql"||count($md)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$md).")$G":"SELECT COUNT(*)".($Sd?" FROM (SELECT 1$G$nd) x":$G));}function
slow_query($G){global$b,$ci;$m=$b->database();$Th=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$de=$h->result(connection_id());echo'<script',nonce(),'>
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'kill=',$de,'&token=',$ci,'\');
}, ',1000*$Th,');
</script>
';}else$h=null;ob_flush();flush();$I=@get_key_vals($G,$h,$Th,false);if($h){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$I;}function
get_token(){$pg=rand(1,1e6);return($pg^$_SESSION["token"]).":$pg";}function
verify_token(){list($ci,$pg)=explode(":",$_POST["token"]);return($pg^$_SESSION["token"])==$ci;}function
lzw_decompress($Sa){$Yb=256;$Ta=8;$mb=array();$Eg=0;$Fg=0;for($s=0;$s<strlen($Sa);$s++){$Eg=($Eg<<8)+ord($Sa[$s]);$Fg+=8;if($Fg>=$Ta){$Fg-=$Ta;$mb[]=$Eg>>$Fg;$Eg&=(1<<$Fg)-1;$Yb++;if($Yb>>$Ta)$Ta++;}}$Xb=range("\0","\xFF");$I="";foreach($mb
as$s=>$lb){$pc=$Xb[$lb];if(!isset($pc))$pc=$Xi.$Xi[0];$I.=$pc;if($s)$Xb[]=$Xi.$pc[0];$Xi=$pc;}return$I;}function
on_help($tb,$gh=0){return
script("mixin(qsl('select, input'), {onmouseover: function (event) { helpMouseover.call(this, event, $tb, $gh) }, onmouseout: helpMouseout});","");}function
edit_form($a,$p,$J,$yi){global$b,$x,$ci,$n;$Dh=$b->tableName(table_status1($a,true));page_header(($yi?lang(10):lang(11)),$n,array("select"=>array($a,$Dh)),$Dh);if($J===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0'>".script("qsl('table').onkeydown = editingKeydown;");foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Sb=$_GET["set"][bracket_escape($C)];if($Sb===null){$Sb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Sb,$zg))$Sb=$zg[1];}$Y=($J!==null?($J[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($J[$C])?array_sum($J[$C]):+$J[$C]):$J[$C]):(!$yi&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Sb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($yi&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]'>".script("qsl('input').oninput = fieldChange;")."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($yi?lang(15):lang(16))."' title='Ctrl+Shift+Enter'>\n",($yi?script("qsl('input').onclick = function () { return !ajaxForm(this.form, '".lang(17)."...', this); };"):"");}}echo($yi?"<input type='submit' name='delete' value='".lang(18)."'>".confirm()."\n":($_POST||!$p?"":script("focus(qsa('td', qs('#form'))[1].firstChild);")));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ci,'">
</form>
';}global$b,$g,$ec,$mc,$wc,$n,$jd,$od,$ba,$Ld,$x,$ca,$ie,$hf,$Rf,$wh,$sd,$ci,$ii,$U,$xi,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");$Ef=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Ef[]=true;call_user_func_array('session_set_cookie_params',$Ef);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Uc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",17);$ie=array('en'=>'English','ar'=>'العربية','bg'=>'Български','bn'=>'বাংলা','bs'=>'Bosanski','ca'=>'Català','cs'=>'Čeština','da'=>'Dansk','de'=>'Deutsch','el'=>'Ελληνικά','es'=>'Español','et'=>'Eesti','fa'=>'فارسی','fi'=>'Suomi','fr'=>'Français','gl'=>'Galego','he'=>'עברית','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'日本語','ko'=>'한국어','lt'=>'Lietuvių','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'Português','pt-br'=>'Português (Brazil)','ro'=>'Limba Română','ru'=>'Русский','sk'=>'Slovenčina','sl'=>'Slovenski','sr'=>'Српски','ta'=>'த‌மிழ்','th'=>'ภาษาไทย','tr'=>'Türkçe','uk'=>'Українська','vi'=>'Tiếng Việt','zh'=>'简体中文','zh-tw'=>'繁體中文',);function
get_lang(){global$ca;return$ca;}function
lang($u,$Ye=null){if(is_string($u)){$Uf=array_search($u,get_translations("en"));if($Uf!==false)$u=$Uf;}global$ca,$ii;$hi=($ii[$u]?$ii[$u]:$u);if(is_array($hi)){$Uf=($Ye==1?0:($ca=='cs'||$ca=='sk'?($Ye&&$Ye<5?1:2):($ca=='fr'?(!$Ye?0:1):($ca=='pl'?($Ye%10>1&&$Ye%10<5&&$Ye/10%10!=1?1:2):($ca=='sl'?($Ye%100==1?0:($Ye%100==2?1:($Ye%100==3||$Ye%100==4?2:3))):($ca=='lt'?($Ye%10==1&&$Ye%100!=11?0:($Ye%10>1&&$Ye/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($Ye%10==1&&$Ye%100!=11?0:($Ye%10>1&&$Ye%10<5&&$Ye/10%10!=1?1:2)):1)))))));$hi=$hi[$Uf];}$Fa=func_get_args();array_shift($Fa);$dd=str_replace("%d","%s",$hi);if($dd!=$hi)$Fa[0]=format_number($Ye);return
vsprintf($dd,$Fa);}function
switch_lang(){global$ca,$ie;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$ie,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($ie[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($ie[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$va=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$xe,PREG_SET_ORDER);foreach($xe
as$B)$va[$B[1]]=(isset($B[3])?$B[3]:1);arsort($va);foreach($va
as$y=>$lg){if(isset($ie[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($va[$y])&&isset($ie[$y])){$ca=$y;break;}}}$ii=$_SESSION["translations"];if($_SESSION["translations_version"]!=2769047022){$ii=array();$_SESSION["translations_version"]=2769047022;}function
get_translations($he){switch($he){case"en":$f="A9Dy@s:G(ff	:Sa2\"1..L'Im#s,KOP#I@%9i4o2ύ,9%Pb2ar\n2NC(r41C`(:Eb9Ai:&㙔yFY\r\n 8ZS=\$A`=܌0\ndF	n:Zΰ)QmwOmfpQ΂qaį\\}5#|@h3N}@itsN}+\\pۥ+̈ NbB؍8#'`P2+ಉ*/hH\n:9+887Cs\r`jЀD49Ax^;r@6k\\|w-<QxDJċx!~B@C)0:8(ƦkQ9;:KN 2c(QsB4e\nC*B1,O:cxؗ£#lҼ#0h\rf⌣0:ѴU?B07O :3Ac@#:2)#vRZ\n{)fM6R1D5Ք?Rk@*orh\0+.#cbXؠ28\\@P<e)3OcΘk/dQA.3\rQ**\rr7(D\\Ø3Xh݅ZXAT[4`N[1꺾k;ȐCҐb#2x2HףƚR);ؔ\nX52a\02l<% R\$A6.l6ϚJ2kˏvBUQS*񽤇^D&IҀ)u+R̶K2dDv:wrN3le4&\n_5l82ҚK6QLBP`_^߂H\0<p(\0PPI\" \$cDJHn74\"L2@Rj&dԔ8k^;\r+XKg\rGa!)%8ᐟMbd&:`vAz\"rC:r&gC1&֨;|=c*j-0'0c\nDD⌋򏍬ZE'	)KVrLi(g\0<H	9rdF\n62ĸ\$Q9\"\"Y)iy-\\Lb6	8PT*m\0B`ELQU*|Q8PA3TL	g)@)\r樎P#TQú6axI4F\$bOY? 28;Pa'da4	j`8a>DP&\"`èg\rBF\$܁)+iT̓bBX!P)\n~3\"Q\rdi !R*L+\$ʘ<(aO?!L%^IV)m4& -?2(#t+گPiITSl/e-bT!\$_>h&@H(r0v4C	/@EFHLAF5A!	-KHb&_oc݃	pJh%\nߵ|.6l	pK*BvOD'r[4@x*PYD@(+PŊIeBjp8\\a1l(09egYbLKhI3œ6!ȤHAP9o)q/Ս,-X1A1QԂϕ'ιOBsRW\0֘qho!sȿFL7;=1X̽-FHXy:Rq6PEi%CQV@qΐkK4c1\"#r\0ٔgeUc)7d;#aIvۛCAFpe8jUo9~\"k}n76\0jޑ+{ao@fYӐ#57\rY\04+QYvq^;G6.ɡ}5NjMI1(!k\r[c!BlU	\$Mس!+e=!1GDtlw-ֈں.#0'	Ge훧r[MIԇkeVwMG|c:+	R[6/8A%\"{&!M><q.(J=RS\$,荽qp1^Vf.`Ȣ\r!/;Poޝ}Q|Jޯ8H[}}g+¯[}~ݿ>1eM~A٣otQBP+nc+,D`%N`D7ՂQ/dΠ:E^7\$p*`qCNTs\"\rbL\",pbjN7\rά;klB2.\"	pkleHSڣxP\rVf`F0i\r j\"=\"p\$I\np)řcn\"Zn4۰\"l3tN4J. ؛#6.⚴03\ntXcf%	:1**\nf8UB \"Q.p-P\0kp\n1Qn#\\xf{\nQ~y&@jh*榧ʆPFTP@	[M\\% /B`+%ȟ'e(-@<'x(\0xR4OjPc/\"()Ե/KZG\"L\"6TE\$pN*@";break;case"ar":$f="CPl*\r,&\nA(J.0Se\\\rb@0,\nQ,l)µAj_1CMeS\ng@OgXDM)0cAn8e*y#au4 Ir*;rSUdJ	}*zU@X;ai1l(n[ydu'c(oFe3Nbp2NSӳ:LZzP\\bu.[Q`u	!Jy&2(gTSњMx5g5KK¦0ʇƢ\nS r\$j(v!Jbq0\nj\nj@zl<\$WrؓsU&[*lꎠ(B&4_!d\\B=t[	?:XؐeJ	\$\n&3ޜ:ñ?+T\nЬ	J\0x0#3:xQ6C(\ru`<7cp4DH85mb:x)mލ#hm((Kv%[GB=2m[jQ%uqsdJCDSZɻ\"t#1^O|We/J]9J\"R6\00FrIZ)֛kR<J#=^VU\$OY<^[bZƥ-m< Pףc7L)DbbԇaO\nv2@o1lkȦ6[qA1;`uweý#+GN,;[΍qCo\rmh9`4\r,\r06U,+Dt\r7&P7n<l:cd9@6\r;9#8`KgUp݅Ridb!T#䔢AZa\r[H-\\V#b5ы(CƗq\rنeZUSCVU&T)ErnPgX2!J'(\rU3[dADbP\$Lhaf9úY<\0ҥ\$K)4TJS?TrVQZursW`8\n` Yaf4CYZƥU= ܰu\"TcRE.T2J\nr9R	@Y\0+L\$0e8c&OXkeYVCfo0od,yS܋[GKA&¤v*a1[bd(7)vu1C(D+H5Ay[I3	\$h<@J4hogB,5\0xmpSzA\0c|DfHe5(h)BO\naP궝a&4E)5^қ(3)Qfl!>vӫp139dv\\@(gh^\rU`Lb\r!6Z]8iR*IjbFQUgB+bZ!\r#(5ňA<'\0 A\nЈB`Ei60mcv\$:h'EpeubJ]eEE؃&Cb.(;~	AEg):tJnψ\r5Z*c&f^\\(]vyKt[ x*s^R+cjx˂D6PvށU}EIH;YA]lqL1=Dd;W@HsB]Dҩ#Hzd]_6N)S\"P]|Qcex)gɢ^+)=]gt(b(\"W͹X2Mm	8lh4RM.]yi	ԢeX4 O`?MѸ<L2gL*+UAXHٷwć*Q<s\00B{/irR{ń˶uPhp/ۆ\n2e!*Azm!dn[GńܗT@]ӵP#A-\$	.0LnؘË/O8KUT2`(dgdJJW!*24\$7&P&K\"jn)\r#Qf\\6Yvb\0d &.7B9q'<m<d/I£KwQc]CgQ{~r.^TxkⓧޯoDn6]~t1m-\"a2J`?\r1BKuCO_OqvTߜQa \\u\nQ;+wE@HRsOdk:ArHSyn,Lo.^i_\0ҽ/\0o&l0\nO?,@i0\$/pC%ތN\$(kƴ8GZ0oO4C/bVPz&tomհxO\"#I|@L1#F,]#,8fiP|#N \rI|᭩\nP,Gpnĸh_O!pIa		lF0х\0P-҆D'2L\\\$ДNhLtp}\0Ϡy	]gI]b&Dj_&9((>\"î{<PJ+mWQ;1M@/82Qq0clAQ%[Hc:'\"m~΅#-K\"HHA äQ\"(CNE&bU @s%oѦ\$e&^(2C:rQgR|o\"l\"XDX钇&+)MR!8BaQ8.b1>rL%!##ȭ1 \nδoda/(\$h,)3@\rV@`x\nRFdxz%\r z&`\0ZID`\npb*@=o!,0/ަ#\n0F+/BͤJ	W5lf0\\R;8{ `@RN)M?6(Rdj*\$>UJ7#s\$L~'+o8:\"A1?BL\"/(BhyƶأD4A6p\reP̉nt<P+1l`fpt0_X!T\"h2rT)!ZhNqtx@ \r&C4DJ8lj\r@:C m4'4 oc'o܃,PtL3k\"lwL1NrgFz?F	\0t	@\n`";break;case"bg":$f="P\rE@4!AwhZ(&~\nfaN`D4\"]4\r;Ae2a.arp@ד|.W.X4FP\$hRs}@ЗpДB4sE΢7f&E,iX\nFC1l7cMEo)_G_<Gӭ},k놊qPX}F+97iZ贚iQ_aZ*n^S9YV~]X\\R6}j}	l4v=3	\0@D|¤[^]#s.3dm X3\\	.L\\͐Op\rBz.+үH*Ab^˹23rJB\"ʏL|ɪfJn䵉xŲdk8#%5Ů%\n!,AKSY04Ԅ٠H3!sI\$*Z@ڣ@B\r,U	@4C(C@:t㽔# 4(\ru<4DH8\r(l^0]c7\072&\r6K9)-	;%NUEʣ]?xv8v;@O;DKbPy_2҉!.rgj>MD\ny+uO|#䃶i'҄զnV/q;\rM'Oa5.L%E0D)*>QR	\"\$ҩg 0j[WT/a0BIɺc[⚕'VN\\GD\0V&!L5G@KovKPdBXנ^c7pU٤ա \r/k+,}R:^QT-4LB&[k)۲Rs:z5몗ğm/!H:-C.(i˜LGn<#ADxCNI\"	]^EY^L\"Vp	Iyٲ6\rJ7/0-ii:Dsb\n`'S!T^8*<ÓrO1/hk\$ר2&B^PD\"<DPv+B\rC[\$`@Cpk`3-Upgg-[ir\\aȸCtZw/@RjnX9e8La@;hotRTĈa	\$BHD8.A2y\$&zWa,EPwYh5[o_4\rBƨ[7W4Z\$Fi{P-M(+,W\n~|\0\r);QSnT1WgzUl3ul\$f^I@h'MIP	Aj<\0@W)!_K8 J|%ia7@@C`l\rH\n#;gKM(B\$vģy~l\\C%.2U\$FDv\"j@j&B4ͻjƬXU+yE&=.5	̪Ieϳer¿/tl?\$lEf\n\\6\\BᔖFi}#к\\rEFQ4z*epq\r(󒞰L&kZl7.92]Y48x#JjU4b%.97<H0s|1oW1Svzlr&z%yɟ/e>ΚPJMQ'niLv݁(9\"rIS(nU4\r+{ Irp[sT \\HCX]i\"Uٌ侇rBg4ʥo%eӱ:JDmqnJr*Ht3V[2<:%2F\"m+Ns;,@ƇOrs}TNstQbrIt<nSH]	Ӿ\nz\0D)2ܻpGQʏIr,jwq!)o*z-8`{e\$eBL%<h\"R#g=w)aNp9Dٹr썊ژoq:miuйKnؘPA\nP 0uZA2˰¯A:d.\"N;٨M	\0^6?,|g4u77\\NJ#rTVc>5y+{/JFssT~90{O3J\n+թU{c@MCY^5p4lav&58-ORj/lȅ(bP.\nĆ-mBZja\0>fܦ8/*\$ҾcM0\\#z>L;L+ƺ=vθs\\p @BjHj|㮠\"bBiЪPGpP JTԩH{+#j.-wK*.Ճpmkt(wc~'jDpenJ\nl\"(GIȈDlJV8 @\r\"6&,*8bboTdTF\$lQ<K@.`0rQ.#ti,1mT,,PmO^OL\0R˧@\n8~ifCMVTmt~XKiƴyQGI1*1\"?QMyj01=	r),z##eM+Цqچ!n%cnάnH;OvTdrhTc65\$c+'MOn+X(肠5V+M\"(q貿!PjWV2섁'\$1iBd.M%08jn*T̂6MqlDf&#|DH9IPx.jM27\$(ӌKqg4D.GʧLs3쬤N<K\"	-88α,ot8e# Por>gm\$,&HWsSʕ8S22h=i,3.5P{y=AS7n{>@*,hc#rprV)BfAHöRjҎ).3-q=P?Қ6R.r>RTGEw:IThdn\0n?	+nVe1'4_84\r::	HF3II4I'B책:l:lG=\"g\"|7CLkML!#GT/NNQ!!XgToLT>QT8O14⇂]:A9 4xSm@KJ&HXH+T\"PT'DGgUd%?rA;4Q8*KU%;hjWE'!AstM,W<W(23\\IG\\O[]I]Gr.!Jgj!NUIRv#(ڢ	*\r&(\"&ؤF.qHOa*\ruAR.&3ʳ	F-b˖Lfⴋ6_LT҃+@\rV/&-f-lu2GȒ:-^d*H,`eJKS\0\np\\,aBofqǰmp,zg|yR(S|LT5US7yA6*k]H8FEEW%HiJ])8E2JwMpO-E˶FE9uOKTnF!{'μ.04Zձpy8\rKW׍H0ɐUoP6-zQ,TUh7{6Bp0ɵwD6E8Nt)Y3GaI)s*qKtT&dbZÈ c@Hm9B\\f-8(Yyw&GRfb3ӚamvncƖX_[+OSr\r*Mq\0ؘT=Y0\"մ#";break;case"bn":$f="S)\nt]\0_ 	XD)L@4l5BQp 9\n\0,hSE0ba%. H\0.b2nDe*DM,OJÐvх\$:IKg5U4L	Nd!u>&a\\@'JxS4PDz.SE<OSkbOafhb\0Br)QWE{KPP~9\\l*_W	7ɼ 4NQ 8'cIg2O9d0<CA:#ܺ%35!nnJmk,q@ᭋ(n+L9xkI2L\0I#Vܦ#`B4: ,X2,(_)7*n\r%3lM| \rmKKpLKC	S.ILFsW9STJzDdz6[\$KlCTODu;ttIT҈J}F C\rYN5,aRnWF3,ԲL-?+ŠpSvP\nrÔa8TAyJܒx`Px03:x6Ƀ(\rv8<?Cp4DH8=n::x./\\\r#o (KXwFQ\nܯi@GZylQ\$_,#M[7DоKssdQ\\?p8KZGU]U٬2P[!/UVv܁CE`UIށOu17T\nb&0`:u*8<3qe?ы?6AD7|R.-kh>a2t	L|.)qz*D}MEn@Ca@'0K@~84fP\0B4S.n.fN˛P!弄Ds\0sɬ,D2]eB\"5Њd\r-ϝC,0XZRq)QCL6T\nL:9dEW@(\0o61V1,`O8mVDCc>!3:@xgI0%g)0Jn0R\nۙ02zƴY%n	?BՑxPr\"EHƾox(ӷ#n\rg31*h ,M)J+#X/)r@22S;1fm^3!ƀ?BC\\^)\0M2L&+f iFcCG0Ye4 \0\r	0fcbJXf0ƘLP^Û)el&hٸhg,XybH72mCbkI8*\"͒:M^.GmUj퐓H\n;=YS;Ysv\0P\\LF\rr)\rP(\\='΃Pݔa:\\p;..JQ4X&vDXG3Ye˘q2eD@1S\\Gz/#\\\ndk2.jI4pI#\0Yu73mXqv`lꝕ:g *C+DTID8(</,@O\naPAUodk&F\rIHf)Ed5EAF:3]\n}mJ>%Y`ob@ ?	Vֻ\00TpWlk`1c˳)	(Xf!:ȣdяEL+ph֑X+\"ua2k;?g5#TLww\"ۂja\\nDtཱུŗ˓Tuї8ʃک\"EHzd(+E5J8obH⻬cf-V\$\r><S!acQ95*&u#wkAN&H_e:sTgCm(l'1iHQt?T`q7eD/p>4CӵYPOu(~dAKw\nV\0TfY߉WB^Gv?tH~>9)ZG%d_F0(ƃsMjZR\\ڏ2jHZGԸvF-4,tB|qFa(6k~Ԍ\\r3&6Zln@*@@ LX4 0Q >9oaV׫52b8Eph%Pn6OWCtyZ\\\0(0BjaP \$o\0@n/0y)|K sʂ\$i1ԁpu\0c,OhD0.((p@'~ bjP h&(u.Bwnxph,+V&WkdTf0`ݯV[-Ɉ)6sPPT.Pi\nkfRfMc\rJaMm6L\"J#&B G@pkBFN\\E/V\n&p8ŻXMq2JFF-mpFA\r6@*P-\rUFYd95qP_+5wpݎhf1\"\"R\"}J)oPiPOMY\rnҧx\$G@f5(MnHJ8&*n(qER0wM\r<%cҴ0222OΊP5h9ŀ\0P0\\KRvż\"E!R:#//E*LR4B50bHx()\$,R3\",0i,s=\$#͎0r}S\0܎o!6\"R3`ߐQ2mSnSs5 r-\rQ~EQ5){dB51M)NƳ+MXPs0D1:P::o;-+5S7 SpjB!m0g!6A \0JllI=8T43p=7)0n\nUCrE;):3X\\ƭDB{\"&tĈ3>%0VS2|ETDb@ ,;E#∱MthPmPbILG%D&?e)-3.+ZM#%C	?-Oi616s	?IPfCRGPAUkyQJP45s-χJ4x)Ow:QeTU4MAS9BuW85[CSnTO.^R5G:w\rC%y1tWYdp3rd(rj01Q4;43\\SWUR3Y:5xeCrSLwƯ8#U5<'*%&M[e`O^I__u,51?#aՊ_KXԩFr&j༴@S)[LQulݫnZ6C>U6*,J6vWAg8gCWhw/ v5XshjRD:FT]U@9Xݶ%{vfmiF(]N+vrvC@U~8ҍ]3d[_o^T֨;5i^wcq+AW\$\0\"6q9J-dV1UsV[_l	6?T,RvV!UE=knE\rvLg5>2djkOpO83ӵa.Nq5Kyp){v9{nHw5WUvݨmn*++Ma.'Q&WV\rU- Ry0,6`@lB\r \ri\rvdv\rr\r ̒.͠(J\np:I끗;v>|B-Ȭ6rs;w׈\n>ؖ|Hwx!BRM侫5F.ǅx[\rT!YyFȋbO'\nn1NMrHOso\\2Wl\$J֯B0tjYwb%\rgXT@4bJB2O YS\"t!8|;XTY%N{[i<ێ!%\08݋ցºPk]0਀o<#lPbhmDCXU)HyjQ\\y\0z1-<(bm3<k.b)D+[')0hĿ6(-eZ\0 \rn8zQ-7NQp)^/bVhE13HYoKCz&{rGcO|T+KZ5dEZpZqz/`	\0@	t\n`";break;case"bs":$f="D0\reLS?	E34S6MƨAt7ptp@u9xN0V\"d7dp؈LAHa)̅.RL	p7LX\nFC1l7AGn7(UlbeēѴ>4)yFY\n,΢Af -e3Nw|H\r]ŧ43XݣwA!D6eo7Y>9q\$iMpVtbq\$٤\n%LI6xi6\r(1;@7\02ʠ@BD\n\\**h3!ւ>JJ;.j&f)|0B87[	!\r9&c6px *0~B5(G42c0z\r8a^\\029˘ Ø7xDH84`:xAm\\z4@bN9 \$`T1XP!L	8_X%u7*;J,\n1&#kԿ[vhG8Ct%#@kkҿ7 3#:0bè5l;.L|058ȎVKC#pl\$NE}05hvZ?tN65cNx#ːLa7WҶH6ע2X{ƀ*˙rv=<r+c,zqPU=%3,c0́p֍#1C Cx΢ab9t¢tאaJ\\'l )P'a\0ͳpJL.m_9Tj(3#E;gjo)~}Sd++QB@U\"L\0\$ F]f9'R!7K@PM@2`ùs@<eM7Sy'!E(lg9L)8SAT\$(*	PrtYK[O<vLC\\\rfmUSTÉqz/-`ÈT)j4rH\nķS@ä!b\$h5U~qPњSNjP)XA՛C@HAw%E#ܞR\\{bwę҆Ca[5HFONpi` @}7ylyHy3E4R n@O0MS\0ȔTh91;7\r[&52ɔAO\naQ	Wl)Bd̚Lp (7bC\rQvI3.r1X%\n!@SǼiA !*H6d\0?zrF䐑P\\52LHS-؍B4xNT(@( ɚ6Ml0TA\0D0\"ՊWr<fҧW\0#J\\ᴫWzɋj=-YÃ\rdӵc!:ʵ\0Ȭ.T7.K6\n7?[T%GX fy箎ugKsel5!RS΄.#G87>EdDդҝBa7S6\$)(]5fN*X-\".f(2CGBG)7mO9.'۝,\$֎xE	IwqQ\n2#6TY6^S-#~IA%#:JQ:##L)5VyIIa\r'vFH\r%C!ܯT!\$	MTs\\s)Yc((ͱV/E0ȸL:?.C&%>cZdvs?AICh.!WDimôq'QP'tm[5)ފ:4P!53&TiPq2-HۭMc#ngmB4ڎYi-zљiK׻CY6 0xĤ(wdb\"yV-LvGAĈ˛|YBj0:GGaLZ_!WJ\\:5gAYFc\rܲ܉X|8t'.3ג\neq5w:ZQsr}V\nK#/~&zq&;8Nt4d!'}H\"tJP1ܻEjѦ\n]n.Rx(Ve\$tQsjo腰2:75.E>CU#ݾeDos	:X9eޖMeQ7Ձg5օZ:L`*q=g#O򨢆oˠPo*èa{]3f6>+I&]oD 0*(&Z \"f\nO#μnzZư\0ALYbY2qδ1j]z4@\noPX,;xh\nlc!ʩz*\n\r\rÜ%^ĉ	fH&H q~1>\"1.4lB`@Um1+f2p'ι9ꗧ^akWXku6Ppbm(WBE>DB%x\$=Ր!Đ\n'\rPDC\0V8_J,!D)81a'<0!Ɨ ED6\rq\0I\0\"C	\"k~1 +\0CVD>\r2D%r(0M%N&\\\$HErb#BZcc~[`ZNwG,: FZ\0Gh/#,)0]	c|&%\0000z`Z\0@9ٍQ\n)R γ\0׍=0킔ȢnFlnYl'às\$1/	\">dV/h,n3e(/]\"㸬ǅ\$\0\rҵ6\"6duZ2f_W*P:pDm\"\\ÎOX\rh߳8NE6:kςs9\n@`>\r\$볛e,^\r7F\$*#'K\0Lf&f+Rf8(LC&t%@BL2Rq~ j'8`pB=a>N7bB#j1bVх<\nDL6\n)ZEE";break;case"ca":$f="E9je3NCP\\33ADis9LF(d5MC	@e6Ɠrd`gIhpL9Q*K5L S,W-\r<e4&\"Pb2ar\n1eyg4&Q:h4\rC MXa+\\>RLK&v3épt0Y\$l1\"P d\$Ě`o9>U^y==\n)n+OoM|)NS,,}tD\n2\r\$4쒠9I4\nb!҆\nH\nxcJ4hnx8KN	(+2 &?ZH\"1 .P#\n71#p1)(hɆYh7j7;C&C(3:xEm<&T\n#0H^*!(F}\07&%sD1h!F#:!L~%l-5\rV\r6lԚ1,[.ҥգ!-qr:9>r~(TC<=1(0W콎-n20E#\$U\$#;<0|Rh8b;\rH6\r\09(t1Yl&ejm+őVKqn5d@ (ec#)XkWLv3\0/3zYvaAP(\r8糽(\0Yֹ0Zס& \"mC.l`ַXo/K=\nH0 MJx3?ÀpLcޮ'Xق031V޼2OĂ<8¼m̚/aJc\rn@!b2\\9/HN75*N.kR7O	ԎLYcpւ˭^w\0A<FJ1&O	?N/G7uH3Ma93LWCiHWtS2h\$<;3Ѹ\$-0]Uj&QPjCl/\$)%(S1AN5<EHꜨtq>z'}\0S/`BLf'B4@S<A(1+b0FdGDl\$`(A{E\nQ\n\"ɘ!wT gUư4`Uk\n޾(õ\n{D>0Nf%%W\"N<\rt͆*_	bHy4eViQTDJ@BG02l\n<)Bi>#ы'yC	,+\n|IB^W^?cc%d&=5iG>wj0@A\0F\n=;{*\$&L}3OԑYꍨL	*\0BE@\"PjPDF_[=5d'2LXrxD\$Bf!TssD%=WP̱ᔇ&דnA=h	G>eaʦ[\\.]G0\rc)M\\dN\$+G:H1fdEy?	@H,P̋WHPL*!p<<F96b1	vit8L|  DZ ,հ`+g͟bUPAX򔏗ZNQ\"#ms'#SXΝSp\$`^h\"FB#_q-WDQTAa\"60lUKG_Mp\\Uʫs#E]9\$K#qu~>i8@\\sbSug\"qrsC47ACn|EzMIY@S珗4\$CJ-3Ng9 <ᡍѥc\r޸D1W)DM|V76Q1&s*\$n2\$vSͮIbֺq	 ⱉ\nȄoNI/_hVMD,\$ZI\n3*`a٧M+,NA{?Q,x%(2vRGH8<vM>cWϭlBf_,	\n!'Qs]W΃TH`F6PævAND{A@V	?Ytl=,1l\\̔`1[o^8KZ&ARXC )E=^NYh܉Cݥ>UQ?&>W	ZO/	^\"oʬlQy	m'޻/7ۜƞ{OFz4Ϲk~۷_z;5|u*f?F^jx0L/oA]Oy`w`SǂB|7\n=>cjMH>VӧF+(C(ұ+& (DB}k.XC@g*>nFe\$lhPvZIjqKEd3Of>D	-hl,XpJB0CŌ20\$|=@ӯA~/'0MoFРqPFw4cPlb&`1,vcV'C\nn|_\rptn#aQP@y@0K>PIPQqd^M10i(>pqb	,&QzoTc\n.ê}	m-чLDGL8oĤ\nBP\nS(JghqѶlK`KI\r\0d^Y%x).mr1m(לּ1b|<NB0x_(B\n@H iLFVeb*\\}IB:x\np|gR1*np+/42%%cp*sX\0 pbG+%IP1?cR1lXJ2(ư\$/b& 1f\\\$(bdZ&62CNmEoڇ0мd[/4->V74u(C5y6/\\mءn1SR| 5#&ybF0n]&8WSa7\"vr@g.g\0d!F(6]9#b?=Z..2\0003SYv6o:,(t5ĬSjN1uD6	fJ\"_\$BWd	\0@	t\n`";break;case"cs":$f="O8'c!~\nfaN2\rC2i6Qh90'Hib7ii6ȍA;͆Y@v2\r&yHsJGQ8%9e:L:e2Zt@\nFC1l7AP4Tت;j\nbdWeHa1M̬Ne^/J-{JplPDle2bcu:F\rbʻP77LDn[?j1F7I61T7r{FE3iǓ^0bb*,:GH:ަA7mX5\nNJ׫02 1{?`5k<b6 P֎~(p4L)J(6c(\r0<񌣒9CL8B@sZ-Ƞ\r#CPmﯣ5\$Nxh@A\0(R87\03:xM6\\x97MxJ|	܈7Bx!A\"6(,9bH9C{Mâ5X(\r\r%55mf\rcռ(p5š(CWo2:(\n %i< P#BL9+e4[)A-}cR@:\\1C65eCXCH*\"#7cFMTM@ň߿逈9t9.x&C]um=Y0;l[7n7TPNuܪ>?)E0<{R2HBؒ6C\"6<n.l\rrC\rң30̡\r*V'l_~@]#OӼA`@=y/Im\\\05\06LL|6:%~m3[zi~(7l+x!ᾇ}i#86hM\rd00.2v1)\r	AW~D#Hv8\\.V[0y0lT)oR\n9 |Pp4\0005zT\r5M(=d>fx<J3#EpЗdl )BړR]Lb%JS*TO#RVN]ZWҼW\0 JV(Ihq<.@\\dN<^BpNة%e=/ȇðQM{FD&X_LٶHds'1@@P>h-AP\$\$`P 0C<c3T\$'oK8?6j\"6D0B!<ϡĄfȨR{\$JLbtMaPZuԎ}R]+5?uWS\rr\$Әiz`(=^A\ng&^lgz@7P\n<)G銷OOYrP陝ddM0ijXg*b!\n	`\\z#x*\\C}&*N~	ICޕA4Dw\"-dՓHzr-tCO-E'&X#/ᵓp@it4YU읱[oseYBR_fƓy\"HB|.dGLn>/J;V.TY͙m9	:<TIaD0z>20rE=K:><kfvT/sА5Oȭ}ûQҘCPJ<tFRb~Xu`%|ՆVKOF!RN\"f#\",\\mВ#d>վU/hg6k`+N#H3[:үZ5,'Xw	l1PVdWȔo3,j<2)s{'t4ޟkJ\nC	^c8.!u/iK|b#;\rk>Hv\rlV!MG\"Ⱥ^أʿצ[R`.OmBݦ`:nܰa4.nE81nRasfL%C@vɷ=6;qxW0׼ˀDk/lƹڎۊI(ȊEZ;,:Jyt\"CeJ]uN ᔔtifK~7 Řp޷|՚.l밗CIF%)O#\rш?Ļ7یۂ'>H'^0Vu\r<zD&V[6~6~'4tk7EkQymc̃B6J܏ZXޕd4\nBwuh\r8Dl]A\"2dLⲉMMBVa +.`f\n`@\rZ\"+oP4~O\rEnN, #~uBRd\n4NuGqoP: G*\r˯V/Ѐq0rq{x4B'CO0 Mb</[(,԰'0W\0\rI\nc^P	p	о(KV^;V4\rÉ0j\r-䍐^q(Y\r|k]\0C	fD&!Z(\rH@؄\$F#B2zTÛicQp\rm4<NA+bIeE\"LPFo0ze0\\xXž\rXφ0Z	 3 /Q&@LtMk#.\nΨar`\"|կ\\K@ldCkD8pP= i0l\no\"΀@&Z9)\nm&#g)-U)Թ`>1j/I (	#0>J'U,\"1&\"-dqM.C qD(\\M\\*\rd0q21'\0ғ-;(/>Je4EkCmp3-K&}6';6mnCCqТj.0(E\r#\n@oУ<\\H0X::\\p)侀3#S4sx<0%`#'=kFJc<!23yg\0\r;(CDP,)<:#CWAAn@Z@c(fz]Ѷ(Zf>C1<dÐDfd@\np%s5TA	;GDH5H`@q\"	\".HuRtz]SHB`c	b9D((dBL?GLE`ZKp^fEcPGnFP<Fc~Ӭxl0֑G&-	\0\0N{GSOR3jTU)\0rq J&0u8g<̎V7q5LfY1Eά!Bca4F,(g(Uα+&\nt\\D\$3/,(\" nf\"<ut=\0@erfrT=AS\r+:4\rDpkkG6(T.2Lд1dh!r";break;case"da":$f="E9Qk5NCP\\33AADeA\"o0#cI\\\n&Mpci :IMJs:0#sBS\nNFM,8PFY80cAn8h(r4&	I7S	|lIFS%o7l51r(6n713/)@a:0\n]te8g:`	hB\rgЛ)03h\n!~kjv-3e,k\$SVG)NS:On&^n:#'%x4{ڦ##82\"5\$(Bb,@9-܉0늵ȢsBQxx0Bz3ˎt㼬\$#jּ8^Kj7 xJ |\$`^09P&8\rB#:9C44K-J|	B\"hU0]Zq>?	k#!) @i~(0cB;-CH#\"3:_ܵt\r9~6\$O:4L0cF3@Pn_c\$PB`Z5@O^Sco09,'0FL1Gh\nE6-K8^8胓\r2pঢ়խ#z	`x3aJtڎp7R\0L1h\"9嵌#8µW-\r(aJN*\")jƄah@:U~+<\rX842I[l2#'o#̃\$H\$rj\$]6 ;.\\.5һǈ*#,g(^u%Yl:J2+2_L1ʙHsMi,sO/ِL3\$茒pzR:M,-)Y\$ȦZ9Ӓ&I:2l\0kePQK&\rcx'i2b1\r,2%W\n\rЖ>q<7Tv`N!Dnt߾BTK	qXx3Qs]E޳'4C\"Z\r*5>LB'k@u{wd=0GzQ\"R삀O\naP#hXkm`kϑS\rYBRJv}u*15\"8G>.d1PZz]@iI*FSkE#2S\nQGYG<2p̠\n^\r(.^\0U\n @C\0D0\"em\nTEA`\$({ik\\aa%(S4y[tŶh\nq8KnI:5\0 ^):D֨8G-15\nongO:J+X/\"ސ:N\$DhL#'mU#M@R%f]K\r!Em-YX8T(oK4Ȃy+(ڝQqOXT`	+/ң\0_Y%`4aRm%5j_(5W%3.䴛x\nBnkb,D%1%3ZhC/T*ϚY;	(+l2=6]	pTyVV&Ő`P1%VnJ<%'L` bM\"@NaI(Xf~[\\lhm[2blv/k~թH3tL\$U޳)@'/\\2)B}2.bJp.櫔ȩЬrbIeCiT!JIƚC,(A##]d&KuM\njTk\"2\"ٌC\"^cag!`t\"_oeN24LS6g.zAcUaL.&`QpE.\$JS{jUAi݅Rj9)n8`ri,-e6j<xUVlӚӏ3NExGOuUbv1Do]@O2K|s~sIkAW^z{xr:44QYtޟrz<fܯ,ʷa[g\n݁ c@ynr6iްHsy8>ŜTIw3غ\n7\ne0Vs]ڵ;7Q޿MUU*ӵWwH^\\σ澣5V\$V8m(+E\n4eͦ.Q'8\nk~\$5弙\n:)Sͼef bzD(RjB<Oδnz\0\n2D4h\r\0p8%vHuVP2&T&wcc+*.8͇P\0ox>EPv Z?0&c4?lTgh\$#`gάhHȠ	end0eP#̥nz ? `<@Kz<XLLĝlj prb]NtEMvN(B*:R#@0e\"&m/zҐ|gB.T%\0>I69ְ@Q9b^B0+4(-`2`ʪ)c\nq= *T2؉EQc\0Sג0'\"!\nfM&#\"M#,;XVԠ#& \$`f&&\nɲj\$*'@f<-bا*ʖQ\rrf.jg*vTa\"##\rq#&\n:-Id\"";break;case"de":$f="S4@s4S%pQ \n6LSpo'C)@f2\rs)0aii6Mddb\$RCI[0cI S:y7at\$tCf4(e*,t\n%Mbe6[@rdQfa&7n9ԇCіg/* )aRA`m+G;=DY:֎QK\nc\n|j']C\\<,:\r٨U;Izdg#7%_,aa#\\1J*n.2:8P:\r	f-;L:;L(363 0b=j^p\0<e 	+8CX#x.(&BFC56h`Q\"(#;t)cx΀S2L;1иc0z+9Ax^;r46(`]2z9IZ	#hx!98c6 &\$ݎ59C:)3+++C@ NHRYx2b4ib!-qbtYJ#T#/2xB \nzP-.X<B3ލ) 03xChCD<2bsr7?JbYzbfķahxJC ߓ.\r'3C5ʖd\n9	ͧj^<ͻʜMKW%S\nX<m3\$(JR V \n70Fb#-7CC0ޕ}b&MZ+lߑn(@\n\rȸО )<=ϠgEt7Q7_ZvAvÇq}sFń*\rRf!b\n{LfQ^6.0#&PH&V%lPBKr\\CObxCDC:䀆p@C\"/aֆ2@B( OI24>iAFLe9@¶Vb%ZȞ/gݿ*	&9{)%]3\r	?T:Qj49(HڔRiLڨp|pSdA`MGʰ2f0r',lR~Y\nžỈ\n (ЦKTU*T*/D̼@C1D0BSӓ+fR[Cu\nq3QYq.#SriЫ0gچ<C)nTq\rH296%+9ʾt\"'(U0	7yP`Yr/'p#EsX/GLA042L¹|C +Q\n,64\"	*+E(HcfA<&a@'0X9:X\rLMޕ29I)`7\rD;9AJSwţqd5߁Yʠ*Bn<\$#Wl%8rO6L2a`y&0'@BD!P\"+\\(Lu8TR:<&Kf('\nɂA7'Ʉ1Y)}ɛ#9^?έ4aVwMW#H/T\r'lgS<ÆB7~4ҧU&(L[3ΜEEz3犄TmI<_R* \n\rd5,gOt̯y5:ə,Y8hM\04PU\0Pq+Hdm9;\rH:F]q\n\\˳i cbl1d#m!(.v6>K~aP 0H6f.C6.ShZyb}]n@!A1k}Iaa5jrbA52;Oj셹vEKR:liL.m4!6a߸vfy|8ey\\=8|')mA-3׍mw4mCH_\n]h0)F-%0j*n4VbX8C͘uF[l^M`HCbu[sb׈J9=n/i=٠wޯHmxDwl]F_	`at67l9V\\=cG\\IDa#Uve	g9aШ_+\0&\\Sp\rJgGw\"i]|{]~jz~+Qד}ՙ	:֭^:҉Ϛ ڇ~M&@*/orAxܐ#60hͦδb0h'o\0BUo\0K@FK0+\n%0 ZF@\0`b:\r\\#>6\0-\$\$B5x9Є\rx&+.Fjw*+cH`+	BC,@>gIL͏BΌ1OQP1o'奒F\$&q<Ad11KW0>L#`	IIK}b^&.p#\0O&p!\0000`\0\\@a\n.f\0Ώ6U\02 \rf0N\"8Q.]r[21!Q8~f+;\nq!/ŭ\$1bϱB:υ!%rO%/ u&:\$o\"Z:`T\"Ӥ:OPRK(_( ^&`L\"\0001T\n@~±*tUb,\r,֕ҖJdЗt΢;G&4wB\0W`rqaf0OUh%q%P\nZJ-\nθ3`DRDb;5\$N֮R%M|1ROVc)vjظ:\$7#a1ӌ}Zw&c>\"G]p#\"=`#DH\rэʐ##.|<&\$R	F!GnB>#\rBʫ@)\0=5ȹqAT,0Pu#=:O(/k(`)l#`EIP8Gbn\"C3d\n^.T4QPtJo#,CS|d>I>~\r_(@,KĬ0d%?h&i7'2snJBXт84lL  ";break;case"el":$f="J=Z &r͜gY{=;	E30\ng%!F3,̙i`dLIs9e'A='\nH|xVeH56@TБ:hΧg;B=\\EPTD\rd.g2MF2AV2iq+Nd*S:d[hڲG%..YJ#!j62>h\nQQ34d%Y_\\Rk_U[\nOWx:X +\\g+[Jy\"Ebw1uXK;rhs3D6%`YJF((zlܦ&s/2/%A[7[JX	đKںm늕!iBdABpT20:%#q\\5)*@I\$Ф6>rϼgfy/.J?@PEWKrC)/J\"\0*bҪ;\n0:ط1\"THJDfy%)2:I.P[1to&Kһ%o<Ӥ(e|޽\$=*Qօh6K>{Ťoiv@M:D\\;5dzZjR71N+\r\r3:x6#p9x3(ݖ\\9#~^0A6`6àx!@\04\r @:\r\09\0(Nd߲Kv\"\\Lꟾ{l:RQ9FK@[r-+p:DF|p<@O*r?inSiZkMNȿJ!\\7;z)ː}fJ#\r,R\n[>/p'j Fk_2oгu\"[T.Ңxx\"\"r\\!e߈r7JF	HW}HJ?j0A%\\&HU( paSupoHTl)pH	7\nQj|M`s^<P[sPK*%|J]-CآEHA/nQdױ=l௥ wgٯWr\$HꐴA|W\"N;Ya9+\$\r|RR,E ^nJ!h3`.A}M+Q\rgE\"uHy.)VɅNL5|7+)>ҠHHn:Y--&]5xAaK*0g*aL)hеKٹ\"hW&M7R\ndA#=&YGE(*Xs5&h8 ,y\\ٳ40 Ę8`FlC%\rQ.(Cd:̨DS+Wq)q/T	U4\rsv}I&,OGIa]A/:\\Xbe>\r\$d̡2\\nf }R+NԹ*CO3XVF%=ьd\rŃWY;6NAc!Rg<Z|t%p7\rAI涉xSfme&Da3Yt)'U\"9?AlWP(@P\0x\nCG*^X8)A\r2`NiOj!9Yg882FM\r:\0`o\rTJDĉټ&R#EODC\\Fh+!V{zIAbŊp4h\"0A>IC_#byȚLH&(3Y̳~Jv#L(6 \n<)H'	<lI/ڔ1\$ͼWP\n2cKjvQ(@O44̂xEʖ\$22ĠVUH RTs_JL\nc[o(\\oqT/R\\TSjH0ʜ^'RhY;q\$/wܣ:2rH;cV?\${jJj-\"ZSȎH-((в\r4p݋Q_Mi&8iDZ2PxpDxa:K.LJ1?QBylK0}]6TU+Q,D</ZkEބ!:u}՚9V'9+9y?teWܜ,9BR訚VAՏ\\~QkF8ˉfEJwnӖm24ZZP 3*xVN#ԝԀs9&H9RQ\$/@mYrf] S(IX6o>&b8g5i'(¨i~\r<nAEV/ȑ{u`b{	x5&_Dm>r@\0%I  \0~ -^~7O/R>^XJ@\n 	\0@ d4&\$f@0K-`	\0,TW/{'6@#&2g5\n+xQÉ	I*+<7L4I-DƗ0GB()PK.eZ1`;Le\r\r\nJRkRF4*mIɼ E*jsq,\$p̗Bкs\riVTV.~6^	*qVDF8Mf\nrkPgN*-\"Rl2\nڌ[BF1 !M.G&H)vDҙ[Q2L5@kb,T,,,2qrQ!D豂HRDy(2hW,H(xc./%l+亂\\GJ mG\"!\n}&tE&GV'k'Rr>u\"?).Я2'2*7FEnf/)\$1,\"+\$Y+qZIG-)C\n̌r\nVbܒ+\\d`\r~|f>j(M)jIn\\)92flbi\nᏽ--N%>tPNt,4-@S3&nJvUDҰ4^+}8^β-3)s,*T.hҸry9m=p\\;0E.e:D3],63&R?I!ϗ1h!\$s)QpM!FALTp\"'&bJspQ7	\rZ1_+?\$QpFDn{<OB.^-#րllss=Ή!C(V>\$BBD*Dd@k*\$W\$+sj!- /75.tlLfGI-%mIMԙF4FU\rA/Po5k:///PNRfm?+?,^ΒpJs=qC5`t;CJGbEJr9zounTxkT89UU!)Uh4[b[rYY4Uk29\\վeYuY^U^&\"ǘAP\"d25Qf#U6*;[X@+\\3]cc#.3EvE?K,\nSr^p]Y%jŽfn.e'_{^>[t8]%,<\\d,s[NFZM	,\"B=s@3kis^V6L\"V\\VW;QeWgn);VԌVk-֞ZA>t1=?&w\0Vi5meƅndxgM%>dGXJSW3rw:*ZCS+vd79E_ml6QiV7stEgMh/4xu\\MMTqv6{ELjwSoW|eҺ1x77}%0]-V}\"Al@BdNbFFB|c#\r;v%QP)\rwB\"zE0xEKp\\X]\$q\rtO`*RK\\(aA3rjgu:.PO` `\r`֜dE7L.\"2qsLUvcOqYfǍ~C=_t @\nZ&B*IR-ҒGnSD1\\mGVrqfڄB pZH%x8EdB̾T!dADDجDر|a8n_EMHM d\\\$LN8\"Mbɰ:l&A}kr#Put+\"@52/RB]StÒhʕ2 'yT9y|3|{AJ\n}}巠Q9˒'zgyoezSݞD<G3Wue5%g?FRe_U~	CSĢgn(\0r+To0KR[!GPS+M'!qDP2ADJEL9FZX\\Ayq|[\0\0K0#󙧓P՞g_9&#TpEǭyY{:!5`CӭNl\$N/-r";break;case"es":$f="_NgF@s2Χ#x%pQ8 2yb6Dlpt0h4QY(6Xk\nxE̒)te	Nd)\nrb蹖2\0d3\rFqn4U@Qi3L&ȭVt24&̆1)L(N\"-DˌMQvU#vBgSx#WЎu@R <fqӸprq߼n3t\"OB7(%vI Pp@u}@6/̂.#R)ʊ84	0o*\r(4C\$[9**aChˁB0ʗз PDP:F[P9L?t\$\nq[J7olJn\$'q'^B`޸΃|8n(01x\r`C@:tBjp4 ^)A𒒤1S|)AT:Fc#UB\"	7 0I(è:!q:TҠv30ièʣL焵P<\0M[đ.C.B#p^(:iB8`P2c:kW#\n7#,K{cIYͮs!9BB9kKKPbUOIǎn 6&\nA0m0\\&Cm}9pZe^U12\$X6!3Z'3-2kҘ(42My&m-@\0T۶߳F`4%)3&)	Ez.7cę2935# 8#0.IUQCu2R\nxb#:\n9p@+ZfsJߍ̩`̷\r2S=Km\n?@a*3pF9*?QYN\$xgS|)@2#^xU}pȰD'̙,G\$8H\07'ɚI/ùnUEX8O,>'\0\"\"CR%YJ15.[;eQUNUY9ydVNX&1\"2F4\0FBb`Ǚt8,Lԅ\08opf\nJA 9Бb\$FL[ѨUM!\0@UAs|!Dȸy\\1ĠQps\"#	MZa5\0IH9%|Q9(G^%PH@\n	\$L<xoa \\ca>D06X	R2R%Q+&@'0Be'\$y\ns\nGP|=tDN	<u3	;9{g8R Ta˜&}ÃBp1\0@߉!a!`\$(#D2OÑ_\0H8hЂ (C\nVB' ZmF1Uԅr(\nbi8Ŝ\0I(Tlƅ\n4`y6<ݵD-ԦddkX6HY7y%\$mt)!\"c-I +>H(WY\"R3{}\nQI~G;B18G7f1ShTqWpxgzբ1=Ԇ!4עUC+5\nb4f*VIHXvXbjk eŬjp*#P!sKVU'17a7UE7#C0;]P;w'(MMJ1!P*l-k&rzW0tjy[\\nHĪ\"\\QnPa>\rRZ%.]cFI+Cǚ4GQP^hz=UODO@Z=39`v!d],2a;ڗᆮ-j\$HƲ2W-\$b>21]AޥIծ#ݘJ\0,^3-r֑Meɕ[X\\\$IcʖڥvC_I^5\"eyZ\\\0/xe\$wq_\r4g)~Q`pd:s\rlF\$^9)\n2p\$͋\rZj*fo\nlr^Cfieܜh_*Onis[Isn;iC8g{?3Ṫ4gzGRe53smoA||pz@\rv]hd+8ƈu*B\rH}o.?qZGHD/ī/LX8D/xODVيO2p\r\$&Ee礢Xk^7lzwd¤~Z.cLl.)ϱW)xL%PIi-E]1\"X*rG~El\rʬ&QP{n\\l0p\\lgbbN#~	pf\"Ф&aN%P t\$~5L<!1;1OB\rMqLl9nK`qv1}M1z>1g	/>%QM]Т9@~1'ѻb	\r_cE\$7etkL\n8\\c\$IbP.1h|&m%f5!mUH\0iz0\"E\"0\0|\"hTaw\np{0b&(qtyZD:\rNZpHV܎j1K#<ZDBʍ\$F~d*o FP`₰JvjJ5\r(< m>P\$0fb4F*K\\|4V8/\0h{0n+W3 h\$CQK#YFlklZfMfrkslnNB?>1'E԰4.,F4\$IvGL޲FK3ZK&7q6Z:lP5j/KV:8.	\0t	@\n`";break;case"et":$f="K0a 5MC)~\nfaF0M\ry9&!\n2IIنcfp(a53#tΧS%9pNS\$X\nFC1l7AGH\n7&xT\n*LP| j\n)NfS9f\\U}:Rɼ 4NғqUj;F| :/IIR7aýatpAߚ'#<{Л]a	PMЏ.tFLAH7SʜM`ʵIH(L3|Bp6KR;!сB0@PCX@'aH#xR&@0\r{Op7h\r2Rj#JF	z؊L%8-㬃j90z\r8a^(\\:\\{G\r`ܝ\rp^)6,~7^0Ϻzӄ\n2R)2#XxL+*M\nj~\$+\nH+V*߶(j9_\nR ߡ#2;!-̌8:<}O` l>q\"O#뀄:܎\$V\r)J\"DBxLe%Ic\0V̧p\nH9/:svCH5˃G664˒\nlcX;cuxC8S\"۷7/WZhlV[҉},\"[6F*]6I(\"<'\rժ6.1^瘞X0̍3 .k5m&:c9Z3!CX]3/ZS2R\r0a\0)B7~8=/ZW&kv4֎VwJ:Z\n@brMZ;A\0I@rwJu3	=)dRQ*%HmiIJCFz{>\"AԛTJsFP%;@SPj;x\0OC:9KCe\$SJqO5B)H8(4*LgzH 7OU10ipL\$ jxǨU	E*<|!0	I&Jy#eGr@P\0TfRx\njT5U`p4FP@1>69\re<1c7@LocdHS^a筁IA\$,	)DV@c^qbX3%L59Z`{\0 -rFקzi&L	m̘FY|NI0^܀\nLRkjelr7L3`a`\$cS1	ʏQH\\-NA<ރ:,Rp \n@\"XQ&ZK\$\"R	im3,IT[3J+=|Lƃ970\n+\r#un06h\r?ᬁ1l2	rMn@\n	uX3X:*ZJl\\7LZVBIԛ Ce)4Z[\"ULS\$k.k \$S.AY<<MՉ0H[Cx9+fkwxI1#~Ba9WA62sO-OE%뵘Y3@䎰*#0HG)#/	Ӥ\rtE\"fwHp(\"`SGVU8N{P 0'4|M!/m8R!( F.P@v-V36fJK߉(6}1tAAѐp2;!,٠d!^Lnim5g4꽙sTIς]X;_		#\$sZS1L\"&d_Eҍ:kZӔ`O[p/K8CWbLbKߝ1aS2n0%ުϱ4*a̚J\$΂߇q8u5>CU!f8NDH?ZlE.Z~AÖeK@*ԤMgIi:DKSXlK59tx9R\"Id~K!d'``@tCvQNyQ~HB1/|BݴܭU]&5iE?\rmwm<BJ'8Z_ZNȾjqXȃHlr><Xf\"xÎV>u9 KL8)2FN@eR2!tzh~\0hG;8VfG4\$.\$t\"zorj,OZea;ejY\$fY/DJDYZD>W\\ϲY	J0L'*͑#pb\npoXX+\n0n3BpɌaAj	,\r\08WoTC	@+Z~-2Pq\0p\nn\n@bkfm)E1,qr\r,KJ51[kx0^\$`q^lpc8WIHg]%B/- Em.q8uѢ^FQe1l@s0Pk M-uqY1W0Ѳ`LhdQ\nxB,J7ё=qAwV	>,\0 &FlȐElL\$O/#\\**OlD]PMW @^Ѧ`FrX\\%AM}.ͮpc90\nd\rV\rbfZJ!P>c\nZj\r\$&-\"JgB@,aB}&1V&T\r )\rO/	㣐'+*\$\"!'LF\ri;pLBHjUf.&/qD \rnA&(d/7ϖ!\0ލ\nC7n-8<d423`@.i8\$. Yc8&IcphTW)N#gj?(j\nM?:^HdF@	e*H\"#nWj,n³2#X3n9C#AӐ[tC207bd-	\0t	@\n`";break;case"fa":$f="B6P텛aTF6(J.0SeSěaQ\n\$6Ma+X!(At^.2[\"S-\\J)Cfh!(i2o	D6\nsRXĨ\0Sm`ۘk6Ѷmkvᶹ6	C!ZQdJɊX+<NCiWQMb\"*5o#dv\\%ZA#g+>mc[Pvrs\rZUs/Hr%)NƓqGXU+)6\r*>n?a &IYdcC1[fU6	PH*|jڮ\$+TɬZU9KIh*si	r)MrTX3,סɂvW<*	41\"Ȉ0L?:oR@ʑa\nҤlp,hbɄ#鼩4,ZMCR<1\"Kx0@2D49Ax^;ҁp2\r`9x3(PD9#}F(a6`6Cx!8V7\072&\r53	G-?s:C6NJ,(˽ZHn43JƿI18%z|X/U!-_rE\n􈕱zh]-Fi!_[J[E*08VaƀlNXƬiN+L)Ƭkl|Š=%SXQ4b&/Y6[*y:.ӭynǷw2korc[y9簈\n۪z23\$9{άL:wDf8+BPZd6NC6I)D?\"숧6O4@NƌlI;DD\"V)2S^s>z>On\ntX[䀠FXA5'A3;dX[\"}M4\\&W!yo餒UqEa%Eot\0n\rae<UAL)\0cUJ2)@*Q*9 |Pa3urVb+D ݡ\$m!oT2]:hSb\n] /D@JNd%3B(ebR\nIJu-CrS}P0ʩU:Uj1:uZ@UT+IN=}t\n<Z!ǑtsRM1P'	BdX!LAvdK:\\Fk\n (EW-z\naa5s*Ɠ\0CURD18t\0pA VpShxt6MH +Ci=2Ri\$Gj2_ao%6Dge@2UMg\"_ȇ\$A\0d\r+P\nCC\n7w\$\"2,u*Xp3%蝝:e[TKAFҭ4躐j,|1rЮߓNO+A'x@lRl	W>W	ʌ 1%4`7cK4\"l@FA\$Gd5>4X\\+4g1gxNT(@-ȹA\"ta[l%̴,*aG\0.!:?sȎJ?D~aO8`f<x>\"'&]#ޣhܭgM<	.9byQBpC]..`dS?\$b=GI+1lyW@!Hu`4*rq`56}Clr\n\r>V+5ԋf%\n_мO&L {,,-HZeJOFE[&\rvP̌vl¨Y]ݽx2;`W][1:@(F'|sG1S3xT!\$\nMPjTR6Cv4GWtaaֵ|\0^[<k|gH-66B-w5\"BWc0r	I_gR~I࿍Ѷ>릻onNH{5j(2yȌ_@qr\\)r`JDM'yU;w؁<ڠS V]\\\"?+{6uvIȋ5\\*c/>vdމidqiH<t?4.bOk{5ιad}_N\$X4c(\"U@S0hôd7<hWOѾ^Gu^\rDB9KA\$E&y;cG-]/~16 QiJe{{Yص)9smo,sN.z˶fp\nBbcF/P\04qW\0FF@RDK5/98	n/폶iT2èD`~qDZ|-I.\"?dd;M,HÁn7\nФFN\n\"Nφlx\nK\n.{\rPW\nFu\rv^@~\ngD@zCpnH\$Lp0o-Hܘn\02nEFc,HPKqnIv1/ϩ.QJbP%`q&<C[р9D(L7.\nmApx1PPWQ>ȎM|\\OLXx2FniGXoq~%cJğ\0c0@3ɋDl\0\\rF7^.л\$\$0(v\"	\0!i\r(Dc\rV`LiĘ(nk&\0C`\npxหn\r,1H >\\Zniǀ;8%Bk-*# )0\"?B>xjL2济%h#F~Ifp#ĮK3>dMb[>̷16o6# l.pI_.zAѣ7Sl~t9O;\"-Dez5d8G9\0DOMt-u=odORk>6r9\roNlb:@zF㣊T	[Q\$8W\",J3~9<Z*{6Qve;";break;case"fi":$f="O6Nxa9L#P\\33`d7Άi&H\$:GNal4ep(u:&蔲`t:DHb4oABbv?Kd3\rFqt<\rL5 *Xk:+dndj0IZAa\r';e KjINw}G\r,k2h@Ʃ(våap1I݈*mMqzaMC^mv;c㞄凃PFKuBծ538[&0SYϒ٪J26ʅcf&n(ϓ#&-ӁBpPҽ#~,!'mJt/B87Ct	:%𐔶O4p%ɂO\\.)X0M(#l0<+`2P6I<c\\53D:#@2D4(xC;Ap9zI\0)xDH8 )|7\n:\0(Rj+%=b1t(:v2LD`<.c%-{b\n.GmZèc\r\nh@\"5\rDPG:'J `x\\'#NZ	#8=	L#	c&?-<hʃR+MM:pE\r  |f&%߁\\L:KV: J@/Zp@ 	\rĹj'kx&\\{ϯ -6GW:)c0'jA- @,H4a\0ڦZ#()s:4V-t9(.Dڝ-jB>Χ.>6Apr/#IwBmOM8K<c)=/nմZqj폀يӈ2w@!bLA\0[yzNc\r*@ު~O0PTCCS?3(pg2(L?9|O80m`gT*)\rϽ/\0c(Nԙ\0r)52fw5\$a|1O@5\núF\"*.`7)8RǇj#XHeHŲZm(C~F\np@anEsa5/PßvPM4H\0P	@e@()r@BɐepWH\"Hg\"!GDLbp7r.s9A`)S%u]xy՚bjD5䟣BZX EPMBQo\0#JzXY!u%-kQ2~M?tG+E \n<)@Z'.RTlkOE-p9ϲ;?HNv!3NIAjH&WH'x1E*0`<0=X'A(^LIy){\"Z9IP*U] E	eh'DJ,룔_4R\n\nX/#\$ltꓖe+҇;@W\"gbW%\0007F\$p<2蠫us3PKMPPD'U̋Z\n	m S\\:UU+έsU\r5xtBIҖ˴S`rNP*mRFrF˗<GS@-O.PԈ4VR1R,~I\rX/N2f&\0003U13NQlVLIے\r\$VƐ&\"RNAQ3|RwVA5.lu*\0qG\"4OL9\$\06j鰗ä\0/c[1pK΁<G=CK\rϒs1WBIOf>4m\"c݋G7YGt~M5w+/Jhm^MƫKAc*aadӑُJiY@5M|Ua\"eg&P&TI='	I~U&ֈ\$\r)%0e(uHA6NuN}JO^\n	SM_.u_O7 ISpZdY50-qA{'>S/}>T:_BrrlmͻGԨe\$|טUB|N@\0.|:&B\"!\n0H's_axf&O,RK\rbd`+cN[B\\!J<ک;*6UI=<M.NL%=ǹn#IwL&-\$yCY%3uFA X	^`=wֳ?1I֍T6ߏ[JW\n&(|]9PH߾4{v?~`DbvUnrbR v=E\"ϮfŊ|x1h,o΃\$քO1\"&+hR\0kl,!I&jSO1+01\0\\\"`\"j0l.{gXu@n>3pNnLD&X.X8a&002\"^bp p+\$J#N]eB\\RPQ\rq+?].t:-1_.?]bA<\$@gldcP̣tE(@'\rq{~o\$j`qj1Ƣ\$Up&+5Q`\$,p{DB>L}/ZJMl7m<1sp.Pp\$	ȀiMVE\$;!#[e(&n)N˄Gĉ~G@cnPI\\똂؊*@\n\0Z8eXfcLTN&eBnP^2|8#]+#>vAҺ|?/cX5p2:L<&E1,\$4\nc.Jb/g,Mz!Hob-ClҘ4I&Q1p\n&e7р/\$~m(/2D%XL{bZB\rJle\"nږde	bM/1@`&<\$E6s7+䵦nLN0-NB6&&\r&&99gDDPED#";break;case"fr":$f="E1iu9fSi7\n\0%(m8g3IeIcIiDi6Lİ22@sY2:JeS\ntLM&Ӄ PsLeCf4(iƓ<B\n LgStgMCL7j?7Y3:NxINa;OB',f&BuLK^\rfΈ9g!uzc7'z\\ήknM<303P퍏+c	+`N%\nJ< L*⼢@!	W0<\nT>c\nBp6L:\"FC4A,!/L|\nL0PlĜ'oc˞a\r)Lqƃ1J5Ø#Ь*̚A#Ʀ60#T!\nNaz420z\r\r9Ax^;p2\rrx7UPV;!xDàx!@\rŧx@%&60`;gR\$\"NlS+@;@7i':O(2cc'\\ @7h#6O_rH1eMrJwA0ȳ22o1ޣ-Ap\0003=\nYU12Xن\\BY!S\rٕ*0B2W0)c37PrP6]DTPoW\"bSj\rS=d9׸⩃q\rw:{<[%\"]OW+\nm@W=;p4qTߠS>hE鷩CB\\ׯ*t\"2nz*8p~\n×X\$c^\0x	NU(ݳN7|&j }';l@X aL)cYP)I:!eCq}hDgk&T\$@Z*)\rb\\!R*`ޱ\$)%uI(T`:ܠW25ÂJOO3 ASP묮jRX!7ZHA=kqX⊙mNB߲JU2dRV{1eV@ZWp6g\0a&PllR\\ j50(RCJ,6LBȎG2@P#8;%AT\"HCq%9,5벸ƍc(/dBO\n`C!:PD3\0:zOUQ	`u\rusIHT9]	u!W9FԚWHo&Le[k*A\"b<yFÊ\rkzn\0¡>{`6\$,uRhkչ	\$%E*i=\r\\ 4@ɛ9\r6ucpިܑf`ܙ Ree^gY:\\ZeH!R!L	,#	8PT*͂\0B`EKM%-dI:*\rT?u=lвpRD\0S*	fkB)d*S(s|VwӢr	wf;YvJVvfy:)k̵xjp_x%72GmIp2tX\0_OP[.d@IF*2QVDVV΋u]8U0E!s@x\nS=Ǽ-4\"vCo5NaY\0d\nHxN%i!S!hm.uzIdgiYuV\r ɴ\"8Ye%%\rKK#d1b\$;&\nQnE,tѴ!P 0G)A>}9Aʛdo(|1|\0^6j/R`e-Ts,14;&/DM'	m/n>e[s\nw^)[q<;G&Z]'[e6fwrw6)\\@w:[ۈ6eղa+%6nL&!Rwl=#)dCEMYNA3ЮC+e8@3-؂rN;G}%O؉^ܹF L9^߸*f]%L%w;NvJjP/(D(d}'m=^z_%8'zHGVD绵d&L.MC*X(k÷	_7M\\eke}ߕ9T`IXn=yZ;AT79N;lPaV'w\0ONp0pwObk%s,\0o'p4r/&+\"r9=\"zöv<䍾pPb-\0pTLx~NX\$	oR΍\ni*\"P0P\"!P\n0)CZp`D.ziR,ưX&7B|(6@-iZ3c&/:F3FJ=-B{J:O\r/'-OJ.p2\"Q-\npVv%v&ԡP.AS0T1Q11fձl|Q_(nNE.`\"Bc!DvVQQNS[bff	O#C_\\6br;M\$0kagx2?2l`brr%&S&0\"'*I\"\$M#+(û'J9&ҞpV(P?'+c+Q#ػ1\naTղNpVNCv-\"}*z\r/?-p1jճ/Ɗ6MG-0\$f@a-ʊ&/z౿2j20 	>Fc\nJK\"r 0ٲX c:!0<׃6mڬ77,3GcB\0:-//D:.!,@k.\r,`5q%ec8ksHz10&ޟ1c8:\nppRb-8ANM\nGXJMfX]Z]l2:g&:\$2&D\n EDD5DJ8PTi\"1ZE\rxuC\rtqGF*3>F@;o)EA;&ڿC3iKJsK(;LKK30MTe'	<;eJPŦ<v#rgPLd jxdbtQvb,4K.#HXB\0KI׃`к˟=2HWaʲ	\\3 .=>`}";break;case"gl":$f="E9jg:P\\33AADy@Tl2\r&a9\r1h2aBQ<A'6XkYx̒lc\nNFId1\0BM	h,@\nFC1l7AF#\n74u&e7B\rƃb7fS%6P\n\$ף]EFS'M\"cr5z;djQ0·[(p% \n#	ˇ)A`Y'7T8N6BiRhGcKz&Q\nrǓ;T(^e:3ҲCIYJ欥r*40m4oꆖ{Z[\r/ \rR8\nNB߈NQBʡB7#a`P4̔5**D C\n:,p>\nRs3jP@1;@(͌D49Ax^;Ёt(LÐ\\{G?:	)\"Aàx!H1țNH(M*h)\01īS1Ebڎ::HK~&j5-bXsp7Ș418<HKm[+ھP7qn2#7NLa\0:iBN\0PI*2ӓXVU*ǈi@P3c<)OǢ\r3\0Ǩc(&Hc&\"gS	l5H73%s42ޮޱ7dךb`0L:4H/j]r8,!uɳ7֜뫣0H5P|WL;*\"{S磞ߠMj߳G?̠b\0P3C9f؎k5bENBڌS8p\r\$=9v]]:0pVHwH7}І)B7f; cd<(Wi}nꩥc26ziϥ{HL)#A70̃y4\n7I=` ER#TbV@Ҝ`TBHQ`?r#G3ClSkF*M9˩;\n8D6!hu}y;DPJ;h,v\nRJ5Gu\$ToYDOHcfXQ	I)g@`yZ1\01t8׏^@,@\0(opG\nMɼ*h@<HM3jI\0gGp̓:Wâ\r;\$fnVIF/D\0(/ vz!O0y\"HO]cd8 >\$RRס!*ʽۖ\0jM0&褯HA*]D;A8NЋ^<	L*02r<L#mR~px2^cLٲ\r!*KHAa?ib9bk]F0vJaRLyI\0*ɥ v4x9Ԓxgz,nS6ABphZ\$MC\nT R<'\0 A\nlxR\nUЈB`Eu\"W*7UP@	\nelĦTxÅ3b/Rw]Zil.W̢{[nn.3ΜS=`y\ryG\$\\nqp+H輪C+_@)R)FnC4DEU\$*˲Ux\nGAD{Xk6E(VZqQåQI<\\e1*=D7[|\$\nNk3|UAb4Vq)H2ʞ	;\$`Xi/>PHkҒƇ8z+\r,X=P-S6#?vW6iN .~3@\\B@ me.Lpo\"_`)3ĝl\0^tèPNI)Ι:B=mJl*h8`7֎Tvr4z6y\$=h5%PK\\6դH\rM~k3*zq%V:5W^@s0~Al\"ijUXʄdZUCĦ^\$\rw<Rk*+xraȬ\$\$^[.ym++	U%FDMH<ZpZ.ph~ò4noc2sN\$/UgbZ9Q?HgbF|\\HMnK1!2:`\"̭0e>K]WYS/dsQv'K58zefŜ6<ar\\'[zuy7ͫʄ3\n=ljzTc\$b׶Ujۓн?ˊG{_/mb`dNv\"&~H3v&,vBIv\"0M\\ʼHd`~J\"O(G6Eoˣ~LB`ڧClHXn(lY\"N	,lÒ0\r\noJ ,,v/zhм7\0P\rP2/<t&Ǡh\$@֬Ю\rrи/!N4o1q\ra\\s7#Y\rap48ϥƺ`c3s	N J0	\nFq9QgQ=rk1)7\"SQτQ̬bj/1(Lяc*\n]pϊqyKA P	&\02t>z6G٢)B*5 ,2\$ztLbNKLV-bT}&@H@`|Ɠ&1T`-GcD\$␐֔#pNx4Z\rHDmg&muR\"2C)N\$'\"'&i1G%b6#I2o=Ψ|ؿiIz4A(j\n\nAt3h7W2,<`~fF<d(XТ?L @AC5H5:.u4sW-&)ͳb7D4a\ndc&L7VӈNԴo>\"ZɆT Qޔ>eNDc|6\$=ϫ\". 2B&C5h%E~\$?5VF\$bVI6vo&b+";break;case"he":$f="J5\rtU@ ak(ffP<=R\rt]SFRd~kT-t^q `z\02nI&A-yZV\r%S`(`1ƃQp9'K&cu4Q K*u\ruIЌ4 MH㖩|Bjs=5.-uF}D 3~G=`1:F9k)\\N5%n(FSRsx&!;VQA)`؎!Fq	\n7.|ģpBx+ٮJ,Bz#?KZvAzvo3 (K1prǊS5l@4C(C@:t㼴# 4(\rt<H4PD+Ox*HB\r'e@)\"`6	z{Ʃ3h;!\\b&tj\"6A\$%Ƞ!02<զ1bi>t4HpG\\NV%H \"zt[qSk^	Oũ(2#rthL[	;H(2!)&_\\5dkƉ\\mKlN,7\".6@L2FiSkxXbֆ{\"gK\rqҹ\rX5&C[<B!vNӝmՌ'rw*!LZdj<<a-g]ޛ`9L(2^,\rG'lcW<%X[.MF2\\'cE:Ᏺ	<ar6N1\r(RNԅ)ɤk͚ԣR'J+K.K2LD2͓t9NJPGOCƔr7)s[5.G6ӆtTMN{\\.\\DPA@\$\0@\n\nX)4kSc3\0\0pA;C8eVa2@LG\r:\0`o	@\"Բ:sf͙_4xdy53X(\\x;k.bHYx%6}\\4q;EꌓU_H	_55V`I B{tq\0¤o#k& drN9\0cˈ!&=E®)*BbL@ĲB8bׂJ'>B-NX=%<᠋duZ!x*ܚ^^9j'e{,`Gę@&x`M<&P4ڿ0R31^^\$.&ҦQ\"&.cqI6/EZC8%\"!(RJY]I		895J	{Q%mrq-֌UJgRIaO^0t1Ik!09ZL3c5g|A\$F\n1*dmoNϗbFQ5kg,AN+uN93VE.Wg~0WBEKaagtC		EN	j(C\\+?M ڔz`L!7T\$DA0ɽ:%1/TN AtFpRDA׶3tx/**DPE;Qj%\nJC&L`цDLΰ<f<\rKRڨ=]GEt3\$2ǧPJ1[EB8L3'QOPTnv̤CO\\xP``\rQ\n朅\\مdZ4h4׶DQ-?4@PDA8'A@	\nZ1gTh%0@lU)TZ.aGz7\n+j@y :RG-dOzPf8UOkmу6r}zN#1\\e(rλ/lmCnǸ,Nˉ.= 	}w06t27ِp	-vߤs6l[dZG2OWU<:5jVEe&qu~sxg.bzg_+Bq;t|oV\neoZS?`hG)0=tuD!X؃HX?3wj8@蘢7|,!mRۇ	x7Cv}^*-\"_%DBGپ`QiL˶>ߥmϳ|5RnO\nn\n^ܾ֖o\rP؛a얿8;mtoi>xywoVm>?@Q*vwgCiB0lqe&	n<'f\0005Z:._cN¾k>R@\r@dDH#n1clDcl2LR>f<`p&gPiŜLXf\08wO=NVР;r-m2DG+QK>HK3=\0-dYEp0&\$Ƹ!<1\rF@#eʋ/4K/쨶P=\rOg&#Śn*:\rlcN\0 \\I<lpq9pn6@+B7,Dz֜>6f]:?mA\0b~6×\0000XOi9E\0001]t;k@=(Vxkp>\0";break;case"hu":$f="B4e7P\\33\r5	d8NF0Q8mC|e6kiL  0CT\\\n Č'LMBl4fjMRr2X)\no9D:OF\\@\nFC1l7AL5 \nLLtn1eJ7)F)\n!aOL5xLsTV\r*DAq2QǙdu'c-L 8'cI'Χ!!4Pd&nMJ6Ap<W>do6N\n\"a}c1=]\n*JUn\\t(;1(6?O'2`AJcJ923:)h6Sx5OaizTV#h\"\"@##:.d9f=7P2Kd7Ċ+q{95tF6D	IC\rJ\rPʬBP\"=A\0FAb4)0z\r8a^H\\0+4\rØ7xDH86̓}JHЋ!\\֊b9;cbK5Lk'*i /n/gZaCRB0\0J2 ɠw*s38:B{\r_Y<*3,[ +rMo2ꔄ6(%ohB07\rc\ri3<N덞_\0\ntĘr-V5tv5*CxCBԠ3b-cmxcd0\01#t=[6޺L+2Rk*jE3mC۲c\r){<oP64hߒC\"x<r妾/FLt_5	;RR4Ev֍0̠!I0M7GYS#1͇#L<8»6aJna2®(@@!bT㽖ap@%`ȹ(r&!:\\Cq5L)dpgFCSE9jS)@ ʨUG©JGeMNiԃAt?=0Ԋp4:|a@5\nHwQpuG&bSJqO**NL2Ue1V`@ф{('rPm܄Pk橰܂@g.E\\앣YB!4c^`r#HD&]{%<^ܓ j\0%\nX7jp0{6fۮG:)\r15|˓}.T,QrrѝLhj& Y\r(.FgpDCɧ08E 8PR0r\$n2BS4(\0\$ɌCZET&-kRUAʇF=0UfE`S\rrp|*b\r0iZe3i&!*K	Ϗdʉ	x\n	%IN\0\$ 瀪\"PV{{9ml|΍|^+7MclE&hz^!2F.s31:E'>(&0Iaڛm11+nSAuRH9p;\n\rAX3,(-ZMBAR[E=Yl/!o1/\0^:u򹔔|]dLi2ZH\\}v RRE\0.ChCY%%ϭZ΢<7։E;%yƵz\\+HCdJ= H6f:f.Od+TR\$\0K\0Q\"@XYg0T\n!ACHԝ ރ5w3\r,ޡ`N ytHr]D趴m\$h[te,0\$tDܬ \\m.(嵨'p:t:i5Gԅ%\nj%̻L}6ja3	2Gck5jVe}~lAS'9;[2&DZŊ[jy8&9)y+gP\0WֈJTPLc逝SᅾuV~ޤ=ߢ\$N>5bZ'##oP+\r\nӮ]rИo'%jԖZ9֣P[jl:O?.H_\rIepr#%JdJqۤJ,R\r6Vx-bֿb K\$uvIդ5ډuu\rۧo:78tkK:\"R;'f~e׌~࿷;%}A>1f;kmCu'v<R#&oMn6OLjgܭؔlJpoLZ:\rZi(Erh^b3L1Cl_\n\rg&0L\$10VO2\"[U'<dk2tCi85jlo|,<<t,pT'.YOA\rrp B)P<YS\r˔N4˰#>ˌ\rq0̶#Z;#t	b,	k\$*g:B煄\nsN̰F<d\r*x0G\nZQzd/!\ngHt,\r3˦9D9b^⮿e\"tf%P0.1\nnoѦǰd`^nM/ F\rzʦȑb謆#Q.!Kes\"ǲ1!dwDKE\$LD\$\"MKHQ(?`3q<ރ)'gVX] ̹ˡ\0ʨ/()(u)2ҟ))R֯	lȚk\$%njI\\m#+b\\C\rN]2p-.2\0e\rV/E8F\$bZ\${&	{\nZ>/.=ͼJr*{G44S=4y4/#@\$BH\$'6k^&.h	71,MaBr0lK~<cbPt+GRQ)(pBn;z@;kH\rrBc|I̠2-am,kt̺YnPR^0Èj3i*)<@F',t\0!BQW#6r5cZ ܰ|*4 CE	Phf7\"ÏDĆ9sP^ \"t:bb?P#!W(\05e\0?nǃ2-a\n<t+oK'b\"Xe+\r9\$hG#:bk\0@\r";break;case"id":$f="A7\"Ʉi7BQp 9A8Nig:@e9'1p(e9NRiD0I*70#d@%9L@tAP)l`1ƃQp93||+6bUt0͒Ҝf)NfS+Դo:\r@n7#Il2:c>㘺Mp*4Sq7hA]l7c''D\$H42\$EN)7^t֜s:(	HJ8#;:T'03C	L\">(ގP0ˀ߽(%lN(@;N.\0P\\u\" 6( c@2D49Ax^;r6	@\\7C8^LcཬxDKV7#x!23\nb4)hˍ)+@lZ6QJ5lJ˂tB&C>T#%d?@HY8@P7\rr]h	>/@P&#؍82T:4B2B3`P3i! Ҏ'(֊7#\"ֺ\"('#T&j[6>jP.	-&CzmKTSH9\"܈dLV(37@f1>=_fChX;ĦLp3H2]ȍƘc5:9x<Im,.\r͸aJ[cj)B2\"	 \\	cK(6͠\0cqJZPůx66j\\&f귡\02nF1ȔC%ɳX\"`#&T4\\,lwh922p&I҄*J-u/32LM|TNSOnm!5KB\"=Zfŗ#I\r!S\\-@P'oHNAH0d+Oe&eLBniL<;òZOq*\0~J1U*(:NHEXF='Ý xO i\ro ВCɈ'i <!7Iae }-<2<e>< fA a@'0EsИjQeI;Ia0i\$FA3ʸ\"M,rb\"')&6#e5B',ňP\0U\n @ &YpaHn*<gDf:j\nɊ2Bzd1.BwΡg෸HR蜣9`˓DT3CbI>F#%  h\n\n\\\\Y\nĢZDA^bB\"Tv0m4XHiUvSVt^C̆\"1:B-E2ùC(wAd >ycQ}S]NAΓmKW6(rt(E#5\rQXLʗ	E2DӤV#@()riDhDbwT\n!A9i&<7=b0\n睐I=YT`̢+~p[2a!#- VlzȲ^FР۲r94Tq^#\"A7 \nl\$n~bv\nXF;MIS0tED2*oa>D\$?lCV'<W:i\$e ҄.-)4ꨝ+.rg5P;h:UQK}	ܧT&\"8	P2Iou[3eÈ-徫\0;c'	 !K9W4Хg9֨NJ؀\\}CNip7Z_ySB6K,K̒իx<Ve1f	њ\$ڸ3˲.Y靐	5Hb2aTBoZP%yc~Q9(n.[wXs>oEV+\0eTIXHR#.0Io܄%6#F/f^:x\$z\$Ѝyb+籷ckj*L'@;Z?[#Ә ƑjơuxvCI`_s-{q.};^KM?QLckmm/P:MJ*0e?շԣ_BפuIȿӆzvM<S_lpi11?8ײe~R?b\07]|^	~C}}\rxb}nU97/ެ\$e/˲WgLJz_P%J\0?iB,,|Y'84FOh&m%&Nn\nZı0@#ܫI}kJDg\$u\0+H_NC;cy&\"	(hEDG&(Ӣ:%(J HD\rz\r1/:s@\0B,0ڦ_{BbizQv\r*\r͎5F\0x#Z\rJqV9D^m>QJ^-`*d+ /\0h&.0nH,;JRfqB_bHصOtC BFt^BIX1*>(2\0";break;case"it":$f="S4Χ#x%(a9@L&)ol2\rp\"u91qp(ab㙦I!6NsYf7Xj\0BcH 2NgC,Z0cAn8S|\\o&N&(܂ZM7\r1Ib2Ms:\$Ɠ9ZY7D	C#\"'j	 !4NzSfʠ 1c0x-TE% \n\"&V3Nw0)ln4Nt]Rژj	iO4AECIҍ#Cv`N::\"4\0@/\nC,#z(T*c*rװL/Рc2Aĝ?BkB`޵\$&@2D49Ax^;ˁp2\r[-8^ʚxDH8\$	|мPb%T޺C4--M*c: k/85Ŀ	 #q4x7 @1*¨cxؒ-ZX#lZGM\n1\\(#:\r:Bc@ <ܯІ/:76'KՊ%(4H.&1#;K%vWTH7!&2#(,\n-AT4nTNr}1D͞h䫜p\n:Cй:9hʘd˪n8iʿZ[ \"	3Δ#7@ÌְAaȃX[Xƭa^OaJZ*\rZ*b#)-4pAl`6&\\4s.J\rSpzv75c2&p39n̍A9A07}=><@ûڰJ\$9&EWvJtxa_*I'-҄*Jĵ.|CdI4TES`nMTxFOi?cBN\\S~[	9\$xKBa!8dʫ0DViEMpșpȱ	HO\$@\$h9r4ࠣbщ iEܒCwf@gI5f-\nøe~D9T~a#Nnr@*Z!bGtL1VčlC,jMZO^@}䒆5pDd}Fz:Ԋ\r\$(Rr\r'NCI/N7ΧWlMn<SF &MݱS\\ R#1vx\"CI=\$r`O	*\0BE^\"PgoCĆwEY@\"hhGtz®OI9aM*Hk륢*Y\\aP&GJTkJ:o@4Vyԅ0][PtHPgHĥh	\$%'ɳO17#eΎ}4&UZErXx\$\\˪R˹v	YG@&ڝ,:T&\"CjA;xaBpUe7TU2oTPRRn`FTW:\r4`I\\Py?e\"k0D2؝F!kehA9,HȽL9Z T!\$	&DL;48%UU ®ձi?-2)xema<%w}0D\0Ci׸`<\nQoɌ?8&`Ka;1.e1r0iOxe'N+t\n#/o8:6uxV՗5vMdXB!iҩĵÆP\n\n1eUUyBhT/L\neL,\"0ΖpVxh0T)Ī*OU6H&-Ag%UKuR6ْ%tZ\r/T(Zp\nԹTDajJ҈z2/i\nZ[WZl6C@R:MV3BvZ,8LBۡK~M>P>]LY#њowҽWi~O>[\0҇}7ٮ!ΔOsBb79l2cp7;z]{x`Űc8a3\0tW!'AlxS+o2C-\0006hL%\n;pa~ˊ6cߗ#-{r#Lz!d,{-KɅa7[/6:G0y\"qL[wtz{:RnjQ\r3~CEueR:Dt9T:oit#,64ؗ1/~[EHĄRi%^{Tq%}:/RLt>ȧ}o\\S\$t;-ң;sz-Oyv@LN@EM?@\rx4#J<PIOo7p\0bW\0\$1\0Dd	\nh|P1j\\N.ofEpA\$V_\n`E)bZ\n\rN|j@'CFEĎH/\0ʊ#}b.!ͽElo..B0#ZʜHV%1kg7\r`#c\rV8-\0`\"ܤ¦V\nZ\rr_@.&d,+8)iT[nL\0iF&F\$NtD/kdC'8P^#o8lK}`:&*b0[I\0%^HBd:ޚ-Jr%\r	\\\$&3H4,bN\"\$1(D1FR`uc aαo\$Q\r8\$V2.vL+k\"Ө0>^2\"-ւ\\` %hLa -Е#.0Mj\"AD -(9EsH?5h8\r<o5\0ti)Lo\"\n	V=P&\rrTp	\0t	@\n`";break;case"ja":$f="W'\nc/ɘ2-޼Oᙘ@SN4UƂPԑ\\}%QGqB\r[^G0e<	&0S8r&#APKY}t Q\$I+ܪÕ8B0<h5\rSR9P:aKI T\n\n>Ygn4\nT:Shi1zRxL&g`ɼ 4NQ 8'cIg2Myd05CAtt0S~9s=O\\FqE:S*Lҡ\0U'(T#d	HEqE')xZJA1 1@#9򬣰D	sIU*\$zK.rS/l _')<Ea'Js,r8H*AU*dB8W*ԖE>U#RT8#8D*<_aETIB#d+	lrjHγA3>%ʨEYpEu x03:xa6(\ru<8Cp4DH86m:xDa\r#vގm`(K#ANE\$ЎhK J	seK*WaXft)ML.NA ]Һ<G4sj9 VQ䬸\"V6\00˙%E?GI,QvdR9hQ9vs|\nyFx[j\$o{\$o/\$Y+B6v67nKlc7=7?zeA9|d@NRaxl̥	=ԩЦ\$<=`IPTYF@*Q%=}P-NPi:.gH\rl\r06Y7\\I f\"׍1m3ga\09`݇'C8a=Uܲpu8@99µ\rTR29D3dh RCȀ6Z	A}*fYk@V:P1P Vj[d['uʹd1Pk'}ڣ )ېv6-0C@Cs8AHj8ltRV[+tXKcArZR-jus[}p8\nwCY^e?ܸcKFLOINʲ: P}  B0dYP	AЊ<DLQI1\"S0bDhٗ:El\r6w\r5,9f\r㢰T#+\"8a\$a\$:LF &%VXt|,^d\r+37J8)0r\r#ę!\"wV)9@'0|EEn H`ׇ֟JhUXLC3`q-tP+R-B=;4c47?E34p@e`6+@ݫ1ok\rcp(լ)nQ\n)ڋeP*Pu\0D0\"T<AS[̛t`WXyDTm&!HPDPpQGsNjXI\"#aFstfjLІXwаdA>SvӇ8ØB¢ɗj켇\n\nkNRȥDQ< ddQ̎{tE\0mxIHiM\$e6|˨A*eǀԹ4FYiܪ0Qu/t%t%0>hy\0YFFcn=ɹoI_w]	:GXgfLX`b\rJ:\"8b*ď!e^y\na,4q.Q!.T!\$\nQ{Ʋ}C£['E\$\0^7Ml5\0H	8SӼ.AYA	816)13~Ah B*A+Kd3%/(]C񋔺H]=7@l3F|2M\n)ԥO(+PbVDI\0j%dr@+Zᎈ~@@r+Xp rvl;@F0ƘBGϊafdXsLXs	eE˸a~_s,f<0FHG̬C?sg+{<b pL^SNGQ DA&CYnbB9]Oq4}&CV7F3s/f&efRnhR\"0\r_4tlo%:Ӆ\"&\$sn_1NodoHLF,.uO4dz-\04Prtjq0:pr\"*fu-؎%0B᪀]#Ka5T0ՅO,PWnS\rOR.'zb>ԩf(m+A 01c.InR Nɼ4BΰHԍLoB3Dq0db+MC	DxaҍPe\"LM`scf	0%OtmEя#}O=cƔa_t26?B\0EfD|0Vr#	/	xyP#Q0MqPNy'iӑtthP)!&.ijjcŲH2\"ќd,`Oӄ%\02x\$Р}%r#\\Q\"P%K\$Q\$i\$e\0HdNPo\nx}Hꤲȿ)?(*2Ir{)*+(-jPoqe,rD2ղ<Ml/\"B/JiBx*N+29+.22M		\r ځvgjcv0dv3&(,JvG%Pnl/VLl*F*\0/3q7SynJfO.b\"`@j\r \rghg8g]^Øf]@ėKJ\nZ\0@Z(C9'ngrl3c2Oxa\$æ@< 1&ʲw%Cc\"2n2B@'7c	P59\0EŌ <`xM:pCO#vI8#)/өH/{-Pr\n7#P5CY>*\rࠥmAFjDEI\n-/Obj3B\n`EA\0äG\rGǔa(bVwæb@T8&Gr\\eNnUJ'R%u\$Ϣ.c*G+0xU\$B0@";break;case"ko":$f="EdHڕL@؊ZhR?	E30شDc:!#t+BuӐd<LJN\$HiBvrZ2X\\,S\n%ɖ\n؞VA*zc*D0cAn8ȡR`MiXZ:	J>]ñN,	v%qUY7D	 7i6LS:h4NP +[Gbu,ݔ#^hA?IR(X E=ig̫z	[*KXvEJLd *\n`J<A@p*Ā?DY8v\"9#@N%ypC QV2 'd1*AaLU<PIYL6Fr\r\"P-ȧYTTdF\nBBhjREaRluǱu҉rBoYq31D6yRFIy['Qk	NrgSR-X2D49Ax^;ׁp2\r9x3(d(9#}*6\re^0Amx8^)\"`'\\5M>v%dYYaz0%RbbRBHBt俗Tn7dy2v:@;#`2!@vs2Tˠ2dLdU	@꒧Y@Vc?k6Ʊ:'*3(#fc|7!\01#svRZP8r<teHM/AYNDpWqw v=}2m,^Eq(D~A7P1Q)bDO}^TiiGI|_fNԄ\r^\r06XW-L,6AB\rx1m3f\077×0a-ΰCpu89ab@01@\0\\y	\n_%FJZC%^\n7z3ZkIhEbV\nȪ |>o.!'.9\n1B<]U!BB1A	9Pl ssPJ^ ^UV]\0X%e圴/Zk-\"j*2Uoa\rfw5Cr܉E\"\"\$!\$\rE(Py\0^G( H\0qd#ŞYc-t3jmɻ\\cCzrMofpP*ELdB*EGBGH)dB\"n(#Ā!(u_TzU:^`d\r+سe780r\ryC:}HA(!@'0yךM)XVȽ4F;SJyQv\nCPBh)q'aH|AJHSt\rϑl~A\0b\r!.J\r6#InW8i[u3jSJے5p:űLxMQ5\0U\n @ &[<߈(P	XUJbb33ھ(+=Ŀ1_A/vN:Z.6;W-KܤmGGP	3JNU9쩌ܸ;vbJ(B^aɕ}&;-@?MC@JvtU\0KЉژB5vLY\r!L\0SiNs~4	\$y9W0ig8spCu0a)oDI&SjiyX\$0?\\@B9[m&DDs)gN)X\nYk`\nfbTmPJ.4vV΅@@ לkr83p9Y;P\0/XBh ](^mU0-lOum:Ԛ_jX=iFVl1]m.ͩPwDUA1ls#(d^LHYEv/B6z1NG\n\n1L\rA]	Mu(Am BUD͈S;B\$Pk)֞D62fT˗е?{bNlKoPd96A]˽o`/zAȽQ>lİtX6W1p|\n8\"213iE__z(wcnNRwuwL9=wm@)I'h[y٪7\rniwRxJׅW{G{_N}Mͺxޯ65xezKr0q̠__zmvFY?*k]O?>ȐlU.ekeDoxOvvϾ9VP<%o)RebN 딩LM\0,Ⱥf!<kbP=kR3˪m_,++pJ/ˏRvLrO,G4氜ϯ\nxvud/\nN\rP\0FPb0D%Q;\"iLplvb\rqa*hpQ\$̢;PJ\"rIKk*d<`Nokm\n\r#Lh>N<!Qq\$EGd\n*HD-GpQXbQNa;F=Wd^ȫMe`Q)Dcqp!qD_BI6P\"ѷD1u\0<tN#Bks4#nhXA#f\$j?'Ka'gP&r y`@jh\r \rgeZgt8\\]\\`ē\nZ\0@YHvC3ta@t21L@hئ(e1`	-dc,3\$4Z2d+iX^8c۳dnNjD\"A`-+gnND\\!Q2ЎrC83鐱 \n7V5_.d\reĉ:#oOn4.J0n*O0dcۀ \r)#3FAmF4_ajǺS8x'1teR'DҌ䑑'Dph㤷\0\$CtB>\0";break;case"lt":$f="T4FH%(e8NǓY@W̦á@f\rQ4k9MaŌ!^-	Nd)!BaS9lt:F 0cAn8Ui0#InP!D@l2Kg\$)L=&:\nb+ulF0jo:\r#(8Yƛ/:E@t4MHI'S9P춛hb&Nq|JPVuo^<k49`\$g,#H(,1XI3&74ٻ,AuPdtܺi枧z8jJ\n*P:-B94-Ի4J\"cZ,(0~6 \"(2:l\\P(6\"9lZ(*VZ!()KP_\rVǃt0K`(IH:4#\\L;-A80z\r8a^(\\0j\$4H7t	#k#.#x!GDӴC*)\"c2n ..1,en:&)V9;k\0C%َ\"#n:i{0PJ2K7ʂ%r\\â)`!\"qC	BЄH1*@:rX:Um\\/45s0ކ#;v2͎c\nHҿ<\\\rIR,:Y<VTT!|,,hʀiZ\rcVֲ0blٶ@TH4c?{e/A]0[B^ڰ#;b8u\$_H ͳNG+\nJ[(ZL[/<K1r<I<^ǲ0*70E֣S97X<딨1l3bx޳RcOBE\raJHiv)b4@a\0&o\0oXopƩ<Y\$	KG~922a?~KX *%E'Թ)\$'dÓ:@\$LϹ @]JNsAAp q>+3W\rDXØw,k2oI<\nPCBhrQF.E,sSx0rҨFUBVFt?I%*wP\"(iqK9NYmNC/̓E(\0\0\0PN0\nj\\8n3,KQDxCw}dx̾Πq(c|a\$䤕^\\\"W, ]A\$jMbi'F !60CPj0qb\$wt,52D9%D@ٴA<)I˸ o_#X鋌\r(8=zO҈lP* l\0\$`)QְoQerZdApYŀ`.SZDZ.R9p\"qI:1RL<HŃh[0p!r^A{Md\rTkPN9\\Hn9iKvN'gnNDh䮑YMkݞIIIN÷A.I+qu&RYMdRrJord\r49T	j	w@0\\yB.%@~Aҧ^[KIiu='I8K8\r[X&soe}FVh&* zb\rO>\$\\&1zLw]&!#Ȫ\\&%Kyʴ\r«b]\nBCmTKP^/قfJYa]p\r j\"ʒQT+F3fXb\\\n-o\r=BxhdL|\n&vK9PJ;a*@@ Y'Bhpse2@%\\kȠ*yN]K}p5ti0u`Nc?4!?I;w:bDuk]zaJdJ%lMbFهOgF:wנʒݯek+R^RA&fnM|S5~ݰ^ocw5rHh'dɉ\re٢|gb_	a'%pѺ?2IQ8*\$qY񟰰Pd%< d|XM\r!Y\nBr.CzA>ru Yms\"Pm\$d!aiusl-L􀻲^H	\\\rhe9nA8køvs?f\0005/	MJJKƚP	)}̖uGg\"%uk\0i*k.É}{v~Q8)W/My;뭔~sq/z[7nǫ{v,/\\hH/O{`܉\$\\7\n\".(<p,W01P8<%춝/bHLFF7:%z5I@%ʓ<`\"#*#*zbpf6\$^!V8=.<:Kp\"(hACMBBFcʴ\$\r%/I@/ȻkbP;cU/½)pD\$'饚߮&s#Q	,\$ֈ<\nDm#f:ڢoįkp\n*M-Rڂ>cfJ;qerE9>8M\rK2%I='o*x90\0C2%i!QI1Epw\"lhR-QXFd%JJǏ\"'\$=n@/Ч\0\\%/3/6B`b(B򐼊|%n6q*\r<\$H)(fX\0)MPEoڰإ\0\"2.Mj\$Vj<\r \r`@RF(\0&y'U>\\*{`\np\n\0H[24\nKY\0@3F#\\!0xvN^FN	' f\0+8Ŗ`,b/e8Y!Ba2 =9E9(\0͂K(Lb\\Jf_kɦG,c*4	}`e<8b@-NhkB?ˢspqOh)b*JA1̺2<#X.^2d[2J8\r%P@YHfNe%\r.bf0&h8F` ?b^>H<\$`@C>c\"wt-Pb<tG\n@I4#z>CEOtg5#Chx\"p jEK<\n2)(J5&";break;case"nl":$f="W2N)~\nfaO7Ms)j5FSn2X!o0p(a<MSle2tI&#y+Nb)̅5!Qq;9`1ƃQp9 &pQi3M`(ɤf˔Y;M`@߰\n,ঃ	Xn7s4'S,:*R	5't)<_uFĜ'5>2vt+CN6DϾG#{o6vB)9Øtj´(+HZJ=oj9)C*d3/CIU<	#\$0048&h9/x72Bb>Jj0i \$h)\$(㛬0B1TVI 7%;ãR(6PxhSAx^;rb6Hh\\zgI?ұ	#j](cx!H-ޔH\$\nbp7*rj1pkƬHW9B;&Ij٩=9 P`ҕA*R1)Xq\$W,L%H 3#Z7'\n:(0b;#`\"	p#uy1C\"-'Za2^\"̗ĩC2ĮT\"5\n3w'b#h%\"`@70+#9%uȊscPjx֖1M(0B0(U:8ck\"\"`ZL8]4I\rxv\rd3(+\r6GF6P(%p:cH9.\\CaҨїVaKq:\"b#'X\\<0c8:3.<ズ2ۼoqH\"j*3vXy8\0N\02uk1POh4@*|2,JQԼmV^*%L2B35Ң`Ic2\$u?!~SP\n	B(eSQG%\"RL\\TY>rd06R&R\0EPO#K4BBH/\nd)Avp\0 2č  U\0|SLd	KrLٚIy{D]'˴V@vOS(8n4{x1\0BjHy3GH4EI6EMC1L'sbp/U٬8MBO\naPlʁK)@;%Ӥ83\"Y_`nCcM\\( gebIg?0u0Tl?_P])x(1'ab\"8PTl@-\"KԶKLقD71Qc~''EkY'6F#́&V`%L\rGEu^;tL*LP)hݤpN0m@<2-N\"\0L^@gjCbo<1MB@\"%EvJj؈;[&^<BId&`QcE5+vQZr2!OAZ<P>et+i\n\\zkI\r\nメY90Z{S<HKJY]5HBAa KbVj5TH(<uX9 JAx PrReLQaxT-O)]U4&(@N\"!TLNqV#t21^/F5%DuхssK({X{4\$ʹ_[ѓNbFQ07r,VPRR3-SP/x&X\$C@Q\0Z `ƹ)gj|DWE0%ȗWR%IlRT=M+Fe>NqkԸ!2jEvq5{vQę2mOMҥlsf)b36HO\n%㩸m٬g{tJ+]2V\nVJU{&UU#a TڻZmځ_pb[cֻ&ERu㜇fҽ8ִ5}3&YisX	˜guy \$7kDn !svVr_^>VQ^1\n\r\0bj\rEdվgHUQp~@5脖whؽ7O]J&k`KhE_p*ZvёYVϏk6GU~fr[wv3lxv{ZIIm_[m^Ih\r\r6O :݃w6hտ5}s~ƻ\rb,Ҿ/Kjx4p\"lǆ:\$lHfBfsN\\#`A^kD`^έV]'#\\1|4닶/Й	0WtH^=~.>	͜B3 \nL\"C!bf+rXbcE4p\0*cPalN\$\r'4uCT^\nm,d6[%1\$\ro\\e\rV\rb<\$&?qz&Bc1C.'fZ\$hZ\\}lNjb>#| -ˎC8Q%o#4(\">\$/@ xlU`,l\0#o#Ǽ\0EF qMYC.)\"lxfb	jĊΏʢFAkn#(\"ث)\"o~8C%@628FOhM)##p*c8bF8Q'K.W\"r8Yb,cu\"dӤFepf-Nc) 2cЀXĤbta\":I?	%b	!*#*dH0H.I@+JJ(\rF\nMen%D`	\0@	t\n`";break;case"no":$f="E9Qk5NCP\\33AADeA\"atl\\u6xA%kl9!B)̅)#I̦Zi¨q,@\nFC1l7AGCyo9Lq\n\$?6B%#)\n̳hZr&K(6nWmj4`qe>䶁\rKM7'*\\^w6^MҒa>mv>t4	j	Lw;iy`N-1B9{mi&@vlHS\$c/:4;C80r`6 ²Zd4a*-ʠ::ą-\n:9Bp#+r巫dn(!L.79cA\r	CBl8a^\\ōbz5	\0܃\rp^(6&x>:\rxș\r\0ꠄ&\r)R\r P :Եc2UF#`ˈš8<\0HK[W&7*@q#ȶ\ri0:p(3B2*S\0)#lkrp\niۼ4C:6*\0@2KS!\nv\$jr>`\$2C#̹\\6ׯh1L\rvF\"7M0HwUT/WH9eXcPȁBzF9Þk1ٶp(-52~*[wc\rx&ScM\0c`Z4'cp, 6&c;{gXc}%VH:c99'c?Y6\n¨>g@\"<b#m~jC٦0hϛ6`P:IC͈0iH4`Q}2`W1(3R,(|2N0}>IL\rnu6'cs3슋7WRJʈrP[UtKy0&\$ș.M	9TRӂrN;'RCPAb0	E7ƔӻrvjaA%Bpò5lE)).%̦,L|	;	^\n (ج	A5@[K)eHc&n҃)s)qnIܾ>]F~˼`dCw\$bd\$vфL/zDD<g8O=9c)'( !s)Fi\r.ɠ<P@_A 3^9C\$S\"d	ēuBGs/c k2DprDI *8&L2SP(!8.)\$`RBA7/#((]'\0 A\n\0B`Ej`L3Ap9Vn\\!6.tI\r:Uڢ;qI* !@v	SDKV&bΎXk!4+z'%RpbRMDAc,Kv+Yp(<*x*0FiXT.ӥxs\nj/1jt5y\n\r%׀JUյc	kQeN\"&IpM4ŽUo[I%E[¡ioEHgRIB8RA|pkedWRYaU6EЎ=HS BHjBI97[ _Ȯ>.0.E(	-bM2D%\0i(v8'9Uf\0Y)WS#F\$vhHc]abw%PJBXj2IIČW>}gJMkF1D#\0(b*b/a?\\`͈{a=-BXd옴V 2)!#]\noC[NhUC/@-rx4kukU-L(tO^**R\"0/6bMPE\r!]L:y=]y:=R%SFC1Y	LG?jJ̒c9<ۑm9[0U&\nݮs5<;\\\"Iz6{qPo(1J;rLޑ[6}q=/\"z*7v:0ev=(qӼ\nPeaCiJ(E0]\\S!S5\"*D^SJ|ouvUU]x|SW#D =ܩݮF\\EMr.Q8Er3rJj_aۚ\nag/\"q&ǭF0]ɛm|?.|\0~/^\\mF)( mĄx\$O㶯`0eB)b\n\rpNW/bAfNXeX\0？t0+*PCXp	Љd	Ʊ:Bu@l.%\$d!.h\r#2.H@h=Ҭf0:'(c	eV% Ȟ.ʌ묢jd\0\rV\rc!..ԛh`e@\\#瀉Ipm	`%]S\r~\r*07nڢE\nƏ(ǂ.f6O,c8eoB8(H^4X\"]qr\nhХ:cAS_#H[0k*R)C͢كr0\"]\"N:\"DR Ё;6.r6\$Bf2#̜R>0)bkDrH:11C|ENE2ץΈaq\\u%+-f(Yq9!ʧ	LB2Nfc+WC@0O&:\n-hBd*\"";break;case"pl":$f="C=D)eb)e7BQp 9s\r&ybob\$Gs(M0gin0!Sa`b!29)V%9	Y 4I0cAn8X1b2i<\n!GjC\r6\"'CD78k@r2юFF6ՎZB.j4 Ui'\nv7v;=SF7&A<؉rZpk'z\n*κ\0Q+5Ə&(y\n(XƼ<`zSqΕO猯rBA+Hz\n78 O3	è#Ì+|cCJ9EbB87BbB5B\nOc\$FiH޼I܌cCv6\r;9.[0Zh(7D49Ax^;p2.\r`7	#h6%Ȁ}a41-RV\0(:7c\nb#p![`-.:heMbY*\$'C ȓ1crp\\MʎP72\rS/p p@\$!(!/F6|^B07\rm: ÏJ#ՊŁC8=!0ء\"\"0I;#.  ܣǂx0\nu\ne9Z`7+FNskYpnL͸[ʗEӵ[Ѿg\"`L01\n >ҸKWP⣖|\"\\|*lv1#۴u\$+\rʂH@72Dt50͓Dih̺*1<0!b0zn6+tUѶO2yY{VH\n\\j5kz?G^]/1=6լ|:`C܁x;\"Ȁ aL)`\\Ƅ̔m~'(y~xV BI&P4t!r>ɰ7p@Tb6@i)( O =T\"ƌDlB&H9	Z4Oe<t֛D\"]`3I\\xA8PDuP*R@Qe0h4%HqUa01*82R E6K\n%\$֢Pw=4Hw@\$0^xo@n51Eڋ?p4\n\nؗf]cn˄bժl>ɹK>AP/hFuؙ\rMj;H,sʴ	h&B;\"Lj!ҦYF0]Wvͥ\$H1PeK D8哢152ra[5da!)\\Ġ#iGcW.8'϶V|Neިuz	\\hn `Қ\rV.yS\$f`/)rrCTNȸ\0'\\hV(\"Ci6	k0[;\0悻W !EKn\rvHnR\0cH9'/.Ðug	xpd ̊ v\rǌ͠u #*JO<~H)r U08\0|%3\n')ӏdqMJ,i#*tA\\pKB2քvU\$>)K*	56<#!>LOO4\rr#D<oI%.BR0 q,0ZGds#HNx4(C._س͉|!L!1&.[=WO5}a.dg*Z| =!Hüja}>!߾@Hfclt9R DX:N!.\nP 0u΄\nLOptFOm[kb#Ǚw2xA	NF\$ZbCM<}_\0S|\n#pB[yK}.8<uX{{p/\nZ|Neĸ3(\r.>.@HPH[rBl{=^ib4fx\\I>4I}x\nP@a0*#*VLjgyn\n2	QHDɵt`d~ٔU8YtxBGR)#\"	G<<`w.xgW<;_ 2Iı>\r9֓oSBXJR.%''ec%kd5jh\nssnOpD>AV HjmHk<#`\n`,jRN\n67ѫ^e\rؽ/¼*uM^\0(,\$PO(0L0`dm%\"폠Pp3pqLϚl	~Х	d[\ni`\r|0>HT\\Yv.'\r :m{pPkf}U\n1>1\$p7+u\r@P\nϿ-&âׂz)C\"N?Bj8B{F*!Z\r Z?MB4k~@5\\^@R\$UnirHO\n\"\$w\"/QZϭّ4,Zk\r\n0^/0zЀ&HmGLi͎vgg0!\n\0!{\"! 0,% NJ;F)ph%=C8t%jW+#Kd\nQnQ\0004 o o0I m.Ÿ́c9F3d \0\r+O,*\"uTCd2\"h`uQ)\n..K/`.Oo\$d0r,lNp2.ONOc2G02G _&Dcr%34m:3J;K5'*\$mS6MW42R3Xidzr0-)oa *0  9B*,:Oz7he`k(<C\$3c;<@]\r!A\nh✆r>d>2l6*\n\\L\n<Es\r2x8;enz#Q\\B.Vd\rV\rb\0憘N j9;C3@ML?\"-!6V\nZm\r9¶f0H'm^TT;I(20|TlLZVK0	B:aJ5<hԭE:c5d\$4R0i;hh櫥\0<Nb1\"5Qt-J2RL;(3\rj6T KX%QTS FTJSO2UUϗ8Flh#WUl5\"E/JdzjbS'MJL\roFDB_ ICo\\'K^YoBHʈ(482Ɔ~i@w@(FO55D034p(?I&Ĵ_Ci_\"dB^ikI@F;Z";break;case"pt":$f="T2Dr:OF(J.0Q97js9էc)@e7&2f4SI.&	6'I2dfsXl@%9jTl 7E&Z!8h5\rQz4Fi7MZԞ	&))8&̆X\n\$py1~4נ\"^&aV#'ٞ2Hd0vfβK\$Syx`\\[\rOZxN-&gM[<7ES<tL@:p+K\$aÁJd##R3I0(epҤ6CJڹZ8ȱt6\"7.LCb.8V	1-[2Rq<:U\"\$#LVK)s)d\"Ó&+  ΌD49Ax^;t068\\zQI0渍xDH85}蟌j\nb-xL9STNSb7LKƹIR\rbc_+Õabp;#1>!h< HKo\\\r!`È\"9\r;Q6\0`*1B `-T)-n5A0J((&.ِ\07؞9C+ˍ͊H2M)zHJB(A*LMz&\rzx7)b&LYr[)?҅ubBZ䏐L6\"{tJҴ1cK\\<!x<pinCѱnL`3Fҥ3X2\0Fețb肠ޠ'.L7Xَ]3+A\\uKSҍZPb#xJpA6%NR^\r*XKuK)kp CkզN7\rmn2:Dl<d\" 18a˕MPaw\0Λ[!4?:aw.Sj{`i@(%@wQPF%@K4%*rR*Uʤ0'3'LddsJ+sr\"\\4!8 N%\0D_6A@\$&mࠨNWdy@؅kpZXރIPȓdoCpo`铇xndiY\ra'Dr\n	C(*>Gfdb#>-\"T*\$ i#5L;*VoL\$+&/Q3\rΉ^\n<)DR<Rt  G:\\o{<l3B8Lp074S@E٩+#(R*HbzJ+I\"24-{(`60xNT(@-PA\"V01u.ŭXP%Q*Nr	1Ɋ%a2Q%@鸂;C, 84|j\0\nnȽn(^亲IMdHI[(1+j\\}FN Y7 JK汔?(9B\$dudPnSt(|X_d\$*	 PF\0Q5+'7Cg&@\nS6u\0R?(EɇRA%{ܙK!*Ewb5̳[15(j3Waqu!EAB\n^Q\")m:F	s&/^Znk7%Ɏ[SY\$9%XKVNir@@ d9!Ã9rGCo\$Po\\J8(j/9`q a\"p\\si0YHDSB+hP^L	I8b4q̺}BsugԺ{G&=!TlX96QȓcJYخ\r,FB2wdA\$t3	lH/]٨UJf5MQ6eê7>\"!%W.pF.U㤗%=Q: 7se/:Nп+5ƌ*lK>B^Ԭ-qQu/EĀ-X8 ZEyb2t]W5g4+pxQq]*K\0 (,7Wf\r@wY]ڌ(HvgGt]r.\"cUkzܻH,:/S;Ғ(`|?.l3OQʷj\0~{!m3VNgIvzmԯaf=̣>Ϯ/\"E	<( zttӆI#9|J8kG57Rl1`o]IBH'N+5+4N4(FȦ#/pB9PHem[e2\"Da(΄,j\$NL>%@Уȩ(Jr0:otАc0Q\0\"ZbB:Ƽ#K?&'Bil]a#J,-K&BaT^W<@0F0RP9C'Q\n\"P=+'Qbű.HfKPDtXdN1R%RƐu1j r %\nLfPGTn[ 	\rC]Ho8Ǔ\r'6i~O;\$	Neź5E\\0By-3oRұʧ,n\\\rVcd!D3\rӰ0@Zd⦦R?0`Z`Bp4-{,p-,b#<R,uKM\0\n\0.\"X1\nt@0+/G%p\nw6at`.@Z(7I<*6/@|5'xE^y6Rp K\$C^6Oz0`>qk?2t~AS\n\r9\02N6@.Yf6m\03%r/NL*(K^'ζ z##\$:NF<@\n3L\"\"l)rkk<+1+\"]\0(0%l^f*\0FC1p";break;case"pt-br":$f="V7jm̧(1?	E30\n'0f\rR 8g6e6㱤rG%oihXj2LSIp6NLv>%9\$\\n 7FZ)\r9h5\rQz4Fi7M&)A9\"*RQ\$sNXHfF[\"MQ'Sfs!\r4g฽䧂fLo7TY|%7RA\\iA_fDIA\$QT(_mz7ȃ2jۄ\n¶\0ԡr!#\"V0CJBCC3\0\$IPcHt6i.r9C P2@P2or	rR\nhZZoTPŎVBCP\$3p͉z7DÒz7%h0FCF3:xAʣ8Ar3]<A7	#hx!F270\0)2J-6&귪J.&O+ۼ:\0P6 8@݅b!uM_X7JA-P1(0mcx:0B\\/L_>j1Oc:ؖ;:Y:te<LN1,h&X@6 ,'PWn:8,Iޠ@\rH/B'eacbRM,1c*`1ob0ֱf\r:r>9`ëLǊcH؏/2<o}ٱ8l`Rk1VVϲnV#65{700'Cz0.:hRF3`(Ҍ#??60mQC(P9)Ȩ7iX@!b壘6ʖ̾\r^+μ+{p1J7\\7\rmǮ?H@ :ߌNlJ\"\$ Χ	6\$4Co@ -@jiX0_Adi =*xOI?(3Q*-FDJԑR]X\nSzNtM8cv_\r533S`Mɽ8GB0F.\0Wo1RJ22A̐lJN*MgH,\"dVLTDgdpgU	9\n'PʄP!F'y)JSqRD<>yvO0?ܘ9	\$T<U\rR3d#FK14!?b`0cdS _\0P	L*&#IL`3A?ԇΘ|GXT˳(#G2@S!\$\0ކh*/w R<4-dQG̋%\"q'@ƘI(E>7M@BD!P\"@(L\$Ts:ZhÅ^0<ȟF\"4#yE()\\ymc-χ=nK6)ϕ+6_po\r4sg10Ķ]dnq)\$K2@Z2\nls>\n.*0t*¥#Xkcx+\0)48\n=a_ Cpr.;]oM'O\n%l=I2ZC\n\n|\\;55IodeI֯9YUfL1;͝]lBAʱ+\"A@\0k|\"ހ\rw\rH8NtQDmRT\n!@KrF<'B(r4Rp5i(ӮCyd`;i22ǹ1]>P0ٌ͖AD5SQ9鼪tq'+'0		Nb0@v8`Ct~icVi#Dùn`2iA[@m\$dζ Bf!<)L,\$ WʮDN%Gu0+0^CDe ̮)0ts# /m⎽g̎|異~S56޷7RfLJz,ͱI,jcp|o}5N@8ɍ̗Xۜ	E:lF\r91CiÂ\"[cv=abBs9|b<_y<5[<\$=PQo55XK'f/f\\Gq&#ۻňiblY8ҍ{aQܹg򭗒xNa'l)bmVdo엟3c>hU}f[Fga0ItX|x)|L8V=R.eѧS	|/l+*9r݊dh+*f;v~f̃#t!bVVIM/F82IBjL,kZ/H0\".#:k,:j0NnN0~!/q:i	2JaL(؂Sl&	6jIKOh;o2FaŔδ\$^pB4njP2ؤ&\rϦAU\\Q/\$Uq++p楱59QQ1T߀-b\$1<N*et/N,2cWp%Oы\0qn&J!bt 	Ĭ^gK>lJYr	\r}\rƍH@\\\nuM䅊P+> +B\$p1\"]@r\0Nj1C(\\4/\"ϲ\"\"5!`<i\r&:\"CF?Mî Zdr>cCy~\np%Q)clHhLRl##:#(\$i%#0V0@FRpp5GB/\n.:';r7_(d־tX/Dң%z1Kx\$-8*jXCq,-:#Eh\n+s.S2/)P26p ޅi:3B!; >T5#55*+4DRD?&03f5j'	a8I 4r*&0@FG8+jC6b/&#63:2.<J\\,Api\$;\$8ؤnq!D8vH";break;case"ro":$f="S:VBl 9LSBQp	@p:\$\"cfLL#>eL1p(/iiLI@-	Nde9%	@nh|X\nFC1l7AFsyo9B&\rن7F԰82`uZ:LFSazE2`xHx(n9̹gIf;=,foNƜ :nN,h2YYN;΁ Af2r'-K !{:<ٸ\nd& g-(0`Pތ7(*@\r{0@ m\0҃I~IĦ5)4@Ä	X0o\n*\r)]\$-¸+Mc\"1Ic)	\nBM87(ֿ\$\n)Ck&rGd~/\0P\n.!03@Ήx\n'f*·`D49Ax^;ӁrQ#\\}S	#h˨x!K828B\nbįRFd&J\\=O TSͶ,ؚK@+3-7ك{B0졀˗(4ȘF`ˌS:\"6&6+C:vU\r0Po&4\",;\\`Sռ\\%8` #:Ѹj:*(؛]0W:V0@8+o;rCMO1|[EilC*YSpՍ:).p\rx2Mb8g<r!OKuLE+ V9#6(	~4DJ Q9c26POXkA@@)El4M\\J'2𢪰W۳QO+	\rZu!'^ɛ;hhÕ{REHwQ{\\P		 (l!w(SJpuZ2/̘IM%dvùxX8\"|R*MJu2ꟁ\nR*`ܪPiU9dWEH%Я	{(`ɄAża8g\\(RABE\nF6ï7aEp=@=J5Qov82_^@w#菒x!NBK\neoh4	6(#Jj;)B:>T,KqY#>xta~HtplxiXqIk²==81<\npp&P	L*H\n|i|P\$A)\$)DH%^Խ2Q%-b4'hp9	J	y*Pα.B`|*ɜF	r'j%Gn_0|,\rem 7̹D*o`Z(T)IKe!1t3P@F\$:s3q(\rgb\$p3~Oi3^n;E9#sd1fhJpi W0mtGž\nN!Y*tV1D¤VF\0*AR@OȽC\rлEYByatUndQG.^&7u<C#rX2tVe\\\$	K]1&Հ'qbÇHGJxpn5X1nՖ.n&	b\ng`y1A6\rxYI-#˂31IpɇYxĝK);ոe;lNmM@BHkmt_;ppR#2hesͯ553Ax3]e!EĲوtykL/DQ1a+'N=<5EGKLmIcrJUzpO=BOW-p-Pc5NOXVXw˹6\\&J0p(IW\r+]g1=cި2})DdP4͌JLA/&!g-M\\#	!+ppZeHKkY[uV|Ajg35i9S固2s|	X\\k[ZmK]]4QWR2S=Pu!te*G+J%H^J\r(K\rzl95zM!ekھ[N2)(2LMKGuW>/ֹ\nsK7m-ON~ ﯷR+ͮҽ7>VY^GX+^y c*tB҄3[Қj0ښ'e5&~/GɀU\"fTO怇\0Lk\0j_\0cH`JvQ)+ľ昅=:hY@> P gƌLĶ@R\\\rcIb|/ߊi~z2͉\0l4,]O\0;lTb063,&\\o\\ZPiepoHl!(eQF Nnc.P\$Bm\"٭)F`P`-R<\\F\0Rl \$#@;&'fC:L8heFpdfmv{𬏆LAEфNoL޷G\"<E	e!oB\n!qn#F1QQB{ŗ7϶q!5 2r\nGĵ G#nV&QsN6Rq\$R0RND1)#}LM26BM\$pVQ@N\nQ\r#R\$n1'(b)'fqJ\n}?m*CT_ɵ,1r``'R]ł2\"l^)+9,Uԍl#--bq0/'Kim@߃p.0P&JwC\r+C'@@\nZ.\$>͐X\0|G,٭6Mީr)#>\$\"Ftd0R62.[FJC`<#4fN3b>C%қduH\", VbzNf/&nnÊNS1E\n%.A@+AڮAp)n-p26l2g3`BbpIeH@bnʸFcFl`oGh;#FM%d@	E%+`B(3ANH4\$-0\"<D@Z&+ QKfV#jId(m<@	\0t	@\n`";break;case"ru":$f="I4Qb\rh-Z(KA{ᙘ@s4\$hX4mEFyAg\nQBKW2)RA@apz\0]NKWRiAy-]!&	pCE#yl\n@N'R)\0	Nd*;AEJKF\$V&'AA0@\nFC1l7c+&\"IIз>ĹK,qϴ.u9꠆L,&NsDMe!_ZG*r;i9Xpd'ˌ6ky}V\nPػN3\0\$,:)f(nB>\$e\nmz!0<=S<lP*Ei䦖;(P1WjtE\$1U	,T#ⶋ#h五Yvj02LZjn;+ fIAPh҂\$2^\$}\"9	p1aIB<Tѡ\0;-\\Sqlڼuz-JLʢF&O}&5q?CV2)56d+RC<%NGQ8!\090z\r8a^\\0h7\\7C8^28:a7!x%U[	.#Xﻑ#P5aخLN\nb4ዪ\"MkN	\0&A2h2Z[eG&0,ff\r۴C \\.r:a(էIn㑠݅i~Kʟʇ2\$)Osۑ7Hd:NZ2KW)X2bɴ&Þ\"b)d2Zr_1NWlYKe\\IRGoUVBqa.OV}&Mcu67tnV_J=?Xn\$\n2ILIKh-\$hPkMqƉQ6D4ҝQrp4gqL44p\\X#F`yZP0HQ߃@*}+➓y\r% 26\r} Z'-XLC\\N\$D6X2@oBL%`r9f^\n#OWޠQÌ&U+&1xYB;eAsC`ҘZʂ8#bc6G.TىM2C̌o/tl\"䤖;RaFҴq5)ĩZr@!`URl%H.lNΝ**F00--JŶb_V:&RIR0+xBg[Y\\Jc\na\\@Cpk`30@@Xpn Y8cb820@R]H9 |a3>ԨCSBPSE4Ht=ˎZr\$ \\TEnA(R9-윥a^8q.ڻ׊^|uI`0sъ1bSR|ؖTAsi+'.9[;!ҭJ#VDFBǖ<NCʑ:aCKRs٪h1)8颭LPa`XG1CBmAAr%!\0\"7\0Hv\r!2pÃl4Ѱà !6{˩s+tm,Bg\$wJW?,\"P]T%37&F{Bu0K\rbLiq:\"cM;JF.e`W%\$FDL)@k:IcE-JaB\$	%JP0=HIf+EF\"i1\$ѬI25UTP@'0l0ƙdϖ=E\rZ%N* AFrx?*HY%X8Ҕ;/&hw.Dd圄ܔSAtJMf	nȜy)\0F\nAJu˄>CYY(zEO#DG[5hnlґCזSWsARsh˘{-0%a@>g1\$eeڍkJ,D܌㣅6nģzY-;C(g'\$hyrOY4}FB`\$ڤ\$UY2EJP3H\nƭOcarJr5d=dp7ryKT\\Fl6;\"ڙ}%#/\0kUXH{!@{cY>N勆EX0{t >}+G4hK|:d}C!\$SUȦP)fo.ֿk퐇O7>*{+p*'[5W9,FM)j#!Jl^@.5檴!vhxGpA^U\$0\0ŦXXY  \n`L#ȣ\\PkWm[ͺ&N[m5d\\Ga\$m^1\n\$P	ps[CmN6L\nKFB&ؘ'@CʐB+ʰpn0!nF䬑b\$zhd@hL\"Ȍl\$pD}	0P܊q*\"#zCܒ(**I0Cȹ\\t\"(1bQJuZǴc\nP%` Xmz*~|%G7Bwbb%DBq6`V@ev.C<HʑhܮMςG\0.rĦ3BG8CpLq\r\n\$%)c.V#EVݏrt2Q\$RWP2,F|\".xlez+Fp2z7~*(vhZ)lȄoN+7O+Ҏ\$,Rtq0tuuG@@J\"&*5.PIZ2%+Z.hψko!e	M)S\";D`> @4|@&+gVplG(	lrM)fn&C,&k5Kk(-1	(V3nƳ`=pqN96.luX=jhҊ3:2](vhA#)E	+Pj\"+Oms)s*V,S90ca?1k&KM??\nJ@su>9>AM	6	B-eͰ)m(F1EOF2qiE\"EdG\rc8Z.>&-,4͐GJ\$=EDPJxr(LCۧ:1>MC. /\$ʠ\\#'7pId*,\$\$}@:TkGnRt͇L#\nPH{1O:.j(o'Bs7ԑSf%BQy:DH9MSH\\c9-;SirGeDsc\$vHP5VDCՋMMSXVR@ӤrW՟V3\$y+Kg\$|pF(A\r\\BBƩN\0H:C)4	FUw(_9:Sh`BG*i;/Rbv;GRu W3luVpC0,kcd	dQZLN0Bp@AW]84dDXU;<\"be;ggh, į:V(g&dOD=։h@b>hIghV1Qh[mV{mmŏjn\$On36ibc=+.<'dt.58\0*0'w.3(7:g4/W@-75H%qBf)(CbR9xU{\\t6E	tWmGTL!I0IjoH%H\rPD;7UC\rxԵO;%\"MC\r>KB}`L1\r}W*p~<.\n\$cDǣ=c\r1}Ey\$wtwlԝ?FVP@WRUqFj8h\rVRE>hB́-e-+\$e&>.#1WOn>R1JMOd\n qu͒͗		V'#6/xU&imN׷mhwRV}⢒(hllqIhx\0jd6zT 0ɷSI_eu\nǸsܡAj0EֲGWbuv6h\$1d.\"sZTq\$HwXc\0oRP3`K;2wɛSܵwn\"r,\\l[%X,9לGBP#9՜9JTIy6+keq9^xjR|9N;,A,u+8n:4LDt璸L=ɬW!\$Ci\" y89͚GzaG:IQ|AoTŷ.T*RK^9%#=ʓLpKkgmd8\08ńb5&5Z#wy~:j";break;case"sk":$f="N0FP%(](a@n2\rC	l7&P\rhl25rxdB\$r:\rFQ\0B18-9H0cAn8)D&sLb\nbM&}0a1g̤k02pQZ@_bԷ0 _0ɾh\rY83Nbp/ƃNbaaWwM\r+o;ICv\0!F\"<lbXjv&g0<P9Pf96JPʷ#@4Z9*2Ҹ\nC*Nc+<nKdcYT<F!c`\"0K`9.(62I\ncʳs@PDlDP\$ۭ4b`9f*NL4lޜPx\$(C@:t/jȘ4\rӀ7	#hIp}@4#mc\\9&\r-R+EQf-\r<2P5.44'>(P'hv5a(H We<]55:2`PB\\% h@\$#T0`;=`#p1ϢωCXzYT22@P+C^RX~CX P 65pc܇Wa:&&[[b-=Z J\r.[Tv\$Ϻ#X'e\r}J@\0P<spc҇q`K,꒎x3\rR'C81ސcpd1ã3c!@ScX9x0xCv2Rd:'El5!\0)B0\\wc^2&Ss\nќv`\nr0PSi!͈JBdƭ@pg2>R\r,܊'@T`E>:UD)KY;'Sb?!8\nII++'#Ț*4 t0PD(L9)PP'0P7.D:U9Xhq~yXD<yOĦ&NI(p Q	7'(_L<'@ăhHeb#A0Ҕ!QJx\0()Ϝ5>Ft<%b>MJsڑp \r>+b2;̠876Y-%AC`6'].c6DSHI!a,HW5\nձ Ǌ BHLEd\\)MI)?ܞx2(\n<)E</pIt\nB6hSᘹS;UbKAz kגpWas\n&QO P(ܺsjĮ&(uT~D'j\"g Lp \n@\"@U\"cm91~/f\\mt0\"Ja@FaY,;x#~\rS%\"Z1+anIк(6.cnEɑgJIHDqnƼr\$A+%PI8|CrmxC\\+\"ZXiȷHcO|\"8+:H^[iK*\nuM&wpHOPɅOP-CHzCS>4N&J!+rfDp4%HJ9/n.CZ\rma`ћf7^rˮKɡ	*^G9{qa\nݐLl+&g@kIR9I&R4XוI9[-H*@@ %DasrbveQDuL6\rkI	5A_TVYգXnc[Wu0ԜN7`NsId66amIhz{5S\\nH[ޟ{CiȓVP6=A\ryӰ7ΫjrMsR]q]U1!^CH\$2&5nл{7Lw}dWd2\"	DWSzG&Z=&,QJG*0ŚKX\nIzǅ\$7;!2J{M(etGˮvMܛ0c޳-Kd{U&My_?󖁡7DPa77sL!Cy\nD	ӗ,h6\"fw1Ty2QWnz-Sޭ]Yd+tIZ\$]^&gnO+o0pjp/pu/&p/\0fEBKB-d;N0VN(Ĵ#0T&X\$\rnި-RlJC\$\n0]\nAW\0p% ʀ\rEE,8_Cb=bfD6%}EG&eA}e%<iˆPB\"6lE,jBO\rL̬L&L*%+0`ȅ}1[1k\rzWѯq:(Bÿ̤19〯Q(c&s9q.L`>A	bLŊ섕DuB:Ilb#p).ZPjT?0k#/\"&l8dPfEKΣFJj1G\$\$R\rbzA*LYoF'&Q2LH\nd)2@ODN2*@'+,)E`o5-*+_('q(.l.r)ѓ/.2t\r%%.j\"Ew>D-\$)}\0KSHM3\$bL1N2z䶟F@D1yRbB\0S e-mm]8i㳍:.@	b@^\$:\rJ8f92\$B9N'':\n\rV\rgr\rg*@.Z8zŠ\"lf:D:@2,&chK\np#cԮ\"&_)o CDCD<tS\nN@<)(#	f#>GXu&	0X\nxFE^~%R)#d_BoVJ<\nr4F\$}	ޫLthBS(L\rdy*T)\"|F<kBOPO-)5OL'V4z]	RL{QO`1XqR\\|:R(Ч=ULoZ\$5CZC\rmH`J!S/h\"f1A1!ICd-OvnTZ#\n몷C&`i+*d&\n8kÐt!	\0t	@\n`";break;case"sl":$f="S:Dib#L&H%(6l7WƓ@d0\rY]0XI \r&y'̲%9JnnS鉆^ #!j6 !n7F9<lI/*LQZvccMQ3g#N\0e3Nb	Pp@sNnbf.Pl5MBz67Qfn_T9n3'Q(p]/mge\$)]6klNc5CH R:h(#	*E(6b\r{JhL_!\\PQB6q`i\0!,Ы4(2BZ5#̜¡n0z\r8a^h\\F#C8^N7cH7	#hŃp|q`4>\$:h(r^鮬h(\rX\$֌)-<;.28n.'\rj2RH{1&#vhg#RKjebP8B\\V.c,<	2ZL#6':ʕ\0B07\rc*C :Ր+֣It#I,6ɈyTjxVK)b|86\rPcUM6&-C\"mc]^oMfU}\"ElQh\r*<x*\n:{4\r`Zd*Ш`ku1LdB2t%x(̪7Z<1c3_a@ϏL]/hZ:!@(Zb#Pp@3#Cm߄5_')1p:^*1C7L7\0d-1j1PCDRQsUw&5F\rtyS='bДӈ \$&Ca܍Pyzw/0>ʙJkM7vO]=TPt?UR2-Rε҈IqˡDo	Dd֭HIXoF)~&bThAȒ,HwA (\0PRI\$eK*,C6iL?#;7ZNRP2mdMk:L4J1ǀ'T\">hב\nZ9&LY'\r'Դ23d8|){Ł7b4r\"AI;^\nƠTw!iH^vmƃGœڜ'\no>H\r kŰ3'H&*F}O<6d3LsJpX\n:دrÙ5:EDuM*-Ύ, h0#ZYY##ȐzIYI(7dy\$3fq!E5yT\$ĸ8b|lL7=,\"^82AǇ)Tx噪5dBFtɆ*I\r;*b\0V`gp)\0tC2QlziHTQ(SOA<95XP*7ۺT*ZH\nUy!Y\"K\\6ZOS%v_-iuJ`^͑n]64\rM\"\"0}7txܐQd=/B	|b=T4[Ӈ`,3%74LSATEqH\nC	\0b5@,\"~BaUQ8TmܙAyXt3	+\n \\nn4k2?^Av%('\"rUFSɓK'e|(`>SʷJ\\\\ǡf\0ߘL Y?(0s^Wͧµgq[u9%璋6}A+e;V{lb{H%<\rqc3Uzg	a&tFcmc`=)}]u`A{#%?K&;PUa@%DaCb7B\rz<'יh%xNЪE>\$0TDYw['\"mqU*Jzd0aIbL0\nE3K7 Ԗn9n<ҳB-;<ۆZ{]g].j!{nY\"fV#	S=<HPkC'JI	TT}w^G!	7V8OcAպʗ\0cqRLvIi7vVΈ/g򒜂yV^.Z:OѮZMUݝA?YtUx݇2T^=Mcܿ2_|r[P* |~rwﯛ>̒_7\"_Bߛ[雭.6p\0O\0ؤk\0DBL67d\\'L<\$E.0Fd\$w @\"\$>9jĔMjh*B&\\D`cF	\0n˦+ʾk:\\EPWI/\0>\0vj\nTp#(pp%GC\"+\rKW}\rEGv^bX\\\\Nzfj\01hFUgp\$P	\nE~sa@i1I\$`a\$KR/ZՐN\\d\rbf\ru0b&&1\rJ}q>2S1\n/_W\rPf\r+G>X\"wr5Kϵ G qCd~=* q/H21N;7\$m!0bx/cb-1=+Ύp\$k\rV!OKrO8K/cr(Rx](4'c\\24X^b82#vZtC!Qݒ2-j&\"βMRO.l2-R\\\rV֎~^tΠ[\"6\np/g/Lʨc40гV 4*bu^V:fή	\r  \nN@l/\$'}9fb E;c K/B:#830TEv`8\$*	ޠ( CC<3âlfjnͅ9\$>\nWʧ)+?(2Bx+o@n..3c2\0\$jhW+baB^pJ?2P й\rx?BuE+Iɸ+\n/`C 	*<+\"I&>\n2B0?!C+d?F[*K3IJql,GԸ8C楮& ";break;case"sr":$f="J44P-Ak	@6\rh/`P\\33`hEC\\fLJⰦe_DehRƂhQ	jQ*1a1CV9%9P	u6ccUP/ABPb2as\$_TI0.\"uZH-0ՃAcYXZ5V\$Q4Yiqc9m:MQv2\ri;MS9 :q!:\r<˵ɫxbx>DqM|];ٴRTRҔ=q0!/kV֠N)\nS)H3<Ӛƨ2EH2	ך⚓EDN+1\"&,n kBր\" ;XM`&	pIu Qȧsֲ>k%)+A\"J\$<tKV2Q01LhHIJtAC`)QYxĜь­,!dW&ˋ`Ϊ\nH2\"HO)̅ARbAގC(C@:t㽜# 	\\7C8^2Ø7ۡ	#h卶|-#n(K1?JuZښ?ƅ`Ȕ.\",D\"*Ok4p\\o6q&36h(.W0K}e/:h#?3iLrK3>գ2\r0h	^J0s\"XC6\00\nN*5-ɺĪWγyK\$ \n[zՄwPum<	(3_%oH&fOZR|5jͱx<_d_M*b'ۧ\"egLYn1]YTƁGpUSK4YQ)yaRK*rw~׌FPYo0fT #;`UZvVIT0\0r7&xfj<SC\n :0sfk6΄,:P ,iu@s%4Rz	aL)g~qaّ1h]Z2+*D\$B>\"*Z'Ʊ\r׭\nMB\n72\\HLBkqEXK |!BAx/\"9'^Y0.XD&iF׌Phag\\9Ytú_A<\0ҰC\$a!`5JY=hժ[p.%0s]v.:ת\r}`8VZR%~EC\"(Ei1cݍ!AJ\nȇ0d\r~P=IL;FZȅ@\$\n\"iqG0V(X(A\rrO`\$8 ʾ< [\$=*(I1UFYJ56L0*1R(ZaE(\"\nV\"<%iB`d\r+٨8iv0r\rBy/NӠvxp'%#	L*QLV bL-TJEY=\"MJ7Nݻ&|jW7%֌4p@l=lA_`Iz\r+Ddl\"ZkLS[\$d8(\\%FI7\0U\n @D\"UNvO-==ĨX\0D0\"l1v)X\"ވ&eH+P	\r(R:Mp8Nb]9ya֔>b\"4YE&~VU\n%q\0Iݡ,\0@ƌҳ*ƊP+)Җ^B*0c| Q6=84\n%|vשVgꮈ0n4-<JT\$1GN}x1HE-M)0oRRjϝfRX+DKq)شA=	b=V`1c!L4MTOlL2oOLmAJ輩X\$Kod\$Pei64{lNuZ*M<Sq2b(ʎD_@Vɒ4-&IVvx`Ti_.\$LJJ'O\09u]BAa XsuK?4͘_@vdo2j{E[!9SttV!3;ޥa?ET\0v|.g_OrQh[l>;q<s|1W/|rgoLm68vt`;XZ/\rL-Ϩ\"z\$w! ?zG˭z|ջ\0SZmrFIecʼ%@)˚A*,%+-<,̭djEy\$&AbCR\$aVucL>-2J.%UPg\noq0b-=\0000bba\$JvI-Le\"C,iP(TOЄLpՐ)P?Ю.0/*0ԕj0кVO.cM\rLr¬TX\0#:Rp@G,<̂I.@@9lE;br5k]Q&Jq*r'?FK\$?p\$Hhr*:=:>LumV3UNP0駅\nm0&O!ΧE0&qq\r#E\nx1q\r.@d\"1&f51\\eGb,L/\n@/PcRɲ\$*&q 2W/##*>yOm\"<.<r@b,PG2lQ.C'r{3(0(t=ok)/qK>*v,ثfpJFgpLGLc+K}rVCs*rs ¯-AG ڠn!B*Җ>,A3+)X0C6,:͆W B{\nRFy{\rprQA5ci)*3`nޓ2sIp%56d.3Mh<iN\$Ҥ9dvDm(?bI3#:><FnzsC5\ry#(\r%e*:@>mJ'\$&>F2|sqAcmu0Q3ΔG?BKfvO\0Ъb`(DSmF@0Mq;PZ5Ԅi\"{F2*K6GI&5rL\\NnKIP6\"N[GQLNIL:QA\$T@H#gNYNAJN7qDHuL^-u	FU\rL\n-daPe:\"eG\"HDgO\"O)d*5DHRFd5S--H3.޵aDe\"=lOrj`bfU~=tB2IYYi&uO	'2Frj@\rVu&//&./@@I\r\"\npkBonUBO\r\$:z5@bb\"&jO\\Utf6	\r .F%Cr2M^o	\r.eˉ&`J(gJBy4^Zb`֜5GB<OeC8!3i[,C:ΡBt4H)#Le6bȱ1lV+FGnmm12 |r!	O?48o=~SbQnVUm1sqɶG4ɓ˨>6r`\n`Tqn=>KPևؒbmqAloͦdD\n%d2ΒEoz{1V5#KoTPdg^mnH.`";break;case"ta":$f="W* iF\\Hd_+BQp 9t\\U@W(<\\@1	|@(:\r	S.WAht]R&\\I`DJ\$:TϠX`*rj1k,Յz@%95|Udߠj䦸Cf4~Lgp:E5e&@.quW[\"+@m\0,-һ[׋&a;Dxr4&)s<!:\r?8\nRl[zR.<\n8N\"0AN*Åq`	&B%0dBBʳ(BֶnK*9QāB4:Nr\$Ţ)20\nq\$&*A\$:SPzƩk\0ҏ9#xܣU-P	Ju8\r,suYB.'I-\\W\"u,ͱ(J!\n7\r/֑<-2W*{cQkRTP+C+c@٥+-V淺ԭb(6Tܭ2AOѰP)#6JZ*ʜW9<#\r7OTsb|\nhqC\nRRB̈́5|Bh3)ֶ1+%\\Im5NBIpD!SG90z\r8a^\\F\rv<3L\0|\$e7^0v?#xx@)\"`r#{s\nY7)S5D6@D2nT=\"DVY\"\rc%).rpES'R\"Wsm==C1ՃrAR;+#[\0OZ>s\\ݬC\rX6Y)\nY5B\0T߱8Cu\r`ev.TRS)MV:{h=A@AᝨsX)&[MN͸_ZX0\r{tiܫJOIܬ^_()m%A8=1ܑ\\IHrYvݰHhˈ08*HSyЩUI:X&BfD	^9H9(\"YLM:' P1CJSFTlADYoUNlFV#a86P_R:\\\"/	Y&Bb9ɥ'&2.\\%d&,hcJzπaZ \r3py-r^@(mAPCc=3@ @P:H`*a2HO(`01H6fKjS^? Ar2[:8pu/@,Z^diLF	\r\ng&r@eYrDB\nr+P|3e\$\0)3?'MiE\0D\"~%7<V\"SR]b0_}&Է)E \r*M,\nfûepa<\0%AA5&՚Zky6 3hmV=6CsnS\r	\n<>cՑD6Lmri7e=X+h\r/>:UrQߴZ	B90@P)ڭIg^<; (!@g\\A\$(a)C-ᒩG?<:+z#\"/IK#VLj>ZN[V(%A2Ѫ6E4m\r@B@3BNiՅH.ɤD]SQ(\$w\0d\r.@F<@80r]uڼ\\H e\rjmq@5+.6Ka@'0D\"-f)ۦCm9FVEQWHgCo.0<8JCh4J֠\"pb.0zpF\nj/80i5#Y c8}qBYAe+0_5p \n@\"@W0\":c\$S	LM'B|\0:^ԕ)U9΋ʁ)AȲN؜]4bL:%)!*;6N[S^dnM+q_]VgqvUPeI]C\0=~Dg6Ig{rgy|Wf^r虭;&D˯3[E8b30ý[|+O{ UiS9S:ZVFφ~̱%\"~uua5oRY(Z\0Z9A:\0j&`d7lLsi^Nx\r LZ4P@؂pJ4iͣF4GGZ70\0\r\n`\nC=pGfnw@Zl}NĆ7jP\":'y`B.1IJOJ&-\nvNL\n䐸bfg2W\rCObƧ,,_lM,|Lb|gO\"/Nui\\WͬMeGbfM~(I.8l\n`\rZa>	<MJ\$C.BNtͰv7^H6{Mp7'Ή>I6o4QPyxH*8{裨Xpܭ+!L-ɤi.O!\$\"6s2#AΓHϱ\\ YRNrb\0q8(!ĠPΧR¢=3(2FJOM!D#2\n_#\$C+)q\$o(d0'qQ#\"~.\nÌqFdB0J\$''(bs\r\0&q1Jv#zrW+_tWTC@rAGR94`.\"eQ(M02rtFqtA)	&-d3,Y&Ǒ)P|Ӊ3\0,	GCf݀=`Z/`AD,J\$~fO4S));?3g@'?%ˑ\r4oK4zSzt	&DT#T!!#BPh-.r.F1#\\ɧ\"|,tM,GqqB@G2,F2yDRF2hZ<.se&Rq\0P̀(ߌ7-d#QV,.M:t:E#J48+\\stwN\r`4lwr1HIHэ&qx\0 SLݓbrGbNyS3ėRYD2I5brhVԡ/T9QB%@MG\$RU5- P3HtWYr[I|\\F#CuIiEUrIIu{RA4	H'T\\G̜Yϕw^Tw#.*oQLӳ@bQRfm&*U\\.tSk#?n_uqbs-b/A+^D15	=.dy&MI\r9D6nR%5t3I+:sfY^Ni\$S`q_[B4ajYS5+7jVcUl,9	cs_ld*E\"uSXesȧw_km&I j&m*\$pnk\$r&~cd(̳wڰrŮ}6ujzdnuOv}FVUYM^lDT\0\n\0LfhW;ZEtL	eKlVr{\\gHdV?pDvIut7r\nv2qpRHPX]1~'eluH=q7jrs>jխ]Ius&o%^7\\KWJzP\r3x{y-L_WU5\"YjfYq{SJ4Q=kMbQQLݘu@'vCP1xBN`/h8oHxSZ(w<,,S\0\r~)e߆4g[vYfYWYV;bEX}EjH(0sYX䔕\r9Ci8a]\$͸6҆	Dȕd'g6{nWZ[6ہ\"țw6[y6U5'\\5!Y٧b8055GqaXIG8TyY/9vr8TZ3ѡs9ᚹ1A6{vZ\rD':74kz%98Q%z;lHZ3HZcSQ9qUQgϚ3ǈؐb1qNU%Z8Nk]P&/sgM	O&1xWZې\$	f\0am_ӊQtʿSAX24VwoNRWTw)uUn,\$_\r8QwaOI->s8{{Ot8iςXAϕPwCĺWE㹻Y5O,Ņ>\rV``֟Niz+\r\r ̡+K\np%d++}CD\rN0t5+^\rlEYרlEx;&%<!g'׻I΅Og\n[\"׽όGM\rOhSavR[j\"\n9>ĂeIܗe\n~aD¾e@	<C?cƌD~O'RG%~SX>qoE;dAßeĤIaut·z`:IS:C\\l ; 5/	Q|ѲҢ:zx-I}sae dlHSQpf|Qg(V>\"j²k-\r	^E'J%rpfU%7\$Kh~'&\0]>v-R1H{UCC6ūyӇ7zYwQbחD֡BMV	\0t	@\n`";break;case"th":$f="\\! M@0tD\0 \nX:&\0*\n8\0	E30/\0ZB(^\0AK2\0&b8KGn	I?J\\)b.)\\S\"s\0CWJ_6\\+eV6rJé5k]8@%994fv2 #!j65:i\\(zʳyW ej\0MLrS{q\0ק|\\Iq	n[R|馛7;Z4	=j.Y7D	 7i6LS0x4\r/0Oڶp\0@-pBP,JQpXD1jCb2α;󤅗\$3\$\r6мJ+.6Q󄟨1`P#pάP.JV!\00J˶2\\+b:HdԭISŒKQZ\0QL\\N|9Æ7[%B#bQi(Îp{*\n\$ē&499E/'ʍEēq.Bh80b76\nzLM\$#;rjR\\ʶH0KTXCfL}ET}EnjzS*wBըjmVHꊲ]ԎL1HU\\R]xrl8JTE^RE,|CM gy.nDdOCN*/X2D49Ax^;p2\r9x3(ݮ(9#~16ۯ^0Ax@)\"`:y;^,MӷE)!r\r	-Y5Qٍ\\a2Sq=yNn987O}DTne_b\rj4`V,ÉhF`kJ+4vNm*D'r^ͷ'TuloI8P#:6-,d0S9\ny)#rCD9\n@]RM\\DLv[ED,CӐϓOdǽtܝ2z.(EWYz+ܮ|l?0\0n층@b\0Lu*0![nt:J#Xk1H`hup}ֺ\$!pc\r6<=ԥA4X0	(PAfI\n(W,8r	7f+1<q8Ð\n=00@0f\rY:g\0(*CpyձPsҨs9M \nUXdÖ.01&9GX\$^v̈́*<\nO:I\\X}'IAQړ!)'yQڼ3+PC3Zm+\0ra6@@hMD#f@T3&VlAϷ\"vS:>Iʶfdi_akԒ+404\nuaݭ7ihaTEh%֞Zjeֿ_dl6sp7p[n5|ڼn\n#y}XYaŊَ)7ꆨx9 \$1rT]w'p+\0\0(1\0AH梉v[IQU*(!`CtS~O{\rh:|{~x;[Vh|FPdBN慑Q	\\g/\n-F:BUSȰpjW4JkHr]#H,\nI\$\0[~7ZZq5`m6 vo#דKK7xPQ&\"-lҫv4LQȠP,f<TT`s=\$FQj<dyPo50@Cia{ϻARE[eo'esXbu<L)q%\rp`eBP*] E	j>k|y\n5\r#~|2\\Y ^d2N[:Cu;=ƼhER(?D5 iTqtn%\\1#vIk YตK'3c\\10Nݔ؊x\$ֈ	L.+;:Ǩ.191&Y݌GqLҘ(c[% mU|p7KQ>YP.<cSXJWp~2u{+L#\"#P+)Rc5^4Ϸ̋+mI,`U vG	G\\\$x`uz!Ve؇~Pt^Q3)a2QdL{aJ\"Ҧ2M\n`j8?z=섉`@Ѩlj[\0^3ND%ffZZ%tDBfnJH%;x#㶈8bwj(ւ1'pd&+V0l/pFe4yЊZH\$\nJA\$Da@pF~+'+ol+2|d;9%8o'\"uA鐃_o-L؂a%0Su6fBB[%l'm.Ell'r8 0%l6ҙQf_Ûd胺}bP]fJ9E)QbQn~\"tgn]egDM,^(U;Jq<e/!JAg.O;q*bv15E\0'fQLࠑA	\$oدeINtbkBvE0FS(N\nOr!E%p%˓&/;2rX&#Z\rxh'F#\"!OJLE>dXdZykHh.-G2c28;QЀDQ*'Fh+\$NL91<26	Q	.))/0I-r\ni0)2\0prR(ؠ䌃Ì	.\$2RdBQ*w163b_;p[4H.Id*Pxm53S7|O8ϞtvR5Ӵo:FOIK/D:j@V|u2Q8yo\$%Ҡ3 \"V\"רfDE6|bi\r/gsB<\$X~tg@yS?C@%E;sfOS;\rvl5ozhWzEx#E0tû<s'Xt44Sa1t3*TI>p>HIJ&-?KsGJl-MtK#U5s=NtBN3sSJJTzUL5\0]?RHC61B2F	V<#QUCr(QCP\nCҾK3ӱN3up&WOR)UX5t=RW^Ur\rsZZ\rhrDl/\\uQÚW)@h \\1	VR7*5Y?r\r`'`uP1Z64`Ia<<2v'av+YaXcR3DccZ+d?W#JҘfm^՟4OHi\r ]fh\0zasـ>--j/AXU<ՓdkkVWg-Q5OvZ4jVZu.{ );0a0\riŃ[Gki֟1eOfe\0pr*@srďz]YbFNSIP`CL-MqD4Lafx@e#\n+7dtoAwW!q\"9C*ww9)\rV `\09\$89G(.d+\0K\\\npRoJ8ӏl3 %ތ)Bf@	mQ{@\0ǋ{ր9w*,3q\\9'֐|5<δ2+hs..b.`	kC@dxzahVѓ;[\"ty5jQzU@ʞ6v>l&6 W0#	yfnYp=c=jbKDL\"*r0;FDx%,-;8Hj.qAT='g&{.J\\7.@ \rHhBN(ȸWz>:#z_2.&ZX&;eNa4\$eFCђny/i!qx)f]d(?{*+SU(w;#;y.g	\0@	t\n`";break;case"tr":$f="E6M	i=BQp 9 3!i6`'y\\\nb,P!= 2̑Ho<NXbn)̅'b):GX@\nFC1l7ASv*|%4F`(a1\r	!^2Q|%O3vMA\\ 7\\e93a:sFNdp'tFK!vt	@el8(r0S@KK:\rt/2u=w\n1q@kD/\"˵jI\n>O 9-x48%6\r PB87&4m玣p.X(A{\nx@QB+(!&/s0H90z\r8a^(\\0܏(30^(6\rb:x(J4\r#4m(\r\nO aH8'b#Qj=C7/j𨌪O\\\"	⤪, ,ɯ|X-\"#a&8tĤ^'pb5(B\$0,(pK\"35#oH?C@SP#랠@P>u:c<|֌txĉ\$0\0P5FYWW5O\$U_\\Vi\\(er˚RSLHB۩zYYB	u+Vg@6DւyCx3CZNa׫, ޹pF#f1΁ac49pc0e5'C(P9)<EH0)H@580P6_i\$lCb1o6N*1u/\r=4H\$12;}ʡ,j(D&cs@P4Ojh6!3rf6\$tWvH,)N@C\n_a0ITPeP+KIq/&ę2hMI7'\0ܜiN9rPJCQ \$\nO̝'GU74|a>yDSJu\"Fa@H\n23+@/Nq)[P2kj쨰@dI\$&]EJɥ2]yPid3;`0L,1\0\0`܏F+Aa\$HJ2&FG\$q\\\$HZ2fy]sMy/`(\r JRbP dϨYXEMa˽CgF-y-O[<xO4Jl^z.k;*O\"4՚496\"NaK<d,ŉW%\0U\n @DK.0g\$}:P\nj5H&ZT*f,\0@Հ%*<9,JȶɴsPBF'r/YmaOzS@OZ[]\"xBԙ/hfMlv(JEe!nj)1#E9R+5iOq0;0-G]5sr	XTD=?@l)!pxZ	6m#GB>[D;AlXD!\n7u^y}q Suq\r6#xzb(i\$z4>'Љz5>XO`PT\n!A4ye;K9:Ԟ@/*!匲AΦ5Bx^jcoQYp1\0<زtxBE\r{tEAz*g~aty\0C]y[RI@s\0OM7[ܼzS<uƽxSA\"p\"afw\"%\$6ȑT|pl\$M<چ!YTOI%)Oi͛x\n	f+ʎX:u>n	kނRiL	/QTuVm9؈W9lyW#8E%+ht[V3k(¸yWM;/5l\$<|X8(Rb\0a2]\nuS_-YInᶚ=\$\r4ćsᯮΡv 'í`![;uky6\r`7q}ϔxhPo򄝳q[3;+7=W<o7fH[ۉO&WܓTm&LVI7c4vb?+1kT䶿u\nHӜ\\י~p3713 .K}\")Lx#6E|C<CF/S׀J2*ЯȁoklJK+r.LPd\$7PJ&nrtPZ./\\K}ʌ`0OdO~l(pS:Y_d,CBgh.OoNppRotp]G\"dFPV@D\\EZ%e\r\r%{6E\0BHCh#bd oq\nPP6W~AE9!xmGELg0ƠҊPSmc DnG1L>q\rV;m0-v㸢&^W(1-RآB~\$KBX6%^\rt]8MDy,G6OXLQ΍Nؑψon`6^M`@dL\rVJW)\rHw	H `\np7|`{-pQO#DRjJѲȲ榲伆.kl`)`\r \"RC\$ l/#4=b[%ĸY,z<B|i&\\>d)R`Śt\"RIV	1)֌q7J£&jr2k,\$\ri 	Z32i4^ jB1B#eNG1REs>KJ	*.b1!&@SS*.b\"ZB5Js\\4C.#@7#[67\05ә2سO7}4޲4Dt9#*:hh#1<@";break;case"uk":$f="I4ɠh-`&KBQp 9	rh--}[ZH`RdbrbhdZGH\rMs6@Se+ȃE6JTdJsh\$g\$Gfj>Cf4jSdRB\rhSE6\rVG!TIV{ZLʔi%QBvUXhZ<,΢Aev4s)@tNC	Ӑt4zC	kK4\\L+U0\\F>kC5A2@\$M4TAJ\\GOR	.%\nKB4;\\\r'TSX6VZ(\"I(L` ʱ\nf@\\.)D(SkZڱ-ꄗ.*bED~HMVF: E:fF(ɳ˚lG('RdX#D#a+aP󼒪6JbSZ1DtJ4MM'N4Oj@#Q1*&GAC[%Nܦ\"GAC(C@:t# \\7C8^2׸\rØ7!	#h\r},K79&\r.րe_7i\\KYth%6\"RdVVtGŚFܷym@6mڿ*&3Jrė!.j)|YUjH!53eH!s=Je!\n&\\ٲRn7䥸`o#:6,GvZ&FQYaͷ9LYnJZSfZO+(HBWa!\\ZR)ZlfJRP\r#7C2D4YNmӉKжNr&)^MThYgiȄ*:	4 \0fVdCFTJ+3X優?.q>%/\0Z(99ߛ-~ʞ	BxaEeQ8an\00l^}ШXm{aUCc:38@xgD@g(FƴQ\0u;9fsI	}\0FyLG]Je)1X\\,DDJżLMDt{dY5eYapO\reW!w/\0\0_x,F\0wQ\0ga8]{߄LȒTnTDb<Eέp6V<ٺ,\"CSIԌOhagx9úb<\0ҷC\$n¸*]+vܼW^~/{l02ygb!SCk9t/Cpt=k\r.~QS!H4)XGxߢS6j(|JJJ(OIJ\nQ)E8#FbPlB0ߏnA (xc%ÜtbzCxHoq>0p@L?p+%G,֞BD7L0-Q!B*voYH7G[B;]9ZQݚMԜ+9,E4SnǄ-g 7g-h|<8ܞP?yd\ni\nmdB@,Vz{P'0렌ﺮ\\mo*;J;YE\"؊%o,& A7\$A.p.\rUb\r!1x:l#@.m`6yH8Nk(թ92FЩ+ Y:Q\r0 A8!fi L<4Є\$s70KE!gѩiPUEI\"B=E;hP+=*iPg+X\\>\$a&J,S:'\r\"ħ!I'j-n(bu@Ge6fjv~o?j67[nl@53XXZVRJ>`2I	uEE0~fZU,-sht4%]4rrAL2*c~}D>BVmvx\\44PF7Bѵh4!0<.e'ZZ\$[yMr\n>hkHJr-Bl>UsvtyTѿrp٭DmC߆fB\rhT)A	Ʉ| z7+!P*WD[FՄGzi'=OF^^ze4]5q̨)4K{<58tJsN?f_-ۇJ}|{WC/hȔ%2@O\$#&**3eBe\nlN\"~NbxP\r/CO4|)DGT*]}&glp0Yn!4\\58]#/FLdY\"FAb0F\nC@Vxaj=	HUUrKplN%ZE\r8?pt*P-v>CVM->	D@\\nh\r0Rl0ID04/#CFmHX,4,@ήok70acC|оP(1dơo*DqgVp\"-n0vqj&,ȝєL܈uIoy.1F%bxa`NlEA2GAgB<Cd,*\"A4Ġ##Rjhp\$S!B'.Ąl,Mr@Fd4ilJR-}k2QIQWF\rw(*px.Na(1)\rBD>ײR\$>+qmQy-c%,͵-+*(l5qy,RO.@BJGDc/CMPc,~\$)Q{,rdؓ/\ness^Ge22R0a2s83<4|E1rZ,/rN*c#2Rz=3~ 4M5ELs*'+2TЄ'D|ߋ0*).V*ġ'P'6#,?\$*i<&uFI1ꮜi<&XB nhzTܑʳD.> K9sPg1\0n,lY?2`=d~stn7s(rGb0;rڑyGh/|q7Hu2\"s2zTJrS.s\rTIBLrIbimh\\eE^\\WV@1bh&.0NU(JqPGӂB(&WMg,(M(PcR1RS1,3{S3#.;+T0GHitY3S3f;T^(cW(S@5m4dfRm??X.*֭jՄtRT#!P*:ժu.H	RZJZZԩ4AI5X4\\\\.Iڴ5[ґΊm1] ItUufd\$>^?mHCӖJzNQ47	c`S;LAG]<uD2mJ4RpVc5-.nMN5w]u?;~VQWNVI;PJtCUe1r*leΫ6W&PP#1jˁTlfePjmS/kWlTml4V\$(#_mL2jvolG6l3'd\$e5\0W'/6	p@n\\%1pxK7uhMBtִ̂b  ĥlf\nZ\0@_	rC&rj57<*w\0002z2Ԓ_{S*Wge|pAOs\nodHy=1܅Ű	(\r \$E7BSDCe9/Kh5emYCw&*7vrnmUpF@*\r9<QI|mʑ+bZ/%7ss\$1\$6i+%E12B՝2鈱ֈP!VcqD'.	7H0D\$adAgz)8fv@EZ\n|CLgL\0,%g^\"5JL*/+!\0d\n`xʭ}Lɔۣ#\$d.r=+EMI\rP#%g1\nn	DyY+YvLMZ5:K+Rwc]>BOd#FN";break;case"vi":$f="Bp& *(J.0Q,Z)v@Tf\npjp*VC`]rY<#\$b\$L2@%9IΓ4˅d3\rFqt9N1QE3ڡhj[J;o\n(UbdaI¾RiD\0\0A)X8@q:g!C_#y̸6:ڋ.K;.}FͼS06\\vN5Sܓ g	p7v#]]+0Ҏ9jjPeAdc@J*#ӊX\n\npEɚ44K\nd@3&!\020%ŤbC@\$)ԶH|';lIjVzT\"Pi2dPC&! bkV\0P2\rENiDK2(c@2D49Ax^;p2\r9x3(^|90\0^)6`6àx!'#2#x@:c(@)\"`a%Ş3-h ƀPaHlp\nxEe`M&nC̈́aL@ԞDt&	\rIIYA`RBc;#`2WS!HJpTcv@'thc[_KJeS(erEzP<:l:ltA6>3, P\$&ڋ+l(R@-fཽڋ46)&CŞ\r41HJ\"q?+( Y*[e_	5[T]Rү\rN}v+Ӕ6bs]=ܓ7=WY1YP#{40a\032cCPe&0)3b:4|GOS+U|\rT0䈆18gL743\r0bIJK\$34~ЫC\$Uwx@`\0fWK}b`ra\0,@ȭRd@:δ֩.\n4()!/ä\$C.XH6IX:D#q?C2UJW+\0CW\n^+倰rXXsA	20-fHHiE`	qk7erhHi? [\r ͱnBH\nѣ<%8CDob8cپNL@\rü)o~KG?)F-u0äv:&\$\0Q\rPvMbQR\"KhQ1;9Q@(D%oARqbI.	\$H<V?7-;<PPe5ct:D_Yf@uT\$'Ԣ^xS\ns!BDsSq~fGh:'LwBTI^YpQM[\$S?F#n[RzJaM#Is(9yÒhF-#!I(=:ZAg-490tJ:P6LF6bNQ	d\n%f.Ak#acn]LP X{۝IkzDLÚY\"Դ=-&{U-yhM	4feX+\rb*@PV/чE:hw'o-&M+\rhbqsY:67(qEnTz84Pb\"\nøDI}l.8P\rIZ_n4Wi=D<80kN2I^Et\$YH\"ג`\n\nOzq˦ &`u]UAɹ8\0Aa!dtDL:\0;դ!-v]ڕf\0^t@2I&2,I݀W̍@2Lɩ7A\"	vYYxd\$+h@EIv %2gY]2T_K\"+jOw\"ơjNg4(?^v/nڭd	&#,Ιg\"vG2<iP\nSx׈-2%7HQ[msm/cn4	ؒf:6γ{..2%'n	ܺo|&(xI;E)9ʶ/0)Jz()\0F6#BĶxDA+KM/-KQ}3Ǿmwa\rzfރf↖%8˨u5q5?_hb9ϙD2_/rJK>?D92s#t?]Mdw}go4.L\"5\\\"Tpu	bc\"vx?0)rNIl۩oRROpj<\0ze&~!)*\$D?Nܷs&:M,(!^p`n6\n\"P&y\$*%CO9-0^/O\rPFq/-0,yRdPL8JF7 c_\$n\"4hv-\0AM(VH+mC9Z1G=2JpTLzd69VJԸ0\0E Ǟ/|({1h[(]FQz%Q]O˾IqضkG	BIg&MHH<Gq1\rFDMMSc-\"R	!@*ҍMƀe%PvX0rT`m\nz.l+8\"N.hrraq>+qNC>J -\09~iHdBUH>OJDD \npK\$ّF.S\"@{`o\"LQD/tl+R/J3b6DIƼ+]jkB]\r26Ieo/xC?/pnU\$DnƵ\nD'	bfippB|\$q7,*Bh<ӫDhDr#x#%<\rPg/'\noh̒`X\$ӋkrhJB\$­92(k\n	T=Dv\$0?/s4iB1's}'1inKLD32Srjz4b";break;case"zh":$f="^s\\r|%:\$\nr.2r/dȻ[8 S8r!T\\sI4brЀJs!KdueVDX,#!j6 :t\nrU:.ZPˑ.\rVWd^%䌵rTԼ*s#U`Qdu'c(oFe3Nb`p2NSӣ:LYta~&6ۊrsk{6c(2fqЈP:S*@S^t*ΔTyUx_\\ۙT*Ӫ롄Ҏ'a[Nb*Vd>1[vrq¬!J1.[\$hDcMAlN-9@)6_Dseۂ%yP̟I1P)kĠ&1zJg1@l8\"90z\r8a^H\\0k2Ap9x7RV7cHLJ8|\$>6x!\rh240ʊb4m@'1TCRN	&s#lWġrt4_ZvE]V,Ї֐E%.DQ\$LYIE<9TrEAQױ:@;#`2Ua%틈v D%8sZN]\"^9zW%s\0]`o<a#Fi\\VM]<Ds߅B @6L@9cG)\"o#I7ӕjZ3rVTK!Ͷk41t)Nz^:<C]I5%݈Ra#Ǆ\r06Qz\$*\r۩!\0Nc6\rxacH9v#0֔p:a@,ND)NRI^jIq~)JGUhDQ>\n5c5&FSH(E>jgUjڅ7pp AtXC|:]haf9dúV<\0ҟ .4'P!E(ǜRb):zjRuSqG\n4+5kk2̩^L~\n:EU^{˱,\0yqJ\n	 \n (	R(CIj~80c93xUht4f]wT+SABR\\L	&ܜD*9pXan\n&\\d\r*˰n8f0r\rX\rMjޫsHkpxړ)\n<)I,QVp<Ѐbm*@:D+)emY\nCcQ&ި:i\\+XiOA*IVJ/)OԁR%R	gR0K\\\0U\n @UD0\"+Dxk`\ng(\"cU:gTÞ`(\")d5%DCwmM\n!rxOMF19k4SrAqP\"s<L0\"\"pL8+L1\$@J6B\0g|[r[T-T<)%zBM+<NN%[m2Jt.3;UOd-u865%HA6\0mUTstF\"1Q-MjĊY>6\n|.phb	\$s#*BZh~Ρ(q˟\\t>T!\$	ڤIs~rO,\$OS̀\\C+A+T¼QO_H5~V<AxI\"r1\$\$~=_Lfno*xF-9P2h\nWj9O ri(#PzSlϣ'rJ,%(bi_\rimq (&QpNaZȅ؅g)fe+@[B=\raqx/EQ౵s{*,0rnb΁ݢxv[|d\"\".	0D]l)(y^5x^29xu8G\03*Q]vWAt)hTXcl|/t:2BxKu!^:@V|ii@ϣڭ+}y;}xOB:\0q}(#6EQpB|:nyB*<%Q K#r@UrԊoȔf/@6o\nyAh`iwtPG;.~Br|Ӭ3_J;䤻wк-ܳTWWЄlv +z6(YrfƮ.\0fbhJƯpb9N<~A6(N~`]\\o9\0LZP]9P6pBcnRǰy+0O[Є0.	lCl=m\\\$bFoo<l|Zл.@мhK\"pA>:JFk\")t-\n\"l\"\rIl:lD\rV`tBOFaXuf\r v%x6\0Hք \np.);jв^p\04#z<̬\\\0qKf.!cRf:PuJBIi!.	ޥRc*5#bQ#?\0.OĀ,.z\nߢXIдaI!@\nC\$2`\r#k!Ÿ@c\0nf,hv1RF\$6p\n`#x*A2Z\nGlZbbK<r\\A\nA\\k?+Rphpޢ8<&.NO F@	\0@	t\n`";break;case"zh-tw":$f="^%ӕ\\r|%u:HB(\\4prneRQ̡D8 S\nt*.tI&GNAʤSV:	t%9Sy:\"<rST,#!j61uL\0U:.I9BK&]\nDX[}-,r&a;Dxr4&)s3St\rAbEE1ԣg:x]#0,'}üb1Q\\y\0VE<gS )ЪOLP\0Δ:}UryZse\\BABs @2*bPr\n*.OcD\nt\$O-1*\\CJY.RDLGI,II@Hő[)r_ Ko')tUw/ax].J2ft(qWк̤UvY`\\\nsS,2D49Ax^;p2\r9x3(N\r9#}>)6\r O^0{QWCxԵc4)\"`7GI\\@<(Q!^sHk_1(\\SmlvZq:,I<t6W!<@vlKɉvtCG)J3 :@;#`2ٶ=T\\YrBHreB^1IJD}L1Ta'1pM	|BPI*[E2[#bcR۴\01#s`{<1Iq7\\Ҍ\\}ξZv]O&ﶶ7m)ebva_?CIo\0s[<ͼQ­5IV\"92L@0a\03e,O1۰!\0Qӎc6 \rxacR9x0t:޷xDBib#W]<>DYC^Gi9DB\" >\\2!Pˆj2xʐ\0rzS*@ȥPJCD\"5x3%hnT!Adr1!1wa@D&l;vÀiPaBP%ETReM>TT5TrԤpҼ=\$\rC%M\rE# t\n!V9D>D\nJA0X.JGG@P@B! \"4aG>hM8)j\r\rI09a\$G@ĬdF Dq.&+~j\0O	g~uQ(	!dJ3I_vlJ,^#\0xmbAēd\0cz*ԛ3Pe7A@'08`\04!6PÞ!p)=հ }dVb<2Ǣݘ A3(tba@`{ʲcGD(FeLH% äFR(	BG<'\0 A\nW@@(L%D~9Dxcs%ڋBc';hAv{\\SEDӧn)<bdRTmzpmκWF	Tr~RcE1.\"\0q\"!j:%DLlm0]]_0b%?j\\\"P\\AL41.ccKxm咯պW-VmKGu٢ܥtZ\n!/P[\rblP{+PB@&[ֳ֚[O0r4D[\0bd^dR9yDb\0Q3/c4^3q:ꋱm~KGs\"+^Aa P*iݛmxLPl\"Kt\nDx.HWx ^&<nc6Т'v}?bX>/sl]KC(Uv21*G.\"1ֆC:F\0XG٥4ml9Ű<@@EKiw'\$n(bq/\n\$\"/>wu4ts\nDKD#+=hLnh0@hR#\\7&!E@gTu+۶Va6-Y%bR\$kGm1}b.msI5,q*rB (pV1W(룗>c,wV%WbKӤov+,sPBZޕ3CvWY\rlw<oZW.[̓ЛoܷG&:[OCȵ&BZ+Ul{}H}HcaP~] y;`9DպEʣa\r\"\0@X2<%:r @r*OC,zer,v1G?NG([\\\"LA\$7=(Ni=elψPeUopZϜfb>pnY,Ŭo:!t\"f'|B`0Vnbp\nj.cV(pԞ:r~Φ7Ю%6DDz¹?P[ks/	A'1/)\rLLȄ,Q5sQ>̚fFnG0SPNCEDl1k	\r\rlsAD@\n\n y``P4R	A߭HYAF.z%bרj@B.b?a1rn\rV@`vhP&(bbxEt\r x7@@C4{\np<\0;t',M@i(}8XФ	!e8⃘0|t*0vʬ )i:-\r\r43C\\6ҚRhX)a\"o<jJ!,rr\\歵0&(E-pf.3*0\r*t珩J*rPeBZ./k o,-,\n`(\0 fr,ƅ\$Ґ. Ob<̳1\nks7δ-f!ZFp	\0@	t\n`";break;}$ii=array();foreach(explode("\n",lzw_decompress($f))as$X)$ii[]=(strpos($X,"\t")?explode("\t",$X):$X);return$ii;}if(!$ii){$ii=get_translations($ca);$_SESSION["translations"]=$ii;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Uf=array_search("SQL",$b->operators);if($Uf!==false)unset($b->operators[$Uf]);}function
dsn($jc,$V,$F){try{parent::__construct($jc,$V,$F);}catch(Exception$Ac){auth_error(h($Ac->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($G,$ri=false){$H=parent::query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->errorInfo();return
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
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$ec=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($Q,$L,$Z,$md,$rf=array(),$z=1,$E=0,$cg=false){global$b,$x;$Sd=(count($md)<count($L));$G=$b->selectQueryBuild($L,$Z,$md,$rf,$z,$E);if(!$G)$G="SELECT".limit(($_GET["page"]!="last"&&$z!=""&&$md&&$Sd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$L)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($md&&$Sd?"\nGROUP BY ".implode(", ",$md):"").($rf?"\nORDER BY ".implode(", ",$rf):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$sh=microtime(true);$I=$this->_conn->query($G);if($cg)echo$b->selectQuery($G,format_time($sh));return$I;}function
delete($Q,$ng,$z=0){$G="FROM ".table($Q);return
queries("DELETE".($z?limit1($G,$ng):" $G$ng"));}function
update($Q,$N,$ng,$z=0,$Zg="\n"){$Ii=array();foreach($N
as$y=>$X)$Ii[]="$y = $X";$G=table($Q)." SET$Zg".implode(",$Zg",$Ii);return
queries("UPDATE".($z?limit1($G,$ng):" $G$ng"));}function
insert($Q,$N){return
queries("INSERT INTO ".table($Q).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$K,$ag){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$ec["sqlite"]="SQLite 3";$ec["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Xf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Tc){$this->_link=new
SQLite3($Tc);$Li=$this->_link->version();$this->server_info=$Li["versionString"];}function
query($G){$H=@$this->_link->query($G);$this->error="";if(!$H){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($H->numColumns())return
new
Min_Result($H);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetchArray();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$T=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$T,"charsetnr"=>($T==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Tc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Tc);}function
query($G,$ri=false){$Ke=($ri?"unbufferedQuery":"query");$H=@$this->_link->$Ke($G,SQLITE_BOTH,$n);$this->error="";if(!$H){$this->error=$n;return
false;}elseif($H===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($H);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetch();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;if(method_exists($H,'numRows'))$this->num_rows=$H->numRows();}function
fetch_assoc(){$J=$this->_result->fetch(SQLITE_ASSOC);if(!$J)return
false;$I=array();foreach($J
as$y=>$X)$I[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$I;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$Qf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Qf\\.)?$Qf\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Tc){$this->dsn(DRIVER.":$Tc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");$this->query("PRAGMA foreign_keys = 1");}function
select_db($Tc){if(is_readable($Tc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Tc)?$Tc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Tc")." AS a")){parent::__construct($Tc);$this->query("PRAGMA foreign_keys = 1");return
true;}return
false;}function
multi_query($G){return$this->_result=$this->query($G);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$K,$ag){$Ii=array();foreach($K
as$N)$Ii[]="(".implode(", ",$N).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($K))).") VALUES\n".implode(",\n",$Ii));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($G,$Z,$z,$D=0,$Zg=" "){return" $G$Z".($z!==null?$Zg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($G,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1):" $G$Z");}function
db_collation($m,$qb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$I=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$J){$J["Oid"]=1;$J["Auto_increment"]="";$J["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($J["Name"]));$I[$J["Name"]]=$J;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$J)$I[$J["name"]]["Auto_increment"]=$J["seq"];return($C!=""?$I[$C]:$I);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$I=array();$ag="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$J){$C=$J["name"];$T=strtolower($J["type"]);$Sb=$J["dflt_value"];$I[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$T)?"integer":(preg_match('~char|clob|text~i',$T)?"text":(preg_match('~blob~i',$T)?"blob":(preg_match('~real|floa|doub~i',$T)?"real":"numeric")))),"full_type"=>$T,"default"=>(preg_match("~'(.*)'~",$Sb,$B)?str_replace("''","'",$B[1]):($Sb=="NULL"?null:$Sb)),"null"=>!$J["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$J["pk"],);if($J["pk"]){if($ag!="")$I[$ag]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$T))$I[$C]["auto_increment"]=true;$ag=$C;}}$ph=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ph,$xe,PREG_SET_ORDER);foreach($xe
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($I[$C])$I[$C]["collation"]=trim($B[3],"'");}return$I;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$ph=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ph,$B)){$I[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$xe,PREG_SET_ORDER);foreach($xe
as$B){$I[""]["columns"][]=idf_unescape($B[2]).$B[4];$I[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$I){foreach(fields($Q)as$C=>$o){if($o["primary"])$I[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$rh=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$J){$C=$J["name"];$v=array("type"=>($J["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$Og){$v["columns"][]=$Og["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$rh[$C],$zg)){preg_match_all('/("[^"]*+")+( DESC)?/',$zg[2],$xe);foreach($xe[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$I[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$I[""]["columns"]||$v["descs"]!=$I[""]["descs"]||!preg_match("~^sqlite_~",$C))$I[$C]=$v;}return$I;}function
foreign_keys($Q){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$J){$q=&$I[$J["id"]];if(!$q)$q=$J;$q["source"][]=$J["from"];$q["target"][]=$J["to"];}return$I;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Kc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Kc)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Kc));return
false;}return
true;}function
create_database($m,$pb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$Ac){$g->error=$Ac->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$pb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){$Ci=($Q==""||$ad);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Ci=true;break;}}$c=array();$_f=array();foreach($p
as$o){if($o[1]){$c[]=($Ci?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$_f[$o[0]]=$o[1][0];}}if(!$Ci){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$_f,$ad))return
false;if($Ma)queries("UPDATE sqlite_sequence SET seq = $Ma WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$p,$_f,$ad,$w=array()){if($Q!=""){if(!$p){foreach(fields($Q)as$y=>$o){$p[]=process_field($o,$o);$_f[$y]=idf_escape($y);}}$bg=false;foreach($p
as$o){if($o[6])$bg=true;}$hc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$hc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($Q)as$be=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$_f[$d])continue
2;$e[]=$_f[$d].($v["descs"][$y]?" DESC":"");}if(!$hc[$be]){if($v["type"]!="PRIMARY"||!$bg)$w[]=array($v["type"],$be,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$ad[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$be=>$q){foreach($q["source"]as$y=>$d){if(!$_f[$d])continue
2;$q["source"][$y]=idf_unescape($_f[$d]);}if(!isset($ad[" $be"]))$ad[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($ad));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($Q!=""){if($_f&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$_f).") SELECT ".implode(", ",array_map('idf_escape',array_keys($_f)))." FROM ".table($Q)))return
false;$oi=array();foreach(triggers($Q)as$mi=>$Uh){$li=trigger($mi);$oi[]="CREATE TRIGGER ".idf_escape($mi)." ".implode(" ",$Uh)." ON ".table($C)."\n$li[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($oi
as$li){if(!queries($li))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$T,$C,$e){return"CREATE $T ".($T!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $e";}function
alter_indexes($Q,$c){foreach($c
as$ag){if($ag[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Ni){return
apply_queries("DROP VIEW",$Ni);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Ni,$Lh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$ni=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$ni["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$af=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($af?" OF":""),"Of"=>($af[0]=='`'||$af[0]=='"'?idf_unescape($af):$af),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($Q){$I=array();$ni=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$J){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$ni["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$J["sql"],$B);$I[$J["name"]]=array($B[1],$B[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$T){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$G){return$g->query("EXPLAIN QUERY PLAN $G");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Sg){return
true;}function
create_sql($Q,$Ma,$xh){global$g;$I=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$v){if($C=='')continue;$I.=";\n\n".index_sql($Q,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$I;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($k){}function
trigger_sql($Q){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$I=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$I[$y]=$g->result("PRAGMA $y");return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$of){list($y,$X)=explode("=",$of,2);$I[$y]=$X;}return$I;}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Oc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Oc);}$x="sqlite";$U=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$wh=array_keys($U);$xi=array();$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$jd=array("hex","length","lower","round","unixepoch","upper");$od=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ec["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Xf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($xc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($M,$V,$F){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Li=pg_version($this->_link);$this->server_info=$Li["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$I=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I)$this->_link=$I;return$I;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($G,$ri=false){$H=@pg_query($this->_link,$G);$this->error="";if(!$H){$this->error=pg_last_error($this->_link);return
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
__construct($H){$this->_result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$I=new
stdClass;if(function_exists('pg_field_table'))$I->orgtable=pg_field_table($this->_result,$d);$I->name=pg_field_name($this->_result,$d);$I->orgname=$I->name;$I->type=pg_field_type($this->_result,$d);$I->charsetnr=($I->type=="bytea"?63:0);return$I;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($M,$V,$F){global$b;$m=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$F);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$K,$ag){global$g;foreach($K
as$N){$yi=array();$Z=array();foreach($N
as$y=>$X){$yi[]="$y = $X";if(isset($ag[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$yi)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$U,$wh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$wh[lang(23)][]="json";$U["json"]=4294967295;if($g->server_info>=9.4){$wh[lang(23)][]="jsonb";$U["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($G,$Z,$z,$D=0,$Zg=" "){return" $G$Z".($z!==null?$Zg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($G,$Z){return" $G$Z";}function
db_collation($m,$qb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$G="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$G.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$G.="
ORDER BY 1";return
get_key_vals($G);}function
count_tables($l){return
array();}function
table_status($C=""){$I=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v', 'f')
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$J)$I[$J["Name"]]=$J;return($C!=""?$I[$C]:$I);}function
is_view($R){return
in_array($R["Engine"],array("view","materialized view"));}function
fk_support($R){return
true;}function
fields($Q){$I=array();$Da=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$J["full_type"],$B);list(,$T,$pe,$J["length"],$xa,$Ga)=$B;$J["length"].=$Ga;$eb=$T.$xa;if(isset($Da[$eb])){$J["type"]=$Da[$eb];$J["full_type"]=$J["type"].$pe.$Ga;}else{$J["type"]=$T;$J["full_type"]=$J["type"].$pe.$xa.$Ga;}$J["null"]=!$J["attnotnull"];$J["auto_increment"]=preg_match('~^nextval\\(~i',$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$J["default"],$B))$J["default"]=($B[1]=="NULL"?null:(($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2]));$I[$J["field"]]=$J;}return$I;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$Eh=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Eh AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $Eh AND ci.oid = i.indexrelid",$h)as$J){$_g=$J["relname"];$I[$_g]["type"]=($J["indispartial"]?"INDEX":($J["indisprimary"]?"PRIMARY":($J["indisunique"]?"UNIQUE":"INDEX")));$I[$_g]["columns"]=array();foreach(explode(" ",$J["indkey"])as$Hd)$I[$_g]["columns"][]=$e[$Hd];$I[$_g]["descs"]=array();foreach(explode(" ",$J["indoption"])as$Id)$I[$_g]["descs"][]=($Id&1?'1':null);$I[$_g]["lengths"]=array();}return$I;}function
foreign_keys($Q){global$hf;$I=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$B)){$J['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$we)){$J['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$we[2]));$J['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$we[4]));}$J['target']=array_map('trim',explode(',',$B[3]));$J['on_delete']=(preg_match("~ON DELETE ($hf)~",$B[4],$we)?$we[1]:'NO ACTION');$J['on_update']=(preg_match("~ON UPDATE ($hf)~",$B[4],$we)?$we[1]:'NO ACTION');$I[$J['conname']]=$J;}}return$I;}function
view($C){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($C).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$I=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$I,$B))$I=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($I);}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" ENCODING ".idf_escape($pb):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$pb){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){$c=array();$mg=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$Hi=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$mg[]="ALTER TABLE ".table($Q)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Hi!="")$mg[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Hi!=""?substr($Hi,9):"''");}}$c=array_merge($c,$ad);if($Q=="")array_unshift($mg,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($mg,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$mg[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$vb!="")$mg[]="COMMENT ON TABLE ".table($C)." IS ".q($vb);if($Ma!=""){}foreach($mg
as$G){if(!queries($G))return
false;}return
true;}function
alter_indexes($Q,$c){$i=array();$fc=array();$mg=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$fc[]=idf_escape($X[1]);else$mg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($i)array_unshift($mg,"ALTER TABLE ".table($Q).implode(",",$i));if($fc)array_unshift($mg,"DROP INDEX ".implode(", ",$fc));foreach($mg
as$G){if(!queries($G))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Ni){return
drop_tables($Ni);}function
drop_tables($S){foreach($S
as$Q){$O=table_status($Q);if(!queries("DROP ".strtoupper($O["Engine"])." ".table($Q)))return
false;}return
true;}function
move_tables($S,$Ni,$Lh){foreach(array_merge($S,$Ni)as$Q){$O=table_status($Q);if(!queries("ALTER ".strtoupper($O["Engine"])." ".table($Q)." SET SCHEMA ".idf_escape($Lh)))return
false;}return
true;}function
trigger($C,$Q=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($Q===null)$Q=$_GET['trigger'];$K=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($Q).' AND t.trigger_name = '.q($C));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$J)$I[$J["trigger_name"]]=array($J["action_timing"],$J["event_manipulation"]);return$I;}function
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
explain($g,$G){return$g->query("EXPLAIN $G");}function
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$zg))return$zg[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Rg){global$g,$U,$wh;$I=$g->query("SET search_path TO ".idf_escape($Rg));foreach(types()as$T){if(!isset($U[$T])){$U[$T]=0;$wh[lang(24)][]=$T;}}return$I;}function
create_sql($Q,$Ma,$xh){global$g;$I='';$Hg=array();$bh=array();$O=table_status($Q);$p=fields($Q);$w=indexes($Q);ksort($w);$Yc=foreign_keys($Q);ksort($Yc);if(!$O||empty($p))return
false;$I="CREATE TABLE ".idf_escape($O['nspname']).".".idf_escape($O['Name'])." (\n    ";foreach($p
as$Qc=>$o){$Hf=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$Hg[]=$Hf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$xe)){$ah=$xe[1];$oh=reset(get_rows("SELECT * FROM $ah"));$bh[]=($xh=="DROP+CREATE"?"DROP SEQUENCE $ah;\n":"")."CREATE SEQUENCE $ah INCREMENT $oh[increment_by] MINVALUE $oh[min_value] MAXVALUE $oh[max_value] START ".($Ma?$oh['last_value']:1)." CACHE $oh[cache_value];";}}if(!empty($bh))$I=implode("\n\n",$bh)."\n\n$I";foreach($w
as$Cd=>$v){switch($v['type']){case'UNIQUE':$Hg[]="CONSTRAINT ".idf_escape($Cd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$Hg[]="CONSTRAINT ".idf_escape($Cd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Yc
as$Xc=>$Wc)$Hg[]="CONSTRAINT ".idf_escape($Xc)." $Wc[definition] ".($Wc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$I.=implode(",\n    ",$Hg)."\n) WITH (oids = ".($O['Oid']?'true':'false').");";foreach($w
as$Cd=>$v){if($v['type']=='INDEX')$I.="\n\nCREATE INDEX ".idf_escape($Cd)." ON ".idf_escape($O['nspname']).".".idf_escape($O['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($O['Comment'])$I.="\n\nCOMMENT ON TABLE ".idf_escape($O['nspname']).".".idf_escape($O['Name'])." IS ".q($O['Comment']).";";foreach($p
as$Qc=>$o){if($o['comment'])$I.="\n\nCOMMENT ON COLUMN ".idf_escape($O['nspname']).".".idf_escape($O['Name']).".".idf_escape($Qc)." IS ".q($o['comment']).";";}return
rtrim($I,';');}function
trigger_sql($Q){$O=table_status($Q);$I="";foreach(triggers($Q)as$ki=>$ji){$li=trigger($ki,$O['Name']);$I.="\nCREATE TRIGGER ".idf_escape($li['Trigger'])." $li[Timing] $li[Events] ON ".idf_escape($O["nspname"]).".".idf_escape($O['Name'])." $li[Type] $li[Statement];;\n";}return$I;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Oc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Oc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$U=array();$wh=array();foreach(array(lang(25)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(26)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(23)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$U+=$X;$wh[$y]=array_keys($X);}$xi=array();$mf=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$jd=array("char_length","lower","round","to_hex","to_timestamp","upper");$od=array("avg","count","count distinct","max","min","sum");$mc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ec["oracle"]="Oracle";if(isset($_GET["oracle"])){$Xf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($xc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($M,$V,$F){$this->_link=@oci_new_connect($V,$F,$M,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return
true;}function
query($G,$ri=false){$H=oci_parse($this->_link,$G);$this->error="";if(!$H){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
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
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$y=>$X){if(is_a($X,'OCI-Lob'))$J[$y]=$X->load();}return$J;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$I=new
stdClass;$I->name=oci_field_name($this->_result,$d);$I->orgname=$I->name;$I->type=oci_field_type($this->_result,$d);$I->charsetnr=(preg_match("~raw|blob|bfile~",$I->type)?63:0);return$I;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($M,$V,$F){$this->dsn("oci:dbname=//$M;charset=AL32UTF8",$V,$F);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($G,$Z,$z,$D=0,$Zg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $G$Z) WHERE rownum <= ".($z+$D):" $G$Z"));}function
limit1($G,$Z){return" $G$Z";}function
db_collation($m,$qb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$I=array();$Tg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Tg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Tg":"")."
ORDER BY 1")as$J){if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$I=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$J){$T=$J["DATA_TYPE"];$pe="$J[DATA_PRECISION],$J[DATA_SCALE]";if($pe==",")$pe=$J["DATA_LENGTH"];$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$T.($pe?"($pe)":""),"type"=>strtolower($T),"length"=>$pe,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$I;}function
indexes($Q,$h=null){$I=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$J){$Cd=$J["INDEX_NAME"];$I[$Cd]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$Cd]["columns"][]=$J["COLUMN_NAME"];$I[$Cd]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);$I[$Cd]["descs"][]=($J["DESCEND"]?'1':null);}return$I;}function
view($C){$K=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($K);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$G){$g->query("EXPLAIN PLAN FOR $G");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){$c=$fc=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($Q!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$fc[]=idf_escape($o[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$fc||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$fc).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){$I=array();$G="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($Q);foreach(get_rows($G)as$J)$I[$J['NAME']]=array("db"=>$J['DEST_DB'],"table"=>$J['DEST_TABLE'],"source"=>array($J['SRC_COLUMN']),"target"=>array($J['DEST_COLUMN']),"on_delete"=>$J['ON_DELETE'],"on_update"=>null,);return$I;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ni){return
apply_queries("DROP VIEW",$Ni);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Sg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Sg));}function
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
support($Oc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Oc);}$x="oracle";$U=array();$wh=array();foreach(array(lang(25)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(26)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(23)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$U+=$X;$wh[$y]=array_keys($X);}$xi=array();$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$jd=array("length","lower","round","upper");$od=array("avg","count","count distinct","max","min","sum");$mc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ec["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Xf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($M,$V,$F){$this->_link=@sqlsrv_connect($M,array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8"));if($this->_link){$Jd=sqlsrv_server_info($this->_link);$this->server_info=$Jd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($G,$ri=false){$H=sqlsrv_query($this->_link,$G);$this->error="";if(!$H){$this->_get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->_result=sqlsrv_query($this->_link,$G);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($H=null){if(!$H)$H=$this->_result;if(!$H)return
false;if(sqlsrv_field_metadata($H))return
new
Min_Result($H);$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->fetch_row();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$y=>$X){if(is_a($X,'DateTime'))$J[$y]=$X->format("Y-m-d H:i:s");}return$J;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$I=new
stdClass;$I->name=$o["Name"];$I->orgname=$o["Name"];$I->type=($o["Type"]==1?254:0);return$I;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($M,$V,$F){$this->_link=@mssql_connect($M,$V,$F);if($this->_link){$H=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$J=$H->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$J[0]] $J[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($G,$ri=false){$H=@mssql_query($G,$this->_link);$this->error="";if(!$H){$this->error=mssql_get_last_message();return
false;}if($H===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;return
mssql_result($H->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;$this->num_rows=mssql_num_rows($H);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$I=mssql_fetch_field($this->_result);$I->orgtable=$I->table;$I->orgname=$I->name;return$I;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($M,$V,$F){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$V,$F);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$K,$ag){foreach($K
as$N){$yi=array();$Z=array();foreach($N
as$y=>$X){$yi[]="$y = $X";if(isset($ag[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$N).")) AS source (c".implode(", c",range(1,count($N))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$yi)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($G,$Z,$z,$D=0,$Zg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $G$Z";}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($m,$qb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name = ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$I=array();foreach($l
as$m){$g->select_db($m);$I[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($C=""){$I=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$J){if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$I=array();foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name, t.name type, CAST(d.definition as text) [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$J){$T=$J["type"];$pe=(preg_match("~char|binary~",$T)?$J["max_length"]:($T=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$T.($pe?"($pe)":""),"type"=>$T,"length"=>$pe,"default"=>$J["default"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$J["is_identity"],);}return$I;}function
indexes($Q,$h=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$h)as$J){$C=$J["name"];$I[$C]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$C]["lengths"]=array();$I[$C]["columns"][$J["key_ordinal"]]=$J["column_name"];$I[$C]["descs"][$J["key_ordinal"]]=($J["is_descending_key"]?'1':null);}return$I;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$pb)$I[preg_replace('~_.*~','',$pb)][]=$pb;return$I;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$pb)?" COLLATE $pb":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$pb){if(preg_match('~^[a-z0-9_]+$~i',$pb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $pb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($ad[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($ad)$c[""]=$ad;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$v=array();$fc=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fc[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$fc||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$fc)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$G){$g->query("SET SHOWPLAN_ALL ON");$I=$g->query($G);$g->query("SET SHOWPLAN_ALL OFF");return$I;}function
found_rows($R,$Z){}function
foreign_keys($Q){$I=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$J){$q=&$I[$J["FK_NAME"]];$q["table"]=$J["PKTABLE_NAME"];$q["source"][]=$J["FKCOLUMN_NAME"];$q["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ni){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ni)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ni,$Lh){return
apply_queries("ALTER SCHEMA ".idf_escape($Lh)." TRANSFER",array_merge($S,$Ni));}function
trigger($C){if($C=="")return
array();$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$I=reset($K);if($I)$I["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$I["text"]);return$I;}function
triggers($Q){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$J)$I[$J["name"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Rg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Oc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Oc);}$x="mssql";$U=array();$wh=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(26)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(23)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$U+=$X;$wh[$y]=array_keys($X);}$xi=array();$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$jd=array("len","lower","round","upper");$od=array("avg","count","count distinct","max","min","sum");$mc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ec['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Xf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($M,$V,$F){$this->_link=ibase_connect($M,$V,$F);if($this->_link){$Ai=explode(':',$M);$this->service_link=ibase_service_attach($Ai[0],$V,$F);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return($k=="domain");}function
query($G,$ri=false){$H=ibase_query($G,$this->_link);if(!$H){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($H===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;$J=$H->fetch_row();return$J[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($H){$this->_result=$H;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Zc){return
array("domain");}function
limit($G,$Z,$z,$D=0,$Zg=" "){$I='';$I.=($z!==null?$Zg."FIRST $z".($D?" SKIP $D":""):"");$I.=" $G$Z";return$I;}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($m,$qb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$G='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$H=ibase_query($g->_link,$G);$I=array();while($J=ibase_fetch_assoc($H))$I[$J['RDB$RELATION_NAME']]='table';ksort($I);return$I;}function
count_tables($l){return
array();}function
table_status($C="",$Nc=false){global$g;$I=array();$Lb=tables_list();foreach($Lb
as$v=>$X){$v=trim($v);$I[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$I[$v];}return$I;}function
is_view($R){return
false;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){global$g;$I=array();$G='SELECT r.RDB$FIELD_NAME AS field_name,
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
ORDER BY r.RDB$FIELD_POSITION';$H=ibase_query($g->_link,$G);while($J=ibase_fetch_assoc($H))$I[trim($J['FIELD_NAME'])]=array("field"=>trim($J["FIELD_NAME"]),"full_type"=>trim($J["FIELD_TYPE"]),"type"=>trim($J["FIELD_SUB_TYPE"]),"default"=>trim($J['FIELD_DEFAULT_VALUE']),"null"=>(trim($J["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($J["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($J["FIELD_DESCRIPTION"]),);return$I;}function
indexes($Q,$h=null){$I=array();return$I;}function
foreign_keys($Q){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Rg){return
true;}function
support($Oc){return
preg_match("~^(columns|sql|status|table)$~",$Oc);}$x="firebird";$mf=array("=");$jd=array();$od=array();$mc=array();}$ec["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Xf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($G,$ri=false){$Ef=array('SelectExpression'=>$G,'ConsistentRead'=>'true');if($this->next)$Ef['NextToken']=$this->next;$H=sdb_request_all('Select','Item',$Ef,$this->timeout);if($H===false)return$H;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$G)){$_h=0;foreach($H
as$Wd)$_h+=$Wd->Attribute->Value;$H=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$_h,))));}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($H){foreach($H
as$Wd){$J=array();if($Wd->Name!='')$J['itemName()']=(string)$Wd->Name;foreach($Wd->Attribute
as$Ja){$C=$this->_processValue($Ja->Name);$Y=$this->_processValue($Ja->Value);if(isset($J[$C])){$J[$C]=(array)$J[$C];$J[$C][]=$Y;}else$J[$C]=$Y;}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($pc){return(is_object($pc)&&$pc['encoding']=='base64'?base64_decode($pc):(string)$pc);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ce=array_keys($this->_rows[0]);return(object)array('name'=>$ce[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$ag="itemName()";function
_chunkRequest($_d,$wa,$Ef,$Ec=array()){global$g;foreach(array_chunk($_d,25)as$ib){$Ff=$Ef;foreach($ib
as$s=>$t){$Ff["Item.$s.ItemName"]=$t;foreach($Ec
as$y=>$X)$Ff["Item.$s.$y"]=$X;}if(!sdb_request($wa,$Ff))return
false;}$g->affected_rows=count($_d);return
true;}function
_extractIds($Q,$ng,$z){$I=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$ng,$xe))$I=array_map('idf_unescape',$xe[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$ng.($z?" LIMIT 1":"")))as$Wd)$I[]=$Wd->Name;}return$I;}function
select($Q,$L,$Z,$md,$rf=array(),$z=1,$E=0,$cg=false){global$g;$g->next=$_GET["next"];$I=parent::select($Q,$L,$Z,$md,$rf,$z,$E,$cg);$g->next=0;return$I;}function
delete($Q,$ng,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$ng,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$N,$ng,$z=0,$Zg="\n"){$Tb=array();$Nd=array();$s=0;$_d=$this->_extractIds($Q,$ng,$z);$t=idf_unescape($N["`itemName()`"]);unset($N["`itemName()`"]);foreach($N
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$_d))$Tb["Attribute.".count($Tb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Yd=>$W){$Nd["Attribute.$s.Name"]=$y;$Nd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Yd)$Nd["Attribute.$s.Replace"]="true";$s++;}}}$Ef=array('DomainName'=>$Q);return(!$Nd||$this->_chunkRequest(($t!=""?array($t):$_d),'BatchPutAttributes',$Ef,$Nd))&&(!$Tb||$this->_chunkRequest($_d,'BatchDeleteAttributes',$Ef,$Tb));}function
insert($Q,$N){$Ef=array("DomainName"=>$Q);$s=0;foreach($N
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$Ef["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$Ef["Attribute.$s.Name"]=$C;$Ef["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$Ef);}function
insertUpdate($Q,$K,$ag){foreach($K
as$N){if(!$this->update($Q,$N,"WHERE `itemName()` = ".q($N["`itemName()`"])))return
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
support($Oc){return
preg_match('~sql~',$Oc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$qb){}function
tables_list(){global$g;$I=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$I[(string)$Q]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$I;}function
table_status($C="",$Nc=false){$I=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$T){$J=array("Name"=>$Q,"Auto_increment"=>"");if(!$Nc){$Je=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($Je){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$J[$y]=(string)$Je->$X;}}if($C!="")return$J;$I[$Q]=$J;}return$I;}function
explain($g,$G){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){return
fields_from_edit();}function
foreign_keys($Q){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($G,$Z,$z,$D=0,$Zg=" "){return" $G$Z".($z!==null?$Zg."LIMIT $z":"");}function
unconvert_field($o,$I){return$I;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($Ca,$Lb,$y,$rg=false){$Va=64;if(strlen($y)>$Va)$y=pack("H*",$Ca($y));$y=str_pad($y,$Va,"\0");$Zd=$y^str_repeat("\x36",$Va);$ae=$y^str_repeat("\x5C",$Va);$I=$Ca($ae.pack("H*",$Ca($Zd.$Lb)));if($rg)$I=pack("H*",$I);return$I;}function
sdb_request($wa,$Ef=array()){global$b,$g;list($xd,$Ef['AWSAccessKeyId'],$Ug)=$b->credentials();$Ef['Action']=$wa;$Ef['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$Ef['Version']='2009-04-15';$Ef['SignatureVersion']=2;$Ef['SignatureMethod']='HmacSHA1';ksort($Ef);$G='';foreach($Ef
as$y=>$X)$G.='&'.rawurlencode($y).'='.rawurlencode($X);$G=str_replace('%7E','~',substr($G,1));$G.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$xd)."\n/\n$G",$Ug,true)));@ini_set('track_errors',1);$Sc=@file_get_contents((preg_match('~^https?://~',$xd)?$xd:"http://$xd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$G,'ignore_errors'=>1,))));if(!$Sc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Yi=simplexml_load_string($Sc);if(!$Yi){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($Yi->Errors){$n=$Yi->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$Kh=$wa."Result";return($Yi->$Kh?$Yi->$Kh:true);}function
sdb_request_all($wa,$Kh,$Ef=array(),$Th=0){$I=array();$sh=($Th?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$Ef['SelectExpression'],$B)?$B[1]:0);do{$Yi=sdb_request($wa,$Ef);if(!$Yi)break;foreach($Yi->$Kh
as$pc)$I[]=$pc;if($z&&count($I)>=$z){$_GET["next"]=$Yi->NextToken;break;}if($Th&&microtime(true)-$sh>$Th)return
false;$Ef['NextToken']=$Yi->NextToken;if($z)$Ef['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($I),$Ef['SelectExpression']);}while($Yi->NextToken);return$I;}$x="simpledb";$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$jd=array();$od=array("count");$mc=array(array("json"));}$ec["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Xf=array("mongo","mongodb");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($M,$V,$F){global$b;$m=$b->database();$pf=array();if($V!=""){$pf["username"]=$V;$pf["password"]=$F;}if($m!="")$pf["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$M",$pf);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
query($G){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$Wd){$J=array();foreach($Wd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$J[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ce=array_keys($this->_rows[0]);$C=$ce[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}class
Min_Driver
extends
Min_SQL{public$ag="_id";function
select($Q,$L,$Z,$md,$rf=array(),$z=1,$E=0,$cg=false){$L=($L==array("*")?array():array_fill_keys($L,true));$kh=array();foreach($rf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Eb);$kh[$X]=($Eb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($Q)->find(array(),$L)->sort($kh)->limit($z!=""?+$z:0)->skip($E*$z));}function
insert($Q,$N){try{$I=$this->_conn->_db->selectCollection($Q)->insert($N);$this->_conn->errno=$I['code'];$this->_conn->error=$I['err'];$this->_conn->last_id=$N['_id'];return!$I['err'];}catch(Exception$Ac){$this->_conn->error=$Ac->getMessage();return
false;}}}function
get_databases($Zc){global$g;$I=array();$Qb=$g->_link->listDBs();foreach($Qb['databases']as$m)$I[]=$m['name'];return$I;}function
count_tables($l){global$g;$I=array();foreach($l
as$m)$I[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$I;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
drop_databases($l){global$g;foreach($l
as$m){$Dg=$g->_link->selectDB($m)->drop();if(!$Dg['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$I=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$v){$Wb=array();foreach($v["key"]as$d=>$T)$Wb[]=($T==-1?'1':null);$I[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Wb,);}return$I;}function
fields($Q){return
fields_from_edit();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}$mf=array("=");}elseif(class_exists('MongoDB\Driver\Manager')){class
Min_DB{var$extension="MongoDB",$error,$last_id;var$_link;var$_db,$_db_name;function
connect($M,$V,$F){global$b;$m=$b->database();$pf=array();if($V!=""){$pf["username"]=$V;$pf["password"]=$F;}if($m!="")$pf["db"]=$m;try{$kb='MongoDB\Driver\Manager';$this->_link=new$kb("mongodb://$M",$pf);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
query($G){return
false;}function
select_db($k){try{$this->_db_name=$k;return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$Wd){$J=array();foreach($Wd
as$y=>$X){if(is_a($X,'MongoDB\BSON\Binary'))$this->_charset[$y]=63;$J[$y]=(is_a($X,'MongoDB\BSON\ObjectID')?'MongoDB\BSON\ObjectID("'.strval($X).'")':(is_a($X,'MongoDB\BSON\UTCDatetime')?$X->toDateTime()->format('Y-m-d H:i:s'):(is_a($X,'MongoDB\BSON\Binary')?$X->bin:(is_a($X,'MongoDB\BSON\Regex')?strval($X):(is_object($X)?json_encode($X,256):$X)))));}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=$H->count;}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ce=array_keys($this->_rows[0]);$C=$ce[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}class
Min_Driver
extends
Min_SQL{public$ag="_id";function
select($Q,$L,$Z,$md,$rf=array(),$z=1,$E=0,$cg=false){global$g;$L=($L==array("*")?array():array_fill_keys($L,1));if(count($L)&&!isset($L['_id']))$L['_id']=0;$Z=where_to_query($Z);$kh=array();foreach($rf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Eb);$kh[$X]=($Eb?-1:1);}if(isset($_GET['limit'])&&is_numeric($_GET['limit'])&&$_GET['limit']>0)$z=$_GET['limit'];$z=min(200,max(1,(int)$z));$ih=$E*$z;$kb='MongoDB\Driver\Query';$G=new$kb($Z,array('projection'=>$L,'limit'=>$z,'skip'=>$ih,'sort'=>$kh));$Gg=$g->_link->executeQuery("$g->_db_name.$Q",$G);return
new
Min_Result($Gg);}function
update($Q,$N,$ng,$z=0,$Zg="\n"){global$g;$m=$g->_db_name;$Z=sql_query_where_parser($ng);$kb='MongoDB\Driver\BulkWrite';$Za=new$kb(array());if(isset($N['_id']))unset($N['_id']);$Ag=array();foreach($N
as$y=>$Y){if($Y=='NULL'){$Ag[$y]=1;unset($N[$y]);}}$yi=array('$set'=>$N);if(count($Ag))$yi['$unset']=$Ag;$Za->update($Z,$yi,array('upsert'=>false));$Gg=$g->_link->executeBulkWrite("$m.$Q",$Za);$g->affected_rows=$Gg->getModifiedCount();return
true;}function
delete($Q,$ng,$z=0){global$g;$m=$g->_db_name;$Z=sql_query_where_parser($ng);$kb='MongoDB\Driver\BulkWrite';$Za=new$kb(array());$Za->delete($Z,array('limit'=>$z));$Gg=$g->_link->executeBulkWrite("$m.$Q",$Za);$g->affected_rows=$Gg->getDeletedCount();return
true;}function
insert($Q,$N){global$g;$m=$g->_db_name;$kb='MongoDB\Driver\BulkWrite';$Za=new$kb(array());if(isset($N['_id'])&&empty($N['_id']))unset($N['_id']);$Za->insert($N);$Gg=$g->_link->executeBulkWrite("$m.$Q",$Za);$g->affected_rows=$Gg->getInsertedCount();return
true;}}function
get_databases($Zc){global$g;$I=array();$kb='MongoDB\Driver\Command';$tb=new$kb(array('listDatabases'=>1));$Gg=$g->_link->executeCommand('admin',$tb);foreach($Gg
as$Qb){foreach($Qb->databases
as$m)$I[]=$m->name;}return$I;}function
count_tables($l){$I=array();return$I;}function
tables_list(){global$g;$kb='MongoDB\Driver\Command';$tb=new$kb(array('listCollections'=>1));$Gg=$g->_link->executeCommand($g->_db_name,$tb);$rb=array();foreach($Gg
as$H)$rb[$H->name]='table';return$rb;}function
drop_databases($l){return
false;}function
indexes($Q,$h=null){global$g;$I=array();$kb='MongoDB\Driver\Command';$tb=new$kb(array('listIndexes'=>$Q));$Gg=$g->_link->executeCommand($g->_db_name,$tb);foreach($Gg
as$v){$Wb=array();$e=array();foreach(get_object_vars($v->key)as$d=>$T){$Wb[]=($T==-1?'1':null);$e[]=$d;}$I[$v->name]=array("type"=>($v->name=="_id_"?"PRIMARY":(isset($v->unique)?"UNIQUE":"INDEX")),"columns"=>$e,"lengths"=>array(),"descs"=>$Wb,);}return$I;}function
fields($Q){$p=fields_from_edit();if(!count($p)){global$dc;$H=$dc->select($Q,array("*"),null,null,array(),10);while($J=$H->fetch_assoc()){foreach($J
as$y=>$X){$J[$y]=null;$p[$y]=array("field"=>$y,"type"=>"string","null"=>($y!=$dc->primary),"auto_increment"=>($y==$dc->primary),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,),);}}}return$p;}function
found_rows($R,$Z){global$g;$Z=where_to_query($Z);$kb='MongoDB\Driver\Command';$tb=new$kb(array('count'=>$R['Name'],'query'=>$Z));$Gg=$g->_link->executeCommand($g->_db_name,$tb);$bi=$Gg->toArray();return$bi[0]->n;}function
sql_query_where_parser($ng){$ng=trim(preg_replace('/WHERE[\s]?[(]?\(?/','',$ng));$ng=preg_replace('/\)\)\)$/',')',$ng);$Vi=explode(' AND ',$ng);$Wi=explode(') OR (',$ng);$Z=array();foreach($Vi
as$Ti)$Z[]=trim($Ti);if(count($Wi)==1)$Wi=array();elseif(count($Wi)>1)$Z=array();return
where_to_query($Z,$Wi);}function
where_to_query($Ri=array(),$Si=array()){global$mf;$Lb=array();foreach(array('and'=>$Ri,'or'=>$Si)as$T=>$Z){if(is_array($Z)){foreach($Z
as$Hc){list($nb,$kf,$X)=explode(" ",$Hc,3);if($nb=="_id"){$X=str_replace('MongoDB\BSON\ObjectID("',"",$X);$X=str_replace('")',"",$X);$kb='MongoDB\BSON\ObjectID';$X=new$kb($X);}if(!in_array($kf,$mf))continue;if(preg_match('~^\(f\)(.+)~',$kf,$B)){$X=(float)$X;$kf=$B[1];}elseif(preg_match('~^\(date\)(.+)~',$kf,$B)){$Nb=new
DateTime($X);$kb='MongoDB\BSON\UTCDatetime';$X=new$kb($Nb->getTimestamp()*1000);$kf=$B[1];}switch($kf){case'=':$kf='$eq';break;case'!=':$kf='$ne';break;case'>':$kf='$gt';break;case'<':$kf='$lt';break;case'>=':$kf='$gte';break;case'<=':$kf='$lte';break;case'regex':$kf='$regex';break;default:continue;}if($T=='and')$Lb['$and'][]=array($nb=>array($kf=>$X));elseif($T=='or')$Lb['$or'][]=array($nb=>array($kf=>$X));}}}return$Lb;}$mf=array("=","!=",">","<",">=","<=","regex","(f)=","(f)!=","(f)>","(f)<","(f)>=","(f)<=","(date)=","(date)!=","(date)>","(date)<","(date)>=","(date)<=",);}function
table($u){return$u;}function
idf_escape($u){return$u;}function
table_status($C="",$Nc=false){$I=array();foreach(tables_list()as$Q=>$T){$I[$Q]=array("Name"=>$Q);if($C==$Q)return$I[$Q];}return$I;}function
last_id(){global$g;return$g->last_id;}function
error(){global$g;return
h($g->error);}function
collations(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
alter_indexes($Q,$c){global$g;foreach($c
as$X){list($T,$C,$N)=$X;if($N=="DROP")$I=$g->_db->command(array("deleteIndexes"=>$Q,"index"=>$C));else{$e=array();foreach($N
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Eb);$e[$d]=($Eb?-1:1);}$I=$g->_db->selectCollection($Q)->ensureIndex($e,array("unique"=>($T=="UNIQUE"),"name"=>$C,));}if($I['errmsg']){$g->error=$I['errmsg'];return
false;}}return
true;}function
support($Oc){return
preg_match("~database|indexes~",$Oc);}function
db_collation($m,$qb){}function
information_schema(){}function
is_view($R){}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){global$g;if($Q==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Dg=$g->_db->selectCollection($Q)->drop();if(!$Dg['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Dg=$g->_db->selectCollection($Q)->remove();if(!$Dg['ok'])return
false;}return
true;}$x="mongo";$jd=array();$od=array();$mc=array(array("json"));}$ec["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Xf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Of,$_b=array(),$Ke='GET'){@ini_set('track_errors',1);$Sc=@file_get_contents("$this->_url/".ltrim($Of,'/'),false,stream_context_create(array('http'=>array('method'=>$Ke,'content'=>$_b===null?$_b:json_encode($_b),'header'=>'Content-Type: application/json','ignore_errors'=>1,))));if(!$Sc){$this->error=$php_errormsg;return$Sc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Sc;return
false;}$I=json_decode($Sc,true);if($I===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$zb=get_defined_constants(true);foreach($zb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$I;}function
query($Of,$_b=array(),$Ke='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Of,'/'),$_b,$Ke);}function
connect($M,$V,$F){preg_match('~^(https?://)?(.*)~',$M,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$F@$B[2]";$I=$this->query('');if($I)$this->server_info=$I['version']['number'];return(bool)$I;}function
select_db($k){$this->_db=$k;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
__construct($K){$this->num_rows=count($this->_rows);$this->_rows=$K;reset($this->_rows);}function
fetch_assoc(){$I=current($this->_rows);next($this->_rows);return$I;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$L,$Z,$md,$rf=array(),$z=1,$E=0,$cg=false){global$b;$Lb=array();$G="$Q/_search";if($L!=array("*"))$Lb["fields"]=$L;if($rf){$kh=array();foreach($rf
as$nb){$nb=preg_replace('~ DESC$~','',$nb,1,$Eb);$kh[]=($Eb?array($nb=>"desc"):$nb);}$Lb["sort"]=$kh;}if($z){$Lb["size"]=+$z;if($E)$Lb["from"]=($E*$z);}foreach($Z
as$X){list($nb,$kf,$X)=explode(" ",$X,3);if($nb=="_id")$Lb["query"]["ids"]["values"][]=$X;elseif($nb.$X!=""){$Oh=array("term"=>array(($nb!=""?$nb:"_all")=>$X));if($kf=="=")$Lb["query"]["filtered"]["filter"]["and"][]=$Oh;else$Lb["query"]["filtered"]["query"]["bool"]["must"][]=$Oh;}}if($Lb["query"]&&!$Lb["query"]["filtered"]["query"]&&!$Lb["query"]["ids"])$Lb["query"]["filtered"]["query"]=array("match_all"=>array());$sh=microtime(true);$Tg=$this->_conn->query($G,$Lb);if($cg)echo$b->selectQuery("$G: ".print_r($Lb,true),format_time($sh));if(!$Tg)return
false;$I=array();foreach($Tg['hits']['hits']as$wd){$J=array();if($L==array("*"))$J["_id"]=$wd["_id"];$p=$wd['_source'];if($L!=array("*")){$p=array();foreach($L
as$y)$p[$y]=$wd['fields'][$y];}foreach($p
as$y=>$X){if($Lb["fields"])$X=$X[0];$J[$y]=(is_array($X)?json_encode($X):$X);}$I[]=$J;}return
new
Min_Result($I);}function
update($T,$sg,$ng){$Mf=preg_split('~ *= *~',$ng);if(count($Mf)==2){$t=trim($Mf[1]);$G="$T/$t";return$this->_conn->query($G,$sg,'POST');}return
false;}function
insert($T,$sg){$t="";$G="$T/$t";$Dg=$this->_conn->query($G,$sg,'POST');$this->_conn->last_id=$Dg['_id'];return$Dg['created'];}function
delete($T,$ng){$_d=array();if(is_array($_GET["where"])&&$_GET["where"]["_id"])$_d[]=$_GET["where"]["_id"];if(is_array($_POST['check'])){foreach($_POST['check']as$db){$Mf=preg_split('~ *= *~',$db);if(count($Mf)==2)$_d[]=trim($Mf[1]);}}$this->_conn->affected_rows=0;foreach($_d
as$t){$G="{$T}/{$t}";$Dg=$this->_conn->query($G,'{}','DELETE');if(is_array($Dg)&&$Dg['found']==true)$this->_conn->affected_rows++;}return$this->_conn->affected_rows;}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Oc){return
preg_match("~database|table|columns~",$Oc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$I=$g->rootQuery('_aliases');if($I){$I=array_keys($I);sort($I,SORT_STRING);}return$I;}function
collations(){return
array();}function
db_collation($m,$qb){}function
engines(){return
array();}function
count_tables($l){global$g;$I=array();$H=$g->query('_stats');if($H&&$H['indices']){$Gd=$H['indices'];foreach($Gd
as$Fd=>$th){$Ed=$th['total']['indexing'];$I[$Fd]=$Ed['index_total'];}}return$I;}function
tables_list(){global$g;$I=$g->query('_mapping');if($I)$I=array_fill_keys(array_keys($I[$g->_db]["mappings"]),'table');return$I;}function
table_status($C="",$Nc=false){global$g;$Tg=$g->query("_search",array("size"=>0,"aggregations"=>array("count_by_type"=>array("terms"=>array("field"=>"_type")))),"POST");$I=array();if($Tg){$S=$Tg["aggregations"]["count_by_type"]["buckets"];foreach($S
as$Q){$I[$Q["key"]]=array("Name"=>$Q["key"],"Engine"=>"table","Rows"=>$Q["doc_count"],);if($C!=""&&$C==$Q["key"])return$I[$C];}}return$I;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$H=$g->query("$Q/_mapping");$I=array();if($H){$ve=$H[$Q]['properties'];if(!$ve)$ve=$H[$g->_db]['mappings'][$Q]['properties'];if($ve){foreach($ve
as$C=>$o){$I[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($I[$C]["privileges"]["insert"]);unset($I[$C]["privileges"]["update"]);}}}}return$I;}function
foreign_keys($Q){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),null,'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){global$g;$ig=array();foreach($p
as$Lc){$Qc=trim($Lc[1][0]);$Rc=trim($Lc[1][1]?:"text");$ig[$Qc]=array('type'=>$Rc);}if(!empty($ig))$ig=array('properties'=>$ig);return$g->query("_mapping/{$C}",$ig,'PUT');}function
drop_tables($S){global$g;$I=true;foreach($S
as$Q)$I=$I&&$g->query(urlencode($Q),array(),'DELETE');return$I;}function
last_id(){global$g;return$g->last_id;}$x="elastic";$mf=array("=","query");$jd=array();$od=array();$mc=array(array("json"));$U=array();$wh=array();foreach(array(lang(25)=>array("long"=>3,"integer"=>5,"short"=>8,"byte"=>10,"double"=>20,"float"=>66,"half_float"=>12,"scaled_float"=>21),lang(26)=>array("date"=>10),lang(23)=>array("string"=>65535,"text"=>65535),lang(27)=>array("binary"=>255),)as$y=>$X){$U+=$X;$wh[$y]=array_keys($X);}}$ec=array("server"=>"MySQL")+$ec;if(!defined("DRIVER")){$Xf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($M="",$V="",$F="",$k=null,$Tf=null,$jh=null){mysqli_report(MYSQLI_REPORT_OFF);list($xd,$Tf)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$xd:ini_get("mysqli.default_host")),($M.$V!=""?$V:ini_get("mysqli.default_user")),($M.$V.$F!=""?$F:ini_get("mysqli.default_pw")),$k,(is_numeric($Tf)?$Tf:ini_get("mysqli.default_port")),(!is_numeric($Tf)?$Tf:$jh));return$I;}function
set_charset($cb){if(parent::set_charset($cb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $cb");}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$o];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($M,$V,$F){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$V"!=""?$V:ini_get("mysql.default_user")),("$M$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($cb){if(function_exists('mysql_set_charset')){if(mysql_set_charset($cb,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $cb");}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($G,$ri=false){$H=@($ri?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
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
__construct($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$V,$F){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$V,$F);return
true;}function
set_charset($cb){$this->query("SET NAMES $cb");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($G,$ri=false){$this->setAttribute(1000,!$ri);return
parent::query($G,$ri);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$N){return($N?parent::insert($Q,$N):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$K,$ag){$e=array_keys(reset($K));$Yf="INSERT INTO ".table($Q)." (".implode(", ",$e).") VALUES\n";$Ii=array();foreach($e
as$y)$Ii[$y]="$y = VALUES($y)";$zh="\nON DUPLICATE KEY UPDATE ".implode(", ",$Ii);$Ii=array();$pe=0;foreach($K
as$N){$Y="(".implode(", ",$N).")";if($Ii&&(strlen($Yf)+$pe+strlen($Y)+strlen($zh)>1e6)){if(!queries($Yf.implode(",\n",$Ii).$zh))return
false;$Ii=array();$pe=0;}$Ii[]=$Y;$pe+=strlen($Y)+2;}return
queries($Yf.implode(",\n",$Ii).$zh);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$U,$wh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$wh[lang(23)][]="json";$U["json"]=4294967295;}return$g;}$I=$g->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($Pg=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$Pg;return$I;}function
get_databases($Zc){global$g;$I=get_session("dbs");if($I===null){$G=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$I=($Zc?slow_query($G):get_vals($G));restart_session();set_session("dbs",$I);stop_session();}return$I;}function
limit($G,$Z,$z,$D=0,$Zg=" "){return" $G$Z".($z!==null?$Zg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($m,$qb){global$g;$I=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$I=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$I=$qb[$B[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(preg_match("~YES|DEFAULT~",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$I=array();foreach($l
as$m)$I[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$I;}function
table_status($C="",$Nc=false){global$g;$I=array();foreach(get_rows($Nc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Engine"]))$J["Comment"]="";if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"])||(preg_match('~NDB~i',$R["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$B);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($J["Default"]!=""||preg_match("~char|set~",$B[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$J["Extra"],$B)?$B[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(preg_split('~, *~',$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($Q,$h=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$J){$C=$J["Key_name"];$I[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?($J["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$I[$C]["columns"][]=$J["Column_name"];$I[$C]["lengths"][]=($J["Index_type"]=="SPATIAL"?null:$J["Sub_part"]);$I[$C]["descs"][]=null;}return$I;}function
foreign_keys($Q){global$g,$hf;static$Qf='`(?:[^`]|``)+`';$I=array();$Fb=$g->result("SHOW CREATE TABLE ".table($Q),1);if($Fb){preg_match_all("~CONSTRAINT ($Qf) FOREIGN KEY ?\\(((?:$Qf,? ?)+)\\) REFERENCES ($Qf)(?:\\.($Qf))? \\(((?:$Qf,? ?)+)\\)(?: ON DELETE ($hf))?(?: ON UPDATE ($hf))?~",$Fb,$xe,PREG_SET_ORDER);foreach($xe
as$B){preg_match_all("~$Qf~",$B[2],$lh);preg_match_all("~$Qf~",$B[5],$Lh);$I[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$lh[0]),"target"=>array_map('idf_unescape',$Lh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$I;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$y=>$X)asort($I[$y]);return$I;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" COLLATE ".q($pb):""));}function
drop_databases($l){$I=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$I;}function
rename_database($C,$pb){$I=false;if(create_database($C,$pb)){$Bg=array();foreach(tables_list()as$Q=>$T)$Bg[]=table($Q)." TO ".idf_escape($C).".".table($Q);$I=(!$Bg||queries("RENAME TABLE ".implode(", ",$Bg)));if($I)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$I;}function
auto_increment(){$Na=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Na="";break;}if($v["type"]=="PRIMARY")$Na=" UNIQUE";}}return" AUTO_INCREMENT$Na";}function
alter_table($Q,$C,$p,$ad,$vb,$uc,$pb,$Ma,$Kf){$c=array();foreach($p
as$o)$c[]=($o[1]?($Q!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($Q!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$ad);$O=($vb!==null?" COMMENT=".q($vb):"").($uc?" ENGINE=".q($uc):"").($pb?" COLLATE ".q($pb):"").($Ma!=""?" AUTO_INCREMENT=$Ma":"");if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$O$Kf");if($Q!=$C)$c[]="RENAME TO ".table($C);if($O)$c[]=ltrim($O);return($c||$Kf?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c).$Kf):true);}function
alter_indexes($Q,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ni){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ni)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ni,$Lh){$Bg=array();foreach(array_merge($S,$Ni)as$Q)$Bg[]=table($Q)." TO ".idf_escape($Lh).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Bg));}function
copy_tables($S,$Ni,$Lh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($Lh==DB?table("copy_$Q"):idf_escape($Lh).".".table($Q));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Ni
as$Q){$C=($Lh==DB?table("copy_$Q"):idf_escape($Lh).".".table($Q));$Mi=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Mi[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$T){global$g,$wc,$Ld,$U;$Da=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$mh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$qi="((".implode("|",array_merge(array_keys($U),$Da)).")\\b(?:\\s*\\(((?:[^'\")]|$wc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Qf="$mh*(".($T=="FUNCTION"?"":$Ld).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$qi";$i=$g->result("SHOW CREATE $T ".idf_escape($C),2);preg_match("~\\(((?:$Qf\\s*,?)*)\\)\\s*".($T=="FUNCTION"?"RETURNS\\s+$qi\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$Qf\\s*,?~is",$B[1],$xe,PREG_SET_ORDER);foreach($xe
as$Df){$C=str_replace("``","`",$Df[2]).$Df[3];$p[]=array("field"=>$C,"type"=>strtolower($Df[5]),"length"=>preg_replace_callback("~$wc~s",'normalize_enum',$Df[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Df[8] $Df[7]"))),"null"=>1,"full_type"=>$Df[4],"inout"=>strtoupper($Df[1]),"collation"=>strtolower($Df[9]),);}if($T!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$G){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$G);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Rg){return
true;}function
create_sql($Q,$Ma,$xh){global$g;$I=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ma)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($Q){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$J)$I.="\nCREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){global$g;if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return($g->server_info>=8?"ST_":"")."AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$I){if(preg_match("~binary~",$o["type"]))$I="UNHEX($I)";if($o["type"]=="bit")$I="CONV($I, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$I="GeomFromText($I)";return$I;}function
support($Oc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Oc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$U=array();$wh=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(26)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(23)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$U+=$X;$wh[$y]=array_keys($X);}$xi=array("unsigned","zerofill","unsigned zerofill");$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$jd=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$od=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.5.0";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/'".target_blank()." id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Zc=true){return
get_databases($Zc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){}function
csp(){return
csp();}function
head(){return
true;}function
css(){$I=array();$Tc="adminer.css";if(file_exists($Tc))$I[]=$Tc;return$I;}function
loginForm(){global$ec;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$ec,DRIVER)."\n",'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
',script("focus(qs('#username'));"),"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($te,$F){global$x;if($x=="sqlite")return
lang(38,target_blank(),'<code>login()</code>');return
true;}function
tableName($Ch){return
h($Ch["Name"]);}function
fieldName($o,$rf=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Ch,$N=""){echo'<p class="links">';$se=array("select"=>lang(39));if(support("table")||support("indexes"))$se["table"]=lang(40);if(support("table")){if(is_view($Ch))$se["view"]=lang(41);else$se["create"]=lang(42);}if($N!==null)$se["edit"]=lang(43);foreach($se
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($Ch["Name"]).($y=="edit"?$N:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Bh){return
array();}function
backwardKeysPrint($Pa,$J){}function
selectQuery($G,$Sh){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$G))."</code> <span class='time'>($Sh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($G)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($G){return
shorten_utf8(trim($G),1000);}function
rowDescription($Q){return"";}function
rowDescriptions($K,$bd){return$K;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$zf){$I=($X===null?"<i>NULL</i>":(preg_match("~char|binary|boolean~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$I="<i>".lang(44,strlen($zf))."</i>";if(preg_match('~json~',$o["type"]))$I="<code class='jush-js'>$I</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$I</a>":$I);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr><th>".lang(45)."<td>".lang(46).(support("comment")?"<td>".lang(47):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(48)."</i>":""),(isset($o["default"])?" <span title='".lang(49)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$cg=array();foreach($v["columns"]as$y=>$X)$cg[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$cg)."\n";}echo"</table>\n";}function
selectColumnsPrint($L,$e){global$jd,$od;print_fieldset("select",lang(50),$L);$s=0;$L[""]=array();foreach($L
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]'",$e,$X["col"],($y!==""?"selectFieldChange":"selectAddRow"));echo"<div>".($jd||$od?"<select name='columns[$s][fun]'>".optionlist(array(-1=>"")+array_filter(array(lang(51)=>$jd,lang(52)=>$od)),$X["fun"])."</select>".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).script("qsl('select').onchange = function () { helpClose();".($y!==""?"":" qsl('select, input', this.parentNode).onchange();")." };","")."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(53),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"<div>(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."'>",script("qsl('input').oninput = selectFieldChange;",""),checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"</div>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$bb="this.parentNode.firstChild.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]'",$e,$X["col"],($X?"selectFieldChange":"selectAddRow"),"(".lang(54).")"),html_select("where[$s][op]",$this->operators,$X["op"],$bb),"<input type='search' name='where[$s][val]' value='".h($X["val"])."'>",script("mixin(qsl('input'), {oninput: function () { $bb }, onkeydown: selectSearchKeydown, onsearch: selectSearchSearch});",""),"</div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($rf,$e,$w){print_fieldset("sort",lang(55),$rf);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]'",$e,$X,"selectFieldChange"),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(56))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]'",$e,"","selectAddRow"),checkbox("desc[$s]",1,false,lang(56))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(57)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."'>",script("qsl('input').oninput = selectFieldChange;",""),"</div></fieldset>\n";}function
selectLengthPrint($Rh){if($Rh!==null){echo"<fieldset><legend>".lang(58)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Rh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='submit' value='".lang(50)."'>"," <span id='noindex' title='".lang(60)."'></span>","<script".nonce().">\n","var indexColumns = ";$e=array();foreach($w
as$v){$Kb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Kb)$e[$Kb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($rc,$e){}function
selectColumnsProcess($e,$w){global$jd,$od;$L=array();$md=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$jd)||in_array($X["fun"],$od)))){$L[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$od))$md[]=$L[$y];}}return
array($L,$md);}function
selectSearchProcess($p,$w){global$g,$x;$I=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$I[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if($X["op"]=="")$X["op"]="LIKE %%";if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$xb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$Bd=process_length($X["val"]);$xb.=" ".($Bd!=""?$Bd:"(NULL)");}elseif($X["op"]=="SQL")$xb=" $X[val]";elseif($X["op"]=="LIKE %%")$xb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$xb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$xb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$I[]=idf_escape($X["col"]).$xb;else{$sb=array();foreach($p
as$C=>$o){$Ud=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Ud)){$C=idf_escape($C);$sb[]=($x=="sql"&&$Ud&&!preg_match("~^utf8~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$I[]=($sb?"(".implode("$xb OR ",$sb)."$xb)":"0");}}}return$I;}function
selectOrderProcess($p,$w){$I=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$I[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$I;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$bd){return
false;}function
selectQueryBuild($L,$Z,$md,$rf,$z,$E){return"";}function
messageQuery($G,$Sh){global$x;restart_session();$ud=&get_session("queries");if(!$ud[$_GET["db"]])$ud[$_GET["db"]]=array();$t="sql-".count($ud[$_GET["db"]]);if(strlen($G)>1e6)$G=preg_replace('~[\x80-\xFF]+$~','',substr($G,0,1e6))."\n...";$ud[$_GET["db"]][]=array($G,time(),$Sh);return" <span class='time'>".@date("H:i:s")."</span>"." <a href='#$t' class='toggle'>".lang(61)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($G,1000).'</code></pre>'.($Sh?" <span class='time'>($Sh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ud[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$mc;$I=($o["null"]?"NULL/":"");foreach($mc
as$y=>$jd){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($jd
as$Qf=>$X){if(!$Qf||preg_match("~$Qf~",$o["type"]))$I.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$I.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$I=lang(48);return
explode("/",$I);}function
editInput($Q,$o,$Ka,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ka value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ka value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ka,$o,$Y,0);return"";}function
editHint($Q,$o,$Y){return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$I=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$I="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$I=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$I=idf_escape($C)." $r $I";elseif(preg_match('~^[+-] interval$~',$r))$I=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$Y)?$Y:$I);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$I="$r(".idf_escape($C).", $I)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$I="$r($I)";return
unconvert_field($o,$I);}function
dumpOutput(){$I=array('text'=>lang(62),'file'=>lang(63));if(function_exists('gzencode'))$I['gz']='gzip';return$I;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($Q,$xh,$Vd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($xh)dump_csv(array_keys(fields($Q)));}else{if($Vd==2){$p=array();foreach(fields($Q)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($Q)." (".implode(", ",$p).")";}else$i=create_sql($Q,$_POST["auto_increment"],$xh);set_utf8mb4($i);if($xh&&$i){if($xh=="DROP+CREATE"||$Vd==1)echo"DROP ".($Vd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($Vd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($Q,$xh,$G){global$g,$x;$ze=($x=="sqlite"?0:1048576);if($xh){if($_POST["format"]=="sql"){if($xh=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$p=fields($Q);}$H=$g->query($G,1);if($H){$Nd="";$Ya="";$ce=array();$zh="";$Pc=($Q!=''?'fetch_assoc':'fetch_row');while($J=$H->$Pc()){if(!$ce){$Ii=array();foreach($J
as$X){$o=$H->fetch_field();$ce[]=$o->name;$y=idf_escape($o->name);$Ii[]="$y = VALUES($y)";}$zh=($xh=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Ii):"").";\n";}if($_POST["format"]!="sql"){if($xh=="table"){dump_csv($ce);$xh="INSERT";}dump_csv($J);}else{if(!$Nd)$Nd="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$ce)).") VALUES";foreach($J
as$y=>$X){$o=$p[$y];$J[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$Pg=($ze?"\n":" ")."(".implode(",\t",$J).")";if(!$Ya)$Ya=$Nd.$Pg;elseif(strlen($Ya)+4+strlen($Pg)+strlen($zh)<$ze)$Ya.=",$Pg";else{echo$Ya.$zh;$Ya=$Nd.$Pg;}}}if($Ya)echo$Ya.$zh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($zd){return
friendly_url($zd!=""?$zd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($zd,$Ne=false){$Bf=$_POST["output"];$Ic=(preg_match('~sql~',$_POST["format"])?"sql":($Ne?"tar":"csv"));header("Content-Type: ".($Bf=="gz"?"application/x-gzip":($Ic=="tar"?"application/x-tar":($Ic=="sql"||$Bf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($Bf=="gz")ob_start('ob_gzencode',1e6);return$Ic;}function
importServerPath(){return"adminer.sql";}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(64)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(65):lang(66))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(67)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(68)."</a>\n":"");return
true;}function
navigation($Me){global$ia,$x,$ec,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download"',target_blank(),' id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Me=="auth"){$Vc=true;foreach((array)$_SESSION["pwds"]as$Ki=>$dh){foreach($dh
as$M=>$Fi){foreach($Fi
as$V=>$F){if($F!==null){if($Vc){echo"<p id='logins'>".script("mixin(qs('#logins'), {onmouseover: menuOver, onmouseout: menuOut});");$Vc=false;}$Qb=$_SESSION["db"][$Ki][$M][$V];foreach(($Qb?array_keys($Qb):array(""))as$m)echo"<a href='".h(auth_url($Ki,$M,$V,$m))."'>($ec[$Ki]) ".h($V.($M!=""?"@$M":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Me&&DB!=""){$g->select_db(DB);$S=table_status('',true);}echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=4.5.0");if(support("sql")){echo'<script',nonce(),'>
';if($S){$se=array();foreach($S
as$Q=>$T)$se[]=preg_quote($Q,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$se).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($Me);if(DB==""||!$Me){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(61)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(69)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(70)."</a>\n";}if($_GET["ns"]!==""&&!$Me&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(71)."</a>\n";if(!$S)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Me){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Ob=script("mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});","");echo"<span title='".lang(72)."'>DB</span>: ".($l?"<select name='db'>".optionlist(array(""=>"")+$l,DB)."</select>$Ob":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($Me!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(73).": <select name='ns'>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>$Ob";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<ul id='tables'>".script("mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});");foreach($S
as$Q=>$O){echo'<li><a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select").">".lang(74)."</a> ";$C=$this->tableName($O);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($O)?"view":"structure"))." title='".lang(40)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$mf;function
page_header($Vh,$n="",$Xa=array(),$Wh=""){global$ca,$ia,$b,$ec,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$Xh=$Vh.($Wh!=""?": $Wh":"");$Yh=strip_tags($Xh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(75),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>',$Yh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=4.5.0"),'">
',script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=4.5.0");if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.5.0"),'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.5.0"),'">
';foreach($b->css()as$Ib){echo'<link rel="stylesheet" type="text/css" href="',h($Ib),'">
';}}echo'
<body class="',lang(75),' nojs">
';$Tc=get_temp_dir()."/adminer.version";if(!$_COOKIE["adminer_version"]&&function_exists('openssl_verify')&&file_exists($Tc)&&filemtime($Tc)+86400>time()){$Li=unserialize(file_get_contents($Tc));$kg="-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwqWOVuF5uw7/+Z70djoK
RlHIZFZPO0uYRezq90+7Amk+FDNd7KkL5eDve+vHRJBLAszF/7XKXe11xwliIsFs
DFWQlsABVZB3oisKCBEuI71J4kPH8dKGEWR9jDHFw3cWmoH3PmqImX6FISWbG3B8
h7FIx3jEaw5ckVPVTeo5JRm/1DZzJxjyDenXvBQ/6o9DgZKeNDgxwKzH+sw9/YCO
jHnq1cFpOIISzARlrHMa/43YfeNRAm/tsBXjSxembBPo7aQZLAWHmaj5+K19H10B
nCpz9Y++cipkVEiKRGih4ZEvjoFysEOdRLj6WiD/uUNky4xGeA6LaJqh5XpkFkcQ
fQIDAQAB
-----END PUBLIC KEY-----
";if(openssl_verify($Li["version"],base64_decode($Li["signature"]),$kg)==1)$_COOKIE["adminer_version"]=$Li["version"];}echo'<script',nonce(),'>
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick',(isset($_COOKIE["adminer_version"])?"":", onload: partial(verifyVersion, '$ia', '".js_escape(ME)."', '".get_token()."')");?>});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(76)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden"></div>
',script("mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});"),'
<div id="content">
';if($Xa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$ec[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):lang(32));if($Xa===false)echo"$M\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Xa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Xa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Xa
as$y=>$X){$Vb=(is_array($X)?$X[1]:h($X));if($Vb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Vb</a> &raquo; ";}}echo"$Vh\n";}}echo"<h2>$Xh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach($b->csp()as$Hb){$td=array();foreach($Hb
as$y=>$X)$td[]="$y $X";header("Content-Security-Policy: ".implode("; ",$td));}$b->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self'","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
get_nonce(){static$We;if(!$We)$We=base64_encode(rand_string());return$We;}function
page_messages($n){$zi=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ie=$_SESSION["messages"][$zi];if($Ie){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ie)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$zi]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Me=""){global$b,$ci;echo'</div>

';switch_lang();if($Me!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(77),'" id="logout">
<input type="hidden" name="token" value="',$ci,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Me);echo'</div>
',script("setupSubmitHighlight(document);");}function
int32($Pe){while($Pe>=2147483648)$Pe-=4294967296;while($Pe<=-2147483649)$Pe+=4294967296;return(int)$Pe;}function
long2str($W,$Pi){$Pg='';foreach($W
as$X)$Pg.=pack('V',$X);if($Pi)return
substr($Pg,0,end($W));return$Pg;}function
str2long($Pg,$Pi){$W=array_values(unpack('V*',str_pad($Pg,4*ceil(strlen($Pg)/4),"\0")));if($Pi)$W[]=strlen($Pg);return$W;}function
xxtea_mx($aj,$Zi,$_h,$Yd){return
int32((($aj>>5&0x7FFFFFF)^$Zi<<2)+(($Zi>>3&0x1FFFFFFF)^$aj<<4))^int32(($_h^$Zi)+($Yd^$aj));}function
encrypt_string($vh,$y){if($vh=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($vh,true);$Pe=count($W)-1;$aj=$W[$Pe];$Zi=$W[0];$lg=floor(6+52/($Pe+1));$_h=0;while($lg-->0){$_h=int32($_h+0x9E3779B9);$lc=$_h>>2&3;for($Cf=0;$Cf<$Pe;$Cf++){$Zi=$W[$Cf+1];$Oe=xxtea_mx($aj,$Zi,$_h,$y[$Cf&3^$lc]);$aj=int32($W[$Cf]+$Oe);$W[$Cf]=$aj;}$Zi=$W[0];$Oe=xxtea_mx($aj,$Zi,$_h,$y[$Cf&3^$lc]);$aj=int32($W[$Pe]+$Oe);$W[$Pe]=$aj;}return
long2str($W,false);}function
decrypt_string($vh,$y){if($vh=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($vh,false);$Pe=count($W)-1;$aj=$W[$Pe];$Zi=$W[0];$lg=floor(6+52/($Pe+1));$_h=int32($lg*0x9E3779B9);while($_h){$lc=$_h>>2&3;for($Cf=$Pe;$Cf>0;$Cf--){$aj=$W[$Cf-1];$Oe=xxtea_mx($aj,$Zi,$_h,$y[$Cf&3^$lc]);$Zi=int32($W[$Cf]-$Oe);$W[$Cf]=$Zi;}$aj=$W[$Pe];$Oe=xxtea_mx($aj,$Zi,$_h,$y[$Cf&3^$lc]);$Zi=int32($W[0]-$Oe);$W[0]=$Zi;$_h=int32($_h-0x9E3779B9);}return
long2str($W,true);}$g='';$sd=$_SESSION["token"];if(!$sd)$_SESSION["token"]=rand(1,1e6);$ci=get_token();$Rf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Rf[$y]=$X;}}function
add_invalid_login(){global$b;$gd=file_open_lock(get_temp_dir()."/adminer.invalid");if(!$gd)return;$Qd=unserialize(stream_get_contents($gd));$Sh=time();if($Qd){foreach($Qd
as$Rd=>$X){if($X[0]<$Sh)unset($Qd[$Rd]);}}$Pd=&$Qd[$b->bruteForceKey()];if(!$Pd)$Pd=array($Sh+30*60,0);$Pd[1]++;file_write_unlock($gd,serialize($Qd));}function
check_invalid_login(){global$b;$Qd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Pd=$Qd[$b->bruteForceKey()];$Ve=($Pd[1]>29?$Pd[0]-time():0);if($Ve>0)auth_error(lang(78,ceil($Ve/60)));}$La=$_POST["auth"];if($La){session_regenerate_id();$Ki=$La["driver"];$M=$La["server"];$V=$La["username"];$F=(string)$La["password"];$m=$La["db"];set_password($Ki,$M,$V,$F);$_SESSION["db"][$Ki][$M][$V][$m]=true;if($La["permanent"]){$y=base64_encode($Ki)."-".base64_encode($M)."-".base64_encode($V)."-".base64_encode($m);$dg=$b->permanentLogin(true);$Rf[$y]="$y:".base64_encode($dg?encrypt_string($F,$dg):"");cookie("adminer_permanent",implode(" ",$Rf));}if(count($_POST)==1||DRIVER!=$Ki||SERVER!=$M||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($Ki,$M,$V,$m));}elseif($_POST["logout"]){if($sd&&!verify_token()){page_header(lang(77),lang(79));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(80).' '.lang(81,'https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($Rf&&!$_SESSION["pwds"]){session_regenerate_id();$dg=$b->permanentLogin();foreach($Rf
as$y=>$X){list(,$jb)=explode(":",$X);list($Ki,$M,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($Ki,$M,$V,decrypt_string(base64_decode($jb),$dg));$_SESSION["db"][$Ki][$M][$V][$m]=true;}}function
unset_permanent(){global$Rf;foreach($Rf
as$y=>$X){list($Ki,$M,$V,$m)=array_map('base64_decode',explode("-",$y));if($Ki==DRIVER&&$M==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Rf[$y]);}cookie("adminer_permanent",implode(" ",$Rf));}function
auth_error($n){global$b,$sd;$eh=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$eh]||$_GET[$eh])&&!$sd)$n=lang(82);else{add_invalid_login();$F=get_password();if($F!==null){if($F===false)$n.='<br>'.lang(83,target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$eh]&&$_GET[$eh]&&ini_bool("session.use_only_cookies"))$n=lang(84);$Ef=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$Ef["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(85),lang(86,implode(", ",$Xf)),false);page_footer("auth");exit;}list($xd,$Tf)=explode(":",SERVER,2);if(is_numeric($Tf)&&$Tf<1024)auth_error(lang(87));check_invalid_login();$g=connect();$dc=new
Min_Driver($g);}if(!is_object($g)||($te=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($te)?$te:lang(88))));if($La&&$_POST["token"])$_POST["token"]=$ci;$n='';if($_POST){if(!verify_token()){$Kd="max_input_vars";$Ce=ini_get($Kd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$Ce||$X<$Ce)){$Kd=$y;$Ce=$X;}}}$n=(!$_POST["token"]&&$Ce?lang(89,"'$Kd'"):lang(79).' '.lang(90));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(91,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(92);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($H,$h=null,$uf=array(),$z=0){global$x;$se=array();$w=array();$e=array();$Ua=array();$U=array();$I=array();odd('');for($s=0;(!$z||$s<$z)&&($J=$H->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Xd=0;$Xd<count($J);$Xd++){$o=$H->fetch_field();$C=$o->name;$tf=$o->orgtable;$sf=$o->orgname;$I[$o->table]=$tf;if($uf&&$x=="sql")$se[$Xd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($tf!=""){if(!isset($w[$tf])){$w[$tf]=array();foreach(indexes($tf,$h)as$v){if($v["type"]=="PRIMARY"){$w[$tf]=array_flip($v["columns"]);break;}}$e[$tf]=$w[$tf];}if(isset($e[$tf][$sf])){unset($e[$tf][$sf]);$w[$tf][$sf]=$Xd;$se[$Xd]=$tf;}}if($o->charsetnr==63)$Ua[$Xd]=true;$U[$Xd]=$o->type;echo"<th".($tf!=""||$o->name!=$sf?" title='".h(($tf!=""?"$tf.":"").$sf)."'":"").">".h($C).($uf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($J
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ua[$y]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($U[$y]==254)$X="<code>$X</code>";}if(isset($se[$y])&&!$e[$se[$y]]){if($uf&&$x=="sql"){$Q=$J[array_search("table=",$se)];$_=$se[$y].urlencode($uf[$Q]!=""?$uf[$Q]:$Q);}else{$_="edit=".urlencode($se[$y]);foreach($w[$se[$y]]as$nb=>$Xd)$_.="&where".urlencode("[".bracket_escape($nb)."]")."=".urlencode($J[$Xd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$I;}function
referencable_primary($Yg){$I=array();foreach(table_status('',true)as$Dh=>$Q){if($Dh!=$Yg&&fk_support($Q)){foreach(fields($Dh)as$o){if($o["primary"]){if($I[$Dh]){unset($I[$Dh]);break;}$I[$Dh]=$o;}}}}return$I;}function
textarea($C,$Y,$K=10,$sb=80){global$x;echo"<textarea name='$C' rows='$K' cols='$sb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$qb,$cd=array()){global$wh,$U,$xi,$hf;$T=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" aria-labelledby="label-type">';if($T&&!isset($U[$T])&&!isset($cd[$T]))array_unshift($wh,$T);if($cd)$wh[lang(93)]=$cd;echo
optionlist($wh,$T),'</select>
',on_help("getTarget(event).value",1),script("mixin(qsl('select'), {onfocus: function () { lastType = selectValue(this); }, onchange: editingTypeChange});",""),'<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3"',(!$o["length"]&&preg_match('~var(char|binary)$~',$T)?" class='required'":""),' aria-labelledby="label-length">',script("mixin(qsl('input'), {onfocus: editingLengthFocus, oninput: editingLengthChange});",""),'<td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$T)?"":" class='hidden'").'><option value="">('.lang(94).')'.optionlist($qb,$o["collation"]).'</select>',($xi?"<select name='".h($y)."[unsigned]'".(!$T||preg_match('~((^|[^o])int|float|double|decimal)$~',$T)?"":" class='hidden'").'><option>'.optionlist($xi,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$T)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(95).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($cd?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$T)?"":" class='hidden'")."><option value=''>(".lang(96).")".optionlist(explode("|",$hf),$o["on_delete"])."</select> ":" ");}function
process_length($pe){global$wc;return(preg_match("~^\\s*\\(?\\s*$wc(?:\\s*,\\s*$wc)*+\\s*\\)?\\s*\$~",$pe)&&preg_match_all("~$wc~",$pe,$xe)?"(".implode(",",$xe[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$pe)));}function
process_type($o,$ob="COLLATE"){global$xi;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$xi)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $ob ".q($o["collation"]):"");}function
process_field($o,$pi){global$x;$Sb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($pi),($o["null"]?" NULL":" NOT NULL"),(isset($Sb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP(\(\))?$~i',$Sb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Sb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Sb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Sb))?$Sb:q($Sb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($T){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$T))return" class='$y'";}}function
edit_fields($p,$qb,$T="TABLE",$cd=array(),$wb=false){global$g,$Ld;$p=array_values($p);echo'<thead><tr class="wrap">
';if($T=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($T=="TABLE"?lang(97):lang(98)),'<td id="label-type">',lang(46),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;"></textarea>',script("qs('#enum-edit').onblur = editingLengthBlur;"),'<td id="label-length">',lang(99),'<td>',lang(100);if($T=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(48),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(49),(support("comment")?"<td id='label-comment'".($wb?"":" class='hidden'").">".lang(47):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.5.0")."' alt='+' title='".lang(101)."'>".script("row_count = ".count($p).";"),'</thead>
<tbody>
',script("qsl('tbody').onkeydown = editingKeydown;");foreach($p
as$s=>$o){$s++;$vf=$o[($_POST?"orig":"field")];$Zb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$vf=="");echo'<tr',($Zb?"":" style='display: none;'"),'>
',($T=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Ld),$o["inout"]):""),'<th>';if($Zb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">',script("qsl('input').oninput = function () { editingNameChange.call(this);".($o["field"]!=""||count($p)>1?"":" editingAddRow.call(this);")." };","");}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($vf),'">
';edit_type("fields[$s]",$o,$qb,$cd);if($T=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}echo' aria-labelledby="label-ai">',script("qsl('input').onclick = function () { var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.oninput(); } }"),'</label><td>',checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" aria-labelledby="label-default">',script("qsl('input').oninput = function () { this.previousSibling.checked = true; }",""),(support("comment")?"<td".($wb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.5.0")."' alt='+' title='".lang(101)."'>&nbsp;".script("qsl('input').onclick = partial(editingAddRow, 1);","")."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=up.gif&version=4.5.0")."' alt='^' title='".lang(102)."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 1);","")."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=down.gif&version=4.5.0")."' alt='v' title='".lang(103)."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 0);",""):""),($vf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.5.0")."' alt='x' title='".lang(104)."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'fields\$1[field]');"):"");}}function
process_fields(&$p){$D=0;if($_POST["up"]){$je=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$je,0,array($o));break;}if(isset($o["field"]))$je=$D;$D++;}}elseif($_POST["down"]){$ed=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$ed){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($ed));break;}if(key($_POST["down"])==$y)$ed=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($kd,$fg,$e,$gf){if(!$fg)return
true;if($fg==array("ALL PRIVILEGES","GRANT OPTION"))return($kd=="GRANT"?queries("$kd ALL PRIVILEGES$gf WITH GRANT OPTION"):queries("$kd ALL PRIVILEGES$gf")&&queries("$kd GRANT OPTION$gf"));return
queries("$kd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$fg).$e).$gf);}function
drop_create($fc,$i,$gc,$Ph,$ic,$A,$He,$Fe,$Ge,$df,$Se){if($_POST["drop"])query_redirect($fc,$A,$He);elseif($df=="")query_redirect($i,$A,$Ge);elseif($df!=$Se){$Gb=queries($i);queries_redirect($A,$Fe,$Gb&&queries($fc));if($Gb)queries($gc);}else
queries_redirect($A,$Fe,queries($Ph)&&queries($ic)&&queries($fc)&&queries($i));}function
create_trigger($gf,$J){global$x;$Uh=" $J[Timing] $J[Event]".($J["Event"]=="UPDATE OF"?" ".idf_escape($J["Of"]):"");return"CREATE TRIGGER ".idf_escape($J["Trigger"]).($x=="mssql"?$gf.$Uh:$Uh.$gf).rtrim(" $J[Type]\n$J[Statement]",";").";";}function
create_routine($Lg,$J){global$Ld;$N=array();$p=(array)$J["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$N[]=(preg_match("~^($Ld)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $Lg ".idf_escape(trim($J["name"]))." (".implode(", ",$N).")".(isset($_GET["function"])?" RETURNS".process_type($J["returns"],"CHARACTER SET"):"").($J["language"]?" LANGUAGE $J[language]":"").rtrim("\n$J[definition]",";").";";}function
remove_definer($G){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$G);}function
format_foreign_key($q){global$hf;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($hf)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($hf)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Tc,$Zh){$I=pack("a100a8a8a8a12a12",$Tc,644,0,0,decoct($Zh->size),decoct(time()));$hb=8*32;for($s=0;$s<strlen($I);$s++)$hb+=ord($I[$s]);$I.=sprintf("%06o",$hb)."\0 ";echo$I,str_repeat("\0",512-strlen($I));$Zh->send();echo
str_repeat("\0",511-($Zh->size+511)%512);}function
ini_bytes($Kd){$X=ini_get($Kd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Pf){global$x,$g;$Bi=array('sql'=>"https://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"https://msdn.microsoft.com/library/",'oracle'=>"https://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Pf[$x]?"<a href='$Bi[$x]$Pf[$x]'".target_blank()."><sup>?</sup></a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$I=0;foreach(table_status()as$R)$I+=$R["Data_length"]+$R["Index_length"];return
format_number($I);}function
set_utf8mb4($i){global$g;static$N=false;if(!$N&&preg_match('~\butf8mb4~i',$i)){$N=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$ci,$n,$ec;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(105),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(106),drop_databases($_POST["db"]));page_header(lang(107),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(108),'privileges'=>lang(68),'processlist'=>lang(109),'variables'=>lang(110),'status'=>lang(111),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(112,$ec[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(113,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$Sg=support("scheme");$qb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),"<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(114)."</a>"."<td>".lang(115)."<td>".lang(116)."<td>".lang(117)." - <a href='".h(ME)."dbsize=1'>".lang(118)."</a>".script("qsl('a').onclick = partial(ajaxSetHtml, '".js_escape(ME)."script=connect');","")."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$S){$Kg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$Kg' id='$m'>".h($m)."</a>";$pb=nbsp(db_collation($m,$qb));echo"<td>".(support("database")?"<a href='$Kg".($Sg?"&amp;ns=":"")."&amp;database=' title='".lang(64)."'>$pb</a>":$pb),"<td align='right'><a href='$Kg&amp;schema=' id='tables-".h($m)."' title='".lang(67)."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(119)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''>".script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^db/)); };")."<input type='submit' name='drop' value='".lang(120)."'>".confirm()."\n"."</div></fieldset>\n":""),script("tableCheck();"),"<input type='hidden' name='token' value='$ci'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(73).": ".h($_GET["ns"]),lang(121),true);page_footer("ns");exit;}}$hf="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($Ab){$this->size+=strlen($Ab);fwrite($this->handler,$Ab);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$wc="'(?:''|[^'\\\\]|\\\\.)*'";$Ld="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$L=array(idf_escape($_GET["field"]));$H=$dc->select($a,$L,array(where($_GET,$p)),$L);$J=($H?$H->fetch_row():array());echo$J[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$R=table_status1($a,true);page_header(($p&&is_view($R)?$R['Engine']=='materialized view'?lang(122):lang(123):lang(124)).": ".h($a),$n);$b->selectLinks($R);$vb=$R["Comment"];if($vb!="")echo"<p class='nowrap'>".lang(47).": ".h($vb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".lang(125)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(126)."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".lang(93)."</h3>\n";$cd=foreign_keys($a);if($cd){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(127)."<td>".lang(128)."<td>".lang(96)."<td>".lang(95)."<td>&nbsp;</thead>\n";foreach($cd
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(129).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(130)."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(131)."</h3>\n";$oi=triggers($a);if($oi){echo"<table cellspacing='0'>\n";foreach($oi
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(129)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(132)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(67),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Fh=array();$Gh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$xe,PREG_SET_ORDER);foreach($xe
as$s=>$B){$Fh[$B[1]]=array($B[2],$B[3]);$Gh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$di=0;$Ra=-1;$Rg=array();$xg=array();$ne=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$Uf=0;$Rg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$o){$Uf+=1.25;$o["pos"]=$Uf;$Rg[$Q]["fields"][$C]=$o;}$Rg[$Q]["pos"]=($Fh[$Q]?$Fh[$Q]:array($di,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$le=$Ra;if($Fh[$Q][1]||$Fh[$X["table"]][1])$le=min(floatval($Fh[$Q][1]),floatval($Fh[$X["table"]][1]))-1;else$Ra-=.1;while($ne[(string)$le])$le-=.0001;$Rg[$Q]["references"][$X["table"]][(string)$le]=array($X["source"],$X["target"]);$xg[$X["table"]][$Q][(string)$le]=$X["target"];$ne[(string)$le]=true;}}$di=max($di,$Rg[$Q]["pos"][0]+2.5+$Uf);}echo'<div id="schema" style="height: ',$di,'em;">
<script',nonce(),'>
qs(\'#schema\').onselectstart = function () { return false; };
var tablePos = {',implode(",",$Gh)."\n",'};
var em = qs(\'#schema\').offsetHeight / ',$di,';
document.onmousemove = schemaMousemove;
document.onmouseup = partialArg(schemaMouseup, \'',js_escape(DB),'\');
</script>
';foreach($Rg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>",script("qsl('div').onmousedown = schemaMousedown;");foreach($Q["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Mh=>$yg){foreach($yg
as$le=>$ug){$me=$le-$Fh[$C][1];$s=0;foreach($ug[0]as$lh)echo"\n<div class='references' title='".h($Mh)."' id='refs$le-".($s++)."' style='left: $me"."em; top: ".$Q["fields"][$lh]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$me)."em;'></div></div>";}}foreach((array)$xg[$C]as$Mh=>$yg){foreach($yg
as$le=>$e){$me=$le-$Fh[$C][1];$s=0;foreach($e
as$Lh)echo"\n<div class='references' title='".h($Mh)."' id='refd$le-".($s++)."' style='left: $me"."em; top: ".$Q["fields"][$Lh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME)."?file=arrow.gif) no-repeat right center;&version=4.5.0")."'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$me)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Rg
as$C=>$Q){foreach((array)$Q["references"]as$Mh=>$yg){foreach($yg
as$le=>$ug){$Le=$di;$Ae=-10;foreach($ug[0]as$y=>$lh){$Vf=$Q["pos"][0]+$Q["fields"][$lh]["pos"];$Wf=$Rg[$Mh]["pos"][0]+$Rg[$Mh]["fields"][$ug[1][$y]]["pos"];$Le=min($Le,$Vf,$Wf);$Ae=max($Ae,$Vf,$Wf);}echo"<div class='references' id='refl$le' style='left: $le"."em; top: $Le"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Ae-$Le)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(133),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Db="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Db.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Db,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Ic=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$Td=preg_match('~sql~',$_POST["format"]);if($Td){echo"-- Adminer $ia ".$ec[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$xh=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Td&&preg_match('~CREATE~',$xh)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($xh=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Td){if($xh)echo
use_sql($m).";\n\n";$Af="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Lg){foreach(get_rows("SHOW $Lg STATUS WHERE Db = ".q($m),null,"-- ")as$J){$i=remove_definer($g->result("SHOW CREATE $Lg ".idf_escape($J["Name"]),2));set_utf8mb4($i);$Af.=($xh!='DROP+CREATE'?"DROP $Lg IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$J){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($J["Name"]),3));set_utf8mb4($i);$Af.=($xh!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$i;;\n\n";}}if($Af)echo"DELIMITER ;;\n\n$Af"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Ni=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Lb=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Lb){if($Ic=="tar"){$Zh=new
TmpFile;ob_start(array($Zh,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Ni[]=$C;elseif($Lb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Td&&$_POST["triggers"]&&$Q&&($oi=trigger_sql($C)))echo"\nDELIMITER ;;\n$oi\nDELIMITER ;\n";if($Ic=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$Zh);}elseif($Td)echo"\n";}}foreach($Ni
as$Mi)$b->dumpTable($Mi,$_POST["table_style"],1);if($Ic=="tar")echo
pack("x512");}}}if($Td)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(70),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Pb=array('','USE','DROP+CREATE','CREATE');$Hh=array('','DROP+CREATE','CREATE');$Mb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Mb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$J);if(!$J)$J=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($J["events"])){$J["routines"]=$J["events"]=($_GET["dump"]=="");$J["triggers"]=$J["table_style"];}echo"<tr><th>".lang(134)."<td>".html_select("output",$b->dumpOutput(),$J["output"],0)."\n";echo"<tr><th>".lang(135)."<td>".html_select("format",$b->dumpFormat(),$J["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Pb,$J["db_style"]).(support("routine")?checkbox("routines",1,$J["routines"],lang(136)):"").(support("event")?checkbox("events",1,$J["events"],lang(137)):"")),"<tr><th>".lang(116)."<td>".html_select('table_style',$Hh,$J["table_style"]).checkbox("auto_increment",1,$J["auto_increment"],lang(48)).(support("trigger")?checkbox("triggers",1,$J["triggers"],lang(131)):""),"<tr><th>".lang(138)."<td>".html_select('data_style',$Mb,$J["data_style"]),'</table>
<p><input type="submit" value="',lang(70),'">
<input type="hidden" name="token" value="',$ci,'">

<table cellspacing="0">
';$Zf=array();if(DB!=""){$fb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$fb>".lang(116)."</label>".script("qs('#check-tables').onclick = partial(formCheck, /^tables\\[/);",""),"<th style='text-align: right;'><label class='block'>".lang(138)."<input type='checkbox' id='check-data'$fb></label>".script("qs('#check-data').onclick = partial(formCheck, /^data\\[/);",""),"</thead>\n";$Ni="";$Ih=tables_list();foreach($Ih
as$C=>$T){$Yf=preg_replace('~_.*~','',$C);$fb=($a==""||$a==(substr($a,-1)=="%"?"$Yf%":$C));$cg="<tr><td>".checkbox("tables[]",$C,$fb,$C,"checkboxClick.call(this, event); formUncheck('check-tables');","block");if($T!==null&&!preg_match('~table~i',$T))$Ni.="$cg\n";else
echo"$cg<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$fb,"","checkboxClick.call(this, event); formUncheck('check-data');")."</label>\n";$Zf[$Yf]++;}echo$Ni;if($Ih)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"").">".lang(35)."</label>",script("qs('#check-databases').onclick = partial(formCheck, /^databases\\[/);",""),"</thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Yf=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Yf%",$m,"formUncheck('check-databases');","block")."\n";$Zf[$Yf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Vc=true;foreach($Zf
as$y=>$X){if($y!=""&&$X>1){echo($Vc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Vc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(68));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(139)."</a>";$H=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$kd=$H;if(!$H)$H=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($kd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($J=$H->fetch_assoc())echo'<tr'.odd().'><td>'.h($J["User"])."<td>".h($J["Host"]).'<td><a href="'.h(ME.'user='.urlencode($J["User"]).'&host='.urlencode($J["Host"])).'">'.lang(10)."</a>\n";if(!$kd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$vd=&get_session("queries");$ud=&$vd[DB];if(!$n&&$_POST["clear"]){$ud=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(69):lang(61)),$n);if(!$n&&$_POST){$gd=false;if(!isset($_GET["import"]))$G=$_POST["query"];elseif($_POST["webfile"]){$qh=$b->importServerPath();$gd=@fopen((file_exists($qh)?$qh:"compress.zlib://$qh.gz"),"rb");$G=($gd?fread($gd,1e6):false);}else$G=get_file("sql_file",true);if(is_string($G)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($G)+memory_get_usage()+8e6));if($G!=""&&strlen($G)<1e6){$lg=$G.(preg_match("~;[ \t\r\n]*\$~",$G)?"":";");if(!$ud||reset(end($ud))!=$lg){restart_session();$ud[]=array($lg,time());set_session("queries",$vd);stop_session();}}$mh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Ub=";";$D=0;$tc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$ub=0;$yc=array();$Gf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$ei=microtime(true);parse_str($_COOKIE["adminer_export"],$ya);$kc=$b->dumpFormat();unset($kc["sql"]);while($G!=""){if(!$D&&preg_match("~^$mh*+DELIMITER\\s+(\\S+)~i",$G,$B)){$Ub=$B[1];$G=substr($G,strlen($B[0]));}else{preg_match('('.preg_quote($Ub)."\\s*|$Gf)",$G,$B,PREG_OFFSET_CAPTURE,$D);list($ed,$Uf)=$B[0];if(!$ed&&$gd&&!feof($gd))$G.=fread($gd,1e5);else{if(!$ed&&rtrim($G)=="")break;$D=$Uf+strlen($ed);if($ed&&rtrim($ed)!=$Ub){while(preg_match('('.($ed=='/*'?'\\*/':($ed=='['?']':(preg_match('~^-- |^#~',$ed)?"\n":preg_quote($ed)."|\\\\."))).'|$)s',$G,$B,PREG_OFFSET_CAPTURE,$D)){$Pg=$B[0][0];if(!$Pg&&$gd&&!feof($gd))$G.=fread($gd,1e5);else{$D=$B[0][1]+strlen($Pg);if($Pg[0]!="\\")break;}}}else{$tc=false;$lg=substr($G,0,$Uf);$ub++;$cg="<pre id='sql-$ub'><code class='jush-$x'>".$b->sqlCommandQuery($lg)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$mh*+ATTACH\\b~i",$lg,$B)){echo$cg,"<p class='error'>".lang(140)."\n";$yc[]=" <a href='#sql-$ub'>$ub</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$cg;ob_flush();flush();}$sh=microtime(true);if($g->multi_query($lg)&&is_object($h)&&preg_match("~^$mh*+USE\\b~i",$lg))$h->query($lg);do{$H=$g->store_result();$Sh=" <span class='time'>(".format_time($sh).")</span>".(strlen($lg)<1000?" <a href='".h(ME)."sql=".urlencode(trim($lg))."'>".lang(10)."</a>":"");if($g->error){echo($_POST["only_errors"]?$cg:""),"<p class='error'>".lang(141).($g->errno?" ($g->errno)":"").": ".error()."\n";$yc[]=" <a href='#sql-$ub'>$ub</a>";if($_POST["error_stops"])break
2;}elseif(is_object($H)){$z=$_POST["limit"];$uf=select($H,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Xe=$H->num_rows;echo"<p>".($Xe?($z&&$Xe>$z?lang(142,$z):"").lang(143,$Xe):""),$Sh;$t="export-$ub";$Gc=", <a href='#$t'>".lang(70)."</a>".script("qsl('a').onclick = partial(toggle, '$t');","")."<span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$ya["output"])." ".html_select("format",$kc,$ya["format"])."<input type='hidden' name='query' value='".h($lg)."'>"." <input type='submit' name='export' value='".lang(70)."'><input type='hidden' name='token' value='$ci'></span>\n";if($h&&preg_match("~^($mh|\\()*+SELECT\\b~i",$lg)&&($Fc=explain($h,$lg))){$t="explain-$ub";echo", <a href='#$t'>EXPLAIN</a>".script("qsl('a').onclick = partial(toggle, '$t');","").$Gc,"<div id='$t' class='hidden'>\n";select($Fc,$h,$uf);echo"</div>\n";}else
echo$Gc;echo"</form>\n";}}else{if(preg_match("~^$mh*+(CREATE|DROP|ALTER)$mh++(DATABASE|SCHEMA)\\b~i",$lg)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(144,$g->affected_rows)."$Sh\n";}$sh=microtime(true);}while($g->next_result());}$G=substr($G,$D);$D=0;}}}}if($tc)echo"<p class='message'>".lang(145)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(146,$ub-count($yc))," <span class='time'>(".format_time($ei).")</span>\n";}elseif($yc&&$ub>1)echo"<p class='error'>".lang(141).": ".implode("",$yc)."\n";}else
echo"<p class='error'>".upload_error($G)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Cc="<input type='submit' value='".lang(147)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$lg=$_GET["sql"];if($_POST)$lg=$_POST["query"];elseif($_GET["history"]=="all")$lg=$ud;elseif($_GET["history"]!="")$lg=$ud[$_GET["history"]][0];echo"<p>";textarea("query",$lg,20);echo($_POST?"":script("qs('textarea').focus();")),"<p>$Cc\n",lang(148).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(149)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Cc":lang(150)),"</div></fieldset>\n","<fieldset><legend>".lang(151)."</legend><div>",lang(152,"<code>".h($b->importServerPath()).(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(153).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(154))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(155))."\n","<input type='hidden' name='token' value='$ci'>\n";if(!isset($_GET["import"])&&$ud){print_fieldset("history",lang(156),$_GET["history"]!="");for($X=end($ud);$X;$X=prev($ud)){$y=key($ud);list($lg,$Sh,$oc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$Sh)."'>".@date("H:i:s",$Sh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$lg)))),80,"</code>").($oc?" <span class='time'>($oc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(157)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(158)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$yi=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$yi?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($yi?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$ti=unique_array($_GET["where"],$w);$og="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(159),$dc->delete($a,$og,!$ti));else{$N=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$N[idf_escape($C)]=$X;}if($yi){if(!$N)redirect($A);queries_redirect($A,lang(160),$dc->update($a,$N,$og,!$ti));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$H=$dc->insert($a,$N);$ke=($H?last_id():0);queries_redirect($A,lang(161,($ke?" $ke":"")),$H);}}}$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($Z){$L=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Ha=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ha="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ha="1*".idf_escape($C);$L[]=($Ha?"$Ha AS ":"").idf_escape($C);}}$J=array();if(!support("table"))$L=array("*");if($L){$H=$dc->select($a,$L,array($Z),$L,array(),(isset($_GET["select"])?2:1));if(!$H)$n=error();else{$J=$H->fetch_assoc();if(!$J)$J=false;}if(isset($_GET["select"])&&(!$J||$H->fetch_assoc()))$J=null;}}if(!support("table")&&!$p){if(!$Z){$H=$dc->select($a,array("*"),$Z,array("*"));$J=($H?$H->fetch_assoc():false);if(!$J)$J=array($dc->primary=>"");}if($J){foreach($J
as$y=>$X){if(!$Z)$J[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$dc->primary),"auto_increment"=>($y==$dc->primary));}}}edit_form($a,$p,$J,$yi);}elseif(isset($_GET["create"])){$a=$_GET["create"];$If=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$If[$y]=$y;$wg=referencable_primary($a);$cd=array();foreach($wg
as$Dh=>$o)$cd[str_replace("`","``",$Dh)."`".str_replace("`","``",$o["field"])]=$Dh;$xf=array();$R=array();if($a!=""){$xf=fields($a);$R=table_status($a);if(!$R)$n=lang(9);}$J=$_POST;$J["fields"]=(array)$J["fields"];if($J["auto_increment_col"])$J["fields"][$J["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($J["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(162),drop_tables(array($a)));else{$p=array();$Ea=array();$Ci=false;$ad=array();$wf=reset($xf);$Ba=" FIRST";foreach($J["fields"]as$y=>$o){$q=$cd[$o["type"]];$pi=($q!==null?$wg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$J["auto_increment_col"])$o["auto_increment"]=true;$hg=process_field($o,$pi);$Ea[]=array($o["orig"],$hg,$Ba);if($hg!=process_field($wf,$wf)){$p[]=array($o["orig"],$hg,$Ba);if($o["orig"]!=""||$Ba)$Ci=true;}if($q!==null)$ad[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$cd[$o["type"]],'source'=>array($o["field"]),'target'=>array($pi["field"]),'on_delete'=>$o["on_delete"],));$Ba=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Ci=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$wf=next($xf);if(!$wf)$Ba="";}}$Kf="";if($If[$J["partition_by"]]){$Lf=array();if($J["partition_by"]=='RANGE'||$J["partition_by"]=='LIST'){foreach(array_filter($J["partition_names"])as$y=>$X){$Y=$J["partition_values"][$y];$Lf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($J["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Kf.="\nPARTITION BY $J[partition_by]($J[partition])".($Lf?" (".implode(",",$Lf)."\n)":($J["partitions"]?" PARTITIONS ".(+$J["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$Kf.="\nREMOVE PARTITIONING";$Ee=lang(163);if($a==""){cookie("adminer_engine",$J["Engine"]);$Ee=lang(164);}$C=trim($J["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$Ee,alter_table($a,$C,($x=="sqlite"&&($Ci||$ad)?$Ea:$p),$ad,($J["Comment"]!=$R["Comment"]?$J["Comment"]:null),($J["Engine"]&&$J["Engine"]!=$R["Engine"]?$J["Engine"]:""),($J["Collation"]&&$J["Collation"]!=$R["Collation"]?$J["Collation"]:""),($J["Auto_increment"]!=""?number($J["Auto_increment"]):""),$Kf));}}page_header(($a!=""?lang(42):lang(71)),$n,array("table"=>$a),h($a));if(!$_POST){$J=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($U["int"])?"int":(isset($U["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$J=$R;$J["name"]=$a;$J["fields"]=array();if(!$_GET["auto_increment"])$J["Auto_increment"]="";foreach($xf
as$o){$o["has_default"]=isset($o["default"]);$J["fields"][]=$o;}if(support("partitioning")){$hd="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$H=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $hd ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($J["partition_by"],$J["partitions"],$J["partition"])=$H->fetch_row();$Lf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $hd AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Lf[""]="";$J["partition_names"]=array_keys($Lf);$J["partition_values"]=array_values($Lf);}}}$qb=collations();$vc=engines();foreach($vc
as$uc){if(!strcasecmp($uc,$J["Engine"])){$J["Engine"]=$uc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(165),': <input name="name" maxlength="64" value="',h($J["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST)echo
script("focus(qs('#form')['name']);");echo($vc?"<select name='Engine'>".optionlist(array(""=>"(".lang(166).")")+$vc,$J["Engine"])."</select>".on_help("getTarget(event).value",1).script("qsl('select').onchange = helpClose;"):""),' ',($qb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(94).")")+$qb,$J["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$wb=($_POST?$_POST["comments"]:$J["Comment"]!="");if(!$_POST&&!$wb){foreach($J["fields"]as$o){if($o["comment"]!=""){$wb=true;break;}}}edit_fields($J["fields"],$qb,"TABLE",$cd,$wb);echo'</table>
<p>
',lang(48),': <input type="number" name="Auto_increment" size="6" value="',h($J["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(167),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"])echo
script("editingHideDefaults();");echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly'".($wb?" checked":"").">".lang(47)."</label>".script("qsl('input').onclick = function () { columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus(); };").' <input name="Comment" id="Comment" value="'.h($J["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($wb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(120),'">',confirm(lang(168,$a));}if(support("partitioning")){$Jf=preg_match('~RANGE|LIST~',$J["partition_by"]);print_fieldset("partition",lang(169),$J["partition_by"]);echo'<p>
',"<select name='partition_by'>".optionlist(array(""=>"")+$If,$J["partition_by"])."</select>".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).script("qsl('select').onchange = partitionByChange;"),'(<input name="partition" value="',h($J["partition"]),'">)
',lang(170),': <input type="number" name="partitions" class="size',($Jf||!$J["partition_by"]?" hidden":""),'" value="',h($J["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Jf?"":" class='hidden'"),'>
<thead><tr><th>',lang(171),'<th>',lang(172),'</thead>
';foreach($J["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'" autocapitalize="off">',($y==count($J["partition_names"])-1?script("qsl('input').oninput = partitionNameChange;"):''),'<td><input name="partition_values[]" value="'.h($J["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Dd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);$ch=$g->server_info;$id=($ch>=5.6);$nh=($ch>=5.7);if(preg_match('~([\d.]+)-MariaDB~',$ch,$B)){$ch=$B[1];$id=(version_compare($ch,'10.0.5')>=0);$nh=(version_compare($ch,'10.2.2')>=0);}if(preg_match('~MyISAM|M?aria'.($id?'|InnoDB':'').'~i',$R["Engine"]))$Dd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($nh?'|InnoDB':'').'~i',$R["Engine"]))$Dd[]="SPATIAL";$w=indexes($a);$ag=array();if($x=="mongo"){$ag=$w["_id_"];unset($Dd[0]);unset($w["_id_"]);}$J=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($J["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$Dd)){$e=array();$qe=array();$Wb=array();$N=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$pe=$v["lengths"][$y];$Vb=$v["descs"][$y];$N[]=idf_escape($d).($pe?"(".(+$pe).")":"").($Vb?" DESC":"");$e[]=$d;$qe[]=($pe?$pe:null);$Wb[]=$Vb;}}if($e){$Dc=$w[$C];if($Dc){ksort($Dc["columns"]);ksort($Dc["lengths"]);ksort($Dc["descs"]);if($v["type"]==$Dc["type"]&&array_values($Dc["columns"])===$e&&(!$Dc["lengths"]||array_values($Dc["lengths"])===$qe)&&array_values($Dc["descs"])===$Wb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$N);}}}foreach($w
as$C=>$Dc)$c[]=array($Dc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(173),alter_indexes($a,$c));}page_header(lang(125),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($J["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$J["indexes"][$y]["columns"][]="";}$v=end($J["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$J["indexes"][]=array("columns"=>array(1=>""));}if(!$J){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$J["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(174),'<th><input type="submit" class="wayoff">',lang(175),'<th id="label-name">',lang(176);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME) . "?file=plus.gif&version=4.5.0") . "' alt='+' title='<?php echo
lang(101),'\'></noscript>&nbsp;
</thead>
';if($ag){echo"<tr><td>PRIMARY<td>";foreach($ag["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(56)."</label> ";}echo"<td><td>\n";}$Xd=1;foreach($J["indexes"]as$v){if(!$_POST["drop_col"]||$Xd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Xd][type]",array(-1=>"")+$Dd,$v["type"],($Xd==count($J["indexes"])?"indexesAddRow.call(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Xd][columns][$s]' title='".lang(45)."'",($p?array_combine($p,$p):$p),$d,"partial(".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn").", '".js_escape($x=="sql"?"":$_GET["indexes"]."_")."')"),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Xd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(99)."'>":""),($x!="sql"?checkbox("indexes[$Xd][descs][$s]",1,$v["descs"][$y],lang(56)):"")," </span>";$s++;}echo"<td><input name='indexes[$Xd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Xd]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.5.0")."' alt='x' title='".lang(104)."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'indexes\$1[type]');");}$Xd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["database"])){$J=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($J["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(177),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(178),rename_database($C,$J["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$yh=true;$je="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$J["collation"]))$yh=false;$je=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($je),lang(179),$yh);}}else{if(!$J["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$J["collation"])?" COLLATE $J[collation]":""),substr(ME,0,-1),lang(180));}}page_header(DB!=""?lang(64):lang(108),$n,array(),h(DB));$qb=collations();$C=DB;if($_POST)$C=$J["name"];elseif(DB!="")$J["collation"]=db_collation(DB,$qb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$kd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$kd,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($qb?html_select("collation",array(""=>"(".lang(94).")")+$qb,$J["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):""),script("focus(qs('#name'));"),'<input type="submit" value="',lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(120)."'>".confirm(lang(168,DB))."\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.5.0")."' alt='+' title='".lang(101)."'>\n";echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["scheme"])){$J=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(181));else{$C=trim($J["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(182));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(183));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(65):lang(66),$n);if(!$J)$J["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($J["name"]),'" autocapitalize="off">
',script("focus(qs('#name'));"),'<input type="submit" value="',lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(120)."'>".confirm(lang(168,$_GET["ns"]))."\n";echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(184).": ".h($da),$n);$Lg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Bd=array();$Af=array();foreach($Lg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$Af[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$Bd[]=$s;}if(!$n&&$_POST){$ab=array();foreach($Lg["fields"]as$y=>$o){if(in_array($y,$Bd)){$X=process_input($o);if($X===false)$X="''";if(isset($Af[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$ab[]=(isset($Af[$y])?"@".idf_escape($o["field"]):$X);}$G=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$ab).")";echo"<p><code class='jush-$x'>".h($G)."</code> <a href='".h(ME)."sql=".urlencode($G)."'>".lang(10)."</a>\n";if(!$g->multi_query($G))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$H=$g->store_result();if(is_object($H))select($H,$h);else
echo"<p class='message'>".lang(185,$g->affected_rows)."\n";}while($g->next_result());if($Af)select($g->query("SELECT ".implode(", ",$Af)));}}echo'
<form action="" method="post">
';if($Bd){echo"<table cellspacing='0'>\n";foreach($Bd
as$y){$o=$Lg["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(184),'">
<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$J=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$Ee=($_POST["drop"]?lang(186):($C!=""?lang(187):lang(188)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$J["source"]=array_filter($J["source"],'strlen');ksort($J["source"]);$Lh=array();foreach($J["source"]as$y=>$X)$Lh[$y]=$J["target"][$y];$J["target"]=$Lh;}if($x=="sqlite")queries_redirect($A,$Ee,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($J)))));else{$c="ALTER TABLE ".table($a);$fc="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$fc,$A,$Ee);else{query_redirect($c.($C!=""?"$fc,":"")."\nADD".format_foreign_key($J),$A,$Ee);$n=lang(189)."<br>$n";}}}page_header(lang(190),$n,array("table"=>$a),h($a));if($_POST){ksort($J["source"]);if($_POST["add"])$J["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$J["target"]=array();}elseif($C!=""){$cd=foreign_keys($a);$J=$cd[$C];$J["source"][]="";}else{$J["table"]=$a;$J["source"]=array("");}$lh=array_keys(fields($a));$Lh=($a===$J["table"]?$lh:array_keys(fields($J["table"])));$vg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($J["db"]==""&&$J["ns"]==""){echo
lang(191),':
',html_select("table",$vg,$J["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(192),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(127),'<th id="label-target">',lang(128),'</thead>
';$Xd=0;foreach($J["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$lh,$X,($Xd==count($J["source"])-1?"foreignAddRow.call(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$Lh,$J["target"][$y],1,"label-target");$Xd++;}echo'</table>
<p>
',lang(96),': ',html_select("on_delete",array(-1=>"")+explode("|",$hf),$J["on_delete"]),' ',lang(95),': ',html_select("on_update",array(-1=>"")+explode("|",$hf),$J["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(193),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(120),'">',confirm(lang(168,$C));}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$J=$_POST;$yf="VIEW";if($x=="pgsql"&&$a!=""){$O=table_status($a);$yf=strtoupper($O["Engine"]);}if($_POST&&!$n){$C=trim($J["name"]);$Ha=" AS\n$J[select]";$A=ME."table=".urlencode($C);$Ee=lang(194);$T=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$T=="VIEW"&&$yf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ha,$A,$Ee);else{$Nh=$C."_adminer_".uniqid();drop_create("DROP $yf ".table($a),"CREATE $T ".table($C).$Ha,"DROP $T ".table($C),"CREATE $T ".table($Nh).$Ha,"DROP $T ".table($Nh),($_POST["drop"]?substr(ME,0,-1):$A),lang(195),$Ee,lang(196),$a,$C);}}if(!$_POST&&$a!=""){$J=view($a);$J["name"]=$a;$J["materialized"]=($yf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(197)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(176),': <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$J["materialized"],lang(122)):""),'<p>';textarea("select",$J["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(120),'">',confirm(lang(168,$a));}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Od=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$uh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$J=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(198));elseif(in_array($J["INTERVAL_FIELD"],$Od)&&isset($uh[$J["STATUS"]])){$Qg="\nON SCHEDULE ".($J["INTERVAL_VALUE"]?"EVERY ".q($J["INTERVAL_VALUE"])." $J[INTERVAL_FIELD]".($J["STARTS"]?" STARTS ".q($J["STARTS"]):"").($J["ENDS"]?" ENDS ".q($J["ENDS"]):""):"AT ".q($J["STARTS"]))." ON COMPLETION".($J["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(199):lang(200)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Qg.($aa!=$J["EVENT_NAME"]?"\nRENAME TO ".idf_escape($J["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($J["EVENT_NAME"]).$Qg)."\n".$uh[$J["STATUS"]]." COMMENT ".q($J["EVENT_COMMENT"]).rtrim(" DO\n$J[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(201).": ".h($aa):lang(202)),$n);if(!$J&&$aa!=""){$K=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$J=reset($K);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(176),'<td><input name="EVENT_NAME" value="',h($J["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(203),'<td><input name="STARTS" value="',h("$J[EXECUTE_AT]$J[STARTS]"),'">
<tr><th title="datetime">',lang(204),'<td><input name="ENDS" value="',h($J["ENDS"]),'">
<tr><th>',lang(205),'<td><input type="number" name="INTERVAL_VALUE" value="',h($J["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Od,$J["INTERVAL_FIELD"]),'<tr><th>',lang(111),'<td>',html_select("STATUS",$uh,$J["STATUS"]),'<tr><th>',lang(47),'<td><input name="EVENT_COMMENT" value="',h($J["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$J["ON_COMPLETION"]=="PRESERVE",lang(206)),'</table>
<p>';textarea("EVENT_DEFINITION",$J["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(120),'">',confirm(lang(168,$aa));}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Lg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$J=$_POST;$J["fields"]=(array)$J["fields"];if($_POST&&!process_fields($J["fields"])&&!$n){$Nh="$J[name]_adminer_".uniqid();drop_create("DROP $Lg ".idf_escape($da),create_routine($Lg,$J),"DROP $Lg ".idf_escape($J["name"]),create_routine($Lg,array("name"=>$Nh)+$J),"DROP $Lg ".idf_escape($Nh),substr(ME,0,-1),lang(207),lang(208),lang(209),$da,$J["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(210):lang(211)).": ".h($da):(isset($_GET["function"])?lang(212):lang(213))),$n);if(!$_POST&&$da!=""){$J=routine($da,$Lg);$J["name"]=$da;}$qb=get_vals("SHOW CHARACTER SET");sort($qb);$Mg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(176),': <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
',($Mg?lang(19).": ".html_select("language",$Mg,$J["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($J["fields"],$qb,$Lg);if(isset($_GET["function"])){echo"<tr><td>".lang(214);edit_type("returns",$J["returns"],$qb);}echo'</table>
<p>';textarea("definition",$J["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(120),'">',confirm(lang(168,$da));}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$J=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($J["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(215));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(216));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(217));else
redirect($_);}page_header($fa!=""?lang(218).": ".h($fa):lang(219),$n);if(!$J)$J["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($J["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(120)."'>".confirm(lang(168,$fa))."\n";echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$J=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(220));else
query_redirect("CREATE TYPE ".idf_escape(trim($J["name"]))." $J[as]",$_,lang(221));}page_header($ga!=""?lang(222).": ".h($ga):lang(223),$n);if(!$J)$J["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(120)."'>".confirm(lang(168,$ga))."\n";else{echo"<input name='name' value='".h($J['name'])."' autocapitalize='off'>\n";textarea("as",$J["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$ni=trigger_options();$J=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$ni["Timing"])&&in_array($_POST["Event"],$ni["Event"])&&in_array($_POST["Type"],$ni["Type"])){$gf=" ON ".table($a);$fc="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$gf:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($fc,$A,lang(224));else{if($C!="")queries($fc);queries_redirect($A,($C!=""?lang(225):lang(226)),queries(create_trigger($gf,$_POST)));if($C!="")queries(create_trigger($gf,$J+array("Type"=>reset($ni["Type"]))));}}$J=$_POST;}page_header(($C!=""?lang(227).": ".h($C):lang(228)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(229),'<td>',html_select("Timing",$ni["Timing"],$J["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(230),'<td>',html_select("Event",$ni["Event"],$J["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$ni["Event"])?" <input name='Of' value='".h($J["Of"])."' class='hidden'>":""),'<tr><th>',lang(46),'<td>',html_select("Type",$ni["Type"],$J["Type"]),'</table>
<p>',lang(176),': <input name="Trigger" value="',h($J["Trigger"]),'" maxlength="64" autocapitalize="off">
',script("qs('#form')['Timing'].onchange();"),'<p>';textarea("Statement",$J["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(120),'">',confirm(lang(168,$C));}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$fg=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$J){foreach(explode(",",($J["Privilege"]=="Grant option"?"":$J["Context"]))as$Bb)$fg[$Bb][$J["Privilege"]]=$J["Comment"];}$fg["Server Admin"]+=$fg["File access on server"];$fg["Databases"]["Create routine"]=$fg["Procedures"]["Create routine"];unset($fg["Procedures"]["Create routine"]);$fg["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$fg["Columns"][$X]=$fg["Tables"][$X];unset($fg["Server Admin"]["Usage"]);foreach($fg["Tables"]as$y=>$X)unset($fg["Databases"][$y]);$Re=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Re[$X]=(array)$Re[$X]+(array)$_POST["grants"][$y];}$ld=array();$ef="";if(isset($_GET["host"])&&($H=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($J=$H->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$J[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$xe,PREG_SET_ORDER)){foreach($xe
as$X){if($X[1]!="USAGE")$ld["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$J[0]))$ld["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$J[0],$B))$ef=$B[1];}}if($_POST&&!$n){$ff=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $ff",ME."privileges=",lang(231));else{$Te=q($_POST["user"])."@".q($_POST["host"]);$Nf=$_POST["pass"];if($Nf!=''&&!$_POST["hashed"]){$Nf=$g->result("SELECT PASSWORD(".q($Nf).")");$n=!$Nf;}$Gb=false;if(!$n){if($ff!=$Te){$Gb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Te IDENTIFIED BY PASSWORD ".q($Nf));$n=!$Gb;}elseif($Nf!=$ef)queries("SET PASSWORD FOR $Te = ".q($Nf));}if(!$n){$Ig=array();foreach($Re
as$Ze=>$kd){if(isset($_GET["grant"]))$kd=array_filter($kd);$kd=array_keys($kd);if(isset($_GET["grant"]))$Ig=array_diff(array_keys(array_filter($Re[$Ze],'strlen')),$kd);elseif($ff==$Te){$cf=array_keys((array)$ld[$Ze]);$Ig=array_diff($cf,$kd);$kd=array_diff($kd,$cf);unset($ld[$Ze]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ze,$B)&&(!grant("REVOKE",$Ig,$B[2]," ON $B[1] FROM $Te")||!grant("GRANT",$kd,$B[2]," ON $B[1] TO $Te"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($ff!=$Te)queries("DROP USER $ff");elseif(!isset($_GET["grant"])){foreach($ld
as$Ze=>$Ig){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ze,$B))grant("REVOKE",array_keys($Ig),$B[2]," ON $B[1] FROM $Te");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(232):lang(233)),!$n);if($Gb)$g->query("DROP USER $Te");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(139)),$n,array("privileges"=>array('',lang(68))));if($_POST){$J=$_POST;$ld=$Re;}else{$J=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$J["pass"]=$ef;if($ef!="")$J["hashed"]=true;$ld[(DB==""||$ld?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($J["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($J["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($J["pass"]),'">
';if(!$J["hashed"])echo
script("typePassword(qs('#pass'));");echo
checkbox("hashed",1,$J["hashed"],lang(234),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(68).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($ld
as$Ze=>$kd){echo'<th>'.($Ze!="*.*"?"<input name='objects[$s]' value='".h($Ze)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(124),"Columns"=>lang(45),"Procedures"=>lang(235),)as$Bb=>$Vb){foreach((array)$fg[$Bb]as$eg=>$vb){echo"<tr".odd()."><td".($Vb?">$Vb<td":" colspan='2'").' lang="en" title="'.h($vb).'">'.h($eg);$s=0;foreach($ld
as$Ze=>$kd){$C="'grants[$s][".h(strtoupper($eg))."]'";$Y=$kd[strtoupper($eg)];if($Bb=="Server Admin"&&$Ze!=(isset($ld["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(236)."<option value='0'".($Y=="0"?" selected":"").">".lang(237)."</select>";else{echo"<td align='center'><label class='block'>","<input type='checkbox' name=$C value='1'".($Y?" checked":"").($eg=="All privileges"?" id='grants-$s-all'>":">".($eg=="Grant option"?"":script("qsl('input').onclick = function () { if (this.checked) formUncheck('grants-$s-all'); };"))),"</label>";}$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(120),'">',confirm(lang(168,"$ha@$_GET[host]"));}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$ee=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$ee++;}queries_redirect(ME."processlist=",lang(238,$ee),$ee||!$_POST["kill"]);}page_header(lang(109),$n);echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap checkable">
',script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});");$s=-1;foreach(process_list()as$s=>$J){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($J
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$J[$x=="sql"?"Id":"pid"],0):"");foreach($J
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$J["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($J["db"]!=""?"db=".urlencode($J["db"])."&":"")."sql=".urlencode($X)).'">'.lang(239).'</a>':nbsp($X));echo"\n";}echo'</table>
',script("tableCheck();"),'<p>
';if(support("kill")){echo($s+1)."/".lang(240,max_connections()),"<p><input type='submit' value='".lang(241)."'>\n";}echo'<input type="hidden" name="token" value="',$ci,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$w=indexes($a);$p=fields($a);$cd=column_foreign_keys($a);$bf="";if($R["Oid"]){$bf=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($bf));}parse_str($_COOKIE["adminer_import"],$za);$Jg=array();$e=array();$Rh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$Rh=$b->selectLengthProcess();}$Jg+=$o["privileges"];}list($L,$md)=$b->selectColumnsProcess($e,$w);$Sd=count($md)<count($L);$Z=$b->selectSearchProcess($p,$w);$rf=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$hd=($L?implode(", ",$L):"*".($bf?", $bf":"")).convert_fields($e,$p,$L)."\nFROM ".table($a);$nd=($md&&$Sd?"\nGROUP BY ".implode(", ",$md):"").($rf?"\nORDER BY ".implode(", ",$rf):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ui=>$J){$Ha=convert_field($p[key($J)]);$L=array($Ha?$Ha:idf_escape(key($J)));$Z[]=where_check($ui,$p);$I=$dc->select($a,$L,$Z,$L);if($I)echo
reset($I->fetch_row());}exit;}if($_POST&&!$n){$Ui=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$gb=array();foreach($_POST["check"]as$db)$gb[]=where_check($db,$p);$Ui[]="((".implode(") OR (",$gb)."))";}$Ui=($Ui?"\nWHERE ".implode(" AND ",$Ui):"");$ag=$wi=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$ag=array_flip($v["columns"]);$wi=($L?$ag:array());break;}}foreach((array)$wi
as$y=>$X){if(in_array(idf_escape($y),$L))unset($wi[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$wi===array())$G="SELECT $hd$Ui$nd";else{$si=array();foreach($_POST["check"]as$X)$si[]="(SELECT".limit($hd,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$nd,1).")";$G=implode(" UNION ALL ",$si);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($Z,$cd)){if($_POST["save"]||$_POST["delete"]){$H=true;$_a=0;$N=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$N[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$N){if($_POST["clone"])$G="INTO ".table($a)." (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a);if($_POST["all"]||($wi===array()&&is_array($_POST["check"]))||$Sd){$H=($_POST["delete"]?$dc->delete($a,$Ui):($_POST["clone"]?queries("INSERT $G$Ui"):$dc->update($a,$N,$Ui)));$_a=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Qi="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$H=($_POST["delete"]?$dc->delete($a,$Qi,1):($_POST["clone"]?queries("INSERT".limit1($G,$Qi)):$dc->update($a,$N,$Qi)));if(!$H)break;$_a+=$g->affected_rows;}}}$Ee=lang(242,$_a);if($_POST["clone"]&&$H&&$_a==1){$ke=last_id();if($ke)$Ee=lang(161," $ke");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Ee,$H);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(243);else{$H=true;$_a=0;foreach($_POST["val"]as$ui=>$J){$N=array();foreach($J
as$y=>$X){$y=bracket_escape($y,1);$N[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$H=$dc->update($a,$N," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($ui,$p),!($Sd||$wi===array())," ");if(!$H)break;$_a+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(242,$_a),$H);}}elseif(!is_string($Sc=get_file("csv_file",true)))$n=upload_error($Sc);elseif(!preg_match('~~u',$Sc))$n=lang(244);else{cookie("adminer_import","output=".urlencode($za["output"])."&format=".urlencode($_POST["separator"]));$H=true;$sb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Sc,$xe);$_a=count($xe[0]);$dc->begin();$Zg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$K=array();foreach($xe[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Zg]*)$Zg~",$X.$Zg,$ye);if(!$y&&!array_diff($ye[1],$sb)){$sb=$ye[1];$_a--;}else{$N=array();foreach($ye[1]as$s=>$nb)$N[idf_escape($sb[$s])]=($nb==""&&$p[$sb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$nb))));$K[]=$N;}}$H=(!$K||$dc->insertUpdate($a,$K,$ag));if($H)$H=$dc->commit();queries_redirect(remove_from_uri("page"),lang(245,$_a),$H);$dc->rollback();}}}$Dh=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(50).": $Dh",$n);$N=null;if(isset($Jg["insert"])||!support("table")){$N="";foreach((array)$_GET["where"]as$X){if($cd[$X["col"]]&&count($cd[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$N.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$N);if(!$e&&support("table"))echo"<p class='error'>".lang(246).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($rf,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($Rh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$fd=$g->result(count_rows($a,$Z,$Sd,$md));$E=floor(max(0,$fd-1)/$z);}$Vg=$L;if(!$Vg){$Vg[]="*";if($bf)$Vg[]=$bf;}$Cb=convert_fields($e,$p,$L);if($Cb)$Vg[]=substr($Cb,2);$H=$dc->select($a,$Vg,$Z,$md,$rf,$z,$E,true);if(!$H)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$H->seek($z*$E);$sc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($E&&$x=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last"&&$z!=""&&$md&&$Sd&&$x=="sql")$fd=$g->result(" SELECT FOUND_ROWS()");if(!$K)echo"<p class='message'>".lang(12)."\n";else{$Qa=$b->backwardKeys($a,$Dh);echo"<table id='table' cellspacing='0' class='nowrap checkable'>",script("mixin(qs('#table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true), onkeydown: editingKeydown});"),"<thead><tr>".(!$md&&$L?"":"<td><input type='checkbox' id='all-page' class='jsonly'>".script("qs('#all-page').onclick = partial(formCheck, /check/);","")." <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(247)."</a>");$Qe=array();$jd=array();reset($L);$qg=1;foreach($K[0]as$y=>$X){if($y!=$bf){$X=$_GET["columns"][key($L)];$o=$p[$L?($X?$X["col"]:current($L)):$y];$C=($o?$b->fieldName($o,$qg):($X["fun"]?"*":$y));if($C!=""){$qg++;$Qe[$y]=$C;$d=idf_escape($y);$yd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Vb="&desc%5B0%5D=1";echo"<th>".script("mixin(qsl('th'), {onmouseover: partial(columnMouse), onmouseout: partial(columnMouse, ' hidden')});",""),'<a href="'.h($yd.($rf[0]==$d||$rf[0]==$y||(!$rf&&$Sd&&$md[0]==$d)?$Vb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($yd.$Vb)."' title='".lang(56)."' class='text'> ↓</a>";if(!$X["fun"]){echo'<a href="#fieldset-search" title="'.lang(53).'" class="text jsonly"> =</a>',script("qsl('a').onclick = partial(selectSearch, '".js_escape($y)."');");}echo"</span>";}$jd[$y]=$X["fun"];next($L);}}$qe=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$y=>$X)$qe[$y]=max($qe[$y],min(40,strlen(utf8_decode($X))));}}echo($Qa?"<th>".lang(248):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($K,$cd)as$Pe=>$J){$ti=unique_array($K[$Pe],$w);if(!$ti){$ti=array();foreach($K[$Pe]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$ti[$y]=$X;}}$ui="";foreach($ti
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&preg_match('~char|text|enum|set~',$p[$y]["type"])&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x!='sql'||preg_match("~^utf8~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$ui.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$md&&$L?"":"<td>".checkbox("check[]",substr($ui,1),in_array(substr($ui,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Sd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$ui)."'>".lang(249)."</a>"));foreach($J
as$y=>$X){if(isset($Qe[$y])){$o=$p[$y];if($X!=""&&(!isset($sc[$y])||$sc[$y]!=""))$sc[$y]=(is_mail($X)?$Qe[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$ui;if(!$_&&$X!==null){foreach((array)$cd[$y]as$q){if(count($cd[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$lh)$_.=where_link($s,$q["target"][$s],$K[$Pe][$lh]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$ti))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($ti
as$Yd=>$W)$_.=where_link($s++,$Yd,$W);}$X=select_value($X,$_,$o,$Rh);$t=h("val[$ui][".bracket_escape($y)."]");$Y=$_POST["val"][$ui][bracket_escape($y)];$nc=!is_array($J[$y])&&is_utf8($X)&&$K[$Pe][$y]==$J[$y]&&!$jd[$y];$Qh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$nc)||$Y!==null){$pd=h($Y!==null?$Y:$J[$y]);echo"<td>".($Qh?"<textarea name='$t' cols='30' rows='".(substr_count($J[$y],"\n")+1)."'>$pd</textarea>":"<input name='$t' value='$pd' size='$qe[$y]'>");}else{$ue=strpos($X,"<i>...</i>");echo"<td id='$t'>$X</td>",script("qsl('td').onclick = partialArg(selectClick, ".($ue?2:($Qh?1:0)).($nc?"":", '".h(lang(250))."'").");","");}}}if($Qa)echo"<td>";$b->backwardKeysPrint($Qa,$K[$Pe]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($K||$E)&&!is_ajax()){$Bc=true;if($_GET["page"]!="last"){if($z=="")$fd=count($K);elseif($x!="sql"||!$Sd){$fd=($Sd?false:found_rows($R,$Z));if($fd<max(1e4,2*($E+1)*$z))$fd=reset(slow_query(count_rows($a,$Z,$Sd,$md)));else$Bc=false;}}if($z!=""&&($fd===false||$fd>$z||$E)){echo"<p class='pages'>";$_e=($fd===false?$E+(count($K)>=$z?2:1):floor(($fd-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page")).'">'.lang(251)."</a>:",script("qsl('a').onclick = function () { pageClick(this.href, +prompt('".lang(251)."', '".($E+1)."')); return false; };"),pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($_e,$E+5);$s++)echo
pagination($s,$E);if($_e>0){echo($E+5<$_e?" ...":""),($Bc&&$fd!==false?pagination($_e,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$_e'>".lang(252)."</a>");}echo(($fd===false?count($K)+1:$fd-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" class="loadmore">'.lang(253).'</a>'.script("qsl('a').onclick = partial(selectLoadMore, ".(+$z).", '".lang(254)."...');",""):'');}else{echo
lang(251).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($_e>$E?pagination($E+1,$E).($_e>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($fd!==false?"(".($Bc?"":"~ ").lang(143,$fd).") ":"");$ac=($Bc?"":"~ ").$fd;echo
checkbox("all",1,0,lang(255),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$ac' : checked); selectCount('selected2', this.checked || !checked ? '$ac' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(247),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(243).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(119),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(239),'">
<input type="submit" name="delete" value="',lang(18),'">',confirm(),'</div></fieldset>
';}$dd=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($dd['sql']);break;}}if($dd){print_fieldset("export",lang(70)." <span id='selected2'></span>");$Bf=$b->dumpOutput();echo($Bf?html_select("output",$Bf,$za["output"])." ":""),html_select("format",$dd,$za["format"])," <input type='submit' name='export' value='".lang(70)."'>\n","</div></fieldset>\n";}echo(!$md&&$L?"":script("tableCheck();"));}if($b->selectImportPrint()){print_fieldset("import",lang(69),!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$za["format"],1);echo" <input type='submit' name='import' value='".lang(69)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($sc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$ci'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$O=isset($_GET["status"]);page_header($O?lang(111):lang(110));$Ji=($O?show_status():show_variables());if(!$Ji)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($Ji
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($O?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Ah=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){json_row("Comment-$C",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($R[$y]));foreach($Ah+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($R[$y]!=""){$X=format_number($R[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$R["Engine"]==($ph=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Ah[$y]))$Ah[$y]+=($R["Engine"]!="InnoDB"||$y!="Data_free"?$R[$y]:0);}elseif(array_key_exists($y,$R))json_row("$y-$C");}}}foreach($Ah
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));elseif($_GET["script"]=="version"){$gd=file_open_lock(get_temp_dir()."/adminer.version");if($gd)file_write_unlock($gd,serialize(array("signature"=>$_POST["signature"],"version"=>$_POST["version"])));}else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Jh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Jh&&!$n&&!$_POST["search"]){$H=true;$Ee="";if($x=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$H=truncate_tables($_POST["tables"]);$Ee=lang(256);}elseif($_POST["move"]){$H=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ee=lang(257);}elseif($_POST["copy"]){$H=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ee=lang(258);}elseif($_POST["drop"]){if($_POST["views"])$H=drop_views($_POST["views"]);if($H&&$_POST["tables"])$H=drop_tables($_POST["tables"]);$Ee=lang(259);}elseif($x!="sql"){$H=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$Ee=lang(260);}elseif(!$_POST["tables"])$Ee=lang(9);elseif($H=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($J=$H->fetch_assoc())$Ee.="<b>".h($J["Table"])."</b>: ".h($J["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$Ee,$H);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(73).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(261)."</h3>\n";$Ih=tables_list();if(!$Ih)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(262)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'>",script("qsl('input').onkeydown = partialArg(bodyKeydown, 'search');","")," <input type='submit' name='search' value='".lang(53)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$bc=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),'<thead><tr class="wrap">','<td><input id="check-all" type="checkbox" class="jsonly">'.script("qs('#check-all').onclick = partial(formCheck, /^(tables|views)\[/);",""),'<th>'.lang(124),'<td>'.lang(263).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(115).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(264).$bc,'<td>'.lang(265).$bc,'<td>'.lang(266).$bc,'<td>'.lang(48).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(267).$bc,(support("comment")?'<td>'.lang(47).$bc:''),"</thead>\n";$S=0;foreach($Ih
as$C=>$T){$Mi=($T!==null&&!preg_match('~table~i',$T));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($Mi?"views[]":"tables[]"),$C,in_array($C,$Jh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(40)."' id='$t'>".h($C).'</a>':h($C));if($Mi){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$T)?lang(122):lang(123)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(126)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(240,count($Ih)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Gi="<input type='submit' value='".lang(268)."'> ".on_help("'VACUUM'");$nf="<input type='submit' name='optimize' value='".lang(269)."'> ".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'");echo"<fieldset><legend>".lang(119)." <span id='selected'></span></legend><div>".($x=="sqlite"?$Gi:($x=="pgsql"?$Gi.$nf:($x=="sql"?"<input type='submit' value='".lang(270)."'> ".on_help("'ANALYZE TABLE'").$nf."<input type='submit' name='check' value='".lang(271)."'> ".on_help("'CHECK TABLE'")."<input type='submit' name='repair' value='".lang(272)."'> ".on_help("'REPAIR TABLE'"):"")))."<input type='submit' name='truncate' value='".lang(273)."'> ".on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'")).confirm()."<input type='submit' name='drop' value='".lang(120)."'>".on_help("'DROP TABLE'").confirm()."\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(274).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(275)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(276)."'>":""),"\n";}echo"<input type='hidden' name='all' value=''>";echo
script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")." }"),"<input type='hidden' name='token' value='$ci'>\n","</div></fieldset>\n";}echo"</form>\n",script("tableCheck();");}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(71)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(197)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(136)."</h3>\n";$Ng=routines();if($Ng){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(176).'<td>'.lang(46).'<td>'.lang(214)."<td>&nbsp;</thead>\n";odd('');foreach($Ng
as$J){echo'<tr'.odd().'>','<th><a href="'.h(ME).($J["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($J["ROUTINE_NAME"]).'">'.h($J["ROUTINE_NAME"]).'</a>','<td>'.h($J["ROUTINE_TYPE"]),'<td>'.h($J["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($J["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($J["ROUTINE_NAME"]).'">'.lang(129)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(213).'</a>':'').'<a href="'.h(ME).'function=">'.lang(212)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(277)."</h3>\n";$bh=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($bh){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(176)."</thead>\n";odd('');foreach($bh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(219)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(24)."</h3>\n";$Ei=types();if($Ei){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(176)."</thead>\n";odd('');foreach($Ei
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(223)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(137)."</h3>\n";$K=get_rows("SHOW EVENTS");if($K){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(176)."<td>".lang(278)."<td>".lang(203)."<td>".lang(204)."<td></thead>\n";foreach($K
as$J){echo"<tr>","<th>".h($J["Name"]),"<td>".($J["Execute at"]?lang(279)."<td>".$J["Execute at"]:lang(205)." ".$J["Interval value"]." ".$J["Interval field"]."<td>$J[Starts]"),"<td>$J[Ends]",'<td><a href="'.h(ME).'event='.urlencode($J["Name"]).'">'.lang(129).'</a>';}echo"</table>\n";$_c=$g->result("SELECT @@event_scheduler");if($_c&&$_c!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($_c)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(202)."</a>\n";}if($Ih)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}}}page_footer();