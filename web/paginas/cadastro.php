<?php 
	include_once '../logic/controller/cadastroController.php';
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../css/cadastro.css" />
	<title>Cadastro</title>
	</head>

	<body id="body">
		<form action="" method="POST">
			<div id="register-box">
				<div id="register-box-interno">
					<div id="register-box-label">Cadastro</div>
	
					<div id="razao">
						<input placeholder="Razão Social" type="text" name="razao" id="razao">
					</div>
	
					<div id="cnpj">
						<input placeholder="cnpj" type="text" name="cnpj" id="cnpj">
					</div>
	
					<div id="endereco">
						<input placeholder="Endereço Completo" type="text" name="enderecoCompleto" id="enderecoCompleto">
					</div>
	
					<div id="municipio">
						<input placeholder="Município" type="text" name="municipio" id="municipio">
					</div>
	
					<div id="uf">
						<input name="estado" id="estado" placeholder="UF" type="text" style="text-align: center;" >
					</div>
	
					<div id="cep">
						<input placeholder="CEP" type="text" name="cep" id="cep">
					</div>
	
					<div id="pessoa">
						<input placeholder="Pessoa de contato" type="text" name="pessoaContato" id="pessoaContato">
					</div>
	
					<div id="telefone">
						<input placeholder="Telefone fixo" type="tel" name="telefonefixo" id="telefonefixo">
					</div>
	
					<div id="celular">
						<input placeholder="Telefone Celular" type="tel" name="telefoneCelular" id="telefoneCelular">
					</div>
	
					<div id="botoes">
						<div id="botao">
							<a href="" style="text-decoration: none;"> Solicitar Cadastro</a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>