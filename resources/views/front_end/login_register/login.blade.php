@extends('front_end.master')
@section('title')
    Login || Page
@endsection
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

</style>
@section('body')
<div class="container login-container">
    @if(session('registration_success_message'))
    <div class="alert alert-success">{{session('registration_success_message')}}</div>
    @elseif(session('error_message'))
    <div class="alert alert-dange">{{session('error_message')}}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6 login-form-1">
            <h3>Login Here</h3>
            <form action="{{route('customer_login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input name="customer_email" type="email" class="form-control" placeholder="Your Email *" value="" />
                    @error('customer_email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Your Password *" value="" />
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login" />
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div>
                <div class="form-group text-center">
                    <a style="color:red" href="{{route('customer_registration_page')}}" class="ForgetPwd">If you have no account Sigu up here</a>
                </div>
            </form>
        </div>
    </div>
</div>  
@endsection