<?php

// switch(式をいれる)  <-カッコの中に式を入れて使う

    // 変数$numを定義し、好きな数字を代入
    $num = 14;
  
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入
    $remainder = $num % 3;
 
    // switch文を用いてください
    switch($remainder) {
      case 0:
        echo '大吉です。';
        break;
       
      case 1:
        echo '中吉です。';
        break;
        
      case 2:
        echo '小吉です。';
        break;
        
      default:
        echo '凶です。';
        break;
    }



?>