<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="<?=$this->security->get_csrf_token_name();?>" content="<?=$this->security->get_csrf_hash();?>">
  <meta name="description" content="Aplikasi ini dibuat untuk memudahkan kamu dalam pencatatan qada puasa maupun shalat, dan mengetahui jumlah qada belum dilaksanakan dan qada yang sudah terlaksana." />
  <meta name="author" content="Rachmad Yasser Al Zuhri | rachmad.yasser.a@gmail.com" />
  <title>Login Qadaku - Aplikasi Catatan Qada Puasa dan Shalat</title>
  <link   rel  = "stylesheet" href    = "<?=assets_login_url('css/materialdesignicons.min.css');?>">
  <link   rel  = "stylesheet" href    = "<?=assets_login_url('css/feather.css');?>">
  <link   rel  = "stylesheet" href    = "<?=assets_login_url('css/vendor.bundle.base.css');?>">
  <link   rel  = "stylesheet" href    = "<?=assets_login_url('css/vendor.bundle.addons.css');?>">
  <link   rel  = "stylesheet" href    = "<?=assets_login_url('css/style.css', false);?>">
  <link   rel  = "stylesheet" href    = "<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.css' ?>" type = "text/css" />
  <link   rel  = "shortcut icon" href = "<?=assets_login_url('images/favicon.png');?>" />
  <script type = "application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Application",
    "name": "Sistem Informasi Qada Puasa dan Shalat",
    "logo": "<?=assets_url('images/favicon.png');?>",
    "url": "<?=base_url();?>",
    "sameAs": {
      "https://siqada.my.id/",
    }
  }
  </script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-6 mx-auto">
            <div class="auto-form-wrapper">
              <p class="text-center">
                <img src="<?=assets_login_url('images/logo.png', false);?>" width="135"> 
                <p><center>Aplikasi ini dibuat untuk memudahkan kamu dalam pencatatan qada puasa maupun shalat, dan mengetahui jumlah qada belum dilaksanakan dan qada yang sudah terlaksana.</center></p> 
                <center>Copyright &copy; <?php echo date('Y');?> <div class = "bullet"></div> Design By <a href = "https://bangzuhri.my.id/profil">Rachmad Yasser Al Zuhri</a></center>
              </p>
            </div>
          </div>
&nbsp;
		<div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <?=form_open('auth/login', array('method'=>'post'));?>
			  <p class="text-center">
				<p><center>	Login SiQada</center></p>  
				
            </p> 
                <?php if($this->session->flashdata('msg_alert')) { ?>

                <div class="alert alert-info">
                  <label style="font-size: 13px;"><?=$this->session->flashdata('msg_alert');?></label>
                </div>
                <?php } elseif($this->session->flashdata('success')) {?>
                  <label style="font-size: 13px;"><?=$this->session->flashdata('success');?></label>
                <?php } ?>
                <div class="form-group">
                  <label class="label">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Email Kamu">
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="*********">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Masuk</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0"> 
                  <a href="<?=base_url('register');?>" class="text-small forgot-password text-black">
                  <div class = "badge badge-success">Belum punya akun ?</div></a>
                  
                </div>
              <?=form_close();?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script type = "text/javascript" src = "<?=assets_login_url('js/vendor.bundle.base.js');?>"></script>
  <script type = "text/javascript" src = "<?=assets_login_url('js/vendor.bundle.addons.js');?>"></script>
  <script type = "text/javascript" src = "<?=assets_login_url('js/off-canvas.js');?>"></script>
  <script type = "text/javascript" src = "<?=assets_login_url('js/misc.js ');?>"></script>
  <script type = "text/javascript" src  = "<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.js' ?>"></script>

  <script type = "text/javascript">
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="<?=$this->security->get_csrf_token_name();?>"]').attr('content') },
      xhrFields: {
        withCredentials: true
      },
      dataType: 'json',
      cache: false
    });
  </script>


<?php if($this->session->flashdata('msg')=='error'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Password and Konfirmasi Password tidak sama.",
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
                        text: "Email sudah digunakan, silahkan gunakan email yang lain.",
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
                        text: "Pendaftaran Akun Berhasil, Silahkan Login !",
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
