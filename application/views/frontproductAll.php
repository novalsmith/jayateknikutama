 


<div class="title-wrapper">
  <div class="container">
    <div class="container-inner">
      <h1 id="juduldetailproduks">Produk</h1>
      <!-- <em id="ketkategoriproduk"></em> -->
    </div>
  </div>
</div>

<div class="main">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo base_url().'frontweb' ?>">Home</a></li>
    
      <li class="active">Produk</li>
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
        <div class="row list-view-sorting clearfix">
          <div class="col-md-2 col-sm-2 list-view">
            <a href="javascript:;"><i class="fa fa-th-large"></i></a>
            <a href="javascript:;"><i class="fa fa-th-list"></i></a>
          </div>
          <div class="col-md-12 col-sm-12">
<!-- 
            <div class="pull-right">
              <div class="form-group">
                <label class="control-label">Sort By Brand:</label>
                <select class="form-control col-md-12 input-lg">
                  <option value="0" selected="selected">Default</option>
                  <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                  <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                  <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                  <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                  <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                  <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                  <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                  <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                </select>
              </div>
            </div> -->
          </div>
        </div>
        <!-- BEGIN PRODUCT LIST -->
        <div class="row product-list">
          <!-- PRODUCT ITEM START -->
         <div id="produkisiAll"></div>
      
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