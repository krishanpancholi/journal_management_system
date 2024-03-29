

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	@include('admin/header')
	<title>Login</title>
</head> 

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		 
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card my-5 my-lg-0 shadow-none border">
							<div class="card-body">
								<div class="p-4">
									<div class="text-center mb-4">
										<h5 class="">Hello! Admin</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" method="POST" action="{{ route('login') }}">
											@csrf
											<div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
 
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
											{{-- <div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div> --}}
											{{-- <div class="col-md-6 text-end">	<a href="#">Forgot Password ?</a>
											</div> --}}
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
											{{-- <div class="col-12">
												<div class="text-center">
													<p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
													</p>
												</div>
											</div> --}}
										</form>
									</div>
									<div class="login-separater text-center mb-5"> <span class="">OR SIGN IN WITH</span>
										<hr/>
									</div>
								<div class="col-12">
												<div class="text-center">
													<p class="mb-0">Don't have an account yet? <a href="{{url('admin/register')}}">Sign up here</a>
													</p>
												</div>
											</div>
									{{-- <div class="list-inline contacts-social text-center">
										<a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div> --}}

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		{{-- <footer class="bg-white shadow-none border-top p-2 text-center fixed-bottom">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer> --}}
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
@include('admin/footer')
</body>

</html>