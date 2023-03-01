<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>img hotel</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=yes" />
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="images/favicon1.png">
    <link rel='stylesheet' href='css/css/bootstrap.datepicker.min.css'>
    <link
        href="https://fonts.googleapis.com/css2?family=Alkalami&family=Averia+Serif+Libre&family=Bree+Serif&family=Josefin+Sans:wght@500&family=Lexend+Deca:wght@300&family=Merriweather:wght@700&family=Nunito+Sans:wght@600&family=Poppins:wght@500&family=Quicksand:wght@500&family=Raleway:wght@500&family=Rubik+Distressed&family=Rubik+Mono+One&family=Rubik:wght@500&family=Sacramento&family=Satisfy&family=Signika:wght@600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/css/animate.css">
    <link rel="stylesheet" href="css/css/owl.carousel.css">
    <link rel="stylesheet" href="css/css/custom.css">
    <link rel="stylesheet" href="css/css/style.min.css">
</head>

<body>

    <!-- HEADER SECTION -->

    <div class="container-fluid header-top">
        <div class="container">
            <div class="row">
                <div class="col-2 chekin-date">
                    <div class="form-container w-100 h-100">
                        <form class="row form position-relative h-100">
                            <div class="w-100">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" id="date" placeholder="check-in">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2 checkout-date">
                    <div class="form-container w-100 h-100">
                        <form class="row form position-relative h-100">
                            <div class="w-100">
                                <div class="input-group date" id="datepicker-2">
                                    <input type="text" class="form-control" id="date" placeholder="check-out">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2 guest-amnt">
                    <div class="guest">
                        <select class="form-select mb-1" aria-label=".form-select-lg example">
                            <option selected>Guests</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                        </select>
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-2 guest-amnt">
                    <div class="guest">
                        <select class="form-select mb-1" aria-label=".form-select-lg example">
                        <option selected>Rooms</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                        </select>
                        <i class="fa fa-bed" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-2 srch-lnk">
                    <div class="lnk w-100 h-100 text-center">
                        <a href="#">Search</a>
                    </div>
                </div>
                <div class="col-2 lgn-snp-lnk">
                    <div class="lnk w-100 h-100 text-center">
                        <a href="#">
                            <img src="images/login-img.png" alt="" class="img-fluid">
                            Login/Signup
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid header-section pt-1 pb-1" id="myHeader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand fw-bold" href="index.php">
                            HOTEL
                        </a>
                        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon display-inline">
                                <i class="fa fa-bars text-white fs-20" aria-hidden="true"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="index.php">Mumbai</a>
                                    <!-- <ul class="deep-menu submenu-home flex-column">
                                        <li><a href="#" class="menu-link fs-15">Home 1</a></li>
                                        <li><a href="#" class="menu-link fs-15">Home 2</a></li>
                                        <li><a href="#" class="menu-link fs-15">Home 3</a></li>
                                        <li><a href="#" class="menu-link fs-15">Home 4</a></li>
                                        <li><a href="#" class="menu-link fs-15">Home 5</a></li>
                                        <li><a href="#" class="menu-link fs-15">Home 6</a></li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="listing.php">Delhi</a>
                                    <!-- <ul class="deep-menu flex-column">
                                        <li><a href="#" class="menu-link fs-15">Property single page</a></li>
                                        <li><a href="#" class="menu-link fs-15">Property wide</a></li>
                                        <li><a href="#" class="menu-link fs-15">In village</a></li>
                                        <li><a href="#" class="menu-link fs-15">In rural area</a></li>
                                        <li><a href="#" class="menu-link fs-15">Urban Properties</a></li>
                                        <li><a href="#" class="menu-link fs-15">Best Of the best</a></li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn link-agent fs-15" href="agent.php">Bangalore</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="blog.php">Chennai</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="blog.php">Kolkata</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="blog.php">Hyderabad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="blog.php">pune</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="blog.php">Gurgaon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-drpdn fs-15" href="blog.php">Noida</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a class="nav-link fs-15" href="blog.php">All Cities</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>