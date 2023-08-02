<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller {
    public function index() {
        $contacts = Contact::all()->all();
//        $post = $contacts->where('is_published', 0)->first();
//        dd($contacts);
        return view('contact.index', compact('contacts'));

    }

//    public function store() {
//        $data = request()->validate(['1t_name' => 'string', 'Last_name' => 'string', 'old' => 'integer']);
//
//        Contact::create($data);
//        return redirect()->route('contact.index');
//    }

    public function create() {
//        dd(1111);
        return view('contact.create');
    }

    public function store() {
        $data = request()->validate(['first_name' => 'string', 'last_name' => 'string', 'photo' => 'string', 'old' => 'integer']);

        Contact::create($data);
        return redirect()->route('contact.index');
    }

    public function edit(Contact $contact) {
        return view('contact.edit', compact('contact'));
    }

    public function update(Contact $contact) {
        $data = \request()->validate(['first_name' => 'string', 'last_name' => 'string', 'photo' => 'string', 'old' => 'integer']);
//        dd($data);
        $contact->update($data);
        return redirect()->route('contact.show', $contact->id);
    }

    public static function show(Contact $contact) {
        return view('contact.show', compact('contact'));
    }

    public function destroy(Contact $contact) {
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
