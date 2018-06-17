<?php

namespace App\Http\Controllers;

use Google_Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class TriplaxisAuth extends Controller{
	protected function signup(Request $req) { //MySQL signup
		DB::table('User') -> insert([
			'user_fname' => $req->post()['firstname'],
	      		'user_lname' => $req->post()['lastname'],
			'user_email' => $req->post()['email'],
			'user_mobile' => $req->post()['mobile'],
			'user_password' => Hash::make($req->post()['password'])]);
	#	return json_encode(Hash::make($req->post()['firstname']));
	
	return ' <meta http-equiv="refresh" content="0;url=Login">';
	}

	protected function logout(Request $req) {
		session()->flush();
		return '<meta http-equiv="refresh" content="0;url=/">';	
	}
	protected function iamlogin(Request $req){ //Google
		$CLIENT_ID = "780418787251-88eja0jn9tbmr0jdkptu4vslhjknahhe.apps.googleusercontent.com";
		$client = new Google_Client(['client_id' => $CLIENT_ID]);
		$payload = $client->verifyIdToken($req->post()['token']);
		$result = DB::table('User')
			-> select (DB::raw('user_fname,user_email'))
			-> where ('user_email', $req->post()['email'])
			->get();

		if ($payload) {
			$userid = $payload['sub'];
			if (sizeof($result) < 1){
				DB::table('User') -> insert([
				'user_fname' => $req->post()['firstname'],
				'user_lname' => $req->post()['lastname'],
				'user_email' => $req->post()['email']]);

				session()->flush();
				session(['nick' => $req->post()['firstname']]);
			} 

			session()->flush();
			session(['nick' => $result[0]->user_fname,]);
		} else {
			return '<meta http-equiv="refresh" content="0;url=/Login">';	
		}

		return '<meta http-equiv="refresh" content="0;url=/">';	
	}	

	protected function login(Request $req) { //mysql login
		$result = DB::table('User') 
			-> select(DB::raw('user_fname, user_email, user_password'))
	                -> where('user_email' ,$req->post()['email'])
			-> get();
		if(Hash::check($req->post()['password'], $result[0]->user_password)){
			session()->flush();
			session(['nick' => $result[0]->user_fname,]);
			return '<meta http-equiv="refresh" content="0;url=/">';	
		} else {
			return ' <meta http-equiv="refresh" content="0;url=Login">';
		}	
	}
}
