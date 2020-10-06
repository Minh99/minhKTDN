<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudViewController;
class Usecontroller extends Controller {
	public function indexx(Request $rq){

		$point =  DB::select('select points.maso,users.name,points.tenhocphan,points.tinchi,points.diem,points.ketqua FROM users, points where users.maso = '.$ms.' and points.maso = '.$ms.' group by points.maso');

		if($point != null){
			return view('stud_view',['point'=>$point]);
		}
		else{
			return 'null';
		}

		
	}
}