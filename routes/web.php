<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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


Route::get('/form', function () {
    return view('form');
});



Route::get('/rte', function () {
    return view('rte');
});

Route::post('/rtte', function () {
    dd(request()->input('editor_content')); // Output the content submitted from the editor
})->name("blabla");