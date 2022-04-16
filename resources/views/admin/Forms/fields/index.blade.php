@extends('layouts.admin-base')
@section('javascripts')
  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
@endsection
@section('head')
  <link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
@endsection

@section('yeni_ekle')
<a href="{{ route('Form Alan Oluştur') }}" class="btn btn-success">Yeni Ekle</a>
@endsection

@section('content')

  <table
  id="table"
  data-toggle="table"
  data-search="true"
  data-pagination="true"
  data-side-pagination=""
  data-page-list="[10, 25, 50, 100, 200, All]" class="table table-responsive-sm table-striped">
  <thead>
    <tr>
      <th data-field="id">Sıra</th>
      <th data-field="email">Alan Adı</th>
      <th data-field="alantipi">Alan Tipi</th>
      <th data-field="dil">Dil</th>
      <th data-field="islemler">İşlemler</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($form_fields as $key => $value)

      <tr>
        <td>{{ $value->sorted }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->type }}</td>
        <td>{{ $lang_name }}</td>
        <td class="w-25">
          <a href="{{ route('Form Alan Düzenle',['id' => $value->id]) }}" class="btn btn-lg btn-primary" type="button">Düzenle</a>
          <a href="{{ route('Form Alan Düzenle',['id' => $value->id, 'del' => true]) }}" class="btn btn-lg btn-danger" type="button">Sil</a>
        </td>
      </tr>

    @endforeach

</tbody>

</table>

@endsection
