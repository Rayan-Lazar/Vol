<?php
session_start()


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Bourget Travel</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../images/1.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <!--[if lt IE 9]>

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <![endif]-->

</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="../../images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">
                            <ul>
                                <li><img src="../../images/1.png" alt="#"/> Aéroport Charle de Gaulle</li>
                                <li><img src="../../images/2.png" alt="#"/> +33 123456789</li>
                                <li><img src="../../images/3.png" alt="#"/> Aeroport@CDG.fr</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="../../index.php"><img src="../../images/logo.png" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="../../index.php">Home</a> </li>
                                    <?php if(isset($_SESSION['email'])){?>
                                        <li><a href="../traitement/user/modifier/Modifier.php">Modification</a></li>
                                        <li><a href="../traitement/user/deconnection/deconnection.php">Déconnexion</a></li>
                                    <?php }else{?>
                                        <li><a href="../traitement/user/login/login.php">Login</a></li>
                                        <li><a href="../traitement/user/inscription/inscription.php">Inscription</a></li>
                                    <?php }?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
<section >
    <div class="banner-main">
        <img src="../../images/banner.jpg" alt="#"/>
        <div class="container">
            <div class="text-bg">
                <h1>Eforlad<br><strong class="white">Amazing Tour</strong></h1>
                <div class="button_section"> <a class="main_bt" href="#">Read More</a>  </div>
                <div class="container">
                    <form action="Update_volBDD.php" method="post" class="main-form">
                        <h3>Modifier votre vol</h3>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Id</label>
                                        <input class="form-control" placeholder="" type="number" name="id_vol">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Date</label>
                                        <input class="form-control" placeholder="Any" type="date" name="date_depart">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Heure départ</label>
                                        <input class="form-control" placeholder="Any" type="time" name="heure_depart">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Heure arriver</label>
                                        <input class="form-control" placeholder="Any" type="time" name="heure_arrivee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Pilote</label>
                                        <input class="form-control" placeholder="" type="number" name="ref_pilote">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Avion</label>
                                        <input class="form-control" placeholder="" type="number" name="ref_avion">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <button class="form-control" type="submit">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<h3>Vol déjà réaliser</h3>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>Date depart</th>
        <th>Heure depart</th>
        <th>Heure d'arrivee</th>
        <th>Le pilote</th>
        <th>L'avion</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once '../BDD/BDD.php';
    require_once '../Modele/Vol.php';

    $vol = new Vol(array());
    foreach ($vol->setSelect() as $values){
        ?>
        <tr>
            <td><?php echo $values['date_depart']?></td>
            <td><?php  echo $values['heure_depart'] ?></td>
            <td><?php  echo $values['heure_arrivee'] ?></td>
            <td><?php  echo $values['ref_pilote'] ?></td>
            <td><?php  echo $values['ref_avion'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>$(document).ready( function () {
        $('#table_id').DataTable();
    } );</script>

<!-- footer -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="location_icon">
                        <li> <a href="#"><img src="../../icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="../../icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="../../icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="../../icon/instagram.png"></a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>CONTACT US</h3>
                        <span>123 Second Street Fifth <br>Avenue,<br>
                        Manhattan, New York<br>
                        +987 654 3210</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="link">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Terms and conditions</a></li>
                            <li> <a href="#"> Privacy policy</a></li>
                            <li> <a href="#">News</a></li>
                            <li> <a href="#"> Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3> Contact</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="Name" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="Email" type="text">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                            </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/plugin.js"></script>
<!-- sidebar -->
<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../js/custom.js"></script>
<!-- javascript -->
<script src="../../js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

</body>
</html>