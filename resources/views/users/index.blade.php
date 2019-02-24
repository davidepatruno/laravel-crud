@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli utenti <a href="{{ route('utenti.create') }}" class="btn btn-primary">Aggiungi nuovo</a></h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Età</th>
                            <th>Sesso</th>
                            <th>Visualizza</th>
                            <th>Aggiorna</th>
                            <th>Elimina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>
                                    <a href="{{ route('utenti.show', $user->id) }}" class="btn btn-primary">Dettagli</a>
                                </td>
                                <td>
                                    <a href="{{ route('utenti.edit', $user->id)}}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('utenti.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="Elimina">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
