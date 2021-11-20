@extends('layout')
@section('title','Home')
@section('content')
<!-- Container -->
    <div class="content-wrap">

        <section class="container-fluid" data-section="home">

            <!-- Personal Flexy Section -->
            <div class="row flex-row">
                <!-- Personal Details 01 -->
                <div id="details" class="col-md-8 flex-column bg-color01 light nopadding" data-animation-origin="left"
                    data-animation-duration="300" data-animation-delay="400" data-animation-distance="200px">
                    <div class="padding-50 flex-panel">
                        <div class="row row-no-padding">
                            <div class="col-md-12 nopadding">
                                <h3 class="font-accident-two-normal uppercase title">Selamat Datang Di nurisakbar.com
                                </h3>
                                <div class="quote">
                                    <h4 class="font-accident-two-normal uppercase subtitle">Detail Portfolio Dan CV
                                        Nuris Akbar</h4>
                                    <div class="dividewhite3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="divider-dynamic"></div>
                        <div class="row nopadding">
                            <div class="col-md-4 infoblock nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-1 col-md-3"><i
                                            class="flaticon-clocks18 color-blue"></i>
                                        <div class="dividewhite1"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-11 col-md-9">
                                        <h4 class="font-accident-two-medium uppercase">Full Stack Developer</h4>
                                        <p class="">
                                            Saya adalah seorang full stack web developer dengan stack PHP, Menguasai database MySQL, Postgree, SQL Server Dan MongoDB
                                        </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>
                            <div class="col-md-4 infoblock nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-1 col-md-3"><i
                                            class="flaticon-pie-graph color-blue"></i>
                                        <div class="dividewhite1"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-11 col-md-9">
                                        <h4 class="font-accident-two-medium uppercase">Cloud Service</h4>
                                        <p class="">
                                            Saya sering bekerja dengan environment cloud yang disediakan oleh AWS, GCP dan Alibaba Cloud, menguasai beberapa kemampuan Dev Ops juga
                                        </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>
                            <div class="col-md-4 infoblock nopadding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-1 col-md-3"><i class="flaticon-tool-1 color-blue"></i>
                                        <div class="dividewhite1"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-11 col-md-9">
                                        <h4 class="font-accident-two-medium uppercase">Project Management</h4>
                                        <p class="">
                                            Selain menjadi fullstaclk, saya juga terkadang menghandle beberapa pekerjaan frelance sebagai project manager yang mengelola tim dalam proses development
                                        </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Personal Details 01 -->

                <!-- Personal Details 02 -->
                <div id="personal" class="col-md-4 flex-column light ui-block-color01 personal"
                    data-animation-origin="right" data-animation-duration="500" data-animation-delay="600"
                    data-animation-distance="100px">
                    <div class="padding-50 flex-panel">
                        <h3 class="font-accident-two-normal uppercase title">Biodata Pribadi</h3>
                        <div class="dividewhite4"></div>
                        <div>
                            <div class="fullwidth box">
                                <div class="one">
                                    <p class="uppercase">Nama :</p>
                                </div>
                                <div class="two">
                                    <p class="">Nuris Akbar</p>
                                </div>
                            </div>
                            <div class="fullwidth box">
                                <div class="one">
                                    <p class="uppercase text-nowrap">Tgl Lahir:</p>
                                </div>
                                <div class="two">
                                    <p class="">Agustus 1992</p>
                                </div>
                            </div>
                            <div class="fullwidth box">
                                <div class="one">
                                    <p class="uppercase">Alamat:</p>
                                </div>
                                <div class="two">
                                    <p class="">Perumahan villa Cilame indah B16, Desa Cilame, Kec. Ngamprah, Kab
                                        Bandung Barat, Jawa Barat 40552</p>
                                </div>
                            </div>
                            <div class="fullwidth box">
                                <div class="one">
                                    <p class="uppercase">No HP:</p>
                                </div>
                                <div class="two">
                                    <p class="">089699935552</p>
 
                                </div>
                            </div>
                            <div class="fullwidth box">
                                <div class="one">
                                    <p class="uppercase">Email:</p>
                                </div>
                                <div class="two">
                                    <p class="">nuris.akbar@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="dividewhite1"></div>
                    </div>
                </div>
                <!-- /Personal Details 02 -->
            </div>
            <!-- /Personal Flexy Section -->

        </section>

        <section id="professional" class="container-fluid" data-section="home">

            <div class="row flex-row">

                <div id="pro-experience" class="col-md-4 flex-column dark nopadding ui-block-color02 flex-col"
                    data-animation-origin="bottom" data-animation-duration="300" data-animation-delay="800"
                    data-animation-distance="200px">
                    <div class="padding-50 flex-panel">
                        <h3 class="font-accident-two-normal uppercase title">Pengalaman Kerja</h3>
                        <div class="dividewhite4"></div>
                        <div class="experience">
                            <ul class="">
                                <li class="date">11/2021 - Sekarang</li>
                                <li class="company uppercase">
                                    <a href="https://dto.kemkes.go.id/">
                                        DTO Kementrian Kesehatan RI
                                    </a>
                                </li>
                                <li class="position">Backend Engineer</li>
                            </ul>
                            <ul class="">
                                <li class="date">11/2021 - Sekarang</li>
                                <li class="company uppercase">
                                    <a href="#">
                                        Dosen Politeknik Sampit
                                    </a>
                                </li>
                                <li class="position">Dosen Teknik Informatika</li>
                            </ul>
                            <ul class="">
                                <li class="date">05/2020 - 12/2020</li>
                                <li class="company uppercase">
                                    <a href="https://digitalservice.jabarprov.go.id/">
                                        Jabar Digital Service.
                                    </a>
                                </li>
                                <li class="position">Senior BackEnd Developer</li>
                            </ul>
                            <ul class="">
                                <li class="date">08/2015 - Sekarang</li>
                                <li class="company uppercase">
                                    <a>
                                        <a href="https://wahyusafrizal.com/">belajarphp.net</a>
                                    </a>
                                </li>
                                <li class="position">Owner & Content Creator</li>
                            </ul>
                            <ul class="">
                                <li class="date">03/2019 - 04/2020</li>
                                <li class="company uppercase">
                                    <a href="https://globalvillage.id/">
                                        PT. Global Village Indonesia.
                                    </a>
                                </li>
                                <li class="position">Tech Lead Development</li>
                            </ul>
                            <ul class="">
                                <li class="date">05/2016 - 06/2019</li>
                                <li class="company uppercase">
                                    <a>
                                        <a href="http://brainmatics.com/">PT. brainmatics Cipta Informatika</a>
                                    </a>
                                </li>
                                <li class="position">Trainer Web Development Dan Database</li>
                            </ul>
                            <ul class="">
                                <li class="date">02/2012 - 08/2016</li>
                                <li class="company uppercase">
                                    <a>
                                        <a href="https://ecoomerce.wahyusafrizal.com/">CV Rekapancatama</a>
                                    </a>
                                </li>
                                <li class="position">Junior Web Development</li>
                            </ul>

                            <ul class="">
                                <li class="date">02/2014 - 08/2014</li>
                                <li class="company uppercase">
                                    <a>
                                        <a href="https://www.variasimx.com//">PT Variasimx indonesia</a>
                                    </a>
                                </li>
                                <li class="position">Junior Web Development</li>
                            </ul>


                        </div>
                        <div class="dividewhite1"></div>
                    </div>
                </div>
                <div id="circle-skills" class="col-md-8 flex-column dark nopadding ui-block-color03 flex-col"
                    data-section="progress" data-animation-origin="right" data-animation-duration="400"
                    data-animation-delay="1100" data-animation-distance="200px">
                    <div class="padding-50 flex-panel">
                        <h3 class="font-accident-two-normal uppercase title">Professional skills</h3>
                        <div class="dividewhite1"></div>
                        <div class="row">

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle1" data-progressbar="circle" data-progressbar-color="#fff"
                                        data-progressbar-trailcolor="#fff"
                                        data-progressbar-to='{"color": "#ff6c00", "width": 4}'
                                        data-progressbar-from='{"color": "#3498db", "width": 4}'
                                        data-progressbar-value="0.90">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">FrontEnd Developer</h4>
                                    <p class="font-regular-normal">
                                        Menguasai Stack teknologi umum untuk frontend seperti HTML 5, CSS 3, JavaScript Dan Jquery Ajax. 
                                    </p>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle1" data-progressbar="circle" data-progressbar-color="#fff"
                                        data-progressbar-trailcolor="#fff"
                                        data-progressbar-to='{"color": "#51f2ec", "width": 4}'
                                        data-progressbar-from='{"color": "#3498db", "width": 4}'
                                        data-progressbar-value="0.95">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Backend Developer</h4>
                                    <p class="font-regular-normal">
                                        Menguasai Bahasa Pemograman PHP dengan framework Laravel Dan Codeignter, Menguasai Adonis yang merupakan salah satu framework NodeJS
                                    </p>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle1" data-progressbar="circle" data-progressbar-color="#fff"
                                        data-progressbar-trailcolor="#fff"
                                        data-progressbar-to='{"color": " #ba83e5 ", "width": 4}'
                                        data-progressbar-from='{"color": "#3498db", "width": 4}'
                                        data-progressbar-value="0.90">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Database</h4>
                                    <p class="font-regular-normal">
                                        {{-- Saya mampu mengakses atau membuat sebuah data dalam sebuah wadah yang di maksud
                                        dengan DATABASE dengan MYSQL dan LARAGON. --}}
                                        Berpengalaman bekerja dengan database MySQL, Postgree, SQL Server Dan MongoDB ( Offline Dan Remote Database/ RDS Amazon Web Service )
                                    </p>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle1" data-progressbar="circle" data-progressbar-color="#fff"
                                        data-progressbar-trailcolor="#fff"
                                        data-progressbar-to='{"color": " #e67110 ", "width": 4}'
                                        data-progressbar-from='{"color": "#3498db", "width": 4}'
                                        data-progressbar-value="0.90">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Lumen Framework</h4>
                                    <p class="font-regular-normal">
                                        Berpengalaman mengembagkan REST API dengan lumen,termasuk dokumentasi dengan swangger dan auto deployment
                                    </p>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle1" data-progressbar="circle" data-progressbar-color="#fff"
                                        data-progressbar-trailcolor="#fff"
                                        data-progressbar-to='{"color": "#f9f617", "width": 4}'
                                        data-progressbar-from='{"color": "#3498db", "width": 4}'
                                        data-progressbar-value="0.90">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Linux Dan GIT</h4>
                                    <p class="font-regular-normal">
                                        Terbiasa bekerja dengan environment linux dan menggunakan GIT sebagai colaboration tools
                                    </p>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="progressbar text-center">
                                    <div id="circle1" data-progressbar="circle" data-progressbar-color="#fff"
                                        data-progressbar-trailcolor="#fff"
                                        data-progressbar-to='{"color": "#51e610", "width": 4}'
                                        data-progressbar-from='{"color": "#3498db", "width": 4}'
                                        data-progressbar-value="0.85">
                                    </div>
                                    <h4 class="font-accident-two-bold uppercase">Wordpress</h4>
                                    <p class="font-regular-normal">
                                        Berpengalaman melakukan development website dengan platform wordpress, termasuk optimasi disisi SEO dan security
                                    </p>
                                </div>
                                <div class="dividewhite1"></div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </section>

    </div>
    @endsection