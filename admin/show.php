<?php
/**
 * Log ların gösterileceği ayrı bir pencere için
*/
defined('MatchAndCopy_PATH') or die('Hacking attempt!');

$template->assign(array(
    'DEFAULT_CONTENT' => load_language('intro.html', MatchAndCopy_PATH, array('return'=>true)),
));

// define template file
$template->set_filename('MatchAndCopy_show', realpath(MatchAndCopy_PATH . 'admin/template/show.tpl'));