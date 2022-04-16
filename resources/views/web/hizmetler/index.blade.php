@extends('layouts.web_base')
@section('title',$pages_language->seo_title)
@section('title',$pages_language->seo_title)
@section('description',$pages_language->seo_description)
@section('keywords',$pages_language->seo_keywords)
@section('content')
    <section class="page-title">
        <div class="thm-container">
            <h3>{{$pages_language->name}}</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.page-title -->
    <section class="service-details-design-option sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col12">
                    <div class="single-service-details-design-option">
                        <div class="img-box">
                            <img style="max-width: 100%; object-fit: cover" src="{{('/uploads/' . getCategory($pages_language->category_id)->image)}}" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            {!! $pages_language->contents !!}
                        </div><!-- /.text-box -->
                    </div><!-- /.single-service-details-design-option -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.service-details-design-option -->

@endsection
