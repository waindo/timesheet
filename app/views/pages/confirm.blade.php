@extends('layouts.default')

@section('content')

<div class='container'>

<div align='center'>
{{ Form::open(array('action' => 'TShedsController@delete')) }}
Anda ingin menghapus data tersebut ? </br>

 {{ link_to_action('TShedsController@delete', 'Yes', array($tsheds->id))}} </td>
 {{HTML::link('shedslist', 'No', array('class' => 'btn btn-primary')) }}</td>


 {{ Form::close() }}
</div>
 </div>
</br>
 @stop