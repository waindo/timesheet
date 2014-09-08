@extends('layouts.default')

@section('content')

<div class='container'>

<div align='center'>
{{ Form::open(array('action' => 'TPrjcsController@delete')) }}
Anda ingin menghapus data tersebut ? </br>

 {{ link_to_action('TPrjcsController@delete', 'Yes', array($tprjcs->id))}} </td>
 
{{HTML::link('prjcslist', 'No', array('class' => 'btn btn-primary')) }}</td>

 {{ Form::close() }}
</div>
 </div>
</br>
 @stop