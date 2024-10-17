@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
    <style>
        body{
            background: #c9ccd1;
        }
        .form-style input{
            border:0;
            height:50px;
            border-radius:0;
            border-bottom:1px solid #ebebeb;
        }
        .form-style input:focus{
            border-bottom:1px solid #007bff;
            box-shadow:none;
            outline:0;
            background-color:#ebebeb;
        }
        .sideline {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            color:#ccc;
        }
        button{
            height:50px;
        }
        .sideline:before,
        .sideline:after {
            content: '';
            border-top: 1px solid #ebebeb;
            margin: 0 20px 0 0;
            flex: 1 0 20px;
        }

        .sideline:after {
            margin: 0 0 0 20px;
        }
    </style>
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3">Login Form</h3>
                <div class="form-style">
                   <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                           required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                         <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                                    <br>
                                    <a href="sign-in/github" type="submit" class="btn btn-dark btn-block">Have you
                                        account on <i class="fa-brands fa-github"></i></a>
                                    <a href="sign-in/google" type="submit" class="btn btn-dark btn-block">Log in with <i
                                            class="fa-brands fa-google"></i></a>
                                    <a href="sign-in/facebook" type="submit" class="btn btn-dark btn-block">Use account
                                        from <i class="fa-brands fa-facebook"></i></a>
                                    <a href="sign-in/twitter" type="submit" class="btn btn-dark btn-block">Try connect
                                        with <i class="fa-brands fa-twitter"></i></a>
                                    <a href="sign-in/slack" type="submit" class="btn btn-dark btn-block">Or use <i
                                            class="fa-brands fa-slack"></i></a>
                                </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
   @endsection
