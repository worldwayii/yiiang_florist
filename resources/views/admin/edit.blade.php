@extends('admin.layout.admin')
@section('content')
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="card-header">Edit an Account</div>
        <div class="card-body">
            <form method="POST" action="{{ url('updateUser') }}">
                @csrf
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="firstName" name="first_name" class="form-control" placeholder="First name"
                                      value="{{old('first_name', $user->first_name)}}" required="required"
                                       autofocus="autofocus">
                                <label for="firstName">First name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" name="last_name" class="form-control"
                                       value=" {{old('last_name', $user->last_name)}}" placeholder="Last name" required="required">
                                <label for="lastName">Last name</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="userid" value="{{$user->id}}">
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                                       value="{{old('email', $user->email)}}" required="required"
                                       autofocus="autofocus">
                                <label for="firstName">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="phoneNumber" name="phone_number" class="form-control"
                                       value=" {{old('phone_number', $user->phone_number)}}"
                                       placeholder="Last name" required="required">
                                <label for="lastName">Phone Number</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="address" name="address" class="form-control" placeholder="Address"
                                       value="{{old('address', $user->address)}}" required="required"
                                       autofocus="autofocus">
                                <label for="firstName">Address</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="postCode" name="post_code" class="form-control"
                                       value=" {{old('post_code', $user->post_code)}}"
                                       placeholder="Last name" required="required">
                                <label for="lastName">Post Code</label>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="btn btn-primary center-block" >Update User</button>
            </form>

        </div>
    </div>



    </div>
    <!-- /.container-fluid -->
@endsection
