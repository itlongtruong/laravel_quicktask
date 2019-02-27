@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('message')
            <div class="card">
                <div class="card-header">@lang('index.card_header_reset_password')</div>

                <div class="card-body">
                    
                    {!! Form::open(['route' => 'password.email', 'method' => 'POST']) !!}

                        <div class="form-group row">
                            {{ Form::label('email', trans('index.label_email'), ['class' => 'col-md-4 col-form-label text-md-right']) }}
                          
                            <div class="col-md-6">
                                {{ Form::text('email', old('email'), ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'id' => 'email', 'required' => 'required']) }}

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit( trans('index.btn_reset_password'), ['class' => 'btn btn-primary']) !!}
                           
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
