@extends('layout')

@section('content')

<div class="container">
    <div class="row m-5 no-gutters shadow-lg">
        <div class="col-md-6 d-none d-md-block">
            <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
        </div>
        <div class="col-md-6 bg-white p-5">
            <h3 class="pb-3">{{ __('login.title') }}</h3>
            <div class="form-style">
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="{{ __('login.email_placeholder') }}" id="email" class="form-control" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="{{ __('login.password_placeholder') }}" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="d-grid mx-auto col-8" >
                        <button style="padding: 20px" type="submit" class="btn btn-dark btn-block">{{ __('login.sign_in') }}</button>

                        <a href="sign-in/github" class="btn btn-dark btn-block">{{ __('login.github_account') }} <i class="fa-brands fa-github"></i></a>
                        <a href="sign-in/google" class="btn btn-dark btn-block">{{ __('login.google_account') }} <i class="fa-brands fa-google"></i></a>
                        <a href="sign-in/facebook" class="btn btn-dark btn-block">{{ __('login.facebook_account') }} <i class="fa-brands fa-facebook"></i></a>
                        <a href="sign-in/twitter" class="btn btn-dark btn-block">{{ __('login.twitter_account') }} <i class="fa-brands fa-twitter"></i></a>
                        <a href="sign-in/slack" class="btn btn-dark btn-block">{{ __('login.slack_account') }} <i class="fa-brands fa-slack"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
