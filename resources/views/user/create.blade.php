<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Form User</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="/user/store" method="POST">
                                  @csrf
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Employee ID</label>
                                    <input type="text" name="employe_id" id="nameBasic" class="form-control" autocomplete="off" placeholder="Masukan No Karyawan"/>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Name</label>
                                    <input type="text" name="name" id="emailBasic" class="form-control" autocomplete="off" placeholder="Masukan Nama Karyawan">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Role</label>
                                    <select name="role" id="roleOption" class="form-control">
                                      <option value="" disabled selected>Role</option>
                                      <option value="admin">Admin</option>
                                      <option value="approver">Approver</option>
                                      <option value="user">User</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Email</label>
                                    <input type="text" name="email" id="nameBasic" class="form-control" autocomplete="off" placeholder="xxxx@renos.id">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Password</label>
                                    <input type="password" name="password" id="nameBasic" class="form-control" autocomplete="off" placeholder="Masukan Password">
                                  </div>
                              </div>
                              </div>
                              <div class="modal-footer">
                               <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Batal
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>