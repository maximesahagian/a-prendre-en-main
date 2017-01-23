@extends('layouts.admin')
@section('content')
    <div class="main-content news">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Les actualités</h3>
                </div>
                <div class="panel-body">
                    <a href="/admin/news/add"><button class="btn btn-success add-new-btn">Ajouter</button></a>
                    @foreach($news as $new)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="metric">
                                    <a href="/admin/news/edit/{{$new->id}}">
                                        {{$new->title}}
                                    </a>
                                <div class="actions">
                                    <a href="/admin/news/edit/{{$new->id}}"><button class="btn btn-alert">Editer</button></a>
                                    <button to-delete="{{$new->id}}" class="btn btn-danger delete-new">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop