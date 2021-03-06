<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('index/index');
//});
Route::get('main', function () {
    return view('layouts/master');
});
//首页
Route::get('/', 'IndexController@index');
Route::get('index','IndexController@index');
//登陆
Route::get('login', 'LoginController@login');
Route::any('out', 'LoginController@out');
Route::post('name', 'LoginController@name');
Route::post('email', 'LoginController@email');
Route::post('name_pwd','LoginController@name_pwd');
Route::post('email_pwd','LoginController@email_pwd');
Route::post('name_deng', 'LoginController@name_deng');
Route::post('email_deng','LoginController@email_deng');

//第三方
Route::get('weibo','LoginController@weibo');

/*
 * 个人中心
 */

Route::get('/setprofile', 'UserController@setprofile');
Route::post('/setprofile', 'UserController@setprofile');

//我的招聘公司
Route::get('/mycompany', 'UserController@mycompany');
Route::get('/setavator', 'UserController@setavator');
Route::get('/setphone', 'UserController@setphone');
Route::get('/setverifyemail', 'UserController@setverifyemail');
Route::get('/setresetpwd', 'UserController@setresetpwd');
Route::get('/setbindsns', 'UserController@setbindsns');
//保存个人资料
// Route::post('user/my_message', 'UserController@my_message');

Route::post('my_message', 'UserController@my_message');

//我的收藏
Route::get('my_house', 'UserController@my_house');
//我的收藏->收藏的文章
Route::get('my_house_article', 'UserController@my_house_article');
//我的评价
Route::get('my_ping', 'UserController@my_ping');


//个人中心
Route::get('sms/messages', 'SmsController@messages');
Route::get('sms/messagesone', 'SmsController@messagesone');
Route::get('sms/messagestwo', 'SmsController@messagestwo');
Route::get('sms/notices', 'SmsController@notices');
Route::get('friend/friendlist', 'FriendController@friendlist');
/*
 * 猿问开始
 */
//猿问首页
Route::get('wenda', 'WendaController@wenda');

//等待回答
Route::get('waitreply', 'WendaController@waitreply');
//最新
Route::get('bestnew', 'WendaController@bestnew');
//猿问回答点赞
Route::get('agree','WendaController@agree');
//我要提问
Route::get('save', 'WendaController@save');
//提交提问
Route::post('tiwen', 'WendaController@tiwen');
//点击标题后进入的详情页面
Route::any('detail', 'WendaController@detail');
//评论
Route::any('hui', 'WendaController@hui');
//关注
Route::post('addhouse_wenda','WendaController@addhouse_wenda');
//取消关注
Route::post('delhouse_wenda','WendaController@delhouse_wenda');

//关注取消分类
Route::post('q_direction','WendaController@q_direction');

//跳转分类
Route::get('fenlei','WendaController@fenlei');


//试题评论
Route::post('pinglun_shiti','CourseController@pinglun_shiti');
//Route::any('hui', function(){
//   $re= \Illuminate\Support\Facades\Request::all();
//    print_r($re);
//});
//点赞
Route::get('zid', 'WendaController@zid');
/*
 * 猿问结束
 */

/*
 * 试题开始
 */
//试题首页
Route::get('shiti', 'CourseController@course');

//试题搜索
Route::post('sou', 'CourseController@sou');
Route::post('s', 'CourseController@s');
Route::post('zhuanye', 'CourseController@zhuanye');
Route::get('xiang', 'CourseController@xiang');
Route::post('con', 'CourseController@con');
Route::get('ping', 'CourseController@ping');
Route::post('addhouse', 'CourseController@addhouse');
Route::post('delhouse', 'CourseController@delhouse');
Route::get('hot', 'CourseController@Hot');
Route::get('news', 'CourseController@News');
Route::get('history', 'CourseController@History');

/*
 * 试题结束
 */

//文章
Route::get('article', 'ArticleController@article');
Route::post('delhouse_article', 'ArticleController@delhouse_article');
Route::post('addhouse_article', 'ArticleController@addhouse_article');
Route::get('article/publish', 'ArticleController@publish');
Route::post('article/add', 'ArticleController@add');
Route::any('zan', 'ArticleController@zan');
Route::post('type', 'ArticleController@type');
Route::get('fangfa', 'ArticleController@wxiang');
Route::post('wping', 'ArticleController@wping');
Route::post('a_ping', 'ArticleController@a_ping');
Route::get('articleNew', 'ArticleController@articleNew');
Route::get('articleHot', 'ArticleController@articleHot');
Route::get('pinglun_article', 'ArticleController@pinglun_article');
Route::post('fenxiang', 'ArticleController@fenxiang');
//招聘
Route::get('program', 'ProgramController@program');
Route::get('etc', 'ProgramController@etc');
Route::get('noetc', 'ProgramController@noetc');
Route::get('all', 'ProgramController@all');
Route::get('etc_sel', 'ProgramController@etc_sel');//查看详情
Route::get('position', 'ProgramController@position');
//注册
//Route::post('register', 'CommonController@register');
Route::post('reg','LoginController@reg');
//手机短信验证
Route::get('xing','LoginController@xing');
//进入注册页面
Route::get('register','LoginController@register');
//发送回邮件
Route::get('send','LoginController@sendemail');
//登陆
Route::post('login', 'CommonController@login');
//公司试题
Route::get('company', 'CompanyController@index');
Route::get('college','CompanyController@college');
Route::get('college_x','CompanyController@college_x');
Route::post('college_exam','CompanyController@college_exam');
//简历显示
Route::get('jian/{j_id}','CompanyController@jian');

//简历采集word显示
Route::get('resume','CompanyController@resume');	


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
