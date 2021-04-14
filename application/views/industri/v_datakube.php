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

        <title>Data Kube</title>

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
            <h2>Data Anggota Kube</h2>
            <?php 
            $idkube=$b['ID_KUB'];
            ;?>
          
          <div class="panel panel-default">
           
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                      <div class="form-group">
                      <label for="NAMA" class="col-sm-2 control-label">Nama Kube</label>
                        <div class="col-sm-4">
                           <input type="text" name="NAMA" class="form-control" placeholder="Nama Kube" value="<?php echo $b['NAMA_KUB'];?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="KONTAK" class="col-sm-2 control-label">Kontak Person Kube</label>
                        <div class="col-sm-4">
                          <input type="text" name="KONTAK" class="form-control" placeholder="Kontak Person Kube" value="<?php echo $b['KONTAK_PERSON'];?>" readonly>
                        </div>  
                      </div>
                      <div class="form-group">
                      <label for="ALAMAT" class="col-sm-2 control-label">Alamat Kube</label>
                        <div class="col-sm-4">
                          <input type="text" name="ALAMAT" class="form-control" placeholder="Alamat Kube" value="<?php echo $b['ALAMAT'];?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="EMAIL" class="col-sm-2 control-label">Telp Kube</label>
                        <div class="col-sm-4">
                          <input type="text" name="TELP" value="<?php echo $b['TELP'];?>" class="form-control" placeholder="Telp Kube" readonly>
                        </div>  
                      </div>
                      <div class="form-group">
                      <label for="EMAIL" class="col-sm-2 control-label">Email Kube</label>
                        <div class="col-sm-4">
                          <input type="text" name="EMAIL" value="<?php echo $b['EMAIL'];?>" class="form-control" placeholder="Email Kube" readonly>
                        </div>
                      </div>
                </form>
            </div>
          </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <?php echo form_open('industri/kube/search') ?>
              <input type="hidden" name="idkube" value="<?php echo $idkube;?>">
              <input type="text" name="keyword" placeholder="search">
              <input type="submit" name="search_submit" value="Cari Industri">
            <?php echo form_close() ?> 
          </div>
        </div>
           
            <table id="mytable" class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 120px;text-align: left;">No</th>
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
                    $no=0;
                    foreach ($datakub->result() as $row) :
                    $no++;
                  ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $row->NAMA_PERUSAHAAN;?></td>
                  <td><?php echo $row->ALAMAT;?></td>
                  <td><?php echo $row->PIMPINAN;?></td>
                  <td><?php echo $row->KBLI;?></td>
                  <td><?php echo $row->KECAMATAN;?></td>
                  <td><?php echo $row->KELURAHAN;?></td>
                  <td style="width: 90px;text-align: center;">
                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary btn-circle btn-hapus" data-id="<?php echo $row->ID;?>" data-code="<?php echo $b['ID_KUB'];?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
                  <?php endforeach;?>
                </tbody>
            </table>
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
      
        <!-- Modal Hapus -->
        <form action="<?php echo base_url().'industri/kube/hapus_datakub'?>" method="post">
        <div class="modal" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Hapus Data</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Anda yakin mau menghapus events ini?</p>
                            <input type="hidden" name="idkube" id="idkube" required><input type="hidden" name="kode" id="kode" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-square" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary btn-square">Ya</button>
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