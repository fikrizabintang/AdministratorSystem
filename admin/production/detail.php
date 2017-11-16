<?php
    include('header.php');
    $kode=$_GET['kode'];
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">DATA Pesanan HOMZEE</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                        <?php
                         
                        ?>
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                       <tr style="padding:8px">
				<td>User</td>
				<td>Item</td>
				<td>Length</td>
				<td>Width</td>
				<td>Height</td>
				<td>Quantity</td>
				<td>Foto</td>
				<td>Custom</td>
				
				
			</tr>
                                    </thead>

                                    <?php
                                        $sql = "select * from order_tb where kode_pesan = '$kode' ";
                                        $hasil = $conn->query($sql);

                                        if($hasil->num_rows == 0) {
                                            echo "<tbody>";
                                                echo "<tr><td colspan=5> Tidak Ada Data</td></tr>";
                                            echo "<tbody>";
                                        } else {
                                            echo "<tbody>";
                                            $no=1;
                                            while ($data = $hasil->fetch_assoc()) {
                                    ?>
                                      <tr style="padding:8px">
				<td><?php echo $data['nama_pembeli']; ?></td>
				<td><?php echo $data['barang']; ?></td>
				<td><?php echo $data['p']; ?></td>
				<td><?php echo $data['l']; ?></td>
				<td><?php echo $data['t']; ?></td>
				<td><?php echo $data['quant']; ?></td>
				<td><img src="../../admin_homzee/pages/produk/<?php echo $data['foto']; ?>" height=75px width=75px ></td>
				

				<td><a href="../../dist/img/custom/<?php echo $data['upload'];?>" target="_blank"><img src="../../dist/img/custom/<?php echo $data['upload']; ?>" height=75px width=75px ></a></td>
				
				
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
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
