@extends('layouts.admin')
@section('section')
		<!-- Title -->
		<div class="row mb-3">
			<div class="col-12 d-sm-flex justify-content-between align-items-center">
				<h1 class="h3 mb-2 mb-sm-0">Courses</h1>
				<a href="{{url('admin/course-create')}}" class="btn btn-sm btn-primary mb-0">Create a Course</a>
			</div>
		</div>

		<!-- Course boxes START -->
		<div class="row g-4 mb-4">
			<!-- Course item -->
			<div class="col-sm-6 col-lg-4">
				<div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
					<h6>Total Courses</h6>
					<h2 class="mb-0 fs-1 text-primary">{{$all_courses->count() ?? 0}}</h2>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4">
				<div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
					<h6>Activated Courses</h6>
					<h2 class="mb-0 fs-1 text-success">{{$active_courses ?? 0}}</h2>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4">
				<div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
					<h6>Pending Courses</h6>
					<h2 class="mb-0 fs-1 text-warning">{{$in_active_courses ?? 0}}</h2>
				</div>
			</div>
		</div>
		<!-- Course boxes END -->

		<!-- Card START -->
		<div class="card bg-transparent border">

			<!-- Card header START -->
			<div class="card-header bg-light border-bottom">
				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between">
					<!-- Search bar -->
					<div class="col-md-8">
						<form class="rounded position-relative">
							<input class="form-control bg-body" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>

					<!-- Select option -->
					<div class="col-md-3">
						<!-- Short by filter -->
						<form>
							<select class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
							
								<option value="">Sort by course level</option>
								<option>All level</option>
								<option>Beginner</option>
								<option>Intermediate</option>
								<option>Advance</option>
							</select>
						</form>
					</div>
				</div>
				<!-- Search and select END -->
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body">
				<!-- Course table START -->
				<div class="table-responsive border-0 rounded-3">
					<!-- Table START -->
					<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
						<!-- Table head -->
						<thead>
							<tr>
								<th scope="col" class="border-0 rounded-start">Course Name</th>
								<th scope="col" class="border-0">Instructor</th>
								<th scope="col" class="border-0">Added Date</th>
								<th scope="col" class="border-0">Type</th>
								<th scope="col" class="border-0">Price</th>
								<th scope="col" class="border-0">Status</th>
								<th scope="col" class="border-0 rounded-end">Action</th>
							</tr>
						</thead>
						
						<!-- Table body START -->
						<tbody>
							@foreach ($all_courses as $item)
							
								<!-- Table row -->
								<tr>
									<!-- Table data -->
									<td>
										<div class="d-flex align-items-center position-relative">
											<!-- Image -->
											<div class="w-60px">
												<img src="{{asset('assets/images/pattern/gallery.svg')}}" class="rounded" alt="">
											</div>
											<!-- Title -->
											<h6 class="table-responsive-title mb-0 ms-2">	
												<a href="#" class="stretched-link">{{$item->course_name}}</a>
											</h6>
										</div>
									</td>

									<!-- Table data -->
									<td>
										<div class="d-flex align-items-center mb-3">
											<!-- Avatar -->
											<div class="avatar avatar-xs flex-shrink-0">
												<img class="avatar-img rounded-circle" src="{{url('assets/images/avatar/01.jpg')}}" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-2">
												<h6 class="mb-0 fw-light">{{$item->trainer_name}}</h6>
											</div>
										</div>
									</td>
								
									<!-- Table data -->
									<td>{{$item->updated_at->diffForHumans()}}</td>

									<!-- Table data -->
									<td> <span class="badge text-bg-primary">{{$item->level_course}}</span> </td>

									<!-- Table data -->
									<td>₹{{$item->price}}</td>

									<!-- Table data -->
									<td> 
										<div class="form-check form-switch">
											<input class="form-check-input text-success" type="checkbox" id="flexSwitchCheckChecked" checked>
										  </div>
									</td>

									<!-- Table data -->
									<td>
										<a href=""  class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="fa fa-eye"></i></a>
										<a href="{{route('admin.course.edit',$item->id)}}"  class="btn btn-sm btn-info-soft btn-round me-1 mb-1 mb-md-0"><i class="fa fa-pen"></i></a>
										<a href="{{route('admin.course.delete',$item->id)}}" class="btn btn-sm btn-danger-soft btn-round me-1 mb-1 mb-md-0"><i class="fa fa-times"></i></a>

									</td>
								</tr>
	
							@endforeach
							<!-- Table row -->
						
							
						</tbody>
						<!-- Table body END -->
					</table>
					<!-- Table END -->
				</div>
				<!-- Course table END -->
			</div>
			<!-- Card body END -->

			<!-- Card footer START -->
		{{--
			<div class="card-footer bg-transparent pt-0">
				<!-- Pagination START -->
				<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
					<!-- Content -->
					<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
					<!-- Pagination -->
					<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
						<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
							<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
							<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination END -->
			</div>
			<!-- Card footer END -->
		--}}	
		</div>
@endsection