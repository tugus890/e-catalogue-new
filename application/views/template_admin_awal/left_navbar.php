 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
           <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                     <i class="icon-grid menu-icon"></i>
                     <span class="menu-title">Dashboard</span>
                </a>
           </li>
           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                     <i class="icon-layout menu-icon"></i>
                     <span class="menu-title">Data</span>
                     <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                     <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/data_user')  ?>">Data User</a></li>
                          <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/data_produk') ?>">Data Produk</a></li>
                     </ul>
                </div>
           </li>
           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                     <i class="icon-columns menu-icon"></i>
                     <span class="menu-title">Penyewaan</span>
                     <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                     <ul class="nav flex-column sub-menu">
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/transaksi') ?>">Pengajuan Sewa</a></li>
                          <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Jadwal</a></li>

                     </ul>
                </div>
           </li>
           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                     <i class="ti-info-alt menu-icon"></i>
                     <span class="menu-title">Informasi</span>
                     <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                     <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/Data_faq')?>">Data FAQ</a></li>
                          <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/Pendapatan')?>">Pendapatan</a></li>

                     </ul>
                </div>

                
           </li>
           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                     <i class="icon-grid-2 menu-icon"></i>
                     <span class="menu-title">Tables</span>
                     <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                     <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">Basic table</a></li>
                     </ul>
                </div>
           </li>
           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                     <i class="icon-contract menu-icon"></i>
                     <span class="menu-title">Icons</span>
                     <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                     <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">Mdi icons</a></li>
                     </ul>
                </div>
           </li>
           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                     <i class="icon-head menu-icon"></i>
                     <span class="menu-title">User Pages</span>
                     <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                     <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                     </ul>
                </div>
           </li>
           <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                     <i class="icon-ban menu-icon"></i>
                     <span class="menu-title">Error pages</span>
                     <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="error">
                     <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                     </ul>
                </div>
           </li>
           <li class="nav-item">
                <a class="nav-link" href="../../pages/documentation/documentation.html">
                     <i class="icon-paper menu-icon"></i>
                     <span class="menu-title">Documentation</span>
                </a>
           </li>
      </ul>
 </nav>