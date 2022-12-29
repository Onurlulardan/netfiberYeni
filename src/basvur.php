<?php
if (!isset($_GET['bbkid'])) {
    header("Location: altyapi");
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165571642-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-165571642-1');
    </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>NETFIBER</title>

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



    <script src="sorgu/assets/js/sweetalert2@10.js"></script>

    <!--REmix icon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        .header,
        .footer {
            background: rgb(57, 108, 173);
        }
    </style>
    <style>
        .kargoslc {
            cursor: pointer;
        }

        .kargo-active {
            color: rgb(255 146 28) !important;
        }

        .headerCover {
            --tw-bg-opacity: 1;
            background-color: rgb(57 108 173 / var(--tw-bg-opacity))
        }

        .headerItem {
            width: 100%
        }

        @media (min-width: 640px) {
            .headerItem {
                max-width: 640px
            }
        }

        @media (min-width: 728px) {
            .headerItem {
                max-width: 728px
            }
        }

        @media (min-width: 1024px) {
            .headerItem {
                max-width: 1024px
            }
        }

        @media (min-width: 1110px) {
            .headerItem {
                max-width: 1110px
            }
        }

        .headerItem {
            position: relative;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            height: 150px;
            align-items: center;
            justify-content: space-between
        }

        @media (min-width: 350px) and (max-width: 430px) {
            .headerItem {
                height: 100px
            }
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .headerItem {
                height: 100px;
                padding-left: 1rem;
                padding-right: 1rem
            }
        }

        .headerLogo {
            max-width: 255px
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .headerLogo {
                max-width: 132px
            }

            .headerLogo>a>img {
                max-width: 132px
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .headerLogo {
                max-width: 132px
            }

            .headerLogo>a>img {
                max-width: 132px
            }
        }

        .navigation {
            display: flex
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .navigation {
                display: none
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .navigation {
                display: none
            }
        }

        .navigationItem {
            display: flex;
            align-items: center;
            gap: 1.75rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .navigationItem>a {
            display: flex;
            align-items: center;
            gap: 1.75rem;
            justify-content: center;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .links {
            font-family: Ubuntu, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.25rem;
            color: rgb(255 255 255)
        }

        .btn1 {
            height: 42px;
            width: 145px;
            border-radius: 9px;
            border-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(255 146 28 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(255 146 28 / var(--tw-bg-opacity));
            text-align: center;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            line-height: 42px;
            color: rgb(255 255 255);
            --tw-shadow: 0 3px 6px rgba(0, 70, 126, 0.15);
            --tw-shadow-colored: 0 3px 6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .btn2 {
            height: 42px;
            width: 145px;
            border-radius: 9px;
            border: none !important;
            --tw-bg-opacity: 1;
            background-color: rgb(255 146 28 / var(--tw-bg-opacity));
            text-align: center;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            line-height: 42px;
            color: rgb(255 255 255) !important;
            --tw-shadow: 0 3px 6px rgba(0, 70, 126, 0.15);
            --tw-shadow-colored: 0 3px 6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .btn1:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 146 28 / var(--tw-text-opacity))
        }

        .btn2:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 146 28 / var(--tw-text-opacity))
        }

        .navigationMobile {
            display: none;
            cursor: pointer;
            align-items: center;
            justify-content: center
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .navigationMobile {
                display: flex
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .navigationMobile {
                display: flex
            }
        }

        .navigationMobileMenu {
            position: absolute;
            top: 95px;
            z-index: 50;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            --tw-bg-opacity: 1;
            background-color: rgb(57 108 173 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .navigationMobileMenuItemCover {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: left
        }

        .navigationMobileMenuItem {
            display: flex;
            height: 280px;
            flex-direction: column;
            gap: 2.25rem;
            margin-top: 50px;
        }

        .searchCompCover {
            position: absolute;
            left: 50%;
            top: 0px;
            z-index: 100;
            height: 100%;
            width: 100%;
            transform: translateX(-50%);
            --tw-bg-opacity: 1;
            background-color: rgb(57 108 173 / var(--tw-bg-opacity))
        }

        .text-mavi {
            color: #396CAD !important;
            font-family: Ubuntu, sans-serif;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji;
            font-weight: 500;
            line-height: 1.5rem;
            margin-bottom: 1.25rem;
            padding-top: 1.25rem;
            font-size: 1.5rem;
        }

        .text-turuncu {
            color: rgb(255 146 28);
        }

        .text-mavii {
            color: #396CAD !important;
            font-weight: bold;
        }

        .imaage {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .imaage>img {
            max-width: 350px;
        }

        @media screen and (max-width: 550px) {

            #adimBir,
            #adimIki,
            #adimUc,
            #adimDort {
                font-size: 12px;
                display: flex;
            }
        }

        @media screen and (max-width: 375px) {

            #adimBir,
            #adimIki,
            #adimUc,
            #adimDort {
                font-size: 10px;
                display: flex;
            }
        }
    </style>

</head>

<body>



    <div id="app" style="margin-top: 25px;">

        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-6 ">
                <div class="md-form md-outline mt-0">
                    <div class="form-row" id="pnlVerification">


                        <small class="form-text text-muted mb-2" style="font-size:14px">
                            Hoş Geldiniz ! başvurunuza devam edebilmemiz ve sizinle başvuru sonrası
                            iletişime geçebilmemiz için lütfen iletişim numaranızı yazınız
                        </small>
                        <input type="hidden" id="verificationCode">

                        <div id="phoneNumber" class="col-md-12 md-form md-outline mt-2">
                            <input type="text" id="otpPhone" name="otpPhone" onkeyup="phoneControl()" @keypress="phoneControl" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="text" class="form-control" placeholder="Telefon Numaranız">
                            <div class="col-md-12 md-form md-outline mt-2 container d-flex">
                                <a onclick="smsGonder()" class="btn2 w-100 ml-0 each-active mt-3">Doğrulama Kodu Gönder</a>
                            </div>
                        </div>
                        <div id="verificationNumber" class="col-md-12 md-form md-outline mt-2" style="display:none">
                            <input type="text" id="phoneVer" name="phoneVer" class="form-control" placeholder="Doğrulama Kodunu Giriniz">
                            <div class="col-md-12 md-form md-outline mt-2 container d-flex">
                                <a onclick="verificationNumber()" class="btn2 w-100 ml-0 each-active">Numaramı Doğrula</a>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>


        <div id="pnlAccourdion">
            <div class="row topInfoHeader noselect">
                <div id="adimBir" class="col-md-3 col-3 col-sm-3 each-start text-mavii" style="cursor: pointer;">
                    <span class="each-number">1.</span>
                    <span class="each-title">İLETİŞİM BİLGİLERİNİZ</span>
                    <span id="showDegistir1" class="degistir "> - (Değİştİr)</span>
                </div>
                <div id="adimIki" class="col-md-3 col-3 col-sm-3 each-middle" style="cursor: pointer;">
                    <span class="each-number">2.</span>
                    <span class="each-title">ADRES BİLGİLERİNİZ</span>
                    <span id="showDegistir2" class="degistir"> - (Değİştİr)</span>
                </div>
                <div id="adimUc" class="col-md-3 col-3 col-sm-3 each-middle" style="cursor: pointer;">
                    <span class="each-number">3.</span>
                    <span class="each-title">TERCİHLER</span>
                    <span id="showDegistir3" class="degistir"> - (Değİştİr)</span>
                </div>
                <div id="adimDort" class="col-md-3 col-3 col-sm-3 each-end" style="cursor: pointer;">
                    <span class="each-number">4.</span>
                    <span class="each-title">KİMLİK BİLGİLERİNİZ</span>
                    <span id="showDegistir4" class="degistir"> - (Değİştİr)</span>
                </div>
            </div>
            <div class="row m-3">
            </div>

            <!-- Adim 1 START -->
            <div id="adim1" class="col-md-12">
                <div class="card shadow-none">
                    <div class="card-body">
                        <h5 class="card-title">İLETİŞİM BİLGİLERİNİZ</h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-md-6">
                                <form name="formAdim1">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="md-form md-outline mt-0">
                                                <input type="text" onkeyup="adim1Kontrol()" id="materialAd" class="form-control">
                                                <label for="materialAd">Adınız*</label>
                                                <small class="form-text text-muted mb-4">Ad alanı boş bırakılamaz</small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="md-form md-outline mt-0">
                                                <input type="text" onkeyup="adim1Kontrol()" id="materialSoyad" class="form-control">
                                                <label for="materialSoyad">Soyadınız*</label>
                                                <small class="form-text text-muted mb-4">Soyad alanı boş bırakılamaz</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-form md-outline mt-0">
                                        <input onkeyup="adim1Kontrol()" type="text" id="materialEmail" class="form-control">
                                        <label data-error="wrong" data-success="right" for="materialEmail">E-posta adresiniz*</label>
                                        <small v-if="mailConf" class="form-text text-muted mb-4">Geçerli e-posta adresi girin. Örn: fiber@net.com</small>
                                    </div>
                                    <div class="md-form md-outline mt-0">
                                        <input onkeyup="adim1Kontrol()" @keypress="adim1Kontrol" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="text" id="materialGsm" class="form-control">
                                        <!-- <label for="materialGsm">GSM numaranız*</label> -->
                                        <small id="gsmConf" style="display:none;" class="form-text text-muted mb-4">Geçerli telefon numarası girin. Örn: (555) 555 55 55</small>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input onclick="adim1Kontrol()" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="false" />
                                        <label class="form-check-label veriisleme" for="inlineCheckbox1">Kişisel veri aydınlatma metnini okudum</label>
                                    </div><br>
                                    <div class="form-check form-check-inline">
                                        <input onclick="adim1Kontrol()" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="false" />
                                        <label class="form-check-label veriisleme" for="inlineCheckbox2">Kişisel verilerimin işlenmesine izin veriyorum</label>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center imaage">
                                    <img src="/deneme/static/media/altyapiimg.e89c0b6da7decf30286a.png">
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Adim 1 END -->

            <!-- Adim 2 START -->
            <div id="adim2" class="col-md-12">
                <div class="card shadow-none">
                    <div class="card-body">
                        <h5 class="card-title">ADRES BİLGİLERİNİZ</h5>
                        <p class="card-text">
                        <div class="row">




                            <div class="col-md-12 row justify-content-center" id="currentAdres">

                            </div>

                            <div class="col-md-12" id="currentSonuc">

                            </div>
                        </div>
                        </p>
                    </div>




                </div>
            </div>



            <!-- Adim 2 END -->




            <!-- Adim 3 START -->

            <div id="adim3" class="col-md-12">
                <div class="card shadow-none">
                    <div class="card-body">

                        <p class="card-text">


                        <div class="row align-items-center ">


                            <div class="col-12 d-flex justify-content-center">




                                <div class="col-md-9 col-12 col-sm-12 mt-2" id="sonuc_fail" style="display: none;">



                                    <div class="card shadow-lg bg-dark sonuc_baslik p-3">
                                        <div class="card-body shadow-lg">

                                            <div class="row justify-content-center">
                                                <div id="sonuc_title" class="title_text_lg mb-3 text-center text-mavi">ADRES BAĞLANTI SONUÇLARI</div>
                                            </div>


                                            <div class="row ">


                                                <div class="col-12">


                                                    <div class="card shadow-lg  bg-dark border border-danger pt5 border-3  h-100">
                                                        <div class="card-body">




                                                            <div class="row justify-content-center  mt-1">
                                                                <label id="lbl_hiz_fail" class="title_hiz text-center">SEÇTİĞİNİZ ADRES İÇİN BOŞ PORT BULUNMADIĞINDAN ŞU ANDA ADRESİNİZE İNTERNET HİZMETİ VERİLEMEMEKTEDİR</label>
                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>




                                <div class="col-md-9 col-12 col-sm-12 " id="sonuc" style="display: none;">



                                    <div class="card shadow-lg  sonuc_baslik p-3">
                                        <div class="card-body">

                                            <div class="row justify-content-center">
                                                <div class="title_text_lg mt-1 mb-3 text-center text-mavi">ADRES BAĞLANTI SONUÇLARI</div>
                                            </div>










                                            <div id="sonuc_success" class="row ">


                                                <div class="col-md-6 col-12 col-sm-12">


                                                    <div class="card shadow-none   pt5   h-100">
                                                        <div class="card-body">


                                                            <div class="row justify-content-center">
                                                                <div class=""><img src="speed-svgrepo-com.svg" class="responsive_img"></div>
                                                            </div>

                                                            <div class="row justify-content-center">
                                                                <div class="title_text mt-3 text-center">DESTEKLENEN EN YÜKSEK HIZ</div>
                                                            </div>

                                                            <div class="row justify-content-center  mt-1">
                                                                <label id="lbl_hiz" class="title_hiz text-turuncu"> - MBPS</label>
                                                            </div>

                                                            <div class="row justify-content-around d-flex">

                                                                <div class="title_text text-left ">BAĞLANTI TÜRÜ :</div>
                                                                <div><label id="lbl_tip" class="title_hiz text-right text-turuncu"> -</label></div>
                                                            </div>

                                                            <div class="row justify-content-around d-flex">

                                                                <div class="title_text text-left ">SANTRAL UZAKLIĞI :</div>
                                                                <div><label id="lbl_santral" class="title_hiz text-right text-turuncu"> - M</label></div>
                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>







                                                <div class="col-md-6 col-12 col-sm-12">
                                                    <div class="card shadow-none  pt5   h-100">
                                                        <div class="card-body">



                                                            <div class="row justify-content-center">
                                                                <div class="title_text mt-3 text-center">TAVSİYE EDİLEN PAKET</div>
                                                            </div>

                                                            <div class="row justify-content-center  mt-1">
                                                                <label id="lbl_tavsiye" class="title_hiz text-center text-turuncu">- - MBPS'E KADAR</label>
                                                            </div>



                                                            <div class="row justify-content-center">
                                                                <div class="title_text mt-1 text-center">PAKET FİYATI</div>
                                                            </div>

                                                            <div class="row justify-content-center ">
                                                                <label id="lbl_fiyat" class="title_hiz_lg text-center text-turuncu">- ₺</label>
                                                            </div>


                                                            <div class="row justify-content-center">
                                                                <div class="title_text mt-1 text-center">DİĞER PAKETLERİMİZ</div>

                                                                <div id="diger_paket" class="text-center text-turuncu">
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












                        </p>

                        <div id="afterfail" class="container">

                            <p class="card-text">
                                <span class="font-weight-bold mt-5">Tarife Paket Seçimi</span>

                            <div class="form-check form-check-inline col-10">


                                <div class="col-12 col-md-12 col-sm-12">



                                    <div class="selectWrapper col-12">
                                        <ul class="tarifeler text-center">

                                        </ul>
                                        <h4 class=" text-center">
                                            Taahütsüz İnternet-Evde Kurulum ve Bağlantı Ücretli- 200 TL
                                        </h4>
                                        <!-- <select id="select_location" name="txt_destination" data-style="btn-primary" class=" font-weight-bold  text-uppercase text-black text-center custom-select selectBox round rounded-0  bg-black form-control">
                                            <option value="">TARİFE PAKET SEÇİMİ YAPIN</option>
                                        </select> -->

                                    </div>


                                </div>


                            </div><br>



                            </p>


                            <!--  <p class="card-text">
                                <span class="font-weight-bold mt-5">Ek Hizmet Seçimi</span>
                            <div class="ml-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5" />
                                    <label class="form-check-label" for="inlineCheckbox5">Güvenli internet profili istiyorum (Ücretsiz)</label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6" />
                                    <label class="form-check-label" for="inlineCheckbox6">Statik IP</label>
                                </div><br>
                                <div class="form-check form-check-inline d-none">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7" />
                                    <label class="form-check-label" for="inlineCheckbox7">Ev telefonu</label>
                                </div><br>
                            </div>
                            </p>-->

                            <!--<p class="card-text">
                                <span class="font-weight-bold"></span>
                                <span class="font-weight-bold"></span>
                            <div class="ml-3 ">
                                <p class="text-dark">Abonelik Sözleşme Evraklarımızı Sitemizden Başvuru Şifreniz ile İndirebilirsiniz.</p>
                                <p class="text-dark">Başvurunuzu Tamamladıktan Sonra Kimlik Resminizi Yüklemeyi Unutmayınız</p>
                            </div>
                            </p>-->
                        </div>
                    </div>
                </div>
            </div>


            <!-- Adim 3 END -->

            <!-- Adim 4 START -->
            <div id="adim4" class="col-md-12">
                <div class="card shadow-none">
                    <div class="card-body">
                        <h5 class="card-title">KİMLİK BİLGİLERİNİZ</h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form md-outline mt-4">

                                    <select id="kimlikTipi" class="form-control">
                                        <option value="0" selected>Kimlik Tipini Seçiniz</option>
                                        <option value="1">TC Çipli Kimlik Kartı</option>
                                        <option value="2">TC Nüfus Cüzdanı</option>

                                    </select>


                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <div class="yeniKimlik" style="display:none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="yeniKimlikTc">Tc Kimlik No*</label>
                                    <input name="yeniKimlikTc" class="form-control" type="text" id="yeniKimlikTc" maxlength="11" />
                                    <small class="tcUyari"></small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">Doğum Tarihi </label>
                                    <select class="custom-select" id="yeniKimlikDogumGun">
                                        <option selected>Gün</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">&nbsp;</label>
                                    <select class="custom-select" id="yeniKimlikDogumAy">
                                        <option selected>Ay</option>
                                        <option value="01">Ocak</option>
                                        <option value="02">Şubat</option>
                                        <option value="03">Mart</option>
                                        <option value="04">Nisan</option>
                                        <option value="05">Mayıs</option>
                                        <option value="06">Haziran</option>
                                        <option value="07">Temmuz</option>
                                        <option value="08">Ağustos</option>
                                        <option value="09">Eylül</option>
                                        <option value="10">Ekim</option>
                                        <option value="11">Kasım</option>
                                        <option value="12">Aralık</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">&nbsp;</label>
                                    <select class="custom-select" id="yeniKimlikDogumYil">
                                        <option selected>Yıl</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <label for="yeniKimlikAnneAdi">Anne Adı*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="yeniKimlikAnneAdi" class="form-control">

                                </div>
                                <div class="col-md-6">
                                    <label for="yeniKimlikBabaAdi">Baba Adı*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="yeniKimlikBabaAdi" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Cinsiyet *</label>
                                    <select id="yeniKimlikCinsiyet" class="form-control">
                                        <option value="0" selected>Cinsiyet Seçiniz</option>
                                        <option value="Erkek">Erkek</option>
                                        <option value="Kadın">Kadın</option>

                                    </select>

                                </div>


                                <div class="col-md-6">
                                    <label for="yeniKimlikDogumYeri">Doğum Yeri *</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="yeniKimlikDogumYeri" class="form-control">

                                </div>


                                <div class="col-md-6">
                                    <label for="yeniKimlikSeriNo">Kimlik Seri No *</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="yeniKimlikSeriNo" class="form-control">

                                </div>


                            </div>

                        </div>


                        <!--sss-->
                        <div class="eskiKimlik" style="display:none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="eskiKimlikTC">Tc Kimlik No*</label>
                                    <input name="eskiKimlikTC" class="form-control" type="text" id="eskiKimlikTC" maxlength="11" />
                                    <small class="tcUyari"></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">Doğum Tarihi </label>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Gün</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">&nbsp;</label>
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>Ay</option>
                                        <option value="01">Ocak</option>
                                        <option value="02">Şubat</option>
                                        <option value="03">Mart</option>
                                        <option value="04">Nisan</option>
                                        <option value="05">Mayıs</option>
                                        <option value="06">Haziran</option>
                                        <option value="07">Temmuz</option>
                                        <option value="08">Ağustos</option>
                                        <option value="09">Eylül</option>
                                        <option value="10">Ekim</option>
                                        <option value="11">Kasım</option>
                                        <option value="12">Aralık</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">&nbsp;</label>
                                    <select class="custom-select" id="inputGroupSelect03">
                                        <option selected>Yıl</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <label for="">Cinsiyet *</label>
                                    <select id="eskiKimlikCinsiyet" class="form-control">
                                        <option value="0" selected>Cinsiyet Seçiniz</option>
                                        <option value="Erkek">Erkek</option>
                                        <option value="Kadın">Kadın</option>

                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <label for="eskiKimlikDogumYeri">Doğum Yeri *</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikDogumYeri" class="form-control">

                                </div>


                                <div class="col-md-6">
                                    <label for="eskiKimlikAnneKizlik">Anne Kızlık Soyadi*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikAnneKizlik" class="form-control">

                                </div>
                                <div class="col-md-6">
                                    <label for="eskiKimlikSeriNo">Kimlik Seri No *</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikSeriNo" class="form-control">

                                </div>

                                <div class="col-md-6">
                                    <label for="eskiKimlikSirano">Sıra Numarası*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikSirano" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="eskiKimlikCiltno">Cilt Numarası*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikCiltno" class="form-control">
                                </div>


                                <div class="col-md-6">
                                    <label for="eskiKimlikAilesira">Aile Sıra Numarası*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikAilesira" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="eskiKimlikKayitliSehir">Kayıtlı Olduğu İl*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikKayitliSehir" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="eskiKimlikKayitliilce">Kayıtlı Olduğu İlçe*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikKayitliilce" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="eskiKimlikKayitliMahalle">Kayıtlı Olduğu Mahalle*</label>
                                    <input onkeyup="adim4Kontrol()" type="text" id="eskiKimlikKayitliMahalle" class="form-control">
                                </div>

                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">Kimlik Veriliş Tarihi </label>
                                    <select class="custom-select" id="eskiKimlikGun">
                                        <option selected>Gün</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">&nbsp;</label>
                                    <select class="custom-select" id="eskiKimlikAy">
                                        <option selected>Ay</option>
                                        <option value="01">Ocak</option>
                                        <option value="02">Şubat</option>
                                        <option value="03">Mart</option>
                                        <option value="04">Nisan</option>
                                        <option value="05">Mayıs</option>
                                        <option value="06">Haziran</option>
                                        <option value="07">Temmuz</option>
                                        <option value="08">Ağustos</option>
                                        <option value="09">Eylül</option>
                                        <option value="10">Ekim</option>
                                        <option value="11">Kasım</option>
                                        <option value="12">Aralık</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-4 col-sm-4">
                                    <label for="inputGroupSelect01">&nbsp;</label>
                                    <select class="custom-select" id="eskiKimlikYil">
                                        <option selected>Yıl</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                    </select>
                                </div>




                            </div>

                        </div>



                        <div>
                            <div onclick="adim4Kontrol()" class="form-check form-check-inline mt-4">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9" />
                                <label class="form-check-label text-danger" for="inlineCheckbox9">Bilgilerimin Doğruluğunu Onaylıyorum</label>
                            </div><br>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Adim 4 END -->

            <div class="container d-flex justify-content-start pl-5">

                <div class="col-md-3">
                    <button id="ilerle" onclick="ilerleButton()" type="button" class="btn2  w-100 ml-0">
                        İLERLE
                    </button>
                </div>
            </div>
        </div>

    </div>


    </div>
    </div>

    <div id="sonAsama" style="margin-top: 100px; display:none;">
        <!-- <div class="row m-4">
            <div class="col-md-12 col-12 col-sm-12 son-asama">
                <span class="each-number">Teşekkürler</span>
            </div>
        </div> -->
        <div class="row m-4">
            <div class="col-md-12 col-12 col-sm-12">
                <div class="card shadow-none">
                    <div class="card-body text-center mt-4 mb-4">
                        <h5 class="card-title">
                            <img src="/deneme/static/media/altyapiimg.e89c0b6da7decf30286a.png">
                        </h5>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-md-12 col-12 col-sm-12">
                                <span class="text-mavi">
                                    Basvurunuzun işleme alınması icin Abonelik sözleşmenizi E devlet üzerinden onaylamanız gerekmektedir.
                                    <br>
                                    <a href="https://www.turkiye.gov.tr/btk-e-kayit-basvurusu-onay-islemleri-gercek-kisi" target="_blank"> https://www.turkiye.gov.tr/btk-e-kayit-basvurusu-onay-islemleri-gercek-kisi </a> linkinden sözleşmenizi onaylayabilirsiniz
                                </span>
                                <div class="mt-3">
                                    <a type="button" href="https://www.turkiye.gov.tr/btk-e-kayit-basvurusu-onay-islemleri-gercek-kisi" class="btn1">
                                        E-Devlet Üzerinden Sözleşme Onayla
                                    </a>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>
        .footerContent {
            width: 100%
        }

        @media (min-width: 640px) {
            .footerContent {
                max-width: 640px
            }
        }

        @media (min-width: 728px) {
            .footerContent {
                max-width: 728px
            }
        }

        @media (min-width: 1024px) {
            .footerContent {
                max-width: 1024px
            }
        }

        @media (min-width: 1110px) {
            .footerContent {
                max-width: 1110px
            }
        }

        .footerContent {
            margin-left: auto;
            margin-right: auto;
            display: flex;
            gap: 45px;
            background-image: url(http://localhost:3000/deneme/static/media/footerbg.d03646c1f92b5b40932c.svg);
            background-size: contain;
            background-position: bottom;
            background-repeat: no-repeat;
            padding-top: 30px;
            padding-bottom: 30px
        }

        @media (min-width: 350px) and (max-width: 430px) {
            .footerContent {
                gap: 25px
            }
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .footerContent {
                flex-wrap: wrap-reverse;
                justify-content: center;
                gap: 25px
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .footerContent {
                flex-wrap: wrap-reverse;
                justify-content: center
            }
        }

        .footerContentMid {
            display: flex;
            gap: 4rem
        }

        @media (min-width: 350px) and (max-width: 430px) {
            .footerContentMid {
                gap: 2rem
            }
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .footerContentMid {
                flex-wrap: wrap-reverse;
                justify-content: center;
                gap: 2rem
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .footerContentMid {
                flex-wrap: wrap-reverse
            }
        }

        .footerContentLink {
            display: flex;
            min-width: 140px;
            flex-direction: column;
            gap: 1.25rem;
            font-family: Open Sans, sans-serif;
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-weight: 600;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerContentLink>a {
            display: flex;
            min-width: 140px;
            flex-direction: column;
            gap: 1.25rem;
            font-family: Open Sans, sans-serif;
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-weight: 600;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerContentPhone {
            display: flex;
            align-items: flex-start;
            gap: 10px
        }

        .footerContentPhone>img {
            height: 2rem;
            width: 2rem
        }

        .footerContentPhone>div>a {
            font-family: Open Sans, sans-serif;
            font-size: 22px;
            font-weight: 600;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerContentPhone>div>p {
            font-family: Open Sans, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerSocialIcon {
            padding-bottom: 0.75rem;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerSocialIcon>h1 {
            padding-bottom: 0.75rem;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .footerSocialIcon {
                display: none
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .footerSocialIcon {
                display: none
            }
        }

        .footerSocialIcon>div {
            display: flex;
            gap: 2rem;
            font-weight: 400;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerSocialIcon>div>a {
            display: flex;
            gap: 2rem;
            font-weight: 400;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerBottom {
            width: 100%
        }

        @media (min-width: 640px) {
            .footerBottom {
                max-width: 640px
            }
        }

        @media (min-width: 728px) {
            .footerBottom {
                max-width: 728px
            }
        }

        @media (min-width: 1024px) {
            .footerBottom {
                max-width: 1024px
            }
        }

        @media (min-width: 1110px) {
            .footerBottom {
                max-width: 1110px
            }
        }

        .footerBottom {
            margin-left: auto;
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 1.25rem;
            padding-bottom: 1.5rem
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .footerBottom {
                padding-left: 1rem;
                padding-right: 1rem
            }
        }

        .footerBottomLink {
            font-family: Ubuntu, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerBottomLink>a {
            font-family: Ubuntu, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .footerBottomLink {
                display: none
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .footerBottomLink {
                display: none
            }
        }

        .footerBottomLinkMobile {
            display: none;
            font-family: Ubuntu, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerBottomLinkMobile>a {
            font-family: Ubuntu, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .footerBottomLinkMobile {
                display: block
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .footerBottomLinkMobile {
                display: block
            }
        }

        .footerBottomLink>a>span {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        /* mobile */

        .footerSocialIconCover {
            display: none;
            width: 100%;
            flex-direction: column;
            align-items: center
        }

        @media (min-width: 350px) and (max-width: 767px) {
            .footerSocialIconCover {
                display: flex
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .footerSocialIconCover {
                display: flex
            }
        }

        .footerSocialIconMobile {
            padding-bottom: 0.75rem;
            text-align: center;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerSocialIconMobile>div {
            display: flex;
            gap: 2rem;
            font-weight: 400;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerBottomLinkMobileTop {
            font-family: Ubuntu, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerBottomLinkMobileTop>a {
            font-family: Ubuntu, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .footerBottomLinkMobileTop>a>span {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        #modal-kapat {
            display: none;
        }

        #modal {
            display: none;
        }

        .btn1 {
            height: 42px;
            width: 350px;
            border-radius: 9px;
            border-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(255 146 28 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(255 146 28 / var(--tw-bg-opacity));
            text-align: center;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            line-height: 42px;
            color: rgb(255 255 255);
            --tw-shadow: 0 3px 6px rgba(0, 70, 126, 0.15);
            --tw-shadow-colored: 0 3px 6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .btn2 {
            height: 42px;
            width: 145px;
            border-radius: 9px;
            border: none !important;
            --tw-bg-opacity: 1;
            background-color: rgb(255 146 28 / var(--tw-bg-opacity));
            text-align: center;
            font-family: Open Sans, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            line-height: 42px;
            color: rgb(255 255 255) !important;
            --tw-shadow: 0 3px 6px rgba(0, 70, 126, 0.15);
            --tw-shadow-colored: 0 3px 6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .btn1:hover {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 146 28 / var(--tw-text-opacity)) !important
        }

        .btn2:hover {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 146 28 / var(--tw-text-opacity)) !important;
        }

        .topInfoHeader {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
    </style>

    <script>
        var adsoyad;
        var email;
        var gsm;
        var kisiselveri;

        var evtelvarmi = -1;
        var evtelno = "";
        var evtelsahipmi = -1;
        var evtelsahiptcno = "";
        var adresid = "-";
        var adrestext = "-";
        var maxhiz = -1;
        var santraluzaklik = -1;
        var baglantitip = -1;
        var sorgusonuc = -1;

        var sozlesmegonderim = -1;
        var tarife = -1;
        var guvenliinternet = -1;
        var statikip = -1;
        var evtelistiyorum = -1;
        var dogumtarih;
        var tcno;
        var dogumyil;
        var cuzdanseri;


        $(document).ready(function() {
            var post_id = 'bbkIdQuery=' + $("#hdnBBKID").val();
            $.ajax({
                type: "POST",
                url: "sorgu/assets/php/ajax.php",
                data: post_id,
                cache: false,
                success: function(getResponse) {
                    var aa = $(getResponse).filter('h1');
                    $("#hdnSonucTarife").val($(aa[3]).text())
                    get_tarifeler($("#hdnSonucTarife").val());
                }
            });
        });



        var adim1Gecis = "";
        var adim2Gecis = "";
        var adim3Gecis = "";
        var adim4Gecis = "";

        var current_tab = 1;

        //akordiyon
        $("#pnlAccourdion").hide();

        function adim1Kontrol($event) {
            var x = document.getElementById('materialGsm').value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
            document.getElementById('materialGsm').value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? ' ' + x[3] : '') + (x[4] ? ' ' + x[4] : '');
            if (document.getElementById('materialGsm').value.length < 15) {
                $("#gsmConf").show();
            } else {
                $("#gsmConf").hide(500);
            }
            console.log($("#gsmConf").show())
            if (document.getElementById('materialAd').value != "" && document.getElementById('materialSoyad').value != "" && document.getElementById('materialEmail').value != "" && document.getElementById('materialGsm').value != "" && document.getElementById('materialGsm').value.length > 14 && document.getElementById("inlineCheckbox1").checked != false) {
                document.getElementById('ilerle').disabled = false;
                adim1Gecis = "ok";

            } else {
                document.getElementById('ilerle').disabled = true;
                adim1Gecis = "";

            }
        }


        function adim4Kontrol() {
            if (document.getElementById("yeniKimlikTc").value != "" && document.getElementById("yeniKimlikTc").value.length === 11 &&
                document.getElementById("inlineCheckbox9").checked != false || document.getElementById("eskiKimlikTC").value != "") {
                document.getElementById('ilerle').disabled = false;
                adim4Gecis = "ok";
                $("#ilerle").html('BİTİR');
                $("#tcmConf").hide(500);
            } else {
                document.getElementById('ilerle').disabled = true;
                adim4Gecis = "";
                $("#tcmConf").show();
            }

        }




        function tarifeFonk($tarife_id) {

            tarife = $tarife_id;

            $('li[data="' + $tarife_id + '"]').addClass('active');
            document.getElementById('ilerle').disabled = false;
            adim3Gecis = "ok";
            $("#hdnSelectPaket").val($tarife_id);

        }




        function hattinYasalSahibiyim() {
            if (document.getElementById("inlineCheckbox3").checked === false) {
                $("#showTCkimlik").fadeIn(500);
                document.getElementById('ilerle').disabled = true;

                $("#adres_sec").hide(500);


            } else {
                $("#showTCkimlik").hide(500);
                document.getElementById('ilerle').disabled = false;

                $("#adres_sec").fadeIn(500);
            }
        }

        function verificationNumber() {
            if ($("#phoneVer").val() == '') {
                Swal.fire({
                    icon: 'warning',
                    title: "Lütfen sms ile size gönderilen doğrulama kodunu giriniz",
                    confirmButtonColor: '#ffc107',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })


                return;
            } else {
                if ($("#phoneVer").val() == $("#verificationCode").val()) {

                    $("#materialAd").focus();
                    $("#materialGsm").click();
                    $("#materialGsm").val($("#otpPhone").val());

                    $("#phoneNumber").hide();
                    $("#verificationNumber").hide('slow');
                    $("#pnlVerification").hide('slow');
                    $("#pnlAccourdion").show('slow');

                    $("#pnlAccourdion").show();

                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: "Doğrulama kodunu yanlış yazdınız, lütfen kontrol ederek tekrar deneyin",
                        confirmButtonColor: '#ffc107',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })


                    return;
                }

            }

        }

        function smsGonder() {

            if ($("#otpPhone").val() == '') {

                Swal.fire({
                    icon: 'warning',
                    title: "Lütfen Numaranızı Giriniz.",
                    confirmButtonColor: '#ffc107',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })


                return;
            } else {

                var _Random = Math.floor(100000 + Math.random() * 900000);

                $("#verificationCode").val(_Random);
                $.ajax({
                    url: 'sms.php',
                    type: 'post',
                    cache: false,
                    data: {
                        f: 'sms_gonder',
                        otpPhone: $("#otpPhone").val(),
                        verCode: _Random,
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        console.log("burraya bak lufffyy ==> ", data)

                        if (data.main.code == 0) {
                            $("#phoneNumber").hide();
                            $("#verificationNumber").show('slow');
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: data.main.error,
                                confirmButtonColor: '#ffc107',
                                showClass: {
                                    popup: 'animate__animated animate__fadeInDown'
                                },
                                hideClass: {
                                    popup: 'animate__animated animate__fadeOutUp'
                                }
                            })
                            // $("#pnlVerification").hide();
                            return;
                        }
                    }
                });
            }

        }

        function phoneControl($event) {
            var x = document.getElementById('otpPhone').value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
            document.getElementById('otpPhone').value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? ' ' + x[3] : '') + (x[4] ? ' ' + x[4] : '');
        }

        function ilerleButton() {




            if (adim1Gecis === "ok") {


                $("#btn_basvurugiris").hide(500);




                $("#adim1").hide(500);
                $("#adim2").fadeIn(500);
                $("#adim3").hide();
                $("#adim4").hide();
                $("#showDegistir1").show();
                $("#showDegistir2").hide();
                $("#showDegistir3").hide();
                $("#showDegistir4").hide();
                $("#adimBir").removeClass("each-active ");
                $("#adimIki").addClass("each-active text-mavii");
                document.getElementById('ilerle').disabled = true;


                adsoyad = $("#materialAd").val().trim() + " " + $("#materialSoyad").val().trim();
                email = $("#materialEmail").val().trim();
                gsm = $("#materialGsm").val().trim();

                kisiselveri = 0;
                if ($("#inlineCheckbox2").prop('checked') == true) {
                    kisiselveri = 1;
                }

                setTimeout(function() {
                    var bbk_id = $("#hdnBBKID").val();
                    $.ajax({
                        type: "POST",
                        url: "sorgu/assets/php/fonksiyon.php",
                        data: {
                            f: 'getAltyapiSorgu',
                            bbkid: bbk_id,
                        },
                        cache: false,
                        success: function(getResponse) {
                            var jsn = JSON.parse(getResponse);
                            $("#currentAdres").html(jsn.adres);
                            $("#currentSonuc").html(jsn.sonuc_template);
                            adrestext = jsn.adres;
                            adim2Gecis = "ok";
                            document.getElementById('ilerle').disabled = false;

                        }
                    });






                }, 500);






                if (!(adim2Gecis === "ok")) {

                    $.ajax({
                        url: 'sorgu/assets/php/fonksiyon.php',
                        type: 'post',


                        cache: false,
                        data: {
                            f: 'add_basvuru',
                            adsoyad: adsoyad,
                            email: email,
                            ceptel: gsm,
                            kisilveri: kisiselveri,
                            formstatus: 1

                        },

                        success: function(response) {


                            console.log(response);


                            $("#overlay").hide();


                        }
                    });

                }




            }

            if (adim2Gecis === "ok" && !(adim3Gecis === "ok")) {




                if (!(adim3Gecis === "ok")) {






                    $.ajax({
                        url: 'sorgu/assets/php/fonksiyon.php',
                        type: 'post',


                        cache: false,
                        data: {
                            f: 'add_basvuru',
                            adsoyad: adsoyad,
                            email: email,
                            ceptel: gsm,
                            kisilveri: kisiselveri,
                            formstatus: 2,
                            evtelvarmi: evtelvarmi,
                            evtelno: evtelno,
                            evtelsahipmi: evtelsahipmi,
                            evtelsahiptcno: evtelsahiptcno,
                            adresid: adresid,
                            adrestext: adrestext,
                            maxhiz: maxhiz,
                            santraluzaklik: santraluzaklik,
                            baglantitip: baglantitip,
                            sorgusonuc: sorgusonuc


                        },

                        success: function(response) {


                            console.log(response);


                            $("#overlay").hide();

                        }
                    });



                }


                $("#adim1").hide();
                $("#adim2").hide(500);
                $("#adim3").fadeIn(500);
                $("#adim4").hide();
                $("#showDegistir1").show();
                $("#showDegistir2").show();
                $("#showDegistir3").hide();
                $("#showDegistir4").hide();
                $("#adimIki").removeClass("each-active ");
                $("#adimUc").addClass("each-active text-mavii");




            }
            if (adim3Gecis === "ok") {



                tarife = $("#select_location").val();

                guvenliinternet = 0;
                if ($("#inlineCheckbox5").prop('checked') == true) {
                    guvenliinternet = 1;
                }

                evtelistiyorum = 0;
                if ($("#inlineCheckbox7").prop('checked') == true) {
                    evtelistiyorum = 1;
                }

                statikip = 0;
                if ($("#inlineCheckbox6").prop('checked') == true) {
                    statikip = 1;
                }






                if (!(adim4Gecis === "ok")) {

                    //kayıt
                    $.ajax({
                        url: 'sorgu/assets/php/fonksiyon.php',
                        type: 'post',


                        cache: false,
                        data: {
                            f: 'add_basvuru',
                            adsoyad: adsoyad,
                            email: email,
                            ceptel: gsm,
                            kisilveri: kisiselveri,
                            formstatus: 3,
                            evtelvarmi: evtelvarmi,
                            evtelno: evtelno,
                            evtelsahipmi: evtelsahipmi,
                            evtelsahiptcno: evtelsahiptcno,
                            adresid: adresid,
                            adrestext: adrestext,
                            maxhiz: maxhiz,
                            santraluzaklik: santraluzaklik,
                            baglantitip: baglantitip,
                            tarife: $("#hdnSelectPaket").val(),
                            guvenliinternet: guvenliinternet,
                            sozlesmegonderim: sozlesmegonderim,
                            evtel: evtelistiyorum,
                            statikip: statikip




                        },

                        success: function(response) {


                            console.log(response);


                            $("#overlay").hide();


                        }
                    });



                }





                $("#adim1").hide();
                $("#adim2").hide();
                $("#adim3").hide(500);
                $("#adim4").fadeIn(500);
                $("#showDegistir1").show();
                $("#showDegistir2").show();
                $("#showDegistir3").show();
                $("#showDegistir4").hide();
                $("#adimUc").removeClass("each-active ");
                $("#adimIki").removeClass("each-active ");
                $("#adimDort").addClass("each-active text-mavii");
                document.getElementById('ilerle').disabled = true;
                $(window).scrollTop(0);




            }
            if (adim4Gecis === "ok") {

                var eskiKimlikTc;
                if ($("#eskiKimlikTC").val() != '') {
                    eskiKimlikTc = $("#eskiKimlikTC").val();
                    tcno = $("#eskiKimlikTC").val();
                }

                var eskiKimlikDogumTarihi;
                var yenikimlikDogumTarihi;
                var eskiKimlikverilis;
                if ($('select[id=inputGroupSelect03] option').filter(':selected').val() > 0) {
                    yenikimlikDogumTarihi = $('select[id=inputGroupSelect03] option').filter(':selected').val() + "-" + $('select[id=inputGroupSelect02] option').filter(':selected').val() + "-" + $('select[id=inputGroupSelect01] option').filter(':selected').val();
                    eskiKimlikDogumTarihi = $('select[id=inputGroupSelect03] option').filter(':selected').val() + "-" + $('select[id=inputGroupSelect02] option').filter(':selected').val() + "-" + $('select[id=inputGroupSelect01] option').filter(':selected').val();
                    dogumtarih = $('select[id=inputGroupSelect03] option').filter(':selected').val() + "-" + $('select[id=inputGroupSelect02] option').filter(':selected').val() + "-" + $('select[id=inputGroupSelect01] option').filter(':selected').val();
                    dogumgun = $('select[id=inputGroupSelect01] option').filter(':selected').val();
                    dogumay = $('select[id=inputGroupSelect02] option').filter(':selected').val();
                    dogumyil = $('select[id=inputGroupSelect03] option').filter(':selected').val();
                }


                var eskiKimlikCinsiyet = $("#eskiKimlikCinsiyet").val();
                var eskiKimlikDogumYeri = $("#eskiKimlikDogumYeri").val();
                var eskiKimlikAnneKizlik = $("#eskiKimlikAnneKizlik").val();
                var eskiKimlikSeriNo = $("#eskiKimlikSeriNo").val();
                var eskiKimlikSirano = $("#eskiKimlikSirano").val();
                var eskiKimlikCiltno = $("#eskiKimlikCiltno").val();
                var eskiKimlikAilesira = $("#eskiKimlikAilesira").val();
                var eskiKimlikKayitliSehir = $("#eskiKimlikKayitliSehir").val();
                var eskiKimlikKayitliilce = $("#eskiKimlikKayitliilce").val();
                var eskiKimlikKayitliMahalle = $("#eskiKimlikKayitliMahalle").val();




                var kimlikTipi = $("#kimlikTipi").val();
                var yeniKimlikTc;

                if ($("#yeniKimlikTc").val() != '') {
                    yeniKimlikTc = $("#yeniKimlikTc").val();
                    tcno = $("#yeniKimlikTc").val();
                }

                //var yenikimlikDogumTarihi =  $("#yeniKimlikDogumGun").val() + "-" + $("#yeniKimlikDogumAy").val() + "-" + $("#yeniKimlikDogumYil").val();

                if ($('select[id=yeniKimlikDogumYil] option').filter(':selected').val() > 0) {
                    eskiKimlikDogumTarihi = $('select[id=yeniKimlikDogumYil] option').filter(':selected').val() + "-" + $('select[id=yeniKimlikDogumAy] option').filter(':selected').val() + "-" + $('select[id=yeniKimlikDogumGun] option').filter(':selected').val();
                    yenikimlikDogumTarihi = $('select[id=yeniKimlikDogumYil] option').filter(':selected').val() + "-" + $('select[id=yeniKimlikDogumAy] option').filter(':selected').val() + "-" + $('select[id=yeniKimlikDogumGun] option').filter(':selected').val();
                    dogumtarih = $('select[id=yeniKimlikDogumYil] option').filter(':selected').val() + "-" + $('select[id=yeniKimlikDogumAy] option').filter(':selected').val() + "-" + $('select[id=yeniKimlikDogumGun] option').filter(':selected').val();
                    dogumgun = $('select[id=yeniKimlikDogumGun] option').filter(':selected').val();
                    dogumay = $('select[id=yeniKimlikDogumAy] option').filter(':selected').val();
                    dogumyil = $('select[id=yeniKimlikDogumYil] option').filter(':selected').val();
                }

                if ($("#eskiKimlikYil").val() > 0) {
                    eskiKimlikverilis = $("#eskiKimlikYil").val() + "-" + $("#eskiKimlikAy").val() + "-" + $("#eskiKimlikGun").val();
                } else {
                    eskiKimlikverilis = dogumtarih;
                }

                var yeniKimlikAnneAdi = $("#yeniKimlikAnneAdi").val();
                var yeniKimlikBabaAdi = $("#yeniKimlikBabaAdi").val();

                var yeniKimlikCinsiyet = $("#yeniKimlikCinsiyet").val();
                var yeniKimlikDogumYeri = $("#yeniKimlikDogumYeri").val();
                var yeniKimlikSeriNo = $("#yeniKimlikSeriNo").val();

                if (eskiKimlikSeriNo != '') {
                    serino = eskiKimlikSeriNo;
                }


                if (yeniKimlikSeriNo != '') {
                    serino = yeniKimlikSeriNo;
                }



                maxhiz = $("#lbl_hiz").text().replace('MBPS', '').trim();
                santraluzaklik = $("#lbl_santral").text().replace('M', '').trim();
                baglantitip = $("#lbl_tip").text().trim();
                var _baglanti;

                if (baglantitip == "FİBER")
                    _baglanti = 1;
                else if (baglantitip == "VDSL")
                    _baglanti = 0;
                else if (baglantitip == "ADSL")
                    _baglanti = 2;

                $.ajax({
                    url: 'nvi.php',
                    type: 'post',
                    cache: false,
                    data: {
                        tcno: tcno,
                        ad: $("#materialAd").val().trim(),
                        soyad: $("#materialSoyad").val().trim(),
                        dogumgun: dogumgun,
                        dogumay: dogumay,
                        dogumyil: dogumyil,
                        cuzdanseri: serino,

                    },
                    success: function(response) {
                        console.log("a=>" + response);
                        if (response.trim() == 'ok') {
                            $.ajax({
                                url: 'sorgu/assets/php/fonksiyon.php',
                                type: 'post',
                                cache: false,
                                data: {
                                    f: 'add_basvuru',
                                    adsoyad: adsoyad,
                                    email: email,
                                    ceptel: gsm,
                                    kisilveri: kisiselveri,
                                    formstatus: 4,
                                    evtelvarmi: evtelvarmi,
                                    evtelno: evtelno,
                                    evtelsahipmi: evtelsahipmi,
                                    evtelsahiptcno: evtelsahiptcno,
                                    adresid: adresid,
                                    adrestext: adrestext,
                                    maxhiz: maxhiz,
                                    santraluzaklik: santraluzaklik,
                                    baglantitip: _baglanti,
                                    tarife: $("#hdnSelectPaket").val(),
                                    guvenliinternet: guvenliinternet,
                                    sozlesmegonderim: sozlesmegonderim,
                                    evtel: evtelistiyorum,
                                    statikip: statikip,
                                    dogumtarih: dogumtarih,
                                    tcno: tcno,
                                    kimlikTipi: kimlikTipi,
                                    yeniKimlikTc: yeniKimlikTc,
                                    yenikimlikDogumTarihi: yenikimlikDogumTarihi,
                                    yeniKimlikAnneAdi: yeniKimlikAnneAdi,
                                    yeniKimlikBabaAdi: yeniKimlikBabaAdi,
                                    yeniKimlikCinsiyet: yeniKimlikCinsiyet,
                                    yeniKimlikDogumYeri: yeniKimlikDogumYeri,
                                    yeniKimlikSeriNo: yeniKimlikSeriNo,
                                    eskiKimlikTc: eskiKimlikTc,
                                    eskiKimlikDogumTarihi: eskiKimlikDogumTarihi,
                                    eskiKimlikCinsiyet: eskiKimlikCinsiyet,
                                    eskiKimlikDogumYeri: eskiKimlikDogumYeri,
                                    eskiKimlikAnneKizlik: eskiKimlikAnneKizlik,
                                    eskiKimlikSeriNo: eskiKimlikSeriNo,
                                    eskiKimlikSirano: eskiKimlikSirano,
                                    eskiKimlikCiltno: eskiKimlikCiltno,
                                    eskiKimlikAilesira: eskiKimlikAilesira,
                                    eskiKimlikKayitliSehir: eskiKimlikKayitliSehir,
                                    eskiKimlikKayitliilce: eskiKimlikKayitliilce,
                                    eskiKimlikKayitliMahalle: eskiKimlikKayitliMahalle,
                                    eskiKimlikverilis: eskiKimlikverilis,

                                },
                                success: function(response) {
                                    console.log(response);
                                    $("#overlay").hide();
                                }
                            });


                            $("#app").hide();
                            $("#ilerle").hide(500);
                            $("#sonAsama").show(500);
                        } else {
                            alert("Kimlik bilgileri doğrulanamadı");
                        }



                    }
                });



            }
        }



        $("#btn_basvurugiris").click(function() {

            window.location.href = "basvurugiris.php";
        });



        $(document).ready(function() {




            $("#adim2").hide();
            $("#adim3").hide();
            $("#adim4").hide();
            $("#showDegistir1").hide();
            $("#showDegistir2").hide();
            $("#showDegistir3").hide();
            $("#showDegistir4").hide();
            $("#adimBir").addClass("each-active");
            $("#ilerle").addClass("each-active");
            // icerikler


            $("#adimBir").click(function() {
                if (adim1Gecis === "ok") {



                    $("#adim1").fadeIn(500);
                    $("#adim2").hide();
                    $("#adim3").hide();
                    $("#adim4").hide();
                    $("#showDegistir1").show();
                    $("#showDegistir2").hide();
                    $("#showDegistir3").hide();
                    $("#showDegistir4").hide();
                    $("#adimBir").addClass("each-active");
                    $("#adimIki").removeClass("each-active");
                    $("#adimUc").removeClass("each-active");
                    $("#adimDort").removeClass("each-active");
                    document.getElementById('ilerle').disabled = false;
                } else {
                    return
                }
            });
            $("#adimIki").click(function() {
                if (adim2Gecis === "ok") {


                    adim3Gecis = "";

                    $("#adim1").hide();
                    $("#adim2").fadeIn(500);
                    $("#adim3").hide();
                    $("#adim4").hide();
                    $("#showDegistir1").hide();
                    $("#showDegistir2").show();
                    $("#showDegistir3").hide();
                    $("#showDegistir4").hide();
                    $("#adimBir").removeClass("each-active");
                    $("#adimIki").addClass("each-active");
                    $("#adimUc").removeClass("each-active");
                    $("#adimDort").removeClass("each-active");
                    document.getElementById('ilerle').disabled = false;
                } else {
                    return
                }
            });
            $("#adimUc").click(function() {
                if (adim3Gecis === "ok") {



                    $("#adim1").hide();
                    $("#adim2").hide();
                    $("#adim3").fadeIn(500);
                    $("#adim4").hide();
                    $("#showDegistir1").hide();
                    $("#showDegistir2").hide();
                    $("#showDegistir3").show();
                    $("#showDegistir4").hide();
                    $("#adimBir").removeClass("each-active");
                    $("#adimIki").removeClass("each-active");
                    $("#adimUc").addClass("each-active");
                    $("#adimDort").removeClass("each-active");
                    document.getElementById('ilerle').disabled = false;
                } else {
                    return
                }
            });
            $("#adimDort").click(function() {
                if (adim4Gecis === "ok") {
                    $("#adim1").hide();
                    $("#adim2").hide();
                    $("#adim3").hide();
                    $("#adim4").fadeIn(500);
                    $("#showDegistir1").hide();
                    $("#showDegistir2").hide();
                    $("#showDegistir3").hide();
                    $("#showDegistir4").show();
                    $("#adimBir").removeClass("each-active");
                    $("#adimIki").removeClass("each-active");
                    $("#adimUc").removeClass("each-active");
                    $("#adimDort").addClass("each-active");
                    document.getElementById('ilerle').disabled = false;
                } else {
                    return
                }
            });




        });
    </script>


    <!--====== PART ENDS ======-->




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

    <input type="hidden" id="hdnBBKID" value="<?php echo $_GET["bbkid"]; ?>" />
    <input type="hidden" id="hdnSonucTarife" />
    <input type="hidden" id="hdnSelectPaket" />

    <script>
        var bbkid;
        adresid = $("#hdnBBKID").val();
        var tarifeler;
        var sonuc_tarife_tip;



        function get_tarifeler(sonuc_tarife) {

            $.ajax({
                url: 'sorgu/assets/php/fonksiyon.php',
                type: 'post',
                cache: false,
                data: {
                    f: 'get_tarifeler'
                },
                success: function(response) {


                    if (sonuc_tarife == "FİBER")
                        sonuc_tarife_tip = 1;
                    else if (sonuc_tarife == "VDSL")
                        sonuc_tarife_tip = 0;
                    else if (sonuc_tarife == "ADSL")
                        sonuc_tarife_tip = 2;


                    baglantitip = sonuc_tarife_tip;

                    var jsn = JSON.parse(response);


                    tarifeler = jsn[0]['tarifeler'];
                    console.log(tarifeler);

                    var len = tarifeler.length;

                    for (var i = 0; i < len; i++) {

                        var tarife_hiz = tarifeler[i]['hiz'];
                        var tarife_tip = tarifeler[i]['tip'];
                        var tarife_fiyat = tarifeler[i]['fiyat'];
                        var tarife_ad = tarifeler[i]['ad'];

                        var santral;
                        var max_hiz;
                        var tavsiye_paket;
                        var tavsiye_fiyat;


                        if (tarife_tip == sonuc_tarife_tip) {


                            tavsiye_paket = tarife_ad;
                            realtavsiye_hiz = tarife_hiz;
                            tavsiye_fiyat = tarife_fiyat;

                            break;
                        }
                    }

                    $("#diger_paket").empty();
                    $("#select_location").empty();
                    $("#select_location").append("<option value=''>TARİFE PAKET SEÇİMİ YAPIN</option>");

                    for (var i = 0; i < len; i++) {
                        var tarife_hiz = tarifeler[i]['hiz'];
                        var tarife_tip = tarifeler[i]['tip'];
                        var tarife_fiyat = tarifeler[i]['fiyat'];
                        var tarife_ad = tarifeler[i]['ad'];
                        var tarife_id = tarifeler[i]['id'];
                    }

                    if (tarife_tip == sonuc_tarife_tip) {
                        if (tarife_tip == 1) {
                            $(".tarifeler").append("<li  onclick='tarifeFonk(" + tarife_id + ")'data='" + tarife_id + "'>" + tarife_ad + " (" + tarife_fiyat + " ₺)</li>");
                            // $("#select_location").append("<option value='" + tarife_id + "'>" + tarife_ad +" ("+tarife_fiyat+" ₺)</option>");

                        } else if (tarife_tip == 0) {

                            if (max_hiz <= 49) {

                                if (tarife_hiz < 36) {

                                    $(".tarifeler").append("<li onclick='tarifeFonk(" + tarife_id + ")' data='" + tarife_id + "'>" + tarife_ad + " (" + tarife_fiyat + " ₺)</li>");
                                    // $("#select_location").append("<option value='" + tarife_id + "'>" + tarife_ad +" ("+tarife_fiyat+" ₺)</option>");
                                }

                            } else if (max_hiz <= 74) {

                                if (tarife_hiz < 51) {
                                    $(".tarifeler").append("<li onclick='tarifeFonk(" + tarife_id + ")' data='" + tarife_id + "'>" + tarife_ad + " (" + tarife_fiyat + " ₺)</li>");
                                    // $("#select_location").append("<option value='" + tarife_id + "'>" + tarife_ad +" ("+tarife_fiyat+" ₺)</option>");

                                }
                            } else if (max_hiz <= 99) {

                                if (tarife_hiz < 76) {
                                    $(".tarifeler").append("<li onclick='tarifeFonk(" + tarife_id + ")' data='" + tarife_id + "'>" + tarife_ad + " (" + tarife_fiyat + " ₺)</li>");
                                    // $("#select_location").append("<option value='" + tarife_id + "'>" + tarife_ad +" ("+tarife_fiyat+" ₺)</option>");
                                }


                            } else if (max_hiz > 99) {
                                if (tarife_hiz < 101) {

                                    // $("#select_location").append("<option value='" + tarife_id + "'>" + tarife_ad +" ("+tarife_fiyat+" ₺)</option>");
                                    $(".tarifeler").append("<li onclick='tarifeFonk(" + tarife_id + ")' data='" + tarife_id + "'>" + tarife_ad + " (" + tarife_fiyat + " ₺)</li>");
                                    var tavsiye_paket2 = tarife_ad;
                                    var tavsiye_fiyat2 = tarife_fiyat;
                                    var $newdiv1 = $("<label  class='title_hiz_diger text-center'>" + tavsiye_paket2 + " (" + tavsiye_fiyat2 + " ₺)</label> ");
                                    $("#diger_paket").append($newdiv1);


                                }



                            }
                            //vdsl

                        } else if (tarife_tip == 2) {
                            // $("#select_location").append("<option value='" + tarife_id + "'>" + tarife_ad +" ("+tarife_fiyat+" ₺)</option>");
                            $(".tarifeler").append("<li onclick='tarifeFonk(" + tarife_id + ")' data='" + tarife_id + "'>" + tarife_ad + " (" + tarife_fiyat + " ₺)</li>");

                        }

                    }

                }
            })
        };



        $(document).ajaxSend(function() {

            $("#overlay").show();
        });

        $("#kimlikTipi").change(function() {
            var type = $(this).val();

            if (type == 1) {
                $(".yeniKimlik").show();
                $(".eskiKimlik").hide();
            } else if (type == 2) {
                $(".yeniKimlik").hide();
                $(".eskiKimlik").show();
            } else {
                $(".yeniKimlik").hide();
                $(".eskiKimlik").hide();
            }
        });
    </script>

    <script>
        $(".basvur").click(function() {
            $(".main2").hide();
            $(".main3").slideToggle("slow");
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".geriDon").click(function() {
                $(".main2").hide();
                $(".main1").slideToggle("slow");
            });





        });
    </script>

    <style>
        .form-control {
            color: rgb(118 121 124) !important;
            font-size: 1rem !important;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color emoji !important !important;
            border-color: rgb(221 223 231) !important;
            border-radius: 9px !important;
            border-width: 1px !important;
            padding: 0.5rem !important;
            width: 100% !important;
        }

        .tarifeler li {
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e4e6ef;
            list-style: none;
            padding: 15PX;
        }

        .tarifeler li:hover {
            background-color: rgb(255 146 28 / 94%);
            background-clip: padding-box;
            border: 1px solid white;
            color: White;
            list-style: none;
            padding: 15PX;
            cursor: pointer;
        }

        .tarifeler li.active {
            background-color: rgb(255 146 28 / 94%);
            background-clip: padding-box;
            border: 1px solid white;
            color: White;
            list-style: none;
            padding: 15PX;
            cursor: pointer;
        }
    </style>



</body>

</html>