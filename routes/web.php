<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RfqProjectController;
use App\Http\Controllers\AjaxController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/formbuilder/{id}', [App\Http\Controllers\HomeController::class, 'form'])->name('showformbuilder');
// Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');
Route::get('/form-list', [App\Http\Controllers\HomeController::class, 'formList'])->name('form_list');
Route::post('/createform', [App\Http\Controllers\HomeController::class, 'createform'])->name('createform');

Route::post('/save-show-hide-form', [HomeController::class, 'saveHideShowForm'])->name('save.show.hide.form');
Route::post('/enable-require-mask-field', [HomeController::class, 'enableRequireMaskField'])->name('enable.require.mask.field');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::controller(CompanyController::class)->prefix('company')->group(function () {

        Route::get('/project', 'project')->name('company.project');
        Route::get('/contacts', 'contacts')->name('company.contacts');
        Route::post('/createProject', 'createProject')->name('company.createProject');
        Route::post('/createContacts', 'createContacts')->name('company.createContacts');

        // inside company
        Route::post('/create', 'create')->name('company.create');
        // Route::get('/contract/{companyId?}', 'contract')->name('company.contract');
        // Route::get('/{companyId}/contract-team', 'contractTeam')->name('company.contract-team');
        Route::get('/{companyId}/contract', 'contract')->name('company.contract');
        Route::get('/{companyId}/contract/{contractId}','contractTeam')->name('company.contract-team');
        Route::get('/{companyId}/conversation', 'conversation')->name('company.conversation');
        Route::get('/{companyId}/overview', 'overview')->name('company.overview');
        Route::get('/{companyId}/contacts', 'companyContacts')->name('company.companyContacts');
        Route::get('/{companyId}/activity', 'companyActivity')->name('company.activity');
        Route::get('/{companyId?}/files', 'files')->name('company.files');
    });


    Route::controller(RfqProjectController::class)->prefix('rfqproject')->group(function () {
        // inside rfq project
        // Route::post('/create', 'create')->name('rfqproject.create');
        // Route::get('/{rfqId}/contract', 'contract')->name('rfqproject.contract');
        // Route::get('/{rfqId}/contract/{contractId}','contractTeam')->name('rfqproject.contract-team');
        Route::get('/{rfqId}/conversation', 'conversation')->name('rfqproject.conversation');
        Route::get('/{rfqId}/contacts', 'rfqContacts')->name('rfqproject.rfqContacts');
        Route::get('/{rfqId}/activity', 'projectActivity')->name('rfqproject.activity');
        Route::get('/{rfqId}/overview', 'overview')->name('rfqproject.overview');
        Route::get('/{rfqId}/guestlist', 'guestlist')->name('rfqproject.guestlist');
        Route::post('/guestcreate', 'guestcreate')->name('rfqproject.guestcreate');
        Route::get('/{rfqId}/files', 'files')->name('rfqproject.files');
         Route::get('/{rfqId}/manageproject', 'manageProject')->name('rfqproject.manageproject');
    });


});

// ajax routes

Route::get('/contacts', [App\Http\Controllers\AjaxController::class, 'getContactPerson'])->name('contacts');
Route::post('/create-contact', [App\Http\Controllers\AjaxController::class, 'createContactPerson'])->name('create-contact');
Route::post('/updateprojectstatus', [App\Http\Controllers\AjaxController::class, 'projectStatusUpdate'])->name('updateprojectstatus');

