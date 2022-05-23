<?php

use Illuminate\Support\Facades\Route;
use thiagoalessio\TesseractOCR\TesseractOCR;

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
use App\Http\Controllers\ImportController;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('import-users', [ImportController::class, 'importUsers']);
Route::post('import', [ImportController::class, 'importData']);
Route::post('import-aka-kmh', [ImportController::class, 'importAkaKmh']);
Route::post('import-kepegawaian', [ImportController::class, 'importKepegawaian']);

Route::get('/dashboard', function () {
    $image = 'test.png';
    $ocr = new TesseractOCR();
    $ocr->image(public_path($image));
    $text = $ocr->run();

    // $recipients = [
    //     'c-KIjk5pTnmzFz7wobvHSo:APA91bGNsFR3crDXu5eimLmW3p9XIb9oArjEo4U8rJ9Plbus8LMAbb_U7-0DWDpj3h3gtStaqKJ8Xn-ov4nWD6HD-e_E5Vd1hRxsU_AGIEpkQIEziQFBmqKUrU0Hyntc6EEHg1Ht-GFC',
    // ];
    
    // fcm()
    //     ->to($recipients)
    //     ->priority('high')
    //     ->timeToLive(0)
    //     ->notification([
    //         'title' => 'Laravel',
    //         'body' => 'This is a test of Laravel',
    //     ])
    //     ->send();

    return view('dashboard', compact('text', 'image'));
})->name('dashboard');
// ->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';