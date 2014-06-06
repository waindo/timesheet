@extends('layouts.defaultproject')

@section('content')

<div class='container'>

<h3>TAMBAH PROJECT</h3>

{{ Form::open(array('action' => 'TPrjcsController@store')) }}

 
 {{Form::label('project', 'Project') }}
 {{Form::text('prjcsNames', '', array('class' => 'form-control','placeholder' => 'project'))}}</br>

 {{Form::label('instansi', 'Instansi') }}</br>
 {{Form::select('prjcsInsta', array('' => 'content1','content1' => 'Content2'),'Content2')}}</br>


 {{Form::label('tahun', 'Tahun') }}</br>
 {{Form::text('prjcsYears', '', array('class' => 'form-control','placeholder' => 'tahun'))}}</br>

 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::submit('Cancel', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop