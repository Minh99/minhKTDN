<?php

use Illuminate\Support\Facades\Route;

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
    return view('trangChu');
});

Route::get('gioithieu', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Giới Thiệu</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});

Route::get('dangdoanthe', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Đảng, Đoàn Thể</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('thongtin', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Thông Tin</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('tuyendung', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Tuyển Dụng</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('vieclam', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Việc Làm</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('ct', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Chương trình</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('mh', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Môn Học</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('qc', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Qui chế</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('tc', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Tra cứu</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});
Route::get('hd', function () {
    echo "<div><h1>Đây Là Trang<font color=\"red\"> Hướng Dẫn</font> Của Trường Đại Học Kiến Trúc</h1></div>";
});


Route::get('login', function () {
    return view('sign');
});
Route::post('/log','StudViewController@index');

Route::get('view-records','StudViewController@index');
