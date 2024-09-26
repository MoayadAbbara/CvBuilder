<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});


Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
    Route::post('register', [AuthController::class, 'Register'])->name('register');
    Route::get('login', [AuthController::class, 'ShowLoginForm'])->name('login.form');
    Route::post('login', [AuthController::class, 'Login'])->name('login');
});


Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/send-data', function () {
    $response = Http::withHeaders([
        "Content-Type" => "application/json",
    ])->post("http://127.0.0.1:5001/api/generate_pdf", [
                "TemplateId" => 4,
                "data" => [
                    "Num1" => 100,
                    "Num2" => 10,
                ],
            ]);
    if ($response->successful()) {
        return response($response->body(), 200)
            ->header('Content-Type', 'application/pdf');
    }
    return response()->json(['error' => 'Could not generate PDF'], 500);
});


Route::get('/form/1', function () {
    return view('form');
});

Route::get('/form/2', function () {
    return view('form2');
});



Route::get('/rte', function () {
    return view('rte');
});


Route::post('/rtte', function (Illuminate\Http\Request $request) {
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
    ])->post("http://127.0.0.1:5001/api/generate_pdf", [
                "TemplateId" => 7,
                "data" => [
                    "fname" => $request->fname,
                    "lname" => $request->lname,
                    "summary" => $request->summary,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "address" => $request->address
                ]
            ]);

    if ($response->successful()) {
        return response($response->body(), 200)
            ->header('Content-Type', 'application/pdf');
    }
    return response()->json(['error' => 'Could not generate PDF'], 500);
})->name("blabla");