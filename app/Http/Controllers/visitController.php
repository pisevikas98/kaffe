<?php

namespace App\Http\Controllers;
use App\visit;

use Illuminate\Http\Request;

class visitController extends Controller
{
    public function createVisit(){
    	return view('visit/create_visit');
    }

    public function saveVisit(Request $request){
    	// dd($request->all());
    	$visit = new visit();
    	$visit->v_name = $request->v_name;
    	$visit->v_contact = $request->v_contact;
    	$visit->v_purpose = $request->v_purpose;
    	$visit->v_meet = $request->v_meet;
    	$visit->v_intime = $request->v_intime;
    	$visit->v_outtime = $request->v_outtime;
    	$visit->v_address = $request->v_address;
    	$visit->save();

    	return redirect('read_visit');
    }

    public function readVisit(){
    	$show = visit::all();
    	return view('visit/read_visit',compact('show'));
    }

    public function editVisit($edit_id){
    	$edit = visit::find($edit_id);
    	return view('visit/edit_visit',compact('edit'));
    }

    public function updateVisit(Request $request, $edit_id){
    	$update = visit::find($edit_id);
    	$update->v_name = $request->v_name;
    	$update->v_contact = $request->v_contact;
    	$update->v_purpose = $request->v_purpose;
    	$update->v_meet = $request->v_meet;
    	$update->v_intime = $request->v_intime;
    	$update->v_outtime = $request->v_outtime;
    	$update->v_address = $request->v_address;
    	$update->save();

    	return redirect('read_visit');
    }
    public function deleteVisit($edit_id){
    	$delete = visit::find($edit_id);
    	$delete->delete();

    	return redirect('read_visit');
    }
}
