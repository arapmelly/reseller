@extends('layouts.front')
@section('content')


<div class="wrapper pattern-1" >

	<div class="row">

		<br>	<br>	<br>

	</div>
	
	<div class="row">

		<div class="col-lg-3">

		</div>
  
  <div class="col-lg-5 ">
    
    {{ Confide::makeForgotPasswordForm()->render() }}

  </div>
</div>



@stop