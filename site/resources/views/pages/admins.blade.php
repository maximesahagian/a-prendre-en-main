@extends('layouts.admin')
@section('content')
    <div class="main-content admins">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Les administrateurs</h3>
                </div>
                <div class="panel-body">
                    <a href="/admin/admins/add"><button class="btn btn-success add-new-btn">Ajouter</button></a>
                    @foreach($admins as $admin)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="metric">
                                    <a href="/admin/news/edit/{{$admin->id}}">
                                        {{$admin->email}}
                                    </a>
                                    <div class="actions">
                                        <a href="/admin/admins/edit/{{$admin->id}}"><button class="btn btn-alert">Editer</button></a>
                                        <button to-delete="{{$admin->id}}" class="btn btn-danger delete-new">Supprimer</button>
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