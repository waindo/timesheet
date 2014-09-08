@extends('layouts.defaultlist')

@section('content')

<section class="container">
{{ Form::open(array('url' => 'listsheds')) }}

 <table class="table table-bordered table-hover">
 <thead>

    <tr>
	  
       <th>Tanggal</th>
       <th>Kegiatan</th>
	   <th>Actions</th>
	    <td> {{HTML::link('formtimesheet', 'ADD', array('class' => 'btn btn-primary')) }}</td>
	   
	   
       
    </tr>
	</thead>
	<tbody>
    @foreach($shedsdata as $tsheds)
      <tr>
	   
         <td>{{ $tsheds->shedsTnggl }}</td>
         <td>{{ $tsheds->shedsKgtan }}</td>
         <td>{{ link_to_action('TShedsController@edit', 'edit', array($tsheds->id))}} | 
		 {{ link_to_action('TShedsController@confirm', 'delete', array($tsheds->id))}} </td>
      </tr>
    @endforeach
	</tbody>
 </table>
</section>
 {{ Form::close() }}
@stop