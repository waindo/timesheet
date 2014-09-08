@extends('layouts.default') 
@section('content') 
  <div class="container"> <h2>Register</h2> 

  @if(Session::has('pesan'))
  <div class="alert alert-success">{{ Session::get('pesan') }}</div>
  @endif

{{Form::open(array('action' => 'UserController@store')) }}
 
   {{Form::label('nik', 'NIK') }} 
  {{Form::text('krywsNkywn', '', array('class' => 'form-control'))}} 
  {{ $errors->first('krywsNkywn', '<div class="alert alert-danger"><b>:message</b></div>')  }}
  {{Form::label('email', 'Email') }} 
  {{Form::text('email', '', array('class' => 'form-control'))}} 
  {{ $errors->first('email', '<div class="alert alert-danger"><b>:message</b></div>')  }}
  {{Form::label('password', 'Password') }} 
  {{Form::password('password', array('class' => 'form-control'))}} 
  {{ $errors->first('password', '<div class="alert alert-danger"><b>:message</b></div>')  }}
  <br>    
  {{Form::submit('Register', array('class' => 'btn btn-success')) }} 
    {{HTML::link('/','Login', array('class' => 'btn btn-danger')) }} 
 {{ Form::close() }} </div> @stop
 
	<footer class="row">
		@include('includes.footer')
			<div id="modal" class="modal hide fade" aria-hidden="true" data-backdrop="static"></div>