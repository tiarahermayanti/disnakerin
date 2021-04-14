<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

    <head> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Data Tambah Industri</title>

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
            <h2>Data Industri </h2> 
        
        <div class="panel panel-default">
            <div class="panel-body">
                <table>
                    <tr>               
                    <?php echo form_open('industri/kube/refresh') ?>
                    <input type="hidden" name="idkube" value="<?php echo $idkube;?>">
                    <a class="pull-right"><input type="submit" name="search_submit" value="Lanjutkan"></a>
                    <?php echo form_close() ?>               
                    </tr>
                </table>
            </div>
        </div>
        <br>
                <!-- ============ TABEL CARI =============== --> 

       <table id="mytable" class="table table-striped">
            <thead>
            <tr>
              <th style="width: 50px;text-align: left;">No</th>
              <th>Nama Perusahaan</th>
              <th>Alamat</th>
              <th>Pimpinan</th>
              <th>KBLI</th>
              <th>Kecamatan</th>
              <th>Kelurahan</th>
              <th style="text-align:center;">Aksi</th>
            </tr>
            </thead>
            <tbody>
              
              <?php
                foreach ($data as $row) :
              ?>
                <tr>
                  <td><?php echo $row->ID_IKM;?></td>
                  <td><?php echo $row->NAMA_PERUSAHAAN;?></td>
                  <td><?php echo $row->ALAMAT;?></td>
                  <td><?php echo $row->PIMPINAN;?></td>
                  <td><?php echo $row->KBLI;?></td>
                  <td><?php echo $row->KECAMATAN;?></td>
                  <td><?php echo $row->KELURAHAN;?></td>
                  
                  <td style="text-align:center;">
                        <form action="<?php echo base_url().'industri/kube/tambah_dataindustri'?>" method="post">
                            <input type="hidden" name="idikm" value="<?php echo $row->ID_IKM;?>">
                            <input type="hidden" name="keyword" value="<?php echo $keyword;?>">
                            <input type="hidden" name="idkube" value="<?php echo $idkube;?>">
                                <button type="submit" class="btn btn-xs btn-info" title="Pilih"><span class="fa fa-plus"></span></button>
                        </form>
                  </td>
                
                </tr>
              <?php endforeach;?>
              </tbody>
            </table>
    <!-- ============ CLOSE TABEL CARI=============== -->  
    
    
 
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
    <script type="text/javascript">
            $(document).ready(function() {
                $('#mytable').DataTable();

                //Show Modal Add New
                $('#btn-add-new').on('click',function(){ 
                    $('#ModalAddNew').modal('show');
                });



                //Show Konfirmasi modal hapus record
                $('.btn-hapus').on('click',function(){
                    var ID=$(this).data('id');
                    var CODE=$(this).data('code');
                    $('#Modalhapus').modal('show');
                    $('[name="idkube"]').val(ID);
                    $('[name="kode"]').val(CODE);
                });  

            });
        </script>  
    </body>
</html>
