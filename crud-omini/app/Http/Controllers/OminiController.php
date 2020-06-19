<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Omino;

class OminiController extends Controller
{
    public function index() {
      $omini = Omino::all();
      return view('home', compact('omini'));
    }

    public function show($id) {
      $omino = Omino::findOrFail($id);
      return view('showOmino', compact('omino'));
    }

    public function delete($id) {
      $omino = Omino::findOrFail($id);
      $omino -> delete();
      return redirect() -> route('home')
                        -> withSuccess('Eliminazione di ' . $omino['firstName'] . ' ' . $omino['lastName'] . ' avvenuta con successo!');

    }

    public function edit($id) {
      $omino = Omino::findOrFail($id);
      return view('edit-omino', compact('omino'));
    }

    public function update(Request $request, $id) {
      $data = $request->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'address' => 'required',
        'code' => 'required|numeric|integer',
        'state' => 'required',
        'phoneNumber' => 'required',
        'role' => 'required'
      ]);
      $omino = Omino::findOrFail($id);
      $omino -> firstName = $data['firstName'];
      $omino -> lastName = $data['lastName'];
      $omino -> address = $data['address'];
      $omino -> code = $data['code'];
      $omino -> state = $data['state'];
      $omino -> phoneNumber = $data['phoneNumber'];
      $omino -> role = $data['role'];
      $omino -> save();
      return redirect() -> route('home')
                        -> withSuccess('Modifica di ' . $omino['firstName'] . ' ' . $omino['lastName'] . ' avvenuta con successo!');
    }

    public function create() {
      return view('create-omino');
    }

    public function store(Request $request) {
      $data = $request->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'address' => 'required',
        'code' => 'required|numeric|integer',
        'state' => 'required',
        'phoneNumber' => 'required',
        'role' => 'required'
      ]);
      $omino = new Omino;
      $omino -> firstName = $data['firstName'];
      $omino -> lastName = $data['lastName'];
      $omino -> address = $data['address'];
      $omino -> code = $data['code'];
      $omino -> state = $data['state'];
      $omino -> phoneNumber = $data['phoneNumber'];
      $omino -> role = $data['role'];
      $omino -> save();
      return redirect() -> route('home')
        -> withSuccess('Creazione di ' . $omino['firstName'] . ' ' . $omino['lastName'] . ' avvenuta con successo!');
    }
}
