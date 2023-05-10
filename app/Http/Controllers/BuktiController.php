<?php

namespace App\Http\Controllers;

use App\Models\Bukti;
use Illuminate\Http\Request;

class BuktiController extends Controller
{
    public function index()
    {
        $buktis = Bukti::latest()->paginate(1);
        return view('buktis.index',compact('buktis'))
            ->with('i', (request()->input('page', 1) - 1) * 1);
    }

}
