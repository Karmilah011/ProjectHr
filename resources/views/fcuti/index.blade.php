@extends('layouts.master')
@section('content')
    <div class="card">
            @if(auth()->user()->role == 'user')
             <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                <i class='bx bxs-plus-circle'></i> Add Cuti
                </button>
               </div>
               <br>
              @endif
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead style="">
                      <tr style="color: #f1faee;">
                        <th>No</th>
                        <th>Leave Type</th>
                        <th>Reason for Leave</th>
                        <th>Date of Filing</th>
                        <th>Start Date</th>
                        <th>Date of Completion</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <?php $countData = count($fcuti); ?>
                    @if($countData < 1)
                      <tbody class="table-border-bottom" >
                        <tr>
                          <td colspan="11" height="200px">
                            <h4 align="center">
                              Data Not Found
                            </h4>
                          </td>
                        </tr>
                      </tbody>
                    @else
                    @foreach($fcuti as $no => $value)
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$value->leave_type_name}}</td>
                        <td>{{$value->alsncuti}}</td>
                        <td>{{$value->created_at}}</td>
                        <td>{{$value->tanggalmulai}}</td>
                        <td>{{$value->tanggalselesai}}</td>
                        <!-- <td>
                          <span class="badge @if($value->status_hrd == '1') bg-label-success @elseif($value->status_hrd == '0') bg-label-warning @else bg-label-danger @endif">
                            @if($value->status_hrd == '1') Approved @elseif($value->status_hrd == '0') Waiting @else Ditolak @endif
                          </span>
                        </td> -->
                       <td>
                          <span class="badge @if($value->status_pim == '1') bg-label-success @elseif($value->status_pim == '0') bg-label-warning @else bg-label-danger @endif">
                            @if($value->status_pim == '1') Approved @elseif($value->status_pim == '0') Waiting @else Reject @endif
                          </span>
                        </td>
                        <td>
                          <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-folder-open' style='color:#ffffff' ></i>
                          </button>
                          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel1">Leave Details</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Leave Type</label>
                                      <input type="text" name="leave_type_id" id="nameBasic" class="form-control" placeholder="Enter Name">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Laave Master</label>
                                      <input type="text" name="leave_master_id" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Reason for Leave</label>
                                      <textarea name="alsncuti" id="" cols="15" rows="5" class="form-control" placeholder=""></textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Start Date</label>
                                      <input type="date" name="tanggalmulai" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Date of Completion</label>
                                      <input type="date" name="tanggalselesai" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          @if(Auth()->user()->role == 'approver')
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
                          @if($value->status_pim == '0')
                          <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bxs-pencil'></i>
                         </button>
                          <a href="#" class="btn btn-icon btn-danger delete" data-id="{{$value->id}}">
                          <i class='bx bx-trash'></i>
                          </a>
                          @endif
                          @endif
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                    @endif
                  </table>
                </div>
                @include('fcuti.create')
   </div>
@endsection
@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $('.delete').click(function() {
    var fcutiid = $(this).attr('data-id');
      swal({
            title: "Apakah anda yakin ingin membatalkan pengajuan cuti ini?",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location = "/fcuti/hapus/"+fcutiid+""
              swal("Pengajuan cuti anda telah dibatalkan!", {
                icon: "success",
              });
            }
     });
    });
</script>

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