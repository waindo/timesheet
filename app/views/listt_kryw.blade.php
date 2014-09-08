@extends('layouts.defaultkaryawan')

@section('content')

<div class='container'>
{{ Form::open(array('url' => 'listt_kryw')) }}

<section class="container">
 <table class="table">
    <tr>
	
       <th>Nama</th>
       <th>NIK</th>
	   <th>Divisi</th>
	   <th>Jabatan</th>
	   <th>Actions</th><td>{{HTML::link('formkaryawan', 'ADD', array('class' => 'btn btn-primary')) }}
       
    </tr>
    @foreach($tkrywsdata as $tkryws)
      <tr>
		 
         <td>{{ $tkryws->krywsNames }}</td>
         <td>{{ $tkryws->krywsNkywn }}</td>
		 <td>{{ $tkryws->krywsDvisi }}</td>
         <td>{{ $tkryws->krywsJabat }}</td>
		  <td>{{ link_to_action('TKrywsController@edit', 'edit', array($tkryws->id))}} | {{ link_to_action('TKrywsController@delete', 'delete', array($tkryws->id))}} </td>
      </tr>
    @endforeach
 </table>
</section>
@stop