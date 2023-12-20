@extends('layouts.app')
@section('content')
<div class="container-fluid py-4 px-5">
    <div class="row">
        <div class="col-12">
            <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                <div class="full-background" style="background-image: url('{{ asset('img/header-blue-purple.jpg')}}')"></div>
                <div class="card-body text-start p-4 w-100">
                    <h3 class="text-white mb-2">{{ __('Dashboard') }}</h3>
                    <p class="mb-4 font-weight-semibold">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
