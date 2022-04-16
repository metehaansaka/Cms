@extends('layouts.web_base')
@section('title',$pages_language->seo_title)
@section('title',$pages_language->seo_title)
@section('description',$pages_language->seo_description)
@section('keywords',$pages_language->seo_keywords)
@section('content')
    <iframe src="{{jsonDecoder(getCategoryLanguage(68,$language_slug)->special_fields,0)}}" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                <div class="col-md-8">
                    <div class="contact-form-content">
                        <div class="title">
                            <span>{{getFormLanguage(1,$language_slug)->name}}</span>
                            <h2>{{getFormLanguage(1,$language_slug)->description}}</h2>
                        </div><!-- /.title -->
                        <form id="contact-form" name="contact-form" action="{{ route('contact.store') }}"
                              method="POST" class="contact-form" >
                            @csrf
                            <input type="text" name="name" placeholder="{{ getFormValues(1,$language_slug)->name }}" required />
                            <input type="email" name="email" placeholder="{{ getFormValues(2,$language_slug)->name }}" required />
                            <textarea name="message" placeholder="{{ getFormValues(3,$language_slug)->name }}"></textarea>
                            <button type="submit" class="thm-btn yellow-bg">{{getLanguage('gonder',$language_slug)}}</button>
                            <div class="form-result"></div><!-- /.form-result -->
                        </form>
                    </div><!-- /.contact-form-content -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="contact-info text-center">
                        <div class="title text-center">
                            <span>{{getLanguage('iletisim_bilgisi',$language_slug)}}</span>
                            <h2>{{getLanguage('detaylar',$language_slug)}}</h2>
                        </div><!-- /.title -->
                        <div class="single-contact-info">
                            <h4>{{getLanguage('adres',$language_slug)}}</h4>
                            <p > {{ jsonDecoder(Settings($language_slug)->special_fields, 'address') }}</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <h4>{{getLanguage('telefon',$language_slug)}}</h4>
                            <p> {{ jsonDecoder(Settings($language_slug)->special_fields, 'phone') }}</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <h4>{{getLanguage('e-posta',$language_slug)}}</h4>
                            <p> {{ jsonDecoder(Settings($language_slug)->special_fields, 'e-mail') }}</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <h4>{{getLanguage('takip',$language_slug)}}</h4>
                            <div class="social">
                                <a href=" {{ jsonDecoder(Settings($language_slug)->special_fields, 'twitter') }}" class="fab fa-twitter hvr-pulse"></a><!--
                             --><a href=" {{ jsonDecoder(Settings($language_slug)->special_fields, 'pinterest') }}" class="fab fa-pinterest hvr-pulse"></a><!--
                             --><a href=" {{ jsonDecoder(Settings($language_slug)->special_fields, 'facebook') }}" class="fab fa-facebook-f hvr-pulse"></a><!--
                             --><a href=" {{ jsonDecoder(Settings($language_slug)->special_fields, 'youtube') }}" class="fab fa-youtube hvr-pulse"></a>
                            </div><!-- /.social -->
                        </div><!-- /.single-contact-info -->
                    </div><!-- /.contact-info -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.contact-section -->

@endsection
