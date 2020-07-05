@extends('adminlte.master')

@section('content')
    <div class="card">
      <h1>Pertanyaan</h1><br>
      <p> judul: {{ $pertanyaan->judul }}</p>
      <p> isi: {{ $pertanyaan->isi }}</p>
      <p> tanggal dibuat: {{ $pertanyaan->tanggal_dibuat }}</p>
      <p> tanggal diperbaharui: {{ $pertanyaan->tanggal_diperbaharui }}</p>

      <h2>Jawaban</h2>
      @foreach ($jawabans as $jawaban)
          <p>{{ $jawaban->isi }}, {{ $jawaban->tanggal_dibuat }}, {{ $jawaban->tanggal_diperbaharui }}</p>
      @endforeach
    </div>
@endsection