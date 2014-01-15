<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.2
*/error_reporting(6135);$Gc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Gc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$wh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($wh)$$X=$wh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuD‚8÷=ë­ª-v´®4›dÃD’yI‚Ò¤­¼_hŞÀ'z’VÍ¶• Ü6€Yz:íQc³Ú²”õwŒª0ÀÅ]xrÄ!å@¶½/-¡*Ì5©«¤I.±]ĞYxuÁİé½o&Ö:Pß|CyÖ²wÖûÇÀ@L¯´Õ£GfØ†å¯)^¤Æ¢+–ÍQ5‚ºÀÆL4\$Mpo‰0i¦\rÛ»Ïk­ô4*w7•¯S'’—Zİ„nAb¨!1‡)ñoİ–9öc\0bÊïo-~2w4X,,…¶8m'™›˜ìªY•ƒFH–Á3GqQZ-l™\0ãÊwìe‹d5¥¢»ÁğéiÏ.«–™dã)\\çh~\\WÌ€æ™LÃ¡¸ÜĞmgòu«2lbš•àZçCĞ-6Èê–dœl£¨b\re×Mu§gra6ZD†­ƒUÊ™!K-œŸ0Ó9–beH”\"ê×[JË'¨¾»Z¼¡oµaº)‹XÉÆƒ&—tÒ8ºì€GZ.®ÅÚ˜Âë+³lr£ÊíÌ¯]kÙ#£Àj-§¹ëúW´ÉP,¡àè>@ä` \rc3\"\\ÒŠq2‰z›âê@Mï¾poà‘ª0p­ò¤d~OÙ™Ç¦ö…½¸]¡´aï»;IxÆùxh°aÌÍ‡ò¬0Nàâ~gâï?	€äLŒcuÍäw”£}úŠªt™æ<±…¥ÃÅ·¼qS’vÚ°@gsW}òL¸(kyÈ¹/6»CĞ8\rŒ‡°]\\£çLUöŞ^•nqiQÏn™T>A9\"ô´—kFôÕÚú.*îß¹²¹íßT†òóCµ‘r?:ÀÜ„üwMß,î\$m|‘xîm‘øÿ“¡÷©Bmu	®ğ=é[ˆÆ ynÃ'÷½h¾ûÚì@óŞCœv¥S2dSVÑ ¨(‡ñ\">H‰{¾-G˜ºmM¼b+hBb›cp€Ãh_ Á¶}qöşïÖ«¿e¶†_ÂmÁinüæà8€àÃ#çı`·öşÿÀm?õÿ«ü~ˆÿcDşoşş ÆĞª¯úıÜşoô4@ïÜéØ‚é<I\0``fˆÌŠº8	€ÉD”OªıôzÀŞşpM\0ê\rğ\0üĞş\"¤xşhğ^§ÀØğjşpp¿ptƒ0x§à¿0oPdbi<+àùïó0j•à`)SpığLàì)° ığ²1‹0ºĞ,ò¥ìù\n`ığjZÏ½ğ‡p±P^ÿPÓ0#)Íhğ‹èıçºxd0ÂĞ:++ô·É<úgß	ĞO`ÎûHûƒÙˆ\rbÒÛÑ%àÆ°ÔüQ'ñ-‘1P_°²\r¤cß+@®\rqèÑ(˜ÑGğ‰ñk1AwñwoÑ‚nşq2qd®‘\0×G\$ aÍOæ\0Û1ŒJ©Ñ'ñ³CÙ‘“‘„ŠÔ«ÆL`\$q±s±=‘JŒGHF.‚0Öö©=1÷Ïş™Àó\0Q‘ ‘„7æÿÒ§h3\nÙ 1à¯ş2fª`Â/ÌÿPq!0Ù!pªò?që\$Ğz,A°WrH§ë÷%pL\0Ï\$°×%‘?#&Òq	°Ñ&’s Úª&P­%²M(²'’ƒ'rF5ÀÆ™rM\$PÙ*R©(rğ7\0…,1^üF%ÒËì„&P_)…-0‚0\"Á¨Ä¬Öï¹ò¦“±ØH‰B–PÁñ¹#pûÌí° ªØ­Ã®+#òÕ\rppûBšÓüRS2&ò2¯Ñ-®şr±3nhÑö€Å0è§À§Jy%*°VÁò])²G\r\"­5,¾ù°õ]6Q7Ñ\$ƒ3€üPM8rÓ\$s‹3’Gàe0	<8B8©<,( ¨8²Ùàè	Ó&šJÙ;€¦Ï)¤«ÀR6pÖ­lğGË\"12ğ6Ë¾.\"æ¿bï7¡\$: Ü8bêA1Ù:Ã';?;G*\$¼,³Ànõ<`òTÓÊ/3Ï¨Ñf¬");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀŞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ğ@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^ò¨]\rÃ°ø\\7C8_Dƒp^ÂP é\0Ì± w &c4^RãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpŞĞ“Àæ:)\\;¯C ĞÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„WL\\PŞ®#r'b–]^2İØääCÍ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ĞPQƒá0³ç„÷ô?á‘*—\rØb.Å.ğû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ĞQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØİ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ŞÚÚ…ŞÊìò¸èÜ\r#ê…aväİƒàö>…2’1ÁN(Èğ<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤şäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLĞ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.¾øA¡I	\r±-%Îém-Ïe©·\0†ÈÓ/DZ !Pöxƒ H´6`X„b*g4E¬Õ§…\"	PhÄÕiPÂàB\0ı‡ÀÈÁ›œeT†r°YJé\\+ˆ­‚¡ààäĞ:>&-Ÿ#¦€dÚy{IotÄ?CO ß›õ&qñ™\0ædùhGº;‡BÙ	B,\r)Ô4ƒÈíq#\rÁM&°VÄX!“éU·àÒáXô«z!å¤Å0æC’Ë.J964±É	#Œ8àÄ¦‰Ù“3jEÊ×ÿa #Àô	agæ 9ƒ¹1&¤à<l¡µÊÊ)H%4¨cÓH™½#:¥p]Ó°Âéàåy(ƒPraÁ˜,ÛşŸs¾rOˆ[¡Û®.NÔ°Ìø5(a#(Ê=˜É\$xy’\$È¡Q¬w¦üuœ4zr‘ùÏ:WT_(…¤ÁX70IÑH*ŒIè«—§I(1Ÿ%O^ˆ\"0{N'ÌŒ›aÒŒÑ²9GC”—K’e‚†¤êá¸¤²R†©NIh\0‚HŒ-†©äò“i¥§êÀˆÃ¥ciÓ&eCÉ™‚© eêjôÆj~1\r@éıÛÃ6\r‡Š€ÚEÅ\n ó6‡6wg=%H\n¥Óñ:¢ÉÇ5á|'›Uê¢Mê—8²ò†“JPÓUÚú¯”ÕIĞIã<É)„“ZœÙ8:í°d”ğéürşŞÕ!Á¦h.‚-\rÃZ¹ä9B¯Ãz´MÅ®W3tîªs«¨Â—²Á°ÇÇb—LcB íòVBtúC›ßvp.¤Ï[R^oŒ	+x>ù*Ããªv¨Ş9ßrN¥H!4vL1ğğÀßÁmÁ˜:áÜThGƒaŞ\"÷5ƒÛaëğ3ĞBÈ¢Ûˆ«5a­-42bšÑZ¨ÃpnO©şA\rŸ†`Ïlfíœ5Çğä>Õ™¡†[«#®ÍêÜp'Ş\rV\0®Ì/b/¾93ÖC‡Ö=•™às4¡˜:°ÊUè(9.Æ†G3›'Û†ˆ“ÏI©nXvpŸàÿ=X[nAÑ¸7QÒUKÚ‰¤ t¾O²Ó^dtzÔqåhbØ‹,š‹Ç÷ÒU8em¤ª“¢ÓÊ‰5¡ì­ ÉØ¼èk`Ks¦[¶7ßLÊ9y%q¶~¶ÿ#@VÌ¥¨Ö.fUš\$ŒD2f~¥:Ô3’PÄÃ^ŸzkA¶fÌÈ¡âzq¼?ªÛbš¡Œ‰Q2'(™]o%wgšB?´*é«2ÃÜ×OX±{\$ØDÈbf‡øH\n4&0Lƒs\0íHbwØ.à3p@{¼èDË ê8Ó…lW,²!Á['[Ú^1BL]„:‡0¦äTV¶|9Û°ûoy¥ÀjopÅå@P	¨fœğæ¼Ø9	À£¢[ MÓCß@¡˜°î‰‚‰céêìú”¾™×j*-E±y¯PÜºfâıq¦GÃ¨ODNÏ£M@ÃyLeç—©ÖKòø	X¿Ü(0›œRØfÑ &u0è\nü@oñQ +©Ğ¼F\$›ûÄø³åC\"šì ×¬Õ,ÑfHáÜÑ‡eÌ·mÉı¼7w'È‰?¦&~ †z«¢hÃ“Qüè¹7\0‚k‚•Ñ€Šo¯™Yqğhğ¦/dó»î¨F8­9¦}2uóñlÍfS{íâß£÷¡Ê,I¾°‹­]ıòÿ,ˆF›ûBn­¡ÿ[=¢ósIy\$æà©@ä©>´ xn\n¦¤íJ\$°§,ç©òµh¸'tà¶ Z@º€¶ŒÀVâ°€L\"Ù	äp&Ò4àğN úÔé*@òİø£M&¨í*’°\0„ZÔ\r\r+Lµ\rU\$a)åBmˆ¿ğ3p:·P@+0FGğz§'.ë¥?\niò,ä`-cxş/4ó¾‘Fi%dÆ\0Pıkìk«¨/ÆÌÀòVeÌ}êÀÅÚƒ€ò‡ãN4@bg2èÀ]ô> z `Æ¢<PÜSn4úàúöMÀnÚH€ÑfäFÀ\$ğªÆ°ÂêÎ¬LXlîlğR?X¡0ÔJ\rÀšˆÄvp´šk\"ğ€Ü³ô¨j‹¢u\0¸ğË=\0k@Mp°|Ô€Uà_@ÚLKXzqhµñb\$‹j4·C`+Ñ¢s\"Ö­İ@Ë`P²ÆF#à¯\n,¨jø(OÀ‰\0[Q(-ƒ2§p¶RXZ\0íĞd¨úÿññ1‚“±ñªP²1ğ0@Ó-VïËå]\nÈ‚±\0.œn°nbu!Ñ>År\"#D²\rŸ-¢fib4RÔIÎ\$²4ÅL`tÒ0:¢d;ò!ò8ú\näıs&lá\"*ÌFB%\r'´»ƒp‰°êø%‡ş]¢8v°àéÌr]¨ˆ ëÌOkÓ(§š6£ö]¬’–c\$†oö’ªL€óäï€XrG Ê!+Ï*ëĞznêÕ’¾1€\\\rNZ\r\0¨?Œ*±.Š.’û/óugº\"ÚïÀ‡(nøéÒIü‘2Ğ÷±W§Ô|ö’&º¬0S¿í,¾ÓFÂD6ˆrcÒà.€İ0²ï'¨Nsf ÉäÈfdÛ.!5©šHIp—L‰8R|‡+zÃí¬·­«,òÓ+‘2k#4nğÑRé2mX¿\"Rˆ]\0S,,ÂÌlÊÌî5¬8®@ó@ïè%.‚°•l95:ÀNâDğ ÖR\n€Ò#ˆ€zq6Èù7\0Úz²î4n‘Ôlî@QrØº0ç<ï2¬ÏcD€a<C3‘`péÒ…;Ó'.t.Î÷/&ìæ\r5CPó2à{CÂÆ:ÇVåâDQcVîTõÑ]GNb`Oê03[¢gIÿF	F–>Í3B¾h< ø3¢\\\r”—Gtš³ŞÑhJlÒÅ\"-üoÎ8®<AîCHíú‘@R…´Â¼ˆ3L‰LÉM4& Óã.ôŞ¾É°0²~~ò¶6Ó™1åÖ]¬ÄASÊÍ\0L3£B ïBì.Ò£ÄIv}åĞ\nbè(2ó9fo9µ6ãrÚÎÜãOº”btn	¨Ø¦ô™¦şº­^&p&(¼à¼ãPŸ¢¹IÇşò.kUT¥)dKƒ\n‰iêmMğ¶õ†]àÏXÉj–SÒMm]X€Î	 ÂÔmRÕÄõ[KJ¼ÕÂj\r¯x']òáu¾œÅ5\nMq=#FÀN8ZUõ›XµÖé}^UóYõÕ•ÿ[ÀÔ`|DÕø15¿[iÏ[­qZÖ	a‰JfeH\r€à!Ål=RÏ\0ëbï¥U®cÅ4Xò\\7Ldg*•ĞrÖhgO>£Jr¯Ïd½eÈ–W]G'pªEmt {@Â\rU²h\"¥èQ ÅV€Ö9c¶c‹\"& â7E&aË V€°àˆ”€à'–¦¦À~:Ã±k ™kvº¶¾µ RE`CÅ€#|A\0°	àÄ\rF»l'wn	nVénÂ(@š¸„šo\$16Èà@¨\n¸S˜­YjV¨k× ¦Æö#çcbÆ\n\0\n`©G ·:*öƒÀPcfÙm#fö½r\$üCb(H~1hµ ZÏinìÀ^\0ZJ î©š¶#ã‚4àÈ-ou(‰V¦×ZNb„\0[y¥€ZòµŞ+qöÏm)vp×”RhjFòÔRcÒa/¼ú«d%_rwÅ|€óSCÓC¤,†V–‡Üu†g|¼l…et¶fK{2Ïhu²ºˆ’‰h›t`ö·¸;Æjú×ò¥7òT#¶å©¨cb\\nB„xX.?îI Ë1oJ@³æZ ÷LûÜñiÇjpğ í¯(§àŒ„O–„@X\\\0æë’Şrsiƒv ¶p«Æ@†œj1ğt“pÛ2QíL`¬D-àÖB8}NZ†,-ôcÕl¬F€^\r1šz“ÒéÑ4t÷N6r¹P¬¼UàCVÄ\"Ê,„^Z\0Ş‰n—.@˜Ğ\$˜Õ‰ÜÀõ÷ã<·94Sw6 öcd—/â¿x Ê\n ¤	(~\r¸FF‡¨‚ @7ˆ‘Y9“Àß”ª1ñKÓJşâ¸t‹«WçÌÃ u21qÍ¯ƒ™,\r@ŞCÂ„ĞJÜX[åsˆeÄ+\0y|3@zX„ë€DÆW™.¸*\0xññšÏëhì<›5h\\­Y.h˜×³‡) Ğ~«íœ&V*€~ÀU	â¸*Æ@V;ø“—“ƒmø\"\"±‚¸`Ühšù§™xBW8F<XMt–¯1,Ä\$²üÌNĞPTÀèç‰tª)ú2×¡Ù°\\G;qrÿÍ)“B¹AÉ“††9,è}:`é\"NŒv“€î/ÀÜQtT“®ïR³<ËDó¾F”©J:w&Œa>m\r4óÀšŸ>FğL\nË¦=¨#k¨˜T\"!‡§¬†ÖÌ’/õ¬CÂ§ìZâ`äâ ˜ 3§ós(Á‰İ­¢@É\\rqÌgdjFâ,¨%0BÆÀSG³ècµª\rĞñWÔ“©40èÀ{¢îPÔeC€z@oŒ<á´†3*lÎ}™E&¾ĞÀ„n`å`Ø-Z’¶k® Üà.àºü!(tdXæ˜:c\$_U\0òc¸F\nºáªQBÇ3ª,v\"1§·D?„Õ¨×tRï,µ°SDóhº¢ÃdhôD h€eâ /SšÖ@\0c¹’1H»¤ÄÔ«¢æ V-» ×î»ï³Ûœ4`¸ `\0‚Dû³ë9¥ïşyg;]ÀĞvò_ F<İCn¾×ÓÄQDk¤”FÑÂ!`¥'ûÄò÷€¨\rî<CÒğ]»Ğ1\0°#ÜtQDh/ë¸ã\\Æ@Éc·r;ƒ½È€Ê\\fAk,¸L‚C/ÉÜ ‰\0ŠV\\o•ÀOË`ÉÊedEœ;Û‰Ë\njux¯\\Z£®ZéAŠÅ«¿†–Å›nrc¼‰:\nsØ‰:<P\nn2éd„56%^ÀCDXæyÚì¥Êí‚*ˆyN4ùS“ùC•ÜÚ/yJ\\x)|.}½Aƒfe{¢.8K¾»^×Õ'ÕgW»©|Î}6‡M€ÕÛ\n½h1=m®,bÕÜH ×åRÈVİ{Å'ùÌ›¼C¤¬Â»2åj<OÚGÚNÏÅƒÓÅöiÆ5QÊ ËÌ…}^qŠ’€Z–P«Í`Væœ›ÆFàÈ‘P{Fà	€ŞCqZ& Pğ%—@XHä7¬DX €è\$cìâ[vâ›{¹‚şí>í vñİ·¤Şå ”mXí\"JñË\\õÒr6v(NÒyší8'}zàs£°cãÛ[¨j;:\"Ø“£áxâİaÕ[¹Å÷¥*<hÜæiPÍæÇê7IèÒÔŸR\"BœÖúä6şLJş:AÍ¦îÛOáÎÓ¿Œu^S²Î Û›;òs#çâŞ\$}qh&¦èÕ4\rõ9C¿Q6\nšçÍSÅï¾şWnÌÈ“€\$Ütğ¢r\r€„—Â§õGîŠy áÏ™	ÏÅM£åëäÌ\$­<XXCİZr`t XnO§Ú¯?Ns‹\"•­LÜ,Ò0i¦\nS\nE\0ÍCÃ’Ï_/Ï ‘Ïú@m)+Îêˆ ÀRÚñ¿òß0—_‹ó}ùn×ì²ù—KşOCËÜbiİZU÷ãe„]”+å¤P•x{P¼[µ•ÉV+_ÜéW¶#h™.İıÓ’MGíœ€ÃËn!ÔÏ‚§èœ€‚K1]\$\0F¼@à†8%C[sèV\rï\0rKÑToü=›ş[d}q»9ö\0b²€(Í€ë\0‡>À,Xğ\rsëÆÂÀ:Ğ:÷Í¾†£|’°€J^2``Ï4m0	¨¹”®Ñˆ!¾µ1È-#ª`œ6—#ôÒb’@I<ƒ×5¤°\$¬BÂ¯ÈKPÑÀ9=Ê%“wÀôŠP<:-+„«8Éìßäşö3Œ7à,XøF\"”„\râÛ;uÅ”q=‹¢É@‚\rCÂÁØ!ƒ5TúoÎÇªĞ\ró˜	Â¸C*°w€á¸Ö#,'ı@ ePòÏ¬cXO™¦‰g?huŞe‚ñ¹3'î\$QVÍ·á@õú`h|ä¾’„PIĞz;½„6I‘”²Q«ën.Œ4—ğ”6 _9ˆÄ\0Dë\0‰?Al‡\n8è!	¨€D)Ğ¾Œ ğBrÑÃ\"À7­Ô°ì‡r^•y CÄ\rL638L€ÈŒ`púì>¡ø‘Â¡á‘a¼AVëry*ÍV \\fàa\"(ĞçÄ\rˆOˆ¨À^t=	ˆ)cDK“ØèEøŠ¼qHb\"9 Ä&À{Eà„,fÉ>Š€ a¨!èkCÍ/ñ8†°[aØWê4¤C²;L¡Vğ1]”MæëGK…à¤ƒfÆ5b\n¯½Fñ€²û€¼¥aHL€Zş\"›'ÄèĞF±4É¨r¨¡4r+(á‹Q<WHr¤?AøÆõ‡§‚„@Ü{DÍ>ÑóX~BpAô,TFpß*¹F°2â¨c\$8WçÍ= P	PÄä;61À«\0rÉÄUäºR`…±i‚Qè÷#à9/fBô@&XÁ\rLHâ|pŞw02Fşï)ñæ’ 9ìÑÃp\\bÑÑ¹¬ì)€ &U\"ƒ`5¡¯Cö¢4r\0002Å µ±ÁHHÀ6L”{‰; lx`€È'¿­À=Ù“ÁôVœ´ DP²[Œ±øõš¤qëNÓˆcàU ´fu	CDoc©‹üßQïŒ‚Fı ÀH9—CtÈ\\¤\0±ğÅ¢`Uò\0J*	²Ÿˆm§ñ^¥™PLˆrM„û¦’X¯d) ƒ–H]‹Àe‡ò²Mï!#·:FñòT†\$xùÉGJ±t„–P	„n…>äˆ¾B\"jaÎ‚Û‰³Û¸e5q[@*0Ÿ~®‚›èT8¯XÏx®<DB‚ê¬KìœçÉŒÎŒr€N@²PİØº²^,Ô˜\nŒ‹´ŠG´âMXé‡•?Ôl>±Î@2 ³	AÜo2ƒ5Y¦)µ_W£]?¨Ë\0zÇ¡ò0&c€\0º11ŠŒ\\oDô5`Ë\$²	P\ru–Ñ‡!@Ë\\Ğ¨=à¤,?¨Ü™Â›™_¼*r–<xc!D0µ…¨*.ê*İLc5\0¼	€IX@ø \"®|\0P“˜\nğ¥IsJà4rÛ–ìÆäO ¿+ ‡‡ø	Hç Û'=ë`eW¹\0Ø9‘¹–KLvc¸âeLÇ©HŒ@!o•t¬\0ğ1iQŒÎÅ)cĞ@ìp>» Ä@¸òQd@€Ã‚ íñ[ó*ó ƒ<yr‰@¾Ó#”l¾„Y,d‹J‰UÒÉ–SE,ÕÒL·ˆ–°Ä +Ñ(Cşc©X¥™ô’\n¾hà&U°œ‚.YY–Ä¥ !—ô´–ÜÉj£,)3“ä£Àú’0¤`³4ƒèTñ(KJR3[šè‡¥§6	¢Mˆ¾Ó›0ÌËz7ä‰\r\n£¦¾`ò'‡Š '	ÚÖ€×\ràà.s!tH~Dû!¨4ïQ xV¦’¦Tğ b—ÄèCD¨|)`b˜[Ãì¹ÖòXÓ¯¼\0å/\$CD\ràUDB ©Ø'á!¸@Š˜t ½˜ s ÒF·/€V\"HÀÀä¹BS }ÀUO\"ğPÎgàUŒğ…&€0Ôş%«pà@nUyFü§ğ>j‚#ğm=2Ã?«Ş\r‘½öR‰ĞzcÛ,iò:ò9ÓşŠø@Z²jLaãÊi+t¿,Ÿ+@­i@@ğ&€4T…{;:M„é–péâL«QˆOT+\\éœÃFÙ_˜APam›BHâ ùJBo nì¯€dÄÁ‚”‘‰EhXh^P9½‘´M´ôÈ¾+š)*îL€\n*p Ê RH,•X•L8XFüUãVNÍ­7¡\0ù9¹?NvsäM•:…*QÀ—AœğgAGTlQØ¾Æ2¡XBåğa*B‡Ô\r ;¡éB)+*Òt\0A@àÍwH’€«ÈRVw”ö…¡=Ããù wC\$Æj“ê‡la2§B€SJĞR¸ó˜ƒ\$äíÔÊøÀı*†[Dp‹`q¬ƒŸ=/cjº#¹­mtÂtà	ĞIÓõ¾Ìà¥1}\r.;‚è¹ e?z#ÛçC6PÈº\n¢b¡·#­Êãí9Kª®v+Ò—-DW€d€áEzŸA¢²€`Ğ€ºX ƒI@b£Or|ÒUI‡‹YNjÀ¶Ó1U}´¡É&ƒ…šÔœ w§]E\n1t]ÁRu=éwE¸ÆSÊ*4ô'S¡â£O´õ.€_ó‹!2aDÒlIx*\rN‚Ú™Ä˜lv©ÜdÃëOª£Q<¥@[§ı@e€1 TŒÈ—2³ŸÀ|ÙŒ²¬2o BŠhNê¤!kT“¨=Otç	‚‘€g?€à/Z¯Å¦¬2vL-P³T)G<‡Tú¥İ&×ÒàíŠ,-ß	Õ_qSñ¿Uô Ë•Ã€Q•\$<!R¡‘:˜—uN åG\0tRQ\rY	õ„ÕùU\r•9ûé?X ™VùGãVdŒÏ(ÚÇ;&#2¦aÕ@N\"qÃNXŠ%»“Ä‡)<¡2Q„ñ\\Â¥)XtrüÇl•+Kbf±.'gB3P’äRòaH 3±ù'ëY«ÏyÎÓáÜq‡eMU)Š„YÄ¿8PCÀò-@ë\nB·¦Öa’×jç\nßÏqvµªcyd]mI¢ÕÓx“é ûÂĞOÁ®ó9HÁ•÷R‚‘Òi‰è¸©aº\na\"l±@›‰ ú¬R??€-¸r†YLXÈÀ15º4“0cm}•÷&æ=…úÅ*zC˜Ú`\"zd¥Gpk ƒbÂwX¸i'N‹,|.›U¾¤õ’éêĞu™†-¶¶,Cg¬„ ‚€v¬ ƒ‘¬>À¨lú@s«uW@é,97Yd¦Áƒ:Iİ?(ÃPº\$ì³\r[Â?É@)ù‘õxc±—äweğ2Ù„J-ˆã« ˆ—Î;a¨clb&«Ñ3Gµ±é,W+%¶zËÉ0³şB ğäĞĞ/µ¢Mh°ØZ6,E+Ø€ŞB×2à’.GUÁĞ	èÃ6I´ÀêÙygëZrĞ3ù0Ö:Q>Ñ  Uª|˜(Ù©|Ö\\‰£(Äal+0ÛsaŒ‘àÀíAS†šÑŒy­í2±@Š,\\Hè¯8AëJ5‰¢µFX¶üÍ¹\0ÿ^Ñ²	›‡\$ÜGØÌ\$+µákl5¡ø©´ê?‘ÍgIFİ²ò¿\"‹·‹ûÎ[?Bµ§V¨h^¸PnØÌğÃYÒ÷e¬¨š£pÅ ©0÷+Y}‹-I÷—4™,­)±àg·Mp¿Ğ ş.¼Ü «iÉ…Bà£Ó˜åß`\$¾¢]óítUR¢b‚6€°@\\p£˜Ï5Z…®ê0çº´Ó‚Û”1½ÎÓÛ)ü[¾Æ!iW¼â¯ˆf)?^¡K]¢½Á£ñÌOcsÚÙ¾RİÕ§·‚¸_ô€;²F¹w=¬ŠFÌa@v·ÜöW;²qÀ½?šìºg·C\nnŒ]prï§íÕÖÏ««×Z&7[]Õ®uKÒbêÀ+ºåÙgëvqhİÌÒ·v…Ïoa^Ñiİ¬Z§\r;r6\0¦ÎÚRäˆƒsFYOb¤ØGÚ›´2 'ÚğÊ3GÔyu¦³îØ¦R8èÆ<µõ´Lv\nƒ}\$~I„Ò;\näÑ¨†3\0Ò[ŠÕ !-Ì'T#wÀ3¿4ğ;ªOËî×&õ¡™®ÖÓµ’Ê\$!CŠ&ÿ)*¿ãÏÉ\0Â_”öv*!\rğ¨[ß_\0ùjŸaé.ô=°¿<7á’·œÛ‡•<¸v/‘x€‚åÏò[kœšÅÉlX‡øÚ’ÙcÔUr°@7ÒGjıB(–‚\r‚;[ğËNÊXàUƒeEç×àiNpB× …^ı3‘¿^…Ë„\0’\0íb¶êXÉ‘İ…`ßÖ“°¦Áû\nèZ×˜|ŒR›“a›xdPáÁ'ÎBæ”¥»°¡•ÎÔŞ²‚MëG[yL„Â¥u(k‹>=Ï’Ê!õ­‰úM³÷áØüû/©ıPQ»äßNœˆ\0§}õ ­)kí¡ÖÅu^Ã0Ğ¬\0ÅLÅ?¹kê‚±A÷GåPX^…;Ü=\$EåÑ·lİæ<C+ŠÃñõ1†S]á›˜i4I|±'}\\KJì?ü¢e(Œ,PI¢,¥†7)ùu„\nÎW(@òĞD‚G<Êr¡%ÕE%%±c%ÜißÃS“5É;&sQÉ¦N¦sB\$ùiû(•¡5è!B‹ÈñVd+·gÍÅ¨HñnçD3S{3È®k	6sbLåE`ƒIde#M Äc;„–&oÃ}Js‚\0b]„\r0œP“Q¹×	Ô¤_™F–9ï%l—3èanL£øªº|˜¦‰9	äÏ¬tdìŸåR_‘°4ày;f0“ó=˜äW®ÈÅÆ%•ã}…;kĞU‘i+ew#GAÊ‰øå25ØÏ×(SëÅçr„ü¥Oî‹C`;0Œ6°=œU8.Vu@R` \$	ÀD(\0D+Ü¾¢/àx@:¬'üôbÅäşøDÇj\nl7¬E™S×Ä¢&\$!k>E\$c¦SHØÉ6<Ğl‘J¦k!-Íš¬±Á„&c— ˜è…Â¬1^YX&’T×tCÍmH*.9;òÔœ–Xü5vQ\"'›”'fí^¾Ã ¤24âıä•èx¹t¿‘Wzä›eD#2xô“H€æs.ô ¨£ò^ş¡ÑïB¯J9{Fô@gØ\r¹k\$Ò<ˆR¬g™Jà;AZ vEéYA¹@t<i™\0w^ı9\0001\0Y¹±tãS…ÉDj™í{Ät{Ás”¤SAÛ0T¤\"o•L0uDí	™.ÀÏ‡Ç€-ƒHÄuM÷¼h¼Ú1r^‘£`6Çµ e?Ï6qoÄƒdŸÖîÌ¢#ñìÌÔ„Å}ñ¨HRbÚ¨qˆP'7Ğ`ÚB\\„¶“ß*Ä ^:åÊ2œ•Ğ,gA^8Z´ÊÏ½4ä/Sæ \r~£©Œ8£ÊiŞœIä÷\0ÿOb¶Óî”Js¨\0.€ëP vr…dO\$yãE=ãH\n(=}OÇL“DÃÓñÄŒ[Oİ2LÔhÄ1Í›ÇêŸ*H0R>5qĞ’è´š˜oòÌ)ôWà-Õ\nc§©ÖïêÈHÚ—\n€«Re¥RycPÒšIÍÜf)ƒĞŠoWšÄ¾`Qìd£Ç9Vº·4úudİ]¿WÍùÕv³‹I¢íY\0ËXºÖÖ=GtÃ‰ªvà-!9ÉA8¨µŞi™“]ZÕ8hØ4–Â|…¥‘»µÌb©®ğÈàSºsÕ\0¶ª9…j–óáX:\0I‰ø=ãS\n›ª‰å¨ôÿêKFï{Ã‘¶9®]çdZAÕN²¨y²Ej·KÛ/?¥\$öJu]]Rï\nxİİ´}MfUõ»â¤txƒ·«`„IS`1ÙØ®³†ìûX'3Éã€W«!mCg¢ÿ×2¦öŒŞA,KcC´Ù)u¯ğ:lAÒúˆÜG¯ms‰ŸV[ZÛv×ts±Í~`^y‚¤Ïr+€Ê±Ñs‡.t…÷Ûv‰d\$Åh©3Bè¨0Xtù·\\9—r'áIb(F7 êµèÃ@úÑøˆŸ¹­	h#FƒĞávİ¢i'Ç¶ğè›{èŒÏ--A‡<æ¡£P\nĞğ\0µ\0¯[rŒ_şìb!›\"Â(‡~ğœ\"îëhá4\"(ew|Ãy_ïx{ÄŞ6,I®&T2uÓ­Fv.“§s%E`Á‰À0Ğ¡Í^E\0ì‘@t†a«¾Ğ3]:Õ =–BºMÑ‡ĞCBøˆ6ö#¤.=îXÀX5Éè`¸[z én\$‡&²Ùëô<{ËÀU§¦}H^‚HTÃ(±©-Ng-£n•Œ[°Äç—ìM’şfáo‚0â+#–N—Bûp1‘Ïf÷Ç’f”ál-˜[{s\\Ş(` Å/!i˜­ÒP{îKx:Â¥Î\0P¦6ä|‰½…\\1ñoáŞâ#wö¼†q®Îè\0-ß€~sûtvpb¥²’\$ñĞ] /¸‰Ç?:\0­ñoŸvá¬.4\r[üm\r8øÿ »ü­³‘ú¿Ï“oÇŒñój>o†¸-·èRçÉ©Ü'X·B>'^pHw!0WœrÔìtš*p¥pØ8tğ’áo…+£{øvî][¬=@{â‹I\"§¾L&`4–éiã¹¬Ÿˆ²Qôy„4áª3@ªŒvœ³}6ñ‚,rØÄş' :Ø¾rôè`h€€^Æ{Œ x79Àtv^Xˆ°Fø«ŸNÁ‹\n@\n€{Ğ^{\0‹Ÿ\0p}ÎÀó¡`)è(˜×Ãs»À0ÅS*\0€3U=J ?Ğ\0ÅÑàË\0€.ÿJ\0º £\0»¥Ãç°@¶°w¥µMª},ÀÓY‡ğ¼\0:Ü9¾_RKî<!ˆµçKêuì¸Ãë<k`›âqG5[xjï­²Lò/\$@œf 2†0RïW‘ÓŒˆõ}^;f˜Ëšä]ŠCzôÃËqu\rQ™AÓ‰}P_\\7\0ÏĞ0ğ™fÆKŠX£¹Ø3dL™š\\À	Ñ†xVg„©š0Bf¨RÖmˆ^:\0ëæ \n,CĞ#®ÀÀW§•Õ)fFàİQ¦ly	¹Œ+°>sÒ_àtµõå:ıØzæÅ›OÚEë5‚Û×¨¤Šæóëãe»nÄCyÉeYÍn/!¼îœÃgÒ´æ¶­÷Kï-Ña>cµGõìÄ/FñÄ®àO¸á‹dQØñ€6edÕUEà×şç÷S¥ıØ¡“.07ğ\0)ÔB²ƒœ\$á|Vòß„ÏVáœ”PuõìOêÛğÏSô\0&µhåA‘€èòX‚»uFÏœ#ÁˆïP8ğSšV\\ÚÕçƒtĞ¯¼ ?ˆ”‰Ÿ\nP—ÙÍ\$>p¶öÁÜxà(n ²öÆâ\n»®€Ç’Ú@8ß	Z´À<î·=¼'á_§‡Ş÷u|:Ò™ø€úŞ\"àçz|uˆÖ’o´qX9hh¬ 7xóÅ\$¯@agÏ½éy€°\r!]ğ(×|z+`’¿È­³º@^CÜ6P…°·Î^€%y¼R×‡58p+ŞfñŸT[ß =°·¾NÙûéÎ&\nï¸ªkİ@¿­ME¿•ié‡Àñ	m\0ÿ­È¸Î0ø;jo„†¿iÓĞH}NymÃ+*BZ‚õ÷ª3÷§a5Ğ:‚dm‚Ë8øÆp÷‰u¤.Ò,Ì&u±d=\$9Ì^@xrªeF‚AE‹'= „Îñ„èŒ€-àÉê€°œl÷hÄh/0ñ‹œ©¨ô&œ­i|MOtÑ—À[ŸN¥}ğPÖ/Zá†¿cÃlŞÉ¥ü¡K÷HT;*¾ğvf)FóGºN†]4¼'ˆÇ½;:ÜPÇ5ûAjâ¥ûv‹Nß{ßDùPÛÀ™&à/©‘,mùŸÑt_o‰mg#8/Ğ~kôFòÆÖºş^è°\n{ts^ÇDÅİ¿ 'ÈñĞßKìæT'“ÄÎ-=,Ûµï¿İĞ—Y¼C£Rš²–jP¯Z/\n%LÍ>Ù z‘ßíp€ûí|Ü÷ÛÎó÷ÃŸñ,E.õ#M¯…®%Âª _‰\r€Ùê1|{„ÒCßUa¥Õv™i_^8/eÿù&úÇ´\"Ã\$>²lxI”“¡°©}Â S©08µï›ò Úhisˆ\rSÔ5_SÎet‡?± <ı@W–mÍ_İK^¡cÃ¡Ïµx |[²!ø‰˜€[…¸sÆ¬0\\Öc\róZ(\0ƒ¬SüÜó_ûA^ÙT‘¸Ï°³[€½»Ö@X‡ˆØ’ÌŸêñíB}Jb€/\0Ô“Ôáw‚â§\0Ó‚º¼£³„iÿğë°µúF@x.…€¾Z˜\rá¬e\0³¡n‰9ØìÚ#P&Jš;ğÀ8‹\\0	É\"_ğ¸U¢Öğ,gl@/ºğ\r0…Zä¡=\nÈ¹Ğí\0h4n…‚¶lôˆ0¢5\0H£ğ—æ@#P	 T'+üj\0Lì\n¡¿À ØE†pl‡tJ4Y«H…’9®§¼¬ÙòªTç²Bñe<Ğ}àÓá=›F( Öñ¿ 4¼ŞıpK°;Ÿ˜ê™²KŸ€½Û©r–'Àì\"‹\\Á—€„®¢¼Öjó ğºŒqòÃéP—ê¡à8V†¨HÍöA2Šê0;	Ô8\rç{\0îòİÂ Ø^R@,[íñ7ß\\°@Á^ú¬\"èÁhTÄ‘Apü°A{,ï°€¸Øºê+Ç	nghAà7:V—,ÂŒ˜¼´«\r‰^Ô*\r4ÿ,`†§~êéÀ/»üø™qÊFÁr´À÷Á0ì+ÑA§`Ğr‹^Õ\0€+²Fì)´Á—\$\0j·	¼.­ÁìPo	ó\0\nàª¡–‡çT‚èài0u8Tä £hÁæ\r!{€Õ˜Ìş¹!9»lŠ\0°TAòÅ<ˆ:ÿğYAès¯B§Ò²}êFAo	<†BfÊ,p`Âo’\"0i\0Ä@ &\0¨(\n@>\0†—\00©€ø \n@'€ –ø '\0‚j[À)€x\nîŠj˜`\$\0Šh.“5N\0¬€‚ )€Š0.BDRôãšÀzqĞyA™`‰£AU”&¢'ÀÎclÂœ©ûsµxAÁŒP¦¯E +xAÉÄÁÎÂû4/ğB…T(…¬Ô&PÅÁõl20bBükĞ±N9«¿ĞÂÂ‡<5PÄÃYô5ĞšAøç44×ÃGL6ZÃO45!E¤`ÊúßÁ¡)ØC‹„6pÚÂK<g”ê\"'´)pÌ§uÊİÀ>#p/\$>Æø›ûPxÃwÔ;ĞßC[t1áÃcÑì0Î\0O‚wPBw”5f\0ÆpĞÅCñ\r|?PëÃe\r\$90dC—	4	CÁh\rkÓÃÉ\"pi\0\\ïò&1BÀdBğ£ÃÇl<°Ğ§ÔÎ!Øç< …¶dEà8\0ÓŠGŠµÀ’<J`ÄÔL?póÄ!Ò3£@âü/õ¢vÿJ(¢\$E\"xˆÔù‘?ï0‰ƒ…,H!'r,É\0À‚CF#‹û0‚?Ù¼Èé>ôJ\$Ã‹SQ\$nŠ¶«øîpVşLG\r„\0ûºÑ:…'»šñ<¥pB	ó¤²ĞX>Ñ4DŞºaWw»äT<'Òñ:NåP½2ş/æ‚fˆ)q,üK€6D½\0¸ 7€P‰ÜNÈŸELÛ  Ã{K7´eYÓ0  ğäÚÏˆ\0D‹2'†U¾.Ÿ;ş†kØhyÂn¹Ô‘\" /‚jX(ŞÌa˜794ğbS6N¤?Úê[%€µ‡\n‡Kv\09E¤‚i?Aªò,!n¤ˆE«'ˆÛ’İQò@˜lA8ˆ\"3mÓ¥`£ø&{Â@à€.”ªBQJWºHãd`¯,#k§ïş£“‰ˆ*_/º|àÑ\r[ ±¥†P…*A€İ ÇF)@€ Ñ‚„@dZÎ¥j¨ìÅÖ˜,!^Å£xâNU'¼ûÎŠ' ó¼8ñ½\nw°Ò˜ı°… Àã9ÚÆ„¥ô#ÉİÆ{ˆ; ¨%†\nğe€Cßj1¢Fu¬#ñ¥ÆŒ!aG¥ä=0\rÁÀÅğEÒ`ø)o¨¬¨‹ûñrÅ¯:\"¼ÆK8›¥›E–êoÈ†½²è'à ‡ Ê¨\\Îˆ¹šR#Óî%»7\0ƒ›şƒÒà3ƒ‘:òy‚ï¸>nN ‚€|r1fÀÒj‹hu?¼Y 7\r\0–I@iÑeG\$\nZïƒpˆ€™'Ä¡ÒİznÅ›G:¤›ûñ¹Ç&ˆ€”#d ĞE8nĞó\$G<^á,tÀ9Dò—ÂOïçĞt.¤±+_::3\r<ÎÉj9Ğ>#õ ÙFÆìqé„ÛâQ²ÇxôîÊ³È(e‰HYpñj7U`rÕ=®90|¡­½®*‰0G5ŒÒ•4r±ºDò£ßæ…Ò¤Uğ«‘ì%\rk>pç‚,IæŞáM{>òùØÊ]FšÄƒÚ«èaXÌæ ÇÜpe‰K½”)JWÂW‹ ³Ü(…mTdÄZÅôkÛ²ÆßÄ…ğFƒD}Ğkïe\0û!Œm2ÆÙ`•ò“ÌÙA1”£m!( ï´¦Ïºj#5HpÀ…1Ù\0à\0QÉˆB7°E%£06ÎvzˆT®ˆE ÊCˆxA	Û'pÏû*ãú‘ğ=xD²§\nôŒR»† p+q\$>«éÃ1,ôÄb\\'Î\\~Ìƒ–HLÚ£ÚQü~\0úÈ\rê„±F‡‚ÿlT†@É(.ü’ÁÇÀ4µÚk!Ò˜¬“P‹û\$Ğ`ˆÉFi ˜D‘¥*lè)h€¾Èçğw‹JlaG× 2¤Z“É%X]’Fˆ§\$¤”«èÇ&,Á&ƒW&\0Òa\$Ô	¦I¢TEÇ,É 4¡Ê½A\$h\"E1ÇC 0v‘ã;Îô£½ˆZ‚’æ€#²Bƒ©&y¤2L?Ï'K1PG”òÌ’LÙÜ’IŞY\$xòyEE\\KñR'„Sñ-Éæ’ /É0²c…`ñ%ûÜ™	3(„AáÂS(œwCÊ+¹¨nˆÈ\"_œ	@6@@8x’ÒŒJA„9ÈiÀX12“IÖQô;ĞCêë—QdÉx´ü—ğ®œòÕ /¥s¾§<É¹&É£®ğÉ¸cÜ¦ÑÂ?~6ªÒ‡='Q=PIõ)tª0ÉÜ²\$°À;\0´ÊW4«Pï@zŒ0À^»†°9ÙÄEî@zëÊI¦²oÇ±)ÁQRfIóÃNÒ¡I°üô¨ÒJ‘+´pòp–I\$¼\0ŒH”œãjˆŸÜÒw5şø[\09ËÌ¡C’JY\$²²ËÊy—…{=#¬Ãé\nÜ® 2I¹%éQ#2DøT¯ÑÂJ‰&Ü°RoKU'q\rÊ—ä©ò|I(ôGr}+œ£1,È¼\0Èi¿2-Ä—r»É}+Ì\$Ê‡,ãNáKk.l°²Ü²->’ß* Šrá{.\$¤ğ„Á``rÛKW+ÄµĞ”¹.”¯ñãG.¼©2ìÉÑ*l·ŒúJ \"œªQRË.,²2ßË‡%d²Àfz]¦J… €­³!ä—‰ö¾/äÀÁ„ÌUYŠBMÌ\"ÆÔ„o­Éƒ\$‘ïF¾e0\$\rïIŸHlÃÈÃ4¼sÒ‡üŸ2ÿL[0üI5'tÆrfÀ1±¤!¹ü4¼€ê`íRıÌVï@IÒ<–m,è\"ÅÉï0ªÒßË',à5ÒËL›,ÄÓ%Ì«,ô’²kJ‰,DÊÎ°K]\$”ÉE&\$”ÒJIS+”ÅÊC	¨dªW\0V|˜rMIõ2œ›FG‘TpLŸ8Ÿ9¤'d³!GÌğ;DÏREG2Ì “=Ê,üĞ¥ÇKÕ)¼¹ò×L‚©Œ”2cKŒ\r\\Òò¾I­.œ¾RÀÇ	,¶ò¥;/'Ç.õƒNïl±®mFk9`Á\$ÖÁ™Kğ—ìÒé¤K°¤µ2õÍ*‹üÍ¬,É¯-”ºˆ^Ê4œ©Rí:4¿#Ëg4L ÒÉèz¡·3hi,üM°UImrsŒÔP¹Ó2€¿3<”“4É¡+t¢ ©Â.B<&\0ù/1{“wJÔ„«Ò²ÀG\rT 8JÅT¬ÊÌw,3\nÀi7œ­’ÒÊİT®NÛL“]…rÔP…¨Ì>´ÔòxÍ£ôÚ“aÇÛ6ºy ±s8êyàM¼Ü!MÅ7!¤2bÉO(´“tÍß.<¹3wMàZäŞR­9Ù7¬ßÓ{ÊS7ÌßpÀW7°ò³Î0\\ÂÓ|ÊÖj­°N+Œ“ ô¯-6DpóˆŞlOrn3cÄáÓªÉüâï¿ğ“ÿoñÊ¡\0±‚’…Ä	FÒ¤‘1†£jxC3Ò8sÈaÅœ8àn7€æáÑï?ª@§¼>/8¬ ±äÍ¥dãñÇMµ9\0)3‘âfÛæ®–ÖúWó¾G»Ò,ÓÁ?å<\$ÑÓÃ¡A6ÜñqÇO(×B5Äù{·³É‡4lÑR€'=ñ)çP¢9msÙˆ[ƒàG¸EìïÑğ?­<Ó²ÓÖN/=tö3M·<£à³ÚÏs<{·ƒÂ™­‰œ¥´Dşûšñ—O¨ÿ\"^Ïm\0x‰rŸuğœ®Ä½]=´gÆ™8/ğT/>é§İĞcĞCÀ©§6™„–âÖÏ·B™sÄôô³üÆ­ğş 5¿ts€E’J=]˜qÆ„ô@Qk¿£üø03OÄÛ§S%É5@\\FÂQĞl*‰ÏW@RnÂµìE!ñG2İ„úèœÇP/¼¯ö ÇÅMè\0ÖÓú-(jĞ:„Ä“AñOß9{wOÚ/µÀÑĞ=@0W`Ğ@Ú/Ã`\r­“PR†³wôÈ\0˜„ûiZÆõ	©_µbßıa]Ï¼O5cVÏä,D‚ˆ´Ğ²×I\n{†_?,@sÒĞÕ	ÌHpå\0ûB;|ChËF3<Ç“È˜6½ê÷ÌJj§Sê;ø„İPÂ¨Î‰\r(ø €1¨Şôş‹Â`3â(í=C¡²DNë<¬÷nÈO0ø”øÌó8´ğÓŒO‹=öT-Oû=;ê3ÈÑ,İ›ığ¿tÓ	İDÀ¹ Ñq,Ør°0oÔoû¿t'¬CA¹@¼u³ïQ‡D£«qœÏøëÀ*óÎO[6óâÏ)=¤ÿ³ÚòñP…5Ñ:øyšßOE\rSáÑ©=„øônˆ[?ìù3ÔO<·„¾HŒ\nï´O¿¬\n[vñò™­;\$—”yŸt5dÁS\$	w„s†ÙÀe2HÀ/œ¸'±¼˜>º¢•á•¾–P+€\0vı\"š¿¿µR)…H<Á¡)ŒLÿ Ñ.¸øt…Qx ÓRHP´•¼IÑS[†=,„¦3QH(ItœÒ_HXwq¼~íLnËGòºD…ó-;pa3¸Ö\n€(áäkHØ±dÒ=)„”·,0r´™Ò}0lu(GÒo2‚d´@O­Aå ÍQ5Eˆ=4YÀ¾NğoĞ4Ñ€39RÒ	P)Ê8?üüó²;3Â‘5¶ÛÃcQ€Xİ°Ìï<'ŒöJæ9Ç·<„õ'<Ç°9 (\"dÒ”<AÁÆ¦<ŒmñL)% =¿\r1Âì'Ûü±ÙÒä2\\vôË•Me›N¾Œì(œÎÇG-³×;GJDítË¬™LÓñëS@bÅ1ÔyÑ[LŒê‘ìKZ™É¥A€·Ôo€¡g 23àPs˜QnrT@\rÀ€‚€\n\0&@Qè	 &€H!4î\0ZHÌBÉO%<Ôô?Në1@(\0ª\\è-TòÓÎ<>`€	@\"€‡OÀôıSåOP`'€˜Qè\n€\"THµ€˜<+ *—UAµÓº @'€ˆÍA•SùOP\n€#\0}@•ÔGP€\n€\$TCPÑv·\0ƒPuCS·Q`\nUŸìš°TÿTP@•(\0 !\0˜x`%€¢­E½‚Ôˆy!Ğk1•Óòp\nu(…åH°¼€‹Q0	ÕTÀ\\éıFzT»ÕLeÔÒÓTõ€OµH4øÔØtv•\0OQhy-¢AQõ@5ÓáOÛ«\0‚(l,€'\0ªQì+À*\0’x	Áä°Î84éæS×Ol,u'\0OT¥=à¬	ØhÀ\$€Š`½TÄx\n@&‡“TÜ*`,\0¨+€…O¸\n•FUN	•Rt÷U-TÄ/uMUiOıOµ ÔßO¸y\$±ÕkT­MU[’OM;ÕV‚Ô\rXåc€Z–Ø	À%”{V`+cTİS…OáäÕ­UåHlÕª<µNµT\\çTŸ´sGt~Áweı]K•©úš£µ\0,Ø8d6Ì¢™·Wˆ!Uz.œï¡=ÂRUèôüÚÜÉé\$­]Z\rškä±OO;8Å`Õz•j¿À@0K1y:V3ä BÖ\nõ‚z…Q§ea«§\0OXˆ`€sWı\\•‹Í(LÓWÕÖU\rcÕsK?WI¨•‘VIY5e‹˜ïDÕ2rƒOXİ]±›½`ºpÕ|¾Æ\"Ûì Uüïñ›Õ¢V&Û¿ÈsÖ@«À#…V íAÁçœ'ZBô@\0Fò³¦dğ˜ éC¤\n§ƒ½DP…=<Dõ\r§' TÕ]¢³š&tydA˜:Ím{Éè(m(¿€dJÁ3[V‰Wb5ŠÌ™3hXE-Zó¨ŠV±™˜¼×,]cU—VW`Qmù!c¿Ô¨×\"íırrÌLı\\µhU¸©ú@è€%_\\{n¼ÌÁ,õq5—KX2ôà.;<\n:â»üØ¹yG¾Ö s?fç`HvG8ûÀ£@ûÆ Ö çTÕá¹Û^3‘Æ\0Ç^J\"€W˜çudnu‚kœ…×Š†„quíˆÀR\"€×½¸:ÁI¹É^øõöÉj#|õå×šå})¹Õ_%5û€~è³UäWûAõ}O¬ç%|Â1ºM­€«JX^h;¶Ò³^y0W²øîVG^ÕyµîŸS]xV\n×•^Õƒ5çV!`ãÕçØ?):6º4#\$§ \0H@À@ €ZÓ§‰9Õ*úuèØ1`Õ~ÕîX%\rU`””ØJ„õóXT_½…À§«8Eö&¥^_Ú”¸G0‡cšö+¡¡=‹H¹ ˆG\nKl²•J[qO‡Ø™8v­ş¼Lñxäc’f³ÆÍ'XÈ8ø\\®1hE}ŒàƒXÒımH†µ9§’h¬XÖ1œ¹c 7ö;FÉ¨Å‚\"+…<XşxÆDP”Î¯¸³h1`4V4Y ƒıoG¸ğ†\0yÉ}YBô\0×dP›«cĞc'à%ö—ì¶ÖNØõdú9¯®@5”h° sc-‘!‹Xïda'’ÛÊÍ“Ö5Y\$wu5öR¤ò|IŒÁàŸDxÔH‰İ-°z©î¾€µƒ›4Ÿf¥˜E:¿ZŒe5Yz‘önYf•öGXö„]˜ö@' Ûe™ 8PÊ-mš«*Çe9Àˆ6¡<[q¹-Hfwuaç sgéy–_YîliÀ2Ze‘VrÙh’¤Y.V84VMZ*+-•eÙxpá`ö|%ñ Å`9\0u-µ¢\$9ïfÅ¡l…ZX°¶T’yhéºàÄÙ]S×Œ—‘CfíR6oÀ(6}aéÙÌS¥R-C¾~šİ¤V€ƒki%––“ÙãÀ@4‘Å•¥à9½”Ÿ\nZd+-§\\£¥áPv¦7ûjq\"6”ƒjªo­4ğ%¸!HÚĞ]¢6`Z¹g9N¨ìÙğ?ê¸Z”\rµ¯5|®ĞÒpfŞÉYĞ\"®Z\0÷óƒ‹˜¯(z%œßlCäFº[	šF¹ó‰™Y\0ö³6·Z6\0#¶»È\nûÁÚŠÑ¿,ÿ	ÛŒñ¼²‰bÀ‚ÀÈ>VGØÕL»K·T»û‹´ÍëÂ-„Q6Ô…rœCäĞs-ŸD5&Ï‰³!tŠnÀ†Î7*{@Ä¤ŒÎQ\0O Æ\0ÂJyµTzAö 9ŠâGAŒ”D\r%‰4˜'–ò>Q \0—H=¼f@‹ÿo`lòĞ/ïoÀ0sé–H‚¾¥4Ìæ*‹û÷\0d{Ü%›\\ÀGÀ»p<¨—€ß-¿ä¿Ü³6Cq[Y@ƒ{\\7Ã·œÒM%ÃÁŠeK©ÇCÜpµÀå4¼Û?	Ú¬ }Áöò\\q`0w\n+p‘M14î -gÖIjYöÀ	Ä ÁÍ\"eÉ789q¸ÌVúÜuqÅ¯@P×Mõ™&:¦ú|HñƒdÓšıÇzeËÁ[I€€·\0Æ©mÑOH‚Nrrrâ#Ô_Hj¡Û…#XÕp–SHØÎ¢‹osÕÌ¦'YÂÁ\r°g'\\L]–v5]U³äofõ°brp:öú ĞI”Ólœv·MKsğ Srú(zÎl‰·£]2\"I·¢º…em¸¼–ÜœUsm 7½sˆk×9«Gs¨—;‡¦PxiV·YxSĞåJÌàö¹ºÖZ]Œvı2÷F“u@âÏÎ;6xÁÄÈğãÃÀHõ‘!/9ä#c»\$Fˆdê\0Rh<ÜN	0VR)´l6È]FVíÔnç©J´Š:Nòë¾u´;R<5hƒ„V¬EÚà8\0 @Út•İ±Ğîz\"€8:M}Ú¯x½¿x]ß\0<=wÓ»jošî÷¦5<%^aÕ…] éà€ÊÓ³ÜJ_)X÷ )/sş÷C´\0Åµ|¥h\naˆ©h÷ÌodÅX¾<A ï:ı;ª—Ò=)¢;á-kOĞ\0PŞh¸µmtƒ¯×!V¦‰A¿æf]¨f-Õ—#İ‹qÌ·İ9p‘Íb^krÊ£šÀú}ÒJn]+p8¹Ïp^°pàs7³\\qpíW®\\pÅĞíÓ}0õÊ—%Qæ:‰N{Û6A®—!^õl¥æÈ%%yRÓ‘=®ñ…¶^Ãt öúÁ&öß&\\ÜNòEë`4\\d9±ñ7¶ß-p;Ç·ÊÜd'•è·UÛ%|ÕÊWÒ^»A uw­_\0003²Á¥z½íwÎßW|İíà9‰åviVä‡´¬`ú÷HPÅê5ÀîêlĞèÁÌÛ¤QïaŒŒ6€Á ¿ t`	†2]<ÚRƒVP•‰“è¯—?‰¬ÆºÆÀ¥f5OqûŸ×æ£b ñ>_Ğ(ê5”ßŸÉGá/èPÈ—ßc/½'’Ü‹˜)Ôh½ÖAş)‚`/è¸[NÁæEjcÜ4h*“â˜\$¦­+ Fˆ*\0 „Î°zïŒˆ!Täû‰€FÂÛƒØØ·B¿Ë˜5ÍSĞTàÌ´dãÉĞİ8nø{€×\r48fù`dnûƒßX(øX!¶àø\r =º0i]æ.….xµÜï‹ÚX\naîs(&¥Şà¨8móWÖØÀÕôÖò2[ƒIÆÃ’£¦÷±c3›)nYR7N`âÊQªÆ`ì\$ Ù\0úß‚\rÛÜíºìÎî\0à…˜L…x3Èó¿ï\rÌø)D´H²ccdªÿ‡/ÿ„|Ÿâ\0EÆ6²á\"D‰~áRÀ!+*wÕØ«*æ8Jå¸Â*ØÁó•x¬êÊ€ğ³r- \\8;a.!ÚT¨ Å„*ñ@z¼×2îKÜ®Ø=ˆç\0š‚Úœ;Õß‡£}MzUñš8è]wÈh<b>j¹Ü p\0>\0F÷›‚2.¨óˆˆŸ5^M|àº\\é…ôáË‡ER³E¬è±:\n¥}TJWº\0)›P±BÈ›¤Ğ«\0‘U`5Â©ˆ\n¼€¦½T€\"bç°õ#Âğfp½\0¦Q`':\0¼°\nŒT±ˆ-QUFbÕ  Eüp +ÅëPV!À\$éı+8s¢ÅaÓ‰8k=	Y“HúX',ÒôvÖ	^q&XœA@á¹†öaÆ#f°&aàVNaÙ_ÉïâŸ‡”	vˆÀ\nî:2‡bÒ–\0^Ø(Ğ§Ô[•OÂôÁUDğ¯¥À€°¬Â¶}ŞÆ5áª‹–&ò‘aèğ>(¸£á¾ v)Nüâ™Šµ~˜xØV\"D“nw%O‹,†5bîÕ¶èc–0ˆğ%Éí‰í+3?b€KyVw(e‹è¸nâÿ‡\rxrcˆ¦0Õó\0Y^[¸±‚©Šõ|°\rŒ}%!c\$b>–€_Œv&¸¼cl,ÿÃ–ãsa.7˜gWá‰Í€x™×ÕëVÈwc)‰\0ÑÑ’fãFŒ@X\r¨€_²#MÅĞÌáHXª,7æ%KİN:ã¸dy•xíc×ö7d<Sä zæÁvç˜!;(½?˜ú\\½Ébkø8'côU(¡¥¨c8ş\"›XãY\0äÿ¡&86€™äæ©İ!Áä\$ ¦Abd?~BÈìCyãş¦AÈàñéYä\\ã^DY\0Ä	èCË›e‘2áä\r‘®A-Šm+…G¹ ™V1Œ(b™ŒÄ.ˆ©„ä’ywâ“ÿE@D\0/‘€?™'d·³KrË û’öJÎ[“!wê0d§’Ø:1.(Í‘bù86™\0h>9û¸=9:ä‚8‹‡äğ^OY#±((=9ä5“İ{â]dœ˜°&Æ`‰¹‘^`5å\r’ÅJ2€d’™8:Ù&äìa!RÓÀÓºrH&ââÓ‘ DŒGy\$JdFâÍ€‘€Z©\rùªmnQZü8 ÓÀÂC…Ê:#y€F{À!™^\0¿]à‚™[Ş\\%;¹`^¦W¦\0F8ÖXddÎC¤w™V)â\\¾}«Ùe–ÈYmƒ‹” +\0ş ûj² Èª¹°såÁ—[¹=¦ØhYjÌ€ù™fåˆ]¥àŸ’ÆWù]å™–X/Xd£–6Wî5˜YYae‰“äty\0æ–`y‡È¥˜–a¹È¥Tp.¹Q\0Ù•Öb.f˜K™‚eŠ@I¹à—ğ±Y‘æBaù[…4Jh¸™–ù™vYy’æÈ™›û˜Æd™˜e¤À^P¹t¬Õ™ó3‰e¡˜x<WİÓš>ay¥«vh ×“U8Faw€ÆÂ…YÎdW‘–h¹§¡Gšài3À„EšşJyƒU‘šğ8¹d÷Yî¤ÅBhcdôåÈhshî\0QNiDæ¤,VdÃJ‰š;6o±te}š^hm‹¾ïx1y#y”>_`ÑœXEùÆä¬¶Dl0[\\dœÑ­ 3·Ò_sìƒœæJY=çAœâÌw£çU6sbQ·Ò°/ÏëÌ›œÎvĞ€[#NCy„e‘™g9}\0Ù–~jyØõ™IxÕç˜q‚åûšpùâæ‡X6`æPeoşzggš\nÀ`í¾’ZNyy¿‡ùœi¹£fÇÈ‰™âg™ØÙğç£Ÿ^hnÙgİÖzAä¬S™î}áç¶¾` HÒø\rş~yôçööparèŸÖ~¹î|jˆR[ >}Yñæ—^ºg÷˜[gyƒ€Üg Åå®€W9z˜#åàDŞy™©‚ ±Jà`<‡“ À.š\rh8nƒÄ¦å¹j¶Fà:hI˜V„â¢gÄ,¡Ad^<V_údŠ)¶sƒÂ	›à&«B31¡‡N°Ó»¡¨1™­O[¨kºçá¡~ˆ­·d£YlZ!I¡¶\\eàVç—b¹Î«¢Ö‚Y¡è¨\rÆZ™BB¦‚ÚäHNvZ%fæB®š f-“.[@İho•\"NS‘áJn}ùñ†X!f9ˆvÒáş:\"ã¦\r>=HŒãÙÈ=øíé-†<¨8àY\n‚ü	ù€\0æp:9Àæà»œüä,”X#y]ún=cå|ÌºØºZéU¤¶J!¹…‘QéyQh™8õBâfzúh‡GéoŸş—:KKU˜~•z_cé¦\n6š\0007şÖDzhé[¦úai¬ö½s9iµ¥ùàçe\0nM¢˜iM¥@/ÙÀé©œ&—Zåè±£W€ºæ¢—Y‹i»¦®W:xèq§¢7y‰iN•:}eC§æY:fiäÖ—úiÙšy:wè\r§ñà‡„§¸7ïÆiœ† .ºŠå^\0ğ/¡’ úxjj´ÊÚ‹é—§Æ£zƒ— ¢š”ç! z‚æ‡¨–¦“ê1¦lšgç¦`DZYf“©^£:],S¤™\$\0åªŸÚÆ7§Î§ú¥ãó¨œútäß•ö¦ºvæT®¨:ªu§FVúuj¨&£ÕÉ’,\0Îõ­>©Z®éÍªşªÂ‰jÇ¥I[óqåìŞ	¥Û19ª•Gº¯\0Û«\0]ú±j±¨~p ˆæ?ªn¨‹bá}–¤UŞr°ÄcƒÎ’xêé-Æ=ÚM‚?<\$Òêù“şú¸åãŸK³šT™>øÔêÛª²zÀdİ«–«ÿjm¤e‹ñãŸ‹Ú>ŒNf{§BT?¤1ølaì\$*©B¨ç³ ÆU;‰@\nN‚º}˜¯,è\0 +BÂ¡J°¨Â¦–¹šÕV‚[Î€\00Úğ/-®è`\$€uT€\"ë¦9­Uu#kİ®Î¸Úî:Hè* #ÕHME &ëœèC¤€*³Rû1@\"€ˆä,€)0S\n˜	 (kãO®7ëî9®¹[ë›®†¹úè†#°“¤°µ€£ˆ¤-uR .€9í°®¹€>3°	én€¥°‹ \0+U=N»0±\0˜È@\"ëÑ¯`à+™;\n˜õX€¾1U#€)`u#€‡\n½àì¯˜«âã\n½b°Ã ¯zì›®®ºï-l¥\nÎÇ[	€W²¶Âîƒl³®•#š€°@xŒì½\nÆÊ›1lÉ¯şº-lÒX\n®€‡°1“›(l¿³Ã ë¿°.ÉñëË°.¼û1lMIzğìÔ¨	šãUU²@\nx„Õ²fÎìÅ3ÆÍû)ìÃ´Á…Í0L‘È[;ìŸ´îÌ*ì	®fÎ›\rl›ˆî½EÏì^R®ÏûOëÅ°¸x·€™ˆ.½ÛkñP¿zşíZç¶À[+l°NÁp·ì¾ÂDí³Ë:ìÑ¯@\n{ºĞ{ìJ9®ÄûUÂ©±P	Ûl]±€æ»bRòÔ+¯kÑ´%BëÉ¯6Ó;í8R®İ (kÑµ\rT•VmJèÔå*ÂÂ#ËUDÓÊNÇ;€Ÿ±îÇà\"ìƒ¸>È€'l²FÉ[Lmù¶fÊ·€‚N¾Û@ìy±ö¿›…l…¸náî€n\"fÕûŠ<µU½ˆÓÿ\nÒ€\"â/³vÔØ\0§‰#.€\0’AP¬îj9­<ZënHR¬,Ğ´kÑ³^Ò;&Ô\$¨	µ,nO8\nûjUbÁ1sû-°Q°+İÛ n™±3¤›M3·Ó{—\0ø–è/wn—ºÌ[¢nI³¾Ï5\$n\\›`*nÇºnÌ[•b'¹nåõFlš\\ä+ *îªFè;¸m»6äºùn÷»îå8‰nY¶¾í{˜lcU`	;Šn÷®ÖÊà¯:I®¾5/\0ùd-Ğ¸Ã¼†×#U;O \n\0ŸP°›Îo–ºĞªïM¯†ñØ„ìöä/\$Ô-¸¾P«bvæÛyom´ L—>è.Îo#U U\0—½¥<[âÔ’éä%½µ®ë\0o)¾òÛÌBŞ	<;ènxxûÏ€‹½\rB°¯ï´\\/[Ôm¿¿ÉûJíy\n¶Îïk»ÖÛõ*—@–ó1¶:ş€'Â·\nè\nèï§Æ-{ëo5¿Ü+Úêk­S\0›şívÍµFpèí;=€‰³ïûíïºNôšïE½&Ş»ÓïSÀ®ÉÛÖï×Àî¾N€µ—øB«Á {s\0¯‹J\\{]³æ¼»½\0åBŒë±ˆ1tñB«p	¯³¿.»!ÕW´\0&\0ª?`%\0ŸÁ˜	|\0™‹eFzäÂìè= 'ëü9®ø:íğ©ˆvÂ»p¿½ÎÓ|1j[ ”ûl¿swP¼ë·¹û€)ÂÁ‡÷\r›ÂíÀ,°¶ï®O\n\\:oÃR®€pU<;õ¥ÁUø7m¿Ä9tkíw®´,Œk×¹gû§ğÙ²|,qBËTıHËñ9®!8‹â–Àû¾ëñO¼,à)påÅ0æ»†íõÃ€üUî¯ÅnÈ»îp\r®¿P´:n ˜ƒmqUòüY€WP–×x€ÆCšÔSşôûÕIÅÎ%\\eoÛ¿÷ûêğõÀœañ§½fö¼lïÇÁwhï%¾—¼\0ñ¯¾Çên§·o0ªB»ÅW;ğpuÇOœEqUX\n›½qã®ö.q¹O›<p•ÂeK}ìğdîÆTñ?ÈúÜ	ğ}¶¿}q³»`:ë:9sœ†qÃfï|ò²\"¼ò?Á6Ö\\€€¯U`	ÌÅqcÇòúõlm¼½U`)\0©Äw\"°²ÕcÀVüœ€ù´]K#ìAÈ	|íÀuBÛÊ%½¿ƒËU#Â¼ÁV.<Hn:Á4+@+€‘ÀÆÊöbÒd/Tö<µ‹~Ê|ÔÃÀÃËXìÙµNÌ[S€¹?&<™ğJÁ>æ|ñ¿Ç «p´n¿‰oÔfö %îOÉ©sLÅk±\nîÒ<¼íø~Úü¾pŸSË[b\0œ¼¶É[ãñÿ¹w,û q>_œUó'ÅãÜ_o»qJ¸‘l)P²[{%Â¦èìA\0¡Ê3ËLÅ:PíAX¸ñüİÕCÉosT9¬,\\|°MÉş×l\0ª÷ü.sbà\núş\0èÑ»Rk¨—-›7k³ÆpìÅl¥T/3€no±V Úm!¹øü\0¨¸¸´kÙËP|ís¹‹G|ïïròÓà,ï/ÂÖÊ¨ó°Ìnæà*påÏ0æ¼ør2ò×85ºÌ	@(nO½1|êì’–æÊ	v%½Ï§@in¼µĞB\\	qbÜ—1¼ÿª—@İÔQ½+1`>UHán{Yì£Röİ\0\$€¬ò×ÛRl¼dç *\0¿Ê4*İk¯²\r<»çô]SFÕW°n-›%Â¥ÑG:ítc»ÇGû€‡Ñ^Ì€©ÒQP²tÒGGıô%Î•L0ª\0­²f» !ì÷¹~öµì¼çC¨ìp–ô/;ÒÂÙÓ,8ŒUÄ†ÿ%Á½…E€…ÏVÉp¶Tg¾Œó1‰üğ·T“\nµHøµñ‰Ò.èû¤òäÌ^¿˜Œõ\\ãÜ¿uTUPÛçÕ½N»ZïØ\\ß[lñUĞŞÿûËu3ˆ´+` €²ü,æNu;Ôÿ.«—7PQ›ÂëÕ#1TûïéÔğûluS\nİ@[]ô×®P;Hk±R¯SÛuiÓ1šíòéÉIs†OB·Ï9İ]õ‘Àf#°´p\nß7|)âão*øµÂÂO½_n]²^.óá®ÀĞ¨âÖ1tjkÊ|+ piR<+ piĞßM[×ôÔ/%ÜBºoœëÕS®Çp¯â±“\0>r¦8	\0/ìóT^ÇüõuBıRÂ»Õ—C=…öÕl+]‰v!°?%Úöî¹ºÛ1[ïmÁ±K1[Ñğ‹RÇL½BòS;p\0¨—eD?rı×W/İwrı¿Öì¯€‹»)•òUÊ`Úì%·Ë§gÛÕXÁVêœ/ôr^-€Ô¿`ÆNíƒÏW°ªuc»`ûÔÓÙÔşü»Ô€¿³ß&[B³Ö§.€\"\0‰OQ]aõ]ØŸTİ‹ìØ¦á]µ\0›Põ=•Osç»Ï6à>n7¸Ná{!ñk²=PÛŞm\rÆĞ¯bÑ¸.›ô5°wPÛUÏw=X†í¿ÙC]WB«ÙcÛ<Ô¹¿PİƒÂáµ'\r;=lùÓ_\rLâ=İ.;Â±U,î¸ì,rpûÒ¼,ño-ÃíR°°T—¸Â[ÜJ·µËùtNqÁ0à[ËñÏŞó=0ö/ÛGaıTt3ÕK“q7ˆO*\rïÕ´¿\n{J÷/Tè{Ëì?ŞÕ<@,l÷ÜGÛjò±ÇÄ,»òN—%=€÷ÅÛĞà/ñÕ×{­Â£ÒDÛb÷İG{õc†Ò=÷n]ß†\"ıêòÓÙßQ‹ö	ÑW	Üñ1Ö1[0l‹?ûâb;¸½Z#íaÁ>Ûü±rÌ^ÿ[EíÊ÷1¼¯q%‰FÀû½syÊ>#€ô§ÂVëİ)€¥Ó¿À>x\\Ïg|©bÑá·M|üğo¸ä+]€øÎ.=†vßSûÂ»¼şä—{9å]´_p§çî0CÀ<­b0hQ„	ğ¦A-t9ŠÒ@ 2Ö>0—dZÒ£­b=òe+Z‚Âè\0åAĞÂ£xˆ\0°˜üG\n_óU”J×\0>-(MÌÎR¨<\n7ƒÒ³WŠ-,Ùä+† <åRòÒÄàè¬O¡`/À<§d÷’Òx p ‘!ãä¸#,P:uOx¼H0ŞM'Yå0ŞOUå3İ\0ƒ	HkÊÈËK«£’Ã’-b»µ`Î‰Èàƒ&T«ŸÙGx»æ—Xy~W˜&ÚùzïÏ–€<­u™6¥*åïÑ8\n]€¿ÁW5&İ€Ş ['¹Ÿ_²vßÜà`)€­½/…ü©ôÑµİI0³ï“¶B[İr3Ê†ÀÏ-\0›°Wa¾oÂÆò×zEqÍ^Û{\\ï}²‡Ÿ½Bó=Ï ;¶ùùUgŸÛúÅİA[¤n”R¯ ¾ñ[è p³zÉ— Ü×ôß¹h[\\z2G£~†úÓ~½ğUY²nìzâé0Š²§˜áªQoğ…'o¸ö¡D“T xnOtÃé¸/4D„éÊ_ş¢òĞ\"Ğ@s¡bÆfŞĞ±9ÜˆjÂ˜Ìyfq‚êÔj¬¦P´’dèÚ=N\nšdà;4Q3@ ¸i‰\n«†œ\0VJšF7ëN€ >HÁ5JÉúê\rÃİyú|3'§Ş¬-QşV£há¨õ`†=ÑëİÈ,zĞƒÍƒ™`ÍÀÂ-%ì1¬	ÎàN^]YÅåõbnäú™Jz~9„ÁìñĞ?{T°]ëJ·šáMæÎÂ áX/8jºBeÉáÕÛí­`Ş·T0µ >\0ëëĞ >¹û}ëËIó€Æe©„‹ú*`ˆ&ZZ{¿>èvX	È¬‰Œ„şR«>°œ˜ÈH€öX\r?¦¡\\úË7 ÷Á.=ĞïÊ7~V€ÏÙb7dC:%Èä€;ùuIÇ€\n\n™¸ã77x3rÔüÁ²d%K;^ïÈĞ^­‚HR¨[@…±ä'¬&³DÒc Úy—@ƒÁ—Å ğJ\rw@…€¿ëÃFAùä=‚v|F<‘\\ÀÄ\0Ññ8Ú\0×ñg‘Kw*ÒA7Dî`*\"|*>Bùğş‡¾¹Eãye ö&T›Hlàôü ç…dã7²YÚeV=|WñHS_ï”\$ ‚ËTÃ¢A‡ê«pATD§>T·°ß(\rïàbÆ‘@3ä\"|ÿ7f©\09~@™ó€9Ş@ù³WÃD-§7¢ÚK-àz3wĞ+6|ú³WÈ¦SôB¦(\0ÏÇGûòˆ*\0ği?Û¢ëÅÿ|ñpò_­!õŸQ|]ä`Ù­h8ò×Æfq«î<Ù<µŸº§ ú‘,Áx™ÿ-\$³UıtªÉ”\0ÿĞÆdÒÒbU\"ïg×ÿcır%¢Ò_eÈ h€û1\n5À9¿óDR5şÌŒÄ<ú]”„§Ø^ß7±ö	™!³û,õIJ¹ŠäĞ_Ä½ìx8 †@±L9ŞI-;7«YLè€×Ã §~d3y±eò!¤8P~ïĞº?Z›±¦¸ğfdê2ÒÒ¿-ŒT¯·ßŠ\"Iæ‰t«3&Eì®R\$Õ{+…Ë¿!šBAŞöûü>	«šÀÂ|^?âs~;¨`ğlõ<®I	Ø©Á«Ih›éÿå\"\r™	&ŞßRª3p¿¡»6goÀZ>z˜¿©²…eúo¼ßZ\0ñï2cŠ¬ˆƒó Rjš­\$›gçÚ&XïÊeaIûøiŞ’’§#&m2Ÿ³i(ìßâ[¬{¥Oí:T˜†e’zÀ‚ğ9ß`9ù+ä\"\0;€Ö'Á!}wö°\ratù¤6}˜¤Z¦T6yŒQ¾xºI\nÅÕÕ¥.‹?É80x¼Ééíü±ÉA@\r+¿?ÄúÀ\\<Sùüq3J9‚¦qÀAßÊÿ..ø*Íˆ*\nŸóá}f¨ñ^Ã|À\r	8QıËKNÿYdX†A\0óö‡Ì©U~îòĞZ\0ÃøŞøA#†“øŞƒèÒÒd]ã77·’6û„tç’Ac„eÖşºy\$W–ÆìïêšÒŸôŠ‰åÑÇÿ=¯ÿu¾şÛèæÍÄÔ“óBaEúvÿñWiß’ÒğÚ´*ízÀĞkïÇ™°\0€Ã<´eÆyi¡©h7ÇO'šÀò]Ú\0°:²eP¹¼¢İ\0eâèrA¶°øˆ€I\0ˆÌ@@‡ @*\0É\0¶\0è×˜ ¢\0006>:~üN²\0ª·8çºÀ6~ÿ\0nì¨ã+@>yO\0Àe\\¸ğ‰Ö@H\0Û\0îXÊÈp@/ywş£Cg™Ğ\rh@<WäöÜkÌFJï1 0¼Èé”\$‡™p	KI@jä)TCCÍ\"—ÁX\\'ñHwI_@ƒÌ ŸFµÁcn	®Jõ;…e„ı)UyŒl8\0?Ru\"H÷¾¾-ì†›:×·Ok F\0b|6Vœ0“ñ€Ÿ™ˆjğÁ8MSJ¡AğŸı½m*j+”¤\nP(Àº5j8lü`H¨P#AÉ?À:”ˆ\n8dO€6À‹yµÑıÀgªáÉ OAT©ÀĞ—O×@ÚZÃş³ÕØ¢ñõ¨|˜ş®ƒç0/‡Â÷ 66Î°1³¸lµß2ñ¨	nÄ\0ğ2›(!ÄLC”€HÊš>o¤nÄ\n!è\r«…üØÒøCQÀéB&\0r}.Ê\$d,ñ/ğ&ÁMõä½…DP3àQ“~İæ[)æÈLq-%!”‰fBÓà`a>‰ô]Ô¬\"7iB„J@å‚TÖ	`¦0AKàÀµ„où«ÌHiJ œÁ ‚`2³\"1âmNŸ®í9ºCWPZ¥õ‡D,ÈÀ&®¡ÂôÔ;a\$ğ\$Ğ&©j •“l‚15–1¸(<™”€lî ¶)öÀrp<Îdir·hÜÁc¡ÉK5¨ı!¥8#³jZx‚¿X(ô\nòĞ<Mä˜N¤Hémß %'66‘§ªL.\0001ëèFÄîaŞ¤¡@^ \0ĞXôGğ`RŸK)ìgï\0¬“Á¨#w)óV°!pl\0.Ÿ¯ƒQ¨á¬È E±šéKTm©å¨7PJÅk=Åj,tÚ\r@C º0m Ó\nc\rl)T> …~\${ÚV4¿yP}çáOÍ F²°Nq&Hu01€ÂNÍ¾ƒtĞ ©2`ŸpG`ÜÀ}[á1ˆ7PD\0ñ?OƒuHŠA(àÍ¿1ùÜŞ€8àí¼z5ã)€lÀ^Å*Á¯ƒPĞ²\r h RpmA´`Ì‰ïTÇöÏº`”AƒĞ\n’ùÃV®­ •Â‚y‚!ØD/ñ ½B\$êõ >ÖæV`b!@¨°ÊÂ¬Äâ•`áÁ0¾\nPï@r@a RauƒhÔÊ\r¤'¼A³Á´A°üé”h©h6µ_kÂL„¥¢¤%K0’_ŠBHƒPXÛLˆ-E¤¡/%>\0æ„BŒÈ- 8zÑí2R#‹õÇ|^ÔÊHr \"/¹™ù%ÿ	à•Œ4ïÏÙF\r\"d–BeB\0*l<àã›„ÑlT&—ğ†Ÿ§Âe\0ºõşˆÊ)eš¾A´\nè)UJËTr)eŸY“¿…6Õ‹N¢àPƒ’Ÿ=q}î–;T°ÀÆáM§\$Lbx˜6‚ ÚA¸-&Î>³æ³0”Ä¿Àñ	 ¨ä’ïÆÁ	ƒh÷¤w#ÕdxPj\$BÜÕùê£J1ÜĞ¬a0Âf…dZBŒ-¸Z€c¿A¨…7	º±ksİ+ËôBS¸N`ØMe¤!xŠ	+f\rC/\\©O’*Â\\P È/ˆLÁêàÚBú†tk@(¸^Ja‚BXŞ+¤\$˜7 å	•:~^zT 0K ÙàÚë…QÅö˜H]Ï¶TÚ=˜É¤Ì1ñûˆ¡‘A¨{	ddH9™‹àA´6-,càBPÌàÚƒ“|VùAÌ2ˆJdoÆABh†2‹tçåOÿ¡3œşƒi	€€@”pÑa§BÔ†k˜Z|3‡¶pÃRŸ2Û…u\r(˜À¸@°™A´eîpÔ\"[R?Äìˆ™¾…!öh!6d¯ÕLA©Ü\0¾!âP@õ`kÏ=u|ûğì#ğb¦›™hı+ (³¸dA.ëƒT÷Õëh lîÊ^ü½Îì±`œ#åQ\0%\"…D \"ìXË_a²%\"‚Võ1JÌ@ñPè`•ÂJ‡B‘Uï”T¯‡™*&!¥„bXIP¢Ğ%Ã		FşÅôËè'Ü@E¯Ãy6şĞj8¢cqP%µf˜Õ¢Ô;¸y‰Hšº£|„CÀ‰ë=ø/mYÃ×#N<\"Å	ÔC‚‚lõ^|*ö£0‚ŸâÃê-µ\re÷ú½ğ&àcŒ¿×¥\"£ğgß ×`ö&à|4øä\n7Ñ ÁÊ®&zôä@7 E\0æ¾æ‡Npªá^èÌ§&|ˆ#5-Pµğ7PŠÄ|AáxÜÔfùU³¨E¾`d}\"©y\\B€ÌP{C\r!x¨ñaëx•‘ï]2Œ²zœ“Õˆ…§ãùˆuÖô !FbD5DşÂ!óØ±`‹áÓA?ÜLˆ”a2W« vâ>—	DõÊ(ˆ²<± é	û63¶£9s†°tRå>à“q.SëøŒ„Éš‚Dh*İÈØ\\F£ƒÀa©ÄkeXÿ†œF(Ğ09Á¾VxÎ>#sÌØĞ%bA¿sˆÜÎH\\Gğ_ñ °µ†ˆÜÎ®#¬(Xˆ0‰¢7/}ù¬?XŸ¨TÈèš’…Ö‰0àë7pÌàTâ5Ä‰Jÿ†«ä Ro‰¡p¿1chËãH}eaöÖ‰[Ìi3x~/UGs=C‘ëKÈ•ÏealBn~pûéÿûãB<°ÿ`µÃÖ‡Ïâ\0AÀ&ĞNà·#9ªòÄLøEpŞ!%\n‰ÌF\0ÍÑ7IÓy5Â|NH=)Á0‘?¸>\n¨tHEh¨ ö+ñeÀ. øg!ÙR‘4ˆÊF œ¸q¯z “½èy\\Šd\rRo+Pt“&'ììÛVòÇ¯aA ó…GĞÉ[äwÒğrY¥ª`¼ù2(ÔLx¼À©µu‰jfb)+—ÜÑ8 |E!…ç«©×\"d°`aÇµu‡©-TRÃÿQHaëE5ˆn8r	0¸H.°\\`©„\\ºš”jrŠ1HZ&Íƒwùô¼9\"ĞI„<E!Š„õ9ê›WPáPDV;µN\rñò¼Cxm1EŞñ5u~!‰™¼R7`¢˜<R~çiù“ü8EdF`@¼ˆo^(„SX­ÀFàˆœN‚Ôœ™TW²'ÑQ€ÿ\r\"ƒ–,Ù·¬ğè ›Ås‹¶`Î×ÊQb`É@Ê¾ñè	”QãŸĞn^ÊÄÚ^Ñ	!¸™ÍÊ²#I-V¸Lo€ëÃ!†LYe«È\"\0I€@NkV%şÈö-‹Øáe™b°E¯\$üÁ8ßò\n\0a'D¹‘¼‚\\©ëüXÈ}NC•Š‘(\"	Ñ _\0a O?:\$ˆ¨8°ĞaŸ~DAƒ”Œ†Ûò¨Eq\$ârÄî’H%”tPH†¡–’‹Ñ‚|^òoõâù§‚4x‘I†±C•Eß„V9:Ø/8¼1: œÁ†‰µ>4’Pa€Ú¥ªŒ aŞ¸%pUïÅMŒ%À< ˜¼Ğ™å¾æ8+™ä³í¸+q@¢ÓÃZ‰ìqùûğ!à`€¾pjÍ	[Ø¯ƒàP0ó«m ‹8È!(âEÁy‹À	¸´¬Q( j¯Ã8 ¬dh„âöÃë‰Ë)ùê€(A`FPŠş~2@*HÊÏõâFY„O\r¢\\xÁ€c0›ıt_3óçÑ\\_DFD¬ò!-TuOx¢±Å4‚ráï¼(ˆ¿Ñ9ÔCŒğ\"ÖD_ĞQ a!´*h.¢sËè6AL³mK‚Aâğ2J­Æ“‡åtÔã†±¥‘Z@İl·Eù¬Z7¸©e¡ƒI l\rö°Ğ…†³‚N”øÏ‡Í1«À.§ßEî\0„jï`bPÚ‘9²ÆI¬™JÂ•íiÁˆ\nU&R¾5ÙH¶É¾˜l1•pÄñ`ÚÃÆ'ë	ãf KL¯\${#*ªû›1W†”Æ6ªRC£GI˜|7Lq<İ¸î’ó#§ë˜Ù\0mch¥yJÊ`Â>‘¸T­FØc—-Jøäb>±¾¬Æác£9XÓ…ˆŒf£j)_ì°Kb,ìSUùFŞØCA‹\n¾f1±½Ø›)=kp±çsRs£zFşcpÇœçp/ÀVƒ9Şš±×¸	x‰Ñgâ5œh\\Ò68âæ<ÌtÅß,„\0é”ˆĞ0#¦™£•Ú?ıµ¤ê¬#@Y8²S‡“ÚÆUå©¼Mdæ¬tĞ3QÓÙ²3¤©¤#2Ön‘\0A ²h0Ğpû'¶ƒnÙGYfnÏT“0˜ìÍ,Á–4áÄÑò‰‚!1ÚÚ'Œƒ†½ĞDKKCyq×š\"«´ùiûÜwèíñÖš“ÜğÓÈf¨ğëUfÇ‹eÔ%ò;üvp<B×ß»Çü¼Ìy`.È²ÙQÇ‘if	ßŒyæ‰ñØ#ËüÎÇİ¬|q¶‘ñÇ‘éÇ §Ö9 øç1ÉãˆÉ¦Dº9aà7'‰\04\nÀÎ‰¤ë1 à@!ÇDf†ÊÀèP0Ê”MĞªZg¬Å³2wß@ÑB\n\"©’ÒP£,¦…á{šzµjFuaùT}ò7p|AäÂz:ÄbóQW(¼@œ³’ıe%*­ !-m-µ¶:”Ìğ:Rˆè„»Øûµ¾(4q|n•‘¹(¹skøàA¸±.UMÿñ\0WxHît+½íÌ›š8B°Ü½¯\\€Ùä¸Ù!zs\n×YËë€‡?`œPH	u} ˆ+˜æÉÍşœD8ÊUğËó™g<`M¹àb,Äaè;«•E­~À-7:wÂæMà›÷-ÎL†6ü)!\r\n‚¡×k­êÀ¹¼T(K…Ò,„Çmêd8Ç˜êmÓ_V¹.›‹ÈV´à.B„Ç_­éd/µéou!1ÍÌ|7„ò7¸üB¨…eĞÜ„É’È¸\0ƒ!ÑÅøVÑ®\$,ÈmpBéfC+~–õÒ[á¹\$m¿!1±#	 ›òº]lnîËƒƒ7J’dº‘u²éñ»Ó…åA \\è9r‘8åÕPHN6ä&¸'têE#§R2*d¼ußBšI\n­ûO8Vo*éúE I’\$¤R6ku˜ê¿†6ümÖ€,H´lÀÜ‰½ó›·NÒ)Á;ÑBªßCœÒ\róäRHv‘Œæ±‡¶õíúŠH×q.ÜQ¯Ã©Y’ ›õ·è‘\r#>G™MøÜA¸ßlfêÑÏr¤‡H¦cl*¬oèâq\nÓ‚É	Ò)ä|Èq”á¹Á‹N¡œHXpA\"éƒƒ7’/¤!¸,Æà²F#‚	\r22›úHşmÅÂFs‚	n\0)HÓpA#YÁb©RE\\¹pA#‘½{‚Ç‚î\n\$•Hê’HäáÄ‚Ç\r¿Ü6\"B´èEÁ“Œw\\‘Ü¸9pá\r\n£´øN1İv6xBí½Äƒ÷jò\$	!`’\"â1İã‰§.Î`d·—sê)Ò%@n'¤­9àvfñË€ÇH­€›¶±hrŠéÒ›m–é¨€Un\\ç¢C,ŒÙ\r®\$z±mQ#bH¼†öéî.Û]Évmé\$ZK”—·R_[½Ç*|æpÖL3àÈöñ•5¿t‰øòL|<èV[~:1:\0iTce	0ÏÄ~üQøƒ‡C.wİ\r:sÄçuÌX¥W@ÎK\\º:¶sÙy¼³Ãg‚([œc±j%¼é—DœDPzlZIâÂîVßÀø¸rpfç¥Ï[¤§=ÏK‰Ö=06’Ld6{ÕÇºïu¡ÄÃS{Àü \n™Ô\"Ö@p¡zE&0Ëİï{ß7°ÃÑ.?Š{ò2¬cñ¼ÒÈğäş)Ü|\0ø	ğ*ˆãØĞ!a±½Ë>÷9îˆ;Y?!á^éÆŸƒ	™lŸ¨C‘V¬½Qz äPÇ°Ïe%=—^òH9¡‚·1Å=ÃBBô`—©r…A„®ô-Èt«ü(½¤ó^¾½—,mìKÛ×Ú´“}Š`n¬ğ^+ÿç³°ààTÊ3JS1ãš9h“‚9ƒI{@cí4¢‡µ€^Ø¡Î¼øŸ8sIBe¤\n™½I”4úIîgôÊÅ!YÅ\nøı—«çIJĞ™\"Î¼„DûDòÑS2ÄåLß= -(ÈŞRcæù2OrßÛÁô+÷GÃF_Åóv¢9õlXá¾ğ&ï9À)5PÔİRŸÁÀãXï)ùúÌ¨WøoO_-¨ŒƒÁ)ÅôË0Ï‘¥)Bˆ• õ »İavK½.	M{ÀÒù<Çÿ}à°¼zÜN\nÌ'—Bú¼_hYâ³×@t\0‘!uâ&0u%ñ[ÿH\rÏÆ\0‰!zÄ<x³3ÁÑFÚÄª-%	=¨câùY1á0JÉ‹XĞèä'w²²²À–‘{xädÙQ‚`„H&ø œTæAepÁ–&S^*sü×¹²¹Z=ô•Ñ5“ëôù]ïœ\\Êó‚æù¤õƒç)]ïÒÉŒ>´!ıAã+ÅwéÏö¥?TŠ–Yä±2°K\$Ë‹Á&Ueû€÷‰b\r;_¹¦ôE–€˜°w®’ÅÒ…Œö(¬T¹cğÀœ¤–8ÉÙd±Ä²Ì°%›şkS,´ìØ‰cä¢âˆ¼’~Äı–YºLí2ÎS<‡iÒıİû«ó\$ŞÜ‹6@!¥´T¬\0ñJ²a¢]C9“ü1ğŒ?‡­‡ lD´7C^4Z@ïÌŸ?\"{ÕòZÃñç­·å®@m‚D`iıó³f‡‰A~X	8 \"På¶J-ÎüÂAíx…‘u‹1ÀÚŒM>éÔ‹™hK€Ü?~[éî˜{’áâ1•m~..ô¸ÒÌ`eÃK‘—’0É\r9r²à¥Ë}fR•¦ô ‚1¡ãF‚xå(µ–ƒòÀõÒéÁf2Ì–]Pzùtòë¥T*—I.¬=„¶Ø¬’íåÙK­D+]äºÃ†­eß¿Ó”Zøü™9>u’NÃ©Ëº|~u´„¼w²¤áÃ{ËÎ‹J@œ<¼ÙzRØÚÀ±z•-^Ü(`9%êËá~ ËÕ÷ä¾Erù`…\${e-øûİ¤¤J¤N~µ\n{0-Ô³*K9~Ì“åüKôH–VÌµ(—Ä÷#¿8.è£÷xsÂÓ¥Kºhš<Z`4ÀàIÊ[HİÃ/‚¦^\$ĞA±c²î¢#Ì\0×0nQkí`äy\0<=é”[&a,ÑÀoæI‹kQ® x\$€ºÒ‹f€göüÜãÄ»©†³\rÀ™L(‡®Ql´ØËó¢4@‡0…«Ìqò„%ö´ê—ß1_lÁ8NSZŒÌP!©š\\¢Ø0Ó‘øA;—tn]\\8Ø0SÀ2La‹Oj1ÇùE­\rÌfŒ.üúc\\ZyŒ®&3Åâ˜ÓÇ8¨MZ€7?”[1êc‡f<Lm˜é1òĞC#İí–`=.à•Ö5ôqhò\0ÚâGÈhı(œ	’Ñò ^#’Ë.adÉ¹“b>íô>|™”`HÿÆ(™D\0ÔÉÈ»q8AD?ù™S2^e€xP!,bù‡Rdõ®eyé•S,ÆÀôl\rï4ÌéÓ.Ø'KkÊø|gÌ™–ó,7a™šÕÔ:äÊ€.“0æaL¸aÌ\nÚ%Ìa›Aê&oL±™F÷1êt2\0qQnå\\D 1.aíšq”<zDÁ\0ø}š˜––\\s;ˆÂ†ŒòÏ•Äh“¿&&F€gÇ&cì³gáÅ±ZœMöÍ\0Sxµs7“ÌÖ‹ç2fÌÑIš fk£™²vÉûÙÛ‰<e:‡º‰’\rÊi1f¨ÍĞÚQÍ+JŠUò%Ào¯Yc<>-fùãşùkc¥_ÿDô÷Šiğ-PÀo\$¢z<{f´õæ!dĞ@ÀQn –´ÄQ¾#ƒäâ'á³ŞHÀŞ4L‰ğ\0@¡Ç2©ƒÉB'ä¹ ¢¦ª47zº!ä™è?¥rG˜WâIÂ\0´ÄÌ0@^ÎÌüˆş}:©;)¶ÑÁªí~h5†š;)¦ÄÅó)Y=-Ä9\0øÉ¢\"WçLE)X4(¸†R‡YÍÌÍ&5üT¥ ™³[ÁDèTyhP-Ùk¹eT=gŠCœDI2ä\$1YÀÿÂ²KU6¡üSéh±PØàrƒ]Š6ÊäÀğPæÜ?*{*„„ì™éµ!ƒO8¢ñŒO\r 2Xš@÷E‚‚B(0Ü˜”Lææ¥˜•ñàDÜ£¬3sò–d~ªTÈ!âF¡hãWBK,ˆ³ËÖ‰m\"5†&Lsú[Œª‚3±_gÖ\0ÖÊ³UÇªâÀÍ÷›òÕ-ñ4ßè¡Àx“ø¿-FQ¾´Vs%ol¥l¢™ºÖ28ĞW/R#A€wŠ\" ‰ô^êá[´A+'¢YÂì  I˜¿{4“¶ñfR½Ñt–Î)…röğg¢¿IÒ 'FŠ¯‚_˜XVà\"à>6r(ô.÷ù‚ÓæÚÌÈy-5:Ø\rÒæ/„höÿØXPË ¿ÌB[j-[WX\$0?%¹B‡`	©d¾#ñÃÊ€¹9(\$¹¶Ï%£…î|M¬Àvh›Ïa ˜Nq˜æ	\\Ÿ-³C£Ÿ¼¾jÄU¤8Rñ¥•Ën†ø2\nsr€¨RÖâõM?†-ôèè ‘KÁ\rÕ5	„^¨¥ì TÁ+‹Õ2~s”éÁ»‰B}Ê§Š	6Ât{õ‰Õš@ÚNd‚a	>s|Â _ğxLE‚5NuLê)8L%¹ÄÔŠ	4¨«ë9O^1½WúfjD*÷°‘x\0ŠÇŠBË@ÜRX†ó“€‚2ù}Ï…ô¹8x”@s‹\0g*o>oĞ\"	§Ôçpƒ(G0²w,i2Ò“#Æ}‚r5^ôíàFõÅ*Ïİ@\\Ù‚Òq£Ö‚»&1;Ú2;:Ôo“¾ã#“‡õ<¤H€³Àç„ÓWä	X”ğ×±Àgƒ`é8ŞxCÿSK\0q½&gD9\0000dO¢yO!›’Ôiä¨Œ¯Mç“Î%SÌ©ÄòÀñ•ÙàÏ1}šşå…TeèE`bÀ8ŒyØüN'ãsÏNôŠ›M<ş¼ó±mb%‡f§= v1²Å D&»=hÂ\\˜—G«Rò‡Bƒ«0±g#2P6sÌ;¿Å|tTà.ğ^üC÷!ë>÷Õmî,ÈH¹Sç^ÄÏ¤ú^.lTy ¬“&™ÃQvùı`îó)TFŠ¬Ö„Uùªí]` N\\I’È]%4Çy¬S&²/hnòNe”Î‰ÅPd&ŠOš‰ä”´”ùÙœÇÈiÍÁ§>‰AO()s çÔLé¸ˆ<€D‹çØO²!¨æ\"¬âÅìRä‚ \0Ù>âAÏáÈ¤©ÀÂr3\rIL#¹Tr\\3¤üÄ¡BÜ`ÍDAŒı?H˜ãûúLÂßX)mdÀ3%ôÀğY±aQ%´ÌóœÕ9z@¥PñsdáM”¶4 ÈYŞD`½ì‚Ê•)O(7ò!Ï@Á™O?Î}´âønæß{Z‚9.²SÕ@€ûÇNò	¹@( İ\0ÈµadèCòFÑ\0M\0\rt!ßˆµJ<®H&QbËJò).Èµà±¯#Š¬<bt±Œ¼mài@˜ÍÍTW’mŠÖ(qÂmÇcN¯Õ‰ó `€ \0\$%^°­7jÃÅ¥P @6ysxŞj7Kó£lcˆ1³iÆE)JR4¥Œn#g&í bÅb‚ÌpF(+JµP9W¯@î6Óö0¦R#‡\"¯68œnö/4Ï±º4Æú‚Tlãnãÿ±ÍiJ‚Tqøæ€•–G:ƒÂƒú¨æjc×Ğ„CUBƒ¯Ì´YHÓ‡l„±ò†AÔ\$åJ²šd÷BLæ©8z°j²Fd³B€†“\"gŒ”(áÒfĞÉíTu	izÄ™‡Ğ +,ö…£4:`x(\\2¾¡kBZwõÖYÍc¨D1ä¡¶„+J±í&»i±Bú„‹\0ªĞ6èb5c~”²6I*‘È¨ku]C>˜è\"DG©\0ÖÚ„Ú”4§o]dù®Z }h&Hˆ‘º`Òó¸d+*ªİjH¡sÔßÊGÈºöî\$ˆÉ*‘»\$ªG;‚	&nd.¶àpˆê\r´<•²\\Sä¼ìq7%uÉÛšwH²\\¶¸Æ’Ù%©×ÃeŒœ™:Ñoœè—‰)\0Î_Ü»¹y’îÚÙ¿{’–Ñ­“dbQ/mîÛ)²Co†Ôm¾ÜÇÑ6rËDá·ãl¦ß.‰›˜¶±B©Dùµ¾P¨¶Mp\\ç¢BS]‰²±7¥v{\"½ã¦/.öd9‡s×]½‚¥÷cN›ÛÛ:r3ß)ÚC¨î2ä8vÒêUÑ›¢§E¥k:ItdóUÑ}gHWäƒ:¸wà×)ÇuuKî;_7õw²Ö\\•·Zn\räšw¾×bŒs„¦#\$p¸uŞ…U×›¯W.¾³88oÂì	È«³·*ÎÆ]5©åBÉF!Ò,ŒGWÆbB»Œv>Û}Â3ºWeR,œNÉ_s¦ğ%Æ;³U<NÏ]¢;@vìíÑ¹c^ÇnÎ…Üï»}p§GĞĞj9 À8ÇwîMÜ“†—7.çh'Èww4ÛèãœW=N¢Xµ’àw\\ë]ºôÆ.4wP°»µwt2yËû^§x(W\\·3@æ®ÃŒ\n'Tvâ9CqğzKs“·…-‘ŞÉnpäğá²€(§¶\0]ŞM¤R|FÔLÒm·§ïc¤U‡8Ğå¡ÛÖV\\äÆ_’©|	7…ë´çÕ3²„Õı~÷™\"¬œÆ,£¾ŞåI¸\n%&ê\$°ĞçáCˆ(üÖ„¢Yªô€§:E¢Jñ¾(¤›°Q2ofºÉç,{Hùåcß·µ¤„ºFÒ‹¬öĞşä¡g°Ã\0¾¸pÔKğ(©±’Í€Üd!G+ñú°İ‰aDË_·>je‡ÓgY‘±²`>Ğò¡2P¥|#‰›”… ôÃéŠÕg*F”–S”’VPÇ9L^Xqğá:‚¹™ú-&4×'Ø ı_ÿCu“;mñÉ'	í*æãÒ‰?¬š¨Ft—æs!€\rºÕRó”˜½LIšÀôU¡Ş¸o\\YHÃŠ CÊ*„úH@°aŸoÀÊ@aãšÎJ³2=ø–\n£ÇÜĞè! N\"-¶ùÑúDT£4”£gö‡@\"ºg’6YÚ%µ\"¥|[æAU»Ó{>¾ıŒM6…ñ©YhnĞŞ)l†~QKb,í¨ìj„?zo<–*\\\\rãâëPà!¦Óùÿù(¸3AdÀ>S9ñx?!R³?¤İ\0v#ß)Øg¡;*_ô¹‰î0ú W2>‡<É(t#aX\"‚¸Û4çáy(.¾ ¿A!ğõ*‘Â£m«à Ö ‚˜š1Jìli¶-)AÈÊoÔc”À.ĞGWÌ±N†(9Zbt\"Å®G!	È;;äápbáZÌO•y#¸¸p¢qC€9€1\0p\0Ä¸áy!9)¤\08\0j\0Ğ4ºh \0\0003\0n¥nš%4` \r@\0006¦¥M°€À\ri¯€7¦Mš›-5\0\0\ré¯­é\0gMZ›h\0”Úé¯Ók\0qMÊ›¨zjÔÛîSS¦«MŠ›ªß@i¼€9\0eMbše5@`\r©ÄSE\0n\0Ü°\nj4ßi£\0001DÍœM5Zltİi¤S›§)M®œXŠl´äVøÓ\0oMÎ›(ZrTÙ)ÏÓ¦ùMfœx‘D”İi¨\09§1N:›*tTåôÓƒ§YMfš=4šwtì)¨\0006¦¼?Øc\0é®Sy¦NB\noTóûSÉ8Nê…<\nnÔãi£S\0iOÕ8juôâ@\0001\0mOfœHšj´ïéÌÓo§‡O¦=>új`ªéºSŸD\0ÂŸ4ÊräÓ”§Mr½4jnà\riöS~¦ßOrš=8ºÕiÅÓu§ËO6Ÿõ7ºrtìS–¦ËN@˜EJ éİ\0000§!OEAÚntøéÜSŒ¨5N¶œ•BJhÔùiªS…§=NÂœ…7ªÀ@ÓÙšaOJœ?ÚxôªÓF§/Pªœ}6{”éé·Ô=¦×N¢57zpté©­Óe¦¬p\"›ª\0Õ	éà§ÍM–ŸPZ†À€ˆ†§Pô½> ÀSê¨UMŠ•>Šj`@T§NÊ›:ª‡Tş€SP¨'M1oMFZU\r)ÉS‡§N. \r8ªiÕÀÔS¦ëQ°µ@`\r*Sn¦¯QF›}?šjujGÓş¨õOÊšm<ªãéİSœ§Qî8š†Tıª Ô¦ÑN~£eCZp\"‡ªFÓ«©%P\n¡7P@\r)£S©§ñQRŸĞ¢J‰tôjNSP©O~£½8ê‹Tä*BSI¨\0Âší8P•ÀÓ\\©ƒOv ÍI…¾4÷êWÓŠ§QF¡Í7šmõ i»ÔŒ¦ËMŠ¦]:š”U3)ÈÔg¦ÃNÎ¥EIJ–Téê@ì§mRšåKŠqÕj(SÈ§eRÒ¦59úv5&)³S\\©¥Mn£õKÀôÑªyS§ğÍ¡\rMÚo@ªYÔŠ§™P¾œH‹U j6\0005¨'PŞ¤å:Z•×*9Ô“\0gM\" İB  Tn§[Mš¦zß™µ\"©µT›§OT›µLŠ‹Óª˜Ta©“Nò›•DÚÕª*M0[ãTZ¥İ<\nŒ5iÏ¡@©ÃP¢¤5JŠ{ôÖ*„Ór§PR å7z–5N*Ó§%SJŸ]D\n™µi´Ô¢¨÷Tª¥U?êU*ÓÊ§R­Oq½•+éı€0ª¿M†¦õ?ê¥uVª.Õ0¦ÿQlÍE:jõ?*Óø¦ãR2¢5QZ‡UF)½Un©¿R& TÚ‘•éåTÈªÑT«<\n¢Tà*KT´ª{OZ¬uFp‡ª”Óµ«UF›•F:n56iÿT‰©kP¢ µ9ñÂ5@ê(Õ{¦óS6ªı9jŒµWióÕ¦ïRY5Všmôìj®Ô-ª•VÎª-F5Ij„U [ãOfªm9™õ(VôÔQ©EQULÚ–Tùê~TzªÙMZ®mAŒµ*:Ô©S¢ ¥FZkL)Ù\n\$BRşª}>iUp@Ô¦õW¶¦ÕEª·TŞêÔ]«İN¨½<šqõ\$i´Ó]«‘V‚¢;ú†ôòêT;ª«OF]6tu[ª\$ÓÌ«ÿPv›]\\:¯5f…Tÿ¨ÇSJŸ=7\nŸUj’©[Pf£=J*q•<* Ôx§%Uš§µAš|µ~j{ÔÈªaW>¢57ª¢ÕªeÕŸ¨;R±µ7zˆU‚ê¢UB¦ÍSş®íZ:”tì*rÔC§#NF¢uYº|O©­Ô€©N>°µ^ºvîkÔ¡«VFŸ…Oš†Óê#U“©¹S6¨í5ªuTğØSŒ¦õQÂœı4Š{õ’i§Ô§¥Q:›5SZpÕ…ªÓÕB{½TÂŸ-TzÎÀª”ÔšªSRŠ­õ>½ôÜjÔ{¦İT3İê«´éêÚV{½Qn©ıK:Ì5éúÓÀ¬EZNŸ(*ºiÀÓ¶ª¿N\n¤UEª”U¡*UP¬Ì(z¦•c*uJëÓª¬İV°İCJÁup*Ôc«—SF¦­6ÖU:j6SiVMQ‚£­h:´µHêV§¬ŸXÎ©=WšwªÓ‘©ÛMŠ¨í8ºiõ°©à««åN¶µfŸµ5êÔc¨“S6³í5ºÒuª–VNª¨\0Ö¢m\nÌ4Û€Ôü§UVÖj²jŸ”ÓªóÕª§%T:›5Hª‹5Æ÷Ö(¨v6Š²ê²j­ôú«mS¤ª±Oâ´ø¡ê‘TÓªÕ­­Oê§-OÊr)¬Ô­ÇRÒ^JÅC{)ÎVŞ«i[ŒQ%\\ºlTõ*ÓO«/QvŸÅK:µõiôÔJ¦ÓRÒ£?ºŒÓ©õT¶®kZò¬\r5Z¦ôª”Ôœ©ATÒ©%9zƒu©éòÖª%Sj²Å5:j¦ª¢¢©6(’¬\rFÚuõ™j6Õy­µOî \r6êÄ´Ñi·V»§aQt•;zÃ•-*2\n®¯Q£=?úßTí«%€b¦«Mn¸åOª5të!Ö&©£Y>¬¥uúrÕ[*fÖ#­‡Wf¸­GÚÑÕÑiä=Ş¦ÇU†² ˆjÁµà)ıTY©«VlmjJØ´í«Œ×n¬›RvªU8jªÕ_©äV‘«s[Æ©ÕCºvÕ`k°Uı©‰R¢š­C 5ÕÆÑWš ,’½e\\*tu{kÓ§¨‡\\Ò§ ˆjöuL«\rÕ¦§O·õq\náiÜÖ¾¦«SPõ[Šˆu«>Ózª`7²¼åe:xÕ¸êuUb§ñRbºíldÕß+vÕĞ¨­Sbµ:Ú™u¤êáW=§\r\\‚œ}Mª³uYëmSN­]V”D5OÊ¡õ¡©ÉTõ¯R2¨-?º¶õFëÈÔ(©}SêŸ<ê÷U°ë=S‰ª‡_æ£J\nØ4ëêÂT³«/V6e_šç•§+STm¦©W¬À¢Jˆ\rkûWv«ÁN&›\r4zÁu‚«ŞØ°!\\’¶­7ªŒôù«ÌV–¬ÁR®ºõ>J¤uWé½U7¨«T©%7ªšUZëÇÖy­\\ÎU^êöU†ëÏ×ª?Zæ¨ı5Æ­ÇÓ3¡êí‰¯B –ÀMvÛ»¹.vèKy®+ƒíÀBªååP³¢I-ìÜeIAvâæ‰²…†'Ô[\\=-°¿aÉÃµ‘“Î,69¤voD¡È%‡‡6n0İGÈ²|æ¾‹´šj%.kèÔ6F°õbÏ‹ŒÔ*nqÑ¢§%ˆñc—;6 ÛèØ‡!Ä”št,.bN’Ñ/,ıíõ˜õ+èV½X_m! ªJ“)6^¤ØI<±8]xƒÂpĞ/Í—=\0K‘*ÙyÖÍ‹‡Tî\"[áXm°îÚÑÖË}\n`dN 7µaÙÏSæÚö1²6°\0‡c!»kG.í˜/Q+±«\"}ÏÏkÔG¬LX×TàÙùTc¨É-Óå*RL‡èMä\$ñÑV:@…Ÿl<^ÛÑ‹‹iHTç+¹xñ5.#n‡V²=¬}Hõ%Àâìdãs‡CÔ@(Œ\0axE†æm|¤#QFt=&ØòÕ[!	l‡Y3dZÄd&æn1¬ˆ»Ş\"ì®Ûm‡:&cd›Ş²HÅ}’wUÒMl”Há²;'òÔ“´-§–4BP.¾)UÓU“^òÑ€º°T\0Ñ?¥5“F6Š¶PÏ¹à²5aı¿z7Ií~-5úUce5ˆó_¯@-:ÿrTyh\r+,¡9Ò²óúÈC•¡J¦bœÔ»\$±T)Tç³Tw‹AN–qe–Ê}–0\nmÁ›·6w£ŒyiÂ‹tQJ¶^\\ŸÑÚ:%)ŞÅ”„-`@!7ö\0’ï‚MH‹/H\\ù\0pœ	ÊK GÈU¨Ùh:HÍâÙygÅ\"y…*ÉHpÙeÈä#ÂÄíÄEØ³ªç~Éç“Ï×—9qúÜÇí‹ÉÖ€;‚s_cÆ-Œël,ĞÙµt=G>Ê£™Õ>êœ€·©yø2uÌC¡6åÎ%œ­ÙËkÛfÉ¼›G¶sÛ·¨°çgBÅõ‚\\m¬Ä’àu!g5ÄÓ•º%²\nd#9l¢§gŠJ¢¤“ (ìR˜»\0îü]ËÛ‘g-r¬ŞÉYT€Ü·ıŸ‡:(Y”ûÈº÷âÜì{\rßö:²¥fYûødL6€Ü›¹atL)VK\r†Š\$â•hûZ|x-~v :R \n\$³Øô´)DjKÃ‘×Y9O-ZoæªªÑ-ŠÁJ¯œü7TJª‘ÏÂâ\\Œ\\ª9øs…hÙÏÓ†pàedA·{xyhÎˆ†\$¬]òQ/kñ\"šB…¡ê\$R-Cš©ßSÂ2zÌk—5¶‘­&±BŞ©ÈC~4/63,c³vÚÒE \$+­‹¤;kùifEM†k06’¤XXás2çFE„€¦ºíã\\ìZq‘ÔªÅÁÈ*v3ä€OldóÎÒ£f7­Ÿ¤\\ÚƒqOF\"A³\0vì?Ú°ã©\n½§w¡ÖmñÑ~B¥j·ı‹{L“\0¶\\TÃeıQE¨Ë7­øíOH6oİÚÔÜŒvÑí¤]}¸»BíbÕL—†ìÖ«CšÑ5µbá²Õ™˜ÙÎMŞ…Z·p°Ù²Õ~Ö½~^¸d3j²5–KWÎ=l^Ú_´—j¨İÓv·„í¿\$—Zz*ô:He¬S–µŞƒ¸µ	kmÜó;Fv²À¶±Çk—¶ûD.”¬ë¸´u`¢ÔˆvôoÜ6šTkÆÒ®‡dV·íhIl!k’Cµ¨k-ä]\\Úˆ¶éJØ [Q\rµíEZ¢s•k>×]fÏvÀœ|Z#nößÍÅŒÛáÍmJHÕ\0²×²È8ÛP-¿mˆH²+k’DM¯É/6-rQOµÉg²J-”›6¹²6×qÎôA´Š¤aò>­\$\0G±©%şI,„Õ<hm(È4mÑ\$YˆU¥vÆöÑí Ú[³sll]›G–˜›·‘ví>Úc“‡kŠ¢­5Ù’,ã-àš ;k..í99_t©d&ÚûjFÁÍ÷Zz´½iöÓı{hN\$,[cpÃ\"İÃe°Y\0èZí†Úk¶w\$ZÔ{ŸW–Ú‹[Q±m¢Ú\r©g:.-LÑğ¶íjuÀ;0”,ŞÛŒ·\"Ş!»­˜™!n¾­]Z®pßrÜ}«•UV±›yÛˆrqnŠÕÚëW¶é­_È¿µQn²Õ«o+qö²mÍI°ëlrÜ;‚ÆíÌÜŞ¶Nµ«mÍÀƒĞÇ£¶ë\\·[µ¹fİÆ½µëh.]ÏÛÊrqkšŞsŸ´-ê“\\ZísÂÚjÊ½¼\0æ¶¼†N6{p ¨ÎÄ‘Ë_6ì-):®·kúŞŠ·öãí¶¸¶õn.Hµ¾ÛPöŞÛò[}·)mşÚ\r‡+bvö›òXVsmo¥¿%±WX¶‰-ş[´»iòÜ5‰\$6ÇÕFXÄ·l’ˆE²{|–ÊmÇÛ,·Élºß%³]#~Û¶ko©Ş-³‰+¶Ãä&ZN¶‰nÚ3_IÖÒ@&ÚX’áp®à5›«wB.¸¨yj6áSyj–™\$ÚflIp½¼µ»TN{d2¶R²¿iÒâ—Kp–ÛïÚ{iøM¨‡-®-ºÜS‘lßR@õ¤ÛaVıëZ‹¶ın¾B½¨kpV¤lÄZÎ™n5ËõÄ—ö§ÛÛ™¸Õj­´•”kUöè.+\\pµi!™´İÆğvêˆ[ªsãqêÖÍÂI¶­šâÈ~·iqêİ½À›‘´­ŞÜ¸êÙâŞ¸[7\$2ÛÇ¶lŞfâ\$‡ëy–¸®L·‘·¡qê×M½K:­Œ­ïZî£kÂä}½Ë^èm?!TkØèzC“rë^w)[<[à¹AoC•¯»VÀnGÛò¸µlåí°‹}×íD»×·ïrRCõ¿«“²m‰XtqíqšC-Ãjm({5ò¸õ\$®Û•ÈVò7¤&\\™piÂ«¦ü7®·ä¶o ºÙÍ¼UŞÔˆĞ»¸rB ¨%¼}´5I\0İ†¹±sÑsÉRKd9w=À(\0_pèç¡`	7@-e!P´­pµ±»v™#ÚìÙ¸nÀç6ÂåĞkØ.…IA¸hª®ÌJ	Ö:Ğ¨\0V\0è‘àkjGkv-[æ\0M;öÚÒH+N½\n¶^Ì=ù–Qã¦Öƒ®(Ø´zVÚÑˆœ‹7Nã]%±itõº@ù	Ö5P¨ºÛ±ÀÚFÃıÑW&V–U\0_SÄ`¡QmP	—?•JİRz%u*èd€W	MÒ@)¼×´@óÖÆæ%[®¬]LTÃ!vØ½­É-°Zºsš9Q5VÜ2Pljİi´àèë½…7}›í;€_>9ßu…·O5kàm.rè…ØJ/.“P±ºO¢èè¾à³©k V‘‘6èµí5Îu˜t*7b[zZƒºËvZÛÅÖ[X÷g\\#¡a\0uFí#º[¢.Q¨Ä5ä»AG•%Ú÷Ÿ·e®\0B»9d&íµÏöŞ€+Xı·é¾Úuµ%@WoÀ,Û[»}iİÓ}Ü+ŒŠ‡\0,·`¢»wİÍÜ;¹s]›Ñ]»cÂî[¦÷-¥@\$&´Ud\$—	.	-ö<’]U¢è…¯\"J<E®ì€Y»¡d!Ö½ÜKºà\n.øİÓ³iwÕ°uİ¦!V®ï6PqÜª’êsh†ßÏ5o\0[»xOdFğ#°ÅP×nlİÿvrm³íà‡î¬[.;	¼%xÈíßër-ôìºOo½vŞğıÅ´`\n/İº¼HåQ×íâÅ\rønª]±²qx®ÊUÙûÅêx¯^\$r”èyÓR\0àw#()ísºëîÉÕãûWVÉ-Ô9¢B¢ßrñ­º‹™Wl¢€_o¼ê!‹ˆÖÈ2Üc;[±ÃjêÊhºÊn[º[™»(äzòÍÑ‡….uï0¹¨«eÒæ`¿mìŞkoÂäªí»Ñ—Emì]+·{¼å\$`mÕ×M÷‹[(=#tŞ…Nó°¹·EWME*¹tUxšñ£K±örl¯:/sœèzôK¢¤/WX(6›ºxÖF%é†ŞW•œì77vi^æÍéå[Š€ŞŞ”½<M½DƒGœMş/H\0S¼ÔÜŞË½—+ÁhUOYxÏuø­èK1W­ï]]¼MFíÎÔ÷)7\06F\r{\rÈ%ãWiw6P©¶Eft\rºWXo=ŒÅ]BlÚ×Yß¸y\n–ÃŞ!İ¨\0Pà2éË ¶%7®˜”\0W’E%ºÛ1-»¢.WíŞßs¯eŠÍª£õ@nŠÛU½n{ÊôÑÔw¡îª¹½ğêÅÇ=çËŞê¯oŞû»En–Í³}6ç÷[(Y¶£µfÁ\rÆ6k°‹dnà™àmÕ7›—ÀœÎßlmu9¾åĞWzó/~ĞM6]è£s«vOEª^]ªİì…Ğ7¢ˆZ.l©öTŒÜİÊ™‚‹}·‰€(\0W\0‰\"n@“ÏËç×~èªKT›x˜Á5‡¢`NÛ‹·åqŞånÂİõ¼ör•Ş@³”ÙíÑqWyJ§cáÚãwDUµåœÛIö,ğQ´r·G©ÎŠ¡[\"î„Ğ´\\şn‘z²Ï{\nN\"]t&ÚÂö{wËà7®¤;_¾ôî\nè…§;«6ûoÈ7b2ó]¿-Ÿ‹s7á]Şß‰n€ä¹¹:À2@ZS€mİü‡‘¬ÍÉî‚ß¾VİòDrwO›Æº4¿\nFË;wÅIv? 8øº»y¨\\á˜ÇDwëoÙ:Ouå ­ÚæèaD^mº}~í¿-Ûvù—ğo_Ãv¤Äbèüga€ïâ¹ùBÚíü]rvì.Q¨»_Ò½\\Ù‚‹µı?wDİ›ß…nÃy¦şÃ£úÍƒ/Ä\\Ùº0å†Ã3o¦Ç®½·{uöØ9Ğó¯·…w®•XßÔtcjĞuëŸÖrÛªŸrÃ\$ºí½²›ïÖÊo¶‹Tf2Ñ-Õü2F-ÜÙpUvß\0}âg…Î“Á‚ï¼µC—æí‚	À.§p=ù;ò·åÀ>²ªvÊ[[=êQ³ƒ*¼@zWI†ÌºadÙ§BëLUaëÀ\rÀXÎ‹ÆÒ¦5A¦ûeÄXšû':x\0¬éYÓ² KÎ˜«a:jtÜéÎ£¥-†À-Ê“:tÅÚ™ˆ.ä\0}hmS5¦!Éëş¤­\rf#”€d\0^\n¡¡À€ËVNá\0\\\"ğC{_G.ÜÊ\0(Â¼ÁÂ ×%àw/ê›–Ñ\"sDp<›Â\0k‚ˆ'œ£„@`ˆtYŞ|Ø!n`€\0q‚OV	SxE@Cs`~	èD6	Œ%N_©Á;‚ÌşC—Ã”0Sà‰ÁG‚«Ş\n,ç/€`²Á>rû>\nÜêB°F`¶Àòrû–¬˜,\0`—Á…‚¤³!Ëì‡Â°T`¯Á“O”†ì”ùpS`ÌÁ]‚Î´Î\r,pmd8O—èüø+0k`»®ÍƒTÖ¶ÜõÙ°r`éÁ¯‚~»6Ìø3€/×fÁkƒÏXá89pa–d®Í‚7Æ\nµx8k³`ÆÁùƒ#¨áx;°s`ĞÁÃQËF	ì5°váÁ+_3xáøAğzTrÁ÷„3èúX@0`ªÇ„g.Œ!xE§òSªÁC„\rL#4å°pÓ‘ÁÁ„Ã®l\"¸:°Oá6Áå„—	î¬&¸>°¡ÓøÂ‹ƒ\nœ&ØA°aÂm„¯	æ¬!ØN'òVÎÂ#…G	Î\rœ*…™+ga?Â›ƒÒ¶v¼+øëgaÂY…rŸ.L,x'é¤á7Â“‚Wn¼øp¶á^ÂÎn,.ôİğ·akÀó…ó–¼/˜]°¬OäÂù…ë)fL/˜Y°Ä€_Âù…«Ş<+xc‡áLÃ#U»\r7|%ø[ğÃa2Ã'†k3Xa0¹à•Ã5†#\r.Ú¢Xfp´á¬¦‘†»¶Ü3XT0ÔáŠ©‘ƒGıLŒ*ømpÊS‡ÃYYó\rşŒ0Uc°ßáÃeS#\nFì4Õ20Øá¼[Ó…÷¾ü48B0çá¤Áw‡?9øc0ç`½Ã'‡?N2¸8pçá´Ã¯…OáfE½5{pòaZÃÒ^l;Upöá«Ã¿†·¾ü?8spóÔ4ÃÚ7¿ş¼fñ±a!7‡O¡¼l>XB\rãaÙÄoæ 3xxq°ŞÆÃÂÑ™há.LÂğXà­Ä9‚ó/ü(˜ˆqáFÄHÌß–\rlCøsqá´Ä9†ov\"ü7x‹ñ\râ\"Á¹ˆœîLGf*àˆÄ_ˆS~!pø‹ñb6Ä]ˆ‹#±8n±bHÄkˆg\$¡µ‹±&âPÃ¹ˆršî%\\Eh±-b9§u‰wå85É`À4Ó–¨ÃMQš%Œ!x™)ËSG§ÏQSáÀŒL’êâsÄ¦÷{°:ş¸iÉa¨Äã‰_8¼O”Õ±AâEÄ2¬›à¡ìQ8ŒñTËÅ†“åG\\Q8 1ÓßÅ‰(lEq>SªÅ;‰?EQlS¸Ÿ±TÅ;‰.)ŒT¸¦±ÔZÄùNG~(ÌC4ã1WâÄEQO~)LEñ±WâªÅgŠ³å>|O”Òqaâ²ÄQM_+lC4éñaâºÄsNC+ìXø°1%ÔaÄùMß¾,lG5ñkâÊÄQVo¾,ìG”Ø±kâÒÅ·‹SšßO‹zquâÚÄyN^-ìG51uââÄ—Uç^.l]øº1=T5ÄòoşCÍğ8cÅäf`D6*Feµâ±€â¨ÆP{/ÁØ‘ñ…â0h¹ŒWpˆš½¸¨¾ÕíÆŒhof/ü>ØŠ™ÕíÆŒÖ2Lb¸Ä°ÿbR¦‹‰'V0Jì8¿ğßc.§-Œ|E­[,f˜½±œâYÆm‰sş1,LXÍ±9cDÆ3ŒçÆ4LgÑjâÿ§™;Ö1¡D˜Ó±ŠcÅŒÚ¥¦/üQØÖ1¥ìÆ[å4\\RØÖ1¨ã9¦çk®1ÜSØÍª.âÿ¦¹»í4ümØØj‰c'ÆÕ‡\$)0í5Øk¦bCÆK[£7 è8ß)ì³ª%ãu:ì5¢±ãjÆ%Š»¶+r8Ñé¢â´Ç#wÆ9n˜¯1ÈãeÇ+ŒK3lX˜è±ÊSHÆ9Œ\"›Ö/üY˜è±ºbĞÇEzšn:¬m8Â1nc6¦«‹ÿ;ln˜¹1Ûc°ÅÙŒÚ¶/ü^ğ1®âôÇÓÆ<bX¿±—¾Äò7¿8ˆ‘½øÒÆ÷ã_ú7¿\roÜyøÄ1æá)Ç»Ï–1lq¦f+°ã”Æù?¾3zøÈqæã#ÄbËş»7l|˜Êq÷³-®Ã‹ò»>´áğÜcêÇÉŒÏn3\\Øô±(äÇ÷RÏx*¼8ü²c§ãğ«	a(hy`6¤ÑsjK¥'Ù.+¸x¸õF!T,…\\ƒíÍÀ%Ü¹rNèÍÈ;óò\$b\\È8ÔS‘Vû#ï^´B¢Ü°3cÆw\"0ÈnØæÄc‚ç¤ÀÚ0¹ì‰¯5ÈöõÀïäJµÃxG\"s^;F·*nY_z .rå½îÛ—6zd!z\0çBåÜ‡«İşò·äµO¦æKvÁ—5Û“\\’Qs.ÈkÁ‹– mßäe¹¹!–æócgK÷@œZ‹µ¡hŠàxû˜’l,½H±‹z2DÛ´P.¶\$LÜÙ´ÚéFÑE®Kl`ïZµ’ZÛÃÒêvÉZäº1w›n¾Ô«»…@j©-4Zœ²–ç®L… nBHÃmå¹¿CJv²\0\$Úbmõj!®Câ[y26çµÉ’æÓ¦CŒˆ-Œò!ÚäÈŠèy¿D‹ÀY'PH)È›“2ä‚¤›Zn+Ud¥µ C\$­®KÂ×›ñ·iÉ³“BÎ÷ã­}^í‘¡gÏSb‹í—m€[ë¶‘Šï]°›òhXÃ¶Ap:ÙFFÜší‘Èç¶G‘Õ¿D’ç5y5m@İ‘¢GîÇ‚+IVB˜…*Hoh†à¨«€–ù2FX½·u·\$¾KŠ¹F®1:É7\$\$öB+”b	pd£´”k!&Bk|™*íş\\„’!’¿#«‚Ì–YíòÛÉm”İÖCÜ˜9/rå·É“!şCœ§¬JrbÛäÉn?&S‹xÙ3¬ÊÛäÉ·p&öOI#–s²q\\µ¸ÓoòáM¾I:r3dë½\$‡'„‡Ë}—-ÜÉõD¼ú—6,ÉÈ]\$µ‹†P5C÷oÇ\\Ê}\$âBë„“öLd¾€HIj\nÛÆWÄ/9_¬òQ=¼ÏeFË+„KØyW-’<ğt-o½çàÉÌ©®í/__³Ã}³\"åŸ99¾8œ¶ÄæJÊ4Š×Q*˜@)¹‘Ë; Îß‚ÖÉ×•-‡Ú¶hs\0Sà€á/RæMgŒâùZ ï³\0Û`&~òõ)3ø©ORl½H“õ—Oä¯ÇÖc!ÂzBF6TÌ´¥Š?VW`ËSÓtÈˆl‡‘uŞF#Ëe˜FøÇ²ÒÚi=WËÃUù‹!aio½õ<ŒËÊoø±ü´±Şô‰ß¼<Ïò1 ±œ¿Vòı¾«ËäO/À!3³y€AÉËå–åî`áÜ¾O­²ùK&Û˜6X¤´Yi`Œß¬Z\n–˜;0œÀ)RòÒÖh¼€\0Å;\0µQMÏ %Œ¬q˜’€¸ÀÜù‰AÙQ3˜’+å`è/ó\0Ãf&2‚\0› p¥Èx¾¬eÚ\nL˜¦|ÇÙ¥<Ú\nÌŠ\"nPâÖC0àìšfJœDòÈ>^dây’øh²h©\$Øh9ıSÄ2ñ‡ËVæø>\0\r)8I¬¢(æLygDj&frdâ²ğ½se™æl¢0»ùœJÉå½ÌV¡ˆk4ÒoŞ ;f]#Á2€¶,¦{C`CÃfÂ\rËµšò(Ù´bs*<X²»'ĞRw8A¯Æ\0006\r»\0ìf(´œÃgÇaÂEAÓ6ìÚ±G–ÆÓÌgÈƒKÍ!BAásRB>3¹æ–[?MÚ)AÂš^¡Ø8@uàöf»VÍRÊÇÙ»Ì¥¦pz±,¥ooÁódfÃÍ—76kÖé„yœáfÉŠ)›6*¾m^ù—O\"c„y&ñ6fmø© ıPl½<²n#åH÷øóuóLãÍqó4½ÑÄéÆŒŠU•pyi	˜F³|>ò;ÓÑcFoÔ^Y·HiŒb\0Ç›á\r&p„3ğs(=ñœ2RìPè3_òöæö‚¶Óq.qaBLøætføÎ.ÏŒ\r:Æ°yÇ³´@ËÔ†t”\0å@´ñç\r›Z#4¶rH> 3¤Ì\$ryk7ä\0^¯œ¡+Z\n^Ü£×<ç.DÚgB€àO9Àxà\rùÑ4J:Ìû&QÑ=<êPÍ¤‚G;Y¡Ïieoôå’6z¹,‰Ùd±—®’Æe›K/iO”zFt”ÀÚ³.çR€ào79ÃğœĞYÛrğ¡/;‰ê€üùÛsPÀpÍG\n;ç,ÓoéA0æ ~ñ™AïëÜ\\ÕÈ6s[{Wš¤ÛàAQd«EC-§3YÉâùŸÀ\$ê—	c<™ÿâÌ‘TÁé=ÅÏE\n<>zx	ùè3Ó4(N‚Yù¡Ş°ğ³93ÖÏä8˜Û=~zœõÙíçÔ²D;\nƒ=>{Çà Ú‚;å¦‹ ÜzÌøÙóÓ?g–…Ÿ5û\\±W¸¹Õ³.¿n{Š:+DBè)¦ÑóëÍŞYXZú}‚=àm\0ä¸ÏÂY“2)l`a÷fİ¿CÏØ'§/P6µ'gì;dÂû>èû¹¦òãŠU“õ6T„¯D@ò˜P¿{BZÙûÁS=\0ÖMtfÊÌ»)‰å€ÜÿYÿŸHfåj›œ©‡ã`	ú”½ 4I¾€ùLÁûsÎåĞyKhmôh(¸’–tÊjy\r)°ÛÇÏù˜4\ræë•7+|*ÛßrĞšFÃOË?.VÆàIĞlw‹FËÂøó.´hbyŠ³væÛ´,*WB{ü¬æ¹•3Z–‰ ÂYø\nĞj-Ió%\rŒòÑÛ,ş¸	Â&\0cM¡‘(ƒıºÙ2‰¡¢\" £¶E†´9L1™Œí•/§ïO=èh†½¡„\"`\$ĞIÚ ‡Ç”Ğµ¡¢ZJ–	Ú!hŒd–Š˜5&FÏøáù‘ï _Af˜¾ê‹	Ø¡,OÀ³¢P&*fŒz•WÏ	\\Ôfæ³\0tTÄÍæàı`¤À¢Ë(;ô2<1ğY\0Q‡f\n,”½€åÅ;À¬.¸¿¡sX5Ğy Ş³èÇŸ£\$Œ½àHô_	s£@€Èp\n¨6@3èØ9LÏ>úÜ!–Ú5ZèØf¯M®0lú(¨&p€x?p\"À!QJª€2õ”0¢:_¦…Ùn/Ş)4R€xöÀ8š§ÕDÏ-LÉƒì÷nkd9Çøo”&\0h‘F\0ì");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($s){$Jd=substr($s,-1);return
str_replace($Jd.$Jd,$Jd,substr($s,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($yf,$Gc=false){if(get_magic_quotes_gpc()){while(list($w,$X)=each($yf)){foreach($X
as$Ad=>$W){unset($yf[$w][$Ad]);if(is_array($W)){$yf[$w][stripslashes($Ad)]=$W;$yf[]=&$yf[$w][stripslashes($Ad)];}else$yf[$w][stripslashes($Ad)]=($Gc?$W:stripslashes($W));}}}}function
bracket_escape($s,$La=false){static$hh=array(':'=>':1',']'=>':2','['=>':3');return
strtr($s,($La?array_flip($hh):$hh));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Za,$Hd="",$Fe="",$db=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Za?" checked":"").($Fe?' onclick="'.h($Fe).'"':'').">";return($Hd!=""||$db?"<label".($db?" class='$db'":"").">$J".h($Hd)."</label>":$J);}function
optionlist($Ke,$ig=null,$Ch=false){$J="";foreach($Ke
as$Ad=>$W){$Le=array($Ad=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Ad).'">';$Le=$W;}foreach($Le
as$w=>$X)$J.='<option'.($Ch||is_string($w)?' value="'.h($w).'"':'').(($Ch||is_string($w)?(string)$w:$X)===$ig?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Ke,$Y="",$Ee=true){if($Ee)return"<select name='".h($C)."'".(is_string($Ee)?' onchange="'.h($Ee).'"':"").">".optionlist($Ke,$Y)."</select>";$J="";foreach($Ke
as$w=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($w)."'".($w==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ha,$Ke,$Y="",$kf=""){return($Ke?"<select$Ha><option value=''>$kf".optionlist($Ke,$Y,true)."</select>":"<input$Ha value='".h($Y)."' placeholder='$kf'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($r,$Od,$Nh=false,$Fe=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Fe)."return !toggle('fieldset-$r');\">$Od</a></legend><div id='fieldset-$r'".($Nh?"":" class='hidden'").">\n";}function
bold($Ta,$db=""){return($Ta?" class='active $db'":($db?" class='$db'":""));}function
odd($J=' class="odd"'){static$q=0;if(!$J)$q=-1;return($q++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($w,$X=null){static$Hc=true;if($Hc)echo"{";if($w!=""){echo($Hc?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Hc=false;}else{echo"\n}\n";$Hc=true;}}function
ini_bool($qd){$X=ini_get($qd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$g;return$g->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$Xg=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$Xg;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$l="<p class='error'>"){global$g;$pb=(is_object($h)?$h:$g);$J=array();$I=$pb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$l&&defined("PAGE_HEADER"))echo$l.error()."\n";return$J;}function
unique_array($K,$u){foreach($u
as$t){if(preg_match("~PRIMARY|UNIQUE~",$t["type"])){$J=array();foreach($t["columns"]as$w){if(!isset($K[$w]))continue
2;$J[$w]=$K[$w];}return$J;}}}function
where($Z,$n=array()){global$v;$J=array();$Rc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$w=>$X){$w=bracket_escape($w,1);$e=(preg_match($Rc,$w)?$w:idf_escape($w));$J[]=$e.(($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$v=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($n[$w],q($X)));if($v=="sql"&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$w)$J[]=(preg_match($Rc,$w)?$w:idf_escape($w))." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$n=array()){parse_str($X,$Ya);remove_slashes(array(&$Ya));return
where($Ya,$n);}function
where_link($q,$e,$Y,$Ge="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($e)."&where%5B$q%5D%5Bop%5D=".urlencode(($Y!==null?$Ge:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$n,$M=array()){$J="";foreach($f
as$w=>$X){if($M&&!in_array(idf_escape($w),$M))continue;$Ea=convert_field($n[$w]);if($Ea)$J.=", $Ea AS ".idf_escape($w);}return$J;}function
cookie($C,$Y,$Qd=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Qd?time()+$Qd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$X){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Jh,$N,$V,$k=null){global$Tb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Tb))."|username|".($k!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($Jh!="server"||$N!=""?urlencode($Jh)."=".urlencode($N)."&":"")."username=".urlencode($V).($k!=""?"&db=".urlencode($k):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$B=null){if($B!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($_!==null?$_:$_SERVER["REQUEST_URI"]))][]=$B;}if($_!==null){if($_=="")$_=".";header("Location: $_");exit;}}function
query_redirect($H,$_,$B,$Hf=true,$tc=true,$Ac=false){global$g,$l,$b;$Wg="";if($tc){$wg=microtime(true);$Ac=!$g->query($H);$Wg="; -- ".format_time($wg,microtime(true));}$ug="";if($H)$ug=$b->messageQuery($H.$Wg);if($Ac){$l=error().$ug;return
false;}if($Hf)redirect($_,$B.$ug);return
true;}function
queries($H=null){global$g;static$Bf=array();if($H===null)return
implode("\n",$Bf);$wg=microtime(true);$J=$g->query($H);$Bf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H)."; -- ".format_time($wg,microtime(true));return$J;}function
apply_queries($H,$S,$oc='table'){foreach($S
as$Q){if(!queries("$H ".$oc($Q)))return
false;}return
true;}function
queries_redirect($_,$B,$Hf){return
query_redirect(queries(),$_,$B,$Hf,false,!$Hf);}function
format_time($wg,$ic){return
sprintf('%.3f s',max(0,$ic-$wg));}function
remove_from_uri($Ye=""){return
substr(preg_replace("~(?<=[?&])($Ye".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$_b){return" ".($E==$_b?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($w,$Gb=false){$Ec=$_FILES[$w];if(!$Ec)return
null;foreach($Ec
as$w=>$X)$Ec[$w]=(array)$X;$J='';foreach($Ec["error"]as$w=>$l){if($l)return$l;$C=$Ec["name"][$w];$eh=$Ec["tmp_name"][$w];$rb=file_get_contents($Gb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$eh":$eh);if($Gb){$wg=substr($rb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$wg,$Nf))$rb=iconv("utf-16","utf-8",$rb);elseif($wg=="\xEF\xBB\xBF")$rb=substr($rb,3);$J.=$rb."\n\n";}else$J.=$rb;}return$J;}function
upload_error($l){$ce=($l==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($l?'Unable to upload a file.'.($ce?" ".sprintf('Maximum allowed file size is %sB.',$ce):""):'File does not exist.');}function
repeat_pattern($if,$x){return
str_repeat("$if{0,65535}",$x/65535)."$if{0,".($x%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$x=80,$Cg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$x).")($)?)u",$P,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$x).")($)?)",$P,$A);return
h($A[1]).$Cg.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($yf,$jd=array()){while(list($w,$X)=each($yf)){if(is_array($X)){foreach($X
as$Ad=>$W)$yf[$w."[$Ad]"]=$W;}elseif(!in_array($w,$jd))echo'<input type="hidden" name="'.h($w).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Bc=false){$J=table_status($Q,$Bc);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$o){foreach($o["source"]as$X)$J[$X][]=$o;}return$J;}function
enum_input($U,$Ha,$m,$Y,$hc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$Xd);$J=($hc!==null?"<label><input type='$U'$Ha value='$hc'".((is_array($Y)?in_array($hc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($Xd[1]as$q=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?$Y==$q+1:(is_array($Y)?in_array($q+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ha value='".($q+1)."'".($Za?' checked':'').'>'.h($b->editVal($X,$m)).'</label>';}return$J;}function
input($m,$Y,$p){global$g,$rh,$b,$v;$C=h(bracket_escape($m["field"]));echo"<td class='function'>";if(is_array($Y)&&!$p){$Ca=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ca[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ca);$p="json";}$Qf=($v=="mssql"&&$m["auto_increment"]);if($Qf&&!$_POST["save"])$p=null;$Sc=(isset($_GET["select"])||$Qf?array("orig"=>'original'):array())+$b->editFunctions($m);$Ha=" name='fields[$C]'";if($m["type"]=="enum")echo
nbsp($Sc[""])."<td>".$b->editInput($_GET["edit"],$m,$Ha,$Y);else{$Hc=0;foreach($Sc
as$w=>$X){if($w===""||!$X)break;$Hc++;}$Ee=($Hc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($m["field"])))."]']; if ($Hc > f.selectedIndex) f.selectedIndex = $Hc;\" onkeyup='keyupChange.call(this);'":"");$Ha.=$Ee;$ad=(in_array($p,$Sc)||isset($Sc[$p]));echo(count($Sc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Sc,$p===null||$ad?$p:"")."</select>":nbsp(reset($Sc))).'<td>';$sd=$b->editInput($_GET["edit"],$m,$Ha,$Y);if($sd!="")echo$sd;elseif($m["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$Xd);foreach($Xd[1]as$q=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?($Y>>$q)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$q]' value='".(1<<$q)."'".($Za?' checked':'')."$Ee>".h($b->editVal($X,$m)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$m["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ee>";elseif(($Ug=preg_match('~text|lob~',$m["type"]))||preg_match("~\n~",$Y)){if($Ug&&$v!="sqlite")$Ha.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ha.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ha>".h($Y).'</textarea>';}elseif($p=="json")echo"<textarea$Ha cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$ee=(!preg_match('~int~',$m["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$m["length"],$A)?((preg_match("~binary~",$m["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$m["unsigned"]?1:0)):($rh[$m["type"]]?$rh[$m["type"]]+($m["unsigned"]?0:1):0));if($v=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$m["type"]))$ee+=7;echo"<input".((!$ad||$p==="")&&preg_match('~(?<!o)int~',$m["type"])?" type='number'":"")." value='".h($Y)."'".($ee?" maxlength='$ee'":"").(preg_match('~char|binary~',$m["type"])&&$ee>20?" size='40'":"")."$Ha>";}}}function
process_input($m){global$b;$s=bracket_escape($m["field"]);$p=$_POST["function"][$s];$Y=$_POST["fields"][$s];if($m["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($m["auto_increment"]&&$Y=="")return
null;if($p=="orig")return($m["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($m["field"]):false);if($p=="NULL")return"NULL";if($m["type"]=="set")return
array_sum((array)$Y);if($p=="json"){$p="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$m["type"])&&ini_bool("file_uploads")){$Ec=get_file("fields-$s");if(!is_string($Ec))return
false;return
q($Ec);}return$b->processInput($m,$Y,$p);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Nc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Nc){echo"<ul>\n";$Nc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Nc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($hd,$ne=false){global$b;$J=$b->dumpHeaders($hd,$ne);$We=$_POST["output"];if($We!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($hd).".$J".($We!="file"&&!preg_match('~[^0-9a-z]~',$We)?".$We":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$w=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$w]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($p,$e){return($p?($p=="unixepoch"?"DATETIME($e, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$e)"):$e);}function
password_file($xb){$Ob=ini_get("upload_tmp_dir");if(!$Ob){if(function_exists('sys_get_temp_dir'))$Ob=sys_get_temp_dir();else{$Fc=@tempnam("","");if(!$Fc)return
false;$Ob=dirname($Fc);unlink($Fc);}}$Fc="$Ob/adminer.key";$J=@file_get_contents($Fc);if($J||!$xb)return$J;$Pc=@fopen($Fc,"w");if($Pc){$J=rand_string();fwrite($Pc,$J);fclose($Pc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$z,$m,$Vg){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Ad=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Ad):"")."<td>".select_value($W,$z,$m,$Vg);return"<table cellspacing='0'>$J</table>";}if(!$z)$z=$b->selectLink($X,$m);if($z===null){if(is_mail($X))$z="mailto:$X";if($_f=is_url($X))$z=($_f=="http"&&$ba?$X:"$_f://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$m);if($J!==null){if($J==="")$J="&nbsp;";elseif($Vg!=""&&is_shortable($m)&&is_utf8($J))$J=shorten_utf8($J,max(0,+$Vg));else$J=h($J);}return$b->selectVal($J,$z,$m,$X);}function
is_mail($ec){$Fa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$if="$Fa+(\\.$Fa+)*@($Rb?\\.)+$Rb";return
is_string($ec)&&preg_match("(^$if(,\\s*$if)*\$)i",$ec);}function
is_url($P){$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Rb?\\.)+$Rb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$A)?strtolower($A[1]):"");}function
is_shortable($m){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$m["type"]);}function
count_rows($Q,$Z,$vd,$Vc){global$v;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($vd&&($v=="sql"||count($Vc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Vc).")$H":"SELECT COUNT(*)".($vd?" FROM (SELECT 1$H$Wc) x":$H));}function
slow_query($H){global$b,$T;$k=$b->database();$Xg=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($k==""||$h->select_db($k))){$Fd=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Fd,'\');
}, ',1000*$Xg,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$Xg);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Ef=rand(1,1e6);return($Ef^$_SESSION["token"]).":$Ef";}function
verify_token(){list($T,$Ef)=explode(":",$_POST["token"]);return($Ef^$_SESSION["token"])==$T;}function
lzw_decompress($Pa){$Nb=256;$Qa=8;$fb=array();$Sf=0;$Tf=0;for($q=0;$q<strlen($Pa);$q++){$Sf=($Sf<<8)+ord($Pa[$q]);$Tf+=8;if($Tf>=$Qa){$Tf-=$Qa;$fb[]=$Sf>>$Tf;$Sf&=(1<<$Tf)-1;$Nb++;if($Nb>>$Qa)$Qa++;}}$Mb=range("\0","\xFF");$J="";foreach($fb
as$q=>$eb){$dc=$Mb[$eb];if(!isset($dc))$dc=$Rh.$Rh[0];$J.=$dc;if($q)$Mb[]=$Rh.$dc[0];$Rh=$dc;}return$J;}function
on_help($kb,$pg=0){return" onmouseover='helpMouseover(this, event, ".h($kb).", $pg);' onmouseout='helpMouseout(this, event);'";}global$b,$g,$Tb,$bc,$lc,$l,$Sc,$Xc,$ba,$rd,$v,$ca,$Id,$De,$jf,$_g,$bd,$T,$jh,$rh,$yh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Gc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($ih,$we=null){if(is_array($ih)){$mf=($we==1?0:1);$ih=$ih[$mf];}$ih=str_replace("%d","%s",$ih);$we=number_format($we,0,".",',');return
sprintf($ih,$we);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$mf=array_search("SQL",$b->operators);if($mf!==false)unset($b->operators[$mf]);}function
dsn($Yb,$V,$G){try{parent::__construct($Yb,$V,$G);}catch(Exception$qc){auth_error($qc);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$sh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$m=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$m];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Tb=array();class
Min_SQL{var$_conn;function
Min_SQL($g){$this->_conn=$g;}function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){global$b,$v;$vd=(count($Vc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Vc,$Me,$y,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$y&&$Vc&&$vd&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Vc&&$vd?"\nGROUP BY ".implode(", ",$Vc):"").($Me?"\nORDER BY ".implode(", ",$Me):""),($y!=""?+$y:null),($E?$y*$E:0),"\n");if($uf)echo$b->selectQuery($H);return$this->_conn->query($H);}function
delete($Q,$Cf,$y=0){$H="FROM ".table($Q);return
queries("DELETE".($y?limit1($H,$Cf):" $H$Cf"));}function
update($Q,$O,$Cf,$y=0,$kg="\n"){$Hh=array();foreach($O
as$w=>$X)$Hh[]="$w = $X";$H=table($Q)." SET$kg".implode(",$kg",$Hh);return
queries("UPDATE".($y?limit1($H,$Cf):" $H$Cf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$sf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Tb["sqlite"]="SQLite 3";$Tb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$pf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Fc){$this->_link=new
SQLite3($Fc);$Kh=$this->_link->version();$this->server_info=$Kh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Fc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Fc);}function
query($H,$sh=false){$ke=($sh?"unbufferedQuery":"query");$I=@$this->_link->$ke($H,SQLITE_BOTH,$l);$this->error="";if(!$I){$this->error=$l;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$w=>$X)$J[($w[0]=='"'?idf_unescape($w):$w)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$if='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($if\\.)?$if\$~",$C,$A)){$Q=($A[3]!=""?$A[3]:idf_unescape($A[2]));$C=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Fc){$this->dsn(DRIVER.":$Fc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Fc){if(is_readable($Fc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Fc)?$Fc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Fc")." AS a")){$this->Min_SQLite($Fc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){$Hh=array();foreach($L
as$O)$Hh[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Hh));}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($k,$ib){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($j){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$J=array();$sf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Hb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Hb,$A)?str_replace("''","'",$A[1]):($Hb=="NULL"?null:$Hb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($sf!="")$J[$sf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$sf=$C;}}$ug=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ug,$Xd,PREG_SET_ORDER);foreach($Xd
as$A){$C=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($J[$C])$J[$C]["collation"]=trim($A[3],"'");}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$ug=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ug,$A)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$Xd,PREG_SET_ORDER);foreach($Xd
as$A){$J[""]["columns"][]=idf_unescape($A[2]).$A[4];$J[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$m){if($m["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$vg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$K){$C=$K["name"];if(!preg_match("~^sqlite_~",$C)){$J[$C]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$C]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$ag)$J[$C]["columns"][]=$ag["name"];$J[$C]["descs"]=array();if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$vg[$C],$Nf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Nf[2],$Xd);foreach($Xd[2]as$X)$J[$C]["descs"][]=($X?'1':null);}}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$o=&$J[$K["id"]];if(!$o)$o=$K;$o["source"][]=$K["from"];$o["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$_c="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($_c)\$~",$C)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$_c));return
false;}return
true;}function
create_database($k,$d){global$g;if(file_exists($k)){$g->error='File exists.';return
false;}if(!check_sqlite_name($k))return
false;try{$z=new
Min_SQLite($k);}catch(Exception$qc){$g->error=$qc->getMessage();return
false;}$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($j){global$g;$g->Min_SQLite(":memory:");foreach($j
as$k){if(!@unlink($k)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($C,$d){global$g;if(!check_sqlite_name($C))return
false;$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$Bh=($Q==""||$Jc);foreach($n
as$m){if($m[0]!=""||!$m[1]||$m[2]){$Bh=true;break;}}$c=array();$Ue=array();foreach($n
as$m){if($m[1]){$c[]=($Bh?$m[1]:"ADD ".implode($m[1]));if($m[0]!="")$Ue[$m[0]]=$m[1][0];}}if(!$Bh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$Ue,$Jc))return
false;if($Ja)queries("UPDATE sqlite_sequence SET seq = $Ja WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$n,$Ue,$Jc,$u=array()){queries("BEGIN");if($Q!=""){if(!$n){foreach(fields($Q)as$w=>$m){$n[]=process_field($m,$m);$Ue[$w]=idf_escape($w);}}$tf=false;foreach($n
as$w=>$m){if($m[6])$tf=true;$n[$w]="  ".implode($m);}$Wb=array();foreach($u
as$w=>$X){if($X[2]=="DROP"){$Wb[$X[1]]=true;unset($u[$w]);}}foreach(indexes($Q)as$Dd=>$t){$f=array();foreach($t["columns"]as$w=>$e){if(!$Ue[$e])continue
2;$f[]=$Ue[$e].($t["descs"][$w]?" DESC":"");}$f="(".implode(", ",$f).")";if(!$Wb[$Dd]){if($t["type"]!="PRIMARY"||!$tf)$u[]=array($t["type"],$Dd,$f);}}foreach($u
as$w=>$X){if($X[0]=="PRIMARY"){unset($u[$w]);$Jc[]="  PRIMARY KEY $X[2]";}}foreach(foreign_keys($Q)as$Dd=>$o){foreach($o["source"]as$w=>$e){if(!$Ue[$e])continue
2;$o["source"][$w]=idf_unescape($Ue[$e]);}if(!isset($Jc[" $Dd"]))$Jc[]=" ".format_foreign_key($o);}}$n=array_merge($n,array_filter($Jc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$n)."\n)"))return
false;if($Q!=""){if($Ue&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$Ue).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Ue)))." FROM ".table($Q)))return
false;$oh=array();foreach(triggers($Q)as$mh=>$Yg){$kh=trigger($mh);$oh[]="CREATE TRIGGER ".idf_escape($mh)." ".implode(" ",$Yg)." ON ".table($C)."\n$kh[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$u))return
false;foreach($oh
as$kh){if(!queries($kh))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$sf){if($sf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Mh){return
apply_queries("DROP VIEW",$Mh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Mh,$Pg){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(BEFORE|AFTER|INSTEAD\\s+OF)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$C,"Statement"=>$A[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$A);$J[$K["name"]]=array($A[1],$A[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($eg){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$t){if($C=='')continue;$J.=";\n\n".index_sql($Q,$t['type'],$C,"(".implode(", ",array_map('idf_escape',$t['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Cb){}function
trigger_sql($Q,$Ag){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$w)$J[$w]=$g->result("PRAGMA $w");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Je){list($w,$X)=explode("=",$Je,2);$J[$w]=$X;}return$J;}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Cc);}$v="sqlite";$rh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$_g=array_keys($rh);$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Sc=array("hex","length","lower","round","unixepoch","upper");$Xc=array("avg","count","count distinct","group_concat","max","min","sum");$bc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Tb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$pf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($mc,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
connect($N,$V,$G){global$b;$k=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$k!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Kh=pg_version($this->_link);$this->server_info=$Kh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Cb){global$b;if($Cb==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Cb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$sh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$m=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
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
connect($N,$V,$G){global$b;$k=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Cb){global$b;return($b->database()==$Cb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){global$g;foreach($L
as$O){$zh=array();$Z=array();foreach($O
as$w=>$X){$zh[]="$w = $X";if(isset($sf[idf_unescape($w)]))$Z[]="$w = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$zh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$ib){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Aa=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$K["full_type"],$A);list(,$U,$x,$K["length"],$Da)=$A;$K["length"].=$Da;$K["type"]=($Aa[$U]?$Aa[$U]:$U);$K["full_type"]=$K["type"].$x.$Da;$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$A))$K["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]).$A[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Ig=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ig AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ig AND ci.oid = i.indexrelid",$h)as$K){$Of=$K["relname"];$J[$Of]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Of]["columns"]=array();foreach(explode(" ",$K["indkey"])as$nd)$J[$Of]["columns"][]=$f[$nd];$J[$Of]["descs"]=array();foreach(explode(" ",$K["indoption"])as$od)$J[$Of]["descs"][]=($od&1?'1':null);$J[$Of]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$De;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$A)){$K['source']=array_map('trim',explode(',',$A[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$A[2],$Wd)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Wd[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Wd[4]));}$K['target']=array_map('trim',explode(',',$A[3]));$K['on_delete']=(preg_match("~ON DELETE ($De)~",$A[4],$Wd)?$Wd[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($De)~",$A[4],$Wd)?$Wd[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($k){return($k=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$A))$J=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($J);}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($j){global$g;$g->close();return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=array();$Bf=array();foreach($n
as$m){$e=idf_escape($m[0]);$X=$m[1];if(!$X)$c[]="DROP $e";else{$Gh=$X[5];unset($X[5]);if(isset($X[6])&&$m[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($m[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Bf[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($m[0]!=""||$Gh!="")$Bf[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Gh!=""?substr($Gh,9):"''");}}$c=array_merge($c,$Jc);if($Q=="")array_unshift($Bf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Bf,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Bf[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$mb!="")$Bf[]="COMMENT ON TABLE ".table($C)." IS ".q($mb);if($Ja!=""){}foreach($Bf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$xb=array();$Ub=array();$Bf=array();foreach($c
as$X){if($X[0]!="INDEX")$xb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$Ub[]=idf_escape($X[1]);else$Bf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]";}if($xb)array_unshift($Bf,"ALTER TABLE ".table($Q).implode(",",$xb));if($Ub)array_unshift($Bf,"DROP INDEX ".implode(", ",$Ub));foreach($Bf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($Pg)))return
false;}foreach($Mh
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($Pg)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
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
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Nf))return$Nf[1];return
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
set_schema($dg){global$g,$rh,$_g;$J=$g->query("SET search_path TO ".idf_escape($dg));foreach(types()as$U){if(!isset($rh[$U])){$rh[$U]=0;$_g['User types'][]=$U;}}return$J;}function
use_sql($Cb){return"\connect ".idf_escape($Cb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Cc);}$v="pgsql";$rh=array();$_g=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Xc=array("avg","count","count distinct","max","min","sum");$bc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Tb["oracle"]="Oracle";if(isset($_GET["oracle"])){$pf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($mc,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$l=oci_error();$this->error=$l["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return
true;}function
query($H,$sh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$l=oci_error($this->_link);$this->errno=$l["code"];$this->error=$l["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$m=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$m);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$w=>$X){if(is_a($X,'OCI-Lob'))$K[$w]=$X->load();}return$K;}function
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
select_db($Cb){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$y,$D=0,$kg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($y+$D).") WHERE rnum > $D":($y!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($y+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$ib){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();$fg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $fg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $fg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$x="$K[DATA_PRECISION],$K[DATA_SCALE]";if($x==",")$x=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($x?"($x)":""),"type"=>strtolower($U),"length"=>$x,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$ld=$K["INDEX_NAME"];$J[$ld]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$ld]["columns"][]=$K["COLUMN_NAME"];$J[$ld]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$ld]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=$Ub=array();foreach($n
as$m){$X=$m[1];if($X&&$m[0]!=""&&idf_escape($m[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($m[0])." TO $X[0]");if($X)$c[]=($Q!=""?($m[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Ub[]=idf_escape($m[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Ub||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Ub).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
apply_queries("DROP VIEW",$Mh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($eg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($eg));}function
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
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Cc);}$v="oracle";$rh=array();$_g=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Sc=array("length","lower","round","upper");$Xc=array("avg","count","count distinct","max","min","sum");$bc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Tb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$pf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$l){$this->errno=$l["code"];$this->error.="$l[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$pd=sqlsrv_server_info($this->_link);$this->server_info=$pd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return$this->query("USE ".idf_escape($Cb));}function
query($H,$sh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$m];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$w=>$X){if(is_a($X,'DateTime'))$K[$w]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$m=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$m["Name"];$J->orgname=$m["Name"];$J->type=($m["Type"]==1?254:0);return$J;}function
seek($D){for($q=0;$q<$D;$q++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return
mssql_select_db($Cb);}function
query($H,$sh=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
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
insertUpdate($Q,$L,$sf){foreach($L
as$O){$zh=array();$Z=array();foreach($O
as$w=>$X){$zh[]="$w = $X";if(isset($sf[idf_unescape($w)]))$Z[]="$w = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$zh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($s){return"[".str_replace("]","]]",$s)."]";}function
table($s){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$y,$D=0,$kg=" "){return($y!==null?" TOP (".($y+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$ib){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($k));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($j){global$g;$J=array();foreach($j
as$k){$g->select_db($k);$J[$k]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$x=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($x?"($x)":""),"type"=>$U,"length"=>$x,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($k){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($j){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$j)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=array();foreach($n
as$m){$e=idf_escape($m[0]);$X=$m[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($m[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Jc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Jc)$c[""]=$Jc;foreach($c
as$w=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $w".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$t=array();$Ub=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Ub[]=idf_escape($X[1]);else$t[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$t||queries("DROP INDEX ".implode(", ",$t)))&&(!$Ub||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Ub)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$o=&$J[$K["FK_NAME"]];$o["table"]=$K["PKTABLE_NAME"];$o["source"][]=$K["FKCOLUMN_NAME"];$o["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){return
apply_queries("ALTER SCHEMA ".idf_escape($Pg)." TRANSFER",array_merge($S,$Mh));}function
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
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($dg){return
true;}function
use_sql($Cb){return"USE ".idf_escape($Cb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Cc);}$v="mssql";$rh=array();$_g=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sc=array("len","lower","round","upper");$Xc=array("avg","count","count distinct","max","min","sum");$bc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Tb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$pf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Cb){return($Cb=="domain");}function
query($H,$sh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Dg=0;foreach($I
as$zd)$Dg+=$zd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Dg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($I){foreach($I
as$zd){$K=array();if($zd->Name!='')$K['itemName()']=(string)$zd->Name;foreach($zd->Attribute
as$Ga){$C=$this->_processValue($Ga->Name);$Y=$this->_processValue($Ga->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$w=>$X){if(!isset($this->_rows[0][$w]))$this->_rows[0][$w]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($dc){return(is_object($dc)&&$dc['encoding']=='base64'?base64_decode($dc):(string)$dc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$w=>$X)$J[$w]=$K[$w];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Ed=array_keys($this->_rows[0]);return(object)array('name'=>$Ed[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{function
_chunkRequest($id,$ua,$F,$vc=array()){global$g;foreach(array_chunk($id,25)as$bb){$Ze=$F;foreach($bb
as$q=>$r){$Ze["Item.$q.ItemName"]=$r;foreach($vc
as$w=>$X)$Ze["Item.$q.$w"]=$X;}if(!sdb_request($ua,$Ze))return
false;}$g->affected_rows=count($id);return
true;}function
_extractIds($Q,$Cf,$y){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Cf,$Xd))$J=array_map('idf_unescape',$Xd[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Cf.($y?" LIMIT 1":"")))as$zd)$J[]=$zd->Name;}return$J;}function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){global$g;$g->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf);$g->next=0;return$J;}function
delete($Q,$Cf,$y=0){return$this->_chunkRequest($this->_extractIds($Q,$Cf,$y),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Cf,$y=0,$kg="\n"){$Ib=array();$td=array();$q=0;$id=$this->_extractIds($Q,$Cf,$y);$r=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$w=>$X){$w=idf_unescape($w);if($X=="NULL"||($r!=""&&array($r)!=$id))$Ib["Attribute.".count($Ib).".Name"]=$w;if($X!="NULL"){foreach((array)$X
as$Ad=>$W){$td["Attribute.$q.Name"]=$w;$td["Attribute.$q.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Ad)$td["Attribute.$q.Replace"]="true";$q++;}}}$F=array('DomainName'=>$Q);return(!$td||$this->_chunkRequest(($r!=""?array($r):$id),'BatchPutAttributes',$F,$td))&&(!$Ib||$this->_chunkRequest($id,'BatchDeleteAttributes',$F,$Ib));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$q=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$q.Name"]=$C;$F["Attribute.$q.Value"]=(is_array($Y)?$X:idf_unescape($Y));$q++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$sf){foreach($L
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
support($Cc){return
preg_match('~sql~',$Cc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($k,$ib){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Bc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Bc){$je=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($je){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$w=>$X)$K[$w]=(string)$je->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){$J=array();foreach((array)$_POST["field_keys"]as$w=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$w];$_POST["fields"][$X]=$_POST["field_vals"][$w];}}foreach((array)$_POST["fields"]as$w=>$X){$C=bracket_escape($w,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1);}return$J;}function
foreign_keys($Q){return
array();}function
table($s){return
idf_escape($s);}function
idf_escape($s){return"`".str_replace("`","``",$s)."`";}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y":"");}function
unconvert_field($m,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($j){foreach($j
as$k)return
array($k=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($_a,$Ab,$w,$Gf=false){$Sa=64;if(strlen($w)>$Sa)$w=pack("H*",$_a($w));$w=str_pad($w,$Sa,"\0");$Bd=$w^str_repeat("\x36",$Sa);$Cd=$w^str_repeat("\x5C",$Sa);$J=$_a($Cd.pack("H*",$_a($Bd.$Ab)));if($Gf)$J=pack("H*",$J);return$J;}function
sdb_request($ua,$F=array()){global$b,$g;list($fd,$F['AWSAccessKeyId'],$gg)=$b->credentials();$F['Action']=$ua;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$w=>$X)$H.='&'.rawurlencode($w).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$fd)."\n/\n$H",$gg,true)));@ini_set('track_errors',1);$Ec=@file_get_contents((preg_match('~^https?://~',$fd)?$fd:"http://$fd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Ec){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Sh=simplexml_load_string($Ec);if(!$Sh){$l=libxml_get_last_error();$g->error=$l->message;return
false;}if($Sh->Errors){$l=$Sh->Errors->Error;$g->error="$l->Message ($l->Code)";return
false;}$g->error='';$Og=$ua."Result";return($Sh->$Og?$Sh->$Og:true);}function
sdb_request_all($ua,$Og,$F=array(),$Xg=0){$J=array();$wg=($Xg?microtime(true):0);$y=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$A)?$A[1]:0);do{$Sh=sdb_request($ua,$F);if(!$Sh)break;foreach($Sh->$Og
as$dc)$J[]=$dc;if($y&&count($J)>=$y){$_GET["next"]=$Sh->NextToken;break;}if($Xg&&microtime(true)-$wg>$Xg)return
false;$F['NextToken']=$Sh->NextToken;if($y)$F['SelectExpression']=preg_replace('~\d+\s*$~',$y-count($J),$F['SelectExpression']);}while($Sh->NextToken);return$J;}$v="simpledb";$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Sc=array();$Xc=array("count");$bc=array(array("json"));}$Tb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$pf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$_link,$_db;function
connect($N,$V,$G){global$b;$k=$b->database();$Ke=array();if($V!=""){$Ke["username"]=$V;$Ke["password"]=$G;}if($k!="")$Ke["db"]=$k;try{$this->_link=@new
MongoClient("mongodb://$N",$Ke);return
true;}catch(Exception$qc){$this->error=$qc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Cb){try{$this->_db=$this->_link->selectDB($Cb);return
true;}catch(Exception$qc){$this->error=$qc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($I){foreach($I
as$zd){$K=array();foreach($zd
as$w=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$w]=63;$K[$w]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$w=>$X){if(!isset($this->_rows[0][$w]))$this->_rows[0][$w]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$w=>$X)$J[$w]=$K[$w];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Ed=array_keys($this->_rows[0]);$C=$Ed[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$rg=array();foreach($Me
as$X){$X=preg_replace('~ DESC$~','',$X,1,$wb);$rg[$X]=($wb?-1:1);}return
new
Min_Result(iterator_to_array($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($rg)->limit(+$y)->skip($E*$y)));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];return!$J['err'];}catch(Exception$qc){$this->_conn->error=$qc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases($Ic){global$g;$J=array();$Fb=$g->_link->listDBs();foreach($Fb['databases']as$k)$J[]=$k['name'];return$J;}function
collations(){return
array();}function
db_collation($k,$ib){}function
count_tables($j){global$g;$J=array();foreach($j
as$k)$J[$k]=count($g->_link->selectDB($k)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Bc=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_view($R){}function
drop_databases($j){global$g;foreach($j
as$k){$Rf=$g->_link->selectDB($k)->drop();if(!$Rf['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$t){$Lb=array();foreach($t["key"]as$e=>$U)$Lb[]=($U==-1?'1':null);$J[$t["name"]]=array("type"=>($t["name"]=="_id_"?"PRIMARY":($t["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($t["key"]),"descs"=>$Lb,);}return$J;}function
fields($Q){return
array();}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){global$g;if($Q==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Rf=$g->_db->selectCollection($Q)->drop();if(!$Rf['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Rf=$g->_db->selectCollection($Q)->remove();if(!$Rf['ok'])return
false;}return
true;}function
table($s){return$s;}function
idf_escape($s){return$s;}function
support($Cc){return
preg_match("~database|indexes~",$Cc);}$v="mongo";$He=array("=");$Sc=array();$Xc=array();$bc=array(array("json"));}$Tb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$pf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
query($gf,$rb=array(),$ke='GET'){@ini_set('track_errors',1);$Ec=@file_get_contents($this->_url.($this->_db!=""?"$this->_db/":"").$gf,false,stream_context_create(array('http'=>array('method'=>$ke,'content'=>json_encode($rb),'ignore_errors'=>1,))));if(!$Ec){$this->error=$php_errormsg;return$Ec;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Ec;return
false;}$J=json_decode($Ec,true);if(!$J){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$qb=get_defined_constants(true);foreach($qb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Cb){$this->_db=$Cb;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){global$b;$Ab=array();$H="$Q/_search";if($M!=array("*"))$Ab["fields"]=$M;if($Me){$rg=array();foreach($Me
as$gb){$gb=preg_replace('~ DESC$~','',$gb,1,$wb);$rg[]=($wb?array($gb=>"desc"):$gb);}$Ab["sort"]=$rg;}if($y){$Ab["size"]=+$y;if($E)$Ab["from"]=($E*$y);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$Sg=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$Ab["query"]["filtered"]["filter"]["and"][]=$Sg;else$Ab["query"]["filtered"]["query"]["bool"]["must"][]=$Sg;}}if($Ab["query"]&&!$Ab["query"]["filtered"]["query"])$Ab["query"]["filtered"]["query"]=array("match_all"=>array());if($uf)echo$b->selectQuery("$H: ".print_r($Ab,true));$fg=$this->_conn->query($H,$Ab);if(!$fg)return
false;$J=array();foreach($fg['hits']['hits']as$ed){$K=array();$n=$ed['_source'];if($M!=array("*")){$n=array();foreach($M
as$w)$n[$w]=$ed['fields'][$w];}foreach($n
as$w=>$X)$K[$w]=(is_array($X)?json_encode($X):$X);$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
support($Cc){return
preg_match("~database|table|columns~",$Cc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){global$g;$J=$g->query('_aliases');if($J)$J=array_keys($J);return$J;}function
collations(){return
array();}function
db_collation($k,$ib){}function
count_tables($j){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys(reset($J)),'table');return$J;}function
table_status($C="",$Bc=false){$J=tables_list();if($J){foreach($J
as$w=>$U)$J[$w]=array("Name"=>$w,"Engine"=>$U);if($C!="")return$J[$C];}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$Vd=$g->query("$Q/_mapping");$J=array();if($Vd){foreach($Vd[$Q]['properties']as$C=>$m)$J[$C]=array("field"=>$C,"full_type"=>$m["type"],"type"=>$m["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
foreign_keys($Q){return
array();}function
table($s){return$s;}function
idf_escape($s){return$s;}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($k){global$g;return$g->query(urlencode($k),array(),'PUT');}function
drop_databases($j){global$g;return$g->query(urlencode(implode(',',$j)),array(),'DELETE');}function
drop_tables($S){global$g;$J=true;foreach($S
as$Q)$J=$J&&$g->query(urlencode($Q),array(),'DELETE');return$J;}$v="elastic";$He=array("=","query");$Sc=array();$Xc=array();$bc=array(array("json"));}$Tb=array("server"=>"MySQL")+$Tb;if(!defined("DRIVER")){$pf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($fd,$lf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$fd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($lf)?$lf:ini_get("mysqli.default_port")),(!is_numeric($lf)?$lf:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$m=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$m];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Cb){return
mysql_select_db($Cb,$this->_link);}function
query($H,$sh=false){$I=@($sh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$m=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$m);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Cb){return$this->query("USE ".idf_escape($Cb));}function
query($H,$sh=false){$this->setAttribute(1000,!$sh);return
parent::query($H,$sh);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$sf){$f=array_keys(reset($L));$qf="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Hh=array();foreach($f
as$w)$Hh[$w]="$w = VALUES($w)";$Cg="\nON DUPLICATE KEY UPDATE ".implode(", ",$Hh);$Hh=array();$x=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Hh&&(strlen($qf)+$x+strlen($Y)+strlen($Cg)>1e6)){if(!queries($qf.implode(",\n",$Hh).$Cg))return
false;$Hh=array();$x=0;}$Hh[]=$Y;$x+=strlen($Y)+2;}return
queries($qf.implode(",\n",$Hh).$Cg);}}function
idf_escape($s){return"`".str_replace("`","``",$s)."`";}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($bg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$bg;return$J;}function
get_databases($Ic){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Ic?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$ib){global$g;$J=null;$xb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$xb,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$xb,$A))$J=$ib[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($j){$J=array();foreach($j
as$k)$J[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$J;}function
table_status($C="",$Bc=false){global$g;$J=array();foreach(get_rows($Bc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$g,$De;static$if='`(?:[^`]|``)+`';$J=array();$yb=$g->result("SHOW CREATE TABLE ".table($Q),1);if($yb){preg_match_all("~CONSTRAINT ($if) FOREIGN KEY \\(((?:$if,? ?)+)\\) REFERENCES ($if)(?:\\.($if))? \\(((?:$if,? ?)+)\\)(?: ON DELETE ($De))?(?: ON UPDATE ($De))?~",$yb,$Xd,PREG_SET_ORDER);foreach($Xd
as$A){preg_match_all("~$if~",$A[2],$sg);preg_match_all("~$if~",$A[5],$Pg);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$sg[0]),"target"=>array_map('idf_unescape',$Pg[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$w=>$X)asort($J[$w]);return$J;}function
information_schema($k){global$g;return($g->server_info>=5&&$k=="information_schema")||($g->server_info>=5.5&&$k=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(preg_match('~ at line ([0-9]+)$~',$g->error,$Nf))return$Nf[1]-1;}function
create_database($k,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($d?" COLLATE ".q($d):""));}function
drop_databases($j){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){if(create_database($C,$d)){$Pf=array();foreach(tables_list()as$Q=>$U)$Pf[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$Pf||queries("RENAME TABLE ".implode(", ",$Pf))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ka=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$Ka="";break;}if($t["type"]=="PRIMARY")$Ka=" UNIQUE";}}return" AUTO_INCREMENT$Ka";}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=array();foreach($n
as$m)$c[]=($m[1]?($Q!=""?($m[0]!=""?"CHANGE ".idf_escape($m[0]):"ADD"):" ")." ".implode($m[1]).($Q!=""?$m[2]:""):"DROP ".idf_escape($m[0]));$c=array_merge($c,$Jc);$xg="COMMENT=".q($mb).($jc?" ENGINE=".q($jc):"").($d?" COLLATE ".q($d):"").($Ja!=""?" AUTO_INCREMENT=$Ja":"").$df;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n) $xg");if($Q!=$C)$c[]="RENAME TO ".table($C);$c[]=$xg;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c));}function
alter_indexes($Q,$c){foreach($c
as$w=>$X)$c[$w]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){$Pf=array();foreach(array_merge($S,$Mh)as$Q)$Pf[]=table($Q)." TO ".idf_escape($Pg).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Pf));}function
copy_tables($S,$Mh,$Pg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($Pg==DB?table("copy_$Q"):idf_escape($Pg).".".table($Q));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Mh
as$Q){$C=($Pg==DB?table("copy_$Q"):idf_escape($Pg).".".table($Q));$Lh=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Lh[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$lc,$rd,$rh;$Aa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$qh="((".implode("|",array_merge(array_keys($rh),$Aa)).")\\b(?:\\s*\\(((?:[^'\")]*|$lc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$if="\\s*(".($U=="FUNCTION"?"":$rd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$qh";$xb=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$if\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$qh\\s+":"")."(.*)~is",$xb,$A);$n=array();preg_match_all("~$if\\s*,?~is",$A[1],$Xd,PREG_SET_ORDER);foreach($Xd
as$Ye){$C=str_replace("``","`",$Ye[2]).$Ye[3];$n[]=array("field"=>$C,"type"=>strtolower($Ye[5]),"length"=>preg_replace_callback("~$lc~s",'normalize_enum',$Ye[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ye[8] $Ye[7]"))),"null"=>1,"full_type"=>$Ye[4],"inout"=>strtoupper($Ye[1]),"collation"=>strtolower($Ye[9]),);}if($U!="FUNCTION")return
array("fields"=>$n,"definition"=>$A[11]);return
array("fields"=>$n,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($dg){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ja)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Cb){return"USE ".idf_escape($Cb);}function
trigger_sql($Q,$Ag){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Ag=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($m){if(preg_match("~binary~",$m["type"]))return"HEX(".idf_escape($m["field"]).")";if($m["type"]=="bit")return"BIN(".idf_escape($m["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$m["type"]))return"AsWKT(".idf_escape($m["field"]).")";}function
unconvert_field($m,$J){if(preg_match("~binary~",$m["type"]))$J="UNHEX($J)";if($m["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$m["type"]))$J="GeomFromText($J)";return$J;}function
support($Cc){global$g;return!preg_match("~scheme|sequence|type|view_trigger".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Cc);}$v="sql";$rh=array();$_g=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array("unsigned","zerofill","unsigned zerofill");$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Sc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Xc=array("avg","count","count distinct","group_concat","max","min","sum");$bc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.0.2";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($xb=false){return
password_file($xb);}function
database(){return
DB;}function
databases($Ic=true){return
get_databases($Ic);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){global$v;return
true;}function
loginForm(){global$Tb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Tb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($Td,$G){return
true;}function
tableName($Gg){return
h($Gg["Name"]);}function
fieldName($m,$Me=0){return'<span title="'.h($m["full_type"]).'">'.h($m["field"]).'</span>';}function
selectLinks($Gg,$O=""){echo'<p class="links">';$Sd=array("select"=>'Select data');if(support("table")||support("indexes"))$Sd["table"]='Show structure';if(support("table")){if(is_view($Gg))$Sd["view"]='Alter view';else$Sd["create"]='Alter table';}if($O!==null)$Sd["edit"]='New item';foreach($Sd
as$w=>$X)echo" <a href='".h(ME)."$w=".urlencode($Gg["Name"]).($w=="edit"?$O:"")."'".bold(isset($_GET[$w])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Fg){return
array();}function
backwardKeysPrint($Ma,$K){}function
selectQuery($H){global$v;return"<p><code class='jush-$v'>".h(str_replace("\n"," ",$H))."</code>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Kc){return$L;}function
selectLink($X,$m){}function
selectVal($X,$z,$m,$Te){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$m["type"])&&!preg_match("~var~",$m["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$m["type"])&&!is_utf8($X))$J=lang(array('%d byte','%d bytes'),strlen($Te));return($z?"<a href='".h($z)."'>$J</a>":$J);}function
editVal($X,$m){return$X;}function
selectColumnsPrint($M,$f){global$Sc,$Xc;print_fieldset("select",'Select',$M);$q=0;$M[""]=array();foreach($M
as$w=>$X){$X=$_GET["columns"][$w];$e=select_input(" name='columns[$q][col]' onchange='".($w!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Sc||$Xc?"<select name='columns[$q][fun]' onchange='helpClose();".($w!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array('Functions'=>$Sc,'Aggregation'=>$Xc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$q++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$u){print_fieldset("search",'Search',$Z);foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$q]' value='".h($_GET["fulltext"][$q])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$q]",1,isset($_GET["boolean"][$q]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Xa="this.nextSibling.onchange();";for($q=0;$q<=count($_GET["where"]);$q++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$q][col]' onchange='$Xa'",$f,$X["col"],"(".'anywhere'.")"),html_select("where[$q][op]",$this->operators,$X["op"],$Xa),"<input type='search' name='where[$q][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Me,$f,$u){print_fieldset("sort",'Sort',$Me);$q=0;foreach((array)$_GET["order"]as$w=>$X){if($X!=""){echo"<div>".select_input(" name='order[$q]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$q]",1,isset($_GET["desc"][$w]),'descending')."</div>\n";$q++;}}echo"<div>".select_input(" name='order[$q]' onchange='selectAddRow(this);'",$f),checkbox("desc[$q]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($y)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Vg){if($Vg!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Vg)."'>","</div></fieldset>\n";}}function
selectActionPrint($u){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($u
as$t){if($t["type"]!="FULLTEXT")$f[reset($t["columns"])]=1;}$f[""]=1;foreach($f
as$w=>$X)json_row($w);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($fc,$f){}function
selectColumnsProcess($f,$u){global$Sc,$Xc;$M=array();$Vc=array();foreach((array)$_GET["columns"]as$w=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Sc)||in_array($X["fun"],$Xc)))){$M[$w]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Xc))$Vc[]=$M[$w];}}return
array($M,$Vc);}function
selectSearchProcess($n,$u){global$v;$J=array();foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$q]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$q]).(isset($_GET["boolean"][$q])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$ob=" $X[op]";if(preg_match('~IN$~',$X["op"])){$kd=process_length($X["val"]);$ob.=" ".($kd!=""?$kd:"(NULL)");}elseif($X["op"]=="SQL")$ob=" $X[val]";elseif($X["op"]=="LIKE %%")$ob=" LIKE ".$this->processInput($n[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$ob.=" ".$this->processInput($n[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$ob;else{$jb=array();foreach($n
as$C=>$m){$xd=preg_match('~char|text|enum|set~',$m["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$m["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$xd)){$C=idf_escape($C);$jb[]=($v=="sql"&&$xd&&!preg_match('~^utf8~',$m["collation"])?"CONVERT($C USING utf8)":$C);}}$J[]=($jb?"(".implode("$ob OR ",$jb)."$ob)":"0");}}}return$J;}function
selectOrderProcess($n,$u){$J=array();foreach((array)$_GET["order"]as$w=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$w])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Kc){return
false;}function
selectQueryBuild($M,$Z,$Vc,$Me,$y,$E){return"";}function
messageQuery($H){global$v;restart_session();$cd=&get_session("queries");$r="sql-".count($cd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$cd[$_GET["db"]][]=array($H,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$r' onclick=\"return !toggle('$r');\">".'SQL command'."</a>"."<div id='$r' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($H,1000).'</code></pre>'.(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($cd[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editFunctions($m){global$bc;$J=($m["null"]?"NULL/":"");foreach($bc
as$w=>$Sc){if(!$w||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Sc
as$if=>$X){if(!$if||preg_match("~$if~",$m["type"]))$J.="/$X";}if($w&&!preg_match('~set|blob|bytea|raw|file~',$m["type"]))$J.="/SQL";}}if($m["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($Q,$m,$Ha,$Y){if($m["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ha value='-1' checked><i>".'original'."</i></label> ":"").($m["null"]?"<label><input type='radio'$Ha value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ha,$m,$Y,0);return"";}function
processInput($m,$Y,$p=""){if($p=="SQL")return$Y;$C=$m["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$p))$J="$p()";elseif(preg_match('~^current_(date|timestamp)$~',$p))$J=$p;elseif(preg_match('~^([+-]|\\|\\|)$~',$p))$J=idf_escape($C)." $p $J";elseif(preg_match('~^[+-] interval$~',$p))$J=idf_escape($C)." $p ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$p))$J="$p(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$p))$J="$p($J)";return
unconvert_field($m,$J);}function
dumpOutput(){$J=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($k){}function
dumpTable($Q,$Ag,$yd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Ag)dump_csv(array_keys(fields($Q)));}elseif($Ag){if($yd==2){$n=array();foreach(fields($Q)as$C=>$m)$n[]=idf_escape($C)." $m[full_type]";$xb="CREATE TABLE ".table($Q)." (".implode(", ",$n).")";}else$xb=create_sql($Q,$_POST["auto_increment"]);if($xb){if($Ag=="DROP+CREATE"||$yd==1)echo"DROP ".($yd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($yd==1)$xb=remove_definer($xb);echo"$xb;\n\n";}}}function
dumpData($Q,$Ag,$H){global$g,$v;$Zd=($v=="sqlite"?0:1048576);if($Ag){if($_POST["format"]=="sql"){if($Ag=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$n=fields($Q);}$I=$g->query($H,1);if($I){$td="";$Va="";$Ed=array();$Cg="";$Dc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Dc()){if(!$Ed){$Hh=array();foreach($K
as$X){$m=$I->fetch_field();$Ed[]=$m->name;$w=idf_escape($m->name);$Hh[]="$w = VALUES($w)";}$Cg=($Ag=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Hh):"").";\n";}if($_POST["format"]!="sql"){if($Ag=="table"){dump_csv($Ed);$Ag="INSERT";}dump_csv($K);}else{if(!$td)$td="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Ed)).") VALUES";foreach($K
as$w=>$X){$m=$n[$w];$K[$w]=($X!==null?unconvert_field($m,preg_match('~(^|[^o])int|float|double|decimal~',$m["type"])&&$X!=''?$X:q($X)):"NULL");}$bg=($Zd?"\n":" ")."(".implode(",\t",$K).")";if(!$Va)$Va=$td.$bg;elseif(strlen($Va)+4+strlen($bg)+strlen($Cg)<$Zd)$Va.=",$bg";else{echo$Va.$Cg;$Va=$td.$bg;}}}if($Va)echo$Va.$Cg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($hd){return
friendly_url($hd!=""?$hd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($hd,$ne=false){$We=$_POST["output"];$yc=(preg_match('~sql~',$_POST["format"])?"sql":($ne?"tar":"csv"));header("Content-Type: ".($We=="gz"?"application/x-gzip":($yc=="tar"?"application/x-tar":($yc=="sql"||$We!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($We=="gz")ob_start('gzencode',1e6);return$yc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($me){global$ia,$v,$Tb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($me=="auth"){$Hc=true;foreach((array)$_SESSION["pwds"]as$Jh=>$ng){foreach($ng
as$N=>$Eh){foreach($Eh
as$V=>$G){if($G!==null){if($Hc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Hc=false;}$Fb=$_SESSION["db"][$Jh][$N][$V];foreach(($Fb?array_keys($Fb):array(""))as$k)echo"<a href='".h(auth_url($Jh,$N,$V,$k))."'>($Tb[$Jh]) ".h($V.($N!=""?"@$N":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{$this->databasesPrint($me);if(DB==""||!$me){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}if($_GET["ns"]!==""&&!$me&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";$S=table_status('',true);if(!$S)echo"<p class='message'>".'No tables.'."\n";else{$this->tablesPrint($S);$Sd=array();foreach($S
as$Q=>$U)$Sd[]=preg_quote($Q,'/');echo"<script type='text/javascript'>\n","var jushLang = '$v';\n","var jushLinks = { $v: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Sd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$v;\n";echo"</script>\n";}}}}function
databasesPrint($me){global$b,$g;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Db=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".'database'."'>DB</span>: ".($j?"<select name='db'$Db>".optionlist(array(""=>"")+$j,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($j?" class='hidden'":"").">\n";if($me!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br><select name='ns'$Db>".optionlist(array(""=>"(".'schema'.")")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$xg){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q).">".'select'."</a> ";$C=$this->tableName($xg);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($xg)?"view":""))." title='".'Show structure'."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$He;function
page_header($Zg,$l="",$Ua=array(),$ah=""){global$ca,$ia,$b,$g,$Tb,$v;page_headers();$bh=$Zg.($ah!=""?": $ah":"");$ch=strip_tags($bh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ch,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.2",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$ia');"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$v,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ua!==null){$z=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$Tb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Ua===false)echo"$N\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ua)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ua)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ua
as$w=>$X){$Kb=(is_array($X)?$X[1]:h($X));if($Kb!="")echo"<a href='".h(ME."$w=").urlencode(is_array($X)?$X[0]:$X)."'>$Kb</a> &raquo; ";}}echo"$Zg\n";}}echo"<h2>$bh</h2>\n";restart_session();page_messages($l);$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($l){$_h=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ie=$_SESSION["messages"][$_h];if($ie){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ie)."</div>\n";unset($_SESSION["messages"][$_h]);}if($l)echo"<div class='error'>$l</div>\n";}function
page_footer($me=""){global$b,$T;echo'</div>

';if($me!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($me);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($pe){while($pe>=2147483648)$pe-=4294967296;while($pe<=-2147483649)$pe+=4294967296;return(int)$pe;}function
long2str($W,$Oh){$bg='';foreach($W
as$X)$bg.=pack('V',$X);if($Oh)return
substr($bg,0,end($W));return$bg;}function
str2long($bg,$Oh){$W=array_values(unpack('V*',str_pad($bg,4*ceil(strlen($bg)/4),"\0")));if($Oh)$W[]=strlen($bg);return$W;}function
xxtea_mx($Uh,$Th,$Dg,$Ad){return
int32((($Uh>>5&0x7FFFFFF)^$Th<<2)+(($Th>>3&0x1FFFFFFF)^$Uh<<4))^int32(($Dg^$Th)+($Ad^$Uh));}function
encrypt_string($zg,$w){if($zg=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$W=str2long($zg,true);$pe=count($W)-1;$Uh=$W[$pe];$Th=$W[0];$Af=floor(6+52/($pe+1));$Dg=0;while($Af-->0){$Dg=int32($Dg+0x9E3779B9);$ac=$Dg>>2&3;for($Xe=0;$Xe<$pe;$Xe++){$Th=$W[$Xe+1];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Uh=int32($W[$Xe]+$oe);$W[$Xe]=$Uh;}$Th=$W[0];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Uh=int32($W[$pe]+$oe);$W[$pe]=$Uh;}return
long2str($W,false);}function
decrypt_string($zg,$w){if($zg=="")return"";if(!$w)return
false;$w=array_values(unpack("V*",pack("H*",md5($w))));$W=str2long($zg,false);$pe=count($W)-1;$Uh=$W[$pe];$Th=$W[0];$Af=floor(6+52/($pe+1));$Dg=int32($Af*0x9E3779B9);while($Dg){$ac=$Dg>>2&3;for($Xe=$pe;$Xe>0;$Xe--){$Uh=$W[$Xe-1];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Th=int32($W[$Xe]-$oe);$W[$Xe]=$Th;}$Uh=$W[$pe];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Th=int32($W[0]-$oe);$W[0]=$Th;$Dg=int32($Dg-0x9E3779B9);}return
long2str($W,true);}$g='';$bd=$_SESSION["token"];if(!$bd)$_SESSION["token"]=rand(1,1e6);$T=get_token();$jf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($w)=explode(":",$X);$jf[$w]=$X;}}$Ia=$_POST["auth"];if($Ia){session_regenerate_id();$Sb=$Ia["driver"];$N=$Ia["server"];$V=$Ia["username"];$G=$Ia["password"];$k=$Ia["db"];set_password($Sb,$N,$V,$G);$_SESSION["db"][$Sb][$N][$V][$k]=true;if($Ia["permanent"]){$w=base64_encode($Sb)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($k);$vf=$b->permanentLogin(true);$jf[$w]="$w:".base64_encode($vf?encrypt_string($G,$vf):"");cookie("adminer_permanent",implode(" ",$jf));}if(count($_POST)==1||DRIVER!=$Sb||SERVER!=$N||$_GET["username"]!==$V||DB!=$k)redirect(auth_url($Sb,$N,$V,$k));}elseif($_POST["logout"]){if($bd&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($jf&&!$_SESSION["pwds"]){session_regenerate_id();$vf=$b->permanentLogin();foreach($jf
as$w=>$X){list(,$cb)=explode(":",$X);list($Jh,$N,$V,$k)=array_map('base64_decode',explode("-",$w));set_password($Jh,$N,$V,decrypt_string(base64_decode($cb),$vf));$_SESSION["db"][$Jh][$N][$V][$k]=true;}}function
unset_permanent(){global$jf;foreach($jf
as$w=>$X){list($Jh,$N,$V,$k)=array_map('base64_decode',explode("-",$w));if($Jh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$k==DB)unset($jf[$w]);}cookie("adminer_permanent",implode(" ",$jf));}function
auth_error($sc=null){global$g,$b,$bd;$og=session_name();$l="";if(!$_COOKIE[$og]&&$_GET[$og]&&ini_bool("session.use_only_cookies"))$l='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$og]||$_GET[$og])&&!$bd)$l='Session expired, please login again.';else{$G=get_password();if($G!==null){$l=h($sc?$sc->getMessage():(is_string($g)?$g:'Invalid credentials.'));if($G===false)$l.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('Login',$l,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Jh,$N,$V,$G){$_SESSION["pwds"][$Jh][$N][$V]=($_COOKIE["adminer_key"]?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$pf)),false);page_footer("auth");exit;}$g=connect();}if(!is_object($g)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$Sb=new
Min_Driver($g);if($Ia&&$_POST["token"])$_POST["token"]=$T;$l='';if($_POST){if(!verify_token()){$qd="max_input_vars";$de=ini_get($qd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$w){$X=ini_get($w);if($X&&(!$de||$X<$de)){$qd=$w;$de=$X;}}}$l=(!$_POST["token"]&&$de?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$qd'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$l=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$l.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
connect_error(){global$b,$g,$T,$l,$Tb;$j=array();if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$l)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$l,false);echo"<p class='links'>\n";foreach(array('database'=>'Create new database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$w=>$X){if(support($w))echo"<a href='".h(ME)."$w='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Tb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$j=$b->databases();if($j){$eg=support("scheme");$ib=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($j
as$k){$Wf=h(ME)."db=".urlencode($k);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])):""),"<th><a href='$Wf'>".h($k)."</a>";$d=nbsp(db_collation($k,$ib));echo"<td>".(support("database")?"<a href='$Wf".($eg?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$Wf&amp;schema=' id='tables-".h($k)."' title='".'Database schema'."'>?</a>","\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}echo"<p><a href='".h(ME)."refresh=1'>".'Refresh'."</a>\n";}page_footer("db");if($j)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}function
select($I,$h=null,$Pe=array()){global$v;$Sd=array();$u=array();$f=array();$Ra=array();$rh=array();$J=array();odd('');for($q=0;$K=$I->fetch_row();$q++){if(!$q){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($_d=0;$_d<count($K);$_d++){$m=$I->fetch_field();$C=$m->name;$Oe=$m->orgtable;$Ne=$m->orgname;$J[$m->table]=$Oe;if($Pe&&$v=="sql")$Sd[$_d]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Oe!=""){if(!isset($u[$Oe])){$u[$Oe]=array();foreach(indexes($Oe,$h)as$t){if($t["type"]=="PRIMARY"){$u[$Oe]=array_flip($t["columns"]);break;}}$f[$Oe]=$u[$Oe];}if(isset($f[$Oe][$Ne])){unset($f[$Oe][$Ne]);$u[$Oe][$Ne]=$_d;$Sd[$_d]=$Oe;}}if($m->charsetnr==63)$Ra[$_d]=true;$rh[$_d]=$m->type;echo"<th".($Oe!=""||$m->name!=$Ne?" title='".h(($Oe!=""?"$Oe.":"").$Ne)."'":"").">".h($C).($Pe?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$w=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ra[$w]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($rh[$w]==254)$X="<code>$X</code>";}if(isset($Sd[$w])&&!$f[$Sd[$w]]){if($Pe&&$v=="sql"){$Q=$K[array_search("table=",$Sd)];$z=$Sd[$w].urlencode($Pe[$Q]!=""?$Pe[$Q]:$Q);}else{$z="edit=".urlencode($Sd[$w]);foreach($u[$Sd[$w]]as$gb=>$_d)$z.="&where".urlencode("[".bracket_escape($gb)."]")."=".urlencode($K[$_d]);}$X="<a href='".h(ME.$z)."'>$X</a>";}echo"<td>$X";}}echo($q?"</table>":"<p class='message'>".'No rows.')."\n";return$J;}function
referencable_primary($jg){$J=array();foreach(table_status('',true)as$Hg=>$Q){if($Hg!=$jg&&fk_support($Q)){foreach(fields($Hg)as$m){if($m["primary"]){if($J[$Hg]){unset($J[$Hg]);break;}$J[$Hg]=$m;}}}}return$J;}function
textarea($C,$Y,$L=10,$jb=80){global$v;echo"<textarea name='$C' rows='$L' cols='$jb' class='sqlarea jush-$v' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($w,$m,$ib,$Lc=array()){global$_g,$rh,$yh,$De;$U=$m["type"];echo'<td><select name="',$w,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($rh[$U])&&!isset($Lc[$U]))array_unshift($_g,$U);if($Lc)$_g['Foreign keys']=$Lc;echo
optionlist($_g,$U),'</select>
<td><input name="',$w,'[length]" value="',h($m["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$m["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='$w"."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($ib,$m["collation"]).'</select>',($yh?"<select name='$w"."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($yh,$m["unsigned"]).'</select>':''),(isset($m['on_update'])?"<select name='$w"."[on_update]'".($U=="timestamp"?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$m["on_update"]).'</select>':''),($Lc?"<select name='$w"."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$De),$m["on_delete"])."</select> ":" ");}function
process_length($x){global$lc;return(preg_match("~^\\s*\\(?\\s*$lc(?:\\s*,\\s*$lc)*+\\s*\\)?\\s*\$~",$x)&&preg_match_all("~$lc~",$x,$Xd)?"(".implode(",",$Xd[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$x)));}function
process_type($m,$hb="COLLATE"){global$yh;return" $m[type]".process_length($m["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$m["type"])&&in_array($m["unsigned"],$yh)?" $m[unsigned]":"").(preg_match('~char|text|enum|set~',$m["type"])&&$m["collation"]?" $hb ".q($m["collation"]):"");}function
process_field($m,$ph){global$v;$Hb=$m["default"];return
array(idf_escape(trim($m["field"])),process_type($ph),($m["null"]?" NULL":" NOT NULL"),(isset($Hb)?" DEFAULT ".((preg_match('~time~',$m["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Hb))||($m["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Hb))||($v=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Hb))?$Hb:q($Hb)):""),($m["type"]=="timestamp"&&$m["on_update"]?" ON UPDATE $m[on_update]":""),(support("comment")&&$m["comment"]!=""?" COMMENT ".q($m["comment"]):""),($m["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$w=>$X){if(preg_match("~$w|$X~",$U))return" class='$w'";}}function
edit_fields($n,$ib,$U="TABLE",$Lc=array(),$nb=false){global$g,$rd;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>Default values
',(support("comment")?"<td".($nb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($n))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.2' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($n),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($n
as$q=>$m){$q++;$Qe=$m[($_POST?"orig":"field")];$Pb=(isset($_POST["add"][$q-1])||(isset($m["field"])&&!$_POST["drop_col"][$q]))&&(support("drop_col")||$Qe=="");echo'<tr',($Pb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$q][inout]",explode("|",$rd),$m["inout"]):""),'<th>';if($Pb){echo'<input name="fields[',$q,'][field]" value="',h($m["field"]),'" onchange="editingNameChange(this);',($m["field"]!=""||count($n)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$q,'][orig]" value="',h($Qe),'">
';edit_type("fields[$q]",$m,$ib,$Lc);if($U=="TABLE"){echo'<td>',checkbox("fields[$q][null]",1,$m["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$q,'"';if($m["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$q][has_default]",1,$m["has_default"]),'<input name="fields[',$q,'][default]" value="',h($m["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($nb?"":" class='hidden'")."><input name='fields[$q][comment]' value='".h($m["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.2' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.0.2' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.0.2' alt='v' title='".'Move down'."'>&nbsp;":""),($Qe==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.2' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$n){ksort($n);$D=0;if($_POST["up"]){$Jd=0;foreach($n
as$w=>$m){if(key($_POST["up"])==$w){unset($n[$w]);array_splice($n,$Jd,0,array($m));break;}if(isset($m["field"]))$Jd=$D;$D++;}}elseif($_POST["down"]){$Nc=false;foreach($n
as$w=>$m){if(isset($m["field"])&&$Nc){unset($n[key($_POST["down"])]);array_splice($n,$D,0,array($Nc));break;}if(key($_POST["down"])==$w)$Nc=$m;$D++;}}elseif($_POST["add"]){$n=array_values($n);array_splice($n,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($A){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($A[0][0].$A[0][0],$A[0][0],substr($A[0],1,-1))),'\\'))."'";}function
grant($Tc,$xf,$f,$Ce){if(!$xf)return
true;if($xf==array("ALL PRIVILEGES","GRANT OPTION"))return($Tc=="GRANT"?queries("$Tc ALL PRIVILEGES$Ce WITH GRANT OPTION"):queries("$Tc ALL PRIVILEGES$Ce")&&queries("$Tc GRANT OPTION$Ce"));return
queries("$Tc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$xf).$f).$Ce);}function
drop_create($Ub,$xb,$Vb,$Tg,$Xb,$_,$he,$fe,$ge,$_e,$se){if($_POST["drop"])query_redirect($Ub,$_,$he);elseif($_e=="")query_redirect($xb,$_,$ge);elseif($_e!=$se){$zb=queries($xb);queries_redirect($_,$fe,$zb&&queries($Ub));if($zb)queries($Vb);}else
queries_redirect($_,$fe,queries($Tg)&&queries($Xb)&&queries($Ub)&&queries($xb));}function
create_trigger($Ce,$K){global$v;$Yg=" $K[Timing] $K[Event]";return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($v=="mssql"?$Ce.$Yg:$Yg.$Ce).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($Xf,$K){global$rd;$O=array();$n=(array)$K["fields"];ksort($n);foreach($n
as$m){if($m["field"]!="")$O[]=(preg_match("~^($rd)\$~",$m["inout"])?"$m[inout] ":"").idf_escape($m["field"]).process_type($m,"CHARACTER SET");}return"CREATE $Xf ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($o){global$De;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$o["source"])).") REFERENCES ".table($o["table"])." (".implode(", ",array_map('idf_escape',$o["target"])).")".(preg_match("~^($De)\$~",$o["on_delete"])?" ON DELETE $o[on_delete]":"").(preg_match("~^($De)\$~",$o["on_update"])?" ON UPDATE $o[on_update]":"");}function
tar_file($Fc,$dh){$J=pack("a100a8a8a8a12a12",$Fc,644,0,0,decoct($dh->size),decoct(time()));$ab=8*32;for($q=0;$q<strlen($J);$q++)$ab+=ord($J[$q]);$J.=sprintf("%06o",$ab)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$dh->send();echo
str_repeat("\0",511-($dh->size+511)%512);}function
ini_bytes($qd){$X=ini_get($qd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($hf){global$v,$g;$Ah=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($hf[$v]?"<a href='$Ah[$v]$hf[$v]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}$De="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($sb){$this->size+=strlen($sb);fwrite($this->handler,$sb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$lc="'(?:''|[^'\\\\]|\\\\.)*+'";$rd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$n=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$n),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$n=fields($a);if(!$n)$l=error();$R=table_status1($a,true);page_header(($n&&is_view($R)?'View':'Table').": ".h($a),$l);$b->selectLinks($R);$mb=$R["Comment"];if($mb!="")echo"<p>".'Comment'.": ".h($mb)."\n";if($n){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($n
as$m){echo"<tr".odd()."><th>".h($m["field"]),"<td title='".h($m["collation"])."'>".h($m["full_type"]).($m["null"]?" <i>NULL</i>":"").($m["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($m["default"])?" [<b>".h($m["default"])."</b>]":""),(support("comment")?"<td>".nbsp($m["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$u=indexes($a);if($u){echo"<table cellspacing='0'>\n";foreach($u
as$C=>$t){ksort($t["columns"]);$uf=array();foreach($t["columns"]as$w=>$X)$uf[]="<i>".h($X)."</i>".($t["lengths"][$w]?"(".$t["lengths"][$w].")":"").($t["descs"][$w]?" DESC":"");echo"<tr title='".h($C)."'><th>$t[type]<td>".implode(", ",$uf)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$Lc=foreign_keys($a);if($Lc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td>&nbsp;</thead>\n";foreach($Lc
as$C=>$o){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$o["source"]))."</i>","<td><a href='".h($o["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($o["db"]),ME):($o["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($o["ns"]),ME):ME))."table=".urlencode($o["table"])."'>".($o["db"]!=""?"<b>".h($o["db"])."</b>.":"").($o["ns"]!=""?"<b>".h($o["ns"])."</b>.":"").h($o["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$o["target"]))."</i>)","<td>".nbsp($o["on_delete"])."\n","<td>".nbsp($o["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$oh=triggers($a);if($oh){echo"<table cellspacing='0'>\n";foreach($oh
as$w=>$X)echo"<tr valign='top'><td>$X[0]<td>$X[1]<th>".h($w)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($w))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Jg=array();$Kg=array();$C="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$C-".DB]?"$C-".DB:$C)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Xd,PREG_SET_ORDER);foreach($Xd
as$q=>$A){$Jg[$A[1]]=array($A[2],$A[3]);$Kg[]="\n\t'".js_escape($A[1])."': [ $A[2], $A[3] ]";}$fh=0;$Oa=-1;$dg=array();$Lf=array();$Nd=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$mf=0;$dg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$m){$mf+=1.25;$m["pos"]=$mf;$dg[$Q]["fields"][$C]=$m;}$dg[$Q]["pos"]=($Jg[$Q]?$Jg[$Q]:array($fh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Ld=$Oa;if($Jg[$Q][1]||$Jg[$X["table"]][1])$Ld=min(floatval($Jg[$Q][1]),floatval($Jg[$X["table"]][1]))-1;else$Oa-=.1;while($Nd[(string)$Ld])$Ld-=.0001;$dg[$Q]["references"][$X["table"]][(string)$Ld]=array($X["source"],$X["target"]);$Lf[$X["table"]][$Q][(string)$Ld]=$X["target"];$Nd[(string)$Ld]=true;}}$fh=max($fh,$dg[$Q]["pos"][0]+2.5+$mf);}echo'<div id="schema" style="height: ',$fh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Kg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$fh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($dg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$m){$X='<span'.type_class($m["type"]).' title="'.h($m["full_type"].($m["null"]?" NULL":'')).'">'.h($m["field"]).'</span>';echo"<br>".($m["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Qg=>$Mf){foreach($Mf
as$Ld=>$If){$Md=$Ld-$Jg[$C][1];$q=0;foreach($If[0]as$sg)echo"\n<div class='references' title='".h($Qg)."' id='refs$Ld-".($q++)."' style='left: $Md"."em; top: ".$Q["fields"][$sg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Md)."em;'></div></div>";}}foreach((array)$Lf[$C]as$Qg=>$Mf){foreach($Mf
as$Ld=>$f){$Md=$Ld-$Jg[$C][1];$q=0;foreach($f
as$Pg)echo"\n<div class='references' title='".h($Qg)."' id='refd$Ld-".($q++)."' style='left: $Md"."em; top: ".$Q["fields"][$Pg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.0.2'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Md)."em;'></div></div>";}}echo"\n</div>\n";}foreach($dg
as$C=>$Q){foreach((array)$Q["references"]as$Qg=>$Mf){foreach($Mf
as$Ld=>$If){$le=$fh;$be=-10;foreach($If[0]as$w=>$sg){$nf=$Q["pos"][0]+$Q["fields"][$sg]["pos"];$of=$dg[$Qg]["pos"][0]+$dg[$Qg]["fields"][$If[1][$w]]["pos"];$le=min($le,$nf,$of);$be=max($be,$nf,$of);}echo"<div class='references' id='refl$Ld' style='left: $Ld"."em; top: $le"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($be-$le)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$l){$vb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$w)$vb.="&$w=".urlencode($_POST[$w]);cookie("adminer_export",substr($vb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$yc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$wd=preg_match('~sql~',$_POST["format"]);if($wd)echo"-- Adminer $ia ".$Tb[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$g->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Ag=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){$b->dumpDatabase($k);if($g->select_db($k)){if($wd&&preg_match('~CREATE~',$Ag)&&($xb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($Ag=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo"$xb;\n";}if($wd){if($Ag)echo
use_sql($k).";\n\n";$Ve="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Xf){foreach(get_rows("SHOW $Xf STATUS WHERE Db = ".q($k),null,"-- ")as$K)$Ve.=($Ag!='DROP+CREATE'?"DROP $Xf IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $Xf ".idf_escape($K["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K)$Ve.=($Ag!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3)).";;\n\n";}if($Ve)echo"DELIMITER ;;\n\n$Ve"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Mh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Ab=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Ab){if($yc=="tar"){$dh=new
TmpFile;ob_start(array($dh,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Mh[]=$C;elseif($Ab){$n=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($n,$n)." FROM ".table($C));}if($wd&&$_POST["triggers"]&&$Q&&($oh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$oh\nDELIMITER ;\n";if($yc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$k/")."$C.csv",$dh);}elseif($wd)echo"\n";}}foreach($Mh
as$Lh)$b->dumpTable($Lh,$_POST["table_style"],1);if($yc=="tar")echo
pack("x512");}}}if($wd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$l,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Eb=array('','USE','DROP+CREATE','CREATE');$Lg=array('','DROP+CREATE','CREATE');$Bb=array('','TRUNCATE+INSERT','INSERT');if($v=="sql")$Bb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Eb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Routines'):"").(support("event")?checkbox("events",1,$K["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Lg,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Bb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$rf=array();if(DB!=""){$Za=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Za onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$Za onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Mh="";$Mg=tables_list();foreach($Mg
as$C=>$U){$qf=preg_replace('~_.*~','',$C);$Za=($a==""||$a==(substr($a,-1)=="%"?"$qf%":$C));$uf="<tr><td>".checkbox("tables[]",$C,$Za,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Mh.="$uf\n";else
echo"$uf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$Za,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$rf[$qf]++;}echo$Mh;if($Mg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$qf=preg_replace('~_.*~','',$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$qf%",$k,"formUncheck('check-databases');","block")."\n";$rf[$qf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Hc=true;foreach($rf
as$w=>$X){if($w!=""&&$X>1){echo($Hc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$w%")."'>".h($w)."</a>";$Hc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Tc=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Tc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Edit'."</a>\n";if(!$Tc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$l&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$dd=&get_session("queries");$cd=&$dd[DB];if(!$l&&$_POST["clear"]){$cd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$l);if(!$l&&$_POST){$Pc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Pc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Pc?fread($Pc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Af=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$cd||reset(end($cd))!=$Af){restart_session();$cd[]=array($Af,time());set_session("queries",$dd);stop_session();}}$tg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$Jb=";";$D=0;$hc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$lb=0;$nc=array();$Rd=0;$af='[\'"'.($v=="sql"?'`#':($v=="sqlite"?'`[':($v=="mssql"?'[':''))).']|/\\*|-- |$'.($v=="pgsql"?'|\\$[^$]*\\$':'');$gh=microtime(true);parse_str($_COOKIE["adminer_export"],$va);$Zb=$b->dumpFormat();unset($Zb["sql"]);while($H!=""){if(!$D&&preg_match("~^$tg*DELIMITER\\s+(\\S+)~i",$H,$A)){$Jb=$A[1];$H=substr($H,strlen($A[0]));}else{preg_match('('.preg_quote($Jb)."\\s*|$af)",$H,$A,PREG_OFFSET_CAPTURE,$D);list($Nc,$mf)=$A[0];if(!$Nc&&$Pc&&!feof($Pc))$H.=fread($Pc,1e5);else{if(!$Nc&&rtrim($H)=="")break;$D=$mf+strlen($Nc);if($Nc&&rtrim($Nc)!=$Jb){while(preg_match('('.($Nc=='/*'?'\\*/':($Nc=='['?']':(preg_match('~^-- |^#~',$Nc)?"\n":preg_quote($Nc)."|\\\\."))).'|$)s',$H,$A,PREG_OFFSET_CAPTURE,$D)){$bg=$A[0][0];if(!$bg&&$Pc&&!feof($Pc))$H.=fread($Pc,1e5);else{$D=$A[0][1]+strlen($bg);if($bg[0]!="\\")break;}}}else{$hc=false;$Af=substr($H,0,$mf);$lb++;$uf="<pre id='sql-$lb'><code class='jush-$v'>".shorten_utf8(trim($Af),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$uf;ob_flush();flush();}$wg=microtime(true);if($g->multi_query($Af)&&is_object($h)&&preg_match("~^$tg*USE\\b~isU",$Af))$h->query($Af);do{$I=$g->store_result();$ic=microtime(true);$Wg=" <span class='time'>(".format_time($wg,$ic).")</span>".(strlen($Af)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Af))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$uf:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$nc[]=" <a href='#sql-$lb'>$lb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$Pe=select($I,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($I->num_rows?lang(array('%d row','%d rows'),$I->num_rows):"").$Wg;$r="export-$lb";$xc=", <a href='#$r' onclick=\"return !toggle('$r');\">".'Export'."</a><span id='$r' class='hidden'>: ".html_select("output",$b->dumpOutput(),$va["output"])." ".html_select("format",$Zb,$va["format"])."<input type='hidden' name='query' value='".h($Af)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($tg|\\()*SELECT\\b~isU",$Af)&&($wc=explain($h,$Af))){$r="explain-$lb";echo", <a href='#$r' onclick=\"return !toggle('$r');\">EXPLAIN</a>$xc","<div id='$r' class='hidden'>\n";select($wc,$h,$Pe);echo"</div>\n";}else
echo$xc;echo"</form>\n";}}else{if(preg_match("~^$tg*(CREATE|DROP|ALTER)$tg+(DATABASE|SCHEMA)\\b~isU",$Af)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$Wg\n";}$wg=$ic;}while($g->next_result());$Rd+=substr_count($Af.$Nc,"\n");$H=substr($H,$D);$D=0;}}}}if($hc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$lb-count($nc))," <span class='time'>(".format_time($gh,microtime(true)).")</span>\n";}elseif($nc&&$lb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$nc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$tc="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Af=$_GET["sql"];if($_POST)$Af=$_POST["query"];elseif($_GET["history"]=="all")$Af=$cd;elseif($_GET["history"]!="")$Af=$cd[$_GET["history"]][0];echo"<p>";textarea("query",$Af,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$tc\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>",(ini_bool("file_uploads")?'<input type="file" name="sql_file[]" multiple> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),"\n$tc","</div></fieldset>\n","<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$cd){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($cd);$X;$X=prev($cd)){$w=key($cd);list($Af,$Wg)=$X;echo'<a href="'.h(ME."sql=&history=$w").'">'.'Edit'."</a> <span class='time' title='".@date('Y-m-d',$Wg)."'>".@date("H:i:s",$Wg)."</span> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Af)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$n=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$n):""):where($_GET,$n));$zh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($n
as$C=>$m){if(!isset($m["privileges"][$zh?"update":"insert"])||$b->fieldName($m)=="")unset($n[$C]);}if($_POST&&!$l&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"])$_=($zh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$_))$_=ME."select=".urlencode($a);$u=indexes($a);$uh=unique_array($_GET["where"],$u);$Df="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($_,'Item has been deleted.',$Sb->delete($a,$Df,!$uh));else{$O=array();foreach($n
as$C=>$m){$X=process_input($m);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($zh){if(!$O)redirect($_);queries_redirect($_,'Item has been updated.',$Sb->update($a,$O,$Df,!$uh));if(is_ajax()){page_headers();page_messages($l);exit;}}else{$I=$Sb->insert($a,$O);$Kd=($I?last_id():0);queries_redirect($_,sprintf('Item%s has been inserted.',($Kd?" $Kd":"")),$I);}}}$Hg=$b->tableName(table_status1($a,true));page_header(($zh?'Edit':'Insert'),$l,array("select"=>array($a,$Hg)),$Hg);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($n
as$C=>$m){if(isset($m["privileges"]["select"])){$Ea=convert_field($m);if($_POST["clone"]&&$m["auto_increment"])$Ea="''";if($v=="sql"&&preg_match("~enum|set~",$m["type"]))$Ea="1*".idf_escape($C);$M[]=($Ea?"$Ea AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Sb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1),0);$K=$I->fetch_assoc();if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$n){$r=($v=="mongo"?"_id":"itemName()");if(!$Z){$K=$Sb->select($a,array("*"),$Z,array("*"),array(),1,0);$K=($K?$K->fetch_assoc():array($r=>""));}if($K){foreach($K
as$w=>$X){if(!$Z)$K[$w]=null;$n[$w]=array("field"=>$w,"null"=>($w!=$r),"auto_increment"=>($w==$r));}}}if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$n)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($n
as$C=>$m){echo"<tr><th>".$b->fieldName($m);$Hb=$_GET["set"][bracket_escape($C)];if($Hb===null){$Hb=$m["default"];if($m["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Hb,$Nf))$Hb=$Nf[1];}$Y=($K!==null?($K[$C]!=""&&$v=="sql"&&preg_match("~enum|set~",$m["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$zh&&$m["auto_increment"]?"":(isset($_GET["select"])?false:$Hb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$m);$p=($_POST["save"]?(string)$_POST["function"][$C]:($zh&&$m["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$m["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$p="now";}input($m,$Y,$p);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' value='".h($_POST["field_keys"][0])."'>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array()),$_POST["field_funs"][0])."<td><input name='field_vals[]' value='".h($_POST["field_vals"][0])."'>"."\n";echo"</table>\n";}echo'<p>
';if($n){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($zh?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($zh?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$n?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$bf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$w)$bf[$w]=$w;$Kf=referencable_primary($a);$Lc=array();foreach($Kf
as$Hg=>$m)$Lc[str_replace("`","``",$Hg)."`".str_replace("`","``",$m["field"])]=$Hg;$Se=array();$R=array();if($a!=""){$Se=fields($a);$R=table_status($a);if(!$R)$l='No tables.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$l){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$n=array();$Ba=array();$Bh=false;$Jc=array();ksort($K["fields"]);$Re=reset($Se);$za=" FIRST";foreach($K["fields"]as$w=>$m){$o=$Lc[$m["type"]];$ph=($o!==null?$Kf[$o]:$m);if($m["field"]!=""){if(!$m["has_default"])$m["default"]=null;if($w==$K["auto_increment_col"])$m["auto_increment"]=true;$zf=process_field($m,$ph);$Ba[]=array($m["orig"],$zf,$za);if($zf!=process_field($Re,$Re)){$n[]=array($m["orig"],$zf,$za);if($m["orig"]!=""||$za)$Bh=true;}if($o!==null)$Jc[idf_escape($m["field"])]=($a!=""&&$v!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Lc[$m["type"]],'source'=>array($m["field"]),'target'=>array($ph["field"]),'on_delete'=>$m["on_delete"],));$za=" AFTER ".idf_escape($m["field"]);}elseif($m["orig"]!=""){$Bh=true;$n[]=array($m["orig"]);}if($m["orig"]!=""){$Re=next($Se);if(!$Re)$za="";}}$df="";if($bf[$K["partition_by"]]){$ef=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$w=>$X){$Y=$K["partition_values"][$w];$ef[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$df.="\nPARTITION BY $K[partition_by]($K[partition])".($ef?" (".implode(",",$ef)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$df.="\nREMOVE PARTITIONING";$B='Table has been altered.';if($a==""){cookie("adminer_engine",$K["Engine"]);$B='Table has been created.';}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$B,alter_table($a,$C,($v=="sqlite"&&($Bh||$Jc)?$Ba:$n),$Jc,$K["Comment"],($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?+$K["Auto_increment"]:""),$df));}}page_header(($a!=""?'Alter table':'Create table'),$l,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($rh["int"])?"int":(isset($rh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($Se
as$m){$m["has_default"]=isset($m["default"]);$K["fields"][]=$m;}if(support("partitioning")){$Qc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Qc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$ef=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Qc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$ef[""]="";$K["partition_names"]=array_keys($ef);$K["partition_values"]=array_values($ef);}}}$ib=collations();$kc=engines();foreach($kc
as$jc){if(!strcasecmp($jc,$K["Engine"])){$K["Engine"]=$jc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($kc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".'engine'.")")+$kc,$K["Engine"])."</select>":""),' ',($ib&&!preg_match("~sqlite|mssql~",$v)?html_select("Collation",array(""=>"(".'collation'.")")+$ib,$K["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$nb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$nb){foreach($K["fields"]as$m){if($m["comment"]!=""){$nb=true;break;}}}edit_fields($K["fields"],$ib,"TABLE",$Lc,$nb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($nb?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($nb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$cf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'Partition by',$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$bf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($cf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($cf?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($K["partition_names"]as$w=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($w==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$w]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$md=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$md[]="FULLTEXT";$u=indexes($a);$sf=array();if($v=="mongo"){$sf=$u["_id_"];unset($md[0]);unset($u["_id_"]);}$K=$_POST;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$t){$C=$t["name"];if(in_array($t["type"],$md)){$f=array();$Pd=array();$Lb=array();$O=array();ksort($t["columns"]);foreach($t["columns"]as$w=>$e){if($e!=""){$x=$t["lengths"][$w];$Kb=$t["descs"][$w];$O[]=idf_escape($e).($x?"(".(+$x).")":"").($Kb?" DESC":"");$f[]=$e;$Pd[]=($x?$x:null);$Lb[]=$Kb;}}if($f){$uc=$u[$C];if($uc){ksort($uc["columns"]);ksort($uc["lengths"]);ksort($uc["descs"]);if($t["type"]==$uc["type"]&&array_values($uc["columns"])===$f&&(!$uc["lengths"]||array_values($uc["lengths"])===$Pd)&&array_values($uc["descs"])===$Lb){unset($u[$C]);continue;}}$c[]=array($t["type"],$C,"(".implode(", ",$O).")");}}}foreach($u
as$C=>$uc)$c[]=array($uc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$l,array("table"=>$a),h($a));$n=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$w=>$t){if($t["columns"][count($t["columns"])]!="")$K["indexes"][$w]["columns"][]="";}$t=end($K["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($u
as$w=>$t){$u[$w]["name"]=$w;$u[$w]["columns"][]="";}$u[]=array("columns"=>array(1=>""));$K["indexes"]=$u;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>Index Type
<th><input type="submit" style="left: -1000px; position: absolute;">Column (length)
<th>Name
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.0.2' alt='+' title='Add next'></noscript>&nbsp;
</thead>
<?php
if($sf){echo"<tr><td>PRIMARY<td>";foreach($sf["columns"]as$w=>$e){echo"<select disabled>".optionlist($n,$e)."</select>","<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$_d=1;foreach($K["indexes"]as$t){if(!$_POST["drop_col"]||$_d!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$_d][type]",array(-1=>"")+$md,$t["type"],($_d==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($t["columns"]);$q=1;foreach($t["columns"]as$w=>$e){echo"<span>".html_select("indexes[$_d][columns][$q]",array(-1=>"")+$n,$e,($q==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($v=="sql"?"":$_GET["indexes"]."_")."');"),($v=="sql"||$v=="mssql"?"<input type='number' name='indexes[$_d][lengths][$q]' class='size' value='".h($t["lengths"][$w])."'>":""),($v!="sql"?checkbox("indexes[$_d][descs][$q]",1,$t["descs"][$w],'descending'):"")," </span>";$q++;}echo"<td><input name='indexes[$_d][name]' value='".h($t["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$_d]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.2' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$_d++;}echo'</table>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$l&&!isset($_POST["add_x"])){restart_session();$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'Database has been renamed.',rename_database($C,$K["collation"]));}else{$j=explode("\n",str_replace("\r","",$C));$Bg=true;$Jd="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$K["collation"]))$Bg=false;$Jd=$k;}}queries_redirect(ME."db=".urlencode($Jd),'Database has been created.',$Bg);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$l,array(),h(DB));$ib=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$ib);elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$Tc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Tc,$A)&&$A[1]){$C=stripcslashes(idf_unescape("`$A[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($ib?html_select("collation",array(""=>"(".'collation'.")")+$ib,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.2' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$l){$z=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$z,'Schema has been dropped.');else{$C=trim($K["name"]);$z.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$z,'Schema has been created.');elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$z,'Schema has been altered.');else
redirect($z);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$l);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$l);$Xf=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$kd=array();$Ve=array();foreach($Xf["fields"]as$q=>$m){if(substr($m["inout"],-3)=="OUT")$Ve[$q]="@".idf_escape($m["field"])." AS ".idf_escape($m["field"]);if(!$m["inout"]||substr($m["inout"],0,2)=="IN")$kd[]=$q;}if(!$l&&$_POST){$Wa=array();foreach($Xf["fields"]as$w=>$m){if(in_array($w,$kd)){$X=process_input($m);if($X===false)$X="''";if(isset($Ve[$w]))$g->query("SET @".idf_escape($m["field"])." = $X");}$Wa[]=(isset($Ve[$w])?"@".idf_escape($m["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Wa).")";echo"<p><code class='jush-$v'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($Ve)select($g->query("SELECT ".implode(", ",$Ve)));}}echo'
<form action="" method="post">
';if($kd){echo"<table cellspacing='0'>\n";foreach($kd
as$w){$m=$Xf["fields"][$w];$C=$m["field"];echo"<tr><th>".$b->fieldName($m);$Y=$_POST["fields"][$C];if($Y!=""){if($m["type"]=="enum")$Y=+$Y;if($m["type"]=="set")$Y=array_sum($Y);}input($m,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$B=($_POST["drop"]?'Foreign key has been dropped.':($C!=""?'Foreign key has been altered.':'Foreign key has been created.'));$_=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Pg=array();foreach($K["source"]as$w=>$X)$Pg[$w]=$K["target"][$w];$K["target"]=$Pg;if($v=="sqlite")queries_redirect($_,$B,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Ub="\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Ub,$_,$B);else{query_redirect($c.($C!=""?"$Ub,":"")."\nADD".format_foreign_key($K),$_,$B);$l='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$l";}}}page_header('Foreign key',$l,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Lc=foreign_keys($a);$K=$Lc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$sg=array_keys(fields($a));$Pg=($a===$K["table"]?$sg:array_keys(fields($K["table"])));$Jf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'Target table:
',html_select("table",$Jf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$_d=0;foreach($K["source"]as$w=>$X){echo"<tr>","<td>".html_select("source[".(+$w)."]",array(-1=>"")+$sg,$X,($_d==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$w)."]",$Pg,$K["target"][$w]);$_d++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$De),$K["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$De),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$l){$C=trim($K["name"]);$Ea=" AS\n$K[select]";$_=ME."table=".urlencode($C);$B='View has been altered.';if(!$_POST["drop"]&&$a==$C&&$v!="sqlite")query_redirect(($v=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ea,$_,$B);else{$Rg=$C."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($C).$Ea,"DROP VIEW ".table($C),"CREATE VIEW ".table($Rg).$Ea,"DROP VIEW ".table($Rg),($_POST["drop"]?substr(ME,0,-1):$_),'View has been dropped.',$B,'View has been created.',$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$l)$l=$g->error;}page_header(($a!=""?'Alter view':'Create view'),$l,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$ud=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$yg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$l){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($K["INTERVAL_FIELD"],$ud)&&isset($yg[$K["STATUS"]])){$cg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$cg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$cg)."\n".$yg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$l);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$ud,$K["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$yg,$K["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Xf=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$l){$Rg="$K[name]_adminer_".uniqid();drop_create("DROP $Xf ".idf_escape($da),create_routine($Xf,$K),"DROP $Xf ".idf_escape($K["name"]),create_routine($Xf,array("name"=>$Rg)+$K),"DROP $Xf ".idf_escape($Rg),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$l);if(!$_POST&&$da!=""){$K=routine($da,$Xf);$K["name"]=$da;}$ib=get_vals("SHOW CHARACTER SET");sort($ib);$Yf=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($Yf?'Language'.": ".html_select("language",$Yf,$K["language"]):""),'<input type="submit" value="Save">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$ib,$Xf);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$K["returns"],$ib);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$l){$z=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$z,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$z,'Sequence has been created.');elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$z,'Sequence has been altered.');else
redirect($z);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$l);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$l){$z=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$z,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$z,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$l);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$nh=trigger_options();$lh=array("INSERT","UPDATE","DELETE");$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$l&&in_array($_POST["Timing"],$nh["Timing"])&&in_array($_POST["Event"],$lh)&&in_array($_POST["Type"],$nh["Type"])){$Ce=" ON ".table($a);$Ub="DROP TRIGGER ".idf_escape($C).($v=="pgsql"?$Ce:"");$_=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Ub,$_,'Trigger has been dropped.');else{if($C!="")queries($Ub);queries_redirect($_,($C!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($Ce,$_POST)));if($C!="")queries(create_trigger($Ce,$K+array("Type"=>reset($nh["Type"]))));}}$K=$_POST;}page_header(($C!=""?'Alter trigger'.": ".h($C):'Create trigger'),$l,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$nh["Timing"],$K["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$lh,$K["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$nh["Type"],$K["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($K["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$xf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$tb)$xf[$tb][$K["Privilege"]]=$K["Comment"];}$xf["Server Admin"]+=$xf["File access on server"];$xf["Databases"]["Create routine"]=$xf["Procedures"]["Create routine"];unset($xf["Procedures"]["Create routine"]);$xf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$xf["Columns"][$X]=$xf["Tables"][$X];unset($xf["Server Admin"]["Usage"]);foreach($xf["Tables"]as$w=>$X)unset($xf["Databases"][$w]);$re=array();if($_POST){foreach($_POST["objects"]as$w=>$X)$re[$X]=(array)$re[$X]+(array)$_POST["grants"][$w];}$Uc=array();$Ae="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$A)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$A[1],$Xd,PREG_SET_ORDER)){foreach($Xd
as$X){if($X[1]!="USAGE")$Uc["$A[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Uc["$A[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$A))$Ae=$A[1];}}if($_POST&&!$l){$Be=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Be",ME."privileges=",'User has been dropped.');else{$te=q($_POST["user"])."@".q($_POST["host"]);$ff=$_POST["pass"];if($ff!=''&&!$_POST["hashed"]){$ff=$g->result("SELECT PASSWORD(".q($ff).")");$l=!$ff;}$zb=false;if(!$l){if($Be!=$te){$zb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $te IDENTIFIED BY PASSWORD ".q($ff));$l=!$zb;}elseif($ff!=$Ae)queries("SET PASSWORD FOR $te = ".q($ff));}if(!$l){$Uf=array();foreach($re
as$xe=>$Tc){if(isset($_GET["grant"]))$Tc=array_filter($Tc);$Tc=array_keys($Tc);if(isset($_GET["grant"]))$Uf=array_diff(array_keys(array_filter($re[$xe],'strlen')),$Tc);elseif($Be==$te){$ze=array_keys((array)$Uc[$xe]);$Uf=array_diff($ze,$Tc);$Tc=array_diff($Tc,$ze);unset($Uc[$xe]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$xe,$A)&&(!grant("REVOKE",$Uf,$A[2]," ON $A[1] FROM $te")||!grant("GRANT",$Tc,$A[2]," ON $A[1] TO $te"))){$l=true;break;}}}if(!$l&&isset($_GET["host"])){if($Be!=$te)queries("DROP USER $Be");elseif(!isset($_GET["grant"])){foreach($Uc
as$xe=>$Uf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$xe,$A))grant("REVOKE",array_keys($Uf),$A[2]," ON $A[1] FROM $te");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$l);if($zb)$g->query("DROP USER $te");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$l,array("privileges"=>array('','Privileges')));if($_POST){$K=$_POST;$Uc=$re;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ae;if($Ae!="")$K["hashed"]=true;$Uc[(DB==""||$Uc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$q=0;foreach($Uc
as$xe=>$Tc){echo'<th>'.($xe!="*.*"?"<input name='objects[$q]' value='".h($xe)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$q]' value='*.*' size='10'>*.*");$q++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$tb=>$Kb){foreach((array)$xf[$tb]as$wf=>$mb){echo"<tr".odd()."><td".($Kb?">$Kb<td":" colspan='2'").' lang="en" title="'.h($mb).'">'.h($wf);$q=0;foreach($Uc
as$xe=>$Tc){$C="'grants[$q][".h(strtoupper($wf))."]'";$Y=$Tc[strtoupper($wf)];if($tb=="Server Admin"&&$xe!=(isset($Uc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($wf=="All privileges"?" id='grants-$q-all'":($wf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$q-all');\""))."></label>";$q++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$l){$Gd=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$Gd++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Gd),$Gd||!$_POST["kill"]);}page_header('Process list',$l);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$q=-1;foreach(process_list()as$q=>$K){if(!$q){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$w=>$X)echo"<th>$w".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($w),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$w=>$X)echo"<td>".(($v=="sql"&&$w=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($v=="pgsql"&&$w=="current_query"&&$X!="<IDLE>")||($v=="oracle"&&$w=="sql_text"&&$X!="")?"<code class='jush-$v'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($q+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$u=indexes($a);$n=fields($a);$Lc=column_foreign_keys($a);$ye="";if($R["Oid"]){$ye=($v=="sqlite"?"rowid":"oid");$u[]=array("type"=>"PRIMARY","columns"=>array($ye));}parse_str($_COOKIE["adminer_import"],$wa);$Vf=array();$f=array();$Vg=null;foreach($n
as$w=>$m){$C=$b->fieldName($m);if(isset($m["privileges"]["select"])&&$C!=""){$f[$w]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($m))$Vg=$b->selectLengthProcess();}$Vf+=$m["privileges"];}list($M,$Vc)=$b->selectColumnsProcess($f,$u);$vd=count($Vc)<count($M);$Z=$b->selectSearchProcess($n,$u);$Me=$b->selectOrderProcess($n,$u);$y=$b->selectLimitProcess();$Qc=($M?implode(", ",$M):"*".($ye?", $ye":"")).convert_fields($f,$n,$M)."\nFROM ".table($a);$Wc=($Vc&&$vd?"\nGROUP BY ".implode(", ",$Vc):"").($Me?"\nORDER BY ".implode(", ",$Me):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$vh=>$K){$Ea=convert_field($n[key($K)]);$M=array($Ea?$Ea:idf_escape(key($K)));$Z[]=where_check($vh,$n);$J=$Sb->select($a,$M,$Z,$M,array(),1,0);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$l){$Qh=$Z;if(!$_POST["all"]&&is_array($_POST["check"]))$Qh[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Qh=($Qh?"\nWHERE ".implode(" AND ",$Qh):"");$sf=$xh=null;foreach($u
as$t){if($t["type"]=="PRIMARY"){$sf=array_flip($t["columns"]);$xh=($M?$sf:array());break;}}foreach((array)$xh
as$w=>$X){if(in_array(idf_escape($w),$M))unset($xh[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$xh===array())$H="SELECT $Qc$Qh$Wc";else{$th=array();foreach($_POST["check"]as$X)$th[]="(SELECT".limit($Qc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n).$Wc,1).")";$H=implode(" UNION ALL ",$th);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Lc)){if($_POST["save"]||$_POST["delete"]){$I=true;$xa=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($n[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($xh===array()&&is_array($_POST["check"]))||$vd){$I=($_POST["delete"]?$Sb->delete($a,$Qh):($_POST["clone"]?queries("INSERT $H$Qh"):$Sb->update($a,$O,$Qh)));$xa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Ph="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n);$I=($_POST["delete"]?$Sb->delete($a,$Ph,1):($_POST["clone"]?queries("INSERT".limit1($H,$Ph)):$Sb->update($a,$O,$Ph)));if(!$I)break;$xa+=$g->affected_rows;}}}$B=lang(array('%d item has been affected.','%d items have been affected.'),$xa);if($_POST["clone"]&&$I&&$xa==1){$Kd=last_id();if($Kd)$B=sprintf('Item%s has been inserted.'," $Kd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$B,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$l='Ctrl+click on a value to modify it.';else{$I=true;$xa=0;foreach($_POST["val"]as$vh=>$K){$O=array();foreach($K
as$w=>$X){$w=bracket_escape($w,1);$O[idf_escape($w)]=(preg_match('~char|text~',$n[$w]["type"])||$X!=""?$b->processInput($n[$w],$X):"NULL");}$I=$Sb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($vh,$n),!($vd||$xh===array())," ");if(!$I)break;$xa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$xa),$I);}}elseif(!is_string($Ec=get_file("csv_file",true)))$l=upload_error($Ec);elseif(!preg_match('~~u',$Ec))$l='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($wa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$jb=array_keys($n);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Ec,$Xd);$xa=count($Xd[0]);$Sb->begin();$kg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($Xd[0]as$w=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$kg]*)$kg~",$X.$kg,$Yd);if(!$w&&!array_diff($Yd[1],$jb)){$jb=$Yd[1];$xa--;}else{$O=array();foreach($Yd[1]as$q=>$gb)$O[idf_escape($jb[$q])]=($gb==""&&$n[$jb[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$gb))));$L[]=$O;}}$I=(!$L||$Sb->insertUpdate($a,$L,$sf));if($I)$Sb->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$xa),$I);$Sb->rollback();}}}$Hg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Hg",$l);$O=null;if(isset($Vf["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Lc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($n?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$u);$b->selectOrderPrint($Me,$f,$u);$b->selectLimitPrint($y);$b->selectLengthPrint($Vg);$b->selectActionPrint($u);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Oc=$g->result(count_rows($a,$Z,$vd,$Vc));$E=floor(max(0,$Oc-1)/$y);}$hg=$M;if(!$hg){$hg[]="*";if($ye)$hg[]=$ye;}$ub=convert_fields($f,$n,$M);if($ub)$hg[]=substr($ub,2);$I=$Sb->select($a,$hg,$Z,$Vc,$Me,$y,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$E)$I->seek($y*$E);$gc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$v=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$y&&$Vc&&$vd&&$v=="sql")$Oc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Na=$b->backwardKeys($a,$Hg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Vc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$qe=array();$Sc=array();reset($M);$Ff=1;foreach($L[0]as$w=>$X){if($w!=$ye){$X=$_GET["columns"][key($M)];$m=$n[$M?($X?$X["col"]:current($M)):$w];$C=($m?$b->fieldName($m,$Ff):($X["fun"]?"*":$w));if($C!=""){$Ff++;$qe[$w]=$C;$e=idf_escape($w);$gd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$Kb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($gd.($Me[0]==$e||$Me[0]==$w||(!$Me&&$vd&&$Vc[0]==$e)?$Kb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($gd.$Kb)."' title='".'descending'."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Sc[$w]=$X["fun"];next($M);}}$Pd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$w=>$X)$Pd[$w]=max($Pd[$w],min(40,strlen(utf8_decode($X))));}}echo($Na?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($y%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Lc)as$pe=>$K){$uh=unique_array($L[$pe],$u);if(!$uh){$uh=array();foreach($L[$pe]as$w=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$uh[$w]=$X;}}$vh="";foreach($uh
as$w=>$X){if(($v=="sql"||$v=="pgsql")&&strlen($X)>64){$w="MD5(".(strpos($w,'(')?$w:idf_escape($w)).")";$X=md5($X);}$vh.="&".($X!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($X):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$Vc&&$M?"":"<td>".checkbox("check[]",substr($vh,1),in_array(substr($vh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($vd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$vh)."'>".'edit'."</a>"));foreach($K
as$w=>$X){if(isset($qe[$w])){$m=$n[$w];if($X!=""&&(!isset($gc[$w])||$gc[$w]!=""))$gc[$w]=(is_mail($X)?$qe[$w]:"");$z="";if(preg_match('~blob|bytea|raw|file~',$m["type"])&&$X!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($w).$vh;if(!$z&&$X!==null){foreach((array)$Lc[$w]as$o){if(count($Lc[$w])==1||end($o["source"])==$w){$z="";foreach($o["source"]as$q=>$sg)$z.=where_link($q,$o["target"][$q],$L[$pe][$sg]);$z=($o["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($o["db"]),ME):ME).'select='.urlencode($o["table"]).$z;if(count($o["source"])==1)break;}}}if($w=="COUNT(*)"){$z=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$uh))$z.=where_link($q++,$W["col"],$W["val"],$W["op"]);}foreach($uh
as$Ad=>$W)$z.=where_link($q++,$Ad,$W);}$X=select_value($X,$z,$m,$Vg);$r=h("val[$vh][".bracket_escape($w)."]");$Y=$_POST["val"][$vh][bracket_escape($w)];$cc=!is_array($K[$w])&&is_utf8($X)&&$L[$pe][$w]==$K[$w]&&!$Sc[$w];$Ug=preg_match('~text|lob~',$m["type"]);if(($_GET["modify"]&&$cc)||$Y!==null){$Yc=h($Y!==null?$Y:$K[$w]);echo"<td>".($Ug?"<textarea name='$r' cols='30' rows='".(substr_count($K[$w],"\n")+1)."'>$Yc</textarea>":"<input name='$r' value='$Yc' size='$Pd[$w]'>");}else{$Ud=strpos($X,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($Ud?2:($Ug?1:0)).($cc?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Na)echo"<td>";$b->backwardKeysPrint($Na,$L[$pe]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$rc=true;if($_GET["page"]!="last"){if(!+$y)$Oc=count($L);elseif($v!="sql"||!$vd){$Oc=($vd?false:found_rows($R,$Z));if($Oc<max(1e4,2*($E+1)*$y))$Oc=reset(slow_query(count_rows($a,$Z,$vd,$Vc)));else$rc=false;}}if(+$y&&($Oc===false||$Oc>$y||$E)){echo"<p class='pages'>";$ae=($Oc===false?$E+(count($L)>=$y?2:1):floor(($Oc-1)/$y));if($v!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($q=max(1,$E-4);$q<min($ae,$E+5);$q++)echo
pagination($q,$E);if($ae>0){echo($E+5<$ae?" ...":""),($rc&&$Oc!==false?pagination($ae,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ae'>".'last'."</a>");}echo(($Oc===false?count($L)+1:$Oc-$E*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.'Loading'.'...\');">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ae>$E?pagination($E+1,$E).($ae>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Oc!==false?"(".($rc?"":"~ ").lang(array('%d row','%d rows'),$Oc).") ":"");$Qb=($rc?"":"~ ").$Oc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Qb' : checked); selectCount('selected2', this.checked || !checked ? '$Qb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Mc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Mc['sql']);break;}}if($Mc){print_fieldset("export",'Export'." <span id='selected2'></span>");$We=$b->dumpOutput();echo($We?html_select("output",$We,$wa["output"])." ":""),html_select("format",$Mc,$wa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$Vc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$wa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($gc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$xg=isset($_GET["status"]);page_header($xg?'Status':'Variables');$Ih=($xg?show_status():show_variables());if(!$Ih)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Ih
as$w=>$X){echo"<tr>","<th><code class='jush-".$v.($xg?"status":"set")."'>".h($w)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Eg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){$r=js_escape($C);json_row("Comment-$r",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$w)json_row("$w-$r",nbsp($R[$w]));foreach($Eg+array("Auto_increment"=>0,"Rows"=>0)as$w=>$X){if($R[$w]!=""){$X=number_format($R[$w],0,'.',',');json_row("$w-$r",($w=="Rows"&&$X&&$R["Engine"]==($ug=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Eg[$w]))$Eg[$w]+=($R["Engine"]!="InnoDB"||$w!="Data_free"?$R[$w]:0);}elseif(array_key_exists($w,$R))json_row("$w-$r");}}}foreach($Eg
as$w=>$X)json_row("sum-$w",number_format($X,0,'.',','));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$X)json_row("tables-".js_escape($k),$X);json_row("");}exit;}else{$Ng=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Ng&&!$l&&!$_POST["search"]){$I=true;$B="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$B='Tables have been truncated.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$B='Tables have been moved.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$B='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$B='Tables have been dropped.';}elseif($v!="sql"){$I=($v=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$B='Tables have been optimized.';}elseif(!$_POST["tables"])$B='No tables.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$B.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$B,$I);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$l,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$Mg=tables_list();if(!$Mg)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Table','<td>'.'Engine','<td>'.'Collation','<td>'.'Data Length','<td>'.'Index Length','<td>'.'Data Free','<td>'.'Auto Increment','<td>'.'Rows',(support("comment")?'<td>'.'Comment':''),"</thead>\n";$S=0;foreach($Mg
as$C=>$U){$Lh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Lh?"views[]":"tables[]"),$C,in_array($C,$Ng,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.'Show structure'.'">'.h($C).'</a>':h($C));if($Lh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'Alter view'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$w=>$z){$r=" id='$w-".h($C)."'";echo($z?"<td align='right'>".(support("table")||$w=="Rows"||(support("indexes")&&$w!="Data_length")?"<a href='".h(ME."$z[0]=").urlencode($C)."'$r title='$z[1]'>?</a>":"<span$r>?</span>"):"<td id='$w-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Mg)),"<td>".nbsp($v=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$w)echo"<td align='right' id='sum-$w'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Fh="<input type='submit' value='".'Vacuum'."'".on_help("'VACUUM'")."> ";$Ie="<input type='submit' name='optimize' value='".'Optimize'."'".on_help($v=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($v=="sqlite"?$Fh:($v=="pgsql"?$Fh.$Ie:($v=="sql"?"<input type='submit' value='".'Analyze'."'".on_help("'ANALYZE TABLE'")."> ".$Ie."<input type='submit' name='check' value='".'Check'."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".'Repair'."'".on_help("'REPAIR TABLE'")."> ":""))).(support("table")?"<input type='submit' name='truncate' value='".'Truncate'."'".confirm().on_help($v=="sqlite"?"'DELETE'":"'TRUNCATE".($v=="pgsql"?"'":" TABLE'"))."> ":"")."<input type='submit' name='drop' value='".'Drop'."'".confirm().on_help("'DROP TABLE'").">\n";$j=(support("scheme")?$b->schemas():$b->databases());if(count($j)!=1&&$v!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$Zf=routines();if($Zf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($Zf
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$lg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($lg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($lg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Dh=types();if($Dh){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Dh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'At given time'."<td>".$K["Execute at"]:'Every'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$pc=$g->result("SELECT @@event_scheduler");if($pc&&$pc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($pc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Mg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();