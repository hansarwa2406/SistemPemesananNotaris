<?php

namespace App\Http\Controllers;

use App\Models\Notary;
use Illuminate\Http\Request;

class DashboardNotaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.notaries.index', [
            'notary' => Notary::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.notaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_notaris' => 'required',
            'nama_notaris' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'jabatan' => 'required',
        ]);
        Notary::create($request->all());

        return redirect('/dashboard/notaries')->with('Berhasil', 'Data notaris berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notary  $notary
     * @return \Illuminate\Http\Response
     */
    public function show(Notary $notary)
    {
        return view('dashboard.notaries.show', [
            'notary' => $notary
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notary  $notary
     * @return \Illuminate\Http\Response
     */
    public function edit(Notary $notary)
    {
        return view('dashboard.notaries.edit', [
            'notary' => $notary
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notary  $notary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notary $notary)
    {
        $request->validate([
            'id_notaris' => 'required',
            'nama_notaris' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'jabatan' => 'required',
        ]);

        $notary->update($request->all());

        return redirect('/dashboard/notaries')->with('Berhasil', 'Data notaris berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notary  $notary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notary $notary)
    {
        Notary::destroy($notary->id);

        return redirect('/dashboard/notaries')->with('Berhasil', 'Data notaris berhasil dihapus');
    }
}
