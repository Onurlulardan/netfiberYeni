<!doctype html>
<html class="no-js" lang="en">

<head>



	<meta charset="utf-8">
	<title>NETFIBER</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

	<!--====== Animate CSS ======-->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!--====== Line Icons CSS ======-->
	<link rel="stylesheet" href="assets/fonts/lineicons/font-css/LineIcons.css">

	<!--====== Bootstrap CSS ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!--====== Default CSS ======-->
	<link rel="stylesheet" href="assets/css/default.css">

	<!--====== Style CSS ======-->
	<link rel="stylesheet" href="assets/css/style.css">




	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">




	<link rel="stylesheet" href="assets/css/form.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />


	<link rel="stylesheet" href="assets/css/newstyle.css">





	<!--====== Jquery js ======-->
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

	<!--====== Bootstrap js ======-->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!--====== Scrolling Nav js ======-->
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/scrolling-nav.js"></script>

	<!--====== Wow js ======-->
	<script src="assets/js/wow.min.js"></script>

	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>

	<!-- Ubuntu Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<style>
		/* Hide scrollbar for Chrome, Safari and Opera */
		.example::-webkit-scrollbar {
			display: none !important;
		}

		/* Hide scrollbar for IE, Edge and Firefox */
		.example {
			-ms-overflow-style: none !important;
			/* IE and Edge */
			scrollbar-width: none !important;
			/* Firefox */
		}

		body {
			overflow-x: hidden;
			/* overflow-y: hidden; */
			height: 100%;
			min-height: 900px !important;
			font-family: 'Ubuntu', sans-serif !important;
		}

		.text-mavi {
			color: #396CAD !important;
			color: #396CAD !important;
			font-family: Ubuntu, sans-serif;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji;
			font-weight: 500;
			line-height: 1.5rem;
			margin-bottom: 1.25rem;
			padding-top: 1.25rem;
			font-size: 1.5rem;
		}


		.border-mavi {
			border: 1px solid #396CAD !important;
		}

		#lbl_hiz_fail {
			text-align: center !important;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji;
			font-size: 1.5rem;
			color: rgb(255 146 28);
		}
	</style>


</head>

<body class=".example">









	<div id="overlay">
		<div class="cv-spinner">
			<span class="spinner"></span>
		</div>
	</div>






	<div id="app" style="margin-top: 0px;">
<input type="hidden" id="hdnBBKID"/>

		<div class="row align-items-center mt-5">

			<div class="col-12 d-flex justify-content-center">

				<div class="col-12 ">

					<div class="card shadow-none">
						<div class="">
							<div class="row shadow-lg bundleFormsp">
								<div class="col-sm-12 col-md-6 mb-3 spform">

									<div>
										<h4 class="subTitle text-mavi pl-3">Adres Hız Sorgulama</h4>
										<div class="row mb-3 mt-3">
											<div class="col-12 ">

												<div class="selectWrapper col-12">
													<select name="sehir" class="form-control custom-select selectBox round rounded-3 sehir">
														<option>Sehir Seçiniz</option>
														<option value="1">ADANA</option>
														<option value="2">ADIYAMAN</option>
														<option value="3">AFYONKARAHİSAR</option>
														<option value="4">AĞRI</option>
														<option value="68">AKSARAY</option>
														<option value="5">AMASYA</option>
														<option value="6">ANKARA</option>
														<option value="7">ANTALYA</option>
														<option value="75">ARDAHAN</option>
														<option value="8">ARTVİN</option>
														<option value="9">AYDIN</option>
														<option value="10">BALIKESİR</option>
														<option value="74">BARTIN</option>
														<option value="72">BATMAN</option>
														<option value="69">BAYBURT</option>
														<option value="11">BİLECİK</option>
														<option value="12">BİNGÖL</option>
														<option value="13">BİTLİS</option>
														<option value="14">BOLU</option>
														<option value="15">BURDUR</option>
														<option value="16">BURSA</option>
														<option value="17">ÇANAKKALE</option>
														<option value="18">ÇANKIRI</option>
														<option value="19">ÇORUM</option>
														<option value="20">DENİZLİ</option>
														<option value="21">DİYARBAKIR</option>
														<option value="81">DÜZCE</option>
														<option value="22">EDİRNE</option>
														<option value="23">ELAZIĞ</option>
														<option value="24">ERZİNCAN</option>
														<option value="25">ERZURUM</option>
														<option value="26">ESKİŞEHİR</option>
														<option value="27">GAZİANTEP</option>
														<option value="28">GİRESUN</option>
														<option value="29">GÜMÜŞHANE</option>
														<option value="30">HAKKARİ</option>
														<option value="31">HATAY</option>
														<option value="76">IĞDIR</option>
														<option value="32">ISPARTA</option>
														<option value="34">İSTANBUL</option>
														<option value="35">İZMİR</option>
														<option value="46">KAHRAMANMARAŞ</option>
														<option value="78">KARABÜK</option>
														<option value="70">KARAMAN</option>
														<option value="36">KARS</option>
														<option value="37">KASTAMONU</option>
														<option value="38">KAYSERİ</option>
														<option value="-1">KIBRIS</option>
														<option value="71">KIRIKKALE</option>
														<option value="39">KIRKLARELİ</option>
														<option value="40">KIRŞEHİR</option>
														<option value="79">KİLİS</option>
														<option value="41">KOCAELİ</option>
														<option value="42">KONYA</option>
														<option value="43">KÜTAHYA</option>
														<option value="44">MALATYA</option>
														<option value="45">MANİSA</option>
														<option value="47">MARDİN</option>
														<option value="33">MERSİN</option>
														<option value="48">MUĞLA</option>
														<option value="49">MUŞ</option>
														<option value="50">NEVŞEHİR</option>
														<option value="51">NİĞDE</option>
														<option value="52">ORDU</option>
														<option value="80">OSMANİYE</option>
														<option value="53">RİZE</option>
														<option value="54">SAKARYA</option>
														<option value="55">SAMSUN</option>
														<option value="56">SİİRT</option>
														<option value="57">SİNOP</option>
														<option value="58">SİVAS</option>
														<option value="63">ŞANLIURFA</option>
														<option value="73">ŞIRNAK</option>
														<option value="59">TEKİRDAĞ</option>
														<option value="60">TOKAT</option>
														<option value="61">TRABZON</option>
														<option value="62">TUNCELİ</option>
														<option value="64">UŞAK</option>
														<option value="65">VAN</option>
														<option value="77">YALOVA</option>
														<option value="66">YOZGAT</option>
														<option value="67">ZONGULDAK</option>
													</select>
												</div>
											</div>
										</div>



										<div id="row_ilce" class="row mb-3">

											<div class="col-12">
												<div class="selectWrapper col-12">
													<select name="ilce" class="form-control rounded-3 ilce custom-select selectBox round">
														<option>İlçe Seçiniz</option>
													</select>
												</div>
											</div>
										</div>




										<div id="row_semt" class="row mb-3">

											<div class="col-12">
												<div class="selectWrapper col-12">
													<select name="semt" class="form-control rounded-3 semt custom-select selectBox round">
														<option>Semt Seçiniz</option>
													</select>
												</div>
											</div>
										</div>



										<div id="row_mahalle" class="row mb-3">
											<br>
											<div class="col-12">
												<div class="selectWrapper col-12">
													<select name="mahalle" class="form-control rounded-3 mahalle custom-select selectBox round">
														<option>Mahalle Seçiniz</option>
													</select>
												</div>
											</div>
										</div>



										<div id="row_sokak" class="row mb-3">

											<div class="col-12">
												<div class="selectWrapper col-12">
													<select name="sokak" class="form-control rounded-3 sokak custom-select selectBox round">
														<option>Sokak Seçiniz</option>
													</select>
												</div>
											</div>
										</div>



										<div id="row_apartman" class="row mb-3">
											<div class="col-12">
												<div class="selectWrapper col-12">
													<select name="apartman" class="form-control rounded-3 apartman custom-select selectBox round">
														<option>Apartman Seçiniz</option>
													</select>
												</div>
											</div>
										</div>



										<div id="row_kapi" class="row mb-3">
											<div class="col-12">
												<div class="selectWrapper col-12">
													<select name="kapi" class="form-control rounded-3 kapi custom-select selectBox round">
														<option>Kapı No Seçiniz</option>
													</select>
												</div>
											</div>
										</div>
										<br>

										<div id="row_buton" class="row mb-3">
											<div class="col-12">
												<div class="selectWrapper col-12 mb-3">
													<a href="javascript:void(0)" class="sorguBtn">Altyapımı Sorgula</a>
												</div>
											</div>
										</div>

										<!-- 
				<div class="row sorgu">
					<div class="col">
						<div class="form-control rounded bbk">SORGU NUMARASI</div>
					</div>
				</div>
				<br>
				<div class="row sorgu sorgu2">
					<div class="col">
						<div class="form-control rounded adres">ADRES</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-block butt0n">Sorgula</button>
			</div>

		
		-->


									</div>
								</div>

								<div class="col-sm-12 col-md-6 spform" id="harita">
									<div class="Home_mapText__ompzR">
										<h1>Yüksek Genişbant Ağı</h1>
										<p>NetFiber tüm Türkiye’de yüksek teknolojiden oluşan çevre dostu 5 ghz wifi ağı ile yüksek genişbant hizmetini kullanıcılarına sunmaktadır.</p>

									</div>
									<div class="undefined group"><img class="group-hover:hidden" src="/deneme/static/media/mappre.f2c9064bf1487b91dab1320b2c3e7817.svg"><img class="hidden group-hover:block" src="/deneme/static/media/mapafter.adbbfe10b756af66515d1c02b2c3326c.svg"></div>
								</div>

								<div class="col-sm-12 col-md-6 spform" id="sonuc_fail" style="display: none">
									<div class=" sonuc_baslik">
										<div class="">

											<div class="row justify-content-center">
												<div id="title_fail" class="text-mavi text-center">Sorgulama Sonuçları</div>
											</div>


											<div class="row ">


												<div class="col-12">



													<div class="pt5 border-3  h-100">
														<div class="card-body">




															<div class="row justify-content-center  mt-1">
																<label id="lbl_hiz_fail" class="title_hiz text-center ">SEÇTİĞİNİZ ADRES İÇİN BOŞ PORT BULUNMADIĞINDAN ŞU ANDA ADRESİNİZE İNTERNET HİZMETİ VERİLEMEMEKTEDİR</label>
															</div>





														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="col-sm-12 col-md-6 justify-content-center " id="sonuc_fail_cover">


									<div class="col-sm-12 col-md-12  spform " id="sonuc" style="display: none">



										<div class=" sonuc_baslik">
											<div class="">

												<div class="row justify-content-center">
													<div id="title_success" class="title_text_lg mt-1 mb-3 text-center text-mavi fw-bold">Sorgulama Sonuçları</div>
												</div>




											<!--	<div id="sonuc_tel">

													<div class="row d-flex justify-content-center ">


														<div class="col-md-12 col-12 col-sm-12 mb-2 text-center">
															<label>Sorgulama Sonuçları İçİn Lütfen Telefon Numaranızı Yazınız</label>
														</div>

														<div class="col-md-12 col-12 col-sm-12 mb-2 text-center mb-3">

															<input onkeyup="adim1Kontrol()" @keypress="adim1Kontrol" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="text" id="materialGsm" placeholder="Cep Telefonu" class="form-control newFormControl">

														</div>

														<div id="sonuc_success3" class="selectWrapper col-12 mb-3">
															<button id="btn_sorgu_show" name="submit" type="submit" class="sorguBtn">Sorgulama Sonuçlarımı Göster</button>
														</div>








													</div>

												</div>-->





												<div id="sonuc_success" class="row " style="display: none">
													<div class="col-md-12 col-12 col-sm-12 mb-2">
														<div class=" pt5 border-3  h-100">
															<div class="card-body">


																<div class="row justify-content-center">
																	<div class=""><img src="speed-svgrepo-com.svg" class="responsive_img"></div>
																</div>

																<div class="row justify-content-center">
																	<div class="title_text  text-center">Adresinizde Alabileceğiniz Maksimum Hız</div>
																</div>

																<div class="row justify-content-center">
																	<label id="lbl_hiz" class="title_hiz"> - MBPS</label>
																</div>

																<div class="row justify-content-center">
																	<div class="title_text text-center">Bağlantı Türü</div>
																</div>
																<div class="row justify-content-center">
																	<label id="lbl_tip" class="title_hiz text-right"> -</label>
																</div>

																<div class="row justify-content-center">
																	<div class="title_text text-center">Santral / Saha Dolabı Tahmini Mesafe</div>
																</div>
																<div class="row justify-content-center">
																	<label id="lbl_santral" class="title_hiz text-right"> - M</label>
																</div>



																<div class="row justify-content-center">
																	<div class="title_text text-center">Tavsiye Edilen Paket</div>
																</div>

																<div class="row justify-content-center">
																	<label id="lbl_tavsiye" class="title_hiz text-center">- - MBPS'E Kadar</label>
																</div>



																<div class="row justify-content-center">
																	<div class="title_text text-center">Paket Fiyatı</div>
																</div>

																<div class="row justify-content-center ">
																	<label id="lbl_fiyat" class="title_hiz text-center">- ₺</label>
																</div>


																<div class="row justify-content-center">
																	<div class="title_text mt-1 text-center  col-12">Diğer Paketlerimiz</div>

																	<div id="diger_paket" class="text-center  col-12">
																	</div>


																</div>

															</div>
														</div>
													</div>

												</div>
											</div>


											<div id="sonuc_success2" class="col-12 text-center mb-3 mt-3" style="display: none">
												<button id="btn_basvur" name="submit" type="submit" class="sorguBtn">Hemen Başvuru Yap</button>
											</div>

										</div>




									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="row align-items-center ">


	</div>



	<br>
	<br>
	<br>

	<div class="main main2 d-none">
		<div class="row align-items-center conT">
			<div class="col d-flex justify-content-center" style="margin: 25px;">
				<div class="d-flex flex-column rounded" style="border: 2px solid #ff8000;">
					<div class="d-flex justify-content-between" style="padding: 0;">
						<div class="p-2 bd-highlight"><img src="assets/images/img_3.jpg" width="65" height="65" class="imgg">Tüm Türkiye'de</div>
						<div class="p-2 bd-highlight"><img src="assets/images/img_2.png" width="65" height="65" class="imgg">FİBER</div>
						<div class="p-2 bd-highlight"><img src="assets/images/img_1.png" width="65" height="65" class="imgg">HIZLI İNTERNET</div>
					</div>
					<div class="getResponse"></div>
					<h5 style="text-align: center;" class="adres1 rounded">ADRES</h5>
					<div class="d-flex flex-row-reverse bd-highlight">
						<div class="p-0 bd-highlight" style="padding: 0;">
							<button class="geriDon" style="padding: 0;padding-left: 8px;">Tekrar Sorgula<i class="fa fa-angle-double-left"></i></button>


							<button class="basvur" style="padding: 0;padding-right: 8px;">Başvuru Yap<i class="fa fa-angle-double-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main main3 d-none">
		<div class="d-flex justify-content-center align-items-center" style="height: 100%;">
			<div class="d-flex align-items-center flex-column">
				<h5 class="d-flex p-3 bd-highlight rounded" style="background-color: #ddd;width: 100%;">NetFiber İnternet Başvurusu</h5>
				<br>
				<form action="sorgu/assets/php/bAction.php" method="post" class="rounded" autocomplete="off" style="width: 700px;background-color: #ddd;padding: 15px;">
					<div class="form-group">
						<label for="adsoyad">AD SOYAD</label>
						<input type="text" class="form-control" name="adsoyad">
					</div>
					<div class="form-group">
						<label for="telefon">TELEFON</label>
						<input onkeyup="adim1Kontrol()" @keypress="adim1Kontrol" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="text" id="materialGsm" class="form-control">
						<small class="form-text text-muted">ZORUNLU ALAN</small>
					</div>
					<div class="form-group">
						<label for="bbkId">SORGU NUMARASI</label>
						<input type="text" class="form-control bbk" style="background-color: white;" name="bbkId" readonly>
					</div>
					<div class="form-group">
						<label for="adresId">ADRES</label>
						<input type="text" class="form-control adres" style="background-color: white;" name="adresId" readonly>
					</div>
					<div class="form-group d-flex flex-row-reverse mb-0">
						<button type="submit" class="btn btn-primary" style="background-color: #ff8000;border:none;" name="bGonder">Hemen Başvur</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<br>
	<br>
	<br>
	<br>




	<script>
		var bbkid;

		var adrestext;

		var tarifeler;

		var musceptel;

		function get_tarifeler() {
			$.ajax({
				url: 'sorgu/assets/php/fonksiyon.php',
				type: 'post',
				cache: false,
				data: {
					f: 'get_tarifeler'
				},
				success: function(response) {

					console.log(response);



					$("#overlay").hide();


					


					
					var jsn = JSON.parse(response);
			

					tarifeler = jsn[0]['tarifeler'];





				}
			});





		}


		$("#btn_basvur").click(function() {

			document.location.href = "basvur.php?bbkid="+bbkid;
			// document.location.href = "https://www.netfiber.com.tr/deneme/basvur";

		});



		$(document).ajaxSend(function() {
			console.log("ajax send");
			$("#overlay").show();
		});



		function adim1Kontrol($event) {
			var x = document.getElementById('materialGsm').value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
			document.getElementById('materialGsm').value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? ' ' + x[3] : '') + (x[4] ? ' ' + x[4] : '');


		}


		$("#btn_sorgu_show").click(function() {

			console.log("sorgu show");

			if ($("#materialGsm").val().length == 15) {

				musceptel = $("#materialGsm").val();


				$("#sonuc_tel").hide();
			
				$("#sonuc_tel").hide();

			}


		});


var sehirSTR;
var ilceSTR;
var semtSTR;
var mahalleSTR;
var sokakSTR;
var apartmanSTR;
var kapiSTR;


		$(document).ready(function() {

			get_tarifeler();



			$(".sehir").change(function() {

				sehirSTR=$('.sehir option:selected').text();
		

				var post_id = 'sid=' + $(this).val();
				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(ilce) {


						$("#harita").show();
						$("#sonuc_success").hide();
						$("#sonuc_success2").hide();
						//$("#sonuc_tel").show();

						$("#sonuc_fail").hide();
						$("#sonuc").hide();

						// $("#row_ilce").show(600);
						// $("#row_semt").hide(600);
						// $("#row_mahalle").hide(600);
						// $("#row_sokak").hide(600);
						// $("#row_apartman").hide(600);
						// $("#row_kapi").hide(600);




						$(".ilce").html(ilce);
						$(".semt").html("<option>Semt Seçiniz</option>");
						$(".mahalle").html("<option>Mahalle Seçiniz</option>");
						$(".sokak").html("<option>Sokak Seçiniz</option>");
						$(".apartman").html("<option>Apartman Seçiniz</option>");
						$(".kapi").html("<option>Kapı Seçiniz</option>");
						$(".bbk").html("SORGU NUMARASI");
						$(".adres").html("ADRES");
						$(".butt0n").html("Sorgula");
						$("#overlay").hide();
					}
				});
			});

			$(".ilce").change(function() {
				var post_id = 'iid=' + $(this).val();

				ilceSTR=$('.ilce option:selected').text();

				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(semt) {


						$("#sonuc_fail").hide();
						$("#sonuc").hide();


						// $("#row_semt").show(600);
						// $("#row_mahalle").hide(600);
						// $("#row_sokak").hide(600);
						// $("#row_apartman").hide(600);
						// $("#row_kapi").hide(600);




						$(".semt").html(semt);
						$(".mahalle").html("<option>Mahalle Seçiniz</option>");
						$(".sokak").html("<option>Sokak Seçiniz</option>");
						$(".apartman").html("<option>Apartman Seçiniz</option>");
						$(".kapi").html("<option>Kapı Seçiniz</option>");
						$(".bbk").html("SORGU NUMARASI");
						$(".adres").html("ADRES");
						$(".butt0n").html("Sorgula");
						$("#overlay").hide();
					}
				});
			});

			$(".semt").change(function() {
				var post_id = 'seid=' + $(this).val();

				semtSTR=$('.semt option:selected').text();

				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(mahalle) {


						$("#sonuc_success").hide();
						$("#sonuc_success2").hide();
						$("#sonuc_tel").show();

						$("#sonuc_fail").hide();
						$("#sonuc").hide();

						// $("#row_mahalle").show(600);
						// $("#row_sokak").hide(600);
						// $("#row_apartman").hide(600);
						// $("#row_kapi").hide(600);


						$(".mahalle").html(mahalle);
						$(".sokak").html("<option>Sokak Seçiniz</option>");
						$(".apartman").html("<option>Apartman Seçiniz</option>");
						$(".kapi").html("<option>Kapı Seçiniz</option>");
						$(".bbk").html("SORGU NUMARASI");
						$(".adres").html("ADRES");
						$(".butt0n").html("Sorgula");
						$("#overlay").hide();
					}
				});
			});

			$(".mahalle").change(function() {
				var post_id = 'mid=' + $(this).val();

				mahalleSTR=$('.mahalle option:selected').text();

				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(sokak) {

						$("#sonuc_fail").hide();
						$("#sonuc").hide();


						// $("#row_sokak").show(600);
						// $("#row_apartman").hide(600);
						// $("#row_kapi").hide(600);


						$(".sokak").html(sokak);
						$(".apartman").html("<option>Apartman Seçiniz</option>");
						$(".kapi").html("<option>Kapı Seçiniz</option>");
						$(".bbk").html("SORGU NUMARASI");
						$(".adres").html("ADRES");
						$(".butt0n").html("Sorgula");
						$("#overlay").hide();
					}
				});
			});

			$(".sokak").change(function() {
				var post_id = 'soid=' + $(this).val();
				sokakSTR=$('.sokak option:selected').text();

				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(apartman) {



						$("#sonuc_success").hide();
						$("#sonuc_success2").hide();
						$("#sonuc_tel").show();

						$("#sonuc_fail").hide();
						$("#sonuc").hide();


						// $("#row_apartman").show(600);
						// $("#row_kapi").hide(600);


						$(".apartman").html(apartman);
						$(".kapi").html("<option>Kapı Seçiniz</option>");
						$(".bbk").html("SORGU NUMARASI");
						$(".adres").html("ADRES");
						$(".butt0n").html("Sorgula");
						$("#overlay").hide();
					}
				});
			});

			$(".apartman").change(function() {
				var post_id = 'apid=' + $(this).val();
				apartmanSTR=$('.apartman option:selected').text();

				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(kapi) {


						$("#sonuc_success").hide();
						$("#sonuc_success2").hide();
						$("#sonuc_tel").show();


						$("#sonuc_fail").hide();
						$("#sonuc").hide();

						$("#row_kapi").show(600);


						$(".kapi").html(kapi);
						$(".bbk").html("SORGU NUMARASI");
						$(".adres").html("ADRES");
						$(".butt0n").html("Sorgula");
						$("#overlay").hide();
					}
				});
			});


			$(".sorguBtn").click(function() {
				var post_id = 'kpid=' + $(".kapi").val();

				kapiSTR=$('.kapi option:selected').text();





				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(bbk) {
						if (bbk == "SORGU NUMARASI") {
						} else {
							adresid = bbk;
							bbkid = bbk;
							$("#hdnBBKID").val(bbkid.trim());
							$("#overlay").hide();
						}
					}
				});

				var post_id = 'adres=' + $(".kapi").val();

				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(adres) {
						if (adres == "ADRES") {
							//	$(".adres").html("ADRES");
							//	$(".butt0n").html("Sorgula");
							//		$("#overlay").hide();
						} else {
								adrestext = adres;


							if (bbkid != "") {
								var post_id = 'bbkIdQuery=' + bbkid;
								$.ajax({
									type: "POST",
									url: "sorgu/assets/php/ajax.php",
									data: post_id,
									cache: false,
									success: function(getResponse) {
										console.log(getResponse);
									
										$("#overlay").hide();


										var aa = $(getResponse).filter('h1');
										var bb = new Array();

										var santral;
										var max_hiz;
										var tavsiye_paket;
										var tavsiye_fiyat;

										if ($(aa[1]).text().length != 0)
											santral = parseInt($(aa[1]).text());
										else
											santral = "";


										if ($(aa[5]).text().length != 0)
											max_hiz = parseInt($(aa[5]).text());
										else
											max_hiz = "";


										console.log("max hiz");
										console.log(max_hiz);


										bb.push(santral);
										bb.push($(aa[3]).text());
										bb.push(max_hiz);
										bb.push($(aa[7]).text());



										if (bb[0].length == 0 && bb[1].length == 0 && bb[2].length == 0 && bb[3].length == 0) {

											$("#sonuc").hide();
											$("#harita").hide(350);
											$("#sonuc_fail").show(350);
											var scrollPos = $("#title_fail").offset().top;
												if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
													var elm = document.getElementById("title_fail");
													elm.scrollIntoView({ behavior: 'smooth', block: 'center' });

												}

								

										} else {


											

											var _Hiz; 

											var sonuc_tarife_tip;
											if (bb[1] == "FİBER")
											{
												sonuc_tarife_tip = 1;
												_Hiz = "100";
											}
											else if (bb[1] == "VDSL")
											{
												sonuc_tarife_tip = 0;
												_Hiz = bb[2];
											}
											else if (bb[1] == "ADSL")
											{
													sonuc_tarife_tip = 2;
													_Hiz = bb[2];
											}
											

											$("#lbl_santral").text(bb[0] + " M");
											$("#lbl_hiz").text(_Hiz + " MBPS");
											$("#lbl_tip").text(bb[1]);

											console.log(tarifeler);


											var len = tarifeler.length;

											var realtavsiye_hiz;

											for (var i = 0; i < len; i++) {

												var tarife_hiz = tarifeler[i]['hiz'];
												var tarife_tip = tarifeler[i]['tip'];
												var tarife_fiyat = tarifeler[i]['fiyat'];
												var tarife_ad = tarifeler[i]['ad'];

												if (tarife_tip == sonuc_tarife_tip /*&& tarife_hiz >= max_hiz*/ ) {


													tavsiye_paket = tarife_ad;
													realtavsiye_hiz = tarife_hiz;
													tavsiye_fiyat = tarife_fiyat;

													break;
												}

											}

											$("#diger_paket").empty();

											for (var i = 0; i < len; i++) {

												var tarife_hiz = tarifeler[i]['hiz'];
												var tarife_tip = tarifeler[i]['tip'];
												var tarife_fiyat = tarifeler[i]['fiyat'];
												var tarife_ad = tarifeler[i]['ad'];
												if (tarife_tip == sonuc_tarife_tip && tarife_hiz != realtavsiye_hiz) {

													if (tarife_tip == 1) {
														//fiber ise tümünü yaz

														var tavsiye_paket2 = tarife_ad;
														var tavsiye_fiyat2 = tarife_fiyat;

														var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");


														$("#diger_paket").append($newdiv1);


													} else if (tarife_tip == 0) {


														if (max_hiz <= 49) {
															break;

														} else if (max_hiz <= 74) {

															if (tarife_hiz < 51) {

																var tavsiye_paket2 = tarife_ad;
																var tavsiye_fiyat2 = tarife_fiyat;
																var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");
																$("#diger_paket").append($newdiv1);


															}
														} else if (max_hiz <= 99) {

															if (tarife_hiz < 76) {

																var tavsiye_paket2 = tarife_ad;
																var tavsiye_fiyat2 = tarife_fiyat;
																var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");
																$("#diger_paket").append($newdiv1);


															}

														} else if (max_hiz > 99) {


															if (tarife_hiz < 101) {

																var tavsiye_paket2 = tarife_ad;
																var tavsiye_fiyat2 = tarife_fiyat;
																var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");
																$("#diger_paket").append($newdiv1);


															}
														}
														//vdsl

													} else if (tarife_tip == 2) {

														return;

													}
												}

											}


											$("#lbl_tavsiye").text(tavsiye_paket);
											$("#lbl_fiyat").text(tavsiye_fiyat + " ₺");



											$("#harita").hide();
											$("#sonuc_fail").hide();
											
												$("#sonuc_success").show();
											$("#sonuc_success2").show();
											$("#sonuc").show(350, function() {});
												save_query();
												
										
												if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
													var elm = document.getElementById("sonuc_success");
													elm.scrollIntoView({ behavior: 'smooth', block: 'center' });

												}


											
										}


									


										console.log(bb);


										$("#overlay").hide();
									}
								});
							}




						}
					}
				});

			});





			$(".kapi").change(function() {
				// var post_id = 'kpid=' + $(this).val();
				// $.ajax({
				// type: "POST",
				// url: "sorgu/assets/php/ajax.php",
				// data: post_id,
				// cache: false,
				// success: function(bbk) {
				// if (bbk == "SORGU NUMARASI") {
				// //	$(".bbk").html("SORGU NUMARASI");
				// //	$(".adres").html("ADRES");
				// //	$(".butt0n").html("Sorgula");
				// //	$("#overlay").hide();
				// } else {
				// adresid = bbk;
				// bbkid = bbk;

				// //	$(".bbk").html("SORGU NUMARASI: " + bbk);
				// //	$(".adres").html("ADRES");
				// //	$(".butt0n").html("Sorgula");
				// //	$(".bbk").val(bbk);
				// //	$(".bbkId").val(bbk);
				// $("#overlay").hide();
				// }
				// }
				// });


				$("#sonuc_success").hide();
				$("#sonuc_success2").hide();
				


				$("#sonuc_fail").hide();
				$("#sonuc").hide();


				var post_id = 'adres=' + $(".kapi").val();
				$.ajax({
					type: "POST",
					url: "sorgu/assets/php/ajax.php",
					data: post_id,
					cache: false,
					success: function(adres) {
						if (adres == "ADRES") {
							//	$(".adres").html("ADRES");
							//	$(".butt0n").html("Sorgula");
							//		$("#overlay").hide();
						} else {
							//	$(".adres").html(adres);
							//	$(".adres1").html(adres + " (BBK: " + $('.bbk').val() + ")");
							//	$(".butt0n").html("Sorgula");
							//	$(".adres").val(adres);
							// 	$(".adresId").val(adres);
							//		$("#overlay").hide();



							adrestext = adres;


							if (bbkid != "") {
								var post_id = 'bbkIdQuery=' + bbkid;
								$.ajax({
									type: "POST",
									url: "sorgu/assets/php/ajax.php",
									data: post_id,
									cache: false,
									success: function(getResponse) {
										//		$(".main1").hide();
										//		$(".main2").slideToggle("slow");
										//		$(".getResponse").html(getResponse);

										console.log(getResponse);

										$("#overlay").hide();


										var aa = $(getResponse).filter('h1');
										var bb = new Array();

										var santral;
										var max_hiz;
										var tavsiye_paket;
										var tavsiye_fiyat;

										if ($(aa[1]).text().length != 0)
											santral = parseInt($(aa[1]).text());
										else
											santral = "";


										if ($(aa[5]).text().length != 0)
											max_hiz = parseInt($(aa[5]).text());
										else
											max_hiz = "";


										console.log("max hiz");
										console.log(max_hiz);


										bb.push(santral);
										bb.push($(aa[3]).text());
										bb.push(max_hiz);
										bb.push($(aa[7]).text());



										if (bb[0].length == 0 && bb[1].length == 0 && bb[2].length == 0 && bb[3].length == 0) {

											$("#sonuc").hide();
											$("#harita").hide();
											$("#sonuc_fail").show(350, function() {
												// Animation complete.

												//en alta scroll için.


												var scrollPos = $("#title_fail").offset().top;

												// $("html, body").animate({
												// 	scrollTop: scrollPos - 200
												// }, 1000);



											});
										} else {


											$("#lbl_santral").text(bb[0] + " M");
											$("#lbl_hiz").text(bb[2] + " MBPS");
											$("#lbl_tip").text(bb[1]);



											var sonuc_tarife_tip;
											if (bb[1] == "FİBER")
												sonuc_tarife_tip = 1;
											else if (bb[1] == "VDSL")
												sonuc_tarife_tip = 0;
											else if (bb[1] == "ADSL")
												sonuc_tarife_tip = 2;



											console.log(tarifeler);


											var len = tarifeler.length;

											var realtavsiye_hiz;




											for (var i = 0; i < len; i++) {

												var tarife_hiz = tarifeler[i]['hiz'];
												var tarife_tip = tarifeler[i]['tip'];
												var tarife_fiyat = tarifeler[i]['fiyat'];
												var tarife_ad = tarifeler[i]['ad'];





												if (tarife_tip == sonuc_tarife_tip /*&& tarife_hiz >= max_hiz*/ ) {


													tavsiye_paket = tarife_ad;
													realtavsiye_hiz = tarife_hiz;
													tavsiye_fiyat = tarife_fiyat;

													break;
												}



											}






											$("#diger_paket").empty();

											for (var i = 0; i < len; i++) {

												var tarife_hiz = tarifeler[i]['hiz'];
												var tarife_tip = tarifeler[i]['tip'];
												var tarife_fiyat = tarifeler[i]['fiyat'];
												var tarife_ad = tarifeler[i]['ad'];





												if (tarife_tip == sonuc_tarife_tip && tarife_hiz != realtavsiye_hiz) {

													if (tarife_tip == 1) {
														//fiber ise tümünü yaz

														var tavsiye_paket2 = tarife_ad;
														var tavsiye_fiyat2 = tarife_fiyat;

														var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");


														$("#diger_paket").append($newdiv1);


													} else if (tarife_tip == 0) {


														if (max_hiz <= 49) {
															break;

														} else if (max_hiz <= 74) {

															if (tarife_hiz < 51) {

																var tavsiye_paket2 = tarife_ad;
																var tavsiye_fiyat2 = tarife_fiyat;
																var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");
																$("#diger_paket").append($newdiv1);


															}
														} else if (max_hiz <= 99) {



															if (tarife_hiz < 76) {

																var tavsiye_paket2 = tarife_ad;
																var tavsiye_fiyat2 = tarife_fiyat;
																var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");
																$("#diger_paket").append($newdiv1);


															}


														} else if (max_hiz > 99) {


															if (tarife_hiz < 101) {

																var tavsiye_paket2 = tarife_ad;
																var tavsiye_fiyat2 = tarife_fiyat;
																var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");
																$("#diger_paket").append($newdiv1);


															}



														}
														//vdsl

													} else if (tarife_tip == 2) {


														return;
														//adsl

													}




												}



											}






											$("#lbl_tavsiye").text(tavsiye_paket);
											$("#lbl_fiyat").text(tavsiye_fiyat + " ₺");




											$("#sonuc_fail").hide();

											$("#sonuc").show(350, function() {
													// Animation complete.

													//en alta scroll için.


													// var scrollPos = $("#title_success").offset().top;

													// $("html, body").animate({
													// 	scrollTop: scrollPos - 160
													// }, 1000);


												}









											);
										}


										console.log("save");











										console.log(bb);


										$("#overlay").hide();
									}
								});
							}




						}
					}
				});
			});
			$(".butt0n").click(function() {
				//bu butonu silecez
				if ($(".bbk").val() != "") {
					var post_id = 'bbkIdQuery=' + $(".bbk").val();
					$.ajax({
						type: "POST",
						url: "sorgu/assets/php/ajax.php",
						data: post_id,
						cache: false,
						success: function(getResponse) {
							//		$(".main1").hide();
							//		$(".main2").slideToggle("slow");
							//		$(".getResponse").html(getResponse);

							console.log(getResponse);


							var aa = $(getResponse).filter('h1');
							var bb = new Array();

							bb.push($(aa[1]).text());
							bb.push($(aa[3]).text());
							bb.push($(aa[5]).text());
							bb.push($(aa[7]).text());



							console.log(bb);


							$("#overlay").hide();
						}
					});
				}
			});
		});





		function save_query() {
				var _sonucHTML = $("#sonuc_success").html();

			$.ajax({
				url: 'sorgu/assets/php/fonksiyon.php',
				type: 'post',


				cache: false,
				data: {
					f: 'save_altyapi',
					adresid: adresid,
					adres: adrestext,
					ceptel: musceptel,
					sonuchtml:_sonucHTML,
					sehir :sehirSTR,
					ilce:ilceSTR,
					semt:semtSTR,
					mahalle:mahalleSTR,
					sokak:sokakSTR,
					apartman:apartmanSTR,
					kapi:kapiSTR

				},

				success: function(response) {



					$("#overlay").hide();
					console.log("sonuc=>"+response);

				}
			});



		}
	</script>





	<style>
		.hidden {
			display: none;
		}

		img,
		video {
			height: auto;
			max-width: 100%;
		}

		.Home_mapText__ompzR {}

		.Home_mapText__ompzR>h1 {
			color: rgb(57 108 173);
			font-size: 28px;
			font-weight: 500;
			line-height: 2.5rem;
			margin-top: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji;
		}

		.Home_mapText__ompzR>p {
			color: rgb(8 37 70);

			margin-bottom: 30px;
			margin-top: 20px;

			--tw-text-opacity: 1;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji;
		}

		.bundleForm {
			border-color: rgb(221 223 231) !important;
			border-radius: 13px !important;

			padding-right: 2rem;
			border: 1px solid rgb(221 223 231);
		}

		.bundleFormsp {
			border-color: rgb(221 223 231) !important;
			border-radius: 13px !important;

			margin: 50px;
			border: 1px solid rgb(221 223 231);
		}

		.spform {
			padding: 15px;
		}

		.sorguBtn {
			background-color: rgb(57 108 173);
			border-radius: 9px;
			color: rgb(255 255 255);
			font-family: Ubuntu, sans-serif;
			font-size: 1rem;
			font-weight: 500;
			line-height: 1.5rem;
			outline: 2px solid transparent;
			outline-offset: 2px;
			padding: 1rem 1rem;
			border: none;
		}

		.sorguBtn:hover {
			background-color: rgb(57 108 173);
			border-radius: 9px;
			color: rgb(255 255 255);
			font-family: Ubuntu, sans-serif;
			font-size: 1rem;
			font-weight: 500;
			line-height: 1.5rem;
			outline: 2px solid transparent;
			outline-offset: 2px;
			padding: 1rem 1rem;
			border: none;
		}


		#sonuc_tel>label {
			display: inline-block !important;
			margin-bottom: 0.5rem !important;
			color: rgb(8 37 70) !important;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.newFormControl {
			border-color: rgb(221 223 231);
			border-radius: 9px;
			border-width: 1px;
			padding: 0.5rem;
			width: 100%;
		}


		.newFormControl::-webkit-input-placeholder {
			/* Chrome/Opera/Safari/Edge */
			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;

		}

		.newFormControl::-ms-input-placeholder {
			/* Microsoft Edge */
			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.newFormControl:-ms-input-placeholder {
			/* IE 10+ */
			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.newFormControl::-moz-placeholder {
			/* Firefox 19+ */
			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.newFormControl:-moz-placeholder {
			/* Firefox 18- */
			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.newFormControl::placeholder {
			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.selectBox {


			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.selectBox option {
			color: rgb(118 121 124);
			font-size: 1rem;
			font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important;
		}

		.title_hiz {

			color: rgb(255 146 28);
			font-size: 2rem;
		}

		@media only screen and (max-width: 600px) {
			.title_hiz {
				font-size: 1.3rem !important;
			}
			
			.bundleFormsp {
			border-color: rgb(221 223 231) !important;
			border-radius: 13px !important;

			margin: 0px;
			border: 1px solid rgb(221 223 231);
		}
		}
	</style>
</body>

</html>