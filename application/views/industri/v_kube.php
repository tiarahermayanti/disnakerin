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
            <h2>Data Kube</h2>
        <br>
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalAdd"><span class="fa fa-plus"></span> Tambah Data</button> 
    <h2>&nbsp;</h2>    
    <table class="table table-striped" id="mytable">
      <thead>
        <tr>
          <th>ID Kub</th>
          <th>Nama Kub</th>
          <th>Kontak Person</th>
          <th>Alamat</th>
          <th>Telp</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
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
      <form id="add-row-form" action="<?php echo site_url('industri/kube/save');?>" method="post">
         <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Data</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>

                        <div class="modal-body">
                       
                        <div class="form-group">
                           <input type="text" name="NAMA" class="form-control" placeholder="Nama Kube" required>
                       </div>
                       <div class="form-group">
                          <input type="text" name="KONTAK" class="form-control" placeholder="Kontak Person Kube" required>
                       </div>
                       <div class="form-group">
                          <input type="text" name="ALAMAT" class="form-control" placeholder="Alamat Kube" required>
                       </div>
                       <div class="form-group">
                          <input type="text" name="TELP" class="form-control" placeholder="Telp Kube" required>
                       </div>
                       <div class="form-group">
                          <input type="text" name="EMAIL" class="form-control" placeholder="Email Kube" required>
                       </div>
 
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                   </div>
                    </div>
                  </div>  
            </div>
         </div>
     </form>
 
<!-- Modal View-->
      
     <!-- Modal Update Product-->
      <form id="add-row-form" action="<?php echo site_url('industri/kube/update');?>" method="post">
         <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">&nbsp;
                   </div>
                   <div class="modal-body">
                    
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title"><br>Update Data</h3>
                            <div class="block-options"><br>
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                      <div class="form-group">
                      
                      </div>
                           
                       <div class="form-group">
                           <input type="text" name="ID" class="form-control" placeholder="ID Kube" readonly>
                       </div>
                      
                       <div class="form-group">
                           <input type="text" name="NAMA" class="form-control" placeholder="Nama Kube" required>
                       </div>
                       <div class="form-group">
                           <input type="text" name="KONTAK" class="form-control" placeholder="Kontak Person Kube" required>
                       </div>
                       <div class="form-group">
                           <input type="text" name="ALAMAT" class="form-control" placeholder="Alamat Kube" required>
                       </div>
                       <div class="form-group">
                           <input type="text" name="TELP" class="form-control" placeholder="Telp Kube" required>
                       </div>
                       <div class="form-group">
                           <input type="text" name="EMAIL" class="form-control" placeholder="Email Kube" required>
                       </div>
 
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                   </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
     </form>
 
     <!-- Modal delete Product-->
      <form id="add-row-form" action="<?php echo site_url('industri/kube/delete');?>" method="post">
         <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
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
                   <div class="modal-body">
                    
                    
                    <input type="hidden" name="ID" class="form-control" required>
                          <strong>Anda yakin mau menghapus ini?</strong>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-success">Ya</button>
                   </div>
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
<script src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>
 
<script>
    $(document).ready(function(){
        // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
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
 
      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'industri/kube/get_kube_json'?>", "type": "POST"},
                    columns: [
                                {"data": "ID_KUB"},
                                {"data": "NAMA_KUB"},
                                {"data": "KONTAK_PERSON"},
                                {"data": "ALAMAT"},
                                {"data": "TELP"},
                                {"data": "EMAIL"},
                                {"data": "view"}
                  ],
                order: [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }
 
      });
            
            // end setup datatables
            // get Edit Records
            $('#mytable').on('click','.edit_record',function(){
            var id=$(this).data('id');
                        var nama=$(this).data('nama');
                        var kontak=$(this).data('kontak');
                        var alamat=$(this).data('alamat');
                        var telp=$(this).data('telp');
                        var email=$(this).data('email');
            $('#ModalUpdate').modal('show');
            $('[name="ID"]').val(id);
                        $('[name="NAMA"]').val(nama);
                        $('[name="KONTAK"]').val(kontak);
                        $('[name="ALAMAT"]').val(alamat);
                        $('[name="TELP"]').val(telp);
                        $('[name="EMAIL"]').val(email);
      });
            // End Edit Records
            // get delete Records
            $('#mytable').on('click','.delete_record',function(){
            var id=$(this).data('id');
            $('#ModalDelete').modal('show');
            $('[name="ID"]').val(id);
      });
            // End delete Records
    });
</script>        
        

    </body>
</html>