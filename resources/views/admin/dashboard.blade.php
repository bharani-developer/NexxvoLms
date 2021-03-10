@extends('admin.layout.master')


@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!--Courses -->
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                  <i class="fas fa-book font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5>Courses</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 22</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-success bg-darken-2">
                  <i class="far fa-user font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-success white media-body">
                    <h5>Confirmed</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>287</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                  <i class="far fa-user font-large-2 white"></i>

                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5>Enrolled</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-down"></i>311</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/ Courses -->

        <!--/ Courses second row -->

        <div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                  <i class="fas fa-chalkboard-teacher font-large-2 white"></i>

                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5>Trainers</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 13</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-danger bg-darken-2">
                  <i class="far fa-user font-large-2 white"></i>

                  </div>
                  <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5>waiting List</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>14</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                  <i class="fas fa-blog font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5>Blog Post</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-down"></i> 32</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/ Courses second row -->

        <!--Recent Paid & Recent Enrolled -->

        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="page-separator">
              <div class="page-separator__text">Payments</div>
            </div>
            <div class="card">
              <div class="card-header">

                <h4 class="card-title">Recent Paids</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <p>Total paid invoices 240, unpaid 150.
                    <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="ft-arrow-right"></i></a></span>
                  </p>
                </div>
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                    <thead>
                      <tr>

                        <th>Invoice#</th>
                        <th>Enroller Name</th>
                        <th>Status</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                        <td class="text-truncate">Elizabeth W.</td>
                        <td class="text-truncate">
                          <span class="badge badge-default badge-success">Paid</span>
                        </td>
                        <td class="text-truncate">Rs 1200.00</td>
                      </tr>
                      <tr>

                        <td class="text-truncate"><a href="#">INV-01112</a></td>
                        <td class="text-truncate">Doris R.</td>
                        <td class="text-truncate">
                          <span class="badge badge-default badge-warning">Pending</span>
                        </td>
                        <td class="text-truncate">Rs 5685.00</td>
                      </tr>
                      <tr>

                        <td class="text-truncate"><a href="#">INV-001012</a></td>
                        <td class="text-truncate">Andrew D.</td>
                        <td class="text-truncate">
                          <span class="badge badge-default badge-success">Paid</span>
                        </td>
                        <td class="text-truncate">Rs 152.00</td>
                      </tr>
                      <tr>

                        <td class="text-truncate"><a href="#">INV-001401</a></td>
                        <td class="text-truncate">Megan S.</td>
                        <td class="text-truncate">
                          <span class="badge badge-default badge-success">Paid</span>
                        </td>
                        <td class="text-truncate">Rs 1450.00</td>
                      </tr>
                      <tr>

                        <td class="text-truncate"><a href="#">INV-008101</a></td>
                        <td class="text-truncate">Walter R.</td>
                        <td class="text-truncate">
                          <span class="badge badge-default badge-warning">Pending</span>
                        </td>
                        <td class="text-truncate">Rs 685.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Enrollers</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content px-1">
                <div id="recent-buyers" class="media-list height-300 position-relative">
                  <a href="#" class="media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md avatar-online">
                        <img class="media-object rounded-circle" src={{ asset('admin/images/portrait/small/avatar-s-7.png') }} alt="Generic placeholder image">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">Kristopher Candy
                      </h6>
                      <p class="list-group-item-text mb-0">
                        <span class="badge badge-primary">PHP</span>
                        <span class="badge badge-warning ml-1">Laravel</span>
                      </p>
                    </div>
                  </a>
                  <a href="#" class="media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md avatar-away">
                        <img class="media-object rounded-circle" src={{ asset('admin/images/portrait/small/avatar-s-8.png') }} alt="Generic placeholder image">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">Lawrence Fowler
                      </h6>
                      <p class="list-group-item-text mb-0">
                        <span class="badge badge-danger">Appliances</span>
                      </p>
                    </div>
                  </a>
                  <a href="#" class="media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md avatar-busy">
                        <img class="media-object rounded-circle" src={{ asset("admin/images/portrait/small/avatar-s-9.png") }} alt="Generic placeholder image">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">Linda Olson
                      </h6>
                      <p class="list-group-item-text mb-0">
                        <span class="badge badge-primary">PHP</span>
                        <span class="badge badge-success ml-1">Office</span>
                      </p>
                    </div>
                  </a>
                  <a href="#" class="media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md avatar-online">
                        <img class="media-object rounded-circle" src={{ asset("admin/images/portrait/small/avatar-s-10.png") }} alt="Generic placeholder image">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">Roy Clark
                      </h6>
                      <p class="list-group-item-text mb-0">
                        <span class="badge badge-warning">Laravel</span>
                        <span class="badge badge-danger ml-1">Appliances</span>
                      </p>
                    </div>
                  </a>
                  <a href="#" class="media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md avatar-online">
                        <img class="media-object rounded-circle" src={{ asset('admin/images/portrait/small/avatar-s-11.png') }} alt="Generic placeholder image">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">Kristopher Candy
                      </h6>
                      <p class="list-group-item-text mb-0">
                        <span class="badge badge-primary">PHP</span>
                        <span class="badge badge-warning ml-1">Laravel</span>
                      </p>
                    </div>
                  </a>
                  <a href="#" class="media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md avatar-away">
                        <img class="media-object rounded-circle" src="{{ asset('admin/images/portrait/small/avatar-s-12.png"') }} alt="Generic placeholder image">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">Lawrence Fowler
                      </h6>
                      <p class="list-group-item-text mb-0">
                        <span class="badge badge-danger">Appliances</span>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Recent Payments & Recent Enrollers -->
      </div>
    </div>
  </div>
  
    
@endsection