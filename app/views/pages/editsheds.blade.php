@extends('layouts.default')

@section('content')

<div class='container'>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{HTML::link('shedslist','Back to list', array('class' => 'btn btn-danger')) }} 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  </div><!-- /.container-fluid -->
</nav>

<div align="center"><h3>Edit Timesheet</h3></div>

{{ Form::open(array('action' => 'TShedsController@update')) }}
 {{Form::hidden('id', $tsheds->id)}}

 
 {{Form::label('tanggal', 'Tanggal') }}
 {{Form::text('shedsTnggl', $tsheds->shedsTnggl , array('class' => 'form-control'))}}</br>
 {{ $errors->first('shedsTnggl', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('kegiatan', 'Kegiatan') }}
 {{Form::textarea('shedsKgtan', $tsheds->shedsKgtan , array('class' => 'form-control'))}}</br>
 {{ $errors->first('shedsKgtan', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
</br>
 {{Form::submit('Update', array('class' => 'btn btn-primary')) }} 
 {{Form::reset('Update', array('class' => 'btn btn-primary')) }}
 

 {{ Form::close() }}

 </div>

 @stop