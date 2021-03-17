<?php include("includes/header.php"); 


if (isset($_POST['submit'])) {
   
    $first_name = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
    $last_name = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));

    if (!empty($first_name) && !empty($last_name)  && !empty($email) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
      global $dbc;

      $query = "SELECT * FROM users WHERE email = '$email'"; //kontrollon ne db per user ekzistues
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) { //nese nuk ka 
       
        $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$first_name', '$last_name', '$email','$password1')";
        mysqli_query($dbc, $query);
    
        echo '<p>Your new account has been successfully created. You\'re now ready to <a href="login.php">log in</a>.</p>';
      
        mysqli_close($dbc);
        exit();
      }
      else {
        echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
        $username = "";
      }
    }
    else {
      echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
    }
  }

  mysqli_close($dbc);
?>




<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>
			<form class="login100-form validate-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<span class="login100-form-title">
					Register 
				</span>
                <div class="wrap-input100 validate-input" data-validate="First name is required">
					<input class="input100" type="text" name="firstname" placeholder="First Name">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Ju lutem plotësoni fushën Mbiemri ">
					<input class="input100" type="text" name="lastname" placeholder="Mbiemri">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password1" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
					<input class="input100" type="password" name="password2" placeholder="Confrim Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" name="submit" class="login100-form-btn" value="Regjistrohu">
				</div>


				<div class="text-center p-t-136">
					<a class="txt2" href="login.php">
                    Keni një llogari? 
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>