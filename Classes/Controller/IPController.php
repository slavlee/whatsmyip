<?php
declare(strict_types = 1);
namespace Slavlee\Whatsmyip\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
/***
 *
 * This file is part of the "Slavlee Community Builder" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Kevin Chileong Lee <info@slavlee.de>, Slavlee
 *
 ***/
class IPController extends ActionController
{	
	/**************************************************************************
	 * INJECTIONS - START
	 **************************************************************************/

	/**************************************************************************
	 * INJECTIONS - END
	 **************************************************************************/
	/**************************************************************************
	 * INITS - START
	 **************************************************************************/
	/**************************************************************************
	 * INITS - END
	 **************************************************************************/
	/**************************************************************************
	 * ACTION - START
	 **************************************************************************/	
	/**
	 * Show the character counter
	 * @return void
	 */
	public function showAction(): ResponseInterface
	{
		$ip = '';

		if (isset($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else if(isset($_SERVER['HTTP_X_FORWARDED'])){
			$ip = $_SERVER['HTTP_X_FORWARDED'];
		}else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_FORWARDED_FOR'];
		}else if(isset($_SERVER['HTTP_FORWARDED'])){
			$ip = $_SERVER['HTTP_FORWARDED'];
		}else if(isset($_SERVER['REMOTE_ADDR'])){
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		$this->view->assign('ip', $ip);
		$this->view->assign('ipv6', \filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));

     	return $this->htmlResponse();
	}
}