@extends('layouts.admin-base')

@section('content')

<div class="row">
  <div class="col-12">
  <div class="card">
  <div class="card-header"><strong>Yeni Kullanıcı</strong> <small>Ekle</small> </div>
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
  <div class="card-body">

  <div class="form-group row">
  <label class="col-md-2 col-form-label" for="text-input">Ad Soyad</label>
  <div class="col-md-10">
  <input class="form-control" id="text-input" type="text" name="ad-soyad" placeholder="Ad Soyad" value="{{ $user->name }}">
  </div>
  </div>
  <div class="form-group row">
  <label class="col-md-2 col-form-label" for="email-input">E-Mail</label>
  <div class="col-md-10">
  <input class="form-control" id="email-input" type="email" name="email" value="{{ $user->email }}" placeholder="ornek@gmail.com" autocomplete="email">
  </div>
  </div>
  <div class="form-group row">
  <label class="col-md-2 col-form-label" for="password-input">Şifre</label>
  <div class="col-md-10">
  <input class="form-control" aria-describedby="passHelp" id="password-input" type="password" name="password" placeholder="Şifre" autocomplete="new-password">
  <small id="passHelp" class="form-text text-muted">Herhangi Bir Şifre Girilmezse Eski Şifre Kullanılmaya Devam Edilecektir.</small>
  </div>
  </div>

  <div class="form-group row">
  <label class="col-md-2 col-form-label" for="select1">Rol</label>
  <div class="col-md-10">
  <select class="form-control" id="select1" name="role">
  <option value="null" selected disabled hidden> - Rol Seç -</option>
  <option value="admin" @if ($user->role == 'admin') selected @endif>Admin</option>
  <option value="user" @if ($user->role == 'user') selected @endif>Kullanıcı</option>
  </select>
  </div>
  </div>



  </div>
  <div class="card-footer">
  <button class="btn btn-md btn-primary" type="submit"> Kaydet</button>
  <button class="btn btn-md btn-danger" type="reset"> Reset</button>
  </div>
  </form>
  </div>
  </div>
</div>

@endsection
