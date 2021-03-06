<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Athos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Sql\Sql;
use Zend\Db\Adapter\Adapter;
		   
class ServicosController extends AbstractActionController
{
    public function indexAction()
    {
		
		
		$this->layout('layout/layout_servicos.phtml');
		
        return new ViewModel();
    }
	
	public function sobreAction()
    {
		
		
		$this->layout('layout/layout_sobre.phtml');
		
		$servico = $this->params()->fromRoute('type','title');
		
		
           /*  $this->tableGateway->adapter->
             $dbAdapterConfig = array(
            'driver'   => 'Mysqli',
            'database' => 'athos',
            'username' => 'athos',
            'password' => 'athos@99212'
            );
             
             $sql = "SELECT * FROM sobre_servicos";
             
             $dbAdapter = new Adapter($dbAdapterConfig);
             
             $resultado = $dbAdapter->query($sql, \Zend\Db\Adapter\Adapter::QUERY_MODE_EXECUTE);
             
             $selecao = $resultado->toArray();
             
             print_r($selecao);
		*/
		
        return new ViewModel(array('servico' => $servico));
    }
	
}
