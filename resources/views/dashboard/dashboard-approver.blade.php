@extends('layouts.master')
@section('content')
  <p><?php echo "Work Year : " . (int)date('Y'); ?></p>
                <div class="row">
                 <div class="col-md-6 col-xl-4">
                  <div class="card bg-secondary text-white mb-3">
                    <div class="card-header">Approval Request</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">2 Task</h5>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-primary text-white mb-3">
                    <div class="card-header">Remaining Annual Leave</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">12 Days</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-warning text-white mb-3">
                    <div class="card-header">Remainder of Maternity Leave</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">60 Days</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">The Remainder of the Leave of Worship</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">14 Days</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card bg-primary text-white mb-3">
                    <div class="card-header">The Rest of the Leave Carried <br> Forward</div>
                    <div class="card-body">
                      <h5 class="card-title text-white">12 Days</h5>
                    </div>
                  </div>
                </div>
    </div>
@endsection