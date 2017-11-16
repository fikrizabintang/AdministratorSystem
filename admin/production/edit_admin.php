 <?php
            include('konekgo.php');
            include('proses_edit_admin.php');

            $sql = "SELECT * FROM tb_admin WHERE id_admin = '$_GET[id]'";
            $hasil = $conn->query($sql);
            $tampil_data = mysqli_fetch_array($hasil);
            include('layout/header.php');
            require_once('layout/theme.php');
        ?>



        <!-- /top navigation -->
 </head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Edit Admin</h3>
              </div>

             
            </div>
           

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
               
                <div class="x_content">
                  <div id="alerts"></div>
                 <form role="form" action="" method="post">
                   <div class="form-group">
                       <label>Nama Admin :</label>
                        <input class="form-control" name="id_admin" value="<?php echo $tampil_data['id_admin']; ?>" type="hidden">
                        <input class="form-control" name="nama_admin" value="<?php echo $tampil_data['nama_admin']; ?>">
                    </div>
                  
                    <div class="form-group">
                     <label>Username :</label>
                    <input class="form-control" name="username" value="<?php echo $tampil_data['username']; ?>">
                    </div>             
                   <div class="form-group">
                    <label>Password :</label>
                    <input class="form-control" name="password" type="password" value="<?php echo $tampil_data['password']; ?>">
                    </div>           
                <br> 
                  <br>
                 <button type="submit" class="btn btn-default" name="edit" data-toggle="modal" data-target="#myModal">Perbaharui</button>
                <button type="reset" class="btn btn-default">Reset</button>   
                </div>
                </form>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
