<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>{{ jsonDecoder(Settings($language_slug)->special_fields, 'Title') }}@hasSection('title') | @yield('title')
        @endif
    </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/web/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/web/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/web/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/web/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/web/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/web/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/web/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/web/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/web/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" href="{{ asset('/uploads/' . Settings($language_slug)->footer_logo) }}">
    <link rel="manifest" href="/assets/web/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/web/css/style.css">
    <link rel="stylesheet" href="/assets/web/css/responsive.css">
    @yield('head')
</head>
<body class="active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->



<header class="header home-page-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/{{$language_slug}}">
                    <img src="{{ asset('/uploads/' . Settings($language_slug)->logo) }}" width="133px" alt="Logo"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                <ul class="nav navbar-nav navigation-box">
                    @foreach (menu($language_slug) as $key => $value)
                    <li class="{{Request::is(taxonomy($value->id, $language_slug)) ? 'current' : ''}}">
                        <a href="{{taxonomy($value->id, $language_slug) == '/' ? '/' . $language_slug : taxonomy($value->id, $language_slug)}}">{{$value->name}}</a>
                        @if (count(menu($language_slug, $value->id)))
                        <ul class="sub-menu">
                            @foreach(menu($language_slug, $value->id) as $subvalue)
                                <li><a href="{{taxonomy($subvalue->id, $language_slug)}}">{{$subvalue->name}}</a></li>
                            @endforeach
                        </ul><!-- /.sub-menu -->
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <div class="social">
                    @if($language_slug == 'tr')
                        <a href="/en" style="padding:15px !important; color:#FF4328; border: 1px solid #FF4328; border-radius: 50%;">EN</a>
                    @else
                        <a href="/tr" style="padding:15px !important; color:#FF4328; border: 1px solid #FF4328; border-radius: 50%;">TR</a>
                    @endif
                </div><!-- /.social -->
            </div><!-- /.right-side-box -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->


@yield('content')


<footer class="footer">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-widget about-widget">
                    <div class="title">
                        <h3>{{getLanguage('hakkinda',$language_slug)}}</h3>
                    </div><!-- /.title -->
                    <p>{{getLanguage('hakkinda_detay',$language_slug)}}</p>

                    <form action="{{route('footer.newsletter')}}" method="post" class="footer-subscribe">
                        @csrf
                        <input type="text" name="email" placeholder="Email address">
                        <button type="submit"><i class="fa fa-angle-right"></i></button>
                    </form><!-- /.footer-subscribe -->
                </div><!-- /.footer-widget about-widget -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-2">
                <div class="footer-widget links-widget explore">
                    <div class="title">
                        <h3>{{getLanguage('Explore',$language_slug)}}</h3>
                    </div><!-- /.title -->
                    <ul class="link-list">
                        @foreach(getCategoryByParent(1,$language_slug) as $value)
                        <li><a href="{{taxonomy($value->id,$language_slug)}}">{{$value->name}}</a></li>
                        @endforeach
                    </ul><!-- /.link-list -->
                </div><!-- /.footer-widget links-widget explore -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-3">

            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <div class="footer-widget contact-widget">
                    <div class="title">
                        <h3>{{getLanguage('contact',$language_slug)}}</h3>
                    </div><!-- /.title -->
                    <p>{{jsonDecoder(Settings($language_slug)->special_fields, 'phone')}}</p>
                    <p>{{jsonDecoder(Settings($language_slug)->special_fields, 'phone2')}}</p>
                    <p>{{jsonDecoder(Settings($language_slug)->special_fields, 'e-mail')}}</p>
                    <p>{{jsonDecoder(Settings($language_slug)->special_fields, 'address')}}</p>
                </div><!-- /.footer-widget links-widget explore -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.thm-contianer -->
</footer><!-- /.footer -->
<div class="footer-bottom">
    <div class="thm-container clearfix">
        <div class="pull-left copy-text">
            <p>&copy; Copyright 2018 </p>
        </div><!-- /.pull-left copy-text -->
        <div class="social-box pull-right">
            <a href="{{jsonDecoder(Settings($language_slug)->special_fields, 'twitter')}}" class="fab fa-twitter hvr-pulse"></a><!--
             --><a href="{{jsonDecoder(Settings($language_slug)->special_fields, 'pinterest')}}" class="fab fa-pinterest hvr-pulse"></a><!--
             --><a href="{{jsonDecoder(Settings($language_slug)->special_fields, 'facebook')}}" class="fab fa-facebook-f hvr-pulse"></a><!--
             --><a href="{{jsonDecoder(Settings($language_slug)->special_fields, 'youtube')}}" class="fab fa-youtube hvr-pulse"></a>
        </div><!-- /.social-box -->
    </div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fas fa-angle-up"></i></div>

<script src="/assets/web/js/jquery.js"></script>

<script src="/assets/web/js/bootstrap.min.js"></script>
<script src="/assets/web/js/bootstrap-select.min.js"></script>
<script src="/assets/web/js/jquery.validate.min.js"></script>
<script src="/assets/web/js/owl.carousel.min.js"></script>
<script src="/assets/web/js/isotope.js"></script>
<script src="/assets/web/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/web/js/waypoints.min.js"></script>
<script src="/assets/web/js/jquery.counterup.min.js"></script>
<script src="/assets/web/js/wow.min.js"></script>
<script src="/assets/web/js/jquery.easing.min.js"></script>
<script src="/assets/web/js/custom.js"></script>

</body>
</html>
