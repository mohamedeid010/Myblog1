@extends('readit_layout')

@section('content')

   	<section class="ftco-section">
   		<div class="container">
   			<div class="row">
               <div class="col-md-12">

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



               </div>
   			</div>
   			
   		</div>
   	</section>

    
@endsection