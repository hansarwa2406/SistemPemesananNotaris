<?php

namespace App\Http\Controllers;

use App\Models\Pending;
use Illuminate\Http\Request;

class DashboardPendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pendings.index', [
            'pending' => Pending::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pendings.create');
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
            'email' => 'required|max:8',
            'phone' => 'required|max:80',
            'subject' => 'required|max:100',
            'message' => 'required|max:14',

        ]);
        Pending::create($request->all());

        return redirect('/dashboard/pendings')->with('Berhasil', 'Data pending baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function show(Pending $pending)
    {
        return view('dashboard.pendings.show', [
            'pending' => $pending
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function edit(Pending $pending)
    {
        return view('dashboard.pendings.edit', [
            'pending' => $pending
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pending $pending)
    {
        $request->validate([
            'email' => 'required|max:8',
            'phone' => 'required|max:80',
            'subject' => 'required|max:100',
            'message' => 'required|max:14',

        ]);
        $pending->update($request->all());

        return redirect('/dashboard/pendings')->with('Berhasil', 'Data pending berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pending $pending)
    {
        Pending::destroy($pending->id);

        return redirect('/dashboard/pendings')->with('Berhasil', 'Data pending berhasil dihapus');
    }
}
