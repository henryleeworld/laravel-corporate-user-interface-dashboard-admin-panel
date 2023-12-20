@extends('layouts.guest')
@section('content')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12"></div>
    </div>
</div>
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left bg-transparent text-center">
                                <h3 class="font-weight-black text-dark display-6">{{ __('Reset Password') }}</h3>
                            </div>
                            <div class="card-body text-center">
                                @if ($errors->any())
                                <div>
                                    <div>{{ __('Something went wrong!') }}</div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
								@if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form role="form" action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}" />
                                    <div class="mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" aria-label="{{ __('Email') }}" id="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Enter your password') }}" aria-label="{{ __('Password') }}" id="password" name="password" required autocomplete="new-password" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm your password') }}" aria-label="{{ __('Password') }}" required autocomplete="new-password" />
                                        <div class="text-center">
                                            <button type="submit" class="my-4 mb-2 btn btn-dark btn-lg w-100">{{ __('Reset Password') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                            <div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8" style="background-image:url('{{ asset('img/image-sign-in.jpg') }}')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
