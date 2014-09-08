@extends('layouts.defaultkaryawan')

@section('content')

<div class='container'>

<h3>TAMBAH KARYAWAN</h3>

 {{ Form::open(array('action' => 'TKrywsController@store')) }}

 {{Form::label('Nik', 'NIK') }}

 {{Form::text('krywsNkywn', '', array('class' => 'form-control','placeholder' => 'Nik'))}}</br>
{{ $errors->first('krywsNkywn', '<div class="alert alert-danger"><b>:message</b></div>')  }}


 {{Form::label('nama', 'Nama') }}

 {{Form::text('krywsNames', '', array('class' => 'form-control','placeholder' => 'nama'))}}</br>
{{ $errors->first('krywsNames', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 {{Form::label('tempatlahir', 'Tempat Lahir') }}

 {{Form::text('krywsTmlhr', '', array('class' => 'form-control','placeholder' => 'tempatlahir'))}}</br>
{{ $errors->first('krywsTmlhr', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 {{Form::label('tanggallahir', 'Tanggal Lahir') }}

 {{Form::input('date','krywsTglhr', '', array('class' => 'form-control','placeholder' => 'tanggallahir'))}}</br>
{{ $errors->first('krywsTglhr', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 {{Form::label('kelamin', 'Jenis Kelamin') }}</br>
 {{Form::select('krywsJnskl', array('P' => 'pria','W' => 'wanita'),'P')}}</br> </br>
 {{ $errors->first('krywsJnskl', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 {{Form::label('agama', 'Agama') }} </br>
 {{Form::select('krywsAgama', array('I' => 'islam','K' => 'kristen'),'I')}}</br> </br>
{{ $errors->first('krywsAgama', '<div class="alert alert-danger"><b>:message</b></div>')  }}

  {{Form::label('alamat', 'Alamat') }} </br>
 {{Form::text('krywsAlmat', '', array('class' => 'form-control','placeholder' => 'alamat'))}}</br>
 {{ $errors->first('krywsAlmat', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('hp', 'No hp') }} </br>
 {{Form::text('krywsNomhp', '', array('class' => 'form-control','placeholder' => 'hp'))}}</br>
 {{ $errors->first('krywsNomhp', '<div class="alert alert-danger"><b>:message</b></div>')  }}

{{Form::label('tahunmasuk', 'Tahun Masuk') }} </br>
 {{Form::text('krywsThnms', '', array('class' => 'form-control','placeholder' => 'tahunmasuk'))}}</br>
 {{ $errors->first('krywsThnms', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
{{Form::label('divisi', 'Divisi') }} </br>
 {{Form::select('krywsDvisi', array('it' => 'IT','gis' => 'GIS'),'gis')}}</br></br>
 {{ $errors->first('krywsDvisi', '<div class="alert alert-danger"><b>:message</b></div>')  }}

{{Form::label('jabatan', 'Jabatan') }} </br>
 {{Form::select('krywsJabat', array('mngr' => 'Manager','kryw' => 'Karyawan'),'kryw')}}</br>
{{ $errors->first('JABATAN', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::reset('Cancel', array('class' => 'btn btn-primary')) }} 

 {{ Form::close() }}

 </div>

 @stop