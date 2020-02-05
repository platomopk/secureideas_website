<!doctype html>
<html>

<head style="overflow-x:hidden">
    <title>Homepage - Secure Ideas Pvt. Ltd. - Official Website</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="assets/logosmall.png" itemprop="image">


    <!-- HTML Meta Tags -->
    <meta name="description" content="Secure Ideas (Private) Limited is an emerging company based on the ethos of providing a “one-stop solution” for the defence
  indenting, security consultancy and security equipment.
	">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Secure Ideas (Pvt.) Ltd. - Official Website">
    <meta itemprop="description" content="Secure Ideas (Private) Limited is an emerging company based on the ethos of providing a “one-stop solution” for the defence
  indenting, security consultancy and security equipment. ">
    <meta itemprop="image" content="img/icon.ico?v=2">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://secureideasglobal.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Secure Ideas (Pvt.) Ltd. - Official Website ">
    <meta property="og:description" content="Secure Ideas (Private) Limited is an emerging company based on the ethos of providing a “one-stop solution” for the defence
  indenting, security consultancy and security equipment. ">
    <meta property="og:image" content="assets/logosmall.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="O2LifePurifier - Official ">
    <meta name="twitter:description" content="We are a company motivated to provide pure and clean mineral water. Our state of the art filtration plant is equipped to eliminate all impurities ...">
    <meta name="twitter:image" content="assets/logosmall.png">


    <meta name="Keywords" content="Ideas Private,emerging company,ethos,focus,Quality,last mile,delivery,aim,clients,quality products,strong focus,vast clientele connections,local,international suppliers,vast experience,providing,equipment,welcome,query feel">



    <link rel="icon" href="assets/logosmall.png" type="image/x-icon" />


    <link rel="stylesheet" href="css/diw.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <script>
        $(document).ready(function () {


            $("#defenceid").addClass("navactive");


            $("#whowearecaret").hide();
            $("#whowearedetail").hide();

            $("#aboutuscaret").hide();
            $("#aboutusdetail").hide();

            $("#home").click(function () {
                $("#aboutuscaret").hide();
                $("#aboutusdetail").hide();
                $("#aboutus").removeClass("active");

                $("#whowearecaret").hide();
                $("#whowearedetail").hide();
                $("#whoweare").removeClass("active");

                if ($("#home").hasClass("active")) {
                } else {
                    $("#home").addClass("active");
                }

            });

            $("a").click(function () {
                $("#aboutuscaret").hide();
                $("#aboutusdetail").hide();
                $("#whowearecaret").hide();
                $("#whowearedetail").hide();
            })

            $("#contactus").click(function () {
                $("#aboutuscaret").hide();
                $("#aboutusdetail").hide();
                $("#aboutus").removeClass("active");
                $("#home").removeClass("active");

                $("#whowearecaret").hide();
                $("#whowearedetail").hide();
                $("#whoweare").removeClass("active");

                if ($("#contactus").hasClass("active")) {

                } else {
                    $("#contactus").addClass("active");
                }

            });

            $("#whoweare").click(function () {
                $("#aboutuscaret").hide();
                $("#aboutusdetail").hide();
                $("#aboutus").removeClass("active");
                $("#home").removeClass("active");
                $("#contactus").removeClass("active");

                $("#whowearecaret").toggle("slow");
                $("#whowearedetail").toggle("slow");
                if ($("#whoweare").hasClass("active")) {
                    $("#whoweare").removeClass("active");
                } else {
                    $("#whoweare").addClass("active");
                }
            });

            $("#aboutus").click(function () {

                $("#whowearecaret").hide();
                $("#whowearedetail").hide();
                $("#whoweare").removeClass("active");
                $("#home").removeClass("active");
                $("#contactus").removeClass("active");

                $("#aboutuscaret").toggle("slow");
                $("#aboutusdetail").toggle("slow");
                if ($("#aboutus").hasClass("active")) {
                    $("#aboutus").removeClass("active");
                } else {
                    $("#aboutus").addClass("active");
                }

            });

            $(window).scroll(function () {
                if ($('#whowearedetail').css('display') == 'block') {
                    $("#home").addClass("active");
                    $("#whoweare").removeClass("active");
                    $("#aboutus").removeClass("active");
                    $("#contactus").removeClass("active");

                    $("#whowearecaret").hide();
                    $("#whowearedetail").hide();
                }

                if ($('#aboutusdetail').css('display') == 'block') {
                    $("#home").addClass("active");
                    $("#whoweare").removeClass("active");
                    $("#aboutus").removeClass("active");
                    $("#contactus").removeClass("active");

                    $("#aboutuscaret").hide();
                    $("#aboutusdetail").hide();
                }
            });

            $("#bars").click(function () {
                $("#headerright").toggle("slow");
            });

            $("#top").click(function () {
                $("html, body").animate({ scrollTop: 0 }, "slow"); return false;
            });

            $(window).resize(function () {
                //do something

                var width = $(document).width();
                if (width > 770) {
                    // do something else
                    $("#headerright").css('display', 'block');
                }
            });
        });
    </script>


</head>

<body style="overflow-x:hidden">


    <?php include "header.php"; ?>

    <section id="newsliderde">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div>
                        <div class="outer">
                            <div class="middle">
                                <div class="slidercontent">
                                    <h2>defence <br>equipment</h2><br>
                                    <p>
                                        our priority is understanding the needs and <br> requirements of our clients and
                                        ensure we comply to <br> international standards of quality and delivery of our <br>                                        products and services. <br><br> we provide a vast array of products for your defence
                                        <br> needs. we provide a host of products ranging from <br> general defence equipment,
                                        protection equipment, <br> communication equipment, clothing and web equipment <br>                                        among others.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="newclipart">
        <div class="row" id="clipartbanner">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3" onclick="window.location.hash = '#gded';">
                        <div class="clipart text-center">
                            <span>
                                    <img src="assets/target.png" alt="">
                                </span>
                        </div>
                        <div class="clipartname text-center">
                            General Defence <br> equipment
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="clipart text-center">
                            <span>
                                            <img src="assets/crash-helmet.png" alt="">
                                        </span>
                        </div>
                        <div class="clipartname text-center">
                            Protection <br> equipment
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="clipart text-center">
                            <span>
                                            <img src="assets/walkie-talkie.png" alt="">
                                        </span>
                        </div>
                        <div class="clipartname text-center">
                            Communication <br> equipment
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="clipart text-center">
                            <span>
                                            <img src="assets/soldier.png" alt="">
                                        </span>
                        </div>
                        <div class="clipartname text-center">
                            Clothing &amp; Web <br> equipment
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="descrow">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3 desccol" id="gded">
                        <div class="clipartdesc ">
                            Night vision sights, thermal sights, FCIs, Parachutes and gear, combat equipment including: ,weapon sights, scopes, aiming
                            devices which can be used with M4 riffle(ANPEQ, ATPAL) ammunition , Personal load bearing Equipment,
                            body armours of different categories, Camouflage items, footwears, headgear simple and ballistic,
                            protective items to include diving suits, eye wears, ear muffs, Knee pads, elbow pads, uniforms,
                            and anti- riot equipment among many others

                            <span class="clipartdescart" aria-hidden="true">
                                        <img src="assets/target.png" alt="">
                                </span>
                        </div>

                    </div>
                    <div class="col-md-3 desccol" id="ped">
                        <div class="clipartdesc ">
                            kevlar helmets, bullet proof vehicles, body armour jackets, ballistic shields, among others.

                            <span class="clipartdescart" aria-hidden="true">
                                        <img src="assets/crash-helmet.png" alt="">
                                </span>
                        </div>

                    </div>

                    <div class="col-md-3 desccol" id="ced">
                        <div class="clipartdesc ">
                            handheld sets, bas stations and it solutions among others

                            <span class="clipartdescart" aria-hidden="true">
                                        <img src="assets/walkie-talkie.png" alt="">
                                </span>
                        </div>

                    </div>

                    <div class="col-md-3 desccol" id="cwed">
                        <div class="clipartdesc ">
                            clothing, web equipment, load bearing equipment (lbe), hydration systems, backpacks and holsters among others

                            <span class="clipartdescart" aria-hidden="true">
                                        <img src="assets/soldier.png" alt="">
                                </span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="text-center bottomtext">We are always welcome to listening to you. contact us and our representative will <br>arrange for a meeting
                    or answer your queries by email</p>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <div id="top">Top</div>


</body>

</html>