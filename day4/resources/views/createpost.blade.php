@extends('layout.master')


@section('content')

    <form method="POST" action="/addPost">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <input type="text" class="form-control" name="body" id="exampleInputPassword1" placeholder="body">
        </div>
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>

@endsection
