<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

    <head> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Data Tambah Pelatihan</title>

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
            <h2>Data Pelatihan & Fasilitas</h2> 
                
        <div class="panel panel-default">
            <div class="panel-body">
                <table>
                    <tr>               
                    <?php echo form_open('industri/dataindustri/refresh') ?>
                    <input type="hidden" name="idikm" value="<?php echo $idikm;?>">
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
              <th>Nama Pelatihan & Fasilitas</th>
              <th>Jenis</th>
              <th style="text-align:center;">Aksi</th>
            </tr>
            </thead>
            <tbody>
              
              <?php
                foreach ($data as $row) :
              ?>
                <tr>
                  <td><?php echo $row->ID_BANTUAN;?></td>
                  <td><?php echo $row->NAMA;?></td>
                  <td><?php echo $row->JENIS;?></td>                  
                  
                    <td style="text-align:center;">
                        <a href="javascript:void(0);" class="btn btn-xs btn-info btn-edit" data-idbantuan="<?php echo $row->ID_BANTUAN;?>" data-idikm="<?php echo $idikm;?>" data-nama="<?php echo $row->NAMA;?>">
                        <span class="fa fa-plus"></span></a>
                    </td>
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
        <form action="<?php echo base_url().'industri/dataindustri/tambah_datapelatihan'?>" method="post">
        <div class="modal" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Data Pelatihan dan Fasilitas</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">

                             <div class="form-group">
                                <input type="text" name="xnama" class="form-control" placeholder="Nama Pelatihan & Fasilitas" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xtahun" class="form-control" placeholder="Tahun" required>
                            </div>
                            <input type="hidden" name="idbantuan" class="form-control">
                            <input type="hidden" name="keyword" value="<?php echo $keyword;?>">
                            <input type="hidden" name="idikm" value="<?php echo $idikm;?>">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-square" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-square">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        
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

                 //Show Modal Update Kategori
                $('.btn-edit').on('click',function(){
                    var idbantuan=$(this).data('idbantuan');
                    var nama=$(this).data('nama');
                    var idikm=$(this).data('idikm');
                    $('#ModalUpdate').modal('show');
                    $('[name="idbantuan"]').val(idbantuan);
                    $('[name="xnama"]').val(nama);
                    
                });


            });
        </script>  
    </body>
</html>

