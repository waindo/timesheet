@extends('layouts.default')

@section('content')

<div class='container'>

<div align='center'>
{{ Form::open(array('action' => 'TKrywsController@delete')) }}
Anda ingin menghapus data tersebut ? </br>

 {{ link_to_action('TKrywsController@delete', 'Yes', array($tkryws->id))}} </td>
 
{{HTML::link('krywslist', 'No', array('class' => 'btn btn-primary')) }}</td>

 {{ Form::close() }}
</div>
 </div>
</br>
 @stop