@extends('layouts.admin')
@section('content')
    <div class="main-content team-new">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 new-id="{{$member->id}}" class="panel-title">Membre n° {{$member->id}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="/admin/team/editteam" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <label for="title-input">Nom du membre</label><br>
                                <input type="text" name="name-input" class="name-input" value="{{$member->name}}" placeholder="Nom du membre">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="text-input">Description du membre</label>
                                <textarea name="description-input" class="description-input col-md-12" placeholder="Description du membre" id="" cols="30" rows="10">{{$member->description}}</textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="author-input">Image du membre (optionnel)</label><br>
                                <input type="file" name="image-input" class="image-input">
                            </div>

                            <input type="text" name="id-input" value="{{$member->id}}" style="display: none;">

                            <input type="submit" class="btn btn-success" value="Éditer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop