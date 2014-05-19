@extends('layout')

@section('content')

<div class='container'>

<h3>TAMBAH CODES</h3>

 {{ Form::open()}}

 {{Form::label('heads', 'Heads') }}
 {{Form::text('shetdheads', '', array('class' => 'form-control','placeholder' => 'Heads'))}}</br>
 
 {{Form::label('codes', 'Codes') }}
 {{Form::text('shetdcodes', '', array('class' => 'form-control','placeholder' => 'Codes'))}}</br>

 {{Form::label('desc1', 'Desc 1') }}
 {{Form::textarea('desc1', '', array('class' => 'form-control'))}}
 
 {{Form::label('desc2', 'Desc 2') }}
 {{Form::textarea('desc2', '', array('class' => 'form-control'))}}
 
 {{Form::label('stats', 'Status') }} </br>
 
 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::submit('Cancel', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop