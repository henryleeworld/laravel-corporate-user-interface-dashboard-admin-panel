@extends('layouts.guest')
@section('content')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
</div>
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                            <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="background-image: url('{{ asset('img/image-sign-up.jpg') }}');">
                                <div class="my-auto text-start max-width-350 ms-7">
                                    <h1 class="mt-3 text-white font-weight-bolder">
                                        {{ __('Start your') }} <br />{{ __('new journey.') }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-black text-dark display-6">{{ __('Sign up') }}</h3>
                                <p class="mb-0">{{ __('Nice to meet you! Please enter your details.') }}</p>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <label>{{ __('Name') }}</label>
                                    <div class="mb-3">
                                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Enter your name') }}" value="{{ old('name') }}" aria-label="{{ __('Name') }}" aria-describedby="name-addon" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label>{{ __('Email Address') }}</label>
                                    <div class="mb-3">
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Enter your email address') }}" value="{{ old('email') }}" aria-label="{{ __('Email') }}" aria-describedby="email-addon" required autocomplete="email">
                                        @error('email')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label>{{ __('Password') }}</label>
                                    <div class="mb-3">
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Create a password') }}" aria-label="{{ __('Password') }}" aria-describedby="password-addon" required autocomplete="new-password"/>
                                        @error('password')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label>{{ __('Confirm Password') }}</label>
                                    <div class="mb-3">
                                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" aria-label="{{ __('Confirm Password') }}" aria-describedby="password-addon" required autocomplete="new-password"/>
                                    </div>
                                    <!--<div class="form-check form-check-info text-left mb-0">
                                        <input class="form-check-input" type="checkbox" name="terms" id="terms" required />
                                        <label class="font-weight-normal text-dark mb-0" for="terms"> {{ __('I agree the ') }}<a href="javascript:;" class="text-dark font-weight-bold">{{ __('Terms and Conditions') }}</a>{{ __('.') }}</label>
                                        @error('terms')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>-->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">{{ __('Sign up') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-xs mx-auto">
                                    {{ __('Already have an account?') }}
                                    <a href="{{ route('login') }}" class="text-dark font-weight-bold">{{ __('Sign in') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
