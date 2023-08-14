<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
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
    return view('ebtehall.about');
});


/* part  form  and requst*/
Route::get('/d', function(){
    $name = request('Name');
    $email = request('Email');
    $subject = request('Subject');
 echo $name. "<br>" . $email .$subject.view('ebtEhall/contactsend');
});

/* part if-else */
Route::get('/{page}',function($page){
    if ($page==1){
        return view('ebtehall/about');

    }
elseif($page==2){
    return view('ebtehall.contactsend');
}
});


/*part single controller */
Route::get('/', function () {
    return view('welcome');});
Route::get('/home',[ TestController::class,'index'])->name('home.index'); 



/*Part CRUD CHANEL */
Route::get('/', function () {
    return view('welcome');
});
Route::resource("/student", StudentController::class);