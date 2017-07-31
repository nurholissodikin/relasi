@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Orang Tua</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data Orangtua
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
              <form action="{{route('orangtua.show',$ortu->id)}}" method="POST">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  

                  <div class="form-group">
                  <label class="control_label">Nama Ibu</label>
                  <input type="text" name="a" class="form-control" value="{{$ortu->nama_ibu}}" readonly="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Nama Ayah</label>
                  <input type="text" name="b" class="form-control" value="{{$ortu->nama_ayah}}" readonly="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Umur Ibu</label>
                  <input type="number" name="c" class="form-control" value="{{$ortu->umur_ibu}}" readonly="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Umur Ayah</label>
                  <input type="number" name="d" class="form-control" value="{{$ortu->umur_ayah}}" readonly="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea class="form-control" name="e"  readonly="">{{$ortu->alamat}}
                  </textarea>
                  </div>



              </form>
                	
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
