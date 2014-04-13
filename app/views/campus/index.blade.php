@extends('layouts.campus_master')

@section('title')
    @parent - Grupo Whiteboard S.A
@stop

@section('content')
  {{ Form::open(array('method' => 'POST','url' => 'campus/login', 'class'=>'form-signin','role'=>'form')) }}
        <h2 class="form-signin-heading">Iniciar Sessión</h2>
        @if(Session::has('error_login'))
            <div class="alert alert-danger"><span class="error">Usuario o contraseña incorrectos.</span></div>
        @endif
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::email('email','', array('required','class'=>'form-control','placeholder'=>'Email', 'autofocus'))}}                    
        </div>
        @if($errors->first('email'))
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
        @endif
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password('password',array('required','class'=>'form-control','placeholder'=>'Contraseña', 'style'=>'margin-bottom:0;'))}}           
        </div>
        @if($errors->first('password'))
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
        @endif
        <label class="checkbox">
            {{ Form::checkbox('password','remember-me','')}}  Recordarme
        </label>     
        <div class="">                       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
        <div class="clear"></div>
        </div>
        @if(Session::has('mensaje_error'))
            <div class="alert alert-success"><div id="flash_notice">{{ Session::get('mensaje_error') }}</div></div>
        @endif        
  {{ Form::close() }}

@stop