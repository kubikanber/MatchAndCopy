<?php
/**
 * Log ların gösterileceği ayrı bir pencere için
*/
//defined('MatchAndCopy_PATH') or die('Hacking attempt!');
const PHPWG_ROOT_PATH = '../../../';
const IN_ADMIN = true;
include_once(PHPWG_ROOT_PATH . 'include/common.inc.php');
include_once(LOCALEDIT_PATH.'include/functions.inc.php');
load_language('plugin.lang', LOCALEDIT_PATH);
check_status(ACCESS_WEBMASTER);

$template->assign(array(
    'MatchAndCopy_PATH'=> MatchAndCopy_PATH, // used for images, scripts, ... access
    'DEFAULT_CONTENT' => load_language('intro.html', MatchAndCopy_PATH, array('return'=>true)),
    'TITLE' => 'log dosyası',
    'title' => 'Günlükler',
));

// define template file
$template->set_filename('MatchAndCopy_show', realpath(MatchAndCopy_PATH . 'admin/template/MatchAndCopy_show.tpl'));

$page['body_id'] = 'thePopuphelpPage';
$page['title'] = 'günlük';
include(PHPWG_ROOT_PATH.'include/page_header.php');

$template->pparse('MatchAndCopy_show');

include(PHPWG_ROOT_PATH.'include/page_tail.php');