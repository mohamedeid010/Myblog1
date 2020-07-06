@extends('admin.layout')

@section('content')

            <div class="col-lg-12 mb-8">


              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">المقالات</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-primary">
                                <th>#</th>
                                <th>العنوان</th>
                                <th>القسم</th>
                                <th>الكاتب</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($posts)
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id}}</td>
                                    <td>{{ $post->title}}</td>
                                    <td>@if($post->category) {{ $post->category->name}} @endif</td>
                                    <td>@if($post->user) {{ $post->user->name}} @else Guest @endif</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{route('article/edit',['id' => $post->id])}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="{{route('article/delete',['id' => $post->id])}}" title="delete"><i class="fas fa-trash-alt"></i></a>
                                        @if($post->status == 0)
                                        <a href="{{route('article/status',['id' => $post->id])}}" class="s-off" title="غير منشور"><i class="fas fa-lock"></i></a>
                                        @else
                                        <a href="{{route('article/status',['id' => $post->id])}}" class="s-on" title="منشور"><i class="fas fa-lock-open"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table> 
                    <nav aria-label="Page navigation example">
                    {{$posts->links("pagination::bootstrap-4")}}
                    </nav>
                </div>
              </div>

            </div>

@endsection