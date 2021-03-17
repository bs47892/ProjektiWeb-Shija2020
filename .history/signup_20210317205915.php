<?php include("includes/header.php");?>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="login100-form validate-form">
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

                <div class="wrap-input100 validate-input" data-validate="Last name is required">
					<input class="input100" type="text" name="lastname" placeholder="Last Name">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Email is required">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="pass" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
					<input class="input100" type="password" name="confirm_password" placeholder="Confirm Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="container-login100-form-btn">
				<input type="submit" class="login100-form-btn" value="Regjistrohu">
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="login.php">
						Keni nje llogari?
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>