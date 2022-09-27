<?php
/**
 * This is the main administration page,
 * Eklenti yönetim sayfası
 * şimdilik bir sayfa olark öngürülüyor.
 */

defined('MatchAndCopy_PATH') or die('Hacking attempt!');

check_status(ACCESS_WEBMASTER); // izin kontrol

global $template, $page, $conf, $prefixeTable; // şimdilik tüm ayar dosyaları alındı.

// get current tab
$page['tab'] = $_GET['tab'] ?? $page['tab'] = 'home';

// include page
include(MatchAndCopy_PATH . 'admin/' . $page['tab'] . '.php');

// template vars
$template->assign(array(
    'MatchAndCopy_PATH'=> MatchAndCopy_PATH, // used for images, scripts, ... access
    'MatchAndCopy_ABS_PATH'=> realpath(MatchAndCopy_PATH), // used for template inclusion (Smarty needs a real path)
    'MatchAndCopy_ADMIN' => MatchAndCopy_ADMIN,
    'MatchAndCopy_prefixeTable' => $prefixeTable,
));

// send page content
$template->assign_var_from_handle('ADMIN_CONTENT', 'MatchAndCopy_content');