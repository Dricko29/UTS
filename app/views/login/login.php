
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 17:15:38 GMT -->
<head>

	<title>Gradient Able bootstrap admin template by codedthemes</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Codedthemes" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url; ?>/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?= base_url; ?>/assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">

			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <form action="<?= base_url; ?>/login/prosesLogin" method="post">
                            <h2>Logistic</h2>
                            <!-- <img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4"> -->
                            <h5 class="mb-3 f-w-400">Login</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="username" name="username">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin</button>
                        </form>
                        <div class="row">
                            <div class="col-sm-12">
                            <?php
                            Flasher::Message();
                            ?>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?= base_url; ?>/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url; ?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url; ?>/assets/js/waves.min.js"></script>



</body>


<!-- Mirrored from codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 17:15:38 GMT -->
</html>
