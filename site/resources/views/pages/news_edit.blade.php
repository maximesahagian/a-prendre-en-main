@extends('layouts.admin')
@section('content')
    <div class="main-content edit-new">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 new-id="{{$new->id}}" class="panel-title">Actualité n° {{$new->id}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="/admin/news/editnew" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <label for="title-input">Titre de l'actualité</label><br>
                                <input type="text" name="title-input" class="title-input" value="{{$new->title}}" placeholder="Titre de l'actualité">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="text-input">Texte de l'actualité</label>
                                <textarea name="text-input" class="text-input col-md-12" placeholder="Texte de l'actualité" id="" cols="30" rows="10">{{$new->message}}</textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="author-input">Auteur de l'actualité</label><br>
                                <input type="text" name="author-input" class="author-input" value="{{$new->author}}" placeholder="Auteur de l'actualité">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="author-input">Image liée à l'actualité (optionnel)</label><br>
                                <input type="file" name="image-input" class="image-input">
                            </div>

                            <input type="text" name="id-input" value="{{$new->id}}" style="display: none;">

                            <input type="submit" class="btn btn-success" value="Éditer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop