
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Daftar Akun &mdash; Qadaku</title>

  <!-- General CSS Files -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/bootstrap/css/bootstrap.min.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/fontawesome/css/all.min.css'?>">

  <!-- CSS Libraries -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/jquery-selectric/selectric.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.css' ?>" type = "text/css" />

  <!-- Template CSS -->
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/style.css'?>">
  <link rel = "stylesheet" href = "<?php echo base_url().'theme/assets/css/components.css'?>">

  
  <link   rel  = "shortcut icon" href = "<?=assets_login_url('images/favicon.png');?>" />


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
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand"> 
              <img src="<?=assets_login_url('images/logo.png', false);?>" alt="logo" width="135" >
            </div>

            <div class="card card-primary shadow">
              <div class="card-header"><img src="<?=assets_login_url('images/siqada.png', false);?>" width="30" height="30"> &nbsp; &nbsp;<h4>  Formulir Pendaftaran</h4> </div>

              <div class="card-body">
              <form style="width:100%" action = "<?php echo base_url().'register/new'?>" method = "post" enctype = "multipart/form-data">
            
                  <div   class = "card-body">
                  <div   class = "form-group row mb-4">
                  <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                  <div   class = "col-sm-12 col-md-7">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap Kamu" required>
                  </div>
                  </div>

                    <div   class = "form-group row mb-4">
                    <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                    <div   class = "col-sm-12 col-md-7">
                    <input type="email" name="email" class="form-control" placeholder="Email Kamu yang Aktif" required>
                    </div>
                    </div>

                    <div   class = "form-group row mb-4">
                    <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">Tgl Lahir</label>
                    <div   class = "col-sm-12 col-md-7">
                    <input type="date" name="tgllahir" class="form-control" placeholder="Tanggal Lahir" required>
                    </div>
                    </div>

                    <div   class = "form-group row mb-4">
                    <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                    <div   class = "col-sm-12 col-md-7">
                    <select class = "form-control" name = "jeniskelamin" required>
                        <option value = "1"> Pria</option>
                        <option value = "2"> Wanita</option>
                    </select>
                    </div>
                    </div>

                    <div   class = "form-group row mb-4">
                    <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">Domisili</label>
                    <div   class = "col-sm-12 col-md-7">
                    <input type="text" name="domisili" class="form-control" placeholder="Domisili Kamu" required>
                    </div>
                    </div>

                    <div   class = "form-group row mb-4">
                    <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">No HP</label>
                    <div   class = "col-sm-12 col-md-7">
                    <input type="text" name="nohp" class="form-control" placeholder="No Hp Kamu" required>
                    </div>
                    </div>

                    <div   class = "form-group row mb-4">
                    <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                    <div   class = "col-sm-12 col-md-7">
                    <input type="password" id="inputpass1" name="password" class="form-control" placeholder="Password" required>
                      </div>
                    </div>
                    <div   class = "form-group row mb-4">
                    <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password </label>
                    <div   class = "col-sm-12 col-md-7">
                    <input type="password" id="inputpass2" onkeyup="cekPass()" name="password2" class="form-control" placeholder="Confirm Password" required>
                      </div>
                      <p id="notifpass"></p>
                    </div> 

                    <div   class = "form-group row mb-4">
                    <div   class = "col-sm-12 col-md-7">
                    <input type="hidden" name = "<?php echo $this->security->get_csrf_token_name();?>"  value = "<?php echo $this->security->get_csrf_hash();?>">
                    </div>
                    </div>
                    
                    </div>

                    <center>
                    <div    class = "form-group row">
                    <label  class = "col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div    class = "col-sm-12 col-md-5">
                    <button class = "btn btn-primary" id="swal-2">Buat Akun</button>
                    </div>
                    </div>
                    </center>
                  </div>
                </div>
            </form>
              
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; SiQada  Design By <a href = "https://www.facebook.com/ry.a.zuhri">Rachmad Yasser Al Zuhri</a>
            </div>
          </div>
        </div>
      </div>
    </section>
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
  <script src = "<?php echo base_url().'theme/assets/jquery-pwstrength/jquery.pwstrength.min.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/jquery-selectric/jquery.selectric.min.js'?>"></script>

  <!-- Page Specific JS File -->
  <script src = "<?php echo base_url().'theme/assets/js/page/auth-register.js'?>"></script>
  <script src = "<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.js' ?>"></script>
  
  <!-- Template JS File -->
  <script src = "<?php echo base_url().'theme/assets/js/scripts.js'?>"></script>
  <script src = "<?php echo base_url().'theme/assets/js/custom.js'?>"></script>
  
  <script type="text/javascript">
        function cekPass(){
            var pass1 = document.getElementById("inputpass1").value;
            var pass2 = document.getElementById("inputpass2").value;
            var ikon

            if(pass2!= pass1){
                document.getElementById("notifpass").innerHTML   = " Password Different ! ";
                document.getElementById("notifpass").style.color = "Red";
            }else{
                document.getElementById("notifpass").innerHTML   = " Password Match ";
                document.getElementById("notifpass").style.color = "Green";
            }
        }

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
