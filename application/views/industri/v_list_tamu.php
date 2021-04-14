<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>List Peserta Event</title>

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
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">List Peserta Event</h3>
                                    <!-- <div class="block-options">
                                        <button class="btn btn-primary" id="btn-add-new"><span class="fa fa-plus"></span> Add New</button>
                                    </div> -->
                                </div>
                                <div class="block-content block-content-full">
                                   <table id="mytable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                 <th>Nama Pengguna</th>
                                                  <th>Nama Perusahaan</th>
                                                  <th style="width: 200px;text-align: left;">Status Kehadiran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no=0;
                                            foreach ($tamu->result() as $row) :
                                            $no++;
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row->pengguna_nama;?></td>
                                                <td><?php echo $row->NAMA_PERUSAHAAN;?></td>
                                                <td>
                                                <?php $status = $row->status_join_event;
                                                    if($status == 2){
                                                        echo "Hadir";
                                                    } else if($status == 3){
                                                        echo "Tidak Hadir";
                                                    } else if($status == 1){
                                                        echo "Menunggu";
                                                    }
                                                ?>
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
        </div>
        <!-- END Page Container -->

        <!-- Modal Hapus -->
        <form action="<?php echo base_url().'industri/events/tidakHadir'?>" method="post">
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
                            <p>Konfirmasi Peserta Tidak Hadir?</p>
                            <input type="hidden" name="kode" id="kode" required>
                            <input type="hidden" name="event" id="event" required>
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

        <form action="<?php echo base_url().'industri/events/hadir'?>" method="post">
        <div class="modal" id="Modalhadir" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
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
                            <p>Konfirmasi Peserta Hadir?</p>
                            <input type="hidden" name="kode" id="kode" required>
                            <input type="hidden" name="event" id="event" required>
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
                //Show Konfirmasi modal hapus record
                $('.btn-tidakhadir').on('click',function(){
                    var kategori_id=$(this).data('id');
                     var event=$(this).data('event');
                    $('#Modalhapus').modal('show');
                    $('[name="kode"]').val(kategori_id);
                    $('[name="event"]').val(event);
                }); 

                $('.btn-hadir').on('click',function(){
                    var kategori_id=$(this).data('id');
                     var event=$(this).data('event');
                    $('#Modalhadir').modal('show');
                    $('[name="kode"]').val(kategori_id);
                    $('[name="event"]').val(event);
                }); 

            });
        </script>

    </body>
</html>