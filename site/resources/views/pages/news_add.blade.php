@extends('layouts.admin')
@section('content')
    <div class="main-content add-new">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter une actualité</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="/admin/news/addnew" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="form-group col-md-12">
                            <label for="title-input">Titre de l'actualité</label><br>
                            <input type="text" name="title-input" class="title-input" placeholder="Titre de l'actualité">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="text-input">Texte de l'actualité</label>
                            <textarea name="text-input" class="text-input col-md-12" placeholder="Texte de l'actualité" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="author-input">Auteur de l'actualité</label><br>
                            <input type="text" name="author-input" class="author-input" placeholder="Auteur de l'actualité">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="author-input">Image liée à l'actualité</label><br>
                            <input type="file" name="image-input" class="image-input">
                        </div>

                            <input type="submit" class="btn btn-success" value="Ajouter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop