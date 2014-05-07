@extends('layout')

@section('content')

<div class='container'>

<h3>TAMBAH PROJECT</h3>

 {{ Form::open()}}

 {{Form::label('instansi', 'Instansi') }}
 
 

 {{Form::select('shetdinstansi', array('' => 'content1','content1' => 'Content2'),'Content2')}}</br>


 {{Form::label('project', 'Project') }}

 {{Form::text('shetdproject', '', array('class' => 'form-control','placeholder' => 'project'))}}</br>

 {{Form::label('tahun', 'Tahun') }}

 {{Form::text('shetdtahun', '', array('class' => 'form-control','placeholder' => 'tahun'))}}</br>

 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::submit('Cancel', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop