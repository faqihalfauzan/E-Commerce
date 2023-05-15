<?php 
require_once 'dbkoneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>El Shop</title>
      
        
    <!-- Icon -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style="background-color:white;">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../home.php"><h5>El Shop</h5></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../home.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="dasbor.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-left"></i></div>
                                Back
                            </a>
                            <a class="nav-link active" href="list_produk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>
                                Produk
                            </a>
                            <a class="nav-link" href="list_merk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Product Type
                            </a>
                            <a class="nav-link" href="list_pesanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Daftar Pesanan
                            </a>
                            <a class="nav-link" href="list_customer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                customer
                            </a><br><br>
                            <a class="nav-link" href="../home.php" onclick="showLoginAlert()">
                                <div class="sb-nav-link-icon"><i class="fa fa-arrow-left"></i></div>
                                Log Out
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                    <div class="jumbotron jumbotron-fluid" style="background-color:cream rgb(33,37,41); height: 150px; padding: 20px; margin: 10px;">
                        <div class="container" style="background: url(../img/banner/banner3.png); padding-bottom: 2px;  padding-top: 25px;">
                            <h1 class="mt-4 text-dark">Form Produk</h1>
                        </div>
                </div>
                <div class="container">
                <form method="POST" action="proses_produk.php">
                    <div class="form-group row">
                        <label for="sku" class="col-4 col-form-label">sku Produk</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                            </div> 
                            <input id="sku" name="sku" type="text" class="form-control" value="">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">name</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adjust"></i>
                            </div>
                            </div> 
                            <input id="name" name="name" type="text" class="form-control" value="">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="purchase_price" class="col-4 col-form-label">purchase_price</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-dollar"></i>
                            </div>
                            </div> 
                            <input id="purchase_price" name="purchase_price" value="" type="number" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sell_price" class="col-4 col-form-label">Merk</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-up"></i>
                            </div>
                            </div> 
                            <select id="sell_price" name="sell_price" class="custom-select">
                                <option value="1" >Panci</option>
                                <option value="2" >Spatula</option>
                                <option value="3" >Kulkas</option>
                                <option value="4" >Kompor</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stock" class="col-4 col-form-label">stock</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-paperclip"></i>
                            </div>
                            </div> 
                            <input id="stock" name="stock" value="" type="text" class="form-control" placeholder="Masukkan Link stock">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="min_stock" class="col-4 col-form-label">min_stock</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-pencil"></i>
                            </div>
                            </div> 
                            <input id="min_stock" name="min_stock" value="" type="text" class="form-control" placeholder="Masukkan min_stock">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_type_id" class="col-4 col-form-label">product_type_id</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-pencil"></i>
                            </div>
                            </div> 
                            <input id="product_type_id" name="product_type_id" value="" type="text" class="form-control" placeholder="Masukkan min_stock">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="restock_id" class="col-4 col-form-label">restock_id</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-pencil"></i>
                            </div>
                            </div> 
                            <input id="restock_id" name="restock_id" value="" type="text" class="form-control" placeholder="Masukkan min_stock">
                        </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan"/>
                        </div>
                    </div>
                </form>
                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Faqih Al Fauzan 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
           

