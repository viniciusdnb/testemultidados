<?php
namespace src\Controller;

use src\Route\RouteController;
use src\Model\DataRequest;

class HomeController extends RouteController
{
	public function index()
	{
		$this->dataRequest();
		$this->render("home/index");
	}

	public function optionMenuCadastro()
	{
		
		$optionCadastro =  ["Cliente","Fornecedor","Usuario","Produtos","Perfil de acesso"];
		$options = json_encode($optionCadastro);

		echo $options;
	}

	public function optionMenuRelatorio()
	{
		$optionRelatorio = ["Cliente", "Faturamento","Produtos"];
		$options = json_encode($optionRelatorio);

		echo $options;
	}

	public function dataRequest()
	{
		$dataRequest = new DataRequest;

		$this->setData("qCliente", $dataRequest->dadosClientes("c"));
		$this->setData("qFornecedores", $dataRequest->dadosFornecedores("c"));
		$this->setData("qUsuario", $dataRequest->dadosUsuarios("c"));

		
	}

}
?>