@extends('admin.layout')

@section('content')

            <div class="col-lg-12 mb-8">


              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">المقالات</h6>
                </div>
                <div class="card-body">
                <form method="post" action="{{ route('category/update',['id' => $category->id]) }}">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="title"></label>اسم القسم <span>*</span></label>
        <input type="text" name="name" class="form-control" value ="{{ $category->name}}">
        </div>
 

        <div class="form-group">
        <label for="body">الوصف <span>*</span></label>
        <textarea name="description" class="form-control" rows="3">{{$category->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">حفظ</button>
    </form>    

            @foreach($errors->all() as $error)
                {{ $error}} <br/>
            @endforeach
                </div>
              </div>

            </div>

@endsection