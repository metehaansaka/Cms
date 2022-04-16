@extends('layouts.admin-base')
@section('javascripts')
  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
@endsection
@section('head')
  <link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
@endsection

@section('yeni_ekle')
<a href="{{ route('Yeni Kullanıcı Ekle') }}" class="btn btn-success" type="button">Yeni Ekle</a>
@endsection

@section('content')

  <table
  id="table"
  data-toggle="table"
  data-pagination="true"
  data-side-pagination=""
  data-page-list="[10, 25, 50, 100, 200, All]" class="table table-responsive-sm table-striped">
  <thead>
    <tr>
      <th data-field="id">ID</th>
      <th data-field="name">Adı Soyadı</th>
      <th data-field="email">E-Posta</th>
      <th data-field="islemler">İşlemler</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key => $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
        <a href="{{ route('Kullanıcı Düzenle',['id' => $user->id]) }}" class="btn btn-lg btn-primary" type="button">Düzenle</a>
        <a href="{{ route('settings_delete',['case' => 'userdel','userid' => $user->id]) }}" class="btn btn-lg btn-danger" type="button">Sil</a>
      </td>
      </tr>
    @endforeach

</tbody>

</table>

@endsection
