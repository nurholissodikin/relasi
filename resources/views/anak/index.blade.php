@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Anak</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data Anak
                <div class="panel-title pull-right"><a href="/anak/create">Tambah Data</a></div></div>

                <div class="panel-body">
                <table class="table">
                <thead>
                	<tr>
                		<th>Nama</th>
                		<th>Nama Orangtua</th>
                		<th>Umur</th>
                		<th>Alamat</th>
                		<th colspan="3">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($anak as $data)
                		<tr>
                			<td>{{$data->nama}}</td>
                            <td>{{$data->ortu->nama_ibu}} dan {{$data->ortu->nama_ayah}}</td>
                			<td>{{$data->umur}}</td>
                			<td>{{$data->alamat}}</td>
                			<td>
                				
                			</td>
                			<td>
                				<a class="btn btn-warning" href="/anak/{{$data->id}}/edit">Edit</a></td><td>
                				<a class="btn btn-primary" href="/anak/{{$data->id}}">Show</a></td>



                				<td>
                				<form action="{{route('anak.destroy',$data->id)}}" method="post">

                				<input name="_method" type="hidden" value="DELETE">
                				<input name="_token" type="hidden">
                				<input class="btn btn-danger" type="submit" value="Delete">
                				{{csrf_field()}}
                					
                				</form>
                				</td>
                				
                				@endforeach
                			</td>
                		</tr>
                	</tbody>
                </table>
                	
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
