@extends('master')

@section('content')

<h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
             
                <h2>
                    <a href="#">{{ $post->title }}</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}</p>
                <hr>
                <img class="img-responsive" src="{{ asset('upload/'.$post->image )}}" alt="" style="width:900px;height:300px;">
                <hr>
                <p>{{ $post->body }}</p>

                <hr>
         
                
@endsection