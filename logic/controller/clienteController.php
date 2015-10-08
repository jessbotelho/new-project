<?php

	$razao_social   = $_POST("razao_social");
	$cnpj_cli       = $_POST("cnpj_cli");
	$email          = $_POST("email");
	$endereco       = $_POST("endereco");
	$cep            = $_POST("cep");
	$municipio      = $_POST("municipio");
	$estado         = $_POST("estado");
	$pessoa_contato = $_POST("pessoa_contato");
	$tel_fixo       = $_POST("tel_fixo");
	$tel_celular    = $_POST("tel_celular");

class clienteController {
	
	function __construct() {
				
		validarEmpty($razao_social);
		validarString($razao_social);
		
		validarEmpty($cnpj_cli);
		validarNumeric($cnpj_cli);
		validarCnpj($cnpj);
		
		validarEmpty($email);
		validarEmail($email);
		
		
		validarEmpty($endereco);
		validarString($endereco);
		
		validarEmpty($cep_cli);
		validarNumeric($cep_cli);
		validarCep($cep_cli);
		
		validarEmpty($municipio_cli);
		validarString($municipio_cli);
		
		validarEmpty($estado);
		validarString($estado);
		
		validarEmpty($pessoa_contato);
		validarString($pessoa_contato);
		
		validarEmpty($tel_fixo);
		validarNumeric($tel_fixo);
		validaTelefone($tel_fixo);
		
		validarEmpty($tel_celular);
		validarNumeric($tel_celular);
		validaCelular($tel_celular);
		
		function chamaDao(){
			$cliente  = new cliente();
			
			$cliente->setRazao_social($razao_social);
			$cliente->setCnpj_cli($cnpj_cli);
			$cliente->setEmail($email);
			$cliente->setEndereco($endereco);
			$cliente->setCep($cep);
			$cliente->setMunicipio($municipio);
			$cliente->setEstado($estado);
			$cliente->setPessoa_contato($pessoa_contato);
			$cliente->setTel_fixo($tel_fixo);
			$cliente->setTel_celular($tel_celular);
			
			cadastroDao($cliente);
		
		}
		
	}
	
}

	
?>