@extends('master')

@section('content')

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
    <img class="img-responsive" src="upload/{{ $post->image }}" alt="" style="width:900px;height:300px;">
    <hr>
    <p>{{ $post->body }}</p>
    <a class="btn btn-primary" href="{{ route('post',['id' => $post->id ])}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr>
    @endforeach

               
    <form method="post" action="{{ route('post/store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputEtitlemail1" placeholder="title">
        </div>
        <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label for="title">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputEtitlemail1" placeholder="image">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>    

            @foreach($errors->all() as $error)
                {{ $error}} <br/>
            @endforeach
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