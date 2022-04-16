@extends('layouts.admin-base')
@section('javascripts')
  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
@endsection
@section('head')
  <link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
@endsection

@section('yeni_ekle')

@endsection

@section('content')
    <a class="btn btn-success" href="{{ route('file.export') }}">Export data</a>
  <table
  id="table"
  data-toggle="table"
  data-pagination="true"
  data-side-pagination=""
  data-page-list="[10, 25, 50, 100, 200, All]" class="table table-responsive-sm table-striped">
  <thead>
    <tr>
      <th data-field="id">ID</th>
      <th data-field="email">E-Posta</th>
      <th data-field="islemler">İşlemler</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($newsletters as $key => $newsletter)
      <tr>
      <td>{{ $newsletter->id }}</td>
      <td>{{ $newsletter->email }}</td>
      <td>
        <a href="{{ route('settings_delete',['case' => 'newsletter','id' => $newsletter->id]) }}" class="btn btn-lg btn-danger" type="button">Sil</a>
      </td>
      </tr>
    @endforeach

</tbody>

</table>

@endsection
