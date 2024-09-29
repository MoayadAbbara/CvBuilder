<?php

use App\Http\Controllers\ResumeBuildFormController;
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
    Route::prefix('/builder')->controller(ResumeBuildFormController::class)->group(function () {
        Route::get('/personal-info', 'ShowPersonalInfoForm')->name('personal.info.form');
        Route::post('/personal-info', 'StorePersonalInfo')->name('personal.info.form.submit');
        Route::get('/experience/add', 'ShowExperienceForm')->name('experience.form');
        Route::post('/experience/add', 'StoreExperience')->name('experience.form.submit');
        Route::get('/experience/list', 'ShowExperienceList')->name('experience.form.list');
        Route::get('/education/add', 'ShowEducationForm')->name('education.form');
        Route::post('/education/add', 'StoreEducation')->name('education.form.submit');
        Route::get('/education/list', 'ShowEducationList')->name('education.form.list');
        Route::get('/skill/add', 'ShowSkillForm')->name('skill.form');
        Route::post('/skill/add', 'StoreSkill')->name('skill.form.submit');
        Route::get('/project/add', 'ShowProjectForm')->name('project.form');
        Route::post('/project/add', 'StoreProject')->name('project.form.submit');
        Route::get('/project/list', 'ShowProjectList')->name('project.form.list');
        Route::get('/language/add', 'ShowLanguageForm')->name('language.form');
        Route::post('/language/add', 'StoreLanguage')->name('language.form.submit');
        Route::get('/language/list', 'ShowLanguageList')->name('language.form.list');
    });
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


Route::post('/session', function (Illuminate\Http\Request $request) {
    $myArray = [
        'position' => $request->position,
        'company' => $request->company,
        'startdate' => $request->startdate,
        'enddate' => $request->enddate,
        'location' => $request->location,
        'details' => $request->details,
    ];
    $request->session()->push('experiences', $myArray);
    return redirect('/list');
})->name('session');

Route::get('/session', function (Illuminate\Http\Request $request) {
    return session('experiences');
    // $request->session()->forget('experiences');
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