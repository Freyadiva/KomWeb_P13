<?php  

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\BiodataController;  
use App\Http\Controllers\PageController;  
use App\Http\Controllers\HalController; 

/*  
|--------------------------------------------------------------------------  
| Web Routes  
|--------------------------------------------------------------------------  
|  
| Here is where you can register web routes for your application. These  
| routes are loaded by the RouteServiceProvider and all of them will  
| be assigned to the "web" middleware group. Make something great!  
|  
*/  

Route::get('/', function () {  
    return view('welcome');  
});  
Route::get('/halo-apa-kabar', function () {  
    return 'Halo apa kabar dunia';  
});  
Route::get('/halo-apa-kabar/{nama}', function ($nama) {  
    return "Halo apa kabar dunia $nama";  
});  
Route::get('/halo-apa-kabar/{namadepan}/{namabelakang}', function ($namadepan, $namabelakang) {  
    return "Halo apa kabar $namadepan $namabelakang";  
});  
Route::get('/home', [BiodataController::class, 'home']);  
Route::get('/about', [BiodataController::class, 'about']);

// tanpa controller 
Route::get('/web', function () {  
    return view('home');  //lokasi di resources/views
})->name('home');
Route::get('/web/about', function () {  
    return view('about'); 
})->name('about');
Route::get('/web/contact', function () {  
    return view('contact'); 
})->name('contact');

Route::get('/new', [PageController::class, 'home'])->name('home');
Route::get('/new', [PageController::class, 'about'])->name('about');
Route::get('/new', [PageController::class, 'contact'])->name('contact');

Route::get('/baru/home',[HalController::class,'home'])->name('topmenu1_blade');
Route::get('/baru/about',[HalController::class,'about'])->name('topmenu2_blade');
Route::get('/baru/contact',[HalController::class,'contact'])->name('topmenu3_blade');