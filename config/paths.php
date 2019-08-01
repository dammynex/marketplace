<?php

/**
 * Use the DS to separate the directories in other defines.
 */

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 * The full path to the directory WITHOUT a trailing DS.
 */
define('ROOT', dirname(__DIR__));


/**
 * Path to the config directory.
 */
define('CONFIG', ROOT . DS . 'config' . DS);

/**
 * Path to the includes directory.
 */
define('INC', ROOT . DS . 'inc' . DS);
 
/**
 * Path to the Admin includes directory.
 */
define('ADMIN_INC', ROOT . DS . 'admin' . DS . 'inc' . DS);

?>