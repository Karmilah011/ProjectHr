@extends('layouts.master')
@section('content')
    <div class="card">
            @if(auth()->user()->role != 'admin')
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
                    @forelse($fcuti as $no => $value)
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$value->leave}}</td>
                        <td>{{$value->alsncuti}}</td>
                        <td>{{$value->date_fill}}</td>
                        <td>{{$value->tanggalmulai}}</td>
                        <td>{{$value->tanggalselesai}}</td>
                       <td>
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
                                      <input type="text" name="leave_type_id" value="{{$value->leave}}" id="nameBasic" class="form-control" placeholder="Enter Name">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Reason for Leave</label>
                                      <textarea name="alsncuti" value="" id="" cols="15" rows="5" class="form-control" placeholder="">{{$value->alsncuti}}</textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Start Date</label>
                                      <input type="text" name="tanggalmulai" value="{{$value->tgl_mulai}}" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Dtextof Completion</label>
                                      <input type="text" name="tanggalselesai" value="{{$value->tanggalselesai}}" id="nameBasic" class="form-control" placeholder="">
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
                        <span class="badge @if($value->status == 'setuju') bg-label-success @elseif($value->status == 'menunggu') bg-label-warning @else bg-label-danger @endif">
                            @if($value->status == 'setuju') Approved @elseif($value->status == 'menunggu') Waiting @else Reject @endif
                          </span>
                        </td>
                        <td>
                          <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-folder-open' style='color:#ffffff' ></i>
                          </button>
                        </td>
                        </tr>
                    </tbody>
                    @empty
                    <tbody class="table-border-bottom" >
                        <tr>
                          <td colspan="11" height="200px">
                            <h4 align="center">
                              Data Not Found
                            </h4>
                          </td>
                        </tr>
                      </tbody>
                    @endforelse
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
    let attacment = document.getElementById('attacment')
    let startEnd_date = document.getElementById('startEnd_date')
    let cutiWrapper = document.querySelector('#cutiWrapper');
    let sakitWrapper = document.querySelector('#sakitWrapper');
    let melahirkanWrapper = document.querySelector('#melahirkanWrapper');

    // cutiWrapper.style.display = 'block';
    // sakitWrapper.style.display = 'none';
    // melahirkanWrapper.style.display = 'none';
    attacment.style.display = 'none'

    jenisCuti.addEventListener('change', () => {
      console.log(jenisCuti.options[jenisCuti.selectedIndex].text)
      switch (jenisCuti.options[jenisCuti.selectedIndex].text) {
        case 'haid':
          startEnd_date.style.display = 'none';
          attacment.style.display = 'none';
          break;
        case 'Sick leave':
          startEnd_date.style.display = 'none';
          attacment.style.display = 'block';
          break;
        default:
          startEnd_date.style.display = 'block';
          attacment.style.display = 'none';
          break;
      }
    });

  </script>

@endsection