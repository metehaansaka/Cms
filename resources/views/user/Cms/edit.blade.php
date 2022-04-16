@extends('layouts.user-base')
@section('javascripts')
  <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script>
        CKEDITOR.replace( 'contents',{
        height: 450,
      	filebrowserBrowseUrl: '{{ asset('assets/admin/ckeditor/ckfinder/ckfinder.html') }}',
      	filebrowserUploadUrl: '{{ asset('assets/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}'
      });

    </script>
@endsection
@section('head')

@endsection

@section('yeni_ekle')

@endsection

@section('content')


  <div class="card">
  <form class="" action="" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-header">
    <div class="row">
      <div class="col-12 col-md-6 text-left d-flex align-items-center">
        <strong class="my-auto d-block">{{ Route::currentRouteName() }}</strong>
      </div>
      <div class="col-12 col-md-6 text-right">
        <strong> <a href="{{ route('user.CMS Yönetimi',['id'=>$category->parent_id]) }}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Geri</a></strong>
      </div>
    </div>

  </div>
  <div class="card-body">

  <div class="form-group">
  <label for="input1">Başlık</label>
  <input class="form-control" id="input1" name="name" type="text" value="{{ $category_language->name }}" placeholder="Başlık" required>
  </div>

  <div class="form-group">
  <label for="input2">Sıra</label>
  <input class="form-control" id="input2" name="sorted" type="number" placeholder="Sıra" value="{{ $category->sorted }}" required>
  </div>

  <div class="form-group">
  <label for="input3">Harici URL</label>
  <input class="form-control" id="input3" name="url" type="text" placeholder="URL" value="{{ $category->url }}">
  </div>

  <div class="form-group">
  <label for="input4">Kategori Türü</label>
  <select class="form-control" id="input4" name="category" required>
    @foreach ($kategoriler as $key => $value)
      <option value="{{ $value->id }}" @if ($category->block_id == $value->id) selected @endif>{{ $value->name }}</option>
    @endforeach
 </select>
  </div>

  <div class="form-group">
  <div class="d-flex flex-row bd-highlight mb-3">
    <div class="p-2 bd-highlight">
      <div class="ml-1 custom-control custom-switch mb-3">
      <input type="checkbox" class="custom-control-input" name="top_menu" value="1" id="customSwitch1" @if ($category->top_menu == 1) checked @endif>
      <label class="custom-control-label" for="customSwitch1">Üst Menüde Göster?</label>
      </div>
    </div>
    <div class="p-2 bd-highlight">
      <div class="ml-1 custom-control custom-switch mb-3">
      <input type="checkbox" class="custom-control-input" id="customSwitch2" name="home_page" value="1" @if ($category->home_page == 1) checked @endif>
      <label class="custom-control-label" for="customSwitch2">Anasayfada Göster?</label>
      </div>
    </div>
  </div>
  </div>

  <div class="form-group">
  <label for="input7">Durumu</label>
  <select class="custom-select mb-3" id="input7" name="status">
    <option value="1" @if ($category->status == 1) selected @endif>Aktif</option>
    <option value="0" @if ($category->status == 0) selected @endif>Pasif</option>
  </select>
  </div>

  <div class="form-group">
  <label for="input8">Form Seçiniz</label>
  <select class="custom-select mb-3" id="input8" name="form_id">
    <option value="0" selected>-- Form Seç --</option>
    @foreach ($forms as $key => $form)
      <option value="{{ $form->id }}" @if ($category->form_id == $form->id) selected @endif>{{ $form->id }} - {{ $form->name }}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group">
    <label for="input9">Özet</label>
    <textarea class="form-control" id="input9" rows="3" placeholder="Özet" name="description">{!! $category_language->description !!}</textarea>
  </div>

  <div class="form-group">
    <label for="contents">İçerik</label>
    <textarea name="contents" id="contents">{!! $category_language->contents !!}</textarea>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-12">
        <label>Tüm Dillerde Ortak Resimler / Dosyalar :</label>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile1" name="category_image">
          <label class="custom-file-label" for="customFile1">Resim / Dosya 1 (max:5MB)</label>
        </div>
        @if ($category->image)
        <br>
        <img src="{{ asset('uploads/'.$category->image) }}" class="img-fluid my-2">
        <br>
        <a href="{{ route('user.Dosya Sil',['id' => $category->id,'db' => 'c','section' => 'image']) }}" class="btn btn-danger">Sil</a>
        @endif
      </div>
      <div class="col-lg-4">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile2" name="category_image2">
          <label class="custom-file-label" for="customFile2">Resim / Dosya 2 (max:5MB)</label>
        </div>
        @if ($category->image2)
        <br>
        <img src="{{ asset('uploads/'.$category->image2) }}" class="img-fluid my-2">
        <br>
        <a href="{{ route('user.Dosya Sil',['id' => $category->id,'db' => 'c','section' => 'image2']) }}" class="btn btn-danger">Sil</a>
        @endif
      </div>
      <div class="col-lg-4">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile3" name="category_image3">
          <label class="custom-file-label" for="customFile3">Resim / Dosya 3 (max:5MB)</label>
        </div>
        @if ($category->image3)
        <br>
        <img src="{{ asset('uploads/'.$category->image3) }}" class="img-fluid my-2">
        <br>
        <a href="{{ route('user.Dosya Sil',['id' => $category->id,'db' => 'c','section' => 'image3']) }}" class="btn btn-danger">Sil</a>
        @endif
      </div>
    </div>

  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-12">
        <label>{{ session('lang_name') }} Diline Ait Resimler / Dosyalar :</label>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile4" name="language_image">
          <label class="custom-file-label" for="customFile4">{{ session('lang_name') }} Resim / Dosya 1 (max:5MB)</label>
        </div>
        @if ($category_language->image != null)
        <br>
        <img src="{{ asset('uploads/'.$category_language->image) }}" class="img-fluid my-2">
        <br>
        <a href="{{ route('user.Dosya Sil',['id' => $category_language->id,'db' => 'cl','section' => 'image']) }}" class="btn btn-danger">Sil</a>
        @endif
      </div>
      <div class="col-lg-4">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile5" name="language_image2">
          <label class="custom-file-label" for="customFile5">{{ session('lang_name') }} Resim / Dosya 2 (max:5MB)</label>
        </div>
        @if ($category_language->image2)
        <br>
        <img src="{{ asset('uploads/'.$category_language->image2) }}" class="img-fluid my-2">
        <br>
        <a href="{{ route('user.Dosya Sil',['id' => $category_language->id,'db' => 'cl','section' => 'image2']) }}" class="btn btn-danger">Sil</a>
        @endif
      </div>
      <div class="col-lg-4">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile6" name="language_image3">
          <label class="custom-file-label" for="customFile6">{{ session('lang_name') }} Resim / Dosya 3 (max:5MB)</label>
        </div>
        @if ($category_language->image3)
        <br>
        <img src="{{ asset('uploads/'.$category_language->image3) }}" class="img-fluid my-2">
        <br>
        <a href="{{ route('user.Dosya Sil',['id' => $category_language->id,'db' => 'cl','section' => 'image3']) }}" class="btn btn-danger">Sil</a>
        @endif
      </div>
    </div>

  </div>

  <div class="form-group mt-5">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
        <h3><strong>Seo Ayarları</strong></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <div class="form-group">
          <label for="input11">Seo Link</label>
          <input type="text" class="form-control" id="input11" placeholder="Seo Link" name="seo_link" value="@if ($category->url){{ $category->url }}@else{{ $taxonomy->slug }}@endif" @if ($category->url) disabled @endif>
          </div>
      </div>
      <div class="col-12">
          <div class="form-group">
          <label for="input12">Seo Başlık</label>
          <input type="text" class="form-control" id="input12" placeholder="Seo Başlık" name="seo_title" value="{{ $category_language->seo_title }}">
          </div>
      </div>
      <div class="col-12">
          <div class="form-group">
          <label for="input13">Seo Açıklama</label>
          <textarea class="form-control" id="input13" rows="2" placeholder="Seo Açıklama" name="seo_description" value="{{ $category_language->seo_description }}"></textarea>
          </div>
      </div>
      <div class="col-12">
          <div class="form-group">
          <label for="input14">Seo Anahtar Kelime</label>
          <input type="text" class="form-control" id="input14" placeholder="Seo Anahtar Kelime" name="seo_keywords" value="{{ $category_language->seo_keywords }}">
          </div>
      </div>
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
