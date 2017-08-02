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
              <form action="{{route('author.store')}}" method="post">
                  {{csrf_field()}}

                  <div class="form-group">
                  <label class="control_label">Name</label>
                  <input type="text" name="a" class="form-control" required="">
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
