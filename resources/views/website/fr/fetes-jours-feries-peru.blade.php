@extends('website.partials.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>

            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="{{url('')}}"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>

        </div>

    </div>
@endsection

@section('content')

<section class="showcase">

    <div class="container">

        <div class="row item">

            <div class="container">

                <div class="col-md-4 aside-home">

                    <!--Articles-->

                    <div class="col-md-12">
                        <h3 class="text-center title-aside">Des articles</h3>
                        <div class="post-list-sldr testimonial">

                            <div class="col-md-12">

                                <div class="post-img-sldr" style="background-image: url('{{url('')}}/img/blog/rendez.jpg')">
                                </div>
                                <div class="post-summary-sldr">
                                    <header>
                                        <h4 class="post-title-sldr">
                                            <a href="#">Rendez-vous en terre inconnue : Arthur chez les quechuas des And</a>
                                        </h4>
                                        <p class="byline author vcard">
                                            <span class="italic">By</span>&nbsp;
                                            <a href="#" rel="author">Aaron D. Cullen</a>
                                            <span class="dot">·</span>
                                            <span class="updated">02/10/2016</span>
                                        </p>
                                    </header>

                                    <div class="post-excerpt">
                                        Tierras de los Andes est fière d'avoir participé à la réalisation de l'émission Rendez-vous en terre...
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="post-img-sldr" style="background-image: url('{{url('')}}/img/home_img/ausangate2.jpg')">
                                </div>
                                <div class="post-summary-sldr">
                                    <header>
                                        <h4 class="post-title-sldr">
                                            <a href="#">Jours</a>
                                        </h4>
                                        <p class="byline author vcard">
                                            <span class="italic">By</span>&nbsp;
                                            <a href="#" rel="author">Victor S.</a>
                                            <span class="updated">02/10/2016</span>
                                        </p>
                                    </header>

                                    <div class="post-excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hadis quaerat quas saepe? consectetur adipisicing elit.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Testimonials-->

                    <div class="col-md-12">
                        <h3 class="text-center  title-aside">Témoignages</h3>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="name">Pregnolato Tomas</div>
                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star-half"></span>
                                </div>
                                <div class="post-excerpt">
                                    Viaggio in Peru' Bolivia Cile dal 6/03/17 al 30/03/17 organizzato da Tierras de los Andes. Un grazie particolare per il programma che Alessandro Baldelli responsabile di...
                                </div>
                            </div>

                            <div class="testimonial-content">
                                <div class="name">Laye</div>
                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <div class="post-excerpt">
                                    Bonjour RICARDO JE VIENS VOUS REDIRE COMBIEN NOTRE VOYAGE DANS VOTRE MAGNIFIQUE PAYS ÉTAIT TRÈS BIEN ORGANISE tout était parfait: guides extraordinaires; chauffeur; bus...
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Gallery-->

                    <div class="col-md-12">
                        <h3 class="text-center  title-aside">Photos et Videos</h3>
                        <div class="testimonial" id="">
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titre de la photo</figcaption>
                                </a>
                            </div>
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titre de la photo</figcaption>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">

                    <div class="main-title">
                        <h2>Les fêtes et jours fériés au Pérou</h2>
                        <p align="justify">Au Pérou, la vie quotidienne est ponctuée d’un grand nombre de fêtes qui ont lieu tout au long de l’année, jusque dans les villages les plus isolés du pays où saints et croyances sont célébrés en grande pompe.  <br><br>


                        Voici quelques-unes des festivités les plus importantes, auxquelles vous pourrez peut-être assister selon votre date de voyage :  <br>

                        2 février : la Virgen de la Candelaria (Vierge de la Chandeleur) Elle fut nommée ainsi suite à la vision qu’eut un père jésuite de la Vierge Marie luttant contre un démon. Cette fête dure deux semaines, le jour principal étant le 2 février. Assimilée à une forme de carnaval, elle est caractérisée par de nombreux défilés et concours de danses folkloriques. Le 10 et le 11 février sont deux jours également importants puisque se déroulent dans le stade et dans les rues de Puno les concours de danse opposant les différents quartiers de la ville. Les costumes les plus fous et les plus colorés illuminent alors la capitale de l’Altiplano qui ne vit plus que pour la fête jusqu’au 15 février.  <br><br>

                        La Semaine sainte Elle correspond à la dernière semaine du Carême. Les festivités commencent véritablement le jeudi suivant le dimanche des Rameaux et se prolonge jusqu’au dimanche de Pâques.  <br>
                        Des processions ont alors lieu dans tout le pays, avec pour personnages principaux les icônes religieuses telles que celle de la Vierge Marie. <br>
                        Les processions les plus impressionnantes et réputées ont lieu dans les villes d’Ayacucho, de Huaraz et de Cusco. Durant ces festivités sont associées d’anciennes croyances ancestrales aux traditions catholiques importées d’Europe.  <br>
                        Le pont de Q’eswachaca Tout les ans, les communautés de Huinchiri, Chaupibanda, Ccollana Quehue y Pelcaro se rassemblent pour restaurer le dernier pont inca du Pérou. <br>
                        En effet, ce pont entièrement réalisé à partir de cordes faites d’herbe tressée nécessite une restauration annuelle. <br>
                        C’est l’occasion pendant 4 jours de célébrer tous ensemble cet évènement. Un moment unique et inoubliable à vivre en notre compagnie !  <br><br>

                        31 mai 2015: La fête du Q’oyllur Riti C’est une des fêtes indigènes les plus grandes d'Amérique latine, rassemblant chaque année plus de quatre-vingt mille pèlerins. « Ccoyllor Ritti » est un mot quechua qui signifie 'Étoile des neiges'; cette croyance andine a été transformée et adaptée par la religion catholique, pour être remplacée par le Taytacha Qoylloriti (Seigneur des Neiges). <br>
                        Les habitants du secteur d'Ocongate (situé à 2h30 de Cusco), effectuent un rite annuel, dont le symbole est l'icône du Christ signifiant l'intégration de l'homme à la nature. Cette fête est associée à la fertilité de la terre, mais aussi aux esprits des animaux et des montagnes (les apus) et autres dieux tutélaires. Le rituel principal se déroule au pied de la montagne Sinakara, où affluent de longues processions de pèlerins venant de toute la région.  
                        <br><br>
                        4 juin 2015 : le Corpus Christi Avant l’introduction du catholicisme au Pérou, il existait une fête indigène qui célébrait les 14 rois et empereurs incas à Cusco, la capitale de l’empire. Les habitants faisaient en effet défiler les momies de leurs rois défunts au cours de processions à travers la ville. Mais choqués par cette pratique, les Espagnols la transformèrent et firent remplacer les momies par 14 icônes catholiques richement  vêtues. <br>Ainsi, tous les ans depuis le début de l’époque coloniale, chaque paroisse de Cusco et de ses alentours porte son saint patron en procession jusqu’à la cathédrale afin de le faire bénir.  <br><br>
                        24 juin : l’Inti Raymi Cette fête est une reconstitution de la fête du Soleil qui avait cours au sein de l’empire inca et qui célébrait le solstice d´hiver, jour le plus court de l’année, signal de la fin d’une année agricole et du début d’une autre. On y vénérait le soleil en l’honorant de nombreux sacrifices d’animaux et d’offrandes afin d’assurer son retour et donc celui de la belle saison. De nombreuses danses et coutumes incas sont reconstituées au travers d’un grand spectacle mettant en scène des milliers d’acteurs tout au long de la journée. <br>La représentation a lieu sur le site même de la forteresse de Sacsayhuaman, lui conférant à la fois une dimension historique et mystique.  
                        <br><br>
                        16 juillet : la Vierge du Carmen Cette fête est directement héritée de la tradition catholique espagnole.  Elle fait référence à une apparition de la Vierge Marie sur le Mont Carmel, en Israël. <br>L’un des centres du culte de la Vierge du Carmen au Pérou est  Paucartambo. Des défilés de danseurs en costumes colorés ont lieu dans toute la région de Cusco et ce jour-là, la Vierge bénit les participants et éloigne les démons.  <br><br>

                        28 juillet : la Fête de la patrie (Fête nationale du Pérou) Elle commémore la déclaration d’indépendance du Pérou par José San Martin qui s’empara de Lima le 28 juillet 1821. A cette occasion, des défilés militaires et estudiantins ont lieu dans tout le pays.  15 août : la Virgen Asunta (l’Assomption) Comme dans tous les pays catholiques, l’Assomption est une fête importante. <br>
                        Ainsi, le 15 aout, les grandes villes sont le théâtre de processions et festivités.  <br><br>

                        14 septembre : le pèlerinage du Señor de Huanca Ce pèlerinage est un rendez-vous annuel qui a lieu en mémoire des Incas exploités dans les mines par les Espagnols pendant l’époque coloniale. El Señor de Huanca est devenu l’icône des travailleurs pauvres et maltraités. Le 14 septembre, les habitants de Cusco se se rendent à pied jusqu’à Huanca, village proche de Pisaq, oú se trouve le sanctuaire du Seigneur de Huanca.</p>
                    </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</section>

@endsection
