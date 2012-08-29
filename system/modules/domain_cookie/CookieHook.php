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
		$domain = $_SERVER['HTTP_HOST'];
		
		$parts = explode('.', $_SERVER['HTTP_HOST']);
		
		if (count($parts) > 1)
		{
			$domain = implode('.', array_slice($parts, count($parts)-2, 2));
		}
		
		$objCookie->strDomain = '.'.$domain;

		return $objCookie;
	}
}
