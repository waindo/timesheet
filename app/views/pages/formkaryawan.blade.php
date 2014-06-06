@extends('layouts.defaultkaryawan')

@section('content')

<div class='container'>

<h3>TAMBAH KARYAWAN</h3>

 {{ Form::open(array('action' => 'TKrywsController@store')) }}

 {{Form::label('Nik', 'NIK') }}

 {{Form::text('krywsNkywn', '', array('class' => 'form-control','placeholder' => 'Nik'))}}</br>

 {{Form::label('nama', 'Nama') }}

 {{Form::text('krywsNames', '', array('class' => 'form-control','placeholder' => 'nama'))}}</br>

 {{Form::label('tempatlahir', 'Tempat Lahir') }}

 {{Form::text('krywsTmlhr', '', array('class' => 'form-control','placeholder' => 'tempatlahir'))}}</br>

 {{Form::label('tanggallahir', 'Tanggal Lahir') }}

 {{Form::input('date','krywsTglhr', '', array('class' => 'form-control','placeholder' => 'tanggallahir'))}}</br>

 {{Form::label('kelamin', 'Jenis Kelamin') }}</br>
 {{Form::select('krywsJekel', array('' => 'pria','Pria' => 'wanita'),'Wanita')}}</br> </br>
 
 {{Form::label('agama', 'Agama') }} </br>
 {{Form::select('krywsAgama', array('' => 'islam','Islam' => 'kristen'),'Kristen')}}</br> </br>

  {{Form::label('alamat', 'Alamat') }} </br>
 {{Form::text('krywsAlmat', '', array('class' => 'form-control','placeholder' => 'alamat'))}}</br>
 
 
 {{Form::label('hp', 'No hp') }} </br>
 {{Form::text('krywsNomhp', '', array('class' => 'form-control','placeholder' => 'hp'))}}</br>
 
{{Form::label('tahunmasuk', 'Tahun Masuk') }} </br>
 {{Form::text('krywsThnms', '', array('class' => 'form-control','placeholder' => 'tahunmasuk'))}}</br>
 
{{Form::label('divisi', 'Divisi') }} </br>
 {{Form::select('krywsDvisi', array('' => 'IT','it' => 'GIS'),'gis')}}</br></br>
 
{{Form::label('jabatan', 'Jabatan') }} </br>
 {{Form::select('krywsJabat', array('' => 'Manager','manager' => 'Karyawan'),'karyawan')}}</br>

 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::submit('Cancel', array('class' => 'btn btn-primary')) }} 

 {{ Form::close() }}

 </div>

 @stop