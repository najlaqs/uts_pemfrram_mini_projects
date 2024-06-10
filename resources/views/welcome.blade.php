<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CV. Refangga Lintar Prayoga</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('WOW/css/animate.css') }}" rel="stylesheet" />
    @vite('resources/sass/app.scss')


</head>
<style>

/* Body
---------------------------*/
body
{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    background: #0976b4;
    line-height: 24px;
    font-family: 'Open Sans', sans-serif;
    color: #00aff0;
    font-size: 13px;
}

p
{
    margin-bottom: 5px;
}

hr
{
    border-top: 3px solid #EEE;
}

.text-bold
{
    font-weight: bold;
}


/* wrapper
---------------------------*/
#wrapper
{
    padding: 20px 0 0;
}

    #wrapper .container
    {
        background-color: #fff;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;
        -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        margin: 0 auto;
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease;
    }
/* Profile image
---------------------------*/
.img-profile
{
    display: inline-block;
    margin-bottom: 30px;
    margin-top: 15px;
}
/* Title
---------------------------*/
.title
{
    border-bottom: 1px solid #DDD;
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 20px;
    font-size: 22px;
    font-weight: 700;
    color: #37BC9B;
}
/* Sub Title
---------------------------*/
.sub-title
{
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    color: #37BC9B;
    border-bottom: 1px solid #DDD;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

    .sub-title .fa
    {
        margin-right: 8px;
    }

/* Contact
---------------------------*/
.contact
{
    margin-top: 32px;
}

.fa-phone
{
    color: #F4D313;
}

.fa-mobile
{
    color: #f39c12;
}

.fa-envelope
{
    color: #7f8c8d;
}

.fa-skype
{
    color: #00aff0;
}

.fa-globe
{
    color: #2c3e50;
}



.contact-list li
{
    border-bottom: 1px solid #DDD;
    padding-bottom: 3px;
    padding-top: 3px;
}

.contact-list .fa
{
    margin-right: 8px;
    font-size: 14px;
}

.display-block-sm
{
    display: inline;
    margin: 0px;
}

/* Button
---------------------------*/
.btn
{
    min-width: 115px;
}

.btn-inverse
{
    color: #FFF;
    background-color: #34495E;
}

    .btn-inverse:hover, .btn-inverse:focus, .btn-inverse:active
    {
        color: #FFF;
        background-color: #415B76;
        border-color: #415B76;
    }

.btn-download, .btn-print
{
    margin-bottom: 5px;
}


/* Timeline
---------------------------*/
.timeline
{
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}

    .timeline:before
    {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 25px;
        margin-right: -1.5px;
    }

    .timeline > li
    {
        margin-bottom: 20px;
        position: relative;
    }

        .timeline > li:before,
        .timeline > li:after
        {
            content: " ";
            display: table;
        }

        .timeline > li:after
        {
            clear: both;
        }

        .timeline > li:before, .timeline > li:after
        {
            content: " ";
            display: table;
        }

        .timeline > li:after
        {
            clear: both;
        }

        .timeline > li > .timeline-panel
        {
            width: 85%; /* Fallback if Unsupported */
            width: -webkit-calc(100% - 75px); /* Chrome 19+ & Safari */
            width: -moz-calc(100% - 75px); /* Firefox v4-15 */
            width: calc(100% - 75px);
            float: right;
            border: 1px solid #d4d4d4;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            padding: 10px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            background: #F5F5F6;
        }

            .timeline > li > .timeline-panel:before
            {
                position: absolute;
                top: 27px;
                display: inline-block;
                border-top: 14px solid transparent;
                border-left: 14px solid #fff;
                border-right: 0 solid #fff;
                border-bottom: 14px solid transparent;
                content: " ";
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            .timeline > li > .timeline-panel:after
            {
                position: absolute;
                top: 26px;
                display: inline-block;
                border-top: 15px solid transparent;
                border-left: 15px solid #ccc;
                border-right: 0 solid #ccc;
                border-bottom: 15px solid transparent;
                content: " ";
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }

        .timeline > li > .timeline-badge
        {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 12px;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 0px;
            margin-right: -25px;
            background-color: #999999;
            z-index: 100;
            -webkit-border-top-right-radius: 50%;
            border-top-right-radius: 50%;
            -webkit-border-top-left-radius: 50%;
            border-top-left-radius: 50%;
            -webkit-border-bottom-right-radius: 50%;
            border-bottom-right-radius: 50%;
            -webkit-border-bottom-left-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel
        {
            float: right;
        }

            .timeline > li.timeline-inverted > .timeline-panel:before
            {
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            .timeline > li.timeline-inverted > .timeline-panel:after
            {
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }

.timeline-badge.purple
{
    background-color: #5B2A7C !important;
}

.timeline-badge.mid-night
{
    background-color: #2c3e50 !important;
}

.timeline-badge.primary
{
    background-color: #2e6da4 !important;
}

.timeline-badge.success
{
    background-color: #3f903f !important;
}

.timeline-badge.warning
{
    background-color: #f0ad4e !important;
}

.timeline-badge.danger
{
    background-color: #d9534f !important;
}

.timeline-badge.info
{
    background-color: #5bc0de !important;
}

.timeline-heading .text-muted
{
    text-transform: uppercase;
    font-size: 12px;
}

.timeline-heading p
{
    margin-bottom: 0px;
}

.timeline-title
{
    margin-top: 0;
    color: inherit;
    margin-bottom: 0;
}

.timeline-body p
{
    font-size: 12px;
}

.timeline-body > p,
.timeline-body > ul
{
    margin-bottom: 0;
}

    .timeline-body > p + p
    {
        margin-top: 5px;
    }

/* Skill Progress
---------------------------*/
.progress-bar
{
    text-align: left;
    padding-left: 5px;
}

.progress-bar-green-sea
{
    background-color: #16a085 !important;
}

/* Languages
---------------------------*/
.languages .fa
{
    margin-right: 7px;
}

.fa-star
{
    color: #F1C40F;
}

/* Follow Me
---------------------------*/
.follow .fa
{
    color: #777;
}

.fa-instagram:hover
{
    color: #3f729b;
}

.fa-twitter-square:hover
{
    color: #55acee;
}

.fa-facebook-square:hover
{
    color: #3b5998;
}

.fa-google-plus-square:hover
{
    color: #dd4b39;
}

.fa-linkedin-square:hover
{
    color: #0976b4;
}

.fa-dribbble-square:hover
{
    color: #ea4c89;
}

.fa-stack-overflow-square:hover
{
    color: #fe7a15;
}

.fa-pinterest-square:hover
{
    color: #cc2127;
}

/* Hobbies
---------------------------*/
.hobbies .badge
{
    margin-right: 5px;
}

.badge-green-sea
{
    background-color: #16a085;
}

.footer
{
    background-color: #EDEFF1;
    text-align: center;
    font-size: 12px;
    padding: 15px 0;
    margin-top: 0;
}

/* Carousel
---------------------------*/
#quote-carousel
{
    padding: 0 10px 30px 10px;
    margin-top: 30px;
}

    /* Control buttons  */
    #quote-carousel .carousel-control
    {
        background: none;
        color: #222;
        font-size: 2.3em;
        text-shadow: none;
        margin-top: 30px;
    }
        /* Previous button  */
        #quote-carousel .carousel-control.left
        {
            left: -12px;
        }
        /* Next button  */
        #quote-carousel .carousel-control.right
        {
            right: -12px !important;
        }
    /* Changes the position of the indicators */
    #quote-carousel .carousel-indicators
    {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }
        /* Changes the color of the indicators */
        #quote-carousel .carousel-indicators li
        {
            background: #c0c0c0;
        }

        #quote-carousel .carousel-indicators .active
        {
            background: #2C3E50;
        }

    #quote-carousel img
    {
        width: 80px;
        height: 80px;
    }

.item blockquote
{
    border-left: none;
    margin: 0;
}

    .item blockquote p
    {
        font-size: 14px;
    }

    .item blockquote img
    {
        margin-bottom: 10px;
    }

    .item blockquote p:before
    {
        content: "\f10d";
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
    }

/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px)
{
    #quote-carousel
    {
        margin-bottom: 0;
        padding: 0 40px 30px 40px;
    }
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px)
{
    .display-block-sm
    {
        display: block;
        margin-top: 3px;
    }

    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */

    #quote-carousel .carousel-indicators
    {
        bottom: -20px !important;
    }

        #quote-carousel .carousel-indicators li
        {
            display: inline-block;
            margin: 0px 5px;
            width: 15px;
            height: 15px;
        }

            #quote-carousel .carousel-indicators li.active
            {
                margin: 0px 5px;
                width: 20px;
                height: 20px;
            }
}
/* End carousel */

/* Portfolio */
#filters
{
    margin: 1%;
    padding: 0;
    list-style: none;
}

    #filters li
    {
        float: left;
    }

        #filters li span
        {
            display: block;
            padding: 5px 20px;
            text-decoration: none;
            color: #666;
            cursor: pointer;
        }

            #filters li span.active
            {
                background: #34495E;
                color: #fff;
            }

#portfoliolist .portfolio
{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    width: 23%;
    margin: 1%;
    display: none;
    float: left;
    overflow: hidden;
}

.portfolio-wrapper
{
    overflow: hidden;
    position: relative !important;
    background: #666;
}

.portfolio img
{
    max-width: 100%;
    position: relative;
}

.portfolio .label
{
    position: absolute;
    width: 100%;
    height: 40px;
    bottom: -40px;
}

.portfolio .label-bg
{
    background: #34495E;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.portfolio .label-text
{
    color: #fff;
    position: relative;
    z-index: 500;
    padding: 5px 8px;
}

    .portfolio .label-text a.text-title
    {
        font-size: 12px;
        line-height: 16px;
        color: #FFF;
        cursor: pointer;
    }

.portfolio .text-category
{
    display: block;
    font-size: 10px;
}

/* Service */
.services
{
    color: #fff;
     background-color: #34495E;
}

    .services .service-container
    {

    }

.service-icon
{
    margin: 0 auto 20px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    background-color: #F2F2F2;
    width: 100px;
    height: 100px;
    color: #16a085;
    text-align: center;
}

    .service-icon i:before
    {
        font-size: 50px;
        line-height: 100px;
    }

.service-description
{
    margin-bottom: 20px;
}
/* Quick Contact */
.quick-contacts{
    margin-bottom:20px;
}
.quick-contact
{
    font-size: 20px;
    background-color: #34495E;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    line-height:30px;
    text-align:center;
    color:#fff;
    padding:20px 0px;
    margin-bottom:5px;
}

.quick-contact i
{
    color: #16a085;
    font-size: 20px;
    margin-right:8px;
}

</style>
<body>
    <!-- Start Wrapper -->
    <div id="wrapper">
        <!-- Start container -->
        <div class="container">
            <!-- Start About me section -->
            <div class="row">
                <div class="col-sm-3 col-md-2 text-center">
                    <!-- Avatar Image -->
                    <img src="{{ asset('images/angga.jpg') }}" alt="avatar"
                        class="img-responsive img-profile thumbnail">


                </div>
                <div class="col-sm-9 col-md-7">
                    <div class="mini-desc">
                        <!-- Name and Profesion -->
                        <h1 class="title animated">Refangga Lintar Prayoga <small
                                class="text-muted display-block-sm">Web developer</small></h1>
                        <!-- Profile -->
                        <p>Saya adalah orang yang sangat disiplin dan fokus terhadap hasil kerja hingga cenderung
                            idealis.</p>
                        <blockquote>
                            <p><i class="fa fa-quote-left"></i>&nbsp;Namun, saya juga bisa realistis saat menentukan
                                target atau tujuan dan selalu berupaya keras untuk bisa mencapai tujuan tersebut dengan
                                cara yang baik dan efisien</p>
                            <footer>Tentang saya <cite title="Source Title">Refangga Lintar Prayoga</cite></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <!-- Start Contact -->
                    <div class="contact">
                        <h2 class="sub-title"><i class="fa fa-slack"></i>About Me</h2>
                        <ul class="list-unstyled contact-list">
                            <li><i class="fa fa-phone"></i><span class="pull-right">+62-838-4749-9297</span></li>
                            <li><i class="fa fa-mobile"></i><span class="pull-right">+62-838-4749-9297</span></li>
                            <li><i class="fa fa-envelope"></i><span
                                    class="pull-right">refanggalintarprayoga@gmail.com</span></li>
                            <li><i class="fa fa-github"></i><span class="pull-right">https://github.com/Gezod</span>
                            </li>
                            <li><i class="fa fa-facebook"></i><span class="pull-right"><a
                                        href="javascript:void(0)">Refangga Lintar Prayoga</a></span></li>
                        </ul>
                    </div>
                    <!-- End Contact -->
                </div>
            </div>
            <!-- End About me section -->
            <hr />
            <div class="row">
                <div class="col-md-6">
                    <!-- Start Work Experience -->
                    <h2 class="sub-title"><i class="fa fa-slack"></i>Pengalaman Kerja</h2>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge mid-night">2019</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Staff Marketing</h4>
                                    <p><small class="text-muted">PT. GETEI TEKNOLOGI UTAMA (11 JUNI 2019 - 19 DESEMBER
                                            2020)</small></p>
                                </div>
                                <div class="timeline-body">
                                    <p> Merancang Strategi Penjualan </p>
                                    <p> Melayani dan menjalin hubungan baik dengan konsumen </p>
                                    <p> Merekap data penjualan </p>
                                    <p> Menganalisis dan menentukan target pasar </p>
                                    <p> Menghitung untung dan rugi di setiap kegiatan penjualan </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge mid-night">2021</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Processing Staff</h4>
                                    <p><small class="text-muted">PT. TATUR UTAMA SEJATI. (9 November 2021 - 21 SEPTEMBER
                                            2022)</small></p>
                                </div>
                                <div class="timeline-body">
                                    <p> Memproses order</p>
                                    <p> Menganalisa bukti transfer & alamat pengiriman</p>
                                    <p> Memfilter order masuk sebelum diproses</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End Work Experience -->

                    <!-- Start Education -->
                    <h2 class="sub-title"><i class="fa fa-slack"></i>Pendidikan</h2>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge mid-night">2007 </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">SD Dewi Sartika</h4>
                                    <p><small class="text-muted"><i class="fa fa-calendar"> 2007 - 2013</small></p></i>
                                </div>
                                <div class="timeline-body">
                                    <p> <i class="fa fa-home">Jl. Karangrejo Timur III No.42, RW.03, Wonokromo, Kec.
                                            Wonokromo Kota Surabaya, Jawa Timur 60243
                                    </p></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge mid-night">2013 </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">SMPN 32 Surabaya</h4>
                                    <p><small class="text-muted"><i class="fa fa-calendar"> 2013 - 2016</small></p></i>
                                </div>
                                <div class="timeline-body">
                                    <p> <i class="fa fa-home">Jl. Achmad Yani No.6, RW.8, Wonokromo, Kec. Wonokromo
                                                Kota Surabaya, Jawa Timur 60243
                                    </p></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge mid-night">2016 </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">SMKN 1 Surabaya (Rekayasa Perangkat Lunak)</h4>
                                    <p><small class="text-muted"><i class="fa fa-calendar"> 2016 - 2019</small></p></i>
                                </div>
                                <div class="timeline-body">
                                    <p><i class="fa fa-home">Jl. Smea No.4, Wonokromo, Kec. Wonokromo Kota Surabaya,
                                                Jawa Timur 60243
                                    </p></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge mid-night">2022 </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Telkom University Surabaya (Sistem Informasi)</h4>
                                    <p><small class="text-muted"><i class="fa fa-calendar"> 2022 - Now</small></p></i>
                                </div>
                                <div class="timeline-body">
                                    <p> <i class="fa fa-home">Jl. Ketintang No. 156 Kota Surabaya, Jawa Timur 60243
                                    </p></i>
                                    <p><i class="fa fa-user">1204220137</i></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End Education -->
                </div>

                <div class="col-md-6">
                    <!-- Start Skills -->
                    <div class="row">
                        <div class="col-md-12">

                            <h2 class="sub-title"><i class="fa fa-bars"></i>Pengetahuan Tentang Bahasa Pemrograman</h2>
                            <div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-green-sea" role="progressbar"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <span>HTML</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-green-sea" role="progressbar"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <span>CSS</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-green-sea" role="progressbar"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <span>Javascript</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-green-sea" role="progressbar"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <span>PHP</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-green-sea" role="progressbar"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <span>SQL</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Skills -->

                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <!-- Start Languages -->
                            <h2 class="sub-title"><i class="fa fa-language"></i>Bahasa Kecakapan</h2>
                            <div class="languages">
                                <div>
                                    Indonesia
                                    <div class="icons pull-right">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div>
                                    Inggris
                                    <div class="icons pull-right">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-o"></i>
                                    </div>
                                </div>

                                <!-- End Languages -->
                            </div>

                        </div>

                        <!-- Start Personal Information -->
                        <h2 class="sub-title"><i class="fa fa-slack"></i>Biodata Diri</h2>
                        <div>
                            <ul class="list-unstyled">
                                <li>Tempat,Tanggal Lahir<span class="pull-right">Surabaya , 08 Juni 2001</span></li>
                                <li>Alamat<span class="pull-right">Jl. Karang Rejo Baru 6B Kel. Wonokromo Kec.
                                        Wonokromo , Kota Surabaya 60243</span></li>
                                <li>Umur<span class="pull-right">22 Tahun</span></li>
                                <li>Agama<span class="pull-right">Islam</span></li>
                                <li>Status<span class="pull-right">Belum Menikah</span></li>
                            </ul>
                        </div>
                        <!-- End Personal Information -->

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <!-- Start Follow Me -->
                                <h2 class="sub-title"><i class="fa fa-angle-double-right"></i>Sosial Media</h2>
                                <div class="follow">
                                    <ul class="list-inline">
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" title="Facebook"
                                                    class="fa fa-facebook-square fa-2x"></i></a></li>
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" title="Instagram"
                                                    class="fa fa-instagram fa-2x"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End Follow Me -->

                            </div>
                            <div class="col-sm-6 col-md-6">
                                <!-- Start Hobbies -->
                                <h2 class="sub-title"><i class="fa fa-slack"></i>Hobi</h2>
                                <div class="hobbies">
                                    <span class="badge">Gaming</span><span class="badge">Programming</span><span
                                        class="badge">Badminton</span>
                                </div>
                                <!-- End Hobbies -->
                            </div>
                        </div>

                        <!-- Start Testimonial -->

                        <!-- End Testimonial -->

                        <!-- Start Awards -->
                        <h2 class="sub-title"><i class="fa fa-trophy"></i>Organisasi</h2>
                        <div class="awards">
                            <ul class="list-unstyled">
                                <li>Peserta Web Developer dan Design Web di SMKN 1 Surabaya <span
                                        class="pull-right">2018</span></li>
                            </ul>
                        </div>
                        <!-- End Awards -->

                    </div>
                </div>

                <!-- Start Portfolio -->
                <div class="row">
                    <div class="col-md-12">


                        <div class="portfolio app" data-cat="app">
                            <div class="portfolio-wrapper">

                                <div class="label">
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>





                        <div class="label-bg"></div>

                    </div>


                </div>




            </div>
            <!-- End Portfolio -->

            <!-- Start Services -->
            <div class="row services">
                <div class="col-md-12 service-container">
                    <div class="col-md-12">
                        <h2 class="sub-title"><i class="fa fa-slack"></i>Services</h2>
                        <div class="col-sm-4 col-md-4 text-center">
                            <h3>Website</h3>
                            <div class="service-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="service-description">Pembuatan Website tahap belajar dengan menggunakan bahasa
                                pemrograman HTML, Laravel(PHP), Tailwind & Daisy UI(CSS) , Inertia & React(JS) dengan
                                database MySQL</div>
                        </div>
                        <div class="col-sm-4 col-md-4 text-center">
                            <h3>Android</h3>
                            <div class="service-icon">
                                <i class="fa fa-mobile-phone"></i>
                            </div>
                            <div class="service-description">Pembuatan Android dengan bahasa Kotlin, dart/flutter, dan
                                React Native</div>
                        </div>
                        <div class="col-sm-4 col-md-4 text-center">
                            <h3>Marketing</h3>
                            <div class="service-icon">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <div class="service-description">Pengalaman kerja yang selalu berhubungan dengan marketing
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Services -->

            <!-- Start Quick Contact -->
            <div class="row quick-contacts">
                <div class="col-md-12">
                    <h2 class="sub-title"><i class="fa fa-slack"></i>Quick contact</h2>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="quick-contact"><i
                                    class="fa fa-envelope-o"></i>refanggalintar@student.telkomuniversity
                                    .ac.id</div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="quick-contact"><i class="fa fa-mobile"></i>+62-838-4749-9297</div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="quick-contact"><i class="fa fa-facebook"></i>Refangga Lintar Prayoga</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Quick Contact -->

            <!-- Start Footer -->
            <div class="row">
                <footer class="footer">
                    <p>All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footer -->
        </div>

        <!-- End container -->
    </div>
    <!-- End Wrapper -->

    <script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('WOW/js/wow.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!-- Mixitup JS -->
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('WOW/js/custom-script.js') }}"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-46102911-5', 'auto');
        ga('send', 'pageview');
    </script>
