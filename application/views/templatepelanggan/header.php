<header class="header-section" style="background-color: #fff">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="<?php echo base_url() ?>" class="site-logo">
							<img src="<?php echo base_url() ?>/assets1/img/trajek.png" alt="" style="margin: 12px 0px 0px ">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form" action="<?= base_url('index/cari'); ?>" method="post">
							<input type="text" name="keyword" placeholder="Search on trajek ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<!-- <button type="button" data-toggle="modal" data-target="#tambahModal">
                    Masuk
                  </button> -->
								
								<?php 
								if($this->session->userdata('email')==null){
									?>
									<a href="#tambahModal" data-toggle="modal"><i class="flaticon-profile" style="margin: 0px 10px 0px; padding-left: 30px"></i>Masuk</a>
									<?php
								}else{
									if($this->session->userdata('id_jabatan')=='1'){
										$jabatan = 'admin';
									}
									elseif($this->session->userdata('id_jabatan')=='2'){
										$jabatan = 'karyawan';
									}
									elseif($this->session->userdata('id_jabatan')=='3'){
										$jabatan = 'pelanggan';
									}
									?>
									<a href="<?php echo base_url($jabatan) ?>/" data-toggle="modal"><i class="flaticon-profile" style="margin: 0px 10px 0px; padding-left: 30px"></i>Profil</a>
									<?php
								}
								?>

							</div>
							<div class="up-item">
								<div class="shopping-card">
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="<?php echo base_url() ?>">Beranda</a></li>
					<li><a href="<?php echo base_url() ?>/index/about">Tentang Kami</a></li>
					<li><a href="<?php echo base_url() ?>/index/listbarang">Daftar Barang</a></li>
					<li><a href="<?php echo base_url() ?>/index/contact">Kontak</a></li>
					<!-- <li><a href="#">Jewelry
						<span class="new">New</span>
					</a></li> -->
<!-- 					<li><a href="#">Shoes</a>
						<ul class="sub-menu">
							<li><a href="#">Sneakers</a></li>
							<li><a href="#">Sandals</a></li>
							<li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./cart.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li> -->
					
				</ul>
			</div>
		</nav>
	</header>
