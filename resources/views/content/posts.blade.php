@extends('master')

@section('content')

<<<<<<< HEAD
<h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                @foreach($posts as $post)
                <h2>
                    <a href="#">{{ $post->title }}</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>
                    {{ $post->body }}
                </p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                @endforeach
               

=======
    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>

    <!-- First Blog Post -->
    @foreach($posts as $post)
    <h2>
        <a href="{{ route('post',['id' => $post->id ])}}">{{ $post->title }}</a>
    </h2>
    <p class="lead">
        by <a href="index.php">Start Bootstrap</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> {{ $post->created_at }}</p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <p>{{ $post->body }}</p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr>
    @endforeach

               
    <form method="post" action="{{ route('post/store') }}">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputEtitlemail1" placeholder="title">
        </div>
        <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>    

    
>>>>>>> a31754a5ceaae3992f1f992a7c25027bc323eb8e
                <!-- Pager -->
                <!--
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
                -->        
@endsection