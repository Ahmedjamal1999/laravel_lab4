@extends('layout.master')


@section('content')

    <form method="POST" action="{{url('/update',$posts->id)}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$posts->title}}" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <input type="text" class="form-control" name="body" id="exampleInputPassword1" value="{{$posts->body}}" placeholder="body">
        </div>
        <button type="submit" class="btn btn-primary form-control">Update</button>
    </form>

@endsection
