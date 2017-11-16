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
                <h3>Form Berita</small></h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                         <?php
                            $cekgo = $_GET['cekgo'];
                            if ($cekgo == 'ubah'){
                                echo "<div class='alert alert-success alert-dismissable'>";
                                    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                                    echo "Data Berhasil diperbaharui!";
                                echo "</div>";
                            } else if ($cekgo == 'nambah'){
                                echo "<div class='alert alert-success alert-dismissable'>";
                                    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                                    echo "Data Berhasil Ditambahkan!";
                                echo "</div>";
                            } else if ($cekgo == 'hapus'){
                                echo "<div class='alert alert-warning alert-dismissable'>";
                                    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                                    echo "Data Berhasil Dihapus!";
                                echo "</div>";
                            } else if ($cekgo == 'error'){
                                echo "<div class='alert alert-danger alert-dismissable'>";
                                    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                                    echo "Terdapat Kesalahan dalam pemrosesan data!";
                                echo "</div>";
                            } else {

                            }
                        ?>
                <div class="x_panel">
                   <!--<div class="x_title">
                    <h2>Projects</h2>
                    <div class="clearfix"></div>
                  </div>-->
                  <div class="x_content">

                    <a href="tambah_produk.php"><button type="button" class="btn btn-success"> Tambah Data</button></a>
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 20%">Judul Artikel</th>
                          <th>Isi Artikel</th>
                          <th>Gambar</th>
                          <th style="width: 20%">Aksi</th>
                        </tr>
                      </thead>
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
                                        <tr class="gradeX">
                                            <td><?php echo $data['judul_artikel']; ?></td>
                                            <td><?php echo $data['artikel']; ?></td>
                                            <td><img src="produk/<?php echo $data['gambar']; ?>" height="50px"></td>
                                            <td>
                                                <a href="edit_produk.php?id=<?php echo $data['id_artikel']?>">
                                                    <button type="button" class="btn btn-primary" name="edit">Update</button>
                                                </a>
                                                <a href="hapus_produk.php?id=<?php echo $data['id_artikel']?>" onclick="return confirm(\'Yakin?\')">
                                                    <button type="button" class="btn btn-danger" name="hapus">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
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