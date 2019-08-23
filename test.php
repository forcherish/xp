<?php

$arr = array(23,43,12,23,34,545,5665);

// for($i=0;$i<sizeof($arr);$i++) {
//     echo "第".$i."个元素：".$arr[$i];
//     echo "<br>";
// }

//键

// $arr = [
//     'first'=>"第一个元素",
//     'second' => "第二个元素",
//     'third' => "第三个元素"
// ];

// foreach($arr as $key => $value) {
//     echo "第".$key."个元素：".$value;
//      echo "<br>";
// } 

$usr = $_GET['username'];
$pas = $_GET['password'];

echo "$usr<br>$pas";