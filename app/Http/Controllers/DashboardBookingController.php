<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Notary;
use Illuminate\Http\Request;

class DashboardBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bookings.index', [
            'booking' => Booking::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bookings.create', [
            'client' => Client::all(),
            'notary' => Notary::all()
        ]);
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
            'id_jadwal' => 'required',
            'id_notaris' => 'required|max:8',
            'id_klien' => 'required|max:8',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        Booking::create($request->all());

        return redirect('/dashboard/bookings')->with('Berhasil', 'Data Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('dashboard.bookings.show', [
            'booking' => $booking
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('dashboard.bookings.edit', [
            'booking' => $booking,
            'client' => Client::all(),
            'notary' => Notary::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'id_jadwal' => 'required',
            'id_notaris' => 'required|max:8',
            'id_klien' => 'required|max:8',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $booking->update($request->all());

        return redirect('/dashboard/bookings')->with('Berhasil', 'Data Berhasil di perbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        Booking::destroy($booking->id);

        return redirect('/dashboard/bookings')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}