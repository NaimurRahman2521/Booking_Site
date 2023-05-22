@extends('layouts.app')
@section('title', 'Manage Apartment')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Manage Apartment</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Apartment</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Apartment</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-sm">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addApartmentModal">
                        <i class="icon icon-plus"></i>
                        Add New Apartment
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ADD NEW END -->

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-5p border-bottom-0">Sl.</th>
                                <th class="wd-10p border-bottom-0">Title</th>
                                <th class="wd-10p border-bottom-0">Location</th>
                                <th class="wd-10p border-bottom-0">Description</th>
                                <th class="wd-10p border-bottom-0">Number of Adult</th>
                                <th class="wd-10p border-bottom-0">Number of Child</th>
                                <th class="wd-10p border-bottom-0">Image</th>
                                <th class="wd-5p border-bottom-0">Booked Status</th>
                                <th class="wd-5p border-bottom-0">Publish Status</th>
                                <th class="wd-10p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($apartments as $apartment)
                                <tr>

                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$apartment->title}}</td>
                                    <td>{{$apartment->location->name}}</td>
                                    <td>{{$apartment->description}}</td>
                                    <td>{{$apartment->total_adult}}</td>
                                    <td>{{$apartment->total_child}}</td>
                                    <td>
                                        <img src="{{asset($apartment->image)}}" alt="Loading..." height="100" width="100">
                                    </td>
                                    <td>
                                        @if($apartment->book_status == 1)
                                            <span class="badge rounded-pill bg-primary-gradient">Booked</span>
                                        @else
                                            <span class="badge rounded-pill bg-primary-gradient">Available</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($apartment->status == 1)
                                            <span class="badge rounded-pill bg-primary-gradient">Published</span>
                                        @else
                                            <span class="badge rounded-pill bg-primary-gradient">Unpublished</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-success btn-sm apartment-edit-btn" data-id="{{$apartment->id}}" title="Edit apartment">
                                                <i class="ri-edit-box-fill"></i>
                                            </button>
                                            <a class="btn btn-sm btn-warning-gradient border me-2" href="{{route('apartment.delete', ['id' => $apartment->id])}}" title="Delete" onclick="return confirm('Ary you sure to delete this..');">
                                                <i class="fe fe-trash"></i>
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    @include('apartment.manage-apartment.modals.addModal')
    @include('apartment.manage-apartment.modals.editModal')


@endsection
