 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">


 <style>
     body {
         font-family: calibri;
     }

     .twitter-typeahead {
         display: initial !important;
     }

     .bootstrap-tagsinput {
         line-height: 40px;
         display: block !important;
     }


     .bootstrap-tagsinput .tag {
         background: #1abb9c;
         padding: 4px;
         font-size: 8pt;
         /* border-radius: 4px; */
     }

     .tt-hint {
         top: 2px !important;
     }

     .tt-input {
         vertical-align: baseline !important;
     }

     .typeahead {
         border: 1px solid #CCCCCC;
         border-radius: 4px;
         padding: 8px 12px;
         width: 300px;
         font-size: 1.5em;
     }

     .tt-menu {
         width: 300px;
     }

     span.twitter-typeahead .tt-suggestion {
         padding: 10px 20px;
         border-bottom: #CCC 1px solid;
         cursor: pointer;
     }

     span.twitter-typeahead .tt-suggestion:last-child {
         border-bottom: 0px;
     }

     .bgcolor {
         max-width: 440px;
         height: 200px;
         background-color: #c3e8cb;
         padding: 40px 70px;
         border-radius: 4px;
         margin: 20px 0px;
     }
 </style>


 <!--modal confirm-->

 <div class="modal fade bs-example-modal-lg" tabindex="-1" id="modal_form_delete" role="dialog" aria-hidden="true">
     <form id="form_delete">
         <div class="modal-dialog modal-md">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                     </button>
                     <h4 class="modal-title" id="pesanheader"></h4>
                 </div>
                 <div class="modal-body">


                     <h4 id="pesan"></h4>


                     <input type="hidden" name="idkategori" id="idkategori">
                     <input type="hidden" name="idartikel" id="idartikel">
                     <input type="hidden" name="idproduk" id="idproduk">
                     <input type="hidden" name="idfaq" id="idfaq">

                 </div>
                 <div class="modal-footer">
                     <button type="button" id="btnSave" onclick="deletekategori()" class="btn btn-primary">Hapus</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

                 </div>
             </div>
         </div>
     </form>
 </div>

 <!--modal confirm-->





 <div class="modal fade bs-example-modal-md" tabindex="-1" id="modal_form_delete_galeri" role="dialog" aria-hidden="true">
     <form id="form_delete_galeri">
         <div class="modal-dialog modal-md">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" onclick="tutup()" data-dismiss="modal"><span aria-hidden="true">×</span>
                     </button>
                     <h4 class="modal-title" id="pesanheader2"></h4>
                 </div>
                 <div class="modal-body">


                     <div id="Setimage"></div>
                     <h2 id="judul"></h2>

                     <input type="hidden" name="idgaleri" id="idgaleri">


                 </div>

                 <div class="modal-footer">
                     <button type="button" id="btnSave" onclick="deleteGaleri($('#idgaleri').text())" class="btn btn-primary">Hapus</button>
                     <button type="button" class="btn btn-danger" onclick="tutup()" data-dismiss="modal">Cancel</button>

                 </div>
             </div>
         </div>
     </form>
 </div>


 <div class="modal fade modal_form_Kategori" id="basic" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-basic">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h4 class="modal-title">Add Kategori</h4>
             </div>
             <div class="modal-body">
                 <form action="#" id="form" class="form-sample">
                     <input type="hidden" value="" name="idmenu" />

                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Kategori Utama</label>
                             <select id="parentid" name="parentid" class="form-control" onchange="oncekparentkategori()"></select>
                             <span class="text text-danger" id="errorkategoriutama"></span>

                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Sub Kategori</label>
                             <input name="subkategori" type="text" onkeyup="onceknamakategori()" class="form-control" id="subkategori" placeholder="Masukan Sub Kategori">
                             <input name="idmenu" type="hidden" class="form-control" id="idmenu">
                             <span class="text text-danger" id="errorsubkategori"></span>
                         </div>
                     </div>



                     <div class="form-group">
                         <label for="exampleInputPassword1">Status Kategori</label>
                         <select name="status" class="form-control" id="status" onchange="oncestatuskategori()">
                             <option value="">--Pilih Status--</option>
                             <option value="1">Aktif</option>
                             <option value="0">Tidak</option>
                         </select>
                         <span class="text text-danger" id="errorstatus"></span>
                     </div>



                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>



 <div class="modal fade modal_form_Brand" id="basic" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-basic">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h4 class="modal-title">Add Brand</h4>
             </div>
             <form id="form_brand" class="form-sample" enctype="multipart/form-data" method="post">
                 <div class="modal-body">

                     <input type="hidden"  name="idbrand" />

                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Nama Brand</label>
                                 <input class="form-control" id="judulbrand" placeholder="Nama Brand" name="judulbrand" />
                                 <span class="text text-danger" id="errorjudul"></span>

                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Gambar Brand</label></label>
                                 <input name="filebrand" type="file" class="form-control" id="filebrand">

                                 <span class="text text-danger" id="errorbrand"></span>
                             </div>

                             <div class="form-group">
                                 <img src=""   class="col-md-12" id="gambarbrand" alt="">
                             </div>
                         </div>
                     </div>







                 </div>
                 <div class="modal-footer">
                     <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                 </div>
             </form>

         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>


 <div class="modal fade modal_form_user" id="basic" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-basic">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h4 class="modal-title">Ubah Akun Anda</h4>
             </div>
             <div class="modal-body">
                 <form action="#" id="formuser" class="form-sample">
                     <p id="idusers" style="display: none"></p>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Nama</label>
                         <input name="namauser" type="text" onchange="onchecknama()" class="form-control" id="namax" placeholder="Masukan Nama">
                         <span class="text text-danger" id="errornama"></span>
                     </div>

                     <div class="form-group">
                         <label for="exampleInputEmail1">Email</label>
                         <input name="emailuser" type="email" onchange="oncheckemail()" class="form-control" id="email" placeholder="Masukan  email">
                         <span class="text text-danger" id="erroremail"></span>
                     </div>

                     <div class="form-group">
                         <label for="exampleInputEmail1">Password</label>
                         <input name="passworduser" type="text" onchange="oncheckpassword()" class="form-control" id="password" placeholder="Masukan password">
                         <span class="text text-danger" id="errorpassword"></span>
                     </div>





                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" id="btnSave" onclick="saveuser()" class="btn btn-primary">Save</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>





 <div class="modal fade modal_form_profil" id="basic" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-basic">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h4 class="modal-title">Ubah Profil</h4>
             </div>
             <div class="modal-body">
                 <form action="#" id="form" class="form-sample">
                     <input type="hidden" name="idwebprofil" id="idwebprofil" />
                     <div class="form-group col-md-6">
                         <label for="exampleInputEmail1">Profil</label>
                         <input name="nama" type="text" onchange="onchecknama()" class="form-control" id="profil" placeholder="Masukan Profil">
                         <span class="text text-danger" id="errornama"></span>
                     </div>

                     <div class="form-group col-md-6">
                         <label for="exampleInputEmail1">Nama Web</label>
                         <input name="namaweb" type="text" onchange="oncheckemail()" class="form-control" id="namaweb" placeholder="Masukan  Nama web">
                         <span class="text text-danger" id="erroremail"></span>
                     </div>

                     <div class="form-group">
                         <label for="exampleInputEmail1">Email</label>
                         <input name="password" type="email" onchange="oncheckpassword()" class="form-control" id="emailweb" placeholder="Masukan Email">
                         <span class="text text-danger" id="errorpassword"></span>
                     </div>


                     <div class="form-group col-md-4">
                         <label for="exampleInputEmail1">Tlp 1</label>
                         <input name="password" type="number" onchange="oncheckpassword()" class="form-control" id="tlp1" placeholder="Masukan Tlp 1">
                         <span class="text text-danger" id="errorpassword"></span>
                     </div>


                     <div class="form-group col-md-4">
                         <label for="exampleInputEmail1">Tlp 2</label>
                         <input name="password" type="number" onchange="oncheckpassword()" class="form-control" id="tlp2" placeholder="Masukan Tlp 2">
                         <span class="text text-danger" id="errorpassword"></span>
                     </div>



                     <div class="form-group col-md-4">
                         <label for="exampleInputEmail1">Tlp 3</label>
                         <input name="password" type="number" onchange="oncheckpassword()" class="form-control" id="tlp3" placeholder="Masukan Tlp 3">
                         <span class="text text-danger" id="errorpassword"></span>
                     </div>

                     <div class="form-group">
                         <label for="exampleInputEmail1">Facebook Link</label>
                         <input name="password" type="text" onchange="oncheckpassword()" class="form-control" id="fb" placeholder="Masukan Fb Link">
                         <span class="text text-danger" id="errorpassword"></span>
                     </div>


                     <div class="form-group">
                         <label for="exampleInputEmail1">Instagram Link</label>
                         <input name="password" type="text" onchange="oncheckpassword()" class="form-control" id="ig" placeholder="Masukan Ig Link">
                         <span class="text text-danger" id="errorpassword"></span>
                     </div>






                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" id="btnSave" onclick="saveprofil()" class="btn btn-primary">Save</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>







 <!-- Bootstrap modal artikel-->



 <div class="modal fade bs-example-modal-lg" tabindex="-1" id="modal_form_artikel" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" onclick="tutup()" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 <h4 class="modal-title" id="myModalLabel">Artikel Baru</h4>

             </div>
             <div class="modal-body">
                 <form id="form_artikel" class="form-sample" enctype="multipart/form-data" method="post">
                     <div class="portlet-body">
                         <ul class="nav nav-tabs">
                             <li class="active">
                                 <a href="#tab_1_1" data-toggle="tab">
                                     Judul Artikel </a>
                             </li>
                             <li>
                                 <a href="#tab_1_2" data-toggle="tab">
                                     Kategori, Status, Gambar </a>
                             </li>

                             <li>
                                 <a href="#tab_1_3" data-toggle="tab">
                                     Isi Artikel <i class="fa fa-comments"></i> </a>
                             </li>

                         </ul>
                         <div class="tab-content">
                             <div class="tab-pane fade active in" id="tab_1_1">
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Judul Artikel</label>
                                     <input name="judulartikel" type="text" class="form-control input-lg" id="judulartikel" placeholder="Masukan Judul Artikel" style="height: 60px; font-size: 15pt">
                                     <span class="text text-danger" id="errorJudul"></span>
                                 </div>


                             </div>
                             <div class="tab-pane fade" id="tab_1_2">

                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Kategori</label>
                                         <a href="<?php echo base_url('kategori') ?>" data-toggle="tooltip" data-placement="top" title="Kategori tampil yang berstatus Aktif, Tambah Jika Tidak Terdapat di dalam List Kategori" id="tol" class="badge badge-info pull-right">+ Tambah Kategori</a>


                                         <div id="load">

                                             <select id="idkategoriartikel" class="form-control" onchange="OncekKategori();" name="idkategori">
                                                 <option value="">--Pilih Kategori--</option>

                                             </select>
                                             <span class="text text-danger" id="errorKategori"></span>

                                         </div>


                                     </div>



                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Tags</label> <br>
                                         <span class="text text-danger" id="errorTags"></span>
                                         <input type="text" name="tags" value="" onchange="OncekTags();" class="form-control input-lg" id="tags-input" data-role="tagsinput" />


                                     </div>




                                 </div>
                                 <div class="col-md-4">

                                     <div class="form-group">

                                         <div class="form-group">
                                             <label for="exampleInputEmail1">Status</label> <br>
                                             <div class="form-radio form-radio-flat">
                                                 <select name="statuss" class="form-control" id="statuss">
                                                     <option value="">Pilih Status </option>
                                                     <option value="1">Aktif</option>
                                                     <option value="0">Tidak</option>
                                                 </select>
                                             </div>
                                             <span class="text text-danger" id="errorStatusArtikel"></span>
                                         </div>

                                     </div>






                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Gambar</label>
                                         <!-- <input type="file" name="image" id="imgInp"  onchange="OncekGambar()"  class="form form-control"> -->
                                         <input type="file" name="image" id="imgInp" class="form form-control">
                                         <input type="hidden" name="imgInpHidden" id="imgInpHidden" class="form form-control">
                                         <span class="text text-danger" id="errorGambar"></span>
                                     </div>

                                     <div class="form-group">
                                         <img id="imageartikel" src="<?php echo base_url('assets/img/noimage.jpg') ?>" alt="your image" class="img img-thumbnail col-md-12" />


                                     </div>
                                 </div>

                             </div>


                             <div class="tab-pane fade" id="tab_1_3">
                                 <div class="form-group">
                                     <label for="exampleInputPassword1">Isi Artikel</label> <br>
                                     <span class="text text-danger" id="errorIsi"></span>
                                     <textarea class="form-control" rows="3" name="isiartikel" id="isiartikel" placeholder="Isi Berita"> </textarea>
                                 </div>


                             </div>

                         </div>
                         <div class="clearfix margin-bottom-20">
                         </div>
                     </div>


                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                 </form>

             </div>

         </div>
     </div>
 </div>


 <!-- End Bootstrap modal artikel -->

 <div class="modal fade bs-example-modal-md" tabindex="-1" id="modal_form_view_artikel" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-md">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" onclick="tutup()" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 <h1 class="modal-title judul" id="myModalLabel"> </h1>

             </div>
             <div class="modal-body">
                 <img src="" id="viewimg" alt="" class="img img-responsive">
                 <div class="row">
                     <div class="col-md-8">

                         <ul class="list-inline sidebar-tags" id="tagsviews"></ul>

                     </div>
                     <div class="col-md-4 blog-tag-data-inner">
                         <span class="tglview" style="font-size: 12pt"> </span>
                     </div>
                 </div>

                 <div class="isiviews" style="font-size: 12pt"> </div>


             </div>
         </div>
     </div>
 </div>

 <!-- Bootstrap modal produk-->

 <div class="modal fade bs-example-modal-lg" tabindex="-1" id="modal_form_produk" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" onclick="tutup()" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 <h4 class="modal-title" id="myModalLabel">Produk Baru</h4>

             </div>
             <div class="modal-body">
                 <form id="form_produk" class="form-sample" enctype="multipart/form-data" method="post">

                     <div class="portlet-body">
                         <ul class="nav nav-tabs">
                             <li class="active">
                                 <a href="#tab_1_1" data-toggle="tab">
                                     Judul Produk </a>
                             </li>
                             <li>
                                 <a href="#tab_1_2" data-toggle="tab">
                                     Kategori, Status, Gambar </a>
                             </li>

                             <li>
                                 <a href="#tab_1_3" data-toggle="tab">
                                     Deskripsi Produk <i class="fa fa-comments"></i> </a>
                             </li>

                         </ul>
                         <div class="tab-content">
                             <div class="tab-pane fade active in" id="tab_1_1">
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Judul Produk</label>
                                     <input name="judulproduk" type="text" class="form-control input-lg" onkeyup="OncekjudulProduk();" id="judulproduk" placeholder="Masukan Judul Produk" style="height: 60px; font-size: 15pt">
                                     <span class="text text-danger" id="errorJudulProduk"></span>
                                 </div>


                             </div>
                             <div class="tab-pane fade" id="tab_1_2">

                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Kategori</label>
                                         <a href="<?php echo base_url('kategori') ?>" data-toggle="tooltip" data-placement="top" title="Kategori tampil yang berstatus Aktif, Tambah Jika Tidak Terdapat di dalam List Kategori" id="tol" class="badge badge-info pull-right">+ Tambah Kategori</a>


                                         <div id="load">

                                             <select id="idkategoriproduk" class="form-control" onchange="OncekKategoriProduk();" name="idkategoriproduk">
                                                 <option value="">--Pilih Kategori--</option>

                                             </select>
                                             <span class="text text-danger" id="errorKategoriProduk"></span>

                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Tags</label> <br>
                                         <span class="text text-danger" id="errorTagsProduk"></span>
                                         <input type="text" name="tags" value="" onchange="OncekTagsProduk();" class="form-control input-lg" id="tagsinput" data-role="tagsinput" />
                                     </div>

                                 </div>
                                 <div class="col-md-4">

                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Slide</label> <br>
                                         <div class="form-radio form-radio-flat">
                                             <select name="slideshowproduk" onchange="Oncekslide();" class="form-control slideshowproduk">
                                                 <option value="">Pilih Status Slideshow</option>
                                                 <option value="1">Ya</option>
                                                 <option value="0">Tidak</option>
                                             </select>
                                         </div>
                                         <span class="text text-danger" id="errorSlideProduk"></span>
                                     </div>

                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Status</label> <br>
                                         <div class="form-radio form-radio-flat">
                                             <select name="statusproduk" onchange="Oncekstatusproduk();" class="form-control statusproduk">
                                                 <option value="">Pilih Status Produk</option>
                                                 <option value="1">Aktif</option>
                                                 <option value="0">Tidak</option>
                                             </select>
                                         </div>
                                         <span class="text text-danger" id="errorStatusProduk"></span>
                                     </div>

                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Gambar</label>
                                         <!-- <input type="file" name="image" id="imgInp"  onchange="OncekGambar()"  class="form form-control"> -->
                                         <input type="file" name="image" id="imgInpProduk" class="form form-control">
                                         <input type="hidden" name="imgInpHiddenProduk" id="imgInpHiddenProduk" class="form form-control">
                                         <span class="text text-danger" id="errorGambarProduk"></span>
                                         <span class="text text-danger" id="errorInfoUkuranGambarSlideProduk"></span>
                                     </div>

                                     <div class="form-group">
                                         <img id="blahproduk" src="<?php echo base_url('assets/img/noimage.jpg') ?>" alt="your image" class="img img-thumbnail col-md-12" />


                                     </div>
                                 </div>

                             </div>


                             <div class="tab-pane fade" id="tab_1_3">
                                 <div class="form-group">
                                     <label for="exampleInputPassword1">Isi Produk</label> <br>
                                     <span class="text text-danger" id="errorIsiProduk"></span>
                                     <textarea class="form-control" rows="3" name="isiproduk" id="isiproduk" placeholder="Isi Berita"> </textarea>
                                 </div>


                             </div>

                         </div>
                         <div class="clearfix margin-bottom-20">
                         </div>
                     </div>


                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                 </form>

             </div>

         </div>
     </div>
 </div>



 </div>


 <!-- End Bootstrap modal produk -->