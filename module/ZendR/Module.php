<?php
namespace ZendR;

class Module
{
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\ClassMapAutoloader' => array (
				__DIR__ . '/autoload_classmap.php',
			),
			'Zend\Loader\StandardAutoLoader' => array (
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ .  'src' . __NAMESPACE__,
				),
			),
		);
	}
	
	public function getConfig()
	{
		return array();
		//return include __DIR__ . '/config/module.config.php';
	}
}