<?php
/*
 *招聘信息控制器
 *梁坤
 */
namespace App\Http\Controllers;
use DB;
use Snoopy;
header('Content-Type: text/html; charset=utf-8');
class ProgramController extends Controller
{
	/*
	 *招聘信息显示
	 */

    function curlPost($url,$data='',$method){
        $ch = curl_init();   //1.初始化
        curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式
        //4.参数如下
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//https
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));//gzip解压内容
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');

        if($method=="POST"){//5.post方式的时候添加数据
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);//6.执行

        if (curl_errno($ch)) {//7.如果出错
            return curl_error($ch);
        }
        curl_close($ch);//8.关闭
        return $tmpInfo;
    }
//简历模块
    public function program(){
//        $url="http://www.lagou.com/jobs/positionAjax.json?hy=移动互联网,电子商务&px=new&city=北京&needAddtionalResult=false&first=true&kd=&pn=1";
////
//        ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)');
//        $html=file_get_contents($url);
//        $file=mb_convert_encoding($html,'UTF-8','UTF-8');
//        $html = json_decode($file,true);
//
//        print_r($html);die;
//
//
//        foreach($html['content']['result'] as $key=>$v){
//            $arr[$key]['company_name']=$v['companyShortName'];     //公司名称
//            $arr[$key]['main_business']=$v['companyShortName'];         //所属行业
//            $arr[$key]['c_address']=$v['companyShortName'];       //公司地址
//            $arr[$key]['nature']=$v['financeStage'];       //公司所属性质
//            $arr[$key]['c_namber']=$v['companySize'];//公司规模
//            $arr[$key]['introduce']=$v['companyShortName'];//公司公司招聘所属类型
//            $arr[$key]['college']=$v['companyShortName'];//学院
//            $arr[$key]['name']=$v['companyShortName'];//公司联系人
//            $arr[$key]['phone']=$v['companyShortName'];//公司联系人电话
//            $arr[$key]['qq']=$v[''];//公司联系人QQ
//            $arr[$key]['position_name']=$v[''];//公司职位名称
//            $arr[$key]['release_date']=$v['createTime'];//招聘发布时间
//            $arr[$key]['education']=$v['education'];//招聘学历要求
//            $arr[$key]['experience']=$v['workYear'];//工作经验
//            $arr[$key]['r_number']=$v[''];//招聘人数
//            $arr[$key]['r_type']=$v['positionName'];//职位类型
//            $arr[$key]['money']=$v['salary'];//薪资待遇
//            $arr[$key]['requirement']=$v[''];//岗位要求
//            foreach($v['companyShortNameLabe1List'] as $val){
//                $array.=$val+',';//公司福利
//            }
//            $arr[$key]['welfare'] =trim($array,',');
//            $arr[$key]['r_describe']=$v[''];//岗位要求
//            $arr[$key]['ch_college']=$v[''];//未知
//            $arr[$key]['c_region']=$v['district'];//公司所属区域
//
//
//
//
//
//        }
        $all = DB::table('position')->where("p_up_id",0)->get();
        foreach ($all as $key => $value) {
            $two = DB::table('position')->where("p_up_id",$value['p_id'])->get();

            foreach ($two as $k => $v) {
             $three = DB::table('position')->where("p_up_id",$v['p_id'])->get();
             $two[$k]['three']=$three;
            }
            $all[$key]['two']=$two;
        }
        //print_r($all);die;
    	$data=DB::table('recruit')->orderBy('r_id','desc')->paginate(10);
        //print_r($data);die;
        return view('program/program',['all'=>$all,'data'=>$data]);
    }
   /*
     *根据职位查询信息
     */
    public function position(){
        $p_name=$_GET['p_name'];
        $arr = DB::table('recruit')->where('position_name',"$p_name")->get();
        return view('program/position',['data'=>$arr]);
    }



    /*
	 *招聘信息详情页面
	 */
    public function etc_sel(){
    	$id=$_GET['id'];
    	$data = DB::table('recruit')->where('r_id',"$id")->first();
    	return view('program/etc_sel',['arr'=>$data]);
    }



}