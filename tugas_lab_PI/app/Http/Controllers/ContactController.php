<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_depan'=>'required',
            'nama_belakang'=>'required',
            'email'=>'required'
        ]);

        $contact = new Contact([
            'nama_depan' => $request->get('nama_depan'),
            'nama_belakang' => $request->get('nama_belakang'),
            'email' => $request->get('email'),
            'no_telp' => $request->get('no_telp'),
            'jenis_pekerjaan' => $request->get('jenis_pekerjaan'),
            'domisili' => $request->get('domisili')
        ]);

        $contact->save();
        return redirect('/contacts')->with('success', 'Kontak berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_depan'=>'required',
            'nama_belakang'=>'required',
            'email'=>'required'
        ]);

        $contact = Contact::find($id);
        $contact->nama_depan = $request->nama_depan;
        $contact->nama_belakang = $request->nama_belakang;
        $contact->email = $request->email;
        $contact->no_telp = $request->no_telp;
        $contact->jenis_pekerjaan = $request->jenis_pekerjaan;
        $contact->domisili = $request->domisili;

        $contact->update();
        return redirect('/contacts')->with('success', 'Kontak berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Kontak berhasil dihapus!');
    }
}