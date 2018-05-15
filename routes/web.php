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
/*Route::get('/', function () {

});*/



Route::resource('publictestimonials', 'Home\TestimonialsControllerPublic');


Route::resource('publicnewsletters', 'Home\NewslettersControllerPublic');
 
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

/*Route::get('/es', function () {
    return view('website.es.index');
});*/

//Route::get('/es','Admin\UsersController@indexPrincipalSpanish');

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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*****
 * EN
******/

/*Route::get('/en', function () {
    return view('website.en.index');
});*/


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

/*Route::get('/it', function () {
    return view('website.it.index-it');
});*/

//Route::get('/es','Admin\UsersController@indexPrincipal');

Route::get('/quienes-somos-it', function () {
        return view('website.it.quienes-somos-it');
    });

Route::get('/nuestro-espiritu-it', function () {
        return view('website.it.nuestro-espiritu-it');
    });

Route::get('/testimonios-it', function () {
        return view('website.it.testimonios-it');
    });

Route::get('/equipo-tierras-andes-it', function () {
        return view('website.it.equipo-tierras-andes-it');
    });

Route::get('/blog-it', function () {
        return view('website.it.blog-it');
    });

Route::get('/informacion-general-peru-it', function () {
        return view('website.it.informacion-general-peru-it');
    });

Route::get('/formalidades-entrada-peru-it', function () {
        return view('website.it.formalidades-entrada-peru-it');
    });

Route::get('/salud-peru-it', function () {
        return view('website.it.salud-peru-it');
    });

Route::get('/mejores-periodos-peru-it', function () {
        return view('website.it.mejores-periodos-peru-it');
    });

Route::get('/dias-festivos-peru-it', function () {
        return view('website.it.dias-festivos-peru-it');
    });

Route::get('/informations-practica-peru-it', function () {
        return view('website.it.informations-practica-peru-it');
    });



/*
*****
 * DE
******/

/*Route::get('/de', function () {
    return view('website.de.index');
});*/

//Route::get('/es','Admin\UsersController@indexPrincipal');

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

Route::get('/blogd', function () {
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








Route::get('/contacto2-de', function () {
        return view('contacto2-de');
    });
Route::get('/contacto2-enn', function () {
        return view('contacto2-enn');
    });
Route::get('/contacto2-es', function () {
        return view('contacto2-es');
    });
Route::get('/contacto2-it', function () {
        return view('contacto2-it');
    });

Route::get('/contacto2', function () {
        return view('contacto2');
    });
Route::post('updateGallery','Admin\ToursController@updateGallery');
Route::post('saveJournal','Admin\ToursController@saveJournal');
Route::post('saveImageTour','Admin\ToursController@saveImageTour');
Route::get('saveOrganization/{id}','Admin\ToursController@saveOrganization');
Route::get('saveJournalview/{id}','Admin\ToursController@saveJournalview');
Route::get('saveImagesTour/{id}','Admin\ToursController@saveImagesTour');
Route::post('saveOrganizationRow','Admin\ToursController@saveOrganizationRow');
Route::post('update','Admin\ToursController@update');
Route::post('updateOrganization','Admin\ToursController@updateOrganization');
Route::get('editGallery/{id}','Admin\ToursController@editGallery');
Route::get('destroyGallery/{id}/{tour_id}/','Admin\ToursController@destroyGallery');
Route::get('destroyImageTour/{id}/{tour_id}/','Admin\ToursController@destroyImageTour');

Route::get('destroyOrganization/{id}/{tour_id}/','Admin\ToursController@destroyOrganization');
Route::get('editOrganization/{id}','Admin\ToursController@editOrganization');
Route::resource('mail','MailController');
Route::get('getTags','TagControllerWeb@getTags');
Route::get('getOrganization','TagControllerWeb@getOrganization');
Route::post('editEtape','TagControllerWeb@editEtape');
Route::post('editMeasure','TagControllerWeb@editMeasure');
Route::get('{language}/tourshow/{id}','TourControllerWeb@tourshow');
Route::get('filterTours','TourControllerWeb@filterTours');
Route::post('sendComment','TagControllerWeb@sendComment');
Route::post('storeReservation','Admin\ReservationsController@store');
/*  Tours  */
Route::group(['prefix' => 'tours'], function (){

    /* Aventure */

    Route::get('/aventure', function () {
        return view('website.fr.tours.aventure.aventure');
    });
    Route::get('/decouverte/{categoryf}','TourControllerWeb@index');
    
    /* Decouverte */

   /* Route::get('/decouverte', function () {
        return view('website.fr.tours.decouverte.decouverte');
    });*/

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
    }])->middleware('auth');
    
    Route::resource('comments','Admin\CommentsController');
    
    Route::resource('tags', 'Admin\TagController');
    Route::get('tags/{id}/destroy', [
        'uses'  => 'Admin\TagController@destroy',
        'as'    => 'admin.tags.destroy'
    ]);

    Route::resource('newsletters', 'Admin\NewslettersController');
    Route::get('newsletters/{id}/destroy', [
        'uses'  => 'Admin\NewslettersController@destroy',
        'as'    => 'admin.newsletters.destroy'
    ]);
    
    Route::resource('blogs', 'Admin\BlogsController');
    Route::get('blogs/{id}/destroy', [
        'uses'  => 'Admin\BlogsController@destroy',
        'as'    => 'admin.blogs.destroy'
    ]);
    
    Route::resource('articles', 'Admin\ArticlesController');
    Route::get('articles/{id}/destroy', [
        'uses'  => 'Admin\ArticlesController@destroy',
        'as'    => 'admin.articles.destroy'
    ]);
    
    Route::resource('galleries', 'Admin\GalleriesController');
      Route::get('galleries/{id}/{archivo}/destroy', [
        'uses'  => 'Admin\GalleriesController@destroy',
        'as'    => 'admin.galleries.destroy'
    ]);
    
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

    Route::resource('testimonials', 'Admin\TestimonialsController');
    Route::get('testimonials/{id}/destroy', [
        'uses'  => 'Admin\TestimonialsController@destroy',
        'as'    => 'admin.testimonials.destroy'
    ]);

    Route::get('testimonials/{id}/approved', [
        'uses'  => 'Admin\TestimonialsController@approved',
        'as'    => 'testimonials.approved'
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

Route::get('fr/blogs/{id}', [
        'uses'  => 'Home\TestimonialsControllerPublic@blogsFrench',
        'as'    => 'fr.blogs.principal'
]);
Route::get('es/blogs/{id}', [
        'uses'  => 'Home\TestimonialsControllerPublic@blogsSpanish',
        'as'    => 'es.blogs.principal'
]);
Route::get('en/blogs/{id}', [
        'uses'  => 'Home\TestimonialsControllerPublic@blogsEnglish',
        'as'    => 'en.blogs.principal'
]);
Route::get('de/blogs/{id}', [
        'uses'  => 'Home\TestimonialsControllerPublic@blogsGerman',
        'as'    => 'de.blogs.principal'
]);
Route::get('it/blogs/{id}', [
        'uses'  => 'Home\TestimonialsControllerPublic@blogsItalian',
        'as'    => 'it.blogs.principal'
]);

Route::group(['prefix' => '/'], function (){
    Route::get('/', function(){
        
          return redirect('/fr');
    });
     Route::get('/{lenguage}', [
        'uses'  => 'Admin\UsersController@indexPrincipal',
        'as'    => 'user.principal'
    ]);
    
    Route::get('/{language}/tours/{category}/{categoryTour}','TourControllerWeb@index');
    Route::get('/{language}/tours/{tour_category}','TourControllerWeb@indexCategory');

    
});

    
