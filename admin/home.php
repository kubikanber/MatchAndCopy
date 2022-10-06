<?php
defined('MatchAndCopy_PATH') or die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Home tab                                                              |
// +-----------------------------------------------------------------------+

/**
 *Burada ayar değişkeleride gönderilebilir. örneğin : 'skeleton' => $conf['skeleton'],
 * burada home.tpl yeri berliten intro.html içeriği yükleniyor.(INTRO_CONTENT)
 */
// send variables to template
$template->assign(array(
    'INTRO_CONTENT' => load_language('intro.html', MatchAndCopy_PATH, array('return' => true)),
    'file_log' => MatchAndCopy_PATH . 'admin/show.php',
    'log'   =>  'For the log page',
));

// define template file
$template->set_filename('MatchAndCopy_content', realpath(MatchAndCopy_PATH . 'admin/template/MatchAndCopy_home.tpl'));

if (isset($_POST['run_match'])){
    $page['infos'][] = l10n('Information data registered in database');
}