@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Orang Tua</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data author
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
              <form action="{{route('author.update',$author->id)}}" method="POST">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  

                  <div class="form-group">
                  <label class="control_label">Nama Ibu</label>
                  <input type="text" name="a" class="form-control" value="{{$author->name}}" required="">
                  </div>

              
                  <div>
                      <button type="submit" class="btn btn-success">
                          Simpan
                      </button>
                       <button type="reset" class="btn btn-danger">
                          Delete
                      </button>
                  </div>
              </form>
                	
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
