<?php
/**
 *
 * Hide 24 hour Activity Stats. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, 3Di, https://github.com/3D-I/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary <http://alhitary.net>
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ERROR_MSG_3110_321_MISTMATCH'	=>	'الحد الأدنى لنسخة المنتدى 3.1.10 ولكن أقل من 3.2.0@dev أو أكبر من 3.2.1 ولكن أقل من 3.3.0@dev',
	'ERROR_A24H_NOT_INSTALLED'		=>	'يجب أولاً تنصيب الإضافة “الإحصائيات خلال الـ24 ساعة الماضية” لكي تعمل هذا الإضافة الملحق.',
	'ERROR_A24H_WRONG_VERSION'		=>	'تم تنصيب نسخة خاطئة للإضافة “الإحصائيات خلال الـ24 ساعة الماضية”. المطلوب >= 1.0.6',
));
