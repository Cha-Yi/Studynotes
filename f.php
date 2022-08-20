<?php

    include_once ('form.html');
    $br = '<br/>' ;
    $nb = '&nbsp' ;
    $no_Id = '';
    $pwd = '';
    $n = 10;$m = 0;
/*
  //判断变量是否存在 且 变量是否有值为空
  if(isset($no_Id) & empty($no_Id) ){
      echo 'wei kong';
  }else{
      echo '不为空';
  }
  echo $br;
  echo date('y-m-d h:i:s') . $br;
  echo rand(0,100). $br;
  $pwd = '112,34,5678,90';//普通字符串
  $pwd1 = ['212121212121'];//普通一维数组
  $re = explode(',',$pwd);//将普通字符串拆分 （’拆分字符 ‘ ， 拆分字符串）
  print_r($re );echo $br;
  print_r($pwd1);echo $br;
  echo  implode($pwd1) . $br;//将普通一维数组转字符串
  $var = 'apple sang chen';
  echo ucwords($var) . $br;//将所有单词首字母大写
  $arr1 = ['22','33'=>['wee','rfv','lpo'],'2323'];
  $json = json_encode($arr1);
  echo $json . $br;
  $json1 =  json_decode($json,true);

---------------------------------
  echo($json1 ) .'AFHJV' .$br;
  print($json1 ) .'1111' .$br;
  echo  '232323dhs ds dsd s' . 122 . $br;
  print_r($json1 );echo $br;
  var_dump($json1 );

  echo $br.$br . $br.$br .$br.$br;

//    var_dump($_SERVER);//查看版本系统信息

-------------------------

  for ($i = 0 ; $i <= $n-1 ;$i++){
      $m = $i;
      echo  '第'.($i+1).'循环，值为'.$m .'共循环'.$n.'ci'.$br;
  }
  echo $br.$br . $br.$br .$br.$br;

  for ($i = 1 ; $i <= $n ;$i++){
      $m = $i;
      echo  '第'.($i+1).'循环，值为'.$m .'共循环'.$n.'ci'.$br;
  }
  echo $m;
-------------------------
  switch ($n){
     case 6;
     echo '当前循环值为6'.$br;
         break;
      case 9;
      echo '当前循环值为6-we we'.$br;
      break;
      case 10;
      echo '这里是10';
      break;
      default:
          echo '啥也不是';
  }
---------------------

    while ($m < $n){
       echo '循环化次数'.($m+1).'循环值为'.$m . $br;
        $m++;
    }
    echo $br;
++在前面与++在后面的区别 ++在前先自身加1再输出，++在后先输出再加1
echo  $n++ .$br;//10
echo  $n . $br;//11
echo  ++$n .$br;//12
*/

function sd ($a){
    echo $a;
}


/*99乘法表
分析 ：第1行的时候有1列 故第9行有9列  i行有 i 列
 for($i=1;$i<=9;$i++){
     for ($j=1;$j<=$i;$j++){
         echo  $j . 'x' . $i .'=' .$j*$i.'&nbsp;&nbsp;&nbsp;';
     }
     echo $br;
 }

for ($i=1,$j=1; $i <=9 ; $i++) {
    if ($i>$j) {
        $j++;
        $i=1;
        echo '<br>';
    }
    echo '<span style="border:1px solid red";>'.$i.'x'.$j.'='.$i*$j.'</span>';
}
echo $br;
function a($n=1,$j=1){
    if ($n<=9) {
        for ($i=1; $i<=$n; $i++) {
            echo $i.'x'.$j.'='.$i*$j.'&nbsp;&nbsp;&nbsp;';
        }
        echo '<br>';
        a($n+1,$j+1);
    }
}
a();
echo $br;

$i= 1;
while($i<=9){
    $j=1;
    while ($j<=$i){
        echo $j .'x'.$i.'='.$j*$i.'&nbsp;&nbsp;&nbsp;';
        $j++;
    }
    $i++;
    echo $br;
}
*/
    $Res=$_POST;
//    $GLOBALS['vvs'] = '1ew212';
//print_r ($GLOBALS);
//global 超全局变量
//echo $vvs;
//echo $GLOBALS['vvs'];

//函数外部访问函数内部
//函数内部访问函数外部
//global $a;
//$a = '我是全局部变量';
$GLOBALS['vvs'] = '我是超全局变量';

//function v( ){
//    $GLOBALS['vvs'] = '我是超全局变量213132';
//    $vm = '我是局部变量';
//    global $a;
//    global $br;
//    echo $a.$br;
//    echo $vm;
    $a = '我能修改全变量ee';
//}
//v();
//echo $a;


//$a = '我是全局变量';
//function E(){
//    $b = '我是局部变量';
//	echo '第一次输出结果是'.$a;
//	echo '<br/>';
//	echo '第二次输出结果是'.$b;
//
//}
//E();

$a = '我是全局变量';
function E(){
    global $a;
    $b = '我是局部变量';
    echo '第一次输出结果是'.$a;
    echo '<br/>';
    echo '第二次输出结果是'.$b;

}
E();

$a = 5;
$b = 10;
function v( ){
    $GLOBALS['res'] = $GLOBALS['a'] * $GLOBALS['b'];
}
v();
//echo $GLOBALS['res'].PHP_EOL;//PHP_EOL 类似于&nbsp
echo $GLOBALS['res']."\r\n";//PHP_EOL 类似于&nbsp
echo $res;
function myTest()
{
    static $x=0;
    echo $x;
    $x++;
    echo PHP_EOL;    // PHP_EOL换行符 类似于 \r\n 或 &nbsp
}

myTest();//0
myTest();//1
myTest();//2
//echo $GLOBALS['vvs'];
//echo $vm;
//print_r ($GLOBALS);

//echo $GLOBALS['vvs'];

//    if($Res){
//        var_dump($Res);
//    }
//include('form.html');
//echo  phpinfo(); 查看php版本信息
//phpinfo();

//global $qj;
//$qj= 'quan_juBL';
//function cs(){
//    echo  $qj;
//    $qj = '12121';
//}
//cs();
//
//echo  '他是'.$qj;


//global $name;
//
//$name = "why";
//
//function changeName(){
//
//    $name = "what";
//
//}
//
//changeName();
//
//echo "my name is " . $name ;


/**
 * 获取登录数据接口
 * @author qing.li
 * @date 2017-08-30
 */

namespace Api\Controller;

use Common\Controller\AppframeController;
use Think\Log;

class GetdataController extends AppframeController
{

    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        $list = I();
        if ($list['coid'] == 106) {
            $this->ajaxReturn(null, "该游戏渠道已关闭，请联系客服", 1001);
        }
        if (empty($list['appid'])) {
            $this->ajaxReturn(null, "4040", 1001);
        }
        $is_audit = M('game')->field('ids,id,is_audit')->where(array('id' => $list['appid']))->find();
        if ($is_audit['is_audit'] == 0) {
            diylogs('weishenhe', $list);
            $this->ajaxReturn(null, "此游戏未审核，请联系客服", 1001);
        }
        if (empty($list['coid'])) {
            $url_1 = "https://sdk.chuangyouhy.com/api/User/login";
            // //设置post数据
            $post_data = array(
                "username" => $list['username'],
                "mobile" => $list['mobile'],
                "password" => $list['password'],
                "appid" => $list['appid'],
                "channel" => $list['channel'],
                "system" => $list['system'],
                "type" => $list['type'],
                "machine_code" => $list['machine_code'],
                "sign" => $list['sign']
            );
            $data_list = reqCurl($url_1, 'post', $post_data);
            //查封账号的错误状态码为1004以及msg携带提示信息
            $data_info = json_decode($data_list, true);
            if ($data_info['data'] == null) {
                $this->ajaxReturn(null, $data_info['msg'], $data_info['status']);
                exit();
            }
            if ($data_info['data']) {
                $this->write_log($data_list);
                $this->ajaxReturn($data_info['data'], $data_info['msg'], $data_info['status']);
                 }elseif($data_info['status']==1004){
            $this->ajaxReturn(null, $data_info['msg'], 5);
        }else{
            $this->ajaxReturn(null, '账号或密码错误', 5);
        }
    }else{
    $url="http://fenfa.chuangyouhy.com/getdomain.php?tui_id=".$list['coid'];
    $result = file_get_contents($url);
    $data=json_decode($result,true);
    if(empty($data['url'])){
    $this->ajaxReturn('','渠道错误！');exit();
    }else{
        $url_1 = $data['url'].'/api/User/login';
    }
    }
    $post_data = array(
        "username" => $list['username'],
        "mobile" => $list['mobile'],
        "password" => $list['password'],
        "appid" => $list['appid'],
        "channel" => $list['channel'],
        "system" => $list['system'],
        "type" => $list['type'],
        "machine_code" =>  $list['machine_code'],
        "sign" => $list['sign']
    );
    $data_list = reqCurl($url_1,'post',$post_data);
    $data_info = json_decode($data_list,true);
    if($data_info['data']){
        $this->write_log($data_list);
        $this->ajaxReturn($data_info['data'],$data_info['msg'],$data_info['status']);
    }else{
        $this->ajaxReturn(null,"登录失败",3);
    }
    }
    //log日志
    public function write_log($log)
    {
        $years = date('Y-m');
        //设置路径目录信息
        $url = C('LOGPATH').'h5sdk/'.$years.'/'.date('Ymd').'_log.txt';
        $dir_name=dirname($url);
        //目录不存在就创建
        if(!file_exists($dir_name))
        {
            //iconv防止中文名乱码
            $res = mkdir(iconv("UTF-8", "GBK", $dir_name),0777,true);
        }
        $fp = fopen($url,"a");//打开文件资源通道 不存在则自动创建
        fwrite($fp,date("Y-m-d H:i:s")."\r\n".var_export($log,true)."\r\n \r\n \r\n ");//写入文件
        fclose($fp);//关闭资源通道