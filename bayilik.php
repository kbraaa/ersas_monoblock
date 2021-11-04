<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ersas Monoblock</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<!--Owl Carousel-->
	<link rel="stylesheet" href="assets/libs/owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/libs/owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.green.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<?php include "theme/topbar.php"; ?>

	<?php include "theme/navbar.php"; ?>

	<div class="container-fluid footer-area">
		<div class="row">
			<div class="col-md-12 p-0 item header">
				<img src="assets/img/bayilik-bg.png" alt="" height="400" class="w-100 bayilik-bg" style="opacity: 0.1;">
				<div class="col-md-12 text-center text-white al-title contact-title">
					<h1>BAYİLİK BAŞVURU FORMU</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container contactmobil">
		<div class="row">
			<div class="col-md-12 block main-contact-area contact-padding">
				<div class="col-md-6 float-left">
					<h5 class="p-2"><b>FİRMA BİLGİLERİ</b></h5>
					<form>
						<div class="row">
							<div class="col-lg-12 p-0 formblock formblockleft">
								<div class="form-group formblockleft">
									<select class="form-control" id="exampleFormControlSelect1">
										<option>PASCAL PENCERE ÜRETİCİ BAYİLİĞİ</option>
										<option>LOREM IPSUM</option>
										<option>LOREM IPSUM</option>
										<option>LOREM IPSUM</option>
										<option>LOREM IPSUM</option>
									</select>
								</div>
								<input required type="text" placeholder="FİRMA TİCARİ ÜNVANI">
								<input required type="name" placeholder="YETKİLİ KİŞİ ADI SOYADI">
								<div class="d-flex">
									<input required type="tax" placeholder="VERGİ DAİRESİ" class="w-50">
									<input required type="number" placeholder="VERGİ NO" class="w-50">
								</div>
								<input required type="text" placeholder="FİRMA TELEFON NUMARASI">
								<input required type="text" placeholder="CEP TELEFON NUMARASI">
								<input required type="text" placeholder="FİRMA WEB ADRESİ">
								<div class="d-flex">
									<input required type="text" placeholder="İL" class="w-50">
									<input required type="text" placeholder="İLÇE" class="w-50">
								</div>
								<div class="formblock formblockright">
									<textarea required name="" placeholder="ADRES" id="" rows="3"></textarea>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="col-md-6 float-left mt-5">
					<div class="col-lg-12 p-0 formblock formblockleft">
						<div class="formblock formblockright">
							<textarea required name="" placeholder="FAALİYET ALANI" id="" rows="4"></textarea>
						</div>
						<input required type="text" placeholder="BAYİLİK TALEP EDİLEN BÖLGE">
						<div class="d-flex">
							<input required type="text" placeholder="İL" class="w-50">
							<input required type="text" placeholder="İLÇE" class="w-50">
						</div>
						<div class="formblock formblockright">
							<textarea required name="" placeholder="BAYİSİ OLDUĞUNUZ MARKALAR" id="" rows="5"></textarea>
						</div>
						<div class="d-flex">
							<input required type="number" placeholder="ÇALIŞAN KİŞİ SAYISI" class="w-50">
							<input required type="number" placeholder="BAYİLİK ALANI (m2)" class="w-50">
						</div>

						<div class="form-group formblockright">
							<select class="form-control" id="exampleFormControlSelect1">
								<option>MAKİNE PARKINIZ</option>
								<option>LOREM IPSUM</option>
								<option>LOREM IPSUM</option>
								<option>LOREM IPSUM</option>
								<option>LOREM IPSUM</option>
							</select>
						</div>


						<button class="formsubmitbtn" type="submit">GÖNDER</button>
					</div>

				</div>
			</div>
		</div>
	</div>


	<?php include "theme/footer.php"; ?>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<script src="assets/libs/owl/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>



	<!-- JS -->
	<script src="assets/js/app.js"></script>

</body>
</html>