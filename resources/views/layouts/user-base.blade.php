<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Mustafa Göktaş">
    <title>{{ config('app.name', 'Laravel') }} - Admin Paneli</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin/') }}assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/admin/') }}assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin/') }}assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/admin/') }}assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/') }}assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('assets/admin/assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{ asset('assets/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
    @yield('head')
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <a href="{{ url('/','user') }}" style="color:inherit;">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('assets/admin/assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('assets/admin/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
        </a>
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route("Profil Düzenle") }}">
             <i class="fas fa-user"></i>Profil Düzenle</a>
        </li>

        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route("user.CMS Yönetimi",['id' => 0]) }}">
             <i class="fas fa-tasks"></i>CMS Yönetimi</a>
        </li>

      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
          </svg>
        </button><a class="c-header-brand d-lg-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/admin/') }}assets/brand/coreui.svg#full"></use>
          </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
          </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">

          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
              <div class="c-avatar d-none"><img class="c-avatar-img" src="{{ asset('assets/admin/assets/img/avatars/6.jpg') }}"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg class="c-icon mr-2">
                  <use xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                </svg> Çıkış</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>
        </ul>
        <div class="c-subheader px-3">
          <!-- Breadcrumb-->
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Kullanıcı Arayüzü</li>
            <!-- Breadcrumb Menu-->
          </ol>
          <form class="mx-auto" action="{{ route('ChangeLang') }}" method="post">
          <ol class="breadcrumb border-0 m-0 mx-auto">
            <li>

              <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Şuanda {{ session('lang_name') }} Dilini Kullanıyorsunuz.">
                {{ session('lang_name') }}
              </button>
            </li>

            <li>
              <div class="form-group m-0 p-0 pl-1">
              <select class="form-control" name="change_lang">
              @foreach (AdminGenerator::LanguageList() as $key => $value)
                <option value="{{ $value->slug }}" @if ($value->slug == session('lang_slug')) disabled hidden @endif>{{ $value->name }}</option>
              @endforeach
              </select>
              </div>

            </li>
            <li class="float-right">@csrf <button type="submit" class="btn btn-primary ml-1 " name="button">Değiştir</button> </li>

          </ol>
          </form>
          <ol class="breadcrumb border-0 m-0 ml-auto">
            <li> @yield('yeni_ekle') </li>
          </ol>
        </div>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            @if ( session('success') )
              <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @elseif (session('error'))
              <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')

          </div>
        </main>
        <footer class="c-footer">
          <div><a href="">Mustafa Göktaş</a> © {{ now()->year }} Tüm Hakları Saklıdır.</div>
          <div class="ml-auto">Admin Panel</div>
        </footer>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <!--[if IE]><!-->
    <script src="{{ asset('assets/admin/vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('assets/admin/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script type="text/javascript">
    $(function () {
    $('button[data-toggle="popover"]').popover();
    });
    </script>
    @yield('javascripts')

  </body>
</html>
