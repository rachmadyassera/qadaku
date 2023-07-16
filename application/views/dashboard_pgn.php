
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; SiQada</title>

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
        $this->load->view('v_menu_pgn');
        ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
              
          <div class="col-12">
                <div class="card shadow">
                  <div class="card-header">
                    <h4>INFORMASI TERBARU</h4>
                  </div>
                  <div class="card-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                      <?php 
                        $no = 0;
                        foreach ($data_pgm->result() as $row): 
                            
                        ?>

                        <?php if($no == '0'):?>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="<?php $no; ?>" class="active"></li>
                        <?php else:?>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="<?php $no; ?>"></li>
                        <?php endif;?>
                        
                        <?php $no++;?>
                        
                        <?php endforeach;?>

                      </ol>
                      <div class="carousel-inner">
                        <?php 
                        $no = 0;
                        foreach ($data_pgm->result() as $row): 
                            
                        ?>
                        
                        <?php if($no == '0'):?>
                        <div class="carousel-item active">
                        <?php else:?>
                        <div class="carousel-item">
                        <?php endif;?>
                           
                          <img class="d-block w-100" src="<?php echo assets_url('file-pengumuman/'.$row->gambar_pengumuman);?>" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                          
                          <div class="alert alert-success">
                          <div div class="alert-title"><h5><?php echo $row->judul_pengumuman?></h5></div>
                            <p><?php echo $row->deskripsi_pengumuman?></p>
                        </div>
                          </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      <?php $no++;?>
                      
                      <?php endforeach;?>
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


</body>
</html>




