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
	<a href="{{url('create_visit')}}" class="btn btn-primary">Add Visiter</a>
	<table class="table table-striped" id="box">
    <thead>
      <tr>
        <th>Id</th>
        <th>Visiter Name</th>
        <th>Contact</th>
        <th>Visiter purpose</th>
        <th>Whom to Meet</th>
        <th>In Time</th>
        <th>Out Time</th>
        <th>Address</th> 
        <th>Action</th>   
      </tr>
    </thead>
    <tbody>
    	@foreach($show as $key=>$edit)
      <tr>
        <td>{{$key+1}}</td> 
        <td>{{$edit->v_name}}</td>
        <td>{{$edit->v_contact}}</td>
        <td>{{$edit->v_purpose}}</td>
        <td>{{$edit->v_meet}}</td>
        <td>{{$edit->v_intime}}</td>
        <td>{{$edit->v_outtime}}</td>
        <td>{{$edit->v_address}}</td>
        <td>
        	<a href="{{url('edit_visit')}}/{{$edit->id}}" class="btn btn-primary">Edit</a>
        	<a href="{{url('delete_visit')}}/{{$edit->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

