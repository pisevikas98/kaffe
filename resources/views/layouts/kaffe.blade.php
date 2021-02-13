<!DOCTYPE html>
<html>
<head>
	<title>Kaffe</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
     #footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: right;

}
      
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <h3 style="color: white">Kaffe</h3>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li><a href="{{url('order_read')}}">Order</a></li>
      <li><a href="{{url('read_visit')}}">Visiter</a></li>
      <li><a href="{{url('sales')}}">Sales</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="{{url('/')}}">Home</a></li>
    </ul>
  </div>
</nav>
<div>
  @yield('content')
</div>
</body>
<footer class="container-fluid text-center" id="footer">
  <h4>Kaffe@copyright2021.</h4>
</footer>
</html>