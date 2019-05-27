<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Trajek Line | Keranjang</title>
	<?php include('partials2/title.php') ?>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include('partials2/header.php') ?>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Keranjang</h4>
			<div class="site-pagination">
				<a href="./beranda.php">Beranda</a> /
				<a href="./cart.php">Keranjang</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Barang</th>
									<th class="quy-th">Jumlah</th>
									<th class="size-th">Tanggal Sewa</th>
									<th class="total-th">Harga</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-col">
										<img src="img/cart/1.jpg" alt="">
										<div class="pc-title">
											<h4>Animal Print Dress</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr>
								<tr>
									<td class="product-col">
										<img src="img/cart/2.jpg" alt="">
										<div class="pc-title">
											<h4>Ruffle Pink Top</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr>
								<tr>
									<td class="product-col">
										<img src="img/cart/3.jpg" alt="">
										<div class="pc-title">
											<h4>Skinny Jeans</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr>
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span>$99.90</span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<a href="./cetak-kode.php" class="site-btn">Proceed to checkout</a>
					<a href="" class="site-btn sb-dark">Continue shopping</a>
					<div class="cart-table">
						<div  style="margin-left: 30px; margin-bottom: 20px; margin-top: -20px">
                                        <label style="font-size: 18px">Metode Pembayaran</label><br>
                                        <input type="radio" name="lunas" value="lunas" style="">&nbsp&nbspLunas<br>
                                        <input type="radio" name="lunas" value="lunas" style="">&nbsp&nbspDP 50%<br>
                                       
                                    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="./img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span style="font-size: 7pt">Tambah barang</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span style="font-size: 7pt">Tambah barang</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span style="font-size: 7pt">Tambah barang</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Tambah barang</span style="font-size: 7pt"></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related product section end -->



	<!-- Footer section --> 
	<?php include('partials2/footer.php') ?>
	<!-- Footer section end -->
	<?php include('partials2/modal.php') ?>




	<!--====== Javascripts & Jquery ======-->
	<?php include('partials2/js.php') ?>
	</body>
</html>
