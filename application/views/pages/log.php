<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Login</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/fav.png" type="image/png" sizes="16x16">
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

	<style>
		body {
			font-family: 'Quicksand';
		}

		.land-meta >h1 {
			font-family: unset;
		}

		.friend-logo img {
			width: 50%;
		}

		.land-meta > p {
			padding: 0 50px;
			/*text-align: left;*/
		}
		.sign-up{
			max-height: 80vh;
			overflow-y: scroll;
			overflow-x: hidden;
		}
		.sign-up::-webkit-scrollbar {
			width: 8px;
			border-radius: 20px;

		}


		.sign-up::-webkit-scrollbar-thumb {
			background-color: #797676;
			border-radius: 21px;
		}


		.sign-up::-webkit-scrollbar-track {
			background-color: #e4dddd;
		}
		a.have-account {
			cursor: pointer;
		}

		a.have-account:hover {
			color: #4f92cd;
		}

	</style>

</head>
<body>

<div class="theme-layout">
	<div class="container-fluid p-0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Trano'tsik</h1>
						<p>
							Commencez a poster vos maison a louer ou chercher la bonne maison pour vous!!
						</p>
						<div class="friend-logo">
							<span><img src="<?= base_url() ?>custom-assets/logo-white.png" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">Follow Us on <i class="fa-brands fa-twitter"></i></a>
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
							<p>
								Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>
						<form action="<?= site_url("LoginController/log") ?>" method="post">
							<div class="form-group">	
							  <input type="text" name="email" id="input" required="required"/>
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" name="password" required="required"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit"><span>Login</span></button>
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg sign-up">
						<h2 class="log-title">Register</h2>
						<p>
							Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
						</p>
						<form method="post" action="<?= site_url("InscriptionController/inscription") ?>" >
							<div class="form-group">	
							  <input type="text" name="first_name" required="required"/>
							  <label class="control-label" for="input">First name</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">
							  <input type="text" name="last_name" required="required"/>
							  <label class="control-label" for="input">Last name</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="date" name="date_birth" required="required"/>
							  <label class="control-label" for="input">Date of birth</label><i class="mtrl-select"></i>
							</div>

							<div class="pt-1 pb-1 mt-1 mb-1">
								<h7 >Vos informations seront gardee privee ***</h7>
							</div>

							<div class="form-group">
								<input type="text" name="phone" required="required"/>
								<label class="control-label" for="input">Phone number</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">
								<input type="text" name="email" required="required"/>
								<label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">
								<input type="password" name="password" required="required"/>
								<label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">
								<input type="password" name="re_password" required="required"/>
								<label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
							</div>

							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked" required/><i class="check-box"></i>Accept Terms & Conditions?
							  </label>
							</div>

							<a href="#" title="" class="already-have w-75" style="display: none" id="go-back">Already have an account</a>

							<div class="submit-btns d-flex justify-content-between">
								<button class="btn btn-primary rounded-0"><span>Register</span></button>
								<a class="mt-3 pt-1 border-0 rounded-0 have-account" onclick="goBack()" style="font-size: 13px;"  ><span>I already have an account</span></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal" id="reportModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-success">
                    <?php if(isset($success)) { echo "Votre compte a ete creer, Veuillez vous connecter"; } ?>
                </h4>
                <h4 class="text-danger">
                    <?php if(isset($error)) { echo $error; } ?>
                    <?= validation_errors() ?>
                </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

    <?php
        if(isset($success) || isset($error) || validation_errors() != '') { ?>
            $("#reportModal").modal("show");
        <?php
        }
    ?>

	function  goBack() {
		$("#go-back").trigger("click");
	}
</script>

<script src="<?= base_url() ?>assets/js/main.min.js"></script>
<script src="<?= base_url() ?>assets/js/script.js"></script>

</body>	

</html>