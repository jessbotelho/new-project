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
		<form action=".../logic/controller/clienteController.php"
			method="POST">
			<div register-box>
				<div id="register-box-interno">
					<div id="register-box-label">Cadastro</div>
					<div id="razao">
<<<<<<< HEAD
						<input placeholder="Razão Social" type="text" name="razao"
							id="razao_social">
=======
						<input placeholder="RazÃ£o Social" type="text" name="razao"
							id="razaoSocial">
>>>>>>> f59feebd9b6c47d78c01ac4c9471e497caa26b4f
					</div>
                    
					<div id="cnpj">
						<input placeholder="CNPJ" type="text" name="cnpj" id="cnpj_cli">
					</div>
                    
					<div id="endereco">
						<input placeholder="EndereÃ§o Completo" type="text"
							name="enderecoCompleto" id="enderecoCompleto">
					</div>
                    
					<div id="municipio">
<<<<<<< HEAD
						<input placeholder="Município" type="text" name="municipio_cli"
=======
						<input placeholder="MunicÃ­pio" type="text" name="municipio"
>>>>>>> f59feebd9b6c47d78c01ac4c9471e497caa26b4f
							id="municipio_cli">
					</div>
                    
					<div id="cep">
						<input placeholder="CEP" type="text" name="cep_cli" id="cep_cli">
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
						<input placeholder="Telefone fixo" type="tel" name="tel_fixo"
							id="tel_fixo">
					</div>
                    
					<div id="celular">
						<input placeholder="Telefone Celular" type="tel"
							name="tel_celular" id="tel_celular">
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
