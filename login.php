<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $id = $stmt->fetch();
    $count = $stmt->rowCount();
    if ($count == 1) {
        $_SESSION['id'] = $id['id_user'];
        header("Location: index.php");
        return;
    }
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
                            <input type="text" placeholder="Search">
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
                    <li class="breadcrumb-item active">Login & Register</li>
                </ul>
            </div>
        </div>


    <div class="login">
        <div class="container-fluid">
            <div class="row justify-content-md-center" >

                <!-- LOGIN -->
                <div class="col-lg-6">
                    <h4>LOGIN</h4>
                    <form method="POST">
                        <div class="login-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" id="password">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="login" id="login" class="btn">Masuk</button>
                                </div>
                            </div>
                        </div>
                    </form>
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

    <script src="js/bootstrap.bundle.min.js"></script>
    <script language="javascript">
        var login = document.getElementById("login");
        login.addEventListener("click", () => {
            var username = document.forms["form"]["email"].value;
            var password = document.forms["form"]["password"].value;

            if (!username == "" && !password == "") {
                window.location.replace("login.php");
            } else {
                alert("Email dan password salah!");
            }
        });
    </script>

</body>

</html>