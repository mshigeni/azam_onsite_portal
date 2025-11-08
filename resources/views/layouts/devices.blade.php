@extends('layouts.master')

@section('content')

<div class="main-content">

    <div class="page-content">

        <div class="container-fluid">

            <!-- end page title -->
            <div class="row project-wrapper">

              <div class="col-xxl-8">

              </div>
              
              <!-- end col -->
            </div>

            <div class="card">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">DEVICES</h4>
                  <div class="flex-shrink-0">
                      {{-- <div class="form-check form-switch form-switch-right form-switch-md">
                      <!-- <label for="card-tables-showcode" class="form-label text-muted">Show Code</label> -->
                      <input class="form-check-input code-switcher" type="checkbox" id="card-tables-showcode">
                      </div> --}}
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-body">

                    <div id="table-devices-gridjs" class="table"></div>

                </div>
                <!-- end card-body -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>

</div>

@endsection