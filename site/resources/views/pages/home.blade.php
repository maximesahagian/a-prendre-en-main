@extends('layouts.page')
@section('content')

    <input type="text" class="ulule_value" ulule="{{$ulule->value}}" style="display: none">
    <div class="home-page">
        <div class="video-conainer">
            <video loop autoplay>
                <source src="/film/filmcompress.mp4" type="video/mp4">
            </video>
        </div>
        <p class="para">Page d'accueil</p>
        <p class="amount-raised">Argent récolté : </p>
        <p class="goal">Argent demandé : </p>
    </div>

@stop