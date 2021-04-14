<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

    <head> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Data Pelatihan & Fasilitas</title>

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
        <br>
        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModalAdd">Tambah Data</button> 
    <h2>&nbsp;</h2>    
    <table class="table table-striped" id="mytable">
      <thead>
        <tr>
          <th>ID Pelatihan</th>
          <th>Nama</th>
          <th>Jenis</th>
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
      <form id="add-row-form" action="<?php echo site_url('industri/datapelatihan/save');?>" method="post">
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
                           <input type="text" name="NAMA" class="form-control" placeholder="Nama Pelatihan dan Fasilitas" required>
                       </div>
                        
                       <div class="form-group">
                          <select name="JENIS" class="form-control" placeholder="Jenis Pelatihan & Fasilitas" required>
                              <option value="Pelatihan SDM">Pelatihan SDM</option>
                              <option value="Pelatihan Teknis">Pelatihan Teknis</option>
                              <option value="Fasilitasi">Fasilitasi</option>
                          </select>
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
 
     <!-- Modal Update Product-->
      <form id="add-row-form" action="<?php echo site_url('industri/datapelatihan/update');?>" method="post">
         <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">&nbsp;
                   </div>
                   <div class="modal-body">
                    
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Update Data</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                      <div class="form-group">
                      
                      </div>
                       <div class="form-group">
                           <input type="text" name="ID" class="form-control" placeholder="ID Pelatihan" readonly>
                       </div>
                       <div class="form-group">
                           <input type="text" name="NAMA" class="form-control" placeholder="Nama Pelatihan dan Fasilitas" required>
                       </div>
                       <select name="JENIS" class="form-control" placeholder="Jenis Pelatihan & Fasilitas" required>
                              <option value="Pelatihan SDM">Pelatihan SDM</option>
                              <option value="Pelatihan Teknis">Pelatihan Teknis</option>
                              <option value="Fasilitasi">Fasilitasi</option>
                       </select>
 
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
      <form id="add-row-form" action="<?php echo site_url('industri/datapelatihan/delete');?>" method="post">
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
                    <strong>Anda yakin mau menghapus ini? </strong>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-success">Yes</button>
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
              ajax: {"url": "<?php echo base_url().'industri/datapelatihan/get_pelatihan_json'?>", "type": "POST"},
                    columns: [
                                                {"data": "ID_BANTUAN"},
                                                {"data": "NAMA"},
                                                //render number format for price
                        {"data": "JENIS"},
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
                        var jenis=$(this).data('jenis');
            $('#ModalUpdate').modal('show');
            $('[name="ID"]').val(id);
                        $('[name="NAMA"]').val(nama);
                        $('[name="JENIS"]').val(jenis);
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