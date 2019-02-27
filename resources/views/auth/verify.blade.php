@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('index.card-header-verify-email')</div>

                <div class="card-body">
                    @include('message')

                    {{ trans('index.check_email') }}
                    {{ trans('index.send_mail_fail') }}, <a href="{{ route('verification.resend') }}">{{ trans('index.new_request') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
