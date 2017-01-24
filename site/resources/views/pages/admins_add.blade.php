@extends('layouts.admin')
@section('content')
    <div class="main-content add-admin">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter un administrateur</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="/admin/admins/addadmin" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <label for="name-input">Nom de l'administrateur</label><br>
                                <input type="text" name="name-input" class="name-input" placeholder="Nom de l'administrateur">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email-input">Email de l'administrateur</label><br>
                                <input type="email" name="email-input" class="email-input" placeholder="Email de l'administrateur"></input>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="password-input">Mot de passe de l'administrateur</label><br>
                                <input type="password" name="password-input" class="password-input" placeholder="Mot de passe de l'administrateur">
                            </div>

                            <input type="submit" class="btn btn-success" value="Ajouter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop