@extends('layouts.main_dashboard')

@section('container')    

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
                <p class="text-subtitle text-muted">Upload berkas sesuai ketentuan </p>
                <h6 class="text-subtitle text-muted text-warning">Note : Setelah upload Berkas dan Pembayaran Tinggal tunggu konfirmasi panitia </h6>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    <h1 class="card-title mb-4">{{ $title }} Anda  
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInputDisabled" placeholder="Invalid" disabled>
                            <label for="floatingInputDisabled">
                                @foreach ($data as $d)
                                    @if (auth()->user()->id === $d->user_id)
                                    {{ $d->konfirmasi_berkas }}
                                    @else
                                        
                                    @endif
                                @endforeach
                            </label>
                        </div>
                    </h1>
                    <h5>Jika sudah mengupload file dan belum ada konfirmasi disilahkan hubungi contact di ketentuan berkas</h5>
                    </div>
                    <div class="card-content">
                        
                    </div>
                    <div class="col-md-2 col-12 mx-4 my-2">
                        <div class="pl-3">
                          
                            <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i>Keterangan </span></p>
                            <div class="legends">
                                <div class="legend d-flex flex-row align-items-center">
                                    <div class='w-3 h-3 rounded-full bg-success me-2'></div><span class='text-xs'>Valid = Sesuai</span>
                                </div>
                                <div class="legend d-flex flex-row align-items-center">
                                    <div class='w-3 h-3 rounded-full bg-danger me-2'></div><span class='text-xs'>Invalid = Tidak sesuai</span>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
               
            </div>
            @if (auth()->user()->category_id  === 1)
            <div class="col-md-6 col-12">
                <form method="post" action="{{ route('upload.berkas') }}" enctype="multipart/form-data" class="form form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                        <h2 class="mb-4" class="card-title">Ketentuan Berkas</h2>
                        <ul>
                            <li>KTM/KRS/Surat Keterangan Aktif Mahasiswa dari semua anggota Tim Untuk Mobile legends, Futsal, Basket, Badminton</li>
                            <li>File berupa PDF/ZIP</li>
                            <li>format berkas (Ketua_no hp)</li>
                            <li>Contoh : Budi_Futsal_08781627525</li>
                        </ul>
                        <h2 class="mb-4" class="card-title">Ketentuan Pembayaran</h2>
                        <ul>
                            <li>Screen Shoot Bukti Pembayaran</li>
                            <li>Harga Tiket Mobile legends = Rp. 50.000, Futsal = Rp.100.000, Basket = Rp.100.000, Badminton = Rp.30.000</li>
                            <li>format berkas (Ketua_nama rekening pembayar )</li>
                            <li>Contoh : Budi_Jamal</li>
                        </ul>
                        </div>
                        <div class="card-content -mt-4">
                            <div class="card-body">
                                    <div class="form-body">
                                        <a class="btn btn-success" href="https://script.google.com/macros/s/AKfycbyFjjBqWiAP1nZCe300eXkGcJM_bOXo_G1d3s4W7YwPqbTaMP7AGV7WYPJQNImJm5tn/exec"  target="_blank" rel="noopener noreferrer">UPLOAD BERKAS DISINI</a>
                                       
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @else
            <div class="col-md-6 col-12">
                <form method="post" action="{{ route('upload.berkas') }}" enctype="multipart/form-data" class="form form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                        <h2 class="mb-4" class="card-title">Ketentuan Berkas</h2>
                        <ul>
                            <li>KTM/KRS/Surat Keterangan Aktif Mahasiswa, Kartu pelajar atau keterang siswa atau mahasiswa Aktif</li>
                            <li>File berupa PDF/ZIP</li>
                            <li>format berkas (Ketua_lomba_no hp)</li>
                            <li>Contoh : Budi_solo vocal_08781627525</li>
                        </ul>
                        <h2 class="mb-4" class="card-title">Ketentuan Pembayaran</h2>
                        <ul>
                            <li>Screen Shoot Bukti Pembayaran</li>
                            <li>Harga Tiket  Solo Vocal = Rp.30.000, Poster = Rp.30.000</li>
                            <li>format berkas (Ketua_nama rekening pembayar )</li>
                            <li>Contoh : Budi_Jamal</li>
                        </ul>
                        </div>
                        <div class="card-content -mt-4">
                            <div class="card-body">
                                    <div class="form-body">
                                        <a class="btn btn-success" href="https://script.google.com/macros/s/AKfycbyKjURWLEeuuRBiDxiwphnHBtfVEyM_6EP5J4alir9af70MC1lpedtv6q8f5z0uNozsFg/exec">UPLOAD BERKAS DISINI</a>
                                       
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @endif
            
        </div>
    </section>

@endSection


           