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
    return redirect(route('index'));
});
Route::view('/live', 'live')->name('live');
Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/brandbook', 'brandbook')->name('brandbook');
Route::view('/history', 'history')->name('history');
Route::view('/ilim', 'ilim')->name('ilim');
Route::view('/auth', 'auth')->name('auth')->middleware('login');
Route::view('/register', 'register')->name('register')->middleware('login');
Route::get('/listableBooks', [\App\Http\Controllers\GetDataController::class, 'GetListableBooks'])->name('listablebooks');
Route::view('/admin', 'admin')->name('admin')->middleware('auth')->middleware('admin');
Route::get('/newspage', [\App\Http\Controllers\GetDataController::class,'GetNewsID'])->name('NewsLink');
Route::get('/eventspage', [\App\Http\Controllers\GetDataController::class,'GetEventsID'])->name('EventsLink');
Route::get('/projectspage', [\App\Http\Controllers\GetDataController::class,'GetProjectsID'])->name('ProjectsLink');
Route::view('/page', 'page')->name('page');
Route::name('index')->group(function (){
    Route::view('/index', 'index');
    Route::get('/index', [\App\Http\Controllers\GetDataController::class,'GetMainData']);
});
Route::name('private')->group(function (){
    Route::view('/private', 'private');
    Route::get('/private', [\App\Http\Controllers\GetDataController::class,'GetUserData'])->middleware('auth');
});
Route::name('readers')->group(function (){
    Route::view('/readers', 'readers');
    Route::get('/readers', [\App\Http\Controllers\GetDataController::class,'GetReviews']);
});
Route::name('news')->group(function (){
    Route::view('/news', 'news');
    Route::get('/news', [\App\Http\Controllers\GetDataController::class,'GetNews']);
});
Route::name('events')->group(function (){
    Route::view('/events', 'events');
    Route::get('/events', [\App\Http\Controllers\GetDataController::class,'GetEvents']);
});
Route::name('books')->group(function (){
    Route::view('/books', 'books');
    Route::get('/books', [\App\Http\Controllers\GetDataController::class,'GetBooks']);
});
Route::get('/eventsbydate', [\App\Http\Controllers\GetDataController::class,'GetEventsWithDate'])->name('GetEventsWithDate');
Route::get('/eventsbyname', [\App\Http\Controllers\GetDataController::class,'GetEventsWithName'])->name('GetEventsWithName');
Route::get('/booksbyname', [\App\Http\Controllers\GetDataController::class,'GetBooksWithName'])->name('GetBooksWithName');
Route::post('/UploadReview', [\App\Http\Controllers\UploadController::class,'UploadReview'])->name('UploadReview');
Route::name('documents')->group(function (){
    Route::view('/documents', 'documents');
    Route::get('/documents', [\App\Http\Controllers\GetDataController::class,'GetDocuments']);
});
Route::name('videos')->group(function (){
    Route::view('/videos', 'videos');
    Route::get('/videos', [\App\Http\Controllers\GetDataController::class,'GetVideos']);
});
Route::name('projects')->group(function (){
    Route::view('/projects', 'projects');
    Route::get('/projects', [\App\Http\Controllers\GetDataController::class,'GetProjects']);
});
Route::name('editor')->group(function (){
    Route::view('/editor', 'editor');
    Route::get('/editor', [\App\Http\Controllers\GetDataController::class,'GetEditor']);
});
Route::post('/uploadListableBook', [\App\Http\Controllers\UploadController::class, 'uploadListableBook'])->name('UploadListableBook')->middleware('admin');
Route::view('/filialy','filialy')->name('filialy');
Route::post('/uploadMainVideo', [\App\Http\Controllers\UploadController::class, 'UploadMainVideo'])->name('UploadMainVideo')->middleware('admin');
Route::post('/uploadNews', [\App\Http\Controllers\UploadController::class, 'UploadNews'])->name('UploadNews')->middleware('admin');
Route::post('/uploadEvents', [\App\Http\Controllers\UploadController::class, 'UploadEvents'])->name('UploadEvents')->middleware('admin');
Route::post('/uploadProjects', [\App\Http\Controllers\UploadController::class, 'UploadProjects'])->name('UploadProjects')->middleware('admin');
Route::post('/uploadDocument', [\App\Http\Controllers\UploadController::class, 'UploadDocument'])->name('UploadDocument')->middleware('admin');
Route::post('/uploadBook', [\App\Http\Controllers\UploadController::class, 'UploadBook'])->name('UploadBook')->middleware('admin');
Route::post('/uploadVideos', [\App\Http\Controllers\UploadController::class, 'UploadVideos'])->name('UploadVideos')->middleware('admin');
Route::post('/uploadEditorPage', [\App\Http\Controllers\UploadController::class, 'EditorPageUpload'])->name('EditorPageUpload')->middleware('admin');
Route::post('/editPage', [\App\Http\Controllers\UploadController::class, 'EditPage'])->name('EditPage')->middleware('admin');

Route::get('/deleteDocument', [\App\Http\Controllers\UploadController::class, 'DeleteDocument'])->name('DeleteDocument')->middleware('admin');
Route::get('/deletePost', [\App\Http\Controllers\UploadController::class, 'DeletePost'])->name('DeletePost')->middleware('admin');
Route::get('/deleteVideo', [\App\Http\Controllers\UploadController::class, 'DeleteVideo'])->name('DeleteVideo')->middleware('admin');
Route::get('/deleteMainVideo', [\App\Http\Controllers\UploadController::class, 'DeleteMainVideo'])->name('DeleteMainVideo')->middleware('admin');
Route::get('/deleteBooks', [\App\Http\Controllers\UploadController::class, 'DeleteBooks'])->name('DeleteBooks')->middleware('admin');
Route::get('/deleteListableBook', [\App\Http\Controllers\UploadController::class, 'DeleteListableBook'])->name('DeleteListableBook')->middleware('admin');

Route::post('/giveBook', [\App\Http\Controllers\UploadController::class, 'GiveBook'])->name('GiveBook')->middleware('admin');
Route::post('/getBook', [\App\Http\Controllers\UploadController::class, 'GetBook'])->name('GetBook')->middleware('admin');

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'CreateUser'])->name('CreateUser')->middleware('login');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'LoginUser'])->name('LoginUser');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'LogoutUser'])->name('LogoutUser')->middleware('auth');
