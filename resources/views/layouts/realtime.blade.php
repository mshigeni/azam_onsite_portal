@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- end page title -->
            <div class="row project-wrapper">
              <div class="col-xxl-8">
                
                <div class="row">
                  <div class="col-xl-3">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                              <i data-feather="users" class="text-primary"></i>
                            </span>
                          </div>
                          <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium text-truncate mb-3">TOTAL</p>
                            <div class="d-flex align-items-center mb-3">
                              <h4 class="fs-4 flex-grow-1 mb-0">
                                <span class="counter-value" data-target="0" id="totalTrxs">0</span>
                              </h4>
                              <!-- <span class="badge badge-soft-danger fs-12">
                                <i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02 % </span> -->
                            </div>
                            <p class="text-muted text-truncate mb-0">All Gates</p>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-xl-3">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                              <i data-feather="user" class="text-warning"></i>
                            </span>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-medium mb-3">Magogoni</p>
                            <div class="d-flex align-items-center mb-3">
                              <h4 class="fs-4 flex-grow-1 mb-0">
                                <span class="counter-value" data-target="0" id="magogoniTrxs">0</span>
                              </h4>
                              <!-- <span class="badge badge-soft-success fs-12">
                                <i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58 % </span> -->
                            </div>
                            <p class="text-muted mb-0">Transactions</p>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-xl-3">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                              <i data-feather="user" class="text-info"></i>
                            </span>
                          </div>
                          <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium  text-truncate mb-3">Kigamboni</p>
                            <div class="d-flex align-items-center mb-3">
                              <h4 class="fs-4 flex-grow-1 mb-0">
                                <span class="counter-value" data-target="0" id="kigamboniTrxs">0</span>
                               </h4>
                              <!-- <span class="badge badge-soft-danger fs-12">
                                <i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35 % </span> -->
                            </div>
                            <p class="text-muted text-truncate mb-0">Transactions</p>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                  </div>
                  <!-- end col -->
                   <!-- MASOMONI -->
                  <div class="col-xl-3">
                    <div class="card card-animate">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-primary text-info rounded-2 fs-2">
                              <i data-feather="cloud-off" class="text-info"></i>
                            </span>
                          </div>
                          <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium  text-truncate mb-3">Offline</p>
                            <div class="d-flex align-items-center mb-3">
                              <h4 class="fs-4 flex-grow-1 mb-0">
                                <span class="counter-value" data-target="0" id="offlineTrxs">0</span>
                              </h4>
                              <!-- <span class="badge badge-soft-danger fs-12">
                                <i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35 % </span> -->
                            </div>
                            <p class="text-muted text-truncate mb-0">Not reflected</p>
                          </div>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                  </div>
                  <!-- end col -->

                </div>
                <!-- end row -->

              </div>
              
              <!-- end col -->
            </div>


            <div class="row project-wrapper">
              <div class="col-xxl-8">
                
                <div class="row">
                  <div class="col-xl-3">
                    <div class="card card-animate bg-info">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div class="flex-grow-1">
                                      <p class="text-uppercase fw-medium text-white-50 mb-0">Total</p>
                                  </div>
                                  <div class="flex-shrink-0">
                                      <h5 class="text-warning fs-14 mb-0">
                                          <!-- <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 % -->
                                      </h5>
                                  </div>
                              </div>
                              <div class="d-flex align-items-end justify-content-between mt-4">
                                  <div>
                                      <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white">TZS <span class="counter-value" data-target="0" id="totalAmount">0</span></h4>
                                      <!-- <a href="#" class="text-decoration-underline text-white-50">Total Amount</a> -->
                                      <a href="#" class="text-decoration-underline text-white">View Total earnings</a>
                                  </div>
                                  <div class="avatar-sm flex-shrink-0">
                                      <span class="avatar-title bg-soft-light rounded fs-3">
                                          <i class="bx bx-coin-stack text-white"></i>
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <!-- end card body -->
                      </div>
                  </div>
                  <!-- end col -->

                  <div class="col-xl-3 col-md-6">
                            <!-- card -->
                      <div class="card card-animate">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div class="flex-grow-1">
                                      <p class="text-uppercase fw-medium text-muted mb-0">Magogoni</p>
                                  </div>
                                  <div class="flex-shrink-0">
                                      <h5 class="text-success fs-14 mb-0">
                                          <!-- <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 % -->
                                      </h5>
                                  </div>
                              </div>
                              <div class="d-flex align-items-end justify-content-between mt-4">
                                  <div>
                                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">TZS <span class="counter-value" data-target="0" id="magogoniAmount">0</span></h4>
                                      <a href="#" class="text-decoration-underline">View Magogoni earnings</a>
                                  </div>
                                  <div class="avatar-sm flex-shrink-0">
                                      <span class="avatar-title bg-soft-success rounded fs-3">
                                          <i class="ri-coin-line text-success"></i>
                                      </span>
                                  </div>
                              </div>
                          </div><!-- end card body -->
                      </div><!-- end card -->
                  </div><!-- end col -->

                  
                  <div class="col-xl-3 col-md-6">
                      <!-- card -->
                      <div class="card card-animate">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div class="flex-grow-1">
                                      <p class="text-uppercase fw-medium text-muted mb-0">Kigamboni</p>
                                  </div>
                                  <div class="flex-shrink-0">
                                      <h5 class="text-success fs-14 mb-0">
                                          <!-- <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 % -->
                                      </h5>
                                  </div>
                              </div>
                              <div class="d-flex align-items-end justify-content-between mt-4">
                                  <div>
                                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">TZS <span class="counter-value" data-target="0" id="kigamboniAmount">0</span></h4>
                                      <a href="#" class="text-decoration-underline">View Kigamboni earnings</a>
                                  </div>
                                  <div class="avatar-sm flex-shrink-0">
                                      <span class="avatar-title bg-soft-warning rounded fs-3">
                                          <i class="ri-coin-line text-warning"></i>
                                      </span>
                                  </div>
                              </div>
                          </div><!-- end card body -->
                      </div><!-- end card -->
                  </div><!-- end col -->

                  <div class="col-xl-3 col-md-6">
                      <!-- card -->
                      <div class="card card-animate">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div class="flex-grow-1">
                                      <p class="text-uppercase fw-medium text-muted mb-0">Offline</p>
                                  </div>
                                  <div class="flex-shrink-0">
                                      <!-- <h5 class="text-muted fs-14 mb-0">
                                          +0.00 %
                                      </h5> -->
                                  </div>
                              </div>
                              <div class="d-flex align-items-end justify-content-between mt-4">
                                  <div>
                                      <h4 class="fs-22 fw-semibold ff-secondary mb-4">TZS <span class="counter-value" data-target="0" id="offlineAmount">0</span></h4>
                                      <a href="#" class="text-decoration-underline">View Offline Amount</a>
                                  </div>
                                  <div class="avatar-sm flex-shrink-0">
                                      <span class="avatar-title bg-soft-primary rounded fs-3">
                                          <i class="bx bx-wallet text-primary"></i>
                                      </span>
                                  </div>
                              </div>
                          </div><!-- end card body -->
                      </div><!-- end card -->
                  </div><!-- end col -->

                </div>
                <!-- end row -->

              </div>
              
              <!-- end col -->
            </div>


            <div class="card">

                <div class="card-body mt-3">
            
                    <div class="row gy-4 mb-2">

                        <div class="col-xxl-3 col-md-4">
                            <div>
                                <label for="valueInputStartDate" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="valueInputStartDate" placeholder="">
                            </div>
                            <!--end col-->
                        </div>

                        <div class="col-xxl-3 col-md-4">
                            <div>
                                <label for="valueInputEndDate" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="valueInputEndDate" placeholder="">
                            </div>
                            <!--end col-->
                        </div>

                        <div class="col-xxl-3 col-md-4 aina-kozi-select">
                            <label for="valueInput" class="form-label">Offline/ Online</label>
                            <select id = "kozi_kijeshi" class="form-select mb-3 aina-kozi-select" aria-label="Default select example">
                                <option value="0" selected>All</option>
                                
                            </select>
                            <!-- <div class="invalid-feedback">Tafadhali chagua Misheni</div> -->
                            <!--end col-->
                        </div>

                        <!-- <div class="col-xxl-3 col-md-4">
                            <button type="button" id= "filterData" class="btn btn-primary btn-label waves-effect waves-light">
                                <i class="ri-user-search-line label-icon align-middle fs-16 me-2">
                                </i> Tafuta
                            </button>
                        </div> -->

                        <div class="col-xxl-3 col-md-4 mb-3 d-flex align-items-end">
                            <button type="button" id="filterData" class="btn btn-primary btn-label waves-effect waves-light">
                                <i class="ri-user-search-line label-icon align-middle fs-16 me-2"></i> Tafuta
                            </button>
                        </div>


                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Transactions</h4>
                  <div class="flex-shrink-0">
                      {{-- <div class="form-check form-switch form-switch-right form-switch-md">
                      <!-- <label for="card-tables-showcode" class="form-label text-muted">Show Code</label> -->
                      <input class="form-check-input code-switcher" type="checkbox" id="card-tables-showcode">
                      </div> --}}
                  </div>
                </div>
                <!-- end card header -->
                <div class="card-body">

                    <div id="table-gridjs" class="table"></div>

                </div>
                <!-- end card-body -->
            </div>

        </div>
    </div>
</div>

@endsection