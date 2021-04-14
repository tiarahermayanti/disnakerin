<html lang="en"><head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/opendata/assets/b2c392bf/jui/css/base/jquery-ui.css">
<script type="text/javascript" src="/opendata/assets/b2c392bf/jquery.js"></script>
<title>Sistem Informasi Industri Kecil Dan Menengah (IKM) Kota Padang - Create Detailikm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="/opendata/themes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/opendata/themes/bootstrap/css/application.min.css" rel="stylesheet">
	<link href="/opendata/themes/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="/opendata/images/favicon.ico">
	<link rel="apple-touch-icon" href="/opendata/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/opendata/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/opendata/images/apple-touch-icon-114x114.png">
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="http://localhost/opendata/index.php"><img src="themes/bootstrap/img/logo.png" class="img-responsive" style="display:inline; vertical-align: top; height:32px;"></a>
				<ul class="nav" id="yw1">
<li><a href="/opendata/index.php?r=site/index">Home</a></li>
<li><a href="/opendata/index.php?r=rekapitulasi/data/index">Grafik</a></li>
<li><a href="/opendata/index.php?r=ikm/detailikm/index">List Industri</a></li>
<li><a href="/opendata/index.php?r=ikm/detailikm/admin">Manage Industri</a></li>
<li><a href="/opendata/index.php?r=ikm/industri/admin">Rekapitulasi</a></li>
<li><a href="/opendata/index.php?r=site/page&amp;view=about">About</a></li>
</ul>				<ul class="nav pull-right" id="yw2">
<li><a href="/opendata/index.php?r=ikm/site/profile">admin</a></li>
<li><a href="/opendata/index.php?r=site/logout">Logout</a></li>
</ul>			</div>
		</div>
	</div>
	
	<div class="container">
			<div class="breadcrumbs breadcrumb">
<li><a href="/opendata/index.php">Home</a><span class="divider"> / </span></li> <li><a href="/opendata/index.php?r=ikm/detailikm/index">Detailikms</a><span class="divider"> / </span></li> <li><span>Daftar</span></li></div><!-- breadcrumbs -->
		</div>
	
	<div class="container">
	<div class="appcontent">
		
		
<h1>Daftar Industri </h1>

    <form id="detailikm-form" action="/opendata/index.php?r=ikm/detailikm/create" method="post">
<style>table, td, th {    
    border: 0px;
    text-align: left;
}table {
    border-collapse: collapse;
    width: 100%;
    background-color : #CCCCCC;

}th, td {
    height: 30px;
}</style><br>
<table>
  <tbody><tr>
    <th>&nbsp; &nbsp; <a href="?r=ikm/detailikm/create"> Daftar Industri</a> </th>
    <th><a href="?r=ikm/detailbahanbaku/create">Bahan Baku</a></th>
    <th><a href="?r=ikm/detailenergi/create">Energi</a></th>
    <th><a href="?r=ikm/detaillegalitas/create">Legalitas</a></th>
    <th><a href="?r=ikm/detailperalatanproduksi/create">Peralatan Produksi</a></th>
    <th><a href="?r=ikm/detailproduksi/create">Produksi</a></th>
    <th width="50%"></th>
  </tr>
</tbody></table>
<br>
<font face="arial" color="black"><marquee>Isilah Semua Data Industri Seperti : <b><i>Detail Industri, Biodata, Tenaga Kerja dan Pemasaran, Bahan Baku, Energi, Legalitas, Peralatan Produksi dan Produksi </i></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Perhatikan <b><i>Id IKM</i></b> Ketika Akan Mendaftarkan Bahan Baku, Energi, Legalitas, Peralatan Produksi dan Produksi</marquee>
        


<div class="form">

    <form id="detailikm-form" action="/opendata/index.php?r=ikm/detailikm/create" method="post">
    <div id="yw0" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="detail" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#detail" title="Detail Industri" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Detail Industri</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="biodata" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#biodata" title="Biodata" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Biodata</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="pemasaran" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#pemasaran" title="Tenaga Kerja dan Pemasaran" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Tenaga Kerja dan Pemasaran</a></li>
</ul>
<div id="detail" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false"><div class="form">
    ------------------------------------------------------------------------------------------------- <br>    <strong>PERHATIAN !! </strong><br>                Carilah data yang akan ditambahkan di dalam tabel <a href="?r=ikm/detailikm/admin"><em><strong> Manage Industri </strong></em></a> terlebih dahulu, <br> 
    sebelum diinputkan. Jika data ada silahkan lakukan perubahan, <em>Bukan ditambahkan.</em> <br>    -------------------------------------------------------------------------------------------------
        <div class="row">
                <label for="Detailikm_TGL_INPUT" class="required">Tanggal Input <span class="required">*</span></label>                <input id="Detailikm_TGL_INPUT" name="Detailikm[TGL_INPUT]" type="text" value="current_timestamp()" class="hasDatepicker">                        </div>
    
	<div class="row">
		<label for="Detailikm_NAMA_PERUSAHAAN" class="required">Nama Perusahaan <span class="required">*</span></label>		<input size="60" maxlength="200" name="Detailikm[NAMA_PERUSAHAAN]" id="Detailikm_NAMA_PERUSAHAAN" type="text">			</div>
	<!-- <div class="row">
		<label for="Detailikm_ID_IKM">Id Ikm</label>		<input size="10" maxlength="100" name="Detailikm[ID_IKM]" id="Detailikm_ID_IKM" type="text" />			</div> -->
	<div class="row">
		<label for="Bentukusaha_BENTUK_USAHA" class="required">Bentuk Usaha <span class="required">*</span></label>		<select value="" name="Detailikm[ID_BENTUK_USAHA]" id="Detailikm_ID_BENTUK_USAHA">
<option value="">Pilih Bentuk Usaha</option>
<option value="0">KOPERASI</option>
<option value="1">PT</option>
<option value="2">PO</option>
<option value="3">CV</option>
<option value="4">UD</option>
<option value="5">PD</option>
</select>			</div>
	<div class="row">
		<label for="Direktoripotensi_DIREKTORIPOTENSI" class="required">Direktoripotensi <span class="required">*</span></label>	<select value="" name="id_dir" id="id_dir">
<option value="">Pilih Potensi</option>
<option value="1">Pangan</option>
<option value="2">Sandang dan Kulit</option>
<option value="3">Kimia dan Bahan Bangunan</option>
<option value="4">Logam dan Elektronika</option>
<option value="5">Kerajinan</option>
</select> 		</div>	
	<div class="row">
		<label for="Kbli_KBLI" class="required">Kbli <span class="required">*</span></label>		<select value="" name="Detailikm[ID_KBLI]" id="Detailikm_ID_KBLI">
<option value="">Pilih KBLI</option>
</select>			</div>
	<div class="row">
		<label for="Detailikm_TAHUN_IZIN">Tahun Izin</label>		<input size="4" maxlength="4" name="Detailikm[TAHUN_IZIN]" id="Detailikm_TAHUN_IZIN" type="text">			</div>
	<div class="row">
		<label for="Detailikm_JENIS_PRODUK" class="required">Jenis Produk <span class="required">*</span></label>		<input size="60" maxlength="100" name="Detailikm[JENIS_PRODUK]" id="Detailikm_JENIS_PRODUK" type="text">			</div>

	<div class="row">
		<label for="Detailikm_NILAI_INVESTASI_Dalam_Rp_000">Nilai  Investasi  Dalam  Rp 000</label>		<input name="Detailikm[NILAI_INVESTASI]" id="Detailikm_NILAI_INVESTASI" type="text">			</div>
        
        <div class="row">
		<label for="Status_STATUS">Status</label>		<select value="" name="Detailikm[STATUS]" id="Detailikm_STATUS">
<option value="">Pilih Status</option>
<option value="0" selected="selected">TIDAK AKTIF</option>
<option value="1">AKTIF</option>
<option value="2">BELUM VERIFIKASI</option>
<option value="3">TELAH VERIFIKASI</option>
</select>			</div>
       	     
       	<div class="row">
		<label for="Detailikm_LEGALITAS" class="required">Legalitas <span class="required">*</span></label>		<select name="Detailikm[LEGALITAS]" id="Detailikm_LEGALITAS">
<option value="">Pilih Legalitas</option>
<option value="FORMAL">Memiliki Surat Izin</option>
<option value="NON FORMAL">Tidak Memiliki Surat Izin</option>
</select>			</div>

        
</div></div>
<div id="biodata" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;"><div class="row">
    <label for="Detailikm_PIMPINAN" class="required">Pimpinan <span class="required">*</span></label>    <input size="60" maxlength="100" name="Detailikm[PIMPINAN]" id="Detailikm_PIMPINAN" type="text">    </div>

<div class="row">
    <label for="Detailikm_ALAMAT" class="required">Alamat <span class="required">*</span></label>    <textarea rows="6" cols="50" name="Detailikm[ALAMAT]" id="Detailikm_ALAMAT"></textarea>    </div>
<div class="row">
    <label for="Detailikm_TELP" class="required">Telp <span class="required">*</span></label>    <input size="20" maxlength="20" name="Detailikm[TELP]" id="Detailikm_TELP" type="text">    </div>
<div class="row">
        <label for="Kecamatan_KECAMATAN" class="required">Kecamatan <span class="required">*</span></label>    <select value="" name="id_kecamatan" id="id_kecamatan">
<option value="">Pilih Kecamatan</option>
<option value="1">BUNGUS TELUK KABUNG</option>
<option value="2">LUBUK KILANGAN</option>
<option value="3">LUBUK BEGALUNG</option>
<option value="4">PADANG SELATAN</option>
<option value="5">PADANG TIMUR</option>
<option value="6">PADANG BARAT</option>
<option value="7">PADANG UTARA</option>
<option value="8">NANGGALO</option>
<option value="9">KURANJI</option>
<option value="10">PAUH</option>
<option value="11">KOTO TANGAH</option>
</select>    </div>
<div class="row">
    <label for="Detailikm_KELURAHAN_*">Kelurahan *</label>    <select value="" name="Detailikm[ID_KELURAHAN]" id="Detailikm_ID_KELURAHAN">
<option value="">Pilih Kelurahan</option>
</select>    </div>
</div>
<div id="pemasaran" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;"><div class="form">
     
	<div class="row">
		<label for="Detailikm_TENAGA_KERJA_P" class="required">Tenaga Kerja P <span class="required">*</span></label>		<input name="Detailikm[TENAGA_KERJA_P]" id="Detailikm_TENAGA_KERJA_P" type="text">			</div>

	<div class="row">
		<label for="Detailikm_TENAGA_KERJA_W" class="required">Tenaga Kerja W <span class="required">*</span></label>		<input name="Detailikm[TENAGA_KERJA_W]" id="Detailikm_TENAGA_KERJA_W" type="text">			</div>
      
        <div class="row">
		<label for="Detailikm_PEMASARAN_LOKAL" class="required">Pemasaran Lokal <span class="required">*</span></label>		<input name="Detailikm[PEMASARAN_LOKAL]" id="Detailikm_PEMASARAN_LOKAL" type="text" maxlength="200">			</div>

	<div class="row">
		<label for="Detailikm_PEMASARAN_LUAR_DAERAH" class="required">Pemasaran Luar Daerah <span class="required">*</span></label>		<input name="Detailikm[PEMASARAN_LUAR_DAERAH]" id="Detailikm_PEMASARAN_LUAR_DAERAH" type="text" maxlength="200">			</div>

	<div class="row">
		<label for="Detailikm_EKSPOR" class="required">Ekspor <span class="required">*</span></label>		<input name="Detailikm[EKSPOR]" id="Detailikm_EKSPOR" type="text" maxlength="200">			</div>

    <div class="row buttons">
        <input type="submit" name="yt0" value="Create">    </div>   
</div></div>
</div>

    </form></div><!-- form -->	</font></form></div><font face="arial" color="black">

</font></div><font face="arial" color="black"> <!-- /container -->
	
	<footer class="footer">
		<div class="container">
			<p>Copyright © 2019 by  Dinas Tenaga Kerja dan Perindustrian Kota Padang.<br>
			All Rights Reserved.<br>
			Developep By <a href="" target="_blank">Global Telematika</a> 
			</p>
		</div>
	</footer>
	
<script type="text/javascript" src="/opendata/assets/b2c392bf/jui/js/jquery-ui.min.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('#Detailikm_TGL_INPUT').datepicker({'dateFormat':'yy-mm-dd'});
jQuery('body').on('change','#id_dir',function(){jQuery.ajax({'type':'POST','url':'/opendata/index.php?r=ikm/detailikm/filterkbli','data':{'id_dir':this.value},'cache':false,'success':function(html){jQuery("#Detailikm_ID_KBLI").html(html)}});return false;});
jQuery('body').on('change','#id_kecamatan',function(){jQuery.ajax({'type':'POST','url':'/opendata/index.php?r=ikm/detailikm/filterkel','data':{'id_kecamatan':this.value},'cache':false,'success':function(html){jQuery("#Detailikm_ID_KELURAHAN").html(html)}});return false;});
jQuery('#yw0').tabs({'collapsible':false});
});
/*]]>*/
</script>

</font><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>