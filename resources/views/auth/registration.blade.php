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
                <h3 class="pb-3">Register Form</h3>
                <div class="form-style">
                  <form method="POST" action="{{ route('register.custom') }}">
    @csrf
    <div class="form-group pb-3">
        <input type="email"  name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group pb-3">
        <input type="text" placeholder="Name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group pb-3">
        <input type="password" placeholder="Password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center"><input name="guardian" type="checkbox" value="1" /> <span class="pl-2 font-weight-bold">Guardian</span></div>
        <div><a href="#">Forget Password?</a></div>
    </div>
    <div class="pb-2">
        <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Register User</button>
    </div>
</form>




                </div>

            </div>
        </div>
    </div>
@endsection
