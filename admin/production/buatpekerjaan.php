<?php
  require_once("session.php");
  require_once("class.user.php");
  $auth_user = new USER();
  $user_id = $_SESSION['user_session'];
  $stmt = $auth_user->runQuery("SELECT * FROM buatakun WHERE user_id=:user_id");
  $stmt->execute(array(":user_id"=>$user_id));
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);


  if(isset($_POST['input'])){ 
            $nama = $userRow['user_name']; 
            $namap = $_POST['namap'];
            $upah = $_POST['upah'];
            $kategori = $_POST['kategori'];
            $deskripsi = $_POST['deskripsi'];
            $alamat = $_POST['alamat'];
            $add = $auth_user->addPekerjaan($nama, $namap, $upah, $kategori, $deskripsi, $alamat); 
            }
require_once('layout/header.php');
?>
    <title>Setting</title>
    <script src="login/js/chart-master/Chart.js"></script>
    <script src="js/tiny_mce.js"></script>

<script type="text/javascript">
  tinyMCE.init({
    mode : "textareas",
    theme : "simple"
  });
</script>
  </head>
  <section id="container" >
  <?php
    require_once('layout/theme.php');
  ?>
      <section id="main-content">
          <section class="wrapper">
            <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Buat Pekerjaan Baru</h2>
    <form  class="templatemo-login-form" method="post" enctype="multipart/form-data" action="">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Nama Pekerjaan</label>
                    <input type="text" class="form-control" name="namap" id="inputFirstName" placeholder="Tulis Judul Pekerjaan anda">                  
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Upah / Bayaran Yang ditawarkan (Rp)</label>
                    <input  class="form-control" id="number" name="upah" >                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Kategori</label>
                    <select class="form-control" name="kategori">
                      <option value="">==Pilih Kategori untuk pekerjaan anda==</option>
                      <option value="Website">Website</option>
                      <option value="Design">Design</option>
                      <option value="Programming">Proramming</option>
                      <option value="Rumah Tangga">Rumah Tangga</option>
                      <option value="Jaga Toko">Jaga Toko</option>
                      <option value="Pertukangan">Pertukangan</option>
                      <option value="Foto dan Video">Foto dan Video</option>
                      <option value="Pendidikan">Pendidikan</option>
                      <option value="lain">Lainnya</option>
                    </select>                  
                </div>                
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Deskripsi (tulis deskripsi pekerjaan anda disini)</label>
                    <textarea name="deskripsi" id="elm1" cols="30" rows="10" class="form-control" placeholder="tulis deskripsi pekerjaaan disini"></textarea>
                </div>
                
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    <label class="control-label" for="inputWithSuccess">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputWithSuccess">
                </div>
              </div>

                <div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    
                    <input type="submit" class="btn btn-primary" id="inputWithSuccess" name="input" value="Post">
                </div>
              </div>
            
                                      
            </form>
          </div>
        </div>
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="login/js/jquery.js"></script>
    <script src="login/js/jquery-1.8.3.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="login/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="login/js/jquery.scrollTo.min.js"></script>
    <script src="login/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="login/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="login/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="login/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="login/js/gritter-conf.js"></script>
    <script type="text/javascript" src="js/inputnumber.js"></script>
 
  <script>  
  $('#number').inputmask("numeric", {
    radixPoint: ",",
    groupSeparator: ".",
    digits: 2,
    autoGroup: true,
    prefix: 'Rp ',
    rightAlign: false,
    oncleared: function () { self.Value(''); }
});
  </script>
<?php
require_once('layout/footer.php');
?>
