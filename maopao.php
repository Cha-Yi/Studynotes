<?php
//口诀：外层循环-1；内层循环n-1-i；两者相比较小靠前（正序）两者相比大靠前（倒序）i外层循环 j内层循环
//冒泡排序是最简单的一个排序算法 ，就是将 前一个值与后一个值进行比较 在内层循环比较
//$arr = [23,11,53,13,3,8];  最终要求的排序完的结果就是 $arr= [3,8,11,13,23,53];
//                          [23,11,53,13,3,8];
//执行操作 1； 当i=0;将11与23 进行比较  [11,23,53,13,3,8]; j=n-i-1 = 5
//              当j=0时，内层循环23与11比较 [11,23,53,13,3,8]
//              当j=1时，内层循环23与53比较 [11,23,53,3,8,11]
//              当j=2时，内层循环53与3比较 [11,23,3,53,8,11]
//              当j=3时，内层循环53与8比较 [11,23,3,8,53,11]
//              当j=4时，内层循环53与11比较 [11,23,3,8,11,53]
///                         [11,23,3,8,11,53]
//执行操作 2； 当i=1;将23与3 进行比较  [11,3,23,8,11,53]; j=n-i-1 = 4
//              当j=0时，内层循环3与11比较 [3,11,23,8,11,53]
//              当j=1时，内层循环23与11比较 [3,11,23,8,11,53]
//              当j=2时，内层循环8与23比较 [11,3,8,23,11,53]
//              当j=3时，内层循环11与23比较 [11,3,8,11,23,53]


    //@param1 要冒泡的数组
    //@param2 排序方式 默认true（正序）
//  &引用传值 当我们不需要保留原来的变量只需要新的变量时，往往可以采用引用传值的方式
        function demo(array &$array,$type = true)
        {
            static $mun = 1;
            $len = count($array);//统计数组里元素的个数
            for ($i = 0; $i < $len - 1; $i++) {
                for ($j = 0; $j < $len - $i - 1; $j++) {
                    if ($type) {
                        if ($array[$j] > $array[$j + 1]) {
                            $temp = $array[$j];
                            $array[$j] = $array[$j + 1];
                            $array[$j + 1] = $temp;
                        }
                    } else {
                        if ($array[$j] < $array[$j + 1]) {
                            $temp = $array[$j];
                            $array[$j] = $array[$j + 1];
                            $array[$j + 1] = $temp;
                        }
                    }
                }
            }
        return array('mun'=>$mun,'data'=>$array) ;
        }
    $arr = array(23,11,53,13,3,8);
   $rees = demo($arr);
   $rees1 = demo($arr,false);
//    print_r($rees);
    echo PHP_EOL;
//    print_r($rees1);
//二维数组的冒泡排序
    //@param $arr 指定数组
    //@param $type 默认排序true 升序
    //@param $key 指定子段排序 默认不是
function demo2(array $arr,$type = true,$key = null){
    static $num = 1;
    $tem = '';
    $len = count($arr);
    if(!empty($key)){
        for ($i = 0;$i < $len - 1;$i++){
            for ($j = 0;$j < $len - $i -1;$j++){
                if($type){
                    if($arr[$j][$key] > $arr[$j + 1][$key]){
                        $tem = $arr[$j][$key];
                        $arr[$j][$key] = $arr[$j + 1][$key];
                        $arr[$j + 1][$key] = $tem;
                    }
                }else{
                    if($arr[$j][$key] < $arr[$j + 1][$key]){
                        $tem = $arr[$j][$key];
                        $arr[$j][$key] = $arr[$j + 1][$key];
                        $arr[$j + 1][$key] = $tem;
                    }
                }
            }

        }
    }else{
        demo($arr);
    }
    return array($num++,$arr);
}
$array = [
  ['name' => 'esa','age' => '12'],
  ['name' => 'dsa1','age' => '2'],
  ['name' => 'fs1a','age' => '123'],
  ['name' => 'cs1a3','age' => '32'],
  ['name' => 'ns23a','age' => '72'],
  ['name' => 'zsa33','age' => '12']
];
/*$res = demo2($array,true,'age');
$res1 = demo2($arr);
print_r($res);
echo PHP_EOL;
print_r($res1);
$res = demo2($array,false,'age');
$res1 = demo2($arr,false);
print_r($res);
echo PHP_EOL;
print_r($res1);
$at = '';
//echo !empty($at);
*/


$arr_c = [3,6,7,4,2,13,12];
function mp($array){
    $count = count($array);
    if ($count<=1) {
        return false;
    }
    for($i = 0;$i<$count;$i++){
        for ($j=$count-1; $j>$i; $j--) {
            if ($array[$j]<$array[$j-1]) {
                $cv = $array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1] = $cv;

            }
        }
    }
    return $array;
}
//$app = mp($arr_c);
//print_r($app);


//如果 不适用第三方变量
$a = 1;
$b = 2;
$a += $b;//$a = 3
$b = $a-$b;//$b = 3-2 =1
$a = $a-$b;//$a =3-1 =2

//str_replace();字符串替换
$a = 'a';
$b = 'b';
$a .= $b;//$a = 'ab'
$b = str_replace($b,'',$a);
//echo $b;//a
$a = str_replace($b,'',$a);
//echo $a;//b


$find = array("Hello","world");print_r( $find);
$replace = array("B"); print_r( $replace);
$arr = array("Hello","world","!");print_r( $arr);
print_r(str_replace($find,$replace,$arr));