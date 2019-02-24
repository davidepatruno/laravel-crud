@extends('layout.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-12">
              <h1>Crea un nuovo utente</h1>
              <form class="form-group" action="{{ route('utenti.store')}}"  method="post">
                  @csrf
                  <div class="form-group">
                      <label for="name">Nome</label>
                      <input type="text" name="name" class="form-control" placeholder="Inserisci il nome">
                  </div>
                  <div class="form-group">
                      <label for="lastname">Cognome</label>
                      <input type="text" name="lastname" class="form-control" placeholder="Inserisci il cognome" >
                  </div>
                  <div class="form-group">
                      <label for="age">Età</label>
                      <input type="number" name="age" placeholder="Inserisci l'età" class="form-control" >
                  </div>
                  <div class="form-group">
                      <label for="gender">Sesso</label>
                      <select class="form-control" name="gender">
                          <option value="">---</option>
                          <option value="M">M</option>
                          <option value="F">F</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <input type="submit" value="Salva" class="form-control">
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection
