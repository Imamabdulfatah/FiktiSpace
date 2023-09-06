<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class EventController extends Controller
{
    public function satu()
    {    
        return view('competition/event', [
            "title" => "Mobile Legends",
            "active" => "mobile-legengs",
            "description" => "Lomba pertandingan bermain Mobile legends",
            "image" => "/img/internet/pg_ml.png",
            "about" => "",
            "timeline" => "",
            "faq" => "",
            "cu_about" => "d-none",
            "cu_timeline" => "d-none",
            "cu_faq" => "d-none",
            "tiket" => "Rp. 50.000(Regist) + Rp.30.000(WO) / Tim",
            "platform" => "Online & Offline",
            "tanggal" => "Minggu, 18 Juni 2023 – Rabu, 21 Juni 2023",
            "lokasi" => "Discord & Mile32cafe",
            "Description" => "Pertandingan Mobile Legends dilaksanakan secara online dan offline. System pertandingan yang akan digunakan adalah sistem gugur dengan empat babak, yaitu: babak penyisihan, quarter final, semifinal, dan final.",
            "rules1" => "1. Mahasiswa Universitas Gunadarma yang masih Aktif (Tingkat 1-4)",
            "rules2" => "2.	Wajib memiliki KRS Universitas Gunadarma.",
            "rules3" => "3.	Setiap tim wajib memiliki satu official tim.",
            "rules4" => "4.	Setiap tim mobile legends wajib terdiri dari lima orang pemain, satu pemain cadangan, dan tidak wajib sekelas.",
            "rules5" => "5.	Peserta yang dapat bermain hanyalah peserta yang terdaftar dalam pendaftaran.",
            "rules6" => "6. Seluruh informasi, peraturan, dan kebijakan yang sudah diberikan pada proses pendaftaran wajib dipahami dan dipatuhi oleh seluruh peserta.",
            "rules7" => "7.	Dengan mendaftar, maka seluruh peserta dianggap telah menyetujui semua peraturan dan kebijakan yang berlaku yang telah dibuat oleh Panitia FIKTI SPACE 2.0.",
            "berkas" => "Berkas-berkas yang diperlukan:",
            "berkas1" => "1. KRS masing-masing peserta wajib di upload pada saat registrasi (PDF).",
            "berkas2" => "2. Blanko bukti pembayaran wajib di upload pada saat registrasi (PDF/JPG/PNG).",
            "contact1" => "Whatsapp : Mila (085822082131)",
            "contact2" => "Line :Selpiyana @selpiyanaaa",
            "openclose" => Register::all(),
            "daftar" => "Daftarkan Tim Anda",
        ]);
    }

    public function dua()
    {
        return view('competition/event', [
            "title" => "Futsal",
            "active" => "valorant",
            "description" => "Lomba pertandingan bermain Futsal",
            "image" => "images/logo-futsal.png",
            "about" => "",
            "timeline" => "",
            "faq" => "",
            "cu_about" => "d-none",
            "cu_timeline" => "d-none",
            "cu_faq" => "d-none",
            "tiket" => "Rp. 100.000(Regist) + Rp. 50.000(WO) / Tim",
            "platform" => "Offline",
            "tanggal" => "Sabtu, 17 Juni 2023 – Sabtu, 24 Juni 2023",
            "lokasi" => "Sport Center Kampus H, Universitas Gunadarma, Depok (Depok)
                Lapangan Kampus J1, Universitas Gunadarma, Bekasi (Kalimalang)
                Futsal Raihan, Kelapa Dua, Tangerang (Karawaci)
                ",
            "Description" => "Pertandingan futsal dilaksanakan di tiga region yang berbeda, yaitu: Depok, Kalimalang, dan Karawaci. Dengan sistem pertandingan grup dan empat babak, yaitu: 16 besar, quarter final, semifinal, dan final.",
            "rules1" => "1. Mahasiswa aktif FIKTI Universitas Gunadarma (Tingkat 1-4)",
            "rules2" => "2. Wajib memiliki KRS/blanko pembayaran Universitas Gunadarma.",
            "rules3" => "3.	Setiap tim wajib memiliki satu official tim.",
            "rules4" => "4. Peserta yang dapat bermain hanyalah peserta yang terdaftar dalam pendaftaran.",
            "rules5" => "5. Setiap tim futsal terdiri dari minimal delapan orang, maksimal sepuluh orang, dan wajib sekelas. ",
            "rules6" => "6. Seluruh informasi, peraturan, dan kebijakan yang sudah diberikan pada proses pendaftaran
            wajib dipahami dan dipatuhi oleh seluruh peserta.",
            "rules7" => "7. Dengan mendaftar, maka seluruh peserta dianggap telah menyetujui semua peraturan dan
            kebijakan yang berlaku yang telah dibuat oleh Panitia FIKTI SPACE 2.0 2023.",
            "berkas" => "Berkas-berkas yang diperlukan:",
            "berkas1" => "1. KRS masing-masing peserta wajib di upload pada saat registrasi (PDF).",
            "berkas2" => "2. Blanko bukti pembayaran wajib di upload pada saat registrasi (PDF/JPG/PNG).",
            "contact1" => "Whatsapp : 089504679196 (Ahmad Maula)",
            "contact2" => "Line : putannia (Putri Tania)",
            "openclose" => Register::all(),
            "daftar" => "Daftarkan Tim Anda",
        ]);
    }
    public function tiga()
    {
        return view('competition/event', [
            "title" => "Basket 3x3",
            "active" => "point-blank",
            "description" => "Lomba pertandingan bermain Basket",
            "image" => "images/logo-basket.png",
            "about" => "",
            "timeline" => "",
            "faq" => "",
            "cu_about" => "d-none",
            "cu_timeline" => "d-none",
            "cu_faq" => "d-none",
            "tiket" => "Rp. 100.000(Regist) + Rp. 50.000(WO) / Tim",
            "platform" => "Offline",
            "tanggal" => "Sabtu, 17 Juni 2023 – Sabtu, 24 Juni 2023",
            "lokasi" => "Sport Center Kampus H, Universitas Gunadarma , Depok",
            "Description" => "Pertandingan basket 3x3 dilaksanakan di region depok. sistem pertandingan yang akan digunakan adalah sistem grup dan tiga babak: quarter final, semi final, dan final.",
            "rules1" => "1. Mahasiswa aktif FIKTI Universitas Gunadarma (Tingkat 1-4)",
            "rules2" => "2. Wajib memiliki KRS/blanko pembayaran Universitas Gunadarma.",
            "rules3" => "3. Daftar pemain harus berisi nama lengkap, username, dan ID Account dari akun mobile
            legend yang akan dimainkan pada pertandingan",
            "rules4" => "4. Peserta yang dapat bermain hanyalah peserta yang terdaftar dalam pendaftaran.",
            "rules5" => "5.	Setiap tim wajib memiliki satu official tim. ",
            "rules6" => "6. Seluruh informasi, peraturan, dan kebijakan yang sudah diberikan pada proses pendaftaran
            wajib dipahami dan dipatuhi oleh seluruh peserta.",
            "rules7" => "7. Dengan mendaftar, maka seluruh peserta dianggap telah menyetujui semua peraturan dan
            kebijakan yang berlaku yang telah dibuat oleh Panitia FIKTI SPACE 2.0 2023.",
            "berkas" => "Berkas-berkas yang diperlukan:",
            "berkas1" => "1. KRS masing-masing peserta wajib di upload pada saat registrasi (PDF).",
            "berkas2" => "2. Blanko bukti pembayaran wajib di upload pada saat registrasi (PDF/JPG/PNG).",
            "contact1" => "Whatsapp : 085156080516 (Auliya Balindra)",
            "contact2" => "Line : khansamarshandaa (Khansa Marshanda)",
            "openclose" => Register::all(),
            "daftar" => "Daftarkan Tim Anda",
        ]);
    }
    public function empat()
    {
        return view('competition/event', [
            "title" => "Badminton",
            "active" => "photografy",
            "description" => "Lomba Badminton ini untuk permainan Ganda",
            "image" => "images/logo-badminton.png",
            "about" => "",
            "timeline" => "",
            "faq" => "",
            "cu_about" => "d-none",
            "cu_timeline" => "d-none",
            "cu_faq" => "d-none",
            "tiket" => "Rp.30.000(Regist) + Rp.20.000(WO) / Tim",
            "platform" => "Offline",
            "tanggal" => "Sabtu, 17 Juni 2023 - Senin, 19 Juni 2023",
            "lokasi" => "Golden Center, Kelapa Dua, Depok",
            "Description" => "Pertandingan Badminton dilaksanakan di region depok dengan partai Ganda putra. Sistem pertandingan yang akan digunakan adalah sistem gugur dengan empat babak, yaitu: babak penyisihan, quarter final, semifinal, dan final.",
            "rules1" => "1. Mahasiswa aktif FIKTI Universitas Gunadarma (Tingkat 1-4)",
            "rules2" => "2. Wajib memiliki KRS/blanko pembayaran Universitas Gunadarma.",
            "rules3" => "3.	Setiap tim Badminton wajib terdiri dari dua orang pemain dan tidak wajib sekelas.",
            "rules4" => "4. Setiap tim wajib memiliki satu official tim.",
            "rules5" => "5. Peserta yang dapat bermain hanyalah peserta yang terdaftar dalam pendaftaran.",
            "rules6" => "6. Seluruh informasi, peraturan, dan kebijakan yang sudah diberikan pada proses pendaftaran
            wajib dipahami dan dipatuhi oleh seluruh peserta.",
            "rules7" => "7. Dengan mendaftar, maka seluruh peserta dianggap telah menyetujui semua peraturan dan
            kebijakan yang berlaku yang telah dibuat oleh Panitia FIKTI SPACE 2.0 2023.",
            "berkas" => "Berkas-berkas yang diperlukan:",
            "berkas1" => "1. KRS masing-masing peserta wajib di upload pada saat registrasi (PDF).",
            "berkas2" => "2. Blanko bukti pembayaran wajib di upload pada saat registrasi (PDF/JPG/PNG).",
            "contact1" => "Whatsapp : 085780877367 (Wianda Rafa)",
            "contact2" => "Line : khansamarshandaa (Khansa Marshanda)",
            "openclose" => Register::all(),
            "daftar" => "Daftarkan Tim Anda",
        ]);
    }
    public function lima()
    {
        return view('competition/event', [
            "title" => "Solo Vocal",
            "active" => "solo-vocal",
            "description" => "Lomba pertandingan bermain Solo Vocal",
            "image" => "/img/internet/pg_sv.png",
            "about" => "",
            "timeline" => "",
            "faq" => "",
            "cu_about" => "d-none",
            "cu_timeline" => "d-none",
            "cu_faq" => "d-none",
            "tiket" => "Rp.30.000(Regist) + Rp. 20.000(WO)",
            "platform" => "Online",
            "tanggal" => "Sabtu, 17 Juni 2023 – Rabu, 21 Juni 2023",
            "lokasi" => "Google Drive ",
            "Description" => "Pada kompetisi solo vocal peserta dapat membawakan lagu dengan genre yang telah ditetapkan. Dengan durasi penampilan maksimal lima menit atau sama dengan satu lagu.",
            "rules1" => "1.	Mahasiswa aktif Universitas Gunadarma (Tingkat 1-4).",
            "rules2" => "2.	Wajib memiliki KRS Universitas Gunadarma.",
            "rules3" => "3.	Peserta yang dapat berkompetisi hanyalah peserta yang terdaftar dalam pendaftaran.",
            "rules4" => "4.	Seluruh informasi, peraturan, dan kebijakan yang sudah diberikan pada proses pendaftaran wajib dipahami dan dipatuhi oleh seluruh peserta.",
            "rules5" => "5.	Dengan mendaftar, maka seluruh peserta dianggap telah menyetujui semua peraturan dan kebijakan yang berlaku yang telah dibuat oleh Panitia FIKTI SPACE 2.0.",
            "rules6" => "",
            "rules7" => "",
            "berkas" => "Berkas-berkas yang diperlukan:",
            "berkas1" => "1. KRS masing-masing peserta wajib di upload pada saat registrasi (PDF).",
            "berkas2" => "2. Blanko bukti pembayaran wajib di upload pada saat registrasi (PDF/JPG/PNG).",
            "contact1" => "Whatsapp : 085770331021 (Amelia Putri Ailsa)",
            "contact2" => "Line : putannia (Putri Tania)",
            "openclose" => Register::all(),
            "daftar" => "Daftarkan diri Anda",
        ]);
    }
    public function enam()
    {
        return view('competition/event', [
            "title" => "Poster Digital",
            "active" => "poster",
            "description" => "Lomba pertandingan bermain Poster",
            "image" => "/img/internet/pg_ps.png",
            "about" => "",
            "timeline" => "",
            "faq" => "",
            "cu_about" => "d-none",
            "cu_timeline" => "d-none",
            "cu_faq" => "d-none",
            "tiket" => "Rp.30.000(Regist) + Rp. 20.000(WO)",
            "platform" => "Online",
            "tanggal" => "Sabtu, 17 Juni 2023 – Rabu, 21 Juni 2023",
            "lokasi" => "Google Drive ",
            "Description" => "Pada kompetisi ini peserta dapat mengirimkan desain hasil karya sendiri dengan tema yang telah ditetapkan yaitu, “Pesona Wisata Kebudayaan Daerah di Indonesia”. Peserta wajib mengirimkan file hasil karyanya dengan format .png melalui Google Drive yang akan disediakan oleh panitia.",
            "rules1" => "1.	Mahasiswa aktif Universitas Gunadarma (Tingkat 1-4).",
            "rules2" => "2.	Wajib memiliki KRS Universitas Gunadarma.",
            "rules3" => "3.	Peserta yang dapat berkompetisi hanyalah peserta yang terdaftar dalam pendaftaran.",
            "rules4" => "4.	Seluruh informasi, peraturan, dan kebijakan yang sudah diberikan pada proses pendaftaran wajib dipahami dan dipatuhi oleh seluruh peserta.",
            "rules5" => "5.	Dengan mendaftar, maka seluruh peserta dianggap telah menyetujui semua peraturan dan kebijakan yang berlaku yang telah dibuat oleh Panitia FIKTI SPACE 2.0.",
            "rules6" => "",
            "rules7" => "",
             "berkas" => "Berkas-berkas yang diperlukan:",
            "berkas1" => "1. KRS masing-masing peserta wajib di upload pada saat registrasi (PDF).",
            "berkas2" => "2. Blanko bukti pembayaran wajib di upload pada saat registrasi (PDF/JPG/PNG).",
            "contact1" => "Whatsapp : 087884532128 (Nabilah Faizah Muslimah)",
            "contact2" => "Line : gharizahn (Gharizah Nahdah)",
            "openclose" => Register::all(),
            "daftar" => "Daftarkan diri Anda",
        ]);
    }
}
