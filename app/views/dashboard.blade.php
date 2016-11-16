@extends('layouts.main')
@section('content')


<div class="wrapper pattern-1" >

	<div class="row">

		<br>	<br>	<br>

	</div>
	
	<div class="row">

		<div class="col-lg-3">

		</div>
  
  <div class="col-lg-5 ">
    <br>	<br>	<br>
   
  	<div class="alert alert-default pattern-1" id="callout-alerts-dismiss-plugin"> <h4>Hello {{ ucwords(Confide::user()->username)}}, </h4><h4>Welcome to the reseller portal</h4> <p>Use the links at the top to manage your deals and access marketing, Technical and contractual resources.</p> </div>


  </div>
</div>



@stop