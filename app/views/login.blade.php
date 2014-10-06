@extends('layouts.master')
@section('body')
<body id="skin-blur-violate" ng-app="login">
    <section id="login" ng-controller="LoginController">
        <header>
            <h1>MSACN.ORG</h1>
        </header>
        <div class="clearfix"></div>
        </div>
        <!-- Login -->
        <form method="POST" accept-charset="UTF-8" class="box tile animated active form-validation-1" id="box-login" ng-submit="login()">
            <h2 class="m-t-0 m-b-15">登录</h2>
            <p>@{{auth_info}}</p>
            <input type="text" name="email" class="login-control m-b-10 validate[required,custom[email]]" placeholder="邮箱" ng-model="credentials.email" />
            <input type="password" name="password" class="login-control m-b-10 validate[required]" placeholder="密码" ng-model="credentials.password" />
            <div class="checkbox m-b-20">
                <label>
                    <input type="checkbox">
                    {{ Util::ts('remember_me') }}
                </label>
            </div>
            <button type="submit" class="btn btn-sm m-r-5">Login</button>
			<small>
                <a class="box-switcher" data-switch="box-register" href="">{{ Util::ts('dont_have_account') }}</a> or
                <a class="box-switcher" data-switch="box-reset" href="">{{ Util::ts('forgot_password') }}</a>
            </small>
        </form>
        
        <!-- Register -->
        {{ Form::open(array('route'=>'register', 'class'=>'box animated tile form-validation-1', 'id'=>'box-register')) }}
            <h2 class="m-t-0 m-b-15">{{ Util::ts('register') }}</h2>
            {{ Form::text('email', Input::old('email'), array('class'=>'login-control m-b-10 validate[required,custom[email]]', 'placeholder'=>Util::ts('email'))) }}
            {{ Form::password('password', array('class'=>'login-control m-b-10 validate[required]', 'placeholder'=>Util::ts('password'))) }}
            {{ Form::password('confirm_password', array('class'=>'login-control m-b-10 validate[required]', 'placeholder'=>Util::ts('confirm_password'))) }}
            {{ Form::text('nickname', Input::old('nickname'), array('class'=>'login-control m-b-10 validate[required,maxSize[16]]', 'placeholder'=>Util::ts('nickname_optional'))) }}
			{{ Form::submit(Util::ts('register'), array('class'=>'btn btn-sm m-r-5')) }}
            <small><a class="box-switcher" data-switch="box-login" href="">{{ Util::ts('already_have_account') }}</a></small>
        {{ Form::close() }}
        
        <!-- Forgot Password -->
        <form class="box animated tile form-validation-1" id="box-reset">
            <h2 class="m-t-0 m-b-15">{{ Util::ts('reset_password') }}</h2>
            <p>{{ Util::ts('reset_password_desc') }}</p>
            <input type="email" class="login-control m-b-20 validate[required,custom[email]]" placeholder="{{ Util::ts('email') }}">    

            <button class="btn btn-sm m-r-5">{{ Util::ts('reset_password') }}</button>

            <small><a class="box-switcher" data-switch="box-login" href="">{{ Util::ts('already_have_account') }}</a></small>
        </form>
    </section>                      
    
    <!-- Javascript Libraries -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
    
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- AngularJS -->
    <script src="js/vendor/angular.js"></script>
    <script src="js/msa.js"></script>

    <!--  Form Related -->
    <script src="js/validation/validate.min.js"></script> <!-- jQuery Form Validation Library -->
    <script src="js/validation/validationEngine.min.js"></script> <!-- jQuery Form Validation Library - requirred with above js -->
    <script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
    
    <!-- All JS functions -->
    <script src="js/functions.js"></script>
</body>
@endsection