@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('message')
            <div class="card">
                <div class="card-header">@lang('index.btn_login')</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
                        @csrf

                        <div class="form-group row">
                            {{ Form::label('email', trans('index.label_email'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::text('email', old('email'), ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'id' => 'name', 'required' => 'required', 'autofocus' => 'autofocus']) }}

                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password', trans('index.label_password'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'id' => 'password', 'required' => 'required']) }}

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {{ Form::checkbox('remember', old('remember') ? 'checked' : '', true, ['class' => ['form-check-input'] ,'id' => 'remember'] )}}

                                    {{ Form::label('remember', trans('index.label_remember_me'), ['class' => 'form-check-label']) }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit(trans('index.btn_login'), ['class' => 'btn btn-primary']) !!}

                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
