<?php

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

Route::get('/', function () {
    return view('welcome');
});

//import model
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;

//one to one
Route::get('relasi1',function(){
    $mhs = Mahasiswa::where('nim','=','94859347')->first();
    //menampilkan nama wali dari mhs yang di pilih
     return $mhs->wali->nama;
});

Route::get('relasi2',function(){
    $mhs = Mahasiswa::where('nim','=','94859347')->first();
    //menampilkan nama wali dari mhs yang di pilih
     return $mhs->dosen->nama;
});

//one to many
Route::get('relasi3',function(){
    $dsn = Dosen::where('nama','=','Seshoin Kiara')->first();
    //menampilkan nama wali dari mhs yang di pilih
    foreach( $dsn->mahasiswa as $fill)
      echo '<li> Nama : '.$fill->nama.
      '<strong> '. $fill->nim .'</strong></li>';

});

Route::get('relasi4',function(){
    $mk = Mahasiswa::where('nama','=','Sei Shounagon')->first();
    //menampilkan nama wali dari mhs yang di pilih
    foreach( $mk->hobi as $fill)
      echo '<li><strong> '. $fill->hobi .'</strong></li>';

});

Route::get('relasi5',function(){
    $game = Hobi::where('hobi','=','Main game online')->first();
    //menampilkan nama wali dari mhs yang di pilih
    foreach( $game->mahasiswa as $fill)
       echo '<li> Nama : '.$fill->nama.
      '<strong> '. $fill->nim .'</strong></li>';

});

Route::get('relasijoin',function(){
    $sql = DB::table('mahasiswas')
    ->select ('mahasiswas.nama','mahasiswas.nim','walis.nama as nama_wali')
    ->join('walis','walis.id_mahasiswa','=','mahasiswas.id')
    ->get();
    dd($sql);
   
});

Route::get('eloquent',function(){

    $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get();
    return view('eloquent',compact('mahasiswa'));
});

//eloquent practice
Route::get('eloquent-pra',function(){

    $mahasiswa1 = Mahasiswa::with('wali','dosen','hobi')->get()->take(1);
    return view('eloquent-pra',compact('mahasiswa1'));
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//beranda
Route::get('beranda',function()
{
return view('beranda');
});

Route::get('about',function()
{
return view('about');
});

Route::get('kontak',function()
{
return view('kontak');
});

//crud
Route::resource('dosen','DosenController');

Route::resource('hobi','HobiController');

Route::resource('mahasiswa','MahasiswaController');

Route::resource('wali','WaliController');