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
                                <h3 class="font-weight-black text-dark display-6">{{ __('Welcome back') }}</h3>
                                <p class="mb-0">{{ __('Enter your email and password to proceed') }}</p>
                            </div>
                            <div class="text-center">
                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif
                                @error('message')
                                <div class="alert alert-danger text-sm" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="card-body">
                                <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label>{{ __('Email Address') }}</label>
                                    <div class="mb-3">
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Enter your email address') }}" value="{{ old('email') }}" aria-label="{{ __('Email') }}" aria-describedby="email-addon" required autocomplete="email" autofocus/>
                                    </div>
                                    <label>{{ __('Password') }}</label>
                                    <div class="mb-3">
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Enter password') }}" aria-label="{{ __('Password') }}" aria-describedby="password-addon" required autocomplete="current-password"/>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-check-info text-left mb-0">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                            <label class="font-weight-normal text-dark mb-0" for="remember">
                                                {{ __('Remember me') }}
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-xs font-weight-bold ms-auto">{{ __('Forgot password') }}</a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">{{ __('Sign in') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-xs mx-auto">
                                    {{ __('Don\'t have an account?') }}
                                    <a href="{{ route('register') }}" class="text-dark font-weight-bold">{{ __('Sign up') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                            <div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8" style="background-image:url('{{ asset('img/image-sign-in.jpg') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
