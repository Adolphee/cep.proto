@extends('layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center cepquote">
        <div class="col-md-1">
            <span><large><<</large></span>
        </div>
        <div class="col-md-10">
            <div class="col-md-12 homequote">
                <p>
                L’Église CEP est un rassemblement de chrétiens pentecôtistes qui veulent garder la flamme
                    du Saint-Esprit et contribuer à l’évangélisation monde en général, avec une attention particulière
                    à la jeunesse et au bien-être social de tous les hommes. 
                </p>
                <small align="right">Source : «Histoire de la CEP»</small>
            </div>
            <!--
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            -->
        </div>
        <div class="col-md-1">
            <span><large>>></large></span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div id="filler" class="col-md-12"></div>
    </div>
    <div class="row justify-content-center">

    <div class="card text-white mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Info card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-white mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-white mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Dark card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
<div class="overlay"></div>
@endsection
