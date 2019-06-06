<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Login</title>
<?php $this->load->view('templatepelanggan/title.php') ?>
<body>
	<!-- Page Preloder -->
	<?php $this->load->view('templatepelanggan/preloader.php') ?>

	<!-- Header section -->
	
	<!-- Header section end -->
	
	<?php $this->load->view('templatepelanggan/menubar.php') ?>

	<!-- Contact section end -->
	<section class="cart-section-spad" style=" margin: 50px 100px; padding: 0px 400px" align="center">
		
			
			
			
			
                    <!-- Column -->
                 
                    <div style="margin-bottom: : 50px;">
                        <div>
                            <div class="card-body">
                                <div class="contact-form" align="center">
                                	<?php $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>'); ?>
						<h3 style="margin-bottom: 20px;">Masuk</h3>
						<input type="email" placeholder="E-mail">
						<input type="password" placeholder="****">
						<button class="site-btn">Login</button>
						</ul>
					</div>
                            </div>
                        </div>
                    </div>
	
	</section>


	


	<!-- Footer section -->
	
	<!-- Footer section end -->
	 <?php $this->load->view('templatepelanggan/modal.php') ?>



	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan/js.php') ?>

	</body>
</html>
