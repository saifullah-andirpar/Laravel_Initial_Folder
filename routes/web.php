<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Models\Students;  // ← এই লাইন যোগ করুন
use App\Http\Controllers\StudentsController;


Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

// Route::get('/',function(){
//     return view ('app');
// });

// Route::get('teachers',function(){
//     return students::all();
// });

Route::get('teachers',function(){
    return students::all();
});




// Route::get('teachers', [StudentsController::class,'index']);
