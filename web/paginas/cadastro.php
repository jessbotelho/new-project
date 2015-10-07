<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../css/cadastro.css" />
		<script src="../js/jquery-1.2.6.pack.js" type="text/javascript"></script>
		<script src="../js/jquery.maskedinput-1.1.4.pack.js"
			type="text/javascript" /></script>
		<title>Cadastro</title>
	</head>
	<body id="body">
		<form action=".../logic/controller/cadastroController.php"
			method="POST">
			<div register-box>
				<div id="register-box-interno">
					<div id="register-box-label">Cadastro</div>
					<div id="razao">
						<input placeholder="Razão Social" type="text" name="razao"
							id="razaoSocial">
					</div>
                    
					<div id="cnpj">
						<input placeholder="CNPJ" type="text" name="cnpj" id="cnpj_cli">
					</div>
                    
					<div id="endereco">
						<input placeholder="Endereço Completo" type="text"
							name="enderecoCompleto" id="enderecoCompleto">
					</div>
                    
					<div id="municipio">
						<input placeholder="Município" type="text" name="municipio"
							id="municipio_cli">
					</div>
                    
					<div id="cep">
						<input placeholder="CEP" type="text" name="cep" id="cep_cli">
					</div>
                    
                    <div id="uf">
						<input name="estado" id="estado" placeholder="UF" type="text"
							style="text-align: center;">
					</div>
                    
					<div id="pessoa">
						<input placeholder="Pessoa de contato" type="text"
							name="pessoaContato" id="pessoaContato">
					</div>
                    
                    <div id="email">
						<input placeholder="Email" type="email"
							name="Email" id="email">
					</div>
                    
					<div id="telefone">
						<input placeholder="Telefone fixo" type="tel" name="telefonefixo"
							id="telefonefixo">
					</div>
                    
					<div id="celular">
						<input placeholder="Telefone Celular" type="tel"
							name="telefoneCelular" id="telefoneCelular">
					</div>
                    
			<script type="text/javascript">
					$(document).ready(function(){
						$("#cnpj_cli").mask("99.999.999/9999-99");
		   				$('#cep_cli').mask('99999-999');
		   				$('#telefonefixo').mask('(99)9999-9999');
		   				$('#telefoneCelular').mask('(99) 9 9999-9999');
		   			}); 
			</script>
            <input type="button" value="Solicitar Cadastro" id="botao">
		</form>
	</body>
</html>
