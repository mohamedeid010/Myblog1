@extends('readit_layout')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>تسجيل عضو جديد</h3>            
                    <form method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name">الآسم </label>
                            <input type="text" name="name" class="form-control" id="exampleInputEtitlemail1" placeholder="اسم المستخدم">
                        </div>

                        <div class="form-group row">
                            <label for="email">البريد الالكترونى</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEtitlemail1" placeholder="البريد الالكترونى">
                        </div>

                        <div class="form-group row">
                            <label for="name">كلمة المرور</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEtitlemail1" placeholder="كلمة المرور">
                        </div>
                        <button type="submit" class="btn btn-primary">تسجيل</button>
                    </form>    

                    @foreach($errors->all() as $error)
                    {{ $error}} <br/>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection