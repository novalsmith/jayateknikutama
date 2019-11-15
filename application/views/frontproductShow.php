 <div class="title-wrapper">
   <div class="container">
     <div class="container-inner">
       <h1 id="juduldetail"></h1>

       <div style="margin:2px"> <span class="text text-muted" style="color:white" id="ketkategori"></span></div>
       <div style="margin:2px;"> <small id="tagsviewskategori"></small></div>
     </div>
   </div>
 </div>

 <div class="main">
   <div class="container">
     <ul class="breadcrumb">
       <li><a href="<?php echo base_url() ?>">Home</a></li>
       <li><a href="<?php echo base_url('frontweb/product') ?>">Produk</a></li>
       <li class="active">Detail Produk</li>
     </ul>
     <!-- BEGIN SIDEBAR & CONTENT -->
     <div class="row margin-bottom-40">
       <!-- BEGIN SIDEBAR -->
       <div class="sidebar col-md-3 col-sm-5">
         <ul class="list-group margin-bottom-25 sidebar-menu">


           <span id="listkategori"></span>


         </ul>



       </div>
       <!-- END SIDEBAR -->
       <!-- BEGIN CONTENT -->
       <div class="col-md-9 col-sm-7">

         <!-- BEGIN PRODUCT LIST -->
         <div class="row product-list">
           <!-- PRODUCT ITEM START -->
           <div id="produkisi"></div>



           <?php
            $getid3 = $this->uri->segment(3);

            $getid4 = $this->uri->segment(4);
            $dbrow = $this->db->query("select * from products where id = " . $getid3 . " ");
            $row = $dbrow->row();
            $result = $dbrow->result();

            $dbrow = $this->db->query("select * from galeri where idmenu = " . $row->idmenu . " ");
            $rowsgaleri = $dbrow->row();
            $resultsgaleri = $dbrow->result();



            ?>

           <!-- BEGIN PROMO -->
           <div class="col-md-8 shop-index-carousel">
             <div class="content-slider">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                   <li data-target="#myCarousel" class="active" data-slide-to="0"></li>
                   <?php $no = 1;
                    foreach ($resultsgaleri as $data) { ?>
                     <li data-target="#myCarousel" data-slide-to="<?php echo $no; ?>"></li>
                   <?php $no++;
                    } ?>
                   <!--<li data-target="#myCarousel" data-slide-to="0"></li>-->
                   <!--<li data-target="#myCarousel" data-slide-to="1"></li>-->
                   <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                 </ol>
                 <div class="carousel-inner">
                   <div class="item active">
                     <img src="<?php echo base_url('assets/img/produk/') . $row->image  ?>" class="img-responsive" alt="<?php echo $row->name; ?>">
                   </div>
                   <?php $no = 0;
                    foreach ($resultsgaleri as $data) { ?>

                     <div class="item">

                       <img src="<?php echo base_url('assets/img/galeri/') . $data->foto  ?>" class="img-responsive" alt="<?php echo $data->judulfoto; ?>">

                     </div>

                   <?php $no++;
                    } ?>

                   <!--<div class="item active">-->
                   <!--  <img src="https://angular.io/generated/images/marketing/home/joyful-development.svg" class="img-responsive" alt="Berry Lace Dress">-->
                   <!--</div>-->
                   <!--<div class="item">-->
                   <!--  <img src="https://bs-uploads.toptal.io/blackfish-uploads/blog/post/seo/og_image_file/og_image/15991/top-18-most-common-angularjs-developer-mistakes-41f9ad303a51db70e4a5204e101e7414.png" class="img-responsive" alt="Berry Lace Dress">-->
                   <!--</div>-->
                   <!--<div class="item">-->
                   <!--  <img src="https://11m5ki43y82budjol1gjvv5s-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/whats-new-in-angular-min.jpg" class="img-responsive" alt="Berry Lace Dress">-->
                   <!--</div>-->
                 </div>
               </div>
             </div>
           </div>
           <!-- END PROMO -->
         </div>
         <!-- END TWO PRODUCTS & PROMO -->

         <div class="col-md-12">
           <p id="isicontentproduk"></p>
         </div>


       </div>



     </div>

     <div class="row margin-bottom-40">
       <!-- BEGIN SALE PRODUCT -->
       <div class="col-md-12 sale-product">
         <h2>Produk Terbaru</h2>
         <div class="owl-carousel owl-carousel5">

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


   </div>


   <!-- END PRODUCT LIST -->
   <!-- BEGIN PAGINATOR -->
   <!-- <div class="row">
          <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
          <div class="col-md-8 col-sm-8">
            <ul class="pagination pull-right">
              <li><a href="javascript:;">&laquo;</a></li>
              <li><a href="javascript:;">1</a></li>
              <li><span>2</span></li>
              <li><a href="javascript:;">3</a></li>
              <li><a href="javascript:;">4</a></li>
              <li><a href="javascript:;">5</a></li>
              <li><a href="javascript:;">&raquo;</a></li>
            </ul>
          </div>
        </div> -->
   <!-- END PAGINATOR -->
 </div>
 <!-- END CONTENT -->
 </div>
 <!-- END SIDEBAR & CONTENT -->
 </div>
 </div>