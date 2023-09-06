@extends('layouts.main_dashboard')

@section('container')  
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
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
    </div>
    <div id="table1" class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Silahkan Di isi sesuai Keterangan</h4>
            <div class="d-flex ">
                <i data-feather="download"></i>
            </div>
        </div>
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
        <div class="card-body px-0 pb-0">
            <div class="table-responsive">
                <table class='table mb-0' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>No WhatsApp</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>     </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($post as $s)
                        @if ($s->category_id === $categori)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $s->username }}</td>
                          <td>{{ $s->instansi }}</td>
                          <td>{{ $s->phone }}</td>
                          <td>{{ $s->email }}</td>  
                          
                          @if ($s->konfirmasi_berkas === "Valid")
                            <td>
                              <button class="btn btn-success">Konfirmasi Success ✔</button>
                            </td>
                              
                          @else
                          <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#berkas{{ $s->id }}" data-bs-whatever="@getbootstrap">Confirm</button>

                            <div class="modal fade" id="berkas{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Berkas {{ $s->username }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    @if ($categori === 5)
                                      <form action="{{ route('solovocalEmail', $s->id) }}" method="post">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                              <span class="details" style="display: inline;">Pastikan semua data sudah sesuai !!</span>
                                              <select class="form-control col-lg-12 col-md-12 col-sm-12 " name="konfirmasi_berkas" required>
                                                  <option disabled selected value>Invalid</option>
                                                  <option value="Valid">Valid</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                      </form>
                                    @else
                                      <form action="{{ route('posterEmail', $s->id) }}" method="post">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                              <span class="details" style="display: inline;">Pastikan semua data sudah sesuai !!</span>
                                              <select class="form-control col-lg-12 col-md-12 col-sm-12 " name="konfirmasi_berkas" required>
                                                  <option disabled selected value>Invalid</option>
                                                  <option value="Valid">Valid</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                      </form>
                                    @endif
                                    
                                  </div>
                                  {{-- <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                  </div> --}}
                                </div>
                              </div>
                            </div>
                            <span class="badge bg-dark mt-2">{{ $s->konfirmasi_berkas }}</span>
                          </td>
                              
                          @endif
                           
                          @if ($s->konfirmasi_berkas === "Valid")
                         
                          @else
                          <td>
                            @if ($categori === 5)
                              <form action="{{ route('solovocalFailed', $s->id) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-danger">Disapprove</button>
                              </form>
                            @else
                              <form action="{{ route('posterFailed', $s->id) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-danger">Disapprove</button>
                              </form>
                            @endif
                           
                          </td>
                          @endif
                        </tr>
                        @endif
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   

    @endSection