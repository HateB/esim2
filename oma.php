<?php
session_start();
if($_SESSION['kirjautunut'] != TRUE){
	header('location:login.php');
}
?>

<?php include "menu.php";?>
Hei! Olet kirjautunut.
<br>
<a href="logout.php">Kirjaudu ulos</a>
<?php include "footer.php";?>