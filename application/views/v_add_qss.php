<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset = "UTF-8">
  <meta content = "width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name = "viewport">
  <meta name="<?=$this->security->get_csrf_token_name();?>" content="<?=$this->security->get_csrf_hash();?>">
  <title>Halaman &rsaquo; Input Baru &mdash; Qada Shalat yang telah dilaksanakan</title>

  <!-- General CSS Files -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/bootstrap/css/bootstrap.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/fontawesome/css/all.min.css'?>">
  <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity = "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin = "anonymous">

  <!-- CSS Libraries -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/codemirror/codemirror.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/codemirror/duotone-dark.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/jquery-selectric/selectric.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.css'?>"  type = "text/css"/>
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/select2.min.css'?>">  

  <!-- Template CSS -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/style.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/components.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/dropify.min.css'?>"  type = "text/css">
  
<!-- Start GA -->
<script async src = "https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div   id    = "app">
  <div   class = "main-wrapper main-wrapper-1">
  <div   class = "navbar-bg"></div>

        <?php
        $this->load->view('v_nav_header');
        $this->load->view('v_menu_pgn');
        ?>

      <!-- Main Content -->
      <div     class = "main-content">
      <section class = "section">
      <div     class = "section-header">
            <h1>Input Baru Qada Shalatku</h1>
            <div class = "section-header-breadcrumb">
            <div class = "breadcrumb-item active"><a href = "#">Dashboard</a></div>
            <div class = "breadcrumb-item"><a href        = "#">Shalatku</a></div>
            <div class = "breadcrumb-item">Input Baru</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Form Data Isian Qada Shalatku</h2>

            <form style="width:100%" action = "<?php echo base_url().'shalatku/create_qss'?>" method = "post" enctype = "multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">

                    <div class="form-group">
                      <label>Pilih Qada Waktu Shalat yang dilaksanakan</label>
                      <select class = "form-control select2" name = "waktushalat" required>
                        <?php foreach ($get_all_ws->result() as $gaws) : ?>
                        <option value="<?php echo $gaws->id_waktu_shalat;?>"><?php echo $gaws->ws_nama;?></option>
                        <?php endforeach;?>
                       </select>
                    </div>

                    <div class="form-group">
                      <label>Jumlah Qada (Shalat) </label>
                      <input type="number" name="jumlah" class="form-control" value="1" required>
                    </div>

                    <div class="form-group ">
                      <input type="hidden" name = "<?php echo $this->security->get_csrf_token_name();?>"  value = "<?php echo $this->security->get_csrf_hash();?>">
                    </div>

                    <div class="form-group">
                    <button style="vertical-align: middle;" class = "btn btn-primary" id="swal-2">Simpan Data</button>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
        </form>    
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
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
  <script src = "<?php echo base_url().'theme/assets/codemirror/codemirror.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/codemirror/javascript.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/jquery-selectric/jquery.selectric.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/js/select2.full.min.js'?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
  <!-- <script src="<?php echo base_url().'theme/assets/js/forms-advanced-forms.js'?>"></script> -->

  
  <!-- Template JS File -->
  <script src = "<?php echo base_url().'theme/assets/js/scripts.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/js/custom.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/js/dropify.min.js'?>"></script>

   <!-- Function JS File -->

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

  <script type="text/javascript">
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="<?=$this->security->get_csrf_token_name();?>"]').attr('content') },
      xhrFields: {
        withCredentials: true
      },
      dataType: 'json',
      cache: false
    });
  </script>
</body>
</html>