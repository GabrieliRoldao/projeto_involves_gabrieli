@extends('layouts.app')

@push('css_styles')
    <style>

        .fa {  margin-bottom: 10px;margin-right: 10px;}

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 col-md-offset-2">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="{{ asset('/avatares/'.$user->avatar) }}" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4>{{ $user->name }}</h4>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i> {{ $user->email }}
                                <br />
                                <i class="fa fa-birthday-cake" aria-hidden="true"></i> {{ date('d/m/Y', strtotime($user->birthday)) }}
                            </p>
                            {{--<!-- Split button -->--}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-primary">--}}
                                    {{--Social</button>--}}
                                {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<span class="caret"></span><span class="sr-only">Social</span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">Twitter</a></li>--}}
                                    {{--<li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>--}}
                                    {{--<li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#">Github</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
