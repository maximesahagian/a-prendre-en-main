@extends('layouts.admin')
@section('content')
    <div class="main-content team">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">L'équipe</h3>
                </div>
                <div class="panel-body">
                    <a href="/admin/team/add"><button class="btn btn-success add-new-btn">Ajouter</button></a>
                    @foreach($members as $member)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="metric">
                                    <a href="/admin/team/edit/{{$member->id}}">
                                        {{$member->name}}
                                    </a>
                                    <div class="actions">
                                        <a href="/admin/team/edit/{{$member->id}}"><button class="btn btn-alert">Editer</button></a>
                                        <button to-delete="{{$member->id}}" class="btn btn-danger delete-member">Supprimer</button>
                                    </div>
                                    <div class="image-team" style="background-image: url('/img/members/<?=$member->image?>')">
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