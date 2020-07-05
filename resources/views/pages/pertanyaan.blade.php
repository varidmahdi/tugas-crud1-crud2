@extends('adminlte.master')

@section('links')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/adminlte.min.css') }}">
@endsection

@section('content')
  <div class="card mt-3 mr-3 ml-3">
    <div class="card-header">
      <div class="row">
        <div class="col-md-4">
          <h2>List Pertanyaan</h2>
        </div>
        <div class="col-md-4 offset-md-4">
          <a href="{{ url('/pertanyaan/create') }}" class="btn btn-success float-right"><span>Tambah Pertanyaan</span></a>					
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered">
        <thead>
        <tr>
          <th>No.</th>
          {{-- <th>Judul</th> --}}
          <th>Pertanyaan</th>
          {{-- <th>Tanggal Dibuat</th>
          <th>Tanggal Diperbarui</th> --}}
          <th>Lihat Jawaban</th>
          <th>Form Jawaban</th>
          <th>Detail QnA</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pertanyaans as $pertanyaan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pertanyaan->isi }}</td>
          <td>
            <a href="{{ url('/jawaban/'.$pertanyaan->id) }}">
              <button type="submit" class="btn btn-success">Lihat Jawaban</button>
            </a>
          </td>
          <td>
            <form action="{{ url('/jawaban/'.$pertanyaan->id) }}" method="POST">
              @csrf
              <input type="text" name="isi">
              <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
              <input type="hidden" name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
              <input type="hidden" name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
              <button type="submit" class="btn btn-success">Submit Jawaban</button>
            </form>
          </td>
          <td>
            <a href="{{ url('/pertanyaan/'.$pertanyaan->id) }}">
              <button class="btn btn-primary">Lihat QnA</button>
            </a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@push('scripts')
  <!-- DataTables -->
  <script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>
@endpush