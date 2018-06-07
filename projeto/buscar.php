
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<body>
<?php include('menu.php'); ?>
<h1>Buscar</h1>
<form name="form1" method="post" action="localizar.php">
<fieldset>
<legend>Buscar por nome</legend>
<label for="tnome">Nome:</label>
<input type="text" name="tnome" id="tnome" />
<br/>
<input type="submit" value="Ok" />
</fieldset>    
</form>
    
</body>
</html>