@extends('layouts.defaultkaryawan')

@section('content')

<div class='container'>

<h3>TAMBAH CODES</h3>

  {{Form::open(array('action' => 'TCodesController@store')) }} 

 {{Form::label('heads', 'Heads') }}
 {{Form::text('codesHeads', '', array('class' => 'form-control','placeholder' => 'Heads'))}}</br>
 {{ $errors->first('codesHeads', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('codes', 'Codes') }}
 {{Form::text('codesCodes', '', array('class' => 'form-control','placeholder' => 'Codes'))}}</br>
{{ $errors->first('codesCodes', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('desc1', 'Desc 1') }}
 {{Form::textarea('codesDesc1', '', array('class' => 'form-control'))}}
 {{ $errors->first('codesDesc1', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('desc2', 'Desc 2') }}
 {{Form::textarea('codesDesc2', '', array('class' => 'form-control'))}}
 {{ $errors->first('codesDesc2', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('stats', 'Status') }} </br>
  {{Form::select('codesStats', array('1' => '1','0' => '0'),'1')}}</br>
 {{ $errors->first('codesStats', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
</br>
 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
  {{Form::reset('Cancel', array('class' => 'btn btn-primary')) }}</br>

 {{ Form::close() }}

 </div>

 @stop