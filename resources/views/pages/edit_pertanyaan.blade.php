@extends('adminlte.master')

@section('content')
<div class="card mt-3 mr-3 ml-3">
  <form action="{{ url('/pertanyaan/'.$id) }}" method="POST">
    {{ method_field('put') }}
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">
    <label for="">Judul</label>
    <input class="form-control" type="text" name="judul" id="judul" value="{{ $pertanyaan->judul }}">
    <label for="">Isi</label>
    <input class="form-control" type="text" name="isi" id="isi" value="{{ $pertanyaan->isi }}">
    <input class="form-control" type="hidden" name="tanggal_dibuat" id="tanggal_dibuat" value="{{ $pertanyaan->tanggal_dibuat }}">
    <input class="form-control" type="hidden" name="tanggal_diperbaharui" id="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
    <br>
    <button class="btn btn-primary" type="submit">Update Pertanyaan</button>
  </form>
</div>
    
@endsection