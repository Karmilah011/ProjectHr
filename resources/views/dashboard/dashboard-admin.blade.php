@extends('layouts.master')
@section('content')
<p><?php echo "Tahun Kerja : " . (int)date('Y'); ?></p>
                <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-primary text-white mb-3">
                    <div class="card-header">Total Pengajuan <br> Cuti Seluruh karyawan</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">50</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-danger text-white mb-3">
                    <div class="card-header">Total Cuti <br> Approved Seluruh Karyawan</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">31</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Total Cuti <br> Menunggu Approval Seluruh Karyawan</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">18</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Total cuti <br> Ditolak</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">1</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Total Cuti Dibatalkan <br> Forward</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">0</h5>
                    </div>
                  </div>
                </div>
    </div>
@endsection