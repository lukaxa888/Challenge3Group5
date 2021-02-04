@extends('layouts.default')
@section('content')

<style>
    .error_form {
        color: red;
        font-weight: bold;
        width: 100%;
        text-align: center;
    }
</style>
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#deleteAccount" data-toggle="tab" class="nav-link">DeleteAccount</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">{{Auth::user()->name}} {{Auth::user()->first_surname}} {{Auth::user()->second_surname}}</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Role</h6>
                            @if(Auth::user()->role==1)
                            <p>
                                You are an Administrator!
                            </p>
                            @endif
                            @if(Auth::user()->role==2)
                            <p>
                                You are an Instructor!
                            </p>
                            @endif
                            @if(Auth::user()->role==3)
                            <p>
                                You are an user!
                            </p>
                            @endif

                            <h6>Username</h6>
                            <p>
                                {{Auth::user()->username}}
                            </p>
                            <h6>Email</h6>
                            <p>
                                {{Auth::user()->email}}
                            </p>
                            <h6>Phone Number</h6>
                            <p>
                                {{Auth::user()->phone_number}}
                            </p>
                        </div>
                        <div class="col-md-6">

                            <h6>Gender</h6>
                            <p>
                                {{Auth::user()->gender}}
                            </p>

                            <h6>Age</h6>
                            <p>
                                {{Auth::user()->age}}
                            </p>
                            <h6>Address</h6>
                            <p>
                                {{Auth::user()->address}}
                            </p>

                            <hr>

                        </div>

                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This webpage is <strong>WORK IN PROGRESS</strong>. Some features may not be finished. </br>
                        <strong> THANKS FOR THE PATIENCE</strong>
                    </div>
                </div>
                <div class="tab-pane" id="edit">
                    <form id="form" role="form" name="form" action="{{ route('userUpdate') }}" method="POST">
                    @csrf    
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Name</label>
                            <div class="col-lg-9">
                                    <input type="text" name="name" value="{{Auth::user()->name}}" id="form_name" class="form-control" placeholder="Name *" value="" />
                               
                                <span class="error_form" id="name_error_message"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First Surname</label>
                            <div class="col-lg-9">
                                <input type="text" name="first_surname" value="{{Auth::user()->first_surname}}" id="form_surname" class="form-control" placeholder="First surname *" value="" />
                            </div>
                            <span class="error_form" id="surname_error_message"></span>

                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Second Surname</label>
                            <div class="col-lg-9">
                                <input type="text" name="second_surname" value="{{Auth::user()->second_surname}}" id="form_surname2" class="form-control" placeholder="Second surname *" value="" />
                            </div>
                            <span class="error_form" id="surname2_error_message"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input type="text" name="username" value="{{Auth::user()->username}}" id="form_username" class="form-control" placeholder="Username *" value="" />
                            </div>
                            <span class="error_form" id="username_error_message"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input type="password" name="password" value="{{ old('password') }}" id="form_password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <span class="error_form" id="password_error_message"></span>

                        </div>
                        <div class="form-group row ">
                            <div class="maxl d-flex justify-content-center ">
                                <label class="radio inline">
                                    @if(Auth::user()->gender == "male")
                                    <input type="radio" name="gender" value="male" checked>
                                    @else
                                    <input type="radio" name="gender" value="male" >
                                    @endif
                                    <span> Male </span>
                                </label>
                                <label class="radio inline ml-5">
                                    @if(Auth::user()->gender == "female")
                                    <input type="radio" name="gender" value="female" checked>
                                    @else
                                    <input type="radio" name="gender" value="female">
                                    @endif
                                    <span>Female </span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" value="{{Auth::user()->email}}" id="form_email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            <span class="error_form" id="email_error_message"></span>

                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"> Phone Number</label>
                            <div class="col-lg-9">
                                <input type="number" value="{{Auth::user()->phone_number}}" name="phone_number" id="form_phone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <span class="error_form" id="phone_error_message"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"> Age</label>
                            <div class="col-lg-9">
                                <input type="number" value="{{Auth::user()->age}}" name="age" id="form_age" class="form-control" placeholder="Age *" value="" />
                            </div>
                            <span class="error_form" id="age_error_message"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"> Address</label>
                            <div class="col-lg-9">
                                <input type="text" value="{{Auth::user()->address}}" name="address" id="form_address" class="form-control" placeholder="Address *" value="" />
                            </div>
                            <span class="error_form" id="address_error_message"></span>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="deleteAccount">
                <form method="POST" id="formDelete" action="{{ route('deleteUser') }}" >
                    @csrf
                    @method('DELETE')
                 <input type="submit" value="Delete">
                </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img  src="{{asset('img/account.png')}}" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <h6 class="mt-2">Upload a different photo</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Choose file</span>
            </label>
        </div>
    </div>
</div>
<script>
    /* $(function() { */

    $("#name_error_message").hide();
    $("#surname_error_message").hide();
    $("#surname2_error_message").hide();
    $("#username_error_message").hide();
    $("#password_error_message").hide();
    $("#email_error_message").hide();
    $("#phone_error_message").hide();
    $("#age_error_message").hide();
    $("#address_error_message").hide();

    $("#form_name").focusout(function() {

        check_name();

    });

    $("#form_surname").focusout(function() {

        check_surname();

    });

    $("#form_surname2").focusout(function() {

        check_surname2();

    });

    $("#form_username").focusout(function() {

        check_username();

    });

    $("#form_password").focusout(function() {

        check_password();

    });

    $("#form_email").focusout(function() {

        check_email();

    });

    $("#form_phone").focusout(function() {

        check_phone();

    });

    $("#form_age").focusout(function() {

        check_age();

    });

    $("#form_address").focusout(function() {

        check_address();

    });

    function check_name() {

        var name_length = $("#form_name").val().length;

        if (name_length < 1 || name_length > 50) {

            $("#name_error_message").html("*You need to fill this field*");
            $("#name_error_message").show();
            return true;
        } else {
            $("#name_error_message").hide();
            return false;
        }

    }

    function check_surname() {

        var surname_length = $("#form_surname").val().length;

        if (surname_length < 1 || surname_length > 50) {

            $("#surname_error_message").html("*You need to fill this field*");
            $("#surname_error_message").show();
            return true;
        } else {
            $("#surname_error_message").hide();
            return false;
        }
    }

    function check_surname2() {

        var surname2_length = $("#form_surname2").val().length;

        if (surname2_length < 1 || surname2_length > 50) {

            $("#surname2_error_message").html("*You need to fill this field*");
            $("#surname2_error_message").show();
            return true;
        } else {
            $("#surname2_error_message").hide();
            return false;
        }

    }

    function check_username() {

        var username_length = $("#form_username").val().length;

        if (username_length < 3 || username_length > 50) {

            $("#username_error_message").html("*Minimum 3 characters*");
            $("#username_error_message").show();
            return true;
        } else {
            $("#username_error_message").hide();
            return false;
        }

    }

    function check_password() {

        var password_length = $("#form_password").val().length;

        if (password_length < 6 || password_length > 50) {

            $("#password_error_message").html("*Minimum 6 characters*");
            $("#password_error_message").show();
            return true;
        } else {
            $("#password_error_message").hide();
            return false;
        }

    }

    function check_email() {

        var email_length = $("#form_email").val().length;

        if ($("#form_email").val().indexOf('@', 0) == -1 || $("#form_email").val().indexOf('.', 0) == -1) {

            $("#email_error_message").html("*You need to fill this field*");
            $("#email_error_message").show();
            return true;
        } else {
            $("#email_error_message").hide();
            return false;

        }

    }

    function check_phone() {

        var phone_length = $("#form_phone").val().length;

        if ($('#form_phone').val().length != 9 || isNaN($('#form_phone').val())) {

            $("#phone_error_message").html("*You need to enter 9 digits, only numbers*");
            $("#phone_error_message").show();
            return true;
        } else {
            $("#phone_error_message").hide();
            return false;
        }

    }

    function check_age() {

        var age_value = $("#form_age").val();

        if (age_value < 16 || age_value > 100) {

            $("#age_error_message").html("*You need to fill this field*");
            $("#age_error_message").show();
            return true;
        } else {
            $("#age_error_message").hide();
            return false;
        }

    }

    function check_address() {

        var address_length = $("#form_address").val().length;

        if (address_length < 1 || address_length > 50) {
            $("#address_error_message").html("*You need to fill this field*");
            $("#address_error_message").show();
            return true;
        } else {
            $("#address_error_message").hide();
            return false;
        }

    }

    function enableSubmit(form) {
        /*var x = $('.btnRegister');
        x.text("disabled");*/
        $('#btn_submit').prop('disabled', false);
        console.log('bien');
    }

    function disableSubmit(form) {
        /*var x = $('.btnRegister');
        x.text("disabled");*/
        $('#btn_submit').prop('disabled', true);
        console.log('mal');
    }

    function checkForm(idForm) {
        $('#btn_submit').prop('disabled', true);
        $(idForm + " *").on("change keydown", function() {

            if ((check_name() == false) &&
                (check_surname() == false) &&
                (check_surname2() == false) &&
                (check_username() == false) &&
                (check_password() == false) &&
                (check_email() == false) &&
                (check_phone() == false) &&
                (check_age() == false) &&
                (check_address() == false)) {

                enableSubmit(form);
            } else {
                disableSubmit(form);
            }

        });
    }

    $(function() {
        checkForm("#form");
    });
</script>
@endsection