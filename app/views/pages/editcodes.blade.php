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
      {{HTML::link('codeslist','Back to list', array('class' => 'btn btn-danger')) }} 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
<!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div align="center"><h3>Edit Codes</h3></div>

  {{ Form::open(array('action' => 'TCodesController@update')) }}

 {{Form::hidden('id', $tcodes->id)}}

{{Form::label('codesheads', 'Codes Heads') }}</br>
 {{Form::text('codesHeads',$tcodes->codesHeads, array('class' => 'form-control','placeholder' => 'Codes Heads'))}}</br>
 {{ $errors->first('codesHeads', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('codescodes', 'Codes Codes') }}</br>
 {{Form::text('codesCodes',$tcodes->codescodes, array('class' => 'form-control','placeholder' => 'Codes Codes'))}}</br>
{{ $errors->first('codesCodes', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
  {{Form::label('codesdesc1', 'Codes Desc 1') }}</br>
 {{Form::textarea('codesDesc1',$tcodes->codesDesc1, array('class' => 'form-control','placeholder' => 'Codes Desc 1'))}}</br>
 {{ $errors->first('codesDesc1', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
  {{Form::label('codesdesc2', 'Codes Desc 2') }}</br>
 {{Form::textarea('codesDesc2',$tcodes->codesDesc2, array('class' => 'form-control','placeholder' => 'Codes Desc 2'))}}</br>
 {{ $errors->first('codesDesc2', '<div class="alert alert-danger"><b>:message</b></div>')  }}
 
 {{Form::label('codesstats', 'Codes Status') }}</br>
 {{Form::select('codesStats', array('0' => '0','1' => '1'),'0')}}</br>
{{ $errors->first('codesStats', '<div class="alert alert-danger"><b>:message</b></div>')  }}

 {{Form::submit('Update', array('class' => 'btn btn-primary')) }} 
{{Form::reset('Cancel',array('class' => 'btn btn-primary'))}}
 {{ Form::close() }}

 </div>

 @stop