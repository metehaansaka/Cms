@extends('layouts.admin-base')

@section('yeni_ekle')
<a href="{{ route('language_create') }}" class="btn btn-success" type="button">Yeni Ekle</a>
@endsection

@section('javascripts')
  <script type="text/javascript">
    $(function(){
      $("#add-new-key").click(function(){
        var copy = $('#KeyDegerBlock').clone();
        $(".card-body").append( copy );
        copy.find("input").val("");
      });
    });
  </script>
@endsection

@section('content')



  <div class="card">
  <form class="" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-header"><strong>Dil Yönetimi</strong></div>
  <div class="card-body">

  <div class="form-group">
  <label for="input1">Dil Adı</label>
  <input class="form-control" id="input1" name="dil_adi" type="text" placeholder="Dil Adı">
  </div>

  <div class="form-group">
  <label for="input2">Dil Ön Eki</label>
  <input class="form-control" id="input2" name="on_ek" type="text" placeholder="Dil Ön Eki">
  </div>

  <div class="custom-file col-6">
  <input type="file" class="custom-file-input" id="customFile" name="bayrak">
  <label class="custom-file-label" for="customFile">Bayrak</label>
  </div>

  <div class="clearfix"></div>
  <div class="row mt-5">
    <div class="col-4 text-left">
      <button class="btn btn-success" id="add-new-key" type="button">Yeni Key Ekle</button>
    </div>
  </div>

  <div class="row mt-2" id="KeyDegerBlock">
    <div class="form-group col-6">
    <label for="key1">Key</label>
    <input class="form-control" id="key1" name="key[]" type="text" placeholder="Key">
    </div>
    <div class="form-group col-6">
    <label for="deger1">Değer</label>
    <input class="form-control" id="deger1" name="deger[]" type="text" placeholder="Değer">
    </div>
  </div>

  </div>

  <div class="card-footer">
  <button class="btn btn-md btn-primary" type="submit"> Kaydet</button>
  <button class="btn btn-md btn-danger" type="reset"> Reset</button>
  </div>
</form>
  </div>



@endsection
