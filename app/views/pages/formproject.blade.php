@extends('layouts.defaultproject')

@section('content')

<div class='container'>

<h3>TAMBAH PROJECT</h3>


{{ Form::open(array('action' => 'TPrjcsController@store')) }}

 
 {{Form::label('project', 'Project') }}
 {{Form::text('prjcsNames', '', array('class' => 'form-control','placeholder' => 'project'))}}</br>
 {{ $errors->first('prjcsNames', '<div class="alert alert-danger"><b>:message</b></div>')  }}


 
 {{Form::label('instansi', 'Instansi') }}</br>
 {{Form::select('prjcsInsta', $tcodes, Input::old('codes'))}}</br>
 {{ $errors->first('prjcsInsta', '<div class="alert alert-danger"><b>:message</b></div>')  }}



 {{Form::label('tahun', 'Tahun') }}</br>
 {{Form::text('prjcsYears', '', array('class' => 'form-control','placeholder' => 'tahun'))}}</br>
 {{ $errors->first('prjcsYears', '<div class="alert alert-danger"><b>:message</b></div>')  }}


 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    {{Form::reset('Cancel', array('class' => 'btn btn-primary')) }} 

 {{ Form::close() }}

 </div>

 @stop