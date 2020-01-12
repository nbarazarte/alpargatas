@extends('layouts.appCryptiaSmarty')

@section('content')

<style type="text/css">

@media only screen and (max-width: 375px) {

	iframe{

		width:100%;
		height:1230px;
		position: absolute;
		top: -236px;

	}	

	div .cryptowathframe{

		border: 1px solid black;
		position: relative;
		width: 100%;
		height: 880px;
		top: -100px;
	}

} 

@media only screen and (max-width: 768px) {

	iframe{

		width:100%;
		height:1080px;
		position: absolute;
		top: -100px;

	}	

	div .cryptowathframe{

		border: 1px solid black;
		position: relative;
		width: 100%;
		height: 790px;
		top: -141px;
	}

} 

@media screen and (max-width: 1440px) { 

	iframe{

		width:100%;
		height:1040px;
		position: absolute;
		top: -130px;
	}	

	div .cryptowathframe{

		border: 1px solid black;
		position: relative;
		width: 100%;
		height: 769px;
		top: -141px;
	}

}

</style>

<div class="cryptowathframe">
	
	<iframe src="https://frame.cryptowat.ch/" scrolling="no" frameborder="0" allowtransparency="false"></iframe>

</div>

@endsection