<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/login.css">

<title>Login</title>
</head>

<body id="body">
	<form action="../logic/controller/login.php" method="post">
		<div>
			<div id="login-box">
				<div id="login-box-interno">
					<div id="login-box-label">Login</div>

					<div id="usuario">Usuário</div>

					<div class="input-div" id="input-user">
						<input type="text" placeholder="Usuário">
					</div>

					<div id="senha">Senha</div>

					<div id="esqueci-senha">
						<label> 
							<a href=""> (Esqueceu a senha?) </a>
						</label>
					</div>

					<div class="input-div" id="input-senha">
						<input type="password" placeholder="Senha">
					</div>

					<div id="lembrar-senha">Lembrar senha</div>

					<input type="checkbox" class="checkbox">
					
					<ul style="list-style: none; display: inline;">
						<li>
							<input type="submit" value="Entrar" class="botoes" style="position: absolute; bottom: 20px; left: 20px;">
						</li>
						<li>
							<input type="submit" value="Cadastrar" class="botoes" style="position: relative; bottom: 22px; left: 100px;">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</form>
</body>
</html>
