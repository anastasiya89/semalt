<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	$sum_learner = 28;
		$pct_play_sports = 75;
		$sum_play_sports = $sum_learner * $pct_play_sports / 100;
    	return view('page')->with(['sum_learner'=> $sum_learner, 'sum_play_sports' => $sum_play_sports]);
    }

    public function index3(){
		$arr = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];
		$first_elm_arr = $arr[0]; 
    	return view('page3')->with('first_elm_arr', $first_elm_arr);
    }

    public function index4(){
		$remains_division = 10 % 3;
    	return view('page4')->with('remains_division', $remains_division);
    }

    public function index6(){
    	return view('page6');
    }

    public function index7(){
    	return view('page7');
    }

    public function index9(){
    	return view('page9');
    }

    public function index10(){
    	return view('page10');
    }
}
