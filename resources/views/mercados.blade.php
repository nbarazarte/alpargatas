@extends('layouts.appCryptiaSmarty')

@section('content')

<style type="text/css">


/* 
  ##Device = Desktops
  ##Screen = 1281px to higher resolution desktops
*/

@media (min-width: 1281px) {
  
	iframe{

		width:100%;
		height:1040px;
		position: absolute;
		top: -130px;
	}	

	div .cryptowathframe{

		border: 0px solid black;
		position: relative;
		width: 100%;
		height: 769px;
		top: -141px;
	}
  
}

/* 
  ##Device = Laptops, Desktops
  ##Screen = B/w 1025px to 1280px
*/

@media (min-width: 1025px) and (max-width: 1280px) {
  
	iframe{

		width:100%;
		height:1055px;
		position: absolute;
		top: -130px;
	}	

	div .cryptowathframe{

		border: 0px solid black;
		position: relative;
		width: 100%;
		height: 769px;
		top: -145px;
	}
  
}

/* 
  ##Device = Tablets, Ipads (portrait)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) {
  
	iframe{

		width:100%;
		height:1080px;
		position: absolute;
		top: -115px;
	}	

	div .cryptowathframe{

		border: 0px solid black;
		position: relative;
		width: 100%;
		height: 769px;
		top: -145px;
	}
  
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  
	iframe{

		width:100%;
		height:1070px;
		position: absolute;
		top: -115px;
	}	

	div .cryptowathframe{

		border: 0px solid black;
		position: relative;
		width: 100%;
		height: 769px;
		top: -165px;
	}
  
}

/* 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
  ##Screen = B/w 481px to 767px
*/

@media (min-width: 481px) and (max-width: 767px) {
  
	iframe{

		width:100%;
		height:1130px;
		position: absolute;
		top: -115px;
	}	

	div .cryptowathframe{

		border: 0px solid black;
		position: relative;
		width: 100%;
		height: 839px;
		top: -165px;
	}
  
}

@media (max-width: 767px) and (min-width: 481px) {
  
	iframe{

		width:100%;
		height:1080px;
		position: absolute;
		top: -95px;
	}	

	div .cryptowathframe{

		border: 0px solid black;
		position: relative;
		width: 100%;
		height: 820px;
		top: -165px;
	}
  
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
	iframe{

		width:100%;
		height:1228px;
		position: absolute;
		top: -200px;
	}	

	div .cryptowathframe{

		border: 1px solid black;
		position: relative;
		width: 100%;
		height: 885px;
		top: -141px;
	}
  
}













</style>

<div class="cryptowathframe">
	
	<iframe src="https://frame.cryptowat.ch/" scrolling="no" frameborder="0" allowtransparency="false"></iframe>
	
</div>

@endsection