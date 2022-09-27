<?php
/*
Plugin Name: MatchAndCopy
Version: 13.0.0RC3
Description: plugin to match and copy the metadata (tags, description, etc.) associated with the item from the old piwigo database to the new database.
Plugin URI:
Author: kubikanber
Author URI: http://kubikanber.com
Has Settings: true
*/

/** Bu eklenti eski piwigo veritabanından yeni veri tabanına geçerken; eski veri tabanını kolanlama yapmadan bilgilerin
 * yeni veritabnına aktarılması için yapılmıştır*/

defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

if (basename(dirname(__FILE__)) != 'MatchAndCopy') {
    add_event_handler('init', 'MatchAndCopy_error');
    function MatchAndCopy_error(): void
    {
        global $page;
        $page['errors'][] = 'MatchAndCopy folder name is incorrect, uninstall the plugin and rename it to "MatchAndCopy"';
    }

    return;
}

// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+
global $prefixeTable;

define('MatchAndCopy_ID', basename(dirname(__FILE__)));
const MatchAndCopy_PATH = PHPWG_PLUGINS_PATH . MatchAndCopy_ID . '/';   // eklentinin yolu
define('MatchAndCopy_TABLE', $prefixeTable . 'MatchAndCopy'); // Veritabanı tablo adı
define('MatchAndCopy_ADMIN', get_root_url() . 'admin.php?page=plugin-' . MatchAndCopy_ID);    //Yönetici panelindeki yolu
define('MatchAndCopy_PUBLIC', get_absolute_root_url() . make_index_url(array('section' => 'MatchAndCopy')) . '/'); // genel görünüm yolu
const MatchAndCopy_DIR = PHPWG_ROOT_PATH . PWG_LOCAL_DIR . 'MatchAndCopy/'; // eklentinin sistemdeki yeri

// +-----------------------------------------------------------------------+
// | Add event handlers                                                    |
// +-----------------------------------------------------------------------+
// şimdilik gerek yok gibi


/**
 * plugin initialization
 *   - check for upgrades
 *   - unserialize configuration
 *   - load language
 */
function MatchAndCopy_init(): void
{
    global $conf;

    // load plugin language file
    load_language('plugin.lang', MatchAndCopy_PATH);

    // prepare plugin configuration
    $conf['MatchAndCopy'] = safe_unserialize($conf['MatchAndCopy']);
}