@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ZEN Administrator</title>
  <link rel="stylesheet" href="vends/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="vends/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="vends/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vends/css/style.css">
  <link rel="shortcut icon" href="vends/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="dashpage"><h3>ZEN</h3></a>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Cari.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="vends/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="vends/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="vends/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="fas fa-bell mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="vends/images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Kurnia Setyo</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-boxes text-primary"></i>
                Paket
              </a>
              <a class="dropdown-item">
                <i class="fas fa-users text-primary"></i>
                User
              </a>
              <a class="dropdown-item">
                <i class="fas fa-book text-primary"></i>
                Booking
              </a>
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="fas fa-sign-out-alt text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <div class="content-wrapper">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="d-flex">
                      <i class="mdi mdi-home text-muted hover-cursor"></i>
                      <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sales</a>
                      </li>
  
                    </ul>
                    <div class="tab-content py-0 px-0">
                      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="fa fa-calendar icon-lg mr-3 text-primary"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <h5 class="mb-0 d-inline-block">15 Mei 2019</h5>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                  <a class="dropdown-item" href="#">16 Mei 2019</a>
                                  <a class="dropdown-item" href="#">15 Juli 2019</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="fas fa-dollar-sign mr-3 icon-lg text-danger"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Revenue</small>
                              <h5 class="mr-2 mb-0">Rp 120.000.000</h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="fas fa-eye mr-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Total views</small>
                              <h5 class="mr-2 mb-0">1123000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="fas fa-calendar icon-lg mr-3 text-primary"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <h5 class="mb-0 d-inline-block">15 Mei 2019</h5>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                  <a class="dropdown-item" href="#">16 Mei 2019</a>
                                  <a class="dropdown-item" href="#">15 Juli 2019</a>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="fas fa-eye mr-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Total views</small>
                              <h5 class="mr-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="fas fa-dollar-sign mr-3 icon-lg text-danger"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Revenue</small>
                              <h5 class="mr-2 mb-0">$577545</h5>
                            </div>
                          </div>
                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="fas fa-flag mr-3 icon-lg text-danger"></i>
                            <div class="d-flex flex-column justify-content-around">
                              <small class="mb-1 text-muted">Flagged</small>
                              <h5 class="mr-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10 justify-content-center grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Grafik Penjualan (Per Minggu)</p>
                    <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Aliran Pemasukan</p>
                      <canvas id="myChart3"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Aliran Pemasukan</p>
                      <canvas id="myChart2"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br /><br />
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Paket Summary</p>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
                        <thead>
                          <tr>
                              <th>Nama Paket</th>
                              <th>Kategori</th>
                              <th>Harga</th>
                              <th>Fasilitas</th>
                              <th>Total Penjualan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td>Paket Nikah Minimalis</td>
                              <td>Wedding</td>
                              <td>25000</td>
                              <td>Sound system lengkap, Ruangan bisa diseaikan,..</td>
                              <td>35 Unit</td>
                          </tr>
                          <tr>
                              <td>Rental Mobil Jaya</td>
                              <td>Rental</td>
                              <td>2500000</td>
                              <td>Menyediakan berbagai jenis mobil ...</td>
                              <td>45 Unit</td>
                          </tr>
                          <tr>
                              <td>Paket Catering Diet</td>
                              <td>Wedding</td>
                              <td>450000</td>
                              <td>Beragam jenis makanan yang cocok...</td>
                              <td>160 Unit</td>
                          </tr>
  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    
  </div>
  <footer id="footer">
      <div class="footer-top">
        <div class="copyright">
                <div class="social-links">
                  <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <br />
                <p class="text-center">&copy; 2019 Copyright <strong>Zenith </strong>| Hak Cipta Dilindungi</p>
        </div> 
      </div>
  </footer>
  <script src="vends/vendors/base/vendor.bundle.base.js"></script>
  <script src="vends/js/Chart.min.js"></script>
  <script src="vends/js/chart.js"></script>
  <script src="vends/js/jquery.dataTables.js"></script>
  <script src="vends/js/dataTables.bootstrap4.js"></script>
  <script src="vends/js/off-canvas.js"></script>
  <script src="vends/js/hoverable-collapse.js"></script>
  <script src="vends/js/template.js"></script>
  <script src="vends/js/dashboard.js"></script>
  <script src="vends/js/data-table.js"></script>
  <script src="vends/js/jquery.dataTables.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="vends/js/dataTables.bootstrap4.js"></script>
</body>

</html>
@endsection
