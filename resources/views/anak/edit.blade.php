@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Orang Tua</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data anak
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
              <form action="{{route('anak.update',$anak->id)}}" method="POST">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                  <label class="control_label">Nama</label>
                  <input type="text" name="a" class="form-control" value="{{$anak->nama}}" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Nama Orangtua</label>
                  <select class="form-control" name="b">
                  @foreach($ortu as $data)
                  <option value="{{$data->id}}" <?php { echo 'selected'; } ?>>{{$data->nama_ibu}} dan {{$data->nama_ayah}}
                    
                  </option>
                  @endforeach  
                  </select>
                  
                  </div>

                  <div class="form-group">
                  <label class="control_label">Umur</label>
                  <input type="number" name="c" class="form-control" value="{{$anak->umur}}"  required="">
                  </div>

        

                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea class="form-control" name="d" required="">{{$anak->alamat}}
                  </textarea>
                  </div>

                  <div>
                      <button type="submit" class="btn btn-success">
                          Simpan
                      </button>
                       <button type="reset" class="btn btn-danger">
                          Reset
                      </button>
                  </div>
                                    
              </form>
                	
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
