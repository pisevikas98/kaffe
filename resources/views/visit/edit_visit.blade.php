@extends('layouts.kaffe')
<style type="text/css">
	.form{
		border: 1px solid black;
		padding: 20px;
		margin: 10px;
		border-radius:20px;
	}
</style>
@section('content')

<div class="container">
	<h3 style="text-align: center;">Visiter Entery</h3>
  <form action="{{url('update_visit')}}/{{$edit->id}}" method="post" class="form">
  	{{csrf_field()}}
  	<div class="row">
  		<div class="col-sm-6">
  		    <div class="form-group">
         <label for="v_name">Visiter Name:</label>
        <input type="text" class="form-control" value="{{$edit->v_name}}" placeholder="Enter Visiter Name" name="v_name">
    </div>
</div>
 <div class="col-sm-6">
    <div class="form-group">
         <label for="v_contact">Contact:</label>
            <input type="number" class="form-control" value="{{$edit->v_contact}}" placeholder="Enter Contact" name="v_contact">
         </div>	
  	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
           <label for="v_purpose">Visiter Purpose:</label>
        <input type="text" class="form-control" value="{{$edit->v_purpose}}" placeholder="Enter Purpose Of Visite"r name="v_purpose">
    </div>
  </div>
  <div class="col-sm-6">
  	<div class="form-group">
      <label for="v_meet">Whom to Meet:</label>
      <input type="text" class="form-control" value="{{$edit->v_meet}}" placeholder="Enter Person Name" name="v_meet">
    </div>
  </div>
</div>
<div class="row">
   <div class="col-sm-6">
	  <div class="form-group">
         <label for="v_intime">In Time:</label>
        <input type="text" class="form-control" value="{{$edit->v_intime}}" placeholder="Enter In Time " name="v_intime">
    </div>
 </div>
 <div class="col-sm-6">
 	<div class="form-group">
        <label for="v_outtime">Out Time:</label>
       <input type="text" class="form-control" value="{{$edit->v_outtime}}" placeholder="Enter In Time " name="v_outtime">
    </div>
  </div>
</div>
<div class="row">
   <div class="col-sm-6">
	  <div class="form-group">
      <label for="address">Address:</label>
         <textarea class="form-control" rows="1" placeholder="Enter Visiter Address" name="v_address">{{$edit->v_address}}</textarea>
   </div>
 </div>
</div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

@endsection
