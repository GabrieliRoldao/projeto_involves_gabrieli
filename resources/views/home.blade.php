@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Usuários do sistema</h4>
                </div>

                <div class="panel-body">
                    @if($errors->any())
                        {{ $errors->first() }}
                    @endif
                    @if($users)
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>Nome do usuário</th>
                                    <th>Email do usuário</th>
                                    <th>Visualizar usuário</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('home.find_user', ['id' => $user->id]) }}">
                                                    Visualizar
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pull-right">
                            {{ $users->links() }}
                        </div>

                    @else
                        <h4 class="text-center">Não há dados para exibir</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
