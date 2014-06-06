@extends('layout')

@section('content')
<section class="container">
 <table class="table">
    <tr>
	   <th>No</th>
       <th>Nama</th>
       <th>NIK</th>
	   <th>Divisi</th>
	   <th>Jabatan</th>
       
    </tr>
    @foreach($tkrywsdata as $tkryws)
      <tr>
		<td>{{ $tkryws->krywsIdent }}</td> 
         <td>{{ $tkryws->krywsNames }}</td>
         <td>{{ $tkryws->krywsNkywn }}</td>
		 <td>{{ $tkryws->krywsDvisi }}</td>
         <td>{{ $tkryws->krywsJabat }}</td>
		 
      </tr>
    @endforeach
 </table>
</section>
@stop