<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Room list</title>

        <meta name="description" content="">
    
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">

        <!-- END Icons -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/js/plugins/datatables/dataTables.bootstrap4.min.css'?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dropify.min.css'?>">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url().'assets/css/codebase.min.css'?>">

       

    </head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="sidebar-o side-scroll main-content-boxed side-trans-enabled page-header-fixed">
            
            <!-- Sidebar -->
            <?php echo $this->load->view('admin/sidebar.php');?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php echo $this->load->view('admin/header.php');?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Rooms and Suite</h3>
                                    <div class="block-options">
                                        <a href="<?php echo site_url('admin/room/add_new');?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <table id="mytable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 120px;text-align: left;">No</th>
                                                <th>Images</th>
                                                <th>Room Type</th>
                                                <th>Publish Rate</th>
                                                <th style="text-align:center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no=0;
                                            foreach ($room->result() as $row) :
                                            $no++;
                                        ?>
                                            <tr>
                                                <td style="vertical-align: middle;"><?php echo $no;?></td>
                                                <td><img width="200px" src="<?php echo base_url().'assets/images/'.$row->gambar_large;?>"></td>
                                                <td style="vertical-align: middle;"><?php echo $row->type;?></td>
                                                <td style="vertical-align: middle;"><?php echo number_format($row->rate);?></td>
                                                <td style="width: 90px;text-align: center;vertical-align: middle;">
                                                    <a href="<?php echo site_url('admin/room/get_edit/'.$row->kd_compare);?>" class="btn btn-sm btn-secondary btn-circle"><span class="fa fa-pencil"></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary btn-circle btn-hapus" data-id="<?php echo $row->kd_compare;?>" data-gambar="<?php echo $row->gambar_large;?>" data-thumb="<?php echo $row->gambar_kotak;?>"><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                 
                </div>
                <!-- END Page Content -->
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

        <!-- Modal Hapus -->
        <form action="<?php echo base_url().'admin/room/hapus_room'?>" method="post">
        <div class="modal" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Info</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Anda yakin mau menghapus room ini?</p>
                            <input type="hidden" name="kode" id="kode" required>
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
        <script src="<?php echo base_url().'assets/js/dropify.min.js'?>"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#mytable').DataTable();

                $('.dropify').dropify({ //overate input type file
                    messages: {
                        default: 'Drag atau drop untuk memilih gambar',
                        replace: 'Ganti',
                        remove:  'Hapus',
                        error:   'error'
                    }
                });

                //Show Modal Add New
                $('#btn-add-new').on('click',function(){ 
                    $('#ModalAddNew').modal('show');
                });

                //Show Konfirmasi modal hapus record
                $('.btn-hapus').on('click',function(){
                    var id=$(this).data('id');
                    var gambar=$(this).data('gambar');
                    $('#Modalhapus').modal('show');
                    $('[name="kode"]').val(id);
                    $('[name="gambar"]').val(gambar);
                });  

            });
        </script>

    </body>
</html>