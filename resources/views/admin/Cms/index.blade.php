@extends('layouts.admin-base')
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

<a href="{{ route('İçerik Oluştur',['parent_id' => $parent_id]) }}" class="btn btn-success">Yeni Ekle</a>
@isset($category->parent_id)
  <a href="{{ route('CMS Yönetimi',['id' => $category->parent_id]) }}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Geri</a>
@endisset
@endsection

@section('ContentHeader')

  @if($parent_id > 1 and getCategoryLanguage($category->parent_id,session('lang_slug')))
    <div><a href="{{ route('CMS Yönetimi',['id'=>$category->parent_id]) }}" style="white-space: nowrap;">{{ getCategoryLanguage($category->parent_id,session('lang_slug'))->name }}</a></div>
    <div class="mx-2"><i class="fas fa-long-arrow-alt-right"></i></div>
  @else
    <div><a href="{{ route('CMS Yönetimi',['id'=> 0 ]) }}">CMS Yönetimi</a></div>
    <div class="mx-2"><i class="fas fa-long-arrow-alt-{{ $parent_id == 1 ? 'right' : 'down' }}"></i></div>
  @endif
  @isset ($category->id)
    <div><strong style="white-space: nowrap;"> {{ getCategoryLanguage($category->id,session('lang_slug'))->name }} </strong></div>
    <div class="pt-1 ml-1"><i class="fas fa-long-arrow-alt-down"></i></div>
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
      <th data-field="id">ID</th>
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
    <td>{{ $value->category_id }}</td>
    <td>{{ $lang_name }}</td>
    <td>{{ SpecialBlocks($value->block_id)->name }}</td>
    <td>{{ Tarih($value->create_time) }}</td>
    <td>
      <a href="{{ route('CMS Yönetimi',['id' => $value->category_id]) }}" class="btn btn-warning">İçerikler</a>
      <a href="{{ route('İçerik Düzenle',['id' => $value->category_id]) }}" class="btn btn-success">Düzenle</a>
      <a href="#" data-href="{{ route('İçerik Sil',['id' => $value->category_id]) }}" data- class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete">Sil</a>
    </td>
  </tr>
@endforeach



</tbody>

</table>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              Emin Misiniz?
          </div>
          <div class="modal-body">
            Silinen içerik geri alınamaz. İçeriği silmek istediğinizden emin misiniz?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">İptal</button>
              <a class="btn btn-danger btn-ok">Sil</a>
          </div>
      </div>
  </div>
</div>

@endsection

