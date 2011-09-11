<?php
use Zend\Application\Bootstrap as ZendBootstrap;
class Bootstrap extends ZendBootstrap
{
    protected function _initLayout1(){
	$doctypeHelper = new Zend\View\Helper\Doctype();
	$doctypeHelper->setDoctype('XHTML1_TRANSITIONAL');
    }


}

