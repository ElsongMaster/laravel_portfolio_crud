<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\backAboutController;
use App\Http\Controllers\backContactController;
use App\Http\Controllers\backFactsController;
use App\Http\Controllers\backPortfolioController;
use App\Http\Controllers\backServicesController;
use App\Http\Controllers\backSkillsController;
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


//READ
Route::get('/', [indexController::class,'index'])->name('home');
Route::get('/backoffice/about', [backAboutController::class,'index'])->name('backAbout');
Route::get('/backoffice/contact', [backContactController::class,'index'])->name('backContact');
Route::get('/backoffice/facts', [backFactsController::class,'index'])->name('backFacts');
Route::get('/backoffice/portfolio', [backPortfolioController::class,'index'])->name('backPortfolio');
Route::get('/backoffice/services', [backServicesController::class,'index'])->name('backServices');
Route::get('/backoffice/skills', [backSkillsController::class,'index'])->name('backSkills');



Route::get('/services/{id}/show', [backServicesController::class,'show'])->name('showService');
Route::get('/services/{id}/edit', [backServicesController::class,'edit'])->name('editService');
Route::PUT('/services/{id}/update', [backServicesController::class,'update'])->name('updateService');
Route::delete('/services/{id}/delete', [backServicesController::class,'destroy'])->name('deleteService');

Route::get('/facts/{id}/show', [backFactsController::class,'show'])->name('showFact');
Route::get('/facts/{id}/edit', [backFactsController::class,'edit'])->name('editFact');
Route::PUT('/facts/{id}/update', [backFactsController::class,'update'])->name('updateFact');
Route::delete('/facts/{id}/delete', [backFactsController::class,'destroy'])->name('deleteFact');


Route::get('/abouts/{id}/show', [backAboutController::class,'show'])->name('showAbout');
Route::get('/abouts/{id}/edit', [backAboutController::class,'edit'])->name('editAbout');
Route::PUT('/abouts/{id}/update', [backAboutController::class,'update'])->name('updateAbout');
Route::delete('/abouts/{id}/delete', [backAboutController::class,'destroy'])->name('deleteAbout');


Route::get('/portfolios/{id}/show', [backPortfolioController::class,'show'])->name('showPortfolio');
Route::get('/portfolios/{id}/edit', [backPortfolioController::class,'edit'])->name('editPortfolio');
Route::PUT('/portfolios/{id}/update', [backPortfolioController::class,'update'])->name('updatePortfolio');
Route::delete('/portfolios/{id}/delete', [backPortfolioController::class,'destroy'])->name('deletePortfolio');


Route::get('/skills/{id}/show', [backSkillsController::class,'show'])->name('showSkill');
Route::get('/skills/{id}/edit', [backSkillsController::class,'edit'])->name('editSkill');
Route::PUT('/skills/{id}/update', [backSkillsController::class,'update'])->name('updateSkill');
Route::delete('/skills/{id}/delete', [backSkillsController::class,'destroy'])->name('deleteSkill');



Route::get('/contacts/{id}/show', [backContactController::class,'show'])->name('showContact');
Route::get('/contacts/{id}/edit', [backContactController::class,'edit'])->name('editContact');
Route::PUT('/contacts/{id}/update', [backContactController::class,'update'])->name('updateContact');
Route::delete('/contacts/{id}/delete', [backContactController::class,'destroy'])->name('deleteContact');
