<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Checkin;
use DB;
use PDF;

class TiketController extends Controller
{

    public function index()
    {
        $tikets = Tiket::latest()->paginate(10);
    
        return view('tikets.index',compact('tikets'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('tikets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
    
        Tiket::create($request->all());

        return redirect()->route('tikets.index')
                        ->with('success','Berhasil Memesan !');
    }

    public function show(Tiket $tiket)
    {
        //
    }

    public function edit(Tiket $tiket)
    {
        return view('tikets.edit',compact('tiket'));

    }

    public function update(Request $request,Tiket $tiket)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
            
        $tiket->update($request->all());
    
        return redirect()->route('tikets.index')
                        ->with('success','Berhasil Update !');
    }

    public function destroy(Tiket $tiket)
    {
        $tiket->delete();

        return redirect()->route('tikets.index')
                        ->with('success','Berhasil Hapus !');
    }

    public function createPDF() {
    //     $tikets = Tiket::all();

    //     view()->share('tikets.cetak_pdf',$tikets);
    //     $pdf = PDF::loadView('pdf_view', $tikets);
    //   // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    $tikets = Tiket::latest()->paginate(10);
    
        return view('tikets.index',compact('tikets'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }


}
