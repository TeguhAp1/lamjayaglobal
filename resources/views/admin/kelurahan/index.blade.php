@extends('admin.master_admin')

@section('home_admin')
    {{-- <section class="section dashboard">
   
</section> --}}
    <div class="row">
        <div class="col-lg-14">
            <div class="row">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling1 overflow-auto">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5 class="card-title"></h5>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <a href="{{ route('tambah.kelurahan') }}"
                                        class="btn btn-primary btn-sm float-end tambah">Tambah Kelurahan</a>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama Kelurahan</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        @foreach ($kelurahan as $klr)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td scope="col">{{ $klr->kode }}</td>
                                                <td scope="col">{{ $klr->nama_kelurahan }}</td>
                                                <td scope="col">{{ $klr->status }}</td>
                                                <td>
                                                    <a href="{{ url('/edit/kelurahan/' . $klr->id) }}">
                                                        <button class="btn btn-primary btn-sm">Edit</button></a>
                                                    <a href="{{ url('/delete/kelurahan/' . $klr->id) }}">
                                                        <button class="btn btn-danger btn-sm">Delete</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div>
        </div>
    </div>
@endsection
