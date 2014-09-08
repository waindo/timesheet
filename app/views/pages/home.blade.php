@extends('layouts.defaultlogin')

@section('content')

<!doctype html>

	<div class="container login">
			<h1>Login</h1>
 @if(Session::has('pesan_error'))
   <div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
 @endif
 
  @if(Session::has('pesan'))
{{ Session::get('pesan') }}

@endif



{{Form::open(array('action' => 'UserController@authenticate')) }}
{{Form::label('email', 'Email') }}
{{Form::text('email', '', array('class' => 'form-control', 'maxlenght' => 20 ,'placeholder'=> 'email'))}}
{{Form::label('password', 'Password') }}
{{Form::password('password', array('class' => 'form-control' ,'placeholder'=> 'password'))}}</br>
{{Form::submit('Login', array('class' => 'btn btn-success')) }} 
{{HTML::link('register','Register', array('class' => 'btn btn-primary')) }}
{{Form::close() }}
					
{{Form::close() }}
					
					</div>

	@stop