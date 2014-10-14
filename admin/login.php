<?php
	include 'header.php';
	
	//session_start();
	
	/*if (isset($_GET["location"])){
		echo $_GET["location"];
	}*/
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username==$password){
			$_SESSION['username'] = $username;
			//echo $_SESSION['username'];
		}
	}
	
	if (isset($_POST['nextlanding'])){
		header("Location: ".$_POST['nextlanding']);
	} else {
		$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
		$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$url .= '/index-dashboard.php';
		header("Location: ".$url);
	}
?>
	<div class="container">
		<form class="form-signin" role="form" method="POST" action="">
			<h2 class="form-signin-heading">Please sign in</h2>
			<div class="inner-addon left-addon">
			  <i class="glyphicon glyphicon-user"></i>      
			  <input name="username" type="text" class="form-control" placeholder="Username" required="" autofocus=""/>
			</div>
			<div class="inner-addon left-addon">
				<i class="glyphicon glyphicon-lock"></i>
				<input name="password" type="password" class="form-control" placeholder="Password" >
			</div>
			<button class="btn btn-lg btn-primary btn-block " type="submit">Sign in</button>
			<input type="hidden" name="nextlanding" value="<?php
																if(isset($_GET["location"])){
																	echo $_GET["location"];
																}
															?>">
		</form>

	</div>
<?php
	include 'footer.php';
?>