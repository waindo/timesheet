@extends('layout')

@section('content')
<section class="container">
 <table class="table">
    <tr>
	   <th>No</th>
       <th>Project</th>
       <th>Instansi</th>
	   <th>Tahun</th>
       <th>#</th>
    </tr>
    @foreach($tprjcsdata as $tprjcs)
      <tr>
		<td>{{ $tprjcs->prjcsIdent }}</td> 
         <td>{{ $tprjcs->prjcsNames }}</td>
         <td>{{ $tprjcs->prjcsInsta }}</td>
		 <td>{{ $tprjcs->prjcsYears }}</td>
         <td>{{ link_to_action('TPrjcsController@edit', 'edit', array($tprjcs->prjcsIdent))}}</td>
      </tr>
    @endforeach
 </table>
</section>
@stop