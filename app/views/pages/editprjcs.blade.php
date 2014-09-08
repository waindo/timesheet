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
      {{HTML::link('prjcslist','Back to list', array('class' => 'btn btn-danger')) }} 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
<!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div align="center"><h3>Edit Project</h3></div>

  {{ Form::open(array('action' => 'TPrjcsController@update')) }}

 {{Form::hidden('id', $tprjcs->id)}}

{{Form::label('project', 'Project') }}</br>
 {{Form::text('prjcsNames',$tprjcs->prjcsNames, array('class' => 'form-control','placeholder' => 'project'))}}</br>
{{ $errors->first('prjcsNames', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('instansi', 'Instansi') }}</br>
 {{Form::select('prjcsInsta', array('content1' => 'Content1','content2' => 'Content2'),'Content1')}}</br>
{{ $errors->first('prjcsInsta', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 {{Form::label('tahun', 'Tahun') }}</br>
 {{Form::text('prjcsYears',$tprjcs->prjcsYears, array('class' => 'form-control','placeholder' => 'tahun'))}}</br>
{{ $errors->first('prjcsYears', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 {{Form::submit('Update', array('class' => 'btn btn-primary')) }}
 {{Form::reset('Cancel', array('class' => 'btn btn-primary')) }} 

 {{ Form::close() }}

 </div>

 @stop