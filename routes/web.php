<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::post("/pocket-option-notify", [UserController::class, "pocketOptionNotify"])->name("pocket.option.notify");
Route::get("/", [UserController::class, "index"])->name("index");
Route::middleware("guest")->group(function () {
    Route::get("/signup", [UserController::class, "signup"])->name("signup");
    Route::post("/signup", [UserController::class, "createUser"])->name("signup.post");
    Route::get("/login", [UserController::class, "login"])->name("login");
    Route::post("/login", [UserController::class, "Auth"])->name("login.post");
    Route::get("/email-verif", [UserController::class, "emailVerification"])->name("email.verification");
    Route::get("/reset-password", [UserController::class, "resetPassword"])->name("reset.password");
});

Route::middleware("admin")->prefix("admin")->group(function (){
    Route::get("/main", [UserController::class, "indexAdmin"])->name("indexAdmin");
    Route::post("/user/access", [UserController::class, "accessUser"])->name("admin.user.access");
    Route::post("/user/ban", [UserController::class, "banUser"])->name("admin.user.ban");
    Route::get("/settings", [UserController::class, "settingsAdmin"])->name("admin.settings");
    Route::post("/settings", [UserController::class, "settingsSave"])->name("admin.settings.save");
    Route::post("/reviews/create", [UserController::class, "createReview"])->name("admin.reviews.create");
    Route::get("/reviews/delete/{id}", [UserController::class, "deleteReview"])->name("admin.reviews.delete:id");
});
Route::middleware("auth")->group(function () {
    Route::get("/logout", [UserController::class, "logout"])->name("logout");
    Route::get("/lk", [UserController::class, "lk"])->name("lk");
    Route::get("/lk/settings", [UserController::class, "settings"])->name("lk.settings");
    Route::post("/lk/settings/base", [UserController::class, "baseSettingsSave"])->name("lk.settings.base.save");
    Route::post("/lk/settings/password", [UserController::class, "changePassword"])->name("lk.settings.password.save");
    Route::post("/lk/application/request", [UserController::class, "applicationRequest"])->name("lk.application.request");
    Route::post("/lk/checkUser", [UserController::class, "checkUser"])->name("lk.checkUser");

});
