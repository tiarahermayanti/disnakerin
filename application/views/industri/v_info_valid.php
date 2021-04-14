<?php 
    $b=$data->row_array();
?>
<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

    <head> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Validasi Industri</title>

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
            <h2>Validasi Industri</h2>

          <div class="panel panel-default">
           
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                      <div class="form-group">
                      <label for="NAMA" class="col-sm-2 control-label">ID IKM </label>
                        <div class="col-sm-4">
                           <input type="text" name="IDIKM" class="form-control" placeholder="ID IKM" value="<?php echo $b['ID_IKM'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                      <label for="NAMA" class="col-sm-2 control-label">Nama </label>
                        <div class="col-sm-4">
                           <input type="text" name="NAMA" class="form-control" placeholder="Nama Perusahaan" value="<?php echo $b['NAMA_PERUSAHAAN'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                      <label for="PIMPINAN" class="col-sm-2 control-label">Pimpinan </label>
                        <div class="col-sm-4">
                          <input type="text" name="PIMPINAN" class="form-control" placeholder="Nama Pimpinan" value="<?php echo $b['PIMPINAN'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="ALAMAT" class="col-sm-2 control-label">Alamat </label>
                        <div class="col-sm-4">
                          <input type="text" name="ALAMAT" class="form-control" placeholder="Alamat Perusahaan" value="<?php echo $b['ALAMAT'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="KELURAHAN" class="col-sm-2 control-label">Kelurahan </label>
                        <div class="col-sm-4">
                          <input type="text" name="KELURAHAN" class="form-control" placeholder="Kelurahan" value="<?php echo $b['KELURAHAN'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="KECAMATAN" class="col-sm-2 control-label">Kecamatan </label>
                        <div class="col-sm-4">
                          <input type="text" name="KECAMATAN" class="form-control" placeholder="Kecamatan" value="<?php echo $b['KECAMATAN'];?>" readonly>
                        </div>  
                      </div>


                      <div class="form-group">
                      <label for="TELP" class="col-sm-2 control-label">Telp </label>
                        <div class="col-sm-4">
                          <input type="text" name="TELP" class="form-control" placeholder="Telp Perusahaan" value="<?php echo $b['TELP'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="DIREKTORIPOTENSI " class="col-sm-2 control-label">Direktori Potensi </label>
                        <div class="col-sm-4">
                          <input type="text" name="DIREKTORIPOTENSI" class="form-control" placeholder="Direktori Potensi" value="<?php echo $b['DIREKTORIPOTENSI'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="KBLI" class="col-sm-2 control-label">KBLI </label>
                        <div class="col-sm-4">
                          <input type="text" name="KBLI" class="form-control" placeholder="KBLI" value="<?php echo $b['KBLI'];?>" readonly>
                        </div>  
                      </div>   

                      <div class="form-group">
                      <label for="BENTUK USAHA" class="col-sm-2 control-label">Bentuk Usaha </label>
                        <div class="col-sm-4">
                          <input type="text" name="BENTUKUSAHA" class="form-control" placeholder="Bentuk Usaha" value="<?php echo $b['BENTUK_USAHA'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="LEGALITAS" class="col-sm-2 control-label">Legalitas </label>
                        <div class="col-sm-4">
                          <input type="text" name="LEGALITAS" class="form-control" placeholder="Legalitas" value="<?php echo $b['LEGALITAS'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="JENIS_PRODUK" class="col-sm-2 control-label">Jenis Produk </label>
                        <div class="col-sm-4">
                          <input type="text" name="JENIS_PRODUK" class="form-control" placeholder="Jenis Produk" value="<?php echo $b['JENIS_PRODUK'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="TAHUN_IZIN" class="col-sm-2 control-label">Tahun Izin </label>
                        <div class="col-sm-4">
                          <input type="text" name="TAHUN_IZIN" class="form-control" placeholder="Tahun Izin" value="<?php echo $b['TAHUN_IZIN'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="STATUS" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-4">
                          <input type="text" name="STATUS" class="form-control" placeholder="Status" value="<?php echo $b['STATUS'];?>" readonly>
                        </div>  
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
        
    </body>
</html>