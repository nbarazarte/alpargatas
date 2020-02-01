@extends('layouts.appCryptiaSmarty')

@section('content')

<style type="text/css">

	iframe{

		width:100%;
		height:1040px;
		position: absolute;
		top: 0px;
	}	

	div .cryptowathframe{

		border: 0px solid black;
		position: relative;
		width: 100%;
		height: 900px;
		top: -141px;
	}

</style>

<div class="cryptowathframe">
	
	
	<iframe src="https://frame.cryptowat.ch/" scrolling="no" frameborder="0" allowtransparency="false"></iframe>

	
</div>


@endsection