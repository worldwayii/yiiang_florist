@extends('layout.form')

@section('content')
<div id="contact" class="text-center">
    <div class="container">
        <div class="section-title text-center">
            <h2>Register Form</h2>
            <hr>
            <p>We can help you choose the best flower for the occasion. Get an account.</p>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form name="register" method="POST" action="{{ route('register')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="first_name"
                                   class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                        name="first_name"
                                        placeholder="First Name"
                                            value="{{ old('first_name') }}" required autofocus>
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="last_name"
                                        class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                        name="last_name"
                                        placeholder="Last Name" value="{{old('last_name')}}" required>
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{old('email')}}"
                                        placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" id="phone_number"
                                   class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                   name="phone_number" value="{{old('phone_number')}}"
                                        placeholder="Phone Number" required="required" minlength="4" maxlength="8">
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="address" id="address"
                                   class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                   name="address" value="{{old('address')}}"
                                        placeholder="Address" required="required">
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="postcode" id="post_code"
                                   class="form-control{{ $errors->has('post_code') ? ' is-invalid' : '' }}"
                                   name="post_code" value="{{old('post_code')}}"
                                        placeholder="Postal Code" required="required">
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('post_code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('post_code') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input id="password" type="password"
                                    placeholder="Password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                    </div>
                </div>




                <div id="success"></div>
                <button type="submit" class="btn btn-custom btn-lg">Register</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
