<style type="text/css">


</style>

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script type='text/javascript'>
    
    $(function(){
    
        var iFrames = $('iframe');
      
    	function iResize() {
    	
    		for (var i = 0, j = iFrames.length; i < j; i++) {
    		  iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';}
    	    }
    	    
        	if ($.browser.safari || $.browser.opera) { 
        	
        	   iFrames.load(function(){
        	       setTimeout(iResize, 0);
               });
            
        	   for (var i = 0, j = iFrames.length; i < j; i++) {
        			var iSource = iFrames[i].src;
        			iFrames[i].src = '';
        			iFrames[i].src = iSource;
               }
               
        	} else {
        	   iFrames.load(function() { 
        	       this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
        	   });
        	}
        
        });

</script>

<div class="cryptowathframe" style="border: 0px solid black;
		position: relative;
		width: 100%;
		height: 769px;
		top: -280px;">

	<iframe src="https://frame.cryptowat.ch/" class="iframe" scrolling="no" frameborder="0" height="1040" width="100%"></iframe>

</div>

