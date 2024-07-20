<?php

namespace Faker\Provider\en_US;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}}, {{lastName}} and {{lastName}}',
    ];

    protected static $catchPhraseWords = [
        [
            'Adaptive', 'Advanced', 'Ameliorated', 'Assimilated', 'Automated', 'Balanced', 'Business-focused', 'Centralized', 'Cloned', 'Compatible', 'Configurable', 'Cross-group', 'Cross-platform', 'Customer-focused', 'Customizable', 'Decentralized', 'De-engineered', 'Devolved', 'Digitized', 'Distributed', 'Diverse', 'Down-sized', 'Enhanced', 'Enterprise-wide', 'Ergonomic', 'Exclusive', 'Expanded', 'Extended', 'Facetoface', 'Focused', 'Front-line', 'Fully-configurable', 'Function-based', 'Fundamental', 'Future-proofed', 'Grass-roots', 'Horizontal', 'Implemented', 'Innovative', 'Integrated', 'Intuitive', 'Inverse', 'Managed', 'Mandatory', 'Monitored', 'Multi-channelled', 'Multi-lateral', 'Multi-layered', 'Multi-tiered', 'Networked', 'Object-based', 'Open-architected', 'Open-source', 'Operative', 'Optimized', 'Optional', 'Organic', 'Organized', 'Persevering', 'Persistent', 'Phased', 'Polarised', 'Pre-emptive', 'Proactive', 'Profit-focused', 'Profound', 'Programmable', 'Progressive', 'Public-key', 'Quality-focused', 'Reactive', 'Realigned', 'Re-contextualized', 'Re-engineered', 'Reduced', 'Reverse-engineered', 'Right-sized', 'Robust', 'Seamless', 'Secured', 'Self-enabling', 'Sharable', 'Stand-alone', 'Streamlined', 'Switchable', 'Synchronised', 'Synergistic', 'Synergized', 'Team-oriented', 'Total', 'Triple-buffered', 'Universal', 'Up-sized', 'Upgradable', 'User-centric', 'User-friendly', 'Versatile', 'Virtual', 'Visionary', 'Vision-oriented',
        ],
        [
            '24hour', '24/7', '3rdgeneration', '4thgeneration', '5thgeneration', '6thgeneration', 'actuating', 'analyzing', 'asymmetric', 'asynchronous', 'attitude-oriented', 'background', 'bandwidth-monitored', 'bi-directional', 'bifurcated', 'bottom-line', 'clear-thinking', 'client-driven', 'client-server', 'coherent', 'cohesive', 'composite', 'context-sensitive', 'contextually-based', 'content-based', 'dedicated', 'demand-driven', 'didactic', 'directional', 'discrete', 'disintermediate', 'dynamic', 'eco-centric', 'empowering', 'encompassing', 'even-keeled', 'executive', 'explicit', 'exuding', 'fault-tolerant', 'foreground', 'fresh-thinking', 'full-range', 'global', 'grid-enabled', 'heuristic', 'high-level', 'holistic', 'homogeneous', 'human-resource', 'hybrid', 'impactful', 'incremental', 'intangible', 'interactive', 'intermediate', 'leadingedge', 'local', 'logistical', 'maximized', 'methodical', 'mission-critical', 'mobile', 'modular', 'motivating', 'multimedia', 'multi-state', 'multi-tasking', 'national', 'needs-based', 'neutral', 'nextgeneration', 'non-volatile', 'object-oriented', 'optimal', 'optimizing', 'radical', 'real-time', 'reciprocal', 'regional', 'responsive', 'scalable', 'secondary', 'solution-oriented', 'stable', 'static', 'systematic', 'systemic', 'system-worthy', 'tangible', 'tertiary', 'transitional', 'uniform', 'upward-trending', 'user-facing', 'value-added', 'web-enabled', 'well-modulated', 'zeroadministration', 'zerodefect', 'zerotolerance',
        ],
        [
            'ability', 'access', 'adapter', 'algorithm', 'alliance', 'analyzer', 'application', 'approach', 'architecture', 'archive', 'artificialintelligence', 'array', 'attitude', 'benchmark', 'blockchain', 'budgetarymanagement', 'capability', 'capacity', 'challenge', 'circuit', 'collaboration', 'complexity', 'concept', 'conglomeration', 'contingency', 'core', 'customerloyalty', 'database', 'data-warehouse', 'definition', 'emulation', 'encoding', 'encryption', 'extranet', 'firmware', 'flexibility', 'focusgroup', 'forecast', 'frame', 'framework', 'function', 'functionalities', 'GraphicInterface', 'groupware', 'GraphicalUserInterface', 'hardware', 'help-desk', 'hierarchy', 'hub', 'implementation', 'info-mediaries', 'infrastructure', 'initiative', 'installation', 'instructionset', 'interface', 'internetsolution', 'intranet', 'knowledgeuser', 'knowledgebase', 'localareanetwork', 'leverage', 'matrices', 'matrix', 'methodology', 'middleware', 'migration', 'model', 'moderator', 'monitoring', 'moratorium', 'neural-net', 'openarchitecture', 'opensystem', 'orchestration', 'paradigm', 'parallelism', 'policy', 'portal', 'pricingstructure', 'processimprovement', 'product', 'productivity', 'project', 'projection', 'protocol', 'securedline', 'service-desk', 'software', 'solution', 'standardization', 'strategy', 'structure', 'success', 'superstructure', 'support', 'synergy', 'systemengine', 'task-force', 'throughput', 'time-frame', 'toolset', 'utilisation', 'website', 'workforce',
        ],
    ];

    protected static $bsWords = [
        [
            'implement', 'utilize', 'integrate', 'streamline', 'optimize', 'evolve', 'transform', 'embrace', 'enable', 'orchestrate', 'leverage', 'reinvent', 'aggregate', 'architect', 'enhance', 'incentivize', 'morph', 'empower', 'envisioneer', 'monetize', 'harness', 'facilitate', 'seize', 'disintermediate', 'synergize', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'synthesize', 'deliver', 'mesh', 'incubate', 'engage', 'maximize', 'benchmark', 'expedite', 'reintermediate', 'whiteboard', 'visualize', 'repurpose', 'innovate', 'scale', 'unleash', 'drive', 'extend', 'engineer', 'revolutionize', 'generate', 'exploit', 'transition', 'e-enable', 'iterate', 'cultivate', 'matrix', 'productize', 'redefine', 'recontextualize',
        ],
        [
            'clicks-and-mortar', 'value-added', 'vertical', 'proactive', 'robust', 'revolutionary', 'scalable', 'leading-edge', 'innovative', 'intuitive', 'strategic', 'e-business', 'mission-critical', 'sticky', 'one-to-one', '24/7', 'end-to-end', 'global', 'B2B', 'B2C', 'granular', 'frictionless', 'virtual', 'viral', 'dynamic', '24/365', 'best-of-breed', 'killer', 'magnetic', 'bleeding-edge', 'web-enabled', 'interactive', 'dot-com', 'sexy', 'back-end', 'real-time', 'efficient', 'front-end', 'distributed', 'seamless', 'extensible', 'turn-key', 'world-class', 'open-source', 'cross-platform', 'cross-media', 'synergistic', 'bricks-and-clicks', 'out-of-the-box', 'enterprise', 'integrated', 'impactful', 'wireless', 'transparent', 'next-generation', 'cutting-edge', 'user-centric', 'visionary', 'customized', 'ubiquitous', 'plug-and-play', 'collaborative', 'compelling', 'holistic', 'rich',
        ],
        [
            'synergies', 'web-readiness', 'paradigms', 'markets', 'partnerships', 'infrastructures', 'platforms', 'initiatives', 'channels', 'eyeballs', 'communities', 'ROI', 'solutions', 'e-tailers', 'e-services', 'action-items', 'portals', 'niches', 'technologies', 'content', 'vortals', 'supply-chains', 'convergence', 'relationships', 'architectures', 'interfaces', 'e-markets', 'e-commerce', 'systems', 'bandwidth', 'infomediaries', 'models', 'mindshare', 'deliverables', 'users', 'schemas', 'networks', 'applications', 'metrics', 'e-business', 'functionalities', 'experiences', 'webservices', 'methodologies',
        ],
    ];

    /**
     * Source - http://www.careerplanner.com/ListOfJobs.cfm
     */
    protected static $jobTitleFormat = [
        'Able Seamen', 'Account Manager', 'Accountant', 'Actor', 'Actuary', 'Adjustment Clerk', 'Admin', 'Administrative Law Judge', 'Administrative Services Manager', 'Administrative Support Supervisors', 'Advertising Manager OR Promotions Manager', 'Advertising Sales Agent', 'Aerospace Engineer', 'Agricultural Crop Farm Manager', 'Agricultural Crop Worker', 'Agricultural Engineer', 'Agricultural Equipment Operator', 'Agricultural Inspector', 'Agricultural Manager', 'Agricultural Product Grader Sorter', 'Agricultural Sales Representative', 'Agricultural Science Technician', 'Agricultural Sciences Teacher', 'Agricultural Technician', 'Agricultural Worker', 'Air Crew Member', 'Air Crew Officer', 'Air Traffic Controller', 'Aircraft Assembler', 'Aircraft Body Repairer', 'Aircraft Cargo Handling Supervisor', 'Aircraft Engine Specialist', 'Aircraft Launch and Recovery Officer', 'Air‰PNG

   IHDR  Ð   P   A/î/   	pHYs     šœ   sRGB ®Îé   gAMA  ±üa  8åIDATxíÝ	œe>ðç­žÉLNrgˆ€Š@@9‚ õï_W¢»Î™!		éûàÐèºâ¹+‡€*‡r'D Ü$p	$ÌLæìwoõ„tUwOWwuWWÕ<_>5]UÝÌt?y«Þ·Þ·«
 """"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""¢¼ˆˆˆˆˆˆˆˆˆ¨Dº§MiP	˜Ÿ?ÌÏæçóó‡ùùÃüüa~þ0¿ÒÙ‘…>? ÇY“þ¡”Ãyò<Dþ¥Wèn|W«—@ÅIê~V+æ(…£R)¼›°ð²ì—wwâÉó_ """""òâ½-jqŒÌ&ÇjûÉã¾ò8\Ž×Éü@™>é,P·€²ÎÏtr´Èfy\/=1«äøm¥Nái9~[ŠkÕ‡èËŠËï]ÉouBa•ÖxŠùåÏ/æçOƒÞ>'™)KûKN»Ëü®2?X¦:óæ×‹Éz8ºpRø¬d4RÖì-Ó2m¿å%Ì¯—éí$›ÏËô9{ûUØSÖ~F¦2Õ›—0¿^¤·ß/Jv‡Ãl¿À^2ËŸ7“ôöèÆÑ’ßhY:@&Sþv”eS.íñ-æ×‹IúSh—mõ¼…F\!kÎ†ÉåÏ³ýB¶]³ÿ”i»þeû¥°qÚ¤UTûOWY!ÊèqÕ¤KAüHæ[jYþ³^ Î§Q_ ƒç?Ý²±Èü–§ÍRø~Ç\u#È»Ëõ65À2wŒdùœÒø“<ÞÔ>W½
""""¢¸¹Lï&ß’é,Y%“ÕÛËåXã9nÛ”V|~öÇo)™_!ówX	ÜÐ6K½Ž¾ ÜùiÜ.¿à¦¶yjú–?˜Ÿ?Ú²}S¦±2}¶ÐË™ŸËD½·º'!œ)}¢£
½œù¹\ªG ¯ÊÜ8˜˜Ÿ‹ÉÏÂ9‚ÉðÐB/g~9$õ ´â²ýžVè¥ÌÏe¢ÞædJS˜/¤¿hð”L£s½œù¹4ê}Þ÷™±´Ã½œùeHÊ ùÇˆMûèq5AA=Ì·3¶ ÷ëùê$PQ¬&=S6û+rlÀfþùÎ¹ê`gÖåúRÙc^mæ]Y.Ñ)\Û1áeOJ4^×âzÕ	""""ª2­ÐˆSd¦Q:­Žíé´ò„è†¯üòuÀl×ò,,‘…ùí³ñ·øT8¿ôüy˜ß>e~[Uþ€ÌÏ‰ù’_¾"Ÿs‚,_ÌÿÉü`:î-4K~
ÊÒ˜bþWæ‡-ù™/l\ øÄbþWæ‡t~­8C>çÅ²tl1ÿ+óË¡Q—Ÿ¿ðòRæg°þðeËþOá?d©¨14æ§Í5IÎ‰_ûÏó‡ jÐÊ¿ðe.§£°^k|ÔßAÅ¹TP5x\rÜÖ,fnÀ–Â}sÕÉ Ï¬‰ºÑÒ˜oæótÆ¼$ì—·ÎQw¼Iêumø£dxŠdø¬LWJ~¯QŸ.?gÀÃÙF9ðîþòóÖ“1/=/Ï$€©±9þ¨F~–ÌRw"Xþüa~þ4hÓq˜_iš´¸œ…ô%v‹ÆíWŸ*j¶|¸CPn¿zù`÷Ë\I'Zõùüì{I»Äõ÷åç/½üßÜ~=Õ¿2½‹ôíú|~—éSÌ8÷%˜&Ÿ¦ÕþâUí—‰ôøGÅóS xKêlÀ \‡àY½¥KêA5­8*¥±ŸJ`´$iãY&tÌá}å‹r‰Þ¶¦þ(sÇõ¶3wmî‡¯!©:@½ª¤¿mÿãÊòþîþƒ—Æ'"""
HƒÞy¸Ì¤é¸zH^·B^¿ZnkÐ‰MHác\§6 ¯*G~†…Á¨Á „ÂÞ:…ÊÂa*}ØÎ½ÈÁòÝòÿNh›©Ö"ŠÊ•_?é?HH~)ìcç—À(9þƒBù)Ü#+~Ôçó3å¯C{I&#$šQ*}ØŽ,6æ—KúRã‹dîË^i>ßã2-—éÉm|î%Ã6ûÙ¾šŸ¹Ô®ÆÏPèŒi×ä§9±èiù¼/KæoÊü{òØe?ßWó»\ï.eÉœå[èŒËuH—¿e2­±·_Hs‡}5¿-uR~Nëåo ]þž³'oÃä×ŽtÛ¯ïîÿö”-ð§0û?%uƒÂW0_½e?× ÊòíH—Íu2-µë…•RfMžÜ~½Ö¯ÊŸ(iÝ#Ÿ÷@ië5Ëÿ÷>÷ú3’Áõò¡
 ¹V^³LÊÝ?d~•ä÷–]§(ùôíöÏ¾—ßxy÷C°§¼ÿŸT«ý'îÒ.¬d~@'¢ª¨kÒûv+œe)|WGäØš_ß<Ký/¨Wý.×çIÇàîüäa³eá²æ™êç """¢ÊIŸ!ó™úçy…9¨ÿ½tÜ‚«ùÜ,äW7IèÖ8×‚}?È½s˜ö³<\Ø:[ý
QžüZ¥ìÂÖ™ê×ˆ’ òë7I”‡säw|[‚Úƒå¯8±Î¯AŸ/oþZ™˜ç¯Èó¿•þ?3¿õ¿ËÏ…0WßÌm¥|¸ÿ‘ÇÛePnJëüšôe@Ãä—¿üiÙ~5n“ò·%ˆu~™õ•òsºc´„”¿þ‚yêY” ”¿kYh,ÀBÕ„2‰ùþÏ\âÞä—{û5åÏÂoXä‘®? ·ü€ßÉöû'Ù~_D	b›_“6ùœ/s?F…Ú#“òÐ‘òw
åg¾ÄuQ¥òã :U™Võ“q¼Ö˜(;¤ÌšŒô¯Ê ú Þ%u¿ºvÜ"±i3*ô¼Æ­ƒ:ð½õU¨(ƒ'é£º†¶öÃ½Hª.eJêhÁõ2÷ÍœÏk<&²Ò5s/¯–C•ò«kÒ'KgØ$ÕsÒ¬ö3pcK-ÆKû¯aÖünj©‘N5æ—ë—ªº‰8Y~ÙTKáfË_1b–_+~-9}#Ï+–ØùÍÇCÌ/‡t~¿•üÎÎóŠäCÍe~y¤·_sÖù·ò¼BrÃ<Ù~ïg~MÒŸBÌ-x>/åòyüánù,)”EìÊßïdn\Žggcºe»ü~30›ëÞ\¢û£Æn¿ô¶ÿ[ÀöKI{à| Ô¿¦þÈ×þû»|¨™åËO£ßnÑ¹öU¦ªüùÝ ùý Üùq ˆB£~²þR¸JYø¬ùvëæð]\¯:AžÔOÔÇË^ý:©42Ëˆ™ZkœÚ2[­y2`’ž"eÑÜ?ð¤NáÔæ9ê}“ôöÒQjî»vDŽg_‘éGÒx(·äW7QŸ í½ŸH[y³œÙ~Ë¥ËûôÐ¶ÿÂžŸÆ2é2Ëüò“üN’¸~*îc–YþŠéüÒ÷J¾GæFçxöEÙ~.ÆBõ *(Òù]¬wB­]þËñìó=ù=„
Št~Fƒ~DÞôs<ó¼¬¿óÕý¨ ÈçWe‘Îo²ŽN{ÿ—kû}F¦S¤þxƒýßŸeîðÏ²þ($Ý~ùòÕ²wdû%[ÍÇ±ƒäw'r·ÿVKù› å¯bùírÆûïád‰kQžü–I~e=þà :Qœ$uM}.—{R¦×·±Öt%0fóôž{	Q¯NÖæž,™•ñ*ÉïæGDD±Ð¤w‘ÜŸË´«Tt?•Ž‚è^2³Òù™Î©}]Ï˜³Œf sä°¾”[˜ò¯kë·³¯†5M¦„«ýÎö_øòk’¼¦gå'i]5øóëÅ]7`tç*L•¼,–¿"E7¿Å2·—ë™.YI~A]ý,^ùuÊúé’ß<æW€¹ço
¯»Öš“Wfb£”¿ Nd‰j~a¿ý_’ÛoùóëîÙÿ±þèM:¿{en¤ë“Ù,ÙÿÍâþ/sæy«ôhsU’*·ÿ´†ºuýM~È™ßJ9þ8qs²<ùq ˆ(†LÔ‡ÃÂíRiìb–3¾µ&•ÂQ<½°“µÉï,3Ÿ‘ß+ºGñ›ÐDDiéoÞ›KKn=øÕØÕZPa¹òK{G¦s±@-åÒüê¯Ð_´4þ m¾Íò–öŸtÌÜÔ<S}aÒüúOÒGI^7Ë´«Yþ¤ý,XºÇ„¦ýÖò7Ik¥óÛÉ,g¬’ã£™_ï"“_úÌóÇ=øñ¶ìl¾&õð2TAò{SÖóÕrTAdòÛ"©ëÑb ïÐ³æŸRþ¾.åïqTAäò™ˆÕ¦Œeo¿ã¸ÿ+ }æþß‘«þHïÿž@Ä þxWÊß™,½ØzæùRd·ÿþ)ÓyÕhÿí>MãÝŒ‘ünÊ‘ßJÉ¯,Çˆˆ(vZçªH}a.…ÿ”ë©½îÞ ‚z%¨?€i"8íc%p7ó#"¢È2uXú²»Îƒ_mA…™{æÊxAŽØàày!Î¯m–zéËa>›¹ÞÚ:ÀP}!Îoóe:u„+?Ù·ìšös˜ËßµDwÙ—Ã|ÁõÔ¾’ß];™÷^mÌÏó”Ÿ»óþ)9¼Z÷F„ò3gfçg.%[¥Ás#ùeJª6tãË²þoÉôÔàÐjž‘Ë/d"T˜Ë:»·ß'a¶_îÿzgÞC'þ‚ìüž¶ë*ž‘ÈÏÜó\Ù—½Ï.8,ÄåïÎOW;?sæù‹ØsÙvwûÏÜòãÈjµÿÖMWø\Ë@¹9þpç·_¹òã :QL™³Ì[:p¬Ì>ìzê°¶þø¨Wæ[jýºpœ4q=ux{=~""¢(Rvæ¾gÙbÎúÒåÒ‚ë‘ßré|9Z:¯x™ÑBBž_ëlõŽ´ÿLûùÁžUmHÉàBXD$?éj{Ôõ”i?ÿÕòü6Ë{¨­•÷bÞ“Ó›»ì÷^]ÌÏŸûÜ}ÏÚ'¤göK¸N½ƒ*}~­ø­ü<Ôµv‰_…ï—ìEèós»F­A£ÿ/ÛîeÁŽ¡Ï¯QO@ƒ¾G'bœN d"²ÿËµýžÀí×ƒVü¹ê_Ç³þð Ö.Ÿs­]n—¿pçwdkW•ûŸÛ¥÷ 5gÿÁ2iÿSíößâ¤Âåýñ¦äw*”/áNDwzà ~X¢,Œ6‹[.g’ÒûñLu¨WÃ.×ÛtÖ`±df7ö?¹ŒÆ7ÎTH/†hn³/¾'Ô}”Æf¨gADDÁiÔß—Ÿ¿t¬Óx	0œ§6‚z—+?ómw3xtÚ ê]¤òÓjÈì]“Àú§«Mƒå×Ó~^"mæCÌrFûy¼´Ÿ‰jˆP~C“zhW'‘Ì4Ë—£<ãõ+Tóó§IÿPÊ¿óK$
+0@:|“ª!™üÌ™ç
ÇIçýÇ‘Pæ!¡Ì¯Aÿ@ÞÈe¬ù®úþ!¡í÷I´áKX’6V–¿óå¸¡Ÿ¶ÏCvüÒüþMÞˆóoG«þÕò0¾*ù5iÓv?_æÜåïy{ð<Dí¿dRã:a]]XZîü8€NDÔJêT—}i³]2îçxÑ¦ê' ‚NÖÃ-ËÎoçŒàf•ÀÈIµäÉà+ôdÉnVO~­R–NÔ5 "¢ÊkÐ{ÈÑß‹2×?cíÛ0·|	Á™¡—;¿wìËóÌóÂ˜Ÿ?Ì¯çøãi¸ÛÏ)ì¿a–zAŠ`~ý§é]jºí3ivÊÌOÚÏHûy-‚ÄüüÉß›Òù|dÎ|Ë%dù™ûÖ®ƒ3¿·P+í—Ùj=B(TùEP¨òkÔæ’Ïæ‹ÿ[oC"}²ï›‚
a~ÏÃ½ýš«q„ôø#„ù='Sæe¨Yx•kû5åÏ\v|¾ú'B(O~­JãÀAæ7^F†`OÉÊ\}ëö«ì{žÆößD_ìZÓeÊ—/áNDÔ4'Õ{–ÆY0NJû—•²ïÿB˜ËáK#aœÌve¬î¯»Cp)Ê(±—ü`)ü'ˆˆ(ÁÙyÕ-ë¾ÁÁs²óKÉt.=b~þD0?sü!¥ß€«ýŒ~† E0¿ÍÓÕ[ZÉ{L¿×-ú«ôg	óóË3fæ×%ÛÆ9aü0B•ŸÆH¸óSøZXÏ•¿È	Y~¦Ï"sð­KZÐ7!ÄB¶ýfïÿRøj˜?B–Ÿù›™ƒçÝ²ÿ;›õ‡Géü2·ßn»o7¤ƒçFžüH[,Øà¶“¤ÒÓÙ q^XÛærîÃ5Þ”üÎCóã :Q±q–zR|÷PÀ‰*}?ó#â>ž¡×Ó3×)…/Mê3@ž(ýÉýDmÒ¨9iè•ú+ "¢ÊjÔ§ËÁîiŽu¦N›§–+?`†tþ-Æüü‰p~ÏRºÛÏâ´@ÛÏÎ¯y†Z"íç®Õ§KÊg

óó§A•.è“]k§c¡z!ŠüŒ¬ŸÿúdYa²tÞ/GÈ…&¿ˆ
Íþ8Éµv®V/!äB´ÿ;Ñµvšä÷„\(òk’¶’Â)®µIÙÿ=E~—éSräwóó`š:‘ÝþS˜öößºé
5	,V(_~@'"êCšç¨÷7ÎTlHò>¥h~óäÁy°”2‚š·Dñ`Ó{ö}Ã^p­¾
IÍöQÅØu”û òe²ë4*(g~¯ s@0?¢Ÿ_s-æÃìs2Ö~Ž~~›6Ùïõ•Ìu:e>óó¢ªù¥qÜù½€Ñ©«[þz˜{ü*Œ’¹ÉtŠ~,@D„"¿ÁþÏ½¯{1QõýŸÊÊïyÉo>"¢êå/ûˆ/±þðJ›³§Ýeí¥ˆo¿Jò»ªòùÉàù=ö˜ñU®'Vcs4Ú¦ÉñÇÇ˜‹2åÇk"""¯®W–e¸g:thcA…¥ó»Ðµöà¡)æGDT1ö7ïu¬Ó²/NªPa¹ò3ø‹T;¨0æçOò“}BÎöså¯B‡üä½æÊoX2ë¬ªòc~þ4Ãœ}yˆcÆEæ˜QQÍü2™ËÅ.P?“éoˆ’°äUÕÌ¯Éî£8Ð±Náb©ÓºÕÌ¯æLÏë4óó¬æJ=îã·	¬?<J·_t­½$‚åo‚kmåó“ÁgŒÉjÿi»üE¥ý§>½ÚÊ•Ð‰ˆˆŠ°á*õ°<8/Y“ÊjR=ù9.å®ÌUJ£ky	ª@^9óÓxL:ðïyÅüü‰E~gª‡àj?[ÝYZ•—üî“¾ÀÇ+»³öí•ÀüüPY_~Xêß‡1U,±Àüü©Z~ZÛœÆ|õ "¦Šåï2Ç’ÆýÜÿ!»þXÂüŠâþE±ýR[w~JúŸPI­0gh;ÿ†iÿ-ŒV~o]ªÊ–Ð‰ˆˆŠ¥0Ë¹ˆ‡$õÞ o”ë²S
c¶™¢÷•×ez79à=Ö±NñÒÙžåÎoÈæçOÜòs½w74©wG¥Ä,¿T*ë½;ô
ùŒ•Âüü¹TŸÇ»ÖÎEDž_Ì0?Ïo¢ÞæÌL::—~v«B~{K^Ç¸ÖFæÒínUÉÏ]¸ú £$ðüôpo¿*šå¯~ ´ä7Ó±RW0¿¤6'ˆ¹ÛÚ¾÷y•+? iãU0gî­É\guã Ozò[™¹NY8T”¡Sõ¨aWê?›¦ÿ{›)öA‘“Â·dÚzŸ/W1_ÝòÆ°Àü¼b~þÄ,?iÿ™3§¶¶Ÿ•}È·Q)1ËoÓLû½¯ýd…|6•ÏX)ÌÏŸÎv­Y%ùÝˆ
<¿˜a~þž_wÖï~¹³Ï·¨B~î¾UQ¾úUòsö-ÚÇo`~^YY}³«%¿H^ýê­KŽ‡ÌobÕþ+W~@'""*š2÷ùµs•}"òÄÎïÇà,wãtB+Ü£s$ËÿgYø=ˆˆÜ”kßª¸¯(ŠÊª›~o×aäóó'vù)-oþw®•cQ)1ÌO!k^¹ö3óóËyl¨q#óëË˜Ÿ?çç¬›~Ëí·˜?‡3]ËÿH¼ü}Å±¤Lß#ËŸg:ël®êŽ†;?%Ëg¢úÙCçîßáö_yòã :Q	ºkðçÌe©€žÔ;€<IÕà6Ç
CMÒÛƒ<Ùv$J™Û1cÕQÌˆ&êaòs”cÂ- o.ÑÛÂ_ŠùyÆüü‰i~)ÿÍ\–¶Ìè!Iû³–WLóëJd}†QÌÏ»Àò34>ãZ¾h~1Äüü	,¿Éz¸l¯£]kÿ„ˆ,?Ó'¡]õp;".°üì>ÅÏ:Ö¥ðD\ íCëR¸¶s=´äçøºù“ßÚwûO3? •¤9©^’‡u™ë:R8äÉÇIµZ^ÿd…‚ª«ÅAž|8]mBf~¢_mÖ}Æˆ¨/KÙ÷.Ë<Þ{óÕ*7é}jf~ïâj»î'/˜Ÿ?1Í¯y¦zYÞÊXeÕºïSYqÍOŽ?´ù,[™üÊßþc~þ)ü2céfÉo%".Ðüb(ÐüôY2MÅåúÄD`ùuIŸŽûòÅóíº+ÒË¯G»Ö¬‹ÃñG€Û¯»Oq-ëß"˜ö‹sû};êõïKI…~5¨|~#eª‰_û¯ùq ˆˆ¨DZã±Ìe¥p¨K3´Âa b8ó³²¾éMD}›{ŸºTw~ŠÁüü‰o~Ú¹/’­ƒQ~qÎï!çbEÚÏÌÏ¯jªô¸j™m`ŒîuT~qD~Mú;2|t»LWIù[&é{ .‚ÈOg`>Ž¸&?÷ÙûKAä§ð9×–¿â|Öµ¼1ÐÏ|%À™Ÿ¹¦zyûÿÚí/¸g,Ú~óã :Q‰dÀ|¹svcEæB…:PãKãi×òA "ÚBc?×š ïÜùiæWæçOŒóÓ
Ï9Wà ”[¼ËŸû³ì‡rc~å1O=‹«ÕR$U
ñ\~ñÄö›yoá:éùÓUÞ‚(î:i9â#øüXk×2Ë_1RØ×µæ)Ä@{Ât—â×êòæ×wûOËÏ üæÇt""¢)wÈÃæ-ËR#? òÌ²à¸š‚ë^Ô++Ç¥¨$¿ÝAD´•³Ac5¨Îü,æW$æçOló“N(ç¥ UVgg9Ä6?•p}ÍüŠP~±Åüü	(¿Ý\ãÄDUò^AL”ßžÎ?ŠÈß¾b‹€òÛÃõ7^EL’ŸÂÞ®¿‹üê7ÛýÏ•Í¯ÛþËöŸßüj@DDD%ù(©ÞøÔ=:eá«²øŒ,ßò®o:îNì*Æ™Jc'ÅIR× Yö¯æ>fñ¿Hª.wÃûX+>0pç§°äóó'ÎùYx™çã¦°Ê-ÆùYÝX“Êülæ³–ó£<˜Ÿ?åç<¦Nab‚ùùP~;:–RÎ>‹((?çU-5Ö"&ÊogÇ’ŽÇ`†Iní•Îo ÌeÜcÙþó›Ð‰ˆˆ|ø`¦2gQÏ­#÷kœ4
ò¬x/‘±¬>¢8iÁrÐvNÏümòólw
ƒË]hyçÎ¯›@Þ1?bœŸÒØ «Êßþ‹sùKÉgI8ÖB¹1?Ê‡ùùL~CK>D\0?‚ÈOc;×Iï!.‚)ÎßÙÁä7Ð±”ˆÇñï2½[éüÚ`öw±lÿùÍ—p'""¢ª¨‘1ôìUäU"}—¢Ll×+©k†&õ™Ã’úTŒÓ	PØ|=cþ«˜ ë@Åpv ¤ð1È#mºþ˜_É˜Ÿ?ñÎ¯¶ÅÕ¬ÐeïüRµ®Ï¢\ŸÕ7æGù1?Ê¯Ÿc©Ó‰æçO ù)×ðy7bs±€ê_÷ñîfÄD@Ûï ÇRG<ÐÇ Òùi`bÛþù±£•ˆˆˆˆú¤¡Ý¸C¥p‡Ü½íHü(lŽùD¹Yˆˆ(hëªé¦{<cÕc """êÓ”…Ð‰ˆˆ¨*,uÉœVgÝ<cß—¡I=
§g¬âåÁÃ§Å±da0¨Ì¯dvó+™ŸóŒ£×]Ô‹ø—¿îN|EæH=<»£g¢¬$?í:ã¨ÎuIÞKtºÎ˜Ñå>;Í.Î›,u»–#¬òùÅ›ÕéÚi×¾ŠzP~±­?˜Ÿ?ÌÏæçó+ÝbT:?‰Ø,†¿üØñJDDDU¡Ìýß±åýy‹PìÙ›)Ýïƒ¼ëÆnŽÌ±5|Ì Hæ¥µjã3 æçóókƒLÛ}²”ÀöˆÓ}0+Í]þjâuŸáæ9Ê´Y&£R”}™ÆÌÌâóåÚ©
t@+<*eð˜ž¥•X¤âsô ò‹3+«.äñ[1‚È/Îíæçóó';¿ò_ÞšåÏŸ˜æg@U:¿z™Ú™_.<ˆˆˆª"•Â>Ž
ï€Šñ™Ìmá]gJáÓ™Ë’ß[ pQXïXÖØäóó‡ùùåÜ§¦°+È;wùKaoP1þåXêÆžˆ‰”•UÊß~©±¯Ê³P¦E²ï;1H~1–J¸êB÷¾ŠzH~1n¿0?˜Ÿ?ÌÏæWº´Ý~©l~­`~yp ˆˆˆªBk× :°äYªûe.K›ð5gRþöw­bjø¬r,¥0Tæçóóç×òþ b8ËŸbù+ŠÂËŽeËÙfŠ2iï¹€_E¹ÍVë±@5Êt!ªµˆ‘@ò‹1ÝíÚ)×¾ŠzP~±m¿0?˜_é†ÍÕ&¿}+™_QXþJ×Ö_òKU8¿„ý“ùåÀt"""ª…ÃËš0EÉÎïEgÒzxæ²ž…‹ÂJ×ò(wÌÏæç—sŸª™_QÜåÌ¯(Ú5€žÂAˆÑ™š˜Åb~þ¸÷E+AÅ¨|~ñn¿0?˜_‰êºí›¿êZÍüŠÃòW¢@ÊŸ¹Ñ·3?%ÿŠð›Ð‰ˆˆ¨ZÆd.(…§@Åøbæ‚ÅüŠ"åís™Ë2 ¾6O»–ƒùùÃüüPXáZ>TwùòNá×rœ¶ßc2l¿Ë‘RXòÎµ-©ì}õ&˜üâÛ~a~þ0¿’uHg+?-ù­@ù±üùÃòWª:Ó%–õ;™8€NDDDU08©Íåsvþd…†î–‚<éÉoÌu5À£ O¶ª‡Ý3×õctøtÚû„TÆšq™	ò†ùùÃüüIàS·g¬Ù—j^†Ü+Kà,;Kù‹ÍeÈ+.w~‘ß~¥ýgÊÀ®Ÿ¬m¬ƒí?Ïrå×máï O%õHeêÂ­R<~ó.°übÚ~a~þ0¿ÒLjttùùÀòWºÀÊßK2u1¿\8€NDDDS]8×¹ÏlJªAžX]øškÕŠõIõÈ“nà+™ËæìsæB×Úûç7ƒ-œò†ùùÃüü™£Þ—¼œg[òf®úÙåïl7éüœWæ±ðUDœ´ŸÛÛÏEÉ‘ß
æç]MwVXùüôÁÒy’:òý×åÓöóó‡ù•îí6(ÉÏÑSÌ¯(,¥¬üÝ¦ÌY9îüTÔ?Ê‘Ð‰ˆˆ(pJá›Žy§ðÌE­ñ'GæjMønæ¥ñggC§è3‡^©o:U_Œq:JÒ¸ÃµæÛ=ÿ†äóó‡ùù“rå§ð-æWgÝ®YþŠ¢q§kù»ÑÎO+i?Ÿç\…[AÙù¹?ny¤¥¹löAw ’tƒÔÏÚW”hÅ_iç»öóó‡ù•N£ý¸ó“î—
ö¿°üùüs,%ë°¯æþÝ}>? Q LÖ;ÉÃ>™ëdî&'ÛLÑ'ÈÃ¾™ëRÌÏ³!Wâ$yØ;s]w‚Ð^½B#‡Oæ ô›Ò©yí°ýñ}T’Æ®Ë@ïFœò†ùùÃüüQYuÓ~hÂ	 oRø½£ü)©»q"Èÿqå·§ä÷DÔ)ö¾Çqÿ€=ëiÿ9ÛÏÌÏ³žò·õöQ²mén©#+Ia|Æß;M:²û¿Àó‹Yû…ùùÃüJ·Ë5@¿ã˜Ÿ,¥¼üóËèDDD¨ÖíË}r¹<¸!©Ö¼Q¸Üµfé¦¤zä‰Ò®ü4îc~ÞiÓ]«A%]­^—2¿Ä±Nc*ÈæçóógZ#?;Öé¬:ŒòI—¿Å®µ“AÞ¤ó{Ð±Nc"J)48–¥ý¼q¦½‘Òþkt,3¿¢XVVÝ·dÃ,ÙÆ*Ick9²õGàùÅ¬ýÂüüa~¥kk…’ü¦8V*æW–¿Ò^þ’ÊŒ»óS’ßDÐÇ›Ê“Ð‰ˆˆ(X‹T{
8æ²M
¿²º².çDy½R'Ž³÷4pÈ“m¦hsöÑq™ë´Â‚<‘üŽ—‡1™ë¤üÝ‹Ê[àXRøíKò†ùùÃüüP¸ÖµæKh°÷%äÍB×ò±hÒ_y£1O~võ,} sCõ´_ÿîRÿ^ò„ùùcòÓÚuõ†„«n¬ŒE®eSDî*&UÌ/íæçó+Ý.×ht¶ÁŸ–Ñ´…¨<–?XþJ5À>ûÜù7L~ÑÊo§iÚ”%?Þ?‹ˆˆˆ(
’ºfHV(…Í¢J·â^Ø`á$U
Ô»ñºv›ð”´~2‹=ù=#ùf~ä.Ïo¸Êœ®4*J+4âi™94cå+h“ËEªT óó‡ùù’ÔZðŒÌ”±ölÄa¸^u‚
ÈYþ^Æ@YNªPa—êÒYv¨ÔÿK±@½‹¨É]ÿ¾(õïA•¯c wûïÉï`æçÁ]7d</¹Ù·ßú¤ý|•ìÃƒiÿ½ 3#3V>/õÇèÈÔÕÏ/Úíæçó+ŒºY£~Ð`<çÊo…ä7šùyÀòWºª–?ùÕ‡KËyŒ´œù­–üŽJ~‰KP?pPyòãèDDDD0¨åá@×ê)üõfÈö¸B;pÌ7I'3?ouaÜåÏ¾VÏößp_vmÔÛï‰
b~þ0?_Ì>Vã
×Ú1M r–¿ýÑÂü<»F­ÆBuk$ÏÅNûÒ“Žú×²ÌåÜ9øëE®öŸä×Èü¼2Ä®ëöÉ\§ìËñÖþs_¶ý lK¹‡ ¿H·_˜Ÿ?Ì¯tC§Ëñï`»ÿ%3?-ù]Éü¼aù+]uËŸô’
ÓGv¥ë‰èü¶Ÿ%ƒçîòWr~<ˆˆˆ(ä†LÕ‡kÇ¤áVÓóÍIó-Èû>š¡N4xªþ¼à,e~¥‘òw¤”¿G«ž_“¾KþOËXcìŽ—A‘% Â˜Ÿ?ÌÏŸFmn÷yé¿.é8óÕ Â²Ë_·}nÈ<õ((¶zêß¿KÕ›`û¥xC®ÐGheçÇö_	MÕÇJ7óCæŽ¨[ò“Ç»7\¥NGô}R_œ˜±¦Sö‡Çb¡z!šü"Ú~a~þ0¿Òí>Mã_)Œ‘ütåw—ä7Abùó‡å¯t“¥Õ…;³Ž?ÌíTBœßö’ßæ2çÇ3Ð‰ˆˆˆBlàd=\:Oo—ÙšŒÕ­Ý	\ *hÀd½²ókAç£Ú&éíq¹>È¾ÄqHõ”¿?Â•_Jã?´&ÈÏÍkLn7Ëñ. Â˜Ÿ?ÌÏŸþÎüjdß|+.–}4¦ð#8óKH™üƒtnÅ’i¿Hý{Ì¿õV¦þý!¨ ;?…?!»ýÂü<è?Mï"Ï7ÃÙo¼Y§ëÂ ý@¦ÖŒåZÙ'Þ‚F½#B*TùE°ýÂüüa~¥“ÔX¯°«äwœùµÊg¹Acùó‡å¯tÿ’#µôßt(yo!Ío¤ä×\ü8€NDDDRÛ5éÁ
¸[fÝÔË6%Õ« ^»\o#½Î–Yg›FãGIõª©AŸ†.¼%ùçÐŒGd }„Ì¶Óô¥pÜåOòÛ8S­AÐªµòÓ}àc¾ ñW„ŠÞ ","˜_¨0?æª×$«K\kw•a;Ã¸ÿyj²ËßÎèÀ½Ì/†’Úœ1m_0‘mHêßµ ^™öŸtvÞ	æW’¡I=4Ñ%u›;?ÙU%?Sÿ*\æZ»+Ì1RRBÈ„2¿µ_˜Ÿ?Ì¯tI|{FcX¢Ó>þÍÌÏ\òù¢Ì¯ –¿Ò…®ü]oÎßÆkæo;Ök|Z¦{Â–ŸùòÁÛÊèDDDD!d:ÿ6×â.é0íxBã–3Ôzµ½t¨uÔà>­pxæz9¸AÞ~Žê3WègÏ)|AÒïÀ=!aÊ_{—Ýù|˜ë©?T5¿êWòóF×ÚeîÞ0Ä™üNÖw¶Ô¡yðzíà)z_„ADò-æçÏBõùy‹kíhÙÿÝ‹0}Ù$¬ÒåïÇ:…C$¿;1^×‚b£;—öÊŽ•7KýûKP¯LýkÚYígà&æW˜üèì„¹åÆ™ë•Ærüñ+TË|ûØÇ]†<¦/…6¿ˆ´_˜Ÿ?ÌïoaÉÏ^^'UHg—¼'–¿’pû-]hËß|säÊï žíw’ÜÒ¾ sæù
<ïÊÎO—#? …ÌÀF½cGÊì1®§ž®oÃ¿z5 IºµKáî|–ü5c<Â@a½kÍq¨ÇC÷Ž*³Ë_tHæ*›ñ}TÛ@ûßp¹kír÷H.'f.+ù-‘ãô=Þv—„EÈó=æçÏ@|O~>éZ{¤l'KÃ|9ÞÐ0—ŸVXáZ{4†8î/O—ÒÒFÐÈì‘üÇà¶ÿ
1í?©FvûïÉÁÍ!h¿„\©Ãdðãdç·¼MÚÏéúã)×Ú#‘’c¦Ü$ù…ºýÂüü	u~f€m€}+w~GJ~K«Ÿ9suÞfìÚ™»ÿ`Ù€û½WËŸ?!Î/ôå¯NÚ£ù·ß%hÅ®˜V½AtsÏóµ’ŸžW,? …HÿIúH]+Óì3gÖ¤jpÊú…ª”Wÿ+ôçPƒe2;ÊõÔK©n|ù­kÕf„A'&ËO÷eÐGËáÉShÐŸG•ô”¿Èìg]O­1ù…¢ü%U«ü›ÁéU®g”ü–Ë Ü±¨Éï(y0åïÌõrHÙ†°q~‘Àüü1ùc‘½ÿ3W»X^Íý_$˜}°Æ©ÈÎ¯ísÕkZá»2»Lê›¥þ=-4í—ÊÛþÓX-ùÊüzW?I«jìÎñ]O­’üN'½ï®.ójqrµŸkåß¾IÊ@•D&¿¶_˜Ÿ?¡Ï/©€Ð"ù™öŸ;¿ƒ$¿eÕÊow|{¢cTÂ®?Üù­”üÆþ“å¯WÜ~K‰òçÜ~Wºž5Ûï2ˆ~¬ýEà@ºü­I­>îÈ›ßË©Î(G~
DDDDT}I]SßË¥q6M¦ZÕÓJ32¿¦+1›§«·@¹¥ó›Ô“_"ù™o;k,–¹½\ÏtÉ4K†\ç`‘
fPÄä×Ž‰’•É¯&Bù™3åÝ—GOÉ4#ÐüÆëÚúOÉö«ìCLgùVw×â¸Ö¤ú'Â$LùEóó§÷ýßtlÄ<\¯:A¹¥ó»	éÎ¢›° ì‹<õ5Qlÿå3Qï‰N|
ƒñ”´&RÂ]7`&i…©æn§®üVI~'Dªý¬‘Ä&Ì¬þˆn~áh¿0?¢–Ÿ`3g«jÜjç'ƒoê"Ôõ7ù!g~+»jpâæ$Ë_^Ü~KÅò·uû½O–ös=›’7nò›‹„ü¼¶²CÎ;MÓX¿õõìò7%G~/K~'•+¿Ê~""""ò¤~’þ›4ôN6ó=>ôÌ?­kqZKR½Ê©n¢>IòºV¦‘fÙ•ß¨ÅWš“ê=„‘¹d±Â=r 2*Ç³/Ês—a¾ºT?Y'‘dv€YvägÎˆ×8¥yŽza4Io/Ý¥w!ûr]Æ+2ýÔ}¨ )'(?‘Èö7Ë™ù™3*$Ã±Ì/¦˜Ÿ?“õp,ºÈºâŠñ¼l?—b¡z DD9Øõ¯Âsµÿ`®h¡qFËlµQÐ¨¿/ï÷zùæ</?/’ößÃ¨ »ýüTÚ0û˜ew~2„zhÛ/é[~Ü‰ì+&/H–Iýñ*(Òù…£ýÌü|ˆl~·Ê Ü
ì ù™í7W~«eû ÛoÅòÛå÷ßÃÉ×¢<ù-“üxüÖn¿¥‹tùÛºýþæîÙÒùÕâ~l–-¹¬éZ²ƒÉÎüÒ“òäg¾Llú_Îhž]¾ü8€NDDDTeuSô¾ª+]ßš4Í¿[[úá»Ãe¯BG«º&œ„„}ÖþqfMV~À--µø^èókÐåMÿVæÆåy…¹Ÿö,Ì7ß–.×†v~'H~%ªãÍšÈæ—ÔÐ"ÎÀ7s>¯ñ˜ýè¸e<C³®IŸ,ù™³ÞìK¾eå§pSKÎg~¹”Îï–ø ògW)¿ØHç÷™;'Ï+üæË@Òý "Â'õoþöŸÆZ6Kû%J—moÔ¹nŸ³X>ÔLÙ>TÖößDœlÎx³¾`ÖähÿÝ(í¿ñ‘h¿´JûYãì<¯xP>Ô¼²·Ÿã”_àíæçOLò³/õŒ²ýþùóû»½ÿ+[~ýv“ˆÎµOX˜ªòçwƒä÷–¿œ¿”Û¯/éüõòçÜ~ÏC®ñå-ù-Å}8é+ê$K†)ïí6¨–åP‰#ìò7%Où3ÿN7¶˜{žO/o~¥½s""""*ŸËõ6õÞ‘F_³(´ËBcóLõsƒtšîÛ­pŽ4šÍÁÎÓhÞÒ Íh@·(Zfªß"Jõ¿ËÏ«eêŸçkå°à×Òiü'ÌS/¢u“ôˆnqð-YÜ/O~æ€ã’ÖÙêzD‰9{ø	zËø½ÂÝ‚«ÕK(AO~çZéƒí}òægáÂÖ™ê×ˆ’êä·>¡1¶u®ú¢.€üb­IÿPöofÿ7 çóÅë‹ÛT7ˆ¨Ïé©?Î‘úãÛÈ_ÿ¶ÈÃÅÒ~ù¢¦Qß!?ÏÌóìj™~‹nÜŽkÔj” ß$mÎÒ?Gê oKP{äÉÏ|áàÂÈå×  oþZä¯WJrƒ|öÛ˜_´_˜óË©Éˆ;_æ~Œ
ågß^íÀHù;…ò3Ç¿±üeãöH~Ñ+éí×äg¶ßy^µ%¿[Q—ì¡ô”ü_õÈ;*½“üÚ¶6 Ó‚ê4"}•!“ß·
ägÊ_Eú_8€NDDDu“õ‰Ò ¼T¥ð~*í3Õ+è¤IÜ„ý¤A\+MéÒ9¸Ñ^Ýƒd xP"…}t
{«F+1òÌÎîFsæ¼´±ÿªeð\ò[ƒ(š¨÷–Ì'N(ðÊ·ezX>üs’ÝJÉê5YþíØd?[#	&°}M
»ÊqÊþ’ß(KãÉg·ùÝ+ù]Ùüô2x½H>Èi^in‰ð¼n…¼~µ„°’]J24,–%ö–ò7Âäç©ü)Ü#Ó…}>?³ýƒíüÒ‡õ’ßÚæ¨såÈï:µ}•ÉOÙgƒäÞÿi|©Ò—ä%¢¸Do›è‡ÏKý±¯Ô‡Jýqœ¬Ý%Öí¿KôÎÒî0Wã8©À+_—»TŸ– VJ½ñ†Ì¿'mÇ.ûYÓ~©Å„Æ^Ò!ÑŒê¹ÒÐŽò»[þß	m3ÕZD‘¹|ºý\(¿uòa‘¿Bæ_–Ïü¦üïKzö³}5¿r¶Ÿ™_o˜ŸÛxy÷C°§¼ÿŸT+?q—Ô²üqû-ðJ–?7s6z3¶äw*zkÎÌïù‡Þó3gß]éüˆˆˆˆˆªaœN`wsYE{`ÍAõüÈw ‘cþK†â[g«¿"õ—åç,™C	ŠÍO¦g•…i­³ÔŸútù9C¦CQ‚bó“#·g®”üîD˜Ÿüçæ9êÄ‰¿ü>é,P· ¯Jç7W¦ëÇ|õ$ˆ(¾¤ý#uÃŸ¤z¨3‹ÚÏK=2±uŽºqÐ¤ÏFÅL™;%(©ýL•üîB4è±Pvû™ù•¢ígæ÷‰>ß4mÎ!+sW!¸üVH~W²ü¥qû<¿ø”¿ôökòÛ²ýª"C±ùéŒòw7*¬èCDDDDTúHi>‘ë©"Ð‹åaAûÈÀyÜî/lŸ?VŽ®.éDùÐžÛîÅä§S¸®£?îDR¥+’_#N‘™FÉïØ
ågîO?¯}6þËòWùü¬QøfËlµ±ã+¿ôµú4É¯Áîˆ™ Ó^Ê¯±@ÍÅšjÔ•íýËëßRÿÞËú·gÈç»=÷y÷ÊSý«åX’_\ÛÏImÙù— Ç—t{ÃüŒ
·ÿ˜_^ÌO>ÊgäcžÃüJÇòçóóe7Éïl;¿†Œü<eè!?íÊ/°þÏ…€ˆˆˆˆ¨¬Ìå²€5¹Lò6 M£YáY™nµ4nn›§Ö¡/¸Lïß‘9si¬ÃaŸ¸›Ÿ‡ün—å›ÛçªWÑ˜ü”}ß¬³diJÍHÉü
9T»ÝªÁm³ÔëèÊ•ß–òÜ&¿à¦>µý—Ð‰¨O²ôïdøó;yê¦ý"í¿ûLýq©!5Æ9Â×eéàB//Ø~î°¸¡Ï´_õ^RvÎ“ÏB
‡a~.ån?3?æç•¹4ôÇ`~~°üùÃüJçÜ~ÏÄÖüòÖÁyò3ä™ùU¥ÿEˆˆˆˆ¨Zô¿I‹ôG2·³LÛoY­ÌE šåñi5¿’PX©5žêîÄR\«>D_6QCÆH>‡ÈÒ~2”i;9¼,ëÌ½§M~]òcƒ<¾%ù½!ù='ù­èNàÌQï£/»Do‹Zsy|mç·¯<ïÉn y‰«ü­–üV±üõ`~þÎ—p'¢¾«Qïh)üXæö–úãµ„…—ÍeN»Û±¤Ï×“ôöÒº;Fê‹QRo˜K”ï.ÓN2}
=ûRï¶ôÔ¿ë%·U’ßJÂÓ¬‘Î¯GKv¦#ß|á32í"ÓP™jÌK˜_/¼µÿ˜_>Ì¯tã´ÙR‹ÊOWYÌo+–?˜_é²·ß}QÜöûHŸ/DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDrÿ½Ð»)‹yÐ    IEND®B`‚                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  ÕIDAThí[ilc×uþî[øÈGŠÔJ‰¤rF£uF£Y:žx6oñŒÇM]§p
4@Ð´(’E‚´(ZEá¸	ìüHƒxwAãxÉLb{*×vämÆã™©”Y2ÚWRµp§¸“ïÞþ(Q\´ÌH*PøˆûôxÏáùî9ïÜ{î»>ÇÿoíT~¥gl_2E§””-J“)¥¬ÎRájm¬›éêþí)ž#IÂ‘¤Jäý‚(Ì‹¼8¡¹Ë÷Þý»í²IØj…W{'ŽFâ‰'‚áÈ~‡ËkK$S¦D"%'“)1‘JsZYC)wq!DžI"OU*1%Iª¨¤f.¼Û;aÐioiÕÒÅ£‡lW·Ò¾-#üéõñ“¾`èSs÷…"±º`0¢I¦Ò9½¢±O (
Ri…ÄbŒÀP(W‰B»Á }X¯Õ|åí÷o^+7èÿíØ‘]Ÿl…÷LøúM{û¼7ð­Içì£n_ÈZˆñ +Ò› žH‚1€Rºto¥/! c@"™Â¼; ™›÷7JäÝ¡òèý»o½g¬(}ñHgCß½Ø{×„{zzDÏ‚ôãv×“óžP‹/3“"™!O (£‹\	–9’„"| Ù]VZòp8züÝûÞªÐÆþñðáÃ©»±û®÷õMÔŒ8}?tÍÌ=5ïh[´x©YnsÁ $I²èaÆÈRî\ÔCÀ
(ðú‚¢×Úg¬ˆ4ÆLeÖ¾¾‰ï¶·Ûf7kû¦	_ê=Ô?>÷¼Ýé>\ßbÉ>Ç…K!Í€Q¶tŸ-Ÿßµ~ŠÙyŸ&‹=“J¦L—zGÿúÄ¡ÆÞÍØ¿©ié£Ï¾45ãû§IÇl{<ž$¹å†$c’JDi©%Z-Q€^'£c_zo N#•VN¥±‰"X@"™Î’_Ñ™µZdÖúê¾:Sõß>ð…=oo9áKWGÚ¿³ÏZ©B”¹æ85Æ2”—ê¡+ÑA§“¡VkÀó<8^ / ”‚QTQ (
âñ8ÂáÂðC˜÷ƒ-'¶ÂÀ»L“µOŸ8º1Ooˆðõ¾‰š‘áé·û†‡3dWÄW‡tUe),f#ªª* Ó–@”¤8Gˆƒ€MB‚„ÀÏ@¼‹Ò¬‚1”1Æ¤Ž2VŸL$Ô‘ÈÜ/¦§çáö	ñü&à8‚½-=Mæ/ÙÀ3½.ážžqÜ•~ãÎýÉÅ0.µ$¢iwªkªPZVFQ5$Üâxr‹#ÄÆ¦@ÎŸd/G@ÄÊÓiZ†REÂTaûÓûÓ©d³ßïçægÝ³#‘H` P«UlosÃ[»ÌÂWÖËÞë&-—Ï9ŸˆÆâ$/§,Á ×¢µeêëê˜¤VOòéâ¹Ä1Ül¶ÊÃ„bs€3ócŒMD›x‚N‘—N¨ª«/5¬jY"ƒã†"™ž«•Dãdxlê	µÚö,€¿Y‹ÏšþàòHû;×§g½òòï¬š7	Œ•´·6Ád1GU*ñW"Ï½Ž¾ÛR§›[K÷zœ
Wƒr§S
}4™LýÁÌ´KîÁœÇ¿j#de³˜+¢Ú[<t|OÑÅÉšvû<ßwº<òªI‚­Œ’¾DÆþŽVÔÔ˜<*‘ÿWò-òÈ½Í`iÀ^îŸŒ|¦‘DGm]íŸ	¢PyõúCÑå~Ùs¶Óå‘kMžïx²˜^®ØÝŸÞ>9<æ<C)E¡J%à@GjL&»(òÏÉþ…6«vKÈf£Íª‘5ü¢È?Wcª±Øß
•(´‰*#cÎ3ÝŸÞ>¹iÂÓ.ßæÝ~qqúXü,_3ŠŽ¶FÔ[ë½’ÈO†ö'Ö«Éf`­Ñøeh"‰ü÷êê½í +@˜QÌ¹ýâ´Ë÷ƒbº
~ÿò­£CcÓG•°U
)¥¨®*EsscL#‰?R3íÏm6’[m9l6’V3íÏ5’ø£ææÆ˜±ªtÑ6¶dcÆNÆ04æ<òþ‡·ŽÒS°ßþŽÏâ³•PÆÀ(!@çþ6¦ÑÈçÔÿâNÍÀf#iµÄ¿¨ÑÈç:÷·1JWÂ–®ýþÞ
§Ž‚„ŽùÓÙ!œ6Sj-f;áÈóÛÆÅ`­Ñø	Gž¯µ˜íSež}™Ãé>]H>ðûßÞç˜ž×SJÁ–<Ì[¾ÞÛÖÈ$I}v;ÔFÑfÕŽH’úl{ÛV(ÇPJá˜žÓ¿ÿñí}¹²y„ƒ‘è×¢±xáÌ,
0™L#àèË;Cmpôe³É4"ŠBÖ3¼ÒFc	#Ñ¯å‰åÞÂ.{T¡Ë-U(Ìæ*hu%çîuQ±h©ÓÍieí+SUá)ŠRáGsåò	ÃÖå$Ò»¬…€¼¶3”ÖaxÍÚ`¡Œ.&TÊèrKE0¶æÊä­´<ve¿iõb½¼´Ô×\/o#‡M¡Ù&9¦>Ji%°¸‘@@–7¼6W&ÏÃ¡P„[LõK#•5b’$¬Qì8!L­–ú‹Ed0Îã—w#‘ÁìÅ¥²Z}mg¨lY}­˜½ÑX<¯8ÊéT2FWöš²CDP	÷´Eº®oå\TRÉïŸ{ƒã9¤Ò+‹'–U{†üwµ5ºùRÂçdÊGNÌ_WåVK"b±xAåþ` ~+Ý
øƒúåˆ$`K- IÊ¯~óîèt2¼þ`AåÉD2oåòd"¹²¥ÎÞí ×Éyýó|^UnX™×²ä”Rø‚·Ëð»…/¸p°˜½•†¼‡;°ÑX‘Ì­>2
Ç'6ÆXÑz§ÁãÆ'§mÅì5+’¹2yÆ›ÍÕóÅ–jvÇŒôë‹W‹î&ì4~}ñêI»cF*6-™MÆù\™®º®–T«…—FãIÌz½ßÞ:ëcÖíýöªB'«~—Ô*•×seòËZÝÅÝ¶Ú¼ê#Sh÷M>òê…KM;C©8^½p©©dò‘lûKÃÅv­²V1W.éEH÷ÁméìÚ2»ÞŸtÉ¿ÿÙ¡U¿ÿÙñI—\ìñ;ØÙ–æéÎ•Ë#ÜT';­Ö†ÁÊrCžF”t7ïŒ|ùü›ŸÛjù8ÿæ'ÇnÜþ²’VV%)eéº¢Ü€kÃ`SìÌ•-˜qµrÉ¹÷\TÀ)K¤J155§º34öÓ×»oZ¶ŸÞj¼Þ}ÅrgÈþS‡sV•›c2×'î?­\r®|AÂŒ±7:;;¼³1o‹‡1EQÐ{s`¯}pø¥®®.i{)® ««K²:_ê¹5¸7ÛžìjÉbªBgg‡—1öF!	·íÒ•èõç~à(XÁg$‰’ë½ýL%~¼¤»ºº¤‘©Ä¯÷ö?‰DI!›zà(Jôúsm»tc…ô¬±ˆàÏ¶µ¶L776,{8÷ãöø¹ž_ï]xùõî+ÛÞ¯w_±ô.¼ü?7¾îñ¸’,«ehnl@[kË4ÀŸ-¦«(áÖõ,Ë/ùâ)VYQVÐËŒ18œ³âÕÞ;O÷ÿvì•×Î²å‰ìµóŸëë{åjÏ§Îqõï¯´U•e8óÅSL–å—ZÔCÅô­ùö°o<jQÞ½v­§ýï ‰í+Ëj¶¯}Ï˜¹º¢Ë\Výâ3Ïœ¸§­ W_½ÔäòÏ}Ë5ç}üö‘Ý±hœy=NÆ=õŽ9ÜÆŸnß%OÓ»îñA{ä«ñxìŸ?øðRÕ[ÿõ!RiÅÔYª“õµ5ýæšÊÿ®¬4¼óÇO=t™R¸BÏcŒ{åÂÇ=žàc®YÏ‡s¶mjzNµò†0—1ƒ(
xòññÐƒ'Üjµæ/[´¿Xë7Ö?À¯sDÿ*ý}W×{òG—{Z:a—ˆeñš6«%f,/u•è5Cå†’~]‰¶O-I3Là]*mÒ Éˆªž¤s$‘0Å"í¾àB[0iöø‚æ‰ÉiMæ¤)b¦ ðxàÄïáñÇ–ôÏ†ëå’¿Í±Â 0:5$Rì9ŸÛû_¾Â|é:Â‘¼~yg0 ¨ÕL5•ñRƒ.$ŠbLøÇq!  ”êSiE›J¥4Á`X?3çVÇbÉl<q  %:-N<‚SÇïWÊ«*~&‰äï-ráB~³„``*f¥?~ÿÚµ¡ûÃO1;ïÙ€úÍœãZG~iDkŒxøÁc¸ï¾Ãiƒ¡äMpÜw[ë4“á±©sZƒŽØÊè7£‘ÄWoß¾¥ýè“Ï088ºáƒe¹Ø\Ž´4ÛðÀÉ/ £cDÖJ¿àw¶¥^sc£6}^z`*feŠò§©4ýóÑÑQãßàÖíLN¹6«jX†:3:;Ú°w_÷Ì‹÷/„çÿ}£žÍà®ˆNGi…ýI*E¿‰D›GFF¹þþAÜ¼=ˆÙywÑ³–ù9v€&@±
-hkkÆž={¨V+‰"wVàÉnä™-dÃ]¡‡1^gþ¡BÙÃi…>
…ê†††1>1‰‰I'ìÂ‘èªS6™kRä¸mæ;YÖÀZo†ÍZ‹]6+š›› ×ë§ž{‡çHw¸A>¿^6ÞrÂôG-§œNSòˆBé#áÐB•kf.×,ÜnÜn/ü ¡0"‘(‰ÒKûÞ¢(@¥¡ÓÊ0èu(5èa4V¢ªªf³	f“	:}‰›ç¸ßû¥ü»k-*v„pöx3~XI³£
Ã!Æ˜-‰jü~B¡Âá"ÑRÉÒÊ"a ªDhet:-ôz=ÊÊÊ!kå!d‚'èårº×Z.n[þOýãáÝ„#‡ XÊöPÊZ`dŒ•2-ca FÒ„ E"„ æ9Žò0É(ë-VõÜ-¶õ¿Z†§¢µ
¥Í ÄÆJÁˆŽ1&0 CŠ’aa có<ÇÚ©øŸãsÄÿ‰zfIÐMùm    IEND®B`‚                                                                                                                                                                             ‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  lIDAThí[il\×uþî[æÍ¼7œnCÎ—‰;%ŠZ*+¶µx‰68nêºER ‚.(’E‚´(ZE¡¸	ìüHƒX©» 9^"5vTº¶CÛZ,K,UIŒ¸ïÃáp™!‡3œ…³¼{ûƒr8‰dÂðp/ßÜsîùÞ]Þ9÷Ÿãÿ7Èv*¿Ù>¸7§OÆÕ¸#O˜cq5ŸQ¦Q)Ó  Ï‘áHL#ò>A¦E^ÖˆÜÇíþÍvÙ´å„oÝ>Zˆ>ç†öÅ¢ª#‹[¢Ñ¸‹ÅÅh<Á%â”PF !DžI"O51.Iš°¤&4’0lÔ+÷­tåÈAÇ­­´oËÚ6tlÖøã`há±@(Rî÷‡t±x"Kw,¥[–roQ€Ñ¨DŠnL¯hoÿúÄá]×¶ÂÎG&Üvo´qzfî›~è¤g6`ÌGøt«»K%œö+[,€1cž¬FŒFås¡éÕÃÍ•bïCnoo½óÒßÍ‚ÏO{u³sA1ÝàtdŒgÚµäóMyqsa^O¾Éðn¡ùûC‡ÅÆî‡"ÜÙ9\Úïšý{Â÷ÂôÌœŽ±\#ºé„	È:S|ÅZs¡)b³ä_®.+øNc£cr³¶ošðõ;'ÝÞ—G]žãþåé›KM&ÅGk¿X7æéÔÊ²â«¥Ö¢¿<z°êÎfìßáO>ëþÒØÄì?Œ8'b$Ý lkPÒˆ0™ôÈS¢ QàÁ€D"xBE"žÀ|(Œ¹¹yDc‰ùéÐjEf¯(é,·”üõ‰/TÿjË	_¿5pp`Ôõ‹ÁÑI;UiVƒ’uŽãPjÎGÉ }žz½­VžçÁñ<Ç/ÊSTU¡ª*†0?„ÏÀä´ŒÒU6¤÷Ç»+-#U•e/=²±‘Þá¶ÎáÒþ¾ñ_uö:%É®ˆ¯ž¢ÅE&Ø¬fB¯äA”¤Ž'#„ø	Ì,J³BÆÏ32rÊXE,Õ†Bóðxg0>>wÉ)žù€	8Ž`O]e{UõK‡7°¦×%ÜÞÞ.¹o?è}~qg‡VQ³»%¥Å0åçSAÔô
÷9žÜçq‚±1Ì	ç‹1ÝG@D
	šÈ"aª²}	†}‰x¬ÖçóqÓ“ôŽ"e}À  ÕjØžÚÊwwY…ß[o÷Ö#ìžÅ¹¾A×sáÈÉµ‰
êëv¡¢¼œIZíÏ‘ŽëÃ½Z»ÜGÉµ‡¸’0ÆHïp¸†'hyé¨¦¤ä¬Éh´ke‰t÷Á%[®V^ }ƒcÏiµŽs þj->kŽðG7úï>ènŸœ‘—ûYõÞ$0ÑX_‹ÍÖhÄÿyîpôýºrýÔZº×CÏX°”;WéÉX,þ;ãn¹³»S^ßòkŒ1B’¯E›µ0¼¿±þðÓOVçtNÖaÏ¬÷{.·W^õ’`+OÉ'c_S=JK-^Èÿù÷ºJ¹ÿQˆ&±ôÀ.t„>ÓI¢³¬¼ìOQ(ºÕvþ@x¹]ªàr{å2‹÷{ žÏ¥—ËõCë§Çú]§)¥Èvi4ö7Õ¡ÔbEþ%YÇ¿Ò`W¶„l*ìJ¿¬ã_Eþ¥RKéèþ}õÐˆBV›¨JÑ?è:ÝúiÇ±MwÏ~Úã)¥`K×rQ45T¡Â^1#‰üwe(?¶—ê|[M6	{©Î'Cù±$òß­¨¬˜ij¬XÂŒbÊãÇÝ³ßÏ¥++áoÜ?Ò;8~xQ	[¥RŠ’bjk«":Iü¡–)?u8HzX´åp8HBË”Ÿê$ñ‡µµUs±iÑ6¶dcÒNÆÐ;è:üáÇ÷dÓ“•°Ïüö¬/À§*¡ŒQB€æ}L§“/j%þÕ ›„ÃAZ‰U§“/6ïk`”®[ªû|ó¼/üv6Y	;Ó§R§pê´±YŠQf³ŽŽ¼¼Ó8ì¥:áÈËe6ë¨ÍR”a_òrº<§²ÉgþðjÇ^çø´R
¶4ÂŒ±åúž†*&IÚóÛ±Amv¥_’´çªY¶=†R
çø”áÃ«{Óe3ûCá¯…#ÙwfQ€ÅbéG/ìµ5ÀÑV‹¥_…”5¼R†#QøCá¯eˆ¥ßðÏO.¨J—KªRX­ÅPôyÕ©Ø
Ô•ë§YyÝf)ÎþŠ¢þ¹àÉt¹LÂþ }yH›Ò»ì6•€¼¹3”ÖaxÓ^i£Œ.n¨”Ñå’2
¿?hO—Éð´¼s….‡e«õ“i¶¶BêÛF›B­CîuŽg)¥E –OOØ’ï;3PÒe2F8q‹[ýÒ“Jyb’$t¯ì8!L«•ºrÍH ˜Á/ãF8!I‚©Î¥²V{{g¨l:Y{;—½áÈBFp”1¥ã±]
¸Ó¦ˆ éˆt; \çÊ\xLÍlŸ~ƒã9Ä+ÎK‰=¾ù‡:ÝN|óñ$áôSPNÌô«2k%‘ÈBVå>ÿ\ÅV»ðùç*–g$a [*HRfô›qG¯—1ãógU‹Æ2<—ÿkÄ¢±½ÉoUË“q©4èåŒöc^\`\y¯¥8ä”RÌúçl—á‹Yÿü\ö3wa³¹0–}$¸Œ±œ1ôNƒ1ÆŒ;rÙk6ÆÒe2Œ·ZK¦s¹j£Î	é—Wnå<MØiüòÊ­c£Î	)×kÉj1O§Ëdáâ6­¤Y-¼¤0¼ÃäÌÌ·v†Îú˜ôÌ|kU “¿KZÌæ¢¶t™Â²¢¿²ÛQ–}$í®Þ‘gß¸|½fg(åÆ—¯×tõ<›jßbh¸XV;Ê +†+ér™®!­ö7$RcËÔxshÄ-{}¾s;C+7¼>ß¹¡·œkùhnHp„´¦Ëe®)—]v{eOQ1C	£j"{ú¿|éÏžØj™¸ôÎµ'îvô}YM¨«6)u©^X`D¥½²§¦\v¥ËfÝq9ïâÑÇ,*`‹ŠÔ%Ò*¥›Ò<èüÉ[­÷lÛOo5Þj½i{Ð;ú§kR“¾Ç$ëG? EÎ»˜M>+aÆØÛÍÍM36«9ãˆ‡1UUqç^÷žÑž¾×ZZZ¤í¥¸‚––i´ÇõZûýž=©ö¤FK6K1š››fcogÓ‘•pÃ.ý`žÁpñ™GÀÀ²®‘`(LÚîté‹þh'H·´´HýcÑµÝé:
…I6›ž>qyÃÅ†]úÁlzÖp"øóõuãµU•Ë#œ~y¼>®ýn÷×;æ/¼ÕzsÛ¦÷[­7móþûn÷×½3sÜ
I–R2ÔVU¢¡¾nàÏçÒ•“p}¥¶W–å×Nñ8+*ÌÏ:ÊŒ18]“â­;^ìúŸÁ×ß¼tmË7²7/]{¢³}ðõ[í^tº&ÄÕý¯”ÅEù8ýÅãL–å×ê+µ½¹ô­ùõ°s(lQß¿}»½ñíËï!
çl+ËZ¶·±zÐZRØbÍ/yõ+_9úHGAo¼q½Æí›ú¦{jælÇƒþÝ‘ðÉ•"¢×ËøýÎàðáC`ü©Æ]òx.½ë~ï}ua!ò}|½øÝÿüñ„Š\I'„ å¶’XEYi—µ´è¿ŠŠŒïýÁOß „dÐÓÀã^¿üÑ“^¯ÿŒ{Ò{ÚéšlŸÒ¬|!ÌLrEÏŸ}
O?uÔ£Õêþ¼®RùùZ}¬ŸÀ¯w†ÿbÎøÛ––äOn´#¾”a—™Ä²X'„ƒÃn‹˜Lî<ƒ®·À˜×¥ÏS:µ’4ÁÞ­QbN ˆ…4$¡ZCÑ¨%2jœõÏ7ø¡Zï¬ß:<2®c”¥¥5­† ð8qô·pöìÉ°Éh8¬_9DHæ1ÇfÀÀxØ³—f=3võÆMþêõ6ÌCí2r0 hµ,¥E&£> ŠbDøÇq  ”â	U‰Çã:¿?h˜˜òh#‘Øz™‰ €<½‚ãÇãø“«Å…ÿ$‰äoªlrö@~³„ {,b¥?ðûçûöív¡õãO19íÝ€úÍäe­#¿ôDKÍ…xæ©'ðØc‡FcÞ;à¸ïÔ—ëF6ÂcSyZ=ÎÈ~Êè7Â¡èW;:î+Ÿ\û==Ã «Ž¶2m58BPWëÀ‰c_@SÓ¾¬H?çw¾®Bww£6‰×=±3Uý£x‚þéÀÀ€ùÁoºq¿£#cîÍªÚ VHe¹ÍMØ³·UUÕÓ¢Àý3áùÛèÈ&ñP¹–ãacBeÓo„BáÚþþ®««÷:z09íÉš9—ìlýäá”ö(5£¹©µ¨®®¦Š"÷Š"w^àÉÏ6²f³ÙðPhgŒ×†W¥ì™„JÏòÞÞ>`xÄ…Q§ÁPxU–M²Nr¤Û&“eìV8ìeØå°£¶¶ƒaLà¹÷xŽ´+åKëíÆ[N8‰Î¡°ãÔS	JžU)}6˜/vOLÀíž„Çã…Ç3ßœs B¡0¢Ñ8KçÞ¢(@£¡Wdz˜Œ˜ÍE(..„ÕjÕbÞçá9î×Ç~M)ÿþZNÅŽN¢{t¡H<£&Ø•á cÌ…u>ß, ‚ÁBáâ±8ê"a jD(²z½ƒÁ€üüÈŠ!„ówxÜ„ÖµÜÅÍ`Ëÿç¡k(¸›pä  »JY5¥¬ŽfÆ˜‰1(ŒAd„	 @I‚8!Bæ0Íq¤‡çH?€FÙ\QÏÃb[ÿ«¥o,\¦RZBÌ`ÌFôŒ1ˆ @â„‚906Ís\o¶“ŠÏñ9>GVü/ï0
ÿìÀT    IEND®B`‚                                                                                                                                                                                                                                                                                      ‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  lIDAThí[il\×uþî[æÍ¼7œnCÎ—‰;%ŠZ*+¶µx‰68nêºER ‚.(’E‚´(ZE¡¸	ìüHƒX©» 9^"5vTº¶CÛZ,K,UIŒ¸ïÃáp™!‡3œ…³¼{ûƒr8‰dÂðp/ßÜsîùÞ]Þ9÷Ÿãÿ7Èv*¿Ù>¸7§OÆÕ¸#O˜cq5ŸQ¦Q)Ó  Ï‘áHL#ò>A¦E^ÖˆÜÇíþÍvÙ´å„oÝ>Zˆ>ç†öÅ¢ª#‹[¢Ñ¸‹ÅÅh<Á%â”PF !DžI"O51.Iš°¤&4’0lÔ+÷­tåÈAÇ­­´oËÚ6tlÖøã`há±@(Rî÷‡t±x"Kw,¥[–roQ€Ñ¨DŠnL¯hoÿúÄá]×¶ÂÎG&Üvo´qzfî›~è¤g6`ÌGøt«»K%œö+[,€1cž¬FŒFås¡éÕÃÍ•bïCnoo½óÒßÍ‚ÏO{u³sA1ÝàtdŒgÚµäóMyqsa^O¾Éðn¡ùûC‡ÅÆî‡"ÜÙ9\Úïšý{Â÷ÂôÌœŽ±\#ºé„	È:S|ÅZs¡)b³ä_®.+øNc£cr³¶ošðõ;'ÝÞ—G]žãþåé›KM&ÅGk¿X7æéÔÊ²â«¥Ö¢¿<z°êÎfìßáO>ëþÒØÄì?Œ8'b$Ý lkPÒˆ0™ôÈS¢ QàÁ€D"xBE"žÀ|(Œ¹¹yDc‰ùéÐjEf¯(é,·”üõ‰/TÿjË	_¿5pp`Ôõ‹ÁÑI;UiVƒ’uŽãPjÎGÉ }žz½­VžçÁñ<Ç/ÊSTU¡ª*†0?„ÏÀä´ŒÒU6¤÷Ç»+-#U•e/=²±‘Þá¶ÎáÒþ¾ñ_uö:%É®ˆ¯ž¢ÅE&Ø¬fB¯äA”¤Ž'#„ø	Ì,J³BÆÏ32rÊXE,Õ†Bóðxg0>>wÉ)žù€	8Ž`O]e{UõK‡7°¦×%ÜÞÞ.¹o?è}~qg‡VQ³»%¥Å0åçSAÔô
÷9žÜçq‚±1Ì	ç‹1ÝG@D
	šÈ"aª²}	†}‰x¬ÖçóqÓ“ôŽ"e}À  ÕjØžÚÊwwY…ß[o÷Ö#ìžÅ¹¾A×sáÈÉµ‰
êëv¡¢¼œIZíÏ‘ŽëÃ½Z»ÜGÉµ‡¸’0ÆHïp¸†'hyé¨¦¤ä¬Éh´ke‰t÷Á%[®V^ }ƒcÏiµŽs þj->kŽðG7úï>ènŸœ‘—ûYõÞ$0ÑX_‹ÍÖhÄÿyîpôýºrýÔZº×CÏX°”;WéÉX,þ;ãn¹³»S^ßòkŒ1B’¯E›µ0¼¿±þðÓOVçtNÖaÏ¬÷{.·W^õ’`+OÉ'c_S=JK-^Èÿù÷ºJ¹ÿQˆ&±ôÀ.t„>ÓI¢³¬¼ìOQ(ºÕvþ@x¹]ªàr{å2‹÷{ žÏ¥—ËõCë§Çú]§)¥Èvi4ö7Õ¡ÔbEþ%YÇ¿Ò`W¶„l*ìJ¿¬ã_Eþ¥RKéèþ}õÐˆBV›¨JÑ?è:ÝúiÇ±MwÏ~Úã)¥`K×rQ45T¡Â^1#‰üwe(?¶—ê|[M6	{©Î'Cù±$òß­¨¬˜ij¬XÂŒbÊãÇÝ³ßÏ¥++áoÜ?Ò;8~xQ	[¥RŠ’bjk«":Iü¡–)?u8HzX´åp8HBË”Ÿê$ñ‡µµUs±iÑ6¶dcÒNÆÐ;è:üáÇ÷dÓ“•°Ïüö¬/À§*¡ŒQB€æ}L§“/j%þÕ ›„ÃAZ‰U§“/6ïk`”®[ªû|ó¼/üv6Y	;Ó§R§pê´±YŠQf³ŽŽ¼¼Ó8ì¥:áÈËe6ë¨ÍR”a_òrº<§²ÉgþðjÇ^çø´R
¶4ÂŒ±åúž†*&IÚóÛ±Amv¥_’´çªY¶=†R
çø”áÃ«{Óe3ûCá¯…#ÙwfQ€ÅbéG/ìµ5ÀÑV‹¥_…”5¼R†#QøCá¯eˆ¥ßðÏO.¨J—KªRX­ÅPôyÕ©Ø
Ô•ë§YyÝf)ÎþŠ¢þ¹àÉt¹LÂþ }yH›Ò»ì6•€¼¹3”ÖaxÓ^i£Œ.n¨”Ñå’2
¿?hO—Éð´¼s….‡e«õ“i¶¶BêÛF›B­CîuŽg)¥E –OOØ’ï;3PÒe2F8q‹[ýÒ“Jyb’$t¯ì8!L«•ºrÍH ˜Á/ãF8!I‚©Î¥²V{{g¨l:Y{;—½áÈBFp”1¥ã±]
¸Ó¦ˆ éˆt; \çÊ\xLÍlŸ~ƒã9Ä+ÎK‰=¾ù‡:ÝN|óñ$áôSPNÌô«2k%‘ÈBVå>ÿ\ÅV»ðùç*–g$a [*HRfô›qG¯—1ãógU‹Æ2<—ÿkÄ¢±½ÉoUË“q©4èåŒöc^\`\y¯¥8ä”RÌúçl—á‹Yÿü\ö3wa³¹0–}$¸Œ±œ1ôNƒ1ÆŒ;rÙk6ÆÒe2Œ·ZK¦s¹j£Î	é—Wnå<MØiüòÊ­c£Î	)×kÉj1O§Ëdáâ6­¤Y-¼¤0¼ÃäÌÌ·v†Îú˜ôÌ|kU “¿KZÌæ¢¶t™Â²¢¿²ÛQ–}$í®Þ‘gß¸|½fg(åÆ—¯×tõ<›jßbh¸XV;Ê +†+ér™®!­ö7$RcËÔxshÄ-{}¾s;C+7¼>ß¹¡·œkùhnHp„´¦Ëe®)—]v{eOQ1C	£j"{ú¿|éÏžØj™¸ôÎµ'îvô}YM¨«6)u©^X`D¥½²§¦\v¥ËfÝq9ïâÑÇ,*`‹ŠÔ%Ò*¥›Ò<èüÉ[­÷lÛOo5Þj½i{Ð;ú§kR“¾Ç$ëG? EÎ»˜M>+aÆØÛÍÍM36«9ãˆ‡1UUqç^÷žÑž¾×ZZZ¤í¥¸‚––i´ÇõZûýž=©ö¤FK6K1š››fcogÓ‘•pÃ.ý`žÁpñ™GÀÀ²®‘`(LÚîté‹þh'H·´´HýcÑµÝé:
…I6›ž>qyÃÅ†]úÁlzÖp"øóõuãµU•Ë#œ~y¼>®ýn÷×;æ/¼ÕzsÛ¦÷[­7móþûn÷×½3sÜ
I–R2ÔVU¢¡¾nàÏçÒ•“p}¥¶W–å×Nñ8+*ÌÏ:ÊŒ18]“â­;^ìúŸÁ×ß¼tmË7²7/]{¢³}ðõ[í^tº&ÄÕý¯”ÅEù8ýÅãL–å×ê+µ½¹ô­ùõ°s(lQß¿}»½ñíËï!
çl+ËZ¶·±zÐZRØbÍ/yõ+_9úHGAo¼q½Æí›ú¦{jælÇƒþÝ‘ðÉ•"¢×ËøýÎàðáC`ü©Æ]òx.½ë~ï}ua!ò}|½øÝÿüñ„Š\I'„ å¶’XEYi—µ´è¿ŠŠŒïýÁOß „dÐÓÀã^¿üÑ“^¯ÿŒ{Ò{ÚéšlŸÒ¬|!ÌLrEÏŸ}
O?uÔ£Õêþ¼®RùùZ}¬ŸÀ¯w†ÿbÎøÛ––äOn´#¾”a—™Ä²X'„ƒÃn‹˜Lî<ƒ®·À˜×¥ÏS:µ’4ÁÞ­QbN ˆ…4$¡ZCÑ¨%2jœõÏ7ø¡Zï¬ß:<2®c”¥¥5­† ð8qô·pöìÉ°Éh8¬_9DHæ1ÇfÀÀxØ³—f=3võÆMþêõ6ÌCí2r0 hµ,¥E&£> ŠbDøÇq  ”â	U‰Çã:¿?h˜˜òh#‘Øz™‰ €<½‚ãÇãø“«Å…ÿ$‰äoªlrö@~³„ {,b¥?ðûçûöív¡õãO19íÝ€úÍäe­#¿ôDKÍ…xæ©'ðØc‡FcÞ;à¸ïÔ—ëF6ÂcSyZ=ÎÈ~Êè7Â¡èW;:î+Ÿ\û==Ã «Ž¶2m58BPWëÀ‰c_@SÓ¾¬H?çw¾®Bww£6‰×=±3Uý£x‚þéÀÀ€ùÁoºq¿£#cîÍªÚ VHe¹ÍMØ³·UUÕÓ¢Àý3áùÛèÈ&ñP¹–ãacBeÓo„BáÚþþ®««÷:z09íÉš9—ìlýäá”ö(5£¹©µ¨®®¦Š"÷Š"w^àÉÏ6²f³ÙðPhgŒ×†W¥ì™„JÏòÞÞ>`xÄ…Q§ÁPxU–M²Nr¤Û&“eìV8ìeØå°£¶¶ƒaLà¹÷xŽ´+åKëíÆ[N8‰Î¡°ãÔS	JžU)}6˜/vOLÀíž„Çã…Ç3ßœs B¡0¢Ñ8KçÞ¢(@£¡Wdz˜Œ˜ÍE(..„ÕjÕbÞçá9î×Ç~M)ÿþZNÅŽN¢{t¡H<£&Ø•á cÌ…u>ß, ‚ÁBáâ±8ê"a jD(²z½ƒÁ€üüÈŠ!„ówxÜ„ÖµÜÅÍ`Ëÿç¡k(¸›pä  »JY5¥¬ŽfÆ˜‰1(ŒAd„	 @I‚8!Bæ0Íq¤‡çH?€FÙ\QÏÃb[ÿ«¥o,\¦RZBÌ`ÌFôŒ1ˆ @â„‚906Ís\o¶“ŠÏñ9>GVü/ï0
ÿìÀT    IEND®B`‚                                                                                                                                                                                                                                                                                      ‰PNG

   IHDR   <   <   :üÙr   	pHYs       O%ÄÖ   $zTXtCreator  ™sLÉOJUpL+I-RpMKKM.) AzÎjzÅ  lIDAThí[il\×uþî[æÍ¼7œnCÎ—‰;%ŠZ*+¶µx‰68nêºER ‚.(’E‚´(ZE¡¸	ìüHƒX©» 9^"5vTº¶CÛZ,K,UIŒ¸ïÃáp™!‡3œ…³¼{ûƒr8‰dÂðp/ßÜsîùÞ]Þ9÷Ÿãÿ7Èv*¿Ù>¸7§OÆÕ¸#O˜cq5ŸQ¦Q)Ó  Ï‘áHL#ò>A¦E^ÖˆÜÇíþÍvÙ´å„oÝ>Zˆ>ç†öÅ¢ª#‹[¢Ñ¸‹ÅÅh<Á%â”PF !DžI"O51.Iš°¤&4’0lÔ+÷­tåÈAÇ­­´oËÚ6tlÖøã`há±@(Rî÷‡t±x"Kw,¥[–roQ€Ñ¨DŠnL¯hoÿúÄá]×¶ÂÎG&Üvo´qzfî›~è¤g6`ÌGøt«»K%œö+[,€1cž¬FŒFås¡éÕÃÍ•bïCnoo½óÒßÍ‚ÏO{u³sA1ÝàtdŒgÚµäóMyqsa^O¾Éðn¡ùûC‡ÅÆî‡"ÜÙ9\Úïšý{Â÷ÂôÌœŽ±\#ºé„	È:S|ÅZs¡)b³ä_®.+øNc£cr³¶ošðõ;'ÝÞ—G]žãþåé›KM&ÅGk¿X7æéÔÊ²â«¥Ö¢¿<z°êÎfìßáO>ëþÒØÄì?Œ8'b$Ý lkPÒˆ0™ôÈS¢ QàÁ€D"xBE"žÀ|(Œ¹¹yDc‰ùéÐjEf¯(é,·”üõ‰/TÿjË	_¿5pp`Ôõ‹ÁÑI;UiVƒ’uŽãPjÎGÉ }žz½­VžçÁñ<Ç/ÊSTU¡ª*†0?„ÏÀä´ŒÒU6¤÷Ç»+-#U•e/=²±‘Þá¶ÎáÒþ¾ñ_uö:%É®ˆ¯ž¢ÅE&Ø¬fB¯äA”¤Ž'#„ø	Ì,J³BÆÏ32rÊXE,Õ†Bóðxg0>>wÉ)žù€	8Ž`O]e{UõK‡7°¦×%ÜÞÞ.¹o?è}~qg‡VQ³»%¥Å0åçSAÔô
÷9žÜçq‚±1Ì	ç‹1ÝG@D
	šÈ"aª²}	†}‰x¬ÖçóqÓ“ôŽ"e}À  ÕjØžÚÊwwY…ß[o÷Ö#ìžÅ¹¾A×sáÈÉµ‰
êëv¡¢¼œIZíÏ‘ŽëÃ½Z»ÜGÉµ