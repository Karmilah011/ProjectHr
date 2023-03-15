<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" job="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="smallModal">Job Form</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="/job/store" method="POST">
                                  @csrf
                                  <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Job ID</label>
                                    <input type="text" name="job_id" id="nameBasic" class="form-control" placeholder="Masukan ID Job">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Job Name</label>
                                    <input type="text" name="job_name" id="nameBasic" class="form-control" placeholder="Masukan Job Name">
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