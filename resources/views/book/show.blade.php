@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Orang Tua</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data book
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
              <form action="{{route('book.show',$book->id)}}" method="POST">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

               <div class="form-group">
                  <label class="control_label">Title</label>
                  <input type="text" name="a" class="form-control" readonly="" value="{{$book->title}}">
                  </div>

                  <div class="form-group">
                    <input type="text" name="x" class="form-control" value="{{$book->author->name}}" readonly=""> 

                  <div class="form-group">
                  <label class="control_label">Amount</label>
                  <input type="number" name="c" class="form-control" readonly="" value="{{$book->amount}}">
                  </div>

        

                  <div class="form-group">
                    <label >Cover</label><br>
                    <img src="{{asset('img/'.$book->cover.'')}}" height="100px" width="100px"></td>
                    <br>
                    
                </div>

                                    
              </form>
                  
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
