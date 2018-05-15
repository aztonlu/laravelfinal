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

/* Pages 

Route::get('/preparer-son-voyage', function () {
    return view('website.fr.pages.preparer-son-voyage');
});

Route::get('/qui-sommes-nous', function () {
    return view('website.fr.pages.qui-sommes-nous');
});

Route::get('/notre-etat-desprit', function () {
    return view('website.fr.pages.notre-etat-desprit');
});

Route::get('/lequipe-tierras-de-los-andes', function () {
    return view('website.fr.pages.lequipe-tierras-de-los-andes');
});
*/

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

Route::get('/contacto2', function () {
        return view('contacto2');
    });
    
    Route::get('/sur-mesure', function () {
        return view('website.fr.pages.sur-mesure');
    });
    
    Route::get('tours/excurssions-3-7-jours', function () {
        return view('website.fr.pages.excurssions-3-7-jours');
    });
    Route::get('tours/decouverte-andes-14-8-jours', function () {
        return view('website.fr.pages.decouverte-andes-14-8-jours');
    });
    
    Route::get('tours/incontournables', function () {
        return view('website.fr.pages.incontournables');
    });
    Route::get('tours/a-la-rencontre-des-communautes', function () {
        return view('website.fr.pages.a-la-rencontre-des-communautes');
    });
    Route::get('tours/au-plus-pres-des-sommets', function () {
        return view('website.fr.pages.au-plus-pres-des-sommets');
    });
    Route::get('tours/sensations-extremes', function () {
        return view('website.fr.pages.sensations-extremes');
    });
    Route::get('tours/voyages-speciaux', function () {
        return view('website.fr.pages.voyages-speciaux');
    });
    Route::get('tours/amazonie', function () {
        return view('website.fr.pages.amazonie');
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



/*****
 * EN
******/

Route::get('/en', function () {
    return view('website.en.index');
});


Route::get('/who-we-are', function () {
        return view('website.en.who-we-are');
    });

Route::get('/our-spirit', function () {
        return view('website.en.our-spirit');
    });

Route::get('/testimonial', function () {
        return view('website.en.testimonial');
    });

Route::get('/team-tierras-andes', function () {
        return view('website.en.team-tierras-andes');
    });

Route::get('/blog', function () {
        return view('website.en.blog');
    });

Route::get('/general-information-peru', function () {
        return view('website.en.general-information-peru');
    });

Route::get('/entry-formalities-peru', function () {
        return view('website.en.entry-formalities-peru');
    });

Route::get('/health-peru', function () {
        return view('website.en.health-peru');
    });

Route::get('/best-periods-peru', function () {
        return view('website.en.best-periods-peru');
    });

Route::get('/holidays-peru', function () {
        return view('website.en.holidays-peru');
    });

Route::get('/practical-information-peru', function () {
        return view('website.en.practical-information-peru');
    });

/*****
 * IT
******/

Route::get('/it', function () {
    return view('website.it.index');
});

Route::get('/quienes-somos', function () {
        return view('website.it.quienes-somos');
    });

Route::get('/nuestro-espiritu', function () {
        return view('website.it.nuestro-espiritu');
    });

Route::get('/testimonios', function () {
        return view('website.it.testimonios');
    });

Route::get('/equipo-tierras-andes', function () {
        return view('website.it.equipo-tierras-andes');
    });

Route::get('/blog', function () {
        return view('website.it.blog');
    });

Route::get('/informacion-general-peru', function () {
        return view('website.it.informacion-general-peru');
    });

Route::get('/formalidades-entrada-peru', function () {
        return view('website.it.formalidades-entrada-peru');
    });

Route::get('/salud-peru', function () {
        return view('website.it.salud-peru');
    });

Route::get('/mejores-periodos-peru', function () {
        return view('website.it.mejores-periodos-peru');
    });

Route::get('/dias-festivos-peru', function () {
        return view('website.it.dias-festivos-peru');
    });

Route::get('/informations-practica-peru', function () {
        return view('website.it.informations-practica-peru');
    });



/*
*****
 * DE
******/

Route::get('/de', function () {
    return view('website.de.index');
});


Route::get('/quienes-somos', function () {
        return view('website.de.quienes-somos');
    });

Route::get('/nuestro-espiritu', function () {
        return view('website.de.nuestro-espiritu');
    });

Route::get('/testimonios', function () {
        return view('website.de.testimonios');
    });

Route::get('/equipo-tierras-andes', function () {
        return view('website.de.equipo-tierras-andes');
    });

Route::get('/blog', function () {
        return view('website.de.blog');
    });

Route::get('/informacion-general-peru', function () {
        return view('website.de.informacion-general-peru');
    });

Route::get('/formalidades-entrada-peru', function () {
        return view('website.de.formalidades-entrada-peru');
    });

Route::get('/salud-peru', function () {
        return view('website.de.salud-peru');
    });

Route::get('/mejores-periodos-peru', function () {
        return view('website.de.mejores-periodos-peru');
    });

Route::get('/dias-festivos-peru', function () {
        return view('website.de.dias-festivos-peru');
    });

Route::get('/informations-practica-peru', function () {
        return view('website.de.informations-practica-peru');
    });





Route::resource('mail','MailController');





















/* Busqueda */

Route::get('/search?categories={$categories}&from={from}&to={to}&price={price}', function () {
    return view('website.fr.index');
});

/*  Tours  */
Route::group(['prefix' => 'tours'], function (){

    /* Aventure */

    Route::get('/aventure', function () {
        return view('website.fr.tours.aventure.aventure');
    });

    Route::get('/aventure/du-choquequirao-au-machu-picchu', function () {
        return view('website.fr.tours.aventure.du-choquequirao-au-machu-picchu');
    });

    Route::get('/aventure/du-canyon-de-colca-lausangate', function () {
        return view('website.fr.tours.aventure.du-canyon-de-colca-lausangate');
    });

    Route::get('/aventure/du-machu-picchu-la-cordillere-blanche', function () {
        return view('website.fr.tours.aventure.du-machu-picchu-la-cordillere-blanche');
    });

    Route::get('/aventure/cordillere-de-huayhuash', function () {
        return view('website.fr.tours.aventure.cordillere-de-huayhuash');
    });

    Route::get('/aventure/sensations-extremes-au-perou', function () {
        return view('website.fr.tours.aventure.sensations-extremes-au-perou');
    });

    Route::get('/aventure/alpamayo-et-ausangate-au-plus-pres-des-sommets', function () {
        return view('website.fr.tours.aventure.alpamayo-et-ausangate-au-plus-pres-des-sommets');
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

    Route::get('/excursions/trek-du-salkantay', function () {
        return view('website.fr.tours.excursions.trek-du-salkantay');
    });

        Route::get('/excursions/le-trek-dhuchuy-qosqo', function () {
            return view('website.fr.tours.excursions.le-trek-dhuchuy-qosqo');
    });

        Route::get('/excursions/tour-de-lausangate', function () {
            return view('website.fr.tours.excursions.tour-de-lausangate');
    });

        Route::get('/excursions/trek-de-la-vallee-de-lares', function () {
            return view('website.fr.tours.excursions.trek-de-la-vallee-de-lares');
    });

        Route::get('/excursions/cusco-eternel', function () {
            return view('website.fr.tours.excursions.cusco-eternel');
    });

    /* Haute Montagne */

    Route::get('/haute-montagne', function () {
        return view('website.fr.tours.haute-montagne.haute-montagne');
    });

    Route::get('/haute-montagne/alpamayo-et-chopicalqui', function () {
        return view('website.fr.tours.haute-montagne.alpamayo-5947m-chopicalqui-6354m');
    });

    Route::get('/haute-montagne/ascension-de-lausangate', function () {
        return view('website.fr.tours.haute-montagne.ascension-de-lausangate');
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
