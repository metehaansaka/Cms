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

    <section class="about-section sec-pad">
        <div class="thm-container">
            <div class="row masonary-layout">
                @foreach(getCategoryByParent(59,$language_slug) as $value)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-about">
                        <div class="img-box">
                            <img style="max-width: 100%; object-fit: cover" src="{{asset('/uploads/' . $value->image)}}" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="#"><h3>{{$value->name}}</h3></a>
                            {!! $value->contents !!}
                        </div><!-- /.text-box -->
                    </div><!-- /.single-about -->
                </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.about-section -->

@endsection
