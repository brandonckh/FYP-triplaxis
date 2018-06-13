<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TriplaxisAuth extends Controller{
	public function login(Request $req) {
		return json_encode($req->post()) . "owo";
	}
}
