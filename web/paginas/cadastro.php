<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../css/cadastro.css" />
		<script src="../js/jquery-1.2.6.pack.js" type="text/javascript"></script>
		<script src="../js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
	</head>
	<body id="body">
		<form action=".../logic/controller/clienteController.php" method="POST">
			<div id="register-box">
				<div id="register-box-interno">				
					<div id="register-box-label">Cadastro</div>
					
					<div id="razao">
						<input placeholder="Razão Social" type="text" name="razao_social" id="razao_social">
					</div>
                    
					<div id="cnpj">
						<input placeholder="CNPJ" type="text" name="cnpj_cli" id="cnpj_cli">
					</div>
                    
					<div id="endereco">
						<input placeholder="Endereço Completo" type="text"	name="enderecoCompleto" id="enderecoCompleto">
					</div>
                    
					<div id="municipio">
						<input placeholder="Municipio" type="text" name="municipio_cli" id="municipio_cli">
					</div>
                    
					<div id="cep">
						<input placeholder="CEP" type="text" name="cep_cli" id="cep_cli">
					</div>
                    
                    <div id="uf">
						<input name="estado" id="estado" placeholder="UF" type="text" style="text-align: center;">
					</div>
                    
					<div id="pessoa">
						<input placeholder="Pessoa de contato" type="text" name="pessoaContato" id="pessoaContato">
					</div>
                    
                    <div id="email">
						<input placeholder="Email" type="email" name="Email" id="email">
					</div>
                    
					<div id="telefone">
						<input placeholder="Telefone fixo" type="tel" name="tel_fixo" id="tel_fixo">
					</div>
                    
					<div id="celular">
						<input placeholder="Telefone Celular" type="tel" name="tel_celular" id="tel_celular">
					</div>
					
                    <input type="button" value="Solicitar Cadastro" id="botao">
        		</div>
         	</div>
 		</form>
+		
 		<script type="text/javascript">
 			$(document).ready(function(){
 				$("#cnpj_cli").mask("99.999.999/9999-99");
			   	$('#telefonefixo').mask('(99)9999-9999');
			   	$('#telefoneCelular').mask('(99) 9 9999-9999');
			}); 
		</script>  
	</body>
</html>
