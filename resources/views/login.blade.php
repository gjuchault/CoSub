@extends('layouts.master')

@section('navbar')
    <li>
        <a class="lato transition" href="{{ route('index') }}">{{ trans('cosub.menuHome') }}</a>
    </li>
    <li class="active">
        <a class="lato transition" href="{{ route('user.login') }}">{{ trans('cosub.menuLogin') }}</a>
    </li>
    <li>
        <a class="lato transition" href="{{ route('user.register') }}">REGISTER</a>
    </li>
@stop

@section('content')
    <h1>{{ trans('cosub.login') }}</h1>
    @if ($errors->any())
        <p class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </p>
    @endif
    <form method="post" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="username" class="col-sm-3 lato control-label">{{ trans('cosub.username') }} :</label>
            <div class="col-sm-9">
                <input type="text" name="username" id="username" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 lato control-label">{{ trans('cosub.password') }} :</label>
            <div class="col-sm-9">
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-lg btn-block btn-success transition">{{ trans('cosub.login') }}</button>
            </div>
        </div>
    </form>
@stop