<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use DB;

class salesController extends Controller
{
    public function sales(){

    	$data = order::all();
    	// dd($data);

    	$state = DB::Select("SELECT f_state ,sum(f_price) as price FROM kaffe.orders group by f_state");
    	// dd($state);
    	$state_data = [];
    	foreach ($state as $key => $value) {
    		// dd($value->f_state);
    		$state_data[] = $value->f_state;
    	}
    	$price = [];
    	foreach ($state as $key => $value) {
    		// dd($value->f_state);
    		$price[] = $value->price;
    	}
    	// dd($d);
    	return view('sales.index',compact('data','state_data','price'));

    }
}
