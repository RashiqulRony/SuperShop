@extends('front.master')

@section('title')
    Sign In
@endsection


@section('content')
    <!--banner-->
    <div class="banner-top">
        <div class="container">
            <h3 >Sign In</h3>
            <h4><a href="{{url('/')}}">Home</a><label>/</label>Sign In</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--login-->

    <div class="login">

        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Sign In</h3>
                <form action="#" method="post">
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Sign In">
                </form>
            </div>
            <div class="forg">
                <a href="#" class="forg-left">Forgot Password</a>
                <a href="{{url('/user-register')}}" class="forg-right">Register</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection