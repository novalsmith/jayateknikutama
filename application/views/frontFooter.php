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

	                $.ajax({
	                        url: "<?php echo site_url('frontweb/jsonproduk') ?>",
	                        type: "GET",
	                        dataType: "JSON",
	                        success: function(data) {
	                            console.log(data[0]);
	                         var   tmp = `
                                     <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

      <img src="<?php echo base_url() ?>assetss/frontend/pages/img/layerslider/slide1/bg1.jpg" class="ls-bg" alt="Slide background">

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
  " href="">`+data[0].name+`</a>
      </div>
  </div>
         `;

 $('#layerslider').append(tmp);
                            }
	                        });



	                    Layout.init(); Layout.initOWL(); LayersliderInit.initLayerSlider(); Layout.initImageZoom(); Layout.initTouchspin(); Layout.initTwitter();
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