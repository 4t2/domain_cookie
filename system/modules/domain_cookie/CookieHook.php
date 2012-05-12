<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Class DomainCookie
 *
 * @copyright  Lingo4you 2012
 * @author     Mario Müller <http://www.lingo4u.de/>
 * @package    DomainCookie
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
class CookieHook
{
	public function setCookie($objCookie)
	{
		$objCookie->strDomain = strstr($_SERVER['HTTP_HOST'], '.');

		return $objCookie;
	}
}
