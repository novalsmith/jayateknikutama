<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->



<!-- Head BEGIN -->

<head>
  <meta charset="utf-8">
  <title>Metronic Shop UI</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->
  <link href="<?php echo base_url() ?>assetss/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url() ?>assetss/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/global/plugins/slider-layer-slider/css/layerslider.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/global/plugins/slider-layer-slider/skins/fullwidth/skin.css" rel="stylesheet">

  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url() ?>assetss/global/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/frontend/layout/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assetss/frontend/pages/css/style-layer-slider.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/frontend/layout/css/themes/turquoise.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url() ?>assetss/frontend/layout/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assetss/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
  <!-- file:///E:/metronic-master/theme/assets/global/plugins/slider-layer-slider/skins/fullwidth/skin.css -->
  <style>
    .pi-price-habis {
      color: red;
      font: 18px 'PT Sans Narrow', sans-serif;
      float: left;
      padding-top: 1px;
    }

    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:300,400,400i,500,700');

    /* font-family: 'Roboto', sans-serif; font-family: 'Roboto Slab', serif; */

    body {
      background: #fff;
      color: #414141;
      font-family: 'Roboto', sans-serif;
      font-size: 16px;
      overflow-x: hidden;
      -webkit-text-stroke: rgba(255, 255, 255, 0.01) 0.1px;
      -webkit-font-smoothing: antialiased !important;
    }

    a {
      text-decoration: none;
      -ms-transition: all 0.3s ease-in;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
    }

    a:hover,
    a:focus,
    a:active {
      outline: medium none;
      text-decoration: none;
    }

    *:focus {
      outline: none;
    }

    img {
      max-width: 100%, height: auto;
    }

    strong,
    b {
      font-weight: 700;
    }

    i,
    em {
      font-style: italic;
    }

    .clear {
      border: 0;
      clear: both;
      height: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
      font-weight: normal;
      margin: 0;
    }

    input,
    textarea {
      -webkit-appearance: none;
      border-radius: 0;
    }

    h1,
    h2,
    h3,
    h4,
    .my-jumbotron.jumbotron h1 {
      font-family: 'Roboto Slab', serif;
    }

    .btn.btn-success {
      position: absolute;
      height: 50px;
      width: 200px;
      line-height: 2.2;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      margin: auto;
      font-size: 18px;
      text-transform: uppercase;
    }

    .popup {
      width: 100%;
      height: 100%;
      display: none;
      position: fixed;
      z-index: 5;
      top: 0px;
      left: 0px;
      background: rgba(0, 0, 0, 0.75);
    }

    .popup {
      text-align: center;
    }

    .popup:before {
      content: '';
      display: inline-block;
      height: 100%;
      margin-right: -4px;
      vertical-align: middle;
    }

    .popup-inner {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
      position: relative;
      max-width: 700px;
      width: 90%;
      padding: 40px;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 1);
      border-radius: 3px;
      background: #fff;
      text-align: center;
    }

    .popup-inner h1 {
      font-family: 'Roboto Slab', serif;
      font-weight: 700;
    }

    .popup-inner p {
      font-size: 24px;
      font-weight: 400;
    }

    .popup-close {
      width: 34px;
      height: 34px;
      padding-top: 4px;
      display: inline-block;
      position: absolute;
      top: 20px;
      right: 20px;
      -webkit-transform: translate(50%, -50%);
      transform: translate(50%, -50%);
      border-radius: 100%;
      background: transparent;
      border: solid 4px #808080;
    }

    .popup-close:after,
    .popup-close:before {
      content: "";
      position: absolute;
      top: 11px;
      left: 5px;
      height: 4px;
      width: 16px;
      border-radius: 30px;
      background: #808080;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .popup-close:after {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    .popup-close:hover {
      -webkit-transform: translate(50%, -50%) rotate(180deg);
      transform: translate(50%, -50%) rotate(180deg);
      background: #f00;
      text-decoration: none;
      border-color: #f00;
    }

    .popup-close:hover:after,
    .popup-close:hover:before {
      background: #fff;
    }
  </style>
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">


  <div class="container">
    <div class="popup" pd-popup="popupNew">
      <div class="popup-inner">
        <h1>Brand</h1>

        <span id="brandmenu"></span>

        <!-- <p><a pd-popup-close="popupNew" href="#" class="btn btn-danger">Close</a></p> -->
        <a class="popup-close" pd-popup-close="popupNew" href="#"> </a>
      </div>
    </div>
  </div>

  <!-- all modal -->

  <!-- all modal contact-->
  <div class="container">
    <div class="popup" pd-popup="popupContact">
      <div class="popup-inner">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h2>Contact Us</h2>
            <address class="margin-bottom-40" id="contactmenu">

            </address>


          </div>

        </div>


        <!-- <p><a pd-popup-close="popupContact" href="#" class="btn btn-danger">Close</a></p> -->
        <a class="popup-close" pd-popup-close="popupContact" href="#"> </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="popup" pd-popup="popupAbout">
      <div class="popup-inner">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h2>About Us</h2>
            <address class="margin-bottom-40" id="aboutmenu">

            </address>


          </div>

        </div>


        <!-- <p><a pd-popup-close="popupContact" href="#" class="btn btn-danger">Close</a></p> -->
        <a class="popup-close" pd-popup-close="popupAbout" href="#"> </a>
      </div>
    </div>
  </div>
  <!-- all modalcontact-->





  <!-- BEGIN TOP BAR -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <!-- BEGIN TOP BAR LEFT PART -->
        <div class="col-md-6 col-sm-6 additional-shop-info">
          <ul class="list-unstyled list-inline">
            <li><i class="fa fa-phone"></i><span id="tlp1jtm"></span></li>
            <li><i class="fa fa-book"></i><span id="emailjtm"></span></li>
            <!-- BEGIN CURRENCIES -->

            <!-- END CURRENCIES -->
            <!-- BEGIN LANGS -->

            <!-- END LANGS -->
          </ul>
        </div>
        <!-- END TOP BAR LEFT PART -->
        <!-- BEGIN TOP BAR MENU -->
        <div class="col-md-6 col-sm-6 additional-nav">
          <ul class="list-unstyled list-inline pull-right">

            <li><a href="<?php echo base_url().'auth' ?>">Log In</a></li>
          </ul>
        </div>
        <!-- END TOP BAR MENU -->
      </div>
    </div>
  </div>
  <!-- END TOP BAR -->

  <!-- BEGIN HEADER -->
  <div class="header">
    <div class="container">
      <a class="site-logo" href="<?php echo base_url('frontweb') ?>">
        <img src="<?php echo base_url() ?>assetss/jutlogo.png" alt="Metronic Shop UI">
        <!-- <h1 style="font-weight: bold;">JAYA UTAMA TEKNIK</h1> -->
      </a>
      <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

      <div class="header-navigation">
        <ul>
          <li class="dropdown dropdown-megamenu">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              ALL Category <i class="fa fa-bars"></i>

            </a>
            <ul class="dropdown-menu">
              <li>
                <?php
                function has_children($rows, $id)
                {
                  foreach ($rows as $row) {
                    if ($row['parentid'] == $id) { // untuk dapat sub menu 
                      return true;
                    }
                  }
                  return false;
                }
                function build_menu($rows, $parent = 0)
                {


                  $result = "<ul>";
                  foreach ($rows as $row) {
                    if ($row['parentid'] == $parent) {
                      $result .= "<li class='dropdown-submenu'> <a href=' " .base_url('frontweb/ProductDetil/'). $row['idmenu'].'/'.$row['slugmenu'] . " '> {$row['menu']}</a>";
                      if (has_children($rows, $row['idmenu'])) { // pengecekan sub menu
                        $result .= " <i  class='fa fa-angle-right'></i> <ul class='dropdown-menu' role='menu'> " . build_menu($rows, $row['idmenu']) . "</ul>";
                      }
                      $result .= "</li>";
                    }
                  }
                  $result .= "</ul>";
                  return $result;
                }

                $rows = $this->db->query('select * from kategorimenu')->result_array();
                echo build_menu($rows, 0);

                ?>


                <ul>

                </ul>


              </li>
            </ul>

          </li>
        </ul>
      </div>



      <!-- <a href="javascript:void(0);" class="top-cart-info-value">Info Terbaru</a> -->


      <!-- BEGIN NAVIGATION -->
      <div class="header-navigation pull-right">
        <ul>

          <li><a href="<?php echo base_url().'frontweb' ?>">Home</a></li>
          <li><a href="javascript:void(0)" pd-popup-open="popupAbout" target="_blank">About</a></li>
          <li><a href="<?php echo base_url().'frontweb/Product' ?>" >Produk</a></li>
          <li><a href="#" pd-popup-open="popupNew" target="_blank">Brand</a></li>
          <li><a href="onepage-index.html" target="_blank">Artikel</a></li>
          <li><a href="#" pd-popup-open="popupContact" target="_blank">Contact</a></li>



          <!-- BEGIN TOP SEARCH -->
          <li class="menu-search">
            <span class="sep"></span>
            <i class="fa fa-search search-btn"></i>
            <div class="search-box">
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </span>
                </div>
              </form>
            </div>
          </li>
          <!-- END TOP SEARCH -->
        </ul>
      </div>
      <!-- END NAVIGATION -->
    </div>
  </div>
  <!-- Header END -->