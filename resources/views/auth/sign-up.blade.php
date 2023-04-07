@extends('layouts.web')
@section('contents')
	<section class="p-0 d-flex justify-content-center position-relative overflow-hidden">
	
		<div class="col-lg-4 col-md-10 col-sm-10">
			<div class="row">
				<div class="card" >
					<div class="card-body shadow-lg p-3  bg-body rounded">
						<!-- Right -->
						<div class="col-12 col-lg-12 m-auto">
							<div class="row my-5">
								<div class="col-sm-10 col-xl-12 m-auto">
									<!-- Title -->
									<img src="assets/images/element/03.svg" class="h-40px mb-2" alt="">
									<h2>Sign up for your account!</h2>
									<p class="lead mb-4">Nice to see you! Please Sign up with your account.</p>
								
									<!-- Form START -->
									<form action="{{ route('register') }}" method="POST">
										@csrf
										<!-- Email -->
										<div class="mb-4">
											<label for="full_name" class="form-label">Full Name *</label>
											<div class="input-group input-group-lg">
												<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-user"></i></span>
												<input type="text"  name="name"
												required autofocus class="form-control border-0 bg-light rounded-end ps-1" placeholder="Full Name" id="full_name">
											</div>
											@if ($errors->has('name'))
											<span class="text-danger">{{ $errors->first('name') }}</span>
											@endif
										</div>
										<!-- Email -->
										<div class="mb-4">
											<label for="exampleInputEmail1" class="form-label">Email address *</label>
											<div class="input-group input-group-lg">
												<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
												<input type="email" name="email" required autofocus class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1">
											</div>
											@if ($errors->has('email'))
											<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
										</div>
										<!-- Password -->
										<div class="mb-4">
											<label for="inputPassword5" class="form-label">Password *</label>
											<div class="input-group input-group-lg">
												<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
												<input required name="password" type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword5">
											</div>
											@if ($errors->has('password'))
											<span class="text-danger">{{ $errors->first('password') }}</span>
											@endif
										</div>
										<!-- Check box -->
										<div class="mb-4">
											<div class="form-check">
												<input required type="checkbox" class="form-check-input" id="checkbox-1">
												<label class="form-check-label" for="checkbox-1">By signing up, you agree to the<a href="{{route('terms-of-service')}}"> terms of service</a></label>
											</div>
										</div>
										<!-- Button -->
										<div class="align-items-center mt-0">
											<div class="d-grid">
												<button type="submit" class="btn btn-primary mb-0" type="button">Sign Up</button>
											</div>
										</div>
									</form>
									<!-- Form END -->

									<!-- Social buttons -->
									<div class="row">
										<!-- Divider with text -->
										<div class="position-relative my-4">
											<hr>
											<p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
										</div>
										<!-- Social btn -->
										<div class="col-xxl-12 d-grid">
											<a href="{{route('auth.google')}}" class="btn bg-light mb-2 mb-xxl-0 text-dark"><img src="{{url('assets/images/google.svg')}}" class="fab fa-fw fa-google text-danger me-2">Continue with Google</a>
										</div>
									</div>

									<!-- Sign up link -->
									<div class="mt-4 text-center">
										<span>Already have an account?<a href="sign-in"> Sign in here</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection