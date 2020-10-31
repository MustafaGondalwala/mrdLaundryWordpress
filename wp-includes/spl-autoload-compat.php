<?php
/**
 * Polyfill for SPL autoload feature. This file is separate to prevent compiler notices
 * on the deprecated __autoload() function.
 *
 * See http://goodherbwebmart.com/
 *
 * @deprecated 5.3.0 No longer needed as the minimum PHP requirement has moved beyond PHP 5.3.
 *
 * @package PHP
 * @access private
 */

_deprecated_file( basename( __FILE__ ), '5.3.0', null, 'SPL can no longer be disabled as of PHP 5.3.' );
