@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">ALl Category Information</h4>
                    <h4 class="text-success text-center">{{session('message')}}</h4>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>Name</th>
                                            <th>Category Description</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->description}}</td>
                                            <td><img src="{{asset($category->image)}}" alt="" height="50" width="70"/></td>
                                            <td>{{$category->status}}</td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection