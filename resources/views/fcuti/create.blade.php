<div class="modal fade" id="smallModal" tabindex="-1" style="display: none;" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Leave Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="/fcuti/store" method="post">
                                  @csrf
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Leave Type</label>
                                    <select name="jeniscuti" id="jenis_cuti" class="form-control">
                                      <option value="cuti">Annual Leave</option>
                                      <option value="sakit">Sick leave</option>
                                      <option value="melahirkan">Give Birth To</option>
                                      <option value="haid">Haid</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row g-2" id="cutiWrapper">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">The Rest of The Day</label>
                                    <input name="leave_type_name" type="text" id="emailBasic" class="form-control" placeholder="">
                                  </div>
                                <div class="row">
                                <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Reason for Leave</label>
                                    <textarea name="alsncuti" id="" cols="15" rows="5" class="form-control" placeholder=""></textarea>
                                  </div>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Jumlah Hari</label>
                                    <input name="jhari" type="text" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Start Date</label>
                                    <input name="tanggalmulai" type="date" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Date of Completion</label>
                                    <input name="tanggalselesai" type="date" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Approver</label>
                                    <input name="atsn" type="text" id="emailBasic" class="form-control" placeholder="">
                                  </div>
                                </div>
                                <div class="row g-2" id="sakitWrapper">
                                <div class="row">
                                <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Reason for Leave</label>
                                    <textarea name="alsncuti" id="" cols="15" rows="5" class="form-control" placeholder=""></textarea>
                                  </div>
                                </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Start Date</label>
                                    <input name="tanggalmulai" type="date" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Date of Completion</label>
                                    <input name="tanggalselesai" type="date" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Jumlah Hari</label>
                                    <input name="jhari" type="text" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Approver</label>
                                    <input name="atsn" type="text" id="emailBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Attachment</label>
                                    <input type="file" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                </div>
                                <div class="row g-2" id="melahirkanWrapper">
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Start Date</label>
                                    <input name="tanggalmulai" type="date" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Date of Completion</label>
                                    <input name="tanggalselesai" type="date" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Approver</label>
                                    <input name="atsn" type="text" id="dobBasic" class="form-control" placeholder="">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        