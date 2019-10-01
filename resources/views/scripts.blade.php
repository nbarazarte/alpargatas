	<script>
		var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
		if(htmlDiv) {
			htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
		}else{
			var htmlDiv = document.createElement("div");
			htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
			document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
		}
	</script>

	<script type="text/javascript">
	if (setREVStartSize!==undefined) setREVStartSize(
		{c: '#rev_slider_9_1', responsiveLevels: [1240,1024,778,480], gridwidth: [1240,1024,778,480], gridheight: [900,800,900,800], sliderLayout: 'fullwidth'});
				
	var revapi9,
		tpj;	
	(function() {			
		if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad)
			else
		onLoad();
		
		function onLoad() {				
			if (tpj===undefined) {
				tpj = jQuery;

				if("off" == "on") tpj.noConflict();		
			}
		if(tpj("#rev_slider_9_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_9_1");
		}else{
			revapi9 = tpj("#rev_slider_9_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"//pro-theme.com/wordpress/bitcrypt/wp-content/plugins/revslider/public/assets/js/",
				sliderLayout:"fullwidth",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
	 							mouseScrollReverse:"default",
					onHoverStop:"off",
					arrows: {
						style:"uranus",
						enable:true,
						hide_onmobile:false,
						hide_onleave:false,
						tmp:'',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:0,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:0,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[900,800,900,800],
				lazyType:"none",
				parallax: {
					type:"scroll",
					origo:"slidercenter",
					speed:400,
					speedbg:0,
					speedls:0,
					levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
				},
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
	/* 	
		SHORT DOCUMENTATION WITHIN THE SCRIPT 
	 	MORE TO FIND UNDER THE FAQ PAGE: 
		https://www.themepunch.com/faq/working-crypto-currency-template/ 
	*/

	// QUICK EDIT THE CURRENCYS AND CURRENCY SYMBOLS HERE
	var fiat_1 = "USD", fiat_1_symb = "$",
	fiat_2 = "EUR", fiat_2_symb = "€";
		
	revapi9.bind("revolution.slide.onloaded",function (e) {

		// INITIALISE THE CRYPTO CALCULATOR ON THE DIFFERENT SLIDES
		jQuery('.tp_cryptobtc').each(function() {jQuery(this).cryptoPunch({cur:'BTC', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptoeth').each(function() {jQuery(this).cryptoPunch({cur:'ETH', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptoltc').each(function() {jQuery(this).cryptoPunch({cur:'LTC', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptoxrp').each(function() {jQuery(this).cryptoPunch({cur:'XRP', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptomiota').each(function() {jQuery(this).cryptoPunch({cur:'IOT', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptodash').each(function() {jQuery(this).cryptoPunch({cur:'DASH', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptoneo').each(function() {jQuery(this).cryptoPunch({cur:'NEO', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptoxmr').each(function() {jQuery(this).cryptoPunch({cur:'XMR', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});
		jQuery('.tp_cryptoqtum').each(function() {jQuery(this).cryptoPunch({cur:'QTUM', fiat:fiat_1, alternateFiat:fiat_2, fiatSymbol:fiat_1_symb, alternateFiatSymbol:fiat_2_symb});});

	  // Initialise the Global Crypto Changer (*Options will be Described in coming Crypto Add On*)
	  jQuery('body').cryptoChange({fiat:fiat_1, alternateFiat:fiat_2});			

	/* Possible Options CRYPTOPUNCH (These are the Defaults - More Options in Upcoming AddOn):
	cur:"BTC", 
	refresh:10000, 
	cur_selector:".tp_cur",
	price_selector:".tp_price", 
	fiat:"USD",  				
	alternateFiat:"EUR",
	fiatSymbol:"$",
	alternateFiatSybol:"€",
	hour_selector:".tp_onehour", 
	day_selector:".tp_oneday", 
	green:"rgb(34, 185, 17)", 
	red:"rgb(234, 21, 25)",
	timer:0,
	digitNumbers:0,
	lastValue:0,
	lastFormattedValue:0
	*/

	  /* Possible Options for CRYPTOCHANGE (These are the Defaults - More Options in Upcoming AddOn):
	  fiat:"USD",
	  alternateFiat:"EUR",
	  usd_selector:".set_usd",
	  eur_selector:".set_eur",
	  global:true
	  */
	});

	// PLAY STOP UPDATES ON ELEMENTS WHICH ARE NOT VISIBLE
	revapi9.bind("revolution.slide.onchange",function (e,data) {
	jQuery('body').cryptoTogglePlay({within:".tp-revslider-slidesli", check:"active-revslide"});
	});

	revapi9.bind("revolution.slide.onbeforeswap",function (e,data) {
	jQuery('body').cryptoUpdateInside({container:data.nextslide});
	});
			
	/**************************************************************************
	 * jquery.themepunch.Crypto Currency - jQuery Extension for Revolution Slider
	 * @version: 1.1 (17.01.2018)
	 * @requires jQuery v1.7 or later (tested on 1.9)
	 * @author ThemePunch
	 * ONLY USE WITH SLIDER REVOLUTION ! ALL RIGHTS RESERVED
	**************************************************************************/
	!function(t,e){"use strict";function a(e){t(e.to).each(function(){t(this).addClass("selected"),punchgs.TweenLite.to(this.parentNode,.5,{opacity:1})}),t(e.from).each(function(){t(this).removeClass("selected"),punchgs.TweenLite.to(this.parentNode,.5,{opacity:.5})});for(var a in e.ccs)e.ccs[a].data("options").fiat=e.val,e.ccs[a].update()}function i(a){if(clearTimeout(a.timer),!0!==a.resized){if(a.paused)return void(a.timer=setTimeout(function(){i(a)},a.refresh));a.fiat!==a.lastFiat&&(a.lastFormattedValue="-"),a.elements.cur.html(a.fiat===a.alternateFiat?a.alternateFiatSymbol:a.fiatSymbol),a.lastFiat=a.fiat,t.ajax({dataType:"json",url:"https://min-api.cryptocompare.com/data/price?fsym="+a.cur+"&tsyms="+a.fiat+","+a.alternateFiat,success:function(t){var e=r({type:"number",val:t[a.fiat],ref:a.ref,container:a.elements.price,lastFormattedValue:a.lastFormattedValue});a.lastFormattedValue=e.lastFormattedValue,a.lastValue=e.lastValue,n(a),a.timer=setTimeout(function(){i(a)},a.refresh)},error:function(t){a.lastFormattedValue=r({type:"number",val:"Not Available",ref:a.ref,container:a.elements.price,lastFormattedValue:a.lastFormattedValue}),n(a),a.timer=setTimeout(function(){i(a)},a.refresh)}})}else{if(a.lastValue!==e){var o=r({resized:a.resized,type:"number",val:a.lastValue,ref:a.ref,container:a.elements.price,lastFormattedValue:a.lastFormattedValue});a.lastFormattedValue=o.lastFormattedValue,a.lastValue=o.lastValue}a.resized=!1}}function n(a){a.hour_selector===e&&a.day_selector===e||t.ajax({dataType:"json",url:"https://min-api.cryptocompare.com/data/histohour?fsym="+a.cur+"&tsym="+a.fiat+"&limit=24&aggregate=1&e=CCCAGG",success:function(t){if(t.Data.length>0){var i=Math.abs(Math.round((t.Data[t.Data.length-1].close-a.lastValue)/a.lastValue*1e4)/100),n=Math.abs(Math.round((t.Data[0].close-a.lastValue)/a.lastValue*1e4)/100);if(a.hour_selector!==e){var r=a.c.find(a.hour_selector);t.Data[24].close<a.lastValue?(punchgs.TweenLite.set(r,{color:a.green}),r.html(i+"%")):(punchgs.TweenLite.set(r,{color:a.red}),r.html("-"+i+"%"))}if(a.day_selector!==e){var o=a.c.find(a.day_selector);t.Data[1].close<a.lastValue?(punchgs.TweenLite.set(o,{color:a.green}),o.html(n+"%")):(punchgs.TweenLite.set(o,{color:a.red}),o.html("-"+n+"%"))}}},error:function(t){if(a.hour_selector!==e){var i=a.c.find(a.hour_selector);punchgs.TweenLite.set(i,{color:a.red}),i.html("N.A")}if(a.day_selector!==e){var n=a.c.find(a.day_selector);punchgs.TweenLite.set(n,{color:a.red}),n.html("N.A")}}})}function r(t){switch(t.type){case"number":var e=o(t.val);(e.length!=t.lastFormattedValue.length||t.resized)&&c({val:e,container:t.container}),s({val:e,container:t.container}),t.lastValue=t.val}return{lastValue:t.val,lastFormattedValue:e}}function o(t){var e=Math.floor(t),a=""+Math.round(t%1*100),i=e+"";return a=a.length<2?a+"0":a,i=i.replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1,")+"."+a}function c(e){var a=parseInt(e.container.css("line-height"),0),i=t('<div class="digit_mask_container" style="line-height:'+a+'px; display:inline-block"></div>'),n=e.container.width()/e.val.length;for(var r in e.val){var o=t('<div class="rc_digital_container digit_container_'+r+'" style="width:'+Math.round(n)+'px;vertical-align:top;display:inline-block; position:relative;  overflow:hidden; text-align:center; vertical-align:center;"></div>'),c=t('<div class="digit_c_inner" style="vertical-align:top;position:absolute;top:0px;left:0px;"></div>');if(","==e.val[r]||"."==e.val[r])c.append('<div class="digit_'+r+'" style="vertical-align:top;position:relative; width:auto">'+e.val[r]+"</div>"),o.width(n/1.2);else for(var s=0;s<10;s++)c.append('<div class="rc_single_digits digit_'+s+'" style="vertical-align:top;position:absolute; left:0px; top:'+s*a+"px;height:"+a+'px">'+s+"</div>");o.append(c),i.append(o)}e.container.html("").append(i)}function s(t){var e=parseInt(t.container.css("line-height"),0);punchgs.TweenLite.set(t.container.find(".rc_digital_container, .rc_single_digits"),{height:e});for(var a=0;a<10;a++)punchgs.TweenLite.set(t.container.find(".rc_single_digits.digit_"+a),{top:a*e});for(var i in t.val){var n=","==t.val[i]||"."==t.val[i],r=(n?t.container.find(".digit_container_"+i+" .digit_c_inner .digit_"+i):t.container.find(".digit_container_"+i+" .digit_c_inner .digit_"+t.val[i])).width(),o=t.container.find(".digit_container_"+i);punchgs.TweenLite.to(o,.5,{width:r}),n||punchgs.TweenLite.to(o.find(".digit_c_inner"),.5,{y:0-e*t.val[i]+"px"})}}t.fn.extend({cryptoPunch:function(a){var n={cur:"BTC",refresh:1e4,cur_selector:".tp_cur",price_selector:".tp_price",fiat:"USD",alternateFiat:"EUR",fiatSymbol:"$",alternateFiatSymbol:"€",hour_selector:".tp_onehour",day_selector:".tp_oneday",green:"rgb(34, 185, 17)",red:"rgb(234, 21, 25)",timer:0,digitNumbers:0,lastValue:0,lastFormattedValue:0},a=t.extend(!0,{},n,a);return this.each(function(){window.cryptoIndex=window.cryptoIndex===e?0:window.cryptoIndex,a.ref="crypto_"+window.cryptoIndex,window.cryptoIndex++,a.c=t(this),a.c.addClass("active-crypto-container"),a.elements={price:a.c.find(a.price_selector),cur:a.c.find(a.cur_selector)},t(window).on("resize",function(){a.elements.price.html(a.lastFormattedValue),clearTimeout(a.rc_cryptoResize),clearTimeout(a.timer),a.rc_cryptoResize=setTimeout(function(){a.resized=!0,i(a)},100)}),i(a),a.c.data("options",a),window.cryptoList=window.cryptoList===e?new Array:window.cryptoList,window.cryptoList.push(a.c)})},pause:function(){t(this).data("options").paused=!0},play:function(){t(this).data("options").paused=!1},update:function(){i(t(this).data("options"))},cryptoChange:function(i){var n={fiat:"USD",alternateFiat:"EUR",usd_selector:".set_usd",eur_selector:".set_eur",global:!0},i=t.extend(!0,{},n,i);return this.each(function(){a({from:i.eur_selector,to:i.usd_selector,val:i.fiat}),(i.linkedTo===e||i.global)&&(i.ccs=window.cryptoList),t(document).on("click",i.usd_selector,function(){a({from:i.eur_selector,to:i.usd_selector,val:i.fiat,ccs:i.ccs})}),t(document).on("click",i.eur_selector,function(){a({from:i.usd_selector,to:i.eur_selector,val:i.alternateFiat,ccs:i.ccs})}),t(i.usd_selector+","+i.eur_selector).hover(function(){punchgs.TweenLite.to(this.parentNode,.5,{opacity:1})},function(){t(this).hasClass("selected")||punchgs.TweenLite.to(this.parentNode,.5,{opacity:.5})})})},cryptoUpdateInside:function(a){a.container.find(".active-crypto-container").each(function(){var a=t(this).data("options");a!==e&&(a.elements.price.html(a.lastFormattedValue),i(a))})},cryptoTogglePlay:function(e){return this.each(function(){for(var a in window.cryptoList)t(window.cryptoList[a]).closest(e.within).hasClass(e.check)?(window.cryptoList[a].play(),window.cryptoList[a].update()):window.cryptoList[a].pause()})}})}(jQuery);	}; /* END OF revapi call */
		
	    RsSegmenteffectAddOn(tpj, revapi9);

	 }; /* END OF ON LOAD FUNCTION */
	}()); /* END OF WRAPPING FUNCTION */
	</script>

	<script>
		var htmlDivCss = unescape("%23rev_slider_9_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_9_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_9_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
		var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
		if(htmlDiv) {
			htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
		}
		else{
			var htmlDiv = document.createElement('div');
			htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
			document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
		}
	</script>