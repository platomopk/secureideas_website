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
			
			$("#homeid").addClass("navactive");

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


    <section>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item active">
					<img src="https://images.pexels.com/photos/163518/war-desert-guns-gunshow-163518.jpeg?cs=srgb&dl=action-army-battle-163518.jpg&fm=jpg"
					class="carousalimg">
					<div class="carousel-caption">
						<h3>Defence Equipment</h3>
					</div>
				</div>

				<div class="item">
					<img src="https://images.idgesg.net/images/article/2017/12/wyze_labs_inc_wyzecam-100743658-orig.jpg" 
					class="carousalimg">
					<div class="carousel-caption">
						<h3>Security Equipment</h3>
					</div>
				</div>

				<div class="item">
					<img src="http://www.mach15groups.com/wp-content/uploads/2017/11/artificial-intelligence.jpg" 
					class="carousalimg">
					<div class="carousel-caption">
						<h3>Security Consultancy</h3>
					</div>
				</div>

			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<br><br><br>
	<section id="smallgallery">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-4">
						<img class="galleryimg" src="https://marketplace.canva.com/MAC3Z6BTjMk/1/thumbnail_large/canva-ammunition%2C-pistol%2C-weapon%2C-gun-MAC3Z6BTjMk.jpg"
						 style="width:100%;height:100%;    object-fit: cover;
							object-position: center;" alt="">
					</div>
					<div class="col-md-4">
						<img class="galleryimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQLk6SzbmUFzwNOrS4uzaHuCuzBo75zEsMP1Bfx2GghEtQYjarWQ"
						 style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
					</div>
					<div class="col-md-4">
						<img class="galleryimg" src="https://images.unsplash.com/photo-1539164287322-560c73529200?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
						 style="width:100%;height:100%;    object-fit: cover;
									object-position: center;" alt="">
					</div>
					<div class="col-md-4">
						<img class="galleryimg" src="https://www.wallpaperup.com/uploads/wallpapers/2013/12/11/192585/15af6331039af984a5b9469e36ceb8eb.jpg"
						 style="width:100%;height:100%;    object-fit: cover;
									object-position: center;" alt="">
					</div>
					<div class="col-md-4">
						<img class="galleryimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKX-9tzyV1Ev5K4Bae7A67_xu3GfpcK2dRzSRF-yx3nLc3BK0I"
						 style="width:100%;height:100%;    object-fit: cover;
										object-position: center;" alt="">
					</div>
					<div class="col-md-4">
						<img class="galleryimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsSkz81xxWebpI0DYiB7QLGCVxiie_Jhzg4V1NaDK_le3pKlpu"
						 style="width:100%;height:100%;    object-fit: cover;
											object-position: center;" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- new style -->
	<section id="largegallery">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%;">
							<img class="galleryimg" src="https://marketplace.canva.com/MAC3Z6BTjMk/1/thumbnail_large/canva-ammunition%2C-pistol%2C-weapon%2C-gun-MAC3Z6BTjMk.jpg"
							 style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:120px">
							<img class="galleryimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQLk6SzbmUFzwNOrS4uzaHuCuzBo75zEsMP1Bfx2GghEtQYjarWQ"
							 style="height: 100%;
								width: 100%;
								object-fit: cover;
								object-position: top;" alt="">
						</div>
						<div class="break"></div>
						<div style="height:120px">
							<img class="galleryimg" src="https://images.unsplash.com/photo-1539164287322-560c73529200?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
							 style="height: 100%;
									width: 100%;
									object-fit: cover;
									object-position: top;" alt="">
						</div>
					</div>
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%">
							<img class="galleryimg" src="https://www.wallpaperup.com/uploads/wallpapers/2013/12/11/192585/15af6331039af984a5b9469e36ceb8eb.jpg"
							 style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>
				</div>
				<div class="break"></div>
				<div class="row">
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:120px">
							<img class="galleryimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKX-9tzyV1Ev5K4Bae7A67_xu3GfpcK2dRzSRF-yx3nLc3BK0I"
							 style="height: 100%;
										width: 100%;
										object-fit: cover;
										object-position: top;" alt="">
						</div>
						<div class="break"></div>
						<div style="height:120px">
							<img class="galleryimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsSkz81xxWebpI0DYiB7QLGCVxiie_Jhzg4V1NaDK_le3pKlpu"
							 style="height: 100%;
											width: 100%;
											object-fit: cover;
											object-position: top;" alt="">
						</div>
					</div>

					<div class="col-md-8" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%">
							<img class="galleryimg" src="assets/1.jpg" style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>
				</div>
				<div class="break"></div>
				<div class="row">
					<div class="col-md-8" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%">
							<img class="galleryimg" src="assets/2.jpg" style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%">
							<img class="galleryimg" src="assets/3.jpg" style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>


				</div>
				<div class="break"></div>
				<div class="row">
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%">
							<img class="galleryimg" src="assets/5.jpg" style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:120px">
							<img class="galleryimg" src="assets/6.jpg" style="height: 100%;
								width: 100%;
								object-fit: cover;
								object-position: top;" alt="">
						</div>
						<div class="break"></div>
						<div style="height:120px">
							<img class="galleryimg" src="assets/7.jpg" style="height: 100%;
									width: 100%;
									object-fit: cover;
									object-position: top;" alt="">
						</div>
					</div>
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%">
							<img class="galleryimg" src="assets/8.jpg" style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>
				</div>
				<div class="break"></div>
				<div class="row">
					<div class="col-md-4" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:120px">
							<img class="galleryimg" src="assets/9.jpg" style="height: 100%;
										width: 100%;
										object-fit: cover;
										object-position: top;" alt="">
						</div>
						<div class="break"></div>
						<div style="height:120px">
							<img class="galleryimg" src="assets/10.jpg" style="height: 100%;
											width: 100%;
											object-fit: cover;
											object-position: center;" alt="">
						</div>
					</div>

					<div class="col-md-8" style="height:250px;padding-left:5px;padding-right:5px;position:relative;">
						<div style="height:100%">
							<img class="galleryimg" src="assets/1.jpg" style="width:100%;height:100%;    object-fit: cover;
								object-position: center;" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<br><br>
	<section id="aboutussection" style="display:none; padding-top:25px;padding-bottom:25px;color:white;background-attachment:fixed; background-size:cover; background-color:#161817; font-family:bankgothic">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<h3 id="aboutusdetails" class="text-center" style="color:#a27600;padding:5px;">About Us</h3>
				<p style="letter-spacing:1px; word-spacing:5px;text-align:center; padding:20px;">
					Secure Ideas (Private) Limited is an emerging company based on the ethos of providing a “one-stop solution” for the defence
					indenting, security consultancy and security equipment. With a focus on Quality and last mile service delivery, our
					aim is to enable our clients to meet their needs quickly, efficiently and at competitive prices, sourcing the best products
					by tapping into our strong local and international network besides providing bespoke consultancy services for our diverse
					clientele. Our aim is to provide our clients with quality products with a strong focus on customer experience up until
					the ‘last mile’ delivery of products and services. With our vast clientele, connections and networks with local and
					international suppliers, we look to form long-lasting relationships. We have vast experience in providing security consultancy,
					security equipment and other defence related equipment with our team comprising of personnel of retired military personnel,
					along with expertise in international business markets, project management, legal affairs, marketing and procurement.
					Our priority is understanding the needs and requirements of our clients and ensure we comply to international standards
					of quality and delivery of our products and services. We are always welcome to listening to you, and should you have
					any query, feel free to Contact us and our representative will arrange for a meeting or answer your queries.

				</p>
			</div>
		</div>
	</section>



	<section id="contactusdetails" style="display:none">
		<iframe style="width:100%; height:250px;" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d1659.7086408826297!2d72.97072268591386!3d33.69814981464649!3m2!1i1024!2i768!4f13.1!2m1!1sExecutive+Center+E-11!5e0!3m2!1sen!2s!4v1553523534408"
		 width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>




    <?php include "footer.php"; ?>

    <div id="top">Top</div>


</body>

</html>