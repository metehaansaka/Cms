@extends('layouts.admin-base')
@section('javascripts')
<script>
    $(function(){
        $(document).on('keyup','.widget .editable',function(){
            var name = "special["+$(this).text().trim()+"]";
            console.log(name);
            $(this).parent().find("input").attr("name",name);
        })

        $(document).on('click','.delete-duplicated',function(){
            $(this).parent().parent().remove();
        })

        $(".duplicate-widget").click(function(){
            var clone = $(".widget").eq(0).clone();
            clone.find("input").val("").attr("name","special[]");
            clone.find(".editable").text("widget");
            var dw = clone.find(".duplicate-widget");
            dw.after('<i class="fas fa-minus-circle delete-duplicated"></i>')
            dw.remove()
            clone.insertAfter($(".widget").last());
        });
    });
</script>
@endsection
@section('content')

<div class="row">
  <div class="col-12">
  <div class="card">
  <div class="card-header"><strong>Genel</strong> <small>Ayarlar</small></div>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="card-body">

    @csrf
  <div class="form-group">

  <div class="custom-file">
  <input type="file" class="custom-file-input" id="logo" name="logo">
  <label class="custom-file-label" for="logo">Logo</label>
  </div>
  @if ($settings->logo)
    <img src="{{ asset('uploads/'.$settings->logo) }}" width="25%" class="mt-1 mb-2">
    <h6 class="text-center w-25"> <a href="{{ route('settings_delete',['case' => 'logo']) }}" style="color:red;">Logo Sil</a> </h6>
  @endif
  </div>
  <div class="form-group">

  <div class="custom-file">
  <input type="file" class="custom-file-input" id="footerlogo" name="footerlogo">
  <label class="custom-file-label" for="footerlogo">Favicon</label>
  </div>
  @if ($settings->footer_logo)
    <img src="{{ asset('uploads/'.$settings->footer_logo) }}" width="25%" class="mt-1 mb-2">
    <h6 class="text-center w-25"> <a href="{{ route('settings_delete',['case' => 'footer_logo']) }}" style="color:red;">Footer Logo Sil</a> </h6>
  @endif
  </div>

  @if (json_decode($settings->special_fields,true) != null)
    @foreach (json_decode($settings->special_fields,true) as $key => $item)
        <div class="my-4 row widget">
            <div class="col-9 input-group">
                <span class="input-group-text rounded-0 rounded-start editable" contenteditable="true">
                    {{ $key }}
                </span>
                <input type="text" class="form-control" name="special[{{ $key }}]" value="{{ $item }}">
            </div>
            <div class="p-0 text-left col-3 d-flex align-items-start" style="font-size:34px; cursor: pointer;">
                @if($loop->first)
                    <i class="fas fa-plus-square duplicate-widget"></i>
                @else
                    <i class="fas fa-minus-circle delete-duplicated"></i>
                @endif
            </div>
        </div>
    @endforeach
  @else
    <div class="my-4 row widget">
    <div class="col-9 input-group">
        <span class="input-group-text rounded-0 rounded-start editable" contenteditable="true">
            widget
        </span>
        <input type="text" class="form-control" name="special[widget]">
    </div>
    <div class="p-0 text-left col-3 d-flex align-items-start" style="font-size:34px; cursor: pointer;">
        <i class="fas fa-plus-square duplicate-widget"></i>
    </div>
    </div>
  @endif

  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="default_lang" {{ $settings->default_lang == 1 ? 'checked' : null  }}>
    <label class="custom-control-label" for="customSwitch1">{{ $lang_name }}-{{ $slug }} Dilini Varsayılan Dil Yap</label>
  </div>


  </div>
  <div class="card-footer">
  <button class="btn btn-md btn-primary" type="submit"> Kaydet</button>
  <button class="btn btn-md btn-danger" type="reset"> Reset</button>
  </div>
  </form>
  </div>
  </div>
</div>

@endsection
