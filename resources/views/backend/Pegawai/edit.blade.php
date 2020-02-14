@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit data Artikel</div>

                <div class="card-body">
                <form action="{{ route('pegawai.update', $pegawai->id )}}"
                    method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Pegawai</label>
                    <input class="form-control" value="{{ $pegawai->nama_pegawai }}"
                    type="text" name="nama_pegawai">
                    </div>
                     <div class="form-group">
                        <label for="">Alamat Pegawai</label>
                    <input class="form-control" value="{{ $pegawai->alamat_pegawai }}"
                    type="text" name="alamat_pegawai">
                    </div>
                     <div class="form-group">
                        <label for="">Telpon Pegawai</label>
                    <input class="form-control" value="{{ $pegawai->telpon_pegawai }}"
                    type="text" name="telpon_pegawai">
                     </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan data
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      $(document).ready(function(){
          $('#select22').select2();
       });
    </script>
@endsection
