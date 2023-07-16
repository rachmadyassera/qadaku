<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url()?>"><img src="<?=assets_login_url('images/logo.png', false);?>" width="135"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SQD</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item active">
                <a href="<?php echo base_url()?>" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>
                
              </li>
              <li class="menu-header">Main Menu</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Master Admin</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url().'users/'?>"><i class="fas fa-user-friends"></i> <span>Data Admin</span></a></li>
                  <li><a class="nav-link" href="<?php echo base_url().'users/add_new'?>"><i class="fas fa-user-plus"></i> <span>Add New Admin</span></a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope-open-text"></i> <span>Pengumuman</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url().'pengumuman/add_new'?>"><i class="fas fa-bullhorn"></i></i> <span>Add </span></a></li>
                  <li><a class="nav-link" href="<?php echo base_url().'pengumuman/'?>"><i class="fas fa-scroll"></i> <span>Data </span></a></li>
                </ul>
              </li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="<?php echo base_url().'auth/logout'?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Sign Out
              </a>
            </div>
        </aside>
      </div>
