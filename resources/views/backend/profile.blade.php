@extends('layouts.admin')
@section('section')
<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

			<!-- Main content START -->
			<div class="col-xl-12">
				<!-- Edit profile START -->
				<div class="card bg-transparent border rounded-3">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="card-header-title mb-0">Edit Profile</h3>
					</div>
					<!-- Card body START -->
					<div class="card-body">
						<!-- Form -->
						<form action="{{route('admin.profile-update')}}" method="POST" class="row g-4">
                            @csrf
							<!-- Profile picture -->
							<div class="col-12 justify-content-center align-items-center">
								<label class="form-label">Profile picture</label>
								<div class="d-flex align-items-center">
									<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
										<!-- Avatar place holder -->
										<span class="avatar avatar-xl">
											<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow picture_img" src="{{url('assets/images/avatar/01.jpg')}}" alt="">
										</span>
									</label>
									<!-- Upload button -->
									<label class="btn btn-primary-soft mb-0" for="uploadfile-1">Change</label>
									<input id="uploadfile-1" class="form-control d-none image_shower" data-img="picture_img" data-path="picture"  type="file">
                                   <input type="hidden" name="picture" id="picture">
								</div>
							</div>

							<!-- Full name -->
							<div class="col-6">
								<label class="form-label">Full name</label>
									<input type="text" class="form-control" name="name" value="{{auth()->user()->name}}" placeholder="Full Name">
								
							</div>

							<!-- Phone number -->
							<div class="col-md-6">
								<label class="form-label">Mobile number</label>
								<input type="text" class="form-control" name="mobile" value="{{auth()->user()->mobile}}" placeholder="Mobile number">
							</div>
                            <!-- New password -->
                            <div class="col-md-6">
                                <label class="form-label"> Enter new password</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" name="password" placeholder="Enter new password">
                                </div>
                            </div>
                        
							<!-- Save button -->
							<div class="d-sm-flex justify-content-end">
								<button type="submit" class="btn btn-primary mb-0">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Edit profile END -->
				
			</div>
			<!-- Main content END -->
		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->
@endsection

@section('scripts')
<script>


	$('body').on('change', '.image_shower', function() {
	
		var d_img  = $(this).attr('data-img');
		var d_path = $(this).attr('data-path');

		var reader = new FileReader();
			const file = this.files[0];
			if (file) {
				reader.onload = function (event) {
					$("."+d_img).attr("src", event.target.result);
					$("#"+d_path).val(event.target.result);
				};
				reader.readAsDataURL(file);
			}
	});

	
</script>
@endsection