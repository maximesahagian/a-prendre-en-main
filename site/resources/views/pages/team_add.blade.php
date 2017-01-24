@extends('layouts.admin')
@section('content')
    <div class="main-content team-new">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter un membre</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="/admin/team/addteam" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <label for="title-input">Nom de l'actualité</label><br>
                                <input type="text" name="name-input" class="name-input" placeholder="Nom du membre">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="text-input">Description du membre</label>
                                <textarea name="description-input" class="description-input col-md-12" placeholder="Description du membre" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="author-input">Image du membre</label><br>
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