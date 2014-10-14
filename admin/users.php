<?php
	include "header.php";
	include "navbar-board.php";
	
	if (isset($_SESSION['username'])){
		echo $_SESSION['username'];
	} else {
		header("Location: login.php?location=".urlencode($_SERVER['REQUEST_URI']));
	}
?>
	
<?php
	include 'footer.php';
?>