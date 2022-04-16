<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as req;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register' => false]);

Route::middleware('admin')->prefix('/admin')->group(function () {
  // Admin
  Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('file-export', 'Web\ContactUsFormController@fileExport')->name('file.export');
  //Admin - Settings
  Route::prefix('/settings')->group(function () {


    Route::match(['get','post'],'general', 'Admin\SettingsController@general')->name('Genel Ayarlar');
    Route::get('newsletter', 'Admin\SettingsController@newsletter')->name('Bülten İstekleri');

    // Settings - Users
    Route::prefix('users')->group(function(){
        Route::get('/', 'Admin\SettingsController@users')->name('Kullanıcı Yönetimi');
        Route::match(['post','get'],'/create', 'Admin\SettingsController@users_create')->name('Yeni Kullanıcı Ekle');
        Route::match(['post','get'],'/edit/{id}', 'Admin\SettingsController@users_edit')->name('Kullanıcı Düzenle');
    });
    // Admin - Settings - silme işlemleri
    Route::match(['get','post'],'del', 'Admin\SettingsController@delete')->name('settings_delete');

  });

  //Admin - Forms
  Route::prefix('/forms')->group(function () {
    Route::get('/', 'Admin\FormController@index')->name('Formlar');
    Route::match(['get','post'],'edit/{id}', 'Admin\FormController@FormEdit')->name('Form Düzenle');
    Route::match(['get','post'],'create', 'Admin\FormController@FormCreate')->name('Form Oluştur');
      Route::prefix('fields')->group(function () {
        Route::get('/', 'Admin\FormController@FormFields')->name('Form Alanları');
        Route::match(['post','get'],'create', 'Admin\FormController@FormFields_create')->name('Form Alan Oluştur');
        Route::match(['post','get'],'edit/{id}', 'Admin\FormController@FormFields_edit')->name('Form Alan Düzenle');
      });

  });




    //Admin - CMS Yönetimi
  Route::prefix('/cms')->group(function () {
    Route::get('/{id}', 'Admin\CmsController@index')->name('CMS Yönetimi');
    Route::match(['post','get'],'/create/{parent_id}', 'Admin\CmsController@create')->name('İçerik Oluştur');
    Route::match(['post','get'],'/edit/{id}', 'Admin\CmsController@edit')->name('İçerik Düzenle');
    Route::match(['post','get'],'/delete/{id}', 'Admin\CmsController@delete')->name('İçerik Sil');
    Route::match(['post','get'],'/delete/file/{id}', 'Admin\CmsController@fileDelete')->name('Dosya Sil');
  });


  //Admin - Language
  Route::prefix('/language')->group(function () {
    Route::get('/', 'Admin\LanguageController@index')->name('language');
    // Language - create,edit,delete
    Route::match(['get','post'],'create', 'Admin\LanguageController@create')->name('language_create');
    Route::match(['get','post'],'edit/{id}', 'Admin\LanguageController@edit')->name('language_edit');
    Route::get('delete/{id}', 'Admin\LanguageController@delete')->name('language_delete');
  });

  //Admin - Reports
  Route::get('/reports', 'Admin\ReportsController@index')->name('reports');
});

// Change Language slug Session
Route::post('/lang/changelang', function (Request $request) {
    $langQuery = DB::table('language')->where('slug',$request->input('change_lang'))->first();
    session(['lang_slug' => $request->input('change_lang'), 'lang_name' => $langQuery->name]);
    return redirect()->back();
})->name('ChangeLang');

// User
Route::middleware('user')->prefix('/user')->group(function () {
  // User
  Route::get('/', 'User\UserController@index')->name('user');

  //User - CMS Yönetimi
  Route::prefix('/cms')->group(function () {
    Route::get('/{id}', 'User\CmsController@index')->name('user.CMS Yönetimi');
    Route::match(['post','get'],'/create/{parent_id}', 'User\CmsController@create')->name('user.İçerik Oluştur');
    Route::match(['post','get'],'/edit/{id}', 'User\CmsController@edit')->name('user.İçerik Düzenle');
    Route::match(['post','get'],'/delete/{id}', 'User\CmsController@delete')->name('user.İçerik Sil');
    Route::match(['post','get'],'/delete/file/{id}', 'User\CmsController@fileDelete')->name('user.Dosya Sil');
  });

  // Settings - Profile Edit
  Route::match(['post','get'],'profile/edit/', 'User\SettingsController@users_edit')->name('Profil Düzenle');

});

//ajax ve json işlemleri
Route::prefix('/misc')->group(function (){
    Route::get('/json/{name}.json', 'Web\AjaxController@textToJson');
});

Route::get('/', 'Web\BaseController@index');
Route::get('/{slug}', 'Web\BaseController@index');
Route::get('/{language_id}/{slug}', 'Web\BaseController@index');



Route::post('/iletisim','Web\ContactUsFormController@ContactUsForm')->name('contact.store');

Route::post('/teklif','Web\ContactUsFormController@ContactUsForm2')->name('contact.store2');

Route::post('/teklif-ozel','Web\ContactUsFormController@ContactUsForm3')->name('contact.store3');

Route::post('/bulten','Web\ContactUsFormController@Newsletter')->name('footer.newsletter');


