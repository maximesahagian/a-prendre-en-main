@extends('layouts.page')
@section('content')

    <input type="text" class="ulule_value" ulule="{{$ulule->value}}" style="display: none">

    <div class="home-page">
        <div class="phoneportrait">

        </div>
        <img class="logo-home" src="img/simple-logo-white.png" alt="Logo A prendre en main">
        <div class="video-conainer">
            <video loop autoplay>
                <source src="/film/filmcompress.mp4" type="video/mp4">
            </video>
            <div class="row text-video">
                <div class="col-sm-6 col-xs-12">
                    <h4>Approvisionnement en Eau potable – Douala – PK11 <br>
                        (Cameroun)</h4>
                    <h2>Un projet à prendre en main
                    </h2>
                    <p>Le droit à une eau potable propre et de qualité et à des installations sanitaires est un droit de l'homme, indispensable à la pleine jouissance du droit à la vie" - Déclarations du 28 Juillet 2010 de  l’ONU.<br>Dans le quartier de PK11, plus de 4000 personnes n’ont pas accès à l’eau potable. </p>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-2 right-text-video">
                    <h4><strong class="amount-raised" id="amount-raised"></strong><strong>€</strong> colléctés sur un
                        objectif de <strong class="goal" id="goal"></strong><strong>€</strong></h4>
                    <div class="goal-container">
                        <div class="goal-bar"></div>
                        <a href="#{{--https://fr.ulule.com/{{$ulule->value}}/--}}">
                            <button class="goal-button">Contribuez</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar">
                <ul>
                    <li><a class="" href="#intro">Introduction</a></li>
                    <li divto="crowfunding-section"><a class="crowfunding-li" href="#crowfunding">Crowfunding</a></li>
                    <li divto="explications-section"><a href="#explications">Association</a></li>
                    <li divto="team-section"><a href="#equipe">Equipe</a></li>
                    <li divto="news"><a href="#actus">Actus</a></li>
                    <li divto="footer-section"><a href="#partenaires">Partenaires</a></li>

                </ul>
            </div>
        </div>
        <section class="main-annimation" name="intro">
            <div class="cover-video"></div>
            <div class="first-animation">
                <h2>Introduction</h2>
                <div class="left">
                    <div class="maps-container">
                        <img class="africa-map" src="/img/annimation/africa-map.png" alt="africa-map">
                        <div class="africa-shadow"></div>
                    </div>
                    <div class="right ">
                        <div class="annim">
                            {{--  <div class='barrescontainer'>
                                  <img class="barre barre1" src="img/annimation/anim-1-barres.png" alt="">
                                  <img class="barre barre2" src="img/annimation/anim-1-barres.png" alt="">
                                  <img class="barre barre3" src="img/annimation/anim-1-barres.png" alt="">
                              </div>--}}
                            <div class="anim-text">
                                <p>Selon l’Organisation Mondiale de la Santé…</p>
                                <span><span id="pourcentage-population"></span><sup>%</sup></span>
                                <p>des populations de l’Afrique Subsaharienne
                                    n’ont pas accès à l’eau potable.</p>
                            </div>
                            <span class="animation-informations"></span>
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
        <section class="second-animation">
            <img class="goute-large" src="/img/annimation/goute-large.png" alt="">
            {{--
                    <img class="goute-medium" src="/img/annimation/goute-medium.png" alt="">
            --}}
            <img class="goute-small" src="/img/annimation/goute-small.png" alt="">

            <h2 class="informations">Informations</h2>

            <div class="left">
                <div class="rectangle-div">
                    <img class="rectangle" src="/img/annimation/rectangle.png" alt="">
                </div>
                <div class="text-div">
                    <div class="">
                        <p class="maps-animation">Le quartier de PK 11 se compose de </p>
                        <span id="number_city"> </span>
                        <p class="small-circle-animation"><strong>habitants</strong> et e situe dans le Nord Est de Douala.
                            <br>C’est également dans cette ville que se situe le plus grand port du pays et l’un des plus importants d’Afrique Centrale.
                            <br>L’agglomération s’étend sur deux rives du fleuve Wouri.
                        </p>
                    </div>
                    <hr>
                    <p class="little-text">     des habitants ne sont pas
                        connectés au réseau de distribution d’eau potable.</p>
                </div>


            </div>
            <div class="right">
                <div class="small-circle small-circle-anim-two">
                    <span class="pourcentage-circle" id="circle-pourcentage"></span>
                </div>
                <div class="zoom-map-circle">
                    <span>DOUALA</span>
                    <hr>
                    <img class="map-zoom" src="/img/annimation/africa-zoom.png" alt="africa-zoom">
                </div>
            </div>

        </section>
        <section class="third-animation">
            <img class="first-pipe" src="/img/annimation/first-pipe.png" alt="">
            <h2 class="processus-title">Processus</h2>
            <div class="left">
                <img class="picture" src="/img/annimation/niga-water-pic.png" alt=""><img src="" alt="">
                <img class="background" src="/img/annimation/background-niga-water-pic.png" alt=""><img src="" alt="">
            </div>
            <div class="right">
                <p><b>Etudier ou boire?</b></p>
                <p>
                    Au Cameroun, c’est aux plus jeunes qu’incombe la tâche de ramener l’eau au sein du foyer. Le temps nécessaire à l’acheminement de l’eau étant estimé à 2 heures environ il va sans dire que leur scolarité est mise en péril.
                </p>
                <a target="_blank" href="https://www.unicef.fr/sites/default/files/userfiles/05_ENFANTS_ET_EAU(1).pdf" class="financement-animation">En savoir plus</a>
            </div>
        </section>

        <section class="fourth-animation">
            <img class="pipe-2" src="/img/annimation/pipe-2.png" alt="">
            <h2 class="financement-title">Financement</h2>
            <div class="left">
                <div class="text">
                    <p>Le cout des travaux s’éleve à :</p>
                    <span class="total" id="euro-number"></span>
                    <hr>
                    <div class="botom">
                        <p>Abonnement mensuel
                            par famille </p>
                        <span class="la-taxe">
                            0,24€
                        </span>
                    </div>
                </div>
                <img src="/img/annimation/euro.png" alt="">
            </div>
            <div class="right">

                <img class="financement-img" src="/img/annimation/financement-img.png" alt="">
                <img class="financement-background" src="/img/annimation/financement-background.png" alt="">

            </div>
        </section>
        <section class="fifth-animation">
            <img class="fix-it" src="/img/annimation/fix_it.png" alt="">
            <h2 class="entretien-title">Entretien</h2>
            <div class="left">
                <p>En cas de casse ou problèmes, un technicien est chargé des réparations sur place.</p>
                <img src="/img/annimation/entretien-picto.png" alt="">
            </div>
            <img class='finalpipe' src="/img/annimation/final-pipe.png" alt="final pipe">
        </section>
        <section class="last-animation">
            <div class="left">
                <h2>
                    Caisse <br>Commune
                </h2>
                <div>
                    <p>Chaque famille inscrite au programme bénéficiera alors d’un accès illimité à la pompe en échange de 24 centimes de participation mensuelle à la caisse commune. Cette dernière sert à l'entretien de l’installation et à la rémunération de l’agent en charge de celle-ci.</p>
                </div>
                <i>”Les petits ruissaux font les grandes rivieres”</i>
            </div>

            <div class="piececontainer">
                <img class="piece piece1" src="/img/annimation/piece1.png" alt="">
                <img class="piece piece01" src="/img/annimation/piece.png" alt="">
                <img class="piece piece2" src="/img/annimation/piece2.png" alt="">
                <img class="piece piece3" src="/img/annimation/piece4.png" alt="">
                <img class="piece piece6" src="/img/annimation/piece6.png" alt="">
                <img class="piece piece02" src="/img/annimation/piece.png" alt="">
                <img class="piece piece11" src="/img/annimation/piece.png" alt="">
                <img class="piece piece12" src="/img/annimation/piece1.png" alt="">
                <img class="piece piece13" src="/img/annimation/piece.png" alt="">

                <img class="piece piece03" src="/img/annimation/piece.png" alt="">
                <img class="piece piece8" src="/img/annimation/piece2.png" alt="">
                <img class="piece piece9" src="/img/annimation/piece1.png" alt="">
                <div>
                    <img class="piecetat" src="/img/annimation/piecetat.png" alt="">
                </div>
            </div>
        </section>


        @include('components.crowfunding')

        @include('components.explications')
        <img class="fat-landscape" src="/img/landscape.png" alt="">
        <section class="news">
            <h1>Les actualités</h1>
            <div class="main-new">
                <div class="left-new">
                    <div class="title-date">
                        <h2>{{$first_new->title}}</h2>
                        <?php
                        $dateFirstNew = strtotime($first_new->date);
                        ?>
                        <h6><?= date('d/m/Y', $dateFirstNew) ?></h6>
                    </div>
                    <p>{{$first_new->message}}</p>
                </div>
                <div class="right-new">
                    <div class="main-image" style="background-image: url('/img/actu/{{$first_new->image}}')"></div>
                </div>
            </div>
            <div class="wrapper-news">
                <?php $i=0; ?>
                @foreach($news as $new)

                    <?php
                    $i++;

                    $dateFirstNew = strtotime($new->date);
                    $dateNew = date('d/m/Y', $dateFirstNew)

                    ?>
                    <div class="second-new second-news<?= $i ?>">
                        <div class="left-second-new">
                            <div class="second-image" style="background-image: url('/img/actu/{{$new->image}}')"></div>
                        </div>
                        <h2>{{$new->title}}</h2>
                        <h6>{{$dateNew}}</h6>
                        <p>{{$new->message}}</p>
                    </div>
                    <?php if($i == 3){$i=0;} ?>
                @endforeach
            </div>
        </section>

        @include('components.team')

        @include('components.contact')

        @include('components.footer')

        <div class="scroll-top">
            <button class="btn btn-success"><i class="fa fa-angle-up fa-3x"></i></button>
        </div>

    </div>

@stop