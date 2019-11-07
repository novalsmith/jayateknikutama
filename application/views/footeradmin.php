 <script>
 	// $(document).ready(function () {
 	//   // Set timer to check if user is idle
 	//   var idleTimer;
 	//   $(this).mousemove(function(e){
 	//     // clear prior timeout, if any
 	//     window.clearTimeout(idleTimer);

 	//     // create new timeout (3 mins)
 	//     idleTimer = window.setTimeout(isIdle, 102000);
 	//   });

 	//   function isIdle() {
 	//     alert("3 mins have passed without moving the mouse.");
 	//   }
 	// });


 	jQuery(document).ready(function() {
 		Metronic.init(); // init metronic core components
 		Layout.init(); // init current layout
 		Demo.init(); // init demo features

 	});
 </script>

 <script type="text/javascript">
 	var save_method;
 	var table;


 	$(document).ready(function() {


 		$('.ui-pnotify').remove();


 		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
 			return {
 				"iStart": oSettings._iDisplayStart,
 				"iEnd": oSettings.fnDisplayEnd(),
 				"iLength": oSettings._iDisplayLength,
 				"iTotal": oSettings.fnRecordsTotal(),
 				"iFilteredTotal": oSettings.fnRecordsDisplay(),
 				"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
 				"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
 			};
 		};


 		var t = $("#mytableFaq").dataTable({
 			initComplete: function() {
 				var api = this.api();
 				$('#mytableFaq_filter input')
 					.off('.DT')
 					.on('keyup.DT', function(e) {
 						if (e.keyCode == 13) {
 							api.search(this.value).draw();
 						}
 					});
 			},
 			oLanguage: {
 				sProcessing: "loading..."
 			},
 			processing: true,
 			serverSide: true,
 			ajax: {
 				"url": "faq/json",
 				"type": "POST"
 			},
 			columns: [{
 					"data": "idfaq",
 					"orderable": false
 				}, {
 					"data": "judul",
 					"render": function(data, type, full, meta) {
 						return data.substr(0, 25) + "...";
 					}
 				},
 				{
 					"data": "action",
 					"orderable": false,
 					"className": "text-center"
 				}
 			],
 			order: [
 				[0, 'desc']
 			],
 			rowCallback: function(row, data, iDisplayIndex) {
 				var info = this.fnPagingInfo();
 				var page = info.iPage;
 				var length = info.iLength;
 				var index = page * length + (iDisplayIndex + 1);
 				$('td:eq(0)', row).html(index);
 			}
 		});

 		var t = $("#mytablekategori").dataTable({
 			initComplete: function() {
 				var api = this.api();
 				$('#mytable_filter input')
 					.off('.DT')
 					.on('keyup.DT', function(e) {
 						if (e.keyCode == 13) {
 							api.search(this.value).draw();
 						}
 					});
 			},
 			oLanguage: {
 				sProcessing: "loading..."
 			},
 			processing: true,
 			serverSide: true,
 			ajax: {
 				"url": "kategori/json",
 				"type": "POST"
 			},
 			columns: [{
 					"data": "idmenu",
 					"orderable": false
 				},
 				{
 					"data": "parentmenu",
 					"render": function(parent, type, full, meta) {
 						var datastatus = "";
 						if (parent == 'Parent') {
 							datastatus = "<p class='label label-sm label-primary'>Parent</p>";
 						} else {

 							datastatus = parent;

 						}
 						return datastatus;
 					}
 				},
 				{
 					"data": "menu"
 				},

 				{
 					"data": "slugmenu"
 				},

 				{
 					"data": "status",

 					"render": function(statusaktif, type, full, meta) {
 						var datastatus = "";
 						if (statusaktif == 1) {
 							datastatus = "<p class='label label-sm label-success'>Aktif</p>";
 						} else {

 							datastatus = "<p class='label label-sm label-warning'>Tidak</p>";

 						}
 						return datastatus;
 					}

 				},
 				{
 					"data": "action",
 					"orderable": false,
 					"className": "text-center"
 				}
 			],
 			order: [
 				[0, 'desc']
 			],
 			rowCallback: function(row, data, iDisplayIndex) {
 				var info = this.fnPagingInfo();
 				var page = info.iPage;
 				var length = info.iLength;
 				var index = page * length + (iDisplayIndex + 1);
 				$('td:eq(0)', row).html(index);
 			}
 		});







 		var t1 = $("#mytableartikel").dataTable({

 			initComplete: function() {
 				var api = this.api();
 				$('#mytable_filter input')
 					.off('.DT')
 					.on('keyup.DT', function(e) {
 						if (e.keyCode == 13) {
 							api.search(this.value).draw();
 						}
 					});
 			},

 			oLanguage: {
 				sProcessing: "loading..."
 			},
 			processing: true,
 			serverSide: true,

 			ajax: {
 				"url": "articles/json",
 				"type": "POST"
 			},
 			columns: [{
 					"data": "idartikel",
 					"orderable": false
 				}, {
 					"data": "menu"
 				}, {
 					"data": "title"
 				},


 				{
 					"data": "status",

 					"render": function(statusaktif, type, full, meta) {
 						var datastatus = "";
 						if (statusaktif == 1) {
 							datastatus = "<p class='label label-sm label-success'>Aktif</p>";
 						} else {

 							datastatus = "<p class='label label-sm label-warning'>Tidak</p>";

 						}
 						return datastatus;
 					}

 				},


 				{
 					"data": "action",
 					"orderable": false,
 					"className": "text-center"
 				}
 			],
 			order: [
 				[0, 'desc']
 			],
 			// select: true,
 			// scrollY: 400,
 			// scrollX: true,
 			rowCallback: function(row, data, iDisplayIndex) {
 				var info = this.fnPagingInfo();
 				var page = info.iPage;
 				var length = info.iLength;
 				var index = page * length + (iDisplayIndex + 1);
 				$('td:eq(0)', row).html(index);
 			}
 		});


 		//  pesanan


 		var t = $("#mytablePesanan").dataTable({
 			initComplete: function() {
 				var api = this.api();
 				$('#mytable_filter input')
 					.off('.DT')
 					.on('keyup.DT', function(e) {
 						if (e.keyCode == 13) {
 							api.search(this.value).draw();
 						}
 					});
 			},
 			oLanguage: {
 				sProcessing: "loading..."
 			},
 			processing: true,
 			serverSide: true,
 			ajax: {
 				"url": "pesanan/json",
 				"type": "POST"
 			},
 			columns: [{
 					"data": "idpesanan",
 					"orderable": false
 				}, {
 					"data": "name"
 				}, {
 					"data": "qty"
 				}, {
 					"data": "total"
 				},
 				{
 					"data": "status",

 					"render": function(status, type, full, meta) {
 						var datastatus = "";
 						if (status == 1) {
 							datastatus = "<p class='label label-sm label-success'>Selesai</p>";
 						} else if (status == 0) {

 							datastatus = "<p class='label label-sm label-warning'>Belum</p>";

 						} else {
 							datastatus = "<p class='label label-sm label-danger'>Sudah diabil</p>";
 						}
 						return datastatus;
 					}

 				}, {
 					"data": "action",
 					"orderable": false,
 					"className": "text-center"
 				}
 			],
 			order: [
 				[0, 'desc']
 			],
 			rowCallback: function(row, data, iDisplayIndex) {
 				var info = this.fnPagingInfo();
 				var page = info.iPage;
 				var length = info.iLength;
 				var index = page * length + (iDisplayIndex + 1);
 				$('td:eq(0)', row).html(index);
 			}
 		});

 		// end pesanan


 		$('#mytableproduk').on('click', '.view_produk', function() {
 			save_method = 'view';
 			var id = $(this).data('view');


 			// ajax adding data to database
 			$.ajax({
 				url: "<?php echo site_url('products/update/') ?>" + id,
 				type: "GET",
 				dataType: "JSON",
 				success: function(data) {

 					console.log(data);
 					var res = data.data["tags"].split(",");

 					$('.judul').text(data.data['name']);
 					document.getElementById("viewimg").src = "<?php echo base_url('assets/img/produk/') ?>" + data.data['image'];
 					$('.tglview').text(tglindonesia(data.data['create_date']));

 					$.each(res, function(i, data) {
 						$('#tagsviews').append(` 
                 
                          
                                        <li>
                                            <a href="javascript:;">
                                            <i class="fa fa-tags"></i> ` + data + ` </a>
                                        </li></ul>
                        `);
 					});

 					$('.isiview').append('<p>' + data.data['description'] + '</p>');

 					$('#modal_form_view_artikel').modal({
 						show: true,
 						keyboard: false,
 						backdrop: 'static'
 					});
 				},
 				error: function(jqXHR, textStatus, errorThrown) {
 					alert('Error View data');


 				}

 			});


 		});



 		var produk = $("#mytableproduk").dataTable({
 			initComplete: function() {
 				var api = this.api();
 				$('#mytable_filter input')
 					.off('.DT')
 					.on('keyup.DT', function(e) {
 						if (e.keyCode == 13) {
 							api.search(this.value).draw();
 						}
 					});
 			},
 			oLanguage: {
 				sProcessing: "loading..."
 			},
 			processing: true,
 			serverSide: true,
 			ajax: {
 				"url": "products/json",
 				"type": "POST"
 			},
 			columns: [{
 					"data": "id",
 					"orderable": false
 				},
 				{
 					"data": "name"
 				},
 				{
 					"data": "menu"
 				},

 				{
 					"data": "slideshow",

 					"render": function(slide, type, full, meta) {
 						var datastatus = "";
 						if (slide == 1) {
 							datastatus = "<p class='label label-sm label-success'>Aktif</p>";
 						} else {

 							datastatus = "<p class='label label-sm label-default'>Tidak</p>";

 						}
 						return datastatus;
 					}
 				},

 				{
 					"data": "status",

 					"render": function(slide, type, full, meta) {
 						var datastatus = "";
 						if (slide == 1) {
 							datastatus = "<p class='label label-sm label-info'>Aktif</p>";
 						} else {

 							datastatus = "<p class='label label-sm label-warning'>Tidak</p>";

 						}
 						return datastatus;
 					}
 				},

 				{
 					"data": "action",
 					"orderable": false,
 					"className": "text-center"
 				}
 			],
 			order: [
 				[0, 'desc']
 			],
 			rowCallback: function(row, data, iDisplayIndex) {
 				var info = this.fnPagingInfo();
 				var page = info.iPage;
 				var length = info.iLength;
 				var index = page * length + (iDisplayIndex + 1);
 				$('td:eq(0)', row).html(index);
 			}
 		});


 		var t = $("#mytablegaleri").dataTable({
 			initComplete: function() {
 				var api = this.api();
 				$('#mytable_filter input')
 					.off('.DT')
 					.on('keyup.DT', function(e) {
 						if (e.keyCode == 13) {
 							api.search(this.value).draw();
 						}
 					});
 			},
 			oLanguage: {
 				sProcessing: "loading..."
 			},
 			processing: true,
 			serverSide: true,
 			ajax: {
 				"url": "galeri/json",
 				"type": "POST"
 			},
 			columns: [{
 					"data": "idgalery",
 					"orderable": false
 				}, {
 					"data": "menu"
 				},
 				{
 					"data": "Total",
 					"orderable": false,
 					"className": "text-center"
 				},
 				{
 					"data": "action",
 					"orderable": false,
 					"className": "text-center"
 				}
 			],
 			order: [
 				[0, 'desc']
 			],
 			rowCallback: function(row, data, iDisplayIndex) {
 				var info = this.fnPagingInfo();
 				var page = info.iPage;
 				var length = info.iLength;
 				var index = page * length + (iDisplayIndex + 1);
 				$('td:eq(0)', row).html(index);
 			}
 		});

 		var t = $("#mytablebrand").dataTable({
 			initComplete: function() {
 				var api = this.api();
 				$('#mytable_filter input')
 					.off('.DT')
 					.on('keyup.DT', function(e) {
 						if (e.keyCode == 13) {
 							api.search(this.value).draw();
 						}
 					});
 			},
 			oLanguage: {
 				sProcessing: "loading..."
 			},
 			processing: true,
 			serverSide: true,
 			ajax: {
 				"url": "brand/json",
 				"type": "POST"
 			},
 			columns: [{
 					"data": "idbrand",
 					"orderable": false
 				}, {
 					"data": "judul"
 				}, {
 					"data": "filebrand",
 					"render": function(img, type, full, meta) {
 						var datastatus = "";
 						if (img != "") {
 							datastatus = "<a target='blank' href=' <?php echo base_url('assets/img/brand/') ?>" + img + " ' class='label label-sm label-success'>View Img</a>";
 						} else {

 							datastatus = "<a href='javascript:void(0)' class='label label-sm label-danger'>No Img</a>";

 						}
 						return datastatus;
 					}
 				},
 				{
 					"data": "action",
 					"orderable": false,
 					"className": "text-center"
 				}
 			],
 			order: [
 				[0, 'desc']
 			],
 			rowCallback: function(row, data, iDisplayIndex) {
 				var info = this.fnPagingInfo();
 				var page = info.iPage;
 				var length = info.iLength;
 				var index = page * length + (iDisplayIndex + 1);
 				$('td:eq(0)', row).html(index);
 			}
 		});


 		$('#mytablekategori').on('click', '.delete_record', function() {
 			save_method = 'delete_kategori';
 			var idmenu = $(this).data('code');
 			var menu = $(this).data('menu');
 			$('#modal_form_delete').modal('show');
 			$('#pesanheader').text('Anda Yakin Menghapus Kategori ? ');
 			$('#pesan').text(menu);
 			$('#idmenu').val(idmenu);
 			$('#btnSave').text('Hapus'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable
 		});


 		$('#mytableFaq').on('click', '.delete_record', function() {
 			save_method = 'delete_faq';
 			var idfaq = $(this).data('code');
 			var judul = $(this).data('judul');
 			$('#modal_form_delete').modal('show');
 			$('#pesanheader').text('Anda Yakin Menghapus Kategori ? ');
 			$('#pesan').text(judul);
 			$('#idfaq').val(idfaq);
 			$('#btnSave').text('Hapus'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable
 		});
 		// End delete Records


 		$('#mytableartikel').on('click', '.delete_artikel', function() {
 			save_method = 'delete_artikel';
 			var idartikel = $(this).data('code');
 			var judul = $(this).data('judul');
 			$('#modal_form_delete').modal('show');
 			$('#pesanheader').text('Anda Yakin Menghapus Artikel ? ');
 			$('#pesan').text(judul);
 			$('#idartikel').val(idartikel);
 			$('#btnSave').text('Hapus'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable
 		});


 		$('#mytableproduk').on('click', '.delete_produk', function() {
 			save_method = 'delete_produk';
 			var idproduk = $(this).data('code');
 			var judul = $(this).data('judul');
 			$('#modal_form_delete').modal('show');
 			$('#pesanheader').text('Anda Yakin Menghapus Produk ? ');
 			$('#pesan').text(judul);
 			$('#idproduk').val(idproduk);
 			$('#btnSave').text('Hapus'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable
 		});
 		// End delete Records


 		$('#mytablebrand').on('click', '.delete_brand', function() {
 			save_method = 'delete_brand';
 			var idbrand = $(this).data('code');
 			var judul = $(this).data('judul');
 			$('#modal_form_delete').modal('show');
 			$('#pesanheader').text('Anda Yakin Menghapus Brand ? ');
 			$('#pesan').text(judul);
 			$('#idbrand').val(idbrand);
 			$('#btnSave').text('Hapus'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable
 		});

 		$('#mytableartikel').on('click', '.view_artikel', function() {
 			save_method = 'view';
 			var id = $(this).data('view');



 			// ajax adding data to database
 			$.ajax({
 				url: "<?php echo site_url('articles/Editget_by_id/') ?>" + id,
 				type: "GET",
 				dataType: "JSON",
 				success: function(data) {
 					console.log(data);
 					var res = data.data["tags"].split(",");

 					$('.judul').text(data.data['title']);
 					document.getElementById("viewimg").src = "<?php echo base_url('assets/img/small/') ?>" + data.data['image'];
 					$('.tglview').text(tglindonesia(data.data['create_date']));

 					$.each(res, function(i, data) {
 						$('#tagsviews').append(` 
				 
						  
                                        <li>
                                            <a href="javascript:;">
                                            <i class="fa fa-tags"></i> ` + data + ` </a>
                                        </li></ul>
					   	`);
 					});

 					$('.isiviews').append('<p>' + data.data['body'] + '</p>');

 					$('#modal_form_view_artikel').modal({
 						show: true,
 						keyboard: false,
 						backdrop: 'static'
 					});
 				},
 				error: function(jqXHR, textStatus, errorThrown) {
 					alert('Error View data');


 				}

 			});


 		});


 		$('#mytableartikel').on('click', '.view_artikel', function() {
 			save_method = 'view';
 			var id = $(this).data('view');



 			// ajax adding data to database
 			$.ajax({
 				url: "<?php echo site_url('articles/Editget_by_id/') ?>" + id,
 				type: "GET",
 				dataType: "JSON",
 				success: function(data) {

 					var res = data.data["tags"].split(",");

 					$('.judul').text(data.data['title']);
 					document.getElementById("viewimg").src = "<?php echo base_url('assets/img/small/') ?>" + data.data['image'];
 					$('.tglview').text(tglindonesia(data.data['create_date']));

 					$.each(res, function(i, data) {
 						$('#tagsview').append(` 
				 
						  
                                        <li>
                                            <a href="javascript:;">
                                            <i class="fa fa-tags"></i> ` + data + ` </a>
                                        </li></ul>
					   	`);
 					});

 					$('.isiview').append('<p>' + data.data['body'] + '</p>');

 					$('#modal_form_view_artikel').modal({
 						show: true,
 						keyboard: false,
 						backdrop: 'static'
 					});
 				},
 				error: function(jqXHR, textStatus, errorThrown) {
 					alert('Error View data');


 				}

 			});


 		});








 		// $('#mytablePesanan').on('click', '.view_pesanan', function() {
 		// 	save_method = 'view';
 		// 	var id = $(this).data('code');


 		// 	// ajax adding data to database
 		// 	$.ajax({
 		// 		url: "<?php echo site_url('pesanan/jsonPesanan/') ?>" + id,
 		// 		type: "GET",
 		// 		dataType: "JSON",
 		// 		success: function(data) {
 		// 			// console.log(data);
 		// 			$('#myModalLabelc').text('Detail Pemesanan');
 		// 			$('#Nama').text(data.nama);
 		// 			$('#Email').text(data.email);
 		// 			$('#tlp').text(data.phone);
 		// 			$('#idpesanan').text(data.idpesanan);
 		// 			$('#tglpesan').text(data.dateorder);
 		// 			$('#tglambil').text(data.datefinish);
 		// 			if (data.status == 0) {
 		// 				$('#statuspesanan').addClass("label label-warning");
 		// 				$('#statuspesanan').text("Belum Selesai");
 		// 				$("#statuspesanandetil").val(0);


 		// 				// set table detail pesanan
 		// 				$.ajax({
 		// 					url: "<?php echo site_url('pesanan/jsonPesananAll/') ?>" + id,
 		// 					type: "GET",
 		// 					dataType: "JSON",
 		// 					success: function(data) {
 		// 						var kolom = '';
 		// 						var totals = 0;
 		// 						var tmp = [];
 		// 						// $("#table").append("<tr><td>A4</td><td>1000</td><td>warna</td><td>5</td><td>Rp.5000</td></tr>");
 		// 						$.each(data, function(key, value) {
 		// 							// console.log(key + ": " + value["name"]);
 		// 							kolom += '<tr>';
 		// 							kolom += '<td>' + value["nama_kategori"] + '</td>';

 		// 							if (value['bworcolor'] == 1) {
 		// 								kolom += '<td>Hitam Putih</td>';
 		// 							} else if (value['bworcolor'] == 2) {
 		// 								kolom += '<td>Warna</td>';
 		// 							} else {
 		// 								kolom += '<td>Jilid</td>';
 		// 							}



 		// 							if (value['bworcolor'] == 1) {
 		// 								kolom += '<td>Rp.' + value["hargaBW"] + '</td>';
 		// 								totals = value['hargaBW'] * value['qty']
 		// 							} else if (value['bworcolor'] == 2) {

 		// 								kolom += '<td>Rp.' + value["hargaColor"] + '</td>';
 		// 								totals = value['hargaColor'] * value['qty']
 		// 							} else {

 		// 								kolom += '<td>Rp.' + value["hargajilid"] + '</td>';
 		// 								totals = value['hargajilid'] * value['qty']
 		// 							}

 		// 							kolom += '<td>' + value["qty"] + '</td>';
 		// 							kolom += '<td id="alltotal">Rp.' + totals + '</td>';

 		// 							kolom += '</tr>';



 		// 						});
 		// 						$("#table").append(kolom);


 		// 						$.ajax({
 		// 							url: "<?php echo site_url('pesanan/jsonPesananCount/') ?>" + id,
 		// 							type: "GET",
 		// 							dataType: "JSON",
 		// 							success: function(data) {
 		// 								$('#totalsemua').text(' Rp.' + data.total);
 		// 							}

 		// 						});
 		// 					}


 		// 					// set table detail pesanan



 		// 				});





 		// 			} else {
 		// 				$('#statuspesanan').addClass("label label-success");
 		// 				$('#statuspesanan').text("Selesai");
 		// 				$("#statuspesanandetil").val(1);
 		// 			}


 		// 			$('#modal_form_view_pesanan').modal({
 		// 				show: true,
 		// 				keyboard: false,
 		// 				backdrop: 'static'
 		// 			});
 		// 		},
 		// 		error: function(jqXHR, textStatus, errorThrown) {
 		// 			alert('Error View data');


 		// 		}

 		// 	});


 		// });



 		// web profile

 		$.ajax({
 			url: "<?php echo site_url('webprofil/json') ?>",
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {

 				$('.name').text(data[0].name);
 				$('.pwd').text(data[0].password);
 				$('.em').text(data[0].email);
 				$('.iduser').text(data[0].iduser);

 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error View data');


 			}

 		});

 		$.ajax({
 			url: "<?php echo site_url('webprofil/jsonprofil') ?>",
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {

 				$('#idprofil').text(data[0].idwebprofil);
 				$('#profiltxt').text(data[0].profil);
 				$('#namatxt').text(data[0].namaweb);
 				$('#emailtxt').text(data[0].email);
 				$('#tlp1txt').text(data[0].tlp1);
 				$('#tlp2txt').text(data[0].tlp2);
 				$('#tlp3txt').text(data[0].tlp3);
 				$('#medsosfbtxt').text(data[0].fb);
 				$('#medsosigtxt').text(data[0].ig);


 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error View data');


 			}

 		});



 	}); //end document ready


 	function bantuan() {
 		var judul = $("#judul").val();
 		var ket = CKEDITOR.instances['bantuan'].getData();
 		var id = $('#idhidden').val();
 		if (judul == "" || ket == "") {
 			alert("Periksa lagi, masih ada form yang kosong ");
 		} else {

 			var urls = "";
 			if (save_method == "update") {
 				urls = "<?php echo site_url('contact/update_action_faq') ?>";
 			} else {
 				urls = "<?php echo site_url('contact/jsonBantuan') ?>";
 			}



 			$.ajax({
 				url: urls,
 				type: "POST",
 				dataType: "JSON",
 				data: {
 					judul: judul,
 					ket: ket,
 					id: id
 				},
 				success: function(data) {
 					// console.log(data);

 					if (data.judul != "") {
 						Swal.fire({
 							position: 'top-end',
 							type: 'success',
 							title: judul + 'Berhasi tersimpan ',
 							showConfirmButton: false,
 							timer: 2700
 						})
 						setTimeout(function() {

 						}, 2500);

 						$("#judul").val("");
 						CKEDITOR.instances['bantuan'].setData("");
 						save_method = "add";
 						$('#judulfaq').text("Tambah Bantuan");
 					} else {
 						Swal.fire({
 							position: 'top-end',
 							type: 'danger',
 							title: 'Gagal tersimpan ',
 							showConfirmButton: false,
 							timer: 2700
 						})
 						setTimeout(function() {

 						}, 2500);
 					}

 					reload_table();

 				},
 				error: function(jqXHR, textStatus, errorThrown) {
 					alert('Error View data');


 				}

 			});

 		}
 	}

 	function ubahuser() {
 		var iduser = $('.iduser').text();
 		var name = $('.name').text();
 		var pwd = $('.pwd').text();
 		var em = $('.em').text();


 		$('#idusers').text(iduser);
 		$('#namax').val(name);
 		$('#password').val(pwd);
 		$('#email').val(em);

 		$('.modal_form_user').modal({
 			show: true,
 			keyboard: false,
 			backdrop: 'static'
 		});
 	}

 	function saveuser() {
 		var iduser = $('#idusers').text();
 		var namauser = $('#namax').val();
 		var passworduser = $('#password').val();
 		var emailuser = $('#email').val();

 		$.ajax({
 			url: "<?php echo site_url('webprofil/updateuser') ?>",
 			type: "POST",
 			dataType: "JSON",
 			data: {
 				id: iduser,
 				nama: namauser,
 				pwd: passworduser,
 				email: emailuser
 			},
 			success: function(data) {


 				Swal.fire({
 					position: 'top-end',
 					type: 'success',
 					title: 'User Berhasil Diubah ',
 					showConfirmButton: false,
 					timer: 2700
 				})
 				setTimeout(function() {
 					location.reload();
 				}, 2500);

 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error View data');


 			}

 		});
 	}

 	function ubahprofil() {
 		var id = $('#idprofil').text();
 		var profil = $('#profiltxt').text();
 		var namaweb = $('#namatxt').text();
 		var email = $('#emailtxt').text();
 		var tlp1 = $('#tlp1txt').text();
 		var tlp2 = $('#tlp2txt').text();
 		var tlp3 = $('#tlp3txt').text();
 		var fb = $('#medsosfbtxt').text();
 		var ig = $('#medsosigtxt').text();


 		$('#idwebprofil').val(id);
 		$('#profil').val(profil);
 		$('#namaweb').val(namaweb);
 		$('#emailweb').val(email);
 		$('#tlp1').val(tlp1);
 		$('#tlp2').val(tlp2);
 		$('#tlp3').val(tlp3);
 		$('#fb').val(fb);
 		$('#ig').val(ig);



 		$('.modal_form_profil').modal({
 			show: true,
 			keyboard: false,
 			backdrop: 'static'
 		});
 	}


 	function saveprofil() {
 		var id = $('#idwebprofil').val();
 		var profil = $('#profil').val();
 		var namaweb = $('#namaweb').val();
 		var emailweb = $('#emailweb').val();
 		var tlp1 = $('#tlp1').val();
 		var tlp2 = $('#tlp2').val();
 		var tlp3 = $('#tlp3').val();
 		var fb = $('#fb').val();
 		var ig = $('#ig').val();
 		$.ajax({
 			url: "<?php echo site_url('webprofil/updateprofil') ?>",
 			type: "POST",
 			dataType: "JSON",
 			data: {
 				id: id,
 				profil: profil,
 				namaweb: namaweb,
 				email: emailweb,
 				tlp1: tlp1,
 				tlp2: tlp2,
 				tlp3: tlp3,
 				fb: fb,
 				ig: ig
 			},
 			success: function(data) {
 				// console.log(data);
 				Swal.fire({
 					position: 'top-end',
 					type: 'success',
 					title: ' Profil Berhasil Diubah ',
 					showConfirmButton: false,
 					timer: 2700
 				})
 				setTimeout(function() {
 					location.reload();
 				}, 2500);

 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error View data');


 			}

 		});
 	}

 	function deletekategori() {

 		var id;
 		var idmenu = $('#idmenu').val();
 		var namakategori = $('#pesan').text();
 		var idartikel = $('#idartikel').val();
 		var idproduk = $('#idproduk').val();
 		var idfaq = $('#idfaq').val();
 		var idbrand = $('#idbrand').val();


 		if (save_method == 'delete_kategori') {
 			url = "<?php echo site_url('kategori/delete/') ?>" + idmenu;

 		} else if (save_method == 'delete_artikel') {
 			url = "<?php echo site_url('articles/delete/') ?>" + idartikel;


 		} else if (save_method == 'delete_produk') {
 			url = "<?php echo site_url('products/delete/') ?>" + idproduk;
 		} else if (save_method == "delete_faq") {
 			url = "<?php echo site_url('contact/deletefaq/') ?>" + idfaq;
 		} else if (save_method == "delete_brand") {
 			url = "<?php echo site_url('brand/delete/') ?>" + idbrand;
 		}





 		// ajax adding data to database
 		$.ajax({
 			url: url,
 			type: "POST",
 			data: $('#form_delete').serialize(),
 			dataType: "JSON",
 			contentType: false,
 			cache: false,
 			processData: false,
 			success: function(data) {
 				// console.log(data);
 				if (data.status == true && save_method == 'delete_artikel') //if success close modal and reload ajax table
 				{


 					Swal.fire({
 						position: 'top-end',
 						type: 'success',
 						title: ' Berhasil Terhapus ' + data.data["title"],
 						showConfirmButton: false,
 						timer: 2700
 					})



 				} else if (data.status == true && save_method == 'delete_kategori') {

 					Swal.fire({
 						position: 'top-end',
 						type: 'success',
 						title: 'Kategori ' + data.data + ' \n Berhasil Terhapus ',
 						showConfirmButton: false,
 						timer: 2700
 					})


 				} else if (data.status == true && save_method == 'delete_produk') {

 					Swal.fire({
 						position: 'top-end',
 						type: 'success',
 						title: 'Kategori ' + data.data["name"] + ' \n Berhasil Terhapus ',
 						showConfirmButton: false,
 						timer: 2700
 					})


 				} else if (data.status == true && save_method == 'delete_faq') {

 					Swal.fire({
 						position: 'top-end',
 						type: 'success',
 						title: data.data + ' \n Berhasil Terhapus ',
 						showConfirmButton: false,
 						timer: 2700
 					})

 					$("#judul").val("");
 					CKEDITOR.instances['bantuan'].setData("");
 					save_method = "add";
 					$('#judulfaq').text("Tambah Bantuan");


 				} else if (data.status == true && save_method == 'delete_brand') {

 					Swal.fire({
 						position: 'top-end',
 						type: 'success',
 						title: data.data + ' \n Berhasil Terhapus ',
 						showConfirmButton: false,
 						timer: 2700
 					})




 				} else {
 					Swal.fire({
 						position: 'top-end',
 						type: 'danger',
 						title: 'Gagal terhapus, coba lagi',
 						showConfirmButton: false,
 						timer: 2700
 					})
 				}


 				$('#modal_form_delete').modal('hide');
 				reload_table();
 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error adding / update data');
 				$('#btnSave').text('save'); //change button text
 				$('#btnSave').attr('disabled', false); //set button enable 

 			}
 		});

 	}

 	function tutup() {
 		$('#modal_form_artikel').modal('hide');

 		// $('#mytableartikel').DataTable().ajax.reload();
 		location.reload();

 	}

 	function prosesubahstatus() {
 		var id = $('#idpesanan').text();
 		var status = $('#statuspesanandetil').val();

 		var url = "<?php echo site_url('pesanan/update_status') ?>";
 		$.ajax({
 			url: url,
 			type: "POST",
 			data: {
 				idpesanan: id,
 				status: status
 			},
 			dataType: "JSON",

 			success: function(data) {
 				// console.log(data);
 				if (data.status != '') {
 					Swal.fire({
 						position: 'top-end',
 						type: 'success',
 						title: 'Status Berhasil diubah',
 						showConfirmButton: false,
 						timer: 2700
 					})

 					if (data.status == 0) {
 						$('#statuspesanan').removeClass("label label-danger");
 						$('#statuspesanan').removeClass("label label-success");
 						$('#statuspesanan').addClass("label label-warning");
 						$('#statuspesanan').text("Belum Selesai");
 						$("#statuspesanandetil").val(0);
 					} else if (data.status == 1) {
 						$('#statuspesanan').removeClass("label label-danger");
 						$('#statuspesanan').removeClass("label label-warning");
 						$('#statuspesanan').addClass("label label-success");
 						$('#statuspesanan').text("Selesai");
 						$("#statuspesanandetil").val(1);
 					} else {
 						$('#statuspesanan').removeClass("label label-warning");
 						$('#statuspesanan').removeClass("label label-success");
 						$('#statuspesanan').addClass("label label-danger");
 						$('#statuspesanan').text("Sudah diambil");
 						$("#statuspesanandetil").val(1);
 					}
 				} else {
 					Swal.fire({
 						position: 'top-end',
 						type: 'danger',
 						title: 'Status Gagal diubah',
 						showConfirmButton: false,
 						timer: 2700
 					})
 				}

 			}
 		});
 	}



 	function add_kategori() {
 		save_method = 'add';
 		$('#form')[0].reset(); // reset form on modals


 		$('.modal_form_Kategori').modal({
 			show: true,
 			keyboard: false,
 			backdrop: 'static'
 		});

 	}

 	function add_brand() {
 		save_method = 'add';
 		$('#form_brand')[0].reset(); // reset form on modals


 		$('.modal_form_Brand').modal({
 			show: true,
 			keyboard: false,
 			backdrop: 'static'
 		});

 	}


 	$('#mytablebrand').on('click', '.edit_artikel', function() {
 		$('#form_brand')[0].reset();
 		var id = $(this).data('code');
 		save_method = 'update';

 		// 		Ajax Load data from ajax
 		$.ajax({
 			url: "<?php echo site_url('brand/jsonEdit') ?>/" + id,
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {
 				console.log(data);
 				$('#judulbrand').val(data.judul);
 				document.getElementById("gambarbrand").src = "<?php echo base_url('assets/img/brand/') ?>" + data.filebrand;
 				// $('#gambars').html("<img width='200' src='<?php echo base_url('assets/img/brand/') ?>  " + data.filebrand + "  ' ");
 				// $('#subkategori').val(data.menu);
 				// $('#status').val(data.status);

 				// $('#filebrand').val(data.filebrand);
 				$('#idbrand').val(data.idbrand);

 				$('.modal_form_Brand').modal({
 					show: true,
 					keyboard: false,
 					backdrop: 'static'
 				});
 				$('.modal-title').text('Edit Brand'); // Set title to Bootstrap modal title



 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error get data from ajax');
 			}
 		});


 	});

 	function add_brand() {
 		save_method = 'add';
 		$('#form')[0].reset(); // reset form on modals


 		$('.modal_form_Brand').modal({
 			show: true,
 			keyboard: false,
 			backdrop: 'static'
 		});

 	}





 	$(document).on('show.bs.modal', '.modal', function(event) {

 		var zIndex = 1040 + (10 * $('.modal:visible').length);
 		$(this).css('z-index', zIndex);
 		setTimeout(function() {
 			$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
 		}, 0);
 	});


 	function cancel_kategoriSelected() {
 		save_method = 'add';
 		$('#form')[0].reset(); // reset form on modals
 		$('.form-group').removeClass('has-error'); // clear error class
 		$('.help-block').empty(); // clear error string
 		$('#modal_form').modal('hide'); // show bootstrap modal
 		$('#modal_form_artikel').modal('show'); // show bootstrap modal
 		$('.modal-title').text('Tambah Kategori'); // Set Title to Bootstrap modal title

 	}


 	function getkategori() {
 		$.ajax({
 			url: "<?php echo base_url('artikel/selectKategori') ?>",
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {

 				$('#idkategoriartikel').empty();
 				$('#idkategoriartikel').append('<option value="">Pilih Kategori</option>');
 				$.each(data, function(key, value) {
 					$('#idkategoriartikel').append('<option value="' + value.idkategoriartikel + '">' + value.namaartikel + '</option>');
 				});



 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error get data from ajax');
 			}
 		});
 	}


 	function getkategoriTag() {
 		$.ajax({
 			url: "<?php echo base_url('artikel/selectKategori') ?>",
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {

 				$('#idkategoriartikelTag').empty();
 				$('#idkategoriartikelTag').append('<option value="">Pilih Tag Artikel</option>');
 				$.each(data, function(key, value) {
 					$('#idkategoriartikelTag').append('<option value="' + value.idkategoriartikel + '">' + value.namaartikel + '</option>');
 				});



 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error get data from ajax');
 			}
 		});
 	}



 	// $('#idkategoriartikel').each(function() {
 	// 	var $select = $(this);

 	// 	$.ajax({
 	// 		url: "<?php echo base_url('kategori/selectKategori') ?>",
 	// 		type: "GET",
 	// 		dataType: "json",
 	// 	}).then(function(options) {
 	// 		options.map(function(option) {


 	// 			var $option = $('<option>');

 	// 			$option
 	// 				.val(option.idkategori)
 	// 				.text(option.nama_kategori);

 	// 			$select.append($option);
 	// 		});
 	// 	});


 	// });


 	// $('#idkategoriproduk').each(function() {
 	// 	var $select = $(this);

 	// 	$.ajax({
 	// 		url: "<?php echo base_url('kategori/selectKategori') ?>",
 	// 		type: "GET",
 	// 		dataType: "json",
 	// 	}).then(function(options) {
 	// 		options.map(function(option) {


 	// 			var $option = $('<option>');

 	// 			$option
 	// 				.val(option.idkategori)
 	// 				.text(option.nama_kategori);

 	// 			$select.append($option);
 	// 		});
 	// 	});


 	// });





 	function tglindonesia(e) {
 		var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

 		var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

 		var date = new Date(e);

 		var day = date.getDate();

 		var month = date.getMonth();

 		var thisDay = date.getDay(),

 			thisDay = myDays[thisDay];

 		var yy = date.getYear();

 		var year = (yy < 1000) ? yy + 1900 : yy;

 		var times = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
 		return times;
 	}




 	function add_artikel() {
 		save_method = 'add';
 		$('#form_artikel')[0].reset(); // reset form on modals
 		$('.form-group').removeClass('has-error'); // clear error class
 		$('.help-block').empty(); // clear error string
 		//$('#modal_form_artikel').modal('show'); // show bootstrap modal
 		$('.judul').text('Tambah Artikel Baru'); // Set Title to Bootstrap modal title
 		$("#form_artikel").trigger('reset');
 		$('#modal_form_artikel').modal({
 			show: true,
 			keyboard: false,
 			backdrop: 'static'
 		});
 	}



 	function add_produk() {
 		save_method = 'add';
 		// $('#form_artikel')[0].reset(); // reset form on modals
 		$('.form-group').removeClass('has-error'); // clear error class
 		$('.help-block').empty(); // clear error string
 		//$('#modal_form_artikel').modal('show'); // show bootstrap modal
 		$('.judul').text('Tambah Produk Baru'); // Set Title to Bootstrap modal title
 		//  $("#form_artikel").trigger('reset');
 		$('#modal_form_produk').modal({
 			show: true,
 			keyboard: false,
 			backdrop: 'static'
 		});
 	}

 	function reload_table() {
 		// table.ajax.reload(null,false); //reload datatable ajax 
 		$('#mytablekategori').DataTable().ajax.reload();
 		$('#mytableartikel').DataTable().ajax.reload();
 		$('#mytableproduk').DataTable().ajax.reload();
 		$('#mytableFaq').DataTable().ajax.reload();
 		$('#mytablebrand').DataTable().ajax.reload();


 	}



 	$('#mytablekategori').on('click', '.edit_record', function() {

 		var id = $(this).data('code');


 		// 		Ajax Load data from ajax
 		$.ajax({
 			url: "<?php echo site_url('kategori/update') ?>/" + id,
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {
 				$('#parentid').val(data.parentid);
 				$('#subkategori').val(data.menu);
 				$('#status').val(data.status);

 				$('#idmenu').val(data.idmenu);

 				$('.modal_form_Kategori').modal('show'); // show bootstrap modal when complete loaded

 				$('.modal-title').text('Edit Kategori'); // Set title to Bootstrap modal title

 				save_method = 'update';

 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error get data from ajax');
 			}
 		});
 	});

 	$('#mytableFaq').on('click', '.edit_record', function() {

 		var id = $(this).data('code');
 		$('#idhidden').val(id);


 		// 		Ajax Load data from ajax
 		$.ajax({
 			url: "<?php echo site_url('contact/updateFaq') ?>",
 			data: {
 				id: id
 			},
 			type: "POST",
 			dataType: "JSON",
 			success: function(data) {
 				if (data.status == "ok") {
 					CKEDITOR.instances['bantuan'].setData(data.keterangan);

 					$('#judul').val(data.judul);
 					$('#judulfaq').text("Edit Bantuan");

 				} else {

 				}

 				save_method = 'update';

 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error get data from ajax');
 			}
 		});
 	});


 	// begin contact

 	$(document).ready(function() {

 		$.ajax({
 			url: "<?php echo base_url('kategori/jsonAll') ?>",
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {

 				$('#parentid').empty();
 				$('#parentid').append('<option value="">Pilih Kategori</option>');
 				$('#parentid').append('<option value="0">Parent</option>');
 				$.each(data, function(key, value) {
 					$('#parentid').append('<option value="' + value.idmenu + '">' + value.menu + '</option>');
 				});


 				$('#idkategoriproduk').empty();
 				$('#idkategoriproduk').append('<option value="">Pilih Kategori</option>');
 				$('#idkategoriproduk').append('<option value="0">Parent</option>');
 				$.each(data, function(key, value) {

 					$('#idkategoriproduk').append('<option value="' + value.idmenu + '">' + value.menu + '</option>');

 				});


 				$('#idkategoriartikel').empty();
 				$('#idkategoriartikel').append('<option value="">Pilih Kategori</option>');
 				$('#idkategoriartikel').append('<option value="0">Parent</option>');
 				$.each(data, function(key, value) {

 					$('#idkategoriartikel').append('<option value="' + value.idmenu + '">' + value.menu + '</option>');

 				});




 			},
 			error: function(jqXHR, textStatus, errorThrown) {
 				alert('Error get data from ajax');
 			}
 		});


 		$('#form_brand').submit(function(e) {
 			e.preventDefault();

 			var nama = $('#judulbrand').val();
 			var file = $('#filebrand').val();
 			var id = $('#idbrand').val();

 			if (nama == "") {
 				alert("Judul Harus diisi");
 			} else {

 				var url = "";
 				if (save_method == 'update') {
 					url = "<?php echo site_url('brand/updateaction') ?>";
 				} else {
 					url = "<?php echo site_url('brand/createaction') ?>";
 				}
 				console.log(url);

 				var data = new FormData(this);
 				data.append('idbrand', id);
 				data.append('judulbrand', nama);

 				$.ajax({
 					url: url,
 					type: "post",
 					dataType: "json",
 					data: data,
 					processData: false,
 					contentType: false,
 					cache: false,
 					async: false,
 					success: function(data) {
 						console.log(data);
 						if (data.success == "ok") {
 							Swal.fire({
 								position: 'top-end',
 								type: 'success',
 								title: 'Brand ' + data.data["judul"] + ' Berhasil Tersimpan',
 								showConfirmButton: false,
 								timer: 2700
 							})
 						} else {
 							Swal.fire({
 								position: 'top-end',
 								type: 'danger',
 								title: 'Brand ' + data.data['judul'] + ' Gagal Tersimpan',
 								showConfirmButton: false,
 								timer: 2700
 							})
 						}
 						$('.modal_form_Brand').modal('hide');
 						reload_table();
 					}
 				});
 			}
 		});


 		$('#form_contact').submit(function(e) {

 			e.preventDefault();
 			var gettext = CKEDITOR.instances["isicontact"].getData();

 			var url = "<?php echo site_url('contact/update_action') ?>";
 			var data = new FormData(this);
 			data.append('isicontact', gettext);
 			$.ajax({
 				url: url,
 				type: "post",
 				dataType: "json",
 				data: data,
 				processData: false,
 				contentType: false,
 				cache: false,
 				async: false,
 				success: function(data) {

 					if (data.success == "ok") {
 						Swal.fire({
 							position: 'top-end',
 							type: 'success',
 							title: 'Contact Berhasil Tersimpan',
 							showConfirmButton: false,
 							timer: 2700
 						})
 					} else {
 						Swal.fire({
 							position: 'top-end',
 							type: 'danger',
 							title: 'Contact Gagal Tersimpan',
 							showConfirmButton: false,
 							timer: 2700
 						})
 					}

 				}
 			})

 		});
 	});

 	// end contact




 	// begin about

 	$(document).ready(function() {
 		$('#form_about').submit(function(e) {

 			e.preventDefault();
 			var gettext = CKEDITOR.instances["isiabout"].getData();

 			var url = "<?php echo site_url('contact/update_action_about') ?>";
 			var data = new FormData(this);
 			data.append('isiabout', gettext);
 			$.ajax({
 				url: url,
 				type: "post",
 				dataType: "json",
 				data: data,
 				processData: false,
 				contentType: false,
 				cache: false,
 				async: false,
 				success: function(data) {

 					if (data.success == "ok") {
 						Swal.fire({
 							position: 'top-end',
 							type: 'success',
 							title: 'About Berhasil Tersimpan',
 							showConfirmButton: false,
 							timer: 2700
 						})
 					} else {
 						Swal.fire({
 							position: 'top-end',
 							type: 'danger',
 							title: 'About Gagal Tersimpan',
 							showConfirmButton: false,
 							timer: 2700
 						})
 					}

 				}
 			})

 		});
 	});

 	// end about




 	function save() {


 		var url;

 		$('#btnSave').text('saving...'); //change button text
 		$('#btnSave').attr('disabled', true); //set button disable


 		var a = document.getElementById("parentid").value;
 		var b = document.getElementById("status").value;
 		var subkategori = document.getElementById("subkategori").value;
 		var idmenu = document.getElementById("idmenu").value;



 		if (a == "" && b == "" && subkategori == "") {
 			//  alert("Data Masuh Kosong");

 			$("#errorkategoriutama").text("Nama Kategori Tidak Boleh Kosong");
 			$("#errorsubkategori").text("Tidak Boleh Kosong");
 			$("#errorstatus").text("Status Kategori tidak boleh kosong");


 			$('#btnSave').text('save'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable


 		} else if (a == "") {
 			$("#errorkategoriutama").text("Nama Kategori Tidak Boleh Kosong");
 			$("#errorstatus").text("");
 			$("#errorsubkategori").text("");
 			$('#btnSave').attr('disabled', false); //set button disable


 		} else if (b == "") {

 			$("#errorstatus").text("Status Kategori tidak boleh kosong");
 			$("#errorkategoriutama").text("");

 			$("#errornama_kategori").text("");

 			$('#btnSave').text('save'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable

 		} else if (subkategori == "") {
 			$("#errorkategoriutama").text("");
 			$("#errorstatus").text("");
 			$("#errorsubkategori").text("Tidak Boleh Kosong");


 			$('#btnSave').text('save'); //change button text
 			$('#btnSave').attr('disabled', false); //set button disable

 		} else {





 			$("#errorstatus").text("");
 			$("#errorkategoriutama").text("");
 			$("#errorsubkategori").text("");




 			if (save_method == 'add') {
 				url = "<?php echo site_url('kategori/kategoricreateaction') ?>";
 			} else {
 				url = "<?php echo site_url('kategori/update_action/') ?>" + idmenu;
 			}

 			var param = {
 				parentid: a,
 				subkategori: subkategori,
 				status: b
 			}
 			// ajax adding data to database
 			$.ajax({
 				url: url,
 				type: "POST",
 				data: param,
 				dataType: "JSON",
 				success: function(data) {

 					if (data.status == true) //if success close modal and reload ajax table
 					{

 						Swal.fire({
 							position: 'top-end',
 							type: 'success',
 							title: 'Berhasil Tersimpan \n Kategori ' + subkategori,
 							showConfirmButton: false,
 							timer: 2700
 						})


 						reload_table();

 					} else {
 						Swal.fire({
 							position: 'top-end',
 							type: 'danger',
 							title: 'Gagal Tersimpan \n Kategori ' + subkategori,
 							showConfirmButton: false,
 							timer: 2700
 						})
 					}
 					$('#btnSave').text('save'); //change button text
 					$('#btnSave').attr('disabled', false); //set button enable 


 				},
 				error: function(jqXHR, textStatus, errorThrown) {
 					alert('Error adding / update data');
 					$('#btnSave').text('save'); //change button text
 					$('#btnSave').attr('disabled', false); //set button enable 

 				}
 			});





 		}
 	}





 	function CKupdate() {
 		for (instance in CKEDITOR.instances) {
 			CKEDITOR.instances[instance].updateElement();
 			CKEDITOR.instances[instance].setData('');
 		}
 	}


 	// function Oncekjudul() {

 	// 	var judul = document.getElementById("judul").value;


 	// 	if (judul == '') {
 	// 		$("#errorJudul").text("Judul Tidak Boleh Kosong");
 	// 	} else if (judul.length <= 5) {
 	// 		$("#errorJudul").text("Judul Minimal 5 Karakter");
 	// 	} else {
 	// 		$("#errorJudul").text("");
 	// 	}

 	// }

 	function OncekjudulProduk() {

 		var judulProduk = document.getElementById("judulproduk").value;

 		if (judulProduk == '') {
 			$("#errorJudulProduk").text("Judul Tidak Boleh Kosong");
 		} else if (judulProduk.length <= 5) {
 			$("#errorJudulProduk").text("Judul Minimal 5 Karakter");
 		} else {
 			$("#errorJudulProduk").text("");
 		}

 	}


 	// function onceknamakategori() {
 	// 	var subkategori = document.getElementById("subkategori").value;


 	// 	if (subkategori == '') {
 	// 		$("#errorsubkategori").text("Kategori Tidak Boleh Kosong");
 	// 	} else if (nama_kategori.length < 2) {
 	// 		$("#errorsubkategori").text("Kategori Minimal 2 Karakter");
 	// 	} else {
 	// 		$("#errorsubkategori").text("");
 	// 	}

 	// }

 	function oncekparentkategori() {
 		var status = document.getElementById("parentid").value;

 		if (status == '') {
 			$("#errorkategoriutama").text("Pilih kategori");

 		} else {
 			$("#errorkategoriutama").text("");
 		}

 	}

 	function oncestatuskategori() {
 		var status = document.getElementById("status").value;

 		if (status == '') {
 			$("#errorstatus").text("Pilih salasatu status");

 		} else {
 			$("#errorstatus").text("");
 		}

 	}


 	function OncekKategori() {
 		var idkategoriartikel = document.getElementById("idkategoriartikel").value;

 		if (idkategoriartikel == '') {
 			$("#errorKategori").text("Kategori Tidak Boleh Kosong");

 		} else {
 			$("#errorKategori").text("");
 		}

 	}



 	function oncekBWkategori() {
 		var idkategoriartikel = document.getElementById("bw_kategori").value;

 		if (idkategoriartikel == '') {
 			$("#errorBW_kategori").text("BW Tidak Boleh Kosong");

 		} else {
 			$("#errorBW_kategori").text("");
 		}

 	}


 	function oncekJilidkategori() {
 		var idkategoriartikel = document.getElementById("jilid_kategori").value;

 		if (idkategoriartikel == '') {
 			$("#errorJilid_kategori").text("Jilid Tidak Boleh Kosong");

 		} else {
 			$("#errorJilid_kategori").text("");
 		}

 	}

 	function oncekColorkategori() {
 		var idkategoriartikel = document.getElementById("color_kategori").value;

 		if (idkategoriartikel == '') {
 			$("#errorColor_kategori").text("Color Tidak Boleh Kosong");

 		} else {
 			$("#errorColor_kategori").text("");
 		}

 	}

 	function OncekKategoriProduk() {
 		var idkategoriproduk = document.getElementById("idkategoriproduk").value;

 		if (idkategoriproduk == '') {
 			$("#errorKategoriProduk").text("Kategori Tidak Boleh Kosong");

 		} else {
 			$("#errorKategoriProduk").text("");
 		}

 	}


 	function Onchecjudulfoto() {
 		var judulfoto = document.getElementById("judulfoto").value;


 		if (judulfoto == '') {
 			$("#errorJudulfoto").text("Judul Foto Tidak Boleh Kosong");
 		} else if (judulfoto.length <= 5) {
 			$("#errorJudulfoto").text("Kategori Minimal 5 Karakter");
 		} else {
 			$("#errorJudulfoto").text("");
 		}

 	}


 	function onchecknama() {

 		var nama = document.getElementById("namax").value;


 		if (nama == '') {
 			$("#errornama").text("Nama Tidak Boleh Kosong");
 		} else if (nama.length <= 3) {
 			$("#errornama").text("Nama Minimal 3 Karakter");
 		} else {
 			$("#errornama").text("");
 		}

 	}


 	function oncheckemail() {

 		var email = document.getElementById("email").value;


 		if (email == '') {
 			$("#erroremail").text("Email Tidak Boleh Kosong");
 		} else {
 			$("#erroremail").text("");
 		}

 	}



 	function oncheckpassword() {

 		var password = document.getElementById("password").value;


 		if (password == '') {
 			$("#errorpassword").text("Password Tidak Boleh Kosong");
 		} else {
 			$("#errorpassword").text("");
 		}

 	}

 	//OnCek Isi Artikel  

 	// CKEDITOR.on("instanceCreated", function(event) {
 	// 	event.editor.on("change", function() {
 	// 		var isiartikel = CKEDITOR.instances["isiartikel"].getData();
 	// 		if (isiartikel != "") {
 	// 			$("#errorIsi").text("");

 	// 		} else {
 	// 			$("#errorIsi").text("Isi artikel tidak boleh kosong");
 	// 		}
 	// 	});
 	// });


 	// CKEDITOR.on("instanceCreated", function(event) {
 	// 	event.editor.on("change", function() {
 	// 		var isiartikel = CKEDITOR.instances["isiproduk"].getData();
 	// 		if (isiartikel != "") {
 	// 			$("#errorIsiProduk").text("");

 	// 		} else {
 	// 			$("#errorIsiProduk").text("Isi artikel tidak boleh kosong");
 	// 		}
 	// 	});
 	// });

 	function OncekTags() {
 		var tags = $("#tags-input").val();

 		if (tags == '') {
 			$("#errorTags").text("Tag tidak boleh kosong, minimal 1 tag");

 		} else {
 			$("#errorTags").text("");
 		}

 	}


 	function OncekTagsProduk() {
 		var tags = $("#tagsinput").val();

 		if (tags == '') {
 			$("#errorTagsProduk").text("Tag tidak boleh kosong, minimal 1 tag");

 		} else {
 			$("#errorTagsProduk").text("");
 		}

 	}

 	function Oncekslide() {
 		var slideshowproduk = $(".slideshowproduk").val();

 		if (slideshowproduk == '') {
 			$("#errorSlideProduk").text("Slide Tidak Boleh Kosong");

 		} else {
 			$("#errorSlideProduk").text("");
 			if (slideshowproduk == 1) {
 				$("#errorInfoUkuranGambarSlideProduk").html("<strong>Perhatian</strong> ! <br/> Resolusi Harus Width : 1500px & Height : 495px ");

 			} else {
 				$("#errorInfoUkuranGambarSlideProduk").html("");
 			}
 		}

 	}

 	function Oncekstatusproduk() {
 		var statusproduk = $(".statusproduk").val();

 		if (statusproduk == '') {
 			$("#errorStatusProduk").text("Status Tidak Boleh Kosong");

 		} else {
 			$("#errorStatusProduk").text("");
 		}

 	}

 	function Oncekstatusartikel() {
 		var statuspost = $("#statuspost").val();

 		if (statuspost == '') {
 			$("#errorStatusArtikel").text("Status Tidak Boleh Kosong");

 		} else {
 			$("#errorStatusArtikel").text("");
 		}

 	}




 	$(document).ready(function() {

 		$('#mytableartikel').on('click', '.edit_artikel', function() {
 			var idartikel = $(this).data('code');

 			// alert(idartikel);

 			$.ajax({
 				url: "<?php echo site_url('articles/Editget_by_id/') ?>" + idartikel,
 				type: "GET",
 				dataType: "JSON",
 				success: function(data) {
 					// console.log(data.data['image']);

 					CKEDITOR.instances['isiartikel'].setData(data.data['body']);
 					$('[name="judul"]').val(data.data['title']);
 					$('#idkategoriartikel').val(data.data['idmenu']);
 					$('#imgInpHidden').val(data.data["image"]);
 					$('#idartikel').val(data.data["idartikel"]);
 					$('[name="judulartikel"]').val(data.data['title']);
 					$('[name="statuss"]').val(data.data['status']);

 					document.getElementById("imageartikel").src = "<?php echo base_url('assets/img/small/') ?>" + data.data['image'];
 					$('#tags-input').tagsinput('add', data.data['tags']);





 					$('#modal_form_artikel').modal({
 						show: true,
 						keyboard: false,
 						backdrop: 'static'
 					});
 					$('.modal-title').text('Edit Artikel'); // Set title to Bootstrap modal title
 					// window.location.assign('articles/create');
 					save_method = 'update';

 				},
 				error: function(jqXHR, textStatus, errorThrown) {
 					alert('Error get data from ajax');
 				}
 			});
 		});
 	});


 	//login

 	// save artikel

 	$(document).ready(function() {
 		$('#form_artikel').submit(function(e) {

 			e.preventDefault();
 			var idkategoriartikel = document.getElementById("idkategoriartikel").value;
 			var idartikel = document.getElementById("idartikel").value;
 			var judul = document.getElementById("judulartikel").value;
 			var isiartikel = CKEDITOR.instances["isiartikel"].getData();
 			var statuspost = document.getElementById("statuss").value;
 			alert(statuspost);
 			// var statuspost = document.getElementById("statuspost").value;
 			var fotoold = document.getElementById("imgInpHidden").value;
 			var tags = $("#tags-input").val();


 			if (idkategoriartikel == '' && judul == '' && isiartikel == '' && tags == '') {
 				$("#errorJudul").text("Judul Tidak Boleh Kosong");
 				$("#errorKategori").text("Kategori Tidak Boleh Kosong");
 				$("#errorIsi").text("Isi Artikel Tidak Boleh Kosong");
 				$("#errorTags").text("Tags Tidak Boleh Kosong");
 				$("#errorStatusArtikel").text("Status Tidak Boleh Kosong");
 			} else {
 				if (judul == '') {
 					$("#errorJudul").text("Judul Tidak Boleh Kosong");
 				} else if (idkategoriartikel == '') {
 					$("#errorKategori").text("Kategori Tidak Boleh Kosong");

 				} else if (isiartikel == '') {
 					$("#errorIsi").text("Isi Artikel Tidak Boleh Kosong");

 				} else if (statuspost == '') {
 					$("#errorStatusArtikel").text("Status Tidak Boleh Kosong");

 				} else if (tags == '') {
 					$("#errorTags").text("Tags Tidak Boleh Kosong");

 				} else {


 					alert(judul);
 					// $.ajax({
 					// url: "<?php echo site_url('articles/get_by_id') ?>",
 					// type: "POST",
 					// dataType: "JSON",
 					//  data :  {"judul":judul},
 					// success: function(data) {

 					//  if(data.status==true){
 					// 	 				Swal.fire({
 					// 							  position: 'top-end',
 					// 							  type: 'success',
 					// 							  title: ' Artikel \n '+data.data['title']+ '\n Sudah digunakan',
 					// 							  showConfirmButton: false,
 					// 							  timer: 2700
 					// 						})

 					//  }else{


 					if (save_method == 'add') {
 						url = "<?php echo site_url('articles/create_action') ?>"
 					} else {
 						url = "<?php echo site_url('articles/update_action') ?>"
 					}



 					var data = new FormData(this);
 					data.append('idartikel', idartikel);
 					data.append('idmenu', idkategoriartikel);
 					data.append('judul', judul);
 					data.append('isiartikel', isiartikel);
 					data.append('status', statuspost);
 					data.append('foto', fotoold);
 					data.append('tags', tags.toUpperCase());



 					$.ajax({
 						url: url,
 						type: "post",
 						dataType: "json",
 						data: data,
 						processData: false,
 						contentType: false,
 						cache: false,
 						async: false,
 						success: function(data) {


 							//	console.log(data);

 							Swal.fire({
 								position: 'top-end',
 								type: 'success',
 								title: ' Berhasil Tersimpan \n ' + data.judul,
 								showConfirmButton: false,
 								timer: 2700
 							})

 							$('#modal_form_artikel').modal('hide');
 							reload_table();
 							$("#form_artikel").trigger('reset');
 							CKupdate();
 							$(".tag ").remove();
 							$("#blah").empty();
 							document.getElementById("blah").src = "<?php echo base_url('assets/img/noimage.jpg') ?>";
 						},
 						error: function(jqXHR, textStatus, errorThrown) {
 							alert('Error get data from ajax');
 						}
 					});

 					//  }

 					// 	},
 					// 	error: function(jqXHR, textStatus, errorThrown) {
 					// 		alert('Error get data from ajax');
 					// 	}
 					// });


 				}
 			}

 		});
 	});





 	$('#form_produk').submit(function(e) {

 		e.preventDefault();
 		var idkategoriproduk = document.getElementById("idkategoriproduk").value;
 		var idproduk = document.getElementById("idproduk").value;
 		var judul = document.getElementById("judulproduk").value;
 		var isiartikel = CKEDITOR.instances["isiproduk"].getData();
 		var statuspost = $(".statusproduk").val();
 		var slideshow = $(".slideshowproduk").val();
 		var fotoold = document.getElementById("imgInpHiddenProduk").value;
 		var tags = $("#tagsinput").val();



 		if (idkategoriproduk == '' && judul == '' && isiartikel == '' && tags == '' && statuspost == '' && slideshow == '') {
 			// alert("here");
 			$("#errorJudulProduk").text("Judul Tidak Boleh Kosong");
 			$("#errorKategoriProduk").text("Kategori Tidak Boleh Kosong");
 			$("#errorIsiProduk").text("Isi Artikel Tidak Boleh Kosong");
 			$("#errorTagsProduk").text("Tags Tidak Boleh Kosong");
 			$("#errorSlideProduk").text("Slide Tidak Boleh Kosong");
 			$("#errorStatusProduk").text("Status Tidak Boleh Kosong");
 		} else {
 			if (judul == '') {
 				$("#errorJudulProduk").text("Judul Tidak Boleh Kosong");
 			} else if (idkategoriproduk == '') {
 				$("#errorKategoriProduk").text("Kategori Tidak Boleh Kosong");

 			} else if (isiartikel == '') {
 				$("#errorIsiProduk").text("Isi Artikel Tidak Boleh Kosong");

 			} else if (statuspost == '') {
 				$("#errorStatusProduk").text("Status Tidak Boleh Kosong");

 			} else if (slideshow == '') {
 				$("#errorSlideProduk").text("Slide Tidak Boleh Kosong");

 			} else if (tags == '') {
 				$("#errorTagsProduk").text("Tags Tidak Boleh Kosong");

 			} else {



 				if (save_method == 'add') {
 					url = "<?php echo site_url('products/create_action') ?>"
 				} else {
 					url = "<?php echo site_url('products/update_action') ?>"
 				}



 				var data = new FormData(this);
 				data.append('idproduk', idproduk);
 				data.append('idkategoriproduk', idkategoriproduk);
 				data.append('judulproduk', judul);
 				data.append('isiproduk', isiartikel);
 				data.append('status', statuspost);
 				data.append('slideshow', slideshow);
 				data.append('foto', fotoold);
 				data.append('tags', tags.toUpperCase());



 				$.ajax({
 					url: url,
 					type: "post",
 					dataType: "json",
 					data: data,
 					processData: false,
 					contentType: false,
 					cache: false,
 					async: false,
 					success: function(data) {


 						//	console.log(data);

 						Swal.fire({
 							position: 'top-end',
 							type: 'success',
 							title: ' Berhasil Tersimpan \n ' + data.judul,
 							showConfirmButton: false,
 							timer: 2700
 						})

 						$('#modal_form_produk').modal('hide');
 						reload_table();
 						$("#form_produk").trigger('reset');
 						CKupdate();
 						$(".tag ").remove();
 						$("#blahproduk").empty();
 						document.getElementById("blahproduk").src = "<?php echo base_url('assets/img/noimage.jpg') ?>";
 					},
 					error: function(jqXHR, textStatus, errorThrown) {
 						alert('Error get data from ajax');
 					}
 				});


 				var formData = new FormData(this);



 			}
 		}

 	});








 	$(document).ready(function() {
 		$('#mytableproduk').on('click', '.edit_produk', function() {

 			save_method = 'update';
 			var idproduk = $(this).data('code');

 			$.ajax({
 				url: "<?php echo site_url('products/update/') ?>" + idproduk,
 				type: "GET",
 				dataType: "JSON",
 				success: function(data) {
 					// console.log(data.data);

 					CKEDITOR.instances['isiproduk'].setData(data.data['description']);
 					$('[name="judulproduk"]').val(data.data['name']);
 					$('#idkategoriproduk').val(data.data['idmenu']);
 					$('#imgInpHiddenProduk').val(data.data["image"]);
 					$('#idproduk').val(data.data["id"]);
 					// $('[name="judul"]').val(data.data['title']);
 					$(".slideshowproduk").val(data.data['slideshow']);
 					$(".statusproduk").val(data.data['status']);
 					$('#tagsinput').tagsinput('add', data.data['tags']);
 					document.getElementById("blahproduk").src = "<?php echo base_url('assets/img/produk/') ?>" + data.data['image'];



 					$('#modal_form_produk').modal({
 						show: true,
 						keyboard: false,
 						backdrop: 'static'
 					});
 					$('.modal-title').text('Edit Artikel'); // Set title to Bootstrap modal title
 					// window.location.assign('articles/create');
 					save_method = 'update';

 				},
 				error: function(jqXHR, textStatus, errorThrown) {
 					alert('Error get data from ajax');
 				}
 			});
 		});
 	});


 	// save galeri

 	$(document).ready(function() {
 		$('#form_galeri').submit(function(e) {


 			e.preventDefault();
 			var kategori = document.getElementById("idkategoriartikel").value;
 			var judulfoto = document.getElementById("judulfoto").value;

 			if (kategori == '') {

 				$("#errorKategori").text("Kategori Tidak Boleh Kosong");


 			} else if (judulfoto == '') {

 				$("#errorJudulfoto").text("Judul Foto Tidak Boleh Kosong");
 			} else if (judulfoto.length <= 5) {

 				$("#errorJudulfoto").text("Kategori Minimal 5 Karakter");


 			} else {


 				url = "<?php echo site_url('galeri/upload_image') ?>"


 				var data = new FormData(this);

 				data.append('kategori', kategori);

 				$.ajax({
 					url: url,
 					type: "post",
 					dataType: "json",
 					data: data,
 					processData: false,
 					contentType: false,

 					cache: false,
 					async: false,
 					success: function(data) {
 						// console.log(data);
 						if (data.status == true) {
 							Swal.fire({
 								position: 'top-end',
 								type: 'success',
 								title: data.pesan,
 								showConfirmButton: false,
 								timer: 2700
 							})


 							reload_table();
 							$("#form_galeri").trigger('reset');
 							$("#blah").empty();
 							document.getElementById("blah").src = "<?php echo base_url('assets/img/noimage.jpg') ?>";
 						} else {


 							Swal.fire({
 								position: 'top-end',
 								type: 'danger',
 								title: data.pesan,
 								showConfirmButton: false,
 								timer: 3100
 							})

 						}

 					},
 					error: function(jqXHR, textStatus, errorThrown) {

 						Swal.fire({
 							position: 'top-end',
 							type: 'danger',
 							title: 'Maaf Terjadi Kesalahan',
 							showConfirmButton: false,
 							timer: 2700
 						})
 					}
 				});



 			}

 		});
 	});





 	function readURL(input) {

 		if (input.files && input.files[0]) {
 			var reader = new FileReader();

 			reader.onload = function(e) {
 				$('#blah').attr('src', e.target.result);
 			}

 			reader.readAsDataURL(input.files[0]);
 		}
 	}



 	function readURLproduk(input) {

 		if (input.files && input.files[0]) {
 			var reader = new FileReader();

 			reader.onload = function(e) {
 				$('#blahproduk').attr('src', e.target.result);
 			}

 			reader.readAsDataURL(input.files[0]);
 		}
 	}



 	function readURL1(input) {

 		if (input.files && input.files[0]) {
 			var reader = new FileReader();

 			reader.onload = function(e) {
 				$('#blah1').attr('src', e.target.result);
 			}

 			reader.readAsDataURL(input.files[0]);
 		}
 	}

 	function readURL2(input) {

 		if (input.files && input.files[0]) {
 			var reader = new FileReader();

 			reader.onload = function(e) {
 				$('#blah2').attr('src', e.target.result);
 			}

 			reader.readAsDataURL(input.files[0]);
 		}
 	}

 	function readURL3(input) {

 		if (input.files && input.files[0]) {
 			var reader = new FileReader();

 			reader.onload = function(e) {
 				$('#blah3').attr('src', e.target.result);
 			}

 			reader.readAsDataURL(input.files[0]);
 		}
 	}

 	function readURL4(input) {

 		if (input.files && input.files[0]) {
 			var reader = new FileReader();

 			reader.onload = function(e) {
 				$('#blah4').attr('src', e.target.result);
 			}

 			reader.readAsDataURL(input.files[0]);
 		}
 	}

 	function readURL5(input) {

 		if (input.files && input.files[0]) {
 			var reader = new FileReader();

 			reader.onload = function(e) {
 				$('#blah5').attr('src', e.target.result);
 			}

 			reader.readAsDataURL(input.files[0]);
 		}
 	}
 	$(document).ready(function() {
 		$('#blah').hide();



 		$("#imgInp").change(function() {
 			readURL(this);
 		});

 	});


 	function OncheckGaleri() {
 		var test1 = $("#imgInp").val();

 		if (test1 != '') {
 			$('#blah').show();


 		} else {
 			$('#blah').hide();
 		}

 	}

 	$(document).ready(function() {

 		$.ajax({
 			url: "<?php echo site_url('contact/jsonContact') ?>",
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {
 				// console.log(data[0][0]['keterangan']);
 				var a = data[0][0]['keterangan'];

 				CKEDITOR.instances['isicontact'].setData(a);
 			}
 		});

 		$.ajax({
 			url: "<?php echo site_url('contact/jsonAbout') ?>",
 			type: "GET",
 			dataType: "JSON",
 			success: function(data) {
 				// console.log(data[0][0]['keterangan']);
 				var a = data[0][0]['keterangan'];

 				CKEDITOR.instances['isiabout'].setData(a);
 			}
 		});

 		$('[data-toggle="tooltip"]').tooltip();
 	});

 	$(document).on('change', '.selectpicker', function() {
 		$('.selectpicker').selectpicker('refresh');
 	});

 	$(document).ready(function() {
 		CKEDITOR.replace('isiartikel');
 		CKEDITOR.replace('isiproduk');
 		CKEDITOR.replace('bantuan');

 		CKEDITOR.replace('isiabout');
 		CKEDITOR.replace('isicontact');
 	});
 </script>






 </body>

 </html>