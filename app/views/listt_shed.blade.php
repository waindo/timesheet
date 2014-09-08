@extends('layouts.defaulttimesheet')

@section('content')

<section class="container">
{{ Form::open(array('url' => 'listt_shed')) }}

 <table class="table">
    <tr>
	  
       <th>Tanggal</th>
       <th>Kegiatan</th>
	   <th>Actions</th> <td>{{HTML::link('formtimesheet', 'ADD', array('class' => 'btn btn-primary')) }}
       
    </tr>
    @foreach($tshedsdata as $tsheds)
      <tr>
	    
         <td>{{ $tsheds->shedsTnggl }}</td>
         <td>{{ $tsheds->shedsKgtan }}</td>
         <td>{{ link_to_action('TShedsController@edit', 'edit', array($tsheds->id))}} | {{ link_to_action('TShedsController@delete', 'delete', array($tsheds->id))}} </td>
      </tr>
    @endforeach
 </table>
</section>
 {{ Form::close() }}
@stop