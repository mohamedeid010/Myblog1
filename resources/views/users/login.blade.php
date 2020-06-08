@extends('master')

@section('content')
 <h3>Register new user</h3>            
<form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEtitlemail1" placeholder="email">
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputEtitlemail1" placeholder="password">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
    </form>    

            @foreach($errors->all() as $error)
                {{ $error}} <br/>
            @endforeach
@endsection