<?php

header("Content-type:text/html;charset=utf-8");

// echo 'absssksksk';

// include "views/dashboard/index.html";

// include "views/dashboard/login.html";

// include "views/teacher/list.html";






// 改进

// var_dump($_SERVER);

// $path = $_SERVER["PATH_INFO"];

// // include 'views'.$path.'.html';
// $path = substr($path,1);
// include $path.'.html';//没有加views前面会多一个/符号，所以要截取字符串






// 让访问更加灵活
$path = '';
//如果访问的网址是study.com/index.php的话，则$_SERVER中的PATH_INFO是不存在的，因此需要判断一下
if(array_key_exists('PATH_INFO',$_SERVER)){
    $path = $_SERVER["PATH_INFO"];

    $path = substr($path,1);

    // 把字符串转成数组，判断一下
    $arr = explode('/',$path);//截取字符串
    if(count($arr)==2){//count截取字符串
        $path = 'views/'.$arr[0].'/'.$arr[1];
    }else if(count($arr)==1){
        $path = 'views/dashboard/'.$arr[0];
    }
}else {
        $path = 'views/dashboard/index';
    }

    include  $path.'.html';












?>