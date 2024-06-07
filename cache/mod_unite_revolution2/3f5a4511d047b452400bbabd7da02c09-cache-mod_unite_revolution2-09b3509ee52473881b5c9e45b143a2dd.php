<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";s:5804:"<div class="sp-module "><div class="sp-module-content"><!-- START REVOLUTION SLIDER 5.0.18 fullwidth mode -->

<div id="rev_slider_6_3_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#FFF;padding:0px;margin-top:0px;margin-bottom:0px;max-height:350px;">
	<div id="rev_slider_6_3" class="rev_slider fullwidthabanner" style="display:none;max-height:350px;height:350px;">
<ul>	<!-- SLIDE  1-->
	<li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
		<!-- MAIN IMAGE -->
		<img src="http://www.keurmerkgoz.nl/images/sliders/page02.jpg"  alt="page02"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  2-->
	<li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
		<!-- MAIN IMAGE -->
		<img src="http://www.keurmerkgoz.nl/images/sliders/page01.jpg"  alt="page01"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  3-->
	<li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
		<!-- MAIN IMAGE -->
		<img src="http://www.keurmerkgoz.nl/images/sliders/page03.jpg"  alt="page03"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
	</li>
</ul>
<div class="tp-bannertimer tp-bottom" style="display:none; visibility: hidden !important;"></div>	</div>
			
			<script type="text/javascript">

					
				/******************************************
					-	PREPARE PLACEHOLDER FOR SLIDER	-
				******************************************/
								
				 
						var setREVStartSize = function() {
							var	tpopt = new Object(); 
								tpopt.startwidth = 960;
								tpopt.startheight = 350;
								tpopt.container = jQuery('#rev_slider_6_3');
								tpopt.fullScreen = "off";
								tpopt.forceFullWidth="off";

							tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
						};
						
						/* CALL PLACEHOLDER */
						setREVStartSize();
								
				
				var tpj=jQuery;				
				tpj.noConflict();				
				var revapi6;
				
				
				
				tpj(document).ready(function() {
				
					
								
				if(tpj('#rev_slider_6_3').revolution == undefined){
					revslider_showDoubleJqueryError('#rev_slider_6_3');
				}else{
				   revapi6 = tpj('#rev_slider_6_3').show().revolution(
					{
											
						dottedOverlay:"none",
						delay:9000,
						startwidth:960,
						startheight:350,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
													
						simplifyAll:"off",						
						navigationType:"none",
						navigationArrows:"solo",
						navigationStyle:"round",						
						touchenabled:"on",
						onHoverStop:"on",						
						nextSlideOnWindowFocus:"off",
						
						swipe_threshold: 0.7,
						swipe_min_touches: 1,
						drag_block_vertical: false,
																		
																		
						keyboardNavigation:"off",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

												spinner:"spinner0",
																		
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",						
												
												
						hideTimerBar:"on",						
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						
												hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						isJoomla: true
					});
					
					
					
									}					
				});	/*ready*/
									
			</script>
			</div>
<!-- END REVOLUTION SLIDER -->	</div></div>";s:6:"output";a:3:{s:4:"body";s:0:"";s:4:"head";a:0:{}s:13:"mime_encoding";s:9:"text/html";}}