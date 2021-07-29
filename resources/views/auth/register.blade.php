
@extends('layout.app')

@section('content')

<div class="card">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="form-group col-lg-4" style="text-align:center">
            <h2 class="mt-5 mb-3">新規ユーザー登録</h2>

            {!! Form::open([ 'signup.post' ]) !!}
                
            <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ユーザー名']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'メールアドレス']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'パスワード']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'パスワード']) !!}
            </div>

                
            {!! Form::submit('新規登録', ['class' => 'btn btn-info mt-2 mb-5']) !!}
            {!! Form::close() !!}
                
        </div>
    </div>
</div>

@endsection