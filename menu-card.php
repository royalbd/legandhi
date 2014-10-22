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
        <!-- <h1><a href="index.html">Le-Gandhi</a></h1> --> 
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
        <li><a href="menu-card.php" tppabs="Royal Technology/menu-card.php"><span>Menu</span></a>
          <ul>
            <li><a href="#blog.html" tppabs="Royal Technology/blog.html">Sub Menu</a></li>
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
  


  
  <!-- BEGIN .content -->
  <div class="content"> 
    
    <!-- BEGIN .wrapper -->
    <div class="wrapper">
      <div class="content-white"> 
        
        <!-- BEGIN .main-content -->
        <div class="main-content">
          <div class="main-head menu-card-title"> <a href="reservations.html" tppabs="royalbd.net/html/reservations.html" class="right">check &amp; order your Reservation</a>
            <div class="main-title">
              <h1>Menu Card</h1>
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
          <a href="###" class="menu-card-previous">&nbsp;</a> <a href="###" class="menu-card-next">&nbsp;</a> 
          
          <!-- BEGIN .menu-card-count -->
          <div class="menu-card-count"> 
            
            <!-- BEGIN .menu-card-left -->
            <div class="menu-card-left">
              <div class="menu-card-block">
                <h2 class="title-red">Drinks &amp; Beverages</h2>
                <h4>Coctails</h4>
                <div class="menu-card-item"> <a  class="image tooltip" title="images/photos/image-64.jpg"><img src="images/photos/image-54.jpg" tppabs="royalbd.net/html/images/photos/image-54.jpg" alt="" /></a> <span class="price right">$1,99</span> <span class="menu-text">
                  <p class="title"><a >Orange Drop Martini</a></p>
                  <p>Orange flavored rum, cointreau, lemon juice, simple syrup, orange flower water</p>
                  <p><a href="###" href="###" onClick="add_to_total('1.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-65.jpg"><img src="images/photos/image-55.jpg" tppabs="royalbd.net/html/images/photos/image-55.jpg" alt="" /></a> <span class="price right">$2,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Margarita</a></p>
                  <p>Tequila, lime, orange curacao, salt</p>
                  <p><a href="###" onClick="add_to_total('2.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$3,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Fancy Brandy</a></p>
                  <p>Brandy, superfine sugar, lemon twist, bitters</p>
                  <p><a href="###" onClick="add_to_total('3.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-67.jpg"><img src="images/photos/image-57.jpg" tppabs="royalbd.net/html/images/photos/image-57.jpg" alt="" /></a> <span class="price right">$4,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Cuban Breeze</a></p>
                  <p>Light rum, grapefruit juice, cranberry juice, mint leaves</p>
                  <p><a href="###" onClick="add_to_total('4.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <h4>Sodas</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$1,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Sprite</a></p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-68.jpg"><img src="images/photos/image-58.jpg" tppabs="royalbd.net/html/images/photos/image-58.jpg" alt="" /></a> <span class="price right">$1,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Fanta</a></p>
                  <p><a href="###" onClick="add_to_total('1')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-69.jpg"><img src="images/photos/image-59.jpg" tppabs="royalbd.net/html/images/photos/image-59.jpg" alt="" /></a> <span class="price right">$1,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Coca Cola</a></p>
                  <p><a href="###" onClick="add_to_total('1.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
              </div>
              
              <!-- END .menu-card-left --> 
            </div>
            
            <!-- BEGIN .menu-card-right -->
            <div class="menu-card-right">
              <div class="menu-card-block">
                <h2 class="title-red">Main courses</h2>
                <h4>Pasta</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-65.jpg"><img src="images/photos/image-55.jpg" tppabs="royalbd.net/html/images/photos/image-55.jpg" alt="" /></a> <span class="price right">$6,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Farfalle With Salmon</a></p>
                  <p>Galbani mascarpone, salmon, pasta (farfalle), mange-tout beans</p>
                  <p><a href="###" onClick="add_to_total('6.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$4,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Winter Pasta</a></p>
                  <p>Dried penne pasta, goat cheese, garlic, shallots, freshly ground black pepper</p>
                  <p><a href="###" onClick="add_to_total('4.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-67.jpg"><img src="images/photos/image-57.jpg" tppabs="royalbd.net/html/images/photos/image-57.jpg" alt="" /></a> <span class="price right">$5,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Black Sesame Otsu</a></p>
                  <p>Pine nuts, sunflower seeds, soba noodles, extra-firm tofu, toasted sesame oil</p>
                  <p><a href="###" onClick="add_to_total('5.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <h4>Soups</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$3,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Farfalle With Salmon</a></p>
                  <p>Section of pumpkin, Creme Fraîche, president butter with salt, Fourme d'Ambert</p>
                  <p><a href="###" onClick="add_to_total('3.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-71.jpg"><img src="images/photos/image-61.jpg" tppabs="royalbd.net/html/images/photos/image-61.jpg" alt="" /></a> <span class="price right">$3,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Pumpkin Soup With</a></p>
                  <p>Section of pumpkin, Creme Fraîche, president butter with salt, Fourme d'Ambert</p>
                  <p><a href="###" onClick="add_to_total('3.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <h4>Tender meat</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-72.jpg"><img src="images/photos/image-62.jpg" tppabs="royalbd.net/html/images/photos/image-62.jpg" alt="" /></a> <span class="price right">$8,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Veal Chops And Apple In Vermouth</a></p>
                  <p>Large veal chops, garlic cloves, crushed, dessert apples, cored and cut</p>
                  <p><a href="###" onClick="add_to_total('8.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-73.jpg"><img src="images/photos/image-63.jpg" tppabs="royalbd.net/html/images/photos/image-63.jpg" alt="" /></a> <span class="price right">$7,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Duck In Asian Spices</a></p>
                  <p>Duck breasts, star anise, fresh orange juice, fresh thyme, honey, salt</p>
                  <p><a href="###" onClick="add_to_total('7.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$5,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Marinated Sea Bass</a></p>
                  <p>Small bass, scaled and gutted, cherry tomatoes, rocket leaves, pine nuts</p>
                  <p><a href="###" onClick="add_to_total('5.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
              </div>
              
              <!-- END .menu-card-right --> 
            </div>
            <div class="clear-float"></div>
            
            <!-- END .menu-card-count --> 
          </div>
          
          <!-- BEGIN .menu-card-count -->
          <div class="menu-card-count"> 
            
            <!-- BEGIN .menu-card-left -->
            <div class="menu-card-left">
              <div class="menu-card-block">
                <h2 class="title-red">Liquor</h2>
                <h4>Wines</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-64.jpg"><img src="images/photos/image-54.jpg" tppabs="royalbd.net/html/images/photos/image-54.jpg" alt="" /></a> <span class="price right">$29,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Kenwood Yulupa Sparkling</a></p>
                  <p>A light refreshing balanced sparkling wine with fruit flavors and aromas</p>
                  <p><a href="###" onClick="add_to_total('29.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-65.jpg"><img src="images/photos/image-55.jpg" tppabs="royalbd.net/html/images/photos/image-55.jpg" alt="" /></a> <span class="price right">$60,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Zinfandelic Groovy</a></p>
                  <p>Section of pumpkin, Creme Fraîche, president butter with salt, Fourme d'Ambert</p>
                  <p><a href="###" onClick="add_to_total('60.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$33,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Aussie Walkabout</a></p>
                  <p>Textured and generous, the palate follows suit with fresh plums and</p>
                  <p><a href="###" onClick="add_to_total('33.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-67.jpg"><img src="images/photos/image-57.jpg" tppabs="royalbd.net/html/images/photos/image-57.jpg" alt="" /></a> <span class="price right">$45,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Rosa Regale Sparkler</a></p>
                  <p>This vivacious, festive, slightly sweet red sparkler explodes with flavors of</p>
                  <p><a href="###" onClick="add_to_total('45.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$15,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Tour de France</a></p>
                  <p>Medium-bodied with dark berry flavors, well-balanced tannins and a long, smooth</p>
                  <p><a href="###" onClick="add_to_total('15.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-68.jpg"><img src="images/photos/image-58.jpg" tppabs="royalbd.net/html/images/photos/image-58.jpg" alt="" /></a> <span class="price right">$29,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Silver Oak Trophy Red</a></p>
                  <p>Luxurious, well-rounded flavors that define Silver Oak Cabernet Sauvignon</p>
                  <p><a href="###" onClick="add_to_total('29.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
              </div>
              
              <!-- END .menu-card-left --> 
            </div>
            
            <!-- BEGIN .menu-card-right -->
            <div class="menu-card-right">
              <div class="menu-card-block">
                <h2 class="title-red">Deserts</h2>
                <h4>Cakes &amp; Bakery</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-65.jpg"><img src="images/photos/image-55.jpg" tppabs="royalbd.net/html/images/photos/image-55.jpg" alt="" /></a> <span class="price right">$1,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Blueberry Bran Muffin</a></p>
                  <p>1/2 cup oat bran; 1 cup wheat bran; 1/2 cup sour cream; 1/2 cup milk; 1 cup all-purpose flour; 1 ...</p>
                  <p><a href="###" onClick="add_to_total('1.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$6,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Cheesecake</a></p>
                  <p>Graham cracker crumbs, cream cheese, granulated white sugar, eggs, whipping cream</p>
                  <p><a href="###" onClick="add_to_total('6.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-67.jpg"><img src="images/photos/image-57.jpg" tppabs="royalbd.net/html/images/photos/image-57.jpg" alt="" /></a> <span class="price right">$5,50</span> <span class="menu-text">
                  <p class="title"><a href="###">Chocolate Cake</a></p>
                  <p>Egg whites, sugar, hazelnuts, tablespoons unsweetened cocoa powder</p>
                  <p><a href="###" onClick="add_to_total('5.50')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$3,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Apple Pie Slice</a></p>
                  <p>All-purpose flour, egg yolks, white sugar, teaspoon ground cinnamon</p>
                  <p><a href="###" onClick="add_to_total('3.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <h4>Ice Cream</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-71.jpg"><img src="images/photos/image-61.jpg" tppabs="royalbd.net/html/images/photos/image-61.jpg" alt="" /></a> <span class="price right">$3,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Chocolate Velvet Ice Cream</a></p>
                  <p>Unsweetened cocoa powder, yolks, beaten, semisweet chocolate chips</p>
                  <p><a href="###" onClick="add_to_total('3.99')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-72.jpg"><img src="images/photos/image-62.jpg" tppabs="royalbd.net/html/images/photos/image-62.jpg" alt="" /></a> <span class="price right">$2,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Espresso Ice Cream</a></p>
                  <p>Pinch of cream of tartar, freshly brewed, strong espresso, instant espresso</p>
                  <p><a href="###" onClick="add_to_total('2.00')" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-73.jpg"><img src="images/photos/image-63.jpg" tppabs="royalbd.net/html/images/photos/image-63.jpg" alt="" /></a> <span class="price right">$2,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Ice Cream Sandwiches</a></p>
                  <p>Cocoa powder, large eggs, milk, strawberry ice cream, slightly softened</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$1,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Strawberry Ice Cream</a></p>
                  <p>Slightly softened strawberry ice cream, fresh strawberries, ice cream, fresh strawberries</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$3,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Mint Chocolate Chip Ice Cream</a></p>
                  <p>Vanilla extract, peppermint extract, miniature semisweet chocolate chips</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
              </div>
              
              <!-- END .menu-card-right --> 
            </div>
            <div class="clear-float"></div>
            
            <!-- END .menu-card-count --> 
          </div>
          
          <!-- BEGIN .menu-card-count -->
          <div class="menu-card-count"> 
            
            <!-- BEGIN .menu-card-left -->
            <div class="menu-card-left">
              <div class="menu-card-block">
                <h2 class="title-red">Liquor</h2>
                <h4>Wines</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-64.jpg"><img src="images/photos/image-54.jpg" tppabs="royalbd.net/html/images/photos/image-54.jpg" alt="" /></a> <span class="price right">$29,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Kenwood Yulupa Sparkling</a></p>
                  <p>A light refreshing balanced sparkling wine with fruit flavors and aromas</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-65.jpg"><img src="images/photos/image-55.jpg" tppabs="royalbd.net/html/images/photos/image-55.jpg" alt="" /></a> <span class="price right">$60,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Zinfandelic Groovy</a></p>
                  <p>Section of pumpkin, Creme Fraîche, president butter with salt, Fourme d'Ambert</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$33,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Aussie Walkabout</a></p>
                  <p>Textured and generous, the palate follows suit with fresh plums and</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-67.jpg"><img src="images/photos/image-57.jpg" tppabs="royalbd.net/html/images/photos/image-57.jpg" alt="" /></a> <span class="price right">$45,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Rosa Regale Sparkler</a></p>
                  <p>This vivacious, festive, slightly sweet red sparkler explodes with flavors of</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$15,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Tour de France</a></p>
                  <p>Medium-bodied with dark berry flavors, well-balanced tannins and a long, smooth</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-68.jpg"><img src="images/photos/image-58.jpg" tppabs="royalbd.net/html/images/photos/image-58.jpg" alt="" /></a> <span class="price right">$29,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Silver Oak Trophy Red</a></p>
                  <p>Luxurious, well-rounded flavors that define Silver Oak Cabernet Sauvignon</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
              </div>
              
              <!-- END .menu-card-left --> 
            </div>
            
            <!-- BEGIN .menu-card-right -->
            <div class="menu-card-right">
              <div class="menu-card-block">
                <h2 class="title-red">Deserts</h2>
                <h4>Cakes &amp; Bakery</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-65.jpg"><img src="images/photos/image-55.jpg" tppabs="royalbd.net/html/images/photos/image-55.jpg" alt="" /></a> <span class="price right">$1,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Blueberry Bran Muffin</a></p>
                  <p>1/2 cup oat bran; 1 cup wheat bran; 1/2 cup sour cream; 1/2 cup milk; 1 cup all-purpose flour; 1 ...</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$6,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Cheesecake</a></p>
                  <p>Graham cracker crumbs, cream cheese, granulated white sugar, eggs, whipping cream</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-67.jpg"><img src="images/photos/image-57.jpg" tppabs="royalbd.net/html/images/photos/image-57.jpg" alt="" /></a> <span class="price right">$5,50</span> <span class="menu-text">
                  <p class="title"><a href="###">Chocolate Cake</a></p>
                  <p>Egg whites, sugar, hazelnuts, tablespoons unsweetened cocoa powder</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$3,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Apple Pie Slice</a></p>
                  <p>All-purpose flour, egg yolks, white sugar, teaspoon ground cinnamon</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <h4>Ice Cream</h4>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-71.jpg"><img src="images/photos/image-61.jpg" tppabs="royalbd.net/html/images/photos/image-61.jpg" alt="" /></a> <span class="price right">$3,99</span> <span class="menu-text">
                  <p class="title"><a href="###">Chocolate Velvet Ice Cream</a></p>
                  <p>Unsweetened cocoa powder, yolks, beaten, semisweet chocolate chips</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-72.jpg"><img src="images/photos/image-62.jpg" tppabs="royalbd.net/html/images/photos/image-62.jpg" alt="" /></a> <span class="price right">$2,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Espresso Ice Cream</a></p>
                  <p>Pinch of cream of tartar, freshly brewed, strong espresso, instant espresso</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-73.jpg"><img src="images/photos/image-63.jpg" tppabs="royalbd.net/html/images/photos/image-63.jpg" alt="" /></a> <span class="price right">$2,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Ice Cream Sandwiches</a></p>
                  <p>Cocoa powder, large eggs, milk, strawberry ice cream, slightly softened</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-66.jpg"><img src="images/photos/image-56.jpg" tppabs="royalbd.net/html/images/photos/image-56.jpg" alt="" /></a> <span class="price right">$1,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Strawberry Ice Cream</a></p>
                  <p>Slightly softened strawberry ice cream, fresh strawberries, ice cream, fresh strawberries</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
                <div class="menu-card-item"> <a href="###"class="image tooltip" title="images/photos/image-70.jpg"><img src="images/photos/image-60.jpg" tppabs="royalbd.net/html/images/photos/image-60.jpg" alt="" /></a> <span class="price right">$3,00</span> <span class="menu-text">
                  <p class="title"><a href="###">Mint Chocolate Chip Ice Cream</a></p>
                  <p>Vanilla extract, peppermint extract, miniature semisweet chocolate chips</p>
                  <p><a href="###" class="more-link"><i>Add To Cart</i></a></p>
                  </span>
                  <div class="clear-float"></div>
                </div>
              </div>
              
              <!-- END .menu-card-right --> 
            </div>
            <div class="clear-float"></div>
            
            <!-- END .menu-card-count --> 
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
      <p>Copyright &copy; 2013 <strong>http://royalbd.net</strong></p>
      
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
					hoverBottomNav : true,
					animateFirstLayer : false,
					thumbnailNavigation : false
				});
			});
		</script>

<!-- END body -->
</body>
<!-- END html -->
</html>
