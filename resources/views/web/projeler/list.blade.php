
@extends('layouts.web_base')
@section('title',$pages_language->seo_title)
@section('description',$pages_language->seo_description)
@section('keywords',$pages_language->seo_keywords)
@section('content')

    <section class="page-title">
        <div class="thm-container">
            <h3>{{$pages_language->name}}</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.page-title -->


    <section class="recent-projects project-page sec-pad">
        <div class="thm-container">
            <div class="row masonary-layout">
                @foreach(getCategoryByParentWithPagination(6,102,$language_slug) as $key => $value)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img style="max-width: 100%; object-fit: cover" style="max-width: 100%; object-fit: cover" style="max-width: 100%; object-fit: cover" style="max-width: 100%; object-fit: cover" src="{{asset('/uploads/' . $value->image)}}" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a href="{{taxonomy($value->id,$language_slug)}}" class="more"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <a href="{{taxonomy($value->id,$language_slug)}}"><h3>{{$value->name}}</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
            <nav aria-label="Page navigation " class="text-center">
                {{getCategoryByParentWithPagination(6,102,$language_slug)->links()}}
            </nav>
        </div><!-- /.thm-container -->
    </section><!-- /.recent-projects -->


@endsection


