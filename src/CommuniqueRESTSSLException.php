<?php

/**
 * This file is part of Communique.
 * 
 * @author Robert Main
 * @package Communique
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Communique;

/**
 *
 * Exception
 *
 * This exception is thrown for errors related to SSL such as certificate errors, key errors etc.
 * 
 */
class CommuniqueRESTSSLException extends \Communique\CommuniqueException {
	/**
	 * Constructor for REST SSL Exception
	 * @param String $message A human readable description of the exception
	 */
	public function __construct($message) {
		parent::__construct($message);
	}
}