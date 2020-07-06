@extends('admin.layout')

@section('content')

            <div class="col-lg-12 mb-8">


              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">المقالات</h6>
                </div>
                <div class="card-body">
                <form method="post" action="{{ route('article/save',['id' => $post->id]) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="title">العنوان <span>*</span></label>
        <input type="text" name="title" class="form-control" value ="{{ $post->title}}">
        </div>

        <div class="form-group">
        <label for="Category">القسم <span>*</span></label>
       @if($categories)
        <select class="form-control" name="category">
            <option value="0" readonly>اختر القسم</option>
            @foreach($categories as $category)

            <option value="{{ $category->id}}" @if($category->id == $post->id) selected @endif>{{ $category->name}}</option>
            @endforeach
        </select>
       @endif
        </div> 

        <div class="form-group">
        <label for="body">النص <span>*</span></label>
        <textarea name="body" class="form-control" rows="3">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
        <label for="title">الصورة</label>
        <input type="file" name="image" class="form-control-file" placeholder="image">
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