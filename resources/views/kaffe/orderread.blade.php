@extends('layouts.kaffe')
<style>
#box {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 10px;
}
#box td, #box th {
  border: 1px solid #ddd;
  padding: 8px;
}
#box tr:nth-child(even){background-color: #f2f2f2;}

#box tr:hover {background-color: #ddd;}

#box th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
@section('content')

<div class="container">
	<a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
	<table class="table table-striped" id="box">
    <thead>
      <tr>
        <th>Id</th>
        <th>Food Name</th>
        <th>Food Pirce</th>
        <th>State</th>
        <th>Food Category</th>
        <th>Food Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($food as $key=>$food)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$food->f_name}}</td>
        <td>{{$food->f_price}}</td>
        <td>{{$food->f_state}}</td>
        <td>{{$food->f_category}}</td>
        <td>
        	<img style="width: 80px;height: 80px" src = "/food_photo/{{$food->f_image}}" />
        </td>
        <td>
        	<a href="{{url('order_edit')}}/{{$food->id}}" class="btn btn-primary">Edit</a>
        	<a href="{{url('order_delete')}}/{{$food->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

