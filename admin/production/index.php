 <?php
  require_once('layout/header.php');
  require_once('layout/theme.php');
  ?>

        <!-- /top navigation -->


   </head>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-edit"></i> Jumlah Data</span>
              <div class="count"> 
              <?php
                $sql_sm = "SELECT * FROM tb_artikel";
                $jumsm = $conn->query($sql_sm);
              ?>
              <div class="count_bottom"><?php echo $jumsm->num_rows; ?></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-image"></i> Jumlah Gambar</span>
              <div class="count"> 
              <?php
                $sql_sm = "SELECT * FROM tb_artikel";
                $jumsm = $conn->query($sql_sm);
              ?>
              <div class="count_bottom"><?php echo $jumsm->num_rows; ?></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Jumlah Admin</span>
              <div class="count">
              <?php
                $sql_sm = "SELECT * FROM tb_admin";
                $jumsm = $conn->query($sql_sm);
              ?>
              <div class="count_bottom"><?php echo $jumsm->num_rows; ?></div></div>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                    <h2>Selamat datang di system admin dinas Kelautan dan Perikanan Kota Semarang</h2>
                </div>
                 Pada halaman Admin ini, kita dapat melakukan :
                                <ul>
                                    <li>Melakukan pengolahan data Artikel</li>
                                    <li>Melakukan pengolahan data Admin</li>
                                </ul>
              </div>

            </div>

          </div>
          <br />
        </div>
        <!-- /page content -->

        <!-- footer content -->
  <?php
  require_once('layout/footer.php');
  ?>
