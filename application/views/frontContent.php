<!-- all modal -->

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

          <li><a href="page-login.html">Log In</a></li>
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
                    $result .= "<li class='dropdown-submenu'> <a href=' " . $row['slugmenu'] . " '> {$row['menu']}</a>";
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

        <li><a href="#" href="#" target="_blank">Home</a></li>
        <li><a href="onepage-index.html" pd-popup-open="popupAbout" target="_blank">About</a></li>
        <li><a href="onepage-index.html" target="_blank">Produk</a></li>
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

<!-- BEGIN SLIDER -->

<div class="page-slider margin-bottom-35">
  <div id='loading'></div>
  <!-- LayerSlider start -->
  <div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">


    <div id="slidershowpage"></div>




    <!-- slide four start -->

    <!-- slide four end -->
  </div>
  <!-- LayerSlider end -->
</div>
<!-- END SLIDER -->

<div class="main">

  <div class="container">
    <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
    <div class="row margin-bottom-40">
      <!-- BEGIN SALE PRODUCT -->
      <div class="col-md-12 sale-product">
        <h2>Produk Terbaru</h2>
        <div class="owl-carousel owl-carousel4">

          <?php
          foreach ($produks as $key) {
            ?>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="<?php echo base_url() . 'assets/img/produk/' . $key->image ?>" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="<?php echo base_url() . 'assets/img/produk/' . $key->image ?>" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="<?php echo base_url() . $key->id . '/' . $key->slug ?>"> <?php echo $key->name ?> </a></h3>

              </div>
            </div>

          <?php }
          ?>






        </div>
      </div>
    </div>
    <!-- END SALE PRODUCT -->

    <!-- END SALE PRODUCT & NEW ARRIVALS -->

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40 ">

      <!-- BEGIN CONTENT -->
      <div class="col-md-9 col-sm-8">
        <h2>Product Info</h2>
        <div class="owl-carousel owl-carousel3">


          <?php
          foreach ($artikel as $key) {
            ?>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="<?php echo base_url() . 'assets/img/small/' . $key->image ?>" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="<?php echo base_url() . 'assets/img/small/' . $key->image ?>" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="<?php echo base_url() . $key->idartikel . '/' . $key->slug ?>"> <?php echo $key->title ?> </a></h3>

              </div>
            </div>

          <?php }
          ?>


        </div>
      </div>
      <!-- END CONTENT -->

      <!-- BEGIN SIDEBAR -->
      <div class="sidebar col-md-3 col-sm-4">
        <h2>Category Product Info</h2>
        <ul class="list-group margin-bottom-25 sidebar-menu">
          <span id="kat"></span>

        </ul>
      </div>
      <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR & CONTENT -->

    <!-- BEGIN TWO PRODUCTS & PROMO -->

  </div>
</div>

<!-- BEGIN BRANDS -->
<div class="brands">
  <div class="container">
    <div class="owl-carousel owl-carousel6-brands">


      <?php
      foreach ($brand as $key) {
        ?>
        <a href="shop-product-list.html">
          <img class="col-md-12 img-responsive" src="<?php echo base_url() . 'assets/img/brand/' . $key->filebrand ?>" alt="<?php echo $key->judul ?>" title="<?php echo $key->judul ?>"> </a>


      <?php }
      ?>


    </div>
  </div>
</div>
<!-- END BRANDS -->

<!-- BEGIN STEPS -->
<div class="steps-block steps-block-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 steps-block-col">
        <!-- <i class="fa fa-truck"></i> -->
        <div>
          <h2>Solusi Terbaik</h2>
          <em>Berbagai macam produk berkualitas tinggi</em>
        </div>
        <span>&nbsp;</span>
      </div>
      <div class="col-md-4 steps-block-col">
        <!-- <i class="fa fa-gift"></i> -->
        <div>
          <h2>Terpercaya</h2>
          <em> Kami memiliki pengalaman yang lama dalam memasok produk</em>
        </div>
        <span>&nbsp;</span>
      </div>
      <div class="col-md-4 steps-block-col">
        <i class="fa fa-phone"></i>
        <div>
          <h2 id="tlp1"></h2>
          <em>Hubungi kami untuk mendapatkan bantuan dan penawaran terbaik</em>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END STEPS -->

<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
  <div class="container">
    <div class="row">
      <!-- BEGIN BOTTOM ABOUT BLOCK -->
      <div class="col-md-3 col-sm-6 pre-footer-col">
        <h2>About us</h2>
        <p id="aboutus"> </p>
      </div>
      <!-- END BOTTOM ABOUT BLOCK -->
      <!-- BEGIN BOTTOM INFO BLOCK -->
      <div class="col-md-3 col-sm-6 pre-footer-col">
        <h2>BRANDS</h2>
        <ul class="list-unstyled">
          <span id="brandlist"></span>

        </ul>
      </div>
      <!-- END INFO BLOCK -->

      <!-- BEGIN TWITTER BLOCK -->
      <div class="col-md-3 col-sm-6 pre-footer-col">
        <h2>Office</h2>
        <p id="profiljtm"></p>


      </div>
      <!-- END TWITTER BLOCK -->

      <!-- BEGIN BOTTOM CONTACTS -->
      <div class="col-md-3 col-sm-6 pre-footer-col">
        <h2>Our Contacts</h2>
        <address class="margin-bottom-40" id="contactjtm">

        </address>
      </div>
      <!-- END BOTTOM CONTACTS -->
    </div>

  </div>
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer">
  <div class="container">
    <div class="row">
      <!-- BEGIN COPYRIGHT -->
      <div class="col-md-6 col-sm-6 padding-top-10">
        <?php echo date('Y') ?> © Jaya Teknik Utama.
      </div>
      <!-- END COPYRIGHT -->
      <!-- BEGIN PAYMENTS -->
      <div class="col-md-6 col-sm-6">

      </div>
      <!-- END PAYMENTS -->
    </div>
  </div>
</div>
<!-- END FOOTER -->

<!-- END fast view of a product -->
<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Modal Title</h4>
      </div>
      <div class="modal-body">
        Modal body goes here
      </div>
      <div class="modal-footer">
        <button type="button" class="btn default" data-dismiss="modal">Close</button>
        <button type="button" class="btn blue">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>