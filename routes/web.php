<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;




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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';





//CATEGORY তে থাকা সকল PAGE এর ROUTE////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/category/dashboard', [CategoryController::class, 'dashboard'])->name('category.dashboard');
Route::get('/category/home', [CategoryController::class, 'home'])->name('category.home');
Route::get('/category/about', [CategoryController::class, 'about'])->name('category.about');
Route::get('/category/education', [CategoryController::class, 'education'])->name('category.education');
Route::get('/category/experiance', [CategoryController::class, 'experiance'])->name('category.experiance');
Route::get('/category/help', [CategoryController::class, 'help'])->name('category.help');
Route::get('/category/profile_view_after_registration', [CategoryController::class, 'profile_view_after_registration'])->name('category.profile_view_after_registration');
Route::get('/category/profile_edit', [CategoryController::class, 'profile_edit'])->name('category.profile_edit');
Route::get('/category/skills', [CategoryController::class, 'skills'])->name('category.skills');
Route::get('/category/work', [CategoryController::class, 'work'])->name('category.work');
Route::get('/category/create_account', [CategoryController::class, 'create_account'])->name('category.create_account');
Route::get('/category/profile_edit_after_login', [CategoryController::class, 'profile_edit_after_login'])->name('category.profile_edit_after_login');

Route::get('/category/educationAfterLogin', [CategoryController::class, 'educationAfterLogin'])->name('category.educationAfterLogin');
Route::get('/category/experianceAfterLogin', [CategoryController::class, 'experianceAfterLogin'])->name('category.experianceAfterLogin');
Route::get('/category/skillsAfterLogin', [CategoryController::class, 'skillsAfterLogin'])->name('category.skillsAfterLogin');
Route::get('/category/workAfterLogin', [CategoryController::class, 'workAfterLogin'])->name('category.workAfterLogin');













//STORE DATA//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//STORE DATA OF create_account.blade.php
Route::post('createAccountStore', [CategoryController::class, 'createAccountStore']);





















//UPDATE DATA AFTER REGISTRATION/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//UPDATE PROFILE DATA
Route::patch('updateProfile/{lastUserIdReceived}', [CategoryController::class, 'updateProfile']);

//UPDATE ABOUT DATA
Route::patch('updateAbout/{lastUserIdReceived}', [CategoryController::class, 'updateAbout']);

//UPDATE WORK DATA
Route::patch('updateWork/{lastUserIdReceived}', [CategoryController::class, 'updateWork']);

//UPDATE EDUCATION DATA
Route::patch('updateEducation/{lastUserIdReceived}', [CategoryController::class, 'updateEducation']);

//UPDATE EXPERIANCE DATA
Route::patch('updateExperiance/{lastUserIdReceived}', [CategoryController::class, 'updateExperiance']);

//UPDATE SKILL DATA
Route::patch('updateSkill/{lastUserIdReceived}', [CategoryController::class, 'updateSkill']);

//UPDATE PERSONAL DATA
Route::patch('updatePersonal/{lastUserIdReceived}', [CategoryController::class, 'updatePersonal']);

//UPDATE SOCIAL MEDIA DATA
Route::patch('updateSocialMedia/{lastUserIdReceived}', [CategoryController::class, 'updateSocialMedia']);





















//DOWNLOAD DATA//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//ROUTE FOR DOWLNLOAD CV PDF FROM LARAVEL FOLDER
Route::get('/pdfDownload/{cv_uploaded}', [CategoryController::class, 'pdfDownload']);

//ROUTE FOR DOWLNLOAD WORK PDF FROM LARAVEL FOLDER
Route::get('/downloadWork/{completed_work_file}', [CategoryController::class, 'downloadWork']);

//ROUTE FOR DOWNLOAD PROFILE
Route::get('/downloadProfile/', [CategoryController::class, 'downloadProfile']);

//ROUTE FOR DOWNLOAD PROFILE
Route::get('/downloadProfileAfterLogin/', [CategoryController::class, 'download_profile_after_login']);




















//ROUTE FOR SEARCH EMPLOYEE//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/category/search', [CategoryController::class, 'search'])->name('category.search');
Route::get('/search/', [CategoryController::class, 'searchEmployee']);




















//SHOW DATA///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/category/profile_view_home_details_button/{id}', [CategoryController::class, 'profile_view_home_details_button'])->name('category.profile_view_home_details_button');
Route::get('/category/profile_view_search_details_button/{id}', [CategoryController::class, 'profile_view_search_details_button'])->name('category.profile_view_search_details_button');
Route::get('/category/profile_view_after_login', [CategoryController::class, 'profile_view_after_login'])->name('category.profile_view_after_login');

Route::get('/category/hired_employee/{id}', [CategoryController::class, 'hired_employee'])->name('category.hired_employee');


















//UPDATE DATA AFTER LOGIN/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//UPDATE PROFILE DATA
Route::patch('updateProfileAfterLogin/{id}', [CategoryController::class, 'updateProfileAfterLogin']);

//UPDATE ABOUT DATA
Route::patch('updateAboutAfterLogin/{id}', [CategoryController::class, 'updateAboutAfterLogin']);

//UPDATE WORK DATA
Route::patch('updateWorkAfterLogin/{id}', [CategoryController::class, 'updateWorkAfterLogin']);

//UPDATE EDUCATION DATA
Route::patch('updateEducationAfterLogin/{id}', [CategoryController::class, 'updateEducationAfterLogin']);

//UPDATE EXPERIANCE DATA
Route::patch('updateExperianceAfterLogin/{id}', [CategoryController::class, 'updateExperianceAfterLogin']);

//UPDATE SKILL DATA
Route::patch('updateSkillAfterLogin/{id}', [CategoryController::class, 'updateSkillAfterLogin']);

//UPDATE PERSONAL DATA
Route::patch('updatePersonalAfterLogin/{id}', [CategoryController::class, 'updatePersonalAfterLogin']);

//UPDATE SOCIAL MEDIA DATA
Route::patch('updateSocialMediaAfterLogin/{id}', [CategoryController::class, 'updateSocialMediaAfterLogin']);
