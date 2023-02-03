<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="smallModal">Form User</h5>
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
                                    <label for="nameBasic" class="form-label">Nama Organisasi</label>
                                    <input type="text" name="no_karyawan" id="nameBasic" class="form-control" placeholder="Masukan Nama Organisasi" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="emailBasic" class="form-label">Deskripsi Organisasi</label>
                                    <textarea name="" id="" cols="15" rows="5" class="form-control"></textarea>
                                  </div>
                                  <div class="row">
                                  <div class="col mb-4">
                                    <label for="dobBasic" class="form-label">Parent organisasi</label>
                                    <select name="role" id="" class="form-control">
                                      <option value="" disable>Parent</option>
                                      <option value="admin">MD</option>
                                      <option value="pimpinan">Tech</option>
                                      <option value="karyawan">Product & Tech</option>
                                    </select>
                                  </div>
                                </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Email</label>
                                    <input type="text" name="email" id="nameBasic" class="form-control" placeholder="xxxx@renos.id"/>
                                  </div>
                              </div>
                              </div>
                              <div class="modal-footer">
                               <button type="submit" class="btn btn-primary">Ajukan</button>
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