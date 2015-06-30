<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard Jordana</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include '../php/libClases.php';
            $usr=new Usuario("",$_POST['usuario'], $_POST['clave']);
            session_start();
            if($usr->VerificaAcceso()){
                $_SESSION["oUsuario"]=$usr;
                }
                ?>
<script>
	document.location.href="index.php";
</script>
    </body>
</html>
