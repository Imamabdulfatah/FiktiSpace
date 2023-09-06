<?php

namespace App\Http\Controllers;

use App\Models\BerkasPembayaran;
use App\Models\Sport;
use App\Models\Art;
use Illuminate\Http\Request;
use App\Models\Register;

class KonfirmasiController extends Controller
{
    public function berkas()
    {
        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.berkas',
                [
                    "title" => "Berkas",
                    "active" => "berkas",
                    "sidebar" => "sidebar",
                    "mobileLegends" => "fee perlombaan : Rp. 50.000/tim",
                    "futsal" => "fee perlombaan : Rp. 100.000/tim",
                    "basket" => "fee perlombaan : Rp. 100.000/tim", 
                    "badmminton" => "fee perlombaan : Rp. 30.000/tim",
                    "data" =>  Sport::all(),
                    "openclose" => Register::all(), 
                                
                ]
            );
        } else {
            return view('dashboard.user.berkas',
                [
                    "title" => "Berkas",
                    "active" => "berkas",
                    "sidebar" => "sidebar",  
                    "solovocal" => "fee perlombaan : Rp. 30.000/orang",
                    "poster" => "fee perlombaan : Rp. 30.000/orang", 
                    "data" =>  Art::all(), 
                    "openclose" => Register::all(),           
                ]
            );
        }   
    }

    public function payment()
    {
        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.pembayaran',
                [
                    "title" => "Pembayaran",
                    "active" => "pembayaran",
                    "sidebar" => "sidebar",  
                    "data" =>  Sport::all(),
                    "openclose" => Register::all(),   

                ]
            );
        } else {
            
            return view('dashboard.user.pembayaran',
                [
                    "title" => "Pembayaran",
                    "active" => "pembayaran",
                    "sidebar" => "sidebar",  
                    "data" =>  Art::all(),
                    "openclose" => Register::all(),               
                ]
            );
        }
    }

    public function uploadBerkas(Request $request, Sport $sports, Art $arts, BerkasPembayaran $berkas )
    {
        // return $request->file('berkas')->store('berkas');
        if (auth()->user()->category_id === 1 | auth()->user()->category_id === 2 | auth()->user()->category_id === 3) {
            $validatedData = $request->validate([
                'berkas' => 'required|file|max:2048',
            ]);

            if($request->file('berkas')) {
                $validatedData['berkas'] = $request->file('berkas')->store('berkas');
            }

            $validateData['user_id'] = auth()->user()->id;
            $validateData['category_id'] = auth()->user()->category_id;

            // $berkas::create($validatedData);
            // $berkas::where('id', $valorant->id)->create($validateData);
            $sports->updateOrCreate($validateData);
            // $sport = Valorant::findOrFail($id);
            // $sport->delete();

            return redirect('/dashboard/berkas-peserta/')->with('success', 'Berkas berhasil ditambahkan, Tunggu konfirmasi selanjutnya');
        } else {
            $validatedData = $request->validate([
                'berkas' => 'required|file|max:2048',
            ]);

            if($request->file('berkas')) {
                $validatedData['berkas'] = $request->file('berkas')->store('berkas');
            }

            $arts::create($validatedData);
            return redirect('/dashboard/berkas-peserta/')->with('success', 'Berkas berhasil ditambahkan');
        }
        
        
    }

    public function uploadPayment(Request $request, Sport $sports, Art $arts)
    {
        return $request->file('payment')->store('payment');
        // $validatedData = $request->validate([
        //     'zip_file' => 'required|file|mimes:zip|max:2048', 
        // ]);
    }
}
