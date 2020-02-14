@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Pegawai</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Nama Pegawai</label>
        <input class="form-control" value="{{ $kamar->nama_pegawai }}" type="text" name="fasilitas_kamar" disabled>
    </div>
    <div class="form-group">
        <a href="{{ url('/kamar') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection
