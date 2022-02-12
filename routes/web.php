<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WebContentController;


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

Route::get('/', function () {
    return view('user.login');
});

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// user management
Route::get('/user-list',             [UserController::class, 'index'])->name('user.list');
Route::get('/user-create',           [UserController::class, 'create'])->name('user.create');
Route::post('/user-store',           [UserController::class, 'store'])->name('user.store');
Route::get('/user-edit/{id}',        [UserController::class, 'edit'])->name('user.edit');
Route::post('/user-update/{id}',     [UserController::class, 'update'])->name('user.update');
Route::get('/user-delete/{id}',      [UserController::class, 'delete'])->name('user.delete');
Route::get('/user-profile',          [UserController::class, 'profile'])->name('user.profile');
Route::get('/user-change-password',  [UserController::class, 'change_password'])->name('user.change_password');
Route::post('/change-password-store',[UserController::class, 'change_password_store'])->name('user.change_password_store');

// Company Profile
Route::get('/company-profile',      [CompanyProfileController::class, 'index'])->name('company.profile');
Route::post('/company-profile-save', [CompanyProfileController::class, 'company_profile_save'])->name('company_profile_save');

// Slider
Route::get('/slider-list',        [SliderController::class, 'index'])->name('slider.list');
Route::get('/slider-create',      [SliderController::class, 'create'])->name('slider.create');
Route::post('/slider-store',      [SliderController::class, 'store'])->name('slider.store');
Route::get('/slider-edit/{id}',   [SliderController::class, 'edit'])->name('slider.edit');
Route::post('/slider-update/{id}',[SliderController::class, 'update'])->name('slider.update');
Route::get('/slider-delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');

// Service
Route::get('/service-list',        [ServiceController::class, 'index'])->name('service.list');
Route::get('/service-create',      [ServiceController::class, 'create'])->name('service.create');
Route::post('/service-store',      [ServiceController::class, 'store'])->name('service.store');
Route::get('/service-edit/{id}',   [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/service-update/{id}',[ServiceController::class, 'update'])->name('service.update');
Route::get('/service-delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');

// Team
Route::get('/team_member-list',         [TeamController::class, 'index'])->name('team_member.list');
Route::get('/team-member-create',      [TeamController::class, 'create'])->name('team_member.create');
Route::post('/team-member-store',      [TeamController::class, 'store'])->name('team_member.store');
Route::get('/team-member-edit/{id}',   [TeamController::class, 'edit'])->name('team_member.edit');
Route::post('/team-member-update/{id}',[TeamController::class, 'update'])->name('team_member.update');
Route::get('/team-member-delete/{id}', [TeamController::class, 'destroy'])->name('team_member.delete');

// Experience
Route::get('/experience-list',        [ExperienceController::class, 'index'])->name('experience.list');
Route::get('/experience-create',      [ExperienceController::class, 'create'])->name('experience.create');
Route::post('/experience-store',      [ExperienceController::class, 'store'])->name('experience.store');
Route::get('/experience-edit/{id}',   [ExperienceController::class, 'edit'])->name('experience.edit');
Route::post('/experience-update/{id}',[ExperienceController::class, 'update'])->name('experience.update');
Route::get('/experience-delete/{id}', [ExperienceController::class, 'destroy'])->name('experience.delete');

// Portfolio
Route::get('/portfolio-list',        [PortfolioController::class, 'index'])->name('portfolio.list');
Route::get('/portfolio-create',      [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/portfolio-store',      [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio-edit/{id}',   [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::post('/portfolio-update/{id}',[PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('/portfolio-delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');

// Web Content
Route::get('/web_content-list',        [WebContentController::class, 'index'])->name('web_content.list');
Route::get('/web_content-create',      [WebContentController::class, 'create'])->name('web_content.create');
Route::post('/web_content-store',      [WebContentController::class, 'store'])->name('web_content.store');
Route::get('/web_content-edit/{id}',   [WebContentController::class, 'edit'])->name('web_content.edit');
Route::post('/web_content-update/{id}',[WebContentController::class, 'update'])->name('web_content.update');
Route::get('/web_content-delete/{id}', [WebContentController::class, 'destroy'])->name('web_content.delete');