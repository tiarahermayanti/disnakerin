
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
            <h2>Data Perindustri Kota Padang</h2>

            
    <div style="background: #D3D3D3; font-size: 15px; padding-bottom: 8px; padding-top: 8px; ">
        <a href=""style="margin-left: 30px; margin-bottom: 30px;" id="btn-detail" title="Detail Industri" class="ui-tabs-anchor" role="presentation" tabindex="-1">Detail Industri</a>
        <a href="#"style="margin-left: 30px; margin-bottom: 30px;" title="Bahan Baku" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="btn-bahanbaku">Bahan Baku</a>
        <a href="#" style="margin-left: 30px; margin-bottom: 30px;" title="Energi" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="btn-energi">Energi</a>
        <a href="#" style="margin-left: 30px; margin-bottom: 30px;" title="Legalitas" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="btn-legalitas">Legalitas</a>
        <a href="#" style="margin-left: 30px; margin-bottom: 30px;" title="Peralatan Produksi" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="btn-peralatan">Peralatan Produksi</a>
        <a href="#"style="margin-left: 30px; margin-bottom: 30px;" title="Produksi" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="btn-produksi">Produksi</a>
        <a href="#"style="margin-left: 30px; margin-bottom: 30px;" title="Produksi" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="btn-pemasaran">Tenaga Kerja dan Pemasaran</a>
  </div>

 <div id="detail" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" >

          <div class="panel panel-default">
           
            <div class="panel-body" >
              <?php 
                  $b=$data->row_array();
              ?>
                <form id="form-filter" class="form-horizontal">
                      <div class="form-group">
                      <label for="NAMA" class="col-sm-2 control-label">ID IKM </label>
                        <div class="col-sm-4">
                           <input type="text" name="IDIKM" class="form-control" placeholder="ID IKM" value="<?php echo $b['ID_IKM'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                      <label for="NAMA" class="col-sm-2 control-label">Nama </label>
                        <div class="col-sm-4">
                           <input type="text" name="NAMA" class="form-control" placeholder="Nama Perusahaan" value="<?php echo $b['NAMA_PERUSAHAAN'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                      <label for="PIMPINAN" class="col-sm-2 control-label">Pimpinan </label>
                        <div class="col-sm-4">
                          <input type="text" name="PIMPINAN" class="form-control" placeholder="Nama Pimpinan" value="<?php echo $b['PIMPINAN'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="ALAMAT" class="col-sm-2 control-label">Alamat </label>
                        <div class="col-sm-4">
                          <input type="text" name="ALAMAT" class="form-control" placeholder="Alamat Perusahaan" value="<?php echo $b['ALAMAT'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="KELURAHAN" class="col-sm-2 control-label">Kelurahan </label>
                        <div class="col-sm-4">
                          <input type="text" name="KELURAHAN" class="form-control" placeholder="Kelurahan" value="<?php echo $b['KELURAHAN'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="KECAMATAN" class="col-sm-2 control-label">Kecamatan </label>
                        <div class="col-sm-4">
                          <input type="text" name="KECAMATAN" class="form-control" placeholder="Kecamatan" value="<?php echo $b['KECAMATAN'];?>" readonly>
                        </div>  
                      </div>


                      <div class="form-group">
                      <label for="TELP" class="col-sm-2 control-label">Telp </label>
                        <div class="col-sm-4">
                          <input type="text" name="TELP" class="form-control" placeholder="Telp Perusahaan" value="<?php echo $b['TELP'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="DIREKTORIPOTENSI " class="col-sm-2 control-label">Direktori Potensi </label>
                        <div class="col-sm-4">
                          <input type="text" name="DIREKTORIPOTENSI" class="form-control" placeholder="Direktori Potensi" value="<?php echo $b['DIREKTORIPOTENSI'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="KBLI" class="col-sm-2 control-label">KBLI </label>
                        <div class="col-sm-4">
                          <input type="text" name="KBLI" class="form-control" placeholder="KBLI" value="<?php echo $b['KBLI'];?>" readonly>
                        </div>  
                      </div>   

                      <div class="form-group">
                      <label for="BENTUK USAHA" class="col-sm-2 control-label">Bentuk Usaha </label>
                        <div class="col-sm-4">
                          <input type="text" name="BENTUKUSAHA" class="form-control" placeholder="Bentuk Usaha" value="<?php echo $b['BENTUK_USAHA'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="LEGALITAS" class="col-sm-2 control-label">Legalitas </label>
                        <div class="col-sm-4">
                          <input type="text" name="LEGALITAS" class="form-control" placeholder="Legalitas" value="<?php echo $b['LEGALITAS'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="JENIS_PRODUK" class="col-sm-2 control-label">Jenis Produk </label>
                        <div class="col-sm-4">
                          <input type="text" name="JENIS_PRODUK" class="form-control" placeholder="Jenis Produk" value="<?php echo $b['JENIS_PRODUK'];?>" readonly>
                        </div>  
                      </div>

                      <div class="form-group">
                      <label for="TAHUN_IZIN" class="col-sm-2 control-label">Tahun Izin </label>
                        <div class="col-sm-4">
                          <input type="text" name="TAHUN_IZIN" class="form-control" placeholder="Tahun Izin" value="<?php echo $b['TAHUN_IZIN'];?>" readonly>
                        </div>  
                      </div>
                      <div class="form-group">
                      <label for="FOTO" class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-4">
                          <img style="width:150px; height:140px;" src="<?php echo base_url();?>upload/<?php echo $b['FOTO'];?>" alt=""/>
                        </div>  
                      </div>  
                </form>
            </div>
          </div>
        </div>

        <div id="bahanbaku" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" >
       <div class="panel panel-default">
                 <div class="block-options" style="margin-top: 10px; margin-right: 30px; margin-bottom: 10px; float: right;" >

                          <button class="btn btn-primary" id="btn-add-new"><span class="fa fa-plus"></span> Add New</button>
                    </div>
                <div class="panel-body">
                  <div class="block-content block-content-full">
                 <table id="mytable" class="table table-striped">
                     <thead>
                       <tr>
                         <th style="width: 120px;text-align: left;">No</th>
                          <th>Nama Bahan Baku</th>
                          <th>Jenis Bahan Baku</th>
                          <th>Sumber</th>
                          <th>Jumlah Kebutuhan</th>
                          <th>Nilai Bahan Baku (Rp)</th>
                          <th>Tahun</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=0;
                      foreach ($bb->result() as $row) :
                        $no++;
                      ?>
                      <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->NAMA_BAHAN_BAKU;?></td>
                      <td><?php echo $row->JENIS_BAHAN_BAKU;?></td>
                       <td><?php echo $row->SUMBER;?></td>
                      <td><?php echo $row->JUMLAH_KEBUTUHAN;?></td>
                      <td><?php echo $row->NILAI_BAHAN_BAKU;?></td>
                      <td><?php echo $row->TAHUN;?></td>
                      </tr>
                     <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
         </div>
        </div>

  <div id="energi" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" >
       <div class="panel panel-default">
                 <div class="block-options" style="margin-top: 10px; margin-right: 30px; margin-bottom: 10px; float: right;" >

                          <button class="btn btn-primary" id="btn-add-energi"><span class="fa fa-plus"></span> Add New</button>
                    </div>
                <div class="panel-body">
                  <div class="block-content block-content-full">
                 <table id="mytable" class="table table-striped">
                     <thead>
                       <tr>
                         <th style="width: 120px;text-align: left;">No</th>
                          <th>Jenis Energi</th>
                          <th>Pemakaian</th>
                          <th>Kebutuhan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=0;
                      foreach ($energi->result() as $row) :
                        $no++;
                      ?>
                      <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->JENIS_ENERGI;?></td>
                      <td><?php echo $row->PEMAKAIAN;?></td>
                       <td><?php echo $row->KEBUTUHAN;?></td>

                      </tr>
                     <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
         </div>
        </div>

       <div id="legalitas" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" >
       <div class="panel panel-default">
                 <div class="block-options" style="margin-top: 10px; margin-right: 30px; margin-bottom: 10px; float: right;" >

                          <button class="btn btn-primary" id="btn-add-legalitas"><span class="fa fa-plus"></span> Add New</button>
                    </div>
                <div class="panel-body">
                  <div class="block-content block-content-full">
                 <table id="mytable" class="table table-striped">
                     <thead>
                       <tr>
                         <th style="width: 120px;text-align: left;">No</th>
                          <th>Nama Izin</th>
                          <th>Instansi</th>
                          <th>No izin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=0;
                      foreach ($legalitas->result() as $row) :
                        $no++;
                      ?>
                      <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->NAMA_IZIN;?></td>
                      <td><?php echo $row->INSTANSI;?></td>
                       <td><?php echo $row->NO_IZIN;?></td>

                      </tr>
                     <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
         </div>
        </div>

    <div id="peralatan" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" >
       <div class="panel panel-default">
                 <div class="block-options" style="margin-top: 10px; margin-right: 30px; margin-bottom: 10px; float: right;" >

                          <button class="btn btn-primary" id="btn-add-peralatan"><span class="fa fa-plus"></span> Add New</button>
                    </div>
                <div class="panel-body">
                  <div class="block-content block-content-full">
                 <table id="mytable" class="table table-striped">
                     <thead>
                       <tr>
                         <th style="width: 120px;text-align: left;">No</th>
                          <th>Nama Mesin</th>
                          <th>Merek</th>
                          <th>Tahun</th>
                          <th>Negara Asal</th>
                          <th>Spesifikasi</th>
                          <th>Jumlah</th>
                          <th>Satuan</th>
                          <th>Harga (Rp)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=0;
                      foreach ($peralatan->result() as $row) :
                        $no++;
                      ?>
                      <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->NAMA_MESIN;?></td>
                      <td><?php echo $row->MEREK;?></td>
                       <td><?php echo $row->TAHUN;?></td>
                       <td><?php echo $row->NEGARA_ASAL;?></td>
                      <td><?php echo $row->SPESIFIKASI;?></td>
                       <td><?php echo $row->JUMLAH;?></td>
                       <td><?php echo $row->SATUAN;?></td>
                      <td><?php echo $row->HARGA;?></td>

                      </tr>
                     <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
         </div>
        </div>

    <div id="produksi" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" >
       <div class="panel panel-default">
                 <div class="block-options" style="margin-top: 10px; margin-right: 30px; margin-bottom: 10px; float: right;" >

                          <button class="btn btn-primary" id="btn-add-produksi"><span class="fa fa-plus"></span> Add New</button>
                    </div>
                <div class="panel-body">
                  <div class="block-content block-content-full">
                 <table id="mytable" class="table table-striped">
                     <thead>
                       <tr>
                         <th style="width: 120px;text-align: left;">No</th>
                          <th>Nama Produk</th>
                          <th>Kapasitas Produksi</th>
                          <th>Jumlah Produksi</th>
                          <th>Satuan</th>
                          <th>Nilai Produksi (Rp)</th>
                          <th>Nilai Penjualan (Rp)</th>
                          <th>Tahun</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=0;
                      foreach ($produksi->result() as $row) :
                        $no++;
                      ?>
                      <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->NAMA_PRODUK;?></td>
                      <td><?php echo $row->KAPASITAS_PRODUKSI;?></td>
                       <td><?php echo $row->JUMLAH_PRODUKSI;?></td>
                      <td><?php echo $row->SATUAN;?></td>
                      <td><?php echo $row->NILAI_PRODUKSI;?></td>
                      <td><?php echo $row->NILAI_PENJUALAN;?></td>
                      <td><?php echo $row->TAHUN;?></td>
                      </tr>
                     <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
         </div>
        </div>

        <div id="pemasaran" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" >
       <div class="panel panel-default">
                 <div class="block-options" style="margin-top: 10px; margin-right: 30px; margin-bottom: 10px; float: right;" >

                          <button class="btn btn-primary" id="btn-add-pemasaran"><span class="fa fa-plus"></span> Add New</button>
                    </div>
                <div class="panel-body">
                  <div class="block-content block-content-full">
                 <table id="mytable" class="table table-striped">
                     <thead>
                       <tr>
                         <th style="width: 120px;text-align: left;">No</th>
                          <th>Tenaga Kerja Pria</th>
                          <th>Tenaga Kerja Wanita</th>
                          <th>Nilai Investasi</th>
                          <th>Pemasaran Lokal</th>
                          <th>Pemasaran Luar Daerah</th>
                          <th>Ekspor</th>
                          <th>Tahun</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=0;
                      foreach ($pemasaran->result() as $row) :
                        $no++;
                      ?>
                      <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->TENAGA_KERJA_P;?></td>
                      <td><?php echo $row->TENAGA_KERJA_W;?></td>
                       <td><?php echo $row->NILAI_INVESTASI;?></td>
                      <td><?php echo $row->PEMASARAN_LOKAL;?></td>
                      <td><?php echo $row->PEMASARAN_LUAR_DAERAH;?></td>
                      <td><?php echo $row->EKSPOR;?></td>
                      <td><?php echo $row->TAHUN;?></td>
                      </tr>
                     <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
         </div>
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
       
         <!-- Modal Add Bahan Baku -->
        <form action="<?php echo base_url().'industri/dataindustri/simpan_bahanbaku'?>" method="post" enctype="multipart/form-data">
        <div class="modal" id="ModalAddNewBB" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Bahan Baku</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="idikm" class="form-control" placeholder="Id Ikm" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Bahan Baku" required>
                            </div>

                            <select name="jenis" class="form-control" required>
                            <option  value="" selected="selected">Pilih Jenis Bahan Baku</option>
                              <option value="BAHAN BAKU">Bahan Baku</option>
                              <option value="BAHAN PENOLONG">Bahan Penolong</option>
                          </select>

                          <select name="sumber" class="form-control" required>
                            <option  value="" selected="selected">Pilih Sumber Bahan Baku</option>
                              <option value="DALAM NEGERI">Dalam Negeri</option>
                              <option value="IMPORT">Import</option>
                          </select>

                            <div class="form-group">
                                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah Kebutuhan" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="nilai" class="form-control" placeholder="Nilai Bahan Baku (Rp)" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="tahun" class="form-control" placeholder="Tahun" required>
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

         <!-- Modal Add Energi -->
        <form action="<?php echo base_url().'industri/dataindustri/simpan_energi'?>" method="post">
        <div class="modal" id="ModalAddNewEnergi" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Energi</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="idikm" class="form-control" placeholder="Id Ikm" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="jenis" class="form-control" placeholder="Jenis Energi" required>
                            </div>

                        
                            <div class="form-group">
                                <input type="text" name="pemakaian" class="form-control" placeholder="Pemakaian" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="kebutuhan" class="form-control" placeholder="Kebutuhan" required>
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

        <!-- Modal Add Legalitas -->
        <form action="<?php echo base_url().'industri/dataindustri/simpan_legalitas'?>" method="post">
        <div class="modal" id="ModalAddNewLegalitas" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Legalitas</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="idikm" class="form-control" placeholder="Id Ikm" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Izin" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="instansi" class="form-control" placeholder="Instansi" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="noizin" class="form-control" placeholder="No Izin" required>
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

         <!-- Modal Add Peralatan -->
        <form action="<?php echo base_url().'industri/dataindustri/simpan_peralatan'?>" method="post" >
        <div class="modal" id="ModalAddNewperalatan" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Peralatan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="idikm" class="form-control" placeholder="Id Ikm" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Mesin" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="merek" class="form-control" placeholder="Merek" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="tahun" class="form-control" placeholder="Tahun" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="negara" class="form-control" placeholder="Negara" required>
                            </div>

                            <div class="form-group">
                               <textarea name="spesifiksasi" class="form-control" placeholder="Spesifikasi" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="satuan" class="form-control" placeholder="Satuan" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="harga" class="form-control" placeholder="Harga (Rp)" required>
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

         <!-- Modal Add Pemasaran -->
        <form action="<?php echo base_url().'industri/dataindustri/simpan_pemasaran'?>" method="post" >
        <div class="modal" id="ModalAddNewPemasaran" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Pemasaran</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="idikm" class="form-control" placeholder="Id Ikm" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="tkp" class="form-control" placeholder="Tenaga Kerja Pria" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="tkw" class="form-control" placeholder="Tenaga Kerja Wanita" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="inves" class="form-control" placeholder="Nilai Investasi" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="lokal" class="form-control" placeholder="Pemasaran Lokal" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="luar" class="form-control" placeholder="Pemasaran Luar Daerah" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="ekspor" class="form-control" placeholder="Ekspor" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="tahun" class="form-control" placeholder="Tahun" required>
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

         <!-- Modal Add Produksi -->
        <form action="<?php echo base_url().'industri/dataindustri/simpan_produksi'?>" method="post" >
        <div class="modal" id="ModalAddNewPoduksi" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Produksi</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <input type="text" name="idikm" class="form-control" placeholder="Id Ikm" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="kapasitas" class="form-control" placeholder="Kapasitas Produksi" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah Produksi" required>
                            </div>

                             <div class="form-group">
                                <input type="text" name="satuan" class="form-control" placeholder="Satuan" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="nilai_produksi" class="form-control" placeholder="Nilai Produksi (Rp)" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="nilai_penjualan" class="form-control" placeholder="Nilai Penjualan (Rp)" required>
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
        
        <script src="jquery-2.1.4.js"></script>
        <script>
           $(document).ready(function() {
          
              $("#detail").show();
               $("#bahanbaku").hide();
               $("#energi").hide();
               $("#legalitas").hide();
               $("#peralatan").hide();
               $("#produksi").hide();
               $("#pemasaran").hide();

             $("#btn-detail").click(function() {
               $("#detail").show();
               $("#bahanbaku").hide();
                $("#energi").hide();
               $("#legalitas").hide();
               $("#peralatan").hide();
               $("#produksi").hide();
               $("#pemasaran").hide();

             })
          
             $("#btn-bahanbaku").click(function() {
               $("#bahanbaku").show();
               $("#detail").hide();
               $("#energi").hide();
               $("#legalitas").hide();
               $("#peralatan").hide();
               $("#produksi").hide();
               $("#pemasaran").hide();
             })

             $("#btn-energi").click(function() {
               $("#detail").hide();
               $("#bahanbaku").hide();
               $("#energi").show();
               $("#legalitas").hide();
               $("#peralatan").hide();
               $("#produksi").hide();
               $("#pemasaran").hide();

             })

             $("#btn-legalitas").click(function() {
               $("#detail").hide();
               $("#bahanbaku").hide();
               $("#energi").hide();
               $("#legalitas").show();
               $("#peralatan").hide();
               $("#produksi").hide();
               $("#pemasaran").hide();

             })

             $("#btn-peralatan").click(function() {
               $("#detail").hide();
               $("#bahanbaku").hide();
               $("#energi").hide();
               $("#legalitas").hide();
               $("#peralatan").show();
               $("#produksi").hide();
               $("#pemasaran").hide();
             })

             $("#btn-produksi").click(function() {
               $("#detail").hide();
               $("#bahanbaku").hide();
               $("#energi").hide();
               $("#legalitas").hide();
               $("#peralatan").hide();
               $("#produksi").show();
               $("#pemasaran").hide();
             })

             $("#btn-pemasaran").click(function() {
               $("#detail").hide();
               $("#bahanbaku").hide();
               $("#energi").hide();
               $("#legalitas").hide();
               $("#peralatan").hide();
               $("#produksi").hide();
               $("#pemasaran").show();
             })
          
           });

             $('#btn-add-new').on('click',function(){ 
                    $('#ModalAddNewBB').modal('show');
                });

             $('#btn-add-energi').on('click',function(){ 
                    $('#ModalAddNewEnergi').modal('show');
                });

             $('#btn-add-legalitas').on('click',function(){ 
                    $('#ModalAddNewLegalitas').modal('show');
                });

             $('#btn-add-peralatan').on('click',function(){ 
                    $('#ModalAddNewperalatan').modal('show');
                });

             $('#btn-add-produksi').on('click',function(){ 
                    $('#ModalAddNewPoduksi').modal('show');
                });

             $('#btn-add-pemasaran').on('click',function(){ 
                    $('#ModalAddNewPemasaran').modal('show');
                });

           </script>
    </body>
</html>