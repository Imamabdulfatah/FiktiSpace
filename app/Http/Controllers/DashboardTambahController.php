<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;
use App\Models\Art;
use App\Models\Register;

class DashboardTambahController extends Controller
{
    public function index()
    {
        return view('dashboard.user.data', 
            [
                "title" => "Form Datadiri",
                "active" => "datapeserta",
                "sidebar" => "sidebar",
                "table_satu" => "",
                "table_dua" => "d-none",
                "post_sport" => Sport::where('user_id', auth()->user()->id)->get(),
                "post_art" => Art::where('user_id', auth()->user()->id)->get(),
                "openclose" => Register::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.data.create_sport',
                [
                    "title" => "Form Formulir Pendaftaran",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar", 
                    "openclose" => Register::all(),      
                ]
            );
        } else {
            return view('dashboard.user.data.create_art',
                [
                    "title" => "Form Formulir Pendaftaran",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",
                    "openclose" => Register::all(),       
                ]
            );
        }
    }

    public function store(Request $request)
    {
        if (auth()->user()->category_id === 1) {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255',
                'ketua' => 'required|min:2|max:255',
                'email' => ['required','email:dns'],
                'phone' => 'required',
                'anggota' => 'required|min:4|max:1024',
                'region' => 'required|min:2',
                'category_id' => 'required',
            ]);
    
            $validateData['user_id'] = auth()->user()->id;
    
            Sport::create($validateData);
    
            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil ditambahkan');
        } else {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255',
                'instansi' => 'required|min:2|max:255',
                'email' => ['required','email:dns'],
                'phone' => 'required',
                'category_id' => 'required',
            ]);
    
            $validateData['user_id'] = auth()->user()->id;
    
            Art::create($validateData);
    
            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil ditambahkan');
        }   
    }
}
