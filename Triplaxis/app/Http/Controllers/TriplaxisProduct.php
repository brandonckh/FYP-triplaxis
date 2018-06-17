<?php

namespace App\Http\Controllers;

use Google_Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class TriplaxisProduct extends Controller{

	protected function newproduct(Request $req) {
		return $req;
		#DB::table('Design') -> insert([
		#	'design_name' => $req->post()['name'] ,
		#	'price' => $req->post()['price'],
		#	'description'=> $req->post()['description'],
		#	'approval' => false,
		#	'user_acc_id'=> 5]);

		#return '<meta http-equiv="refresh" content="0;url=/successful">';

	}	

	protected function output(Request $req){
		$category=["all", "other", "accessories", "Cases", "Figurine", "Hobbies", "Jewellery", "Keychain", "Toys", "Other", "Showing All"];
		if($req->get("id") == "10") {
		$output = DB::table('Design')
			->select(DB::raw('design_id, design_name, price, description,category'))
			->get();
			
		} else {
		$output = DB::table('Design')
			->select(DB::raw('design_id, design_name, price, description,category'))
			->where('category', $req->get("id"))
			->get();
		}
		return view('browse',['category' => $category[$req->get("id")], 'data' => $output]);
	}

	protected function purchaseOrder(){
		DB::table('item') -> insert ([
			'item_id' => $req->post()['id'],
			'material_id'=> $req->post()['material'], 
			'resolution_id'=> $req->post()['resolution'],
			'quantity' => $req->post()['quantity']
		]);
	}

	protected function getproduct(Request $req) {
		$output = DB::table("Design")
			->select(DB::raw('design_id, design_name, price'))
			->where('design_id', $req->get("id"))
			->get();
		return view('product', ['name' => $output[0]->design_name]);
	}

	protected function cartDriver(Request $req) {
		return view('cart',['cart'=>['modelTitle'=>'Design1', 'basePrice'=>30 ]]);
	}
}
