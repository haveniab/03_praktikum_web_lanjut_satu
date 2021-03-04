<?php

use App\Http\Controllers\ContactUsController;
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
Route::get('/', function() {
    return view('home');
});

Route::get('/category', function (){
    return view('program');
});

Route::prefix('category')->group(function (){
    Route::get('/marbel-edu-games', function (){
        echo '<a href ="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>';
    });
    Route::get('/marbel-and-friends-kids-games', function (){
        echo '<a href ="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>';
    });
    Route::get('/riri-story-books', function (){
        echo '<a href ="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>';
    });
    Route::get('/kolak-kids-song', function (){
        echo '<a href ="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
    });
});

Route::get('/berita', function(){
    return view('news');
});
Route::get('/berita/news', function($pp = 'news'){
    echo '<a href="https://www.educastudio.com/news">'.$pp.'</a>';
});
Route::get('/berita/news/{name}', function($pp = 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'){
    echo '<a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19"'.$pp.'>'.$pp.'</a>';
});

Route::get('/program', function (){
    return view('product');
});
Route::prefix('program')->group(function (){
    Route::get('/karir', function (){
        echo '<a href ="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>';
    });
    Route::get('/magang', function (){
        echo '<a href ="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>';
    });
    Route::get('/kunjungan-industri', function (){
        echo '<a href ="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
    });
});

Route::get('/abot', function (){
    return view('about-us');
});

Route::get('/abot/aboutus', function (){
    return redirect('https://www.educastudio.com/about-us');
});
Route::get('/con/contactus', [ContactUsController::class, 'index']);

Route::get('/con', function (){
    return view('contact-us');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
