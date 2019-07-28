<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Travel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<?php
function dbConnect(){
$db = new mysqli("localhost","root","","");
return $db;
}
 //$c = mysqli_connect('localhost','root','','');
 //mysql_select_db('dbalatmusik');
?>

    <body>
        <header id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 col-6 header-top-left">

                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 header-top-right">

                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.php">
                            <h2 class="text-white">CITITRANS TRAVEL</h2>
                        </a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class= " nav-menu">
                            <li><a href="index.php">Pesan</a></li>
                            <li><a href="about.html">Tentang</a></li>
                            <li><a href="contact.html">Kontak</a></li>
                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->
                </div>
            </div>
        </header>
        <!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-10 banner-left">
                        <h6 class="text-white">Go To Ride</h6>
                        <h1 class="text-white">CitiTrans Travel</h1>
                        <p class="text-white">
                            Nikmatilah Perjalanan Anda
                        </p>

                    </div>
                    <div class="col-lg-4 col-md-12  banner-right">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#pesan" role="tab" aria-controls="pesan" aria-selected="true"> Tujuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#duduk" role="tab" aria-controls="duduk" aria-selected="false">Tempat Duduk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#bayar" role="tab" aria-controls="bayar" aria-selected="false">Bayar</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pesan" role="tabpanel" aria-labelledby="flight-tab">
                                <form class="form-wrap">
                                    <section>


                                        <select class="form-select" id="kota" onchange="updatePilihanLokasi()">
                                        <option value="" disabled selected>Pilih Kota</option>
                                        <option value="BANDUNG">Bandung</option>
                                        <option value="JAKARTA">Jakarta</option>
                                        <option value="TANGGERANG">Tanggerang</option>
                                        </select>

                                    </section>
                                    <br>
                                    <section>
                                        <select class="form-select" id="lokasi">
									<option value="" disabled selected>Lokasi</option>
								
							</select>
                                    </section>
                                    <script>
                                        function updatePilihanLokasi() {
                                            var selectedIndex = document.getElementById("kota").selectedIndex;
                                            var Kota = document.getElementById("kota").options[selectedIndex].value;
                                            var cb = document.getElementById("lokasi");
                                            // hapus option sebelumnya
                                            while (cb.length > 1)
                                                cb.remove(1);
                                            if (Kota == "BANDUNG") {
                                                var dipatiukur = document.createElement("option");
                                                dipatiukur.text = "Dipatiukur";
                                                dipatiukur.value = "DU";
                                                var pasteur = document.createElement("option");
                                                pasteur.text = "Pasteur";
                                                pasteur.value = "PT";
                                                var pasteurT = document.createElement("option");
                                                pasteurT.text = "Pasteur(Transit)";
                                                pasteurT.value = "PTT";
                                                cb.add(dipatiukur); // tambahkan option ke combobox
                                                cb.add(pasteur);
                                                cb.add(pasteurT);
                                            } else if (Kota == "JAKARTA") {
                                                var centralpark = document.createElement("option");
                                                centralpark.text = "Central Park";
                                                centralpark.value = "CP";
                                                var fatmawati = document.createElement("option");
                                                fatmawati.text = "Fatmawati";
                                                fatmawati.value = "FTI";
                                                var kelapagading = document.createElement("option");
                                                kelapagading.text = "Kelapa Gading";
                                                kelapagading.value = "KG";
                                                var kuningan = document.createElement("option");
                                                kuningan.text = "Kuningan";
                                                kuningan.value = "KNG";
                                                var pondokindah = document.createElement("option");
                                                pondokindah.text = "Pondok Indah";
                                                pondokindah.value = "PI";
                                                var semanggi = document.createElement("option");
                                                semanggi.text = "Semanggi";
                                                semanggi.value = "SMG";
                                                cb.add(centralpark); // tambahkan option ke combobox
                                                cb.add(fatmawati);
                                                cb.add(kelapagading);
                                                cb.add(kuningan);
                                                cb.add(semanggi);
                                            } else if (Kota == "TANGGERANG") {
                                                var bandarasoetta = document.createElement("option");
                                                bandarasoetta.text = "Bandara Soetta";
                                                bandarasoetta.value = "BS";
                                                var bintaro = document.createElement("option");
                                                bintaro.text = "Bintaro";
                                                bintaro.value = "BNTR";
                                                var bsd = document.createElement("option");
                                                bsd.text = "BSD";
                                                bsd.value = "BSD";
                                                cb.add(bandarasoetta); // tambahkan option ke combobox
                                                cb.add(bintaro);
                                                cb.add(bsd);

                                            }
                                        }
                                    </script>
                                    <br>
                                    <section>
                                        <select class="form-select" id="Tujuan" onchange="updatePilihanTujuan()">
								<option value="" disabled selected >Tujuan Ke</option>
								<option value="1">Jakarta</option>
								<option value="2">Bandung</option>
								<option value="3">Tanggerang</option>
                        </select>
                                    </section>
                                    <br>
                                    <section>
                                        <select class="form-select" id="lokasitujuan">
									<option value="" disabled selected>Lokasi Tujuan</option>
								
							</select>
                                    </section>
                                    <script>
                                        function updatePilihanTujuan() {
                                            var selectedIndex = document.getElementById("Tujuan").selectedIndex;
                                            var Tujuan = document.getElementById("Tujuan").options[selectedIndex].value;
                                            var cb = document.getElementById("lokasitujuan");
                                            // hapus option sebelumnya
                                            while (cb.length > 1)
                                                cb.remove(1);
                                            if (Tujuan == "2") {
                                                var dipatiukur = document.createElement("option");
                                                dipatiukur.text = "Dipatiukur";
                                                dipatiukur.value = "DU";
                                                var pasteur = document.createElement("option");
                                                pasteur.text = "Pasteur";
                                                pasteur.value = "PT";
                                                var pasteurT = document.createElement("option");
                                                pasteurT.text = "Pasteur(Transit)";
                                                pasteurT.value = "PTT";
                                                cb.add(dipatiukur); // tambahkan option ke combobox
                                                cb.add(pasteur);
                                                cb.add(pasteurT);
                                            } else if (Tujuan == "1") {
                                                var centralpark = document.createElement("option");
                                                centralpark.text = "Central Park";
                                                centralpark.value = "CP";
                                                var fatmawati = document.createElement("option");
                                                fatmawati.text = "Fatmawati";
                                                fatmawati.value = "FTI";
                                                var kelapagading = document.createElement("option");
                                                kelapagading.text = "Kelapa Gading";
                                                kelapagading.value = "KG";
                                                var kuningan = document.createElement("option");
                                                kuningan.text = "Kuningan";
                                                kuningan.value = "KNG";
                                                var pondokindah = document.createElement("option");
                                                pondokindah.text = "Pondok Indah";
                                                pondokindah.value = "PI";
                                                var semanggi = document.createElement("option");
                                                semanggi.text = "Semanggi";
                                                semanggi.value = "SMG";
                                                cb.add(centralpark); // tambahkan option ke combobox
                                                cb.add(fatmawati);
                                                cb.add(kelapagading);
                                                cb.add(kuningan);
                                                cb.add(semanggi);
                                            } else if (Tujuan == "3") {
                                                var bandarasoetta = document.createElement("option");
                                                bandarasoetta.text = "Bandara Soetta";
                                                bandarasoetta.value = "BS";
                                                var bintaro = document.createElement("option");
                                                bintaro.text = "Bintaro";
                                                bintaro.value = "BNTR";
                                                var bsd = document.createElement("option");
                                                bsd.text = "BSD";
                                                bsd.value = "BSD";
                                                cb.add(bandarasoetta); // tambahkan option ke combobox
                                                cb.add(bintaro);
                                                cb.add(bsd);

                                            }
                                        }
                                    </script>
                                    <br>
                                    <input type="text" class="form-control date-picker" name="Tanggal" placeholder="Tanggal " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal '">



                                    <select class="form-select">
											<option value="" disabled selected >Jam Keberangkatan</option>
											<option value="delapan">08:00</option>
											<option value="sebelas">11:00</option>
											<option value="empatbelas">14:00</option>
											<option value="enambelas">16:00</option>
											<option value="enambelas">19:00</option>
											<option value="enambelas">21:00</option>
									</select>
                                    <br>


                                    <a href="#" class="primary-btn text-uppercase">Berikutnya</a>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="duduk" role="tabpanel" aria-labelledby="hotel-tab">
                                <form class="form-wrap">
                                    <input type="number" min="1" max="20" class="form-control" name="Jumlah" placeholder="Jumlah " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Penumpang '">

                                    
                                    <section>

                                        <select class="form-select">
										<option value="" disabled selected>No Mobil</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4</option>
										<option value="">5</option>
										<option value="">6</option>
										<option value="">7</option>
										<option value="">8</option>
									</select>
                                    </section>
                                    <br>
                                    <section>

                                        <select class="form-select">
								<option value="" disabled selected>No Kursi</option>
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
							</select>
                                    </section>


                                    <a href="#" class="primary-btn text-uppercase">Berikutnya</a>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="bayar" role="tabpanel" aria-labelledby="holiday-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="Nama" placeholder="Nama " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama '">
                                    <input type="text" class="form-control" name="No Telp" placeholder="No Telp " onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Telp '">
                                    <select class="form-select">
									<option value="" disabled selected>Cash Atau Transfer</option>
									<option value="1">Cash</option>
									<option value="2">Transfer</option>
								</select><br>

                                    <input type="text" class="form-control" name="Total" placeholder="Total " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Total '">
                                    <input type="text" class="form-control" name="No Boking" placeholder="No Boking " onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Boking '">
                                    <input type="text" class="form-control" name="No Tiket" placeholder="No Tiket " onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Tiket '">

                                    <a href="#" class="primary-btn text-uppercase">Pesan</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start popular-destination Area -->
        <section class="popular-destination-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Destinations</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/bandung.jfif" alt="">
                            </div>
                            <div class="desc">
                                <a href="#" class="price-btn">Rp. 150.000</a>
                                <h4>Bandung</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/jakarta.webp" alt="">
                            </div>
                            <div class="desc">
                                <a href="#" class="price-btn">Rp. 170.000</a>
                                <h4>Jakarta</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/tanggerang.jpg" alt="">
                            </div>
                            <div class="desc">
                                <a href="#" class="price-btn">Rp. 160.000</a>
                                <h4>Tanggerang</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End popular-destination Area -->


        <!-- Start price Area -->

        <!-- End price Area -->


        <!-- Start other-issue Area -->

        <!-- End other-issue Area -->


        <!-- Start testimonial Area -->

        <!-- End testimonial Area -->

        <!-- Start home-about Area -->

        <!-- End home-about Area -->


        <!-- Start blog Area -->

        <!-- End recent-blog Area -->

        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Tentang CitiTrans</h6>

                            <div class="col">
                                <ul>
                                    <li><a href="#">Tentang</a></li>

                                    <li><a href="#">Servis</a></li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">InstaFeed</h6>
                            <ul class="instafeed d-flex flex-wrap">
                                <img src="img/bca-225544.png" alt="">

                               


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget mail-chimp">
                            <ul class="instafeed d-flex flex-wrap">
                                <img src="img/Master-Card-Blue-icon.png" alt="">


                            </ul>
                        </div>
                    </div>





                </div>


                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with by yusrizal
                        <a href="" target="_blank"></a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/easing.min.js"></script>
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>