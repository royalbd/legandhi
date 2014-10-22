

jQuery(document).ready(function() {
	jQuery("body").append("<div class='demo-settings'></div>");
	jQuery(".demo-settings").append("<a href='#show-settings' class='demo-button'><i class='fa fa-gear'></i>Settings</a>");
	jQuery(".demo-settings").append("<div class='demo-options'>"+
										"<div class='title'>Demo Settings</div>"+
										"<a href='#demo' rel='font-options' class='option'><img src='images/demo/image-1.png'/*tpa=http://bordeaux.orange-themes.com/html/jscript/images/demo/image-1.png*/ class='demo-icon' alt='' /><span>Font Settings</span><font>Change Fonts</font></a>"+
										"<div class='option-box' rel='font-options'>"+
											"<div alt='font-options'>"+
												"<b class='sub-title'>Titles & Menu Font</b>"+
												"<a href='#' class='font-bulb active' style='font-family:\"Capriola\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Wellfleet\", cursive;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Cantora One\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Belgrano\", serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Kaushan Script\", cursive;'>Aa</a>"+
											"</div>"+
										"</div>"+
										"<a href='#demo' rel='color-options' class='option'><img src='images/demo/image-2.png'/*tpa=http://bordeaux.orange-themes.com/html/jscript/images/demo/image-2.png*/ class='demo-icon' alt='' /><span>Color Options</span><font>Color schemes</font></a>"+
										"<div class='option-box' rel='color-options'>"+
											"<div alt='color-options'>"+
												"<b class='sub-title'>Main Color Scheme</b>"+
												"<a href='#' class='color-bulb active' style='background: #b10700;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #67971F;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #0B6AA0;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #7510B8;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #1A928D;'>&nbsp;</a>"+
											"</div>"+
										"</div>"+
										"<div class='option-box sequal' rel='color-options'>"+
											"<div alt='link-colors'>"+
												"<b class='sub-title'>Link Colors</b>"+
												"<a href='#' class='color-bulb active' style='background: #76452f;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #67971F;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #0B6AA0;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #7510B8;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #1A928D;'>&nbsp;</a>"+
											"</div>"+
										"</div>"+
										"<a href='#demo' rel='background' class='option'><img src='images/demo/image-3.png'/*tpa=http://bordeaux.orange-themes.com/html/jscript/images/demo/image-3.png*/ class='demo-icon' alt='' /><span>Background</span><font>Backgorund textures</font></a>"+
										"<div class='option-box' rel='background'>"+
											"<div alt='header'>"+
												"<b class='sub-title'>Header Texture</b>"+
												"<a href='#' class='color-bulb active' style='background: url(images/main-header-wrapper-bg.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-1.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/footer-background.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-3.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-6.png);'>&nbsp;</a>"+
											"</div>"+
										"</div>"+
										"<div class='option-box sequal' rel='background'>"+
											"<div alt='footerslider'>"+
												"<b class='sub-title'>Footer &amp; Slider Texture</b>"+
												"<a href='#' class='color-bulb active' style='background: url(images/footer-background.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-4.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-3.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-1.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-5.png);'>&nbsp;</a>"+
											"</div>"+
										"</div>"+
										"<div class='option-box sequal' rel='background'>"+
											"<div alt='background'>"+
												"<b class='sub-title'>Background Texture</b>"+
												"<a href='#' class='color-bulb active' style='background: url(images/main-body-bg.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-2.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-4.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/footer-background.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/texture-3.png);'>&nbsp;</a>"+
											"</div>"+
										"</div>"+
										// "<a href='#demo' rel='page-width' class='option'><img src='images/demo/image-4.png'/*tpa=http://bordeaux.orange-themes.com/html/jscript/images/demo/image-4.png*/ class='demo-icon' alt='' /><span>Change Width</span><font>Boxed or Full-Width</font></a>"+
										// "<div class='option-box' rel='page-width'>"+
										// 	"<div alt='option-box'>"+
										// 		"<b class='sub-title'>Switch Page Width</b>"+
										// 		"<a href='#' class='option-bulb active' rel='full'>Full-Width</a>"+
										// 		"<a href='#' class='option-bulb' rel='boxed'>Boxed-Width</a>"+
										// 	"</div>"+
										// "</div>"+
									"</div>");
	
	jQuery(".demo-settings a[href=#demo]").click(function(){
		var thiselem = jQuery(this);
		thiselem.parent().find("div[rel="+thiselem.attr("rel")+"]").toggle();
		return false;
	});
	
	jQuery(".option-box div .color-bulb").click(function(){
		var thiselem = jQuery(this);
		var newcolor = thiselem.css("background-color");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "color-options"){
			jQuery(".main-menu-custom .wrapper, .main-spacer.ribbon, .more-link, .main-title, .main-title .ribbon .inner, .tabs .tab-navi li.active a, .main-title .ribbon-tail .inner-top, .main-title .ribbon-tail .inner-bottom, .pagination .page-numbers.current").css("background-color", newcolor);
			jQuery(".main-menu-custom .wrapper, .split-content .content-white.small .widget .title h3, .reservation-navi h4, .photo-gallery-block .page-numbers span, blockquote, .title-red, .events .item h6, .sidebar-content .widget > .title h3, .blog-list-1 .item .comments a, .blog-list-1 .item .section a, .blog-list-1 .item .author a").css("color", newcolor);
			jQuery(".tabs .tab-navi").css("border-bottom", "3px solid "+newcolor);
			jQuery("blockquote.style-3").css("border", "1px dashed "+newcolor);
		}else
		if(thiselem.parent().attr("alt") == "link-colors"){
			jQuery(".content a").css("color", newcolor);
		}

		return false;
	});
	
	jQuery(".option-box div .color-bulb").click(function(){
		var thiselem = jQuery(this);
		var newcolor = thiselem.css("background");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "background"){
			jQuery("body").css("background", newcolor);
		}else
		if(thiselem.parent().attr("alt") == "footerslider"){
			jQuery(".slider-content, .footer, .active.boxed").css("background", newcolor);
		}else
		if(thiselem.parent().attr("alt") == "header"){
			jQuery(".header, .footer-desc").css("background", newcolor);
		}

		return false;
	});
	
	jQuery(".option-box div .font-bulb").click(function(){
		var thiselem = jQuery(this);
		var newfont = thiselem.css("font-family");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "font-options"){
			jQuery("h1, h2, h3, h4, h5, h6, .main-menu-custom .wrapper > ul > li > a").css("font-family", newfont);
		}

		return false;
	});
	
	jQuery(".option-box div .option-bulb").click(function(){
		var thiselem = jQuery(this);
		var newsize = thiselem.attr("rel");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "option-box"){
			if(newsize == "boxed"){
				jQuery(".boxed").addClass("active");
			}else
			if(newsize == "full"){
				jQuery(".boxed").removeClass("active");
			}
		}

		return false;
	});
	
	jQuery(".demo-settings").mouseleave(function(){
		var thiselem = jQuery(this);
		thiselem.removeClass("active");
		return false;
	});
	
	jQuery(".demo-settings .demo-button").click(function(){
		jQuery(".demo-settings").addClass("active");
		return false;
	});
});

