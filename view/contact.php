<!DOCTYPE html>
<html lang="en-US">


<!-- page-contact-us01:32-->
<head>
    <meta charset="utf-8"/>
    <title>Nous contacter</title>
    <link rel="icon" type="image/png" href="../public/img/fav.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="../public/css/animate.css" />
    <!-- owl Carousel assets -->
    <link href="../public/css/owl.carousel.css" rel="stylesheet">
    <link href="../public/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- hover anmation -->
    <link rel="stylesheet" href="../public/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="../public/css/flag-icon.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- elegant icon -->
    <link rel="stylesheet" href="../public/css/elegant_icon.css">

    <!-- jquery library  -->
    <script src="../public/js/jquery-3.2.1.min.js"></script>
    <!-- fontawesome  -->
    <link rel="stylesheet" href="../public/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/contact.css">
</head>


<body>
    <!--  Header  -->
    <header class="background-white">
            <div class="header-output">
                <div class="header-output">
                    <div class="header-in">
                        <div class="container">
                            <div class="position-relative">
                                <div class="row">
                                    <div class="col-lg-3 col-md-12">
                                        <a id="logo" href="home-1.html" class="d-inline-block margin-tb-15px"><img src="" alt=""></a>
                                        <a class="mobile-toggle padding-15px background-white border-radius-50" href="#"><i class="fa fa-bars"></i></a>
                                    </div>
                                    <div class="col-lg-7 col-md-12 position-inherit">
                                        <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px dropdown-dark">
                                            <li class="has-dropdown"><a href="../index.php"><b>Accueil</b></a>
                                            </li>
                                            <li class="has-dropdown"><a href="#"><b>A propos </b></a>
                                                <ul class="sub-menu">
                                                    <li><a href="fonction.php">A propos de Shared-server</a></li>
                                                    <li><a href="team.php">Notre équipe</a></li>											  
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="gallery.php"><b>Gallérie </b></a>
                                            </li>
                                            <li class="has-dropdown"><a href="contact.php"><b>Nous Contacter </b></a>
                                            </li>
                                            <li class="has-dropdown"><a href="#"><b>Téléchargement</b></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Télécharger Shared-server pour Linux</a></li>
                                                    <li><a href="#">Télécharger Shared-server pour Windows</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="d-none d-xl-block pull-right model-link margin-top-15px">
                                            <a id="cart-link" class="model-link margin-right-25px text-dark opacity-hover-8" href="../index.php?action=inscrire">
                                                                        <span></span><i class="fa fa-plus"></i>
                                                              </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12  d-none d-lg-block">
                                        <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#" class="btn btn-sm border-radius-30 margin-tb-12px text-dark  background-white  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                            <i class="fa fa-sign-in margin-right-10px"></i>  Se connecter
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- // Header  -->

    <!-- Se connecter -->
    <div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content margin-top-150px background-main-color">
                <div class="row no-gutters">

                    <div class="col-lg-7">
                        <div class="padding-30px">
                            <h3 class="padding-bottom-15px">Se connecter</h3>
                            <form method="POST" action="../index.php?action=se_connecter" >
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Entrez votre adresse Email</label>
                                        <input type="text" class="form-control" id="inputName4" placeholder="Nom d'utilisateur ou adresse email" name="name_or_email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label> Entrez votre mot de passe</label>
                                        <input type="password" class="form-control" id="inputEmail4" placeholder="Mot de passe" name="passwd" required>
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="SE CONNECTER"/>
                                <a href="oublier.html"> <h4> Mot de passe oublié ?</h4></a>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if(isset($verify)){       
                    if($verify == 'error')
                    {                           
                        echo '<font color="red">Nom d\'utilisateur incorrecte</font>';
                    }
                    elseif($verify == 'error_mdp'){
                        echo '<font color="red">Mot de passe incorrecte</font>';
                    }
                }
            ?>
        </div>
    </div>
    <!-- // Se connecter  -->


    <div class="page-title">
        <div class="container">
            <div class="padding-tb-120px">
                <h1>Nous contacter</h1>
                <ol class="breadcrumb">
                    <li><a href="ss1.html">Accueil</a></li>
                    <li class="active">Nous contacter</li>
                </ol>
            </div>
        </div>
    </div>


    <div class="padding-tb-100px">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 sm-mb-45px">
                    <p>Vous aimeriez avoir de nos nouvelles, n'hésitez pas à nous contacter si vous avez des questions concernant nos produits ou nos services. </p>
                    <h5>Téléphone :</h5>
                    <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i> +261329903072</span>
                    <h5 class="margin-top-20px">Addresse :</h5>
                    <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i> Antananarivo 101 </span>
                    <h5 class="margin-top-20px">Email :</h5>
                    <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i> landry.manankoraisina.rasendranirina@esti.mg</span>
                </div>

                <div class="col-lg-6">
                    <div class="contact-modal">
                        <div class="background-main-color" id="back">
                            <div class="padding-30px">
                                <h3 class="padding-bottom-15px">Nous contacter</h3>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nom complet</label>
                                            <input type="text" class="form-control" id="inputName44" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="inputEmail44" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
                                    </div>
                                    <a href="#" class="btn-sm btn-lg btn-block background-white text-dark text-center  text-uppercase rounded-0 padding-15px">ENVOYER</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>


    <footer class="layout-dark">
        <div class="copy-right">
            <div class="container padding-tb-50px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text text-lg-left text-center sm-mb-15px"><a target="_blank" href="shared-server.esti.mg">Shared-server</a> </div>
                    </div>
                    <div class="col-lg-6">
                        <!--  Social -->
                        <ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="../public/js/YouTubePopUp.jquery.js"></script>

    <script src="../public/js/imagesloaded.min.js"></script>
    <script src="../public/js/custom.js"></script>
    <script src="../public/js/popper.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>

</body>


<!-- page-contact-us01:32-->
</html>
