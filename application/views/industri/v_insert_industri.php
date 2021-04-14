<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

    <head> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Data Industri</title>

        <meta name="description" content="">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">

        <!-- END Icons -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/js/plugins/datatables/dataTables.bootstrap4.min.css'?>">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url().'assets/css/codebase.min.css'?>">

       

    </head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="sidebar-o side-scroll main-content-boxed side-trans-enabled page-header-fixed">

            <!-- Sidebar -->
            <?php echo $this->load->view('industri/sidebarindustri.php');?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php echo $this->load->view('admin/header.php');?>
            <!-- END Header -->

            <!-- Main Container -->
            


<main id="main-container">
    <div class="container"><br>
        <h2>Tambah Data Industri</h2>

   
        <br>
<div class="panel panel-default">
           
            <div class="panel-body" >

                <form id="form-filter" class="form-horizontal" action="<?php echo base_url().'industri/dataindustri/simpan_industri'?>" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                      <label for="NAMA" class="col-sm-2 control-label">Nama Perusahaan</label>
                        <div class="col-sm-4">
                           <input type="text" name="nama" class="form-control" placeholder="Nama Perusahaan">
                        </div>
                      </div>

                      <div class="form-group">
                      <label for="PIMPINAN" class="col-sm-2 control-label">Pimpinan</label>
                        <div class="col-sm-4">
                          <input type="text" name="pimpinan" class="form-control" placeholder="Nama Pimpinan" >
                        </div>  
                      </div>

                        <div class="form-group">
                      <label for="BENTUK USAHA" class="col-sm-2 control-label">Bentuk Usaha </label>
                        <div class="col-sm-4">
                           <select name="bentukusaha" class="form-control" placeholder="Bentuk Usaha" required>
                            <option  value="" selected="selected">Pilih Bentuk Usaha</option>
                            <?php foreach ($bentukusaha->result() as $row) : ?>
                              <option value="<?php echo $row->ID_BENTUK_USAHA;?>"><?php echo $row->BENTUK_USAHA;?></option>
                              <?php endforeach;?>
                          </select>
                        </div>  
                      </div>

                       <div class="form-group">
                      <label for="DIREKTORIPOTENSI " class="col-sm-2 control-label">Direktoripotensi</label>
                        <div class="col-sm-4">
                          <select name="direktoripotensi" id="direktoripotensi"class="form-control" placeholder="Direktoripotensi" required>
                            <option  value="" selected="selected">Pilih Direktoripotensi</option>
                              <?php foreach ($direktori->result() as $row) : 
                                ?>
                              <option value="<?php echo $row->ID_DIREKTORIPOTENSI;?>"> <?php echo $row->DIREKTORIPOTENSI;?> </option>
                              <?php endforeach;?>
                          </select>
                        </div>  
                        
                      </div>
                      <div class="form-group">
                      <label for="KBLI" class="col-sm-2 control-label">KBLI </label>
                        <div class="col-sm-4">
                           <select name="kbli" id="kbli" class="form-control" required>
                              <option  value="">Pilih KBLI</option>
                          </select>
                        </div>  
                      </div>   

                    <div class="form-group">
                      <label for="JENIS_PRODUK" class="col-sm-2 control-label">Jenis Produk</label>
                        <div class="col-sm-4">
                          <input type="text" name="jenis" class="form-control" placeholder="Jenis Produk" >
                        </div>  
                      </div>

                      

                       <div class="form-group">
                      <label for="KECAMATAN" class="col-sm-2 control-label">Kecamatan</label>
                         <div class="col-sm-4">
                          <select name="kecamatan" id="kcmt" class="form-control" placeholder="Kecamatan" required>
                            <option  value="" selected="selected">Pilih Kecamatan</option>
                             <?php foreach ($kecamatan->result() as $row) : ?>
                              <option value="<?php echo $row->ID_KECAMATAN;?>"><?php echo $row->KECAMATAN;?></option>
                              <?php endforeach;?>
                          </select>
                         </div>
                      </div>

                       <div class="form-group">
                      <label for="KELURAHAN" class="col-sm-2 control-label">Kelurahan </label>
                         <div class="col-sm-4">
                          <select id="klrh" name="kelurahan" class="form-control" placeholder="Kecamatan" required>
                              <option  value="">Pilih Kelurahan</option>
                          </select>
                         </div>
                      </div>

                      <div class="form-group">
                      <label for="ALAMAT" class="col-sm-2 control-label">Alamat </label>
                        <div class="col-sm-4">
                          <input type="text" name="alamat" class="form-control" placeholder="Alamat Perusahaan" >
                        </div>  
                      </div>

                     
                      <div class="form-group">
                      <label for="TELP" class="col-sm-2 control-label">Telp </label>
                        <div class="col-sm-4">
                          <input type="text" name="tlp" class="form-control" placeholder="Telp Perusahaan" >
                        </div>  
                      </div>

                     

                      <div class="form-group">
                      <label for="LEGALITAS" class="col-sm-2 control-label">Legalitas </label>
                        <div class="col-sm-4">
                          <select name="legalitas" class="form-control" placeholder="Legalita" required>
                            <option  value="" selected="selected">Pilih Legalitas</option>
                              <option value="FORMAL">Memiliki Surat Izin</option>
                              <option value="NON FORMAL">Tidak Memiliki Surat Izin</option>
                          </select>
                        </div>  
                      </div>

                      

                      <div class="form-group">
                      <label for="TAHUN_IZIN" class="col-sm-2 control-label">Tahun Izin </label>
                        <div class="col-sm-4">
                          <input type="text" name="tahun" class="form-control" placeholder="Tahun Izin" >
                        </div>  

                      </div>
                      <div class="form-group">
                      <label for="FOTO" class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-4">
                                <input type="file" name="filefoto">
                                <div class="validation"></div>
                         
                        </div>  
                     

                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                   </div>
                </form>
            </div>
          </div>
</main> 
 
            <!-- END Main Container -->
            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="" target="_blank">Global Telematika</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="" target="_blank">Disnakerin</a> &copy; <span class="js-year-copy"><?php echo date('Y');?></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>

        <!-- END Page Container -->

        <!-- Modal Add Product-->

    
<!-- Modal View-->
      
    
        <!-- END Normal Modal -->  

        <!-- Codebase Core JS -->
        <script src="<?php echo base_url().'assets/js/core/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/popper.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.slimscroll.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.scrollLock.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.appear.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.countTo.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/js.cookie.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/codebase.js'?>"></script>
        <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/plugins/datatables/jquery.dataTables.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/plugins/datatables/dataTables.bootstrap4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>

   
  <script type="text/javascript">
        $(document).ready(function(){

            $('#direktoripotensi').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo base_url().'industri/dataindustri/getKbli';?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].ID_KBLI+'>'+data[i].KBLI+'</option>';
                        }
                        $('#kbli').html(html);
 
                    }
                });
                return false;
            }); 

            $('#kcmt').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo base_url('industri/dataindustri/getKelurahan');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].ID_KELURAHAN+'>'+data[i].KELURAHAN+'</option>';
                        }
                        $('#klrh').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
    </body>
</html>