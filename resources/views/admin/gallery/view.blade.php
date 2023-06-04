@extends('admin.master')

@section('body')


        <div class="container  text-center bg-light pb-5 pt-3">
                <h1>{{$gallery->caption}}</h1>
                <div class="image py-3 pb-5">
                    <img src="{{asset($gallery->image)}}" alt="" height="500" width="1000"/>
                </div>
                <caption>{{$gallery->description}}</caption>
                <p>{{$gallery->position}}</p>


        </div>

@endsection
