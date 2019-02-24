@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Utente: {{ $user->name }}</h1>
                <ul>
                    <li>ID: {{ $user->id }}</li>
                    <li>Nome: {{ $user->name }}</li>
                    <li>Cognome: {{ $user->lastname }}</li>
                    <li>Età: {{ $user->age }}</li>
                    <li>Sesso: {{ $user->gender }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
