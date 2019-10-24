<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("ggwp").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("ggwp").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
function openNavvy() {
    document.getElementById("mySidenavvy").style.width = "250px";
    document.getElementById("ggwp").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNavvy() {
    document.getElementById("mySidenavvy").style.width = "0";
    document.getElementById("ggwp").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
 $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });

</script>
</head>
<body id="ggwp">
<section class="second hidden-lg hidden-md" style="position:fixed;z-index:10; width:100%;">
	<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
            
                <li>
                    <a href="#"">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Our Expert Services</a>
                </li>
                <li>
                    <a href="#">Product Gallery</a>
                </li>
                
                <li>
                    <a href="#">Location</a>
                </li>
                <li>
                    <a href="#">Order Online</a>
                </li>
                <li>
                    <a href="https://twitter.com/maridlcrmn">Contact Us</a>
                </li>
				<li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" style="cursor:default;">More <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    <li><a href="#">TRANSLATE</a></li>
                    <li><a href="#">WISHLIST</a></li>
                    <li><a href="#">CHECKLIST</a></li>
                    <li><a href="#">VIEW CART: 0</a></li>
                    <li><a href="#">MEMBER LOGIN</a></li>
					<li><a href="#">SIGN UP</a></li>
                  </ul>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
           
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
		<!--<div class="row" style="position:static;padding-left: 20px;top: 5px;">
			<div id="mySidenav" class="sidenav" style="background-color:#0059B2;">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#">About</a>
				<a href="#">Our Expert Services</a>
				<a href="#">Product Gallery</a>
				<a href="#">Location</a>
				<a href="#">Order Online</a>
				<a href="#">Contact Us</a>
			</div>
		
			<span class="hidden-lg" style="font-size:30px;cursor:pointer;" onclick="openNav()">  &#9776; MENU</span>

			<div class="col-xs-1 hider hidden-sm hidden-xs hidden-md" id="rtz" style="padding: 10px 10px 20px 30px; border-left:solid 1px #014A94;  border-right:solid 1px #014A94; height:60px; width: 100px; 
				margin-bottom:5px;">
				<a href="#"><img src="Pasalo/shadow2.png" style="position: absolute; left: 5px; top: -2px; max-width:100%;"><img src="Pasalo/home.png" class="img-responsive"></a>
			</div>
			<div class="col-xs-2 hider hidden-sm hidden-xs hidden-md" id="rtz" style="padding: 15px 10px 10px 30px; border-right:solid 1px #014A94; height:60px; width: 130px;">
				<a href="#">About Us</a>
			</div>
			<div class="col-xs-3 hider hidden-sm hidden-xs hidden-md" id="rtz" style="padding: 15px 10px 10px 50px; border-right:solid 1px #014A94; height:60px; width: 250px;">
				<a href="#">Our Expert Services</a>
			</div>
			<div class="col-xs-2 hider hidden-sm hidden-xs hidden-md" id="rtz" style="padding: 15px 10px 10px 40px; border-right:solid 1px #014A94; height:60px; width: 200px;">
				<a href="#">Product Gallery</a>
			</div>
			<div class="col-xs-1 hider hidden-sm hidden-xs hidden-md" id="rtz" style="padding: 15px 10px 10px 40px; border-right:solid 1px #014A94; height:60px; width: 150px;">
				<a href="#">Location</a>
			</div>
			
			<div class="col-xs-2 hider hidden-sm hidden-xs hidden-md" id="rtz" style="padding: 15px 10px 10px 40px; border-right:solid 1px #014A94; height:60px; width: 180px;">
				<a href="#">Order Online</a>
			</div>
			<div class="col-xs-1 hider hidden-sm hidden-xs hidden-md" id="rtz" style="padding: 15px 10px 10px 40px; border-right:solid 1px #014A94; height:60px; width: 160px;">
				<a href="#">Contact Us</a>
			</div>		
		</div>-->
	

</section>
<header class="head hidden-lg">
	<div class="container hidden-lg hidden-md" style="padding-top:70px;">
		<div class="row">
			<div class="col-md-3" style="">
				<img class="img-responsive logo hidden-xs hidden-sm" src="wp-content/themes/New folder/Pasalo/shadow.png" style="min-width: 150px; margin-right: auto; margin-left:auto;text-align:center;">
				<img class="img-responsive logo" src="wp-content/themes/New folder/Pasalo/liandro.png" style="max-width: 50%; width:100%;margin-bottom:auto;margin-right: auto; margin-left:auto; text-align:center;">
			</div>
			<div class="col-md-3" style="margin-top:auto; margin-bottom: auto; margin-right: auto; margin-left:auto;">
				<p id="every" style="text-align:center;">Every Builder's Choice</p>
			</div>
			
			<div class="col-md-3 magsa" style="text-align:center;margin-top:auto; margin-right: auto; margin-left:auto;">
			
				
				<p id = "asd" style="text-align:center;"><i class="visible-xs visible-sm fa fa-map-marker" style="color: #FFBF00;"><span style="color:white !important;"> 251 Magsaysay Ave. Baguio City, Benguet</span>
				
				</p></i>
				
			</div>
	
		
			<div class="col-md-3 visible-md visible-sm" style="margin-top: 10px; margin-right:auto;margin-bottom:20px; text-align:center;">
					<input type="text" style="text-align:center;border-radius:35px; height:43px; background: url('wp-content/themes/New folder/Pasalo/search.png') no-repeat scroll 10px 7px;
					padding-top: 2px;
					padding-left: 5px;  min-width: 50%; background-color:white;" placeholder="&nbsp GLASS MATERIALS" >
			</div>
			<div class="col-md-3 visible-xs" style="margin-top: 10px; margin-right: auto;margin-bottom:20px;text-align:center;">
					<input type="text" style="text-align:center;border-radius:35px; height:43px; background: url('wp-content/themes/New folder/Pasalo/search.png') no-repeat scroll 10px 7px;
					padding-top: 2px;
					padding-left: 15px;  min-width: 50%; background-color:white;" placeholder="&nbsp GLASS MATERIALS" >
			</div>
		</div>
	</div>	
	<div class="container-fluid hidden-xs hidden-sm">
		<div class="row" style="padding-bottom: 5px;">
	
			<div class="col-xs-5" style="margin-bottom: 10px; margin-right: auto;">
				<img class="img-responsive logo" src="wp-content/themes/New folder/Pasalo/shadow.png" style="position: absolute; right: -150px; top: 5px; min-width: 150px;">
				<img class="img-responsive logo" src="wp-content/themes/New folder/Pasalo/liandro.png" style="min-width: 235px;">
				
			</div>
			
			<div class="col-xs-4 magsa" style="margin-top: 40px; width:350px; margin-right: -70px; margin-left:20px;">
				<img src="wp-content/themes/New folder/Pasalo/icon.png" style="position:absolute; left: -5px; bottom: 14px;">
				<p id = "asd" style="min-width:;">251 Magsaysay Ave. Baguio City, Benguet</p>
			</div>
			<div class="col-xs-3 glasma" style="margin-top: 30px;">
					<input type="text" style="border-radius:35px; height:43px; background: url('wp-content/themes/New folder/Pasalo/search.png') no-repeat scroll 10px 7px;
					padding-top: 2px;
					padding-left: 40px; width: 100%; background-color:white;" placeholder="&nbsp GLASS MATERIALS" >
			</div>
			
		</div>
	</div>		
</header>		
<header class="head hidden-xs hidden-sm hidden-md">
	<div class="container hidden-lg hidden-md">
		<div class="row">
			<div class="col-md-3" style="">
				<img class="img-responsive logo hidden-xs" src="wp-content/themes/New folder/Pasalo/shadow.png" style="min-width: 150px; margin-right: auto; margin-left:auto;text-align:center;">
				<img class="img-responsive logo" src="wp-content/themes/New folder/Pasalo/liandro.png" style="max-width: 50%; width:100%;margin-bottom:auto;margin-right: auto; margin-left:auto; text-align:center;">
			</div>
			<div class="col-md-3" style="margin-top:auto; margin-bottom: 10px; margin-right: auto; margin-left:auto;">
				<p id="every" style="text-align:center;">Every Builder's Choice</p>
			</div>
			
			<div class="col-md-3 magsa" style="margin-top: 10px; margin-right: auto; margin-left:auto;">
				<img class="hidden-xs hidden-sm hidden-md" src="wp-content/themes/New folder/Pasalo/icon.png" style="position:absolute; left: -5px; bottom: 14px;">
				<p id = "asd" style="text-align:center;">251 Magsaysay Ave. Baguio City, Benguet</p>
			</div>
	
		
			<div class="col-md-3" style="margin-top: 10px; margin-right: auto;text-align:center;">
					<input type="text" style="border-radius:35px; height:43px; background: url('wp-content/themes/New folder/Pasalo/search.png'g) no-repeat scroll 10px 7px;
					padding-top: 2px;
					padding-left: 40px;  min-width: 50%; background-color:white;" placeholder="&nbsp GLASS MATERIALS" >
			</div>
		
		</div>
	</div>	
	<div class="container-fluid hidden-xs hidden-sm">
		<div class="row" style="padding-bottom: 5px;">
	
			<div class="col-xs-5" style="margin-bottom: 10px; margin-right: auto;">
				<img class="img-responsive logo" src="wp-content/themes/New folder/Pasalo/shadow.png" style="position: absolute; right: -150px; top: 5px; min-width: 150px;">
				<img class="img-responsive logo" src="wp-content/themes/New folder/Pasalo/liandro.png" style="min-width: 235px;">
				
			</div>
			
			<div class="col-xs-4 magsa" style="margin-top: 40px; width:350px; margin-right: -70px; margin-left:20px;">
				<img src="wp-content/themes/New folder/Pasalo/icon.png" style="position:absolute; left: -5px; bottom: 14px;">
				<p id = "asd" style="min-width:;">251 Magsaysay Ave. Baguio City, Benguet</p>
			</div>
			<div class="col-xs-3 glasma" style="margin-top: 30px;">
					<input type="text" style="border-radius:35px; height:43px; background: url('wp-content/themes/New folder/Pasalo/search.png') no-repeat scroll 10px 7px;
					padding-top: 2px;
					padding-left: 40px; width: 100%; background-color:white;" placeholder="&nbsp GLASS MATERIALS" >
			</div>
			
		</div>
	</div>		
</header>
<section id="nav">
	<div class="container-fluid">
		<div class="row" style="">
			
			<div class="col-xs-2">
			</div>
			<div class="col-xs-4 hidden-md" style="height:45px;">
				<p id="every" class="hidden-xs hidden-sm">Every Builder's Choice</p>
			</div>
			<div class="col-xs-4 visible-md" style="height:45px; width:245px;">
				<p id="every" class="hidden-xs hidden-sm">Every Builder's Choice</p>
			</div>
			<div class="col-xs-6 hider hidden-xs hidden-md hidden-sm" style="margin-bottom:-30px;"> 
				<div class="row" id="ghg" style=" height: 30px;">
					<div class="collapse navbar-collapse col-xs-2" style="border-right:1px dotted white;  padding: 2px 5px 0px 30px; margin-top:5px;">
						<img src="wp-content/themes/New folder/Pasalo/flag.png" style="position: absolute; left:2px;">
						<div class="dropdown" id="zzz">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">TRANSLATE<b class="caret"></b></a>
							<ul class="dropdown-menu" id="mopi" role="menu">
								<li><a href="#">Spanish</a></li>
								<li><a href="#">Japanese</a></li>
								<li><a href="#">Mandarin</a></li>
								<li><a href="#">Cantonese</a></li>
								<li><a href="#">French</a></li>
								<li class="divider"></li>
								<li><a href="#">More</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 85px; padding:2px 15px; height: 23px; margin-top:5px;">
						<a id="mnm" href="">WISHLIST</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 95px; padding:2px 20px; height: 23px; margin-top:5px;">
						<a href="">CHECKLIST</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 120px; padding:2px 20px; height: 23px; margin-top:5px;">
						<a href="">VIEW CART: &nbsp; 0</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 120px; padding:2px 5px 0px 15px; height: 23px; margin-top:5px;">
						<a href="">MEMBER LOGIN</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 58px; padding:2px 6px; height: 23px; margin-top:5px;">
						<a href="">SIGN UP</a>
					</div>
				</div>

			</div>
			<div class="col-xs-6 hider visible-md" style="margin-bottom:-30px;"> 
				<div class="row" id="ghg" style=" height: 30px;">
					<div class="collapse navbar-collapse col-xs-2" style="border-right:1px dotted white;  padding: 2px 5px 0px 30px; margin-top:5px;">
						<img src="wp-content/themes/New folder/Pasalo/flag.png" style="position: absolute; left:2px;">
						<div class="dropdown" id="zzz">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">TRANSLATE<b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Spanish</a></li>
								<li><a href="#">Japanese</a></li>
								<li><a href="#">Mandarin</a></li>
								<li><a href="#">Cantonese</a></li>
								<li><a href="#">French</a></li>
								<li class="divider"></li>
								<li><a href="#">More</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 60px; padding:2px 3px; height: 23px; margin-top:5px;">
						<a href="">WISHLIST</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 67px; padding:2px 3px; height: 23px; margin-top:5px;">
						<a href="">CHECKLIST</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 90px; padding:2px 5px; height: 23px; margin-top:5px;">
						<a href="">VIEW CART: &nbsp; 0</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 95px; padding:2px 0px 0px 5px; height: 23px; margin-top:5px;">
						<a href="">MEMBER LOGIN</a>
					</div>
					<div class="col-xs-2" id="mnm" style="border-right:1px dotted white; width: 58px; padding:2px 6px; height: 23px; margin-top:5px;">
						<a href="">SIGN UP</a>
					</div>
				</div>

			</div>
		
		</div>
		
	</div>
	
</section>