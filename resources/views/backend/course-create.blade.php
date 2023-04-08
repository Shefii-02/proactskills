@extends('layouts.admin')
@section('section')
<!-- =======================
Page Banner START -->
<section class="py-0 bg-blue h-100px align-items-center d-flex h-100px rounded-0" style="background:url(/assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
	<!-- Main banner background image -->
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Title -->
				<h1 class="text-white">Submit a new Course</h1>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Steps START -->
<section>
	<div class="container">
		@if($errors->count())
			<div class="alert alert-danger alert-dismissable">
					Sorry some errors in form submission
			</div>
		@endif

		<div class="card bg-transparent border rounded-3 mb-5">
			<div id="stepper" class="bs-stepper stepper-outline">
				<!-- Card header -->
				<div class="card-header bg-light border-bottom px-lg-5">
					<!-- Step Buttons START -->
					<div class="bs-stepper-header" role="tablist">
						<!-- Step 1 -->
						<div class="step" data-target="#step-1">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger1" aria-controls="step-1">
									<span class="bs-stepper-circle">0</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Course</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 2 -->
						<div class="step" data-target="#step-2">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2" aria-controls="step-2">
									<span class="bs-stepper-circle">1</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Section 1</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 3 -->
						<div class="step" data-target="#step-3">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3" aria-controls="step-3">
									<span class="bs-stepper-circle">2</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Section 2</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 4 -->
						<div class="step" data-target="#step-4">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger4" aria-controls="step-4">
									<span class="bs-stepper-circle">3</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Section 3</h6>
							</div>
						</div>
						
						<div class="line"></div>
						<!-- Step 5 -->
						<div class="step" data-target="#step-5">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger5" aria-controls="step-5">
									<span class="bs-stepper-circle">4</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Section 4</h6>
							</div>
						</div>
						
						<div class="line"></div>
						<!-- Step 6 -->
						<div class="step" data-target="#step-6">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger6" aria-controls="step-6">
									<span class="bs-stepper-circle">5</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Section 5</h6>
							</div>
						</div>
						
						 <div class="line"></div>
						<!-- Step 7 -->
						<div class="step" data-target="#step-7">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger7" aria-controls="step-7">
									<span class="bs-stepper-circle">6</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Section 6</h6>
							</div>
						</div>
						
						<div class="line"></div>
						<!-- Step 8 -->
						<div class="step" data-target="#step-8">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger8" aria-controls="step-8">
									<span class="bs-stepper-circle">7</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Section 7</h6>
							</div>
						</div> 
					
					</div>
					<!-- Step Buttons END -->
				</div>

				<!-- Card body START -->
				<div class="card-body">
					<!-- Step content START -->
					<div class="bs-stepper-content">
						<form action="{{route('admin.course-create')}}" method="POST" id="course" enctype="multipart/form-data">
							@csrf 
							<!-- Step 1 content START -->
							<div id="step-1" role="tabpanel" class="content fade" aria-labelledby="steppertrigger1">
								<!-- Title -->
								<h4>Course Details</h4>

								<hr> <!-- Divider -->
								
								<!-- Basic information START -->
								<div class="row g-4  bg-light">
									<div class="col-md-6">
										<!-- Upload image START -->
										<div class="col-12">
											<div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
												<!-- Image -->
												<img src="{{asset('assets/images/pattern/gallery.svg')}}" class="h-50px picture_img" alt="picture_img">
												<div>
													<h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
													<label style="cursor:pointer;">
														<span> 
															<input class="form-control stretched-lin image_shower" data-img="picture_img" data-path="picture" type="file" id="image" accept="image/jpg, image/jpeg, image/png" />
															<input type="hidden" name="picture" id="picture">
														</span>
													</label>
														<p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
												</div>	
											</div>
											
										</div>
										<!-- Upload image END -->
									</div>
									<div class="col-md-6">
										<div class="row g-4">
											<!-- Course title -->
											<div class="col-12">
												<label class="form-label">Course title</label>
												<input class="form-control" type="text" name="course_name" value="{{-- --}}" placeholder="Enter course title">
											</div>
				
											<!-- Course time -->
											<div class="col-md-6">
												<label class="form-label">Course total time</label>
												<input class="form-control" type="text" name="course_time" value="{{-- --}}" placeholder="Enter course time">
											</div>

											<!-- Total lecture -->
											<div class="col-md-6">
												<label class="form-label">Total lecture</label>
												<input class="form-control" type="text" name="total_days" value="{{-- --}}" placeholder="Enter total lecture">
											</div>

											<!-- Course price -->
											<div class="col-md-6">
												<label class="form-label">Course price</label>
												<input type="text" name="price" value="{{-- --}}" class="form-control" placeholder="Enter course price">
											</div>

											<!-- Course discount -->
											<div class="col-md-6">
												<label class="form-label">Discount price</label>
												<input class="form-control" type="text" name="discount_price" value="{{-- --}}" placeholder="Enter discount">
												<div class="col-12 mt-1 mb-0">
													<div class="form-check small mb-0">
														<input class="form-check-input" value="enable_discount" type="checkbox" id="checkBox1">
														<label class="form-check-label" for="checkBox1">
															Enable this Discount
														</label>
													</div>
												</div>
											</div>
											<!-- Course disc_exp_date -->
											<div class="col-md-6">
												<label class="form-label">Discount Exp date</label>
												<input type="date" name="disc_exp_date" value="{{-- --}}" class="form-control">
											</div>		
											<!-- Course level -->
											<div class="col-md-6">
												<label class="form-label">Course level</label>
												<select name="level_course"  class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
													<option value="">Select course level</option>
													<option>All level</option>
													<option>Beginner</option>
													<option>Intermediate</option>
													<option>Advance</option>
												</select>
											</div>
										</div>
									</div>
									
									<!-- Step 1 button -->
									<div class="d-flex justify-content-end mt-3">
										<span class="btn btn-primary next-btn mb-0">Next</span>
									</div>
								</div>
								<!-- Basic information START -->
							</div>
							<!-- Step 1 content END -->

							<!-- Step 2 content START -->
							<div id="step-2" role="tabpanel" class="content fade" aria-labelledby="steppertrigger2">
								<!-- Title -->
								<h4>Banner Details </h4>

								<hr> <!-- Divider -->
								
								<div class="row g-4  bg-light">
									<!-- Course title -->
									<div class="col-md-6">
										<label class="form-label">Title</label>
										<input class="form-control" type="text" name="banner_title" value="{{-- --}}" placeholder="Enter course title">
									</div>
									<!-- Course time -->
									<div class="col-md-6">
										<label class="form-label">Sub Title</label>
										<input class="form-control" type="text" name="banner_sub_title" value="{{-- --}}" placeholder="Enter course time">
									</div>
									<!-- Short description -->
									<div class="col-12">
										<label class="form-label">Short Description</label>
										<textarea class="form-control" name="banner_short_description" rows="2" placeholder="Short description"></textarea>
									</div>
									<!-- Course title -->
									<div class="col-md-4">
										<label class="form-label">Button Text</label>
										<input class="form-control" type="text" name="banner_btn_text" value="{{-- --}}" placeholder="Enter button title">
									</div>
									
									<!-- Course time -->
									<div class="col-md-2">
										<label class="form-label">Text Color</label>
										<input class="form-control" name="banner_text_color" type="color" >
									</div>

									<!-- Total lecture -->
									<div class="col-md-2">
										<label class="form-label">Button Color</label>
										<input class="form-control" name="banner_btn_color" type="color" >
									</div>

									<div class="col-md-6">
										<!-- Upload image START -->
										<div class="col-12">
											<div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
												<!-- Image -->
												<img src="{{asset('assets/images/pattern/gallery.svg')}}" class="h-50px banner_image_img" alt="banner_image_img">
												<div>
													<h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
													<label style="cursor:pointer;">
														<span> 
															<input class="form-control stretched-link  image_shower" data-img="banner_image_img" data-path="banner_image" type="file"  id="image" accept="image/gif, image/jpeg, image/png" />
															<input type="hidden" name="banner_image_img" id="banner_image_img">
														</span>
													</label>
														<p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
												</div>	
											</div>

										</div>
										<!-- Upload image END -->
									</div>
									<div class="col-md-6">
										<div class="row g-4 ">
									
											<!-- Course title -->
											<div class="col-12">
												<label class="form-label">Youtube Link</label>
												<input class="form-control" type="text" name="banner_yt_link" value="{{-- --}}" placeholder="YOUTUBE LINK">
											</div>
											<!-- Course time -->
											<div class="col-md-12">
												<div class="row g-4">
													<div class="col-md-6">
														<input class="form-control" type="text" name="bc_title_1" value="{{-- --}}" placeholder="Title">
													</div>
													<div class="col-md-6">
														<input class="form-control" type="number" name="bc_count_1" value="{{-- --}}" placeholder="Count">
													</div>
												</div>
											</div>
											<!-- Course time -->
											<div class="col-md-12">
												<div class="row g-4">
													<div class="col-md-6">
														<input class="form-control" type="text" name="bc_title_2" value="{{-- --}}" placeholder="Title">
													</div>
													<div class="col-md-6">
														<input class="form-control" type="number" name="bc_count_2" value="{{-- --}}" placeholder="Count">
													</div>
												</div>
											</div>
											
											<!-- Course time -->
											<div class="col-md-12">
												<div class="row g-4">
													<div class="col-md-6">
														<input class="form-control" type="text" name="bc_title_3" value="{{-- --}}" placeholder="Title">
													</div>
													<div class="col-md-6">
														<input class="form-control" type="number" name="bc_count_3" value="{{-- --}}" placeholder="Count">
													</div>
												</div>
											</div>
										</div>										
									</div>
									
									<!-- Step 2 button -->
									<div class="d-flex justify-content-between mt-3">
										<span class="btn btn-secondary prev-btn mb-0">Previous</span>
										<span class="btn btn-primary next-btn mb-0">Next</span>
									</div>
								</div>
							</div>
							<!-- Step 2 content END -->

							<!-- Step 3 content START -->
							<div id="step-3" role="tabpanel" class="content fade" aria-labelledby="steppertrigger3">
								<!-- Title -->
								<h4>Reviews</h4>

								<hr> <!-- Divider -->
								
								<div class="row g-4  bg-light">
									
									<div class="col-md-12">
										<div class="col-lg-12 reviews_part ">
											<div class="row g-4 mb-3">
												<div class="col-md-1">
													<img src="{{asset('assets/images/pattern/gallery.svg')}}" class="h-50px review_image_img_1" alt="review_image_1">
												</div>
												<div class="col-md-3">
													<label class="form-label">Image</label>
													<input class="form-control  image_shower" data-img="review_image_img_1" data-path="review_image_1" type="file" image id="image" accept="image/gif, image/jpeg, image/png" />
													<input type="hidden" name="review_image[]" id="review_image_1">
												</div>
												<div class="col-md-4">
													<label class="form-label">Name</label>
													<input class="form-control" type="text" name="name[]" placeholder="Student Name">
												</div>
												<div class="col-md-3">
													<label class="form-label">Star Rating</label>
													<select class="form-control" name="review_rating[]" >
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>												
												</div>
											</div>
										</div>
										<div class="col-lg-12 text-end mt-3">
											<span class="btn btn-sm btn-primary-soft mb-0 add__reviews"><i class="bi bi-plus-circle me-2"></i>Add</span>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="row g-4 ">
											<!-- Course title -->
											<div class="col-md-4">
												<label class="form-label">Button Text</label>
												<input class="form-control" type="text" name="review_btn_text" value="{{-- --}}" placeholder="Enter button title">
											</div>
											<!-- Course time -->
											<div class="col-md-2">
												<label class="form-label">Text Color</label>
												<input class="form-control" name="review_text_color" type="color" >
											</div>

											<!-- Total lecture -->
											<div class="col-md-2">
												<label class="form-label">Button Color</label>
												<input class="form-control" name="review_btn_color" type="color" >
											</div>
										</div>
									</div>

									<!-- Step 3 button -->
									<div class="d-flex justify-content-between mt-4">
										<span class="btn btn-secondary prev-btn mb-0">Previous</span>
										<span class="btn btn-primary next-btn mb-0">Next</span>
									</div>
								</div>
							</div>
							<!-- Step 3 content END -->

							<!-- Step 4 content START -->
							<div id="step-4" role="tabpanel" class="content fade" aria-labelledby="steppertrigger4">
								<!-- Title -->
								<h4>Additional Information</h4>

								<hr> <!-- Divider -->

								<div class="row g-4 bg-light">
									
									<!-- keynote START -->
									<div class="col-md-12 ">
										<div class="row g-4 mb-3">
											<div class="col-md-12 ">
												<label class="form-label">Heading 1</label>
												<input class="form-control" type="text" name="add_info_title_1" value="{{-- --}}"  placeholder="Heading...">
											</div>
										</div>
										<div class="addition_info_1">
											<div class="row  g-4 mb-3">
												<div class="col-md-12">
													<label class="form-label">Key Note</label>
													<input class="form-control" type="text" name="key_notes_1[]" value="{{-- --}}" placeholder="Keynote...">
												</div>
											</div>
										</div>
										
										<div class="col-lg-12 text-end">
											<span class="btn btn-sm btn-primary-soft mb-0  addition_info_1_add"><i class="bi bi-plus-circle me-2"></i>Add</span>
										</div>
									</div>
										<hr> <!-- Divider -->

									<!-- Reviewer START -->
									<div class="col-md-12 ">
										<div class="row g-4 mb-3">
											<div class="col-md-12 ">
												<label class="form-label">Heading 1</label>
												<input class="form-control" type="text" name="add_info_title_2" value="{{-- --}}"  placeholder="Heading...">
											</div>
										</div>
										<div class="addition_info_2">
											<div class="row  g-4 mb-3">
												<div class="col-md-12">
													<label class="form-label">Key Note</label>
													<input class="form-control" type="text" name="key_notes_2[]" value="{{-- --}}"  placeholder="Keynote...">
												</div>
											</div>
										</div>
										
										<div class="col-lg-12 text-end">
											<span class="btn btn-sm btn-primary-soft mb-0  addition_info_2_add"><i class="bi bi-plus-circle me-2"></i>Add</span>
										</div>
									</div>
										<hr> <!-- Divider -->
										
									<div class="col-md-12 ">
										<div class="row g-4 mt-3">
											<div class="col-md-6">
												<!-- Upload image START -->
												<div class="col-12">
													<div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
														<!-- Image -->
														<img src="{{asset('assets/images/pattern/gallery.svg')}}" class="h-50px add_info_image_img" alt="">
														<div>
															<h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
															<label style="cursor:pointer;">
																<span> 
																	<input class="form-control stretched-link image_shower" data-img="add_info_image_img" data-path="add_info_image" type="file"  id="image" accept="image/gif, image/jpeg, image/png" />
																	<input type="hidden" name="add_info_image" id="add_info_image">
																</span>
															</label>
																<p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
														</div>	
													</div>

												</div>
												<!-- Upload image END -->
											</div>
											
											<div class="col-md-6">
												<div class="row g-4 ">
													<!-- Course title -->
													<div class="col-md-12">
														<label class="form-label">Youtube Link</label>
														<input class="form-control" type="text" name="add_yt_link" value="{{-- --}}" placeholder="YOUTUBE LINK">
													</div>
													<!-- Course title -->
													<div class="col-md-12">
														<label class="form-label">Button Text</label>
														<input class="form-control" type="text" name="add_btn_text" value="{{-- --}}" placeholder="Enter button title">
													</div>
													<!-- Course time -->
													<div class="col-md-6">
														<label class="form-label">Text Color</label>
														<input class="form-control" name="add_btn_color" type="color" >
													</div>

													<!-- Total lecture -->
													<div class="col-md-6">
														<label class="form-label">Button Color</label>
														<input class="form-control" name="add_text_color" type="color" >
													</div>
												</div>										
											</div>
										</div>
									</div>
									<!-- Reviewer START -->

									<!-- Step 4 button -->
									<div class="d-flex justify-content-between mt-4">
										<span class="btn btn-secondary prev-btn mb-0">Previous</span>
										<span class="btn btn-primary next-btn mb-0">Next</span>
									</div>
								</div>
							</div>
							<!-- Step 4 content END -->

							<!-- Step 5 content START -->
							<div id="step-5" role="tabpanel" class="content fade" aria-labelledby="steppertrigger5">
								<!-- Title -->
								<h4>Class Information</h4>
								
								<hr> <!-- Divider -->
								<div class="row">
									<div class="col-md-12">
										<div class="row g-4">
											<div class="col-md-12">
												<label class="form-label">Title</label>
												<input class="form-control" type="text" name="class_details_title_1" value="{{-- --}}" placeholder="Enter title">
											</div>
											<!-- Short description -->
											<div class="col-md-12">
												<label class="form-label">Description</label>
											
												
												<textarea name="editor1" class="form-control" >{{'class_details_1'}}</textarea>
											</div>	
											<div class="col-md-12">
												<label class="form-label">Title</label>
												<input class="form-control" type="text" name="class_details_title_2" value="{{-- --}}" placeholder="Enter title">
											</div>
											<!-- Short description -->
											<div class="col-md-12">
												<label class="form-label">Description</label>
													<textarea name="editor2" placeholder="Description">{{'class_details_2'}}</textarea>
											</div>	
										</div>
									</div>
									<!-- Step 6 button -->
									<div class="d-flex justify-content-between mt-4">
										<span class="btn btn-secondary prev-btn mb-0">Previous</span>
										<span class="btn btn-primary next-btn mb-0">Next</span>
									</div>
								</div>
							</div>
							<!-- Step 5 content END -->

							<!-- Step 6 content START -->
							<div id="step-6" role="tabpanel" class="content fade" aria-labelledby="steppertrigger6">
								<!-- Title -->
								<h4>Faq's</h4>

								<hr> <!-- Divider -->
								<div class="row g-4">
										<!-- Edit faq START -->
										<div class="col-12">
											<div class="bg-light border rounded p-2 p-sm-4">
												<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
													<h5 class="mb-2 mb-sm-0">Upload FAQs</h5>
												</div>
												<div class="row g-4">
													<div class="col-md-12">
														<div class="col-lg-12 faq_parts ">
															<div class="row g-4 mb-3">
																<div class="col-md-6">
																	<label class="form-label">Question</label>
																	<input class="form-control" type="text" name="question[]"  name="review_name[]" placeholder="Question">
																</div>
																<div class="col-md-5">
																	<label class="form-label">Answer</label>
																	<textarea class="form-control"  name="answer[]" name="review_rating[]" placeholder="Answer"></textarea>																</div>
															</div>
														</div>
														<div class="col-lg-12 text-end mt-3">
															<button class="btn btn-sm btn-primary-soft mb-0 add__faqs"><i class="bi bi-plus-circle me-2"></i>Add</span>
														</div>
													</div>
												</div>
											</div>	
										</div>
										<!-- Edit faq END -->
									<!-- Step 7 button -->
									<div class="d-flex justify-content-between mt-4">
										<span class="btn btn-secondary prev-btn mb-0">Previous</span>
										<span class="btn btn-primary next-btn mb-0">Next</span>
									</div>
								</div>
							</div>
							<!-- Step 6 content END -->
							<!-- Step 7 content START -->
							<div id="step-7" role="tabpanel" class="content fade" aria-labelledby="steppertrigger7">
								<!-- Title -->
								<h4>About Trainer</h4>
								<hr> <!-- Divider -->
								<div class="row g-4  bg-light">
									<div class="col-md-12">
										<div class="row g-4">
											<div class="col-6">
												<div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
													<!-- Image -->
													<img src="{{asset('assets/images/pattern/gallery.svg')}}" class="h-50px trainer_image_img" alt="">
													
													<h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
													<label style="cursor:pointer;">
														<span> 
															<input class="form-control stretched-link image_shower" data-img="trainer_image_img" data-path="trainer_image"  type="file" id="image" accept="image/gif, image/jpeg, image/png" />
															<input type="hidden" name="trainer_image" id="trainer_image">
														</span>
													</label>
													<p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
												</div>	
											</div>
											<div class="col-md-6">
												<div class="row g-4">
													<div class="col-md-12">
														<label class="form-label">Trainer Name</label>
														<input class="form-control" type="text" name="trainer_name" value="{{-- --}}" placeholder="Enter title">
													</div>
													<div class="col-md-12">
														<label class="form-label">Trainer Position</label>
														<input class="form-control" type="text" name="trainer_position" value="{{-- --}}" placeholder="Enter title">
													</div>
												</div>
											</div>
											<!-- Course description -->
											<div class="col-12">
												<label class="form-label">Trainer Details</label>
												<!-- Editor -->
												<textarea name="editor3">{{'trainer_description'}}</textarea>
											</div>	
											<!-- Step 8 button -->
											<div class="d-flex justify-content-between mt-3">
												<span class="btn btn-secondary prev-btn mb-0">Previous</span>
												<span class="btn btn-primary next-btn mb-0">Next</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Step 7 content END -->
							<!-- Step 8 content START -->
							<div id="step-8" role="tabpanel" class="content fade" aria-labelledby="steppertrigger8">
								<!-- Title -->
								<h4>SEO Details</h4>

								<hr> <!-- Divider -->

									<!-- Tags START -->
								<div class="col-md-12">
									<div class="row g-4 bg-light">
											<!-- Upload image END -->
										<div class="col-md-12">
											<label class="form-label">SEO Title</label>
											<input class="form-control" type="text" name="seo_titile" value="{{-- --}}" placeholder="SEO Title">
										</div>
										<div class="col-md-12">
											<label class="form-label">SEO Description</label>
											<textarea class="form-control" name="seo_description" placeholder="SEO Description"></textarea>
										</div>
										<div class="col-md-12">
											<label class="form-label">Key Words</label>
											<input class="form-control" type="text" name="seo_keywords" value="{{-- --}}" placeholder="SEO Title">
										</div>

									</div>
									<!-- Tags START -->
									
									<!-- Step finish button -->
									<div class="d-md-flex justify-content-between align-items-start mt-4">
										<span class="btn btn-secondary prev-btn mb-2 mb-md-0">Previous</span>
										<div class="text-md-end">
											<input type="submit" class="btn btn-success mb-2 mb-sm-0" name="submit_course" value="Submit a Course">
										</div>
									</div>
								</div>
							</div>
							<!-- Step 8 content END -->
						</form>
					</div>
				</div>
				<!-- Card body END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================Steps END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection

@section('scripts')
<script>
var kk = 1;
	$('body').on('click', '.add__reviews', function() {
		kk = kk +1;
		var random = Math.floor(Math.random()* 10000000);
		
		var part_review = 	`<div class="row g-4 mb-3" id="`+random+`">
								<div class="col-md-1">
									<img src="{{asset('assets/images/pattern/gallery.svg')}}" class="h-50px review_image_img_`+kk+`" alt="review_image_`+kk+`">
								</div>
								<div class="col-md-3">
									<label class="form-label">Image</label>
									<input class="form-control image_shower" data-img="review_image_img_`+kk+`" data-path="review_image_`+kk+`" type="file"  id="image" accept="image/gif, image/jpeg, image/png" />
									<input type="hidden" name="review_image[]" id="review_image_`+kk+`">
								</div>
								<div class="col-md-4">
									<label class="form-label">Name</label>
									<input class="form-control" type="text"  name="name[]" placeholder="Student Name">
								</div>
								<div class="col-md-3">
									<label class="form-label">Star Rating</label>
									<select class="form-control" name="review_rating[]" >
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>	
								<div class="col-md-1 text-end">
									<span class="btn btn-outline-danger remove__reviews" data-id="`+random+`"><i class="fas fa-times"></i></span>
								</div>
							</div>`;
		$('.reviews_part').append(part_review)
	});

	$('body').on('click', '.remove__reviews', function() {
		var id_val = $(this).data('id');

		$('#'+id_val).remove()
	});

	$('body').on('click', '.add__faqs', function() {
		var random = Math.floor(Math.random()* 10000000);
		
		var part_review = 	`<div class="col-lg-12" id="`+random+`">
								<div class="row g-4 mb-3">
									<div class="col-md-6">
										<label class="form-label">Question</label>
										<input class="form-control" type="text" name="question[]"  placeholder="Question">
									</div>
									<div class="col-md-5">
										<label class="form-label">Answer</label>
										<textarea class="form-control"  name="answer[]" placeholder="Answer"></textarea>
									</div>
									<div class="col-md-1 text-end">
										<span class="btn btn-outline-danger remove__faqs" data-id="`+random+`"><i class="fas fa-times"></i></span>
									</div>
								</div>
							</div>`;
		$('.faq_parts').append(part_review)
	});

	$('body').on('click', '.remove__faqs', function() {
		var id_val = $(this).data('id');

		$('#'+id_val).remove()
	});

	$('body').on('click', '.addition_info_1_add', function() {
		var random = Math.floor(Math.random()* 10000000);
		
		var part_review = 	`<div class="row mb-3" id="`+random+`">
								<div class="col-md-11 " >
									<label class="form-label">Key Note</label>
									<input class="form-control" type="text"  name="key_notes_1[]" placeholder="Keynote...">
								</div>
								<div class="col-md-1 text-end">
									<span class="btn btn-outline-danger addition_info_1_remove" data-id="`+random+`"><i class="fas fa-times"></i></span>
								</div>
							</div>`;
		$('.addition_info_1').append(part_review)
	});

	$('body').on('click', '.addition_info_1_remove', function() {
		var id_val = $(this).data('id');

		$('#'+id_val).remove()
	});
	
	$('body').on('click', '.addition_info_2_add', function() {
		var random = Math.floor(Math.random()* 10000000);
		
		var part_review = 	`<div class="row mb-3" id="`+random+`">
								<div class="col-md-11 " >
									<label class="form-label">Key Note</label>
									<input class="form-control" type="text" name="key_notes_2[]" placeholder="Keynote...">
								</div>
								<div class="col-md-1 text-end">
									<span class="btn btn-outline-danger addition_info_2_remove" data-id="`+random+`"><i class="fas fa-times"></i></span>
								</div>
							</div>`;
		$('.addition_info_2').append(part_review)
	});

	$('body').on('click', '.addition_info_2_remove', function() {
		var id_val = $(this).data('id');

		$('#'+id_val).remove()
	});
	


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