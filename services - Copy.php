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
				<h2 class="pageTitle">Services</h2>
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
                    
            </div>
        </div>
        <!-- End Service Blcoks -->

        <hr class="margin-bottom-50">

        <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-bell-o"></i>
                <div class="info-blocks-in">
                    <h3>Peninjauan Pembangunan Sabuk Pantai Mangunharjo Semarang</h3>
                    <p>Sabuk pantai merupakan salah satu cara penanggulangan abrasi pantai yang di karenakan arus air laut. Pembangunan sabuk pantai Mangunharjo tersebut dilakukan</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Gerakan Bersih Pantai dan Laut</h3>
                    <p>Pemerintah Kota Semarang melalui dinas Perikanan dan Kelautan selaku pihak yang berwenang telah melakukan kegiatan bersih pantai dan laut do Tugurejo pada Tanggal 13 Mei 2015. Kegiatan ini digunakan sebagai salah </p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                <div class="info-blocks-in">
                    <h3>Penyuluhan Gemar Makan Ikan</h3>
                    <p>Kegiatan penyuluhan Gemar Makan Ikan ini dimaksudkan untuk memperkenalkan pada anak bahwa ikan memiliki kandungan gizi yang bagus untuk meningkatkan fungsi otak anak.</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->

       
        <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-code"></i>
                <div class="info-blocks-in">
                    <h3>Sosialisasi Pengelolaan Wilayah Pesisir</h3>
                    <p> Sosialisasi Pengelolaan Wilayah Pesisir Kota Semarang, merupakan kegiatan rutintahunan Dinas Kelautan dan perikanan Kota Semarang melalui Bidang Pengelolaan Wilayah Kelautan dan Pesisir yang tercantum dalam DPA SKPD Dinas Kelautan dan Perikanan Kota Semarang T</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>Abon Keripik Lele</h3>
                    <p>Dengan berbahan dasar ikan lele dapat dibuat berbagai macam olahan camilan, antara lain: lele krispi, daging lele krispi, abon daging lele, duru lele krispi, dll.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-php5"></i>
                <div class="info-blocks-in">
                    <h3>Pengawasan Sabuk Pantai Tambak Lorok</h3>
                    <p>Pada bulan Mei 2016, Dinas Kelautan dan Perikanan Kota Semarang melakukan pengawasan rutin di sabuk pantai Tambak Lorok.</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->

        
    </div>
    </section>
<?php
  require_once('layout/footer.php');
?> 