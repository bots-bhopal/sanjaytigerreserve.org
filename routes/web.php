<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ServerAdminController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\TouristController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

// Route::get('/down', function () {
//     return Artisan::call('down');
// });

// Route::get('/up', function () {
//     return Artisan::call('up');
// });

// Route::get('language/{lang}', function ($lang) {
//     Session::put('locale', $lang);
//     return redirect()->back();
// })->middleware('language');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch')->middleware('language');

Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [MainController::class, 'index'])->name('str.index')->middleware('language');
Route::get('/gallery', [MainController::class, 'fetchAllImages'])->name('str.gallery')->middleware('language');
Route::get('/tender-download/{filename}', [TenderController::class, 'download'])->name('str.tender.download');
Route::get('/docs-download/{filename}', [DocumentController::class, 'download'])->name('str.docs.download');

Route::group(['prefix' => 'tender', 'middleware' => 'language'], function () {
    Route::get('/tenders', [TenderController::class, 'tenders'])->name('str.tenders');
});

Route::group(['prefix' => 'document', 'middleware' => 'language'], function () {
    Route::get('/documents', [DocumentController::class, 'docs'])->name('str.docs');
});

Route::group(['prefix' => 'about', 'middleware' => 'language'], function () {
    Route::get('/introduction', [AboutController::class, 'introduction'])->name('str.about-introduction');
    Route::get('/history', [AboutController::class, 'history'])->name('str.history');
    Route::get('/conservation-history', [AboutController::class, 'conservationHistory'])->name('str.conservation-history');
    Route::get('/reserve-profile', [AboutController::class, 'reserveProfile'])->name('str.reserve-profile');
    Route::get('/forest-type', [AboutController::class, 'forestType'])->name('str.forest-type');
    Route::get('/topography', [AboutController::class, 'topography'])->name('str.topography');
    Route::get('/significance', [AboutController::class, 'significance'])->name('str.significance');
});

Route::group(['prefix' => 'bio', 'middleware' => 'language'], function () {
    // Route::get('/introduction', [BioController::class, 'introduction'])->name('str.bio-introduction');
    Route::get('/flora', [BioController::class, 'flora'])->name('str.flora');
    Route::get('/fauna', [BioController::class, 'fauna'])->name('str.fauna');
    Route::get('/avifauna', [BioController::class, 'avifauna'])->name('str.avifauna');
    Route::get('/butterflies', [BioController::class, 'butterflies'])->name('str.butterflies');
    Route::get('/rare-species', [BioController::class, 'rareSpecies'])->name('str.rare-species');
});

Route::group(['prefix' => 'tourist', 'middleware' => 'language'], function () {
    Route::get('/location', [TouristController::class, 'location'])->name('str.location');
    Route::get('/how-to-reach', [TouristController::class, 'howToReach'])->name('str.how-to-reach');
    Route::get('/best-time-to-visit', [TouristController::class, 'bestTimeToVisit'])->name('str.best-time-to-visit');
    Route::get('/weather', [TouristController::class, 'weather'])->name('str.weather');
    Route::get('/safari-zones', [TouristController::class, 'safariZones'])->name('str.safari-zones');
    // Route::get('/excursion-and-charges', [TouristController::class, 'excursion'])->name('str.excursion');
    Route::get('/point-of-interests', [TouristController::class, 'pointOfInterests'])->name('str.point-of-interests');
    Route::get('/stay', [TouristController::class, 'stay'])->name('str.stay');
    Route::get('/dos', [TouristController::class, 'dos'])->name('str.dos');
});

Route::group(['prefix' => 'management', 'middleware' => 'language'], function () {
    Route::get('/admin-body', [ManagementController::class, 'adminBody'])->name('str.admin-body');
    Route::get('/goals', [ManagementController::class, 'goals'])->name('str.goals');
    Route::get('/objectives', [ManagementController::class, 'objectives'])->name('str.objectives');
    // Route::get('/training', [ManagementController::class, 'training'])->name('str.training');
    Route::get('/contact', [ManagementController::class, 'contact'])->name('str.contact');
});

Route::group(['prefix' => 'news', 'middleware' => 'language'], function () {
    Route::get('/newses', [MainController::class, 'newses'])->name('str.newses');
    Route::get('/news-details/{slug}', [MainController::class, 'news_details'])->name('str.news-details');
});

Route::group(['prefix' => 'events', 'middleware' => 'language'], function () {
    Route::get('/events', [MainController::class, 'events'])->name('str.events');
    Route::get('/event-details/{slug}', [MainController::class, 'event_details'])->name('str.event-details');
});

Auth::routes(['register' => false]);

Route::group(['as' => 'serveradmin.', 'prefix' => 'serveradmin', 'middleware' => ['auth', 'isServeradmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');

    // For Tender Quotation
    Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');

    // For Documents
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
    // Change Admin Password
    Route::get('adminChangePassword/{id}', [SettingsController::class, 'adminChangePassword'])->name('changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', [SettingsController::class, 'adminUpdatePassword'])->name('updateadminpassword');
    // Change Superadmin Password
    Route::get('superAdminChangePassword/{id}', [SettingsController::class, 'superAdminChangePassword'])->name('changesuperadminpassword');
    Route::match(['get', 'put'], 'superAdminUpdatePassword/{id}', [SettingsController::class, 'superAdminUpdatePassword'])->name('updatesuperadminpassword');

    // For Admin List
    Route::get('/adminList', [ServerAdminController::class, 'index'])->name('adminList');
    Route::get('/superAdminList', [ServerAdminController::class, 'superAdminList'])->name('superAdminList');
    Route::get('/role-edit/{id}', [ServerAdminController::class, 'editUserRole'])->name('editUserRole');
    Route::get('/superadmin-role-edit/{id}', [ServerAdminController::class, 'editSuperAdminRole'])->name('editSuperAdminRole');
    Route::match(['get', 'put'], '/role-update/{id}', [ServerAdminController::class, 'updateUserRole'])->name('updateUserRole');
    Route::match(['get', 'put'], '/superadmin-role-update/{id}', [ServerAdminController::class, 'updateSuperAdminRole'])->name('updateSuperAdminRole');
    Route::delete('/role-delete/{id}', [ServerAdminController::class, 'deleteUserRole'])->name('deleteUserRole');
    Route::get('/changenewsstatus', [ServerAdminController::class, 'changeNewsStatus'])->name('changeNewsStatus');
    Route::get('/changeeventstatus', [ServerAdminController::class, 'changeEventStatus'])->name('changeEventStatus');
    Route::get('/changetenderstatus', [ServerAdminController::class, 'changeTenderStatus'])->name('changeTenderStatus');
    Route::get('/changedocumentstatus', [ServerAdminController::class, 'changeDocumentStatus'])->name('changeDocumentStatus');
    Route::get('/changeuserstatus', [ServerAdminController::class, 'changeUserStatus'])->name('changeUserStatus');
    Route::get('/changeimagestatus', [ServerAdminController::class, 'changeImageStatus'])->name('changeImageStatus');
});

Route::group(['as' => 'superadmin.', 'prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');

    // For Tender Quotation
    Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');

    // For Documents
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
    Route::get('adminChangePassword/{id}', [SettingsController::class, 'adminChangePassword'])->name('changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', [SettingsController::class, 'adminUpdatePassword'])->name('updateadminpassword');

    // For User List
    Route::get('/adminList', [ServerAdminController::class, 'index'])->name('adminList');
    Route::get('/role-edit/{id}', [ServerAdminController::class, 'editUserRole'])->name('editUserRole');
    Route::match(['get', 'put'], '/role-update/{id}', [ServerAdminController::class, 'updateUserRole'])->name('updateUserRole');
    Route::delete('/role-delete/{id}', [ServerAdminController::class, 'deleteUserRole'])->name('deleteUserRole');
    Route::get('/changenewsstatus', [ServerAdminController::class, 'changeNewsStatus'])->name('changeNewsStatus');
    Route::get('/changeeventstatus', [ServerAdminController::class, 'changeEventStatus'])->name('changeEventStatus');
    Route::get('/changetenderstatus', [ServerAdminController::class, 'changeTenderStatus'])->name('changeTenderStatus');
    Route::get('/changedocumentstatus', [ServerAdminController::class, 'changeDocumentStatus'])->name('changeDocumentStatus');
    Route::get('/changeuserstatus', [ServerAdminController::class, 'changeUserStatus'])->name('changeUserStatus');
    Route::get('/changeimagestatus', [ServerAdminController::class, 'changeImageStatus'])->name('changeImageStatus');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');

    // For Tender Quotation
    Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');

    // For Documents
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
});
