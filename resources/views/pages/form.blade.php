@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3 mr-3">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Pertanyaan</h3>
    </div>
    <!-- form start -->
    <form role="form" action="{{ url("/pertanyaan") }}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul Pertanyaan</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul pertanyaan">
        </div>
        <div class="form-group">
          <label for="isi">Pertanyaan Baru</label>
          <input type="text" class="form-control" id="isi" name="isi" placeholder="Pertanyaan baru">
        </div>
      </div>
      <input type="hidden" name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
      <input type="hidden" name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
      <!-- /.card-body -->
  
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection