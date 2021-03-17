<?php include("includes/header.php");

$error_msg = "";

if (!isset($_SESSION['user_id'])) {
	
	if (isset($_POST['submit'])) {
		
		global $dbc;
		
		$user_email = mysqli_real_escape_string($dbc, trim($_POST['email']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

		if (!empty($user_email) && !empty($user_password)) {
			
			// Look up the username and password in the database
			$query = "SELECT id, email FROM users WHERE email = '$user_email' AND password = $user_password";
			$data = mysqli_query($dbc, $query);

			if (mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_array($data);
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['email'] = $row['email'];

				$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
				header('Location: ' . $home_url); 
			} else {
				// The username/password are incorrect so set an error message
				$error_msg = 'Na vjen keq, duhet të vendosni një emër përdoruesi dhe fjalëkalim të vlefshëm për t\'u kyçur.';
			}
		} else {
			$error_msg = "Ju lutem shenoni emailin dhe fjalekalimit për tu kyçur";
		}
	}
}


	if(empty($_SESSION['user_id'])){
?>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="login100-form validate-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<span class="login100-form-title">
					Member Login
				</span>

				<div class="wrap-input100 validate-input" data-validate="Email valide : ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" name="submit" class="login100-form-btn" value="Login">
				</div>

				<div class="text-center p-t-12">
					<span class="txt1">
						Forgot
					</span>
					<a class="txt2" href="#">
						Username / Password?
					</a>
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="signup.php">
						Krijoni një llogari
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
	} 
	else {
		echo 'Jeni kyçur si'. $_SESSION['email'];
	}

?>
<?php include("includes/footer.php"); ?>