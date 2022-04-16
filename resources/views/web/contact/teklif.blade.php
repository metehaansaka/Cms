@extends('layouts.web_base')
@section('title',$pages_language->seo_title)
@section('title',$pages_language->seo_title)
@section('description',$pages_language->seo_description)
@section('keywords',$pages_language->seo_keywords)
@section('head')
    <style>
        #label-dosya{
            cursor: pointer;
            text-decoration: underline;
            margin: 5px 0px 30px 20px;
        }
        #label-dosya:hover{
            color: #FF4328;
        }
    </style>
@endsection
@section('content')
    <section class="contact-section sec-pad">
        <div class="thm-container">
            <div class="row">
                @if ($message = \Illuminate\Support\Facades\Session::get('error'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-content">
                        <div class="title">
                            <h2>{{getFormLanguage(7,$language_slug)->description}}</h2>
                        </div><!-- /.title -->
                        <form id="contact-form" name="contact-form" action="{{ route('contact.store2') }}"
                              method="POST" class="contact-form" >
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder="{{ getFormValues(1,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="{{ getFormValues(2,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" placeholder="{{ getFormValues(7,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="job" placeholder="{{ getFormValues(8,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="adet" placeholder="{{ getFormValues(9,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="ebat" placeholder="{{ getFormValues(10,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="sayfa" placeholder="{{ getFormValues(11,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="kagit" placeholder="{{ getFormValues(12,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="kapak" placeholder="{{ getFormValues(13,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="yan" placeholder="{{ getFormValues(14,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="ic_baski" placeholder="{{ getFormValues(15,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="kapak_baski" placeholder="{{ getFormValues(16,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="yan_kagit" placeholder="{{ getFormValues(17,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="laminasyon" placeholder="{{ getFormValues(18,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="lak" placeholder="{{ getFormValues(19,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="cilt" placeholder="{{ getFormValues(20,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="mukavva" placeholder="{{ getFormValues(21,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="diger" placeholder="{{ getFormValues(22,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="ambalaj" placeholder="{{ getFormValues(23,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="sevkiyat" placeholder="{{ getFormValues(24,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="odeme" placeholder="{{ getFormValues(25,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input style="padding-right: 30px;" type="text" onfocus="(this.type='date')" name="teslim" placeholder="{{ getFormValues(26,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <button type="submit" class="thm-btn yellow-bg">{{getLanguage('gonder',$language_slug)}}</button>
                            <div class="form-result"></div><!-- /.form-result -->
                        </form>
                    </div><!-- /.contact-form-content -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

            <div style="margin-top: 80px" class="row">
                <div class="col-12">
                    <div class="contact-form-content">
                        <div class="title">
                            <h2>{{getFormLanguage(8,$language_slug)->description}}</h2>
                        </div><!-- /.title -->
                        <form id="contact-form" name="contact-form" action="{{ route('contact.store3') }}"
                              method="POST" class="contact-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder="{{ getFormValues(1,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="{{ getFormValues(2,$language_slug)->name }}" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" placeholder="{{ getFormValues(7,$language_slug)->name }}" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dosya" id="label-dosya">
                                        Dosya Seç
                                    </label>
                                    <input
                                        type="file"
                                        id="dosya"
                                        name="dosya"
                                        className="become-upload"
                                        style="display: none"
                                    />
                                </div>
                            </div>
                            <button type="submit" class="thm-btn yellow-bg">{{getLanguage('gonder',$language_slug)}}</button>
                            <div class="form-result"></div><!-- /.form-result -->
                        </form>
                    </div><!-- /.contact-form-content -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.contact-section -->

@endsection
