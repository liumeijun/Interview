<?php
namespace App\Http\Controllers;
use DB,Request,Input;

/**
 * 面试宝典 简历模块控制器
 *
 * @李彦廷
 */
class ResumeController extends Controller
{
	public function Index()
	{
		$url = "http://jianlimoban.yjbys.com/";
		
		return view('company/index',['arr'=>$arr,'re'=>$ra,'exam'=>$exam]);
	}
}

?>