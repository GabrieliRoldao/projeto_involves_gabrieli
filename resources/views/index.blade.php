@extends('layouts.layout')

@section('title')
    Bem vindo!
@endsection

@push('css_styles')
    {{ Html::style(asset('css/estilo_login.css')) }}
@endpush

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="login-form" action="#" method="post" role="form" style="display: block;">
                            <h2 class="text-center">LOGIN</h2>
                            <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-xs-12 form-group">
                                <button type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-login btn-block">
                                    Log in
                                </button>
                            </div>
                        </form>
                        <form id="register-form" action="#" method="post" role="form" style="display: none;">
                            <h2 class="text-center">REGISTER</h2>
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register btn-block"> Register now </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6 tabs">
                        <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
                    </div>
                    <div class="col-xs-6 tabs">
                        <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>
@endpush
