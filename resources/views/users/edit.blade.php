@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiorna l'utente <strong>{{ $user->name }}  {{$user->lastname}}</strong></h1>
                <form class="form-group" action="{{ route('utenti.update', $user->id) }}" method="post">
                  {{--a differenza della REST useremo metodo post con un hidden PUT o PATCH cosi:  --}}
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Inserisci il nome" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Cognome</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Inserisci il cognome" value="{{ $user->lastname }}">
                    </div>
                    <div class="form-group">
                        <label for="age">Età</label>
                        <input type="number" name="age" placeholder="Inserisci l'età" class="form-control" value="{{ $user->age }}">
                    </div>
                    <div class="form-group">
                        <label for="gender">Sesso</label>
                        <select class="form-control" name="gender">
                            <option value="">---</option>
                            <option value="M"{{ ('M' == $user->gender) ? ' selected' : null }}>M</option>
                            <option value="F"{{ ('F' == $user->gender) ? ' selected' : null }}>F</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Salva Nuovo Utente" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
