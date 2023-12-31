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
        <a href="/dashboard/data-peserta/" class="btn btn-primary">Kembali</a>
      </div>
      <form method="post" action="/dashboard/data-peserta/edit/bxiuedhux37dx7x73/{{$data_art->id}}">
        @method('patch')
        @csrf
        <div class="modal-content">
          <div class="modal-body">
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="username" class="col-form-label ">Nama Lengkap:</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username', $data_art->username) }}">
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="instansi" class="col-form-label">Instansi:</label>
              <input type="text" class="form-control  @error('instansi') is-invalid @enderror" id="instansi" name="instansi" required value="{{ old('instansi', $data_art->instansi) }}">
              @error('instansi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email',$data_art->email) }}">
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
              <label for="phone" class="col-form-label">No WhatsApp:</label>
              <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ old('phone', $data_art->phone) }}">
              @error('phone')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="input-box col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <span class="details" style="display: inline;">Pilih Lomba</span>
                  <select class="form-control col-lg-12 col-md-12 col-sm-12 @error('category_id')is-invalid @enderror" name="category_id" required>
                      <option disabled selected value>...</option>

                      <option value="5">Solo Vocal</option>
                      <option value="6">Poster</option>
                      

                  </select>
                  @error('category_id')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
           
           
            <button type="submit" class="btn btn-primary">Update Data</button>
          </div>
    </form>   
</div>

@endsection