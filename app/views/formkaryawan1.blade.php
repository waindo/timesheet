@extends('layout')

@section('content')

<div class='container'>

<h3>TAMBAH KARYAWAN</h3>

 {{ Form::open()}}

 {{Form::label('Nik', 'NIK') }}

 {{Form::text('shetdNik', '', array('class' => 'form-control','placeholder' => 'Nik'))}}</br>

 {{Form::label('nama', 'Nama') }}

 {{Form::text('shetdnama', '', array('class' => 'form-control','placeholder' => 'nama'))}}</br>

 {{Form::label('tempatlahir', 'Tempat Lahir') }}

 {{Form::text('shetdtempatlahir', '', array('class' => 'form-control','placeholder' => 'tempatlahir'))}}</br>

 {{Form::label('tanggallahir', 'Tanggal Lahir') }}

 {{Form::input('date','shetdtanggallahir', '', array('class' => 'form-control','placeholder' => 'tanggallahir'))}}</br>

 {{Form::label('kelamin', 'Jenis Kelamin') }}</br>
 
 {{Form::label('Pria', 'Pria') }}
 {{Form::radio('shetdPria', '', array('class' => 'form-control','placeholder' => 'Pria'))}}
 {{Form::label('Wanita', 'Wanita') }}
 {{Form::radio('shetdWanita', '', array('class' => 'form-control','placeholder' => 'Wanita'))}}</br>
 {{Form::label('agama', 'Agama') }}
 {{Form::select('shetdagama', array('' => 'islam','Islam' => 'kristen'),'Kristen')}}</br>

 {{Form::label('hp', 'No hp') }}

 {{Form::text('shetdhp', '', array('class' => 'form-control','placeholder' => 'hp'))}}</br>

 
 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::submit('Cancel', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop