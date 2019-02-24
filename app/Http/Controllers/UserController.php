<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users.index', compact('users'));
  }

    public function create()
    {
      return view('users.create');
    }


    public function store(Request $request)
    {
      $data = $request->all();
      $user = new User();
      //possiamo fare in questo modo
      // $user->name = $data['name'];
      // $user->lastname = $data['lastname'];
      // $user->age = $data['age'];
      // $user->gender = $data['gender'];
      //oppure usiamo
      $user->fill($data);

      $user->save();
      //dd($user); qui user non è stato ancora filtrato con il fillable che riguarderà solo il momento in cui verrà ritornato al database
      return redirect()->route('utenti.index');

    }

    public function show($id)
    //ricordare il discorso della dependece injection show(User $user) ed evitare di fare il find dopo con la variabile $user.
    {
      //Per trovare l'utente corrispondente dovremmo fare
      // $users = User::all();
      // foreach ($users as $user)
      // {
      //   if ($user->id == $id)
      //   {
      //     $db_user = $user;
      //   }
      // }
      // dd($user);
      //ma con laravel basterà fare :

      $user = User::find($id);

      if (empty($utenti))
      {
        abort(404);
      }
      return view('users.show', compact('user'));
    }


    public function edit($id)
    {
      $user = User::find($id);
      return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
      $user = User::find($id);
      $data = $request->all();
      $user->update($data);

      return view('users.update');
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();

      $users = User::all();
      return view('users.index', compact('users'));

    }
}
