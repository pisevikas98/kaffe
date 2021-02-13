@extends('layouts.kaffe')
<style type="text/css">
	#test{
		border: 1px solid black;
		padding: 15px;
		margin-top: 10px;
		border-radius: 20px;
	}
</style>
@section('content')
<div class="container">
 <form method="POST" action="{{url('order_save')}}" enctype="multipart/form-data" id="test">
 	{{csrf_field()}}
 	<h3>Order Form</h3>
    <div class="form-group">
      <label for="f_name">Food Name : </label>
      <input type="text" class="form-control" id="f_name" placeholder="Enter Food Name" name="f_name">
    </div>
    <div class="form-group">
      <label for="f_price">Food Price : </label>
      <input type="text" class="form-control" id="f_price" placeholder="Enter Food Price" name="f_price">
    </div>
    <div class="form-group">
    	<label>State : </label>
    	<select class="form-control" name="f_state">
    		<option>--select--</option>
    		<option>Maharashtra</option>
    		<option>South india</option>
    		<option>Gujrat</option>
    		<option>Punjab</option>
    		<option>Himachal</option>
    		<option>Kolkata</option>
    		<option>Delhi</option>
    		<option>Rajasthan</option>
    	</select>
    </div>
    <div class="form-group">
    	<label>Food Category</label>
    	<select class="form-control" name="f_category">
    		<option>--select--</option>
    		<option>Veg</option>
    		<option>Non-veg</option>
    	</select>
    </div>
    <div class="form-group">
      <label for="f_image">Food Photo : </label>
      <input type="file" class="form-control" width="100%;" id="f_image" placeholder="upload Food Image" name="f_image">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection


