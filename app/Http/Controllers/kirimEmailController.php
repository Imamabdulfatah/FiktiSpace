<?php

namespace App\Http\Controllers;

use App\Mail\VerifikasiEmail;
use App\Mail\FailedVerifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Sport;
use App\Models\Art;

class kirimEmailController extends Controller
{
    public function verifikasiMl($id, Request $request, Sport $sports)
    {
        $data = Sport::findOrFail($id);

        $validateData = $request->validate([
            'konfirmasi_berkas' => 'required',
        ]);

        $validateData['user_id'] = $data->user_id;
        $validateData['category_id'] = $data->category_id;
        $validateData['username'] = $data->username;
        $validateData['ketua'] = $data->ketua;
        $validateData['email'] = $data->email;
        $validateData['phone'] = $data->phone;
        $validateData['anggota'] = $data->anggota;
        $validateData['region'] = $data->region;

        $sports->updateOrCreate($validateData);

        $data = Sport::findOrFail($id);
        $data->delete();
        
        $mail = $data->email;
        
        Mail::to($mail)->send(new VerifikasiEmail());

        return redirect('/admin/data-mobile-legends')->with('success', 'Success, Email Konfirmasi telah dikirim ');
    }

    public function mlFailed($id)
    {
        $data = Sport::findOrFail($id);
        $mail = $data->email;
        
        Mail::to($mail)->send(new FailedVerifikasi());

        return redirect('/admin/data-mobile-legends')->with('success', 'Email disapprove Terkirim');
    }

    public function verifikasiFutsal($id, Request $request, Sport $sports)
    {
        $data = Sport::findOrFail($id);

        $validateData = $request->validate([
            'konfirmasi_berkas' => 'required',
        ]);

        $validateData['user_id'] = $data->user_id;
        $validateData['category_id'] = $data->category_id;
        $validateData['username'] = $data->username;
        $validateData['ketua'] = $data->ketua;
        $validateData['email'] = $data->email;
        $validateData['phone'] = $data->phone;
        $validateData['anggota'] = $data->anggota;
        $validateData['region'] = $data->region;

        $sports->updateOrCreate($validateData);

        $data = Sport::findOrFail($id);
        $data->delete();
        
        $mail = $data->email;
        
        Mail::to($mail)->send(new VerifikasiEmail());

        return redirect('/admin/data-futsal')->with('success', 'Success, Email Konfirmasi telah dikirim ');
    }

    public function futsalFailed($id)
    {
        $data = Sport::findOrFail($id);
        $mail = $data->email;
        
        Mail::to($mail)->send(new FailedVerifikasi());

        return redirect('/admin/data-futsal')->with('success', 'Email disapprove Terkirim');
    }

    public function verifikasiBasket($id, Request $request, Sport $sports)
    {
        $data = Sport::findOrFail($id);

        $validateData = $request->validate([
            'konfirmasi_berkas' => 'required',
        ]);

        $validateData['user_id'] = $data->user_id;
        $validateData['category_id'] = $data->category_id;
        $validateData['username'] = $data->username;
        $validateData['ketua'] = $data->ketua;
        $validateData['email'] = $data->email;
        $validateData['phone'] = $data->phone;
        $validateData['anggota'] = $data->anggota;
        $validateData['region'] = $data->region;

        $sports->updateOrCreate($validateData);

        $data = Sport::findOrFail($id);
        $data->delete();
        
        $mail = $data->email;
        
        Mail::to($mail)->send(new VerifikasiEmail());

        return redirect('/admin/data-basket')->with('success', 'Success, Email Konfirmasi telah dikirim ');
    }

    public function basketFailed($id)
    {
        $data = Sport::findOrFail($id);
        $mail = $data->email;
        
        Mail::to($mail)->send(new FailedVerifikasi());

        return redirect('/admin/data-basket')->with('success', 'Email disapprove Terkirim');
    }

    public function verifikasiBulutangkis($id, Request $request, Sport $sports)
    {
        $data = Sport::findOrFail($id);

        $validateData = $request->validate([
            'konfirmasi_berkas' => 'required',
        ]);

        $validateData['user_id'] = $data->user_id;
        $validateData['category_id'] = $data->category_id;
        $validateData['username'] = $data->username;
        $validateData['ketua'] = $data->ketua;
        $validateData['email'] = $data->email;
        $validateData['phone'] = $data->phone;
        $validateData['anggota'] = $data->anggota;
        $validateData['region'] = $data->region;

        $sports->updateOrCreate($validateData);

        $data = Sport::findOrFail($id);
        $data->delete();
        
        $mail = $data->email;
        
        Mail::to($mail)->send(new VerifikasiEmail());

        return redirect('/admin/data-bulu-tangkis')->with('success', 'Success, Email Konfirmasi telah dikirim ');
    }

    public function bulutangkisFailed($id)
    {
        $data = Sport::findOrFail($id);
        $mail = $data->email;
        
        Mail::to($mail)->send(new FailedVerifikasi());

        return redirect('/admin/data-bulu-tangkis')->with('success', 'Email disapprove Terkirim');
    }

    public function verifikasiSolovocal($id, Request $request, Art $arts)
    {
        $data = Art::findOrFail($id);

        $validateData = $request->validate([
            'konfirmasi_berkas' => 'required',
        ]);

        $validateData['user_id'] = $data->user_id;
        $validateData['category_id'] = $data->category_id;
        $validateData['username'] = $data->username;
        $validateData['instansi'] = $data->instansi;
        $validateData['email'] = $data->email;
        $validateData['phone'] = $data->phone;
      
        $arts->updateOrCreate($validateData);

        $data = Art::findOrFail($id);
        $data->delete();
        
        $mail = $data->email;
        
        Mail::to($mail)->send(new VerifikasiEmail());

        return redirect('/admin/data-solo-vocal')->with('success', 'Success, Email Konfirmasi telah dikirim ');
    }

    public function solovocalFailed($id)
    {
        $data = Art::findOrFail($id);
        $mail = $data->email;
        
        Mail::to($mail)->send(new FailedVerifikasi());

        return redirect('/admin/data-solo-vocal')->with('success', 'Email disapprove Terkirim');
    }

    public function verifikasiPoster($id, Request $request, Art $arts)
    {
        $data = Art::findOrFail($id);

        $validateData = $request->validate([
            'konfirmasi_berkas' => 'required',
        ]);
        $validateData['user_id'] = $data->user_id;
        $validateData['category_id'] = $data->category_id;
        $validateData['username'] = $data->username;
        $validateData['instansi'] = $data->instansi;
        $validateData['email'] = $data->email;
        $validateData['phone'] = $data->phone;

        $arts->updateOrCreate($validateData);

        $data = Art::findOrFail($id);
        $data->delete();
        
        $mail = $data->email;
        
        Mail::to($mail)->send(new VerifikasiEmail());

        return redirect('/admin/data-poster')->with('success', 'Success, Email Konfirmasi telah dikirim ');
    }

    public function posterFailed($id)
    {
        $data = Art::findOrFail($id);
        $mail = $data->email;
        
        Mail::to($mail)->send(new FailedVerifikasi());

        return redirect('/admin/data-poster')->with('success', 'Email disapprove Terkirim');
    }

}
