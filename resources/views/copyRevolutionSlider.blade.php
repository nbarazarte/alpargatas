<div id="rev_slider_9_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
	<ul>
		@include('slide1')
		
		<!--
			@ include('slide2')
			@ include('slide3')
			@ include('slide4')
		-->
		
	</ul>

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

	<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	

</div>