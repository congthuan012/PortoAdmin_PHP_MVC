<div class="container-login100">
	<div class="wrap-login100" style="padding-top: 70px;">
		<div class="login100-pic js-tilt" data-tilt>
			<img src="public/form-login/Login_v1/images/img-01.png" alt="IMG">
		</div>

		<form method="post" class="login100-form validate-form">
			<?= $thongbao ?>
			<span class="login100-form-title">
				Login
			</span>
			
			<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
				<input class="input100" type="text" name="username" placeholder="Username">
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
				<button class="login100-form-btn">
					Login
				</button>
			</div>

			<!-- <div class="text-center p-t-12">
				<span class="txt1">
					Forgot
				</span>
				<a class="txt2" href="#">
					Username / Password?
				</a>
			</div>

			<div class="text-center p-t-136">
				<a class="txt2" href="#">
					Create your Account
					<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
				</a>
			</div> -->
		</form>
	</div>
</div>