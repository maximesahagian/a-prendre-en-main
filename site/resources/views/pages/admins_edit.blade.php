@extends('layouts.admin')
@section('content')
    <div class="main-content edit-admin">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 new-id="{{$admin->id}}" class="panel-title">Administrateur n° {{$admin->id}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="/admin/admins/editadmin" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <label for="name-input">Nom de l'administrateur</label><br>
                                <input type="text" name="name-input" class="name-input" value="{{$admin->name}}" placeholder="Nom de l'administrateur">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email-input">Auteur de l'actualité</label><br>
                                <input type="email" name="email-input" class="email-input" value="{{$admin->email}}" placeholder="Email de l'administrateur">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="password-input">Mot de passe (optionnel)</label><br>
                                <input type="password" name="password-input" class="password-input" placeholder="Mot de passe (optionnel)">
                            </div>

                            <input type="text" name="id-input" value="{{$admin->id}}" style="display: none;">

                            <input type="submit" class="btn btn-success" value="Éditer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop