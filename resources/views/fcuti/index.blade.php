@extends('layouts.master')
@section('content')
    <div class="card">
            @if(auth()->user()->role == 'karyawan')
             <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                <i class='bx bxs-plus-circle'></i> Add Cuti
                </button>
               </div>
               <br>
              @endif
                <div class="table-responsive text-nowrap">
                  <table class="table table-dark">
                    <thead style="background-color: #219ebc;">
                      <tr style="color: #f1faee;">
                        <th>No</th>
                        <th>Jenis Cuti</th>
                        <th>Alasan Cuti</th>
                        <th>Tgl Mulai</th>
                        <th>Tgl Selesai</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1</td>
                        <td>Cuti Tahunan</td>
                        <td>Liburan</td>
                        <td>1 January 2023</td>
                        <td>9 January 2023</td>
                        <td><span class="badge bg-label-info me-1">Menunggu Aproval</span></td>
                        <td>
                          <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-folder-open' style='color:#ffffff' ></i>
                         </button>
                          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel1">Detail Cuti</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Jenis Cuti</label>
                                      <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Sisa Cuti</label>
                                      <input type="text" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Alasan Cuti</label>
                                      <textarea name="" id="" cols="15" rows="5" class="form-control" placeholder=""></textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Peiode Cuti</label>
                                      <input type="text" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Jumlah Hari</label>
                                      <input type="text" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Atasan</label>
                                      <input type="text" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Tutup
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          @if(Auth()->user()->role == 'pimpinan')
                          <button type="button" class="btn btn-icon btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-check'></i>
                         </button>
                          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Name</label>
                                      <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                                    </div>
                                  </div>
                                  <div class="row g-2">
                                    <div class="col mb-0">
                                      <label for="emailBasic" class="form-label">Email</label>
                                      <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx">
                                    </div>
                                    <div class="col mb-0">
                                      <label for="dobBasic" class="form-label">DOB</label>
                                      <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY">
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                  </button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          @else(Auth()->user()->role == 'admin' || 'karyawan')
                          <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-check'></i>
                          </button>
                          <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-trash'></i>
                          </button>
                          @endif
                        </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                @include('fcuti.create')
   </div>
@endsection
@section('script')

  <script>

    let jenisCuti = document.querySelector('#jenis_cuti');
    let cutiWrapper = document.querySelector('#cutiWrapper');
    let sakitWrapper = document.querySelector('#sakitWrapper');
    let melahirkanWrapper = document.querySelector('#melahirkanWrapper');
    cutiWrapper.style.display = 'block';
    sakitWrapper.style.display = 'none';
    melahirkanWrapper.style.display = 'none';

    jenisCuti.addEventListener('change', e => {
      switch (e.target.value) {
        case 'sakit':
          sakitWrapper.style.display = 'block';
          cutiWrapper.style.display = 'none';
          melahirkanWrapper.style.display = 'none';
          break;
        case 'cuti':
          sakitWrapper.style.display = 'none';
          cutiWrapper.style.display = 'block';
          melahirkanWrapper.style.display = 'none';
          break;
        case 'melahirkan':
          sakitWrapper.style.display = 'none';
          cutiWrapper.style.display = 'none';
          melahirkanWrapper.style.display = 'block';
          break;
      
        default:
          break;
      }
    });

  </script>

@endsection