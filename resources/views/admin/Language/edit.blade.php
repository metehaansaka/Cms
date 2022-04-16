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
        copy.find("input").eq(0).attr('name','key[]').attr('value','');
        copy.find("input").eq(1).attr('name','deger[]').attr('value','');

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
  <input class="form-control" id="input1" name="dil_adi" type="text" placeholder="Dil Adı" value="{{ $language->name }}">
  </div>

  <div class="form-group">
  <label for="input2">Dil Ön Eki</label>
  <input class="form-control" id="input2" name="on_ek" type="text" placeholder="Dil Ön Eki" value="{{ $language->slug }}">
  </div>

  <div class="custom-file col-6">
  <input type="file" class="custom-file-input" id="customFile" name="bayrak">
  <label class="custom-file-label" for="customFile">Bayrak</label>
  </div>
  @if ($language->image)
    <div class="clearfix"></div>
    <div class="col-6 mt-2 pl-0">
         <img src="{{ asset("uploads/$language->image") }}" style="width:25%; height:auto;"><br>
         <span class="text-left">
           <a class="badge badge-danger" href="{{ route('language_delete',['id' => $language->id,'img' => true]) }}">Resmi Sil</a>
         </span>
    </div>
  @endif


  <div class="clearfix"></div>
  <div class="row mt-5">
    <div class="col-4 text-left">
      <button class="btn btn-success" id="add-new-key" type="button">Yeni Key Ekle</button>
    </div>
  </div>
  @foreach ($language_keys as $key => $value)

    <div class="row mt-2" @if ($key == 0) id="KeyDegerBlock" @endif>
      <div class="form-group col-6">
      <label for="key1">Key</label>
      <input class="form-control" id="key1" name="key[{{ $value->id }}]" type="text" placeholder="Key" value="{{ $value->language_key }}">
      </div>
      <div class="form-group col-6">
      <label for="deger1">Değer</label>
      <input class="form-control" id="deger1" name="deger[{{ $value->id }}]" type="text" placeholder="Değer" value="{{ $value->language_value }}">
      </div>
    </div>

  @endforeach


  </div>

  <div class="card-footer">
  <button class="btn btn-md btn-primary" type="submit"> Kaydet</button>
  <button class="btn btn-md btn-danger" type="reset"> Reset</button>
  </div>
</form>
  </div>



@endsection
