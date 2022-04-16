@extends('layouts.admin-base')
@section('javascripts')
  <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script>
        CKEDITOR.replace( 'contents',{
        height: 450,
      	filebrowserBrowseUrl: '{{ asset('assets/admin/ckeditor/ckfinder/ckfinder.html') }}',
      	filebrowserUploadUrl: '{{ asset('assets/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}'
      });

      $(function() {
        $("#addOzel").click(function(){
          var cloned = $(".ozel_alan").eq(0).clone();
          cloned.find("label").attr("for","ozel_alan-"+$(".ozel_alan").length);
          cloned.find("input").attr("value","").val("").last().attr("id","ozel_alan-"+$(".ozel_alan").length).attr("name","ozelalan[]");
          cloned.append('<div onclick="remove_special(this);" class="remove_special"> <i class="fas fa-trash-alt"></i> </div>');
          cloned.insertAfter(".ozel_alan:last");
        });

      });

      function remove_special(ths){
        $(ths).parent().remove();
      }

    </script>
@endsection
@section('head')

@endsection

@section('ContentHeader')
  @if ($parent_id > 0)
    <div><a href="{{ route('CMS Yönetimi',['id'=>$parent_id]) }}" style="white-space: nowrap;">{{ getCategoryLanguage($parent_id,session('lang_slug'))->name }}</a></div>
    <div class="mx-2"><i class="fas fa-long-arrow-alt-down"></i></div>
  @endif
@endsection

@section('yeni_ekle')
<strong> <a href="{{ route('CMS Yönetimi',['id'=>$parent_id]) }}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Geri</a></strong>
@endsection

@section('content')

  <div class="card">
  <form class="" action="" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-header">
    <div class="row">
      <div class="text-left col-12 col-md-6 d-flex align-items-center">
        <strong class="my-auto d-block">{{ Route::currentRouteName() }}</strong>
      </div>
      <div class="text-right col-12 col-md-6">

      </div>
    </div>
  </div>
  <div class="card-body">
  <div class="row">

    <div class="col-12 col-md-6">
      <div class="form-group">
      <label for="input1">Başlık</label>
      <input class="form-control" id="input1" name="name" type="text" placeholder="Başlık" required>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="form-group">
      <label for="input2">Sıra</label>
      <input class="form-control" id="input2" name="sorted" type="number" placeholder="Sıra" value="999" required>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="form-group">
      <label for="input4">Kategori Türü</label>
      <select class="form-control" id="input4" name="category" required>
        @foreach ($kategoriler as $key => $value)
          <option value="{{ $value->id }}">{{ $value->name }}</option>
        @endforeach
     </select>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="form-group">
      <label for="input3">Harici URL</label>
      <small>( İçerik ID'si girilebilir )</small>
      <input class="form-control" id="input3" name="url" type="text" placeholder="URL veya ID">
      </div>
    </div>

    <div class="col-12 col-md-12">
      <div class="form-group">
      <div class="flex-row mb-0 d-flex bd-highlight">
        <div class="p-2 bd-highlight">
          <div class="mb-3 ml-1 custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" name="top_menu" value="1" id="customSwitch1">
          <label class="custom-control-label" for="customSwitch1">Üst Menüde Göster?</label>
          </div>
        </div>
        <div class="p-2 bd-highlight">
          <div class="mb-3 ml-1 custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="customSwitch2" name="home_page" value="1">
          <label class="custom-control-label" for="customSwitch2">Anasayfada Göster?</label>
          </div>
        </div>
      </div>
      </div>
    </div>

  </div>


  <div class="form-group">
  <label for="input7">Durumu</label>
  <select class="mb-3 custom-select" id="input7" name="status">
    <option value="1" selected>Aktif</option>
    <option value="0">Pasif</option>
  </select>
  </div>

  <div class="form-group">
  <label for="input8">Form Seçiniz</label>
  <select class="mb-3 custom-select" id="input8" name="form_id">
    <option value="0" selected>-- Form Seç --</option>
    @foreach ($forms as $key => $form)
      <option value="{{ $form->id }}">{{ $form->id }} - {{ $form->name }}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group">
    <label for="input9">Özet</label>
    <textarea class="form-control" id="input9" rows="3" placeholder="Özet" name="description"></textarea>
  </div>

  <div class="form-group">
    <label for="contents">İçerik</label>
    <textarea name="contents" id="contents"></textarea>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-12">
        <label>Tüm Dillerde Ortak Resimler / Dosyalar :</label>
      </div>
    </div>
    <div class="row category_image_field">
      <div class="mb-2 col-lg-4">
        <div class="float-left custom-file" style="width:94%;">
          <input type="file" class="custom-file-input" id="customFile1" name="category_image">
          <label class="custom-file-label" for="customFile1">Resim / Dosya 1 (max:5MB)</label>
        </div>

          <!-- Modal -->
          <div class="modal fade" id="img-info-modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Resim Bilgileri</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                  <label>Resim Adı (Opsiyonel) :</label>
                  <input type="text" class="form-control" name="ci_info[name]">
                </div>

                <div class="form-group">
                  <label>Resim Açıklama :</label>
                  <input type="text" class="form-control" name="ci_info[desc]">
                </div>

                <div class="form-group">
                  <label>Alt Etiketi :</label>
                  <input type="text" class="form-control" name="ci_info[alt]">
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Kaydet</button>
                </div>
              </div>
            </div>
          </div>

        <div class="float-left pl-1 img-info h-100 d-flex align-items-center" style="width:6%;" field-id="1" onclick="return modalshow(this);">
          <i class="fas fa-edit"></i>
        </div>
      </div>

      <div class="mb-2 col-lg-4">
        <div class="float-left custom-file" style="width:94%;">
          <input type="file" class="custom-file-input" id="customFile1" name="category_image2">
          <label class="custom-file-label" for="customFile1">Resim / Dosya 2 (max:5MB)</label>
        </div>

          <!-- Modal -->
          <div class="modal fade" id="img-info-modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Resim Bilgileri</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                  <label>Resim Adı (Opsiyonel) :</label>
                  <input type="text" class="form-control" name="ci2_info[name]">
                </div>

                <div class="form-group">
                  <label>Resim Açıklama :</label>
                  <input type="text" class="form-control" name="ci2_info[desc]">
                </div>

                <div class="form-group">
                  <label>Alt Etiketi :</label>
                  <input type="text" class="form-control" name="ci2_info[alt]">
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Kaydet</button>
                </div>
              </div>
            </div>
          </div>

        <div class="float-left pl-1 img-info h-100 d-flex align-items-center" style="width:6%;" field-id="2" onclick="return modalshow(this);">
          <i class="fas fa-edit"></i>
        </div>
      </div>

      <div class="mb-2 col-lg-4">
        <div class="float-left custom-file" style="width:94%;">
          <input type="file" class="custom-file-input" id="customFile1" name="category_image3">
          <label class="custom-file-label" for="customFile1">Resim / Dosya 3 (max:5MB)</label>
        </div>

          <!-- Modal -->
          <div class="modal fade" id="img-info-modal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Resim Bilgileri</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                  <label>Resim Adı (Opsiyonel) :</label>
                  <input type="text" class="form-control" name="ci3_info[name]">
                </div>

                <div class="form-group">
                  <label>Resim Açıklama :</label>
                  <input type="text" class="form-control" name="ci3_info[desc]">
                </div>

                <div class="form-group">
                  <label>Alt Etiketi :</label>
                  <input type="text" class="form-control" name="ci3_info[alt]">
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Kaydet</button>
                </div>
              </div>
            </div>
          </div>

        <div class="float-left pl-1 img-info h-100 d-flex align-items-center" style="width:6%;" field-id="3" onclick="return modalshow(this);">
          <i class="fas fa-edit"></i>
        </div>
      </div>

    </div>

  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-12">
        <label>{{ session('lang_name') }} Diline Ait Resimler / Dosyalar :</label>
      </div>
    </div>
    <div class="row category_image_field2">
      <div class="mb-2 col-lg-4">
        <div class="float-left custom-file" style="width:94%;">
          <input type="file" class="custom-file-input" id="customFile4" name="language_image">
          <label class="custom-file-label" for="customFile4">{{ session('lang_name') }} Resim / Dosya 1 (max:5MB)</label>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="img-info-modal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resim Bilgileri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <div class="form-group">
                <label>Resim Adı (Opsiyonel) :</label>
                <input type="text" class="form-control" name="cl_info[name]">
              </div>

              <div class="form-group">
                <label>Resim Açıklama :</label>
                <input type="text" class="form-control" name="cl_info[desc]">
              </div>

              <div class="form-group">
                <label>Alt Etiketi :</label>
                <input type="text" class="form-control" name="cl_info[alt]">
              </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kaydet</button>
              </div>
            </div>
          </div>
        </div>

      <div class="float-left pl-1 img-info h-100 d-flex align-items-center" style="width:6%;" field-id="4" onclick="return modalshow(this);">
        <i class="fas fa-edit"></i>
      </div>
      </div>
      <div class="col-lg-4">
        <div class="float-left custom-file" style="width:94%;">
          <input type="file" class="custom-file-input" id="customFile4" name="language_image2">
          <label class="custom-file-label" for="customFile4">{{ session('lang_name') }} Resim / Dosya 2 (max:5MB)</label>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="img-info-modal-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resim Bilgileri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <div class="form-group">
                <label>Resim Adı (Opsiyonel) :</label>
                <input type="text" class="form-control" name="cl_info2[name]">
              </div>

              <div class="form-group">
                <label>Resim Açıklama :</label>
                <input type="text" class="form-control" name="cl_info2[desc]">
              </div>

              <div class="form-group">
                <label>Alt Etiketi :</label>
                <input type="text" class="form-control" name="cl_info2[alt]">
              </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kaydet</button>
              </div>
            </div>
          </div>
        </div>

      <div class="float-left pl-1 img-info h-100 d-flex align-items-center" style="width:6%;" field-id="5" onclick="return modalshow(this);">
        <i class="fas fa-edit"></i>
      </div>
      </div>
      <div class="col-lg-4">
        <div class="float-left custom-file" style="width:94%;">
          <input type="file" class="custom-file-input" id="customFile4" name="language_image3">
          <label class="custom-file-label" for="customFile4">{{ session('lang_name') }} Resim / Dosya 3 (max:5MB)</label>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="img-info-modal-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resim Bilgileri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <div class="form-group">
                <label>Resim Adı (Opsiyonel) :</label>
                <input type="text" class="form-control" name="cl_info3[name]">
              </div>

              <div class="form-group">
                <label>Resim Açıklama :</label>
                <input type="text" class="form-control" name="cl_info3[desc]">
              </div>

              <div class="form-group">
                <label>Alt Etiketi :</label>
                <input type="text" class="form-control" name="cl_info3[alt]">
              </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kaydet</button>
              </div>
            </div>
          </div>
        </div>

      <div class="float-left pl-1 img-info h-100 d-flex align-items-center" style="width:6%;" field-id="6" onclick="return modalshow(this);">
        <i class="fas fa-edit"></i>
      </div>
      </div>
    </div>

  </div>

  <div class="form-group row">
    <div class="mb-3 col-12 col-md-3 ozel_alan">
        <label for="ozel_alan">Özel Alan <i class="fas fa-palette colorp"></i></label>
        <input class="form-control" id="ozel_alan" name="ozelalan[]" type="text" placeholder="Özel Alan">
    </div>
    <div class="mb-3 col-12 col-md-3 d-flex align-items-end">
      <i class="fas fa-plus-square" id="addOzel" style="color:green; font-size:34px; cursor:pointer;"></i>
    </div>
  </div>

  <div class="mt-5 form-group">
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
          <input type="text" class="form-control" id="input11" placeholder="Seo Link" name="seo_link">
          </div>
      </div>
      <div class="col-12">
          <div class="form-group">
          <label for="input12">Seo Başlık</label>
          <input type="text" class="form-control" id="input12" placeholder="Seo Başlık" name="seo_title">
          </div>
      </div>
      <div class="col-12">
          <div class="form-group">
          <label for="input13">Seo Açıklama</label>
          <textarea class="form-control" id="input13" rows="2" placeholder="Seo Açıklama" name="seo_description"></textarea>
          </div>
      </div>
      <div class="col-12">
          <div class="form-group">
          <label for="input14">Seo Anahtar Kelime</label>
          <input type="text" class="form-control" id="input14" placeholder="Seo Anahtar Kelime" name="seo_keywords">
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
