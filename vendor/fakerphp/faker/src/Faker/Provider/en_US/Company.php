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
        'Able Seamen', 'Account Manager', 'Accountant', 'Actor', 'Actuary', 'Adjustment Clerk', 'Admin', 'Administrative Law Judge', 'Administrative Services Manager', 'Administrative Support Supervisors', 'Advertising Manager OR Promotions Manager', 'Advertising Sales Agent', 'Aerospace Engineer', 'Agricultural Crop Farm Manager', 'Agricultural Crop Worker', 'Agricultural Engineer', 'Agricultural Equipment Operator', 'Agricultural Inspector', 'Agricultural Manager', 'Agricultural Product Grader Sorter', 'Agricultural Sales Representative', 'Agricultural Science Technician', 'Agricultural Sciences Teacher', 'Agricultural Technician', 'Agricultural Worker', 'Air Crew Member', 'Air Crew Officer', 'Air Traffic Controller', 'Aircraft Assembler', 'Aircraft Body Repairer', 'Aircraft Cargo Handling Supervisor', 'Aircraft Engine Specialist', 'Aircraft Launch and Recovery Officer', 'Air�PNG

   
 """"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""������������D��MiP	��?�����������a~�0��ّ�>?��Y�����y�<D��W�n|W��@�I�~V+�(��R)������ww���_ """""���-jq��&�j����8\����@�>��,P�����tr�ȏfy\/=1���m�N�i9~[�kՇ�ˊ��]�ouBa��x�����/��O��>'�)K�KN����2?X�:��׋�z8�pR��d4R��-�2m��%̯���$����9{�U�S�~F�2՛�0�^���/Jv��l��^2
""""���L�&ߒ�,Y%�����X�9n��V|~���o)�_!�wX	��6K������i�.�শyj��?��?���}S��2}��˙��D����'!�)}��
����\�G ����8���������9����B/g~9$� �����V���e���dJS�/��h�L�s����4�}����������eHʠ�ǈM���q5AA=̷3������$PQ�&=S6�+rl�f��ι�`�g���R�c^m�]Y.�)\�1�eOJ4^��z�	""""�2�ЈSd�Q:�����膯��u�l���,,�������T8���y��>e~[U���ω��_�"�s�,_����`:�-4K~
�Ҙb�W�-��/l\ ��b�W�t~�8C>�Ųtl1�+�ˡQ������R�g���e��O�?d��14��5IΉ_���j�ʿ�e.���^k|
H��y�̤�zH^�B^�ZnkЉMH�c\�6��*G~���������:���a*}�ν������Nh���"�ʕ_?�?HH~)�c��(9��B�)�#+~���3�C{I&#$�Q*}؎,6�K�R�d��^i>��2-���m�|�%�6�پ���Ԯ��P�i���9��i��/K�o��{��e?�W�\�.eɜ�[��uH��e2���_Hs��}5�-uR~N��o ]���'o��׎tۯ�����-�0�?%u��W0_�e?נ���H��u2-����RfM��~�����(i�#��@i�5���>��3����
� �V^�L��?d~����]�(����Ͼ��xy�C�����T��'��.�d~@'���k��v+�e)|WG���_�<K�/�W�.��I������a�e���� """��I�!����y�9���t܂���,�W7I���8ׂ}?Ƚs���<\�:[�
Q��Z���֙�׈� ��7I���s�w|[�ڃ�8�ίA�/o�Z�������?3����υ0W��m�|�����ePnJ����e@�䗿�i�~5n��%�u~����s�c�������y�Y����k�Yh,�BՄ2����\���{�5���oX䑮?��������'�~_D	b�_�6��/s?F��#��Ё��w
�g��uQ��� :U�V��q�֘(;�̚���� ���%u��v�"��i3*���ƭ�:��U�(�'飺���ýH�.eJ�h��2�͜�k<&���5s/��C��k�'Kg�$�sҬ�3pcK-�K��a��nj��N5�뗪��8Y~�TK�f
�t~F�~D��s<󼬿�������We��o��N{��k�}F�S��x��ߟe��ϲ�($�~����wd�%�[͝Ǳ��w'r��VK�� �b��r�����d�kQ���I~e=�� :Q�$uM}.��{R�׷��t%0f���{	Q�N��,���*���GDD�Фw�ܟ˴�Tt?����^2����Ω}]Ϙ��f�
��֚�Wfb����Nd�j~a��_��o���������M:�{en����,�����/s�y��hsU�*�����u�M~ș�J9�8qs�<�q ��(�Lԇ���Ri�b�3���&��Q<������,3���+�G��DDi�oޛKKn=����ZPa��K{G�s�@-�����_�4� m������t���<S}a���O�GI^7˴�Y���,�X�Ǆ����7Ik����,g��㏣�_�"�_���ǐ=���l�&��2TA�{S���rTAd��"���b��г�R��.��qTA�������eo���+ }��ߑ��H���@Ġ�xW�ߙ,��z��Rd���)�y�h��>M�����nʑ�Jɯ,���(vZ�H}a.���멽�ޠ�z%�?�i"8�c%p7�#"��2uX���΃_�mA��{��xA�؏��y!ίm�z��a>����:�P}!�o�e:u��+?ٷ���s����Dwٗ�|��Ծ��];��^m���������)9�Z��F��3gf�g.%[��s#�eJ�6t�˲�o�����j
+0@:|��!��̙�
�I����P�!�̯A�@��e�����!���I��KX�6V�����卸����Cv����Mވ�oG����0�*�5i�v?_����y{�<D��dR�:�a]]XZ��8�ND�J�T�}i�]2��xѦ�'��N��-��o��f���
a~�ý���q���#��='S�e�Yx�k�5��\v|��'B(O~�J��

��A��.�]k�c�z!��������dYa�t�/Gȅ&��
��8ɵv�V/!�B��;ѵv����\(�k����)��I��=��E~��Sr�w��`�:���S���ߺ�
5	,V(_~@'"�C���7�TlH�>��h~���y��2����D�`�{�}�^p��
I��Q��u�� �e��4*(g~��
c������ez79�=ֱN��ٞ��o���O��s�w
�������T���ǻ��ED�_�0?�o����L::�~v�B~{K^Ǹ�F���nU��]�� �$���po�*��~ ��7ӱRW0��6'���ھ�y�+?�i�U0g��\gu� Oz�[��NY8T��S��aW�?���{�)�A��·d�z�/�W1_��Ɲ����b~��,?i��3�����}ȷQ)1�o�L����d�|6���X)�ϟ�v�Y%�ݏ�
<��a~��_w��~��Ϸ�B~UQ��U�s�-��o`~^YY}��%�H^��K����ob��+W~@'""*�2���s�}�"������,�w�tB+ܣ�s$��gY�=��ܔkߪ��(�ʪ�~o�a�
�CM�ۃ<�v$J��1c�Q̏�&�a�s�c��- o.��_��y����i~)���\����!I���WL��Jd}�Q�ϻ��34>�Z�
�9W� �[�˟���rc~�1O=���R$U
�\~����yo�:����Uނ(�:i9�#��Xk�2�_1R�׵�)�@{�t�������w�O�� ���t""�)w���-�R#? �̲����^��++ǥ�$��AD���Ac5���,�W$��Ol�N(� UVgg9�6?�p}���P~����	(��\��DU�^AL�ߞ�?��߾b������7^EL���ޮ����7��ϕͯ�������j@DDD%�(����=:e᫲��,�
�x/���>�8i�
��]hy�ί�@�1?b���ؠ������s�K�gI8�B�1?ʇ��L~CK>D\0?��Oc;�I�!.�)��ٍ���7б�����2�[���`�w�l��͏�p'""����1��U�U"}��Ll�+�k�&��Ò�T��	P�|=c�����@�pv ��1�#m���_ɘ�?�ί�����e��R��Ϣ\��7�G�1?ʯ�c�����O �)��y7bs���_���f�D@�� �RG<�Ǡ��i`b�������������ݸC�p�ܽ�H�(l��D�Y��(h���{<c�c """�Ӕ�Љ���*,�uɜV�g�<cߗ�I=
�g����çűda0�̯dv�+�����]ԋ����N|E�H=<��g��$?�:��uI�Kt�Θ��>;�.Λ,u��#���ś���i׾�zP~��?��?�����+�bT:?��,�����JDDDU����߱��y�P�ٛ)ݝ��n�̱5|� H極j�3 ����k�L�}������}0+�]�j�u���9ʴY&�R�}���������
t@+<*e𘞥�X��s� �3+�.��[1��/������';��_ޚ�ϟ��g@U:�z�ڙ_.<�����"��>�
��m�]�gJ�ә˒�[�pQX�X��������ܧ��+�;w�KaoP1��X�ƞ����U��~���ʳP�E��;1H~1�J��B���zH~1n�0?��?���W����~�l~�`~yp �����Bk� :��Y��e.K��5�gR��w�bj��r,�0T�����
��]MwVX�����y�:��ׁ���������6(���S̯(,���ݦ�Y9��Tԏ?ʑЉ��(pJᛎy���E��'�G�jM�n���g�gC��3�^�o:U_�q:�JҸõ��=��������r��-�WgݮY���q�k����O+i?��\�[A����?ny���l�Aw��t����W�h�_i�������N�����
������s,%밯���}>?�Q�L�;��>��d�&�'�L�'�þ��R�ϳ!W�$y�;s]w��^
8�M
����.�Dy�R'���4p
��fHV(�͢J��^�`�$U
Ի�v��~2�=�=#��f~�.�o�ʜ��4*J+4�i�94c�+h��E�T ������Z������l�a�^u�
�Y�^�@YN�Pa���Yv���K�@����]��(��A��c w����`���]7d</�ٷ����|��Ãi�� 3#3V>/�������/�����+���Y�~�`<��o��7��y��W���?�ՇK�y���������J~�KP?pPy���DDDD0���@��)��f���B;p�7I'3?oua��ϾV����p_vm���
b~�0?_�>V�
��1M r������<�F��Buk$�ŐN�ғ��ײ���9��E��������2Į���\������s_�� l�K�� �H�_��?̯tC����`��%3?-�]���a�+]u˟���
�Gv�������%����Wr~<����(�LՇk�Ǥ�V���I�-��>��N4x����,e~���w���G��_��K�O�Xc쎗A�%��?�ϟFmn��y�.�8���²�_�}n�<�((�z�߿K՛`��xC��Ghe���_	M��J7�C推[�ǻ7\�NG��}R_����S���b�z!��"�~a~�0���>M�_)���t�w��7Ab���t��Յ;��?��TB������2��3Љ���Bl�d=\:Oo�ٚ�խ�	\ *h�d���kA��&��q�>Ⱦ�qH���?_J�?�&���kLn7ˁ�.��?�ϟ���jd�|+.�}4��#8�KH���tn
�[f�
<���O�#?����F�cG��1����oÿ�z5�I��K��|��5c<�@a�k�q��C���*��_�tH�*��}T�@��p�k�r�H.'f.+�-���=�v����E��=���@|O~>�Z{�l'K�|9��0��VX�Z{4�8�/O���F��������
1�?�Fv�����!h��\��d��d緼M�����)��#��c��$�������	u~f�m�}+w~GJ~K���9su�f�ڙ��`ـ��W˟?!�/��Nڣ���%hŮ�V�Ats�󵒟�W,?��H�I�H]+���3g֤jp�����W�+��P�e2;���K�n|��k�f�A'&�O�e�G���ShПG������g]O�1����%U�����U�g���� ܱ���(y0����rHن�q~����1�c���3W�X^��_$�}�Ʃ�ί�s�kZ�2�Lꏛ��=-4헐����X-����zW?I�j���]O���N'��.�jqr��k�߾I�@�D&���_��?��/���"����;��$�e��ow|{�cT®?���������W�~K����~W��5��2�~��E�@����I�>�ț�˩�(G~
DDDDT}I]S߁˥q6M�Z��J32��+�1����@���ԓ_"��o;k,���\�t�4K�\�`�
fP��׎���ɯ&B��3�ݗGO�4#������O����CLg�Vw��֤�'�$L�E�����tl�<\�:A���	�΢�� �<�5Ql��3Q�N|
��&R�]7`&i���n���VI~'D�����&����n~�h�0?���`3g�j܏j�'�o�"��7�!g~+�jp��$�_^�~K��u��O��s=��7n򛋄����C�;M�X�����7%G~/K~'�+��~""""�~���4�N6�=�>��?�kqZKR�ʩn�>I�V��fٕ���W���=���d��=r 2*ǳ/�s�a��T?Y'�dv�Yv�gΈ�8�y�za4Io/ݥw!�r]�+2��}� )'(?���7˙��3*$ñ�/���?��p,�Ⱥ��l?�b�z DD9���s��`�h�qF�l�QШ�/��z��</?/���è ���T�0��ew~2�zh�/�[~܉�+&/H�I��*(�������|�l~�� �
� ���7W~�e�� �o���������ע<�-��x��n���t�ۺ���������~l�-���Z�����ғ��g�Ll�_�h�]��8�NDDDTeuS���+]ߚ4Ϳ[[���e�BG��&���}��qfMV~�--��^��k��M�V���y����,�7ߖ.��v~'H~%��͚����"���7s>������e<C��I�,�����K�e�pSK
�g�^��H�;��3ǿ��e��H~�+����g��y^�%�[Q������_��;*���ڶ6�ӂ�4"}�!�߷
�g�_E�_8�NDDDu���� �T��~*��3�+��I܄��A\+M��9��^��d�xP"�}t
{�F+�1����Fs漴���e�\�[�(�����'N(�ʷezX>�s��J��5Y���d?[#	&�}M
��q����(K��g���+�]���2x�H>�i^in��n��~�����]J24,�%���7����)�#Ӆ}>?������������s���:�}��O�g����i|�җ�%��Do���K�����J�q���%���K����0W�8��+_��T�� VJ��̿'m�.�Y�~�Ő��^�!ь��Ў�[��	m3�ZD��|��\(�u�a��B�_������Kz��}5�r���_o���xy�C�����T+?q����q�-�J�?7s6z3��w*zk��������3g��]��������a�N`wsYE{`�A���w��c�K��[g��"����,�C	��O�g��i��ԟ��t�9C�CQ�b�#�g����D�����9�ĉ��>��,P���J�7W���|�$�(���#uß�z�3���K=2�u��qФϐF�L�;%(��L���B4�Pv������g���>��4m�!+sW!��VH~W���q�
�g�O?�}6���W���Q�f�l���+����4ɯ� �^ʯ�@�Śj�������R�����g��=�y��S���X�_\��Im��� Ǘt{���
���_^�O>�g�c���J�����e7��l;����<e�!?��/��υ��������岀5�L�6�M�Y�Y�n�4nn��֡/�L�ߑ9si��a������n����W����}߬�diJ�H��
9T�ݪ��m����ʕߖ��&��>���Љ�O���d��;y���"���L�q�!5�9��e��B//�~���ϴ_�^RvΓ�B
�a~.�n?3?�畹4��`~~�����J��~�������y�3��U��E������Z��I��G2��L�oY��E����i5��PX�5����R\�>D_6QC�H>���~2��i;9�,�̽�M~]�c�<�%��!�='���N��Q�/�Do�Zsy|m緯<��n�y������V���`~�Ώ�p'���Q�h)�X����㵄���eN�۱������Һ;F�QRo�K��.�N2}
=�R��Կ�%�U��J��Ӭ�ίGKv�#�|�32�"�P�j�K�_/����_>̯t��R��OWY�o+�?�_鲷�}Q���H�/DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDr��л)��y�    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �PNG

   
4@д(�E��(ZE�	��H�xwA�x�Lb{*�v�m�㙩�Y2�WR�p�������(Q\��H*P����x����9��{�>��o��T~�gl_2E����-�J�)���R�jm������)�#I�J���(̋�8���������I�j�W{'�F�'���~��kK$S�D"%'�)1�JsZYC)wq!D�I"OU*1%I���f.��;a�ioi��ţ�lW�Ҿ-#����`�Ss��"��`0�I��9���O�(
Ri��b��P(W�B���}X��|���o^+7���ؑ]�l���L��M{��7�I��n_�Z�� +қ �H�1�R�to�/! c@"�¼;����7J�ݡ����o�g�(}�HgC߽�{ׄ{zzDς��vד�P�/3�"���!O (��\	�9��"| �]VZ�p8z�ݏ�ު������é������MԌ8}?t��=5�
(������g��4�Le־��ﶷ�f7k��	_�=�?>����>\�b�>ǅK!��Q�t�-���~��y�&�=�J�L�zG��ġ���ؿ�i���45���I�l{<�$��$c�JDi�%Z-Q�^'�c_zo �N#�V�N���"X@"�Β_љ�Zd���:S��>��=oo9�KWG�ڝ���Z�B���85�2���+�A���Vk��<8^ /���QTQ�(
��8����C����-'����L��
W�r�S
}4�L��̴K���ǿj#de��+��[�<t|O��ɚv�<�w�<�I�����D���V�Ԙ<*��W�-
�(��*#c�3ݟ�>�i��.���~qq�X�,_3���F�[뽒�O��'����f`���eh"������ +@�Q̹�����b�
~��Cc�G��U
)���*EsscL#�?R3��m6�[m9l6�V3��5�����Ƙ��t�6�dc�N�04�<������S������ⳕP��(!@��6�������N���f#i�Ŀ����:��1JW����
���������!�6Sj-f;������`���	G�����Se�}����>]H>�����瘞�SJ��<�[�����$I}v;�F�fՎH��l{�V(�PJᘞӿ���}��y����ע�x��,
0�L#���;Cm
�����$`K- Iʯ~���t2��`A��D2o���d"�����������y��|^UnX�ײ�R�����/�p�������;���X�̭>2
�'�6�X�z����'�m��5+��2yƛ���Ŗjvǌ��W��&�4~}��I�cF*6-�M��\�����T���F�I�z���:�c�����B'�~��*���se��Z��ݶڼ�#Sh�M>��KM;C�8^�p��d�l�K��v���V1W.�EH��m���2���t���ٝ�U����I�\��;�ٖ��Ε�#�T';�ֆ��rC�F�t7�|�����j�8��'�n����VV%)e麢܀k�`S��̕-�q�rɹ�\T�)K�J155��34��׻oZ���j��}�rg��S�sV��c2�'�?�\r��|A�7:;;��1o��1EQ�{s`�}p����.i{)����K�:_�5�7۞�j�b�Bgg��1�F!	��ҍ����~�(X�g$������L%~��������ď���?�DI!�z�(J��sm�tc������϶��L776,{8������_�]x���+�ޯw_��.��?7�����,�ehnl@[k�4��-��(����,�/���)VYQV�ˌ18�����;O��v���������{�jϝ��q�ﯴU�e8��SL��Z�C������o<jQ޽v����� ��+�j��}Ϙ����\V��3Ϝ����W_�����}�5�}����ݱh�y=�N�=��9�Ɵn�%Oӻ��A{��x�?��R�[��!Ri���Y����5������4���O=t�R�B�c�{���=��c�Y��s�mjzN��0�1�(
x���Ѓ'�j��/[��X�7�?��sD�*�}W�{�G�{�Z:a��e�6�%f,/u��5C冒~]��O-I3L�]*m� Ɉ���s$�0�"���B[0i�����iM�)b� �x���������φ����ͱ� 0:5$R�9���_��|�:�~yg0 ��L5��R�.$�bL��q! ���SiE�J�4�`X?3�V�b�l<q  %:-N�<�S��Wʫ*~&���-r�B~��``*f�?~�ڵ���O1;�ـ�͜�ZG~iDk�x��c���i���Mp�w[�4�ᱩsZ�����7���Wo߾����088��e��\��4����/��cD�J��w��^sc�6}^z`*fe��4����Q��
�-hkkƞ={�V+�"wV��n�-d�]��1^g���B��i�>
�ꆆ�1>1��I'��S6�kR�m�;Y��Zo��Z�]6+�������{��Hw�A>�^6�r��G-��NS�B�#��B�kf.�,�n�n/�� �0"�(��K�ޢ(@����0�u(5�a4V���f�	f�	:}�����
�!Ƙ-�j�~B���"�R���"a� �Dhe
�� ��J���1&0 C��aa c�<�

   
�9���q��1�	�1�G@D
	��"a��}	�}�x����qӓ��"�e}� ��j؞��wwY��[o��#�Ź�A�s��ɵ�
��v����IZ�ϑ���ýZ��Gɵ����0�H�p��'hy騦���h�ke�t��%[�V^ }�c�i��s �j->k��G7��>�n�����Y��$0�X_���h��y�p���r��Z��C�X��;W��X,�;�n���S^��k�1B��E��0������OV�tN�aϬ�{.�W^��`+Oɐ'c_S=JK-^������J��Q�&���.t��>�I�����OQ(��v�@x�]��r{�2��{ �ϥ���C���]�)��vi4�7ա�bE�%Yǿ�`W��l*�J���_E��RK���}�ЈBV��J�?�:��iǱMw�~��)�`K�r�Q45T��^1#��we(?���|[M6	{��'C��$�߭���ij�Xb���ݳ�ϥ++�o�?�;8~xQ	[��R��bjk�":I���)?u8HzX��p8HB˔��$񇵵Us�i�6�dc�N��;�:�����dӓ������/��*���QB��}
�4�����*&I��۱Am
����ë{�e3�Cᯅ#�wfQ��b�G/��5��V��_��5�R�#Q�C�e�����O.��J�K�RX��P�yթ�
ԕ�Yy�f)��������t�L���}yH�һ�6����3��ax�^i��.n����2
�?hO���s�.�e����i��B��F�B�C�u�g)�E �OOؒ�;3P�e2F8q�[�ғJyb�$t��8!L���r�H ��/�F8!I�����V{{g�l:Y{;����BFp�1��]
�Ӧ���t; \��\�xL�l�~��9�+�K�=���:�N|��$��SPN���2k%��BV�>�\�V����*�g$a [*HRf��qG��1��gU��2<��kĢ���oU˓q�4���c^\`\y��8�R���l���Y���\�3wa��0�}$�����1�N�1�
�I6��>qy�ņ]��lz�p"��
I�R2�VU���n���ҕ�p}��W���N�8+*��:ʌ18]��;^�����߼tm�7�7/]{��}��[�^t�&������E�8���L����+��������s(lQ߿}������!
�l+�Z���z�ZR�b�/y�+_9�HGAo�q�����{j�lǃ�ݑ�ɕ"���������C�`���]�x.��~�
O?uԣ�����R��Z}����w��b��ۖ��On�#��a��ĲX'���n��L�<�����ץ�S:��4�ޭQbN ��4$�ZCѨ%2j���7��Z��:<2�c���5�� �8q��p��ɰ�h8��_9DH�1�f��x����f=3v��M���6�C�2r0 h�,�E&�> �bD��q ���	U���:�?h���h#��z�� �<���������Ņ�$��o�lr�@~���{,b�?������v���O19�݀���e�#��DKͅx�'��c�Fc�;��ԗ�F6�cSyZ=��~��7¡�W;:�+�\�==à���2m58BPW���c_@SӾ��H?�w��Bww�6���=�3U��x��������o�q��#c�ͪ� VHe��M
���T    IEND�B`�                                                                                                                                                                                                                                                                                      �PNG

   
�9���q��1�	�1�G@D
	��"a��}	�}�x����qӓ��"�e}� ��j؞��wwY��[o��#�Ź�A�s��ɵ�
��v����IZ�ϑ���ýZ��Gɵ����0�H�p��'hy騦���h�ke�t��%[�V^ }�c�i��s �j->k��G7��>�n�����Y��$0�X_���h��y�p���r��Z��C�X��;W��X,�;�n���S^��k�1B��E��0������OV�tN�aϬ�{.�W^��`+Oɐ'c_S=JK-^������J��Q�&���.t��>�I�����OQ(��v�@x�]��r{�2��{ �ϥ���C���]�)��vi4�7ա�bE�%Yǿ�`W��l*�J���_E��RK���}�ЈBV��J�?�:��iǱMw�~��)�`K�r�Q45T��^1#��we(?���|[M6	{��'C��$�߭���ij�Xb���ݳ�ϥ++�o�?�;8~xQ	[��R��bjk�":I���)?u8HzX��p8HB˔��$񇵵Us�i�6�dc�N��;�:�����dӓ������/��*���QB��}
�4�����*&I��۱Am
����ë{�e3�Cᯅ#�wfQ��b�G/��5��V��_��5�R�#Q�C�e�����O.��J�K�RX��P�yթ�
ԕ�Yy�f)��������t�L���}yH�һ�6����3��ax�^i��.n����2
�?hO���s�.�e����i��B��F�B�C�u�g)�E �OOؒ�;3P�e2F8q�[�ғJyb�$t��8!L���r�H ��/�F8!I�����V{{g�l:Y{;����BFp�1��]
�Ӧ���t; \��\�xL�l�~��9�+�K�=���:�N|��$��SPN���2k%��BV�>�\�V����*�g$a [*HRf��qG��1��gU��2<��kĢ���oU˓q�4���c^\`\y��8�R���l���Y���\�3wa��0�}$�����1�N�1�
�I6��>qy�ņ]��lz�p"��
I�R2�VU���n���ҕ�p}��W���N�8+*��:ʌ18]��;^�����߼tm�7�7/]{��}��[�^t�&������E�8���L����+��������s(lQ߿}������!
�l+�Z���z�ZR�b�/y�+_9�HGAo�q�����{j�lǃ�ݑ�ɕ"���������C�`���]�x.��~�
O?uԣ�����R��Z}����w��b��ۖ��On�#��a��ĲX'���n��L�<�����ץ�S:��4�ޭQbN ��4$�ZCѨ%2j���7��Z��:<2�c���5�� �8q��p��ɰ�h8��_9DH�1�f��x����f=3v��M���6�C�2r0 h�,�E&�> �bD��q ���	U���:�?h���h#��z�� �<���������Ņ�$��o�lr�@~���{,b�?������v���O19�݀���e�#��DKͅx�'��c�Fc�;��ԗ�F6�cSyZ=��~��7¡�W;:�+�\�==à���2m58BPW���c_@SӾ��H?�w��Bww�6���=�3U��x��������o�q��#c�ͪ� VHe��M
���T    IEND�B`�                                                                                                                                                                                                                                                                                      �PNG

   
�9���q��1�	�1�G@D
	��"a��}	�}�x����qӓ��"�e}� ��j؞��wwY��[o��#�Ź�A�s��ɵ�
��v����IZ�ϑ���ýZ��Gɵ�