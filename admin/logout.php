<?php
	include "header.php";
	include "navbar.php";
	
	session_destroy();
	
	echo "<div class='container' role='main'>";
		echo "<div class='bs-callout bs-callout-info col-md-9'>";
			echo '<h3>You have been logged out.</h3>';
			echo '<p><a class="btn btn-primary" href="login.php">Go back</a></p>';
		echo "</div>";
	echo "</div>";
	
	include "footer.php";
?>