@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Author</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data author
                <div class="panel-title pull-right"><a href="/author/create">Tambah Data</a></div></div>

                <div class="panel-body">
                <table class="table">
                <thead>
                	<tr>
                		<th>Name</th>
                        <th>Book</th>

                		<th colspan="3">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($author as $data)
                		<tr>
                			<td>{{$data->name}}</td>
                		<td>
                                @foreach($data->book as $a)
                                   <li> {{$a->title}}</li>
                                @endforeach
                            </td>
                			<td>
                				<a class="btn btn-warning" href="/author/{{$data->id}}/edit">Edit</a></td><td>
                				<a class="btn btn-primary" href="/author/{{$data->id}}">Show</a></td>



                				<td>
                				<form action="{{route('author.destroy',$data->id)}}" method="post">

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
