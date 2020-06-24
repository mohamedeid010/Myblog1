@extends('readit_layout')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center font-weight-bold">تسجيل الدخول</h3>            
                    <form method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">البريد الالكترونى : </label>
                            <div class="col-sm-10">
                                 <input type="text" name="email" class="form-control" id="exampleInputEtitlemail1" placeholder="من فضلك ادخل البريد الالكترونى">
                            </div>     
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">كلمة المرور</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="exampleInputEtitlemail1" placeholder="من فضلك ادخل كلمة المرور">
                            </div>    
                        </div>
                        <button type="submit" class="btn btn-primary">دخول</button>
                    </form>    

                    @foreach($errors->all() as $error)
                      {{ $error}} <br/>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection