@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">ALl Gallery Information</h4>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="text-center text-success">{{session('message')}}</h4>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>Caption</th>
                                            <th>Description</th>
                                            <th>Position</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($galleries as $gallery)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$gallery->caption}}</td>
                                                <td>{{$gallery->description}}</td>
                                                <td>{{$gallery->position}}</td>
                                                <td><img src="{{asset($gallery->image)}}" alt="" height="60" width="60"/></td>
                                                <td>
                                                    <a href="{{route('gallery.edit',['id' => $gallery->id])}}" class="btn btn-success btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('gallery.delete', ['id' => $gallery->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure to Delete This Item?');">
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
