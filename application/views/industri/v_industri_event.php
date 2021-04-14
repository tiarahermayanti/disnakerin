<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Events</title>
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
                                <h3 class="block-title">Events</h3>
                                 <div class="block-options">
                                    <button class="btn btn-primary" id="btn-add-new"><span class="fa fa-plus"></span> Add New</button>
                                </div>
                            </div>

                        <div class="block-content block-content-full">
                            <table id="mytable" class="table table-striped">
                             <thead>
                                <tr>
                                <th style="width: 120px;text-align: left;">No</th>
                                <th>Nama Event</th>
                                <th>Deskripsi</th>
                                <th>Jadwal</th>
                                <th>Alamat</th>
                                <th>Kuota</th>
                                <th>Gambar</th>
                                <th style="text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=0;
                                    foreach ($events->result() as $row) :
                                    $no++;
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $row->event_nama;?></td>
                                    <td><?php echo substr($row->event_deskripsi, 0, 100) . '...';?></td>

                                    <td><?php  echo date ("d/m/Y h:i",strtotime($row->event_jadwal));?></td>
                                    <td><?php echo $row->event_alamat;?></td>
                                    <td><?php echo $row->event_kuota;?></td>
                                     <td><img style="width:100px; height:80px;" src="<?php echo base_url();?>event/<?php echo $row->event_gambar;?>" alt=""/></td>
                                    <td style="width: 90px;text-align: center;">
                                        
                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary btn-circle btn-edit" data-id="<?php echo $row->event_id;?>" 
                                        data-nama="<?php echo $row->event_nama;?>" 
                                        data-deskripsi="<?php echo $row->event_deskripsi;?>" 
                                        data-jadwal="<?php echo $row->event_jadwal;?>"
                                        data-alamat="<?php echo $row->event_alamat;?>"
                                        data-kuota="<?php echo $row->event_kuota;?>"
                                        data-gambar="<?php echo $row->event_gambar;?>"   
                                        ><span class="fa fa-pencil"></span></a>

                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary btn-circle btn-hapus" data-id="<?php echo $row->event_id;?>"><span class="fa fa-trash"></span></a>

                                     <a href="events/listTamu/<?php echo $row->event_id;?>"  class="btn btn-sm btn-secondary btn-circle "><span class="fa fa-list"></span></a>
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

        <!-- Modal Add -->
        <form action="<?php echo base_url().'industri/events/simpan_events'?>" method="post" enctype="multipart/form-data">
        <div class="modal" id="ModalAddNew" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Add New</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="xnama" class="form-control" placeholder="Nama Event" required>
                            </div>
                             <div class="form-group">
                                <textarea name="xdeskripsi" class="form-control" placeholder="Deskripsi" required></textarea>
                            </div>
                            <div class="form-group">

                                <input type="datetime-local" name="xjadwal" class="form-control" placeholder="Jadwal Event" required>
                            </div>
                            <div class="form-group">
                                <textarea name="xalamat" class="form-control" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xkuota" class="form-control" placeholder="Kuota" required>
                            </div>
                                <div class="form-group">
                                <input type="file" name="filefoto">
                                <div class="validation"></div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-square" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-square">Save</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- END Normal Modal -->

        <!-- Modal Update -->
        <form action="<?php echo base_url().'industri/events/update_events'?>" method="post" enctype="multipart/form-data">
        <div class="modal" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Update Events</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                             <div class="form-group">
                                <input type="text" name="xnama2" class="form-control" placeholder="Nama Event" required>
                            </div>
                             <div class="form-group">
                                <textarea name="xdeskripsi2" class="form-control" placeholder="Deskripsi" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xjadwal2" class="form-control" placeholder="Jadwal Event" required>
                            </div>
                            <div class="form-group">
                                <textarea name="xalamat2" class="form-control" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xkuota2" class="form-control" placeholder="Kuota" required>
                            </div>
                                <div class="form-group">
                                <input type="file" name="filefoto2">
                                <div class="validation"></div>
                            </div>
                            <input type="hidden" name="xkode" id="kode" required>
                            <input type="hidden" name="xgambar2" id="xgambar2" required>
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

        <!-- Modal Hapus -->
        <form action="<?php echo base_url().'industri/events/hapus_events'?>" method="post">
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
                            <p>Anda yakin mau menghapus events ini?</p>
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
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#mytable').DataTable();

                //Show Modal Add New
                $('#btn-add-new').on('click',function(){ 
                    $('#ModalAddNew').modal('show');
                });


                //Show Modal Update Kategori
                $('.btn-edit').on('click',function(){
                    var id=$(this).data('id');
                    var nama=$(this).data('nama');
                    var jadwal=$(this).data('jadwal');
                    var deskripsi=$(this).data('deskripsi');
                    var alamat=$(this).data('alamat');
                    var kuota=$(this).data('kuota');
                    var gambar=$(this).data('gambar');
                    $('#ModalUpdate').modal('show');
                    $('[name="xkode"]').val(id);
                    $('[name="xnama2"]').val(nama);
                    $('[name="xjadwal2"]').val(jadwal);
                    $('[name="xdeskripsi2"]').val(deskripsi);
                     $('[name="xalamat2"]').val(alamat);
                      $('[name="xkuota2"]').val(kuota);
                       $('[name="xgambar2"]').val(gambar);
                });

                //Show Konfirmasi modal hapus record
                $('.btn-hapus').on('click',function(){
                    var kategori_id=$(this).data('id');
                    $('#Modalhapus').modal('show');
                    $('[name="kode"]').val(kategori_id);
                });  

            });
        </script>

    </body>
</html>