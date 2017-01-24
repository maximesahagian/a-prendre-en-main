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
                <div class="col-sm-5 col-sm-offset-2 right-text-video">
                    <h4><strong class="amount-raised" id="amount-raised"></strong><strong>€</strong> colléctés sur un objectif de <strong class="goal" id="goal"></strong><strong>€</strong></h4>
                    <div class="goal-container">
                        <div class="goal-bar"></div>
                        <a href="#">
                            <button class="goal-button">Contribuer</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

@stop