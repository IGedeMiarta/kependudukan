 <div class="page-wrapper">
     <div class="page-wrapper-inner">

         <!-- Left Sidenav -->
         <div class="left-sidenav">

             <ul class="metismenu left-sidenav-menu" id="side-nav">

                 <?php
                    if ($this->session->userdata('status') == 'login_admin') { ?>
                     <li class="menu-title">Admin</li>
                     <li>
                         <a href="<?= base_url('auth/registration') ?>"><i class="fas fa-user"></i><span>Management User</span></a>
                     </li>
                 <?php } ?>
                 <li class="menu-title">Main</li>

                 <li>
                     <a href="<?= base_url('admin') ?>"><i class="mdi mdi-monitor"></i><span>Dashboards</span></a>

                 </li>
                 <li>
                     <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>Master Data</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li><a href="<?= base_url('admin/rt_rw') ?>"><span>Data RT/RW</span></a></li>
                         <li><a href="<?= base_url('admin/penduduk') ?>"><span>Data Penduduk</span></a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);"><i class="mdi mdi-rename-box"></i><span>Pencatan</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li><a href="<?= base_url('admin/datakk') ?>"><span>KK</span></a></li>
                         <li><a href="<?= base_url('admin/kelahiran') ?>"><span>Kelahiran</span></a></li>
                         <li><a href="<?= base_url('admin/pendatang') ?>"><span>Pendatang</span></a></li>
                         <li><a href="<?= base_url('admin/pindah') ?>"><span>Pindah</span></a></li>
                         <li><a href="<?= base_url('admin/kematian') ?>"><span>Kematian</span></a></li>
                     </ul>
                 </li>

                 <li class="menu-title">Components</li>
                 <li>
                     <a href="javascript: void(0);"><i class="mdi mdi-file-table-outline"></i><span>Laporan</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li><a href="<?= base_url('laporan/lap_lahir') ?>">Laporan Kelahiran</a></li>
                         <li><a href="<?= base_url('laporan/lap_kedatangan') ?>">Laporan Pendatang</a></li>
                         <li><a href="<?= base_url('laporan/lap_pindah') ?>">Laporan Pindah</a></li>
                         <li><a href="<?= base_url('laporan/lap_mati') ?>">Laporan Kematian</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
         <!-- end left-sidenav-->