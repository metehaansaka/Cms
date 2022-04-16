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

    <section class="project-details-page sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="project-details-content">
                       {!! $pages_language->contents !!}
                    </div><!-- /.project-details-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="img-box-wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                <img style="max-width: 100%; object-fit: cover" src="{{asset('/uploads/' . getCategory($pages_language->category_id)->image)}}" alt="Awesome Image"/>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.img-box-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.project-details-page -->

@endsection
