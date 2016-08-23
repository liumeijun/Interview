<?php

namespace App\Http\Controllers;
use DB,Mail,Request;

class ResumeController extends Controller
{
	public function form(){
		$url='https://www.baidu.com/index.php?tn=monline_3_dg';
		$res=file_get_contents($url);
		print_r($res);
	}
}