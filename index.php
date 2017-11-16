 <?php
      include "koneksi/koneksii.php"; 
  session_start();
 if (isset($_SESSION['name']) || !empty($_SESSION['name']) )
    {
        include "headerlogin.php";
        }
 else{
    include "layout/header.php";
 } 

?>  
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Berita</h2>
            </div>
        </div>
    </div>
    </section>
    <section id="content">
        <div class="container content">     
        <!-- Service Blcoks -->
        <?php 
                            $query="select * from tb_artikel ";
                            $hasil= mysqli_query($con,$query);

                            
                     ?>
       <div class="row features-content"> 
            <div class="col-md-12">  
                <h3>News</h3>
                 <?php while ($data=mysqli_fetch_assoc($hasil)) {?> 
                    
            </div>
        </div>
        <!-- End Service Blcoks -->

        <hr class="margin-bottom-50">

        <!-- Info Blcoks -->
        <div class="row">
        
            <div class="col-sm-12 info-blocks">
                <div class="info-blocks-in">

                    <h3><?php echo $data['judul_artikel']; ?></h3>
                    <img src="admin/production/produk/<?php echo $data['gambar']; ?>"  height=800px width=400px/>
                    <p><?php echo $data['artikel']; ?></p>
                  
                </div>
                <?php } ?>
            </div>
        <!-- End Info Blcoks -->
    </div>
    </section>
<?php
  require_once('layout/footer.php');
?> 