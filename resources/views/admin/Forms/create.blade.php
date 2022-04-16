@extends('layouts.admin-base')
@section('javascripts')

@endsection
@section('head')

@endsection

@section('yeni_ekle')

@endsection

@section('content')

  <div class="card">
  <form class="" action="" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-header"><strong>{{ Route::currentRouteName() }}</strong></div>
  <div class="card-body">

  <div class="form-group">
  <label for="input1">Form Adı</label>
  <input class="form-control" id="input1" name="name" type="text" placeholder="Form Adı">
  </div>

  <div class="form-group">
  <label for="input2">Cevapların Gönderileceği E-mail Adresleri</label>
  <input class="form-control" id="input2" name="email" type="text" placeholder="E-mail">
  <small id="input2" class="form-text text-muted">Virgül(,) İle Ayırılabilir.</small>
  </div>

  <div class="form-group">
  <label for="input3">Form Açıklaması</label>
  <input class="form-control" id="input3" name="description" type="text" placeholder="Form Açıklaması">
  </div>

  <div class="form-group">
    <label for="input4">Form Alanları</label>
    <select multiple class="form-control" id="input4" name="form_fields[]">
      @foreach ($form_fields_language as $key => $value)
        <option value="{{ $value->fields_id }}">{{ $value->name }}</option>
      @endforeach
   </select>
  </div>

  </div>

  <div class="card-footer">
  <button class="btn btn-md btn-primary" type="submit"> Kaydet</button>
  <button class="btn btn-md btn-danger" type="reset"> Reset</button>
  </div>
</form>
  </div>

@endsection
