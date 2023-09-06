@extends('layouts.main_dashboard')

@section('container') 
<div class="page-title mb-4">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3 class="mx-4">{{ $title }}</h3> 
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
        </div> 
    </div>
    <div class="my-4 mx-4 col-lg-3 col-md-6 col-sm-12">
      <a href="/dashboard/data-peserta/" class="btn btn-primary">Data Peserta Yang Sudah di Daftarkan</a>
    </div>
    <div>
      <form method="post" action="/dashboard/data-peserta/tambah-data/sukses">
        @csrf
        <div class="modal-content">
          <div class="modal-body">
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="username" class="col-form-label ">Tim:</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username') }}">
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="ketua" class="col-form-label">Ketua:</label>
              <input type="text" class="form-control  @error('ketua') is-invalid @enderror" id="ketua" name="ketua" required value="{{ old('ketua') }}">
              @error('ketua')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="email" class="col-form-label">Email:</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="phone" class="col-form-label">No WhatsApp:</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ old('phone') }}">
              @error('phone')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="anggota" class="col-form-label">Anggota: ( nama(kelas | npm) sesuaikan jumlah anggota)</label>
              <textarea class="form-control @error('anggota') is-invalid @enderror" placeholder="Budi(2KB02 | 20121592), Ucup(2KB02 | 2012783)" id="anggota" style="height: 100px" required value="{{ old('anggota') }}" name="anggota"></textarea>
              @error('anggota')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            {{-- <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="region" class="col-form-label">Region Kampus: (Depok, Kalimalang , Karawaci dll)</label>
              <input type="text" class="form-control  @error('region') is-invalid @enderror" id="region" name="region" required value="{{ old('region') }}">
              @error('region')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div> --}}
            <div class="input-box col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <span class="details" style="display: inline;">Pilih Region :</span>
                  <select class="form-control col-lg-12 col-md-12 col-sm-12 @error('category_id')is-invalid @enderror" id="region" name="region" required>
                      <option disabled selected value>...</option>

                      <option value="Depok">Depok</option>
                      <option value="Karawaci">Karawaci</option>
                      <option value="Kalimalang">Kalimalang</option>
                      <option value="Salemba">Salemba</option>
                      <option value="Cengkareng">Cengkareng</option>
                      <option value="Kenari">Kenari</option>

                  </select>
                  @error('category_id')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <div class="input-box col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <span class="details" style="display: inline;">Pilih Lomba : </span>
                  <select class="form-control col-lg-12 col-md-12 col-sm-12 @error('category_id')is-invalid @enderror" name="category_id" required>
                      <option disabled selected value>...</option>

                      <option value="1">Mobile Legends</option>
                      <option value="2">Futsal</option>
                      <option value="3">Basket</option>
                      <option value="4">Bulu Tangkis</option>

                  </select>
                  @error('category_id')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
    </form>
  </div>
</div>

@endsection