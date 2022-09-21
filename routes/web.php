<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fontend\FontendController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\BannerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [NoticeController::class, 'notice'])->name('dashboard');

//Fontend Router
Route::get('/', [FontendController::class, 'index']);
Route::get('/ga_unit', [FontendController::class, 'ga_unit'])->name('ga_unit');
Route::get('/kha_unit', [FontendController::class, 'kha_unit'])->name('kha_unit');
Route::get('/k_unit', [FontendController::class, 'k_unit'])->name('k_unit');
Route::get('/branch', [FontendController::class, 'branch'])->name('branch');
Route::get('/director_speech', [FontendController::class, 'director_speech'])->name('director_speech');
Route::get('/teachers_advice', [FontendController::class, 'teachers_advice'])->name('teachers_advice');
Route::get('/behind_success', [FontendController::class, 'behind_success'])->name('behind_success');
Route::get('/du_history', [FontendController::class, 'du_history'])->name('du_history');
Route::get('/guide', [FontendController::class, 'guide'])->name('guide');
Route::get('/about', [FontendController::class, 'about'])->name('about');
Route::get('/contact', [FontendController::class, 'contact'])->name('contact');
Route::get('/bsc', [FontendController::class, 'bsc'])->name('bsc');
Route::get('/diploma', [FontendController::class, 'diploma'])->name('diploma');
Route::get('/diploma_mid', [FontendController::class, 'diploma_mid'])->name('diploma_mid');
Route::get('/notice/{id}', [FontendController::class, 'notice'])->name('notice');



//Backend
Route::get('/viewNotice', [NoticeController::class, 'notice'])->name('viewNotice');
Route::post('/addnotice', [NoticeController::class, 'addnotice'])->name('addnotice');
Route::get('/delet/{id}', [NoticeController::class, 'delet'])->name('delet');
Route::get('/edit/{id}', [NoticeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [NoticeController::class, 'update'])->name('update');


//viewBanner
Route::get('/viewBanner', [BannerController::class, 'viewBanner'])->name('viewBanner');
Route::post('/addbanner', [BannerController::class, 'addbanner'])->name('addbanner');
Route::get('/delet/{id}', [BannerController::class, 'delet'])->name('delet');

// Backend Controller NewsEvent
// Route::get('/newsEvent', [NewsEventController::class, 'index'])->name('newsEvent');
// Route::post('/addNewsEvent', [NewsEventController::class, 'addNewsEvent'])->name('addNewsEvent');
// Route::get('/editNewsEvent/{id}', [NewsEventController::class, 'editNewsEvent'])->name('editNewsEvent');
// Route::post('/updateNewsEvent/{id}', [NewsEventController::class, 'updateNewsEvent'])->name('updateNewsEvent');
// Route::get('/deletnews/{id}', [NewsEventController::class, 'deletnews'])->name('deletnews');













require __DIR__ . '/auth.php';
