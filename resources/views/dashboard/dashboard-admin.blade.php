@extends('layouts.master')
@section('content')
<p><?php echo "Work Year : " . (int)date('Y'); ?></p>
                <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-primary text-white mb-3">
                    <div class="card-header">Submission Totals <br> of All Employee Leave</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">50</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-danger text-white mb-3">
                    <div class="card-header">Submission Totals <br> Approved by All Employees</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">31</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Submission Totals <br> Waiting For the Approval of All Employees</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">18</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Submission Totals <br> Rejected</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">1</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Total Leave Cancelled <br> Forward</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">0</h5>
                    </div>
                  </div>
                </div>
    </div>
@endsection