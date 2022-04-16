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

  <div class="card">
  <form class="" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-header"><strong>{{ Route::currentRouteName() }}</strong></div>
  <div class="card-body">

  <div class="form-group">
  <label for="input1">Alan Başlık</label>
  <input class="form-control" id="input1" name="name" type="text" placeholder="Alan Başlık" required>
  </div>

  <div class="form-group">
  <label for="input2">Alan Türü</label>
  <select class="form-control" id="input2" name="type">
    <option value="Yazı Kutusu">Yazı Kutusu</option>
    <option value="Email Kutusu">Email Kutusu</option>
    <option value="Geniş Yazı Alanı">Geniş Yazı Alanı</option>
    <option value="Açılır Seçenek">Açılır Seçenek</option>
  </select>
  </div>

  <div class="form-group">
  <label for="input3">Zorunlu Alan</label>
  <select class="form-control" id="input3" name="required">
    <option value="1">Evet Zorunlu</option>
    <option value="0">Hayır Zorunlu Değil</option>
  </select>
  </div>

  <div class="form-group">
  <label for="input4">Seçenekler (Varsa)</label>
  <textarea class="form-control" id="input4" rows="5" name="options"></textarea>
  </div>

  <div class="form-group">
    <label for="input5">Sıralama</label>
     <input type="number" class="form-control" id="input5" value="999" name="sorted" required>
  </div>

  </div>

  <div class="card-footer">
  <button class="btn btn-md btn-primary" type="submit"> Kaydet</button>
  <button class="btn btn-md btn-danger" type="reset"> Reset</button>
  </div>
</form>
  </div>

@endsection
