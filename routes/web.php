<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeBOController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes Back-Office
Route::get('/backoffice',[HomeBOController::class, 'index'])->name('hombo');

// Routes About Back-Office
Route::get('/about_bo', [AboutController::class, 'index'])->name('about_bo');
Route::get('/createAbout', [AboutController::class, 'create'])->name('createAbout');
Route::post('/aboutBO', [AboutController::class, 'store'])->name('storeAbout');
Route::delete('/aboutBO/{id}/delete', [AboutController::class, 'destroy'])->name('deleteAbout');
Route::get('/aboutBO/show', [AboutController::class, 'show'])->name('showAbout');
Route::get('/aboutBO/edit', [AboutController::class, 'edit'])->name('editAbout');
Route::put('/aboutBO/update', [AboutController::class, 'update'])->name('updateAbout');

// Routes Contact Back-Office
Route::get('/contact_bo', [ContactController::class, 'index'])->name('contact_bo');
Route::get('/createContact', [ContactController::class, 'create'])->name('createContact');
Route::post('/contactBO', [ContactController::class, 'store'])->name('storeContact');
Route::delete('/contactBO/{id}/delete', [ContactController::class, 'destroy'])->name('deleteContact');
Route::get('/contactBO/show', [ContactController::class, 'show'])->name('showContact');
Route::get('/contactBO/{id}/edit', [ContactController::class, 'edit'])->name('editContact');
Route::put('/contactBO/{id}/update', [ContactController::class, 'update'])->name('updateContact');

// Routes Portfolio Back-Office
Route::get('/portfolio_bo', [PortfolioController::class, 'index'])->name('portfolio_bo');
Route::get('/createPortfolio', [PortfolioController::class, 'create'])->name('createPortfolio');
Route::post('/portfolioBO', [PortfolioController::class, 'store'])->name('storePort');
Route::delete('/portfolioBO/{id}/delete', [PortfolioController::class, 'destroy'])->name('deletePortfolio');
Route::get('/portfolioBO/show', [PortfolioController::class, 'show'])->name('showPortfolio');
Route::get('/portfolioBO/{id}/edit', [PortfolioController::class, 'edit'])->name('editPortfolio');
Route::put('/portfolioBO/{id}/update', [PortfolioController::class, 'update'])->name('updatePortfolio');

// Routes Skill Back-Office
Route::get('/skill_bo', [SkillController::class, 'index'])->name('skill_bo');
Route::get('/createSkill', [SkillController::class, 'create'])->name('createSkill');
Route::post('/skillBO', [SkillController::class, 'store'])->name('storePort');
Route::delete('/skillBO/{id}/delete', [SkillController::class, 'destroy'])->name('deleteSkills');
Route::get('/skillBO/show', [SkillController::class, 'show'])->name('showSkill');
Route::get('/skillBO/{id}/edit', [SkillController::class, 'edit'])->name('editSkills');
Route::put('/skillBO/{id}/update', [SkillController::class, 'update'])->name('updateSkills');

