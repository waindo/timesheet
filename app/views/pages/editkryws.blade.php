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
      {{HTML::link('krywslist','Back to list', array('class' => 'btn btn-danger')) }} 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
<!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div align="center"><h3>Edit Data Karyawan</h3></div>

  <h3>Edit Data Karyawan</h3>

  {{ Form::open(array('action' => 'TKrywsController@update')) }}

 {{Form::hidden('id', $tkryws->id)}}


 {{Form::label('Nik', 'NIK') }}
 {{Form::text('krywsNkywn', $tkryws->krywsNkywn , array('class' => 'form-control','placeholder' => 'Nik'))}}</br>
 {{ $errors->first('krywsNkywn', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('nama', 'Nama') }}
 {{Form::text('krywsNames', $tkryws->krywsNames, array('class' => 'form-control','placeholder' => 'nama'))}}</br>
 {{ $errors->first('krywsNames', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('tempatlahir', 'Tempat Lahir') }}
 {{Form::text('krywsTmlhr', $tkryws->krywsTmlhr, array('class' => 'form-control','placeholder' => 'tempatlahir'))}}</br>
	{{ $errors->first('krywsTmlhr', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('tanggallahir', 'Tanggal Lahir') }}
 {{Form::input('date','krywsTglhr', $tkryws->krywsTglhr, array('class' => 'form-control','placeholder' => 'tanggallahir'))}}</br>
	{{ $errors->first('krywsTglhr', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('kelamin', 'Jenis Kelamin') }}</br>
 {{Form::select('krywsJnskl', array('P' => 'pria','W' => 'wanita'),'P')}}</br> </br>
	{{ $errors->first('krywsJnskl', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('agama', 'Agama') }} </br>
 {{Form::select('krywsAgama', array('I' => 'islam','K' => 'kristen'),'K')}}</br> </br>
	{{ $errors->first('krywsAgama', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('alamat', 'Alamat') }} </br>
 {{Form::text('krywsAlmat', $tkryws->krywsAlmat, array('class' => 'form-control','placeholder' => 'alamat'))}}</br>
	{{ $errors->first('krywsAlmat', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('hp', 'No hp') }} </br>
 {{Form::text('krywsNomhp', $tkryws->krywsNomhp, array('class' => 'form-control','placeholder' => 'hp'))}}</br>
	{{ $errors->first('krywsNomhp', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('tahunmasuk', 'Tahun Masuk') }} </br>
 {{Form::text('krywsThnms', $tkryws->krywsThnms, array('class' => 'form-control','placeholder' => 'tahunmasuk'))}}</br>
	{{ $errors->first('krywsThnms', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('divisi', 'Divisi') }} </br>
 {{Form::select('krywsDvisi', array('it' => 'IT','gis' => 'GIS'),'gis')}}</br></br>
	{{ $errors->first('krywsDvisi', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 
 {{Form::label('jabatan', 'Jabatan') }} </br>
 {{Form::select('krywsJabat', array('mngr' => 'Manager','kryw' => 'Karyawan'),'kryw')}}</br>
	{{ $errors->first('krywsJabat', '<div class="alert alert-danger"><b>:message</b></div>')  }}

  </br>
 {{Form::submit('Update', array('class' => 'btn btn-primary')) }}
{{Form::reset('Cancel', array('class' => 'btn btn-primary')) }} 
	
 {{ Form::close() }}

 </div>

 @stop