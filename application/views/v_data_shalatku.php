
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard Qada Shalatku &mdash; SiQada</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/jqvmap/jqvmap.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/weather-icons.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/weather-icons-wind.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/summernote/summernote-bs4.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'assets/plugins/chart/dist/chart.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url() .'assets/plugins/toastr/jquery.toast.min.css' ?>" type = "text/css" />
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/datatables/css/datatables.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/datatables/css/dataTables.bootstrap4.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/datatables/css/select.bootstrap4.min.css'?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/assets/css/style.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'theme/assets/css/components.css'?>">
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
        $this->load->view('v_menu_pgn');
        ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> Qada Shalatku</h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>
          
          <div class="row">
<!--                 
          <?php
            foreach ($get_all_ws->result() as $gaws): 
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Qada Shalat <?php echo $gaws->ws_nama; ?> 
                    </h4>
                  </div>
                  <div class="card-body">
                    <?php if ($gaws->id_waktu_shalat == 1): ?>
                      <?php echo $total_tqs_ws1; ?>
                    <?php elseif ($gaws->id_waktu_shalat == 2): ?>
                      <?php echo $total_tqs_ws2; ?>                      
                    <?php elseif ($gaws->id_waktu_shalat == 3): ?>
                      <?php echo $total_tqs_ws3; ?>
                    <?php elseif ($gaws->id_waktu_shalat == 4): ?>
                      <?php echo $total_tqs_ws4; ?>
                    <?php else: ?>
                      <?php echo $total_tqs_ws5; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?> -->

            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Seluruh Qada Shalatku
                    </h4>
                  </div>
                  <div class="card-body">
                        <?php echo $total_tqs_ws1+$total_tqs_ws2+$total_tqs_ws3+$total_tqs_ws4+$total_tqs_ws5; ?>
                  </div>
                </div>
              </div>
            </div> -->

            <?php
            foreach ($get_all_ws->result() as $gaws): 
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-danger">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Qada Shalat <?php echo $gaws->ws_nama;?>  
                    </h4>
                  </div>
                  <div class="card-body">
                    <?php if ($gaws->id_waktu_shalat == 1): ?>
                      <div class = "badge badge-info"><b><?php echo $total_qss_ws1;?></div> /
                      <div class = "badge badge-warning"><?php echo $total_tqs_ws1;?></b></div>
                    <?php elseif ($gaws->id_waktu_shalat == 2): ?>
                      <div class = "badge badge-info"><b><?php echo $total_qss_ws2;?></div> /
                      <div class = "badge badge-warning"><?php echo $total_tqs_ws2;?></b></div> 
                    <?php elseif ($gaws->id_waktu_shalat == 3): ?>
                      <div class = "badge badge-info"><b><?php echo $total_qss_ws3;?></div> /
                      <div class = "badge badge-warning"><?php echo $total_tqs_ws3;?></b></div>
                    <?php elseif ($gaws->id_waktu_shalat == 4): ?>
                      <div class = "badge badge-info"><b><?php echo $total_qss_ws4;?></div> /
                      <div class = "badge badge-warning"><?php echo $total_tqs_ws4;?></b></div>
                    <?php else: ?>
                      <div class = "badge badge-info"><b><?php echo $total_qss_ws5;?></div> /
                      <div class = "badge badge-warning"><?php echo $total_tqs_ws5;?></b></div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-success">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Seluruh Qada Shalat
                    </h4>
                  </div>
                  <div class="card-body">
                  <div class = "badge badge-info"><b>      
                  <?php echo $total_qss_ws1+$total_qss_ws2+$total_qss_ws3+$total_qss_ws4+$total_qss_ws5; ?> </div> / 
                  <div class = "badge badge-warning">
                  <?php echo $total_tqs_ws1+$total_tqs_ws2+$total_tqs_ws3+$total_tqs_ws4+$total_tqs_ws5; ?></b></div>
                  </div>
                </div>
              </div>
            </div>


          </div>

            <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                <h4>Grafik Jumlah Qada Seluruh Shalatku </h4>
                </div>
                <div class="card-body">
                <canvas id="myChartjs" height="182"></canvas>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card shadow">
                <div class="card-header">
                <h4>Aktifitas Qada Shalatku</h4>
                    <a href="<?php echo base_url().'shalatku/add_qss'?>" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"> </i> Shalat Hari ini </a>
                </div>
                <div class="card-body">             
                  <ul class="list-unstyled list-unstyled-border">
                  <?php foreach($qss->result() as $qss): ?>
                    <li class="media">
                      <div class="media-body">
                        <div class="float-right text-primary">+<?php echo $qss->qss_jumlah; ?> Hari</div>
                        <div class="media-title">
                            <div class = "badge badge-info">
                                <?php
                                foreach ($get_all_user->result() as $gau): 
                                ?>
                                <?php if ($qss->id_user_qss == $gau->id_user): ?>
                                    <?php echo $gau->user_name; ?>
                                <?php else: ?>
                                <?php endif; ?>
                                <?php endforeach; ?>  
                            </div>
                        </div>
                        <span class="text-small text-muted">
                        <?php
                        foreach ($get_all_ws->result() as $gaws): 
                        ?>
                        <?php if ($qss->id_ws_qss == $gaws->id_waktu_shalat): ?>
                             Qada Shalat : <?php echo $gaws->ws_nama; ?>
                        <?php else: ?>
                        <?php endif; ?>
                        
                        <?php endforeach;?>
                        </br>
                        
                        Ditambahkan pada : <?php echo $qss->create_at; ?> 
                        </span>
                        <a href="<?php echo base_url().'shalatku/hapus/'?><?php echo $qss->id_qada_shalat_selesai;?>" class="btn btn-sm btn-danger">Hapus</a>
                      </div>
                    </li>
                    
                    <?php endforeach;?>
                  </ul>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
              <div class="col-12">
                <div class="card shadow">
                  <div class="card-header">
                    <h4>Tabel Data Target Qada Shalatku</h4>
                    
                    <a href="<?php echo base_url().'shalatku/add_tqs'?>" class="btn btn-sm btn-warning"><i class="fas fa-plus-circle"></i> Jumlah Qadaku</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Keterangan Target Qada</th>
                            <th>Waktu Shalat yang di Qada</th>
                            <th>Jumlah Qada</th>
                            <th>Dibuat pada </th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 0;
                            foreach ($tqs->result() as $tqs): 
                            $no++;
                        ?>
                        
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $no;?></td>
                            <td style="vertical-align: middle;"><?php echo $tqs->tqs_keterangan;?></td>
                            <td style="vertical-align: middle;">
                            
                            <?php
                            foreach ($get_all_ws->result() as $gaws): 
                            ?>
                            <?php if ($tqs->id_ws_tqs == $gaws->id_waktu_shalat): ?>
                            <?php echo $gaws->ws_nama; ?>
                            <?php else: ?>
                            <?php endif; ?>
                            
                            <?php endforeach;?>

                            </td>
                            
                            <td style="vertical-align: middle;"><?php echo $tqs->tqs_jumlah;?> Hari</td>
                            <td style="vertical-align: middle;"><?php echo $tqs->create_at;?></td>
                            
                            <td style="vertical-align: middle;">
                            <div class="dropdown d-inline mr-2">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu" > 
                                <a class="dropdown-item has-icon" id="toastr-3" href="<?php echo site_url('shalatku/hapustqs/'.$tqs->id_target_qada_shalat);?>"><i class="fas fa-trash"></i> Hapus</a>
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

            
            


        </section>
    </div>
      <footer class="main-footer">
      <div class  = "footer-left">
      Copyright &copy; <?php echo date('Y');?> <div class = "bullet"></div> Design By <a href = "https://www.facebook.com/ry.a.zuhri">Rachmad Yasser Al Zuhri</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="<?php echo base_url().'theme/assets/js/tooltip.js'?>"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url().'theme/assets/js/stisla.js'?>"></script>
  
  <!-- JS Libraies -->
  <script src="<?php echo base_url().'theme/assets/js/jquery.simpleWeather.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/js/chart.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/js/jquery.vmap.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/js/jquery.vmap.world.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/js/summernote-bs4.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/js/jquery.chocolat.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/chart/dist/chart.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/datatables/js/datatables.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/datatables/js/dataTables.bootstrap4.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/datatables/js/dataTables.select.min.js'?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url().'theme/assets/js/dashboard-general.js'?>"></script>
  <script src = "<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.js' ?>"></script>
  <script src = "<?php echo base_url().'theme/assets/js/page/modules-datatables.js'?>"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url().'theme/assets/js/scripts.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/js/custom.js'?>"></script>

  <?php
    //Inisialisasi nilai variabel awal
    $jmltqs=$total_tqs_ws1+$total_tqs_ws2+$total_tqs_ws3+$total_tqs_ws4+$total_tqs_ws5;
    $jmlqss=$total_qss_ws1+$total_qss_ws2+$total_qss_ws3+$total_qss_ws4+$total_qss_ws5;

    ?>


<script>
var ctx = document.getElementById('myChartjs').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['TARGET ','TERLAKSANA '],
        datasets: [{
            label: 'Qada Shalatku',
            data: [<?=$jmltqs;?>, <?=$jmlqss;?>],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 5
        }],
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        },
    }
});
</script>

<?php if($this->session->flashdata('msg')=='error'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Password dan Konfirmasi Password tidak sama.",
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
                        heading: 'Oops..',
                        text: "Email telah terdaftar.",
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
                        text: "Alhamdulillah, Data Shalat Berhasil disimpan !",
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
                        text: "Data Berhasil dihapus !.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success-target'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Alhamdulillah, Data Target Qada Shalat, Berhasil disimpan !.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error-add'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Oops..',
                        text: "Tidak dapat menambahkan Qada Shalat, karena jumlah Target Qada Shalat telah dicapai/diselesaikan",
                        showHideTransition: 'slide',
                        icon: 'info',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

</body>
</html>




