@extends('layouts.defaultlist')

@section('content')
<section class="container">
 <table class="table">
    <tr>
       <th>Project</th>
       <th>Instansi</th>
	   <th>Tahun</th>
	  
	   <th>Actions</th> <td>{{HTML::link('formproject', 'ADD', array('class' => 'btn btn-primary')) }}</td>
    </tr>
    @foreach($prjcsdata as $tprjcs)
      <tr> 
         <td>{{ $tprjcs->prjcsNames }}</td>
         <td>{{ $tprjcs->prjcsInsta }}</td>
		 <td>{{ $tprjcs->prjcsYears }}</td>
         <td>{{link_to_action('TPrjcsController@open', 'Lihat Timesheet', array($tprjcs->id))}}
      </tr>
    @endforeach
 </table>
</section>
@stop