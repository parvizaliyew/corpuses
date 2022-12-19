<?php

use App\Models\Examresult;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Auth\ProfilController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\KorpusController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TelebeController;
use App\Http\Controllers\Admin\DekanatController;
use App\Http\Controllers\Admin\KafedraController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeacherController;

//ADMIN
Route::name('admin.')->prefix('/admin')->group(function () {

Route::group(['middleware' => 'islogin'],function()
{
    Route::get('/login',[AuthController::class, 'index'])->name('login');
    Route::post('/login',[AuthController::class,'login_post'])->name('login_post');
    Route::get('/sign-up',[AuthController::class,     'sign_up'])->name('signup');   
    Route::post('/sign-up',[AuthController::class,'signup_post'])->name('signup_post');

});

Route::group(['middleware' => 'notlogin'],function()
{
    Route::group(['middleware'=>'role:admin'],function()
    {
        //SLIDER
        Route::get('/slider',[SliderController::class,     'index'])->name('slider.index');
        Route::get('/slider-create',[SliderController::class,     'create'])->name('slider.create');
        Route::post('/slider-store',[SliderController::class,     'store'])->name('slider.store');
        Route::get('/slider-show/{id}',[SliderController::class,     'show'])->name('slider.show');
        Route::get('/slider-edit/{id}',[SliderController::class,     'edit'])->name('slider.edit');
        Route::post('/slider-update/{id}',[SliderController::class,    'update'])->name('slider.update');
        Route::get('/slider-delete/{id}',[SliderController::class,     'delete'])->name('slider.delete');
        Route::get('/slider-sort',[SliderController::class,     'sort'])->name('slider.sort');

        //ABOUT
        Route::get('/about',[AboutController::class ,'index'])->name('about');
        Route::post('/about/{id}',[AboutController::class,    'update'])->name('about.update');

        //NEWS
        Route::get('/news',[NewsController::class ,'index'])->name('news.index');
        Route::get('/news-create',[NewsController::class ,'create'])->name('news.create');
        Route::post('/news-store',[NewsController::class,     'store'])->name('news.store');
        Route::get('/news-show/{id}',[NewsController::class,     'show'])->name('news.show');
        Route::get('/news-edit/{id}',[NewsController::class,     'edit'])->name('news.edit');
        Route::post('/news-update/{id}',[NewsController::class,    'update'])->name('news.update');
        Route::get('/news-delete/{id}',[NewsController::class,     'delete'])->name('news.delete');

        Route::get('/korpus',[KorpusController::class ,'index'])->name('korpus.index');
        Route::get('/korpus-create',[KorpusController::class ,'create'])->name('korpus.create');
        Route::post('/korpus-store',[KorpusController::class,     'store'])->name('korpus.store');
        Route::get('/korpus-show/{id}',[KorpusController::class,     'show'])->name('korpus.show');
        Route::get('/korpus-edit/{id}',[KorpusController::class,     'edit'])->name('korpus.edit');
        Route::post('/korpus-update/{id}',[KorpusController::class,    'update'])->name('korpus.update');
        Route::get('/korpus-delete/{id}',[KorpusController::class,     'delete'])->name('korpus.delete');

        //KAFEDRA
         Route::get('/kafedra',[KafedraController::class ,'index'])->name('kafedra.index');
         Route::get('/kafedra-create',[KafedraController::class ,'create'])->name('kafedra.create');
         Route::post('/kafedra-store',[KafedraController::class,     'store'])->name('kafedra.store');
         Route::get('/kafedra-show/{id}',[KafedraController::class,     'show'])->name('kafedra.show');
         Route::get('/kafedra-edit/{id}',[KafedraController::class,     'edit'])->name('kafedra.edit');
         Route::post('/kafedra-update/{id}',[KafedraController::class,    'update'])->name('kafedra.update');
         Route::get('/kafedra-delete/{id}',[KafedraController::class,     'delete'])->name('kafedra.delete');

         // Tələbələr
         Route::get('/telebeler',[TelebeController::class,'index'])->name('telebe.index');


         //DEKANAT
         Route::resource('/dekanat', DekanatController::class);

        //TEACHER
        Route::resource('/teacher', TeacherController::class);

        //GROUP
        Route::resource('/group', GroupController::class);

        //LESSON
        Route::resource('/lesson', LessonController::class);

        //Exam Result
        Route::resource('/exam', ExamController::class);

        //Mesajlar
        Route::get('/messages',[MessageController::class,          'index'])->name('mesaj.index');
        Route::get('/messages/{id}',[MessageController::class,     'show'])->name('mesaj.show');
        Route::get('/messages/delete/{id}',[MessageController::class,     'delete'])->name('mesaj.delete');

        Route::get('/setting',[SettingController::class,     'index'])->name('setting.index');
        Route::post('/setting/{id}',[SettingController::class,    'update'])->name('setting.update');

    });
     Route::get('/exam-result',[ResultController::class,'index'])->name('result');
     Route::post('/about/{id}',[AboutController::class,    'update'])->name('about.update');


    Route::get('/',[AdminController::class,     'index'])->name('index');
    Route::get('/profil-update',[ProfilController::class,'edit'])->name('profil');
    Route::post('/profil-update',[ProfilController::class,'update'])->name('profil.update');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

});

});

//FRONT
Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/haqqimizda', [FrontController::class,'about'])->name('about');
Route::get('/korpuslar', [FrontController::class,'korpus'])->name('korpus');
Route::get('/korpus/{id}', [FrontController::class,'korpus_single'])->name('korpus_single');
Route::get('/elaqe', [FrontController::class,'contact'])->name('contact');
Route::post('/elaqe', [FrontController::class,'contact_post'])->name('contact_post');








