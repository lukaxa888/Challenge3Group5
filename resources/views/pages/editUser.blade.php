<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- estilo-->
    <!-- 
    <link rel="stylesheet" href="css/logInCss.css">
    -->
    

    <!-- JS-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Edit User</title>
</head>
<style>

    .error_form {
        color:red;
        font-weight: bold;
    }

</style>
<body>

	<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left pt-5">
                        
                      
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{ $user -> name}}</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form id="form" name="form" action="{{ route('registerEdit',$user->id)}}" method="post">

                                @csrf

                                <h3 class="register-heading">Member</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="form_name" class="form-control" value="{{ $user -> name}}" />
                                        </div>
                                        <span class="error_form" id="name_error_message"></span>
                                        <div class="form-group">
                                            <input type="text" name="first_surname" id="form_surname" class="form-control" placeholder="First surname *" value="{{ $user -> first_surname}}" />
                                        </div>
                                        <span class="error_form" id="surname_error_message"></span>
                                        <div class="form-group">
                                            <input type="text" name="second_surname" id="form_surname2" class="form-control" placeholder="Second surname *" value="{{ $user -> second_surname}}"/>
                                        </div>
                                        <span class="error_form" id="surname2_error_message"></span>
                                        <div class="form-group">
                                            <input type="text" name="username"  id="form_username" class="form-control"  placeholder="Username *" value="{{ $user -> username}}"/>
                                        </div>
                                        <span class="error_form" id="username_error_message"></span>
                                        <div class="form-group">
                                            <input type="password" name="password" id="form_password" class="form-control"  placeholder="Password *" value=""/>
                                        </div>
                                        <span class="error_form" id="password_error_message"></span>

                                        
                                   
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="email" name="email" id="form_email" class="form-control" placeholder="Your Email *" value="{{ $user -> email}}" />
                                        </div>
                                        <span class="error_form" id="email_error_message"></span>
                                        <div class="form-group">
                                            <input type="number" name="phone_number" id="form_phone"  class="form-control" placeholder="Your Phone *" value="{{ $user -> phone_number}}"/>
                                        </div>
                                        <span class="error_form" id="phone_error_message"></span>
                                       

                                        
                                        <div class="form-group">
                                            <input type="text" name="address" id="form_address"  class="form-control" value="{{ $user -> address}}"/>
                                        </div>
                                        <span class="error_form" id="address_error_message"></span>
                                       </form>
                                        <input type="submit" id="btn_submit" class="btnRegister"  value="Update"/>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

</body>

</html>