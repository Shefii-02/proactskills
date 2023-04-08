
@extends('layouts.admin')
@section('section')


<!-- Page main content START -->
<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 mb-sm-0">Course Registred</h1>
        </div>
    </div>
        
    <div class="card bg-transparent">

 
        <!-- Card body START -->
        <div class="card-body px-0">

            <!-- Tabs content item START -->
            <div class="tab-pane ">
                <div class="table-responsive border-0">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Student Name</th>
                                <th scope="col" class="border-0">Course Name</th>
                                <th scope="col" class="border-0">Applied Date</th>
                                <th scope="col" class="border-0">Amount</th>
                                <th scope="col" class="border-0">Payment ID</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach($registed as $item)
                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="{{$item->image ?? url("assets/images/avatar/01.jpg")}}" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-3">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">{{$item->name}}</a></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>{{date_only($item->created_at)}}</td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <a href="mailto:{{$item->mobile}}">{{$item->mobile}}</a>
                                        <a href="mailto:{{$item->email}}">{{$item->email}}</a>
                                    </td>

                                    <!-- Table data -->
                                    <td>{{App\Models\CourseRegisted::where('user_id',$item->id)->count()}}</td>

                                    <!-- Table data -->
                                    <td>₹{{App\Models\Payment::where('user_id',$item->id)->where('status','1')->sum('amount')}}</td>

                                    <!-- Table data -->
                                    <td>
                                        <select class="form-control">
                                            <option value="0">Pending Approvel</option>
                                            <option value="1">Approved</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
            </div>
            <!-- Tabs content item END -->

        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        {{-- <div class="card-footer bg-transparent pt-0 px-0">
            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0 px-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination END -->
        </div> --}}
        <!-- Card footer END -->
    </div>
</div>
<!-- Page main content END -->
@endsection