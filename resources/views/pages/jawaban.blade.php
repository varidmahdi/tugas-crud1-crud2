@extends('adminlte.master')

@section('links')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/adminlte.min.css') }}">
@endsection

@section('content')
<div class="card">
  @foreach ($jawabans as $jawaban)
      <h1>{{ $jawaban->isi }}</h1>
  @endforeach
</div>
@endsection