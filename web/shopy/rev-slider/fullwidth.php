<link rel="stylesheet" href="rev-slider/css/settings.css">
<link rel="stylesheet" href="rev-slider/css/fullwidth.css">

<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/homeslider-revslider.js"></script>

<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>
			<!-- THE FIRST SLIDE -->
			<li data-transition="fade" data-slotamount="9" data-masterspeed="700" data-slideindex="back">
				<!-- THE MAIN IMAGE IN THE SLIDE -->
				<img src="img/dummy/1600x600.jpg" alt="" />
				
				<!-- THE CAPTIONS OF THE FIRST SLIDE -->
				<div class="caption h6 text-bold gfc lfr stt uppercase"
				data-x="580"
				data-y="110"
				data-speed="500"
				data-start="1600"
				data-easing="easeOutExpo">New Collection</div>
				
				<div class="caption herotext text-bold gfc lfl stl"
				data-x="360"
				data-y="140"
				data-speed="900"
				data-start="2000"
				data-easing="easeOutExpo">Autumn Fashions</div>
				
				<div class="caption h6 text-bold gfc sfb stb text-center"
				data-x="419"
				data-y="260"
				data-speed="1600"
				data-start="2900"
				data-easing="easeOutExpo">
					Comfy knits and warm jackets for cooler Autumn days<br/>
					<a href="products.php" class="btn btn-primary uppercase">Shop Now</a>
				</div>
				
			</li>
			
			<!-- THE SECOND SLIDE -->
			<li data-transition="random" data-slotamount="9" data-masterspeed="700" data-slideindex="back" style="background: #fa6f57;">
				
				<div class="caption super-giant gfc sft stt uppercase"
				data-x="285"
				data-y="60"
				data-speed="500"
				data-start="900"
				data-easing="easeOutExpo">Sale</div>

				<div id="caption-left-round" class="caption round gfc lfl stt uppercase"
				data-x="-40"
				data-y="60"
				data-speed="600"
				data-start="1200"
				data-easing="easeOutExpo"><div class="vmid"><span>Mid<br/>Season</span></div></div>

				<div class="caption round gfc lfr str uppercase"
				data-x="710"
				data-y="60"
				data-speed="600"
				data-start="1200"
				data-easing="easeOutExpo"><div class="vmid"><span>Up to<br/>70% off</span></div></div>

				<div class="caption h3 gfc sfb stb uppercase"
				data-x="260"
				data-y="250"
				data-speed="400"
				data-start="1800"
				data-easing="easeOutExpo"><strong class="text-bold">500’s </strong>of New Products</div>

			</li>
			
			<!-- THE SECOND SLIDE -->
			<li data-transition="random" data-slotamount="9" data-masterspeed="700" data-slideindex="back">
				<!-- THE MAIN IMAGE IN THE SLIDE -->
				<img src="img/dummy/1600x600.jpg" alt="" />
			</li>
			
		</ul>
		
		<div class="tp-bannertimer tp-bottom"></div>
	</div>
</div>





<!--
##############################
- ACTIVATE THE BANNER HERE -
##############################
-->
<script type="text/javascript">
	
	var tpj=jQuery;
	tpj.noConflict();
	
	tpj(document).ready(function() {
		
		if (tpj.fn.cssOriginal!=undefined)
		tpj.fn.css = tpj.fn.cssOriginal;
		
		tpj('.fullwidthbanner').revolution(
		{
			delay:7000,
			startheight:465,
			startwidth:960,
			hideThumbs:200,
			thumbWidth:100,						// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight:50,
			thumbAmount:5,
			navigationType:"none",					// bullet, thumb, none
			navigationArrows:"verticalcentered",		// nexttobullets, solo (old name verticalcentered), none
			navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
			navigationHAlign:"center",				// Vertical Align top,center,bottom
			navigationVAlign:"bottom",				// Horizontal Align left,center,right
			navigationHOffset:0,
			navigationVOffset:16,
			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:75,
			soloArrowLeftVOffset:0,
			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:75,
			soloArrowRightVOffset:0,
			touchenabled:"on",						// Enable Swipe Function : on/off
			onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off
			stopAtSlide:-1,						// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
			stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
			hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
			hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
			hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
			shadow:0,							//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
			fullWidth:"on",						// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
			lazyLoad:"off"
		});
		
	});
	
</script>