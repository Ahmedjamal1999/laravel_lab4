@extends('layout.master')


@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            <th scope="col">Show</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td><a href="{{url('/editPost',$post->id)}}" class="btn btn-primary"> Edit</a></td>
                <td><a href="{{url('/delete',$post->id)}}" class="btn btn-danger"> Delete</a></td>
                <td><a href="{{url('/showPost',$post->id)}}" class="btn btn-success"> Show</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
