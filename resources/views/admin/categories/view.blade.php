@extends('admin.layout')

@section('content')

            <div class="col-lg-12 mb-8">


              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">المقالات</h6>
                </div>
                <div class="card-body">
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-primary">
                                <th>#</th>
                                <th>العنوان</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($categories)
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id}}</td>
                                    <td>{{ $category->name}}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{route('category/edit',['id' => $category->id])}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="{{route('category/delete',['id' => $category->id])}}" title="delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table> 
                    <nav aria-label="Page navigation example">
                    {{$categories->links("pagination::bootstrap-4")}}
                    </nav>
                </div>
              </div>

            </div>

@endsection