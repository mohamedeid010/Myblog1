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
    <img class="img-responsive" src="{{ asset('upload/'.$post->image)}}" alt="" style="width:900px;height:300px;">
    <hr>
    <p>{{ $post->body }}</p>
    <a class="btn btn-primary" href="{{ route('post',['id' => $post->id ])}}">Read More <span class="glyphicon glyphicon-chevron-right">
    </span></a>
    @php
    $like_count = 0;
    $dislike_count = 0;
    $like_class='btn-default';
    $dislike_class='btn-default';
    @endphp
    @foreach($post->likes as $like)
        @if($like->like == 1)
            @if(Auth::check() && $like->user_id == Auth::user()->id ) 
            <?php $like_class='btn-success'; ?>
            @endif
            <?php $like_count++ ?>
        @endif
        @if($like->like == 0)
            @if(Auth::check() && $like->user_id == Auth::user()->id ) 
            <?php $dislike_class='btn-danger'; ?>
            @endif
             <?php $dislike_count++; ?>
        @endif
    @endforeach
    <button class="btn {{ $like_class }} like @if(!Auth::check()) disabled @endif" 
            data-postid="{{ $post->id }}-l"
            data-like-status='{{ $like_class }}'>Like <span class="glyphicon glyphicon-thumbs-up"></span> 
            <span class="badge like-count"> {{$like_count}} </span>
    </button>
    <button class="btn {{ $dislike_class }} dislike @if(!Auth::check()) disabled @endif"
            data-postid="{{ $post->id }}-d"
            data-like-status='{{ $dislike_class }}'>
            Dislike <span class="glyphicon glyphicon-thumbs-down"></span> 
            <span class="badge dislike-count">{{$dislike_count}}</span>
    </button>
    <hr>
    @endforeach

               
    <form method="post" action="{{ route('post/store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="title">
        </div>

        <div class="form-group">
        <label for="Category">Category</label>
       @if($categories)
        <select class="form-control" name="category">
            @foreach($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name}}1</option>
            @endforeach
        </select>
       @endif
        </div> 

        <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label for="title">Image</label>
        <input type="file" name="image" class="form-control" placeholder="image">
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

                <script>
                    var url = "{{ route('like')}}";
                    var url_dislike = "{{ route('dislike')}}";
                    var token = "{{ Session::token()}}";
                
                </script>  
@endsection