@extends('layout')

@section('content')
@extends('layout')

@section('content')

<div class='container'>

<h3>Insert new book</h3>

 {{ Form::open()}}

 {{Form::label('tanggal', 'Tanggal') }}

 {{Form::text('title', '', array('class' => 'form-control'))}}

 {{Form::label('author', 'Author') }}

 {{Form::text('author', '', array('class' => 'form-control'))}}

 {{Form::label('kegiatan', 'Kegiatan') }}

 {{Form::textarea('kegiatan', '', array('class' => 'form-control'))}}

 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop
@stop