<?php
    ini_set('error_reporting', E_ALL);
    require_once(dirname( __FILE__ ) . '/configuracoes/conf.php');
?>

<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Entrar</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">	
</head>
<body>
	<div id="container">	
		<form>
		<label for="name">Utilizador:</label>
		<input type="name">
		<label for="username">Palavra-passe:</label>
		<p><a href="#">Perdeu a sua password?</a>
		<input type="password">
		<div id="lower">
		<input type="checkbox"><label class="check" for="checkbox">Mantenha-me ligado</label>
		<input type="submit" value="Login">
		</div>
		</form>
	</div>
    
</body>
</html>
	
	
	
	
	
		
	