@extends('layouts.index')
@section('container')
    <section class="main">
        <div class="container">
            <div class="row m-t5">
                <div class="col-sm-5 login-form">
                    @if($errors->any())
                        <div class="alert alert-danger p-l0">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 login-form">
                    <div class="panel panel-default">
                        <div class="panel-intro text-center">
                            <h1 class="logo"><i class="fa fa-recycle"></i> {!! trans('common.appName') !!}</h1>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{!! route('signUp.action') !!}">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <div class="form-group">
                                    <input type="text" placeholder="User Name" value="{!! old('userName') !!}" name="userName" class="form-control input-lg">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Email" name="email" value="{!! old('email') !!}" class="form-control input-lg">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" name="password" class="form-control input-lg">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label for="terms" class="string optional">
                                            <input type="checkbox" name="Agree" id="terms" value="Agree">
                                            I Agree with Term and Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block btn-custom">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p class="text-center pull-right"> <a href="{!! url('/login') !!}"> Have an account? </a> </p>
                            <div style=" clear:both"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection