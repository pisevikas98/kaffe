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
.container {
  width: 80%;
  margin: 15px auto;
}
</style>
@section('content')

<div class="container">

  <div class="container">
      <h2>Sales Graph</h2>
      <div>
        <canvas id="myChart"></canvas>
      </div>
  </div>

	<!-- <a href="{{url('create_visit')}}" class="btn btn-primary">Add Visiter</a> -->
	<table class="table table-striped" id="box">
    <thead>
      <tr>
        <th>Id</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>State</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($data as $key=>$order)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$order->f_name}}</td>
        <td>{{$order->f_price}}</td>
        <td>{{$order->f_state}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<script type="text/javascript">
  var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: @json($state_data),
    datasets: [{
      label: 'Sales',
      data: @json($price),
      backgroundColor: "rgba(153,255,51,1)"
    }, {
      data: [],
      backgroundColor: ""
    }]
  }
});
</script>

@endsection

