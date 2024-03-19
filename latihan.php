 <?php 
 include_once 'layout/header.php';
 
 ?>
  <?php 
 include_once 'layout/sidebar.php';
 ?>
 

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper bg-dark">


  <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">e-CarRental</h4>
                            <h1 class="display-1 text-white mb-md-4">Tempat Sewa Mobil Terbaik</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">e-CarRental</h4>
                            <h1 class="display-1 text-white mb-md-4">Mobil Berkualitas Dengan Jarak Tidak Terbatas</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>      
</div>
  <?php include_once 'layout/footer.php'; ?>