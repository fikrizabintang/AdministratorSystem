 <?php
  include('layout/header.php');
  ?>

        <!-- /top navigation -->
<?php
  require_once('layout/theme.php');
  ?>

  

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Gambar</small></h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">     
                <div class="x_panel">
                  <div class="x_content">

                   
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <tbody>
                       <?php
                                        $sql = "SELECT * FROM tb_artikel ORDER BY id_artikel DESC";
                                        $hasil = $conn->query($sql);

                                        if($hasil->num_rows == 0) {
                                            echo "<tbody>";
                                                echo "<tr><td colspan=4> Tidak Ada Data</td></tr>";
                                            echo "<tbody>";
                                        } else {
                                            echo "<tbody>";
                                            $no=1;
                                            while ($data = $hasil->fetch_assoc()) {
                                    ?>

                                        <div class="col-md-4">
                                         <a class="thumbnail" href="#">
                                            <img src="produk/<?php echo $data['gambar']; ?>" height="200px">
                                          </a>
                                        </div>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>

                                        <?php
                                            }
                                        ?>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
         <?php
  require_once('layout/footer.php');
  ?>