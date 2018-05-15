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
Route::get('/fr', function () {
    return view('website.fr.index');
});


Route::get('/qui-sommes-nous', function () {
        return view('website.fr.qui-sommes-nous');
    });

Route::get('/notre-etat-d-esprit', function () {
        return view('website.fr.notre-etat-d-esprit');
    });

Route::get('/temoignages', function () {
        return view('website.fr.temoignages');
    });

Route::get('/equipe-tierras-andes', function () {
        return view('website.fr.equipe-tierras-andes');
    });

Route::get('/le-blog', function () {
        return view('website.fr.le-blog');
    });

Route::get('/informations-generales-peru', function () {
        return view('website.fr.informations-generales-peru');
    });

Route::get('/formalites-dentree-peru', function () {
        return view('website.fr.formalites-dentree-peru');
    });

Route::get('/sante-peru', function () {
        return view('website.fr.sante-peru');
    });

Route::get('/meilleures-periodes-peru', function () {
        return view('website.fr.meilleures-periodes-peru');
    });

Route::get('/fetes-jours-feries-peru', function () {
        return view('website.fr.fetes-jours-feries-peru');
    });

Route::get('/informations-pratiques-peru', function () {
        return view('website.fr.informations-pratiques-peru');
    });




/*****
 * ES
******/

Route::get('/es', function () {
    return view('website.es.index');
});


Route::get('/quienes-somos', function () {
        return view('website.es.quienes-somos');
    });

Route::get('/nuestro-espiritu', function () {
        return view('website.es.nuestro-espiritu');
    });

Route::get('/testimonios', function () {
        return view('website.es.testimonios');
    });

Route::get('/equipo-tierras-andes', function () {
        return view('website.es.equipo-tierras-andes');
    });

Route::get('/blog', function () {
        return view('website.es.blog');
    });

Route::get('/informacion-general-peru', function () {
        return view('website.es.informacion-general-peru');
    });

Route::get('/formalidades-entrada-peru', function () {
        return view('website.es.formalidades-entrada-peru');
    });

Route::get('/salud-peru', function () {
        return view('website.es.salud-peru');
    });

Route::get('/mejores-periodos-peru', function () {
        return view('website.es.mejores-periodos-peru');
    });

Route::get('/dias-festivos-peru', function () {
        return view('website.es.dias-festivos-peru');
    });

Route::get('/informations-practica-peru', function () {
        return view('website.es.informations-practica-peru');
    });



















Route::get('/contacto2', function () {
        return view('contacto2');
    });


Route::resource('mail','MailController');

/*  Tours  */
Route::group(['prefix' => 'tours'], function (){

    /* Aventure */

    Route::get('/aventure', function () {
        return view('website.fr.tours.aventure.aventure');
    });

    /* Decouverte */

    Route::get('/decouverte', function () {
        return view('website.fr.tours.decouverte.decouverte');
    });

    Route::get('/decouverte/perou-bolivie-express', function () {
        return view('website.fr.tours.decouverte.perou-bolivie-express');
    });
    Route::get('/decouverte/du-machu-picchu-au-salar-duyuni', function () {
        return view('website.fr.tours.decouverte.du-machu-picchu-au-salar-duyuni');
    });
    Route::get('/decouverte/au-coeur-des-communautes-andines', function () {
        return view('website.fr.tours.decouverte.au-coeur-des-communautes-andines');
    });
    Route::get('/decouverte/tresors-du-sud-perou', function () {
        return view('website.fr.tours.decouverte.tresors-du-sud-perou');
    });
    Route::get('/decouverte/le-perou-en-famille', function () {
        return view('website.fr.tours.decouverte.le-perou-en-famille');
    });

    /* Excursions */

    Route::get('/excursions', function () {
        return view('website.fr.tours.excursions.excursions');
    });

    Route::get('/excursions/le-trek-du-chemin-inca', function () {
        return view('website.fr.tours.excursions.le-trek-du-chemin-inca');
    });

    /* Haute Montagne */

    Route::get('/haute-montagne', function () {
        return view('website.fr.tours.haute-montagne.haute-montagne');
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
