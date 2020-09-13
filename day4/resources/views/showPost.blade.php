@extends('layout.master')


@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$posts->id}}</th>
                <td>{{$posts->title}}</td>
                <td>{{$posts->body}}</td>

            </tr>
        </tbody>
    </table>

@endsection
