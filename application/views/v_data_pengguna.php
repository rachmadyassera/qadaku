
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pengguna &rsaquo; DataTables &mdash; SiQada</title>

  <!-- General CSS Files -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/bootstrap/css/bootstrap.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/fontawesome/css/all.min.css'?>">
  <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity = "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin = "anonymous">

  <!-- CSS Libraries -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/datatables/css/datatables.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/datatables/css/dataTables.bootstrap4.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/datatables/css/select.bootstrap4.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/toastr/jquery.toast.min.css'?>"  type = "text/css"/>

  <!-- Template CSS -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/style.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/components.css'?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

        <?php
        $this->load->view('v_nav_header');
        $this->load->view('v_menu_adm');
        ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Users Data Page</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Pengguna</a></div>
              <div class="breadcrumb-item">DataTables</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Tables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tgl Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Domisili</th>
                            <th>No HP</th>
                            <th>Terdaftar Pada</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 0;
                            foreach ($data->result() as $row): 
                            $no++;
                        ?>
                        
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $no;?></td>
                            <td style="vertical-align: middle;" >
                                <img class="rounded-circle profile-widget-picture" width="50" src="<?php echo base_url().'assets/image-user/user_blank.png';?>">
                            </td>
                            <td style="vertical-align: middle;"><?php echo $row->user_name;?></td>
                            <td style="vertical-align: middle;"><?php echo $row->user_email;?></td>
                            <td style="vertical-align: middle;"><?php echo $row->user_tgllahir;?></td>
                            <td style="vertical-align: middle;">
                            <?php if ($row->user_jenis_kelamin == '1'): ?>
                              <?php echo 'Pria'; ?>
                            <?php else: ?>
                              <?php echo 'Wanita'; ?>
                            <?php endif; ?>
                            </td>
                            <td style="vertical-align: middle;"><?php echo $row->user_domisili;?></td>
                            <td style="vertical-align: middle;"><?php echo $row->user_nohp;?></td>
                            <td style="vertical-align: middle;"><?php echo $row->create_at;?></td>
                            
                            <td style="vertical-align: middle;">
                            <div class="dropdown d-inline mr-2">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu" > 
                                <!-- <a class="dropdown-item has-icon" href="<?php echo site_url('users/detail/'.$row->id_user);?>"><i class="fas fa-info-circle"></i> Detail</a> -->
                                <a class="dropdown-item has-icon" id="toastr-3" href="<?php echo site_url('pengguna/delete/'.$row->id_user);?>"><i class="fas fa-trash"></i> Delete</a>
                              </div>
                            </div>
                            </td>
                        </tr>
                    <?php endforeach;?>
 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
      <footer   class  = "main-footer">
      <div      class  = "footer-left">
      Copyright &copy; <?php echo date('Y');?> <div class = "bullet"></div> Design By <a href = "https://www.facebook.com/ry.a.zuhri">Rachmad Yasser Al Zuhri</a>
        </div>
        <div class = "footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src = "<?php echo base_url().'theme/assets/jquery.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/popper.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/tooltip.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/bootstrap/js/bootstrap.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/nicescroll/jquery.nicescroll.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/moment.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/js/stisla.js'?>"></script>
  
  <!-- JS Libraies -->
  <script src = "<?php echo base_url().'theme/assets/datatables/js/datatables.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/datatables/js/dataTables.bootstrap4.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/datatables/js/dataTables.select.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/jquery-ui/jquery-ui.min.js'?>"></script>


  <!-- Page Specific JS File -->
  <script src = "<?php echo base_url().'theme/assets/js/page/modules-datatables.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/toastr/jquery.toast.min.js'?>"></script>
  
  
  <!-- Template JS File -->
  <script src = "<?php echo base_url().'theme/assets/js/scripts.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/js/custom.js'?>"></script>

  <?php if($this->session->flashdata('msg')=='error'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Password and Confirm Password doesn't match.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error-email'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Email already taken.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error-img'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Image Upload Error.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "New User Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='info'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Info',
                        text: "User updated!",
                        showHideTransition: 'slide',
                        icon: 'info',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#00C9E6'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "User Deleted!.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

</body>
</html>