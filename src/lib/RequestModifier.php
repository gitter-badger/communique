<?php

/**
 * Request modifier
 *
 * This file contains the interface that all request modifiers must implement
 * 
 * @author Robert Main
 * @package Communique\lib
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

namespace Communique\lib;

/**
 * Interface
 *
 * This interface is used to describe the functionality of a request modifier
 * 
 */
interface RequestModifier{


	/**
	 * This method is used to process the request on the way out.
	 * Whilst implementing this method is mandatory, it is permitted to simply return the
	 * request object unchanged if needed.
	 * 
	 * @param  RestClientRequest $request Request encapsulation object
	 * @return RestClientRequest          Request encapsulation object
	 */
	public function request($request);


	/**
	 * This method is used to process the response on the way back in. 
	 * Whilst implementing this method is mandatory, it is permitted to simply return the
	 * response object unchanged if needed.
	 * @param  RestClientResponse $response Response encapsulation object
	 * @return RestClientResponse           Response encapsulation object
	 */
	public function response($response);

}