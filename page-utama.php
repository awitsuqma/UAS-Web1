<?php

include 'koneksi.php';

$data = $conn->prepare('SELECT * FROM companies');
$data->execute();
$companies = $data->fetchAll();

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
                            <a href="page-utama.php" class="nav-item nav-link">Produk</a>
                            <a href="page-detail.php?id=2" class="nav-item nav-link">Detail Produk</a>
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
                                    <a href="login.php" class="dropdown-item">Login</a>
                                <a href="register.php" class="dropdown-item">Register</a>
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
    <!-- Bottom Bar End -->

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Product</a></li>
                <li class="breadcrumb-item active">Product List</li>
            </ul>
        </div>
    </div>

    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-view-top">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-search">
                                            <input type="email" value="Cari">
                                            <button><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-short">
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown">Urutkan dari</div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Terkait</a>
                                                    <a href="#" class="dropdown-item">Terbaru</a>
                                                    <a href="#" class="dropdown-item">Terlaris</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="product-price-range">
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown">Batas Harga(Rp)</div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Rp.0 - Rp.50.000</a>
                                                    <a href="#" class="dropdown-item">Rp.50.000 - Rp.100.000</a>
                                                    <a href="#" class="dropdown-item">Rp.100.000 - Rp.150.000</a>
                                                    <a href="#" class="dropdown-item">Rp.150.000 - Rp.300.000</a>
                                                    <a href="#" class="dropdown-item">Rp.300.000 - Rp.500.000</a>
                                                    <a href="#" class="dropdown-item">Rp.500.000 - Rp.1.000.000</a>
                                                    <a href="#" class="dropdown-item">Rp.1.000.000 - Rp.10.000.000</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php if ($companies > 0) { ?>
                            <?php for ($i = 0; $i < count($companies); $i++) { ?>
                                <?php if (isset($companies[$i])) { ?>
                                    <div class="col-md-4">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a><?php echo $companies[$i]['company_name'] ?></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="img/<?php echo $companies[$i]['image'] ?>">
                                                </a>
                                                <div class="product-action">
                                                    <a href="page-detail.php?id=<?php echo $companies[$i]['id_company'] ?>"><i class="fas fa-info-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>



                    </div>

                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination Start -->
                </div>

                <!-- Side Bar Start -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-widget category">
                        <h2 class="title">Category</h2>
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="sidebar-widget widget-slider">
                        <div class="sidebar-slider normal-slider">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">Sling bag baby classic Channel</a>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="img/new2.png" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3><span>Rp</span>200.000</h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">Eternal Drkdvl</a>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="img/Eternal2.jpg" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3><span>Rp</span>120.000</h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">Blue jeans and black</a>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="img/product-6.jpg" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3><span>Rp</span>159.000</h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget brands">
                        <h2 class="title">Brand Terkait</h2>
                        <ul>
                            <li><a href="#">Channel </a><span>(45)</span></li>
                            <li><a href="#">Adidas </a><span>(34)</span></li>
                            <li><a href="#">Apple </a><span>(67)</span></li>
                            <li><a href="#">Eternalmind</a><span>(20)</span></li>
                            <li><a href="#">Louis Vuitton </a><span>(89)</span></li>
                            <li><a href="#">Supreme</a><span>(28)</span></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget tag">
                        <h2 class="title">Tag Cloud</h2>
                        <a href="#">Jeans</a>
                        <a href="#">Top</a>
                        <a href="#">Buttom</a>
                        <a href="#">Handphone</a>
                        <a href="#">Anak-anak</a>
                        <a href="#">Kecantikan</a>
                        <a href="#">Fashion</a>
                        <a href="#">Aksesoris</a>
                        <a href="#">Perlengkapan Bayi</a>
                        <a href="#">Laki-laki</a>
                        <a href="#">Wanita</a>
                        <a href="#">TOD</a>
                    </div>
                </div>

            </div>
        </div>
    </div>





    <!-- <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php if ($companies > 0) { ?>
                            <?php for ($i = 0; $i < count($companies); $i++) { ?>
                                <?php if (isset($companies[$i])) { ?>
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a><?php echo $companies[$i]['company_name'] ?></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="img/<?php echo $companies[$i]['image'] ?>">
                                                </a>
                                                <div class="product-action">
                                                    <a href="page-detail.php?id=<?php echo $companies[$i]['id_company'] ?>"><i class="fas fa-info-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="img/logo1.png" alt=""></div>
                <div class="brand-item"><img src="img/logo2.png" alt=""></div>
                <div class="brand-item"><img src="img/logo3.png" alt=""></div>
                <div class="brand-item"><img src="img/logo4.png" alt=""></div>
                <div class="brand-item"><img src="img/logo5.jpg" alt=""></div>
                <div class="brand-item"><img src="img/logo6.jpg" alt=""></div>
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
                    <p>Copyright by &copy; <a href="#">18111019_AwitSuqma_TIFRP181CIDB_UASWEB1</a>. 2020</p>
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