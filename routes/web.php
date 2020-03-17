<?php

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

use App\Models\Product;



Auth::routes();

Route::get('/', function () {
    return view('login');
})->middleware('guest')->name('login.form');

Route::group(["namespace" => "Front"], function() {
    
    Route::get('/home', 'AppController@index')->name('home');
    // Profil 
    Route::get('/profile', 'AppController@profile')->name('profile');
    Route::get('/favorites', 'AppController@favorites')->name('favorites');
    // Formations
    Route::get('/formations', 'MasterclassController@index')->name('front.masterclasses.index');
    Route::get('/formations/mes-enregistrements', 'MasterclassController@records')->name('front.masterclasses.records');
    Route::get('/formations/{id}/edit', 'MasterclassController@editRegister')->name('front.masterclasses.edit');
    Route::get('/formations/{id}', 'MasterclassController@show')->name('front.masterclasses.show');
    Route::post('/formations/{id}/register', 'MasterclassController@register')->name('front.masterclasses.register.post');
    Route::post('/formations/{id}/deregister', 'MasterclassController@deregister')->name('front.masterclasses.deregister.post');
    Route::post('/formations/{id}/update-register', 'MasterclassController@updateRegister')->name('front.masterclasses.update-register.post');
    Route::post('/formations/toggle-favorite', 'MasterclassController@toggleFavorite')->name('front.masterclasses.toggle-favorite.ajax');
    Route::post('/formations/remove-favorite', 'MasterclassController@removeFavorite')->name('front.masterclasses.remove-favorite.ajax');
    //Exploded Views
    Route::get('/vues-eclatees/', 'ExplodedViewController@index')->name('front.explodedviews.index');
    Route::get('/vues-eclatees/par-marque/{id}', 'ExplodedViewController@byBrand')->name('front.explodedviews.brand');
    Route::get('/vues-eclatees/favorites', 'ExplodedViewController@favorites')->name('front.explodedviews.favorites');
    Route::get('/vues-eclatees/{id}', 'ExplodedViewController@show')->name('front.explodedviews.show');
    Route::post('/vues-eclatees/toggle-favorite', 'ExplodedViewController@toggleFavorite')->name('front.explodedviews.toggle-favorite.ajax');
    Route::post('/vues-eclatees/remove-favorite', 'ExplodedViewController@removeFavorite')->name('front.explodedviews.remove-favorite.ajax');
    // Documents
    Route::get('/documents', 'DocumentController@index')->name('front.documents.index');
    Route::get('/documents/favorites', 'DocumentController@favorites')->name('front.documents.favorites');
    Route::get('/documents/brand/{id}', 'DocumentController@byBrand')->name('front.documents.brand');
    // FAQ
    Route::get('/foire-aux-questions', 'QuestionAnswerController@index')->name('front.faq.index');
    // Videos
    Route::get('/videos', 'VideoController@index')->name('front.videos.index');
    Route::post('/videos/toggle-favorite', 'VideoController@toggleFavorite')->name('front.videos.toggle-favorite.ajax');
    // Annuaire
    Route::get('/annuaire', 'PhonebookController@index')->name('front.phonebook.index');

    Route::resource('/warranties', 'ClaimController', ['as' => 'front']);

    Route::resource('/feedbacks', 'FeedbackController', ['as' => 'front']);

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    // Tableau de Bord
    Route::get('/dashboard', 'AppController@dashboard')->name('dashboard');
    // Masterclasses
    Route::get('/masterclasses/archives', 'MasterclassController@archives')->name('masterclasses.archives');
    Route::resource('/masterclasses', 'MasterclassController');
    // Retours de Formation
    Route::get('/feedbacks/create/{id?}', 'FeedbackController@create')->name('feedbacks.create');
    Route::resource('/feedbacks', 'FeedbackController')->except(['create']);
    // Brands
    Route::resource('/brands', 'BrandController');
    Route::get('/products/{id}/import-parts', 'ProductController@importPartsForm')->name('products.parts.import.get');
    // Seasons
    Route::resource('/seasons', 'SeasonController');
    // Families
    Route::resource('/families', 'FamilyController');
    // Products
    Route::get('/products/{id}/import-parts', 'ProductController@importPartsForm')->name('products.parts.import.get');
    Route::resource('/products', 'ProductController');
    Route::get('/products/{id}/empty-bom', 'ProductController@emptyBOM')->name('products.bom.empty');
    Route::post('/products/{id}/import-parts', 'ProductController@importParts')->name('products.parts.import.post');
    // Documents et Type de documents
    Route::resource('/documents', 'DocumentController');
    Route::resource('/doctypes', 'DoctypeController');
    /** F.A.Q */
    Route::resource('/faq', 'QuestionAnswerController');
    Route::post('/faq/sort', 'QuestionAnswerController@sortQuestions')->name('faq.sort.post');
    // Vidéos
    Route::resource('/videos', 'VideoController');
    // Annuaire
    Route::resource('/phonebook', 'PhonebookController');
    // Weblinks
    Route::resource('/weblinks', 'WeblinkController');
    Route::post('/weblinks/sort', 'WeblinkController@sortWeblinks')->name('weblinks.sort.post');
    // Retours de Formation
    Route::get('/feedbacks/create/{id?}', 'FeedbackController@create')->name('feedbacks.create');
    Route::resource('/feedbacks', 'FeedbackController')->except(['create']);


    // Comptes Utilisateurs
    Route::get('/users/cycleurope', 'UserController@cycleurope')->name('users.cycleurope');
    Route::get('/users/role/{role}', 'UserController@withRole')->name('users.withrole');
    Route::get('/users/outdated', 'UserController@outdatedAssortments')->name('users.outdated');
    Route::get('/users/last-logins', 'UserController@lastLogins')->name('users.logins.last');
    Route::resource('/users', 'UserController');
    Route::post('/users/by-username', 'UserController@byUsername')->name('users.by-username');
    Route::post('/users/activate/{id}', 'UserController@activate')->name('users.activate');
    Route::post('/users/desactivate/{id}', 'UserController@desactivate')->name('users.desactivate');
    // Import des mots de passe (PIN M3) pour les comptes n'ayant aucun mot de passe
    Route::get('/import-passwords', 'ChangePasswordController@importForm')->name('passwords.import.form');
    Route::post('/import-passwords/process', 'ChangePasswordController@import')->name('passwords.import');

    // Mots de passe
    Route::get('/change-password', 'ChangePasswordController@index')->name('password.index');
    Route::post('/change-password', 'ChangePasswordController@store')->name('password.store');
    Route::get('/reset-password', 'ChangePasswordController@reset')->name('password.reset');
    Route::get('/send-new-password', 'ChangePasswordController@send')->name('password.send');
    Route::get('/import-passwords', 'ChangePasswordController@importForm')->name('passwords.import.form');
    Route::post('/import-passwords/process', 'ChangePasswordController@import')->name('passwords.import');
    Route::post('/reset-password', 'ChangePasswordController@sendNewEmail')->name('password.send.new');

});


Route::get('/search', function() {
    header('Content-type=application/json');
    $products = Product::searchByQuery(['match' => ['name' => 'et01']]);
    return $products->chunk(3);
});