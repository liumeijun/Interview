<?php
/*
 *公司试题控制器
 *梁坤
 */
namespace App\Http\Controllers;
use DB,Request;
use App\My\Down;

class CompanyController extends Controller
{
	//公司列表
	public function index(){
		$re = "select * from j_type";
		$ra = DB::select($re);
		// $sql = "select * from jianli";
		// $arr = DB::select($sql);
		$exam = DB::table('jianli')->simplePaginate(9);
		// dd($exam);
		return view('company/index',['re'=>$ra,'exam'=>$exam]);
	}
	//根据专业查询试题
	public function college(){
		$name = $_GET['name'];
		$arr = DB::table('shiti')->where('direction_name',"$name")->simplePaginate(9);
		return view('company/college',['exam'=>$arr]);
	}
	//根据专业以及公司查询试题
	public function college_x(){
		$name_z = $_GET['name_z'];
		$name_x = $_GET['name_x'];
		if(empty($name_z)){
		$arr = DB::table('shiti')->where('company_name',"$name_x")->simplePaginate(9);
		}else{
		$arr = DB::table('shiti')->where('company_name',"$name_x")->where('direction_name',"$name_z")->simplePaginate(9);
		}
		return view('company/college_x',['exam'=>$arr]);
	}
	//查看试题
	public function college_exam(){
		$id = isset($_GET['id'])?$_GET['id']:'';
		//$state = session_status();
		//print_r($_SESSION);die;
		if(!isset($_SESSION)){		
		session_start();
		}
		if(!empty($id)){
		$sql = "select click from shiti where s_id='$id'";
		$click=DB::select($sql);
		$click_1 =($click[0]['click'])+1;
		$upd = "update shiti set click='$click_1' where s_id='$id'";
		$upd_sav = DB::update($upd);
		$_SESSION['id']=$id;
	                        }
		$id=$_SESSION['id'];
		$count=DB::table('exam')->where('company_id',"$id")->count();
		if($count==0){
		 echo "<script>alert('暂无试题');location.href='company'</script>";
				}else{
					$data=DB::table('exam')->where('company_id',"$id")->paginate(1);
					return view('company/college_exam',['arr'=>$data]);
				}
	} 
	//简历下载
	public function jian($j_id){
		// $j_id=Request::input('j_id');
		// echo $j_id;die;
		// $sql="select * from jianli ";
		// print_r($sql);die;
		$date=DB::table('jianli')->where('j_id',$j_id)->first();
		return view('company/jian')->with('arr',$date);
	}


	//简历下载
	public function resume(){
		$j_id=Request::input('j_id');

		$date=DB::table('jianli')->where('j_id',$j_id)->first();
		// echo 123;die;
		// include 'disan/down.php';
		$word = new Down();
		// print_r($word);die;
		$word->start();
		//简历名字
		// $wordname='./求职简历'.$j_id.".doc";
		$wordname ='简历.doc';
		//必须输出
		echo $date['j_con'];	
		$a=$word->save($wordname);
		//var_dump($a);die;
		header('Content-type:application/word');
		header('Content-Disposition: attachment; filename='.$wordname.'');
		//readfile($wordname);
		ob_flush();//每次执行前刷新缓存
		flush();

	}
} 
