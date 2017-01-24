@extends('layouts.page')
@section('content')

    <input type="text" class="ulule_value" ulule="{{$ulule->value}}" style="display: none">
    <div class="home-page">
        <div class="video-conainer">
            <video loop autoplay>
                <source src="/film/filmcompress.mp4" type="video/mp4">
            </video>
            <div class="row text-video">
                <div class="col-sm-5">
                    <h4>Approvisionnement en Eau potable – Douala – PK11
                        (Cameroun)</h4>
                    <h2>Un projet à prendre en main
                    </h2>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum.</p>
                </div>
                <div class="col-sm-5 col-sm-offset-2">
                    <h4><strong>9382€</strong> colléctés sur un objectif de <strong>23546€</strong></h4>
                    <div class="goal-container">
                        <div class="goal-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <p class="para">Page d'accueil</p>
        <p class="amount-raised">Argent récolté : </p>
        <p class="goal">Argent demandé : </p>
    </div>

@stop