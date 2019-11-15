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

         <!-- <div class="sidebar">
  <h2>Category Product Info</h2>
  <ul class="list-group margin-bottom-25 sidebar-menu">
    <span id="kat"></span>

  </ul>
</div> -->

       </div>
       <!-- END SIDEBAR -->
       <!-- BEGIN CONTENT -->
       <div class="col-md-9 col-sm-7">

         <!-- BEGIN PRODUCT LIST -->
         <div class="row product-list">
           <!-- PRODUCT ITEM START -->
           <div id="produkisi"></div>



 

         
         </div>
         <!-- END TWO PRODUCTS & PROMO -->

         <div class="col-md-12">
           <p id="isicontentproduk"></p>
         </div>




       </div>



     </div>
 

     <div class="row margin-bottom-40 ">

<!-- BEGIN CONTENT -->
<div class="col-md-12 col-sm-8">
  <h2>Product Info</h2>
  <div class="owl-carousel owl-carousel5">


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

<!-- END SIDEBAR -->
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