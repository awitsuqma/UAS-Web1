<?php
include 'koneksi.php';

if (isset($_SESSION['id']) == true) {
    echo '<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>';
    echo '
    <script>
    $(document).ready(function(){
    $("#halaman-menu-utama").attr("href", "halaman-menu-utama.php");
    $("#halaman-detail").attr("href", "halaman-detail.php?id=2");
    $("#login").attr("href", "logout.php");
    $("#login").text("Logout");
    $("#register").remove();
    });
    </script>
  ';
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Suqma Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <link href="img/favicon.ico" rel="icon">

      
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        awitsuqma@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        (+62)858-6389-6848
                    </div>
                </div>
            </div>
        </div>
       
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Beranda</a>
                            <a id="halaman-menu-utama" href="page-utama.php" class="nav-item nav-link">Produk</a>
                            <a id="halaman-detail" href="page-detail.php?id=2" class="nav-item nav-link">Detail Produk</a>
                            <a href="cart.php" class="nav-item nav-link">Keranjang</a>
                            <a href="checkout.php" class="nav-item nav-link">Checkout</a>
                            <a href="form-add-product.php" class="nav-item nav-link">Tambah Produk</a>
                            <a href="form-edit-profile.php" class="nav-item nav-link">Akun Saya</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.php" class="dropdown-item">Wishlist</a>
                                    <a href="contact.php" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pengguna</a>
                                <div class="dropdown-menu">
                                    <a id="login" href="login.php" class="dropdown-item">Login</a>
                                <a id="register" href="register.php" class="dropdown-item">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/Suqmastore.jpg" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Cari">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk</a></li>
                    <li class="breadcrumb-item active">Keranjang</li>
                </ul>
            </div>
        </div>
        
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-1.jpg" alt="Image"></a>
                                                    <p>Slim fit women black</p>
                                                </div>
                                            </td>
                                            <td>Rp50.000</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>Rp50.000</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-2.jpg" alt="Image"></a>
                                                    <p>Dress tie die blue</p>
                                                </div>
                                            </td>
                                            <td>Rp99.000</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>Rp99.000</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-3.jpg" alt="Image"></a>
                                                    <p>Dress blue sky polos</p>
                                                </div>
                                            </td>
                                            <td>Rp125.000</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>Rp125.000</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-4.jpg" alt="Image"></a>
                                                    <p>Women top brown</p>
                                                </div>
                                            </td>
                                            <td>Rp79.000</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>Rp79.000</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-5.jpg" alt="Image"></a>
                                                    <p>One style man from channel</p>
                                                </div>
                                            </td>
                                            <td>Rp399.900</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>Rp399.900</td>
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Masukan Voucher">
                                        <button>Gunakan</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Ringkasan Keranjang</h1>
                                            <p>Sub Total<span>Rp752.900</span></p>
                                            <p>Biaya Pengiriman<span>Rp12.000</span></p>
                                            <h2>Total<span>Rp764.900</span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button>Perbarui</button>
                                            <button>Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Lokasi</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Bandung, Indonesia</p>
                                <p><i class="fa fa-envelope"></i>awitsuqma@gmail.com</p>
                                <p><i class="fa fa-phone"></i>(+62)858-6389-6848</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-line"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Info Store</h2>
                            <ul>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Kebijakan Pribadi</a></li>
                                <li><a href="#">Syarat & Ketentuan</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Kebijakan</h2>
                            <ul>
                                <li><a href="#">Pembayaran</a></li>
                                <li><a href="#">Pengiriman</a></li>
                                <li><a href="#">Pengembalian</a></li>
                            </ul>
                        </div>
                    </div>

                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Kami Menerima Pembayaran:</h2>
                            <img src="img/metodepembayaran-bank.png" alt="Payment Method" />
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright by &copy; <a href="#">18111019_AwitSuqma_TIFRP181CIDB</a>. 2020</p>
                    </div>


                    
                </div>
            </div>
        </div>
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
       
        <script src="js/main.js"></script>
    </body>
</html>
