<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Menu</title>

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
                                    <h3 class="block-title">Daftar Menu</h3>
                                    <div class="block-options">
                                        <button class="btn btn-primary" id="btn-add-new"><span class="fa fa-plus"></span> Add New</button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <table id="mytable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 120px;text-align: left;">No</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Time</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th style="text-align:center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no=0;
                                            foreach ($menus->result() as $row) :
                                            $no++;
                                        ?>
                                            <tr>
                                                <td style="vertical-align: middle;"><?php echo $no;?></td>
                                                <td><img src="<?php echo base_url().'assets/images/'.$row->gambar;?>" style="width: 120px;"></td>
                                                <td style="vertical-align: middle;"><?php echo $row->nama;?></td>
                                                <td style="vertical-align: middle;"><?php echo $row->jam;?></td>
                                                <td style="vertical-align: middle;"><?php echo $row->keterangan;?></td>
                                                <?php if($row->disc <= 0):?>
                                                <td style="vertical-align: middle;"><?php echo number_format($row->harga);?></td>
                                                <?php else:?>
                                                <td style="vertical-align: middle;"><?php echo '<strike>'.number_format($row->harga).'</strike><br>'.number_format($row->harga-$row->disc);?></td>
                                                <?php endif;?>
                                                <td style="width: 90px;text-align: center;vertical-align: middle;">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary btn-circle" data-toggle="modal" data-target="#ModalEdit<?php echo $row->kd_makanan;?>"><span class="fa fa-pencil"></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary btn-circle btn-hapus" data-id="<?php echo $row->kd_makanan;?>"><span class="fa fa-trash"></span></a>
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
        <form action="<?php echo base_url().'admin/menu/simpan_menu'?>" method="post" enctype="multipart/form-data">
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
                                <input type="file" name="filefoto" class="dropify" data-height="200" required>
                            </div>
                            <div class="form-group">
                                <select name="xjadwal" class="form-control" required>
                                    <option value="">Select Schedule</option>
                                    <?php foreach($schedule->result() as $j):?>
                                    <option value="<?php echo $j->kd_makan;?>"><?php echo $j->nama;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xmenu" class="form-control" placeholder="Menu" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xdesc" class="form-control" placeholder="Description" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xprice" class="form-control" placeholder="Price" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xdisc" class="form-control" placeholder="Discount">
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


        <?php 
            $no=0;
                foreach ($menus->result() as $row) :
            $no++;
        ?>
       <!-- Modal edit -->
        <form action="<?php echo base_url().'admin/menu/update_menu'?>" method="post" enctype="multipart/form-data">
        <div class="modal" id="ModalEdit<?php echo $row->kd_makanan;?>" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Edit Menu</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="file" name="filefoto" class="dropify" data-height="200" data-default-file="<?php echo base_url().'assets/images/'.$row->gambar;?>">
                            </div>
                            <div class="form-group">
                                <select name="xjadwal" class="form-control" required>
                                    <option value="">Select Schedule</option>
                                    <?php foreach($schedule->result() as $j):?>
                                        <?php if($row->kd_makan==$j->kd_makan):?>
                                            <option value="<?php echo $j->kd_makan;?>" selected><?php echo $j->nama;?></option>
                                        <?php else:?>
                                            <option value="<?php echo $j->kd_makan;?>"><?php echo $j->nama;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xmenu" value="<?php echo $row->makanan;?>" class="form-control" placeholder="Menu" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xdesc" value="<?php echo $row->keterangan;?>" class="form-control" placeholder="Description" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xprice" value="<?php echo $row->harga;?>" class="form-control" placeholder="Price" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="xdisc" value="<?php echo $row->disc;?>" class="form-control" placeholder="Discount">
                            </div>
                             
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="xkode" value="<?php echo $row->kd_makanan;?>" required>
                        <button type="button" class="btn btn-default btn-square" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-square">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- END Normal Modal -->

        <?php endforeach;?>

        <!-- Modal Hapus -->
        <form action="<?php echo base_url().'admin/menu/hapus_menu'?>" method="post">
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
                            <p>Anda yakin mau menghapus menu ini?</p>
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

                //Show Modal Update Kategori
                $('.btn-edit').on('click',function(){
                    var id=$(this).data('id');
                    var nama=$(this).data('nama');
                    var jam=$(this).data('jam');
                    $('#ModalUpdate').modal('show');
                    $('[name="xkode"]').val(id);
                    $('[name="xnama2"]').val(nama);
                    $('[name="xjam2"]').val(jam);
                });

                //Show Konfirmasi modal hapus record
                $('.btn-hapus').on('click',function(){
                    var id=$(this).data('id');
                    $('#Modalhapus').modal('show');
                    $('[name="kode"]').val(id);
                });  

            });
        </script>

    </body>
</html>