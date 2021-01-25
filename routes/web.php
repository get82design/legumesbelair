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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/magasin', 'HomeController@magasin')->name('shop');
Route::get('/produit/{id}', 'ProduitController@show');
Route::get('/panier', 'FrontController@panier')->name('panier');
Route::post('/cart', 'FrontController@cart');
Route::post('/ajaxRequestPost/{id}', 'AjaxController@ajaxPanierPost');
Route::post('/ajaxRequestPostQty/{id}/{qty}', 'AjaxController@ajaxPanierPostQty');
Route::get('/ajaxRequestGetId/{id}', 'AjaxController@ajaxRequestGetId');
Route::post('/deleterow/{rowId}', 'FrontController@deleterow')->name('deleterow');
Route::post('contact', 'MailsendController@contactSaveData')->name('contactus');
Route::post('/','NewsletterController@store')->name('newsletter');

Route::middleware('auth')->group(function () {
    Route::get('/compte', 'HomeController@acount')->name('acount');
    Route::resource('/user', 'UserController');
    Route::resource('/addressfacture', 'AddressfactureController');
    Route::resource('/addresslivraison', 'AddresslivraisonController');

    Route::get('/shoppingcart/archive/{id}', 'ShoppingcartController@archive')->name('archive');
    Route::get('/shoppingcart/archives/{id}', 'ShoppingcartController@listarchives')->name('listarchives');
    Route::post('/shoppingcart/destroy/{id}', 'ShoppingcartController@destroycommande')->name('destroycommande');
    Route::resource('/shoppingcart', 'ShoppingcartController');
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'HomeController@acountadmin')->name('admin');
    Route::resource('/produit', 'ProduitController');
    Route::resource('/imgproduit', 'ImgproduitController');
    Route::get('/addproduit', 'FrontController@createproduit')->name('addproduit');
    Route::get('/liste-commandes', 'ShoppingcartController@listcommandes')->name('listcommandes');
    Route::get('/liste-commandes/{filtre}', 'ShoppingcartController@listdaycommandes')->name('listdaycommandes');
    Route::get('/liste-commandes-livraison/{filtre}', 'ShoppingcartController@listdaylivrcommandes')->name('listdaylivrcommandes');
    Route::get('/commande/{id}', 'ShoppingcartController@commande')->name('commande');
    Route::post('/commandeprepa/{id}', 'ShoppingcartController@commandeprepa')->name('commandeprepa');
    Route::post('/commandelivraison/{id}', 'ShoppingcartController@commandelivraison')->name('commandelivraison');
    Route::get('/client/{id}', 'UserController@viewuser')->name('viewuser');
    Route::get('/cropper', 'FrontController@crop')->name('crop');
    Route::post('/destroyuser/{id}', 'UserController@destroyuser')->name('destroyuser');
    Route::post('/destroyproduit/{id}', 'ProduitController@destroyproduit')->name('destroyproduit');
});



