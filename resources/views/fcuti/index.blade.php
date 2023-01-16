@extends('layouts.master')
@section('content')
    <div class="card">
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
                                </div>
                              </div>
                            </div>
                          </div>
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
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Cuti Lahiran</td>
                        <td>Istri Lahiran ank ke 2</td>
                        <td>1 Desember 2022</td>
                        <td>15 Desember 2022</td>
                        <td><span class="badge bg-label-primary me-1">Approved</span></td>
                        <td>
                          <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-folder-open' style='color:#ffffff' ></i>
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
                          <!-- End -->
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
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                @include('fcuti.create')
    </div>
@endsection