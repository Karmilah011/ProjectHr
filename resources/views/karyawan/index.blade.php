@extends('layouts.master')
@section('content')
    <div class="nav-aligen-top mb-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                    Profile
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                    Keluarga
                </button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                 <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-3" style="width: 20%; height: 15%">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('admin/assets/img/elements/2.jpg') }}"
                                alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-20 col-lg-4 mb-3" style="width: 50%">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><strong>Nama Lengkap</strong></td>
                                            <td>Kai</td>
                                        </tr>
                                        <tr>
                                            <td><strong>NIP</strong></td>
                                            <td>000000000</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Jabatan</strong></td>
                                            <td>Direktur</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Jenis Kelamin</strong></td>
                                            <td>Laki-laki</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tempat Kelahiran</strong></td>
                                            <td>Jakarta</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tanggal Lahir</strong></td>
                                            <td>16 Januari 1996</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Alamat KTP</strong></td>
                                            <td>Jl.Suka-suka</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Alamat Tinggal</strong></td>
                                            <td>Jl.Suka-suka lagi</td>
                                        </tr>
                                        <tr>
                                            <td><strong>No.Telp</strong></td>
                                            <td>08900000000</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Direktorat</strong></td>
                                            <td>Tech</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tgl Masuk Kerja</strong></td>
                                            <td>1 Mei 2019</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Masa Kerja</strong></td>
                                            <td>2 Tahun 8 Bulan 20 Hari</td>
                                        </tr>
                                        <tr>
                                            <td><strong>NPWP</strong></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>BPJS</strong></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status</strong></td>
                                            <td>Menikah</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-3" style="width: 20%; height: 15%">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('admin/assets/img/elements/2.jpg') }}"
                                alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-20 col-lg-4 mb-3" style="width: 50%">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><strong>Nama Lengkap</strong></td>
                                            <td>Jennie</td>
                                        </tr>
                                        <tr>
                                            <td><strong>NIP</strong></td>
                                            <td>000000000</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status</strong></td>
                                            <td>Menikah</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Jenis Kelamin</strong></td>
                                            <td>Perempuan</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tanggal Lahir</strong></td>
                                            <td>16 Januari 1996</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Alamat KTP</strong></td>
                                            <td>Jl.Suka-suka</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Alamat Tinggal</strong></td>
                                            <td>Jl.Suka-suka lagi</td>
                                        </tr>
                                        <tr>
                                            <td><strong>No.Telp</strong></td>
                                            <td>08900000000</td>
                                        </tr>
                                        <tr>
                                            <td><strong>NPWP</strong></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>BPJS</strong></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status</strong></td>
                                            <td>Istri</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination justify-content-center">
                <nav aria-label="Page navigation">
                <ul class="pagination pagination-round">
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
              </ul>
            </nav>
                </div>
            </div>
        @endsection