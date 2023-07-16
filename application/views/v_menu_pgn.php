<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url()?>"><img src="<?=assets_login_url('images/logo.png', false);?>" width="135"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SQ</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item active">
                <a href="<?php echo base_url()?>" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>
                
              </li>
              <li class="menu-header">Main Menu</li>   
              <li><a class="nav-link" href="<?php echo base_url().'puasaku'?>"><i class="fas fa-pray"></i> <span>Puasaku</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url().'shalatku'?>"><i class="fas fa-mosque"></i> <span>Shalatku</span></a></li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="<?php echo base_url().'auth/logout'?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Log Out
              </a>
            </div>
        </aside>
      </div>
