<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Daftar Barang</title>
<?php $this->load->view('templatepelanggan//title.php') ?>

<body>
	<!-- Page Preloder -->
	
	<?php $this->load->view('templatepelanggan/preloader.php') ?>

	<!-- Header section -->
<?php $this->load->view('templatepelanggan/header.php') ?>
<?php $this->load->view('templatepelanggan/menubar.php') ?>
	
	<!-- Page info -->
	
	<!-- Page info end -->
	<!-- Sort bar -->
<div class="col-lg-8 col-sm-5" style="margin: 50px 350px 0px 350px; background-color: #F42E3E">
<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="bar-urutkan">
					<li><p style="color: #fff; margin : 5px 50px 5px 30px">Urutkan : </p></li>
					<li><a href="#">Terkait</a></li>
					<li><a href="#">Terlaris</a></li>
					<li><a href="#">Harga</a>
						<ul class="sub-menu">
							<li><a href="#">Termahal</a></li>
							<li><a href="#">Termurah</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		</div>
	<!-- Category section -->
	<section class="category-section" style="margin: 50px">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<li><a href="#">Kamera</a>
								<ul class="sub-menu">
									<div class="col-mg-8">
									<li><a href="#">DSLR <span>(2)</span></a></li>
									<li><a href="#">Mirrorless<span>(56)</span></a></li>
									<li><a href="#">Accessories<span>(36)</span></a></li>
									</div>
								</ul>
							</li>
							<li><a href="#">Mobil</a>
								<ul class="sub-menu">
									<li><a href="#">Toyota <span>(2)</span></a></li>
									<li><a href="#">Hyundai<span>(56)</span></a></li>
									<li><a href="#">Mazda<span>(36)</span></a></li>
								</ul></li>
							<li><a href="#">Motor</a>
								<ul class="sub-menu">
									<li><a href="#">Honda <span>(2)</span></a></li>
									<li><a href="#">Yamaha<span>(56)</span></a></li>
									<li><a href="#">Suzuki<span>(36)</span></a></li>
								</ul></li>
						</ul>
					</div>
					<div class="filter-widget mb-10">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
					<!-- <div class="filter-widget mb-0">
						<h2 class="fw-title">color by</h2>
						<div class="fw-color-choose">
							<div class="cs-item">
								<input type="radio" name="cs" id="gray-color">
								<label class="cs-gray" for="gray-color">
									<span>(3)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color">
									<span>(25)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color">
									<span>(112)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="green-color">
								<label class="cs-green" for="green-color">
									<span>(75)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="purple-color">
								<label class="cs-purple" for="purple-color">
									<span>(9)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color" checked="">
								<label class="cs-blue" for="blue-color">
									<span>(29)</span>
								</label>
							</div>
						</div>
					</div> -->
					<!-- <div class="filter-widget mb-0">
						<h2 class="fw-title">Size</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size">
								<label for="xs-size">XS</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size">
								<label for="s-size">S</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size"  checked="">
								<label for="m-size">M</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size">
								<label for="l-size">L</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">XL</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">XXL</label>
							</div>
						</div>
					</div> -->
					<!-- <div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Abercrombie & Fitch <span>(2)</span></a></li>
							<li><a href="#">Asos<span>(56)</span></a></li>
							<li><a href="#">Bershka<span>(36)</span></a></li>
							<li><a href="#">Missguided<span>(27)</span></a></li>
							<li><a href="#">Zara<span>(19)</span></a></li>
						</ul>
					</div> -->
				</div>
								
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php foreach ($cari as $cari) {
						?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<!-- <div class="tag-sale">ON SALE</div> -->
									<img height="200" width="350" src="<?php echo base_url() ?>/assets/img/barang/<?= $cari['gambar'] ?>" alt="">
									<div class="pi-links">
										<a href="#" class="add-card" onclick="alert('Barang telah ditambahkan')"><i class="flaticon-bag"></i><span style="font-size: 10px">TAMBAH BARANG</span></a>
										<a href="./view-barang.php" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rp. <?= $cari['harga']; ?></h6>
									<p><?= $cari['merk'] ?></p>
								</div>
							</div>
						</div>
						<?php
						} ?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/7.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/8.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/10.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Black and White Stripes Dress</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/11.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/12.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card" onclick="alert('Barang telah ditambahkan')"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="./view-barang-mobil.php" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Rubicon</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/5.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/9.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/1.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-new">new</div>
									<img src="<?php echo base_url() ?>/assets1/img/product/2.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Black and White Stripes Dress</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/3.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="<?php echo base_url() ?>/assets1/img/product/4.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->


	<!-- Footer section -->
	<?php $this->load->view('templatepelanggan//footer.php') ?>
	<!-- Footer section end -->
	<?php $this->load->view('templatepelanggan//modal.php') ?>

	

	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan//js.php') ?>

	</body>
</html>
