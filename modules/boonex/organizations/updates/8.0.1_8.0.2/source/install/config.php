<?php
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 *
 * @defgroup    Organizations Organizations
 * @ingroup     DolphinModules
 *
 * @{
 */

$aConfig = array(

    /**
     * Main Section.
     */
    'type' => BX_DOL_MODULE_TYPE_MODULE,
    'name' => 'bx_organizations',
    'title' => 'Organizations',
    'note' => 'Basic organization profiles functionality.',
    'version' => '8.0.2',
    'vendor' => 'BoonEx',
	'help_url' => 'http://feed.boonex.com/?section={module_name}',

    'compatible_with' => array(
        '8.0.x'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/organizations/',
    'home_uri' => 'orgs',

    'db_prefix' => 'bx_organizations_',
    'class_prefix' => 'BxOrgs',

    /**
     * Category for language keys.
     */
    'language_category' => 'Organizations',

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
        'execute_sql' => 1,
        'update_languages' => 1,
        'clear_db_cache' => 1,
    ),
    'uninstall' => array (
        'execute_sql' => 1,
        'update_languages' => 1,
        'clear_db_cache' => 1,
        'process_deleted_profiles' => 1,
    ),
    'enable' => array(
        'execute_sql' => 1,
        'recompile_menus' => 1,
        'recompile_permalinks' => 1,
        'recompile_alerts' => 1,
        'clear_db_cache' => 1,
    ),
    'disable' => array (
        'execute_sql' => 1,
        'recompile_menus' => 1,
        'recompile_permalinks' => 1,
        'recompile_alerts' => 1,
        'clear_db_cache' => 1,
    ),

    /**
     * Dependencies Section
     */
    'dependencies' => array(),
);

/** @} */
