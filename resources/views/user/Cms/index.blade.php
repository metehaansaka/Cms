@extends('layouts.user-base')
@section('javascripts')
  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
@endsection
@section('head')
  <link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
@endsection

@section('yeni_ekle')
  @if (Request()->id)
    @php($parent_id = Request()->id)
  @else
    @php($parent_id = 0)
  @endif

<a href="{{ route('user.İçerik Oluştur',['parent_id' => $parent_id]) }}" class="btn btn-success">Yeni Ekle</a>
@isset($category->parent_id)
  <a href="{{ route('user.CMS Yönetimi',['id' => $category->parent_id]) }}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Geri</a>
@endisset
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
      <th data-field="sorted">Sıra</th>
      <th data-field="baslik">Başlık</th>
      <th data-field="dil">Dil</th>
      <th data-field="category">Kategori Türü</th>
      <th data-field="tarih">Eklenme Tarihi</th>
      <th data-field="islemler">İşlemler</th>
    </tr>
  </thead>
  <tbody>

@foreach ($cms as $key => $value)
  <tr>
    <td>{{ $value->sorted }}</td>
    <td>{{ $value->name }}</td>
    <td>{{ $lang_name }}</td>
    <td>{{ SpecialBlocks($value->block_id)->name }}</td>
    <td>{{ Tarih($value->create_time) }}</td>
    <td>
      <a href="{{ route('user.CMS Yönetimi',['id' => $value->category_id]) }}" class="btn btn-warning">İçerikler</a>
      <a href="{{ route('user.İçerik Düzenle',['id' => $value->category_id]) }}" class="btn btn-success">Düzenle</a>
      <a href="{{ route('user.İçerik Sil',['id' => $value->category_id]) }}" class="btn btn-danger">Sil</a>
    </td>
  </tr>
@endforeach



</tbody>

</table>

@endsection
