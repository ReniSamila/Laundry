@extends('layouts.backend')
@section('content')

<div class="container">
	<div class="row">
	  <div class="col col-lg-11">
		  <form action="{{ route('pegawai.store') }}" method="post" enctype="multipart/form-data">
		  @csrf
						<div class="form-group">
						<label class="control-label col-lg-4">Nama Pegawai</label>
						<div class="col-lg-4">
                            <input type="text" name="nama_pegawai" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat Pegawai</label>
							<div class="col-lg-4">
								<input type="text" required name="alamat_pegawai" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Telpon Pegawai</label>
							<div class="col-lg-4">
								<input type="string" required name="telpon_pegawai" class="form-control" />
							</div>
						</div>
						<button type="submit" name="Simpan"class="btn btn-md btn-info">
							Simpan Data
						</button>
							&nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
                        </div>
                    </form>
	</div>
</div>
</html>
@endsection
