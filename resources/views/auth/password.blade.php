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
							<!-- Title -->
								<span class="mb-0 fs-1">🤔</span>
								<h1 class="fs-2">Forgot Password?</h1>
								<h5 class="fw-light mb-4">To receive a new password, enter your email address below.</h5>
								
								<!-- Form START -->
								<form>
									<!-- Email -->
									<div class="mb-4">
										<label for="exampleInputEmail1" class="form-label">Email address *</label>
										<div class="input-group input-group-lg">
											<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
											<input type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1">
										</div>
									</div>
									<!-- Button -->
									<div class="align-items-center">
										<div class="d-grid">
											<button class="btn btn-primary mb-0" type="button">Reset password</button>
										</div>
									</div>	
								</form>
								<!-- Form END -->
							</div>
						</div> <!-- Row END -->
					</div>
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
@endsection