@extends('layouts.web_base')
@section('content')
    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach(getCategoryByParent(71, $language_slug) as $key => $value)
                <div class="{{$key == 0 ? 'item slide-1 active' : 'item slide'.$key}}"
                     style="background-image: url('/uploads/{{$value->image}}');background-position: left top;">

                    <div class="carousel-caption">
                        <div class="thm-container">
                            <div class="box valign-middle">
                                <div class="content ">
                                    <h3 data-animation="animated fadeInUp"
                                        style=" color : {{ jsonDecoder(getCategoryLanguage($value->id, $language_slug)->special_fields, 0) }}">{{$value->name}}</h3>
                                    <h2 data-animation="animated fadeInDown"
                                        style=" color : {{ jsonDecoder(getCategoryLanguage($value->id, $language_slug)->special_fields, 1) }}">{{$value->description}}</h2>
                                    <!-- <a href="pricing.html" class="thm-btn" data-animation="animated fadeInDown">Our Pricing</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

        <ul class="carousel-indicators list-inline custom-navigation">
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
        -->
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
        </ul>
    </div>

    <section class="welcome-section sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-img-box">
                        <img style="max-width: 100%; object-fit:cover" src="{{ asset('/uploads/' . getCategory(74)->image) }}" alt="Awesome Image"/>
                    </div><!-- /.welcome-img-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="welcome-content">
                        <div class="title">
                            <p style=" color : {{ jsonDecoder(getCategoryLanguage(74, $language_slug)->special_fields, 0) }}">{{getCategoryLanguage(74,$language_slug)->name}}</p>
                            <h3 style=" color : {{ jsonDecoder(getCategoryLanguage(74, $language_slug)->special_fields, 1) }}">{{getCategoryLanguage(74,$language_slug)->description}}</h3>
                        </div><!-- /.title -->
                        {!! getCategoryLanguage(74,$language_slug)->contents !!}
                        <a href="{{taxonomy(59,$language_slug)}}"
                           class="thm-btn yellow-bg">{{ getLanguage('daha_fazla',$language_slug) }}</a>
                    </div><!-- /.welcome-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.welcome-section -->

    <section class="what-we-do sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span {{ jsonDecoder(getCategoryLanguage(75, $language_slug)->special_fields, 0) }}>{{getCategoryLanguage(75,$language_slug)->name}}</span>
                <h3 {{ jsonDecoder(getCategoryLanguage(75, $language_slug)->special_fields, 1) }}>{{getCategoryLanguage(75,$language_slug)->description}}</h3>
                {!! getCategoryLanguage(75,$language_slug)->contents !!}
            </div><!-- /.sec-title -->
            <div class="row">
                <!--
                 <div class="col-lg-6 col-md-12">
                    <div class="single-what-we-do">
                        <div class="img-box">
                            <img style="max-width: 100%; object-fit:cover" src="img/what-we-do-1-1.jpg" alt="" />
                        </div>
                <div class="text-box hvr-bounce-to-bottom">
                    <a href="service-details.html"><h3>3D Printing</h3></a>
                    <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                    <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                </div>
            </div>
        </div>-->
                @foreach(getCategoryByParent(60,$language_slug) as $value)
                    @if($value->home_page)
                        <div class="col-sm-3">
                            <div class="single-what-we-do-one hvr-bounce-to-bottom" style="min-height: 443px;">
                                <i class="{{jsonDecoder(getCategoryLanguage($value->id, $language_slug)->special_fields, 0)}}"></i>
                                <a href="{{taxonomy($value->id,$language_slug)}}">
                                    <h3>{{getCategoryLanguage($value->id, $language_slug)->name}}</h3></a>
                                <p>{{getCategoryLanguage($value->id, $language_slug)->description}}</p>
                                <a href="{{taxonomy($value->id,$language_slug)}}" class="read-more fas fa-angle-right"></a>
                            </div><!-- /.single-what-we-do-one -->
                        </div><!-- /.col-sm-6 -->
                    @endif
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.what-we-do -->

    <section class="testi-carousel-wrapper">
        <div
            style="background: #212121 url({{asset('/uploads/' . getCategory(80)->image)}}) center center no-repeat fixed;"
            class="overlay"></div><!-- /.overlay -->
        <div class="thm-container">
            <div class="testi-carousel owl-carousel owl-theme">
                @foreach(getCategoryByParent(80,$language_slug) as $value)
                    <div class="item single-testimonials">
                        <div class="img-box">
                            <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . $value->image)}}" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <h3>{{$value->description}}</h3>
                            <p>{{$value->name}}</p>
                        </div><!-- /.text-box -->
                    </div>
                @endforeach
            </div>
        </div><!-- /.thm-container -->
    </section><!-- /.testi-carousel-wrapper -->


    <section class="call-to-action-one">
        <div
            style="background: #ff4328 url({{asset('/uploads/' . getCategory(83)->image)}}) center center no-repeat fixed;"
            class="overlay"></div><!-- /.overlay -->
        <div class="inner-wrapper"
             style="background: transparent url({{asset('/uploads/' . getCategory(83)->image2)}}) right center no-repeat fixed;">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="call-to-action-content">
                            <div class="title">
                                <span>{{getCategoryLanguage(83,$language_slug)->name}}</span>
                                <h2>{{getCategoryLanguage(83,$language_slug)->description}}</h2>
                            </div><!-- /.title -->
                            <ul class="list-box">
                                @php
                                    $explode_id = array_map('intval', explode(',', getCategoryLanguage(83,$language_slug)->special_fields));
                                @endphp
                                @for($i = 0; $i < count($explode_id); $i++)
                                    <li>
                                        <i class="fas fa-check-circle"></i>{{jsonDecoder(getCategoryLanguage(83,$language_slug)->special_fields,$i)}}
                                    </li>
                                @endfor
                            </ul><!-- /.list-box -->
                            <a href="{{taxonomy(59,$language_slug)}}"
                               class="thm-btn yellow-bg">{{ getLanguage('daha_fazla',$language_slug) }}</a>
                        </div><!-- /.call-to-action-content -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </div><!-- /.inner -->
    </section><!-- /.call-to-action -->

    <section class="team-section sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span
                    style="color:{{jsonDecoder(getCategoryLanguage(84,$language_slug)->special_fields,0)}}">{{getCategoryLanguage(84,$language_slug)->name}}</span>
                <h3 style="color:{{jsonDecoder(getCategoryLanguage(84,$language_slug)->special_fields,1)}}">{{getCategoryLanguage(84,$language_slug)->description}}</h3>
                {!! getCategoryLanguage(84,$language_slug)->contents !!}
            </div><!-- /.sec-title -->
            <div class="team-carousel owl-carousel owl-theme">
                @foreach(getCategoryByParent(84,$language_slug) as $value)
                    <div class="item">
                        <div class="single-team-carousel">
                            <div class="inner">
                                <div class="img-box">
                                    <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . $value->image)}}" alt="Awesome Image"/>
                                </div><!-- /.img-box -->
                                <div class="team-content">
                                    <div class="title">
                                        <span
                                            style="color:{{jsonDecoder($value->special_fields,0)}}">{{$value->name}}r</span>
                                        <h3 style="color:{{jsonDecoder($value->special_fields,1)}}">{{$value->description}}</h3>
                                    </div><!-- /.title -->
                                    {!! $value->contents !!}
                                </div><!-- /.team-content -->
                            </div><!-- /.inner -->
                        </div><!-- /.single-team-carousel -->
                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.team-carousel -->
        </div><!-- /.thm-container -->
    </section><!-- /.team-section -->

    <section class="service-style-one sec-pad">
        <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . getCategory(87)->image)}}" class="background-right" alt="Awesome Image"/>
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-content">
                        <div class="title">
                            <span>{{getCategoryLanguage(87,$language_slug)->name}}</span>
                            <h2>{{getCategoryLanguage(87,$language_slug)->description}}</h2>
                        </div><!-- /.title -->
                        {!! getCategoryLanguage(87,$language_slug)->contents !!}
                        <div class="btn-box">
                            <div class="phone-btn"><i class="fas fa-phone" ></i>{{jsonDecoder(Settings($language_slug)->special_fields,'phone')}}</div><!-- /.phone-btn -->

                            <div class="phone-btn"><i class="fas fa-phone" style="margin-left: 20px !important;"></i>{{jsonDecoder(Settings($language_slug)->special_fields,'phone2')}}</div><!-- /.phone-btn -->
                        </div><!-- /.btn-box -->
                    </div><!-- /.service-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="service-right-content">
                        <div class="inner">
                            <div class="divider hor"></div><!-- /.divider -->
                            <div class="divider ver"></div><!-- /.divider -->
                            <div class="row">
                                @foreach(getCategoryByParent(87,$language_slug) as $value)
                                    <div class="col-sm-6">
                                        <div class="single-service-one hvr-bounce-to-bottom">
                                            @if($value->image)
                                                <img style="max-width: 95%" src="{{asset('/uploads/' . $value->image)}}">
                                            @else
                                            <i class={{jsonDecoder($value->special_fields,0)}}></i>
                                            @endif
                                            <h3>{{$value->name}}</h3>
                                        </div><!-- /.single-service-one -->
                                    </div><!-- /.col-sm-6 -->
                                @endforeach
                            </div><!-- /.row -->

                        </div><!-- /.inner -->
                    </div><!-- /.service-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.service-style-one -->

    <section class="video-box-design-guide sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-box">
                        <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . getCategory(88)->image)}}" alt="Awesome Image"/>
                        <div class="content">
                            <h3>{{getCategoryLanguage(88,$language_slug)->name}}</h3>

                        </div><!-- /.content -->
                        <!-- <a href="https://www.youtube.com/watch?v=mcL6ZErM49Q" class="video-btn video-popup"><i
                                class="fas fa-play"></i></a>-->
                    </div><!-- /.video-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="design-guideline">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row version-row">
                                    <div class="col-xs-12">
                                        <div class="single-version">
                                            {!! getCategoryLanguage(88,$language_slug)->contents !!}
                                        </div><!-- /.single-version -->
                                    </div><!-- /.col-xs-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.design-guideline -->
                    <div class="guide-line-img-box">
                        <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . getCategory(88)->image2)}}" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.video-box-design-guide -->

    <section class="cta-style-two">
        <div class="image-block">
            <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . getCategory(93)->image)}}" alt="Awesome Image"/>
            <div class="content-block">
                <h3>{{jsonDecoder(getCategoryLanguage(93,$language_slug)->special_fields,0)}}</h3>
            </div><!-- /.content-block -->
        </div><!-- /.image-block -->
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6"></div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="cta-style-two-content">
                        <div class="title">
                            <span>{{getCategoryLanguage(93,$language_slug)->name}}</span>
                            <h2>{{getCategoryLanguage(93,$language_slug)->description}}</h2>
                        </div><!-- /.title -->
                        {!! getCategoryLanguage(93,$language_slug)->contents !!}
                        <a href="{{taxonomy(110,$language_slug)}}" class="thm-btn yellow-bg">{{getLanguage('ornek_alin',$language_slug)}}</a>
                    </div><!-- /.cta-style-two-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.cta-style-two -->

    <section class="recent-projects sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span
                    style="color{{jsonDecoder(getCategoryLanguage(103,$language_slug)->special_fields,0)}}">{{getCategoryLanguage(103,$language_slug)->name}}</span>
                <h3 style="color{{jsonDecoder(getCategoryLanguage(103,$language_slug)->special_fields,1)}}">{{getCategoryLanguage(103,$language_slug)->description}}</h3>
                <p>{!! getCategoryLanguage(103,$language_slug)->contents !!}</p>
            </div><!-- /.sec-title -->
            <div class="row">
                @foreach(getCategoryByParent(102,$language_slug) as $value)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . $value->image)}}" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a href="{{taxonomy($value->id,$language_slug)}}" class="more"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Printing</span>
                                <a href="{{taxonomy($value->id,$language_slug)}}"><h3>{{$value->name}}</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.recent-projects -->

    <div class="brand-carousel-wrapper">
        <div class="thm-container">
            <div class="brand-carousel owl-theme owl-carousel">
                @foreach(getCategoryByParent(94,$language_slug) as $value)
                    <div class="item">
                        <img style="max-width: 100%; object-fit:cover" src="{{asset('/uploads/' . $value->image)}}" alt="Awesome Image"/>
                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.brand-carousel -->
        </div><!-- /.thm-container -->
    </div><!-- /.brand-carousel-wrapper -->
@endsection
