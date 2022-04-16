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

@section('yeni_ekle')
    <strong> <a href="{{ route('CMS Yönetimi',['id'=>$category->parent_id]) }}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Geri</a></strong>
@endsection

@section('ContentHeader')
    @if ($category->parent_id > 0)
        <div><a href="{{ route('CMS Yönetimi',['id'=>$category->parent_id]) }}" style="white-space: nowrap;">{{ getCategoryLanguage($category->parent_id,session('lang_slug'))->name }}</a></div>
        <div class="mx-2"><i class="fas fa-long-arrow-alt-right"></i></div>
    @endif
    <div><strong style="white-space: nowrap;">{{ $category_language->name }}</strong></div>
@endsection

@section('content')


    <div class="card">
        <form class="" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <div class="row">
                    <div class="text-left col-12 col-md-6 d-flex align-items-center">
                        <strong class="my-auto mr-2 d-block">{{ $category_language->name }}</strong> -
                        <strong class="my-auto ml-2 d-block">{{ Route::currentRouteName() }}</strong>
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
                            <input class="form-control" id="input1" name="name" type="text" value="{{ $category_language->name }}" placeholder="Başlık" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="input2">Sıra</label>
                            <input class="form-control" id="input2" name="sorted" type="number" placeholder="Sıra" value="{{ $category->sorted }}" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="input4">Kategori Türü</label>
                            <select class="form-control" id="input4" name="category" required>
                                @foreach ($kategoriler as $key => $value)
                                    <option value="{{ $value->id }}" @if ($category->block_id == $value->id) selected @endif>{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="input3">Harici URL</label>
                            <small>( İçerik ID'si girilebilir )</small>
                            <input class="form-control" id="input3" name="url" type="text" placeholder="URL veya ID" value="{{ $category->url }}">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <div class="flex-row mb-0 d-flex bd-highlight">
                                <div class="p-2 bd-highlight">
                                    <div class="mb-3 ml-1 custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="top_menu" value="1" id="customSwitch1" @if ($category->top_menu == 1) checked @endif>
                                        <label class="custom-control-label" for="customSwitch1">Üst Menüde Göster?</label>
                                    </div>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="mb-3 ml-1 custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch2" name="home_page" value="1" @if ($category->home_page == 1) checked @endif>
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
                        <option value="1" @if ($category->status == 1) selected @endif>Aktif</option>
                        <option value="0" @if ($category->status == 0) selected @endif>Pasif</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="input8">Form Seçiniz</label>
                    <select class="mb-3 custom-select" id="input8" name="form_id">
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left custom-file" style="width:94%;">
                                        <input type="file" class="custom-file-input" id="customFile1" name="category_image">
                                        <label class="custom-file-label" for="customFile1">Resim / Dosya 1 (max:60MB)</label>
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

                                                        <input type="text" class="form-control" name="ci_info[name]" value="{{ $category->image_info ? jsonDecoder($category->image_info,"image")["name"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Resim Açıklama :</label>
                                                        <input type="text" class="form-control" name="ci_info[desc]" value="{{ $category->image_info ?  jsonDecoder($category->image_info,"image")["desc"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Alt Etiketi :</label>
                                                        <input type="text" class="form-control" name="ci_info[alt]" value="{{ $category->image_info ?  jsonDecoder($category->image_info,"image")["alt"] : "" }}">
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
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    @if ($category->image)
                                        <br>
                                        @if (in_array(getExtensionOf($category->image),["mp4","webm","ogv"]))
                                            <video style="width:100%; height:auto;" autoplay muted loop>
                                                <source src="{{ asset('uploads/'.$category->image) }}" type="video/{{ Str::of(getExtensionOf($category->image))->replace('ogv','ogg') }}">
                                            </video>
                                        @else
                                            <img
                                                src="{{ getExtensionOf($category->image) == "txt" ? asset("assets/admin/img/json-file.png") : asset('uploads/'.$category->image) }}"
                                                class="my-2 img-fluid">
                                        @endif
                                        <br>
                                        <a href="{{ route('Dosya Sil',['id' => $category->id,'db' => 'c','section' => 'image']) }}" class="btn btn-danger">Sil</a>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left custom-file" style="width:94%;">
                                        <input type="file" class="custom-file-input" id="customFile2" name="category_image2">
                                        <label class="custom-file-label" for="customFile2">Resim / Dosya 2 (max:5MB)</label>
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
                                                        <input type="text" class="form-control" name="ci2_info[name]" value="{{ $category->image_info ? jsonDecoder($category->image_info,"image2")["name"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Resim Açıklama :</label>
                                                        <input type="text" class="form-control" name="ci2_info[desc]" value="{{$category->image_info ? jsonDecoder($category->image_info,"image2")["desc"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Alt Etiketi :</label>
                                                        <input type="text" class="form-control" name="ci2_info[alt]" value="{{ $category->image_info ? jsonDecoder($category->image_info,"image2")["alt"] : "" }}">
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
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @if ($category->image2)
                                        <br>
                                        @if (in_array(getExtensionOf($category->image2),["mp4","webm","ogv"]))
                                            <video style="width:100%; height:auto;" autoplay muted loop>
                                                <source src="{{ asset('uploads/'.$category->image2) }}" type="video/{{ Str::of(getExtensionOf($category->image2))->replace('ogv','ogg') }}">
                                            </video>
                                        @else
                                            <img src="{{ asset('uploads/'.$category->image2) }}" class="my-2 img-fluid">
                                        @endif
                                        <br>
                                        <a href="{{ route('Dosya Sil',['id' => $category->id,'db' => 'c','section' => 'image2']) }}" class="btn btn-danger">Sil</a>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left custom-file" style="width:94%;">
                                        <input type="file" class="custom-file-input" id="customFile3" name="category_image3">
                                        <label class="custom-file-label" for="customFile3">Resim / Dosya 3 (max:5MB)</label>
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
                                                        <input type="text" class="form-control" name="ci3_info[name]" value="{{ $category->image_info ? jsonDecoder($category->image_info,"image3")["name"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Resim Açıklama :</label>
                                                        <input type="text" class="form-control" name="ci3_info[desc]" value="{{ $category->image_info ? jsonDecoder($category->image_info,"image3")["desc"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Alt Etiketi :</label>
                                                        <input type="text" class="form-control" name="ci3_info[alt]" value="{{ $category->image_info ? jsonDecoder($category->image_info,"image3")["alt"] : "" }}">
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
                            <div class="row">
                                <div class="col-12">
                                    @if ($category->image3)
                                        <br>
                                        @if (in_array(getExtensionOf($category->image3),["mp4","webm","ogv"]))
                                            <video style="width:100%; height:auto;" autoplay muted loop>
                                                <source src="{{ asset('uploads/'.$category->image3) }}" type="video/{{ Str::of(getExtensionOf($category->image3))->replace('ogv','ogg') }}">
                                            </video>
                                        @else
                                            <img src="{{ asset('uploads/'.$category->image3) }}" class="my-2 img-fluid">
                                        @endif
                                        <br>
                                        <a href="{{ route('Dosya Sil',['id' => $category->id,'db' => 'c','section' => 'image3']) }}" class="btn btn-danger">Sil</a>
                                    @endif
                                </div>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left custom-file" style="width:94%;">
                                        <input type="file" class="custom-file-input" id="customFile4" name="language_image">
                                        <label class="custom-file-label" for="customFile4">{{ session('lang_name') }} Resim / Dosya 1 (max:60MB)</label>
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
                                                        <input type="text" class="form-control" name="cl_info[name]" value="{{ $category_language->image_info ? jsonDecoder($category_language->image_info,"image")["name"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Resim Açıklama :</label>
                                                        <input type="text" class="form-control" name="cl_info[desc]" value="{{ $category_language->image_info ? jsonDecoder($category_language->image_info,"image")["desc"] : ""  }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Alt Etiketi :</label>
                                                        <input type="text" class="form-control" name="cl_info[alt]" value="{{ $category_language->image_info ?  jsonDecoder($category_language->image_info,"image")["alt"] : ""  }}">
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
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @if ($category_language->image)
                                        <br>
                                        @if (in_array(getExtensionOf($category_language->image),["mp4","webm","ogv"]))
                                            <video style="width:100%; height:auto;" autoplay muted loop>
                                                <source src="{{ asset('uploads/'.$category_language->image) }}" type="video/{{ Str::of(getExtensionOf($category_language->image))->replace('ogv','ogg') }}">
                                            </video>
                                        @else
                                            <img
                                                src="{{ getExtensionOf($category_language->image) == "txt" ? asset("assets/admin/img/json-file.png") : asset('uploads/'.$category_language->image) }}"
                                                class="my-2 img-fluid">
                                        @endif
                                        <br>
                                        <a href="{{ route('Dosya Sil',['id' => $category_language->id,'db' => 'cl','section' => 'image']) }}" class="btn btn-danger">Sil</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left custom-file" style="width:94%;">
                                        <input type="file" class="custom-file-input" id="customFile5" name="language_image2">
                                        <label class="custom-file-label" for="customFile5">{{ session('lang_name') }} Resim / Dosya 2 (max:5MB)</label>
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
                                                        <input type="text" class="form-control" name="cl_info2[name]" value="{{$category_language->image_info ? jsonDecoder($category_language->image_info,"image2")["name"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Resim Açıklama :</label>
                                                        <input type="text" class="form-control" name="cl_info2[desc]" value="{{$category_language->image_info ? jsonDecoder($category_language->image_info,"image2")["desc"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Alt Etiketi :</label>
                                                        <input type="text" class="form-control" name="cl_info2[alt]" value="{{$category_language->image_info ? jsonDecoder($category_language->image_info,"image2")["alt"] : "" }}">
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
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @if ($category_language->image2)
                                        <br>
                                        <img src="{{ asset('uploads/'.$category_language->image2) }}" class="my-2 img-fluid">
                                        <br>
                                        <a href="{{ route('Dosya Sil',['id' => $category_language->id,'db' => 'cl','section' => 'image2']) }}" class="btn btn-danger">Sil</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left custom-file" style="width:94%;">
                                        <input type="file" class="custom-file-input" id="customFile6" name="language_image3">
                                        <label class="custom-file-label" for="customFile6">{{ session('lang_name') }} Resim / Dosya 3 (max:5MB)</label>
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
                                                        <input type="text" class="form-control" name="cl_info3[name]" value="{{ $category_language->image_info ? jsonDecoder($category_language->image_info,"image3")["name"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Resim Açıklama :</label>
                                                        <input type="text" class="form-control" name="cl_info3[desc]" value="{{ $category_language->image_info ? jsonDecoder($category_language->image_info,"image3")["desc"] : "" }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Alt Etiketi :</label>
                                                        <input type="text" class="form-control" name="cl_info3[alt]" value="{{ $category_language->image_info ? jsonDecoder($category_language->image_info,"image3")["alt"] : "" }}">
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
                            <div class="row">
                                <div class="col-12">
                                    @if ($category_language->image3)
                                        <br>
                                        <img src="{{ asset('uploads/'.$category_language->image3) }}" class="my-2 img-fluid">
                                        <br>
                                        <a href="{{ route('Dosya Sil',['id' => $category_language->id,'db' => 'cl','section' => 'image3']) }}" class="btn btn-danger">Sil</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group row">
                    @if (!empty($category_language->special_fields) and count(json_decode($category_language->special_fields,true)) > 0)

                        @foreach (json_decode($category_language->special_fields,true) as $key => $value)
                            <div class="mb-3 col-12 col-md-3 ozel_alan">
                                <label for="ozel_alan-{{ $key }}">Özel Alan <i class="fas fa-palette colorp"></i></label>
                                <input class="form-control" id="ozel_alan-{{ $key }}" name="ozelalan[]" type="text" placeholder="Özel Alan" value="{{ $value }}">
                                @if (!($loop->first))
                                    <div onclick="remove_special(this);" class="remove_special"> <i class="fas fa-trash-alt"></i> </div>
                                @endif
                            </div>
                        @endforeach

                    @else
                        <div class="mb-3 col-12 col-md-3 ozel_alan">
                            <label for="ozel_alan">Özel Alan <i class="fas fa-palette colorp"></i></label>
                            <input class="form-control" id="ozel_alan" name="ozelalan[]" type="text" placeholder="Özel Alan">
                        </div>
                    @endif

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
                                <textarea class="form-control" id="input13" rows="2" placeholder="Seo Açıklama" name="seo_description">{{ $category_language->seo_description }}</textarea>
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
