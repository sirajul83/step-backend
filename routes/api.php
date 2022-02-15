<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WebContentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ContactController;

// service
Route::get('/service', [ServiceController::class, "service"]);
Route::get('/service-heading', [WebContentController::class, "serviceHeading"]);

// portfolio
Route::get('/portfolio', [PortfolioController::class, "portfolio"]);
Route::get('/portfolio/{id}', [PortfolioController::class, "portfolio_info"]);
Route::get('/portfolio-heading', [WebContentController::class, "portfolioHeading"]);

// team
Route::get('/team', [TeamController::class, "team"]);
Route::get('/team-heading', [WebContentController::class, "teamHeading"]);

// about 
Route::get('/about-heading', [WebContentController::class, "aboutHeading"]);

// slider 
Route::get('/slider', [SliderController::class, "slider"]);

// experience
Route::get('/experience', [ExperienceController::class, "experience"]);
Route::get('/experience-heading', [WebContentController::class, "experienceHeading"]);

// slider 
Route::get('/companyinfo', [CompanyProfileController::class, "companyinfo"]);

// contact 
Route::post('/contact', [ContactController::class, "contact"]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
