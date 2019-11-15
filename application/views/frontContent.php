<!-- all modal -->


<!-- BEGIN SLIDER -->

<div class="page-slider margin-bottom-35">
  <div id='loading'></div>
  <!-- LayerSlider start -->
  <div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">

    <!-- <div id="slidershowpage"></div> -->

    <?php
    $totalrow = $this->db->query('select count(*) as total from products where slideshow =1')->row();
    $this->db->where('slideshow', 1);

    ?>
    <?php if ($totalrow->total <= 1) { ?>
      <?php $data = $this->db->get('products')->row(); ?>
      <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">
        <img src="<?php echo base_url() ?>assets/img/produk/<?php echo $data->image ?>" class="ls-bg" alt="Slide background">
        <div class="ls-l ls-title" style=" display: inline-block;  
    width: 500px; padding:0px;     font-weight: 400;
     top:50%; left:70%;    line-height: 55px; 
    text-align: center;" data-ls="
          fade: true; 
          fadeout: true; 
          durationin: 750; 
          durationout: 750; 
          easingin: easeOutQuint; 
          rotatein: 90; 
          rotateout: -90; 
          scalein: .5; 
          scaleout: .5; 
          ">
          <a style="text-shadow: 2px 2px 4px #444444; color: black;
  -webkit-text-fill-color: white ; 
  -webkit-text-stroke-width: 1px;" href="<?php echo  $data->name ?>"> </a>
        </div>
      </div>
    <?php } else { ?>


      <?php
        $dataloop = $this->db->get('products')->result();
        foreach ($dataloop as  $data) { ?>




        <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

          <img src="<?php echo base_url() ?>assets/img/produk/<?php echo $data->image ?>  " class="ls-bg" alt="Slide background">

          <div class="ls-l ls-title" style=" display: inline-block;  
    width: 500px; padding:0px;     font-weight: 400;
     top:50%; left:70%;    line-height: 55px; 
    text-align: center;" data-ls="
          fade: true; 
          fadeout: true; 
          durationin: 750; 
          durationout: 750; 
          easingin: easeOutQuint; 
          rotatein: 90; 
          rotateout: -90; 
          scalein: .5; 
		  scaleout: .5; 
		   showuntil: 4000;
          ">
            <a style="    text-shadow: 2px 2px 4px #444444; color: black;  -webkit-text-fill-color: white ;  -webkit-text-stroke-width: 1px;"
              href="<?php echo base_url('frontweb/Productshow/') . $data->id . '/' . $data->slug ?>"> <?php echo $data->name ?> </a>

          </div>
        </div>
      <?php }  ?>
    <?php } ?>

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
                  <img src="<?php echo base_url() . 'assets/img/produk/' . $key->image ?>" class="img-responsive" alt="<?php echo $key->name ?>">
                  <div>
                    <a href="<?php echo base_url() . 'assets/img/produk/' . $key->image ?>" class="btn btn-default fancybox-button">Zoom</a>
                    <!-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a> -->
                  </div>
                </div>
                <h3><a href="<?php echo base_url('frontweb/Productshow/') . $key->id . '/' . $key->slug ?>"> <?php echo $key->name ?> </a></h3>

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
                    <!-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a> -->
                  </div>
                </div>
                <h3><a href="<?php echo base_url()."frontweb/artikeldetail/". $key->idartikel . '/' . $key->slug ?>"> <?php echo $key->title ?> </a></h3>

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