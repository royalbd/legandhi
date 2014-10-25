<?php session_start(); $_SESSION["cart_total"] = 0; $_SESSION["cart_items"][0] = "";?>
<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
<!-- BEGIN head -->
<head>
<title>Le-Gandhi | Home</title>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Favicon -->
<link rel="shortcut icon" href="images/header-logo-test.png" type="image/x-icon" />

<!-- Stylesheets -->
<link type="text/css" rel="stylesheet" href="css/reset.css" tppabs="Royal Technology/css/reset.css" />
<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" tppabs="Royal Technology/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/main-stylesheet.css" tppabs="Royal Technology/css/main-stylesheet.css" />
<link type="text/css" rel="stylesheet" href="css/lightbox.css" tppabs="Royal Technology/css/lightbox.css" />
<link type="text/css" rel="stylesheet" href="css/shortcodes.css" tppabs="Royal Technology/css/shortcodes.css" />
<link type="text/css" rel="stylesheet" href="css/custom-fonts.css" tppabs="Royal Technology/css/custom-fonts.css" />
<link type="text/css" rel="stylesheet" href="css/custom-colors.css" tppabs="Royal Technology/css/custom-colors.css" />
<link type="text/css" rel="stylesheet" href="css/responsive.css" tppabs="Royal Technology/css/responsive.css" />
<link type="text/css" rel="stylesheet" href="css/layerslider.css" tppabs="Royal Technology/css/layerslider.css" />
<link type="text/css" rel="stylesheet" href="css/parallax-slider-main-stylesheet.css" tppabs="Royal Technology/css/parallax-slider-main-stylesheet.css" />
<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="css/ie-ancient.css" tppabs="Royal Technology/css/ie-ancient.css" />
		<![endif]-->

<!-- END head -->
</head>

<!-- BEGIN body -->
<body>

<!-- BEGIN .boxed -->
<div class="boxed"> 
  
  <!-- BEGIN .header -->
  <div class="header"> 
    
    <!-- BEGIN .wrapper -->
    <div class="wrapper">
      <div class="header-logo"> 
        <!-- <h1><a href="index.php">Le-Gandhi</a></h1> --> 
        <a href="index.html" tppabs="Royal Technology/index.html"><img src="images/header-logo-test.png" tppabs="Royal Technology/images/header-logo.png" alt="" /></a> </div>
      <div id="cart" class="cart-details" style=" position:fixed; top:25px;left:69%; z-index:15; ">
        <div class="main-title" style="background-color:yellow !important;">
          <p style=" color:midnightblue;  padding:15px; font-size:16px;"> <span>Cart Total: $<strong><span id="cart_total" style="color:purple;">0.00 </span>
            <input id="cart_tot" type="hidden" value="0">
            </strong></span> <a href="" style="text-decoration:underline; font-weight:bold; color:red; border-radius:12px; background-color:transparent; padding:5px; font-size:16px;" > Place Order </a> </p>
          <div class="ribbon-tail" >
            <div class="inner-top" style="background-color:yellow !important;"></div>
            <div class="inner-bottom" style="background-color:yellow !important;"></div>
          </div>
        </div>
      </div>
      
      <!-- END .wrapper --> 
    </div>
    
    <!-- END .header --> 
  </div>
  
  <!-- BEGIN .main-menu-custom -->
  <div class="main-menu-custom"> 
    
    <!-- BEGIN .wrapper -->
    <div class="wrapper">
      <div class="ribbon-left"></div>
      <div class="ribbon-right"></div>
      <ul>
        <li><a href="index.php" >Home</a> </li>
        <li><a href="menu-card.php" tppabs="Royal Technology/blog.html"><span>Menu</span></a>
          <ul>
            <li><a href="#menu-card.php" tppabs="Royal Technology/blog.html">Sub Menu</a></li>
            <li><a href="#blog2.html" tppabs="Royal Technology/blog2.html">Sub Menu 2</a></li>
            <li><a href="#post.html" tppabs="Royal Technology/post.html"><span>Sub Menu 3</span></a>
              <ul>
                <li><a href="#post.html" tppabs="Royal Technology/post.html">Sub Sub Menu</a></li>
                <li><a href="#post2.html" tppabs="Royal Technology/post2.html">Sub Sub Menu</a></li>
                <li><a href="#menu-card.html" tppabs="Royal Technology/menu-card.html"> ...</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#menu-card.html" tppabs="Royal Technology/menu-card.html">Pizza</a>
        <li><a href="#menu-card.html" tppabs="Royal Technology/menu-card.html">Galerie</a>
        <li><a href="#menu-card.html" tppabs="Royal Technology/menu-card.html">Contactez-Nous</a> </li>
      </ul>
      
      <!-- END .wrapper --> 
    </div>
    <!-- END .main-menu-custom --> 
  </div>
  
  <!-- BEGIN .slider-content -->
  <div class="slider-content"> 
    
    <!-- BEGIN .wrapper -->
    <div class="wrapper">
      <div id="layerslider">
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/test/24.jpg" alt="layer"> <!--<img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> --></div>
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/test/34.jpg" alt="layer"> <!--<img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack">--> </div>
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/test/25.jpg" alt="layer"><!-- <img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 75px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 195px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> --></div>
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/test/29.jpg" alt="layer"> <!--<img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> --></div>
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/test/30.jpg" alt="layer"> <!--<img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> --></div>
        
        <!--     <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/slide-1-bg.jpg" alt="layer"> <img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 75px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 195px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> </div>
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/slide-1-bg.jpg" alt="layer"> <img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> </div>
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/slide-1-bg.jpg" alt="layer"> <img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> </div>--> 
        
      </div>
      
      <!-- END .wrapper --> 
    </div>
    
    <!-- END .slider-content --> 
  </div>
  
  <!-- BEGIN .content -->
  <div class="content"> 
    
    <!-- BEGIN .wrapper -->
    
   
    <div class="wrapper">
      <div class="content-white"> 
        
         
        <!-- BEGIN .main-content -->
        <div class="main-content" style="position:initial !important;">
        
          <div class="main-head menu-card-title">
            <div class="main-title">
              <h1>Our Most Popular Menu Offerings</h1>
              <div class="ribbon-tail">
                <div class="inner-top"></div>
                <div class="inner-bottom"></div>
              </div>
              <div class="ribbon-tail left">
                <div class="inner-top"></div>
                <div class="inner-bottom"></div>
              </div>
            </div>
          </div>
          
          
          <div class="menu-card-count"> 
            
            <!-- BEGIN .menu-card-left -->
            <div class="menu-card-left">
              <div class="menu-card-block">
                <div class="menu-card-item">
                  <div style="width:100%; height:300px;border: 1px solid burlywood; padding-left: 7px; padding-top:7px; border-radius: 5px; background:whitesmoke;">
                    <h2 class="title-red">Bhuna Homard</h2>
                    <div style="width:70%; float:left;"> <img src="images/home-img/main-body-bg.jpg" width="100%" height="178" style="border-radius:5px;" > </div>
                    <div style="width:29%; float:right;">
                      <h4 ><a>le homard Bhuna assez pour mange </a> </h4>
                    </div>
                    <div style="width:100%; float:left;">
                      <h3 >Regular Prize : $50<br />
                        Special Prize : $40(10am-5pm)<br />
                        <p style="text-align:right; margin-right:25px;"><a class="more-link" onclick="add_to_total('50')"><i>Add To Cart<span>&nbsp;</span></i><span>&nbsp;</span></a></p>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="menu-card-item">
                  <div style="width:100%; height:300px;border: 1px solid burlywood; padding-left: 7px; padding-top:7px; border-radius: 5px; background:peachpuff;">
                    <h2 class="title-red">Pain tundura</h2>
                    <div style="width:70%; float:left;"> <img src="images/home-img/0383a3_83ed2e757f884be0a44979bf9d79de0f.jpg_srz_p_270_178_75_22_0.50_1.20_0.00_jpg_srz.jpg" width="100%" height="178" style="border-radius:5px;" > </div>
                    <div style="width:29%; float:right;">
                      <h4 ><a>Pain tunduraPain tunduraPain tunduraPain tunduraPain tundura</a> </h4>
                    </div>
                    <div style="width:100%; float:left;">
                      <h3 >Regular Prize : $50<br />
                        Special Prize : $40(10am-5pm)<br />
                        <p style="text-align:right; margin-right:25px;"><a class="more-link" onclick="add_to_total('50')"><i>Add To Cart<span>&nbsp;</span></i><span>&nbsp;</span></a></p>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- END .menu-card-left --> 
            
            <!-- BEGIN .menu-card-right -->
            <div class="menu-card-right">
              <div class="menu-card-block">
                <div class="menu-card-item">
                  <div style="width:100%; height:300px;border: 1px solid burlywood; padding-left: 7px; padding-top:7px; border-radius: 5px; background:papayawhip;">
                    <h2 class="title-red">Poissons et pommes de terre sautées</h2>
                    <div style="width:70%; float:left;"> <img  src="images/home-img/0383a3_98ac7272c3b14499b3fc5b49f3f945df.jpg_srz_p_270_244_75_22_0.50_1.20_0.00_jpg_srz.jpg" width="100%" height="178" style="border-radius:5px;" > </div>
                    <div style="width:29%; float:right;">
                      <h4 ><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a> </h4>
                    </div>
                    <div style="width:100%; float:left;">
                      <h3 >Regular Prize : $50<br />
                        Special Prize : $40(10am-5pm)<br />
                        <p style="text-align:right; margin-right:25px;"><a class="more-link" onclick="add_to_total('50')"><i>Add To Cart<span>&nbsp;</span></i><span>&nbsp;</span></a></p>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="menu-card-item">
                  <div style="width:100%; height:300px;border: 1px solid burlywood; padding-left: 7px; padding-top:7px; border-radius: 5px;">
                    <h2 class="title-red">Tehari</h2>
                    <div style="width:70%; float:left;"> <img src="images/home-img/0383a3_38b14db9cccf4b0cae42dcc2bfaf9ca9.jpg_srz_p_282_179_75_22_0.50_1.20_0.00_jpg_srz.jpg" width="100%" height="178" style="border-radius:5px;" > </div>
                    <div style="width:29%; float:right;">
                      <h4 ><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> </h4>
                    </div>
                    <div style="width:100%; float:left;">
                      <h3 >Regular Prize : $50<br />
                        Special Prize : $40(10am-5pm)<br />
                        <p style="text-align:right; margin-right:25px;"><a class="more-link" onclick="add_to_total('50')"><i>Add To Cart<span>&nbsp;</span></i><span>&nbsp;</span></a></p>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- END .menu-card-right --> 
          </div>
          <div class="clear-float"> </div>
           <p class="back-top"><a href="#top"><span>go back to the top</span></a></p>
          <!-- END .menu-card-count --> 
        </div>
      </div>
    </div>
   
    
    <!-- END .main-content --> 
  </div>
  <div class="clear-float"></div>
</div>

<!-- END .wrapper -->
</div>

<!-- END .content -->
</div>

<!-- BEGIN .footer -->
<div class="footer"> 
  
  <!-- BEGIN .wrapper -->
  <div class="wrapper">
    <div class="group">
      <div class="col span_1_of_3 widget">
        <div class="title">
          <h3>Contact Information</h3>
        </div>
        <div class="contact-info">
          <div class="address">
            <p><b>"Le Gandhi"</b></p>
            <p>Avenue de Lonay 13,
              1110 Morges,
              Switzerland (Restauraunt 'Le Gandhi' Café-Bar)
              Rèservations conseillèes </p>
          </div>
          <div class="phone">
            <p>021/8036775 </p>
          </div>
          <div class="email">
            <p><a href="#mailto: azahar@windowslive.com"> azahar@windowslive.com</a></p>
          </div>
        </div>
      </div>
      <div class="col span_1_of_3 widget">
        <div class="title">
          <h3>Social Networks</h3>
        </div>
        <div class="widget-soc">
          <ul>
            <li class="twitter"><a href="##" tareget="_blank">Follow us on <b>Twitter</b></a></li>
            <li class="facebook"><a href="https://www.facebook.com/royaltechnologybd" tareget="_blank">Find us on <b>Facebook</b></a></li>
            <li class="linkedin"><a href="##" tareget="_blank">Check us out on <b>Linked In</b></a></li>
            <li class="rss"><a href="##" tareget="_blank">Check out our <b>RSS feeds</b></a></li>
          </ul>
        </div>
      </div>
      <div class="col span_1_of_3 widget">
        <div class="title">
          <h3>About Us</h3>
        </div>
        <div class="contact-map"> Loren Isrun </div>
      </div>
    </div>
    
    <!-- END .wrapper --> 
  </div>
  
  <!-- END .footer --> 
</div>

<!-- BEGIN .footer-desc -->
<div class="footer-desc"> 
  
  <!-- BEGIN .wrapper -->
  <div class="wrapper">
    <p class="right">Designed by <a href="http://royalbd.net" target="_blank">Royal Technology BD</a></p>
    <p>Copyright &copy; 2012-14 <strong>http://royalbd.net</strong></p>
    
    <!-- END .wrapper --> 
  </div>
  
  <!-- END .footer-desc --> 
</div>

<!-- END .boxed -->
</div>

<!-- Scripts --> 
<script type="text/javascript" src="jscript/jquery-latest.min.js" tppabs="Royal Technology/jscript/jquery-latest.min.js"></script> 
<script type="text/javascript" src="jscript/theme-scripts.js" tppabs="Royal Technology/jscript/theme-scripts.js"></script> 
<script type="text/javascript" src="jscript/lightbox.js" tppabs="Royal Technology/jscript/lightbox.js"></script> 
<script src="jscript/jquery-transit-modified.js" tppabs="Royal Technology/jscript/jquery-transit-modified.js" type="text/javascript"></script> 
<script src="jscript/jquery-easing-1.3.js" tppabs="Royal Technology/jscript/jquery-easing-1.3.js" type="text/javascript"></script> 
<script src="jscript/layerslider.kreaturamedia.jquery.js" tppabs="Royal Technology/jscript/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script> 
<script src="jscript/layerslider.transitions.js" tppabs="Royal Technology/jscript/layerslider.transitions.js" type="text/javascript"></script> 
<script type="text/javascript">

function add_to_total(item_val)
{
	var cart_total =  + $('#cart_tot').val();
	
	var tot = + parseFloat(cart_total+ (+item_val));
		
	$("#cart_tot").val(tot.toFixed(2));
	
	$("#cart_total").html(tot.toFixed(2));
	
}



			jQuery(document).ready(function(){
				jQuery('#layerslider').layerSlider({
					skinsPath : 'css/parallax-slider/skins/',
					skin : 'lightskin',
					showCircleTimer : false,
					responsive : false,
					responsiveUnder : 950,
					sublayerContainer : 950,
					hoverBottomNav : true,
					animateFirstLayer : false,
					thumbnailNavigation : false,
					height : 350
				});
			});
		</script> 

<!-- END body -->
</body>
<!-- END html -->
</html>