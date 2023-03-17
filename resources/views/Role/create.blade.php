<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="smallModal">Role Form</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="/role/store" method="POST">
                                  @csrf
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Role Name</label>
                                    <input type="text" name="name" id="nameBasic" class="form-control" placeholder="Masukan Role Name">
                                  </div>
                                </div>
                              <div class="modal-footer">
                               <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Cancel
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
</div>