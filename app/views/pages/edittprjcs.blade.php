@extends('layout')

@section('content')

<div class='container'>

<h3>Edit Prjcs</h3>

  {{ Form::open(array('action' => 'TPrjcsController@update')) }}

 {{Form::hidden('prjcsIdent', $tprjcs->prjcsIdent)}}

 {Form::label('project', 'Project') }}
 {{Form::text('prjcsNames',$tprjcs->prjcsNames, array('class' => 'form-control','placeholder' => 'project'))}}</br>

 {{Form::label('instansi', 'Instansi') }}</br>
 {{Form::select('prjcsInsta',$tprjcs->prjcsInsta, array('' => 'content1','content1' => 'Content2'),'Content2')}}</br>


 {{Form::label('tahun', 'Tahun') }}</br>
 {{Form::text('prjcsYears',$tprjcs->prjcsYears, array('class' => 'form-control','placeholder' => 'tahun'))}}</br>


 {{Form::submit('Update', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop