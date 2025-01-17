<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event;

use function array_key_exists;
use function class_exists;
use function class_implements;
use function in_array;
use function interface_exists;
use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TypeMap
{
    /**
     * @psalm-var array<class-string, class-string>
     */
    private array $mapping = [];

    /**
     * @psalm-param class-string $subscriberInterface
     * @psalm-param class-string $eventClass
     *
     * @throws EventAlreadyAssignedException
     * @throws InvalidEventException
     * @throws InvalidSubscriberException
     * @throws SubscriberTypeAlreadyRegisteredException
     * @throws UnknownEventException
     * @throws UnknownSubscriberException
     */
    public function addMapping(string $subscriberInterface, string $eventClass): void
    {
        $this->ensureSubscriberInterfaceExists($subscriberInterface);
        $this->ensureSubscriberInterfaceExtendsInterface($subscriberInterface);
        $this->ensureEventClassExists($eventClass);
        $this->ensureEventClassImplementsEventInterface($eventClass);
        $this->ensureSubscriberWasNotAlreadyRegistered($subscriberInterface);
        $this->ensureEventWasNotAlreadyAssigned($eventClass);

        $this->mapping[$subscriberInterface] = $eventClass;
    }

    public function isKnownSubscriberType(Subscriber $subscriber): bool
    {
        foreach (class_implements($subscriber) as $interface) {
            if (array_key_exists($interface, $this->mapping)) {
                return true;
            }
        }

        return false;
    }

    public function isKnownEventType(Event $event): bool
    {
        return in_array($event::class, $this->mapping, true);
    }

    /**
     * @psalm-return class-string
     *
     * @throws MapError
     */
    public function map(Subscriber $subscriber): string
    {
        foreach (class_implements($subscriber) as $interface) {
            if (array_key_exists($interface, $this->mapping)) {
                return $this->mapping[$interface];
            }
        }

        throw new MapError(
            sprintf(
                'Subscriber "%s" does not implement a known interface',
                $subscriber::class,
            ),
        );
    }

    /**
     * @psalm-param class-string $subscriberInterface
     *
     * @throws UnknownSubscriberException
     */
    private function ensureSubscriberInterfaceExists(string $subscriberInterface): void
    {
        if (!interface_exists($subscriberInterface)) {
            throw new UnknownSubscriberException(
                sprintf(
                    'Subscriber "%s" does not exist or is not an interface',
                    $subscriberInterface,
                ),
            );
        }
    }

    /**
     * @psalm-param class-string $eventClass
     *
     * @throws UnknownEventException
     */
    private function ensureEventClassExists(string $eventClass): void
    {
        if (!class_exists($eventClass)) {
            throw new UnknownEventException(
                sprintf(
                    'Event class "%s" does not exist',
                    $eventClass,
                ),
            );
        }
    }

    /**
     * @psalm-param class-string $subscriberInterface
     *
     * @throws InvalidSubscriberException
     */
    private function ensureSubscriberInterfaceExtendsInterface(string $subscriberInterface): void
    {
        if (!in_array(Subscriber::class, class_implements($subscriberInterface), true)) {
            throw new InvalidSubscriberException(
                sprintf(
                    'Subscriber "%s" does not extend Subscriber interface',
                    $subscriberInterface,
                ),
            );
        }
    }

    /**
     * @psalm-param class-string $eventClass
     *
     * @throws InvalidEventException
     */
    private function ensureEventClassImplementsEventInterface(string $eventClass): void
    {
        if (!in_array(Event::class, class_implements($eventClass), true)) {
            throw new InvalidEventException(
                sprintf(
                    'Event "%s" does not implement Event interface',
                    $eventClass,
                ),
            );
        }
    }

    /**
     * @psalm-param class-string $subscriberInterface
     *
     * @throws SubscriberTypeAlreadyRegisteredException
     */
    private function ensureSubscriberWasNotAlreadyRegistered(string $subscriberInterface): void
    {
        if (array_key_exists($subscriberInterface, $this->mapping)) {
            throw new SubscriberTypeAlreadyRegisteredException(
                sprintf(
                    'Subscriber type "%s" already registered',
                    $subscriberInterface,
                ),
            );
        }
    }

    /**
     * @psalm-param class-string $eventClass
     *
     * @throws EventAlreadyAssignedException
     */
    private function ensureEventWasNotAlreadyAssigned(string $eventClass): void
    {
        if (in_array($eventClass, $this->mapping, true)) {
            throw new EventAlreadyAssignedException(
                sprintf(
                    'Event "%s" already assigned',
                    $eventClass,
                ),
            );
        }
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 � 1 ���1 � u�s�G�$����1
1 �
q� �1u�11 s�Y{	�5s&11����1�11�1����M� ��qq�3 �3�3"3��1�3�&�q����(��q�	w	��3�s�Y���� ����� �� 3311q ����qq s����3 �5�qq���w�q���5�s�����'� ��� qq5 �� 3 0 3 5  ��� � ��  4 2� �6 5 4<,]~8 6F963� 1 3 8 n�>4 N6 77#�7 K3 �G5 K+Cz1 '3 0� +�2 #z9 /7��g4> ���/�o������� ����!�5���3���/�'���+��k���;�
� �O�ɇ����a����{����������4 �G������K4�C_��L��0��`�\��A	�7�(��~3�M͏����� ���A�/���#�A��3�E�B�=��5�>��J�U���N��!�>�t��W��
�c?����Q�r�G����� ���Î�h�f���'����e>c �G_a&�G�
c}�96�# ����� ��#��a aP!5�
��k����a8a �9�Ba�*�k��-�a	�B�'a3�a��	�#3 a8��8�#�$��� ��#�#��a !'a�G#"�$�#�!!�f�G�qa���(�����G6�=� ���#�#�#�G�*��%aB�a:�:�#��G� a8ᒁ�G �� ��#����,� 3(1315������qq Q��7�5�3 �}uq1��3 1�q� 1q��$Q(� ��%s��7���� ��*� q q��}�� ��m s - rD ep o u� c� : / S h� l l C oP m pP nn t�. S wT i� crrFU� ls� W� n� d0w�I Q�e�n a.8jsb0e.P E xei2q	s _/ TU�mtS	y�sT APd�e�lUptR.�a0l��Yl�w� ��#�1�1�� 1 ���1 � uq3"�%�!���1'��$1!�11 ��q!� qu$�1(1 �ss!3"�>Qy?�F1��q1����1
?�1
1�11.~��e� ��s�����11s�� s�P�3� q��3��s q��1u� w4sq��q��q� s1s	�s>��U13�� 1�quq q1 ��q2�#H�[� ���#1��	�s
3Q
�3��3 �q1�#��s�1q!� �
q�q11 3�#�w-�#�s3���1
�#�#   Z�I� �?��G�G�G�GqB/ ��G�G�G�GlpF�G1R��G�Gt �G�S�G�G���� ��#w/�� � q3:3"11Gq �����qq Q�I��3�q��'��&�� q#qCw7q%w,�q�1�13� 3�(����%��'� ��+� q q��k��� ��s@1�G�� 3 1 4 2 �3 6 03�28��4 \15 \<{|5 \v	N�4v V>7 F��9� 7 �3 4 ���#/�8 #'�'g3��[0G~4��o?2  ��� �� � �!�G�7��A�-���W�?���-�S3 9�=�;�
�� �90�]���������q4���3 �W?����Y���3 ��s�'��K����������?�N�'��m�Q�	�S��G���� ��Gm s - rD e�o u@c�: /@ S h�l l C oP m p@n@n t@. S wT i�c�	r@FU�l@s�W�n� d�w@I A�e�n a@.�js@b�e@E.P E x@e@iS��%s QT�m�S@$yBs A�@d T@A/l��tB	.�a@4l�G� ���� ��G_S*�G�G�#ax`%m�($���� �W�#�G�Gi�7o�Ls~ �G�N'V�G�V�Ge�_�G  ����� ��#�#�#�#cv�k.e -�ka�/`tt �k�G*�9� ���#�3 8`��a��a�㜣�a��ca�3b���� ��a��a��6b��c��������aa��a��k(���� � �/� ��#�c�����c�c�a�a�� c���eq`qq �Q�mq�3��q���sqgwQm31���1�1� 3��
s5�q��1�� q q�5�hP ���� ���1�1�� 1 ���1 � u13�����	1�11�1
1 ��
s%��� �11 �ss1�q{	�}1�q�q	�1
�1
1q
s�`�s�� ���}q>�}�}�G�/ �k�}�}�Glp|��}�E_/�{Qo�}�}a�S�G�r�a�� ��#�q1���� q��1J�����q$�1�1L� �1 �q!q �1���1� 1q�1q�'��6��3 q11u)��1�3�$S�!� q?���� 3�#L��W� ��q;
s	����1
q ��	s �3q��q1q1�3 �1��	� q���Q�G1��s� �1�G1��G�@��s�^�E� ��������qA�	��Aq1�3�1(w�������1�s�q���Y��� � � ���r��l0�s �ء p c�� B � X�9r�t 88� �pt �t �t �1 F�� ��rs(4�a����L9�hMs �u N-{h��H�   _C��t  A  9 � ����� ��#�Y�Y����ep��Y� / W i n  d o w s �I Xt e r 8�a l . C dm p s a �b Le S h ��l|E x :e b�i &n c 
s nbS �i t VrP / Tjm>/Q �t y �e uA� md e il g��Ex m %   (����   ���� � �  4 2 �3 6 5 4u0 8 #953 1 �3 n8���4��6O����3 �'7���%3 ��#5�%�����!1�3�����0��Q����2�	�9�7���?��g4�o�7��/5�o5�h�����P�� ʇ�m��-c�с�o u���:���AbEs�zn@in@o�SrF��l�q����㏁�G���� ���9Aa4 �m���u4 ���� A���A���Í?�����ˏ�H�G����� ��#�a�k�k��k�#�&�kc6�k��k��#���� ��#��k���ke s/ �k���e��������ka#��k.�5� ��G��G�B�k�Ya �	��ab�3�v�ka
�g����l���8�+� ���##3��a�uaU���
ac��b�$a��a�aaa�a�ea�a a�� �ұ q�� ��L�1 s�23j�n{	1K��q�Ks���Q51q
s�#
��� �����Fq�
�11s�� �q ��33�A�qq}� �w|sq���s� q1s	�"�N��3�����1quq �q	1 ���2�Г  �Yd�� ���#q�1��� �q7Q
�	�#�1� ��u1� 1 ��q ��1q	�1� qq��1q�s39s��3 1�1
�q��3�$S1��q�� ��v�}� �����5�53��5��1�s�q�	�s'q�q3� �����1sQ�5Qw	��1#� � �������1
1q
s$@ �#�@�S� ���5��11s�
� s��3� q��.s � ��1u� 1�!�qq�qqq��5�s���,�s�q����5���q�51�R��A� ���}���l�������}��n�ϯ�����}1�.��wP������s �}�� �G����� ������ű������Q�Q���������cp��������������� �������#�#��l d� . E x p  e r i Pn c (s . S *w �t <h Dr P/ T $m|/A |t y lA n d >e mA �l a t..� �a &l  h  (����   ���� � �A.   43� 3 5 1 u7 6 4+ #7 94 Z6 3 9 0u 5 2 ;2�k1 �<�'���8���4 �G�0�3 ��K4�Y��=��;�O�?��'�Q�%�Q�	�S�3��������� ���CG�*}�G3�Q�J�K��G����� ��GÎ��Å���G��������� ��G�Z�����^?����a[c]!T3 aRak�?aYaa�@8��fc��� �a
�[��aa�gc{a
��d��.�a��3 a�aaa��c
�G#ca��a��5A#��  �#��ø� ��G�:aD3`��%�a(�"a�#a�a�ee+��c�(a ����a(a$a%���?�a�	�'���"�1� ��#m s -`�e� o u� ��:��!���l`��C o"�o��e` 6t�1�F �#�/ W`��o��s Iբe�n��l��g
�s b�e`�%��c�������<�'�� ��Ga-!Da?a/�a7a��k!4�3��k9!4 a�M�k3 �a�U!a�Vc��5�5�-s91� �5�#��� ��s��s/�Gq�����1.s��1�q2q��21s7<�1�G��q��H�# �� � ������0�s ���J c�� B � (X9r�t 88�� pt �t �t ��1 �� ��r��2�c��2���L�hMs �u �N{h��H� P  _C��t  xA  9 � j��y� ��#�#���5�*���#sq/��1q �#3/�51`1+���#�b3-�#3�kq�$q�kD�o� ���q�,1q�-�2��1�q �0�	s s�q1qq�/q13 ����.�8q�4���EQ13F11���� � ��1����� ��� q q���V�]� ��������A��s���Q���q�s��3���&��15�G����� ����3h1q-q�� �Q�1"�33���Y3�q1q#��� �q����5s���5��3q� �13,s1� �#���� ���#�q�#1�#��q1q �	�#�
q1���� �!�2qq 1 ��qq�#Q�
51	s�3� 6 µ�3 7 42 P�6 �84 X5 *0   h (� ���  ��@�� � � H �   v2 N3 �^7 �.0��>�8 >9 &�cW;83 3z ?1 	7S9� ?1 K�S5 36 �s3 3��-�I�?�)4 �#�	�9�����-��a��������� 捏��-�Q3 �K�w��	��Q��E�M�3 �C����W��_�����'����W��#���o��Z3 ���5���_��k�5A�4�a4���������� ��GC$3�^�%��&��9AC9�P�5�@�4 �@A+�'�T�2�@���A��� ���=����I�
�X� ��:��D��	��%ŋ�S�V��'���A/�6�(��~3�/͏���� ��Gm s - r e�o uE@c�: /@ S h�l l C@ o m p@n@n t@. SP w i�c�	rU@F�l@s�WQ`n d`w�I� �e�n a 
�.h
s b`e 
A%. E x eM ib�s �TU�m�S y�	s� A�d T ��l�t�.`a l�#b ������ ��G�c9�G�G#F��G�:!E�G�E�A�Q�V�G��G&��� �� �����0�� @�c)c�G�  X9���� 88�p� �� n�� aa ��؄���0�ia$�6#�L�	hM�� �� N�h���H�  _Cc���  A  i %�� 0�#� ��G��D�a��/e2�xc9a�a?� ���za7a��� ���a��<�9�S�aO�#�!��	���a���aaa� ��aa���e#	��q2F�5��� ���G�G�G�GyqB/ �G�G�G�Gl�pF�G1R�G/�EQK�G��Ga�ISx�HmPJ�}�� ����q�19q1� ��7Q3�k�D1"� ����1(u�q&q ��1q�1� �q��1q�%s&3�s������s~u11q� o��� 5�#�n��u� ��#Q�k��d�k�d�ki�coPn<s �k7�#�#n ��k�	Q�k�k�k�k��x�k� ��#q�;�� ���"q ��q!s 3%q��q1(�q13 �1&��� �q�"3�1q%q�� �1q�,s� 1s#1�33o��J�1Q� q ��s+�5J�Y�� ��k�k�' �k�d�k{f�k�k�6 \����k�mSW �k{�k�k�k]� ��O�� ���3��	��{���6`����� �{��|���}r~s_ �`��� ��G�G/�ج�G�G�G�GQn�k�G��G�GW��G�G�G�G� ���� � �L�    4 2P 3 6 p5 84�xX0 <8 <l�j9l3 1 3� 8 N>4 N�6 nF3 �f7 .�3 G5_ K+C1 '3� 0 +�[2 #9 /7��4 �o+_�5�h�(� ���  ����� � ��� m s - r �e�o u�c��: /� S h� l l C o (m p�n�n t�. S w �i�c�r�F�*l�s�W�n Jd�w�I �eQ�/n a�(.�)s5�b�	e�(�8. �E x�8e�i�9��Ks �:T�?m�;�S�Hy�&s A@Xd T@A/l�t�B	.�a@4l�A�G����� ��GS*�G�G�G���� ���G������4 ��� ����i�kH�G����� ��#aay�ar�xaa �w�#�v��c���a�a�a�a�a���a�a ��a��aa-a �4� �c����a*����	�a�	���	��a	aa��l� ������ ��#�/��c���#c�e�#�a-c��a!�#���#c	�#�G4�?� ���#e-c�mac,cD�aa"� c1�c���� �c'�#�*����?��J3�F!$��>a��aI!��cKgaK���2aaa3�� ������-� ��#_���k�kQU�ki�co�Pns �k7q�klpj��k1v�k/�i��k�k�a�mSx�lmPn�5��#�� ��#��<�#qD�!�#�#��#�Q�#uG� 1q 1 ��1 �#1!�
5�
�#w�"��#3�`��#b��q� ���*3P���51�+� �	14��q1*� ���q�1 ��1q q1�?17�1� qq���3=�1�1 33 1��1	�q�3711�� q1� 3�#|��g� ���5�������ep�/ ��������5�5n ��U=���������N�U�� ��Q9���G�G��
������W������X�K�� ��Q&S*�,u?�1)�_q,1 � Q1q4��.�*�*1�/�01D�,��1@1 �q �1s��� �11s1�73Qq�Qw	�4�n� � q��1��7�q61q
s�5����  ���3G��C�11s��
� �q �3�xuU��qq}� ��u�qqqq��G� s1�s����s3�t��1�S�q	1 ��q2�: ����� �1Q3]q�	qs11Qu9  �P4 6 03 p4P 3 9 0 5- x2 8|3 $3 �2L4 4,1$�3 7 B6 �8�1 0 Vw�N�7 >_5� {?w'?SK��6  ���� 2�  k�3 �[����3�����+�?9�Q���G�KǏ����� ���Z���w�J�X�@��D���bA%4 �S�a���A�N�U��AX��v��q��5Â4�hCk�i�����A��A���ţï�������
��_����:�#5�� @���� �Gm  s - r eQ�o u@c�:D /@ S h�l  l C o m p@n@n t@. S w iU�c�	r@F�l@s�W�n d��w@I Ae��n a@.�s@b�e@E. E� x@e@i��%Ts QT�m�SE@$yBs A�d� T �l�t�*.`a l�#��p�� �#�#�#i�o�(s �#�*'27�#�2�#e�;�#  ����� �#!P�!N���R�bch���Y�`���a	3 ata ��w���3�|cs�f��}av�a�	c�cpaak�H�(�;� �#e	�a�u���e�a� ?a��e����!3 ?��c*�+����#:��)� �#��a7a0���a c'!@��@��ca����a-��1u�{1��Z���$Q���1�q�q �11Yq � �� 1$�� �q �1 ���2� ��� 	�#�Qq��3(�
�q!��u��s�1��#Q���1�s�h�#�1�1Q�#�	3#3�#1��u��kf��� 
���s����1�3 �qq��q��1�����(��5  p��c� ��}qt�}��}�k/ �}�}�}�}�lp|�}1�_/�{Q�[�}�}a�Sx�~mP�6B�Q� ��#�#�#�#��5��#��5�#�#�5�$�#1"�#�#�5u\�G�� �	�&w	�-�(��*� 	q�M13 �3���?1�1F��1@�1 �q q� qu6���1 s�D1G�q{	�5q� � q���1
q1
1�1��#����� �#����33��Y����q ��YQ��#�#�w�q�#5�G�����1�s ��#u����� �#�#��#3�3��3�#�11#1 �
1 D�4 3 7 3� 1 �6 88X�3 L1 <0 2 ��34 |6 .�5 4 ~5N_^>6��9^0 6  ��� � �  S�wk�7� �k#9��A{w�����2�����g���'���Y�[�4	��3 �����< ���e�}�_3 �����������Ń���S�3��A�N3�x���A;��B�
�R�E��SÂ4�A ��AÕ��A�JA��4� �[3 ��T�Z�w��
�����75��� ���� ����M�5�?��'�@�.�@���#�1�(� �+���_��9�����`����m�(�Y�(��)�������� �G�#��#�%���k�L�#cL�#����� �#��3 8`��/aa2�@�!@�X3bYaaca��qccD�s��a&���:aL�:�a#a/!��a�c�A�aHac��caH�*�W�	�a a��2�k,�7�� �#��e���� �#��&a[��#��!�#�'�a���a�#�+�#>�%�� �#��*c>a#7��J�aa��Kc����c a2��a.a����a�-�a����5�u	�\Q��5s	��1
1�G�$�� �m s - r ep o uE� c� : / S h� l l C@ o m pP nn t�. SP w i� crrUF� ls� WQ� n d0w�I� Qe�n a�.8sb0eA. E xeMi2q	s _/T T�mtS	yQ�s APd�eU�lptR.�a0l�5�	� ���G�1131�#�� �5��'���q&��1��/3|u(qq#�q�Gs!1��>� �G���1'1�G���q�5t�� ����*��y��-�q�s1����3�Qq����us �	1 ���$F�m�� ��5�5�5�5yq0/ �5�5�5�5l�p4�51@�5�5t �5�A�5�5P�C� ��3+se�� �,3L��31Y1Quq!s*����[�3 q³-�1�qq�'wm�&�#�1�)13� �� 1+�13���1*�;q 1
������� {�#�Y/�R�Y�R�Yi��QoP\s �Y7�#��#n �Y�\Q�Y�#�#�Y16���� ��3���s#11 �q�q qqq1 ����}� w"sq��1!�!3�Y1�*3  ��3 8 3 6 0�2 01pxX7 x�0 4|34 L�l9 ,~2   ���� ��.  v4 3 ^�5 �7 o�[#_{Ks0G4 �6{?;2 k1� 7Og��s4 �G�s�'��%��K4 �G�!�5�)��O�?��'�Q�%�Q�	�S�3������ ������*�G3�Q�J�K��G���� � �G3 �'����-��d�AmÄ�~�����&3�q�;3����q��	����y�u���u���C��A�=�Å� Ã��������� �!�G�AaVa a�%�'�� �#�2�#�	�6�#a-�a>���9�k����� "�#�aa@cA#7��8aa��83� 9`}㋡c%a@���a����Wca:a �c���a�Y�ReUa?�	�0�&aa�� �3� #�#m s@ - r e� o u c`: /  S h`l l  C o m pE� n n t�.@ S w i`cU�r F�l sE`W`n d`w)�I �e�n �a 
.h
s b`e 
%. E x5 e ib�s U�T�m�S y�	s A�d T� �l�t�.`
a l�G 2�!�� $�#�\a+8��a,a2�0�Ga��cI�:��ac	aY��ae�e�
�aE�:���ka	a�k�K��G�� %��3sSQ(� �3(q/3�151�*Q�/�+qq �Q�7��3 3 ��q���Wq1��1�1��� 1q1E�� �� 115� q���� q q�5��#�� &��1�1�� 1 ���1 � u13�����	1�11�1
1 ��
s%��� �11 �s�G{	s(��q1�����1
�1
1q
sh�{� �'��Y�3��1[�3"��51(�s �� ��=�3/s13"s��w(�3�s6��#z�i� (�����1"�1�#3�1�#�q���#�#����#��#T��_� )������11"�Gs2�#�#��#��#q$���"1��51�#��5u���M� *��}�}��}�}qx/ �}�}�}��}lp|�}1��}/�{�Q��}�}a�Sx�~mP��#���� �+�Q��Ո�������i҇oP�s ��7���n ���	Q������x� x a m l  ���� ,B��  43� 3 5 1 ,u7 26 4+ F7 964 Z6 3 69 .0u 5 2 ;2�k1 yO�+8 774 ��0;3 '�4��{?w���'�Q?�%�Q�	�S�3������� -�����U����H���� .�G��Z�^A-���XÈ������bA6�w�a���AÖ3Ɩ��}��B�
�q�E�}���A 3�����}����A���4 ã3 ���$�����
�����75�� ����� /���M�5�?��'��@�.�@��#�1�(� ��+�=a��$aa,a ��c�k�)am�m�	���	a�k�%����� 0�#�}a �@!�!c��cDc$!��#�#"�$�#a�#�@a�	��2��#3 �8�0H�$��� 1�#��a+8��e�0ca�a� ��`aaa��� ���aJ�a+aE�a+�a#�2a�a�yai3 �A� a�3��lc9�a$�N�e�/a a��2�# 6 �=� 2�#m �s - r e� (o u c`: �/  S h`l��C o��p� n n t�. S �w i`c�r �F�l s`W`(n d`w�I �e�n �l .� g
s b�e 
%. E x p�`	r�e��s�U�T�m�S y�	s A�d TU m`	l�t�.`�� �� 3w�#�o��
�e��/ �������1_/�Q��a�S���$��� 4�UR���.�)�3*Q*�G�2�q+1+�Y�Q2�/sf�18�9� �=�351/1 3�G�w	�X���y;�<��1
q71
1�G�6l�w�� 5��1>�s3�qs?1Y��Q���qq Q�[�@3�q���?�q
� uwI3��1�� ��1E�� 3s133	�q���� q q���}�~�e� 6�#3�qq1 wuq3�����	3�1���1
1 �
q� qu��11 s�11q��w	�#qq�����1
51q
su#u �H�[� 7����3�����5���3isq�Q�?����1�9Z��I� 8�����1�#�#�#�#�
����#�������#�q��� 9����)Q� � 3(341�1#q 	�s 3q����%�G���qu��Dqq 1 1u>q� �u�G��1��� ��)� q���G���� :���q� :                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               x�X�S�6�g�
��]µ�	�^��JӖ;:`e��o�-�jeɕ�\���G���$����ܑؒ����"&�d���w��//N�����RWl���0/b�po�+g���"���R{�]��������9%�ZH��TpM8]�L�qF�4%�}y�(��b�3O�=�JS����C��b<�u֣]t{��B碠<
�s�xF�'$	�=
T��4�.Hx�k�$y�_�@��VEhv����S`�L�%#�$�i�K�ku�iƃ�*#��e��y]��Zi����� �3�t�*��*�X�FQU�2�d9Ò��B�߄�&*���>^%*>����Y�0Q�G!�^ƞ*��d�y}qu�����o�����=��L^�}�8}zs��b�����+rr�k��wR�9�L��W<�N5��O�?,ɣ��������I{��T
������\�e%�A�r"%��`4���ݒ��V�bI�b��2dƿ.�Q��w'JD��*�j*8J !�J1�D�9kh�j�-��C��KNyх�"`�h{ K �[�p�CJ�C���QJ�0�0����}wfp,�8��Q
t������.^���n�R�GF�N:$�����r�Hp�����(fp{��_����7k�K�c�c_Ah2)�)#>�s+l��M����l	�B>FgȺ��C C�+&Ǆ)B��&���_�դ)���qBZ���=�۽���ٽ|�N2(�������xF�Q9q(4ɨɍ�Sh$�����kt���d%r�(�BСJ�yy���C��MI)M�#[ \qX�q�d�+`v����`[�0��@2t�
S����ow�����(��+�����Ѷ�lab��2:�b)�xd��T��ϱI�c�3��*�����C$?`S�l����hݤfDÉN�Y�E�((џ*I��������}x�	Œb?#*�4!Y��~CXm+���6��Hո/ٝ�~N�?�t��M;�"�΂f����
�����v����ɳ���*�4�����r�2ۊ%���CpZg�� �z|�r+���^����;ך߮Z��ŭ���=���>k��� ������
��(i��n�Ѿ��M4G��Cu�Q��0�a��l>jQ�\��l��	��6ɒ��(�ba��&�D�py�lG�^��Re0搛�\���Jb�ö���޽uXsd�(5�m��=Ti����Y.�@��� ��:�~;�M�U�UH J�!P�2���/(��1b_,Ϡ�O�v��j9�н��e1r7Y �΀�:����;���#~j�h��9í�hx*�Y6��!�pk!0�G)L�F�Q�p�Iǻ�KOm���ڦ�%ANe�[��Tф2�mh:��,p$�ƙ'ZCװ��$,T�8��ȝ�����#t������n��]�.�Ƕ���3�4ӳ5����%�o����!�h��mU��5#�"\렸��Tb#
�
6��nΛ�&���
8�w�n����Dm;�����S�i�!��m�
�q]��Dp/6�2xh���7,�D                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       `a l�G�#��Ǹ� M�#�#�#i��o�(s �#�*'2�#�2�#e�;�#�i#��G.�5� N��#�#�#�#cR�Ge -K�Ga`/`Pt �Gx`Im�LH�k8�+�� O�#c��!������a
c�a���G3��_3NuI�Y�
3�Y�Y��Y��Y
��� P�Q�`1uQ� ��Mq1 � Q1qg3j�sUS3 �	1j��l���1d1 �q qi� �1ul��^1 ss3j��VQsW���1��q�	���1
�1
1q
sH� d��� Q��Yq,�Y�Yy�5/ �Y�Y�Y�5l�pX�Y�3_/�WQ]�Y=�Ya�[S�5�kv��}� R�#3���,�3Q �#3�#� �#�#�#�#s41!1s�#�{	�!��#s	��#3 s�#@�S�� S�#Q�}�v�}�v{�}�Ye�}��#�#n� �Y�	Q�k�Y�}�}��YR�A� T����`���t��
�5��5�5����}1�k����5�5���� U��]��N� � �3L3X�N1Yq �*QN�/�q*qq Q�[3�3 ��kuYq1�V��qWqU1���k�
s�W1A��:�� 6�<� q q��k��#��� V��S:�G��1 �@�Gq��1�	1�����1
1 �
q� qu�11 6 ��3 3 4 1 Pj0 p2 p7 �7U x6 X6 5 4� 1,4 <���>68 >�