<?php

declare(strict_types=1);

namespace GuzzleHttp\Psr7;

final class MimeType
{
    private const MIME_TYPES = [
        '1km' => 'application/vnd.1000minds.decision-model+xml',
        '3dml' => 'text/vnd.in3d.3dml',
        '3ds' => 'image/x-3ds',
        '3g2' => 'video/3gpp2',
        '3gp' => 'video/3gp',
        '3gpp' => 'video/3gpp',
        '3mf' => 'model/3mf',
        '7z' => 'application/x-7z-compressed',
        '7zip' => 'application/x-7z-compressed',
        '123' => 'application/vnd.lotus-1-2-3',
        'aab' => 'application/x-authorware-bin',
        'aac' => 'audio/aac',
        'aam' => 'application/x-authorware-map',
        'aas' => 'application/x-authorware-seg',
        'abw' => 'application/x-abiword',
        'ac' => 'application/vnd.nokia.n-gage.ac+xml',
        'ac3' => 'audio/ac3',
        'acc' => 'application/vnd.americandynamics.acc',
        'ace' => 'application/x-ace-compressed',
        'acu' => 'application/vnd.acucobol',
        'acutc' => 'application/vnd.acucorp',
        'adp' => 'audio/adpcm',
        'adts' => 'audio/aac',
        'aep' => 'application/vnd.audiograph',
        'afm' => 'application/x-font-type1',
        'afp' => 'application/vnd.ibm.modcap',
        'age' => 'application/vnd.age',
        'ahead' => 'application/vnd.ahead.space',
        'ai' => 'application/pdf',
        'aif' => 'audio/x-aiff',
        'aifc' => 'audio/x-aiff',
        'aiff' => 'audio/x-aiff',
        'air' => 'application/vnd.adobe.air-application-installer-package+zip',
        'ait' => 'application/vnd.dvb.ait',
        'ami' => 'application/vnd.amiga.ami',
        'aml' => 'application/automationml-aml+xml',
        'amlx' => 'application/automationml-amlx+zip',
        'amr' => 'audio/amr',
        'apk' => 'application/vnd.android.package-archive',
        'apng' => 'image/apng',
        'appcache' => 'text/cache-manifest',
        'appinstaller' => 'application/appinstaller',
        'application' => 'application/x-ms-application',
        'appx' => 'application/appx',
        'appxbundle' => 'application/appxbundle',
        'apr' => 'application/vnd.lotus-approach',
        'arc' => 'application/x-freearc',
        'arj' => 'application/x-arj',
        'asc' => 'application/pgp-signature',
        'asf' => 'video/x-ms-asf',
        'asm' => 'text/x-asm',
        'aso' => 'application/vnd.accpac.simply.aso',
        'asx' => 'video/x-ms-asf',
        'atc' => 'application/vnd.acucorp',
        'atom' => 'application/atom+xml',
        'atomcat' => 'application/atomcat+xml',
        'atomdeleted' => 'application/atomdeleted+xml',
        'atomsvc' => 'application/atomsvc+xml',
        'atx' => 'application/vnd.antix.game-component',
        'au' => 'audio/x-au',
        'avci' => 'image/avci',
        'avcs' => 'image/avcs',
        'avi' => 'video/x-msvideo',
        'avif' => 'image/avif',
        'aw' => 'application/applixware',
        'azf' => 'application/vnd.airzip.filesecure.azf',
        'azs' => 'application/vnd.airzip.filesecure.azs',
        'azv' => 'image/vnd.airzip.accelerator.azv',
        'azw' => 'application/vnd.amazon.ebook',
        'b16' => 'image/vnd.pco.b16',
        'bat' => 'application/x-msdownload',
        'bcpio' => 'application/x-bcpio',
        'bdf' => 'application/x-font-bdf',
        'bdm' => 'application/vnd.syncml.dm+wbxml',
        'bdoc' => 'application/x-bdoc',
        'bed' => 'application/vnd.realvnc.bed',
        'bh2' => 'application/vnd.fujitsu.oasysprs',
        'bin' => 'application/octet-stream',
        'blb' => 'application/x-blorb',
        'blorb' => 'application/x-blorb',
        'bmi' => 'application/vnd.bmi',
        'bmml' => 'application/vnd.balsamiq.bmml+xml',
        'bmp' => 'image/bmp',
        'book' => 'application/vnd.framemaker',
        'box' => 'application/vnd.previewsystems.box',
        'boz' => 'application/x-bzip2',
        'bpk' => 'application/octet-stream',
        'bpmn' => 'application/octet-stream',
        'bsp' => 'model/vnd.valve.source.compiled-map',
        'btf' => 'image/prs.btif',
        'btif' => 'image/prs.btif',
        'buffer' => 'application/octet-stream',
        'bz' => 'application/x-bzip',
        'bz2' => 'application/x-bzip2',
        'c' => 'text/x-c',
        'c4d' => 'application/vnd.clonk.c4group',
        'c4f' => 'application/vnd.clonk.c4group',
        'c4g' => 'application/vnd.clonk.c4group',
        'c4p' => 'application/vnd.clonk.c4group',
        'c4u' => 'application/vnd.clonk.c4group',
        'c11amc' => 'application/vnd.cluetrust.cartomobile-config',
        'c11amz' => 'application/vnd.cluetrust.cartomobile-config-pkg',
        'cab' => 'application/vnd.ms-cab-compressed',
        'caf' => 'audio/x-caf',
        'cap' => 'application/vnd.tcpdump.pcap',
        'car' => 'application/vnd.curl.car',
        'cat' => 'application/vnd.ms-pki.seccat',
        'cb7' => 'application/x-cbr',
        'cba' => 'application/x-cbr',
        'cbr' => 'application/x-cbr',
        'cbt' => 'application/x-cbr',
        'cbz' => 'application/x-cbr',
        'cc' => 'text/x-c',
        'cco' => 'application/x-cocoa',
        'cct' => 'application/x-director',
        'ccxml' => 'application/ccxml+xml',
        'cdbcmsg' => 'application/vnd.contact.cmsg',
        'cdf' => 'application/x-netcdf',
        'cdfx' => 'application/cdfx+xml',
        'cdkey' => 'application/vnd.mediastation.cdkey',
        'cdmia' => 'application/cdmi-capability',
        'cdmic' => 'application/cdmi-container',
        'cdmid' => 'application/cdmi-domain',
        'cdmio' => 'application/cdmi-object',
        'cdmiq' => 'application/cdmi-queue',
        'cdr' => 'application/cdr',
        'cdx' => 'chemical/x-cdx',
        'cdxml' => 'application/vnd.chemdraw+xml',
        'cdy' => 'application/vnd.cinderella',
        'cer' => 'application/pkix-cert',
        'cfs' => 'application/x-cfs-compressed',
        'cgm' => 'image/cgm',
        'chat' => 'application/x-chat',
        'chm' => 'application/vnd.ms-htmlhelp',
        'chrt' => 'application/vnd.kde.kchart',
        'cif' => 'chemical/x-cif',
        'cii' => 'application/vnd.anser-web-certificate-issue-initiation',
        'cil' => 'application/vnd.ms-artgalry',
        'cjs' => 'application/node',
        'cla' => 'application/vnd.claymore',
        'class' => 'application/octet-stream',
        'cld' => 'model/vnd.cld',
        'clkk' => 'application/vnd.crick.clicker.keyboard',
        'clkp' => 'application/vnd.crick.clicker.palette',
        'clkt' => 'application/vnd.crick.clicker.template',
        'clkw' => 'application/vnd.crick.clicker.wordbank',
        'clkx' => 'application/vnd.crick.clicker',
        'clp' => 'application/x-msclip',
        'cmc' => 'application/vnd.cosmocaller',
        'cmdf' => 'chemical/x-cmdf',
        'cml' => 'chemical/x-cml',
        'cmp' => 'application/vnd.yellowriver-custom-menu',
        'cmx' => 'image/x-cmx',
        'cod' => 'application/vnd.rim.cod',
        'coffee' => 'text/coffeescript',
        'com' => 'application/x-msdownload',
        'conf' => 'text/plain',
        'cpio' => 'application/x-cpio',
        'cpl' => 'application/cpl+xml',
        'cpp' => 'text/x-c',
        'cpt' => 'application/mac-compactpro',
        'crd' => 'application/x-mscardfile',
        'crl' => 'application/pkix-crl',
        'crt' => 'application/x-x509-ca-cert',
        'crx' => 'application/x-chrome-extension',
        'cryptonote' => 'application/vnd.rig.cryptonote',
        'csh' => 'application/x-csh',
        'csl' => 'application/vnd.citationstyles.style+xml',
        'csml' => 'chemical/x-csml',
        'csp' => 'application/vnd.commonspace',
        'csr' => 'application/octet-stream',
        'css' => 'text/css',
        'cst' => 'application/x-director',
        'csv' => 'text/csv',
        'cu' => 'application/cu-seeme',
        'curl' => 'text/vnd.curl',
        'cwl' => 'application/cwl',
        'cww' => 'application/prs.cww',
        'cxt' => 'application/x-director',
        'cxx' => 'text/x-c',
        'dae' => 'model/vnd.collada+xml',
        'daf' => 'application/vnd.mobius.daf',
        'dart' => 'application/vnd.‰PNG

   IHDR   À  4  ‚Í›}   sRGB ®Îé  SªIDATxÚì]w\×Ú>Ówfw¥WTDE±Ek¢I¼K¼&sõ3±ÅDÔh° ‰æF-vE¢‰=J¼ö®QP¤WAz[–²°lo3ßÇl" ¢ç~l›}çsÞú¼Hrr2hà €.m½  {³R”& `ŠWg Ào¿ý†¢¨§§çÒ¥KOž<imm-•J³³³7lØpüøñ'„$''»ºº6ÃFƒÁÐ‰Db±øù„ MÓiii»wïnòG5‹ŒPÐLÀ †-]ºÔÏÏoÊ”).>räˆL&3b±xþüù­ó§¡  A†¡iþƒaÃ0‚4öz!Ècq§Ñhà³ðFCÓ´V«mÌ8Ž à••• ®šD"±µµm¡(Êü‰øøøg>Š>–Ë²<ëX–}| ËƒçÕlËéA0£V«ùÿ¦8Žïß¿Ÿ¢(†aªªª†a<<	$++ËÍÍ­.¿Éd2Íp Ek
Ã0³ÙÜô›ŠžZÍã>Û½fyL’$ÔƒgºdôJæ¯3âš
Áà5ðñ1³k×®˜˜˜Q£F©TªÞ½{»¸¸4òt´ß”2«„WÈöû:<ÿUC¸` YTÒl‹ÿ_|QRR2nÜ8OOÏ+W®”••íÝ»÷£>úùçŸ_ö!±±±Ý÷h†Ÿ&‹5!êæY!1»råÊØ±c—.]š‘‘qùòåI“&ÅÆÆ&&&þ{?®T*«««›GFVVVÍ##†ad2™V«½téÒÊ•+×®]K’ä¿ÿýï?Œa àÁƒÍ)#¤¹ÌcD.—Kh¡B¯½,Í;WœÓ×ÎyB‰DrðàÁ7n6ÌÅÅeÐ AûöíKJJruu]´hQeeeÝj‹­Ylc  ¢V«›çŒ y¼bÅ
Š¢Þzë­^½z=ë!ÒÓÓ;vìØlgÔ¬æñåË—KKK‹‹‹ÝÝÝ½½½ííí7oÞ<xð`©TúÅ_4xˆœœ//¯–÷ÓP @PPÐÇÌ0ÌÌ™3çÍ›Ç²,Ã0?I’Ó#‚ žÇ,Á›ëiVaÏŸ??99™¦éÅ‹3ƒãø3
´Yïµç·Ag5†k95‚<Þ Y–Å0,55•  ÀÒ¥KáÂÞxÓÑétÍ#£f±›ÇÐ$FQôy¤Ž t:A‚ÀÃ=³N#Èã‘$i2™X–Åq^‚ÆC°ï-z%ƒ nqJ›ø‹ŠcAP
½’Á åååk×®íÞ½»N§óööž3gÎ³m¿?uÑ„¨ö¿ÎˆòymHS‡÷µ¼¤Ùî~†aŽ=zþüy†a®_¿~òäÉÐÐÐÆ/’ÅÅÅ €f;#„-o…œ1cÆÁƒ¡€"##çÌ™³sçÎ´´´g”Qs­Íb7·Œ†				ŽŽ

ÊÍÍ]·n]#õ(333**ª9Ïè¯X­Dh¥ÔªXŽc9žj«œÙl&Âd2YYYéõzË‹a˜Édz½  
›vŠ-‡é•e³)IQ~®8'¶²EQ3ÇíÏI½Pœky¼Â±±±üñGyy¹F£¹~ýº^¯‹ÅƒÇq¹\~íÚµ„„½^¢èÕ«WŸuÛDbccïã¿4›³Öœö#ÜD¾ùæ‚ pÇq*Jö·&žŠZn¢ºGÇI’´Ä%_ê%³ìÜ5]6£ÑØÈ ñ‹:!Žãpæ0èó™@µ¬ÆÚ·=4u:‚ ùùù,ËB±Y"Óz½>''G£ÑTVVÆË—/7ËÙ@6ëßtè¥©p£.YsYýÍvÛÃ‹ÂqÜÞ½{áÃš×ËÁÁã¸øøø‘#G6ûIpWXXØÌqµf»dÍŸ{Õ·˜Û°aÃ²eËòòò‚ƒƒgÍš%•J7mÚTXX¸qãÆ&d£žI‡rrrZ¨¡ …·\2Š¢‚ƒƒ?ýôÓ´´´´´´ž={æäätéÒÅ`0¼óÎ;Ç>|Ô¨QíÛ·OMM;wnsyõg^(þ¶ou·ý_{YEE…H$¢(
Ã0©TJ„ÙlfY–¦i©TêããóBÏC­V…Â©Cÿð÷k+™õî ÷tÐg&ØÚƒ£¬þZ‡zöì‰aI’4M@Å0Lxxx~~þó„ë“GÚ)  ðn¯  úêÆ^2’$›+OR'ˆK_‡¯  Æ•†9Ià“Ô/P‡pMüá4M[ü@Ps!&Š‡¢¨!'A 	_{/ƒth:ZlES
…EÁ÷ÀW_à]­i•JŸªS0¦aåÍÍk„  ÌÌÌf)i6	q%Ä0Ô!Š¢jÉãI­BäybÊõè^K‡  0.‰,—~7ÜU,onFÏ¿æŽ[×tæ1«åÛ?)³f\&8Ž³¸©-Òb„W^/„ër-°,ÛŒîvuuµ­­-Ë²Çy{{;99ÕÖ!K6Çq£Ñˆ |UÇd2á8ëÙžÿÌ gl0L&ÇqPeA3)4›‚[°›Óãçvl ‚V?¢(JÓ´Z­®×AD$)•Jø¿Édj|2°&°o¾ù °(þNˆ_ïYÑ×;Š%Yªª/bn>TÊûØ9ç¨å=EÃw_»vm×®]o¼ñÆ¶mÛ6nÜøñÇ:tèÇ4žžž&LHOOGdõêÕ¦mÛ¶_|ñEvvvß¾}ŸYBf–MWVùÚØÙQ4`Ù„Ê2gZˆ gYWF¨0è-b°±±ÑjµF£Q§ÓYYY	‚’’’ììl__ß¬¬,X)qÿþ}ooo±XüÙgŸ}ûí·vvvM¹d-å¶rÅû‡O¨…Øe]²æÊâ¼²ÁÔ²w2C’$I’ÐPl–âéFâáÃ‡µ/Ù•+W$I\\†aÿú×¿Ú¶m»dÉ’ï¾û®¹êÜFôz=¬Ï­[‡rssÛ¶mûò.SŒ@‹SjÜbØ·¿Ìâ˜¶¬»Ã°¦mÎÍ‚šâx,¡¥K—rWQQØ³gÏ›7oÂ ƒL&;v,Š¢ÉÉÉÿýï÷îÝ›ŸŸ_VV6kÖ,EÆŒÓ,6µ¥Œí±RëõzØþagg§×ëANNŽƒƒŠ¢×¯_'IrèÐ¡Ð§®¨¨`ÆÚÚ  P(,i¥çAAA‡‡GË¾ËZH²4cûÈ«¾¹^½z• ¸­FGG Ìf3Ã0&L`F©TÂ A/bÓÍÏÏ·D
+uPP——W÷îÝúé§Ž;†‡‡¿ñÆ~~~$I­Y³¦ªª*<<ÜÝÝ}äÈ‘ÍžÏ¯/¬û.{Zþ»¦ßóRuèi:þö;¼ÅyÏZ–Ëù-ä„`å MÓ°†xÎœ9ÃÀRkˆzYYYµOèÁƒ©©©“&Mš;w.†a?ÿü³V«]°`ÁêÕ« Û¶m{¡÷—¿¿ÿ_Q^‡ZÛnßâì¡Çç+õl#5ßÐì
^ÓÆ–.]
 X¼x±““Srr²Á`8}úô®]»ÂÂÂP5íÛ·'bÅŠÇŽsuuõöö

6lX3žÙls¥)Š‚_OQTxxøèÑ£ óçÏ_¾|9LwšÍfX8W]]MQTÓúdŸ†êêjKª¾åùÿ X÷	ÕÙa÷Ož%¦ßRN¨å¬@ul‚Ôl<ç8Ã°—pÆ5õøñ—•——ã8þðáÃ¼¼<Š¢ÊÊÊ  r¹¼¸¸877÷E+¾Ùl¶|Å_ëÑh„ÝT&“	–ÆÔlBjÆë“Ðétw¯¥þÁx¤  hƒ+·çåxN<>›ÅE  ú§ÇµŒ{þÊòÚwÝSEÓ4EQ$I1oÞ¼ììlä±7Z¯Ïjûe'Nìß¿‡rss{÷î½~ýz£Ñèææ6tèP++«aÃ†!ò"zêz³ïcÃËÚC÷ÕÃq—1«„²D›vY6¬…Üóš5¢ÎO "§Æ§×:á@äž¯}òEù–szòä +MQÔò–jöñJ½lÙ2ooïsçÎ1âðáÃíÛ·ïÚµ+MÓ&“iæÌ™ €.¤¤¤0ãççWZZêïïß±cÇf»×ÄRŸô¸“¢(F#
á_–e×­[7gÎXìÁ0Ìµk×†kx ×ò"r{ÌÎÍÖÚ\'„·'úñåc#H‹¹Å”ý‚‘ªmë©öPK»dµ×¡§ÅË_¬ÞÔØ'ŸPpp°P(<sæÌÙ³gKKK.\¸hÑ"†avïÞÍ0¬cž?þ;wNž<y÷îÝf_kÛÔ°˜f^aäzþüù+W®‰D*•
þ…1(ÂæÍ1KÚµåù-­\W(-kaüGšYë“PË±„þf~À{†f4¥”¹&š±O€ã8Xzzÿþ}Xð7dÈÇÞð.›>}:†a{÷î‰‰éÛ·¯^¯×ëõÛ¶m‹‰‰éÖ­›‹‹‹OAAÁüãøºuëšñ>‡üZ¾¾¾õñ	Á²,LüZºbôz=´‡Ìf3lç†Ÿ_NÇ•––:88ÜºuÇq“É4hÐ Çä/-mª›Î–Â0ÙÜ²¨–Ñ HÄ6óco1¤ àRIÞSXá„DhMb¸˜(M¦KÒ<	-”0b3ËJ€Dhž²t|ùå—‰„¦i½^_RR"‘H¾ýöÛ3gÎ\»v†ì$	ü+‘H‚H$………ÕÕÕ‰äë¯¿þâ‹/àKUUU‰$::úüùóð–e%‰X,¶¶¶†_T´qöìÙúa–c‹ÔÊNÖv‚Ú
˜µÂ™_)É“`¸Ê¨·!!I‘R­ú¶¬@o2Ü(-êëÑöZaN™V™£Vº1µƒË‘‘‘`Ë–-çÎ5jÔýû÷;wî|ëÖ­”””ÄÄÄnÝºeeeµk×nîÜ¹7nÜ¸páB||<Œ¿$YUUõöÛo§¤¤œ<yÒ××7''ÇÛÛ{ÿþý………={ö<zôh÷îÝgÏžmooÿÿ÷3fÌhÞÎún13ÇR8i2›êÿ$…£GÀ?µïTWW·iÓ¦ªªê…ÛBµÌ!ÁÌ¬¹AÉ`6á( ø§–*kkk…Bñ¢m9Ü`0´´zó–e	Að‚xª€ ¯;/ˆÆnó Å4º¾dÀä}Î4¨?ùä“cÇŽ9s¦ªª*##C$Æ:Èd²¹sç~õÕW½{÷–Éd#GŽližÓs^‚HMMíÜ¹³Édª[ƒÃ¡C‡V¯^=jÔ( ÀØ±cÇŒ3jÔ¨>úˆ ½^ïççWPPàïïß¥K—WLƒ0ƒÖYMé€HCÐâi~z6½JËÊ‹ÚÅx<U@(Šîß¿ŸaÈujál€³SàCÈÐ Û`bÒ9Á<|µæÛhš†|° ¾ PUUÕ¢ÊËPÍÈÈx²î¯µ %%%Á³Ÿ5kV·nÝÌf3$?vìØ£G†>`À€˜˜˜sçÎQõÑG­Y³ÆÝÝ}êÔ©·oß`¦¢¢býúõ[¶lÑ‰ÔÔÔ%K–üøã$Iúúúúùù½ÿþûÅÅÅÎÎÎ6l

j!bY6   11ÑÇÇ§fð„ßÅø5¨w1A^N[mkÐÓüþû›ÁÍÊËò­õ>ÿ±Â·´
ÚgI’OþØÚ·Ø™3gd2ÙW_}uäÈ‘víÚýúë¯°ÙU$uèÐaüøñ"‘ˆa˜¡C‡^»v °téR³Ùìèèøî»ïÆÅÅMš4éÖ­[ÅÅÅ^^^÷îÝ£(ªW¯^'NœX±bEËÑh”J¥mÛ¶­™ØúÛ.ÆqœP(,**rvv®¨¨°²²Â0Œ ¥RIÓtaaaJJÊ Aƒ„BaAA½½=Ë²O‹$I½^µO¯×+
kkk¥Rioo?mÚ´}ûöµ´nvPyy¹]-%â·ù†i84‚ÄS¤P(^t__ëÃ00Ï£ný³œ­ÏªG^ÇÑ4
‚ Ã°W&~Äq\Íªèºí Ã/^¼qãÆÍ›7s§ÓéÎŸ?¿|ùòŒŒŒÙ³g zöì­V«+++	‚5™L‚´k×ÎËË+22R¥RÍŸ?¿5J²³åççwèÐá©v € ˆÒÒR;;;©TÚ¦M¥Riccß¹sg’$£££}}}a¸vsAÃ)’Édîîî/¨ˆàEÃ0ÈÀR«á“·ƒžÅY|Ð¾AñAûv1õ	EÑU«VÁ`»%P €ÏAQ”@ °óáàßàà`©TJÓtHHŒóÃø<ì8eæöíÛ-­Ù ÖÚ"•JŸ4\j‡;ŠŠŠJJJ‚‚‚¦OŸž““3mÚ´K—.¹»»'%%¥¤¤”””TUUY[[0 S§Nr¹ÜßßßÊÊ*""bË–-‰¤²²R¥RM›6­}ûömÛ¶2dHZZZ·nÝNœ8qõêÕ!C†ÔJì¶°,ëááQTT©pŸaƒ1NWóúC…R©TõÉ(Š‚ô°¯Ô"]§î=Í1F£±þg“µú]¬ªªŠ/ âÕçPK›SÂÛA­\@
…¢°°Î(//'IòÑ£G$IÊd²¼¼<¥‡L&“J¥@¥Ri4šÖn…«Tª'W›Ú†¢\.÷ññ©ªª2666			ptcÛ¶mI’,((0›ÍJ¥R¯×geeÁÔXII‰\.—J¥­}Ï²¶¶~rLïÍókPc ­$O ×:
vtÃÕ§A-Ù]z €Iãê^’¾)¸ ¶%ý
Ø¾y|Â_Òy8¿ æ«¢µš5ú¤ÏÖÃš¢(âÆñÇ¦fkÜÂPYÒ_ tÆîmÀKHH
…GÅ0ìîÝ»îîî·oß.//0`@ß¾}ÏŸ??bÄˆ¸¸8“É4pà@¹\îææ¦V«­­­sssÓÓÓ‡Ò*¤û2•Yõ÷œà©¿h–€:‹T*,Í„U	p ‚ R1Ãàüÿktì^½zõ¼yóZÙBf6ÐÚ zeMÑ˜.å·ùÆùb‚’(úÀíŒhÈqôºíbõ€¸¿¼³á‚fQ	/Ž:ÁüèÌŠÏbIc¶`ÁÈ1]UUëçu:ÑhdfîÜ¹Ã(
E!Oµ-•J†Y³fÍþýû•J¥\.gfáÂ…±±±Ã$%%¡(ZPPÀ0LQQQK.µÑjµZ­¶¾ =  ÇqŠ¢ììì–/_þþûïÇÅÅÍš5kÑ¢E|ð££ã¢E‹ôzýo¼Á²¬““SUUUEEEQQ‘‡‡Š¢ÀÉÉ)$$Äd2ÉåòøøxŠ¢RRRœœœ:vì¸}ûvkkëÍ›7oØ°¡yù|›,Ë>9D¤)kI’:®N››eY’$[lêâ%­Aƒái	Š¢¯ŒtßR
×èíõšî3øõ¸ ‰ŽŽvqqáeñT²¶¶¶±±áÑ¨mžGÃvPPPÐ¯¿þªP(t:ì]`fÞ¼yàÏ*>Š¢†4ü–ä²^¯‡õ3fÌÀqœ¦iš¦AZ­– x´¼¼¼–,…BW}vZ­ö÷÷ÏÌÌÄ0,---##ÃÇÇÇÛÛûóÏ?ÿõ×_ÇWYYùæ›o’$¹lÙ²eË–½ûî»ùùù'Nüí·ßrrrJKKI’œ9s¦½½ýØ±cåryEE…­­­››¬qðòòj™îT­V[«(º)Þ<EQ:î5©EkÊûV^—]ŒoEàw1Þâ5¨yw+XL V«a=,„7›Íu¦sjoóqqq}ôÑÖ­[iš~÷Ýwcccúöíûí·ß–——ïÜ¹v)@&uØl4!EQr¹ÜÖÖ6""¢_¿~–€ýÅz/$IVTT  ,s†¹xñ¢E4:nàÀuÉ?ÞóäÚµk3fÌøí·ß>ùä“6mÚlÛ¶mÙ²eóçÏïß¿ÿÃ‡ßyçË—/wîÜ9++K«Õ^¹r…$IµZíîî>xðà¨¨¨^½zµiÓ¦´´4;;ûüùó¥¥¥&“©]»vK—.m	]™‚<I´Z38/y}½¯Ã-FÓ´Z­†i«šmð8ŽÃçë»Å^y ¢Óé,m85•¥ÎØHrr2¿UÕ'Ð:ž¢ÂòM ?Q¼Àq‰Šr   ¬.¢ñ.†eãä8ÎÚÚö)Â^3–e-»µ±Xýéš¿Póáô¿Òb9.EYé)´6°&	%ø2æV‰N#&)†)Í&€ “«®–ÐBA¬´ESnEÑu*›½½}pp°Éd²µµ3fŒ­­mLLLyy9üå€LÇ(ŠJ$A$‰­­íäÉ“…Bá;w–,Y"•J!9òåË—íííoÞ¼)‘H¬­­iš–H$PŽ/´Œùo‹t†²ª›ÄÑh4 _YöŽ³G'‰Ãª„E/—ä¿çÒöcO3Ç-Œ¹éomwUVP¡×õ°u  ¬òïWiø[£!Ë²Û·oïÕ«—ƒƒÃâÅ‹I’œ>}º““Ó°aÃ0KJJºuëVDD„ƒƒÃÐ¡Caq`~~~BB‚½½=ÇqJ¥ÒÑÑÑÏÏoûöíYYY™™™ï¾û.œÒ:räHEÝÜÜ:tèÐ»wo‚ 
EÏž=_†½áä>ÿÁu{+	  O©ø¤KÏîœÏPVõ±sö·±÷Û¸Û;V3ÛûWèu½ìœÛ‰¬Ç{t(ÑjÀF Ý±cÇ¤Ré;wfÏžMQ‚ ƒ ¸»»wêÔÉÖÖEÑI“&eeeõéÓÎÅS*•pXÜ½{÷‚‚‚æÌ™CÓôÔ©S,ÅÜƒvpp izôèÑb±ØÙÙ977÷å-Ò¡ÕgwÎíî= è±Ü´	m}óÔJŽcQ€x‰¬cå2O¡‚ (‚œ/Î9žŸqâÍ‘J¹3Å O,X(Š""—Ë³³³»wïNQTjjª——MÓ<ðõõµ²²JHHhß¾=I’F£ñÁƒàŸ [[Ûƒ~úé§>>>2™¬K—.÷îÝkß¾=t¤RééÓ§W­ZuàÀ)S¦¼ á–ÅÅÅuìbAVëux½žËq4NÒQ©S#ÿ£´X,®¬¬¬92ò	¨CQc4à}+Š z³Qo6"ÿß¶R©|9\P8ßÅ[¿Ù·Ò6÷—½^ÏkPÄ‡\ZƒxÚ»¤Ã÷cÖ@ÀßbÏâjðhX@¯í¦öÔš¹¿9³aÃ†ŒŒ!4d•€Ó1£iÚBÃùŠ	Èl6WWW?ù»j‹M(vèÐaÀ€AÌ™3G$?þðáÃ»wïÞ»wïÔ©SY–]½zõ+É'žÿö·‰p2™ÌËËëý÷ß9rdiiéŠ+V®\9eÊ”°°0ØÌÙ¿ÿ›7oþç?ÿñòò²½{5ÀqœB¡°²²ªy¯ÿM@4M‡……2¤¼¼¼G!!!«V­*--ŠŠrtt$IråÊ•§Núþûï—-[ÖòÙGŸõƒDc5WáÚª_À°\Ã°W²+A' ºÃOû¼Édz²ýUºÅx;¨IÞo=ƒ€8Žã9íkÂh4Ö®îx…W™&€ ~âÕfwV_Â:]çüÖá¬&&&Õœd‰!Y",©³8±ð#p¶.oD’$|EQËÛ`K½eÃ0›7o
…-ªäžã8©TZ‡XÓ’fæ«¯¾²±±™7oÞ>üðÃE‹Á&Â¯¾ú*&&fæÌ™çÎ«¨¨xóÍ7OŸ>Ý¿ÿë×¯Ãìô† eee{÷î#"000>>¾_¿~·nÝêÝ»wHHH=233}||RSS÷ïßßrüŽãH’ÌÏÏ¯ÙVGùË|0iÒ¤S§NÍ›7ïôéÓƒvss3fÌÉ“'‡®V«=<<L&Óÿþ÷¿¨Õê%K–Ü¿Ü¸q×¯_1b„Á`˜0a  {÷îJ¥òÄ‰LII=zôýû÷×¯__PPl0ÆŽÛÒn±üü|OOÏú4ú‚ˆD¢Ó§O3F¡Pp‡¢¨••Õï¿ÿ>bÄÇÏœ93jÔ¨ßÿ}äÈ‘F¯×‡ôôtXDÓôÙ³gÿõ¯8qbüøñ—.]êß¿?¼õär¹X,†õ-g%2E™Íæ&:«¯'ê¸ÅxðvÐsøb/Çj]A¢¿	Ö&ñr©ÏYå3Ñ»¿pœ_ƒøEºÝ%‹Û†¢h¹’$á{ ³=4öAkÏ&Öé¯þí)¡PøÅ_¬^½²ö_¾|¯e&//ŽÝ¥(jíÚµÇ‡óþV­Z•””Ä0ÌÑ£G…B¡¥±ÊŽæm‚Ãq¦”pVG~àÀ3gÎ4hÌ˜1QQQb±¸¼¼<>>^&“………3æôéÓ*•êÈ‘#“&M
ûý÷ß0“Ëåÿú×¿öìÙ3`À E‹ŠŠ&MšÔ*’hÃ$$$øøøX®hí´L&Û´iÓÄ‰qGQÔÖÖ– ˆN:uîÜyÓ¦MíÚµ›>}: `Â„	0‹TZZÊ0Ì¬Y³8Ž»}ûöœ9s¬­­çÏŸïàà Õj?øà??¿©S§~øá‡-_:†%&&vëÖ­Öµ¬í‹ét:[[[­V¹%L&“B¡ppp@dêÔ©T©T°å¤ººšaX
o%ƒÁÀq‚ °å¤¢¢âþýû­¢iØ`0ˆD¢ZýˆÏà¬²,+‰žlÈ«4Mk4šÖk?ƒ³Š¢h~ªV«mí¾o5´»ñ3#ê¿oð²²2^OCEE_'Í;«Ï)#~
mý¶5¿H7`^ó·o5o<¨žú Kƒ(¬+Åæ°?-aQ;tæÌ8¿ðaÅŽã¿üòË™3gp?yòä¢E‹nÝºÇ0MÓ0Ì«Z¯€rssŸŒ™Õ~<aÂ„ÒÒÒ²²²+VÄÄÄdff~÷Ýw!!!d»OŸ>F£Æw†®×ëgÏž=|øðÿûßgÏž]¾|¹…¸¨ÕÁl6ûúúæää4  £ÑuàÀaÃ†µiÓ¦k×®*•êwÞÁq\(úùùA³ ò8iµÚñãÇ{xxøûûGFFŽ5ªõf0{øð¡¯¯omÍªU¼ •J½½½ ùùùÎÎÎb±X"‘èõz“ÉÄ0ŒJ¥8ŽF¸¡(
iK!o@+Lët:±X\‹Bˆ/^h |ño=¿/öänÇå©‚ÜP¼P,`Y–/©wz­æÑñ‹ôKqV›æb“…O»I[þÇ6ì¬þñÇ°<–Ä3‹ç	‚€õÀ–ª{Š¢ ¹? àÐ¡CÁÁÁÃTWWÃ|4|'¬e """¢…Óz“$™œœüd5þ¤Ï&‰<˜ŸŸaooµiÓæóÏ?OJJÊÊÊ²²²Š‹‹ËÈÈÐëõeeeçÎ#FŒ¨ªªâ8.??_*•Êd²'N8;;WVVº»»·mÛ¶…ïF£±GÑÑÑ]ºt©é-Õ^ƒ=z)Ô¤Ri§NœqoÛ¶-MÓ2™ìáÃ‡ÌÍÍuuuuqq1™LóçÏ \¹reÃ†8Ž³,[]]Ý·oßüü|(–e=zdooßÂ7‚ bcc{öìYË—ü›/}N£ÑY©aaüÍ›7ÃÃÃ·lÙ¢R©‚0"‘hçÎ(ŠÎ˜1Ãd2ét:‘Hd4u:¤™L&¡P¸qãÆ   Økm4µZmKN1éõzè¬ÖòÅvVI’¬Å#`íG=&–@ x’¼¹Õ9«_RƒÁP+ 4±Z»tx;¨q¾Ÿ«ÿ>ÀËËËyA<r¹œ× <~jhj½‰š— ¡Pˆó>ÄÛA/S@pSC¤¦rÁ‡µÔ>+Ç_Y4\¼€ãx^^^qqqYYYff&d…cYV¯×çää”””Ð4Û¹I’,++S(B¡ní´1‚À9ßõÅƒÑëõ;vÌÏÏ·²²*//—Édy¢mÛ¶>4›Í	ÍÆÆEÑ¬¬,èÊ‚V-#Žãììì***,ÓêÐ ­Vëåå•’’TUUµmÛÆG ñ’¥ÀE,FXª Y‡(ŠjízÖ~¾V¸†„ ÿ  2ÀX5¬V€jbñï!kŠ¢–Z†V
·ªö¬#Üñä.¨AP
ÇY^µ<ÞÚ]Eë
óÛ<o5Æ)M8$ØÑ^ëHŸ ´•õ­A¯]ê¹ºˆþ©CíõÈµ‡þ³; €¢¢¢ÚA{îµ+fÒ‰Ö:ÔùŠÙ¥»öÿn×^¤_·âú§v=X¡ Xíöø¦“Æ¡zÅëî¬"úê¿œžn‘ù¿™ü"]SlÁÇÇjNàÃrnÔ! Æäö`žšUäŸhõÊx'82ôûê¯ŸÉØƒ'«;8@Ó´@ €L00¹
ÿBñq'
###E"Q^^ÞÂ…322ÂÂÂhš†5­R@3î€ÿ»"6ÿµ‚÷_ žd^ØµkWFFÇq#GŽÌÊÊ=zttt´@ Ðh4ÉÉÉŸ~úéöíÛ§OŸžœœ\]]ãääý²ÔÔTFãââ²zõêÖBVNÜþ/që‡§½ª	Q×.–Éd‰„$ÉÎ;Ëår‘HTTTÄqœ‹‹KûöíÇ¿wïÞiÓ¦…‡‡ ¤R),…‘Éd(ŠfddlÞ¼ÙÛÛ»^,e­=ê|I;÷a†"†aÐ«‚:7Yàÿƒ$I½^ €>-˜ÁxÐªU«BBBZ×=~ë¿äí¿ôˆ£ÄÚù #AóVÚÃµ©…LoÊívék"j§&D]Ë›ç[êÃcKš<ú!þè/Ž¿ÝbgýØƒ ÷BØ``°ÔÔ÷Ë×Ñ«ÇÈVÉ˜=½‡@¸` YTòúzóõ@%#öÅŸ\kyÉ<†Ð×”ñ¾Xàô,‚4uRÖoÝÀÚsKæšŽ­+ù¤l_¸p!Ã0ÉÉÉƒ ‚ d2™ÉdJLL„m«0ÿ£V«q—J¥"‘hÉ’%_~ù%Ã0=ÊÎÎ®¬¬¼xñbYYdÅÏÏÏg&==½ÅnB¡066öÉv€¿íbÃ\¹r¥  Àl6ÛÙÙUVVvèÐ¡¤¤ÄÍÍ-//O Œ;vçÎ*•J©TUTT†„„9räã?Þ¶m›µµõäÉ““““ýüüBCCííí/\¸`ooç§ÛÚÚöë×¯Åú"ÃDEEùûû[v*æGçÚ7Î7âââœœœ\]]§M›¶|ùò6mÚPÕ£G>}ú<xð­·ÞÊÎÎ–Ëå¾¾¾_}õ6þñÇ/_¾üáÃ‡,Ë®_¿ÞÏÏïÞ½{AÜ½{×ÑÑ‘¢(½^/
ãââZì-F’äƒz÷î]»Ò¾¦AÊd2™L&@ R©„B¡N§ƒÎªeTÄ/¿ü2qâD˜n5™Lz½žã8‘Hd6›CCCgÍš¥R©à4D‚ ,™E³ÙÙ25Øô^+iÊüè\ÛPl,ËÂv…§]½^ÿÊX›uÜbo{(ZÏ©Z5ù¼ôê‡w/ˆúÄ‡„ê^€âv+\àÊ7¾qÚÙG!!‰ƒñ²x¤R)þdÑ´Z-Î¯ÐõÝeÇoó¼Ôìñ Za‘ÆO«ßÉjá¬º&“©î@X­˜Èœ9sæÌ™RŠ¢t:ÝîÝ»¡K„¥–Á2È‰@Q”¦éøøx(èÙÒ4Íqœeðáž={Z2ùÃ0±±±H¢¾[L¯×cvþüùÏ>ûlãÆF£ÑÇÇgöìÙVVV;vì‰D‘‘‘111'N‰DGŽY¼xñ˜1c‚ƒƒ.\ýØ°°0[[Û7NŸ>}êÔ©ÑÑÑÿþ÷¿ß~ûí>Ø`0ôîÝûþýûµ|ÉÚrrrÒëõ§N²µµõôôŒŠŠÊËË{ï½÷  :uºsçŽM~~¾½½=  11Q.—;;;›L&˜˜Ã´Z- € ˆÙ³g=zýúõîîîóæÍËÎÎnÉ"I2**ªoß¾0/…BÈC…a,XÐëõpz(¼_X–MMMõõõ…„,ËZ*ÊI’Ôh48ŽC“É„ã8¬@GÄl6Ãª‡–	½^omm§`XÐÄÜ<†a¯É²&Ò¾VCÚx;¨¡pŸŒo@@•••¼ž…BÁ·…7àðÞ|}`Y—H$¼ žFƒóAü6ÏèY@„ÉdR«Õ*•Êd2±<eÐgíåM°Íƒ`øB$Áê?KzÜAbb¢EQ‚TUUÝ¿aX–5™Lï½÷^­â´VLäóÏ?ÿòË/£¢¢>úè£ÌÌÌ)S¦üç?ÿcAW¬X±cÇHÏ	§„ÂÀ¿ð†aÎœ9óàÁ‘Hc+ð¥" ÌÌÌ®]»Bo	röéÓÇÂ%!
ïÜ¹S«}¯å›-_¾\«ÕvìØñ×_µ··ß½{÷¹sçÃ÷ßÿý÷ß &OžLQT`` ƒƒCÛ¶m===ÓÒÒâãã‹‹‹!õbiii›6m\\\ìîî~äÈ‘´£Æ2µÒ¢ì–8¼W,)uh««ëÚµk×®]‹ HII‰ƒƒÃ_|ñðáC’$ß}÷Ý¤¤¤…’$	{ðýýýËÊÊŠŠŠpÿæ›o´Z­““,p¡(J¥Ri4šöíÛ·š4HBR+ª	Kß,ò²¶¶®“ù[¸.4  •JÅ0ŒF£±<„â7æ$‚ÏÀ‚KLÖh4Âè¢V«…Œ“-$DQTJJŠ››I’pFFZZŒÁÃñ Aƒj®A¯c¯dõ…RâÙò¼Ùl®nç«ç=X(ÃÊŠ INNvuuåÁ£	hlHšã8IiX³ÞlBù $Æ/Ñ,ÇIDÖé*Åô{W´F££€1±,€-¤DÀ0$eþÓ7ã @ “ €@11I±'Â	EÙf©Àb˜½³x1pš{zzº…'K¡PjµÚœœE­­­†Q(ðacBñð˜™™™v)‰DRTTtýúuE­¬¬,7<±X©D"Aeee­º¬‰
Ärœ„>R)>ûã¬ƒ€Ùÿæ’Tv´0¢\:îÖïFÖ¼)5:èÁ{‰]ŽFy ;•Á‰,uõ°ë§îU”ìÏNyïÆi=Ë^“äª«,{µ¤à|q.…bZ˜¤¨8–Ÿ‘­R0ÜÀ²û³S“ªÊ­²‘'mcc#•JÇ7þ|£Ñ(‘HT*ÕÞ½{wïÞ½iÓ&±X,•J·mÛöÓO??~Çq“É”••åéé¹cÇŠ¢JJJ¬­­srrÖ­[÷Ë/¿@šÃððð={ö„‡‡K$’ÊÊÊýû÷ïÜ¹³²²’ã¸ÐÐPFÃ0Œ­­í;ï¼?nÜ¸C‡ýþûïöööÜ»w/†a‡îÔ©SVVÖºuëúöí+—ËaÉxaaá±cÇ¶lÙ!‘HŠ‹‹7nÜøË/¿À‡©©©ë×¯‡!V§@ØìÙ³Åbñ“/X‘T†B–“2Ç·GG‰c…Z!( @mÐwstëeï¼%-6¹Z¾Ü¯Ï/™I²S9¹Ï½=Ì¥-…á¼:q€S›Í£Ûw	M‹ó`¬ç¦MðêdF‘“yé÷ÊŠ&ÓÌn½ˆÔeEÕFƒ3-´"HÃÍ­U8Ž‚9sæ¼ýöÛ,Ëž={vèÐ¡Ÿ}öÙÚµkû÷ïŸŸŸñâÅï¿ÿÞÖÖ¶°°P$8p`úôéS¦L‘J¥7nÜ(,,¼páÂºuëÚµk{·–,YròäÉ”””~ýú%$$èõú‹/véÒ%99ù7Þ iZ¥RMŸ>]«ÕnØ°¡   ÿþóçÏwrr2Ç>|8I’Ÿ~ú©N§sppxÿý÷×¯_ïèè˜€aØ¼yóvìØ‘˜˜˜––¶bÅ
°°°€€€[·nUTTtéÒ¥}ûöf³¹uE¿•JåSW ¥Ñ`O	6õ†äÿþø_¦Z)Z±g/ ãJ‹~H¼gKÑ.´0J^2Î£}‰£\¯û¬_€]fuehzœ'-J­*+ÎóŠ1“”Ê ƒîüôöþRrgÂýrƒÎÈ±Z³ÉKhu¥$/IQ.lhBD,÷îÝ{îÜ¹?þøc§NŽ?>sæÌÏ?ÿüûï¿—J¥S¦LiÓ¦Íœ9söíÛG„e´Š¢aaaF£Q¥RMž<ÙÅÅeÁ‚‹-=ztïÞ½aÁ†aööö×®]+,,„J8ŽÃÈ#Žã666?üðÃîÝ»ÝÜÜ§§çÔ©SKKK)Š5jT÷îÝÓÒÒÂÃÃ»térýúõÄÄÄ6mÚÀGp´†Ñh|ÿý÷;vìøÕW_…††šL¦¢¢¢øøø®]»ž={öæÍ›µø?_/ÌÌ±öB«$¹ìlAÖ¬]15˜Í4†3$Å±¬Â 3q¬˜ (œÐJ£Á†àZ©×ÚR´Îlb9–å8Åô¬C1Aå*«~+Ì,Òª9ºtóÒšLI™Ì¦j£Ôä~zº#.‰à,  MÓ‚èt:‰DÂ²¬ÑhT«ÕAˆÅb³Ù¬ÓéÌf3EQJ¥R(R¥V«I’T*•EA“¥²²Îfª®®†M&“ÉÆÆÆl6ØÅ
CZPÅb1†az½È¬­­QU*•:ÎÖÖ–eY…Baoo¿ÆÑh4ÖÖÖA:t(11Ñ`0L˜0¡_¿~5Æh4*•JÐÚŠ‹‹ŸÁÇ„mŽ– GAìkT`d1ÿQ…Qû–\h×xz†H¢¹™¶g 3Ç™¹×N{ÀŸLp»|5€ó#Uy<Ï‚ŠÃ-Ÿ—&Àd2ñ¹Ï·…™Íæ×ªZžG3Âl6ã‰ÄÎÎŽ—&@§ÓáË‡—&€eYÞâñ\àˆÇS Žã  ä†„aU/¸WV!PÔ’ÀiÌ…~ªá8y)BCC/^¼øÑG=zôè‡~ˆˆˆ€õ‘‘‘°oŠ¬¬¬D$22Òl6Ãfƒ¸¸¸ÊÊJØ •J e‘Z¸cKácbb`q|ýj„<zô¨Î\¤\P*•«V­JOOŸ;wî!C~üñÇyóæmÙ²E£Ñ„„„ÌŸ?¿K—.=6lØ!C<hkk{äÈ‘þýû'''ïØ±#44T.—›L&™LöÖ[oíÞ½ûÄ‰¶¶¶­nŽÄëxõ³²²ÊËË{õê™UŸ|[}%­«uîÜ¹$INœ8ñÿûŸB¡¨®®þùçŸÇŽ[ZZºk×.“É4jÔ(FãééyõêÕ‹/ZYYÉåò®]»úûûoß¾=..ÎÊÊêý÷ß—H$b±xÉ’%¶¶¶¯R&è•I’
…"**ÊÁÁºÔ³=uRØÂ29³Ù0Óh4 ’*Á'aŸOÍ¦¢Ã‡geeq7uêTËò¨ÓéxZ‡–Ø¬E’$$ì©ÿb×§@Ï³ Â:,È+ÍkÌ«ŠÕ‰¥ ¡ÃkâÁã©ÀëYEø,úa2™ðzìEk±1ðàQAàõÛÂ|Ð™GýÂÛ@<x#šGËT 8‰ÎÀ†Í(¯€ÑÇoÊ(Šêõúªª*H¢ÔtÂ0L(N™2åÆ"‘(;;{Â„	äkÛ¶miii¨ **êðáÃ
…âòåËgÏž…©û»wï:tê¥
“sùùùÛ¶m“ÉdÃdggŸ<yR¯×WTTlß¾½¢¢‚a­V»k×®‡2SZZzñâÅððp 0óàÁƒ½{÷êt:†arss·oß^YY	ß¼sçNøA™LvìØ±’’–e·lÙ’‘‘Á0ÌÆþùçK—.YŽÆ£Ìf³P(tppHJJ*..npÃS#Ñ†QµpáÂòòòÄÇÇ;;;;::&''oÚ´éðáÃR©ªËþóŸÙ³gïØ±ãüùóEEEÙÙÙ,ËöèÑãÄ‰»ví²··OHH8sæLçÎxàÀØ(^VV–˜˜xúôémÛ¶­Y³æÎ;Ë—/?uê”µµõýû÷¿ûî»5kÖ¼õÖ[ƒaÒ¤IiiiGŽÙ¹s' àöíÛ—/_2dÈÖ­[<xðÝwß-_¾|Á‚VVVz½~ÇŽC‡•ËåS¦L¹}ûöµk×¶lÙRTT¤ÓéN:µ`Á‚«W¯Þ¿?$$„ÏéÖ†a233«««»uëö´Èú’©p©Çq|Ò¤IS§NýüóÏ•JåÄ‰]]]¿ùæ›ÈÈÈ™3g"Ë3  ,ËÚØØÌœ9EQ™Löé§ŸÂáååå
…¢¤¤äØ±cÓ¦M“Ëå‹-Ú»w¯X,†£§¦Nx÷îÝ^½z-^¼xèÐ¡/^4hÐèÑ£5<{ø €ªª*FSRRòË/¿|öÙg½zõºuëÖÔ©S====Ëqœ½½=EQyyy|ð»»û‚6mÚd6›mllÔj5‚ <ÅñSWÁq¼°°0!!ÁÓÓÓßß¿Ö ˆÆ®@P‡ 1 ¤l…ü«A$	3pô,>‚/!©áVj2™à>
“¯ƒA¯×‚ œÕ
Ù_aÖÖh4êt:’$)Š‚™Z@`0P…ónà/„GÓëõƒ~aÃà)Át
œÇC’$ÌÊQe00ƒ3Aøâ¤zl_“Éd6›ÿ™d*×MœºÂƒâÑ<h ™
	^L<ê„Ñh¬/™Š È«MÉã9Ñ@2ÕâÌóàÁÛ@<xâÑºA†a222¢££iš†ÜÞ5_:wîÜÍ›7††6@áxíY0VYYc€  H=™——÷àÁKl{ÍÍÍ…s¤ùËóò¹Õ‹ŠŠP­yÅŸúþ¯¾úªNžhÀ8p`Ÿ>}´jÕ*'''™L¶}ûvA:uê4yòäÔÔÔàààœœœÕ«W‹D¢:ôéÓ';;ÛÊÊªºººM›6W¯^µ¶¶¶³³»sçÎ•+W‚X»víøñãÍf³@ Ø¼ys^^Þ„	._¾¼nÝº~ýú­_¿^¡P¸»»gdduèÐ!**Êh4íØ±Ã`0øûûWUUmÛ¶-::Ú××799ÙÃÃ£¤¤$..®S§N<ÕÚóvÔ899eeeÉd2WW×zÊš•JåSˆeYN7sæLN·uëVµZýöÛoøûû9r„¦éÎ;ûûûWVVÎ›7ïË/¿¼pá‚«««D"	:tèÞ½{¯^½ÊqÜàÁƒ ‘‘‘R©T©TÞ»w¯W¯^‚dgg_½zU.——””¬]»644Ô××wÂ„	+V¬˜<yòÍ›7þùçªªª1cÆÄÆÆöèÑãÂ…‘‘‘iiióæÍ8p X,¾zõê‘#G=zÔ±cÇ6mÚ´ð)õ­H‡  ööör¹¼ªªÊÎÎîi,šJ¥²>/L,‡‡‡_¿~ã¸7ß|ÓÉÉéäÉ“"‘ÈÝÝ½´´T*•Ž1búôéGõðððõõ-))ùõ×_‡Þ¯_¿mÛ¶­Zµ
f úöí›˜˜HQTnn®»»;œPÏ0Ì„	ÆŽ{U Óv‡4ÍäÉ“+++gÌ˜ ÈÊÊºsç `Â„	4M/\¸EÑQ£FM›6méÒ¥B¡°ÿþ0KÊ_þçµiP”ã¸´´4¡PØ¹sg­V[ÿmÙ@.ÌRS™¶aÁ`€Q"  Ì·Ñ4³•†Ñ4y÷îÝ¹sç"‡rAf˜…³Ë8ŽƒV<BÍ‡ÐŠ‚&ü2ÆÃC™L&H.Ž¢èž={lllÆÏkO3.?pTMch¬ùd*çŸLåÁÇxü£ÀµZ-_ÙÉ£iÐjµ<S=¦ƒgªçñÜ[ß¿Ìãy|~ÜÚÚšoQàÑ4h4~ÜçZxˆÇsW /L`"EQÈW3V­]O¡[€É’$U*UÍ}˜>ƒi,  Ë²,Ëò	¬–XTVVFDc/ W˜:uê±cÇd2ÙÄ‰SSS…BááÃ‡7oÞLÄÕ«W;tèpëÖ-†aÎœ9³nÝ:­VË0ŒP(ÌÈÈ˜6mZTTÔÔ©Siš&IŽ9ŽŠŠz÷ÝwcccALLL~~~yyù/¿ü²gÏžÜÜÜÐÐÐßÿa‚ öíÛ
™ðù‹ú2sÕééé¹¹¹–jÁ&naööö...nnno¾ùæ¥K—X–utttrrúâ‹/fÌ˜ñÞ{ï}òÉ'ééé={öüúë¯e2ü Ý/¿üòñÇŸ9sV$ÙÚÚzzzzxxxzz¢(WRRòÛo¿õèÑcüøñ[·n

’Éd‹/þæ›olmmÁ×_Sñüu}i€-áz½ÞÏÏEÑ¤¤¤úåß ¹‚““ÓÅ‹/^LÄ’%KÎž=YQQ!‘HœœœÔjuxxøÚµk	‚ÈÎÎþàƒœœœ  pÕyï½÷Î;—””÷A¸ª999Á²‰DBÓ4$W0Œœa˜>}úLŸ>=''G§Ó}øá‡(Šòeb/Õ¦AQEsrrRSSÛµkçããS]Gä
–gH Ë}8ŽƒJ*,®ÀRÜ?ûF#Œ@sÊ`0˜ÍfHŸ`©‚Ì°M¯×…BA`o'½lÏüÏËÔ ðùz Ï¾ˆâñ‚ç‰æÑt°,‹×ïÑñ^<êwÙxr¼ÄƒW ¯ AÊÕšT5­"ø¿%Ã
#˜ðyø~Ë;áÛ,ÿ×zhù:˜‚ˆˆ€äð°ÇÁ‰¯ðë`ß$üŠšgbùK’$d7ç/mÓ€a˜ÑhÌËËƒÂl:¹†a`Þ¼yEuéÒ… ˆÜÜÜ­[·^½z500Ðh4îÜ¹óôéÓÅÅÅýúõKJJZµjÕ½{÷œœœ¤RifffÇŽOœ8Ñ®]»Û·ooÝº¾M&“-_¾üîÝ»ÕÕÕÝ»w?sæÌš5k†ñóóƒ”¿!!!...'Nœ°³³óôôÄq¼¢¢bÅŠíÛ·ÿã?NŸ>}õêÕwß}7%%eß¾}GŽqpppuuïÑ£Ç½{÷rssW®\¹fÍšñãÇÛØØð9& S¸ººåçç;;;×c
×G® ©™¯_¿Þ­[7OOO @AAI’ÖÖÖ·oß.++Óh4ßÿ}ddäÍ›7£££·lÙ"
=z$“Éäry``à¡C‡Ú´i èÞ½ûåË—SRR‚‚‚úôé{íÚµØØØ…^ºtÉd2ùúúfddÀ˜““ÓÃ‡ñððP«Õ‰‰‰÷îÝûþûïóòòbccår¹ƒƒÃ²eËNœ8[VV6`À€ððp‘Hèææ6dÈ•JÅç@š¬C(Š
…Âªª*½^ommÝr¨t>>>8qâDÿþýþøã‚ œœœàå‰D#FŒÐëõë×¯ÏÈÈðòòZ¼xqppðœ9sœ}||NŸ>‰ãx@@@ÇŽwíÚ¥P(¤RiXXXXXØºuëºwïÞ¿Žã|||àøð^½z™Íf8¥Çñ¶mÛJ$¨‹vvvööö………'NœˆŒŒ4hÐ¸qãBCCgÌ˜AÄ Aƒ¼½½:È÷»5Í3ç8.))I"‘øùùi4š¦“+@ªhjÀñ—qÈbA"Š¢²²²Î;×¾}û÷ß_«Õb†¢¨Éd‚éRÇaöT*•ž;wN(~øá‡  H#o4-)X˜Æ³œ1|Ž‚epc‹‹£iÚ××W«ÕÂs€_‹Ô(Š‚õü
Ôä-ÌBeQ?ød*çŸLåÁÇxü£Àu:$ãÁãY¡Óép£ÑÈÇKx4F£‘ßÂx<ßÆýðxŸŸ'WàÑtðä
<žwâm Ï^x¼H‚óŽá$åZ•@àÏ´­¥ˆã8ØÈ²¬¥ˆçÉc"'A›ÍfØyh™ŽK‚x£þ¼Z­ÖR×ÕD‚YÌØØXƒÁ`kk›““£V«KJJŒFczzzJJ
d_ÈËË‹ŽŽ†ISAlllŠŠŠd2™Aåååùùùz½ž¦iƒÁPPPPZZ*T*•\.×h4jµ PQQa6›ÍfsIIITT”N§Ãqœ¿–ÿ”Yƒa˜X,V*•ÕÕÕ†5‘\ã8“ÉHDzz:,ø‚êiccckk[^^^TT„a˜»»»%iÉå ÒÒÒD"‘¯¯oyyyZZZuuuÇŽ322L&Ì«gddäåå¹»»«Õj¹\nccãäädmmÍÇþ³:d6›mll  
…¢þÎœúnt‚ àˆX^G(À•ÆÉÉI.—ët:OOÏÂÂBXD €Õð+½¼¼d2YII‰•••››[qq1,suu5:Îd2ùûûÓ4-‰(Š¢(Ê`0Èd2GGG>>þOma €ªª*Ã$	Üê{ƒå–z ‹¡c©ƒ®õ°æXÞ -Ë¡jÅ--GøË-|â=<^¾AÒ‹ßY\\Ü°©Q3Jd)t¯óaÍ'-ÿ×|ødÀéÉ#ðA©²…ñn<—ÞÙá€I‡ßÛJDlDôÕu¯I”•±ß|Sß/.h¬d‰Íð•Å¯²¹£,Š*¥|?+vQ}z»6lAÛ–$I^Ê¯ìîsgyãÛgúª”Zmïlü­éÍ…ÐOçm ×XÂ¡ºµgÐðÆœú?KÞøK8ÄÑ¯5ˆ»ëë~Á¡#pï®†§“·X>ÎÑ¯«õS]\÷'þó×ÿ3#Àå¥ ûF=o`Âq\«ÕBÞrÔ]|àÏ $†A– "A†Õü_ ¤¦¦–••=xð ¼¼œaš¦‹‹‹óòòŠŠŠ*++322àó0iáTà¯w³ÃÜîíº_°r{üØØû ¢þ?µ7 €¢(EQ;wîüá‡ìììºvíšžž¾aÃ†óçÏ»¸¸xyymÞ¼9,,L¡PôéÓçòåËûöí+//ïÕ«WDDDXXØ¥K—zõê•ŸŸ¿oß¾óçÏwìØQ©T
…Â“'O^¼xñêÕ«îîîb±X¡PäååEEEõîÝ»¼¼<444((ÈÛÛûáÃ‡Ýºu;sæLVVV×®]ùÌF3+PûaxôÄü´^	 HÐÊÁíA]GYéÿs	àT½ñàÛo¿½ÿþ¼yóvïÞíããsîÜ¹   H
>{öì€€€={ö  öíÛwúôéY³f%'''''{zz
///8ù€$I77·“'OúûûÛØØüßÿýŸ··wpp°«««½½½«««X,NMM-))CàGŒ±uëÖaÃ†6ìë¯¿nÌsÏÊJûu¾`ß ´$ñÉ‹ª§zòÎ]uÓn”hÀ
…IIIß~û-  {÷îÉÉÉS¦LÙ¿¿F£™8qâŽ;ÂÂÂæÏŸ?xðàiÓ¦y{{_¼xÑÃÃ£}ûö‘‘‘ÕÕÕ...p“ª¬¬´±±1ýû÷wtt„‹PEEÅÜ¹sY–-((°··'ÂÙÙ™¢(???‰DrëÖ­/¿ü2##cÐ A €ÆGÖy<‹SNè>DyÔ‰‰¨4¾á K€~üaÎÚóoÆÐ³öÆ72WZómuæPÁÓYg‚0×®]ëÞ½;dxáƒ™/ÚJìa8žò–ó—Õlölê2Îì;Ðut^ðä
<žâ¥_ú `¾¾þ·5*Ïã5Dƒªó—Ÿ ÀïüHÜøŽß$x4‚-ÞŸ ªC„ù×–šú~YËÖá“©<žêÃ=Ø!¸³Zé>á‚ @³¨„
gó£3àsa<ž7À‹€G‹S >{ÕªñLùÇú†ILLÜµk×ž={ªªª†d«€—$IÇaÆ €ã8Ã0ÃÈåòcÇŽÁ˜Ã@ÎTÇišfÒ©b_bYÎ'IRû†ÐÐÐ5kÖ2ƒ¢(ü $p…ß~ïÞ½û÷ï3¿þZ‚ àC  ÷\kT9FÞü,Ë¦§§«ÕjË¼€ÜøzV‘ððð‘#GöïßõêÕ...}ôÑÖ­[9Ž0`@rr2Š¢“'Oþî»ï&L˜p÷î]µZmooÿÖ[oååå‰ÅâÝ»w?|ø¦éÕ«WŸ>}úÒ¥KVVVb±xùòå§NÊÏÏ L:õ§Ÿ~ºyóæÒ¥KßxãóçÏ‡‡‡‡†† BBB:vìèééyüøq–eäìì<cÆŒ½{÷BÖßŠŠŠµk×ÆnÝºM™2eÙ²e$IÊd²àà`™LvåÊ“Éäééùé§ŸjµZ^	˜WèÖ­[UUUBB‚›››••U=}žhc 0b±x×®]EEE½zõ*))3f‚ Ó¦M›>}úÍ›7¯\¹Ò§O©TÚ¶mÛÝ»wgeemÞ¼¹ÿþ+W®¬¬¬4hÐºuëÜÝÝƒ‚‚nÝºåçççííœW®\ùÆoÀUÄr®$Z©TŽ?~ûöíÕÕÕãÆë×¯_fffffæO?ýôÁlÚ´)>>~çÎ>>>Ë—/ïÛ·ï‰'zöìÙ½{w†a¬¬¬xhŒFccf®?ÕG„¢¨ôôôøøxA†êàà  ¸|ùrbbâàÁƒa¢´sçÎ‚ÄÄÄ\»v­OŸ>={ö,((ðõõ-**:zôh·nÝÞ~ûíõë×çää8ÐÏÏ¯sçÎùùùáááNNNï½÷žL&ƒ$WƒA(j4š“'OÊåò?üÐÝÝ}ëÖ­½zõzë­·œoß¾­Óéüüüt:··÷ùóçÓÓÓ?ùä‡‡¶oß¾°°A77·#GŽèõúqãÆÙØØð,¢†aƒ!;;»M›6‰¤žD$tã_FÃ0•J­™gêDQT£Ñ`­%þê¾4#ºfŽ¼þ8ÐËÈ…™Ífš¦Á³w²,-t^{^&ž©µœ÷·y<p>rÃã¹ÈHÛÚrEQ:Ë8òâàÑØKS* ÀHÛ#é—öv¸ù9@qU¯¹:Ÿ1¬W#õªŽºTqZô`3`MíAbcc]\\ˆ¢{Â˜Di¦.åeÄ£>—Hèhtì¦œmtë+•Ja›Îy¾©ò|“—g2ŸqKŠŠ&€¦iÞùâñ|&/¼ñhNÀz F£ë«999G=vì˜¥:ÄR‰`5ÏÃ‡#""†¼ÔRHÀ s+AÔLíBFiäi€G 0S]]}ãÆø‚ RÇ-ŒðÀŸL$IÂï¢iÚr(Ï˜LMOO‡	¨eøTrÈ
ýßÿþwÈ!#GŽœ3gŽŸŸ_|||xxxtttçÎ5Íºuë.\¸ d2Yaa!†aGŽ8p I’×®]»wï^ïÞ½9"
oÜ¸qòäÉÿýï¶¶¶íÚµ#"99ùÐ¡CÑÑÑ†Y[[ÿøã‘‘‘÷îÝ:thbbâÆÿøã´´´Ñ£Gã8ž””´xñb €X,>zôèµk×ÅbqXXØ¹sç
ûôésüøñS§NFE‡Ž H¿ÿoïjCšêâø½»›{µ­½¸a®öB[º£²rZ‹½à—îKÄ¨/ŠX‘…”.èEzQÈ^ìC adB‘ÀPºQšº-*[Kæv×¶;w÷|88Æt—¹xxàéü>]Ø9çþûßÿÿ¼üÎï˜Í©T
ºÑŠ >E¥R
…fff„B!Íåtâ
7²Z­öÓ§Ob±Ød2=þ|zzÚf³mÝºA×¯_755íÙ³çÁƒ ¢Çã	‚üøñC©T~ûö­±±‘Éd¶¶¶šL&@H$V¯^]QQãx0d³ÙmmmW®\¹víšÏç»xñb(jooÿýû7 FnÜ¸ñðáÃGŽQ«ÕUUU^¯W¥Ri4šÙÙY‹ÅÒÖÖ699ÙÒÒâñxŒF£Ãá°Z­È"©ºÅJ‘ÙÆ&Il„¯8!Âb±(ŠÚµkW}}½ÏçÄB‹ÅÒÐÐ000Ðßß¯V«W­Zµoß¾'Ntww…B±X„]ž<y¢Õj­VëàààÛ·o¿ÿÞÜÜ,•JÁpttÔï÷WUU©Õj±X¬Ñh‚Ø¾}{}}½Óéœ˜˜¨©©ÑétcaaA$¦Ün·ÛíÞ¼yóÚµk_½z•L&5Ýnçñx/^¼Ëå;wî‡Ã£££ÕÕÕHþøùBÆÂÂÂÄÄÇÓjµôŒD"Åˆ+,•š§/Œ¢èüü< >g3h$hšÍ©•]2ß3ÄŠR†a£3¥Åœ§Ñ¥ÏW8Nji­‡¦ná?åãØ1šo\ØU`ê‡Óx¸ñßF	‚€†€(Ñh”	´Dq³}˜Â þ,…a†a4DÀ0Œ	”x¡- Š Çƒ)âÏR4Á_ƒQàá­]y	è‡
…‚Á`¶[0ŒD"1776MsVð†P(T(‰$‘HÐoH3é=‘Ïç{½^Ç-‹B¡‹Åbååå_¿~-++Óëõ3338Ž[­V¹\Ö“I’/_¾”H$f³9S¸AàY\/GagÎÒæÜ¢(b³Ù(ŠNNNb¦Õj‰DN<þ¼,+OOOëõúõë×Çãñì°¦R©Žãáp8›úCQÔÜÜœßïÅb&“©¢¢‚FbŽÄårív;ŸÏohhèíííîî>~üx*•ºpáBSS“L&;vì˜B¡8xðàÈÈÈçÏŸFcIIÉ7îÞ½ÛÚÚŠaX{{ûîÝ»€DUuuõ»wï?~<44$—ËE"Qoo¯Ëåúòå‹ÙlþùógOOŽã•••"‘¨«««¯¯O$MMM8p`Ó¦M,+™LJ$’›7o>{öL&“©Tªžžž‘‘—Ëe0Äb1¼“ EQ’$C¡ÐºuëÒéô²?@ÀE©T†ÃáH$øzÙ)¯¤¤$”–––––.›Ô"‘HÞ¤Èd2	‚H§ÓF£A“ÉFÁ[9N"‘ˆÅb\.·¦¦&Þ¹sÇårŠ~¿_¥R!R^^~úôé3gÎÎÎÎ@ àt:ççç÷îÝÛÒÒ288ˆãx2™<wî\$éìììèè(++Óh4>|8zô¨Z­¾zõêŽ;ôz½Ýn¯««þøñãÙ³gkkkNç£GÎŸ?OÄ©S§Ö¬YsëÖ-è79!€¢(ú¨2$I.;<Êf–æ}K¾6›íáÃ‡·oßFQ´££Ah4J’¤N§‹åúõëýýý:îäÉ“|>?îß¿Ÿ ˆK—.½yóÆ`0ØíöñññË—/†ææf¯×+•J9CQT§Óù|¾mÛ¶Ùl¶¾¾¾©©©ºººÆÆÆ§OŸvuuQU[[;>>îv»7lØ “ÉÇ½{÷îß¿ïp8:äñxL&Ó¯_¿¤Riee%Œ@99Äãñp¹\¡PÆ	è"€" Aïß¿'I2GH
EQ ë¶eË‘HÇ—õÂ‚ø@(Šb–Í2zù~ÍôzE’6Ø3É¸s¦C™EQ€R¢% Bƒ–ÁR'¨˜S,C9B …c¹Âf³I’ôûýÀ\ÀVét:‹Hå9ƒh&“)är9Ç£×æ*ˆ´4ƒfWóå×ì”™ÿg“¼–2¿rD²}4‡†–Óè:ô#!AärùŠ¨½Àž…(»Áiü_þ­…ÄÙÙYh_ˆâðçRa]IÇ`\    IEND®B`‚                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ‰PNG

   IHDR   À  0   á9~ª   	pHYs     šœ   sRGB ®Îé   gAMA  ±üa  ÅIDATxíÝ|TU¾ð_2“ÞC%(¤¨).HD”,XXÛó¹ëªu]×÷ÜE]ËZYù¬>dÝµ-¢bAAD,t¤…zM€^'eR'ïüO˜0	ÄÌù}ùÌ'Sî½3$çwO¹÷žñJKK«‘il6[U
DDˆLä"ƒ1 d4€ŒÆ Ñ 2@Fc Èh  £1 ¿å•ÕØšš‰êšZœ­”´¬V­o"cðÅ†Ý˜òÂ\Lyq.¦¿6ÿ\ºgjÓtØÊ+àGó‹ðÄÜ¥¨:ËœWRŽ‡ßþ
…evëŒ@iEâ"CðÆ=×âO“¯À‚»°|Ç¡†×ómå¨q8×:ê[\‡úéôäGßcf~Ãã{ÊÔv«;þ|mmý¶ªkkQTjG]]]“ŸKÞS^oLÖÉµ•áÔ5ŠUø*ªjšÜNÓ[?ùuY×]n«¬0\ûð}‹B~‰6<¥
¶X‡*&O… _+}w‰Z&ÙE¥xtÒH¬ÛwDö—¬Ä³7_…ÏU€Öì>?.IˆÃÃ×ŽÀçëvâÓw¨½rž½õ*x©÷ûÛg+ìï‹èÐ <uÓ©ûN•jïÿà[‹PVY…b#ñ¤zýÇ=G0sájtŠ
ƒ]5“^üÍ8D†â/ó¾ÃþŒ<]o¼¼/Föé¦·!¹zýëuØ–š™wMÄ½þîNˆQ}/À#o/Æ ;ªà‡bö×ëä§ÿ?õÂ]cÂDF÷ÒólxÙ](KÊ+1àÂøhM
¢Tá|ýÞë0$±3þ³bVïNClD0^¸m~{õ`TV×à÷ã‡êÂûÇIW¨[­kw˜ŠwîŸŠ5»Ž`wzŽ~«_>>—tÃ¬Ekq·*hs~ûkµZ,kTã8½|Ç8¼ÿàõX¿/Tíâ­þB3nºÏÝ:Vv/¬UØr(ÇòŠñá#ÓðÚ]°R}>	„aÞªmêýÓð‚
J ŸO“ÿo	¢Åâ…7þ{^¾}¼ú?nUÿ3k£k€Ð ?ø"yÓ1üfTtŽÀ‘ÜbìËÌÃô¿Ï×M„xµç½º"¶ÉÆÔ—æ¢_—X<0áò“¶“®jXU‹„úëÇ=;Eã¨* "&,~Vµ§-AjÚ¼ýýf¼óÃfØÕ¶3KNÚŽŸ
K€ü}}tàòT³§FÕD/-X…Ž¡ª_¦›HÒìŠo
/U’ã"Bt¤ ¤&­jƒðãŸ¥9!*¼o/]© dªš ä4ëx"£k€PÕ˜2¤·n"¼óC².”²÷Ù+ýaæ?z3žž6ÛgãÚË.Â§Ý¢Ý+·5l£Nýk¯šO…ªp—o“Ëž;.âä‹ŒÂ šFÃõ¶ß¹
¦ºô¤eªýb¯®ÖŸ£@èÈà@| öè^s9^ºc<bÔgÒÊ,,Õ÷%To}»Q¯'ž–„#yEøzó>ýØjñÖ5–¨8¾ŒHú!²rU{DÀDÆ÷Ä½»é½ò¢M»1mx?<öþ<ôï¯t!{iwôêƒW¾X…cp(»ÃzuÕë]Û³¾úOÞx%zÅÇàAµŽ*p]¢ÃÑ·K{„¼†÷ðWýˆ)C.ÂÓ~ª9${ÿ7ŒB7µ§jµ·ú£eºo‘‰ÄŽQ¸Tõ'^VïÝAJú'Ž!=:ã½e›ñ»7¿@‘õÙ;þV«nÚÈ:R›=óñ2ÝÞÖ«ÞPíýEÉ{q(« #Ôg—¦R¦ª‘î›ó¥îìOÖOßD^u&^VZQ‰	RMQb¯T{ÈÝ9•Ÿ²ðWM›`ýº/Ê(P„ÚSF/,åUÕ8–oÓËHÇVÖ‘Nh|»0½ç•±}ÙûF4Ú»æ«På—–«Z#XÕ
'79¤Pú[}ÔëeˆÓ¡i9…ª™â¿úBìï§G£çª÷±oyéõ£T­!ý¹/Íœ@__ÕD+VÁ´è¦Ž·jö$ÌPµØVÝ¯‘¤„˜½¾i
ëŒ€ÉVìLÅ<€Ùª3n2	 ›@êß­ƒÞëû F
Q£_r#žD†c Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2/ˆ9ÛKñ}Þ1¤U” ¶®ý‚#1,2ñþf^˜~>1 ?£uE9x-m;Öf7ùúeáÑx$¡††·ý<xQüÏ@¦!yëèn¼x(•Ž–'¿õó¶¨ôÅ½/[rQ<û ?ƒù™‡ðüÁ­§-üB–yN-ûqæ!Ð¹Ç œC5ª}¿©(OìÛ¨ïŸ‰§nÆÁ2èÜbà(ª©ÂgY©ø0ó ——¢¢™=Å
»zÍÑD8lÕU˜Ÿ}êv	èÜaàfY•vLÛò=žÜŸŒ=¥Eª€×4»ìSÝâÍÞ#jõmòõOT3¨ök:3¬Ü¨²Î;R–cgia‹ËÉžf¯¡¸:º“~ìí5Ø½…5•'-—SUÁk`@XîéÔKÿ$÷bàFoÞåRá6qPCáIQñFŸá°61?gN•_çÅmÛ–áã,vŒÝpi¨|–zÚå¤Ù396á'Ï‹hÿk¡9TZ[GU-!ÇÈ} 7)¬®DFEy‹Ë„«Âý¯ô=»q1çix~y~†~îÕ´Øk›ï3HÈ^TC¤ä>ì¸‰ŒôTÕ9Z\FF‡ŠJë¿D¯¬QAÏUmýÝªÃìŠ=eE:l>œÛÓX¸‰¯—·nßŸkå*8-ÔtfX¸I;_ôŽp¹>_uh“m¹úþž²b¸*P…,ÀêrÀMdüæŽø.@–;›íÅ¡ít_‚ÜƒM 7§†6ÛçŠ¿·7NèrÀÍ^î9÷vî¥~±îýÎ­@o+žë1ƒÂb@îÃÓ¡Ï‘Å¹ø43?Ó£<Ž³8¥Á¢Bç¨šÅãÖ‰èr~I×ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 n–^Q†²šÖ]´.éÊ,Ù•v¸ƒ­¦Å5U Ÿb š° ;×%ƒ›¶|¯gdÛTœçòºîZ‹Å­›¼jö‘]xlïzì-smª”Ó‘éÙgÙú) 	ÅÕUHÃ+½†à²ðÌØ¿I?_¢ö¤Ëó3±½¤ aY¹ÚKž;uo-óþl±åéÉm·Ùòõs¥ªfØ_fÓÛIQÛØ]Z¨ÃÒxêt™ógUA&ÆGwÂEÁz¾ÑÕYz[²”£‰íÙŽoï€º/Ó±;¿‡ ³²+Õ¶Êj«AMc šQæ¨Q…ÛŽÕ¤¹,,Z7!&o^Š­%yøÓÞzêsi¦LL^‚¶\ŒÛø5–•Ô¯«
ÿtUs$«B{ÈnÃoR–ëç¿Í;Š¿ØŒm%ù¸~Ëwø0ãþ¼oÞT{|§4{)òT¤`ËÔé·o[Ž9ixæÀ½îµ½Ûmïùƒ[t8nTÛ{÷Ø><¾o#ÞKß¯›bI¾ÂùXØh::Ð™×ÿ‹ì#zŠó ‹!<œÐOÏÝæã«ÿ{ªÀÝÙ±UÏÏ¼h¨Z®þ×ùúáèäŒÛÕkÍéŒ§àÏö×…ÔéÒÐvè‚	1uMT¤ÂðRÁ˜Ýw>Ê<Ðâöþš8Õz©ö¬+ÌÑ“î>Ù} ®ëjÐŒáÑ˜Ñ½¿nÍÍ8 ÚãÅzoÛÞ7@niŠÈDˆ¾Þ½|Ï pZë§YòWÏIMaÓÓ7=;„óàmEµ£é)KÕzm///„ª zÕ?jrYËñ™¥eYùlò½²mýš›g¨ð$@3v¨6µLdûÔþÍè¥ÛÕyU•úçVÕ—"{Mtg=ÃÛçY©ºÓœn¯Ÿ÷®}Ô.3ö%#Ìê£Úø¼›¾Ou®7l_Úçÿ9¶¯¦¦àWí:4ù…FëußPM¤ÿQÍ®Ñj.Û«>¾½OZ˜zddæÑï±D5•¨iœ¢	‡ÊmH–‘¯ú‡„·Gˆ*xÒÖN±àÂ PÝq½B2é î+/Æ%!íÐ?,
k³õëÑª¦¯IºF5I6«õö•#1(Lï™å› ådJè‹*µ÷Ó®£Þ¾ÓÆâ\Äøú«fMˆîd/QYšaIQñ* ¾X[”­·×'$Bw€/UÝ¬ú!WªíH“­DõW©Î»¼ï®’B$†êàô	‰ÀiQÎ“Õ…YªS»K?Ày"S©—ª=w”ÚËÓù#àä¸çt’ý}- ó`2@Fc Èh  £1 .*--mñqsÊÊÊPwß@?À7nÄ¼yóïÞ½³gÏviÝôôôÓ //ë×¯ýüxà4l6ŠŠŠ®WVVâàÁƒèÐáÄù;òœ$..N/+³³³qÃ7 33ñññøòË/¦—ïÖ­ªªªÐ¯_?,Z´V«iiiúñæÍ›QRRooo\yå•X¼x±¾ß¥KôéÓG¯¿jÕ*”——ÃÇÇ£FÒËX,äççãæ›oÆš5ktåp80vìXý55ÀiHa:t¨>ËR|÷Ýw4h|}O|S£ìáå&…M~&%%¡{÷î8zô(Š‹‹uAô÷÷Çøñã‘‘‘êêjÝ4Rh{öì‰®]»êu8 {jjª©„:R¯¾„Ë©sçÎ:€û÷ïGVV–ÂÕW_­C%µ‰Üä±Kj jÐ)|Rüøãº íÝ»WïySRRtáÞ¹sgÃ²²—Rè$,ò¸qÓÇzüTiy^Ÿ²¬BáŽ3\òœ¼‚qãÆ!00P×„M›ê¯J“ð,]ºT×*¡¡¡zyç^¶#7	„s{‡Ô<6Z‰o¼Qß¯­­E=ôÍù¸wïÞú¾B)¬"88Xÿhø)¯;Ëë²‡_°`®ä±äÜÜ\½œÔ»víÒYšR>YÆÙ“e¤€oØ°ºY%Í®o¾ùFïù£¢¢ôö¤¦’°HP¨y<î<qÖÎ½S5Ó©O}nÛ¶m: ‚{î¹G?WSSÓPëPÓx6¨‡·Üu_ƒ\Ã³A=DûöíõÎ;Ád4Ö ­ ãÿË—/×#Eƒnq‘Ž¬«Ö­[‡cÇŽé¡PéToÝºUgaÏË/¿\/#C¥2<*ï!¶lÙ‚Ã‡ë¯/>|¸îøÒÙaÐ
r„X
ûµ×^«Geüüüô¦)Þ¾}»62V/U9Àå¼		Ž«^sÍ5z[v»999˜0aöìÙÓp¬@Æ÷eDGÖ“áX9F0pà@2DH£³Ç ´Bll¬>& {ì)S¦ècr“Ñ)Øk×®Õ…V†$å¹Õ«Wë‚,Ã–B†+G­k¹/C¥W]uUÃ¸¾sèTÈ°«ŒòHÈ„•JMÐ©S'ÐÙc ZA
ßÄ‰uShÎœ9M 9
,Gi§Nª›*2^/µ‚ŒÓË±…Æ…VÖ‘‚=bÄˆ†Çr K¶ÛxèsÙ²ezÌ?::Z?–ŸðHo+1 ­°råJ]¨¥í.WöÒÎç¥m.Í!b–ƒQ×_=~õ«_é°H œ>ÿüs]ø[Îó‘ 9;3FŸß#Í¤kg3‰Î´‚4s¤"³oß¾ú`–4_vìØÑPHÁ•ö¿EŽ"ËQ])´R8;ÑÎ`ÒÉMNNÖ±DÿþýuWšQr:„uÊéÒ4’šEj9/‰¿³Ãad4	 ›@d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€ŒÆ Ñ 2@Fc Èh  £1 d4€Œf…§)+~øØ±HMrrêŸ‰©¿ôéSŸŒçUPPP6O
þÂ…õ7¹:7ÝT#cÖyF d/ÿÄ'öö®’Zà™gXJÐöû g[ø[».y„¶€Ö`g\i6‘ÇiÛøðC×
¿4q&NlþuÙ†ôÈ8m7 Rh% ®vþ]wµÜÖwµóL¥í@†9]!#=®trÃ§d”¶ W
«|	€«5…«¡"Ñ¶›@-	
ªoú¸ÚOràŒŒâ¹päruïïÊ6Éãxæ¹@rªƒŒúH-0gN}XH0x0ˆœÚî¹@Ò¾on-mùçŸ¯€@È9@2ÒÓR;ŸG„ÓvÐr“eýú÷e„GöüÒqni¨“0NÛmÉ^ÝU†[n9ý8¿Ôd”¶ )¬Î&Ž»œI¨È#´Ý Háoéô†3åê3ò(m{HàŽBë<`FÆiÛpìjMœ×‘Úþq€Ö\ÔÂbŒç9—D
9êëÊ‘_gÿÁy°ŒŒä9—D6&Çä`—óÂøÆd”GŽœ‹$js<3 5®x<BàyÓ¢4Ö¸À³ðS<» jgÌ
AÔ
  £µ¾,ÃŽ³fÕ_NÈY\'Ã±§›©‚Î¹Öu‚¥ð?ôþÙ’c3g2çIë‡Aÿõ¯úÂ?r$0}:.¹*7øôS`ÅŠúÚ“ç"7­€óª«©SOþº:P¼¼€èèú†€3QœWî9&P%Õž
¿5ÍÇËŠ	aCqQ`W 0°þÉFÍÇŠŠ
õÍÉæx©Gpp0|}}á.n;ìp8ðbæ<Ìµ1 -YU’‚/.|ÞÞ?€SmRÄÅÅš&e¬¨¨‘‘‘p·ƒÖÔÔÀ^S	jYem•þC6EöpÔ<ÙiÔ¹¹‰í¶ èÅöÿiÉ°Ž¿§_#£1 d4€ŒÆ Ñ<* ÁÞ§]Æ×ËV/èé”W×9`¢_üa³:=€=Q¯Òê…;¿€_EfuìŽJ,±mÀŠcx¶ãÝH¯Ê…¿·/fæÌÇï£DÿN(sØq¬*…q·ëç¬°à½‚oðÏ¼EÈèû	Ö–íD¤%T?'Û|²ÃíØiOS#[u¸ëðK°ÕzîÁ©wölÇ›;7#& ƒ0käX\6ÿml¹ñ.õZ
¾;’Š¿«ÌÃÎ[îÁ%½…NÁ¡ðõ¶à‚°ümè(XÚððí/> /oÌÉ[ˆwò—`i÷—18¨*Õ¸-íYÔ”èefw~ÿÉÿ³ó¾ÄíÆã¨
ÂÔC3ðjü}ØT¾|‡+B.F¢_<’ö?‚0K0Ööø‡~ÞV[®—íæ‡wyoçµ¥;UÁžNcßÜ‘Œ™#’0¸}GÌØ°•ŽZTÕÖbCv&^OIÆ¢	7èåªëjõ:AÌMºA>¾ùé{Ø]‡>í¢ÑVµ‰k‚Ç„P´:ùFcoÅQzûaáÏ£<ž>³r>Ã	Æ¸°Áx%û#¬<ö“mt÷Ç¶ŠC¨QÈüšb¢K‚-x(æz¬äò}¨vÔàêÐÁXÙcöU¤ãn‚ì·_ž„ß­ø½#£ñ‡K.CÕÙörL^ü	þqÅX´WµBVù‰°VÅa©ªò+ìêwé@T@ Ú²6Ñ(VM`o|Q´iUYº™rÓ¡§0nÿñcùN}ŽÍÈ½÷ëÂÿJüïôÞüT%ŽrD[Ãô}«Z>DüŠº*ýGÌ®)D¿€ðFîúõom›ô¶ï;òwxºjuTzÅ¤[pkboÜöíB]°-*O‰g6­Ö«TµCVy©ª¬ºvˆlÛg ·‰`cù,µmÄ²Ä¿ãµœOt'v„jÒ”« dTçáÞ¨ë¥úkËv Xt?¯Ÿž,µTêÇãÔ:2	]ýb‘b?¨j›“4…:úDã¾˜IØTºü¢‘:H¯·¼dŠjKá‰¤ió×«qM×Ñ54\ï­Þ^ˆòÂ½.FFY)þ²~ž4õõh±bzÏ¾óõƒ'øÅ× ‹‹×akùÝ	~üØ?ÑÕ7ÿVíôÎ¾íÑÓ¿3â|"U{ýdÖäcXp_¼9»+ëu¿QäöCú~am	®=ð¿j.(QíþÛRŸÓÜ×s?×¯Kí!åÃÕÙªHÖÛ–›'I‘þlÜdý39'ó’&!Ü×÷õí¯_bà0t	Gyuè7@/w÷EÃÏâ9¿“Ö]6iRýÏyóPYU…ÿN}	ŸÙ×€š7Ø·'w>>>À´iõO.X dee!66Ô¼üü|´k×îÀiQÈx  £1 d4€Œæ¶ã 2Dàå§òz§¦éß‘wóãçrIdee%,4ÌèNµµµp7·»7xzTÇ5œ7B'“#Ö#B/®Ÿ¥	r±·Ýnç%“ÍDXXÜ©u¹€duóö÷GBptðiÇ?`3äè ‹Ì!“cBŽèãô³i] ê¿†èý÷a<Áê E`ÀéÏÉ7™Ìlà]^^?3œ9Bé¼iýÜ ?”zæ¹2ç\p0ðê«œô<qÏw„IdŽÐ@.’¦£Ôž÷ßÏÂyþ—äµ€ç‘ñ 2@Fc Èh  £1 d4€ŒfµÙlÇ¿ÛâäØäÄ-çsï7å\½îüÆW?GãeÎô=O}/WÖ9M½osÿ¿3y¿–~‡-ýn…+ïqºÏéÜÎé~gúyÜõ;o¼mç6KJJêþû˜.œ0Ü    IEND®B`‚                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                lication/x-sql',
        'src' => 'application/x-wais-source',
        'srt' => 'application/x-subrip',
        'sru' => 'application/sru+xml',
        'srx' => 'application/sparql-results+xml',
        'ssdl' => 'application/ssdl+xml',
        'sse' => 'application/vnd.kodak-descriptor',
        'ssf' => 'application/vnd.epson.ssf',
        'ssml' => 'application/ssml+xml',
        'sst' => 'application/octet-stream',
        'st' => 'application/vnd.sailingtracker.track',
        'stc' => 'application/vnd.sun.xml.calc.template',
        'std' => 'application/vnd.sun.xml.draw.template',
        'step' => 'application/STEP',
        'stf' => 'application/vnd.wt.stf',
        'sti' => 'application/vnd.sun.xml.impress.template',
        'stk' => 'application/hyperstudio',
        'stl' => 'model/stl',
        'stp' => 'application/STEP',
        'stpx' => 'model/step+xml',
        'stpxz' => 'model/step-xml+zip',
        'stpz' => 'model/step+zip',
        'str' => 'application/vnd.pg.format',
        'stw' => 'application/vnd.sun.xml.writer.template',
        'styl' => 'text/stylus',
        'stylus' => 'text/stylus',
        'sub' => 'text/vnd.dvb.subtitle',
        'sus' => 'application/vnd.sus-calendar',
        'susp' => 'application/vnd.sus-calendar',
        'sv4cpio' => 'application/x-sv4cpio',
        'sv4crc' => 'application/x-sv4crc',
        'svc' => 'application/vnd.dvb.service',
        'svd' => 'application/vnd.svd',
        'svg' => 'image/svg+xml',
        'svgz' => 'image/svg+xml',
        'swa' => 'application/x-director',
        'swf' => 'application/x-shockwave-flash',
        'swi' => 'application/vnd.aristanetworks.swi',
        'swidtag' => 'application/swid+xml',
        'sxc' => 'application/vnd.sun.xml.calc',
        'sxd' => 'application/vnd.sun.xml.draw',
        'sxg' => 'application/vnd.sun.xml.writer.global',
        'sxi' => 'application/vnd.sun.xml.impress',
        'sxm' => 'application/vnd.sun.xml.math',
        'sxw' => 'application/vnd.sun.xml.writer',
        't' => 'text/troff',
        't3' => 'application/x-t3vm-image',
        't38' => 'image/t38',
        'taglet' => 'application/vnd.mynfc',
        'tao' => 'application/vnd.tao.intent-module-archive',
        'tap' => 'image/vnd.tencent.tap',
        'tar' => 'application/x-tar',
        'tcap' => 'application/vnd.3gpp2.tcap',
        'tcl' => 'application/x-tcl',
        'td' => 'application/urc-targetdesc+xml',
        'teacher' => 'application/vnd.smart.teacher',
        'tei' => 'application/tei+xml',
        'teicorpus' => 'application/tei+xml',
        'tex' => 'application/x-tex',
        'texi' => 'application/x-texinfo',
        'texinfo' => 'application/x-texinfo',
        'text' => 'text/plain',
        'tfi' => 'application/thraud+xml',
        'tfm' => 'application/x-tex-tfm',
        'tfx' => 'image/tiff-fx',
        'tga' => 'image/x-tga',
        'tgz' => 'application/x-tar',
        'thmx' => 'application/vnd.ms-officetheme',
        'tif' => 'image/tiff',
        'tiff' => 'image/tiff',
        'tk' => 'application/x-tcl',
        'tmo' => 'application/vnd.tmobile-livetv',
        'toml' => 'application/toml',
        'torrent' => 'application/x-bittorrent',
        'tpl' => 'application/vnd.groove-tool-template',
        'tpt' => 'application/vnd.trid.tpt',
        'tr' => 'text/troff',
        'tra' => 'application/vnd.trueapp',
        'trig' => 'application/trig',
        'trm' => 'application/x-msterminal',
        'ts' => 'video/mp2t',
        'tsd' => 'application/timestamped-data',
        'tsv' => 'text/tab-separated-values',
        'ttc' => 'font/collection',
        'ttf' => 'font/ttf',
        'ttl' => 'text/turtle',
        'ttml' => 'application/ttml+xml',
        'twd' => 'application/vnd.simtech-mindmapper',
        'twds' => 'application/vnd.simtech-mindmapper',
        'txd' => 'application/vnd.genomatix.tuxedo',
        'txf' => 'application/vnd.mobius.txf',
        'txt' => 'text/plain',
        'u3d' => 'model/u3d',
        'u8dsn' => 'message/global-delivery-status',
        'u8hdr' => 'message/global-headers',
        'u8mdn' => 'message/global-disposition-notification',
        'u8msg' => 'message/global',
        'u32' => 'application/x-authorware-bin',
        'ubj' => 'application/ubjson',
        'udeb' => 'application/x-debian-package',
        'ufd' => 'application/vnd.ufdl',
        'ufdl' => 'application/vnd.ufdl',
        'ulx' => 'application/x-glulx',
        'umj' => 'application/vnd.umajin',
        'unityweb' => 'application/vnd.unity',
        'uo' => 'application/vnd.uoml+xml',
        'uoml' => 'application/vnd.uoml+xml',
        'uri' => 'text/uri-list',
        'uris' => 'text/uri-list',
        'urls' => 'text/uri-list',
        'usda' => 'model/vnd.usda',
        'usdz' => 'model/vnd.usdz+zip',
        'ustar' => 'application/x-ustar',
        'utz' => 'application/vnd.uiq.theme',
        'uu' => 'text/x-uuencode',
        'uva' => 'audio/vnd.dece.audio',
        'uvd' => 'application/vnd.dece.data',
        'uvf' => 'application/vnd.dece.data',
        'uvg' => 'image/vnd.dece.graphic',
        'uvh' => 'video/vnd.dece.hd',
        'uvi' => 'image/vnd.dece.graphic',
        'uvm' => 'video/vnd.dece.mobile',
        'uvp' => 'video/vnd.dece.pd',
        'uvs' => 'video/vnd.dece.sd',
        'uvt' => 'application/vnd.dece.ttml+xml',
        'uvu' => 'video/vnd.uvvu.mp4',
        'uvv' => 'video/vnd.dece.video',
        'uvva' => 'audio/vnd.dece.audio',
        'uvvd' => 'application/vnd.dece.data',
        'uvvf' => 'application/vnd.dece.data',
        'uvvg' => 'image/vnd.dece.graphic',
        'uvvh' => 'video/vnd.dece.hd',
        'uvvi' => 'image/vnd.dece.graphic',
        'uvvm' => 'video/vnd.dece.mobile',
        'uvvp' => 'video/vnd.dece.pd',
        'uvvs' => 'video/vnd.dece.sd',
        'uvvt' => 'application/vnd.dece.ttml+xml',
        'uvvu' => 'video/vnd.uvvu.mp4',
        'uvvv' => 'video/vnd.dece.video',
        'uvvx' => 'application/vnd.dece.unspecified',
        'uvvz' => 'application/vnd.dece.zip',
        'uvx' => 'application/vnd.dece.unspecified',
        'uvz' => 'application/vnd.dece.zip',
        'vbox' => 'application/x-virtualbox-vbox',
        'vbox-extpack' => 'application/x-virtualbox-vbox-extpack',
        'vcard' => 'text/vcard',
        'vcd' => 'application/x-cdlink',
        'vcf' => 'text/x-vcard',
        'vcg' => 'application/vnd.groove-vcard',
        'vcs' => 'text/x-vcalendar',
        'vcx' => 'application/vnd.vcx',
        'vdi' => 'application/x-virtualbox-vdi',
        'vds' => 'model/vnd.sap.vds',
        'vhd' => 'application/x-virtualbox-vhd',
        'vis' => 'application/vnd.visionary',
        'viv' => 'video/vnd.vivo',
        'vlc' => 'application/videolan',
        'vmdk' => 'application/x-virtualbox-vmdk',
        'vob' => 'video/x-ms-vob',
        'vor' => 'application/vnd.stardivision.writer',
        'vox' => 'application/x-authorware-bin',
        'vrml' => 'model/vrml',
        'vsd' => 'application/vnd.visio',
        'vsf' => 'application/vnd.vsf',
        'vss' => 'application/vnd.visio',
        'vst' => 'application/vnd.visio',
        'vsw' => 'application/vnd.visio',
        'vtf' => 'image/vnd.valve.source.texture',
        'vtt' => 'text/vtt',
        'vtu' => 'model/vnd.vtu',
        'vxml' => 'application/voicexml+xml',
        'w3d' => 'application/x-director',
        'wad' => 'application/x-doom',
        'wadl' => 'application/vnd.sun.wadl+xml',
        'war' => 'application/java-archive',
        'wasm' => 'application/wasm',
        'wav' => 'audio/x-wav',
        'wax' => 'audio/x-ms-wax',
        'wbmp' => 'image/vnd.wap.wbmp',
        'wbs' => 'application/vnd.criticaltools.wbs+xml',
        'wbxml' => 'application/wbxml',
        'wcm' => 'application/vnd.ms-works',
        'wdb' => 'application/vnd.ms-works',
        'wdp' => 'image/vnd.ms-photo',
        'weba' => 'audio/webm',
        'webapp' => 'application/x-web-app-manifest+json',
        'webm' => 'video/webm',
        'webmanifest' => 'application/manifest+json',
        'webp' => 'image/webp',
        'wg' => 'application/vnd.pmi.widget',
        'wgsl' => 'text/wgsl',
        'wgt' => 'application/widget',
        'wif' => 'application/watcherinfo+xml',
        'wks' => 'application/vnd.ms-works',
        'wm' => 'video/x-ms-wm',
        'wma' => 'audio/x-ms-wma',
        'wmd' => 'application/x-ms-wmd',
        'wmf' => 'image/wmf',
        'wml' => 'text/vnd.wap.wml',
        'wmlc' => 'application/wmlc',
        'wmls' => 'text/vnd.wap.wmlscript',
        'wmlsc' => 'application/vnd.wap.wmlscriptc',
        'wmv' => 'video/x-ms-wmv',
        'wmx' => 'video/x-ms-wmx',
        'wmz' => 'application/x-msmetafile',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'word' => 'application/msword',
        'wpd' => 'application/vnd.wordperfect',
        'wpl' => 'application/vnd.ms-wpl',
        'wps' => 'application/vnd.ms-works',
        'wqd' => 'application/vnd.wqd',
        'wri' => 'application/x-mswrite',
        'wrl' => 'model/vrml',
        'wsc' => 'message/vnd.wfa.wsc',
        'wsdl' => 'application/wsdl+xml',
        'wspolicy' => 'application/wspolicy+xml',
        'wtb' => 'application/vnd.webturbo',
        'wvx' => 'video/x-ms-wvx',
        'x3d' => 'model/x3d+xml',
        'x3db' => 'model/x3d+fastinfoset',
        'x3dbz' => 'model/x3d+binary',
        'x3dv' => 'model/x3d-vrml',
        'x3dvz' => 'model/x3d+vrml',
        'x3dz' => 'model/x3d+xml',
        'x32' => 'application/x-authorware-bin',
        'x_b' => 'model/vnd.parasolid.transmit.binary',
        'x_t' => 'model/vnd.parasolid.transmit.text',
        'xaml' => 'application/xaml+xml',
        'xap' => 'application/x-silverlight-app',
        'xar' => 'application/vnd.xara',
        'xav' => 'application/xcap-att+xml',
        'xbap' => 'application/x-ms-xbap',
        'xbd' => 'application/vnd.fujixerox.docuworks.binder',
        'xbm' => 'image/x-xbitmap',
        'xca' => 'application/xcap-caps+xml',
        'xcs' => 'application/calendar+xml',
        'xdf' => 'application/xcap-diff+xml',
        'xdm' => 'application/vnd.syncml.dm+xml',
        'xdp' => 'application/vnd.adobe.xdp+xml',
        'xdssc' => 'application/dssc+xml',
        'xdw' => 'application/vnd.fujixerox.docuworks',
        'xel' => 'application/xcap-el+xml',
        'xenc' => 'application/xenc+xml',
        'xer' => 'application/patch-ops-error+xml',
        'xfdf' => 'application/xfdf',
        'xfdl' => 'application/vnd.xfdl',
        'xht' => 'application/xhtml+xml',
        'xhtm' => 'application/vnd.pwg-xhtml-print+xml',
        'xhtml' => 'application/xhtml+xml',
        'xhvml' => 'application/xv+xml',
        'xif' => 'image/vnd.xiff',
        'xl' => 'application/excel',
        'xla' => 'application/vnd.ms-excel',
        'xlam' => 'application/vnd.ms-excel.addin.macroEnabled.12',
        'xlc' => 'application/vnd.ms-excel',
        'xlf' => 'application/xliff+xml',
        'xlm' => 'application/vnd.ms-excel',
        'xls' => 'application/vnd.ms-excel',
        'xlsb' => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
        'xlsm' => 'application/vnd.ms-excel.sheet.macroEnabled.12',
        'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'xlt' => 'application/vnd.ms-excel',
        'xltm' => 'application/vnd.ms-excel.template.macroEnabled.12',
        'xltx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
        'xlw' => 'application/vnd.ms-excel',
        'xm' => 'audio/xm',
        'xml' => 'application/xml',
        'xns' => 'application/xcap-ns+xml',
        'xo' => 'application/vnd.olpc-sugar',
        'xop' => 'application/xop+xml',
        'xpi' => 'application/x-xpinstall',
        'xpl' => 'application/xproc+xml',
        'xpm' => 'image/x-xpixmap',
        'xpr' => 'application/vnd.is-xpr',
        'xps' => 'application/vnd.ms-xpsdocument',
        'xpw' => 'application/vnd.intercon.formnet',
        'xpx' => 'application/vnd.intercon.formnet',
        'xsd' => 'application/xml',
        'xsf' => 'application/prs.xsf+xml',
        'xsl' => 'application/xml',
        'xslt' => 'application/xslt+xml',
        'xsm' => 'application/vnd.syncml+xml',
        'xspf' => 'application/xspf+xml',
        'xul' => 'application/vnd.mozilla.xul+xml',
        'xvm' => 'application/xv+xml',
        'xvml' => 'application/xv+xml',
        'xwd' => 'image/x-xwindowdump',
        'xyz' => 'chemical/x-xyz',
        'xz' => 'application/x-xz',
        'yaml' => 'text/yaml',
        'yang' => 'application/yang',
        'yin' => 'application/yin+xml',
        'yml' => 'text/yaml',
        'ymp' => 'text/x-suse-ymp',
        'z' => 'application/x-compress',
        'z1' => 'application/x-zmachine',
        'z2' => 'application/x-zmachine',
        'z3' => 'application/x-zmachine',
        'z4' => 'application/x-zmachine',
        'z5' => 'application/x-zmachine',
        'z6' => 'application/x-zmachine',
        'z7' => 'application/x-zmachine',
        'z8' => 'application/x-zmachine',
        'zaz' => 'application/vnd.zzazz.deck+xml',
        'zip' => 'application/zip',
        'zir' => 'application/vnd.zul',
        'zirz' => 'application/vnd.zul',
        'zmm' => 'application/vnd.handheld-entertainment+xml',
        'zsh' => 'text/x-scriptzsh',
    ];

    /**
     * Determines the mimetype of a file by looking at its extension.
     *
     * @see https://raw.githubusercontent.com/jshttp/mime-db/master/db.json
     */
    public static function fromFilename(string $filename): ?string
    {
        return self::fromExtension(pathinfo($filename, PATHINFO_EXTENSION));
    }

    /**
     * Maps a file extensions to a mimetype.
     *
     * @see https://raw.githubusercontent.com/jshttp/mime-db/master/db.json
     */
    public static function fromExtension(string $extension): ?string
    {
        return self::MIME_TYPES[strtolower($extension)] ?? null;
    }
}
