@extends('admin.master_admin')

@section('home_admin')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Data Kelurahan</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ url('/update/kelurahan/' . $data->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label class="form-label">Kode</label>
                    <input type="text" class="form-control" name="kode" value="{{ $data->kode }}">
                </div>
                <div class="col-12">
                    <label class="form-label">Nama Kelurahan</label>
                    <input type="text" class="form-control" name="nama_kelurahan" value="{{ $data->nama_kelurahan }}">
                </div>
                <div class="col-12">
                    <label class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option value="">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                    <a href="" class="btn btn-secondary">Kembali</a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
