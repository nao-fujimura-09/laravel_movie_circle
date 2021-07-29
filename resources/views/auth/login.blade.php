
@extends('layout.app')

@section('content')

<div class="card">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="form-group col-lg-4" style="text-align:center">
            <h2 class="mt-5 mb-3">ログイン</h2>

            {!! Form::open([ 'login.post' ]) !!}
                    
                <div class="form-group">
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ユーザー名']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'メールアドレス']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'パスワード']) !!}
                </div>
                
                
            {!! Form::submit('ログイン', ['class' => 'btn btn-info mt-2 mb-5']) !!}
            {!! Form::close() !!}
                
        </div>
    </div>
</div>

@endsection