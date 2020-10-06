<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudViewController extends Controller {
	public function index(Request $rq){
		$ms = $rq->input('Ms');
		$pw = $rq->input('Password');

		$users = DB::select('select * from users where maso = ' . $ms .' and password = '.$pw );
		
		if($users != null){
			return view('stud_view',['users'=>$users]);
		}
		else{
			return 'nhap sai';
		}

		
	}
}