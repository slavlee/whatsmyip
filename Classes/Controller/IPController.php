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
	    /** @var NormalizedParams $normalizedParams */
	    $normalizedParams = $GLOBALS['TYPO3_REQUEST']->getAttribute('normalizedParams');
	    
	    $this->view->assign('ip', $normalizedParams->getRemoteAddress());
     return $this->htmlResponse();
	}
}