<?php
/**
 * ZendR module demonstration app
 *
 * @link      https://github.com/jr-duboc/ZendR
 * @copyright Copyright (c) 2013 Jean-Rémy Duboc
 * @license   LGPL
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Debug;
use Application\Initializer\EntityManagerAware;
use Application\Initializer\ElasticsearchAware;
use Application\Entity\User;
use ZendR;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$zendRScript = new ZendR\Common\ZendRScriptSender();
    	\Zend\Debug\Debug::dump("whaaaat");
    }

	public function editAction(){
		return $view;
	}
}
