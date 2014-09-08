@extends('layouts.defaultlist')

@section('content')
<section class="container">
 <table class="table table-bordered table-hover">
 <thead>
    <tr>
	   <th>Codes Heads</th>
       <th>Codes Codes</th>
       <th>Codes Desc 1</th>
	   <th>Codes Desc 2</th>
	   <th>Codes Status</th>
	   <th>Actions</th> <td>{{HTML::link('formcodes', 'ADD', array('class' => 'btn btn-primary')) }}</td>
    </tr>
	</thead>
	<tbody>
    @foreach($codesdata as $tcodes)
      <tr>
		<td>{{ $tcodes->codesHeads }}</td> 
         <td>{{ $tcodes->codesCodes }}</td>
         <td>{{ $tcodes->codesDesc1 }}</td>
		 <td>{{ $tcodes->codesDesc2 }}</td>
		 <td>{{ $tcodes->codesStats }}</td>
         <td>{{ link_to_action('TCodesController@edit', 'edit', array($tcodes->id))}} | 
		 {{ link_to_action('TCodesController@confirm', 'delete', array($tcodes->id))}}</td>
      </tr>
    @endforeach
	</tbody>
 </table>
</section>
@stop