@extends('master')

@section('content')

    <h1 class="page-header">
        Statistic
        <small>Secondary Text</small>
    </h1>

    <table class="table">
        <tr>
            <td>user count</td>
            <td>{{ $user_count }}</td>
        </tr>
        <tr>
            <td>post count</td>
            <td>{{ $post_count}}</td>
        </tr>
        <tr>
            <td>comment count</td>
            <td>{{$comment_count}}</td>
        </tr>
        <tr>
            <td>likes count</td>
            <td>{{$likes_count}}</td>
        </tr>
    </table>
@endsection