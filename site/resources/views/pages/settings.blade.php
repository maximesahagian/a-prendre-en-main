@extends('layouts.admin')
@section('content')
    <div class="main-content settings">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Les paramètres</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form method="post" action="/admin/settings/edit">
                            {{csrf_field()}}
                        @foreach($settings as $setting)
                            <div class="col-sm-12">
                                <p class="name-setting">{{$setting->description}} :</p>
                                <div class="metric">
                                    <input type="text" name="{{$setting->key}}" style="width: 100%" class="setting-input <?= $setting->key ?>" value="{{$setting->value}}">
                                </div>
                            </div>
                        @endforeach
                            <input type="submit" class="btn btn-success" value="Valider">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop