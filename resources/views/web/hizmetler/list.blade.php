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



    <section class="service-style-three sec-pad">
        <div class="thm-container">
            <div class="row masonary-layout">
                @foreach(getCategoryByParentWithPagination(6,60,$language_slug) as $key => $value)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-three">
                        <div class="img-box">
                            <img style="max-width: 100%; object-fit:cover" style="height: 271px; object-fit: cover" src="{{asset('/uploads/'.getCategory($value->id)->image)}}" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="{{taxonomy($value->id,$language_slug)}}"><h3>{{getCategoryLanguage($value->id,$language_slug)->name}}</h3></a>
                            <div class="meta-info">

                            </div><!-- /.meta-info -->
                            {{getCategoryLanguage($value->id,$language_slug)->description}}
                            <a href="{{taxonomy($value->id,$language_slug)}}" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-service-three -->
                </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
            <nav aria-label="Page navigation" class="text-center">
                {{getCategoryByParentWithPagination(6,60,$language_slug)->links()}}
            </nav>
        </div><!-- /.thm-container -->
    </section><!-- /.all-services -->

@endsection
