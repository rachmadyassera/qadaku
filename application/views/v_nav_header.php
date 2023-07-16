<?php
 
// $_logfilename = "log_".date("d-m-Y").".txt"; 
 
 
// if(!file_exists($_logfilename)){
//     $_logfilehandler = fopen($_logfilename,'w'); #buat file dengan akses tulis penuh
//     fwrite($_logfilehandler, "\n"); #tulis header untuk file log, jika perlu
//     fclose($_logfilehandler);
// }else{
//     $_logfilehandler = fopen($_logfilename,'a'); #akses file dengan modus buka/tulis
// }
// $admin = $this->session->userdata('user_name');
// $UserIp = $_SERVER['REMOTE_ADDR'];
// $TimeRef = date('d-m-Y H:i:s');

// $data= $admin.' | '.$UserIp.' | '.$TimeRef.'~';
 
 
// fwrite($_logfilehandler,$data);
// fclose($_logfilehandler);
?>

<nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                <?php if($this->session->userdata('user_type')=='1'):?>
                <img class="rounded-circle mr-1" width="50" src="<?php echo ($this->session->userdata('user_photo'));?>">
                <?php else:?>
                <img class="rounded-circle mr-1" width="50" src="<?php echo base_url().'assets/image-user/user_blank.png';?>">
                <?php endif;?>
            <div class="d-sm-none d-lg-inline-block">Hi ! , Selamat Datang   <?php echo $this->session->userdata('user_name');?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                <?php if($this->session->userdata('user_type')=='1'):?>
                  
                <?php else:?>
                <a href="<?php echo base_url().'puasaku/add_qps'?>" class="dropdown-item has-icon">
                  <i class="fas fa-check"></i> Hari ini Qada Puasa
                </a>
                <a href="<?php echo base_url().'shalatku/add_qss'?>" class="dropdown-item has-icon">
                  <i class="fas fa-check"></i> Hari ini Qada Shalat
                </a>
                <?php endif;?>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url().'auth/logout'?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
