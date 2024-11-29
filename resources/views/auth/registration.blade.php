@extends('layout')

@section('content')

    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;"  alt=""/>
            </div>
            <div class="col-md-6  p-5">
                <h3 class="pb-3">{{ __('register.title') }}</h3>
                <div class="form-style">
                    <form method="POST" action="{{ route('register.custom') }}">
                        @csrf
                        <div class="form-group pb-3">
                            <input type="email" name="email" placeholder="{{ __('register.email_placeholder') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="{{ __('register.name_placeholder') }}" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" placeholder="{{ __('register.password_placeholder') }}" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" name="guardian" value="1" id="guardianCheckbox" class="custom-checkbox" />
                                <label for="guardianCheckbox" class="pl-2 font-weight-bold">{{ __('register.guardian') }}</label>
                            </div>
                            <div><a href="#">{{ __('register.forget_password') }}</a></div>
                        </div>

                        <div class="pb-2">
                            <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">{{ __('register.register_user') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
