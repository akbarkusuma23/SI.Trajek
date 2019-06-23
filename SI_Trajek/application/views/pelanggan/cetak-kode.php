<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Kode Pembayaran</title>
<?php $this->load->view('templatepelanggan/title.php') ?>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php $this->load->view('templatepelanggan/header.php') ?>
	<!-- Header section end -->
	<?php $this->load->view('templatepelanggan/menubar.php') ?>


	


	<!-- Tentang Perusahaan Start -->

	<section class="cart-section-spad" style="padding: 0px 30px 100px; margin: 50px 0px">
		<div class="cart-table" style="padding-bottom: 50px">
			<?php foreach ($kode as $k ) {
			?>
			<h3 style="text-align: center; margin-bottom: 20px">Kode Pembayaran</h3>
			<h3 style="text-align: center; color: #F42E3E;"><?= $k['id_transaksi'] ?></h3>
			<div class="row">
			
			
                    <!-- Column -->
                    <div class="col-lg-15">
                        <div class="card" style="">
                            
                                <p style="text-align: center; margin: 0px 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
                         
                        </div>
                    </div>
                    <!-- Column -->
                    
	</div>
	</section>
		<!-- Tentang Perusahaan End -->
			<?php
			} ?>

	

	<!-- Footer section -->
	<?php $this->load->view('templatepelanggan/footer.php') ?>
	<!-- Footer section end -->
	<?php $this->load->view('templatepelanggan/modal.php') ?>



	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan/js.php') ?>

	</body>
</html>
