<?php
	include "header.php";
	include "navbar-board.php";
	
	if (isset($_SESSION['username'])){
		/*$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
		$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		echo $url;*/
		//echo $_SESSION['username'];
	} else {
		header("Location: login.php?location=".urlencode($_SERVER['REQUEST_URI']));
	}
?>
	
<?php
	include 'footer.php';
?>