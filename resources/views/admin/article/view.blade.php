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
                                    <td>{{ $post->user->name}}</td>
                                    <td>control</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table> 
                </div>
              </div>

            </div>

@endsection