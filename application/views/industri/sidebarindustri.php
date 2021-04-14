            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="<?php echo base_url().'admin/dashboard'?>">
                                        <i class="text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">DIS</span><span class="font-size-xl text-success"><strong>NAKERIN</strong></span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="<?php echo base_url().'assets/images/user_blank.png'?>" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <?php 
                                    error_reporting(0);
                                    $idadmin=$this->session->userdata('idadmin');
                                    $query=$this->db->query("SELECT * FROM pengguna WHERE pengguna_id='$idadmin'");
                                    $data=$query->row_array();
                                ?>
                                <?php if($this->session->userdata('akses')=='3'):?>
                                    <a class="img-link" href="<?php echo base_url().'assets/images/user_blank.png'?>">
                                        <img class="img-avatar" src="<?php echo base_url().'assets/images/user_blank.png'?>" alt="">
                                    </a>
                                <?php else:?>
                                    <a class="img-link" href="#">
                                        <img class="img-avatar" src="<?php echo base_url().'assets/images/'.$data['pengguna_photo'];?>" alt="">
                                    </a>
                                <?php endif;?>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#"><?php echo $this->session->userdata('nama');?></a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                
                                <li>
                                    <a class="nav-submenu" href="<?php echo base_url().'industri/dashboard'?>"><i class="si si-screen-desktop"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-table"></i><span class="sidebar-mini-hide">Data</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url().'industri/dataindustri'?>">Industri</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'industri/dataindustri/getValidasiIkm'?>">Validasi Industri</a>
                                        </li>
                                        
                                        <li>
                                            <a href="<?php echo base_url().'industri/kube'?>">KUBE</a>
                                        </li>                                       
                                    </ul>
                                </li>

                                <li>
                                    <a class="nav-submenu" href="<?php echo base_url().'industri/dataindustri/maps'?>"><i class="fa fa-map"></i><span class="sidebar-mini-hide">Denah Industri</span></a>
                                </li>

                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-clipboard"></i><span class="sidebar-mini-hide">Kegiatan Disnakerin</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url().'industri/datapelatihan'?>"> Pelatihan & Fasilitas</a>
                                        </li>
                                        
                                        <li>
                                            <a href="<?php echo base_url().'industri/bantuanalat'?>">Bantuan Alat</a>
                                        </li>                                       
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-list"></i><span class="sidebar-mini-hide">Informasi Industri</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url().'industri/infoindustri'?>">Informasi Industri</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'industri/kube/rekapkubalat'?>">Rakap Bantuan Alat Ke KUBE </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'industri/dataindustri/rekapindustripelatihan'?>">Rakap Pelatihan & Fasilitasi ke Industri </a>
                                        </li>                                    
                                    </ul>
                                </li>
                               
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-calendar"></i><span class="sidebar-mini-hide">Event</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url().'industri/events'?>">List Event</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'industri/events/getValidasiEvent'?>">Validasi Event </a>
                                        </li>  
                                         <li>
                                            <a href="<?php echo base_url().'industri/events/indexToday'?>">Event Hari Ini</a>
                                        </li>                              
                                    </ul>
                                </li>
                                 <li>
                                    <a class="nav-submenu" href="<?php echo base_url().'industri/pengguna'?>"><i class="fa fa-user"></i><span class="sidebar-mini-hide">Pengguna</span></a>
                                </li>

                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                        
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>