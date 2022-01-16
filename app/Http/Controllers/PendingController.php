<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pending;

class PendingController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'email' => 'required|max:30',
            'phone' => 'required|max:15',
            'subject' => 'required|max:100',
            'message' => 'required',
            'status' => 'required'

        ]);
        Pending::create($validatedData);

        return redirect('/');
    }
}
