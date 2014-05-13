@extends('layouts.default')

@section('content')

<div class='container'>

<h3>ISI TIMESHEET</h3>

{{ Form::open(array('action' => 'TShetdController@store')) }}

 {{Form::label('tanggal', 'Tanggal') }}
 
 
{{Form::input('date', 'shetdTnggl', null, ['class' => 'form-control', 'placeholder' => 'Date'])}}



 {{Form::label('kegiatan', 'Kegiatan') }}

 {{Form::textarea('shetdKgtan', '', array('class' => 'form-control','placeholder' => 'Isi kegiatan anda'))}}</br>

</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::submit('Cancel', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop