<!-- BEGIN BRANDS -->
<!-- <div class="brands">
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
</div> -->
<!-- END BRANDS -->


<div class="container">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Hasil Pencarian</h1>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
         
		<div class="container">
		<div id="hasilpencarian"></div>		
		</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="tutup()" >Close</button>
     
      </div>
    </div>
  </div>
</div></div>

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
			<!-- <div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>BRANDS</h2>
				<ul class="list-unstyled">
					<span id="brandlist"></span>

				</ul>
			</div> -->
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
		const monthNames = ["January", "February", "March", "April", "May", "June",
			"July", "August", "September", "October", "November", "December"
		];



		var url = "";
		if (id2 == "Productshow") {
			url = "<?php echo site_url('frontweb/ProductshowGet/') ?>" + menuUrl;
			$.ajax({
				url: url,
				type: "GET",
				dataType: "JSON",
				success: function(data) {
					console.log(data);
					var res = data[0].tags.split(",");
					console.log(res);
					$.each(res, function(i, data) {

						$('#tagsviewskategori').append(` 
                 
                          
                                       
                                            <a href="javascript:;" style="color:white">
                                            <i class="fa fa-tags"></i> ` + data + ` </a>
                                      
                        `);
					});

					if (data.length < 1) {
						$('#juduldetail').text(data[0].name);
						$('#ketkategori').text('Produk Item tidak ditemukan');
						$('#produkisi').append("<h2>Produk Item tidak ditemukan</h2>");
					} else {
						const setdate = new Date(data[0].create_date);

						$('#juduldetail').text(data[0].name);
						$('#ketkategori').append("Posted :" + setdate.getDate() + " " + monthNames[setdate.getMonth()] + " " + setdate.getFullYear() + " #" + data[0].menu + " ");
						$('#isicontentproduk').append(data[0].description);
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
						<h3><a href="javascript:void(0)">` + value.name + `</a></h3>
  
				
						</div>
					</div> `;
							$('#produkisi').append(isi);
						});
					}
				}
			});
		} 
		
		else if(id2 == "artikeldetail"){

			url = "<?php echo site_url('frontweb/ArtikelAllwhere/') ?>" + id;
			$.ajax({
				url: url,
				type: "GET",
				dataType: "JSON",
				success: function(data) {
					console.log(data);
					var res = data[0].tags.split(",");
					console.log(res);
					$.each(res, function(i, data) {

						$('#tagsviewskategori').append(` 
                 
                           
                                            <a href="javascript:;" style="color:white">
                                            <i class="fa fa-tags"></i> ` + data + ` </a>
                                      
                        `);
					});

					if (data.length < 1) {
						$('#juduldetail').text(data[0].name);
						$('#ketkategori').text('Produk Item tidak ditemukan');
						$('#produkisi').append("<h2>Produk Item tidak ditemukan</h2>");
					} else {
						const setdate = new Date(data[0].create_date);

						$('#juduldetail').text(data[0].title);
						$('#ketkategori').append("Posted :" + setdate.getDate() + " " + monthNames[setdate.getMonth()] + " " + setdate.getFullYear() + " #" + data[0].menu + " ");
						$('#isicontentproduk').append(data[0].description);
					 
							var isi = `
						 <div class="col-md-12">
					  <img src="<?php echo base_url() ?>assets/img/small/` + data[0].image + `
					   " class="img-responsive col-md-8" alt="` + data[0].name + `">
							</div>
							<div class="col-md-12">
						<p>` + data[0].body + `</p>
   						</div> `;
							$('#produkisi').append(isi);
				 
					}
				}
			});




		}
		else {
			url = "<?php echo site_url('frontweb/ProductDetilByid/') ?>" + id;
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
					 <h3><a href="<?php echo base_url() . 'frontweb/Productshow/' ?>` + value.id + "/" + value.slug + ` ">` + value.name + `</a></h3> 

				
						</div>
					</div> `;
							$('#produkisi').append(isi);
						});
					}
				}
			});
		}

		var base = "<?php echo site_url('frontweb/ProductDetil/') ?>";

		$.ajax({
			url: "<?php echo site_url('frontweb/ProductKategori') ?>",

			type: "GET",
			dataType: "JSON",
			success: function(data) {
				// console.log(data);
				var isi = ``;
				$.each(data, function(key, value) {
					if (id == value.idmenu) {
						isi += `<li class="list-group-item clearfix active"><a href="` + base + value.idmenu + '/' + value.slugmenu + `">
									<i class="fa fa-angle-right"></i> ` + value.menu + `   <p class="badge badge-info"> ` + value.total + ` </p>        </a></li>`;
					} else {
						isi += `<li class="list-group-item clearfix"><a href="` + base + value.idmenu + '/' + value.slugmenu + `">
									<i class="fa fa-angle-right"></i> ` + value.menu + `      <p class="badge badge-info"> ` + value.total + ` </p>       </a></li>`;
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
				var isi = '';

				$.each(data, function(key, value) {

					isi += '  <div class="col-md-5">' +
						'<div class="product-item">' +
						'<div class="pi-img-wrapper">' +
						'<img src="<?php echo base_url() ?>assets/img/produk/' + value.image + ' " class="img-responsive" alt="' + value.name + '">' +
						'<div>' +
						'<a href="<?php echo base_url() ?>assets/img/produk/' + value.image + ' " class="btn btn-default fancybox-button">Zoom</a>' +

						'</div>' +
						'</div>' +
						'<h3><a href="<?php echo base_url() . 'frontweb/Productshow/' ?>' + value.id + "/" + value.slug + ' ">' + value.name + '</a></h3>' +


						'</div></div>  ';

					$('#produkisiAll').html(isi);

				});


			}
		});



		// artikel

		$.ajax({
			url: "<?php echo site_url('frontweb/ArtikelAll') ?>",
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				// console.log(data);

				$('#juduldetailproduk').text(data[0].menu);
				$('#ketkategoriproduk').text(data.length + ' Produk Item kategori ditemukan');
				var isi = '';

				$.each(data, function(key, value) {

					isi += '  <div class="col-md-5">' +
						'<div class="product-item">' +
						'<div class="pi-img-wrapper">' +
						'<img src="<?php echo base_url() ?>assets/img/small/' + value.image + ' " class="img-responsive" alt="' + value.title + '">' +
						'<div>' +
						'<a href="<?php echo base_url() ?>assets/img/small/' + value.image + ' " class="btn btn-default fancybox-button">Zoom</a>' +

						'</div>' +
						'</div>' +
						'<h3><a href="<?php echo base_url() . 'frontweb/artikeldetail/' ?>' + value.idartikel + "/" + value.slug + ' ">' + value.title + '</a></h3>' +


						'</div></div>  ';

					$('#artikelAll').html(isi);

				});


			}
		});

		// end artikel


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
            <a href="javascript:void(0)">
			  <i class="fa fa-angle-right"></i> ` + val.menu + `    <p class="badge badge-info"> ` + val.total + ` </p> </a>
 			 </li> `;
					$('#kat').append(kategori);
				});
				$('#tlp1').text(data.webprofil[0].tlp1);
				$('#tlp1jtm').text(data.webprofil[0].tlp1);
				$('#emailjtm').text(data.webprofil[0].email);
				$('#aboutus').html(data.about[0].keterangan);
				$('#contactjtm').html(data.contact[0].keterangan);
				$('#contactisi').html(data.contact[0].keterangan);
				$('#aboutisi').html(data.about[0].keterangan);
				$('#profiljtm').text(data.webprofil[0].profil);
				$('#nameweb').html(data.webprofil[0].namaweb);
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

	$("#pencarian").submit(function(event){
  event.preventDefault();
  $('#hasilpencarian').append("");
  var val =	$('#cari').val();
  if(val == ""){
	$('#seterror').text('Masih Kosong');
	setTimeout(function(){ 	$('#seterror').text(''); }, 1100);
 
  }else{
	

	$.ajax({
			url: "<?php echo site_url('frontweb/ResultSearching/') ?>"+val,
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				console.log(data);
				$.each(data, function(key, val) {
					// console.log(val);
					// if (val.total == 2) {
					// 	console.log(val);
					// }
					var kategori = `
		 
		 <div class="row" style="margin:15px">
		 <h1><a href="<?php echo base_url().'frontweb/Productshow/'?>`+val.id+"/"+val.slug+` ">`+val.name+`</a></h1>
		 <div><p>`+val.description.substring(0, 100);+`..</p></div>
		 </div>
		 
		  `;
					$('#hasilpencarian').append(kategori);
				});


				// $('#exampleModalCenter').modal('show');
				$('#exampleModalCenter').modal({
					backdrop: 'static',
					keyboard: false,
					show : true
				})
			}
		});




  }
  	
	 
});

 function tutup(){


	$('#exampleModalCenter').modal('hide');

				$('#hasilpencarian').html("");
	$('#cari').val("");
 }


</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>