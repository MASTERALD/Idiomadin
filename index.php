<!DOCTYPE html>
<html>
<head>
	<title>FreeMovies</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="logo_200x200_preview-rev-1.png" type="image/x-icon">
</head>
<body  style="background-color:dark";>

    <form method="post">
	<img style=""; src="logo_200x200_preview_rev_1.png">
    	<h1>Registrate a Indiomadin</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>

         
</body>
</html>