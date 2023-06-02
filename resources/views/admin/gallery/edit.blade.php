@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Gallery Form</h4>

                    <h4 class="text-success text-center">{{session('message')}}</h4>
                    <form action="{{route('category.update', ['id' => $gallery->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-caption-input" class="col-sm-3 col-form-label">Caption</label>
                            <div class="col-sm-9">
                                <input type="text" name="caption" value="{{$gallery->caption}}" class="form-control" id="horizontal-caption-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="horizontal-description-input">{{$gallery->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Position</label>
                            <div class="col-sm-9">
                                <input type="number" name="position" value="{{$gallery->position}}" class="form-control" id="horizontal-position-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Gallery Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" id="horizontal-image-input">
                                <img class="mt-2" src="{{asset($gallery->image)}}" alt="" height="120" width="130"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Gallery</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

