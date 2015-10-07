<?php

/*
 * valida cnpj
 */

function validarCnpj($cnpj) {
	$cnpj = preg_replace ( '/[^0-9]/', '', ( string ) $cnpj );
	
	// Valida tamanho
	if (strlen ( $cnpj ) != 14) {
		return false;
	}
	
	// Valida primeiro dígito verificador
	for($i = 0, $j = 5, $soma = 0; $i < 12; $i ++) {
		$soma += $cnpj {$i} * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}
	
	$resto = $soma % 11;
	if ($cnpj {12} != ($resto < 2 ? 0 : 11 - $resto)) {
		return false;
	}
	
	// Valida segundo dígito verificador
	for($i = 0, $j = 6, $soma = 0; $i < 13; $i ++) {
		$soma += $cnpj {$i} * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}
	
	$resto = $soma % 11;
	
	return $cnpj {13} == ($resto < 2 ? 0 : 11 - $resto);
}

/*
 * Valida Cep
 */
function validarCep($cep) {
	// retira espacos em branco
	$cep = trim ( $cep );
	// expressao regular para avaliar o cep
	$avaliaCep = ereg ( "^[0-9]{5}-[0-9]{3}$", $cep );
	
	// verifica o resultado
	if (! $avaliaCep) {
		echo "CEP nao Valido";
	} else {
		echo "CEP Valido";
	}
}

/*
 * valida email
 */

function validarEmail($email) {
	
	if (!eregi("^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$", $email)) {
		echo $email . "Email inválido";
		
		return ;
	}
	
	return $email;
}


/*
 * valida telefones
 */
 
function validaTelefone($tel_fixo){
	
	if (!eregi("^\([0-9]{3}\) [0-9]{4}-[0-9]{4}$", $tel_fixo)) {
		echo $tel_fixo . "Telefone inválido";
		
		return ;
	}
	
	return $telefonefixo;
}

function validaCelular($tel_celular){
	
	if (!eregi("^\([0-9]{3}\) [0-9] 1 [0-9]{4}-[0-9]{4}$", $tel_celular)) {
		echo $tel_celular . "Celular inválido";
	}
	
}



/*
 * valida campos
 */
 
function validarEmpty($campo) {
	if ($campo == 0 || is_null($campo) || empty ( $campo )) {
		
		echo $campo . "Invalido Digite novamente!";
		
		return;
	}
	
	return $campo;
}

function validarString($campo) {
	if (!is_string ( $campo )) {
		
		echo $campo . "Invalido Digite novamente!";
		
		return;
	}
	
	if (strlen ( $campo ) <= 2) {
	
		echo $campo . "Minimo 2 caracter!";
	
		return;
	}
	
	return $campo;
}

function validarNumeric($campo) {
	if (!is_numeric ( $campo )) {
		
		echo $campo . "Invalido Digite novamente!";
		
		return;
	}
	
	if (strlen ( $campo ) <= 2) {
		
		echo $campo . "Minimo 2 caracter!";
		
		return;
	}
	
	return $campo;
}
?>