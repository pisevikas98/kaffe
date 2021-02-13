@extends('layouts.kaffe')
<style type="text/css">
  .table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.table td, .table th {
  border: 1px solid #ddd;
  padding: 8px;
}

.table tr:nth-child(even){background-color: #f2f2f2;}

.table tr:hover {background-color: #ddd;}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
@section('content')
<div>
  <h3 style="text-align: center;"><u>All Category Of Foods & list</u></h3>
</div>
<div class="container">
  <h3>Maharashtrian Food</h3>
  <table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Purn Poli</td>
        <td>150/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Dal Bhat</td>
        <td>100/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>mattun</td>
        <td>200/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>vada pav</td>
        <td>15/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Misal pav</td>
        <td>50/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>chai</td>
        <td>10/Rs</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Dal Tadka</td>
        <td>150/Rs</td>
      </tr><tr>
        <td>8</td>
        <td>Paneer Masala</td>
        <td>200/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div>
  <br>
  <h3>South Indian Food</h3>
   <table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Medu Vada</td>
        <td>80/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Ven pongal</td>
        <td>120/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Uttapam</td>
        <td>90/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Rawa Upma</td>
        <td>40/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Idli</td>
        <td>40/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>Ragi Dosa Recipe</td>
        <td>140/Rs</td>
      </tr> 
      <tr>
        <td>7</td>
        <td>Rice and Coconut Pancake</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Buttermilk Sambar</td>
        <td>150/Rs</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Onion Rava Dosa</td>
        <td>120/Rs</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Dal vada</td>
        <td>50/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div><br>
  <h3>Gujrati Food</h3>
   <table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Khandvi</td>
        <td>100/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Gujarati Samosa</td>
        <td>30/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Aam Shrikhand</td>
        <td>110/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Gujarati Kadhi</td>
        <td>140/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Dhokla</td>
        <td>80/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>Bardoli ki Khichdi</td>
        <td>150/Rs</td>
      </tr> 
      <tr>
        <td>7</td>
        <td>ethi ka Thepla.</td>
        <td>100/Rs</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Dal Dhokli</td>
        <td>120/Rs</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Undhiyu</td>
        <td>120/Rs</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Patra</td>
        <td>60/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div><br>
  <h3>Punjabi Food</h3>
   <table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Butter Chicken</td>
        <td>150/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Sarson Ka Saag Aur Makki Ki Roti</td>
        <td>230/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Tandoori Chicken</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Chole Bhature</td>
        <td>140/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Masala Channa</td>
        <td>180/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>Dal Makhani</td>
        <td>120/Rs</td>
      </tr> 
      <tr>
        <td>7</td>
        <td>Machchli Amritsari</td>
        <td>180/Rs</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Dhaba Dal</td>
        <td>200/Rs</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Paneer Tikka</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>10</td>
        <td> Amritsari Kulcha</td>
        <td>260/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div><br>
  <h3>Himachali Food</h3>
<table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Chana Madra</td>
        <td>140/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Dham</td>
        <td>130/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>udkiya Bhat</td>
        <td>100/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Bhey</td>
        <td>80/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Chha Gosht</td>
        <td>150/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>Babru</td>
        <td>120/Rs</td>
      </tr> 
      <tr>
        <td>7</td>
        <td>Aktori</td>
        <td>80/Rs</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Siddu</td>
        <td>130/Rs</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Kullu Trout fish</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Mittha</td>
        <td>160/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div>
  <br>
  <h3>Kolkata Food</h3>
<table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Macher jhol</td>
        <td>200/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Mishti Doi</td>
        <td>230/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Kosha Mangsho</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Alur torkari</td>
        <td>180/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Luchi</td>
        <td>120/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>Cholar dal</td>
        <td>170/Rs</td>
      </tr> 
      <tr>
        <td>7</td>
        <td>Shukto</td>
        <td>210/Rs</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Chomchom</td>
        <td>150/Rs</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Sandesh</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Rasgullas</td>
        <td>300/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div><br>
  <br>
  <h3>Delhi Food</h3>
<table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Paranthas</td>
        <td>130/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Chaat</td>
        <td>110/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Butter Chicken</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Kebabs</td>
        <td>180/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Chole Bhature</td>
        <td>120/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>Biryani</td>
        <td>150/Rs</td>
      </tr> 
      <tr>
        <td>7</td>
        <td>Nihari</td>
        <td>180/Rs</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Rolls</td>
        <td>120/Rs</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Desserts</td>
        <td>250/Rs</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Momos</td>
        <td>100/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div>

  <h3>Rajasthani Food</h3>
<table class="table table-striped" class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foodname</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dal Bati Churma</td>
        <td>230/Rs</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Mohan Thaal</td>
        <td>170/Rs</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Laal Maas</td>
        <td>150/Rs</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Mawa Kachori</td>
        <td>80/Rs</td>
      </tr>
      <tr>
        <td>5</td>
        <td> Mirchi Bada</td>
        <td>120/Rs</td>
      </tr>
       <tr>
        <td>6</td>
        <td>Mohan Maas</td>
        <td>160/Rs</td>
      </tr> 
      <tr>
        <td>7</td>
        <td>Kalakand</td>
        <td>130/Rs</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Pyaaz Ki Kachori</td>
        <td>150/Rs</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Gatte</td>
        <td>200/Rs</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Kadhi</td>
        <td>160/Rs</td>
      </tr>
    </tbody>
  </table>
  <div>
    <a href="{{url('order_submit')}}" class="btn btn-primary">Add Order</a>
  </div>

 @endsection
 