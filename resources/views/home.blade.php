@extends('admin.layouts.admin')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <div class="fs-4 fw-bold">{{ __('Welcome Back') }}</div>
                    </div>
                    <hr class="horizontal dark mt-0">
                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="fs-5">{{ __('You are logged in!') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection