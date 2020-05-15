<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->avatar; ?>" class="img-circle" alt="User Image">
        <p><?php echo $userdata->nama_user; ?></p>
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama_user; ?></p>
        <!-- Status -->
        <a href=""><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <!-- <li class="header">DAFTAR MENU</li> -->
      <!-- Optionally, you can add icons to the links -->
      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
          <a href="<?php echo base_url('Home'); ?>">
            <i class="fa fa-home"></i>
            <span>Dashboard</span>
          </a>
      </li>

      <li <?php if ($page == 'jenis_perizinan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Jenis_perizinan'); ?>">
          <i class="fa fa-suitcase"></i>
          <span>Data Jenis Perizinan</span>
        </a>
      </li>

      <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-plane"></i>
                <span>Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>              
              <ul class="treeview-menu menu-open">
                <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
                    <a href="<?php echo base_url('Home'); ?>">
                      <i class="fa fa-home"></i>
                      <span>MENU</span>
                    </a>
                </li>
                <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
                    <a href="<?php echo base_url('Home'); ?>">
                      <i class="fa fa-circle-o"></i>
                      <span>MENU</span>
                    </a>
                </li>
              </ul>
      </li> -->

      
      
      <!-- <li <?php if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Pegawai</span>
        </a>
      </li> -->

      <!-- <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Data Posisi</span>
        </a>
      </li>
      
      <li <?php if ($page == 'kota') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Kota'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Data Kota</span>
        </a>
      </li> -->
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>