
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard Admin &mdash; SiQada</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/assets/jqvmap/jqvmap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'theme/assets/css/weather-icons.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'theme/assets/css/weather-icons-wind.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'theme/assets/summernote/summernote-bs4.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/chart/dist/chart.css'?>">

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
        $this->load->view('v_menu_adm');
        ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

          <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Target Qada Puasa </h4>
                  </div>
                  <div class="card-body">
                  <?=$jumlah_tqp?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Qada Puasa </h4>
                  </div>
                  <div class="card-body">
                  <?=$total_qps?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Selesai Qada Puasa </h4>
                  </div>
                  <div class="card-body">
                  <?=$total_qps?>
                  </div>
                </div>
              </div>
            </div>  
          </div>


<div class="row">

<div class="col-lg-6 col-md-6 col-6 col-sm-6">
  <div class="card shadow">
    <div class="card-header">
      <h4>Target Baru Qada Puasa</h4>
    </div>
    <div class="card-body">             
      <ul class="list-unstyled list-unstyled-border">
        
          <?php
              foreach ($new_tqp_user->result() as $n_tqp): 
          ?>
        <li class="media">
          <img class="mr-3 rounded-circle" width="50" src="<?php echo base_url().'assets/image-user/user_blank.png';?>" alt="avatar">
          <div class="media-body">
            <div class="float-right text-primary"><?php echo $n_tqp->create_at;?>

            </div>
            <div class="media-title"> <?php echo $n_tqp->tqp_keterangan;?> 
            <?php if ( $n_tqp->tqp_tahun == '0'): ?>
              <?php ?>
            <?php else: ?>
            <?php echo $n_tqp->tqp_tahun;?> 
            <?php endif; ?>
            <div class = "badge badge-info">
            <?php
            foreach ($get_all_user->result() as $gau): 
            ?>
              <?php if ($n_tqp->id_user_tqp == $gau->id_user): ?>
                <?php echo $gau->user_name; ?>
              <?php else: ?>
              <?php endif; ?>
            <?php endforeach; ?>
            </div>
            </div>
            <span class="text-small text-muted">Jumlah Qada  : <?php echo $n_tqp->tqp_jumlah;?>
              
            </span>
          </div>
        </li>
        
        <?php endforeach; ?>
      </ul>
      <!-- <div class="text-center pt-1 pb-1">
        <a href="#" class="btn btn-primary btn-lg btn-round">
          Lihat Semua Target Qada Puasa
        </a>
      </div> -->
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-6 col-6 col-sm-6">
  <div class="card shadow">
    <div class="card-header">
      <h4>Data Menjalankan Qada Puasa</h4>
    </div>
    <div class="card-body">             
      <ul class="list-unstyled list-unstyled-border">
        
          <?php
              foreach ($new_qps_user->result() as $n_qps): 
          ?>
        <li class="media">
          <img class="mr-3 rounded-circle" width="50" src="<?php echo base_url().'assets/image-user/user_blank.png';?>" alt="avatar">
          <div class="media-body">
            <div class="float-right text-primary"><?php echo $n_qps->create_at;?>

            </div>
            <div class="media-title"> 
            <div class = "badge badge-info">
            <?php
            foreach ($get_all_user->result() as $gau): 
            ?>
              <?php if ($n_qps->id_user_qps == $gau->id_user): ?>
                <?php echo $gau->user_name; ?>
              <?php else: ?>
              <?php endif; ?>
            <?php endforeach; ?>  
            </div>
            </div>
            <span class="text-small text-muted">Jumlah Qada  : <?php echo $n_qps->qps_jumlah;?>
              
            </span>
          </div>
        </li>
        
        <?php endforeach; ?>
      </ul>
      <!-- <div class="text-center pt-1 pb-1">
        <a href="#" class="btn btn-primary btn-lg btn-round">
          Lihat Semua Qada Puasa Pengguna 
        </a>
      </div> -->
    </div>
  </div>
</div>  
</div>

    <div class=row>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Target Qada Shalat </h4>
                  </div>
                  <div class="card-body">
                  <?=$jumlah_tqs?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Qada Shalat </h4>
                  </div>
                  <div class="card-body">
                  <?=$total_tqs?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Selesai Qada Shalat </h4>
                  </div>
                  <div class="card-body">
                  <?=$total_qss?>
                  </div>
                </div>
              </div>
            </div>

            <?php
            foreach ($get_all_ws->result() as $gaws): 
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 shadow">
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
            <?php endforeach; ?>
            
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-6 col-sm-6">
          <div class="card shadow">
            <div class="card-header ">
              <h4>Target Baru Qada Shalat </h4>
            </div>
            <div class="card-body">             
              <ul class="list-unstyled list-unstyled-border">
                
                  <?php
                      foreach ($new_tqs_user->result() as $n_tqs): 
                  ?>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="<?php echo base_url().'assets/image-user/user_blank.png';?>" alt="avatar">
                  <div class="media-body">
                    <div class="float-right text-primary"><?php echo $n_tqs->create_at;?>

                    </div>
                    <div class="media-title"> <?php echo $n_tqs->tqs_keterangan;?> 
                    <div class = "badge badge-info">
                    <?php
                    foreach ($get_all_user->result() as $gau): 
                    ?>
                      <?php if ($n_tqs->id_user_tqs == $gau->id_user): ?>
                        <?php echo $gau->user_name; ?>
                      <?php else: ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                    </div>
                    </div>
                    <span class="text-small text-muted">Jumlah Qada  : <?php echo $n_tqs->tqs_jumlah;?> </br>
                    Qada Shalat : 
                    <?php
                    foreach ($get_all_ws->result() as $gaws): 
                    ?>
                      <?php if ($n_tqs->id_ws_tqs == $gaws->id_waktu_shalat): ?>
                        <?php echo $gaws->ws_nama; ?>
                      <?php else: ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                      
                    </span>
                  </div>
                </li>
                
                <?php endforeach; ?>
              </ul>
              <!-- <div class="text-center pt-1 pb-1">
                <a href="#" class="btn btn-primary btn-lg btn-round">
                  Lihat Semua Target Qada Puasa
                </a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-6 col-sm-6">
          <div class="card shadow">
            <div class="card-header">
              <h4>Data Menjalankan Qada Shalat</h4>
            </div>
            <div class="card-body">             
              <ul class="list-unstyled list-unstyled-border">
                
                  <?php
                      foreach ($new_qss_user->result() as $n_qss): 
                  ?>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="<?php echo base_url().'assets/image-user/user_blank.png';?>" alt="avatar">
                  <div class="media-body">
                    <div class="float-right text-primary"><?php echo $n_qss->create_at;?>

                    </div>
                    <div class="media-title"> 
                    <div class = "badge badge-info">
                    <?php
                    foreach ($get_all_user->result() as $gau): 
                    ?>
                      <?php if ($n_qss->id_user_qss == $gau->id_user): ?>
                        <?php echo $gau->user_name; ?>
                      <?php else: ?>
                      <?php endif; ?>
                    <?php endforeach; ?>  
                    </div>
                    </div>
                    <span class="text-small text-muted">Jumlah Qada  : <?php echo $n_qss->qss_jumlah;?> </br>
                    Qada Shalat : 
                    <?php
                    foreach ($get_all_ws->result() as $gaws): 
                    ?>
                      <?php if ($n_qss->id_ws_qss == $gaws->id_waktu_shalat): ?>
                        <?php echo $gaws->ws_nama; ?>
                      <?php else: ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                      
                    </span>
                  </div>
                </li>
                
                <?php endforeach; ?>
              </ul>
              <!-- <div class="text-center pt-1 pb-1">
                <a href="#" class="btn btn-primary btn-lg btn-round">
                  Lihat Semua Qada Puasa Pengguna 
                </a>
              </div> -->
            </div>
          </div>
        </div>  
			</div>
			          
			<div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card shadow">
                <div class="card-header">
                  <h4>Pengguna Baru 
                  <div class = "badge badge-success">Total : <?=$all_user?></div></h4>
                </div>
                <div class="card-body">             
                  <ul class="list-unstyled list-unstyled-border">
                    
                      <?php
                          foreach ($new_user->result() as $nu): 
                      ?>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="<?php echo base_url().'assets/image-user/user_blank.png';?>" alt="avatar">
                      <div class="media-body">
                        <div class="float-right text-primary"><?php echo $nu->create_at;?>

                        </div>
                        <div class="media-title"><?php echo $nu->user_name;?>
                        <?php if ($nu->user_jenis_kelamin == '1'): ?>
                          <div class = "badge badge-info"><?php echo 'Pria'; ?></div>
                          
                        <?php else: ?>
                          <div class = "badge badge-danger"><?php echo 'Wanita'; ?></div>
                        <?php endif; ?>
                        </div>
                        <span class="text-small text-muted">Domisili  : <?php echo $nu->user_domisili;?>
                        </br> 
                        Tgl Lahir : <?php echo $nu->user_tgllahir;?>  <div class = "badge badge-warning"> <?php echo hitung_umur($nu->user_tgllahir)?> </div>
                        </br>
                        No Hp  : <?php echo $nu->user_nohp;?>
                        </br>
                        Email : <?php echo $nu->user_email;?>
                          
                        </span>
                      </div>
                    </li>
                    
                    <?php endforeach; ?>
                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="<?php echo base_url().'pengguna/'?>" class="btn btn-primary btn-lg btn-round">
                      Lihat Semua Pengguna
                    </a>
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

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url().'theme/assets/js/dashboard-general.js'?>"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url().'theme/assets/js/scripts.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/js/custom.js'?>"></script>

  <!-- <?php
    //Inisialisasi nilai variabel awal
    $nama_golongan= "";
    $jumlah=null;

    foreach ($graph_gol as $gol)
    {
        $golongan=$gol->pangkat_gol;
        $nama_golongan .= "'$golongan'". ", ";
        $jum=$gol->total;
        $jumlah .= "$jum". ", ";
    }

    ?>

<script>
var ctx = document.getElementById('myChartjs').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $nama_golongan; ?>],
        datasets: [{
            label: 'Data Pegawai Per Golongan',
            data: [<?php echo $jumlah; ?>],
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
            borderWidth: 1
        }]
    }
});
</script>

<script>
var ctx = document.getElementById('myChartjs2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    }
});
</script> -->

</body>
</html>




