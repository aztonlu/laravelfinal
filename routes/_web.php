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

/*****
 * FR
******/
Route::get('/', function () {
    return view('website.fr.index');
});

/*  Tours  */
Route::group(['prefix' => 'tours'], function (){

    /* Decouverte */
    Route::get('/decouverte/perou-bolivie-express', function () {
        return view('website.fr.tours.decouverte.perou-bolivie-express');
    });
    Route::get('/decouverte/du-machu-picchu-au-salar-duyuni', function () {
        return view('website.fr.tours.decouverte.du-machu-picchu-au-salar-duyuni');
    });
    Route::get('/decouverte/au-coeur-des-communautes-andines', function () {
        return view('website.fr.tours.decouverte.au-coeur-des-communautes-andines');
    });

});
/*  Blogs  */


/*  Pages  */


/*****************************/


/******
 * EN
 ******/
/*
Route::get('/', function () {
    return view('website.en.index');
});*/

/*  Tours  */

/*  Blogs  */

/*  Pages  */


/*****************
 * ADMINISTRADOR
 *****************/
Route::group(['prefix' => 'admin'], function (){

    Route::get('/', ['as' => 'admin.index', function(){
        return view('admin.index');
    }]);

    Route::resource('users', 'Admin\UsersController');
    Route::get('users/{id}/destroy', [
        'uses'  => 'Admin\UsersController@destroy',
        'as'    => 'admin.users.destroy'
    ]);

    Route::resource('categories', 'Admin\CategoriesController');
    Route::get('categories/{id}/destroy', [
        'uses'  => 'Admin\CategoriesController@destroy',
        'as'    => 'admin.categories.destroy'
    ]);

    Route::resource('subcategories', 'Admin\SubCategoriesController');
    Route::get('subcategories/{id}/destroy', [
        'uses'  => 'Admin\SubCategoriesController@destroy',
        'as'    => 'admin.subcategories.destroy'
    ]);

    Route::resource('countries', 'Admin\CountriesController');
    Route::get('countries/{id}/destroy', [
        'uses'  => 'Admin\CountriesController@destroy',
        'as'    => 'admin.countries.destroy'
    ]);

    Route::resource('tours', 'Admin\ToursController');
    Route::get('tours/{id}/destroy', [
        'uses'  => 'Admin\ToursController@destroy',
        'as'    => 'admin.tours.destroy'
    ]);

    /*
        Route::resource('provinces', 'Admin\ProvincesController');
        Route::get('provinces/{id}/destroy', [
            'uses'  => 'Admin\ProvincesController@destroy',
            'as'    => 'admin.provinces.destroy'
        ]);

        Route::resource('locations', 'Admin\LocationsController');
        Route::get('locations/{id}/destroy', [
            'uses'  => 'Admin\LocationsController@destroy',
            'as'    =>admin.locations.destroy'
        ]);

        /*
        Route::resource('roomcategories', 'RoomCategoriesController');
        Route::get('roomcategories/{id}/destroy', [
            'uses'  => 'RoomCategoriesController@destroy',
            'as'    => 'admin.roomcategories.destroy'
        ]);




        Route::resource('families', 'FamiliesController');
        Route::get('families/{id}/destroy', [
            'uses'  => 'FamiliesController@destroy',
            'as'    => 'admin.families.destroy'
        ]);

        Route::resource('excursions', 'ExcursionsController');
        Route::get('excursions/{id}/destroy', [
            'uses'  => 'ExcursionsController@destroy',
            'as'    => 'admin.excursions.destroy'
        ]);

        Route::resource('rooms', 'RoomsController');
        Route::get('rooms/{id}/destroy', [
            'uses'  => 'RoomsController@destroy',
            'as'    => 'admin.rooms.destroy'
        ]);*/

});

// Rutas de autenticación...
/*
Route::get('admin/auth/login', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'admin.auth.logout'
]);*/

Auth::routes();
