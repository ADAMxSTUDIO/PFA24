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
        'dart' => 'application/vnd.�PNG

   
�0�������Z��>۽fyL�$ԃg�d�J�3�
��5��1�k׮���Q�F�T�޽{���4�t�ߔ2���W���:<�UC�`�YT�l��_|QRR2n�8OO�+W�����ݻ���>���_�!���ݏ�h��&�5!��Y!1�r��رc�.]���q���I�&���&&&�{?�T*����GFVVV�##�ad2�V��t��ʕ+׮]K�����?�a ����)#���cD.�Kh�B��,�;W����yB�Dr���7n6���eРA���KJJruu]�hQeee�j��Ylc  �V��猠y�b�
���z�^�z=�!���;v��lgԬ���˗KKK�����ݽ�����7o�<x�`�T��_4x���//����P @PP���0�̙3�͛ǲ,�0�?I��#� ��,���iVaϟ??99���ŋ3���3
�Y�緍A�g5�k95�<� Y��0,55�  �ҥK���x���t�#�f�����$FQ�y�� t:A���=�N#���$i2�X��q^��C��-z%� nqJ����cAP
��� ���k׮�޽�N�����3gγm�?uф���Έ�ymHS�������~�a�=z��y�a�_�~�������/���� �f;#�-o��1c�����"##�̙�s�δ��g�Qs���b7���				

���]�n]#�(333**�9��X�Dh�ԪX�c9�j����l&�d2YYY��z��a��dz�  
�v�-��e�)IQ~�8'��EQ3���I�P�ky�±����Gyy�F��~��^�����q�\~�ڵ���^���իW�u�Dbcc��4��֜�#�D���� p�q*J��&��Zn���G�I���%_�%���5]6���Ƞ�:!��p�0��@���ڷ=4u:� ���,�B�Y"�z�>''G��TVV��˗/7��@
�0�TJ��lfY��i�T����B�C�V���C���k+����t�g&�ڃ���Z�z��aI�4M�@�0Lxxx~~���G�)  �n�  ���^2�$�+OR'�K_��  ƕ�9I���/P�pM��4M[��@Ps!&����!'A�	_{/�th:ZlES
�E���W_�]�i�J��S0�a����k�  ����f)i6	q%�0�!��j��I�B�yb���^K�  0.�,�~7�U,onFϿ�
+uPP���W����駎;������~~~$I�Y����*<<���}�ȑ͞ϯ/��.{Z�����Ru�i:��;��y�Z���-�`� MӰ�xΜ9��Rk�zYYY�O�������&M�;w.�a?���V�]�`��ի ۶m{������_Q^�Z�n�����+�l#5���
^�Ɩ.]
 X�x���Srr��`8}���]����P5�۷'bŊǎsuu���

6lX3���ls�)��_OQTxx��ѣ ���_�|9Lw��fX8W]]MQT��d����jK������X�	��a�O��%��RN��@ul��l<�8ð�p�5��񗕗��8���ü�<�����  r����877�E+��l�|�_��h��T&�	���lBj����tw����x�  h�+���xN<>��E  ��ǵ�{����w�SE�4EQ$I1o޼��l��7Z��j�e'N�߿�rss{��~�z�����6t�P++�aÆ!�"z��z��c���C���q�1���D�vY6����5��O "�Ƨ�:�@���}�E��sz��+MQ��j��J�l�2oo�s�΍1�����۷�ڵ+M�&�i�̙ �.���0���WZZ���߱c�f���R�����(�F#
�_�e׭[7g�X��0̵k׆kx���"r{̏����\'��'���c#H��Ŕ����m��PK�d�ס���_����'�Ppp�P(<s��ٳgKKK.\�h�"�av���0�c�?��;wN�<y���f_k�԰�f^a�z���+W��D*�
��1(���1Kڵ��-�\W(-ka�G�Y�P˱��f~�{�f4����&��O��8Xzz��}X�7dȐ���.�>}:�a{���۷�^����۶m����֭������OAA������u��>��Z������	��,L�Z�b�z=���f3l��_NǕ��:88ܺu�q��4hР��/-m��Ζ�0��ܲ��� H�6�co1� �RI�SX�DhMb��(M�K�<	-�0b3�J�Dh
��_)ɓ`�ʨ�!!I�R����@o2�(-����ZaN�V��V�1��ˑ���`˖-�Ν5j����;w�|�֭������nݺeee�k�n�ܹ7nܸp�B||<���$YUU���o����<y���7''���{������={�<z�h���gϞmoo���3f�h���n13�R8i2���$��G�?��TWW�iӦ����B��!�̬�A�`6�( ���*kkk�B�m9�`0��z�e	A��x�� �;/��n��4��d��}�4�?��cǎ�9s���*##C$��:�d��s�~��W�{���d#G�li��s^�HMM�ܹ��d�[�áC�V�^=j�( �رcǌ3jԨ�>�� �^���WPP���ߥK�WL�0��YM�HC��i~z6�J�ʋ��x<U@(��߿�a�uj�l��S�C�� �`b�9�<|���h���|� � PUUբ��P���x���� %%%���5kV�n��f3$?v�أG��>`�����s��Q��G�Y����}�ԩ�o�`���b���[�l�щ���%K����$I����������������6l

j!bY6   11��ǧf�����5�w1A^N[mk�������������>��·�
�gI�O��ڷؙ3gd2�W_}u�ȑv����믰�U$u��a���"��a��C�^�v
kkk�Rioo?mڴ}����n�vPyy���]-%���i84��S�P(^t__��00ϣn������G^��4
� ðW&~�q\ͪ�� �/^�q��͛7s���Ο?�|�򌌌ٳg z���V�+++	�
�����(//'I�ѣG$I�d���<���L&�J��@�Ri4��n��T�'W�چ�\.��񩪪2666			ptc۶mI�,((0��J�R��gee��XII�\.�J��}ϲ��~rL���kPc��$�O��:
vt�էA-�]z��I��^��)���%�
ؾ�y|�_�y8��櫢��5����Ú�(���Ǧfk��PY�_�t��m�KHH
�G��0��ݻ���o�.//0`@߾}ϟ??bĈ��8��4p�@�\���V����sss��Ӈ�*��2�Y���੿h���:�T*,̈́U	p�� R1����kt�^�z��y�Z�Bf6�� zeMј.����b��(���h�q���b�������ႁfQ	/�:������bIc�`��1]UU��u:��hdf�ܹ�(
E!O�-�J�Y�f�����J�\.gf�����$%%�(ZPP�0LQQQK.��j�Z����=  �q�����/_�������͚5kѢE|�����E��z�o������SUUUEEEQQ���������)$$�d2�����x��RRR���:v�}�vkk�͛7oذ�y�|�,�>9D�)kI�:��N��eY�$[l��%�A��i	����t�R
������3���
EϞ=_����>��u{+	  O���K����PV��s����۸�;V
�-���8�TZ�XӒf櫯�����7oށ>���E��&¯��*&&f�̙�Ν���x��7O�>ݿ��ׯ��� eee{��
����0�����׿���3`� E���&M��*�h�$$$���X�h���L&۴i�ĉqGQ��֖ �N�:u��yӦM�ڵ�>}: `	0�TZZ�0̬Y�8��}���9s����ϟ����j?��??��S�~��-_:�%&&v�ֵ֭���t:[[[�V�%L&�B�ppp@d�ԩT�T�夺��aX
o%���q� �夢�������i�`0�D�Z���ଲ,+��lȫ4Mk4��k�?����h~�V�m��o5���3#�o�2^OCEE_'�;��)#~
m��5�H7`^�o5o<��� K�(�+��?-aQ;t��8��a�����˙3gp?y��E�nݺ�0M�0��Z��rss����~<a��Ҳ��+V���dff~��w!!!�d�O�>F��w����gϞ=|�����gϞ]�|������l6������4  ��u���aÆ�iӦk׮*��w��q\(���A� �8i�����{xx���GFF�5��f�0{�𡯯omͪU� �J��� ������b�X"���z���0�J�8��F��(
iK!o@+�L�t:�X\�B�/^h |�o=�/��n����P�P,`Y�/�wz�����KqV��b��O�I[���6�����<��3��	������{�� �? �СC����TWW�|4|'�e """���z�$����d5���&�<���aoo�i����?OJJ��ʲ�����������eee�Ν#F�����8.??_*��d�'N8;;WVV����m۶��F��G����]�t��-�^�=z)ԤRi�N����qo۶-M�2���Ç���uuuuqq1�L��� \�reÆ
����#���.�AP
�Y^�<���]E�
��<o5�)M8$�э^�H� ����A�]깺���C��ȵ���; �����A{�+f҉�:���٥���n�^�_����v=X� X�����ơz���"����n�����"]S�l���jN��rn�!����`��U�h��x'82��ꯟ�؃'�;8@Ӵ@ �L00�
�B�q'
###E"Q^^�322���h��5�R@3���"6����_ �d^صkWFF�q#G����=zttt�@ �h4��ɟ~����ۧO����\]]�������T�F���z���BVN��/q뇧��	Q�.��d��$�Ν;��r�HTTT�q���K���Ǐ�w��iӦ��� �R),���d(�fddl޼��ۻ^,e�=�|I;�a�"�aЫ�:7Y����$I�^ �>-��xЪU�BBBZ�=~�������� #A�V�õ��Lo��v�k"j�&D]˛�[��cK�<�!��/���bg�؃ �B�``����������Vɘ=��@�`�YT��z��@%#�ş\ky�<��ה�X��,�4�uR�o���sK����+��l_�p!�0����� � d2��dJLL�m�0��V�q�J�"�hɒ%_~�%�0�=��ή���x�bYYd����g&==��nB�066��v���b�\�r����l6���UVVv�С�����-//O �;v�Ν*�J�TUTT���9r��?޶m�����ɓ������BCC���/\�`oo������ׯ��"�DEE���[v*�G��7΍7��✜�\]]�M��|��6m�PգG�>}�<x����Ζ�徾�_}�6���/_���Ç,ˮ_�����޽{Aܽ{��ё�(�^/
���Z�-F��z��]�Ҿ�A�d2�L&�@�R��B�N��ΪeT�/��2q�D�n5�Lz���8�Hd6�CCCg͚�R��4D� ,�E����2�5��^+i���\�Pl,��v��]�^��X�u�b
�ܹS�}��-_�\��v����_���߽{��s�������� &O�LQT``���C۶m===�����㋋�!�biii�6m\\\���~�ȑ���2�Ң��8�W,)uh����ڵk׮]� HII����_|���C�$�}�ݤ����$	{����������p��o�Z���,p�(J�Ri4���۷�4HBR+�	K�,򲶶���[�.4  �J�0�F��<��7��$����KL�h4��V����-$DQTJJ���I�pFFZZ����A�j�A�c�d���R�����l�n��=X(���
�r��>R)>�㬃�����T
�������[�nUTTt�ҥ}��f��uE��J�SW ��`O	6������_�Z)Z�g/��J�~H�gK�.�0J^2Σ}��\����_��]fuehz�'-J�*�+���1��ʠ������R�rg��r��ȱZ��Khu�$/IQ.lhBD,���{�ܹ?��c�N��?>s���?���ￗJ�S�LiӦ͜9s���G�e���aaaF�Q�RM�<���e���-=zt�޽a��a���׮]+,,��J8���#��666?����ݻ�������ԩSKKK)�5jT��������ût�r������6m���Gp���h|���;v���W_����L��������]��={��͛��?_/�̱�B�$��lA֬]15��4�3$ű� 3q���(��
CZP�b1�az�Ȭ��QU*�:���֖eY�Baoo���h4���A:t(11�`0L�0�_�~�5�h4*�J����������m�� GA
�"**����Գ=uR��29��0�h4� �*�'a�Oͦ�Çgeeq7u�T����xZ��جE�$$��bק@ϳ �:,�+�k̫�������k�����YE�,��a2��z�Ek�1��QA����|ЙG���@<x#�G�T 8�����(����o�
�����gϞ����w�:t��
�s���۶m��d�dgg�<yR��WTTl߾����a�V�k׮�2SZZz�����p 0�����{��t:�arss�o�^YY	߼s�N�A�Lv�ر���e�lْ���0�ƍ���K�.Y�ƣ�f�P(tppHJJ*..np�S#��Q�p��������;;;;::&''oڴ����R�����ٳg�ر����EEE���,�����ĉ�v����OHH8s�L�Νx���(^VV���x���m۶�Y��Ν;˗/?uꔵ��������5kּ��[�aҤIiiiG�ٹs' ���ۗ/_2d�֭[<x��w�-_�|��VVVz�~ǎC����S�L�}���k׶l�RTT���N�:�`���W�޿?$$�����a233����u�������p��q|ҤIS�N���ϕJ�ĉ]]]�����ș3g"�3  ,����̜9EQ�L�駟�����
�����رcӦM���-ڻw�X,����N�x���^�z-^�x�С/^4h��ѣ5
���A��� ��
�_a��h4�t:�$)���Z�@`0P��n�/�G����
��C�$��Qe00�3A��zl_��d6���d*��M����<h �
�	^L<��h�/�� ȫM��9�@2�������@<x�ѺA�a222���i����5_:w��͛7���6@�x�Y0VYYc�  H=������Kl{��ͅs������Ջ��P�yş������N�h�8p`�>}
f���훘�HQTnn���;�P�0̄	Ǝ{U �v�4��ɓ+++g̘ ��ʺs� `	4M/\�E�Q�FM�6m�ҥB����0K�_��iP�㸴�4�Pعsg�V[�m�@.�RS��a��`�Q"  ̷�4
�����2s���鹹��j�&na���...nnno���K�X�utttrr��/f̘��{�}��'���={����e2�����/������9sV$���zzzzxxxzz�(WRR��o����c���[�n

��d�/��olmm��_
�gH� �}8��J*�,���R�?��F#�@s�`0��fH�`�
#��y�~�;��,��zh�:��������������`�$���gb�K�$d7�/mӀa��h��˃�l:��a�`޼yEu�҅ ���ܭ[�^�z500�h4�ܹ����������KJJZ�jս{�����RifffǎO�8Ѯ]�۷ooݺ�M&�-_���ݻ���ݻw?s�̚5k���󃔿!!!...'N��������q���bŊ�۷��?N�>}���w�}7%%e߾}G�qpppuu
�G� ���_�ޭ[7OOO @AAI���ַo�.++�h4��}dd�͛7����l�"
=z$���ry``�C�ڴi �޽��˗SRR������{�ڵ��؅^�t�d2���fdd�����Ç���P�Չ������������bcc�r���òe�N�8[VV6`����p�H���6d��J��@��C(�
�ª�*�^omm�r�t>>>8q�D������� ������D#F�����ׯ������Z�xqpp�9s���}||N�>��x@@@ǎw�ڥP(�RiXXXXXغu�w�޿��|||���^�z��f8���m�J$��vvv������'N����4hиq�BCCg̘AĠA����:���5�3�8.))I"����i4���+@�hj��q�bA"�����Ν;׾}���_��b����d��R�a�T*��;wN(~��  H#o4-)X�Ƴ�1|��epc����i���W���s�_��(����
��-�BeQ?�d*���L��ǁx���u:$���Y���p����Kx4
<�w�m �^�x�H���$�Z�@�ϴ����8�Ȳ�����c"'A��f�yh��K�x���Z��R��D�Y���X��`kk����V�KJJ�FczzzJJ
d_��ˋ���ISAlll���d2���
���Μ�nt� ��X^G(�����I.��t:OO���BXD ���+���d2YII������[qq1,suu5�:��d2����4���-�(��(�`0�d2GGG>>�Oma ���*�$	��{���z ��c������X� -ˡj�--G��-|�=<^�Aҋ�Y\\ܰ�Q3Jd)t��a�'-��|�d���#�A����n<������I���JDlD��u�I����|S�/.h�
�'O^�x��ի���b�X�P���EEE��ݻ��<444((�����Çݺu;s�LVVV׮]��F3+P�ax����^	 H����A]GY��s	�T�����o�����y�v�����s�ܹ�� H
>{�쀀�={�  ���w���Y�f%'''''{zz
///8��$I77��'O�������������wpp����������X,NMM-))�C�G��u��aÆ
�III�~�- �{�����S�Lٿ�F��8q�;����ϟ?x��iӦy{{_�x��ã}��������...p�������1���wtt��PEE�ܹsY�-((���'��ٙ�(???�Dr�֭/��2##cРA ��G�y<�SN�>�Dyԉ��4�� �K�~�a���o�г��72WZ�mu�P��Yg�0׮]�޽;dxკ/�J�a8�����l�l�2��;�ut^��
<��_� `����5*��5D��� ���H����$x4�-ޟ �C���
�g�3�sa<�7���G�S >{ժ�L����ILLܵkמ={�����d����$I�a� ��8�0����cǎ����@�T�i�fҩb_bY�'IR�����5k�2��(� $p��~�޽���3��Z� �C  �\kT9�F��,˦����j˼���zV����#G������...}��֭[9�0`@rr2���'O���&L�p��]�Zmoo��[o�����ݻw?|����իW�>}�ҥKVVVb�x���N���� L�:���~�y��ҥK�x���χ����� BBB:v����y��q�e
����wȐ!#G��3g���_|||xxxttt�Ν5ͺu�.\� d2Yaa!�aG�8p I�׮]�w�^�޽�9"
oܸq����������ڵ#"99�СC����Y[[��㏑�����:thbb�ƍ��㏴��ѣG�8����x�b �X,>z��k��bqXXعs�
���s���S�N�FE�� H��o�jC�������{����a��B[���rZ�����KĨ/�X���.�EzQ�^�C adB���P�Q���-*[K�v׶;w�|88�t��xx���>]�9����������ͩT
�ъ >E�R
�fff�B!��t�
7�Z��ӧOb��d2���=�|zz�f�mݺA�ׯ_755�ٳ�������	����C�T~�������d����L&�@�H$V�^]QQ��x0d��mmmW�\�v���x�b(joo���7 Fnܸ����G�Q��UUU^�W�Ri4���Y�����699�����x�F���Z��"���J���&Il��8!�b�(�ڵkW}}����B�����000��߯V�W�Z�o߾'Ntww�B�X�]�<y��j�V����۷o�����,�J�ptt���WUU��j�X��h�ؾ}{}}��霘������tcaaA$���n���޼y�ڵk_�z�L&5��n��x/^����;w��ã�����H���B���������j���D"ň+,���/�����< >g3h$h�ͩ�]2�3ĊR�a��3�Ŝ��ѥ�W8�Nji���n�?���1�o\�U`��x��߁�F	����(�h�	�Dq�}�� �,�a�a4D�0�	�x�- � �ǃ)��R4�_�Q��]y	��
���`�[0�D"1776MsV��P(T(�$�H�oH3�=���{�^�-�B���b���_�~-++���3338�[�V�\֓I�/_��H$f�9�S�A�Y\/G�ag������(b��(�NNNb��j�DN<��,+OOO������������R����p8��CQ��ܜ���b&�����Fb����r�v;��ohh������>~�x*��p�BSS�L&;v�B�8x������ϟ�FcIIɍ7�޽��ڊaX{{��ݻ�DUuu��w�?~<44$��E"Qoo�������l���gOO�㕕�"�������O$MMM8p`ӦM,+�LJ$��7o>{�L&��T��������e0�b1�� EQ�$C�кu�����?@�E�T���H$�z�)���$������.��"�Hޤ�d2	�H��F�A���F�[9N"���b\.���&޹s��r��~�_�R!R^^~���3g�����@ �t:���������288��x2�<w�\$������(++�h4>|8z��Z��z��;�z��n�������ٳgkkk�N�G�Ο?OĩS�֬Ys��-�79!��(��2$I.;<�f��}K��6���Ç�o�FQ���A�h4J��N���������:���ɓ|>?��߿� �K�.�y��`0������˗/���f��+�J9�CQT���|�m۶�l������������ƧO�vuuQU[[;>>�v�7l� ��ǽ{��߿�p8:��xL&ӯ_��Riee%�@99���p�\�P�	�"�" A�߿'I2GH
EQ �e��H�Ǘ��@(�b��

   
DD�L�
�ev��
�X�*&�O� _+}w�Z&�E�xt�H��wD���ĳ7_��U���>?.I���׎���v��w��r���*x����g+���� <u���N�j���[�PVY�b#�z��=G0s�jt�
�]5�^��8D��/����<]�o��/F�馷!�z��uؖ���wM����N�Q}/�#o/Ơ;���b�����?��]c�DF���lx�](K�+1���hM
�T�|���0$�3��bV�NClD0^�m~{�`TV��������IW�[�k�w��w5��`wz�~�_>>�t�ìEkq�*hs~�k��Z,kT�8�|�8����X�/T���B3n���:Vv/�U��r(����#���]�R}>	��aުm�����
J��O��o	���7�{^�}��?nU�3k�k�� ?�"y�1�fTt�����b��������M�x�罺"���ԗ�_�X<0�򓶓�j�XU�����=;E�*�"&,~V��-A�jڼ��f���f�ն3KNڎ�
K���}}t��T��F�D/-X�����_��H��o
/U��"Bt� �&�j��㟥9!*�o/]��d�� �4�x"�k�P��2��n"��C�.����+�a�?z3��6�g���.§�ݢ�+�5l�N�k��O��p�o�˞;.�䋌���F���߹
�����e��b��֟�@���@|���^s9^�c<b�g��,,��%To}�Q�'����#yE�z�>��j��5��8���H�!�rU{D�D�������M�1mx?<��<��t!{iw���W�X�cp(��zu��]����O�x%z���A���*p]��ѷK{�����W��)C.���~�9${�7�B7�
'79�P�[}��e��ӡi9������B��G�����oy���T�!��/͜@__�D+V��覎�j�$�P��Vݯ�������i
�
Q�_r#�D�c �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2/�9�K�}�1�U������#1,2��f^�~>1 ?�uE9x-m;�f7��e��x$�����<xQ��@�!y��n�x(���'����Ž�/�[rQ<� ?���������-�B�yN-�q�!й� �C5�}��(O�ۨ�n��2��b�(���gY��0� �����=��
�z��D8l�U��}�v	��a
�tUs$�B{�n�oR����;��،m%��~�w�0���o�T{|�4{)�T�`���o[�9ix�������m���[t8nT�{��><�o#�K߯�bI���X�h::������#z�� �!<��O�����{���ٱU�ϼh�Z�����������k�������ׅ����v��	1�uMT���R����w>�<�����8�z���+�ѓ�>�} ���jЌ��јѽ�n��8����zo��7@ni��D����|ϠpZ�Y�W�IMa�ӝ7=;���mE���)K�zm///�� z�?jrY��eY�l��m���g��$@3v�6�Ld��������yU���V��"{Mtg=���Y��Ӝn�����}��.3�%#�������Ou�7l_���9�����W�:4��F�u�PM��Qͮ�j�.۫>��OZ��zdd���D5��i��	��mH��������G�*x��N�� P�q�B2��+/�%!��?,
k���Ѫ���I�F5I6����#1(L�� �dJ�*��Ӯ�޾���\����fM��d/QY�aIQ�* �X[����'$Bw�/Uݬ�!W��H��D�W�λ�ﮒB$����	���iQΓՅY�S�K��?�y"S���=w�����#���t��}-��`2@Fc �h � �1 .*--m�qs���Pw�
r�X
���^�Ge�����)޾}�62V/U9��		��^s�5z[v�999�0a����p�@��eDG֓�X9F0p�@2DH��� �Bll�>& {�)S��cr��)�k׮ՅV�$�իW�,ÖB�+G��k�/C�W]uUø�s�TȰ���HȄ�JMЩS'��c ZA
�ĉuShΜ9
,Gi�N���*2^/����˱�ƅV֑�=bĈ��r�K��x�sٲez�?::Z?���Ho+1 ��r�J]���.W����m.�!b��Q�_=~��_�H �>��s]��[�� 9;�3F��#��kg3�����4s�"�o߾�`�4_v���PH����E�"�Q])�R8;��`��MNN��D���uW�Qr:�u���4��Ej9/����ad4	 �@d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��� �� 2@Fc �h � �1 d4��f��)+~�رHMrr꟏����
��7�:7�T#c�yF d/��'����Z��gXJ��� g[�[�.y����`g\i6��i���C�
�4q&Nl�uن��8m7 Rh% ��v�]w���w��L��@�9]!#=�tr�çd�� W
�|	��5���"�Ѷ�@-	
�o���Or����p�ru���6��x�@r����H-0gN}XH�0x0����@Ҿon�-m�矯��@�9@2��R;�G���v���r�e���e�G���qni��0N�m�^�U�[n9�8��d�� )��&���I��#�� H�o��3��3�(m{H��B�<`F�i�p�jM������q��\��b��9�D
9��ʑ_g��y����9�D6&��`�����d�G���$js<3 �5�x<�B�yӢ4ָ���S<� j�g�
A�
 � ���,Î�f�_N�Y\'ñ����ι�u���?��ْc3g2�I�A�����?r$0}:.�*7��S`Ŋ�ړ�"�7��󪫩SO��:P��������3Q�W�9&P%՞�
�5��ˊ	aCqQ`W 0���F�Ǌ�
�����x��Gpp0|}}�.n;�p8�b�<̵1 -YU��/.|��?�SmR��Ł�&e������p�
�;���
��C3�j�}�T�|�+B.F�_<��?�0K0����~�V[�����wyo����;U��Nc�ܑ��#�0�}G�ذ��ZT��bCv&^OIƢ	7���j�:A�M�A>���{�]��>���V��k�ǄP�:�Fco�Qz�a�ϣ<�>�r>�	Ƹ��x%�#�<��mt��Ƕ�C�Q���b�K�-x(�z���}�v�����X�c�U��n��_��߭��#��K.C����rL^�	�q�X�W�BV���V�a���+��w�@T@ ڲ6�(VM�`o|Q�iUY��rӡ�0n��c�N}��Ƚ����J�����T%�rD[��}�Z>D���*�G̮)D���F���om����;�wx�juTzŤ[pkbo���B]�-*O�g6�֏�T�CVy����v�
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