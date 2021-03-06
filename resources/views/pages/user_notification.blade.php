<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zeninth EO - Your Event Solution</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style2.css')}}" rel="stylesheet">
  <link href="{{asset('css/ui.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/fix.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body>
  <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
  <header id="header" class="header-stack">
      <div class="container">
        <div class="logo float-left">
          <h1 class="text-light"><a href="promaag.html" class="scrollto"><span>ZEN</span></a></h1>
        </div>
    
        <nav class="main-nav float-right d-none d-lg-block">
          <ul>
            <li>
                <a href="#" class="widget-header mr-3">
                  <i style="font-size: 16pt" class="icon fa fa-shopping-basket"></i>
                </a>
            </li>
            <li class="dropdown notifications">
                <a href="#" class="widget-header mr-3" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <i style="font-size: 16pt" class="icon fa fa-bell" ></i>
                    <span class="badge badge-pill badge-secondary">3+</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-small">
                  <li>
                      <a class="dropdown-item" href="#">
                          <div class="notification__icon-wrapper">
                            <div class="notification__icon">
                              <i class="fa fa-times-circle"></i>
                            </div>
                          </div>
                          <div class="notification__content">
                            <span class="notification__category">Order</span>
                            <p>Pesanan Anda Dibatalkan..</p>
                          </div>
                        </a>
                  </li>
                  <hr>
                  <li>
                      <a class="dropdown-item" href="#">
                          <div class="notification__icon-wrapper">
                            <div class="notification__icon">
                              <i class="fa fa-exclamation-triangle"></i>
                            </div>
                          </div>
                          <div class="notification__content">
                            <span class="notification__category">Payment</span>
                            <p>Segera lunasi pembayaran paket anda...</p>
                          </div>
                        </a>
                  </li>
                  <hr>
                  <li>
                      <a class="dropdown-item" href="#">
                          <div class="notification__icon-wrapper">
                            <div class="notification__icon">
                              <i class="fa fa-info"></i>
                            </div>
                          </div>
                          <div class="notification__content">
                            <span class="notification__category">SEKARANG BANGET: BUY 1 GET 1!</span>
                            <p>Serbu promonya dan koleksi pilihan paket termurah..</p>
                          </div>
                        </a>
                  </li>
                  <hr>
                  <li>
                      <a class="dropdown-item" href="#">
                          <div class="notification__icon-wrapper">
                            <div class="notification__icon">
                              <i class="fa fa-check-circle"></i>
                            </div>
                          </div>
                          <div class="notification__content">
                            <span class="notification__category">Booking Confirment</span>
                            <p>Pembayaran Anda Telah diterima</p>
                          </div>
                        </a>
                  </li>
                  <hr>
                  <li>
                    <a href="" class="dropdown-item notification__all text-muted text-center">Lihat Semua</a>
                  </li>
                </ul>
    
            </li>
            <li>
                <div class="input-group">
                    <div class="form-group has-search">
                        <span class="fa fa-glip fa-search form-control-feedback"></span>
                        <input type="text" class="form-controls form-control" placeholder="Cari...">
                    </div>
                </div>
            </li>
            <li class="drop-down"><a href="index.html"><span>Joko Mulyadi</span></a>
              <ul>
                <li><a href="#">Edit Profil</a></li>
                <li><a href="#">My Order</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="index.html">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
  </header>

  <main id="main" class="section-bg2">
    <section class="section-content bg padding-y">
            <br />
        <div class="container">          
          <div class="row mt-4">
            <main class="mt-4 col-lg-3 col-xl-3 col-md-5">
                <div class="card card-filter">
                    <article class="card-notif-itm">
                        <header class="card-header notif-head">
                            <a href="#">
                                <h6 class="title">Notifikasi<span class="float-right badge badge-info round bdges">125</span></h6>
                            </a>       
                        </header>
                        <div class="filter-content collapse show">
                            <div class="card-body">
                                <ul class="list-unstyled list-lg">
                                    <a href="#"><li>Pesanan</li></a>
                                    <hr>
                                    <a href="#"><li>Promo Penjual</li> </a><hr>
                                    <a href="#"><li>Aktivitas</li></a>
                                </ul>  
                            </div> <!-- card-body.// -->
                            
                        </div> <!-- collapse .// -->
                    </article>
                </div> 
            </main>
              <main class="mt-4 col-lg-9 col-xl-9 col-md-7">
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="profiletimeline"> 
                                    <a href="notif/more" class="hover">
                                        <div class="sl-item mt-0" >
                                            <aside class="sl-left">
                                                <img class="img-rounded" alt="avaeo_notif" src="{{asset('img/items/stores.png')}}">
                                            </aside> 
                                            <article class="sl-right">
                                                <h5 class="sl-title">SEKARANG BANGET: BUY 1 GET 1!<span class="sl-date">5 Menit</span></h5>
                                                <p class="sl-txt">Serbu promonya dan koleksi pilihan paket termurah dengan diskon s/d 60% </p> 
                                            </article>  
                                        </div>                                        
                                    </a>
                                    <a href="notif/more">
                                        <article class="sl-item mt-0 mb-0">
                                            <div class="ml-0">
                                                <aside class="sl-left">
                                                    <img class="img-rounded" alt="avaeo_notif" src="{{asset('img/items/stores.png')}}">
                                                </aside> 
                                                <article class="sl-right">
                                                    <h5 class="sl-title">Konfirmasi Penerimaan Pesanan <span class="sl-date">5 Menit</span></h5>
                                                    <p class="sl-txt">Jika pesanan EO001 belum tiba, perpanjang garansi ZEN. Jika paket tidak sesuai dengan pengajuan, ajukan pembatalan/pengembalian dana ke EO/Rental pada 05/20/2019 </p> 
                                                </article> 
                                            </div>  
                                        </article> 
                                    </a>
                                    <a href="notif/more">
                                        <article class="sl-item mt-0 mb-0">
                                            <div class="ml-0">
                                                <aside class="sl-left">
                                                    <img class="img-rounded" alt="avaeo_notif" src="{{asset('img/items/stores.png')}}">
                                                </aside> 
                                                <article class="sl-right">
                                                    <h5 class="sl-title">Konfirmasi Penerimaan Pesanan <span class="sl-date">5 Menit</span></h5>
                                                    <p class="sl-txt">Pesanan EO0001 telah diterima </p> 
                                                </article> 
                                            </div>  
                                        </article> 
                                    </a>
                                  </div>
                            </div>
                        </div>
                                  
                    </div>
                  </div>
              </main>
          </div>
        </div> <!-- container .//  -->
        <br />
    </section>
        
  </main>
    <footer id="footer" class="section-bg">
      <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-links">
                        <h4>Mitra EO Zen</h4>
                          <ul>
                            <li><a href="#">Cara Jual</a></li>
                            <li><a href="#">Daftar Mitra</a></li>
                            <li><a href="#">Ketentuan Dana</a></li>
                            <li><a href="#">Periklanan</a></li>
                          </ul>
                      </div>
                </div>  
                <div class="col-sm-3">
                    <div class="footer-links">
                        <h4>Lebih Tahu Zenith</h4>
                          <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Layanan</a></li>
                            <li><a href="#">Syarat dan Ketentuan</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                          </ul>
                      </div>
                </div>
                <div class="col-sm-3">
                  <div class="footer-links">
                    <h4>Layanan Pelanggan</h4>
                      <ul>
                        <li><a href="#">Pembayaran</a></li>
                        <li><a href="#">Pengembalian Dana dan Uang</a></li>
                        <li><a href="#">Komplain</a></li>
                        <li><a href="#">Garansi</a></li>
                        <li><a href="#">FAQ</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      Jl. Kemanggisan VII Kav. 31 <br>
                      Jakarta Selatan<br>
                      <strong>Phone:</strong> +62 (21)123456<br>
                      <strong>Email:</strong> info@example.com<br>
                    </p>
                  </div>
                </div>
            </div>
            <div class="copyright">
                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
                <br />
                <p class="text-center">&copy; 2019 Copyright <strong>Zenith </strong>| Hak Cipta Dilindungi</p>
            </div> 
        </div>
      </div>
    </footer>
  <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
  <!-- JavaScript Libraries -->
  <script src="{{asset('dist/js/demo.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>