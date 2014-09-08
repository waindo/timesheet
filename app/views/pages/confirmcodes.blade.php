@extends('layouts.default')

@section('content')

<div class='container'>

<div align='center'>
{{ Form::open(array('action' => 'TCodesController@delete')) }}
Anda ingin menghapus data tersebut ? </br>

 {{ link_to_action('TCodesController@delete', 'Yes', array($tcodes->id))}} </td>
 
{{HTML::link('codeslist', 'No', array('class' => 'btn btn-primary')) }}</td>

 {{ Form::close() }}
</div>
 </div>
</br>
 @stop