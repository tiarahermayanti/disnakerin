<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Events Hari Ini</title>

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
                                <h3 class="block-title">Events Hari Ini</h3>
                                
                            </div>

                        <div class="block-content block-content-full">
                            <table id="mytable" class="table table-striped">
                             <thead>
                                <tr>
                                <th style="width: 120px;text-align: left;">No</th>
                                <th>Nama Event</th>
                                <th>Jadwal</th>
                                <th>Alamat</th>
                                <th>Kuota</th>
                                <th style="text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=0;
                                    date_default_timezone_set('Asia/Jakarta');
                                    $today= date('Y-m-d', time());
                                    foreach ($events->result() as $row) :
                                        $no++;
                                        $jadwal =  $row->event_jadwal;
                                        $date =  date('Y-m-d' , strtotime($jadwal));
                                        
                                        if($today == $date){
                                        
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $row->event_nama;?></td>
                                    <td><?php  echo date ("d/m/Y h:i",strtotime($row->event_jadwal));?></td>
                                    <td><?php echo $row->event_alamat;?></td>
                                    <td><?php echo $row->event_kuota;?></td>
                                    <td style="width: 90px;text-align: center;">


                                     <a href="today/<?php echo $row->event_id;?>"  class="btn btn-sm btn-secondary btn-circle "><span class="fa fa-list"></span></a>
                                    </td>
                                </tr>
                                <?php } endforeach;?>
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
               
            });
        </script>

    </body>
</html>