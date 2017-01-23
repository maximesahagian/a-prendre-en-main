@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Les actualités</h3>
                </div>
                <div class="panel-body">
                    @foreach($news as $new)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="metric">
                                {{$new->title}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop