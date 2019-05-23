<!DOCTYPE html>
<html lang="zxx">
<?php include('partials/title.php')  ?>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include('partials/header.php')  ?>
	<!-- Header section end -->

    <!-- Page top info -->
    <div class="page-top-info">
        <div class="container">
            <h3>Registrasi Akun</h3>
            <div class="site-pagination">
                <a href="./beranda.php">Beranda</a> /
                <a href="./register.php">Registrasi Akun</a>
                
            </div>
        </div>
    </div>
                
                <!-- Row -->
                <div class="row" style="margin: 40px 100px 40px">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card" style="  
                        background: #f0f0f0;
                        border-radius: 27px;
                        overflow: hidden;">
                            <div class="card-body">
                                <center>  
                                	<input id="foto" type="file" name="gambar" style="">
                                	<div class="row text-center justify-content-md-center" > 
                                        </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card" style="  background: #f0f0f0;
  border-radius: 27px;
  overflow: hidden;">
                            <!-- Tab panes -->
                            <div class="card-body" style="padding-top: 10px">
                                <form class="form-horizontal form-material">
                                    <h3 style="text-align: right; margin-bottom: 20px; margin-right: 50px">Registrasi Akun </h3>
                                    <div class="input-form">
                                        <label class="col-md-12">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nama Lengkap" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="E-mail" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">Nomor Handphone</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nomor Handphone" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">NIK</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nomor Induk Kependudukan" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-sm-12" style="text-align: right;">
                                            <button class="btn btn-danger">Buat Akun</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
            </div>
                    

	<!-- Footer Start -->
	<?php include('partials/footer.php')  ?>
	<!-- Footer End -->

	<!-- Modal Start -->
	<?php include('partials/modal.php') ?>
	<!-- Modal End -->


	<!--====== Javascripts & Jquery ======-->
	<?php include('partials/js.php') ?>

	</body>
</html>