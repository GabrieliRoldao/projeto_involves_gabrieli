@extends('layouts.app')

@section('title')
    Cadastro
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de usuário</div>

                <div class="panel-body">
                    <form class="form-horizontal" id="form-register" method="POST"
                          action="{{ route('register.post') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Data de nascimento</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('avatar') ? 'has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Imagem do perfil</label>
                            <div class="col-md-6">
                                <input type="file" name="avatar" class="form-control" id="avatar">
                                @if($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('avatar')}}</strong>
                                    </span>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme a senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation"  data-match="#password"
                                       data-match-error="Atenção! As senhas não estão iguais." required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" id="do" class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    {{ Html::script(asset('plugins/bootstrap-validator/dist/validator.js')) }}
    {{ Html::script(asset('plugins/bootstrap-validator/dist/validator.min.js')) }}
@endpush

@push('js_execute')
    <script>
        $(document).ready(function () {
        });


    </script>
@endpush
