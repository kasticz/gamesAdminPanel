<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',function(){
    return redirect()->route('home');
});



Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin','middleware'=>'auth'],function(){  
    Route::get('/','IndexController')->name('admin.index');
    Route::group(['namespace'=>'Games'],function(){
        Route::get('/games','IndexController')->name('admin.games.index');
        Route::get('/games/create','CreateController')->name('admin.games.create');
        Route::post('/games','StoreController')->name('admin.games.store');
        Route::get('/games/search','SearchController')->name('admin.games.search');
        Route::get('games/restore','RestoreController')->name('admin.games.restore');
        Route::get('/games/{game}','ShowController')->name('admin.games.show');
        Route::get('/games/{game}/edit','EditController')->name('admin.games.edit');
        Route::patch('/games/{game}','UpdateController')->name('admin.games.update');
        Route::delete('/games/{game}','DestroyController')->name('admin.games.destroy');
    });
});

Route::group(['namespace'=>'App\Http\Controllers\User','prefix'=>'user','middleware'=>'auth'],function(){  
    Route::get('/','IndexController')->name('user.index');
    Route::group(['namespace'=>'Games'],function(){
        Route::get('/games','IndexController')->name('user.games.index');
        Route::get('/games/create','CreateController')->name('user.games.create');
        Route::post('/games','StoreController')->name('user.games.store');
        Route::get('/games/search','SearchController')->name('user.games.search');
        Route::get('games/restore','RestoreController')->name('user.games.restore');
        Route::get('/games/{game}','ShowController')->name('user.games.show');
        Route::get('/games/{game}/edit','EditController')->name('user.games.edit');
        Route::patch('/games/{game}','UpdateController')->name('user.games.update');
        Route::delete('/games/{game}','DestroyController')->name('user.games.destroy');
    });
});














Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
