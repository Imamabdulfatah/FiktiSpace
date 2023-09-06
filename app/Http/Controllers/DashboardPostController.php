<?php

namespace App\Http\Controllers;


use App\Models\Sport;
use App\Models\Art;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Confirm;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // test
        // return MobileLegends::where('user_id', auth()->user()->id)->get();
        return view('dashboard.user.data', 
            [
                "title" => "Form Datadiri",
                "active" => "datapeserta",
                "sidebar" => "sidebar",
                "table_satu" => "",
                "table_dua" => "d-none",
                "post_sport" => Sport::where('user_id', auth()->user()->id)->get(),
                "post_art" => Art::where('user_id', auth()->user()->id)->get(),
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
                    "title" => "Form Tambah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",       
                ]
            );
        } else {
            return view('dashboard.user.data.create_art',
                [
                    "title" => "Form Tambah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",       
                ]
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            // $validateData['category_id'] = auth()->user()->category_id;
    
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
            // $validateData['category_id'] = auth()->user()->category_id;
    
            Art::create($validateData);
    
            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil ditambahkan');
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sports, Art $arts, Request $request)
    {
        return $request;
        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.data.create_sport',
                [
                    "title" => "Form Tambah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",       
                ]
            );
        } else {
            return view('dashboard.user.data.create_art',
                [
                    "title" => "Form Tambah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",       
                ]
            );
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sports)
    {
        return view('dashboard.user.data.edit_sport',
            [
                "title" => "Form Tambah Edit",
                "active" => "datapeserta",
                "sidebar" => "sidebar",       
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Valorant  $valorant
     * @return \Illuminate\Http\Response
     */

    
    public function destroy(Sport $sports, Art $arts)
    {
        if (auth()->user()->category_id === 1 | auth()->user()->category_id === 2 | auth()->user()->category_id === 3 | auth()->user()->category_id === 4) 
        {
            Sport::destroy($sports->id);
    
            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil dihapus');
        } else {
            Art::destroy($sports->id);
    
            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil dihapus');
        }
    }
}
