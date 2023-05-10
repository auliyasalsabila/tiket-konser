<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkin;
use App\Models\Tiket;
use App\Models\Bukti;


class CheckinController extends Controller
{
    public function index()
    {
        $tikets = Tiket::latest()->paginate(5);
    
        return view('tikets.index',compact('tikets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
    
        Tiket::create($request->all());

        return view('pesan')
                        ->with('success','Berhasil Memesan !');
    }

    public function update(Request $request, Checkin $checkin) {
        $request->validate([
            'status' => 'required',
            'checkin' => 'required',
        ]);
            
        $checkin->update($request->all());
    
        return redirect()->route('tikets.index')
                        ->with('success','Berhasil Checkin !');
    }
}
