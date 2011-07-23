<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */


Autoloader::add_core_namespace('Email');

Autoloader::add_classes(array(
	'Email\\Email'					=> __DIR__.'/classes/email.php',
	'Email\Email_Driver'			=> __DIR__.'/classes/email/driver.php',
	'Email\Email_Mail'				=> __DIR__.'/classes/email/mail.php',
	'Email\Email_Sendmail'			=> __DIR__.'/classes/email/sendmail.php',
	'Email\Email_Smtp'				=> __DIR__.'/classes/email/smtp.php',
));


/* End of file bootstrap.php */
