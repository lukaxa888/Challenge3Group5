@extends('layouts.defaultRegister')
@section('content')

<style>
    .error_form {
        color: red;
        font-weight: bold;
    }
</style>


<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left pt-5">

            <h3>Welcome</h3>
            <p>You are 30 seconds away from suscribing to the best sports centre!</p>
            <form action="/login">
              <input type="submit" value="Go to Login" />
            </form>
           
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Member</a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <form id="form" name="form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <h3 class="register-heading">Member</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" id="form_name" class="form-control" placeholder="Name *" value="" />
                                </div>
                                <span class="error_form" id="name_error_message"></span>
                                <div class="form-group">
                                    <input type="text" name="first_surname" value="{{ old('first_surname') }}" id="form_surname" class="form-control" placeholder="First surname *" value="" />
                                </div>
                                <span class="error_form" id="surname_error_message"></span>
                                <div class="form-group">
                                    <input type="text" name="second_surname" value="{{ old('second_surname') }}" id="form_surname2" class="form-control" placeholder="Second surname *" value="" />
                                </div>
                                <span class="error_form" id="surname2_error_message"></span>
                                <div class="form-group">
                                    <input type="text" name="username" value="{{ old('username') }}" id="form_username" class="form-control" placeholder="Username *" value="" />
                                </div>
                                <span class="error_form" id="username_error_message"></span>
                                <div class="form-group">
                                    <input type="password" name="password" value="{{ old('password') }}" id="form_password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <span class="error_form" id="password_error_message"></span>

                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" id="form_email" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <span class="error_form" id="email_error_message"></span>
                                <div class="form-group">
                                    <input type="number" value="{{ old('phone_number') }}" name="phone_number" id="form_phone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <span class="error_form" id="phone_error_message"></span>
                                <div class="form-group">
                                    <input type="number" value="{{ old('age') }}" name="age" id="form_age" class="form-control" placeholder="Age *" value="" />
                                </div>
                                <span class="error_form" id="age_error_message"></span>


                                <div class="form-group">
                                    <input type="text" value="{{ old('address') }}" name="address" id="form_address" class="form-control" placeholder="Address *" value="" />
                                </div>
                                <span class="error_form" id="address_error_message"></span>
                    </form>
                    <input type="submit" id="btn_submit" class="btnRegister" value="Register" />

                </div>
            </div>
        </div>
    </div>
</div>
</div>
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