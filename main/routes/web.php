<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about_us');
Route::get('/our-solutions', [HomeController::class, 'solution'])->name('our_solutions');
Route::get('/our-solutions/aws', [HomeController::class, 'awsSolution'])->name('solution_aws');
Route::get('/our-solutions/gcp', [HomeController::class, 'gcpSolution'])->name('solution_gcp');
Route::get('/our-solutions/huawei', [HomeController::class, 'huaweiSolution'])->name('solution_huawei');
Route::get('/our-solutions/samsung', [HomeController::class, 'samsungSolution'])->name('solution_samsung');
Route::get('/our-solutions/ibm', [HomeController::class, 'ibmSolution'])->name('solution_ibm');
Route::get('/our-solutions/sap', [HomeController::class, 'sapSolution'])->name('solution_sap');
Route::get('/our-solutions/salesforce', [HomeController::class, 'salesforceSolution'])->name('solution_salesforce');
Route::get('/our-solutions/yonyou', [HomeController::class, 'yonyouSolution'])->name('solution_yonyou');
Route::get('/our-solutions/{slug}', [HomeController::class, 'solutionDetail'])
    ->where('slug', '^(?!sap$|salesforce$|yonyou$)[a-z0-9-]+$')
    ->name('our_solution_detail');
Route::get('/our-solutions/sap/s4hana-cloud-private-edition', [HomeController::class, 'sapPrivateEdition'])->name('sap_private_edition');
Route::get('/our-solutions/sap/s4hana-cloud-public-edition', [HomeController::class, 'sapPublicEdition'])->name('sap_public_edition');
Route::get('/success-stories', [HomeController::class, 'stories'])->name('success_stories');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactStore'])->name('contact_store');
Route::view('/maintenance', 'maintenance')->name('maintenance');

Route::fallback(function () {
    return view('maintenance');
});
