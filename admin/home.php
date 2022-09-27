<?php
defined('MatchAndCopy_PATH') or die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Home tab                                                              |
// +-----------------------------------------------------------------------+

// send variables to template
$template->assign(array(
    'INTRO_CONTENT' => load_language('intro.html', MatchAndCopy_PATH, array('return'=>true)),
));

// define template file
$template->set_filename('MatchAndCopy_content', realpath(MatchAndCopy_PATH . 'admin/template/home.tpl'));
