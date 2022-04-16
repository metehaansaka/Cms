@extends('layouts.admin-base')

@section('yeni_ekle')
<a href="{{ route('language_create') }}" class="btn btn-success" type="button">Yeni Ekle</a>
@endsection

@section('content')


  <table class="table table-responsive-sm table-hover table-outline mb-0">
  <thead class="thead-light">
  <tr>
  <th>
  Adı <i class="fas fa-language"></i>
  </th>
  <th>Ön Eki</th>
  <th>İşlemler</th>
  </tr>
  </thead>
  <tbody>

    @foreach ($languages as $key => $language)
      <tr>
        <td> {{ $language->name }} </td>
        <td> {{ $language->slug }} </td>
        <td class="text-center w-25">
        <a href="{{ route('language_edit',([ 'id' => $language->id ])) }}" class="btn btn-lg btn-primary" type="button">Düzenle</a>
        <a href="{{ route('language_delete',([ 'id' => $language->id ])) }}" class="btn btn-lg btn-danger" type="button">Sil</a>
        </td>
      </tr>
    @endforeach



  </tbody>
  </table>


@endsection
