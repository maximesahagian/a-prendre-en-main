@extends('layouts.page')
@section('content')

<input type="text" class="ulule_value" ulule="{{$ulule->value}}" style="display: none">
<div class="home-page">
    <img class="logo-home" src="img/simple-logo-white.png" alt="Logo A prendre en main">
    <div class="video-conainer">
        <video loop autoplay>
            <source src="/film/filmcompress.mp4" type="video/mp4">
        </video>
        <div class="row text-video">
            <div class="col-sm-6">
                <h4>Approvisionnement en Eau potable – Douala – PK11
                    (Cameroun)</h4>
                <h2>Un projet à prendre en main
                </h2>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit
                    amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non
                    metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus
                    mollis interdum.</p>
            </div>
            <div class="col-sm-5 col-sm-offset-2 right-text-video">
                <h4><strong class="amount-raised" id="amount-raised"></strong><strong>€</strong> colléctés sur un
                    objectif de <strong class="goal" id="goal"></strong><strong>€</strong></h4>
                <div class="goal-container">
                    <div class="goal-bar"></div>
                    <a href="#">
                        <button class="goal-button">Contribuer</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="main-annimation">
        <div class="cover-video"></div>
        <div class="first-animation">
            <div class="left">
                <div class="maps-container">
                    <img class="africa-map" src="/img/annimation/africa-map.png" alt="africa-map">
                    <img class="africa-shadow" src="/img/annimation/africa-shadow.png" alt="africa-map">
                </div>
                <div class="right ">
                    <div class="white-div"></div>
                    <div class="annim">
                        <div class="anim-text">
                            <p>Selon l’Organisation Mondiale de la Santé…</p>
                            <span><span id="pourcentage-population"></span>%</span>
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

        <h2 class="informations">INFORMATIONS</h2>

            <div class="left">
                <div class="rectangle-div">
                    <img class="rectangle" src="/img/annimation/rectangle.png" alt="">
                </div>
                <div class="text-div">
                    <div class="">
                        <p class="maps-animation">La ville se compose de </p>
                        <span id="number_city"> </span>
                        <p class="small-circle-animation"><strong>habitants</strong> et s’impose paradoxalement comme le plus grand port du pays, et l’un des plus importants d’Afrique centrale. La ville s’étend sur les deux rives du fleuve et il n’existe qu’un seul pont pour passer d’une rive à l’autre.</p>
                    </div>
                    <hr>
                    <p class="little-text">     des habitants ne sont pas
                        connectés au réseau de distribution d’eau potable.</p>
            </div>


        </div>
        <div class="right">

                <div class="small-circle">
                    <span class="pourcentage-circle">80%</span>
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
            <h2 class="processus-title">PROCESSUS</h2>
            <div class="left">
                <img class="picture" src="/img/annimation/niga-water-pic.png" alt=""><img src="" alt="">
                <img class="background" src="/img/annimation/background-niga-water-pic.png" alt=""><img src="" alt="">
            </div>
            <div class="right">
                <p><strong>Une denrée rare et profonde</strong></p>
                <p>

                    Dans ce genre de régions aussi arides, il faut aller cherchée cette  eau si précieuse  beaucoup plus profonds sous terre, elle se situe au sein de napes fréatiques souterraine tres difficile d’acces.

                    Il est dans un premier temps nécéssaire de localiser la source puis de forer un conduit d’acces jusqu’a celle-ci, ainsi on pourra installer un puit mécanique et remonter l’au jusqu’a la surface.

                    Le probleme majeure étant le coup de financement des moyen de forage et pompages de l’eau et c’est précisement ici que nous intervenons avec votre aide pour financer l’ensemble de l’installation.</p>
                <a href="#">En savoir plus</a>
            </div>
        </section>

        <section class="fourth-animation">
            <img class="pipe-2" src="/img/annimation/pipe-2.png" alt="">
            <h2 class="financement-title">FINANCEMENT</h2>
            <div class="left">
                <div class="text">
                    <p>Le cout total des trvaux s’éleve à :</p>
                        <span class="total">23 628</span>
                    <hr>
                    <p>Abonnement mensuel
                        par famille </p>
                    <span class="la-taxe">
                        0,24€
                    </span>
                </div>
                <img src="/img/annimation/euro.png" alt="">
            </div>
            <div class="right">

                <img class="financement-img" src="/img/annimation/financement-img.png" alt="">
                <img class="financement-background" src="/img/annimation/financement-background.png" alt="">

            </div>
        </section>

    <section class="news">
        <h1>Les Actualités</h1>
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
            <div class="second-new" style="display: inline-block">
                <div class="left-second-new">
                    <div class="second-image" style="background-image: url('/img/favicon.png')"></div>
                </div>
                <h2>TITRE</h2>
                <h5>Date</h5>
                <p>Description</p>
            </div>
            <div class="second-new" style="display: inline-block">
                <div class="left-second-new">
                    <div class="second-image" style="background-image: url('/img/favicon.png')"></div>
                </div>
                <h2>TITRE</h2>
                <h5>Date</h5>
                <p>Description</p>
            </div>
            <div class="second-new" style="display: inline-block">
                <div class="left-second-new">
                    <div class="second-image" style="background-image: url('/img/favicon.png')"></div>
                </div>
                <h2>TITRE</h2>
                <h5>Date</h5>
                <p>Description</p>
            </div>
        </div>
    </section>
</div>

@stop