<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

    <head> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Data Industri</title>

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
            <h2>Data Industri</h2>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title" >Custom Filter : </h4>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                    <div class="form-group">
                        <label for="BENTUK_USAHA" class="col-sm-2 control-label">Bentuk Usaha</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="BENTUK_USAHA">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NAMA_PERUSAHAAN" class="col-sm-2 control-label">Nama Perusahaan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="NAMA_PERUSAHAAN">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ALAMAT" class="col-sm-2 control-label">Kelurahan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="KELURAHAN">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ALAMAT" class="col-sm-2 control-label">Kecamatan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="KECAMATAN">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ALAMAT" class="col-sm-2 control-label">Tipe Industri</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="TIPE_INDUSTRI">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ALAMAT" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Pimpinan</th>
                    <th>Bentuk Usaha</th>
                    <th>Tipe Industri</th>
                    <th>KBLI</th>
                    <th>Jenis Produk</th>
                </tr>
            </thead>
            <tbody>
            </tbody>           
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

        <!-- Modal Hapus -->
        
        <!-- END Normal Modal -->  
<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>


<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Industri/Infoindustri/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.BENTUK_USAHA = $('#BENTUK_USAHA').val();
                data.NAMA_PERUSAHAAN = $('#NAMA_PERUSAHAAN').val();
                data.KELURAHAN = $('#KELURAHAN').val();
                data.KECAMATAN = $('#KECAMATAN').val();
                data.TIPE_INDUSTRI = $('#TIPE_INDUSTRI').val();
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });

});

</script>

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
        
        

    </body>
</html>