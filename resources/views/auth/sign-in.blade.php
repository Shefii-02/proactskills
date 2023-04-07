@extends('layouts.web')
@section('contents')
	<section class="p-0 d-flex justify-content-center position-relative overflow-hidden">
	
		<div class="col-lg-4 col-md-10 col-sm-10">
			<div class="row">
				<div class="card" >
					<div class="card-body shadow-lg p-3  bg-body rounded">
						<!-- Right -->
						<div class="col-12 col-lg-12 m-auto">
							<div class="row">
								<div class="col-sm-10 col-xl-10 m-auto">
									<!-- Title -->
									<span class="mb-0 fs-1">👋</span>
									<h1 class="fs-2">Login into Eduport!</h1>
									<p class="lead mb-4">Nice to see you! Please log in with your account.</p>

									<!-- Form START -->   
									<form method="POST" action="{{ route('login') }}">
                        				@csrf
										<!-- Email -->
										<div class="mb-4">
											<label for="exampleInputEmail1" class="form-label">Email address *</label>
											<div class="input-group input-group-lg">
												<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
												<input type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1">
												@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
										<!-- Password -->
										<div class="mb-4">
											<label for="inputPassword5" class="form-label">Password *</label>
											<div class="input-group input-group-lg">
												<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
												<input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="password" id="inputPassword5">
											
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
										<!-- Check box -->
										<div class="mb-4 d-flex justify-content-between mb-4">
											<div class="form-check">
												<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">Remember me</label>
											</div>

											@if (Route::has('reset-password'))
											<div class="text-primary-hover">
												<a href="{{ route('reset-password') }}" class="text-secondary">
													<u>Forgot password?</u>
												</a>
											</div>
											@endif
										</div>
										<!-- Button -->
										<div class="align-items-center mt-0">
											<div class="d-grid">
												<button type="submit" class="btn btn-primary mb-0" type="button">Login</button>
											</div>
										</div>
									</form>
									<!-- Form END -->

									<!-- Social buttons and divider -->
									<div class="row">
										<!-- Divider with text -->
										<div class="position-relative my-4">
											<hr>
											<p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
										</div>

										<!-- Social btn -->
										<div class="col-xxl-6 d-grid">
											<a href="#" class="btn bg-light mb-2 mb-xxl-0 text-dark"><img src="{{url('assets/images/google.svg')}}" class="fab fa-fw fa-google text-danger me-2">Continue with Google</a>
										</div>
										<!-- Social btn -->
										<div class="col-xxl-6 d-grid">
											<a href="#" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>Continue with Facebook</a>
										</div>
									</div>

									<!-- Sign up link -->
									<div class="mt-4 text-center">
										<span>Don't have an account? <a href="sign-up">Signup here</a></span>
									</div>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
					
				</div>
				
			</div> <!-- Row END -->
		</div>
	</section>
@endsection