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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


/*
 * Rute Tata Usaha
 */
Route::get('/tu', [
    'as' => 'tu.home',
    'uses' => 'TataUsahaController@index'
]);

Route::get('/tu/pengelolaan_tu', [
    'as' => 'tu.pengelolaan_tu',
    'uses' => 'TataUsahaController@pengelolaanTU'
]);

Route::get('tu/pengelolaan_guru', [
    'as' => 'tu.pengelolaan_guru',
    'uses' => 'TataUsahaController@pengelolaanGuru'
]);

Route::get('tu/pengelolaan_siswa', [
    'as' => 'tu.pengelolaan_siswa',
    'uses' => 'TataUsahaController@pengelolaanSiswa'
]);

Route::get('tu/pengelolaan_pelajaran', [
    'as' => 'tu.pengelolaan_pelajaran',
    'uses' => 'TataUsahaController@pengelolaanPelajaran'
]);

Route::get('tu/profile', [
    'as' => 'tu.profile',
    'uses' => 'TataUsahaController@getProfile'
]);

/*
 * Rute tata usaha untuk manipulasi data guru
 */
Route::get('tu/registrasi_guru', [
    'as' => 'tu.registrasi_guru',
    'uses' => 'TataUsahaController@registrasiGuru'
]);

Route::post('/register_guru', [
    'as' => 'guru.register',
    'uses' => 'GuruController@store'
]);

Route::get('tu/guru', [
    'as' => 'tu.semua_guru',
    'uses' => 'GuruController@viewAllGuru'
]);

Route::get('tu/guru/{id}', [
    'as' => 'tu.guru.show',
    'uses' => 'GuruController@show'
]);

Route::get('tu/guru/{id}/edit', [
    'as' => 'guru.edit',
    'uses' => 'GuruController@edit'
]);

Route::patch('tu/guru/{id}', [
    'as' => 'guru.update',
    'uses' => 'GuruController@update'
]);

Route::delete('tu/guru/{id}', [
    'as' => 'guru.destroy',
    'uses' => 'GuruController@destroy'
]);

/*
 * Rute tata usaha untuk manipulasi data tata usaha
 */
Route::get('tu/registrasi_tu', [
    'as' => 'tu.create',
    'uses' => 'TataUsahaController@create'
]);

Route::post('tata_usaha', [
    'as' => 'tu.store',
    'uses' => 'TataUsahaController@store'
]);

Route::get('tu/tu', [
    'as' => 'tu.semua_tu',
    'uses' => 'TataUsahaController@viewAllTU'
]);

Route::get('tu/tu/{id}', [
    'as' => 'tu.show',
    'uses' => 'TataUsahaController@show'
]);

Route::get('tu/tu/{id}/edit', [
    'as' => 'tu.edit',
    'uses' => 'TataUsahaController@edit'
]);

Route::patch('tu/tu/{id}', [
    'as' => 'tu.update',
    'uses' => 'TataUsahaController@update'
]);

Route::delete('tu/tu/{id}', [
    'as' => 'tu.destroy',
    'uses' => 'TataUsahaController@destroy'
]);

/*
 * Rute tata usaha untuk manipulasi data siswa
 */

Route::get('tu/registrasi_siswa', [
    'as' => 'tu.registrasi_siswa',
    'uses' => 'SiswaController@create'
]);

Route::post('tu/siswa', [
    'as' => 'tu.siswa.store',
    'uses' => 'SiswaController@store'
]);

Route::get('tu/siswa', [
    'as' => 'tu.semua_siswa',
    'uses' => 'SiswaController@viewAllSiswa'
]);

Route::get('tu/siswa/{id}', [
    'as' => 'tu.siswa.show',
    'uses' => 'SiswaController@show'
]);

Route::get('tu/siswa/{id}/edit', [
    'as' => 'tu.siswa.edit',
    'uses' => 'SiswaController@edit'
]);

Route::patch('tu/siswa/{id}', [
    'as' => 'siswa.update',
    'uses' => 'SiswaController@update'
]);

Route::delete('tu/siswa/{id}', [
    'as' => 'tu.siswa.destroy',
    'uses' => 'SiswaController@destroy'
]);

Route::get('tu/siswa/nilai/all', [
    'as' => 'tu.siswa.nilai',
    'uses' => 'NilaiSiswaController@viewAllNilai'
]);

Route::get('tu/siswa/nilai/{id}', [
    'as' => 'tu.siswa.nilai.show',
    'uses' => 'NilaiSiswaController@show'
]);

/*
 * Rute tata usaha untuk manipulasi data pelajaran
 */
Route::get('tu/pelajaran/registrasi', [
    'as' => 'tu.pelajaran.register',
    'uses' => 'PelajaranController@create'
]);

Route::post('tu/pelajaran', [
    'as' => 'tu.pelajaran.store',
    'uses' => 'PelajaranController@store'
]);

Route::get('tu/pelajaran/', [
    'as' => 'tu.semua_pelajaran',
    'uses' => 'PelajaranController@index'
]);

Route::get('tu/pelajaran/{id}', [
    'as' => 'tu.pelajaran.show',
    'uses' => 'PelajaranController@show'
]);

Route::get('tu/pelajaran/{id}/edit', [
    'as' => 'tu.pelajaran.edit',
    'uses' => 'PelajaranController@edit'
]);

Route::patch('tu/pelajaran/{id}', [
    'as' => 'pelajaran.update',
    'uses' => 'PelajaranController@update'
]);

Route::delete('/tu/pelajaran/{id}', [
    'as' => 'pelajaran.destroy',
    'uses' => 'PelajaranController@destroy'
]);


/*
 * Rute Guru
 */
Route::get('/guru', [
    'as' => 'guru.home',
    'uses' => 'GuruController@index']
);

Route::get('guru/nilai/ubah', [
    'as' => 'guru.abcde',
    'uses' => 'GuruController@ubahNilai'
]);

Route::get('guru/nilai/edit/{id}-{siswa}', [
    'as' => 'guru.nilai.edit_nilai',
    'uses' => 'GuruController@showEditForm'
]);

Route::get('guru/profil', [
    'as' => 'guru.profile',
    'uses' => 'GuruController@getProfile'
]);

Route::get('guru/siswa', [
    'as' => 'guru.all_siswa',
    'uses' => 'GuruController@viewAllSiswa'
]);

Route::get('guru/registrasi_nilai', [
    'as' => 'guru.registrasi nilai',
    'uses' => 'NilaiSiswaController@index'
]);

Route::get('guru/siswa/{id}', [
    'as' => 'guru.siswa.show',
    'uses' => 'GuruController@showSiswa'
]);

Route::get('guru/profil/password', [
    'as' => 'guru.password',
    'uses' => 'GuruController@ubahPassword'
]);

Route::patch('guru/profil/password', [
    'as' => 'guru.update_password',
    'uses' => 'GuruController@updatePassword'
]);

Route::get('guru/pelajaran', [
    'as' => 'guru.all_pelajaran',
    'uses' => 'GuruController@lihatPelajaran'
]);

Route::get('guru/nilai/1', [
    'as' => 'guru.nilai.1',
    'uses' => 'NilaiSiswaController@create_1'
]);

Route::get('guru/nilai/2', [
    'as' => 'guru.nilai.2',
    'uses' => 'NilaiSiswaController@create_2'
]);

Route::get('guru/nilai/3', [
    'as' => 'guru.nilai.3',
    'uses' => 'NilaiSiswaController@create_3'
]);

Route::get('guru/nilai/4', [
    'as' => 'guru.nilai.4',
    'uses' => 'NilaiSiswaController@create_4'
]);

Route::get('guru/nilai/5', [
    'as' => 'guru.nilai.5',
    'uses' => 'NilaiSiswaController@create_5'
]);

Route::get('guru/nilai/6', [
    'as' => 'guru.nilai.6',
    'uses' => 'NilaiSiswaController@create_6'
]);

Route::get('guru/nilai/7', [
    'as' => 'guru.nilai.7',
    'uses' => 'NilaiSiswaController@create_7'
]);

Route::post('guru/nilai/', [
    'as' => 'guru.nilai.store',
    'uses' => 'NilaiSiswaController@store'
]);

Route::get('guru/nilai', [
    'as' => 'guru.nilai.all',
    'uses' => 'GuruController@viewAllNilai'
]);

Route::get('guru/nilai/{id}', [
    'as' => 'guru.nilai.show',
    'uses' => 'GuruController@showNilai'
]);

Route::get('guru/nilai/ganti_nilai', [
    'as' => 'guru.nilai.ubah_nilai',
    'uses' => 'GuruController@index'
]);



/*
 * Rute Kepala Sekolah
 */
Route::get('/kepala_sekolah', [
    'as' => 'kepsek.home',
    'uses' => 'KepalaSekolahController@index'
]);

Route::get('kepsek/profile', [
    'as' => 'kepsek.profile',
    'uses' => 'KepalaSekolahController@getProfile'
]);

Route::get('kepsek/siswa', [
    'as' => 'kepsek.siswa',
    'uses' => 'KepalaSekolahController@viewAllSiswa'
]);

Route::get('kepsek/siswa/{id}', [
    'as' => 'kepsek.siswa.show',
    'uses' => 'KepalaSekolahController@showSiswa'
]);

Route::get('kepsek/guru', [
    'as' => 'kepsek.guru',
    'uses' => 'KepalaSekolahController@viewAllGuru'
]);

Route::get('kepsek/guru/{id}', [
    'as' => 'kepsek.guru.show',
    'uses' => 'KepalaSekolahController@showGuru'
]);

Route::get('kepsek/nilai', [
    'as' => 'kepsek.nilai.all',
    'uses' => 'KepalaSekolahController@viewAllNilai'
]);

Route::get('kepsek/nilai/{id}', [
    'as' => 'kepsek.nilai.show',
    'uses' => 'KepalaSekolahController@detailNilai'
]);
