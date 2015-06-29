<?php
include('./libClases.php');

session_start();
if (!isset($_SESSION["oUsuario"])){
?>

<script>
	document.location.href="home.php";
</script>
<?php 
}
?>
