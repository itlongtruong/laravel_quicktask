@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('message')
            <div class="card">
                <div class="card-header">@lang('index.card_header_reset_password')</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'password.update']) !!}

                        {!! Form::hidden("token", $token) !!}

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
                            {{ Form::label('password-confirm', trans('index.label_confirm_password'), ['class' => 'col-md-4 col-form-label text-md-right']) }}
                           
                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'required' => 'required']) }}

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit( trans('index.card_header_reset_password'), ['class' => 'btn btn-primary']) !!}
                              
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
