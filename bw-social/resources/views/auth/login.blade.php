@extends('layouts.login')

@section('content')
    <div class="backgroundhome"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default connexion">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0 control-label" style="text-align:left">E-Mail Address</label>

                            <div class="col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0 control-label" style="text-align:left">Password</label>

                            <div class="col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-md-8 col-md-offset-2 col-xs-offset-0">
                                <button type="submit" class="btn btn-primary btn1">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
