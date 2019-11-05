<?php $this->load->view('headeradmin'); ?>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo" style="width:350px">

				<a style="    text-decoration: none;
    padding-top: 20px;
    /* margin-top: 10px; */
    font-size: 20pt;
    font-weight: bold;
    display: block;" class="text text-success " href="<?php echo base_url() . 'Welcome' ?>">Jaya Utama Teknik</a>

			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->

					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-calendar"></i>
							<?php echo date("D m M Y") ?>
						</a>

					</li>
					<!-- END TODO DROPDOWN -->
					<li class="droddown dropdown-separator">
						<span class="separator"></span>
					</li>
					<!-- BEGIN INBOX DROPDOWN -->

					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle" src="<?php echo base_url() ?>assets/metronic/assets/admin/layout3/img/avatar9.jpg">
							<span class="username username-hide-mobile">
								<?php echo $this->session->userdata('name'); ?>
							</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="<?php echo base_url() ?>webprofil">
									<i class="icon-user"></i> My Profile </a>
							</li>

							<li>
								<a href="<?php echo base_url() . 'Auth/logout' ?>">
									<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
						<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?php echo base_url() . 'Welcome' ?>">Dashboard</a>
					</li>
					<li class="menu-dropdown mega-menu-dropdown">
						<a href="<?php echo base_url('kategori') ?>" class="dropdown-toggle">
							Kategori <i class="fa fa-tasks"></i>
						</a>
					</li>


					<!-- <li class="menu-dropdown mega-menu-dropdown">
						<a href="<?php echo base_url('products') ?>" class="dropdown-toggle">
							Fitur <i class="fa fa-tasks"></i>
						</a>
					</li> -->

					<li class="menu-dropdown mega-menu-dropdown">
						<a href="<?php echo base_url('contact') ?>">
							Contact , About & Bantuan <i class="fa fa-info"></i>
						</a>
					</li>


					<li class="menu-dropdown mega-menu-dropdown">
						<a href="<?php echo base_url('products') ?>">
							Produk <i class="fa fa-bullseye"></i>
						</a>
					</li>

					<li class="menu-dropdown mega-menu-dropdown">
						<a href="<?php echo base_url('articles') ?>">
							Artikel <i class="fa fa-send"></i>
						</a>
					</li>

					<li class="menu-dropdown mega-menu-dropdown">
						<a href="<?php echo base_url('brand') ?>">
							Brand <i class="fa fa-male"></i>
						</a>
					</li>

					<li class="menu-dropdown mega-menu-dropdown">
						<a href="<?php echo base_url('galeri') ?>">
							Galeri <i class="fa fa-camera-retro"></i>
						</a>
					</li>




				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1><?php echo $judul ?></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->

		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<!-- <ul class="page-breadcrumb breadcrumb">
				
			     <?php
					foreach ($breadcrumb as $key => $value) {
						if ($value != '') {
							?>
                        <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a> <span class="divider">></span></li>
                        <?php } else { ?>
                        <li class="active"><?php echo $key; ?></li>
                        <?php }
						}
						?>  
			
				 
			</ul> -->
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">

					<?php $this->load->view($content); ?>


				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>


<?php $this->load->view('allmodal'); ?>

<?php $this->load->view('footeradminLibs'); ?>
<?php $this->load->view('footeradmin'); ?>