<?php

namespace App\Http\Controllers;

// use App\Models\Valorant;
// use App\Models\Poster;

use App\Models\Sport;
use App\Models\Art;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use App\Models\Register;

class DashboardCrudController extends Controller
{
    public function detail()
    {
        return view('dashboard/admin/detail/index', [
            "title" => "Detail Informasi",
            "active" => "dashboard",
            "sidebar" => "sidebar_admin", 
        ]);
    }

    public function edit($id, Request $request)
    {
        // return $request;
        $sports = Sport::find($id);
        $arts = Art::find($id);

        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.data.edit_sport',
                [
                    "title" => "Form Ubah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",   
                    "data_sport" => $sports ,
                    "openclose" => Register::all(), 
                ]
            );
        } else {
            return view('dashboard.user.data.edit_art', 
                [
                    "title" => "Form Ubah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",
                    "data_art" => $arts,
                    "openclose" => Register::all(),  
                ]
            );
        }
    }

    public function update($id, Request $request, Sport $sports, Art $arts) 
    {
        if (auth()->user()->category_id === 1 ) {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255',
                'ketua' => 'required|min:2|max:255',
                'email' => ['required','email:dns'],
                'phone' => 'required',
                'anggota' => 'required|min:2|max:1024',
                'region' => 'required|min:2',
                'category_id' => 'required',
            ]);
    
            $validateData['user_id'] = auth()->user()->id;
           
            $sports->updateOrCreate($validateData);
            $data = Sport::findOrFail($id);
            $data->delete();

            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil diupdate');
        } else {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255',
                'instansi' => 'required|min:2|max:255',
                'email' => ['required','email:dns'],
                'phone' => 'required',
                'category_id' => 'required',
            ]);
    
            $validateData['user_id'] = auth()->user()->id;
          
            $arts->updateOrCreate($validateData);
            $data = Art::findOrFail($id);
            $data->delete();
                            
            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil diupdate');
        }
    }
    public function delete($id)
    {
        if (auth()->user()->category_id === 1) {
            $sport = Sport::findOrFail($id);
            $sport->delete();
    
            return redirect()->back()->with('danger', 'Data berhasil dihapus');
        } else {
            $sport = Art::findOrFail($id);
            $sport->delete();

            return redirect()->back()->with('danger', 'Data berhasil dihapus');
        }  
    }
}
