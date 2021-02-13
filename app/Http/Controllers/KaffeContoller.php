<?php

namespace App\Http\Controllers;
use App\order;

use Illuminate\Http\Request;

class KaffeContoller extends Controller
{
    public function Kaffe_Dashboard(){


        $data = order::all();
        // dd($data);
    	return view('kaffe/kaffe_dashboard',compact('data'));
    }
    public function FoodList(){
    	return view('kaffe/foodlist');
    }

    public function Order_submit(){
    	return view('kaffe/order_submit');
    }

    public function Order_Save(Request $request){
    	// dd("ff");
    	// dd($request->all());
    	$food = new order();
    	// dd($food);
			$food->f_name = $request->f_name;
			$food->f_price = $request->f_price;
			$food->f_state = $request->f_state;
			$food->f_category = $request->f_category;
			  if($request->hasfile('f_image')){
		      echo $img_tmp = $request->file('f_image');
		      if($img_tmp->isValid()){
		      $extension = $img_tmp->getClientOriginalExtension();
		      $filename = rand(111,99999).'.'.$extension;
		      $img_path = public_path('/food_photo'); 
		      $img_tmp->move($img_path,$filename);
		      $food->f_image = $filename;
		      $food->save();
		      }
		    }
        return redirect('/');
    }

    public function orderRead(){
    	$food = order::all();
    	return view('kaffe/orderread',compact('food'));
    }

    public function orderEdit($food_id){
    	$food = order::find($food_id);
    	return view('kaffe/orderEdit',compact('food'));
    }

    public function orderUpdate(Request $request,$food_id){
        // dd((int)$food_id);
        // dd($request->all());
        if ($request->f_image == null) {
            // dd("dd");
        
        $food = order::find((int)$food_id);
        // dd($food);
        $food->f_name = $request->f_name;
        $food->f_price = $request->f_price;
        $food->f_state = $request->f_state;
        $food->f_category = $request->f_category;
        $food->f_image = $request->f_image;
        $food->save();    # code...
        }
        else{

            // dd("ss");
    	$food = order::find((int)$food_id);
        // dd($food);
    	$food->f_name = $request->f_name;
		$food->f_price = $request->f_price;
		$food->f_state = $request->f_state;
		$food->f_category = $request->f_category;
		  if($request->hasfile('f_image')){
	      echo $img_tmp = $request->file('f_image');
	      if($img_tmp->isValid()){
	      $extension = $img_tmp->getClientOriginalExtension();
	      $filename = rand(111,99999).'.'.$extension;
	      $img_path = public_path('/food_photo'); 
	      $img_tmp->move($img_path,$filename);
	      $food->f_image = $filename;
	      $food->save();
        }
	      }
	    }
        return redirect('/order_read');
    }

    public function orderDelete($food_id){
    	$food = order::find($food_id);
    	$food->delete();

    	return redirect('/order_read');
    }
}
