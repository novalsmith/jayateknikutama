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



<!-- end of code footer -->

<!-- /.modal -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>  
    <![endif]-->
<script src="<?php echo base_url() ?>assetss/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assetss/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assetss/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assetss/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assetss/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="<?php echo base_url() ?>assetss/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="<?php echo base_url() ?>assetss/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
<script src='<?php echo base_url() ?>assetss/global/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
<script src="<?php echo base_url() ?>assetss/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

<!-- BEGIN LayerSlider -->
<script src="<?php echo base_url() ?>assetss/global/plugins/slider-layer-slider/js/greensock.js" type="text/javascript"></script><!-- External libraries: GreenSock -->
<script src="<?php echo base_url() ?>assetss/global/plugins/slider-layer-slider/js/layerslider.transitions.js" type="text/javascript"></script><!-- LayerSlider script files -->
<script src="<?php echo base_url() ?>assetss/global/plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script><!-- LayerSlider script files -->
<script src="<?php echo base_url() ?>assetss/frontend/pages/scripts/layerslider-init.js" type="text/javascript"></script>
<!-- END LayerSlider -->

<script src="<?php echo base_url() ?>assetss/frontend/layout/scripts/layout.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {

		var id = '<?php echo $this->uri->segment(3) ?>';
		var id2 = '<?php echo $this->uri->segment(2) ?>';
		var menuUrl = '<?php echo $this->uri->segment(4) ?>'; 

		var url ="";
		if(id2=="Productshow"){
			url =  "<?php echo site_url('frontweb/ProductshowGet/') ?>" + menuUrl;
		}else{
			url =  "<?php echo site_url('frontweb/ProductDetilByid/') ?>" + id;
			
		}

		$.ajax({
			url: url,

			type: "GET",
			dataType: "JSON",
			success: function(data) {
				console.log(data);
				if (data.length < 1) {
					$('#juduldetail').text(menuUrl);
					$('#ketkategori').text('Produk Item tidak ditemukan');
					$('#produkisi').append("<h2>Produk Item tidak ditemukan</h2>");

				} else {
					$('#juduldetail').text(data[0].menu);
					$('#ketkategori').text(data.length + ' Produk Item kategori ditemukan');

					$.each(data, function(key, value) {
						var isi = `
						 <div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
						<div class="pi-img-wrapper">
							<img src="<?php echo base_url() ?>assets/img/produk/` + value.image + ` " class="img-responsive" alt="` + value.name + `">
							<div>
							<a href="<?php echo base_url() ?>assets/img/produk/` + value.image + ` " class="btn btn-default fancybox-button">Zoom</a>
						 
							</div>
						</div>
						<h3><a href="shop-item.html">` + value.name + `</a></h3>
  
				
						</div>
					</div> `;
						$('#produkisi').append(isi);
					});


				}
			}
		});

var base = "<?php echo site_url('frontweb/ProductDetil/') ?>";
 
		$.ajax({
			url: "<?php echo site_url('frontweb/ProductKategori') ?>",
			
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				// console.log(data);
				var isi = ``;
					$.each(data, function(key, value) {

						if(id == value.idmenu ){
							isi += `<li class="list-group-item clearfix active"><a href="`+base+value.idmenu+'/'+value.slugmenu + `">
									<i class="fa fa-angle-right"></i> `+value.menu+`   <p class="badge badge-info"> ` + value.total + ` </p>        </a></li>`;
						}else{
							isi += `<li class="list-group-item clearfix"><a href="`+base+value.idmenu+'/'+value.slugmenu + `">
									<i class="fa fa-angle-right"></i> `+value.menu+`      <p class="badge badge-info"> ` + value.total + ` </p>       </a></li>`;
						}

						 
						 
						
					});
					$('#listkategori').append(isi);

				 
			}
		});

		$.ajax({
			url: "<?php echo site_url('frontweb/ProductDetilAll') ?>",

			type: "GET",
			dataType: "JSON",
			success: function(data) {
				// console.log(data);
			 
					$('#juduldetailproduk').text(data[0].menu);
					$('#ketkategoriproduk').text(data.length + ' Produk Item kategori ditemukan');
					var	isi = '';
					
					$.each(data, function(key, value) {
					 
					 	isi +='  <div class="col-md-5">'+
						'<div class="product-item">'+
						'<div class="pi-img-wrapper">'+
							'<img src="<?php echo base_url() ?>assets/img/produk/' + value.image + ' " class="img-responsive" alt="' + value.name + '">'+
							'<div>'+
							'<a href="<?php echo base_url() ?>assets/img/produk/' + value.image + ' " class="btn btn-default fancybox-button">Zoom</a>'+
						 
							'</div>'+
						'</div>'+
						'<h3><a href="shop-item.html">' + value.name + '</a></h3>'+
						
				
						'</div></div>  ';

				  
					$('#produkisiAll').html(isi);
					
					});
				

			 
			}
		});

		$.ajax({
			url: "<?php echo base_url('frontweb/jsonproduk_brand') ?>",
			type: "GET",
			dataType: "JSON",
			success: function(data) {


				$.each(data, function(key, value) {

					$('#brandlist').append(`  <li><i class="fa fa-angle-right"></i> <a href="` + value.idbrand + "/" + value.judul + `">` + value.judul + `</a></li>`);


					$('#brandmenu').append(` 
						      <a class="col-md-3" href="shop-product-list.html">
							  <img class="col-md-12 img-responsive" src="<?php echo base_url() ?>assets/img/brand/` + value.filebrand + ` 
							   " alt="` + value.judul + `" title="` + value.judul + `"></a>

						`);

				});
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});

		$.ajax({
			url: "<?php echo site_url('frontweb/jsonproduk_All') ?>",
			type: "GET",
			dataType: "JSON",

			success: function(data) {

				$.each(data.kategori, function(key, val) {
					// console.log(val);
					// if (val.total == 2) {
					// 	console.log(val);
					// }
					var kategori = `
						  <li class="list-group-item clearfix">
            <a href="` + val.slugmenu + `">
			  <i class="fa fa-angle-right"></i> ` + val.menu + `    <p class="badge badge-info"> ` + val.total + ` </p> </a>
 			 </li> `;

					$('#kat').append(kategori);

				});

				$('#tlp1').text(data.webprofil[0].tlp1);
				$('#tlp1jtm').text(data.webprofil[0].tlp1);
				$('#emailjtm').text(data.webprofil[0].email);
				$('#aboutus').html(data.about[0].keterangan);
				$('#contactjtm').html(data.contact[0].keterangan);
				$('#contactmenu').html(data.contact[0].keterangan);
				$('#aboutmenu').html(data.about[0].keterangan);
				$('#profiljtm').text(data.webprofil[0].profil);
				$('#nameweb').html(data.webprofil[0].namaweb);




			}
		});



		$("#loading").html("<h1>Loading...</h1>");
		$.ajax({
			url: "<?php echo site_url('frontweb/jsonproduk') ?>",
			type: "GET",
			dataType: "JSON",

			success: function(data) {
				$("#loading").html("");
				// console.log(data.data[0].name);
				var temp = data.data;
				var tmp = ``;
				if (data.total <= 1) {
					tmp += ` 
      <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">
      <img src="<?php echo base_url() ?>assets/img/produk/` + data.data[0].image + `  " class="ls-bg" alt="Slide background">
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
        <a style="    text-shadow: 2px 2px 4px #444444; color: black;
  -webkit-text-fill-color: white ; 
  -webkit-text-stroke-width: 1px;
  " href="">` + data.data[0].name + `</a>
      </div>
  </div>
         `;
					$('#slidershowpage').html(tmp);
				} else {

					$.each(temp, function(key, value) {
						// console.log(value.image);
						tmp += ` 
                                     <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

      <img src="<?php echo base_url() ?>assets/img/produk/` + value.image + `  " class="ls-bg" alt="Slide background">

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
        <a style="    text-shadow: 2px 2px 4px #444444; color: black;
  -webkit-text-fill-color: white ; 
  -webkit-text-stroke-width: 1px;
  " href="">` + value.name + `</a>
      </div>
  </div>
		 `;
						$('#slidershowpage').html(tmp);
					});
				}




			}
		});



		Layout.init();
		Layout.initOWL();
		LayersliderInit.initLayerSlider();
		Layout.initImageZoom();
		Layout.initTouchspin();
		Layout.initTwitter();
	});

	$(function() {
		//----- OPEN
		$('[pd-popup-open]').on('click', function(e) {
			var targeted_popup_class = jQuery(this).attr('pd-popup-open');
			$('[pd-popup="' + targeted_popup_class + '"]').fadeIn(200);

			e.preventDefault();
		});

		//----- CLOSE
		$('[pd-popup-close]').on('click', function(e) {
			var targeted_popup_class = jQuery(this).attr('pd-popup-close');
			$('[pd-popup="' + targeted_popup_class + '"]').fadeOut(200);

			e.preventDefault();
		});
	});
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>