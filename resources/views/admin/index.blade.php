@extends('admin.master_admin')

@section('home_admin')
    {{-- <section class="section dashboard">
   
</section> --}}
    <div class="col-lg-12">

        <div class="col-lg-3">
            <div class="card info-card sales-card">

                <div class="card-body dash">
                    <a href="{{ route('index.kelurahan') }}">
                        <h5 class="card-title text-center">Kelurahan</h5>
                    </a>
                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

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
                                    <a href="" class="btn btn-primary btn-sm float-end tambah">Tambah Kategori</a>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col" class="text-center">Kode</th>
                                            <th scope="col" class="text-center">Nama Keluruhan</th>
                                            <th scope="col" class="text-center">status</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </div>

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
                                    <a href="" class="btn btn-primary btn-sm float-end tambah">Tambah Kategori</a>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col" class="text-center">Kode</th>
                                            <th scope="col" class="text-center">Nama Keluruhan</th>
                                            <th scope="col" class="text-center">status</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </div>
@endsection
