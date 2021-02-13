@extends('layouts.kaffe')
<style type="text/css">
	#h{
		text-align: center;
		padding-bottom: 5px; 
	}
</style>
@section('content')
<div>
	<h2 id="h"><u>Foods and Categorits</u></h2>
</div>
	@foreach($data as $order)
<div class="container" id="test">

 <div class="row">
 	<div class="col-sm-3">
 		<div class="card">
		    <img src="/food_photo/{{$order->f_image}}" width="100%;" height="19%">
		    <hr>
		    	<h4>Item Name: {{$order->f_name}}</h4>
		    <h4>Item Price : {{$order->f_price}}</h4>
        </div>
  </div> 
  @endforeach
@endsection
  </div>