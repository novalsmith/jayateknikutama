<!-- all modal -->


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