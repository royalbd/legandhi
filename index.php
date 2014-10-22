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
            <p style=" color:midnightblue;  padding:15px; font-size:16px;"> <span>Cart Total: $<strong><span id="cart_total" style="color:purple;">0.00 </span> <input id="cart_tot" type="hidden" value="0"></strong></span> <a href="" style="text-decoration:underline; font-weight:bold; color:red; border-radius:12px; background-color:transparent; padding:5px; font-size:16px;" > Place Order </a> </p>
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
        <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/slide-1-bg.jpg" alt="layer"> <img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> </div>
       <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/slide-1-bg.jpg" alt="layer"> <img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> </div>
       <div class="ls-layer" rel="slidedelay: 3000;"> <img class="ls-bg" src="images/parallax-slider/slide-1-bg.jpg" alt="layer"> <img id="table1" style="left: 0; top: 0;" class="ls-s2" src="images/parallax-slider/slide-1-table.png" alt="sublayer" rel="slidedirection: left"> <img id="plate2" style="left: 610px; top: 60px;" class="ls-s3" src="images/parallax-slider/slide-1-plate-2.png" alt="sublayer" rel="slidedirection: left"> <img id="plate1" style="left: 40px; top: 55px;" class="ls-s4" src="images/parallax-slider/slide-1-plate-1.png" alt="sublayer" rel="slidedirection: right"> <img id="tomato1" style="left: 656px; top: 175px;" class="ls-s5" src="images/parallax-slider/slide-1-tomato-1.png" alt="sublayer" rel="slidedirection: bottom"> <img id="leaf1" style="left: 95px; top: 160px;" class="ls-s6" src="images/parallax-slider/slide-1-leaf-1.png" alt="sublayer" rel="slidedirection: top"> <img id="title1" style="left: 40px; top: 180px;" class="ls-s7" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 500; easingin: easeOutBack"> <img id="title2" style="left: 40px; top: 237px;" class="ls-s8" src="images/parallax-slider/title-1.png" alt="sublayer" rel="delayin: 700; easingin: easeOutBack"> </div>
       
      </div>
      
      <!-- END .wrapper --> 
    </div>
    
    <!-- END .slider-content --> 
  </div>
  
  <!-- BEGIN .content -->
  <div class="content"> 
    
    <!-- BEGIN .wrapper -->
    <div class="wrapper">
      <div class="group tripple-icons">
        <div class="col span_1_of_3">
          <div class="triple-text" style="background-image: url(images/ico-pizza-1.png)/*tpa=Royal Technology/images/ico-pizza-1.png*/;">
            <h3>Fantastic Pizzas</h3>
          </div>
          <p>Quisque eleifend mi at nisl pretium non dignissim felis euismod. Nullam sagittis In teger tortor et eiaculis dapibus amet dignissim.</p>
          <a href="##" class="more-link"><i>Read more</i></a> </div>
        <div class="col span_1_of_3">
          <div class="triple-text" style="background-image: url(images/ico-coffee-1.png)/*tpa=Royal Technology/images/ico-coffee-1.png*/;">
            <h3>Amazing Coffee</h3>
          </div>
          <p>Integer ac dapibus amet velit. Suspendisse sit amet orci augue, imperdiet amet blandit enim. Duis nec mi sapien. Quisque ante sque.</p>
          <a href="##" class="more-link"><i>Read more</i></a> </div>
        <div class="col span_1_of_3">
          <div class="triple-text" style="background-image: url(images/ico-salads-1.png)/*tpa=Royal Technology/images/ico-salads-1.png*/;">
            <h3>Great Salads</h3>
          </div>
          <p>Nullam diam nisl, condi in eleifend sit amet, interdum vel quam. Curabitur laoreet viverra eleifend. Vivamus viverra justo eu neque.</p>
          <a href="##" class="more-link"><i>Read more</i></a> </div>
      </div>
      <div class="split-content">
        <div class="content-white left">
          <div class="main-content">
            <div class="main-head"> <a href="#menu-card.html" tppabs="Royal Technology/menu-card.html" class="right">show menu card</a>
              <div class="main-title">
                <h1>Most popular menu offerings</h1>
                <div class="ribbon">
                  <div class="inner"></div>
                </div>
                <div class="ribbon-tail">
                  <div class="inner-top"></div>
                  <div class="inner-bottom"></div>
                </div>
              </div>
            </div>
            <p class="caps">Sllam sagittis tortor et enim egestas iaculis. Duis tincidunt dolor et risus accumsan nec sagittis nunc con sequat. Integer erat sem, euismod eget elementum eu, faucibus at felis. Donec a turpis velit. Ut a elementum lorem. Curabitur id tortor nunc. Vestibulum eu massa risus. Nulla facilisi. Integer gravida ultricies iaculis. Integer dictum facilisis rutrum. Phasellus luctus congue neque, sed convallis mi bibendum.</p>
            <div class="main-spacer"></div>
            <div class="menu-display-1-wrapper">
              <div class="menu-display-1">
                <div class="item">
                  <h5>Italian pasta Italian pasta</h5>
                  <a href="#javascript:if(confirm(%27Royal Technology/menu-card-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27Royal Technology/menu-card-single.html%27" tppabs="Royal Technology/menu-card-single.html" class="image"> <span class="price">$4,99<span>&nbsp;</span></span> <img src="images/photos/image-6.jpg" tppabs="Royal Technology/images/photos/image-6.jpg" alt="" /> </a>
                  <p>Duis tincidunt dolor et risus accumsan nec sagittquat. Integer erat sem, euismod eget.</p>
                  <p><a href="###" onClick="add_to_total('4.99')" class="more-link"><i>Add To Cart</i></a></p>
                </div>
                <div class="item">
                  <h5>Baked meat</h5>
                  <a class="image"> <span class="price">$8,99<span>&nbsp;</span></span> <img src="images/photos/image-7.jpg" tppabs="Royal Technology/images/photos/image-7.jpg" alt="" /> </a>
                  <p>Duis tincidunt dolor et risus accumsan nec sagittquat. Integer erat sem, euismod eget.</p>
                  <p><a href="###" onClick="add_to_total('8.99')" class="more-link"><i>Add To Cart</i></a></p>
                </div>
                <div class="item">
                  <h5>Split pea soup</h5>
                  <a  class="image"> <span class="price">$2,99<span>&nbsp;</span></span> <img src="images/photos/image-8.jpg" tppabs="Royal Technology/images/photos/image-8.jpg" alt="" /> </a>
                  <p>Duis tincidunt dolor et risus accumsan nec sagittquat. Integer erat sem, euismod eget.</p>
                  <p><a href="###" onClick="add_to_total('2.99')" class="more-link"><i>Add To Cart</i></a></p>
                </div>
                <div class="item">
                  <h5>Caesar salad</h5>
                  <a class="image"> <span class="price">$4,99<span>&nbsp;</span></span> <img src="images/photos/image-9.jpg" tppabs="Royal Technology/images/photos/image-9.jpg" alt="" /> </a>
                  <p>Duis tincidunt dolor et risus accumsan nec sagittquat. Integer erat sem, euismod eget.</p>
                  <p><a href="###" onClick="add_to_total('4.99')" class="more-link"><i>Add To Cart</i></a></p>
                </div>
                <div class="item">
                  <h5>Chinese chicken</h5>
                  <a class="image"> <span class="price">$15,50<span>&nbsp;</span></span> <img src="images/photos/image-10.jpg" tppabs="Royal Technology/images/photos/image-10.jpg" alt="" /> </a>
                  <p>Duis tincidunt dolor et risus accumsan nec sagittquat. Integer erat sem, euismod eget.</p>
                  <p><a href="###" onClick="add_to_total('15.50')" class="more-link"><i>Add To Cart</i></a></p>
                </div>
                <div class="item">
                  <h5>American apple pie</h5>
                  <a href="#" class="image"> <span class="price">$2,99<span>&nbsp;</span></span> <img src="images/photos/image-11.jpg" tppabs="Royal Technology/images/photos/image-11.jpg" alt="" /> </a>
                  <p>Duis tincidunt dolor et risus accumsan nec sagittquat. Integer erat sem, euismod eget.</p>
                  <p><a href="###" onClick="add_to_total('2.99')" class="more-link"><i>Add To Cart</i></a></p>
                </div>
                <div class="clear-float"></div>
              </div>
            </div>
            <div class="main-spacer"></div>
            <p class="show-all"><a href="#menu-card.html" tppabs="Royal Technology/menu-card.html"><span>Show entire menu card</span></a></p>
            <p class="back-top"><a href="##top"><span>go back to the top</span></a></p>
          </div>
        </div>
        <div class="content-white small right">
          <div class="main-content">
            <div class="main-head"> <a href="#blog.html" tppabs="Royal Technology/blog.html" class="right">show all</a>
              <div class="main-title">
                <h1>Events</h1>
                <div class="ribbon">
                  <div class="inner"></div>
                </div>
                <div class="ribbon-tail">
                  <div class="inner-top"></div>
                  <div class="inner-bottom"></div>
                </div>
              </div>
            </div>
            <div class="events">
              <div class="item">
                <h6>6 / 27 / 2011 &bull; 12:22 PM</h6>
                <h5><a href="#post.html" tppabs="Royal Technology/post.html">Proin scelerisque porta ante</a></h5>
                <p>Mauris donec rutrum justo nec nisl aliquam vestibulum. Fusce at leo</p>
                <a href="#post.html" tppabs="Royal Technology/post.html" class="more-link"><i>Read more</i></a> </div>
              <div class="item">
                <h6>6 / 27 / 2011 &bull; 12:22 PM</h6>
                <h5><a href="#post.html" tppabs="Royal Technology/post.html">Fusce at leo vitae massa volutpat pulvinar</a></h5>
                <p>Mauris donec rutrum justo nec nisl aliquam vestibulum. Fusce at leo</p>
                <a href="#post.html" tppabs="Royal Technology/post.html" class="more-link"><i>Read more</i></a> </div>
              <div class="item">
                <h6>6 / 27 / 2011 &bull; 12:22 PM</h6>
                <h5><a href="#post.html" tppabs="Royal Technology/post.html">Ut leo mauris, viverra et viverra eget, rhoncus id nibh.</a></h5>
                <p>Mauris donec rutrum justo nec nisl aliquam vestibulum. Fusce at leo</p>
                <a href="#post.html" tppabs="Royal Technology/post.html" class="more-link"><i>Read more</i></a> </div>
            </div>
            <p class="show-all"><a href="#blog.html" tppabs="Royal Technology/blog.html"><span>Show all events</span></a></p>
            <p class="back-top"><a href="##top"><span>go back to the top</span></a></p>
          </div>
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