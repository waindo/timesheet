@extends('layouts.defaulttimesheet')

@section('content')

<div class='container'>

<h3>ISI TIMESHEET</h3>

{{ Form::open(array('action' => 'TShedsController@store')) }}

 {{Form::label('tanggal', 'Tanggal') }}
 
 
{{Form::input('date', 'shedsTnggl', null, ['class' => 'form-control', 'placeholder' => 'Date'])}}



 {{Form::label('kegiatan', 'Kegiatan') }}

 {{Form::textarea('shedsKgtan', '', array('class' => 'form-control','placeholder' => 'Isi kegiatan anda'))}}</br>

</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::submit('Cancel', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop