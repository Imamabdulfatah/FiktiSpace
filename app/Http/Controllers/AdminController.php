<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Sport;
use App\Models\Art;
use App\Mail\VerifikasiEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard/admin/index', [
            "title" => "Admin",
            "active" => "dashboard",
            "sidebar" => "sidebar_admin", 
            "sports" =>  Sport::all(),
            "arts" => Art::all(),
            "openclose" => Register::all(),
        ]);
    }

    public function update($id ,Request $request, Register $register)
    {
        // return $request;
        $validateData = $request->validate([
            'status' => 'required',
        ]);

        $register->updateOrCreate($validateData);
        $data = Register::findOrFail($id);
        $data->delete();
        // $valorant->destroy($validateData);

        return redirect('/admin')->with('success', 'Status Pendaftaran berhasil diupdate');
    }


    public function mobileLegends()
    {    
        return view('dashboard/admin/sport', [
            "title" => "Data Peserta Mobile Legends",
            "active" => "sport",
            "sidebar" => "sidebar_admin",
            "post" => Sport::all(),
            "categori" => 1
        ]);
    }

    public function futsal()
    {    
        return view('dashboard/admin/sport', [
            "title" => "Data Peserta Futsal",
            "active" => "sport",
            "sidebar" => "sidebar_admin",
            "post" =>  Sport::all(),
            "categori" => 2
        ]);
    }

    public function basket()
    {
        return view('dashboard/admin/sport', [
            "title" => "Data Peserta Basket",
            "active" => "sport",
            "sidebar" => "sidebar_admin",
            "post" => Sport::all(),
            "categori" => 3
        ]);
    }

    public function buluTangkis()
    {
        return view('dashboard/admin/sport', [
            "title" => "Data Peserta Bulu Tangkis",
            "active" => "sport",
            "sidebar" => "sidebar_admin",
            "post" => Sport::all(),
            "categori" => 4
        ]);
    }

    public function soloVocal()
    {
        return view('dashboard/admin/art', [
            "title" => "Data Peserta Solo Vocal",
            "active" => "art",
            "sidebar" => "sidebar_admin",
            "post" => Art::all(),
            "categori" => 5
        ]);
    }

    public function poster()
    {
        return view('dashboard/admin/art', [
            "title" => "Data Peserta Poster",
            "active" => "art",
            "sidebar" => "sidebar_admin",
            "post" => Art::all(),
            "categori" => 6
        ]);
    }
}
