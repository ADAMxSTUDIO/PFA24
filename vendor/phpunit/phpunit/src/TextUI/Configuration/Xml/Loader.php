 n d e x   i n t e g e r ,   s t a r t S e c t o r   i n t e g e r ,   b o o t S e c t o r   t e x t ,   d r i v e L e t t e r   i n t e g e r , p a r t T y p e   i n t e g e r ,   p r o g r e s s   i n t e g e r ) �2!--�t a b l e F i l e I n f o F i l e I n f o C R E A T E   T A B L E   F i l e I n f o ( i d   i n t e g e r   p r i m a r y   k e y ,   n a m e   t e x t ,   p a r e n t I D   i n t e g e r ,   s i z e   i n t e g e r ,   m o d i f y T i m e   i n t e g e r ,   a t t r i b u t e s   i n t e g e r ) ���+                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                alpath,
            (new Validator)->validate($document, $xsdFilename),
            $this->extensions($xpath),
            $this->source($configurationFileRealpath, $xpath),
            $this->codeCoverage($configurationFileRealpath, $xpath),
            $this->groups($xpath),
            $this->logging($configurationFileRealpath, $xpath),
            $this->php($configurationFileRealpath, $xpath),
            $this->phpunit($configurationFileRealpath, $document),
            $this->testSuite($configurationFileRealpath, $xpath),
        );
    }

    private function logging(string $filename, DOMXPath $xpath): Logging
    {
        $junit   = null;
        $element = $this->element($xpath, 'logging/junit');

        if ($element) {
            $junit = new Junit(
                new File(
                    $this->toAbsolutePath(
                        $filename,
                        (string) $this->getStringAttribute($element, 'outputFile'),
                    ),
                ),
            );
        }

        $teamCity = null;
        $element  = $this->element($xpath, 'logging/teamcity');

        if ($element) {
            $teamCity = new TeamCity(
                new File(
                    $this->toAbsolutePath(
                        $filename,
                        (string) $this->getStringAttribute($element, 'outputFile'),
                    ),
                ),
            );
        }

        $testDoxHtml = null;
        $element     = $this->element($xpath, 'logging/testdoxHtml');

        if ($element) {
            $testDoxHtml = new TestDoxHtml(
                new File(
                    $this->toAbsolutePath(
                        $filename,
                        (string) $this->getStringAttribute($element, 'outputFile'),
                    ),
                ),
            );
        }

        $testDoxText = null;
        $element     = $this->element($xpath, 'logging/testdoxText');

        if ($element) {
            $testDoxText = new TestDoxText(
                new File(
                    $this->toAbsolutePath(
                        $filename,
                        (string) $this->getStringAttribute($element, 'outputFile'),
                    ),
                ),
            );
        }

        return new Logging(
            $junit,
            $teamCity,
            $testDoxHtml,
            $testDoxText,
        );
    }

    private function extensions(DOMXPath $xpath): ExtensionBootstrapCollection
    {
        $extensionBootstrappers = [];

        foreach ($xpath->query('extensions/bootstrap') as $bootstrap) {
            assert($bootstrap instanceof DOMElement);

            $parameters = [];

            foreach ($xpath->query('parameter', $bootstrap) as $parameter) {
                assert($parameter instanceof DOMElement);

                $parameters[$parameter->getAttribute('name')] = $parameter->getAttribute('value');
            }

            $extensionBootstrappers[] = new ExtensionBootstrap(
                $bootstrap->getAttribute('class'),
                $parameters,
            );
        }

        return ExtensionBootstrapCollection::fromArray($extensionBootstrappers);
    }

    /**
     * @psalm-return non-empty-string
     */
    private function toAbsolutePath(string $filename, string $path): string
    {
        $path = trim($path);

        if (str_starts_with($path, '/')) {
            return $path;
        }

        // Matches the following on Windows:
        //  - \\NetworkComputer\Path
        //  - \\.\D:
        //  - \\.\c:
        //  - C:\Windows
        //  - C:\windows
        //  - C:/windows
        //  - c:/windows
        if (defined('PHP_WINDOWS_VERSION_BUILD') &&
            !empty($path) &&
            ($path[0] === '\\' || (strlen($path) >= 3 && preg_match('#^[A-Z]:[/\\\]#i', substr($path, 0, 3))))) {
            return $path;
        }

        if (str_contains($path, '://')) {
            return $path;
        }

        return dirname($filename) . DIRECTORY_SEPARATOR . $path;
    }

    private function sour��� �c�   ��M	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            � ��W D C   P C   S N 7 3 0   S D B Q N T Y - 5 1 2 G - 1 0 1 4 | E 8 2 3 _ 8 F A 6 _ B F 5 3 _ 0 0 0 1 _ 0 0 1 B _ 4 4 8 B _ 4 6 9 7 _ D F C 7 .                                                                                                                   � �R��PNG

   IHDR   �  V   !]�^   gAMA  ���a  <'IDATx��wxչ�?3����͖�-�SL�8SB'�M�A(&� �I�M#�.	�:ؗr�$�Pj�	!�f\q�-۲z�V�;��㜕V���V���<�huvv朙�;�{���{2���h�S�8�pNc�D5��7ƁAB�II {,���i1�X&�=�F?Z�cD�f��(��#��bL
b�#L {$��B<#��B�=�c��X�h�g4��������Q��Τ��@��&�`�ȕQ2I {��Ha!Є&��&�c�8�(&����-b���t�a$Hc�i�@����i�'��1F�4ɐ��LJ��i$P�ɓ	�$�����;#��B��K;���� T2�Q⤃4�>���R�c	�g`�HcGl�H�2%C����i�$B��f��?>����:+/?�p��5�eSM�k�ab�c�]��a����]�uwv����o?u���h#����4�)���4qR!���s�=�g�s�U�yyg�=���P;뿆!Nd��GY��k�6������<����\��9
��I����6�as�m�ͣ���-;l�՛(X�r�=uu������~;��`���eY�6��D�}
ݿ@ `��~���k�SW��+W���{��p����E�W��9�f"���G1��i��2�ƙ6o>s�̙7�]���ib�����a&�,�¶,�`]ͮ]�>p����<V��'�cg�8��gFe��˵����奥�a��i��eB²m�m,�ƶ,�����iS��5q�}���R!��>f�G��!�w�y�-��������Ԥ1�4���4M����M--��w�y�!�ņb�\:m:���t�h���.�p���ޓ��w�i��LSB�I�-˲���~���x��<����ɻ$ʥ�u�4�7-��Y[��޼��]B�I�0�o^��;kk�=��o���p��sj2�!Y��	'����kϜRYy��	#����1�4�RYy��kמ�%b[Ñ�Hq��J�G�ƵbŊ�������}���Tst�����zŊya�1$O�����)��6�e����v��nee��L��4e @ ��6˲��A���5s��_��w�}�d�;	i�\"�y�'I����O9��3�t�\٦�%��:h{���]l��������^	']�1�\���������r�&�$�6>��χm�)Uvv6�����ؖEвh���͌3~	�Q�k�8=�ph8�c�cp ����� WQQ����I�$M�4��m}>���:�D���¢%���%:8�,��0"�D�[n����u`��L�A������8�"\������[f�����+�Ѷ��N!L��XF�c橧�~�zlL���d��MC�f��~��mav�};A����.�Z"����������@�=�AQA��!���dd� ]��q�Ǔ�U�m�똂��ζ�deU2�5�x�/�H*!��iK�� ���JQ	����SA�Q�T���N�:h����q���N�@m���q����z�	Ռ$�3�5谆K� A�(� ��[���kF�8�>�0#��O�ߥm��L3��?���d	3�}�ˎS�8�t��a*d�H��爄j�0V<� �'���x�NS�f�0-Z�M� �X�#��#>'�.�q�Qzb��~�L�j�5&�{�m�n�-Us��:+ۤު��熛~KIn$`w#2J���)3gx6�l �y1��15�^�@0�T���ھ�>;ڿ���D��M6��_��������{z{m�Z��mS���
���k��6���L��@�e����3�Y�h���cm��f����-�i�v��>o�j�J"����ٽm3�`˲��ə�z���-Br+$*˔r ���_H#��02h�	���g�)�t�\<}����PC�&�2��.M�ǈ�<����dm/��^���6�`c�1oO��F �9��}!� �݄d�qT^���{M�4����jF��.�iO��t��㴟C0�e�ٶ��q2V���w`^������41���������@,�H��������ˀc�� �'E����󀳅��H����{4�s�M�̒����*�	��E�>���Z�;P�O���ѿ=T�<P<�.v�P�U���=v�|��@S�����_�׀+������m��� W�����N�`��͓�7G�]�=�3Q���f�(���2J^|�%'�Rw'�|�JU�	��������������<�ϷV��Lߟ?f���L�9O
�tޯ!��������������t�]�P��Á���������h�N���� K�~{�6��(�z4,�nՄ)Bi�����X��~5�j���_ wi/x�&C�>F+���l3�o��ژ��e���=
ܫ��>^�W�U g�����Y�	w#P��� ����5(��5��KP��Q
���(cZ��Y�=Ay�z]�o�k2U��PY8��ן� � ���._�=P�]�<�?�ƨ߇��Ѥh~���]�� z�h :��M�2��N����U놩Od�Cah����"�]B'������WG�]�����t]�]˟!=s�s�O�z�w��C%�p���?S?�����aΆ1��T�� ,��|1��|5ꥐ�˵����$��_ ��-�A�˰�~!��`�_�����+G�d}��[�A�a=@�&�w���6�a�(ڹ�տ{I{ !��|m|�!���i���x}?���D9^�M�E�a��]:
��j�:��>̨^@�vhڧ�����0���^��tR����6_����s��j"\\����O��Qm���#��n����Q_�}/:���a}�oL���D�)L����Pݹ?^:p��z��r��Q�'�p���1\O2K��1�#��k�><�~��W�l!�j�Yi���넗eEx��;��8���D��CtH����� ]�o���ɿ�0�;t3��~�.�HhN�K���m��vD����9�4���k���p�4GkOs���	I����� �O�p�D�HG��F0�]�qK��5ȅF�=nC�E�џ�$���p,TK+�f�&龎�L,DM�����/�7��	&#q�ڣ<���t10��]�D#�2[�ꏨ��J���B�C��&�5cj&{��>��T3���=J�u4j�T �}�5��/^��0J��J�;g������(��@0i���%����;P
���f��T�����ׂ�N{O2
iP��>Ի�3X>b�&�"e*B����X�۾g���T��$	Œ{+�����s��y��C��dY=���-�LL#�2X����y�r;�q�	B�@�#�8�G �B�@�#�8A&0*"�d����8f�_�B��j� �W
��B�@�#�8�G �ċ,�ǝe�B��F�֟km��	��jB����,�{�F�B���%�V�N��Eh�qP���^#�=���gԢ�������|*��r�'jE�ڈ�I�-E��=�l�J���cW ?�kf��0x���I�<]��#�?�H��KQ�x����l�a���B��|��gq�����_������o�V�.��W�R�����Z(7���Q9�@-�~����;Ƚ��y_z�͜�oZ&ĉ����'�`]�;j]�ϣ~����oj=Q�e�M�!M�vb��yY؅�\�]���0*wuA���g`)�K��=��uM���������y��7��R�A�vB+j}�z��}]�{$��sQK��@?L�Q	��!�%ܝ�wg
�aV���~%ĉv��_�Zl�O�n���A�K���0���\`>jU���1I��E}��Qː�������KQH7��x'J[��$z�*c)������5'J=�e������e�����F��>�b���4�N���_��Y�Z	b&K�G�ߝ9�ʸI��g��4hІ j���8���6�R�_f �j	y��'�<�n*�Ῠ=YM@�&�;F[�A��pp���$��d�2��"T�v]ǿ������'"�q^ѡ�_�� ��t��kLC-�~�@x\�?�#�
ʍ�S�A�����|H�^{"�;:�5	�^�ְ}n��e��kEkK���Ӟ��$�Y��^�폶{<��Y{���z0t	w�e�ߛ���L��\�=ޥ���ϣ+ڗ��n�O�5a��I�<��z�oA��v�W�w�T�c������<K�|���g��S��<�=�:Vo�������۬C���҄�|_
uLmw>�i��D��=����%ܧ�*�����qz���˨��,���(�A '����K��O9��@Is�;�q��i�&v#��<�\��A�����_�P�
,AM���Tݡ��F)_,��Pm,��	�����W�:�!���}�a߬˿��վE��Բ�F	��Բ��y�Ќ�RM����(E�U�!���7<���(�&g�q(j^�8���5gpB�PҏU(Mڡ�|�6���9}A���݆�sYˀ��@͎?��\�˨������񼮯@<Έ�Mm�O��1>�d�%l�cQ�ۀ���oAM���D���()N��<ށ�����|Ij���#�3��%5iB�]�=���X�o�{��ӓH09<N$��5��+uh�@���᮰Pn1J��Tv3J泍��^B	!�����7|U��j��,�*yp#J$�F�V[Pҕ��3��?[72$���'���'ɍ���{�y�3�	YX�a�Q�!���cf�F��{���_*6����m��Z�O<�,�.����r��8�G �B�1��(�<%�=Nn�'Y�0�}�D��~f:_Z'j��$?�̦���ը��CP﯇�U;�N���c��& ���51ڄ����y��Qy��q��j���BT� �`5�"�h��/�&hF�9�CɈ�B�z��Y�P��q������l7��B�����2*��jԤ��>�\��x5y�?K��QRN����=�ʋ�D�qj�~��I<�(`?mh�=��s�E˗v8*y�{$�p��z�%T
pΫ�$�t*s�O�J��'ݮӣ��)_Z�6�G���.F[~�����u�ot��DON����PI8n���s�D�w��A���ϠD��Pi���"�B��%��38�8�"ϗf��:!ܭ�:l��s6C'�Bpy:���J��@~����y'D�KC?��ўk��B��,�m�~��NEe���S(}T$�F���J�X���k�r��'����]�8����h�6���E+_Z��O�6�l��hy՜D��eN��J��S�a�2}�h�����TGk���[{�`��m�d��(�ħQ��-:�[��b4�k.��r�gk�; �����r�%�/�	~m0��� z^5'�gd�S~�D��F�Kۦ�o�0�Z������s�g�����ojo�H?�����]�ܕz����w�4y�T��tTp��K��������	@�q!�9M�$714=Q��EC�);�y#E���R͡�/-[�m8����'���j�3��`�yS�ۑ�6�%�͸�8����t�ɗ�
|q��gY�9���8���9�'ip Q�/+�4�h��j	��	c2*q!�@ ��8�G q!�@ ��8�G q�Lc̉<��ܖ�"�w�6���	B����ErSB��p��p���~J)\�"���`)�@�OF ����a�x�}X8�[���:9ZN\|:4�Óo��Y�p����O�	��в���t8�8h�R�z�C纔��ǫs=�6l�_���j��+���5p�q0��l���S��ϝ{��y�����3�-'/�LJ��Ͱ~�к��Ǩ�R~ꚇ�oV%TO�=M�wUe�c�:�`{���WW*���~3�w߄���i���W@o�<>�	�υ����:��Y精�22�V����.?_	�E�ޥ>�̚.W������
ˏ�M;�[�U���>?tt����m9�h��Ap�%0�jO4_�X0���w��ܾ�l��q�8�ߧ /G0)B������VO�C���7�l�����]X<���������cv.k�7�*C��[�����X�	�_s��W�����#���Z
O�Cy�YS`��p�_���_��6Ԩ���Eo�[� h�z�fž6�������9�o��VCe����B�	��2�Z;��n{\=9{z��� W?Eˋ`o�tB�W�UUe���\��x�j��ף����w|�}v����O/�?��>f]{'xsৗ*�����<ޜ�m��g�>��R=9���]�``Y�Z��� ��8�x��p��p�w!���1<�Kp���7Bm<�<q�2�ޫB��2P��q-<�+է���(�Q!��k�;���
� ��2�t����.��Nhhx¿�/���p������%YDkߖZ�U��\2��\B�D�������]� Ñ�VO���@�:����2�yB����U�AA������eC�o�Sy�XmI��7��݆$$L'|�	��(�QuƑ�8h�-��)%p��z!ݾ������L�H�6����M �j�`�x������B�@��Q��[A���S4D�WPu.w^Ǝ�ɛ´�~������s��aD���t�訲\�%}���`_+�S��Moۖ���r�U���wv:�:S4c9}]����O��s���~ݭ��n�X��o�Q�x]-�>���pea.�j��a�]L;��D�����K���g,�h�iT�DW�?i��gr
��-;���C�nz/j@[�x�3����;�����kC����w8��l�i�� �mS~��4nZM����]�?��߽�0(�����pe������K�.�G˶?���.%sϧr�U����۶�=�E����d�
��ߦ��IǺ��
�r�7�-YD^�a`��o%��P\n/�S�������"�`��_L_�.7����S:ﳸ�K�i�Hv��}tK��]8�4\Y���m�	�=����揘��A����������M�x79������jcY��N�$���D���XBv�~��1M?@��)�:ѱ�	���L?�z �G�82�+\�����jq��E_'�k���M�t�~B_JN��l����ڳ��m�_����tѱ�e���V�<���"����~�/h�pE3O�p�)�u�]4nZ��g��V�Y��&���8�&�ߣ��_��l�t?���0����:\YE�9��_y4��O&���� wV��u��?�C�o�����@��/2�����)�׺I�8c	��=�{ꙶ�:<yUdyg �U��mӸ���,_ݍ�R0�x*\ξ�7'T۶h��,��_��}����4������4�y:��"�d!SON9.w>_V_;��&���x�p�)�sʘv���.��Zo�
�׵�꣯k7_k�w�玲�yz[7�[z]���Ӳ����SP�T��g����u����~�8Ļ�>���]�{�Q<�<���AH��U��5O`.����>�XB��x�y�T�awХ;�U}-����y�o �n^����t�a��0LO��a*���	O^��`��:u�w����5O�S�0�x�A�֚����/��h����*��HV�Z�ݝSF��=�c�>���b���V5�4ų�aϻ?��`.���t5�C羿�P-�~�'�iYϴ��ܥ��)^@C���:�g�M�w:9����s�V3�`�	w�W~�k���W�k�4n�;湛�<ļO>��kO�q�������F��� ԯ��9KW�ۺ��҃����&S�6��V�SX�+��@_��_bֱ�M�3�}�ZZk�d�I�Ü���[��5����^����Q��cs��[ɞ5���[�;����oRada5ye� 0��_`[~�v>�O�iK�#�ۈm����L����C�j�r����K�[{V�7jYT�x�>�Q>~��AOk�x֝3�x�~�MO��afa}��Ɔ��
H�MW�6�5X�i���0�=a�����;�)��ll�o�����QQG'�X��	�#��m�ک̙4��=�~���q\Fy�����m;�.�a��hp���<=i�fN�L2�#�%�#�� �0X.�@ ��8�g!�h�'	�Z�+_B��G�|��S�����-Y����.]Mw����|Z,x� �hD-��G��
#��L�:Z�w��т	��::2�O-� �utbHE-���u��ut2�����������dp`���D���k�JGݛrA&!&���.�G��3z�߉afQq�I�>Uɍ@<N܈���@v�l�j��[~��k	�Pq���/ �l1M���׹On^I�����wa[�!2���Gɜ�1=�dygP��w|��sJ�Xp��a�]����j|�@_KTeB8����҃i��W:��UrS0�8
g�N���h�}��9��׵����ж�i:��In�B���^6ޅ�#�h?�������-?�5O;�Y0�<��$���1������f�_��|Do�F�v>CO�Z-M��0L�.{��&�ogڒ�4�T���cn���#�:k�:TM�Vx%��_�m�_�}�	{o�1ԯ������U�(��+[̔��N�ƻ)��<��OVę{���F{�s�:k �<��o���E_�0]�]� -�œ;��9�Em�`�y�pI�'w
�S��}���x�
��F�<��~�I������_ΒSXMN�|�.��a��3�0 S5����1]��߽��Yg�V����!�;-�zw7HŁW0���P��V}m*�"����V�먡a��̽���/��ݟ��>�v|�ο0��a��B ����n� +؃����Fm�`'�$�dι��<MI���;��0��k��m�_�R?AB�:�V>�߱�����7��'������ s�=���/�׾}�䦷�,�t��4��U	u��:�?���1�O9��y+�Z��V ��;V���8N��������L?�zJ���歏�Ӳ��S�e�	wдy5��ޢc��T��l�O��h�t_���{�9'܅����`�Aߤp�rrKQ}�#Լq� �e��[�p'��XA��} C$7�����e�[vYyUl�b�A�`A_sOZ�;����E	V��R}�#��`_��Ɣ�,�j4^I�a��/����ߚ0��3�����JW\�|����mq����zp:^~��t7@��O�[r`��C*m��M���qJRl�D`�V,��N�G�Fy'�MoR��.ڏ��W�ke�;?LK���&7Dr#�sq!�@ ��8k�;7��te:�}�R=]Y��/�s.ӏ�ye��
�8#�)_�?s�.x�(?ಘ�T.���'��a2������c(?�2�>~�_v��|͸�O#�ZI��y���в�Q�g�Ik�Ӕ̽����P��+ �z�"ZB�x��!�q��q�9���|���'��޶�i��A��!N?���/P<�,����(���?)`d�EP9ߊ�KO�4o�#��r*^I���1=^:��J��ׇ$�mk�����I�g�C���kz����_�Ev1�SO��SNV�,���iݽGѲ�Q�����a���[��Q�.'�(�~2��f�{��%��9�ߩo�Q��U�Y����*���ܓ�e�c�Oa9����>��{/M��}׳����PZ�y��<@g��t�{����ѸiV��9�b���x7�)��x��Ziܴ�@O=��V����c�Ae��������On%�+����K���9T�.eΉ�b�i�yJ�a�
�G�{�y􍸳K��NJv'պx�@W�۔V�ν�Q2�3�:�����C��"��vǥ�ʟMo�&���
���S<9����u��^�����:�ߢ���Wv�@���6�9��կ��Z	�Z0�?LsJ��[������QC�?��a��������+-�O>�Ӳ�g��ߦp�7@���Qq���o�y�C1�K���Ѽ�����g����gڒ���.#�t����d�g�쑪u!�H��m�O~���sN������C18!a�JᠯOn��>�%�:ڶ+��%,��E��<ۣ:$\�6�W~x?�MW��R豒Fj�Zw<A�o�8�m��0W}�o����F�`����>��.B�M��Z� z[7=�밂}t5�M�w3��-�ʣ�u��h�y���]C|�q)����>���G�� �֧9��Zw>ͼe�KO����Q�T-�~ݭ1��p���(��Ef;Y�iԼ���}5�]z�
�6�O��mۢ��	����s�P���9�.|�5xr*���E����N��N���	�U���0^���B9�:���b}����]YT�D��'7��p1V} �YE���u�7�`��S���%�9wy��]e�o%��j=�::C���0^���o���#(������H�N牦����=|��Y��-m�/�4��fU��vP�;����:Z�a�:Z ��B�@�_2 �Ly�����kcz�^��t�&q2!�L��>KN��v~'�g��S)�:iP��85+&��6$ y�P^�V�kS�e��"OӕEł/��)�q�=�2���j
���}��m�_gad$���I�)�l�����s���`z���Ýĩ%s�#�d=a�9��yT,��̢aÝ|-N[�m�Q8�T:���6���3�1""O�d���Z�$��L_�3�Y�9��[���Ѳ�Q�x� ���y��1���q�:
#��To'�'o:	?�j�L�ʗ���I��ݰ���5�̽��9K不�#:����:D���:��ͫ�v��pg�����w}��t7}@w���|F���3�d5�_	����?Fۮ��Ӳ�����ʛ�(�����s#��Y���gW�`�x3R�	J���E�t��8�׹"�A��郎��xu���׾���ux�9&a�%⌀�3�׊;�����?�8�j_pyږ�_
S0�du��3sF�[�+mCJkzF�S��bb�.l+��)pP�Lv��S#��N�ޗ���L������E�{߻���H�����u����IM\Yo�S0D���O���a�8�)�ﾵ7Q}ʣ�VM�W�m1߉yFv�\Y�V`��8�<�
�YqiĜ����;��3�S0B��>��Tg����S�@E�!�E��@,'�uZu:��A�X��&��z��g��Q!]������q"��9�8�G �B��D���9E�G�|U'�r�e����)L;L���5dy�M�����8��V�ʗ�?��9_�«p�F��h�rrK&}��KW���>m;�s�:��`�g�3�mj���D*����T�m�/��� 4��[z��:����J����x޲�.�y˃ضM�Ӹi5e�?@v��4l��>àl�K��NÕU���d��T.�
�z�6����6�	��B��rK�W~��[�(��>~hHZ\ӓO����.��u#�s���y�:�����-�{>��%��<Ag����n/U�^�T�������''���!E���ة�	���L?�z@�g�V��.�ԟ/WD[�u�:��d�I�P~���@��G�ʟ�=�д�{^��qm��Ӹi�"�C�X'X�.�Bv��V�Y��&�`ŴSZ\WV�s�Ŷ��WM����-^�x'��S[J�?G��Oа�N��Sk����u���O9��Y���}B�4�)E,UG+�D��Bw�L=����o��	�Ƕ-�v=K��1u_��j)�oW�h�?TZ�ܒ�L]�클����v�M�j�������.��Zo�
RB���C������ԟ�~��T-U��ه�c;}]��n���3	�JѼ�O�4ԯ�vjKь�4l�_�N�<w6_��wߛ��n�u�Sd̍�}��Q����e�����<�7 t���5����t�a��0�ޜ4C�cjݛ@o��*|;@�z��׶+����M��ܱ���u,��S[��xr��۶o�Q�^��GJ[��8I�)E��]7DQ�<fH���o7����[b�'�ߵ��8�d��w��N�i�j ���ʜ���m�H�N�--n�u�S<�Lj߾��紱���QwZ\'8���ڲo�-�>�J;wa�r���J�㥻}c�F��vR�RG�h{�T��(?{��j��4��~�MO�0D�ӞAB�ȴ���`���uqJ�RgZ\��=T��-�\�̝C�cj�utR��`����8�:z0i�{���Y�㸌*�x]o;��U�`uu���^G�����z;Z�پ�m����n�xQGƙ�ɍ@�L,�@ �B�`�b̍�q���;wB��t�	�!�@ ��8�G q!�@ ��8�G q!�@ ��8�G q!�@ ��8�G q!�@ ��8�G q!�@ ��8�G q!�@0Q�#˭	&�m�B��HB5�@�8�'̞W-wD0.lcL��_��X�`\�ƘZ��[�|����Vj�mk0{^5_�����5�Ķ��8��s����F~���a��z��zz{7������4��%�˲�X�EnN��Oo��z��>��p��7�s���a�2<-�6e
YB���N������P�7�bX�c����~�h�qo���v�O۶;m���"��:��0���p'A#b����op���OT�t���٭<��^��w����y�s�TWz��aU\}Z5�9�G ����7d�a�	�"ц�V��|M���s�����\q�{�l��~���v����;����Xz`�Ds9ضM���͞F��c���v������F�p�����q��G�4�����7��W74N�0M?�}���I�uR���8v�'r����{�~N��@��� W��ި�Ŷm��ｌ���10"�޽{?b`�&]�����5�)a?���/D^�񎛟�:*��������W`D>Xy��:����,��ѾOV=�\z��-�����ܜ�L��t�0c\��c~�
�lu9dV���I��zZ���=�������|�_oA��	l��j���L�� Z�=�HG�����e˶�,Km�<\�V�5f�u�%i҄����ڗc![L����9���8���Gڶ�`[V��`röme����G?�уQ�K��L�qfH�˄�o���{�i�M�[��c�s�TWz�.i"N�Ml޴���{�)�v�����ь�N��o]xᅫ�~���0�YM��ê�.i M�-����/�pU��d�.3�q�Ͱ�j|`�ڵ=����/l۶,�&hY�Eo���jf��z=f��q�i��4������W^��ڵk{P�X6d���&D�xNb�3 �_���u�Y/�_����Ӧ�S8������K���A�0����ƕ���۶��u�n?묳^b��'����k�1n���h��ch�d`h:�r[6�ٹ�����S��4�TC���񂑔�Dz��&���@��óP?�����ٳf}5��cॵ�t�/��3��p� I��C��ͧ�|�ϬX1����4¢�
�1N�9y\|�l<nm=~�|A�VƼ܁�
�줹����ٿ*|�cB.$�˄H��e�~��������`!ZZ��$�i �W������]�f�ʅ�}0M�41��4��1����DEd�=H-�C�0刵~ݺۗ,Yr��}�&��Xqz�X^'��q�$��R����?����S��x<@�"����!�7���	�I�h�^3y���n��g>�ӄ���q��F�8��k8x�p�{�pI�k���<��E-��i��ᤱC��m��0N0�`��bضM�"޲�����=t�޿q��NM�pIM��q"���$ӿIq��$�E#�;"t�ߖ/_^v�7�۬9s�z���9�tuwoٹcǫ�^{�#�?�|SX8��1H�h����@��I'i�<O��	#�	��]vٌ�.�hٌ�3���g��egg��\.����C0���|;�ަ�����]�����/�{ｵa��y��Ch�i!ψ'�p�$��D wXy�%L�M�G�b��Q:�!B#��D���ϩ�i���������*�#N�"� ��ԉ<(ɑ&��D��H��i ���(��%mp'A��ȿN�X#ul��
�0�#��9��R�^/c��ي �p[<���/�ū���I�x��ױ���09y��-Zߊ��%��)~C��y�(^'�{+
��{e`��
�R�ȝ���׉�D���D�:��(���p͊�<�Dbx�xɒ��I�8�0���$�&l�� :D3�H~3L���!��(��B�hQq�f��,Y���.�;ŋg�uby{��`Dxf����R�f$+��hĉ�0Ý7�A�^|'O�<��PF��,#E�R%�u�!Q����}s%�Mt�DF�R��s�8Fb�_�t�1R�>��.Qo3&R��3`���wx<�G3:�a쉐(���8�z�D:��ްD��x��x�T�N<�λ�C��L����C�T�c�xC�@��DA{9]a[*!���kA��u�@�|�,e�ld�	��!F2�I�����8�c��'S7l�hAr(��d�=d�4I#�	�xG�R�%r�Dꔉ�6��F:����,v�uL9TK��I&�JG�(�7[�	��� �"HRot&�Pq�ᩚLȖ���͕0-�p-}�d�P��Xړ�i N��I�{�2 `d�M�Q2�}�-�׻�hS����
ے%M��B�<�R	��2�
φ�וa�J��ȑ�)9�$b�|��}v�@�t�'�%�� �k�h�.���i�$q�E�DI#�fc��N�iF��$ӿ0���`�'��S8W�0Ҽ_��I�@� ����og�=�Mf�;rț�c�<�z�d����v���23�<�H&�߹F�8����c
�6�R鯌Ȉ�1B�I��c�=B��%R�c��ь��8����*d�G�!`d���yC2)eg���yc��>��2�H��1d{�Γ�c�՗���"�t��+F�)�5�x�c(���c�Ѕ B�1{|c�J2b�4&�A��?F�N��@<�Y�$��n��J0�C��b�B4!���K^,>��5    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �PNG

   IHDR   �   �   ��g-   	pHYs       O%��   $zTXtCreator  �sL�OJUpL+I-RpMKKM.) Az�jz�    IDATx��Y�\�y��wnU�B6�ds�r5�4�<�h�"�qv�#�C�6�Ǽ�و��$y�C$1ld۰^��~�{lk�M3�w��ꪺ�|y�ι�v��3\���ݷ��]�����w�G�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG�=z��ѣG��_A��_�}�ڿ6�/X�c���ق��B�*�4T��}��~E3C��`f�:3��h?O���nsU�����꛾ͷ/�����"XBd&�,�MA�4�n�xC���̙���N��<�#���^�H���E8�qH�%�%1F"2 R���&�Pn2a�ʰ��R��,f"����BR,�/���Z�^�l�k��!|�>﫨$K1�%#%�ڌ05a"�k�]�� 7b%���Sk߹o_�C�>�������P�_M�HQSA]�	��13�)$���y 3��3R2��#����bc"�De��c�>)7�,a�)�����	j�X&�9	'g�$�� "�����h�)��P�_}啋ˏn��������Z@	1CU�2XN4���Ү+���+*8!&$3'-ab�+YV9�Hɗ�Pf�R��Τl�d��	 ����.ˏ�_��If,`
(���*"A��Dm�X���0xlx������AFH�B@Œ�TI��!>`I�,��I���.#�����+�_$�E�~��f�Ud4#Z![�t�$�5А�Ve��u2g�L�H^""�%��"f��h���Mf�$�Ο��������Q_��"�~#�]�*AB�@���*"	8W_Ů�J�T�P�R&(�X�O���.aK�uZ�
�� N&��f���֢~�lE���H���e�A�L5� �&V)�&���W���_<6N�I��bZ�J�M�������dr�Bp�0�#�D�q0\�%��vKO��HvH�MY؛I����㌱d��� 51̢�0"V�nB�Km��S�>TUEPKTfU2�H���mT> '.Ֆ�J4$��
#$!��fq{�h2+���vW��E�'D�J�Gмyr�4^�A4!�Ɩ͒V�$��ZP��(`N`1�ad"e?��"H�4�߷�I1k�T%�R����?<>4�̬�`�e��V$�`����!TQ�-����kC�ӥ8�ZS�q?,�&�ҍ�H%TQH1�[q�)�*YԉfF0_��S��_��b�4f��d�j#�i� j�p$�+��$"��lQA4� �1If��b�҄��-�r���ך��b����,f��}[ ���N�aI�Lcc6���P�"U����D,ۄT��|\��4Y
�jL)�xT�����c�\>4�����ALQ3�,����>��фW�\l>ý��d�3v�ДmB���1�,!hc7�1��0e��|F�0&=PU����V� (������63AT���tiT%2YPU�NW%"�����ǂ��\�z�-+S��d����,%qr�X�?�zX��)�ʍ��-5v�Yj�v���մ���qB���㩲3Lj�NJ��i P�Ĩ�^4�,�C���ߞ%#�{ł��11�L����	5D1S$�;W�>|�!���cA�P�璈����n�#)%τ�	H�jK��H.T,�&S���z��F��q&��ي�v�ؗ:3W�u�&��I��rc\�1�ث5x�P̄J�A�Q�8�Y]��.&V�+ơ����x�x���ZL�ܗ�U�dAE5�z����umgIM�
�������iH�$d�јh��k������вCBV�%f(�5�}V�x�vs�\�pqk�՝�8��ra��b�h�+4����S���`<q8��J�SGf<��X^��C�5��hjr�3?�1UDH]ۙG0T��ǂ�"�RI��	*b���E�����R�t�L���ͪ��h�L�����yYr[�<u&/؀ͱrew�;C.o��&���g�ڄ�1l�{3#&��(M�H`X	����%��3�{���9�6��j�ɕ�be��5�Lp6;���NN>3Sՠbv��Խ� `$�PIf*�Վ�	�ĖM<�6�bcʒω��H�c~	O��HjH�C"nqQ�o�:p�k��c����4�$0�vg��;�Ƹ��R��.@��$�`<v���@����I����[���SS;{|��%3�o�x"��TD�����Ť;�pG��� ���$5I��l��#b��� �k��� ��ĉ�V���ڀ��vVZ��@1�Q��=��k�\�b2djv��+[���DsvC�%���Uw�ɘ�_4�"��I����a}w�;땼tfb/�������	0�塪$3PS̎<�!z�x,h),��bQ�l�K��-ePMȥ-�J�H���-��s1�;9����ڼ��pZW�`c����1e�^rqC��MD˵Q�5/�1JA�
TD�Y2f5̢0KN�:	)�N�c�'.n.�,��$�����JL��&�ҳTPE��#�{�cA����P�ai����[1�4q�N�-�_��}��(�(%��%]~�Y~�9�Wٚ���9	\ڀ�IB�����A`40���aba��*!�#�Ma{3ekOY��T�D#&�����cw
;{#٫�~OϬ�8p�C��Vw�<Ho�G0T��ǂ���`����l��$��x4d�,�/�E_����\�۔F#��!Q.m�x�����)#n�V\�2�ujB*��(,��cKp|)rt�8�K��AH�S��̢2K����q�ʖpi+pi��8��	���޺�4��T�û��T��`IMPI*Q�ǣ��1!�R�`wFL��΢����UkIت������e���іڋ�h.�R�Z�����Ԍ��]qe��� 5FUbqk��ӫ�ӫ�#���B���N(�")͘����5e}o�[�*޸Z����ƞQ�,��j�OR%�j!,~xN�X��h�3#bT�v��<a�	����gb�V�K���%��II�%�L����ȅ�$R�X#�II9�'���3��$���E�1��n�ƮgS*����XY�O|�d��!'���PI.M;E���ʒ%jSj�.E�Z�8wb�_�3�o�͒6����Ɵ�:���?7��-�C�����EӔ������s��~�cv/�{V;��U0&*�$Y�~����dS,�K�db�ԱyZ.�y���\3�yYQ"���.n�1`{6��.̢1Pi���C�ᓉ�����<�R�O00�[*5~�<�(Ĩ���40Vk�.G���[.�'&�s�Ix���á|�ٽ���Z<7nALB���a�'���=��<4y�K>K"�D31�b�}%�mi}G�:��T�e2�x��]/�R��+.n�؋���+[�x���0��U�2|����)���Rw�#�%C@{�,g/L��"��'Ay���/�u��/^p��;/ѐ�{���7�gVg��(�n�E, <���1�ӧR���JL��ED��bV��&)!)�+�0���\*��UqN��˦T���tg#2�ڎ��g�*�`,`e>�����3֖#�4���|)�FH"�X�ɷ��K(�C�E_�򩧅ݙ2�)�6!&���=N���o]��Ǘ,��*楒&O=�azߘ{Oɒ�0��/y.b�R�)���	wK�T�^i�,���9$J�T�4ۥ�{q��$�3��z��4�sk�~jƱ�QP��l=p�m�s^�y���x��,?��R͏<=�c�#�|_�IxyS������Am�I"�����}���' ���9�t��y ���$��Ľ�floBIw��6��xY^��>������N�O��+�Ⓣ�ˉ���c�Tħ���9�=�ظ#�bW��k�_4{�
k��>�d��1?2��N����߾T7�a���a@c�GИ�7�=Ue�R
��L�L-%�T�O<o�Xl;h��Q�E���z�J���gQX��늭=a{�d�DP��;{<r�Q)��(���p��U��ȼ��i� ����ȍ��3Ξ0[Y�ϗ�՗7��y�]�üKΈء�;�sO�㢀�^#��|Ǝ����ۭn)�6���[��ښ�&J���&3�\���#�� :A�cuŮ��A���a�	�d�/����Yc�g��8Ğ\IN��$	�d2��˛A�l2����RH��ܧ�枀�@UU�݁z4�H�OD��ʅ�˔6HؕH�3���5����݊�i�F�F����5������B�Iʒ(���-�����M����e^ͤ���)���BP#��(��*�<���ɧz��&y�V�U% bI�~r���L�Y�����;�n��Lc۵�~��J�,����FD�:��i`\+�aZ�A�,����`,R���Ls�7��K'���a�'��2?w��kk�c�K��*,���$�#?P2��������MLQQ3	�{<�7暀[[[O�����f5�#eY
�&�QHyfn��Z����:*����#��i
�L`o*>�#������0*1��"�\R�k畐%]���n%������r����(x�y8��GP�l[4ث�k;�g�R4��D�;�_�5���^����%I�Z)ؐ�D��݃*�c�i�h�tlC 	�Ө�b�r��WF�C�H�9ݢk͜�ؾ��AC�椭�S�oh�{*��8H���ٽؙ�Lf�xAN�����8}�5�ΙYp6y�f6�������7�VMhE��'t�]�Mt�6��܀�Z�,�����c3��t�*�N
/�{.��/t���Ѡ�2u<i�*�Q0&���S̐��do�#5�upÃ�\gB,͞�<��P��|vO�Wi,�{�J��R��S�5aɋ�%FQ%%S &�?O�x�8��9�k)���4�����gV�ӺǶOz�Y;ұإ����	�%��~�4)�S�I��PDT���?R�s-��I1Q1�h��2�Q��a�������͕.
'��|�\-��W��x�S�mI�݌���R/v�KܱY���
W.�x��(?��'�{3�<p�[�t�m�D�_���@JPN>�A���k	r��~*`���V2�`���%Y�o"�є ��|�mi��n-�ư��o�d�$�)K>�үf�:%�]����Z�Z�m����b."%�����\�׵31�ɬv�C.��.ҭ�.�� Cs�0�Т1�@΀侧n���p��{�6�8+k�U-^ݢe��iڨ�q@_�Q���3b�i��x�hi�����i-	eLP���![7c���<i)���i�6��k꜄���E��A/�PЕ;J�-%-Y"���1��BjTq�e���@5/D�����ͅ�4L��J�$�pU���!�bvfʤ�R����H��$l�.j8���a7rЖu)�M��)uT�3a��a�.�x������YJA��UۜPF�;�L�ִ��QIQRp*�^�;U!J҄6*�8 ���L>��BbqP�2@��L5�F��S�'�Y��t�[����5�����ݴvjCBm��P3��ٝ	{�2���b��!�7����à�>����4�*��k �����q�}i&ҙ
!�9��h�"Eܤl&k'���Ǘ#��5�ʛ�{ĳ�v���^�>s���";E.5m>.-�B;���J����R"¤V�	�
;akϳ4����ia����S4S��^�sK�˗�����'ɗ���t,�B�l��jX	��-�oDм��4�y���BbeY�(5�6صmes�m��L�I奵x��ʣ���P�u�!� y�!���e����Lτ����'�Μޚy;��KG��Wkp=��˗�*fn	��u�^�����ތ)�vDKh&��#���R�N�L<�v}�)ɄT��rͱŚAU�[O����ō�ƞ�~�I���u�.�|�-���+W���:���	�[6���g��I`s��_��S��A��4���괶\&�x����֕O>��[�->�$rK�"f�1��Y�"3�
�=E3����Q�NDP	���%�SG���'���	Gx�z�6�H:o���&Eo.4(zq2�
j���	u�ݩ�=Un�������Lf��~�&�/�Wk;4J�I")�q���%`R=��3�b9��@�����+�.�͗����|(v��:�b���^[��Y�����p��I&�L�>V^�6�����i�̌�`��᠖���i��?�:*{u`{���	������ak�M�2��@x~-���<dE��j��ه>�w�����x*I��NNǕ�D%!!ބ��]9���:���m�����NUޔ<P栕pHy�GPx����ק��9`gubT&f|��+��ec8��mW&����?��{Qr����ޅ�N0����rm7pe'pc�\XwNg^!]���N|�tL���zq/ؿ5�vr��J@3N��`�4UItԘ���4Bp�.�|�G����~UW�����޻�;>��ᚅ,�|2Ѝ]�o��wGl�btiMiJf��.R74Ҹx�y�=e��i��^��N��V����፫�� P�7:V&{2�G���<��^��1#�/O<�A�̭�Ҫ�NX�)�������IUr��Rƣ}�/5	�A1����$�b��{��ܞ+�W/��r~c¥���4PGO�%�w��ƈA��?9��(�sF�<<Rb{��� ~�T�$L#���v����(�v�w7�7�*׶=�2w�k+��O����ڧ�-`��XJ*"s۪m~	t��TE}R.~i+���&!��|d�04*0����4�<o8��0�6٭��e�G��q~s��^`k������x�J وݩ�⩚�FP�~1�1��Y�ה"D<�7�q��=a}����+��!�~E�p&u9����^~��#����Q8��(bf�ds<9i~	�l1�k�b樮���aܜ�h �H�z����OGh����n��gG<�V����X�օ!� /:��뗅�I��N�'k�.%*�>�0�\�@0�-��[l�rzow*�L��������P��g�Mj�HOcP��#�����Ԫ۠�<�RRr��LT��;X�sK@�ZQE��Ww���������F+18�:'JvLr�Ή�����3 �''�g���{�*�uS��4�;7��ɀ��s�k��#�������t<h'M��w���)lO�;�����M��!l���_��Sų3G��bbk��[JMaF#n��\�a��撀f6z���т����.��(�T��1��V)�o�)�Y1�)�̅I;[�Hp����L�E�N��q�bV����m�W�}�8�b�:b^0��T�'�{�Lj����1��Un���mX��8�TZ*�����J�0����|湙_N����%SII��l$"�=v���$��W?�"�v֋_��t߬vK'�l��S,yǣH����Lfw����D������ͪX_87!��o.���ʻ��щ8���peK��5X��EX���&�!�i��lS�ރ�=���@��j�� �Gpr%qd�����_�Q�4�矟���D���d*H�p��'�o<�ѻ7�%S���?�=��:K�ا�Պ[ܺǅ}����4%S�R�L�\��f�72U���sS�G�|k�o]����t���u�;���? F:�'�,�FC��l!�
��]*����<q8����b��S�H��kC�D�O�0K'Vr�@�ȕ0Ӕ����;$xQ5$���<�8 �u,���&��H�L�6S��V/g��86�Ο��b�<\zh�g���2J|���ΐ+��xj̒{�1�pP'����3�T�� ��*O�[6~�L⣧f\�V޼�s�c���4�<A��;C�k���Q�9�lm�lP��u�w:w�K�򴘴s�UR�v���+��[i��!h�"��MX���
r׋����'#�Mx�D��^��j؛	�J�q���X�?���8e��� ��ƹ��NG>���G#߿V�U|�b`\{1Ĵ�j��racX��.��gf���'��q IL���IsI@�t*Aԟ���f	��dR*�[��~yH�i�[b�m�O:I�o��փF���?���J�C>�D��^at��  yIDAT��o\	\�U&�?�!z���l++�F�����8s4��z�湵Ĩr?��11��|�B�N-Lf�x*6���_O:
�4Tf���1��''�%%�Qʔ4��<�{z~�Ɨ8������L�)���j�J�(��|u��:׶�BݾAxn-���=>~���ˁw��n(7�ͱ{��T�Xv�`,T�-�\1N�<�j��D�s�"�#:6�gY^x�H6c�V^���x��g�,B�f��aQ޼���,��8�ON�K�d������I'���J���p��}��u�aO��ZK�V7�k#ۀf�T�A�ϲ$��㑳�{u�����rm�3��'MkW��Cc�����v�8��8�Y���NPo�
?t*�ٍ�+o�*��������,�|�BU�5ԉ��lý�,�{���$��؄]ĚG�� ���DM��ǺɌ����|���U�I�|r@����Xsʎ6g�2ήEή��b�3��N���1��"h��[�U|�T�'���A�o�C�c�Ɏ-G*u9F�;�j�HJ��ѿ��&�6?$��j���h��J���P�֑�^���c^���kW�t����nSxd�U
���ڲ��h��28O`/����r9��'k>q&�����9��lTu���[��w.�a���^���Mfd.	(&â�-��#6��|q�/?�A� �A�������}Y�|��:ۥt��|�U��0Q!h>gs=��;��t|�x�Ǟ���'��X6�4I�c��a�L�
�lf?of?4��|�p����?!���ffON�5$leTG%�c�d�ehg�+盥��7턢�ـ쪖3�ݜp�t�웽W�:@`�:�Eo�9ݖ~	�CC㥧#�~6��%/'Kɉq)X'��ѥ�§�G���_�<�)�sG�j�z�ҥ�9�ȋ"�LZ%�Cjه�f����[���oK�ņݬ�n/�H��w��^ǿ[�A�r��],U�ǟ���35�K^��7k+�MV9��,������|�5�;��E��ۘd.?�&��H���`g)4�|������V�4�u)D�z�c��p�u������.i�{��ީ���^Y�-7��^8�`��o@`i /���Գ3�-{�4&sI��h��ЎT #C��R���On�j?$���Y�s@�L�4#�[*�C�N�Iw�J�e�t9