@extends('master')

@section('content')

<h1 class="page-header">Wellcome Admin</h1>
<table class="table">
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Admin</td>
        <td>Editor</td>
        <td>User</td>
        <td>Edit/Delete</td>
    </tr>
    
        @foreach($users as $user)
            <form method="post" action="/addrole">
                {{csrf_field()}}
                <tr>
                    <td><input type="hidden" name="email" value="{{ $user->email }}"></td>    
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><input type="checkbox" name="role_admin" onchange="this.form.submit()" {{ $user->hasRole('Admin') ? 'checked' : ''}}></td>
                    <td><input type="checkbox" name="role_editor" onchange="this.form.submit()" {{ $user->hasRole('Editor') ? 'checked' : ''}}></td>
                    <td><input type="checkbox" name="role_user" onchange="this.form.submit()" {{ $user->hasRole('User') ? 'checked' : ''}}></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>  
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>  
                    </td>
                </tr>
            </form>
        @endforeach
    
</table>
                      
@endsection