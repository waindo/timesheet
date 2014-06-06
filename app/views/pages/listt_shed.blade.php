@extends('layout')

@section('content')
<section class="container">
 <table class="table">
    <tr>
	  <th>No</th>
       <th>Tanggal</th>
       <th>Kegiatan</th>
       
    </tr>
    @foreach($tshedsdata as $tsheds)
      <tr>
	     <td>{{ $tsheds->shedsIdent }}</td>
         <td>{{ $tsheds->shedsTnggl }}</td>
         <td>{{ $tsheds->shedsKgtan }}</td>
         
      </tr>
    @endforeach
 </table>
</section>
@stop