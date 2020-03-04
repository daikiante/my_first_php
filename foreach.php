<?php

// foreach(配列 as 変数名) {
//   繰り返したい処理;
// }

// もしくは

// foreach(配列 as キー変数 => 変数名) {
//   繰り返したい処理;
// }

$scores = array('数学' => 70, '英語' => 90, '国語' => 80);

foreach($scores as $key => $value) {
    echo $key.'は'.$value.'点です。';
  }


?>