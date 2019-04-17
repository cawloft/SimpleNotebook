<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller{

    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show'
        ]);
    }

    public function index(){

        $notes = Note::all();

        return view('welcome', compact('notes'));

    }

    public function create(){

        return view('note.create');

    }

    public function store(){

        $attributes = $this->validateNote(request());

        $attributes['owner_id'] = Auth::user()->id;

        Note::create($attributes);

        return redirect('/');

    }

    public function show(Note $note){

        return view('note.show', compact('note'));

    }

    public function edit(Note $note){

        $this->authorize('update', $note);

        return view('note.edit', compact('note'));

    }

    public function update(Note $note){

        $this->authorize('update', $note);

        $note->update($this->validateNote(request()));

        return redirect('/note/' . $note->id);

    }

    public function destroy(Note $note){

        $this->authorize('update', $note);

        $note->delete();

        return redirect('/');

    }

    public function validateNote(Request $request){

        return $request->validate([
            'title' => 'required|max:20',
            'content' => 'required'
        ]);

    }

}
