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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('front.home');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('front.show');
Route::get('/live-streams', [App\Http\Controllers\HomeController::class, 'liveStreams'])->name('front.live-streams');
Route::get('/live-output', [App\Http\Controllers\HomeController::class, 'liveOutput'])->name('front.live-output');
Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories'])->name('front.categories');
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('front.settings');
Route::get('/help', [App\Http\Controllers\HomeController::class, 'help'])->name('front.help');

Route::get('/certification/center', [App\Http\Controllers\HomeController::class, 'certificationCenter'])->name('front.certification-center');
Route::get('/certification/start-from', [App\Http\Controllers\HomeController::class, 'certificationStartForm'])->name('front.certification-start-from');
Route::get('/certification/view', [App\Http\Controllers\HomeController::class, 'certificationView'])->name('front.certification-view');
Route::get('/certification/result', [App\Http\Controllers\HomeController::class, 'certificationResult'])->name('front.certification-result');
Route::get('/certification/saved-courses', [App\Http\Controllers\HomeController::class, 'savedCourses'])->name('front.saved-courses');
Route::get('/certification/feedback', [App\Http\Controllers\HomeController::class, 'feedback'])->name('front.feedback');



Route::get('/admin', [App\Http\Controllers\BackendController::class, 'index'])->name('back.home');
Route::get('/admin/analytics', [App\Http\Controllers\BackendController::class, 'analysis'])->name('back.analysis');
Route::get('/admin/create-course', [App\Http\Controllers\BackendController::class, 'createCourse'])->name('back.create-course');
