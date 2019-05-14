
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Edit Profil User</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/jangandiubah.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/color.css"> -->
    <link rel="stylesheet" href="css/responsive.css">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
      .img-circle{
        width: 100px;
        height: 100px;
      }
    </style>
</head>
<body>
<!--<div class="se-pre-con"></div>-->
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
        <li>
            <a href="#" class="widget-header mr-3">
              <i style="font-size: 16pt" class="icon fa fa-bell-o"></i>
            </a>
        </li>
        <li>
            <div class="input-group">
                <div class="form-group has-search">
                    <span class="fa fa-glip fa-search form-control-feedback"></span>
                    <input type="text" class="form-controls form-control" placeholder="Cari...">
                </div>
            </div>
        </li>
        <!-- <li><a href="after-login.html">Iklan</a></li> -->
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
<div class="theme-layout">

  <section class="container-fluid section-bg2">
      <br />  <br />  <br /> <br />
            <div class="row merged">
					<div class="col-lg-3 col-sm-4">
            <div class="col-md-12">
                <div class="col-sm-12">
                        <div class="row">
                          <!--  -->
                          <div class="card mb-5">
                              <div class="card-body">
                                  <div class="card-body text-center">
                                      <img src="{{ asset('img/EO/eo-2.jpg') }}" alt="Kathy Davis" class="img-fluid rounded-circle mb-2 img-circle">
                                      <br />
                                      <p class="small-text text-muted text-justify">Ukuran gambar: maks. 1 MB <br /> Format gambar: .JPEG, .PNG</p>
                                      {{-- <a class="btn btn-outline-info btn-md" href="#">Edit Profile</a> --}}
                                      <input type="file" class=" btn-ouline-info form-control-file" id="exampleFormControlFile1"> 
                                  </div>
                              </div>
                          </div>
                          <div class="card mb-5">
                              <div class="card-body">
                                <p class="text-justify"><i class="fa fa-heart-o"></i> My Wishlist</p>
                                <p class="text-justify"><i class="fa fa-file-o"></i> Pesanan Saya</p>
                                <p class="text-justify"><i class="fa fa-credit-card"></i> Metode Pembayaran</p>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
					</div>
					<div class="col-lg-8 col-sm-7">
              <div class="card mb-4">
                  <div class="card-body ">  
                  <div class="col-md-12 order-md-1">
                        <h4 class="mb-3 text-center"><b> Ubah Profil </b></h4> <br />
                        <form>
                            <div class="form-group row">
                              <label for="nama" class="col-sm-2 col-form-label"><b>Nama</b></label>
                              <div class="col-sm-10">
                                <input type="text" id="nama" readonly class="form-control-plaintext" id="nama" value="Joko Mulyadi">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword3" class="col-sm-2 col-form-label"><b> Email</b></label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="email inputPassword3" placeholder="">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhone" class="col-sm-2 col-form-label"><b>No Telp</b></label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="phone inputPhone" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamats" class="col-sm-2 col-form-label"><b>Alamat</b></label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhone" class="col-sm-2 col-form-label"><b> Password</b></label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="phone inputPhone" placeholder="">
                                </div>
                            </div>
                            {{-- <fieldset class="form-group">
                              <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                <div class="col-sm-10">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                      First radio
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                      Second radio
                                    </label>
                                  </div>
                                  <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                    <label class="form-check-label" for="gridRadios3">
                                      Third disabled radio
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </fieldset> --}}
                            <br />
                            <div class="form-group row justify-content-center">
                              <div class="col-sm-10">
                                <button class="btn btn-outline-danger btn-md btn-block" type="submit">Simpan</button>
                              </div>
                            </div>
                        </form>
                        
                      </div>
                  </div>
              </div>
          </div>
  </section>
</div>
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
</body>	
</html>