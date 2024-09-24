@extends('layouts.app')
@section('content')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="">
                <div class="row">
                    <!-- Left Side (Logo and Description) -->
                    <div class="col-xl-4 d-flex flex-column justify-content-center align-items-center" style="background-color: #84C3B1; min-height: 100vh;">
                        <div class="card d-flex justify-content-center align-content-center" style="width: 80%; max-width: 300px;">
                            <img class="img-fluid" src="{{ asset('img/rsuds.png') }}" alt="RSUD Logo">
                        </div>
                        <div class="text-center m-5">
                            <h3>Helpdesk Rumah Sakit Umum Daerah Dr. Soetomo</h3>
                        </div>
                    </div>              

                    <!-- Right Side (Login Form) -->
                    <div class="col-lg-8 mt-5">
                        <div class="border-0 rounded-lg">
                            <!-- Error Alert -->
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <!-- Login Form -->
                            <div class="card-body fs-5">
                                <form action="{{ route('req') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="card-header d-flex justify-content-center align-content-center">                               
                                        <h3 class="text-center font-weight-light my-4">Formulir General Request</h3>
                                    </div>
                                    <hr class="divider w-100">
                                        <div class="d-flex flex-column justify-content-center align-items-center" >
                                            <div class="form-group"  style="width:50%;">
                                                <label class="small mb-1">Tanggal Permintaan</label>
                                                <input class="form-control py-2" type="text" name="tgl" placeholder="" value="{{ $tgl }}" disabled />
                                                <input class="form-control py-2" type="hidden" name="tgl" placeholder="" value="{{ $tgl }}" />
                                                {{-- @if ($errors->has('tgl'))
                                                <span class="error"> * {{ $errors->first('tgl') }}</span>
                                                @endif --}}
                                            </div>
                                            <div class="form-group"  style="width:50%;">
                                                <label class="small mb-1">Waktu Permintaan</label>
                                                <input class="form-control py-2" type="text" name="jam" placeholder=" " value="{{ $jam }}" disabled />
                                                <input class="form-control py-2" type="hidden" name="jam" placeholder=" " value="{{ $jam }}" />
                                                {{-- @if ($errors->has('jam'))
                                                <span class="error"> * {{ $errors->first('jam') }}</span>
                                                @endif --}}
                                            </div>
                                            <div class="form-group"  style="width:50%;">
                                                <label class="small mb-1">Nama Pemohon</label>
                                                <input class="form-control py-2" type="text" aria-describedby="emailHelp" name="nama" placeholder=" " />
                                                @if ($errors->has('nama'))
                                                <span class="error">* {{ $errors->first('nama') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group"  style="width:50%;">
                                                <label class="small mb-1" >Topik Permintaan</label>
                                                <input class="form-control py-2" type="text" name="topik" placeholder=" " />
                                                @if ($errors->has('topik'))
                                                <span class="error">* {{ $errors->first('topik') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group"  style="width:50%;">
                                                <label class="small mb-1" >Deskripsi Permasalahan</label>
                                                <input class="form-control py-5" type="text" name="deskripsi" placeholder=" " />
                                                @if ($errors->has('password'))
                                                <span class="error">* {{ $errors->first('deskripsi') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group"  style="width:50%;">
                                                <label class="small mb-1" >Kategori Permintaan</label>
                                                <select class="form-select py-2" aria-label="Default select example" name="kategori">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="Permintaan IT">Permintaan IT</option>
                                                    <option value="Umum">Umum</option>
                                                    <option value="Lainya">Lainnya</option>
                                                </select>
                                                @if ($errors->has('kategori'))
                                                <span class="error">* {{ $errors->first('kateogori') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        <!-- Footer (Optional) -->
                        <div class="card-footer text-center">
                            <div class="small">
                                {{-- <a href="{{ route('register') }}">Belum Punya Akun? Daftar!</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection
