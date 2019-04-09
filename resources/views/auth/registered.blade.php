@extends('layout.form')

@section('content')
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2>Registration Successful</h2>
                <hr>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="container mar-head login-part-main">
                <div class="row form-main-part">
                    {{--<div class="col-xs-12 col-sm-12 col-md-4"></div>--}}
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="card text-center" style="width: 22rem;">
                            <div class="card-header success-color white-text">
                                Account created successfully
                            </div>

                            <div class="card-body" style="margin-left:20px; ">
                                <h4 class="card-title">Thank you for creating your account</h4>
                                <i class="fa fa-check-circle" style="color: #00a468; font-size: 3em;"></i>
                                <p class="card-text">Check your email, for an activation link</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4"></div>
                </div>
            </div>
            <img class="fst-img" src="{{asset('img/yiiang_logo.gif')}}"  width ="50px" height="auto">
            </div>

        </div>
    <div class="col-md-3"></div>
    </div>


@endsection
